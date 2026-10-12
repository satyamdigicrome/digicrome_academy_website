<?php

namespace App\Support;

use Illuminate\Support\Carbon;

/**
 * Works out which festive phase (config/festive.php) is live right now.
 *
 * Phases are matched on the calendar date in the app timezone, both ends
 * inclusive, so the theme appears at midnight on the first day and is gone the
 * morning after the last one without anyone having to deploy.
 */
class FestiveSeason
{
    /** Resolved once per request; every view that asks gets the same answer. */
    private static ?array $current = null;

    private static bool $resolved = false;

    /**
     * The active phase's settings plus its 'key', or null when no festival is on.
     */
    public static function current(): ?array
    {
        if (!self::$resolved) {
            self::$current = self::resolve();
            self::$resolved = true;
        }

        return self::$current;
    }

    private static function resolve(): ?array
    {
        if (!config('festive.enabled')) {
            return null;
        }

        $phases = config('festive.phases', []);

        // ?festive=<phase> previews a phase outside its dates, ?festive=off hides it.
        $preview = request()->query('festive');
        if (is_string($preview)) {
            if ($preview === 'off') {
                return null;
            }
            if (isset($phases[$preview])) {
                return ['key' => $preview] + $phases[$preview];
            }
        }

        $today = Carbon::today()->toDateString();

        foreach ($phases as $key => $phase) {
            if ($today >= $phase['starts'] && $today <= $phase['ends']) {
                return ['key' => $key] + $phase;
            }
        }

        return null;
    }
}
