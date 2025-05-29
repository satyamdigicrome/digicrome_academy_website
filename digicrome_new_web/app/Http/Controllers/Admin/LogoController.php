<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logo.index', compact('logos'));
    }

    // Store a newly created logo in storage
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('logo', 'public');

        $userId = auth()->id();

        Logo::create([
            'image' => $imagePath,
            'user_id' => $userId,
            'type' => $request->type,
            'name' => $request->name,
            'country' => $request->country,
        ]);

        return redirect()->route('logos.index')->with('success', 'Logo created successfully.');
    }
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();

        return redirect()->route('logos.index')->with('success', 'logos deleted successfully.');
    }
}
