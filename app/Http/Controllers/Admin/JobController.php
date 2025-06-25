<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function index()
{
    $vacancies = Vacancy::all();
    return view('admin.job.index', compact('vacancies'));
}
public function show_job()
{
    // All applications with vacancy info, latest first
    $applications = CareerApplication::with('vacancy')->orderBy('created_at', 'desc')->get();
    return view('admin.job.show_job', compact('applications'));
}

public function delete_application($id)
{
    $application = CareerApplication::findOrFail($id);

    // Delete resume file from storage if exists
    if ($application->resume_path && Storage::disk('public')->exists($application->resume_path)) {
        Storage::disk('public')->delete($application->resume_path);
    }

    // Delete application from DB
    $application->delete();

    return redirect()->route('show_job')->with('success', 'Application deleted successfully.');
}
public function create()
    {
        return view('admin.job.create');
    }
public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'company_name' => 'required',
        'location' => 'required',
        'description' => 'required|string',
        'type' => 'required',
        'experience_level' => 'required',
        'salary' => 'required',
        'industry' => 'nullable',
        'requirements' => 'nullable|string',
    ]);

    Vacancy::create($data);
    return redirect()->route('jobs')->with('success', 'Vacancy created successfully.');
}

public function edit($id)
{
    $vacancy = Vacancy::findOrFail($id);
    return view('admin.job.edit', compact('vacancy'));
}

public function update(Request $request, $id)
{
    $vacancy = Vacancy::findOrFail($id);

    $data = $request->validate([
        'title' => 'required',
        'company_name' => 'required',
        'location' => 'required',
        'description' => 'required',
        'type' => 'required',
        'experience_level' => 'required',
        'salary' => 'required',
        'industry' => 'nullable',
        'requirements' => 'nullable',
    ]);

    $vacancy->update($data);
    return redirect()->route('jobs')->with('success', 'Vacancy updated successfully.');
}

public function destroy($id)
{
    $vacancy = Vacancy::findOrFail($id);
    $vacancy->delete();

    return redirect()->route('jobs')->with('success', 'Vacancy deleted successfully.');
}
}
