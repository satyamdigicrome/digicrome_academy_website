<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;

class CareerController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Career')->first();

        return view('pages.career',compact('meta')); 
    }
}
