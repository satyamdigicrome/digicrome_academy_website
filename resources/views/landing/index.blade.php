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

        @media only screen and (max-width: 768px) {
            .breadcumb-area {
                margin: 0px;
                padding: 0px 0 39px;
            }
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
     <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }
    body {
      background-color: #f4f4f4;
    }
    #color{
        color: #003087;
    }
    .hero {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center;
      background-size: cover;
      padding: 60px 20px;
      text-align: center;
      color: #fff;
    }
    .hero h1 {
      font-size: 2.5em;
      margin-bottom: 15px;
    }
    .hero p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }
    .cta-button {
      background-color: #ff6200;
      color: #fff;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      font-size: 1.1em;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .cta-button:hover {
      background-color: #e55a00;
    }
    .form-container {
      background-color: #fff;
      padding: 20px;
      margin: 20px auto;
      max-width: 400px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-container input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
    }
    .section {
      padding: 40px 20px;
      text-align: center;
    }
    .section h2 {
      color: #003087;
      font-size: 1.8em;
      margin-bottom: 20px;
    }
    .benefits, .testimonials, .lead-magnet {
      background-color: #fff;
      margin: 20px auto;
      max-width: 800px;
      padding: 20px;
      border-radius: 8px;
    }
    .benefits ul {
      list-style: none;
      text-align: left;
      max-width: 600px;
      margin: 0 auto;
    }
    .benefits li {
      margin: 10px 0;
      font-size: 1.1em;
    }
    .benefits li::before {
      content: '';
      color: #28A745;
      margin-right: 10px;
    }
    .lead-magnet img {
      max-width: 200px;
      margin: 20px auto;
      display: block;
    }
    .testimonials p {
      font-style: italic;
      color: #333;
    }
    .urgency {
      background-color: #fff;
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
      border-radius: 8px;
    }
    .urgency span {
      color: #ff6200;
      font-weight: bold;
    }
    footer {
      background-color: #003087;
      color: #fff;
      text-align: center;
      padding: 20px;
    }
    footer a {
      color: #fff;
      text-decoration: none;
    }
    @media (max-width: 600px) {
      .hero h1 {
        font-size: 1.8em;
      }
      .hero p {
        font-size: 1em;
      }
      .form-container {
        max-width: 90%;
      }
    }
  </style>
  
    <div class="breadcumb-area two d-flex align-items-center position-relative" id="breadcrumb"
    style="min-height: 600px; width: 100%; padding:0px background: none;">

    <!-- Desktop background image (only visible md and up) -->
    <img loading="lazy" src="{{ asset('assets/images/bann.webp') }}" alt="background"
        class="img-fluid w-100 h-80 position-absolute top-0 start-0 object-cover d-none d-md-block"
        style="z-index: 1; padding-top: 12%;" />

    <div class="container position-relative mt-4" style="z-index: 1;">
        <div class="row align-items-center">

            <!-- Desktop Content (show only on md and larger) -->
            <div class="d-none d-md-flex w-100">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">Post Graduation Program in Investment Banking</h1>

                    <p class="mt-2">Program inspired by experts from companies like J.P. Morgan, Citi Bank</p>
                    <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4 mt-2">
                        <img loading="lazy" src="{{ asset('assets/images/jp.jpg') }}" width="190" height="120"
                            alt="card1" title="card1" />
                        <img loading="lazy" src="{{ asset('assets/images/Citibank.jpg') }}" width="190" height="120"
                            alt="card1" title="card1" />
                    </div>
                    <p class="fs-5 fw-semibold text-secondary mt-2 mb-3">
                        <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                        Build Career Skills with Internship Program from J.P. Morgan, Citi Bank and Bank of America
                    </p>
                    <p class="text-dark fs-6 mb-2">
                        <i class="fa-solid fa-briefcase text-success me-2"></i>
                        4.8/5 (1000+ ratings)
                    </p>
                    <p class="text-dark fs-6 mb-2">
                        <i class="fa-solid fa-clock text-warning me-2"></i>
                        Salaries up to 37 LPA
                    </p>
                    <p class="text-dark fs-6 mb-0">
                        <b> Step into a profitable finance career by learning abilities that help businesses develop and make a positive impact on lives.</b>
                    </p>
                    <br>
                </div>

                <!-- Desktop Right Column -->
                <div class="col-md-6 text-end">
                    <!-- You can add desktop right content here if needed -->
                </div>
            </div>

            <!-- Mobile Content (show only below md) -->
