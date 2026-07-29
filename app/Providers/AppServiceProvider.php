<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Collection;
use App\Models\Course;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // This composer fires once per rendered view (layout + every partial and
        // component), so the lookups are resolved once per request and reused.
        $shared = null;

        View::composer('*', function ($view) use (&$shared) {
            if ($shared === null) {
                $shared = [
                    'header_collections' => Collection::where('status', 1)
                        ->orderBy('position')
                        ->get(['id', 'name', 'slug']),
                    'header_courses' => Course::whereIn('id', [1, 3, 55, 61, 85])
                        ->get(['id', 'name', 'slug', 'image', 'course_duration'])
                        ->keyBy('id'),
                ];
            }

            $view->with($shared);
        });
    }
}
