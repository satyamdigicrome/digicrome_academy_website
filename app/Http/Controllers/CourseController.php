<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Course;
use App\Models\Placement;
use App\Models\Logo;
use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('course_upcoming', 1)->get();
        return view('pages.course', compact('courses')); 
    }

    public function course_details($slug)
{
    $course = Course::with([
        'keypoints:id,course_id,name,image',
        'aparts:id,course_id,image,heading,tagline,paragraph',
        'faqs:id,course_id,question,answer',
        'extraPartOne:id,course_id,heading',
        'extraPartTwo:id,course_id,heading',
        'projects:id,course_id,heading,paragraph',
        'caseStudies:id,course_id,heading,paragraph',
        'keyFeatures:id,course_id,heading,paragraph,image',
        'modules:id,course_id,question,answer',
    ])
    ->select('id', 'name', 'slug', 'description', 'image', 'tag_line','about','course_free','us_price','dubai_price','price') // load only needed course fields
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

    $plainLogos = Cache::remember('tool_logos', 60, function () {
        return Logo::where('type', 'tools')->get(['id', 'image']);
    });

    $certificate = Cache::remember('certificate_logo', 60, function () {
        return Logo::where('type', 'certification_partner')->get(['id', 'image']);
    });

    return view('pages.course_details', compact(
        'course',
        'courses',
        'placements',
        'companyLogos',
        'plainLogos',
        'certificate'
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
    $courses = $collection->courses; 

    // Return the view with the courses and collection data
    return view('pages.course', compact('courses', 'collection'));
}

}
