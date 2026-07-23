<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LinkedinStudentsReview;
use Illuminate\Http\Request;

class LinkedinStudentReviewsController extends Controller
{
    public function index()
    {
        $stories = LinkedinStudentsReview::orderBy('id', 'desc')->get();
        return view('admin.linkedinstudentreviews.index', compact('stories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'iframe_link' => 'required|string|max:500',
            'post_link'   => 'required|string|max:500',
        ]);

        LinkedinStudentsReview::create([
            'iframe_link' => $request->iframe_link,
            'post_link'   => $request->post_link,
            'created_by'   => auth()->user()->id,
        ]);

        return redirect()->route('linkedin.student.reviews.index')
            ->with('success', 'LinkedIn Student Review added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'iframe_link' => 'required|string|max:500',
            'post_link'   => 'required|string|max:500',
        ]);

        $story = LinkedinStudentsReview::findOrFail($id);
        $story->update([
            'iframe_link' => $request->iframe_link,
            'post_link'   => $request->post_link,
        ]);

        return redirect()->route('linkedin.student.reviews.index')
            ->with('success', 'LinkedIn Student Review updated successfully.');
    }

    public function destroy($id)
    {
        $story = LinkedinStudentsReview::findOrFail($id);
        $story->delete();

        return redirect()->route('linkedin.student.reviews.index')
            ->with('success', 'LinkedIn Student Review deleted successfully.');
    }
}
