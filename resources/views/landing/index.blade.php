@extends('layouts.landing')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
    @include('components.lead-form-popup')

    <style>
        .breadcumb-area {
    padding: 183px 0 100px;
}

        .date-border {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        /* Default (Desktop) Styles */
#breadcrumb img {
    z-index: 1;
}

/* Mobile Styles (Screen width <= 768px) */
@media (max-width: 768px) {
    /* Add margin-top for mobile view */
    .breadcumb-area {
        margin-top: 20%;
    }

    /* Hide the image on mobile */
    .breadcumb-area img {
        display: none;
    }
}

    </style>
<div class="breadcumb-area two d-flex align-items-center position-relative" id="breadcrumb"
     style="min-height: 600px; width: 100%;">
    <!-- Image Element -->
    <img loading="lazy" 
         src="{{ asset('assets/images/landing.webp') }}" 
         alt="background" 
         class="img-fluid w-100 h-80 position-absolute top-0 start-0 object-cover" 
         style="z-index: 1;padding-top: 12%;"/>

    <div class="container position-relative mt-4 " style="z-index: 1;">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-md-6">
                {{-- <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                    <img loading="lazy" src="{{ asset('assets/images/card11.webp') }}" width="190" height="120" alt="card1" title="card1" />
                    <img loading="lazy" src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card" style="border: 2px solid #f29c12; border-radius: 5px;" />
                </div> --}}

                <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">Post Graduation Program in Investment Banking</h1>

                <p class="fs-5 fw-semibold text-secondary mt-2 mb-3">
                    <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                    Build Career Skills with Internship Program from J.P. Morgan, Citi Bank and Bank of America
                </p>
                {{-- <p><b>Get a Chance to gain Internship Experience from</b></p> --}}