<div class="d-block d-md-none w-100 text-center" 
     style="padding: 0; 
            background-image: url('{{ asset('assets/images/gp.webp') }}'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;"> 
    <div class="hero" style="background: linear-gradient(rgb(0 0 0 / 19%), rgb(0 0 0 / 62%)), no-repeat center">
    <h1 class=" text-uppercase" style="color: #fff; font-weight: bold; text-transform: capitalize; line-height: 38px;">Post Graduation Program in Investment Banking</h1><br><br><br>
    <p style="color: #fff; font-weight: bold;">Launch your high-flying finance career with our industry-leading course!</p>
@if ($course->browser)
                            <button class="btn btn-sm btn-outline-success px-3 py-2"
                                style="background-color: #ff6200; font-size:18px; padding:12px !important;" data-bs-toggle="modal" data-bs-target="#leadPopup">
                               Get Your Free Career Guide
                            </button>
                        @endif
                        
              </div>
            </div>
        </div>
        <!-- Show only on mobile, hide on md (768px+) and larger -->


        <!-- Feature Strip Section (visible on all devices) -->
        <div class="feature-strip position-relative mt-5">
            <div class="container">
                <div
                    class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">

                    <!-- Box 1 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}"
                                class="lazyload mb-2" alt="data science program institute"
                                title="data science program institute">
                            <p class="icon-plus">5000</p>
                            <span>Career Transformed</span>
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}"
                                class="lazyload mb-2" alt="data science programs" title="data science programs">
                            <p>Internship Possibility</p>
                            <span>Based on Performance</span>
                        </div>
                    </div>

                    <!-- Box 3 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}"
                                class="lazyload mb-2" alt="best online data science programs"
                                title="best online data science programs">
                            <p>06 Months</p>
                            <span>Live Online Classes</span>
                        </div>
                    </div>

                    <!-- Box 4 -->
                    <div class="features-box text-center flex-fill min-w-0">
                        <div class="date-border">
                            <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}"
                                class="lazyload mb-2" alt="data science programs near me"
                                title="data science programs near me">
                            <p style="color: #003087">Next Batch starts from</p>
                            <span>{{ $course->course_online_payment }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        

    </div>
</div>
<!-- Mobile only content -->
<div class="d-block d-md-none text-center px-3 mt-3">
    <p class="mt-2 mb-3 fw-medium">
        Program inspired by experts from companies like J.P. Morgan, Citi Bank
    </p>
    <div class="d-flex flex-column align-items-center gap-3">
        <img loading="lazy" src="{{ asset('assets/images/jp.jpg') }}" width="190" height="120"
            alt="J.P. Morgan" title="J.P. Morgan" />
        <img loading="lazy" src="{{ asset('assets/images/Citibank.jpg') }}" width="190" height="120"
            alt="Citi Bank" title="Citi Bank" />
    </div>
</div>

<div class="section urgency">
    <h2>Limited Seats Available!</h2>
    <p>Enroll by <span>{{ $course->course_online_payment }}</span> to secure your spot and get <span>20% off</span> the course fee!</p><br>
<a href="javascript:void(0);" class="btn btn-sm btn-primary  px-3 py-2"
                            style="background-color: #e55a00;     border-radius: 0px !important;
    padding: 14px !important;
    font-size: 18px;"  data-bs-toggle="modal" data-bs-target="#leadPopup">
                            Download Now</a></div>
<div class="section benefits py-4 px-3 px-md-5">
  <h2 class="text-center mb-4 fw-bold">Why Choose Digicrome’s Investment Banking Course?</h2>
  <ul class="list-unstyled mx-auto" style="max-width: 800px;">
    <li class="d-flex align-items-start mb-3">
      <span class="me-2 text-primary fs-5">✔</span>
      <span>Learn from top investment banking professionals with real-world experience.</span>
    </li>
    <li class="d-flex align-items-start mb-3">
      <span class="me-2 text-primary fs-5">✔</span>
      <span>Master financial modeling, valuation, and deal structuring.</span>
    </li>
    <li class="d-flex align-items-start mb-3">
      <span class="me-2 text-primary fs-5">✔</span>
      <span>Get job-ready with practical case studies and projects.</span>
    </li>
    <li class="d-flex align-items-start mb-3">
      <span class="me-2 text-primary fs-5">✔</span>
      <span>Access exclusive career guidance and placement support.</span>
    </li>
  </ul>
</div>


    {{-- <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-auto text-center">
                    <div class="d-flex justify-content-center gap-3">
                        @if ($course->browser)
                            <button class="btn btn-sm btn-outline-success rounded-pill px-3 py-2"
                                style="background-color: #ff6200;" data-bs-toggle="modal" data-bs-target="#leadPopup">
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
    </section> --}}
    <section>
        <section class="logo-slider-section py-5" style="background-color: #fff4e5;"> <!-- light orange background -->
            <h2 class="text-center mb-4" style="font-size: 2rem; color:#003087;">
                Trusted by <span style="color: #003087;">world's best</span> Organisations
            </h2>
            <div class="container-fluid custom-width">

                <!-- Single row: slides left to right -->
                <div class="logo-marquee marquee-left">
                    <div class="logo-track">
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
                        <h2 class="text-center mb-2" style="font-size: 2rem; color:#003087;">
                            Our <span style="color: #003087;">Course </span> Curriculum
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
                                                aria-controls="collapse{{ $index }}" style="color: #003087;     font-size: 1.5rem;">
                                                {{ $module->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}"
                                            class="accordion-collapse collapse {{ $index === 0 ? 'hide' : '' }}"
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
                            <h2 class="mb-5 display-5 fw-bold" style="color: #003087">About the Program</h2>
                            <p>
                                {{ $course->about }}
                            </p>
                        </div>
                        <!-- Right: Company Image -->
                        <div class="col-md-6 text-center">
    <img 
        loading="lazy"
        src="{{ asset('assets/images/gp.webp') }}" 
        alt="Company Image"
        title="Company Image"
        class="img-fluid"
        style="
            max-width: 90%;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
            transition: all 0.3s ease-in-out;
        "
        onmouseover="this.style.transform='scale(1.02) perspective(1000px) rotateX(0deg) rotateY(0deg)'"
        onmouseout="this.style.transform='perspective(1000px) rotateX(5deg) rotateY(-5deg)'"
    >
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
     <div class="text-center">
    <button class="btn btn-primary" style="font-size: 16px; padding: 10px 20px; " data-bs-toggle="modal" data-bs-target="#leadPopup">
        Free Guide
    </button>
</div>



    <section>
        <div class="testimonial-area style-two mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- section title -->
                        <div class="section-sub-title two">
                            <h6><img loading="lazy"src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}"
                                    alt="icon" title="icon" style="color: #003087">TESTIMONIALS</h6>
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
                                                style="font-size:18px; font-weight:600; color:#003087; margin:10px 0;">
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
                    <h2 style="font-size: 2.5rem; font-weight: 700; color: #003087;">Sample Projects You'll Build</h2>
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
            <h2 class="text-center mb-2" style="font-size: 2rem; color:#003087">
                Our <span style="color: #003087;">Case </span> Studies
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
                <h2 class="mb-5 text-center display-5 fw-bold" style="color: #003087">Languages and Tools Covered</h2>
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

                        <h2 class="  text-center mb-5 display-5 fw-bold" style="color: #003087">Program Learning Outcomes</h2>

                        <!-- Image -->
                        <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                            <img loading="lazy" src="{{ asset('assets/images/Outcomes.webp') }}"
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
            <h2 class="mb-5 display-5 fw-bold" style="color:#003087;">This Program is Ideal For</h2>
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
                        <h5 class="fw-bold mb-3">Students</h5>
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
                <h2 class="  text-center mb-4 display-6 fw-bold">Career Support and Guidance</h2>

                <!-- Image Section -->
                <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/l2.webp') }}" alt="Career Support"
                        title="Career Support & Guidance" class="img-fluid"
                        style="width: 300px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>


                <!-- Text Section -->
                <div class="col-md-6">
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li class="mb-3">
                            <i class="fas fa-user-check text-primary me-2"></i>
                            Get personalized career counselling to help you choose the right path in investment banking.
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
            <span style="color: #003087;">Our </span> FAQs
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
                                                aria-controls="collapse{{ $index }}" style="color: #003087;">
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
                        <span style="color: #003087;">best-in-class training programs.</span>
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
                                        style="background-color: #ff6200;" data-bs-toggle="modal"
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
                    <img src="{{ asset('assets/images/last.webp') }}" alt="Tech Career Boost"
                        title="Accelerate Tech Career" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="leadPopup" tabindex="-1" aria-labelledby="leadPopupLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content custom-lead-modal-content">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>

        <form id="leadForm">
          @csrf
          <input type="hidden" name="course_id" value="{{ $course->id }}">
  
          <h4 class="custom-lead-modal-title">Quick Response </h4>
  
          <input type="text" name="name" placeholder="Name" class="form-control custom-lead-input" required>
          <input type="tel" name="mobile" placeholder="Mobile Number" class="form-control custom-lead-input" required>
          <input type="email" name="email" placeholder="E-mail ID" class="form-control custom-lead-input" required>
        <!-- Hidden City field -->
<input type="hidden" name="address" value="NA">
<input type="hidden" name="source" value="Landing(broucher)">
<!-- Hidden Qualification field -->
<input type="hidden" name="title" value="NA">

<!-- Hidden Experience field -->
<input type="hidden" name="profession" value="NA">

  
          <button type="submit" style="background: green;" class="btn custom-lead-submit-btn w-100 mt-2">Download Brochure</button>
        </form>
      </div>
    </div>
  </div>
  <style>
    .custom-lead-modal-content {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 14px;
      padding: 25px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #fff;
          margin-top: 115px;
    }
  
    .custom-lead-modal-title {
      color: #ffffff;
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 20px;
      text-align: center;
    }
  
    .custom-lead-input {
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #ffffff;
      margin-bottom: 12px;
    }
  
    .custom-lead-input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }
  
    .custom-lead-input:focus {
      background: rgba(255, 255, 255, 0.1);
      border-color: #ffffff;
      color: #fff;
      box-shadow: none;
    }
  
    .form-select.custom-lead-input option {
      background-color: #1a1a1a;
      color: #fff;
    }
  
    .custom-lead-submit-btn {
      background-color: rgba(255, 255, 255, 0.9);
      color: #003087;
      font-weight: 600;
      border: none;
      transition: 0.3s ease;
    }
  
    .custom-lead-submit-btn:hover {
      background-color: #fff;
      color: #003087;
    }
  </style>
  <!-- Apply Now Modal -->
