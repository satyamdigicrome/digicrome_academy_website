<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class LandingControler extends Controller
{
    public function landing()
    {

        return redirect()->away('https://landing.digicrome.com/DS_and_AI');
    }

    public function data_science()
{
    $course = Course::with([
        'keypoints:id,course_id,name',
        'modules:id,course_id,question,answer',
    ])
    ->select(
        'id',
        'name',
        'slug',
        'sku',
        'course_online_payment',
        'description',
        'browser',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',
        'banner_image',
        'tag_line',
        'about',
        'course_free',
        'us_price',
        'dubai_price',
        'price'
    )
    ->where('course_free', 1)
    ->first();

    return view('landing.data_science', compact('course')); // ✅ Fixed comma here
}

}
