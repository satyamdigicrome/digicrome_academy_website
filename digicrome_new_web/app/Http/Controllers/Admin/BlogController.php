<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.manage_blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.manage_blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string',
            'heading' => 'required|string',
            'blog' => 'required',
            'status' => 'required|in:draft,published,archived',
            'slug' => 'required|unique:blogs,slug',
        ]);

        $authorImage = $request->file('author_image')?->store('author_images', 'public');
        $blogImage = $request->file('blog_image')?->store('blog_images', 'public');

        Blog::create([
            'user_id' => auth()->id(),
            'author_name' => $request->author_name,
            'author_image' => $authorImage,
            'heading' => $request->heading,
            'tagline' => $request->tagline,
            'blog' => $request->blog,
            'blog_image' => $blogImage,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'slug' => Str::slug($request->slug),
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.manage_blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'author_name' => 'required|string',
            'heading' => 'required|string',
            'blog' => 'required',
            'status' => 'required|in:draft,published,archived',
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
        ]);

        if ($request->hasFile('author_image')) {
            Storage::disk('public')->delete($blog->author_image);
            $blog->author_image = $request->file('author_image')->store('author_images', 'public');
        }

        if ($request->hasFile('blog_image')) {
            Storage::disk('public')->delete($blog->blog_image);
            $blog->blog_image = $request->file('blog_image')->store('blog_images', 'public');
        }

        $blog->update([
            'author_name' => $request->author_name,
            'heading' => $request->heading,
            'tagline' => $request->tagline,
            'blog' => $request->blog,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'slug' => Str::slug($request->slug),
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('public')->delete([$blog->author_image, $blog->blog_image]);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }
}
