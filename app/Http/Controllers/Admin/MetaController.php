<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metatag;

class MetaController extends Controller
{
    public function index()
    {
        $pages = [
            'Home',
            'About',
            'Reffer',
            'Payment',
            'Media',
            'Course',
            'Success',
            'Conporate',
            'Contact',
            'Career',
            'Blog',
            'Disclaimer',
            'Terms',
            'privacy',
            'who we are',

        ];
    
        $metaTags = Metatag::latest()->get();
        return view('admin.meta.index', compact('pages', 'metaTags'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'page_name'   => 'required|string|max:255|unique:metatags,page_name',
            'title'       => 'nullable|string|max:255',
            'keywords'    => 'nullable|string',
            'description' => 'nullable|string',
        ]);
    
        Metatag::create([
            'page_name'   => $request->page_name,
            'title'       => $request->title,
            'keywords'    => $request->keywords,
            'description' => $request->description,
            'user_id'     => auth()->id() ?? null,
        ]);
    
        return redirect()->route('meta')->with('success', 'Meta tag saved successfully.');
    }
    public function edit($id)
    {
        $metatag = Metatag::findOrFail($id);
        return response()->json($metatag);
    }

    public function update(Request $request, $id)
    {
        $metatag = Metatag::findOrFail($id);

        $request->validate([
            'page_name'   => 'required|string|max:255|unique:metatags,page_name,' . $metatag->id,
            'title'       => 'nullable|string|max:255',
            'keywords'    => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $metatag->update([
            'page_name'   => $request->page_name,
            'title'       => $request->title,
            'keywords'    => $request->keywords,
            'description' => $request->description,
        ]);

        return redirect()->route('meta')->with('success', 'Meta tag updated successfully.');
    }

    public function destroy($id)
    {
        $metatag = Metatag::findOrFail($id);
        $metatag->delete();

        return redirect()->route('meta')->with('success', 'Meta tag deleted successfully.');
    }

}
