<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Collection;
use App\Models\Course;
use Carbon\CarbonInterface;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

/**
 * Builds the XML sitemap straight from the database on request.
 *
 * /sitemap.xml is a sitemap index pointing at three section sitemaps, so
 * Search Console reports coverage per section and no single file has to grow
 * past the 50,000-URL limit. Output is cached; AppServiceProvider flushes that
 * cache whenever a course, collection or blog changes, so a newly published
 * post appears in the sitemap on the very next request.
 */
class SitemapController extends Controller
{
    /**
     * Cache keys for every rendered document, also used by the cache-flushing
     * model listeners in AppServiceProvider and by "artisan sitemap:refresh".
     */
    public const CACHE_KEYS = [
        'sitemap:index',
        'sitemap:pages',
        'sitemap:courses',
        'sitemap:blogs',
    ];

    /** The sitemap index at /sitemap.xml. */
    public function index(): Response
    {
        return $this->render('sitemap:index', function () {
            $sections = [
                '/sitemap-pages.xml' => $this->latestOf(
                    Course::query()->where('status', 1),
                    Blog::query()->where('status', 'published')
                ),
                '/sitemap-courses.xml' => $this->latestOf(
                    Course::query()->where('status', 1),
                    Collection::query()->where('status', 1)
                ),
                '/sitemap-blogs.xml' => $this->latestOf(
                    Blog::query()->where('status', 'published')
                ),
            ];

            $body = '';

            foreach ($sections as $path => $lastmod) {
                $body .= '  <sitemap><loc>' . $this->escape($this->absolute($path)) . '</loc>'
                    . $this->lastmodTag($lastmod)
                    . '</sitemap>' . PHP_EOL;
            }

            return '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL
                . '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL
                . $body
                . '</sitemapindex>' . PHP_EOL;
        });
    }

    /** Static, non-database pages listed in config/sitemap.php. */
    public function pages(): Response
    {
        return $this->render('sitemap:pages', function () {
            $latestCourse = $this->latestOf(Course::query()->where('status', 1));
            $latestBlog = $this->latestOf(Blog::query()->where('status', 'published'));

            // Only pages whose content is driven by a table can claim a
            // lastmod; for the rest the tag is omitted rather than faked,
            // since an invented date is worse for crawlers than none at all.
            $derivedLastmod = [
                '/' => $this->newest([$latestCourse, $latestBlog]),
                '/courses' => $latestCourse,
                '/blog' => $latestBlog,
            ];

            $urls = [];

            foreach (config('sitemap.static_pages', []) as $path => $settings) {
                $urls[] = $this->urlTag(
                    $path,
                    $derivedLastmod[$path] ?? null,
                    $settings['changefreq'] ?? null,
                    $settings['priority'] ?? null
                );
            }

            return $this->urlset($urls);
        });
    }

    /** Course category listings plus every published course detail page. */
    public function courses(): Response
    {
        return $this->render('sitemap:courses', function () {
            $categorySettings = config('sitemap.course_category', []);
            $courseSettings = config('sitemap.course', []);
            $urls = [];

            // A category page changes when the category itself is edited and
            // when any course inside it moves, so take whichever is newer.
            $categories = Collection::query()
                ->where('status', 1)
                ->whereNotNull('slug')
                ->where('slug', '!=', '')
                ->withMax(
                    ['courses as courses_max_updated_at' => fn ($query) => $query->where('status', 1)],
                    'updated_at'
                )
                ->orderByDesc('updated_at')
                ->get(['id', 'slug', 'updated_at']);

            foreach ($categories as $category) {
                $urls[] = $this->urlTag(
                    '/our-courses/' . $this->encodeSlug($category->slug),
                    $this->newest([$category->updated_at, $category->courses_max_updated_at]),
                    $categorySettings['changefreq'] ?? null,
                    $categorySettings['priority'] ?? null
                );
            }

            $courses = Course::query()
                ->where('status', 1)
                ->whereNotNull('slug')
                ->where('slug', '!=', '')
                ->orderByDesc('updated_at')
                ->get(['id', 'slug', 'updated_at']);

            foreach ($courses as $course) {
                $urls[] = $this->urlTag(
                    '/courses/' . $this->encodeSlug($course->slug),
                    $course->updated_at,
                    $courseSettings['changefreq'] ?? null,
                    $courseSettings['priority'] ?? null
                );
            }

            return $this->urlset($urls);
        });
    }

