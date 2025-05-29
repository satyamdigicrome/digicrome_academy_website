<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\Course;


class CasestudyController extends Controller
{
    public function index()
    {
        // Fetch all case studies
        $caseStudies = CaseStudy::all();
        $courses = Course::all();
        return view('admin.casestudy.index', compact('caseStudies','courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'course_id' => 'required|array', // Validate as an array
            'course_id.*' => 'exists:courses,id',
        ]);

        $userId = auth()->id();
        // Create a new case study
        foreach ($request->course_id as $courseId) {
        $caseStudy = CaseStudy::create([
            'heading' => $request->heading,
            'paragraph' => $request->paragraph,
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);
    }

        // Attach selected courses to the case study

        return redirect()->route('casestudy.index')->with('success', 'Case study added successfully!');
    }
    public function destroy($id)
{
    $caseStudies = CaseStudy::findOrFail($id);
    $caseStudies->delete();

    return redirect()->route('casestudy.index')->with('success', 'caseStudies deleted successfully.');
}

}
