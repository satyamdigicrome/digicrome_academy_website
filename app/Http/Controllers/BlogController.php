<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Metatag;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'published')
            ->orderByDesc('created_at')
            ->paginate(9);
        $meta = Metatag::where('page_name', 'Blog')->first();
        return view('pages.blog', compact('blogs', 'meta'));
    }
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Counted on the query builder rather than the model: Eloquent's
        // increment() also touches updated_at, which the sitemap publishes as
        // <lastmod>. A read is not an edit, so bumping it there would tell
        // crawlers every post changed on every view — and would invalidate the
        // sitemap cache on every hit.
        DB::table('blogs')->where('id', $blog->id)->increment('views');
        $blog->views++;

        return view('pages.blog_details', compact('blog'));
    }
}
