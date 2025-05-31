<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Extra;

class ExtraController extends Controller
{
    public function index()
    {
        $extras = Extra::all();
        $courses = Course::all();
        return view('admin.extra.index', compact('extras','courses'));
    }
    public function store(Request $request)
{
    $request->validate([
        'heading' => 'required|string|max:255',
        'part' => 'required|string|max:255',
        'course_id' => 'required|array', // Validate as an array
        'course_id.*' => 'exists:courses,id', // Validate each course ID
    ]);

    // Store the image and get the path

    // Get the authenticated user ID
    $userId = auth()->id();

    // Loop through each selected course and create a key point
    foreach ($request->course_id as $courseId) {
        Extra::create([
            'heading' => $request->heading,
            'part' => $request->part,
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);
    }

    return redirect()->route('extra.index')->with('success', 'Extra added successfully.');
}

public function destroy($id)
{
    $extra = Extra::findOrFail($id);
    $extra->delete();

    return redirect()->route('extra.index')->with('success', 'Extra deleted successfully.');
}
public function filter(Request $request)
{
    $query = Extra::query(); 

    // Filter by course_id if provided
    if ($request->filled('course_id')) {
        $query->where('course_id', $request->course_id);
    }

    // Filter by part if provided
    if ($request->filled('part')) {
        $query->where('part', $request->part);
    }

    $extras = $query->with('course')->get(); // Eager load the course relationship
    $courses = Course::all(); // Get all courses

    return view('admin.extra.index', compact('extras', 'courses'));
}
}
