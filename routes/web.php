<?php

use App\Http\Controllers\Admin\LinkedinStudentReviewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LandingControler;
use App\Http\Controllers\CorporateServicesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ReferController;
use App\Http\Controllers\WhoweareController;
use App\Http\Controllers\SucessStoriesController;
use App\Http\Controllers\MediaPresenceController;
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
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ContantController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\MediaPresenceController as AdminMediaPresenceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;





// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    $user = auth()->user();
    $stats = [];
    if ($user->hasModulePermission('courses'))
        $stats['courses'] = \App\Models\Course::count();
    if ($user->hasModulePermission('blogs'))
        $stats['blogs'] = \App\Models\Blog::count();
    if ($user->hasModulePermission('leads'))
        $stats['leads'] = \App\Models\Lead::count();
    if ($user->hasModulePermission('testimonials'))
        $stats['testimonials'] = \App\Models\Testimonial::count();
    if ($user->hasModulePermission('instructors'))
        $stats['mentors'] = \App\Models\Mentor::count();
    if ($user->hasModulePermission('jobs'))
        $stats['jobs'] = \App\Models\Vacancy::count();

    $recentLeads = $user->hasModulePermission('leads')
        ? \App\Models\Lead::latest()->limit(5)->get()
        : collect();
    $recentBlogs = $user->hasModulePermission('blogs')
        ? \App\Models\Blog::latest()->limit(5)->get(['id', 'heading', 'status', 'created_at'])
        : collect();

    return view('dashboard', compact('stats', 'recentLeads', 'recentBlogs'));
})->middleware(['auth', 'verified'])->name('dashboard');

