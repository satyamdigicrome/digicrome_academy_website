<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaPresenceController extends Controller
{
    public function index()
    {
        return view('pages.media_presence'); 
    }
}
