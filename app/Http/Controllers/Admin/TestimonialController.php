<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



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
            'image' => 'nullable|image|mimes:webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonial_images', 'public');
        }

        $userId = auth()->id();

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
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return response()->json($testimonial);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'tagline'    => 'required|string|max:255',
            'review'     => 'required|string',
            'rating'     => 'required|integer|min:1|max:5',
            'name'       => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'image'      => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $testimonial->image = $request->file('image')->store('testimonial_images', 'public');
            $testimonial->save();
        }

        $testimonial->update([
            'tagline'    => $request->tagline,
            'review'     => $request->review,
            'rating'     => $request->rating,
            'name'       => $request->name,
            'profession' => $request->profession,
        ]);

        return redirect()->back()->with('success', 'Testimonial updated successfully!');
    }

    public function destroy($id)
    {
        $story = Testimonial::findOrFail($id);
        if ($story->image) {
            Storage::disk('public')->delete($story->image);
        }
        $story->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }

}