// ── Profile (auth only) ────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| CMS Admin Routes — grouped by module, each guarded by module middleware.
| Super Admin bypasses all module checks automatically (CheckModulePermission).
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // ── Courses ────────────────────────────────────────────────────────────
    Route::middleware('module:courses')->group(function () {
        Route::get('/admin/manage-courses', [AdminCourseController::class, 'index'])->name('admin.manage_courses');
        Route::get('/admin/courses/create', [AdminCourseController::class, 'create'])->name('course.create');
        Route::post('/admin/courses', [AdminCourseController::class, 'store'])->name('course.store');
        Route::delete('/admin/courses{id}', [AdminCourseController::class, 'destroy'])->name('course.destroy');
        Route::get('/courses/{id}/edit', [AdminCourseController::class, 'edit'])->name('courses.edit');
        Route::put('/courses/{id}', [AdminCourseController::class, 'update'])->name('courses.update');
    });

    // ── Course Details (Key Points, FAQs, Modules, Aparts, etc.) ──────────
    Route::middleware('module:course-details')->group(function () {
        Route::get('/keypoints', [KeyPointController::class, 'index'])->name('keypoints.index');
        Route::post('/keypoints', [KeyPointController::class, 'store'])->name('keypoints.store');
        Route::delete('/keypoints/{keypoint}', [KeyPointController::class, 'destroy'])->name('keypoints.destroy');
        Route::get('/admin/keypoints/{id}/edit', [KeyPointController::class, 'edit'])->name('admin.keypoints.edit');
        Route::post('/admin/keypoints/{id}', [KeyPointController::class, 'update'])->name('admin.keypoints.update');

        Route::get('/aparts', [ApartController::class, 'index'])->name('aparts.index');
        Route::post('/aparts', [ApartController::class, 'store'])->name('aparts.store');
        Route::delete('/aparts/{aparts}', [ApartController::class, 'destroy'])->name('aparts.destroy');
        Route::get('/admin/aparts/{id}/edit', [ApartController::class, 'edit'])->name('admin.aparts.edit');
        Route::post('/admin/aparts/{id}', [ApartController::class, 'update'])->name('admin.aparts.update');

        Route::get('/admin/faqs', [FaqController::class, 'create'])->name('faqs.create');
        Route::post('/admin/faqs', [FaqController::class, 'store'])->name('faqs.store');
        Route::delete('/admin/faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
        Route::get('/admin/faqs/{id}/edit', [FaqController::class, 'edit'])->name('admin.faqs.edit');
        Route::post('/admin/faqs/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');

        Route::get('/admin/extra', [ExtraController::class, 'index'])->name('extra.index');
        Route::post('/admin/extra', [ExtraController::class, 'store'])->name('extra.store');
        Route::delete('/admin/extras/{id}', [ExtraController::class, 'destroy'])->name('extra.destroys');
        Route::get('/extras', [ExtraController::class, 'filter'])->name('extra.filter');
        Route::get('/admin/extras/{id}/edit', [ExtraController::class, 'edit'])->name('admin.extra.edit');
        Route::post('/admin/extras/{id}', [ExtraController::class, 'update'])->name('admin.extra.update');

        Route::get('/case-studies', [CasestudyController::class, 'index'])->name('casestudy.index');
        Route::post('/case-studies', [CasestudyController::class, 'store'])->name('casestudy.store');
        Route::delete('/admin/caseStudy{id}', [CasestudyController::class, 'destroy'])->name('caseStudy.destroy');
        Route::get('/admin/case-studies/{id}/edit', [CasestudyController::class, 'edit'])->name('admin.casestudy.edit');
        Route::post('/admin/case-studies/{id}', [CasestudyController::class, 'update'])->name('admin.casestudy.update');

        Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
        Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
        Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
        Route::get('/admin/project/{id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::post('/admin/project/{id}', [ProjectController::class, 'update'])->name('admin.project.update');

        Route::get('/keyfeature', [KeyFeatureController::class, 'index'])->name('keyfeature.index');
        Route::post('/keyfeature', [KeyFeatureController::class, 'store'])->name('keyfeature.store');
        Route::delete('/keyfeature/{keyfeature}', [KeyFeatureController::class, 'destroy'])->name('keyfeature.destroy');
        Route::get('/admin/keyfeature/{id}/edit', [KeyFeatureController::class, 'edit'])->name('admin.keyfeature.edit');
        Route::post('/admin/keyfeature/{id}', [KeyFeatureController::class, 'update'])->name('admin.keyfeature.update');

        Route::get('/admin/modules', [ModuleController::class, 'create'])->name('modules.create');
        Route::post('/admin/modules', [ModuleController::class, 'store'])->name('modules.store');
        Route::delete('/admin/modules/{id}', [ModuleController::class, 'destroy'])->name('modules.destroy');
        Route::get('/admin/modules/{id}/edit', [ModuleController::class, 'edit'])->name('admin.modules.edit');
        Route::post('/admin/modules/{id}', [ModuleController::class, 'update'])->name('admin.modules.update');
    });

    // ── Blogs ──────────────────────────────────────────────────────────────
    Route::middleware('module:blogs')->group(function () {
        Route::get('blogs', [AdminBlogController::class, 'index'])->name('blogs.index');
        Route::get('blogs/create', [AdminBlogController::class, 'create'])->name('blogs.create');
        Route::post('blogs', [AdminBlogController::class, 'store'])->name('blogs.store');
        Route::get('blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
        Route::put('blogs/{id}', [AdminBlogController::class, 'update'])->name('blogs.update');
        Route::delete('blogs/{id}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');
    });

    // ── Success Stories ────────────────────────────────────────────────────
    Route::middleware('module:success-stories')->group(function () {
        Route::get('/sucess_stories', [SucessController::class, 'index'])->name('sucess_stories');
        Route::post('/success-stories', [SucessController::class, 'store'])->name('success.store');
        Route::delete('/success-stories/{id}', [SucessController::class, 'destroy'])->name('success.destroy');
        Route::get('/admin/success-stories/{id}/edit', [SucessController::class, 'edit'])->name('admin.success.edit');
        Route::post('/admin/success-stories/{id}/update', [SucessController::class, 'update'])->name('admin.success.update');
    });

    // ── Testimonials ───────────────────────────────────────────────────────
    Route::middleware('module:testimonials')->group(function () {
        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
        Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::delete('/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
        Route::get('/admin/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
        Route::post('/admin/testimonial/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
    });

    // ── Videos ────────────────────────────────────────────────────────────
    Route::middleware('module:videos')->group(function () {
        Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
        Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');
        Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
        Route::get('/admin/videos/{id}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');
        Route::post('/admin/videos/{id}', [VideoController::class, 'update'])->name('admin.videos.update');
    });

    // ── Instructors / Mentors ──────────────────────────────────────────────
    Route::middleware('module:instructors')->group(function () {
        Route::get('/mentor', [MentorController::class, 'index'])->name('mentor');
        Route::post('/mentor_store', [MentorController::class, 'store'])->name('mentor.store');
        Route::delete('/admin/mentor{id}', [MentorController::class, 'destroy'])->name('mentor.destroy');
        Route::get('/admin/mentor/{id}/edit', [MentorController::class, 'edit'])->name('admin.mentor.edit');
        Route::post('/admin/mentor/{id}', [MentorController::class, 'update'])->name('admin.mentor.update');
    });

    // Linkedin Student Reviews
    Route::middleware('module:linkedin-student-reviews')->group(function () {
        Route::get('/linkedin-student-reviews', [LinkedinStudentReviewsController::class, 'index'])->name('linkedin.student.reviews.index');
        Route::post('/linkedin-student-reviews/store', [LinkedinStudentReviewsController::class, 'store'])->name('linkedin.student.reviews.store');
        Route::delete('/linkedin-student-reviews/{id}', [LinkedinStudentReviewsController::class, 'destroy'])->name('linkedin.student.reviews.destroy');
        Route::get('/admin/linkedin-student-reviews/{id}/edit', [LinkedinStudentReviewsController::class, 'edit'])->name('admin.linkedin.student.reviews.edit');
        Route::post('/admin/linkedin-student-reviews/{id}', [LinkedinStudentReviewsController::class, 'update'])->name('admin.linkedin.student.reviews.update');
    });

    // ── Media Presence ─────────────────────────────────────────────────────
    Route::middleware('module:media-presence')->group(function () {
        Route::get('/admin/media-presence', [AdminMediaPresenceController::class, 'index'])->name('media.index');
        Route::post('/admin/media-presence', [AdminMediaPresenceController::class, 'store'])->name('media.store');
        Route::post('/admin/media-presence/update/{id}', [AdminMediaPresenceController::class, 'update'])->name('media.update');
        Route::get('/admin/media-presence/delete/{id}', [AdminMediaPresenceController::class, 'destroy'])->name('media.delete');
        Route::get('/admin/media/article', [AdminMediaPresenceController::class, 'show'])->name('articalshow');
        Route::post('/admin/media/article/store', [AdminMediaPresenceController::class, 'articalstore'])->name('articalstore');
        Route::put('/admin/media/article/{id}', [AdminMediaPresenceController::class, 'articalupdate'])->name('articalupdate');
        Route::delete('/admin/media/article/delete/{id}', [AdminMediaPresenceController::class, 'articaldelete'])->name('articaldelete');
    });

    // ── Logos & Partners ───────────────────────────────────────────────────
    Route::middleware('module:logos')->group(function () {
        Route::get('/logos', [LogoController::class, 'index'])->name('logos.index');
        Route::post('/logos', [LogoController::class, 'store'])->name('logos.store');
        Route::delete('/admin/logos{id}', [LogoController::class, 'destroy'])->name('logos.destroy');
        Route::get('/admin/logos/{id}/edit', [LogoController::class, 'edit'])->name('admin.logos.edit');
        Route::post('/admin/logos/{id}', [LogoController::class, 'update'])->name('admin.logos.update');
    });

    // ── Placements ─────────────────────────────────────────────────────────
    Route::middleware('module:placements')->group(function () {
        Route::get('/placement', [PlacementController::class, 'index'])->name('placement.index');
        Route::post('/placement', [PlacementController::class, 'store'])->name('placement.store');
        Route::delete('/admin/placement{id}', [PlacementController::class, 'destroy'])->name('placement.destroy');
        Route::get('/admin/placement/{id}/edit', [PlacementController::class, 'edit'])->name('admin.placement.edit');
        Route::post('/admin/placement/{id}/update', [PlacementController::class, 'update'])->name('admin.placement.update');
    });

    // ── Job Postings ───────────────────────────────────────────────────────
    Route::middleware('module:jobs')->group(function () {
        Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
        Route::get('/vacancies/create', [JobController::class, 'create'])->name('vacancies.create');
        Route::post('/vacancies', [JobController::class, 'store'])->name('vacancies.store');
        Route::get('/vacancies/{id}/edit', [JobController::class, 'edit'])->name('vacancies.edit');
        Route::post('/vacancies/{id}', [JobController::class, 'update'])->name('vacancies.update');
        Route::delete('/vacancies/{id}', [JobController::class, 'destroy'])->name('vacancies.destroy');
    });

    // ── Applications ───────────────────────────────────────────────────────
    Route::middleware('module:applications')->group(function () {
        Route::get('/show_job', [JobController::class, 'show_job'])->name('show_job');
        Route::delete('/application/{id}', [JobController::class, 'delete_application'])->name('application.delete');
    });

    // ── Meta Tags ──────────────────────────────────────────────────────────
    Route::middleware('module:meta-tags')->group(function () {
        Route::get('/meta_tag', [MetaController::class, 'index'])->name('meta');
        Route::post('/store', [MetaController::class, 'store'])->name('meta.store');
        Route::delete('/meta/delete/{id}', [MetaController::class, 'destroy'])->name('meta.delete');
        Route::get('/admin/meta/{id}/edit', [MetaController::class, 'edit'])->name('admin.meta.edit');
        Route::post('/admin/meta/{id}', [MetaController::class, 'update'])->name('admin.meta.update');
    });

    // ── Privacy / Terms / Content ──────────────────────────────────────────
    Route::middleware('module:content')->group(function () {
        Route::get('/contant', [ContantController::class, 'index'])->name('contant.index');
        Route::post('/admin/extra/store', [ContantController::class, 'store'])->name('admin.extra.store');
        Route::delete('/admin/extra/{id}', [ContantController::class, 'destroy'])->name('admin.extra.destroy');
        Route::get('/admin/contant/{id}/edit', [ContantController::class, 'edit'])->name('admin.contant.edit');
        Route::post('/admin/contant/{id}', [ContantController::class, 'update'])->name('admin.contant.update');
    });

    // ── Leads ──────────────────────────────────────────────────────────────
    Route::middleware('module:leads')->group(function () {
        Route::get('/get_leads', [ContantController::class, 'leads'])->name('leed');
    });

    // ── Users & Roles (Super Admin only via CheckModulePermission + isSuperAdmin) ──
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    });
});
Route::get('/search-courses', [CourseController::class, 'searchCourses'])->name('search.courses');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/courses', [CourseController::class, 'index'])->name('course');
Route::get('/corporate-services', [CorporateServicesController::class, 'index'])->name('corporate_services');
Route::get('/online-payment', [PaymentsController::class, 'index'])->name('payments');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/thank-you', [HomeController::class, 'thanks'])->name('thank.you');
Route::get('/DS_and_AI', [LandingControler::class, 'landing'])->name('landing');
Route::get('/refer-and-earn', [ReferController::class, 'index'])->name('refer_and_earn');
Route::get('/who-we-are', [WhoweareController::class, 'index'])->name('who_we_are');
Route::get('/success-stories', [SucessStoriesController::class, 'index'])->name('success_stories');
Route::get('/media-presence', [MediaPresenceController::class, 'index'])->name('media_presence');
// Route::get('/upcoming-courses/{slug}', [CourseController::class, 'course_details'])->name('course_details');
// Route::redirect('/upcoming-courses/{slug}', '/courses/{slug}', 301);
// Route::get('/courses/{slug}', [CourseController::class, 'course_details'])->name('www.products.show');
Route::redirect('/courses/post-graduate-program-in-data-science-and-artificial-intelligence', '/courses/pgp-in-data-science-and-ai', 301);
Route::get('/courses/{slug}', [CourseController::class, 'course_details'])->name('course_details');


Route::get('/blog/{slug}', [BlogController::class, 'blog_details'])->name('blog.details');
Route::get('/our-courses/{slug}', [CourseController::class, 'showByCategory'])->name('course.category');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy-policy');
Route::post('/store-lead', [LeadsController::class, 'store'])->name('store.lead');
Route::post('/leads', [LeadsController::class, 'leadsstore'])->name('lead.store');
Route::post('/landingstore', [LeadsController::class, 'landingstore'])->name('landing.store');
Route::middleware('throttle:60,1')
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->post('/website-leads', [LeadsController::class, 'websiteLead'])
    ->name('website.lead');
Route::post('/submit-referral', [ReferController::class, 'submit'])->name('referral.submit');
Route::post('/vacancy/apply', [CareerController::class, 'apply'])->name('vacancy.apply');
Route::get('/investment-banking-course', [LandingPageController::class, 'index'])->name('landing.ib');
Route::get('/data-science', [LandingControler::class, 'data_science'])->name('data_science');




Route::get('/test-mail', function () {
    Mail::raw('Test email from Laravel', function ($message) {
        $message->to('satyam.digicrome@gmail.com')
            ->subject('Test Mail');
    });
    return 'Mail Sent';
});
// Old to new course URLs
Route::redirect('/upcoming-courses/post-graduate-program-in-data-science-and-artificial-intelligence', '/courses/pgp-in-data-science-and-ai', 301);
Route::redirect('/upcoming-courses/advance-certification-program-in-artificial-intelligence-machine-learning', '/courses/advance-certification-in-ai-machine-learning', 301);
Route::redirect('/upcoming-courses/post-graduate-program-in-data-science-and-machine-learning', '/courses/online-data-analytics-and-machine-learning-program', 301);
Route::redirect('/our-courses', '/courses', 301);

require __DIR__ . '/auth.php';
