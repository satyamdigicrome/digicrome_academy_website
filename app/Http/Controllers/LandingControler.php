<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingControler extends Controller
{
    public function landing()
    {
        return view('pages.DS_and_AI');
    }
}
