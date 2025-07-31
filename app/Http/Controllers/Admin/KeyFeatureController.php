<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeyFeature;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KeyFeatureController extends Controller
{
    public function index()
    {
        $keyfeature = KeyFeature::with(['course', 'user'])->get();
        $courses = Course::all();
        return view('admin.keyfeature.index', compact('keyfeature', 'courses'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'course_id' => 'required|array',
            'course_id.*' => 'exists:courses,id',
        ]);

        $imagePath = $request->file('image')->store('keyfeature', 'public');

        $userId = auth()->id();

        foreach ($request->course_id as $courseId) {
        KeyFeature::create([
            'image' => $imagePath,
            'heading' => $request->heading,
            'paragraph' => $request->paragraph,
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);
    }

        return redirect()->route('keyfeature.index')->with('success', 'keyfeature added successfully.');
    }

    public function destroy(KeyFeature $keyfeature)
    {
        Storage::disk('public')->delete($keyfeature->image);
        
        $keyfeature->delete();
        return redirect()->route('keyfeature.index')->with('success', 'keyfeature deleted successfully.');
    }
}
