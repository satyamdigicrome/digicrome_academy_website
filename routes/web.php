<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CorporateServicesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ReferController;
use App\Http\Controllers\WhoweareController;
use App\Http\Controllers\SucessStoriesController;
use App\Http\Controllers\MediaPresenceController ;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\KeyPointController;
use App\Http\Controllers\Admin\ApartController;
use App\Http\Controllers\Admin\FaqController;







Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/manage-courses', [AdminCourseController::class, 'index'])->name('admin.manage_courses');
    Route::get('/admin/courses/create', [AdminCourseController::class, 'create'])->name('course.create');
    Route::post('/admin/courses', [AdminCourseController::class, 'store'])->name('course.store');
    Route::get('/courses/{id}/edit', [AdminCourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{id}', [AdminCourseController::class, 'update'])->name('courses.update');
    Route::get('/keypoints', [KeyPointController::class, 'index'])->name('keypoints.index');
    Route::post('/keypoints', [KeyPointController::class, 'store'])->name('keypoints.store');
    Route::delete('/keypoints/{keypoint}', [KeyPointController::class, 'destroy'])->name('keypoints.destroy');
    Route::get('/aparts', [ApartController::class, 'index'])->name('aparts.index');
    Route::post('/aparts', [ApartController::class, 'store'])->name('aparts.store');
    Route::delete('/aparts/{aparts}', [ApartController::class, 'destroy'])->name('aparts.destroy');
    Route::get('/admin/faqs', [FaqController::class, 'create'])->name('faqs.create');
    Route::post('/admin/faqs', [FaqController::class, 'store'])->name('faqs.store');
    Route::delete('/admin/faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
    // Add routes for edit, update, and delete as needed
});


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/upcoming-courses', [CourseController::class, 'index'])->name('course');
Route::get('/corporate_services', [CorporateServicesController::class, 'index'])->name('corporate_services');
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/refer_and_earn', [ReferController::class, 'index'])->name('refer_and_earn');
Route::get('/who_we_are', [WhoweareController::class, 'index'])->name('who_we_are');
Route::get('/success_stories', [SucessStoriesController::class, 'index'])->name('success_stories');
Route::get('/media_presence', [MediaPresenceController ::class, 'index'])->name('media_presence');
Route::get('/upcoming-courses/{slug}', [CourseController::class, 'course_details'])->name('course_details');
Route::get('/blog_details', [BlogController ::class, 'blog_details'])->name('blog_details');

Route::get('/our-courses/{slug}', [CourseController::class, 'showByCategory'])->name('course.category');




require __DIR__.'/auth.php';
