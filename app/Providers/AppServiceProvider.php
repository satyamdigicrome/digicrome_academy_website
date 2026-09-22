<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SitemapController;
use App\Models\Blog;
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
        $this->keepSitemapFresh();

        // This composer fires once per rendered view (layout + every partial and
        // component), so the lookups are resolved once per request and reused.
        $shared = null;

        View::composer('*', function ($view) use (&$shared) {
            if ($shared === null) {
                $courseIds = [1, 55, 85, 86, 3];
                $shared = [
                    'header_collections' => Collection::where('status', 1)
                        ->orderBy('position')
                        ->get(['id', 'name', 'slug']),
                    'header_courses' => Course::whereIn('id', $courseIds)
                        ->orderByRaw('FIELD(id, ' . implode(',', $courseIds) . ')')
                        ->get(['id', 'name', 'slug', 'image', 'course_duration'])
                        ->keyBy('id'),
                ];
            }

            $view->with($shared);
        });
    }

    /**
     * Drop the cached sitemap whenever content that appears in it changes, so
     * publishing a course or post puts it in /sitemap.xml immediately instead
     * of when the cache happens to expire.
     */
    protected function keepSitemapFresh(): void
    {
        $flush = static fn () => SitemapController::flushCache();

        foreach ([Course::class, Collection::class] as $model) {
            $model::saved($flush);
            $model::deleted($flush);
            $model::restored($flush);
        }

        Blog::saved($flush);
        Blog::deleted($flush);
    }
}
