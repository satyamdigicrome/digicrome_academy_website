<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentStory;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Metatag;

class AboutController extends Controller
{
    public function index()
    {
        $studentStories = StudentStory::latest()->get(); 
        $testimonials = Testimonial::latest()->get();
        $blogs = Blog::where('status', 'published')
        ->orderByDesc('created_at')
        ->limit(3)
        ->get();
        $meta = Metatag::where('page_name', 'About')->first();

        return view('pages.about',compact('studentStories','testimonials','meta','blogs')); 
    }
}
