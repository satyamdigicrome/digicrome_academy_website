<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingControler extends Controller
{
    public function landing()
    {
        return redirect()->away('https://landing.digicrome.com/DS_and_AI');
    }
}
