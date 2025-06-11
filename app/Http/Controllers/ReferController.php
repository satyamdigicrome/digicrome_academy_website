<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;


class ReferController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Reffer')->first();

        return view('pages.refer_and_earn', compact('meta')); 
    }
}
