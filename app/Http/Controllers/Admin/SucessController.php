<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentStory;
use Illuminate\Support\Facades\Storage;

class SucessController extends Controller
{
    public function index()
    {     
        $stories = StudentStory::all();   
        return view('admin.success_stories.index', compact('stories'));
    }
    public function store(Request $request)
{
    $request->validate([
        'studentname' => 'required|string',
        'position' => 'required|string',
        'companyname' => 'required|string',
        'stoire' => 'required|string',
        'image' => 'required|image|mimes:webp|max:2048',
    ]);

    $imagePath = $request->file('image')->store('student_images', 'public');

    $userId = auth()->id();

    StudentStory::create([
        'studentname' => $request->studentname,
        'position' => $request->position,
        'companyname' => $request->companyname,
        'stoire' => $request->stoire,
        'image' => $imagePath,
        'userid' => $userId, 
    ]);

    return redirect()->back()->with('success', 'Story added successfully!');
}

    public function edit($id)
    {
        $story = StudentStory::findOrFail($id);
        return response()->json($story);
    }

    public function update(Request $request, $id)
    {
        $story = StudentStory::findOrFail($id);

        $request->validate([
            'studentname' => 'required|string',
            'position'    => 'required|string',
            'companyname' => 'required|string',
            'stoire'      => 'required|string',
            'image'       => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($story->image) {
                Storage::disk('public')->delete($story->image);
            }
            $story->image = $request->file('image')->store('student_images', 'public');
            $story->save();
        }

        $story->update([
            'studentname' => $request->studentname,
            'position'    => $request->position,
            'companyname' => $request->companyname,
            'stoire'      => $request->stoire,
        ]);

        return redirect()->back()->with('success', 'Story updated successfully!');
    }

    public function destroy($id)
    {
        $story = StudentStory::findOrFail($id);

        if ($story->image) {
            Storage::disk('public')->delete($story->image);
        }

        $story->delete();

        return redirect()->back()->with('success', 'Story deleted successfully!');
    }
}
