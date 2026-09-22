<?php

namespace App\Console\Commands;

use App\Http\Controllers\SitemapController;
use Illuminate\Console\Command;

/**
 * The sitemap cache clears itself whenever a course, collection or blog is
 * saved through the CMS. This command covers the case it cannot see: rows
 * changed directly in the database, or a config/sitemap.php edit on a server
 * with a cached config.
 */
class SitemapRefresh extends Command
{
    protected $signature = 'sitemap:refresh';

    protected $description = 'Clear the cached sitemap so it is rebuilt from the database on the next request';

    public function handle(): int
    {
        SitemapController::flushCache();

        $this->info('Sitemap cache cleared. ' . rtrim(config('sitemap.base_url'), '/') . '/sitemap.xml will rebuild on the next request.');

        return self::SUCCESS;
    }
}
