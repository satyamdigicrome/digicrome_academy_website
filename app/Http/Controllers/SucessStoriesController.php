<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentStory;


class SucessStoriesController extends Controller
{
    public function index()
    {
        $studentStories = StudentStory::latest()->get(); 

        return view('pages.success_stories',compact('studentStories')); 
    }
}
