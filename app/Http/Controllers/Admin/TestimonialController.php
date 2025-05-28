<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;


class TestimonialController extends Controller
{
    public function index()
    {        
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonial_images', 'public');
        }

        $userId = auth()->id(); // get current logged in user id, nullable if guest, change as needed

        Testimonial::create([
            'tagline' => $request->tagline,
            'review' => $request->review,
            'rating' => $request->rating,
            'name' => $request->name,
            'profession' => $request->profession,
            'image' => $imagePath,
            'user_id' => $userId,
        ]);
        return redirect()->back()->with('success', 'Testimonial added successfully!');

    }
    public function destroy($id)
    {
        $story = Testimonial::findOrFail($id);

        if ($story->image) {
            Storage::disk('public')->delete($story->image);
        }

        $story->delete();

        return redirect()->back()->with('success', 'Story deleted successfully!');
    }
}
