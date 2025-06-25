<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;
use Stevebauman\Location\Facades\Location;
use App\Models\Vacancy;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationMail;



class CareerController extends Controller
{
    public function index(Request $request)
{
    $position = Location::get($request->ip());
    $userCountry = $position->countryName ?? 'Unknown';
    $meta = Metatag::where('page_name', 'Career')->first();

    $vacancies = Vacancy::orderBy('created_at', 'desc')->get();

    return view('pages.career', compact('meta','userCountry', 'vacancies'));
}
public function apply(Request $request)
{
    $request->validate([
        'vacancy_id' => 'required|exists:vacancies,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'cover_letter' => 'required|string',
        'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    try {
        // Store file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Store in DB
        $application = CareerApplication::create([
            'vacancy_id' => $request->vacancy_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cover_letter' => $request->cover_letter,
            'resume_path' => $resumePath,
        ]);

        // Send email (fail-safe)
        try {
            Mail::to('career.digicrome@gmail.com')->send(new CareerApplicationMail($application));
        } catch (\Exception $e) {
            \Log::error('Mail error: ' . $e->getMessage());
        }
        
        return back()->with('success', 'Application submitted successfully.');

    } catch (\Exception $e) {
        Log::error('Application store error: ' . $e->getMessage());
        return back()->with('error', 'Failed to submit application.');
    }
}

}
