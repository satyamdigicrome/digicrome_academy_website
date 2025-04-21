<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CollectionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('collections')->insert([
            [
                'name' => 'Web Development',
                'tag_line' => 'Learn to build modern websites',
                'description' => 'Complete guide to web development with HTML, CSS, JS, and Laravel.',
                'meta_description' => 'Web Development Course',
                'meta_keywords' => 'web, development, laravel, html, css',
                'meta_title' => 'Web Development Course',
                'position' => 1,
                'us_position' => 1,
                'status' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Mobile App Development',
                'tag_line' => 'Create Android & iOS apps',
                'description' => 'Learn how to build mobile apps using Flutter and React Native.',
                'meta_description' => 'Mobile Development',
                'meta_keywords' => 'mobile, flutter, react native',
                'meta_title' => 'Mobile App Course',
                'position' => 2,
                'us_position' => 2,
                'status' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Data Science',
                'tag_line' => 'Master data analysis and AI',
                'description' => 'Explore machine learning, AI, and big data tools.',
                'meta_description' => 'Data Science Course',
                'meta_keywords' => 'data, science, machine learning, AI',
                'meta_title' => 'Data Science',
                'position' => 3,
                'us_position' => 3,
                'status' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Graphic Design',
                'tag_line' => 'Unleash your creativity',
                'description' => 'Learn Photoshop, Illustrator, and UI/UX design.',
                'meta_description' => 'Design Course',
                'meta_keywords' => 'graphic, design, UI, UX',
                'meta_title' => 'Graphic Design Course',
                'position' => 4,
                'us_position' => 4,
                'status' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
