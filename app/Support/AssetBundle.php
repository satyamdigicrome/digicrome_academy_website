<?php

namespace App\Support;

/**
 * Concatenates a list of stylesheets or scripts into a single file.
 *
 * The head used to emit nine separate <link> tags and the footer fifteen
 * <script> tags, each one a round trip. Serving each group as one file collapses
 * that to a single request per group.
 *
 * The bundle is written into the same directory as its sources, so the relative
 * url(...) references inside them (fonts/, ../images/) keep resolving without
 * any rewriting. Its filename carries a hash of the sources' paths, sizes and
 * modification times, which means editing any source stylesheet produces a new
 * filename on the next request: the bundle can never go stale, and the URL is
 * safe to cache forever.
 */
class AssetBundle
{
    /** Where generated bundles live, relative to public/, per asset kind. */
    private const OUTPUT_DIR = [
        'css' => 'assets/css',
        'js' => 'assets/js',
    ];

    private const PREFIX = 'bundle-';

    /**
     * Bundles this request has produced or reused, keyed by directory.
     *
     * Pruning has to know about every bundle still in play, not just the one it
     * happens to be writing: the head builds two bundles (critical and
     * deferred) into the same directory, and pruning on the second would
     * otherwise delete the first out from under a browser that is still
     * fetching it.
     *
     * @var array<string, array<string, true>>
     */
    private static array $live = [];

    /**
     * Build (or reuse) a bundle for the given public-relative stylesheet paths.
     *
     * Returns the public-relative path of the bundle, or null when it could not
     * be produced — a read-only deploy, a missing source file. Callers are
     * expected to fall back to linking the sources individually so a failure
     * here costs speed, never correctness.
     */
    public static function css(array $sources): ?string
    {
        return self::build('css', $sources);
    }

    /**
     * Build (or reuse) a bundle for the given public-relative script paths.
     *
     * Same contract as css(): the concatenation preserves source order, so the
     * dependency chain (jQuery before its plugins) still holds, and a null
     * return means the caller should emit the individual <script> tags.
     */
    public static function js(array $sources): ?string
    {
        return self::build('js', $sources);
    }

    private static function build(string $kind, array $sources): ?string
    {
        $files = [];
        $signature = [];

        foreach ($sources as $source) {
            $path = public_path($source);
            if (! is_file($path)) {
                return null;
            }
            $files[] = $path;
            $signature[] = $source . ':' . filesize($path) . ':' . filemtime($path);
        }

        if (! $files) {
            return null;
        }

        $hash = substr(md5(implode('|', $signature)), 0, 12);
        $name = self::PREFIX . $hash . '.' . $kind;
        $relative = self::OUTPUT_DIR[$kind] . '/' . $name;
        $target = public_path($relative);

        self::$live[dirname($target)][$name] = true;

        if (is_file($target)) {
            // Keep the mtime moving so a bundle that is still linked from live
            // pages is never mistaken for an abandoned build (see prune()).
            @touch($target);

            return $relative;
        }

        $contents = '';
        foreach ($files as $index => $path) {
            $source = @file_get_contents($path);
            if ($source === false) {
                return null;
            }

            if ($kind === 'css') {
                // @charset is only legal as the very first thing in a stylesheet;
                // any copy carried in from a source file would be ignored anyway
                // and some parsers treat it as an error mid-file.
                $source = preg_replace('/^@charset\s+"[^"]*"\s*;\s*/i', '', $source);
                $contents .= '/* ' . $sources[$index] . " */\n" . rtrim($source) . "\n";

                continue;
            }

            // A file ending in a line comment, or one without a trailing
            // semicolon, would otherwise swallow or run into the next file.
            $contents .= '/* ' . $sources[$index] . " */\n" . rtrim($source) . "\n;\n";
        }

        return self::write($target, $contents) ? $relative : null;
    }

    /**
     * Write the bundle atomically and drop any bundles left by earlier builds.
     */
    private static function write(string $target, string $contents): bool
    {
        $dir = dirname($target);
        if (! is_dir($dir) || ! is_writable($dir)) {
            return false;
        }

        // Write to a unique temp name then rename, so a request that arrives
        // mid-write never reads a half-built stylesheet.
        $temp = $target . '.' . getmypid() . '.tmp';
        if (@file_put_contents($temp, $contents) === false) {
            @unlink($temp);
            return false;
        }

        if (! @rename($temp, $target)) {
            @unlink($temp);
            return false;
        }

        self::prune($dir);

        return true;
    }

    /**
     * Remove superseded bundles so the directory does not grow with every edit.
     *
     * A bundle is only removed once it is both absent from this request's set of
     * live bundles and untouched for an hour. Deleting purely on "not the file I
     * just wrote" would break pages already served with the previous URL —
     * including the sibling bundle built moments earlier in this same request.
     */
    private static function prune(string $dir): void
    {
        $live = self::$live[$dir] ?? [];
        $cutoff = time() - 3600;

        foreach (glob($dir . DIRECTORY_SEPARATOR . self::PREFIX . '*.{css,js}', GLOB_BRACE) ?: [] as $old) {
            if (isset($live[basename($old)])) {
                continue;
            }
            if (@filemtime($old) > $cutoff) {
                continue;
            }
            @unlink($old);
        }
    }
}
