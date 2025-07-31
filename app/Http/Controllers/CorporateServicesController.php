<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Collection;
use App\Models\Logo;
use Illuminate\Support\Facades\Cache;
use App\Models\Metatag;


class CorporateServicesController extends Controller
{
    public function index()
    {
        $collections = Collection::with(['courses' => function ($query) {
            $query->where('status', 1)->limit(4); 
        }])->where('status', 1)->orderBy('position')->get();
        $awords = Cache::remember('awords', 60, function () {
            return Logo::where('type', 'awords')->get(['id', 'image']);
        });
        $upcomingCourses = Course::whereIn('id', [1, 2, 3, 4])
                                 ->where('status', 1)
                                 ->limit(4) 
                                 ->get();
        $companyLogos = Cache::remember('company_logos', 60, function () {
            return Logo::where('type', 'companies')->get(['id', 'image']);
        });
        $meta = Metatag::where('page_name', 'Conporate')->first();

        return view('pages.corporate_services',compact('collections','meta', 'upcomingCourses','companyLogos','awords')); 
    }
}
