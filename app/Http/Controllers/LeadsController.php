<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class LeadsController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'address' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'profession' => 'nullable|string|max:255',
        'course_id' => 'required|exists:courses,id',
    ]);

    $lead = new Lead();
    $lead->name = $request->name;
    $lead->email = $request->email;
    $lead->phone = $request->mobile;
    $lead->address = $request->address;
    $lead->qualification = $request->title;
    $lead->experience = $request->profession;
    $lead->save();

    
    // Get brochure path
    $course = \App\Models\Course::find($request->course_id);
    $brochurePath = $course->browser ? asset('storage/' . $course->browser) : null;
    
    $apiResponse = Http::asForm()->post('https://demo.digicrome.com/post_lead.php', [
        'name'        => $request->name,
        'mobile'      => $request->mobile,
        'email'       => $request->email,
        'title'       => $request->title,
        'address'     => $request->address,
        'profession'  => $request->profession,
        'source'      => 'Website(broucher)',
        'country'     => 'India',
        'comp_name'   => '',
        'state'       => '',
        'altr_mobile' => 'NA',
    ]);
    return response()->json([
        'success' => true,
        'message' => 'Lead saved successfully.',
        'download_url' => $brochurePath,
    ]);
}
public function leadsstore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'key1' => 'nullable|string|max:255',
            'key2' => 'nullable|string|max:255',
            'key3' => 'nullable|string|max:255',
            'key4' => 'nullable|string|max:255',
            'key5' => 'nullable|string|max:255',
            'page_name' => 'nullable|string|max:255',
        ]);

        $apiResponse = Http::asForm()->post('https://demo.digicrome.com/post_lead.php', [
            'name'        => $request->name,
            'mobile'      => $request->phone,
            'email'       => $request->email,
            'title'       => $request->qualification,
            'address'     => $request->address,
            'profession'  => $request->experience,
            'source'      => 'Website(Course)',
            'country'     => 'India',
            'comp_name'   => '',
            'state'       => '',
            'altr_mobile' => 'NA',
        ]);

        Lead::create($validated);
        Mail::send('emails.lead-notification', ['data' => $validated], function ($message) use ($validated) {
            $message->to('digicromeleads@gmail.com')
                    ->subject('New Lead Submission - ' . ($validated['page_name'] ?? 'Course Page'));
        });

        return redirect()->route('thankyou');
    }
}
