<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Course;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('course_upcoming', 1)->get();
        return view('pages.course', compact('courses')); 
    }

    public function course_details($slug)
{
    $course = Course::with(['keypoints', 'aparts'])->where('slug', $slug)->firstOrFail();
    return view('pages.course_details', compact('course'));
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
