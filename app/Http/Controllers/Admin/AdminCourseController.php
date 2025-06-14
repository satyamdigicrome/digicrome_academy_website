<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 

class AdminCourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Fetch all courses from the database
        return view('admin.manage_courses.index', compact('courses'));
    }

    public function create()
    {
        $collections = Collection::all(); // Fetch all collections to populate the dropdown
        return view('admin.manage_courses.create', compact('collections'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'collection_id' => 'required|exists:collections,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses',
            'sku' => 'required|string|max:255|unique:courses',
            'tag_line' => 'nullable|string|max:255',
            'corporate' => 'required|boolean',
            'description' => 'required|string',
            'course_free' => 'required|boolean',
            'course_upcoming' => 'required|boolean',
            'course_online_payment' => 'required|string',
            'course_duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'dubai_price' => 'nullable|numeric',
            'us_price' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string|max:255',
            'about' => 'nullable|string|max:255',
            'has_faqs' => 'required|boolean',
            'status' => 'required|boolean',
            'course_image' => 'required|image|mimes:webp|max:2048',
            'banner_image' => 'required|image|mimes:webp|max:2048',

        ]);

        // Handle the image upload
        $imagePath = $request->file('banner_image')->store('courses', 'public');

        $imagePath = $request->file('course_image')->store('courses', 'public');

        // Create a new course instance
        $course = new Course();
        $course->collection_id = $request->collection_id;
        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->sku = $request->sku;
        $course->tag_line = $request->tag_line;
        $course->corporate = $request->corporate;
        $course->description = $request->description;
        $course->course_free = $request->course_free;
        $course->course_upcoming = $request->course_upcoming;
        $course->course_online_payment = $request->course_online_payment;
        $course->course_duration = $request->course_duration;
        $course->price = $request->price;
        $course->dubai_price = $request->dubai_price;
        $course->us_price = $request->us_price;
        $course->discount = $request->discount;
        $course->meta_title = $request->meta_title;
        $course->meta_keywords = $request->meta_keywords;
        $course->meta_description = $request->meta_description;
        $course->about = $request->about;
        $course->has_faqs = $request->has_faqs;
        $course->status = $request->status;
        $course->user_id = Auth::id(); // Assuming the user is authenticated
        $course->image = $imagePath; // Save the image path in the database
        $course->banner_image = $imagePath; // Save the image path in the database


        // Save the course to the database
        $course->save();

        // Redirect back with a success message
        return redirect()->route('admin.manage_courses')->with('success', 'Course added successfully!');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $collections = Collection::all(); // Fetch the course by ID
        return view('admin.manage_courses.edit', compact('course','collections')); // Pass the course to the edit view
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses,slug,' . $id,
            'sku' => 'required|string|max:255|unique:courses,sku,' . $id,
            'tag_line' => 'nullable|string|max:255',
            'corporate' => 'required|boolean',
            'description' => 'required|string',
            'course_free' => 'required|string',
            'course_upcoming' => 'required|boolean',
            'course_online_payment' => 'required|string',
            'course_duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'dubai_price' => 'nullable|numeric|min:0',
            'us_price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'about' => 'nullable|string',
            'has_faqs' => 'required|boolean',
            'status' => 'required|boolean',
            'collection_id' => 'required|exists:collections,id',
            'image' => 'nullable|image|mimes:webp|max:2048',
            'banner_image' => 'nullable|image|mimes:webp|max:2048',
            'browser' => 'nullable|mimes:pdf|max:5120', 


        ]);

        // Find the course by ID
        $course = Course::findOrFail($id);
        $course->slug = $request->input('slug');

        // Update the course with the validated data
        $course->update($request->except('image', 'banner_image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('courses', 'public');
            $course->image = $path;
        }
        
        // Handle banner_image upload
        if ($request->hasFile('banner_image')) {
            $bannerPath = $request->file('banner_image')->store('banner', 'public');
            $course->banner_image = $bannerPath;
        }
        // Handle browser PDF upload
        if ($request->hasFile('browser')) {
            $browserPath = $request->file('browser')->store('browser_pdfs', 'public');
            $course->browser = $browserPath;
        }

        
        // Save updated paths if either image was updated
        $course->save();

        // Redirect back to the courses index with a success message
        return redirect()->route('admin.manage_courses')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
{
    $course = Course::findOrFail($id);
    $course->delete();

    return redirect()->route('admin.manage_courses')->with('success', 'FAQ deleted successfully.');
}



}
