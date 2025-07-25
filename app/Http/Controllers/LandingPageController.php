<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Logo;
use Illuminate\Support\Facades\Cache;


class LandingPageController extends Controller
{
    public function index()
{
    // Fetch the course where course_free == 2
    $course = Course::with([
        'keypoints:id,course_id,name',
        'aparts:id,course_id,image,heading,tagline,paragraph',
        'faqs:id,course_id,question,answer',
        'extraPartOne:id,course_id,heading',
        'extraPartTwo:id,course_id,heading',
        'projects:id,course_id,heading,paragraph',
        'caseStudies:id,course_id,heading,paragraph',
        'keyFeatures:id,course_id,heading,paragraph,image',
        'modules:id,course_id,question,answer',
    ])
    ->select('id', 'name', 'slug', 'sku', 'course_online_payment', 'description', 'browser', 'meta_title', 'meta_description', 'meta_keywords', 'image','banner_image', 'tag_line','about','course_free','us_price','dubai_price','price')
    ->where('course_free', 2)
    ->first(); 
     $companyLogos = Cache::remember('company_logos', 60, function () {
        return Logo::where('type', 'companies')->get(['id', 'image']);
    });

    // You can also load other data if needed, like testimonials, logos, etc.

    return view('landing.index', compact('course','companyLogos'));
}


}
