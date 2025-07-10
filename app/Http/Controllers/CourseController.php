<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Course;
use App\Models\Placement;
use App\Models\Logo;
use App\Models\Testimonial;
use App\Models\Mentor;
use App\Models\Metatag;


use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    public function index(Request $request)
{
    $name = $request->name;
    $meta = Metatag::where('page_name', 'Course')->first();

    if ($request->filled('ids')) {
        $ids = explode(',', $request->ids);
        $courses = Course::whereIn('id', $ids)
                         ->where('status', 1)
                         ->get();
    } else {
        $courses = Course::where('status', 1)->get(); // Only active courses
    }

    return view('pages.course', compact('courses', 'meta', 'name'));
}


    


    public function course_details($slug)
{
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
    ->select('id', 'name', 'slug', 'sku', 'course_online_payment', 'description', 'browser', 'meta_title', 'meta_description', 'meta_keywords', 'image','banner_image', 'tag_line','about','course_free','us_price','dubai_price','price') // load only needed course fields
    ->where('slug', $slug)
    ->firstOrFail();

    $courses = Cache::remember('latest_courses', 60, function () {
        return Course::latest()->take(3)->get(['id', 'name', 'slug', 'image', 'tag_line']);
    });

    $placements = Cache::remember('placements', 60, function () {
        return Placement::all(['id', 'name', 'image']);
    });

    $companyLogos = Cache::remember('company_logos', 60, function () {
        return Logo::where('type', 'companies')->get(['id', 'image']);
    });
    $awords = Cache::remember('awords', 60, function () {
        return Logo::where('type', 'awords')->get(['id', 'image']);
    });

    $plainLogos = Logo::where('type', 'tools')
    ->where('course_id', $course->id)
    ->get(['id', 'image']);


    $certificate = Cache::remember('certificate_logo', 60, function () {
        return Logo::where('type', 'certification_partner')->get(['id', 'image']);
    });
    $testimonials = Testimonial::latest()->get();

    $mentors = Mentor::where('course_id', $course->id)->get();

    // If no mentors found, get all
    if ($mentors->isEmpty()) {
        $mentors = Mentor::all();
    }
    $certificateLogos = Logo::where('type', 'certificate')
    ->where('course_id', $course->id)
    ->get(['id', 'name', 'image']);
    return view('pages.course_details', compact(
        'course',
        'courses',
        'placements',
        'companyLogos',
        'plainLogos',
        'certificate',
        'testimonials',
        'awords',
        'mentors',
        'certificateLogos'
    ));
}

public function searchCourses(Request $request)
{
    $query = $request->get('query');

    $courses = Course::where('name', 'like', '%' . $query . '%')
        ->select('name', 'slug', 'image', 'tag_line')
        ->limit(5)
        ->get();

    return response()->json($courses);
}






    public function showByCategory($slug)
{
    // Fetch the collection by slug
    $collection = Collection::where('slug', $slug)->firstOrFail(); // This will throw a 404 if the collection is not found
    
    // Get the courses associated with the collection
    $courses = $collection->courses()->where('status', 1)->get();

    // Return the view with the courses and collection data
    return view('pages.course', compact('courses', 'collection'));
}

}
