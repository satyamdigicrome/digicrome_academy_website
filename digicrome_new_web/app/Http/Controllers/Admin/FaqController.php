<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Faq;

class FaqController extends Controller
{
    public function create(Request $request)
{
    $courses = Course::all();
    $faqs = Faq::with(['course', 'user'])
        ->when($request->filter_course_id, function ($query) use ($request) {
            $query->where('course_id', $request->filter_course_id);
        })
        ->latest()->get();
    return view('admin.faqs.create', compact('courses', 'faqs'));
}

public function store(Request $request)
{
    $request->validate([
        'course_id' => 'required|exists:courses,id',
        'faqs.*.question' => 'required|string',
        'faqs.*.answer' => 'required|string',
    ]);

    $userId = auth()->id();
    foreach ($request->faqs as $faqData) {
        Faq::create([
            'course_id' => $request->course_id,
            'question' => $faqData['question'],
            'answer' => $faqData['answer'],
            'user_id' => $userId,
        ]);
    }

    return back()->with('success', 'FAQs added successfully!');
}

public function destroy($id)
{
    $faq = Faq::findOrFail($id);
    $faq->delete();

    return redirect()->route('faqs.create')->with('success', 'FAQ deleted successfully.');
}

}
