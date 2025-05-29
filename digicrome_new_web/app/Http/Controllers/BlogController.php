<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
{
    $blogs = Blog::where('status', 'published')
                ->orderByDesc('created_at')
                ->get();

    return view('pages.blog', compact('blogs'));
}
public function blog_details($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();

    // Optional: increment view count
    $blog->increment('views');

    return view('pages.blog_details', compact('blog'));
}
}
