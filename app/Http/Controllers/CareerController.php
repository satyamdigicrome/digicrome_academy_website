<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Cache;
use App\Models\Logo;


class CareerController extends Controller
{
    public function index(Request $request)
    {
        $position = Location::get($request->ip());
    $userCountry = $position->countryName ?? 'Unknown';
        $meta = Metatag::where('page_name', 'Career')->first();
        $gallery = Cache::remember('gallery_' . $userCountry, 60, function () use ($userCountry) {
            if ($userCountry === 'India') {
                return Logo::where('type', 'gallery')->where('country', 'IN')->get(['id', 'image', 'name']);
            } else {
                return Logo::where('type', 'gallery')->where('country', 'US')->get(['id', 'image', 'name']);
            }
        });
        return view('pages.career',compact('meta','userCountry','gallery')); 
    }
}
