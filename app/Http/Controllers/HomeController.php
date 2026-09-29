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
use App\Models\LinkedinStudentsReview;
use App\Models\Metatag;
use App\Models\Mentor;
use App\Models\Video;
use Illuminate\Support\Facades\Cache;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    /**
     * Geo-lookup hits an external API (ip-api.com) over HTTP, which sits directly
     * in the request's TTFB. Cache the answer per IP so only the first visitor
     * from an address pays for it, and never let a slow/failed lookup break the page.
     */
    private function resolveCountry(?string $ip): string
    {
        $key = 'geo_country_' . md5((string) $ip);

        if ($cached = Cache::get($key)) {
            return $cached;
        }

        try {
            $position = Location::get($ip);
            $country = $position->countryName ?? null;
        } catch (\Throwable $e) {
            $country = null;
        }

        // Retry failed lookups soon; keep successful ones for a day.
        Cache::put($key, $country ?: 'Unknown', $country ? now()->addDay() : now()->addMinutes(10));

        return $country ?: 'Unknown';
    }

    public function index(Request $request)
    {
        return view('welcome', $this->homeData($request));
    }

    /**
     * Alternate homepage (Home Page 2). Same data as the primary homepage,
     * rendered with the redesigned hero, ratings, alumni and footer sections.
     */
    public function home2(Request $request)
    {
        return view('home2', $this->homeData($request));
    }

    private function homeData(Request $request): array
    {
        $userCountry = $this->resolveCountry($request->ip());

        $collections = Collection::with(['courses' => function ($query) {
            $query->where('status', 1)->limit(4); 
        }])->where('status', 1)->whereNotIn('id', [5, 6])->orderBy('position')->get();
        // if ($userCountry === 'India') {
            $upcomingCourses = Course::where('status', 1)
                                    ->orderByRaw('ISNULL(position), position ASC')
                                    ->limit(4)
                                    ->get();
        // } else {
        //     $upcomingCourses = Course::where('status', 1)
        //                              ->whereIn('id', [60, 58, 55, 61])
        //                              ->get();
        // }
        // dd($upcomingCourses);
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
        // The view only renders the three most recent posts.
        $blogs = Blog::where('status', 'published')
        ->orderByDesc('created_at')
        ->take(3)
        ->get();
        $mentors = Mentor::all();
        $videos = Video::latest()->get();
        $feedbacks = LinkedinStudentsReview::latest()->take(3)->get();

        return compact('collections', 'upcomingCourses', 'videos', 'mentors', 'gallery', 'userCountry', 'companyLogos','studentStories','testimonials','associationLogos','blogs','certificate','awords','meta','feedbacks');
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
    public function thanks()
{
     $course = Course::with([
        'keypoints:id,course_id,name',
        'modules:id,course_id,question,answer',
    ])
    ->select(
        'id',
        'name',
        'slug',
        'sku',
        'course_online_payment',
        'description',
        'browser',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',
        'banner_image',
        'tag_line',
        'about',
        'course_free',
        'us_price',
        'dubai_price',
        'price'
    )
    ->where('course_free', 1)
    ->first();

    return view('pages.thanks' ,compact('course'));
}


}
