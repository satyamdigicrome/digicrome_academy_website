<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;
use Illuminate\Support\Facades\Mail;



class ReferController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Reffer')->first();

        return view('pages.refer_and_earn', compact('meta')); 
    }
    public function submit(Request $request)
    {
        $data = $request->validate([
            'yourName' => 'required|string',
            'yourEmail' => 'required|email',
            'yourPhone' => 'required|string',
            'friendName' => 'required|string',
            'friendEmail' => 'required|email',
            'friendPhone' => 'required|string',
            'personalMessage' => 'nullable|string',
        ]);
        

        Mail::send('emails.referral', $data, function ($message) {
            $message->from('digicromeleads@gmail.com', 'Referral Form');
            $message->to('digicromeleads@gmail.com')
                    ->subject('New Referral Submission');
        });

        return redirect()->back()->with('success', 'Referral submitted successfully!');
    }
}
