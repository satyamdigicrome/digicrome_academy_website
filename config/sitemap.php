<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Canonical Base URL
    |--------------------------------------------------------------------------
    |
    | Every <loc> in the sitemap is built from this value. It is deliberately
    | not APP_URL: APP_URL is "http://localhost" in local environments, while
    | a sitemap must always advertise the exact host search engines index —
    | https + www, matching the redirects in the root .htaccess.
    |
    */

    'base_url' => env('SITEMAP_BASE_URL', 'https://www.digicrome.com'),

    /*
    |--------------------------------------------------------------------------
    | Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | How long a rendered sitemap is cached, in seconds. The cache is flushed
    | automatically whenever a course, collection or blog is saved, deleted or
    | restored (see AppServiceProvider), so this TTL only matters for rows
    | changed outside the application — a direct SQL edit, for instance.
    | Run `php artisan sitemap:refresh` to clear it by hand.
    |
    | Set to 0 to disable caching and rebuild on every request.
    |
    */

    'cache_ttl' => (int) env('SITEMAP_CACHE_TTL', 21600), // 6 hours

    /*
    |--------------------------------------------------------------------------
    | Static Pages
    |--------------------------------------------------------------------------
    |
    | Pages that are not backed by a database row, keyed by path. Add a page
    | here and it appears in /sitemap-pages.xml on the next request — no code
    | change needed.
    |
    | Intentionally excluded, because they should not be indexed: /thankyou,
    | /thank-you, /online-payment, /search-courses, the /DS_and_AI,
    | /data-science and /investment-banking-course campaign landing pages, and
    | everything behind auth. /media-presence is a live public page that the
    | previous sitemap never listed — add it below if you want it indexed.
    |
    */

    'static_pages' => [
        '/'                     => ['priority' => 1.0, 'changefreq' => 'daily'],
        '/courses'              => ['priority' => 0.9, 'changefreq' => 'daily'],
        '/about-us'             => ['priority' => 0.8, 'changefreq' => 'monthly'],
        '/blog'                 => ['priority' => 0.8, 'changefreq' => 'daily'],
        '/who-we-are'           => ['priority' => 0.7, 'changefreq' => 'monthly'],
        '/contact-us'           => ['priority' => 0.7, 'changefreq' => 'monthly'],
        '/career'               => ['priority' => 0.6, 'changefreq' => 'weekly'],
        '/corporate-services'   => ['priority' => 0.6, 'changefreq' => 'monthly'],
        '/success-stories'      => ['priority' => 0.6, 'changefreq' => 'weekly'],
        '/refer-and-earn'       => ['priority' => 0.6, 'changefreq' => 'monthly'],
        '/terms-and-conditions' => ['priority' => 0.3, 'changefreq' => 'yearly'],
        '/privacy-policy'       => ['priority' => 0.3, 'changefreq' => 'yearly'],
        '/disclaimer'           => ['priority' => 0.3, 'changefreq' => 'yearly'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Database-Driven Sections
    |--------------------------------------------------------------------------
    |
    | Priority and change frequency applied to every URL generated from a
    | table. These mirror the values the old generated sitemap.xml used.
    |
    */

    'course_category' => ['priority' => 0.7, 'changefreq' => 'weekly'],
    'course'          => ['priority' => 0.7, 'changefreq' => 'weekly'],
    'blog'            => ['priority' => 0.6, 'changefreq' => 'monthly'],

];
