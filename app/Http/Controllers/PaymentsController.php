<?php

namespace App\Http\Controllers;

use App\Models\Metatag;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        $meta = Metatag::where('page_name', 'Payment')->first();

        return view('pages.payments' , compact('meta')); 
    }
}
