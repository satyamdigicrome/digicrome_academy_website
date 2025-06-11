<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentStory;
use App\Models\Metatag;



class SucessStoriesController extends Controller
{
    public function index()
    {
        $studentStories = StudentStory::latest()->get(); 
        $meta = Metatag::where('page_name', 'Success')->first();


        return view('pages.success_stories',compact('studentStories','meta')); 
    }
}
