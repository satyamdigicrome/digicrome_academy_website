<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        $collections = Collection::all();

        foreach ($collections as $collection) {
            for ($i = 1; $i <= 3; $i++) {
                Course::create([
                    'collection_id' => $collection->id,
                    'name' => $collection->name . " Course $i",
                    'sku' => 'SKU-' . Str::random(5),
                    'tag_line' => 'Learn something awesome!',
                    'corporate' => 'Yes',
                    'description' => 'This is a sample course under ' . $collection->name,
                    'key1' => 'Key Point 1',
                    'key2' => 'Key Point 2',
                    'key3' => 'Key Point 3',
                    'course_free' => false,
                    'course_upcoming' => false,
                    'course_online_payment' => true,
                    'course_duration' => '3 weeks',
                    'price' => 999,
                    'dubai_price' => 1099,
                    'us_price' => 1199,
                    'discount' => 100,
                    'meta_title' => 'Meta Title',
                    'meta_keywords' => 'course, sample',
                    'meta_description' => 'Sample description for SEO.',
                    'has_faqs' => true,
                    'status' => 1,
                    'user_id' => 1,
                ]);
            }
        }
    }
}
