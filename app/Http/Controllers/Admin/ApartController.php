<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apart;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApartController extends Controller
{
    public function index()
    {
        // Retrieve all apart records with related courses and users
        $aparts = Apart::with(['course', 'user'])->get();
        $courses = Course::all();
        return view('admin.apart.index', compact('aparts', 'courses'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'heading' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'course_id' => 'required|array',
            'course_id.*' => 'exists:courses,id',
        ]);

        // Store the image and get the path
        $imagePath = $request->file('image')->store('aparts', 'public');

        // Get the authenticated user ID
        $userId = auth()->id();

        // Create a new apart record
        foreach ($request->course_id as $courseId) {
        Apart::create([
            'image' => $imagePath,
            'heading' => $request->heading,
            'tagline' => $request->tagline,
            'paragraph' => $request->paragraph,
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);
    }

        return redirect()->route('aparts.index')->with('success', 'Apart added successfully.');
    }

    public function destroy(Apart $apart)
    {
        // Delete the image from storage
        Storage::disk('public')->delete($apart->image);
        
        // Delete the apart record
        $apart->delete();
        return redirect()->route('aparts.index')->with('success', 'Apart deleted successfully.');
    }
}
