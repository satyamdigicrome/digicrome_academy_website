<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Placement;

class PlacementController extends Controller
{
    public function index()
    {
        $placements = Placement::all();
        return view('admin.placement.index', compact('placements'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'package' => 'required|numeric',
            'category' => 'required|string|max:255|in:DS,AISS,IB',
        ]);

        $imagePath = $request->file('image')->store('placement', 'public');

        $userId = auth()->id();

        Placement::create([
            'image' => $imagePath,
            'name' => $request->name,
            'position' => $request->position,
            'package' => $request->package,
            'user_id' => $userId,
            'category' => $request->category,
        ]);

        return redirect()->route('placement.index')->with('success', 'Placement created successfully.');
    }
    public function edit($id)
    {
        $placement = Placement::findOrFail($id);
        return response()->json($placement);
    }

    public function update(Request $request, $id)
    {
        $placement = Placement::findOrFail($id);

        $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'package'  => 'required|numeric',
            'category' => 'required|string|max:255|in:DS,AISS,IB',
            'image'    => 'nullable|image|max:2048',
        ]);
        if ($request->hasFile('image')) {
            if ($placement->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($placement->image);
            }
            $placement->image = $request->file('image')->store('placement', 'public');
            $placement->save();
        }

        $placement->update([
            'name'     => $request->name,
            'position' => $request->position,
            'package'  => $request->package,
            'category' => $request->category,
        ]);

        return redirect()->route('placement.index')->with('success', 'Placement updated successfully.');
    }

    public function destroy($id)
    {
        $placement = Placement::findOrFail($id);
        $placement->delete();

        return redirect()->route('placement.index')->with('success', 'Placement deleted successfully.');
    }
}
