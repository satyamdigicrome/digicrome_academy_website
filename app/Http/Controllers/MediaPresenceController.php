<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;
use App\Models\Article;
use App\Models\MediaPresence;



class MediaPresenceController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Media')->first();
        $data = MediaPresence::all();
         $articles = Article::all();
        return view('pages.media_presence', compact('meta','data','articles')); 
    }
}
