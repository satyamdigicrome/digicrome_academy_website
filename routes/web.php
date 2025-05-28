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
use App\Http\Controllers\Admin\ExtraController;
use App\Http\Controllers\Admin\CasestudyController;
use App\Http\Controllers\Admin\PlacementController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\KeyFeatureController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\SucessController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

















// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

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
    Route::delete('/admin/courses{id}', [AdminCourseController::class, 'destroy'])->name('course.destroy');
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
    Route::get('/admin/extra', [ExtraController::class, 'index'])->name('extra.index');
    Route::post('/admin/extra', [ExtraController::class, 'store'])->name('extra.store');
    Route::delete('/admin/extra/{id}', [ExtraController::class, 'destroy'])->name('extra.destroy');
    Route::get('/extras', [ExtraController::class, 'filter'])->name('extra.filter');
    Route::get('/case-studies', [CasestudyController::class, 'index'])->name('casestudy.index');
    Route::post('/case-studies', [CaseStudyController::class, 'store'])->name('casestudy.store');
    Route::delete('/admin/caseStudy{id}', [CaseStudyController::class, 'destroy'])->name('caseStudy.destroy');
    Route::get('/placement', [PlacementController::class, 'index'])->name('placement.index');
    Route::post('/placement', [PlacementController::class, 'store'])->name('placement.store');
    Route::delete('/admin/placement{id}', [PlacementController::class, 'destroy'])->name('placement.destroy');
    Route::get('/logos', [LogoController::class, 'index'])->name('logos.index');
    Route::post('/logos', [LogoController::class, 'store'])->name('logos.store');
    Route::delete('/admin/logos{id}', [LogoController::class, 'destroy'])->name('logos.destroy');
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/keyfeature', [KeyFeatureController::class, 'index'])->name('keyfeature.index');
    Route::post('/keyfeature', [KeyFeatureController::class, 'store'])->name('keyfeature.store');
    Route::delete('/keyfeature/{keyfeature}', [KeyFeatureController::class, 'destroy'])->name('keyfeature.destroy');
    Route::get('/admin/modules', [ModuleController::class, 'create'])->name('modules.create');
    Route::post('/admin/modules', [ModuleController::class, 'store'])->name('modules.store');
    Route::delete('/admin/modules/{id}', [ModuleController::class, 'destroy'])->name('modules.destroy');
    Route::get('/sucess_stories', [SucessController::class, 'index'])->name('sucess_stories');
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::post('/success-stories', [SucessController::class, 'store'])->name('success.store');
    Route::delete('/success-stories/{id}', [SucessController::class, 'destroy'])->name('success.destroy');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::delete('/testimonials/{id}', [SucessController::class, 'destroy'])->name('testimonials.destroy');
    Route::get('blogs', [AdminBlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [AdminBlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs', [AdminBlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
    Route::put('blogs/{id}', [AdminBlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/{id}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');

    // Add routes for edit, update, and delete as needed
});
Route::get('/search-courses', [CourseController::class, 'searchCourses'])->name('search.courses');


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
Route::get('/blog/{slug}', [BlogController::class, 'blog_details'])->name('blog.details');

Route::get('/our-courses/{slug}', [CourseController::class, 'showByCategory'])->name('course.category');




require __DIR__.'/auth.php';
