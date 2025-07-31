<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Metatag;


class BlogController extends Controller
{
    public function index()
{
    $blogs = Blog::where('status', 'published')
                ->orderByDesc('created_at')
                ->get();

    $meta = Metatag::where('page_name', 'Blog')->first();

    return view ('pages.blog', compact('blogs','meta'));
}
public function blog_details($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();

    $blog->increment('views');

    return view ('pages.blog_details', compact('blog'));
}
}
