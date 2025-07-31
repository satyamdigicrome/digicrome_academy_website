<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Lead;


class ContantController extends Controller
{
    public function index()
{
    $contents = Content::latest()->get();
    return view('admin.contant.index', compact('contents'));
}

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'content_type' => 'required|string|max:255',
        ]);

        $userId = auth()->id();

        Content::create([
            'user_id' => $userId,
            'content' => $request->content,
            'content_type' => $request->content_type,
        ]);

        return redirect()->route('contant.index')->with('success', 'Logo created successfully.');
    }
    public function destroy($id)
    {
        $logo = Content::findOrFail($id);
        $logo->delete();

        return redirect()->route('contant.index')->with('success', 'logos deleted successfully.');
    }

    public function leads()
{
    $leads = Lead::all(); 
    return view('admin.leads.index', compact('leads'));
}
}
