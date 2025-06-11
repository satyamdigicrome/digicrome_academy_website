<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;

class WhoweareController extends Controller
{
    public function index()

    {
    $meta = Metatag::where('page_name', 'who we are')->first();

        return view('pages.who_we_are', compact('meta')); 
    }
}
