<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Course;

class MentorController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $mentors = Mentor::with('course', 'user')->get();

        return view('admin.mentor.index', compact('courses', 'mentors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|array',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'position' => 'nullable|string',
            'experience' => 'nullable|integer',
            'photo' => 'nullable|image|max:2048',
        ]);

        foreach ($request->course_id as $courseId) {
            $mentor = new Mentor();
            $mentor->course_id = $courseId;
            $mentor->user_id = auth()->id();
            $mentor->name = $request->name;
            $mentor->description = $request->description;
            $mentor->position = $request->position;
            $mentor->experience = $request->experience;
        
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('mentor_photos', 'public');
                $mentor->photo = $photoPath;
            }
        
            $mentor->save();
        }
        

        return redirect()->route('mentor')->with('success', 'Mentor(s) added successfully!');
    }

    public function destroy($id)
    {
        $mentor = Mentor::findOrFail($id);
        $mentor->delete();

        return redirect()->route('mentor')->with('success', 'Mentor deleted successfully.');
    }
}
