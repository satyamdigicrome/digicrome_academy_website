<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Collection;
use App\Models\StudentStory;
use App\Models\Testimonial;
use App\Models\Logo;
use App\Models\Blog;
use App\Models\Content;
use App\Models\Metatag;
use App\Models\Mentor;
use App\Models\Video;
use Illuminate\Support\Facades\Cache;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $position = Location::get($request->ip());
    $userCountry = $position->countryName ?? 'Unknown';

    $collections = Collection::with(['courses' => function ($query) {
        $query->where('status', 1)->limit(4); 
    }])->where('status', 1)->orderBy('position')->get();

    if ($userCountry === 'India') {
        $upcomingCourses = Course::where('status', 1)
                                 ->orderByRaw('ISNULL(position), position ASC')
                                 ->limit(4)
                                 ->get();
    } else {
        $upcomingCourses = Course::where('status', 1)
                                 ->whereIn('id', [60, 58, 55, 61])
                                 ->get();
    }
    $companyLogos = Cache::remember('company_logos', 60, function () {
            return Logo::where('type', 'companies')->get(['id', 'image']);
        });
        $gallery = Cache::remember('gallery_' . $userCountry, 60, function () use ($userCountry) {
            if ($userCountry === 'India') {
                return Logo::where('type', 'gallery')->where('country', 'IN')->get(['id', 'image', 'name']);
            } else {
                return Logo::where('type', 'gallery')->where('country', 'US')->get(['id', 'image', 'name']);
            }
        });
    
    $associationLogos = Cache::remember('association_logos', 60, function () {
        return Logo::where('type', 'association')->get(['id', 'image']);
    });
    $certificate = Cache::remember('certification_partner', 60, function () {
        return Logo::where('type', 'certification_partner')->get(['id', 'image']);
    });
    $awords = Cache::remember('awords', 60, function () {
        return Logo::where('type', 'awords')->get(['id', 'image']);
    });
    $studentStories = StudentStory::latest()->get(); 
    $meta = Metatag::where('page_name', 'Home')->first();
    $testimonials = Testimonial::latest()->get();
    $blogs = Blog::where('status', 'published')
    ->orderByDesc('created_at')
    ->get();
    $mentors = Mentor::all();
    $videos = Video::latest()->get();

    return view('welcome', compact('collections', 'upcomingCourses', 'videos', 'mentors', 'gallery', 'userCountry', 'companyLogos','studentStories','testimonials','associationLogos','blogs','certificate','awords','meta'));
}

    public function privacy()
    {
        $contents = Content::where('content_type', 'Polocy')->latest()->get();
    $meta = Metatag::where('page_name', 'privacy')->first();

        return view('pages.privacy_and_polocy',compact('contents','meta'));
    }
    public function terms()
    {
        $contents = Content::where('content_type', 'Terms')->latest()->get();
    $meta = Metatag::where('page_name', 'Terms')->first();

        return view('pages.trum_and_condition',compact('contents','meta'));
    }
    public function disclaimer()
    {
        $contents = Content::where('content_type', 'Disclaimer')->latest()->get();
    $meta = Metatag::where('page_name', 'Disclaimer')->first();

        return view('pages.disclaimer',compact('contents','meta'));
    }

    public function thankyou()
    {
        return view('pages.thankyou');
    }

}
