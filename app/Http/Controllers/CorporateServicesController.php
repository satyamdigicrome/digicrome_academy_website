<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateServicesController extends Controller
{
    public function index()
    {
        return view('pages.corporate_services'); 
    }
}
