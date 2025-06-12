<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentStory;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Metatag;
use Stevebauman\Location\Facades\Location;


class AboutController extends Controller
{
    public function index(Request $request)
    {
        $position = Location::get($request->ip());
    $userCountry = $position->countryName ?? 'Unknown';
        $studentStories = StudentStory::latest()->get(); 
        $testimonials = Testimonial::latest()->get();
        $blogs = Blog::where('status', 'published')
        ->orderByDesc('created_at')
        ->limit(3)
        ->get();
        $meta = Metatag::where('page_name', 'About')->first();

        return view('pages.about',compact('studentStories','testimonials', 'userCountry', 'meta','blogs')); 
    }
}
