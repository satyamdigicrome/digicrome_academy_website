<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    public function index()
    {
        // Retrieve all apart records with related courses and users
        $project = Project::with(['course', 'user'])->get();
        $courses = Course::all();
        return view('admin.project.index', compact('project', 'courses'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'course_id' => 'required|array',
            'course_id.*' => 'exists:courses,id',
        ]);

        // Get the authenticated user ID
        $userId = auth()->id();

        // Create a new project record
        foreach ($request->course_id as $courseId) {
        Project::create([
            'heading' => $request->heading,
            'paragraph' => $request->paragraph,
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);
    }

        return redirect()->route('project.index')->with('success', 'Project added successfully.');
    }

    public function destroy(Project $project)
    {
        // Delete the apart record
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    }
}