<div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4 mt-2">
                    <img loading="lazy" src="{{ asset('assets/images/jp.jpg') }}" width="190" height="120" alt="card1" title="card1" />
                    <img loading="lazy" src="{{ asset('assets/images/Citibank.jpg') }}" width="190" height="120" alt="card1" title="card1"  />
                </div>
                <p class="text-dark fs-6 mb-2">
                    <i class="fa-solid fa-briefcase text-success me-2"></i>
                    4.8/5 (1000+ ratings)
                </p>

                <p class="text-dark fs-6 mb-2">
                    <i class="fa-solid fa-clock text-warning me-2"></i>
                    Salaries up to 37 LPA
                </p>

                <p class="text-dark fs-6 mb-0">
                    <i class="fa-solid fa-trophy text-danger me-2"></i>
                    Step into a profitable finance career by learning abilities that help businesses develop and make a positive impact on lives.
                </p>

                <br>
                {{-- <p><b>Note:-</b> This is an educational program only. No investment or financial product is being offered.</p> --}}
            </div>
            
            <!-- Right Column (empty for now) -->
            <div class="col-md-6 text-end">
                {{-- <img loading="lazy" src="{{ asset('assets/images/3.webp') }}" class="img-fluid" alt="CIBOP" title="CIBOP" /> --}}
            </div>
        </div>
        
        <!-- Feature Strip Section -->
        <div class="feature-strip position-relative mt-5">
            <div class="container">
                <div class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">

                    <!-- Box 1 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}" class="lazyload mb-2" alt="data science program institute" title="data science program institute">
                            <p class="icon-plus">5000</p>
                            <span>Career Transformed</span>
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}" class="lazyload mb-2" alt="data science programs" title="data science programs">
                            <p>Internship Possibility</p>
                            <span>Based on Performance</span>
                        </div>
                    </div>

                    <!-- Box 3 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}" class="lazyload mb-2" alt="best online data science programs" title="best online data science programs">
                            <p>06 Months</p>
                            <span>Live Online Classes</span>
                        </div>
                    </div>

                    <!-- Box 4 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}" class="lazyload mb-2" alt="data science programs near me" title="data science programs near me">
                            <p style="color: #f8b700">{{ $course->course_online_payment }}</p>
                            <span>Next Batch starts on</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

    <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-auto text-center">
                    <div class="d-flex justify-content-center gap-3">
                        @if ($course->browser)
                            <button class="btn btn-sm btn-outline-success rounded-pill px-3 py-2"
                                style="background-color: green;" data-bs-toggle="modal" data-bs-target="#leadPopup">
                                <i class="fa fa-download me-2"></i>Download Brochure
                            </button>
                        @endif

                        <a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill px-3 py-2"
                            style="background-color: #1c1647;" data-bs-toggle="modal" data-bs-target="#applyNowPopup">
                            <i class="fa fa-paper-plane me-2"></i>Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <section class="logo-slider-section py-5" style="background-color: #fff4e5;"> <!-- light orange background -->
            <h2 class="text-center mb-4" style="font-size: 2rem;">
                Trusted by <span style="color: #f29c12;">world's best</span> Organisations
            </h2>
            <div class="container-fluid custom-width">

                <!-- Single row: slides left to right -->
                <div class="logo-marquee marquee-left">
                    <div class="logo-track" style="background:#ffdca5;">
                        @foreach ($companyLogos as $logo)
                            <div class="logo-item">
                                <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand">
                            </div>
                        @endforeach
                        @foreach ($companyLogos as $logo)
                            <div class="logo-item">
                                <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <style>
            .logo-slider-section {
                /* background set inline on section */
            }

            .logo-marquee {
                overflow: hidden;
                white-space: nowrap;
                position: relative;
            }

            .logo-track {
                display: flex;
                width: max-content;
            }

            .logo-item {
                flex: 0 0 auto;
                padding: 0 30px;
            }

            .logo-item img {
                height: 60px;
                object-fit: contain;
            }

            /* Scroll left to right */
            .marquee-left .logo-track {
                animation: scrollLeftToRight 120s linear infinite;
            }

            @keyframes scrollLeftToRight {
                0% {
                    transform: translateX(-50%);
                }

                100% {
                    transform: translateX(0);
                }
            }
        </style>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @if ($course->modules->count())
                    <div class="container text-center">
                        <h2 class="text-center mb-2" style="font-size: 2rem;">
                            Our <span style="color: #f29c12;">Course </span> Curriculum
                        </h2>
                        <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                            100% Trusted And Golden Opportunities With Key Features That will Help You To Transform Your
                            Career
                        </p>
                    </div>
                    <div class="tab_container">
                        <div id="tab1" class="tab_content">
                            <div class="accordion my-4" id="moduleAccordion">
                                @foreach ($course->modules as $index => $module)
                                    <div class="accordion-item border border-warning-subtle">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $index }}" style="color: #f29c12;">
                                                {{ $module->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}"
                                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $index }}"
                                            data-bs-parent="#moduleAccordion">
                                            <div class="accordion-body">
                                                {!! nl2br(e($module->answer)) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <section>

        <div class="container">
            <div class="row">
                <div class="container py-5" style="text-align: left;">
                    <div class="row align-items-center">
                        <!-- Left: About Company Text -->
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="mb-5 display-5 fw-bold">About the Program</h2>
                            <p>
                                {{ $course->about }}
                            </p>
                        </div>
                        <!-- Right: Company Image -->
                        <div class="col-md-6 text-center">
                            <img loading="lazy"src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image"
                                title="Company Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="testimonial-area style-two mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- section title -->
                        <div class="section-sub-title two">
                            <h6><img loading="lazy"src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}"
                                    alt="icon" title="icon">TESTIMONIALS</h6>
                        </div>
                        <div class="section_title two">
                            <h2 class="heading-like-h1">What Students Say About</br>
                                Digicrome Experience</h2>
                        </div>
                        <div class="section-title-desc two">
                            <p>Students love the hands-on learning, expert mentors, and real-world projects that make the
                                Digicrome experience truly exceptional.</p>
                        </div>
                        <div class="testi-mentor-btn">
                            <a data-bs-toggle="modal" data-bs-target="#applyNowPopup">GET STARTED<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="testi-list2 owl-carousel">
                                @foreach ($testimonials as $testimonial)
                                    <div class="col-lg-12">
                                        <div class="single-testi-box">
                                            <div class="testi-quote"
                                                style="font-size:18px; font-weight:600; color:#f29c12; margin:10px 0;">
                                                {{ $testimonial->tagline }}
                                            </div>

                                            <div class="testi-desc">
                                                <p>“{{ $testimonial->review }}</p>
                                            </div>
                                            <div class="testi-ratting"
                                                style="display:flex; list-style:none; padding:0; margin:0;">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= floor($testimonial->rating))
                                                        <li
                                                            style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    @elseif ($i == ceil($testimonial->rating) && $testimonial->rating != floor($testimonial->rating))
                                                        <li
                                                            style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
                                                            <i class="fa-solid fa-star-half-stroke fa-fw"></i>
                                                        </li>
                                                    @else
                                                        <li
                                                            style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
                                                            <i class="fa-regular fa-star"></i>
                                                        </li>
                                                    @endif
                                                @endfor
                                            </div>

                                        </div>
                                        <div class="testi-autor-box">
                                            <div class="testi-autor">
                                                <img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}"
                                                    alt="testi-author" title="testi-author"
                                                    style="width:80px; height:80px; border-radius:50%; object-fit:cover; border:2px solid #f29c12;">
                                            </div>

                                            <div class="testi-autor-content">
                                                <h5 class="autor-title">{{ $testimonial->name }}</h5>
                                                <p class="autor-desi">{{ $testimonial->profession }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <x-trusted-brands />
    @if ($course->projects->count())
        <section style="background-color: #f8f9fa;">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: #333;">Sample Projects You'll Build</h2>
                    <p style="font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto;">
                        Get hands-on experience with real-world inspired projects. These are some examples of what you'll
                        build during the course.
                    </p>
                </div>

                <div class="owl-carousel projects-carousel">
                    @foreach ($course->projects as $project)
                        <div class="item">
                            <div class="project-box mx-2">
                                <div class="inner-box">
                                    <h5 style="line-height: 31px;" class="project-title">{{ $project->heading }}</h5>
                                    <p class="project-desc">{!! $project->paragraph !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="my-5">
        <div class="container">
            <h2 class="text-center mb-2" style="font-size: 2rem;">
                Our <span style="color: #f29c12;">Case </span> Studies
            </h2>
            <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                Insights Of All The Learner Recent Learners
            </p>
            <div class="row g-4 text-center">
                @foreach ($course->caseStudies as $case)
                    <div class="col-md-3">
                        <div class="case-box p-4 rounded shadow-sm h-100">
                            <h5 class="mb-3 fw-bold">{{ $case->heading }}</h5>
                            <p class="text-muted" style="list-style: disc;">{!! $case->paragraph !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($plainLogos->count())
        <section>
            <div class="container my-5">
                <h2 class="section-heading text-center mb-4">Languages and Tools Covered</h2>
                <div class="row justify-content-center mt-4">
                    <div class="container py-4" style="max-width: 1000px;">
                        <div class="row">
                            @foreach ($plainLogos as $logo)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 d-flex justify-content-center">
                                    <div class="single-brand-box text-center">
                                        <div class="brand-thumb">
                                            <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}"
                                                alt="brand-thumb" title="event-sidebar-thumb" class="img-fluid"
                                                style="max-height: 60px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Certificates Section -->
    @if ($certificateLogos->isNotEmpty())
        <x-certificate-logos :logos="$certificateLogos" />
    @endif
    <section>
        <div class="container">
            <div class="row">
                <div class="container py-5 text-start">
                    <div class="row align-items-center">

                        <h2 class="mb-5 display-5 fw-bold">Program Learning Outcomes</h2>

                        <!-- Image -->
                        <div class="col-md-6 text-center mb-4 mb-md-0">
                            <img loading="lazy"
                                src="{{ asset('assets/images/Outcomes.webp') }}"
                                alt="Program Outcome Image" title="Program Outcome Image" class="img-fluid"
                                style="max-width: 300px; height: auto;">
                        </div>

                        <!-- List with Icons -->
                        <div class="col-md-6">
                            <ul style="list-style: none; padding-left: 0; color: #444;">
                                <li class="mb-3">
                                    <i class="fas fa-tools text-primary me-2"></i>
                                    Gain practical skills and business knowledge that make you ready to work in real-world
                                    job roles.
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-comments text-success me-2"></i>
                                    Improve your speaking, thinking, and demonstration abilities to feel confident in
                                    interviews and group discussions.
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-certificate text-warning me-2"></i>
                                    Earn an industry-recognized certificate that adds value to your resume and boosts job
                                    opportunities.
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-briefcase text-danger me-2"></i>
                                    Work on real-time projects and case studies to understand how companies operate
                                    practically.
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-user-edit text-info me-2"></i>
                                    Get expert help in building a standout resume and LinkedIn profile that attracts top
                                    employers.
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="background-color: #f9f9f9; padding: 60px 0;">
        <div class="container text-center">
            <h2 class="mb-5 display-5 fw-bold">This Program is Ideal For</h2>
            <div class="row justify-content-center">

                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div
                        style="border: 1px solid #ddd; border-radius: 10px; padding: 30px; background-color: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: 0.3s;">
                        <div style="font-size: 40px; color: #007bff;" class="mb-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Working Professionals</h5>
                        <p style="font-size: 15px;">
                            Looking to upgrade their finance and business knowledge for better job opportunities. </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div
                        style="border: 1px solid #ddd; border-radius: 10px; padding: 30px; background-color: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: 0.3s;">
                        <div style="font-size: 40px; color: #28a745;" class="mb-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Career Starters</h5>
                        <p style="font-size: 15px;">
                            Anyone interested in learning finance and business concepts through real projects & expert
                            guidance. </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div
                        style="border: 1px solid #ddd; border-radius: 10px; padding: 30px; background-color: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: 0.3s;">
                        <div style="font-size: 40px; color: #ffc107;" class="mb-3">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Freshers & Students</h5>
                        <p style="font-size: 15px;">
                            Who want practical skills and job ready training to start their career quickly. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="padding: 60px 0; background-color: #fdfdfd;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Image Section -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/carer.webp') }}" alt="Career Support"
                        title="Career Support & Guidance" class="img-fluid"
                        style="width: 300px;  box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>

                <!-- Text Section -->
                <div class="col-md-6">
                    <h2 class="mb-4 display-6 fw-bold">Career Support and Guidance</h2>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li class="mb-3">
                            <i class="fas fa-user-check text-primary me-2"></i>
                            Get personalized career counseling to help you choose the right path in investment banking.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-lightbulb text-success me-2"></i>
                            Access resume building workshops designed to highlight your skills and impress top recruiters.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-microphone-alt text-warning me-2"></i>
                            Participate in mock interviews with expert feedback to improve your courage and performance.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-file-alt text-danger me-2"></i>
                            Receive job alerts and direct placement assistance to relate you with leading finance
                            associations.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-infinity text-info me-2"></i>
                            Get networking opportunities with industry professionals to grow your contacts and knowledge.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>







    @if ($course->faqs->count())
        <h2 class="text-center mb-2" style="font-size: 2rem;">
            <span style="color: #f29c12;">Our </span> FAQs
        </h2>
        <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
            Imperative FAQs About Us!
        </p>
    @endif
    <section>
        <div class="container">
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="accordion" id="marketingAccordion">
                        @if ($course->faqs->count())
                            <div class="accordion my-4" id="faqAccordion">
                                @foreach ($course->faqs as $index => $faq)
                                    <div class="accordion-item border border-warning-subtle">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $index }}" style="color: #f29c12;">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}"
                                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" style="list-style: disc;">
                                                {!! nl2br(e($faq->answer)) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <!-- Add other sections similarly -->
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section style="padding: 60px 0; background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side Text -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="mb-4 display-6 fw-bold">
                        Take your tech career to the next level with Digicrome’s top-quality,
                        <span style="color: #f29c12;">best-in-class training programs.</span>
                    </h2>
                    <p style="font-size: 16px; color: #444;">
                        Take these smart steps to accelerate your success in the technology field.
                    </p>
                    <br>
                    <div class="col-auto text-center">
                        <div class="d-flex justify-content-center gap-3">
                            @if ($course->browser)
                                <div class="text-start mt-3">
                                    <button class="btn btn-sm btn-outline-success rounded-pill px-4 py-3 mt-3"
                                        style="background-color: green;" data-bs-toggle="modal"
                                        data-bs-target="#leadPopup">
                                        <i class="fa fa-download me-2"></i>Download Brochure
                                    </button>
                                </div>
                            @endif
                            <div class="text-start mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill px-4 py-3 mt-3"
                                    style="background-color: #1c1647;" data-bs-toggle="modal"
                                    data-bs-target="#applyNowPopup">
                                    <i class="fa fa-paper-plane me-2"></i>Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="col-md-6 text-center">
                    <img src="https://www.meritshot.com/wp-content/uploads/2023/11/banner2.png" alt="Tech Career Boost"
                        title="Accelerate Tech Career" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if you're on the specific page (optional: check URL or use a class)
            // Example: if this script is only loaded on the IB Landing page, no condition needed

            // Get the source input field by name
            const sourceField = document.querySelector('input[name="source"]');

            // If it exists, set its value
            if (sourceField) {
                sourceField.value = "ib landing";
            }
        });
    </script>

@endsection
