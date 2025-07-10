<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with('user')->latest()->get();
        return view('admin.video.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_link' => 'required|string',
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:4096' // ✅ Now accepts gif too
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('videos', 'public'); // ✅ Same folder, GIF or image
        }

        $userId = auth()->id();
    
        Video::create([
            'user_id' => $userId,
            'video_link' => $request->video_link,
            'name' => $request->name,
            'image' => $imagePath, // ✅ GIF or Image stored here
        ]);
    
        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully.');
    }
    

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        if ($video->image) {
            Storage::disk('public')->delete($video->image);
        }
        $video->delete();
        return redirect()->back()->with('success', 'Video deleted.');
    }
}
