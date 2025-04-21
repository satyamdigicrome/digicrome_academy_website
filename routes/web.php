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


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/corporate_services', [CorporateServicesController::class, 'index'])->name('corporate_services');
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/refer_and_earn', [ReferController::class, 'index'])->name('refer_and_earn');
Route::get('/who_we_are', [WhoweareController::class, 'index'])->name('who_we_are');
Route::get('/success_stories', [SucessStoriesController::class, 'index'])->name('success_stories');
Route::get('/media_presence', [MediaPresenceController ::class, 'index'])->name('media_presence');
Route::get('/course_details', [CourseController ::class, 'course_details'])->name('course_details');
Route::get('/blog_details', [BlogController ::class, 'blog_details'])->name('blog_details');

Route::get('/courses/category/{id}', [CourseController::class, 'showByCategory'])->name('course.category');






require __DIR__.'/auth.php';
