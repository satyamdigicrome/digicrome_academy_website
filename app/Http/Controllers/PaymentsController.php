<?php

namespace App\Http\Controllers;

use App\Models\Metatag;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $meta = Metatag::where('page_name', 'Payment')->first();
        $position = Location::get($request->ip());
        $userCountry = $position->countryName ?? 'Unknown';
        return view('pages.payments' , compact('meta','userCountry')); 
    }
}
