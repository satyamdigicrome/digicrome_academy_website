<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Collection;
class HomeController extends Controller
{
    public function index()
{
    $collections = Collection::with(['courses' => function ($query) {
        $query->where('status', 1)->limit(4); // Limit to 4 courses per collection
    }])->where('status', 1)->orderBy('position')->get();

    $upcomingCourses = Course::whereIn('id', [1, 2, 3, 4])
                             ->where('status', 1)
                             ->limit(4) // Just to be safe, limit to 4
                             ->get();

    return view('welcome', compact('collections', 'upcomingCourses'));
}

}
