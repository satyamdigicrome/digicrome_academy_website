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
        View::composer('*', function ($view) {
            $collections = Collection::where('status', 1)->orderBy('position')->get();
    
            // Add only the specific course IDs you want to preload
            $collections = Collection::where('status', 1)->orderBy('position')->get();
            $header_courses = Course::whereIn('id', [1, 3, 55, 61])->get()->keyBy('id');

            $view->with([
                'header_collections' => $collections,
                'header_courses' => $header_courses,
            ]);
        });
    }
}
