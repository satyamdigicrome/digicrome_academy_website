<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Module;
class ModuleController extends Controller
{
    public function create(Request $request)
    {
        $courses = Course::all();
        $modules = Module::with(['course', 'user'])
            ->when($request->filter_course_id, function ($query) use ($request) {
                $query->where('course_id', $request->filter_course_id);
            })
            ->latest()->get();
        return view('admin.modules.create', compact('courses', 'modules'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'modules.*.question' => 'required|string',
            'modules.*.answer' => 'required|string',
        ]);
    
        $userId = auth()->id();
        foreach ($request->modules as $faqData) {
            Module::create([
                'course_id' => $request->course_id,
                'question' => $faqData['question'],
                'answer' => $faqData['answer'],
                'user_id' => $userId,
            ]);
        }
    
        return back()->with('success', 'modules added successfully!');
    }
    
    public function destroy($id)
    {
        $faq = Module::findOrFail($id);
        $faq->delete();
    
        return redirect()->route('modules.create')->with('success', 'FAQ deleted successfully.');
    }
    
}
