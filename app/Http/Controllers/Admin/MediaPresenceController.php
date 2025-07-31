<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaPresence;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;
class MediaPresenceController extends Controller
{
    public function index()
    {
        $data = MediaPresence::all();
        return view('admin.media_presence.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $path = $request->file('image')->store('media_images', 'public');

        MediaPresence::create([
            'image' => $path,
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Entry added successfully!');
    }

    public function update(Request $request, $id)
    {
        $entry = MediaPresence::findOrFail($id);

        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($entry->image) {
                Storage::disk('public')->delete($entry->image);
            }

            $path = $request->file('image')->store('media_images', 'public');
            $entry->image = $path;
        }

        $entry->heading = $request->heading;
        $entry->description = $request->description;
        $entry->save();

        return redirect()->back()->with('success', 'Entry updated successfully!');
    }

    public function destroy($id)
    {
        $entry = MediaPresence::findOrFail($id);
        if ($entry->image) {
            Storage::disk('public')->delete($entry->image);
        }
        $entry->delete();

        return redirect()->back()->with('success', 'Entry deleted successfully!');
    }

    public function show()
    {
        $articles = Article::all();
        return view('admin.media_presence.artical', compact('articles'));
    }

    public function articalstore(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'heading' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/articles'), $imageName);

        Article::create([
            'image' => $imageName,
            'heading' => $request->heading,
            'link' => $request->link,
            'date' => $request->date,
        ]);

        return redirect()->back()->with('success', 'Article added successfully!');
    }

    public function articaldelete($id)
    {
        $article = Article::findOrFail($id);
        $imagePath = public_path('uploads/articles/' . $article->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $article->delete();

        return redirect()->back()->with('success', 'Article deleted successfully!');
    }
}
