<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferController extends Controller
{
    public function index()
    {
        return view('pages.refer_and_earn'); 
    }
}
