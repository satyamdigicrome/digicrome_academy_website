<?php

namespace App\Http\Controllers;

use App\Models\LinkedinStudentsReview;
use Illuminate\Http\Request;
use App\Models\StudentStory;
use App\Models\Metatag;
use App\Models\Placement;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Support\Facades\Cache;

class SucessStoriesController extends Controller
{
    public function index()
    {
        $data = Cache::remember('success_page_data', now()->addHours(1), function () {
            return [
                'studentStories' => StudentStory::latest()->get(),
                'testimonials'   => Testimonial::latest()->get(),
                'placements'     => Placement::latest()->get(),
                'videos'         => Video::latest()->take(6)->get(),
                'meta'           => Metatag::where('page_name', 'Success')->first(),
                'feedbacks'      => LinkedinStudentsReview::latest()->get(),
            ];
        });

        return view('pages.success_stories', $data);
    }
}
