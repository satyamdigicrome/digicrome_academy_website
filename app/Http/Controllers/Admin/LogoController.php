<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Course;


class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        $courses = Course::all();
        return view('admin.logo.index', compact('logos','courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'course_id' => 'nullable|exists:courses,id',
        ]);
        

        $imagePath = $request->file('image')->store('logo', 'public');

        $userId = auth()->id();

        Logo::create([
            'image' => $imagePath,
            'user_id' => $userId,
            'type' => $request->type,
            'name' => $request->name,
            'country' => $request->country,
            'course_id' => $request->course_id,
        ]);
        

        return redirect()->route('logos.index')->with('success', 'Logo created successfully.');
    }
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();

        return redirect()->route('logos.index')->with('success', 'logos deleted successfully.');
    }
}