<!-- Modal Start -->
<div class="modal fade" id="applyNowPopup" tabindex="-1" aria-labelledby="applyNowPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content custom-reg-modal-content">
        <div class="modal-header custom-reg-modal-header" style="background: #fff;">
          <h5 class="modal-title custom-reg-modal-title" id="applyNowPopupLabel" style="color:#003087;">Quick Response </h5>
          <button type="button" class="custom-close-icon" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
  
        <form method="POST" action="{{ route('lead.store') }}">
          @csrf
          <div class="modal-body" id="form1">
            <div class="row g-3">
                <div class="col-12">
                  <input type="text" name="name" class="form-control custom-reg-input" placeholder="Name" required>
                </div>
                <div class="col-12">
                  <input type="tel" name="phone" class="form-control custom-reg-input" placeholder="Mobile Number" required>
                </div>
                <div class="col-12">
                  <input type="email" name="email" class="form-control custom-reg-input" placeholder="E-mail ID" required>
                </div>
              
                <!-- Hidden fields with value "NA" -->
                <input type="hidden" name="address" value="NA">
                <input type="hidden" name="qualification" value="NA">
                <input type="hidden" name="experience" value="NA">
              
                <!-- Other hidden fields -->
                <input type="hidden" name="page_name" value="{{ $course->name }}">
                <input type="hidden" name="source" value="Landing(Course)">
                <input type="hidden" name="course_id" value="{{ $course->id ?? '' }}">
              </div>
              
  
            {{-- <p class="mt-3 custom-reg-note">
              By submitting the form, you agree to our
              <a href="#" class="custom-reg-link">Terms and Conditions</a> and
              <a href="/privacy-policy" class="custom-reg-link">Privacy Policy</a>.
            </p> --}}
          </div>
  
          <div class="modal-footer border-0">
            <button type="submit" class="btn custom-reg-submit-btn w-100">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Styles -->
  <style>
    .custom-reg-modal-content {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 16px;
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .custom-close-icon {
        position: absolute;
    background: none;
    border: none;
    font-size: 2rem;
    color: #003087;
    cursor: pointer;
    line-height: 1;
    right: 17px;
  }

  
    .custom-reg-modal-header {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
  
    .custom-reg-modal-title {
      color: #ffffff;
      font-weight: 600;
      font-size: 1.25rem;
    }
  
    .custom-reg-close {
      filter: invert(1);
    }
  
    .custom-reg-input {
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #ffffff;
    }
  
    .custom-reg-input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }
  
    .custom-reg-input:focus {
      background: rgba(255, 255, 255, 0.1);
      border-color: #ffffff;
      color: #fff;
      box-shadow: none;
    }
  
    .form-select.custom-reg-input option {
      background-color: #1a1a1a;
      color: #fff;
    }
  
    .custom-reg-note {
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.9rem;
    }
  
    .custom-reg-link {
      color: #ffffff;
      text-decoration: underline;
    }
  
    .custom-reg-submit-btn {
      background-color: rgba(255, 255, 255, 0.9);
      color: #003087;
      font-weight: 600;
      border: none;
    }
  
    .custom-reg-submit-btn:hover {
      background-color: #fff;
      color: #003087;
    }
    #form1{
        background: none !important;
    }
  </style>
  
  

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
    <script>
    document.getElementById('leadForm').addEventListener('submit', function(e) {
        e.preventDefault();
        let form = e.target;
        let formData = new FormData(form);
    
        fetch("{{ route('store.lead') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': form.querySelector('[name=_token]').value
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success && data.download_url) {
                // Close modal
                var modal = bootstrap.Modal.getInstance(document.getElementById('leadPopup'));
                modal.hide();
    
                // Trigger brochure download
                window.open(data.download_url, '_blank');
            } else {
                alert("Submission failed!");
            }
        })
        .catch(err => {
            console.error("Error:", err);
        });
    });
    </script>

@endsection
