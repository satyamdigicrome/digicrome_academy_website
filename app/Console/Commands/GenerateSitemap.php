<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog; // if you have a Blog model
use App\Models\Course;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate dynamic sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about'))
            ->add(Url::create('/contact'))
            ->add(Url::create('/blog'))
            ->add(Url::create('/career'))
            ->add(Url::create('/corporate_services'))
            ->add(Url::create('/payments'))
            ->add(Url::create('/refer_and_earn'))
            ->add(Url::create('/who_we_are'))
            ->add(Url::create('/success_stories'))
            ->add(Url::create('/media_presence'));
        // Add dynamic blog pages
        foreach (Blog::where('status', 'published')->get() as $blog) {
            $sitemap->add(Url::create("/blogs/{$blog->slug}"));
        }

        // Add dynamic courses
        foreach (Course::where('status', 'published')->get() as $course) {
            $sitemap->add(Url::create("/courses/{$course->slug}"));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully.');
    }
}
