<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;


class ContactController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Contact')->first();

        return view('pages.contact',compact('meta')); 
    }
}
