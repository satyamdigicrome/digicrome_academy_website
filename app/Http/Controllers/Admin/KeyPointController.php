<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\KeyPoint;

class KeyPointController extends Controller
{
    public function index()
    {
        $keypoints = KeyPoint::all();
        $courses = Course::all();
        return view('admin.keypoint.index', compact('keypoints','courses'));
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:2048',
        'name' => 'required|string|max:255',
        'course_id' => 'required|array',
        'course_id.*' => 'exists:courses,id', 
    ]);

    $imagePath = $request->file('image')->store('keypoints', 'public');

    $userId = auth()->id();

    foreach ($request->course_id as $courseId) {
        KeyPoint::create([
            'image' => $imagePath,
            'name' => $request->name,
            'course_id' => $courseId,   
            'user_id' => $userId,
        ]);
    }

    return redirect()->route('keypoints.index')->with('success', 'Key Points added successfully.');
}

    public function destroy(KeyPoint $keypoint)
    {
        $keypoint->delete();
        return redirect()->route('keypoints.index');
    }
}