    /** Every published blog post. */
    public function blogs(): Response
    {
        return $this->render('sitemap:blogs', function () {
            $settings = config('sitemap.blog', []);

            $urls = Blog::query()
                ->where('status', 'published')
                ->whereNotNull('slug')
                ->where('slug', '!=', '')
                ->orderByDesc('updated_at')
                ->get(['id', 'slug', 'updated_at'])
                ->map(fn (Blog $blog) => $this->urlTag(
                    '/blog/' . $this->encodeSlug($blog->slug),
                    $blog->updated_at,
                    $settings['changefreq'] ?? null,
                    $settings['priority'] ?? null
                ))
                ->all();

            return $this->urlset($urls);
        });
    }

    /**
     * Drop every cached sitemap document. Called from the model listeners in
     * AppServiceProvider and from "php artisan sitemap:refresh".
     */
    public static function flushCache(): void
    {
        foreach (self::CACHE_KEYS as $key) {
            Cache::forget($key);
        }
    }

    /** Cache the built document and return it as an XML response. */
    protected function render(string $cacheKey, callable $build): Response
    {
        $ttl = (int) config('sitemap.cache_ttl', 0);

        $xml = $ttl > 0
            ? Cache::remember($cacheKey, $ttl, $build)
            : $build();

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /** Wrap pre-rendered <url> entries in a urlset document. */
    protected function urlset(array $urls): string
    {
        return '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL
            . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL
            . implode('', $urls)
            . '</urlset>' . PHP_EOL;
    }

    protected function urlTag(string $path, ?CarbonInterface $lastmod, ?string $changefreq, float|int|null $priority): string
    {
        $tag = '  <url><loc>' . $this->escape($this->absolute($path)) . '</loc>'
            . $this->lastmodTag($lastmod);

        if ($changefreq !== null) {
            $tag .= '<changefreq>' . $changefreq . '</changefreq>';
        }

        if ($priority !== null) {
            $tag .= '<priority>' . number_format((float) $priority, 1) . '</priority>';
        }

        return $tag . '</url>' . PHP_EOL;
    }

    protected function lastmodTag(?CarbonInterface $lastmod): string
    {
        return $lastmod ? '<lastmod>' . $lastmod->toAtomString() . '</lastmod>' : '';
    }

    protected function absolute(string $path): string
    {
        return rtrim(config('sitemap.base_url'), '/') . '/' . ltrim($path, '/');
    }

    /**
     * Percent-encode anything a slug should not carry literally in a URL — a
     * stray space from a hand-typed slug, for example. Ordinary slug
     * characters pass through untouched.
     */
    protected function encodeSlug(string $slug): string
    {
        return implode('/', array_map('rawurlencode', explode('/', trim($slug, '/'))));
    }

    protected function escape(string $value): string
    {
        return htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    }

    /** The newest updated_at across the given query builders. */
    protected function latestOf(...$queries): ?CarbonInterface
    {
        return $this->newest(array_map(fn ($query) => $query->max('updated_at'), $queries));
    }

    /**
     * The latest of a mixed set of dates, nulls and raw datetime strings —
     * aggregates such as max() come back from the driver as strings.
     */
    protected function newest(array $dates): ?CarbonInterface
    {
        $newest = null;

        foreach ($dates as $date) {
            if (blank($date)) {
                continue;
            }

            $date = $date instanceof CarbonInterface ? $date : Carbon::parse($date);

            if ($newest === null || $date->greaterThan($newest)) {
                $newest = $date;
            }
        }

        return $newest;
    }
}
