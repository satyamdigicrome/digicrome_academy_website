<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Course;
class CourseController extends Controller
{
    public function index()
    {
        return view('pages.course'); 
    }

    public function course_details()
    {
        return view('pages.course_details'); 
    }
    public function showByCategory($id)
    {
        $category = Collection::findOrFail($id);
        $courses = Course::where('collection_id', $id)->get();

        return view('courses.index', compact('category', 'courses'));
    }

}
