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
            'user_id' => 'required|exists:users,id',
            'video_link' => 'required|string',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('videos', 'public');
        }

        Video::create([
            'user_id' => $request->user_id,
            'video_link' => $request->video_link,
            'name' => $request->name,
            'image' => $imagePath,
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
