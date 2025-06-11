<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;


class MediaPresenceController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Media')->first();

        return view('pages.media_presence', compact('meta')); 
    }
}
