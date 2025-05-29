<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoweareController extends Controller
{
    public function index()
    {
        return view('pages.who_we_are'); 
    }
}
