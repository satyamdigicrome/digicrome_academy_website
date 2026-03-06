<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentStory;
use App\Models\Metatag;
use App\Models\Placement;
use App\Models\Testimonial;
use App\Models\Video;

class SucessStoriesController extends Controller
{
    public function index()
    {
        $studentStories = StudentStory::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $placements = Placement::latest()->get();
        $videos = Video::latest()->take(6)->get();
        $meta = Metatag::where('page_name', 'Success')->first();
        return view('pages.success_stories', compact('studentStories', 'testimonials', 'placements', 'videos', 'meta'));
    }
}
