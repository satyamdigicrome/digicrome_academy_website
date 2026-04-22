@extends('layouts.app')

@section('title', $course->meta_title ?? $course->name)
@section('meta_description', $course->meta_description ?? $course->name)
@section('meta_keywords', $course->meta_keywords ?? $course->name)

@push('styles')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($course->faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ $faq->question }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{!! nl2br(e($faq->answer)) !!}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "{{ $course->name }}",
  "image": "{{ asset('storage/' . $course->image) }}",
  "description": "{{ $course->about }}",
  "offers": {
    "@type": "AggregateOffer",
    "url": "{{ url()->current() }}"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": {{ $course->sku }},
    "ratingCount": 10302
  },
  "review": {
    "@type": "Review",
    "reviewBody": "I had a great experience with Digicrome!",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": {{ $course->sku }},
      "bestRating": 5,
      "worstRating": 1
    },
    "author": {
      "@type": "Person",
      "name": "Suhani Kahaniyan"
    }
  }
}
</script>
    <link href="{{ asset('assets/css/courses.css') }}" rel="stylesheet">
    <style>
        #sticky-header {
            margin-bottom: 80px !important;
        }
        .course-heading {
            margin-top: 4rem;
        }
        h2{
            display: block !important;
        }
    </style>
@endpush

@section('content')
    @include('components.lead-form-popup')
    @if ($course->course_free == 1)
        <x-ds-with-ai-course :course="$course" />
    @elseif ($course->course_free == 2)
        <div class="breadcumb-area two d-flex">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                            {{-- <img loading="lazy"src="{{ asset('assets/images/card11.webp') }}" width="190" height="120" alt="card1" title="card1" /> --}}
                            <img loading="lazy"src="{{ asset('assets/images/Card.webp') }}" width="319" height="58"
                                alt="card" title="card" style="border: 2px solid #f29c12; border-radius: 5px;" />
                        </div>


                        <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">{{ $course->name }}</h1>

                        <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                            <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                            100% Job Assurance Investment Banking Course<br>
                            for Graduates and Working Professionals.<br>

                        </p>

                        <p class="text-dark fs-6 mb-2">
                            <i class="fa-solid fa-briefcase text-success me-2"></i>
                            Learn from global experts and get certified by Digicrome
                        </p>

                        <p class="text-dark fs-6 mb-2">
                            <i class="fa-solid fa-clock text-warning me-2"></i>
                            Suitable for Final Years, Graduates and Early Professionals
                        </p>

                        <p class="text-dark fs-6 mb-0">
                            <i class="fa-solid fa-trophy text-danger me-2"></i>
                            You`re guaranteed to find something that`s right for you.
                        </p>


                        <div class="mt-4 d-flex gap-3">
                            @if ($course->browser)
                                <button class="btn btn-outline-primary" style="background-color: green;"
                                    id="downloadBrochureBtn" onclick="openModal('leadPopup')">
                                    <i class="fa fa-download me-2"></i>Download Brochure
                                </button>
                            @endif

                            <a class="btn btn-primary" style="background-color: #1c1647;" id="quickResponseBtn"
                                onclick="openModal('applyNowPopup')">
                                <i class="fa fa-paper-plane me-2"></i>Apply Now
                            </a>

                        </div><br>
                        <p><b>Note:-</b> This is an educational program only. No investment or financial product
                            is being offered.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img loading="lazy"src="{{ asset('assets/images/3.webp') }}" class="img-fluid" alt="CIBOP"
                            title="CIBOP" />
                    </div>
                </div>
                <d iv class="feature-strip position-relative mt-5">
                    <div class="container">
                        <div
                            class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}"
                                        class="lazyload" alt="data science program institute"
                                        title="data science program institute">
                                    <p class="icon-plus">5000</p>
                                    <span>Career Transformed</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}"
                                        class="lazyload" alt="data science programs" title="data science programs">
                                    <p> Internship Possibility</p>
                                    <span> Based on Performance</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}"
                                        class="lazyload" alt="best online data science programs"
                                        title="best online data science programs">
                                    <p>{{ $course->course_duration ?? '06 Months' }}</p>
                                    <span>Live Online Classes</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}"
                                        class="lazyload" alt="data science programs near me"
                                        title="data science programs near me">
                                    <p style="color: #f8b700">
                                        {{ $course->course_online_payment }} </p>
                                    <span>Next Batch starts on</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
        </div>
    @elseif($course->course_free == 3)
    {{-- ===== DARK CYBER HERO — AI Security & similar courses ===== --}}
        <style>
            #sticky-header {
                margin-bottom: 0px !important;
            }
            .cyber-hero {
                position: relative;
                z-index: 0;
                isolation: isolate;
                min-height: auto;
                background: linear-gradient(135deg, #050a18 0%, #0a1628 50%, #0d1f3c 100%);
                overflow: hidden;
                padding: 70px 0 18px;  /* compact: fits everything in 1 viewport */
            }
            /* ---- Responsive padding ---- */
            @media (max-width: 991.98px) {
                .cyber-hero { padding: 65px 0 16px; }
            }
            @media (max-width: 767.98px) {
                .cyber-hero { padding: 60px 0 14px; }
            }
            .cyber-hero::before {
                content: '';
                position: absolute;
                inset: 0;
                z-index: 0;
                background-image:
                    linear-gradient(rgba(0,255,200,.04) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(0,255,200,.04) 1px, transparent 1px);
                background-size: 48px 48px;
                pointer-events: none;
            }
            .cyber-hero::after {
                content: '';
                position: absolute;
                top: -80px; left: -80px;
                z-index: 0;
                width: 420px; height: 420px;
                background: radial-gradient(circle, rgba(0,220,180,.18) 0%, transparent 70%);
                pointer-events: none;
                animation: cyber-pulse 6s ease-in-out infinite;
            }
            @@keyframes cyber-pulse {
                0%,100% { opacity: .6; transform: scale(1); }
                50%      { opacity: 1;  transform: scale(1.12); }
            }
            /* ---- Badge ---- */
            .cyber-hero .cyber-badge {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                background: rgba(0,220,180,.12);
                border: 1px solid rgba(0,220,180,.35);
                color: #00ddb4;
                font-size: .72rem;
                font-weight: 600;
                letter-spacing: .07em;
                text-transform: uppercase;
                padding: 4px 11px;
                border-radius: 4px;
                margin-bottom: 10px;
            }
            /* ---- Title ---- */
            .cyber-hero h2.cyber-title {
                font-size: clamp(22px, 2.8vw, 34px);
                font-weight: 800;
                color: #fff;
                line-height: 1.2;
                margin-bottom: 10px;
            }
            .cyber-hero h2.cyber-title span.cyber-accent {
                color: #00ddb4;
                text-shadow: 0 0 16px rgba(0,220,180,.5);
            }
            /* ---- Bullet points ---- */
            .cyber-hero .cyber-point {
                display: flex;
                align-items: flex-start;
                gap: 8px;
                color: #c8d8f0;
                font-size: .85rem;
                margin-bottom: 7px;
            }
            .cyber-hero .cyber-point i { margin-top: 2px; flex-shrink: 0; font-size: .8rem; }
            /* ---- Buttons ---- */
            .cyber-hero .btn-cyber-primary {
                background: linear-gradient(135deg, #00ddb4, #00a88a);
                border: none;
                color: #050a18;
                font-weight: 700;
                padding: 8px 20px;
                font-size: .88rem;
                border-radius: 6px;
                transition: all .25s;
                box-shadow: 0 0 14px rgba(0,220,180,.35);
            }
            .cyber-hero .btn-cyber-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 0 24px rgba(0,220,180,.6);
                color: #050a18;
            }
            .cyber-hero .btn-cyber-outline {
                background: transparent;
                border: 2px solid #00ddb4;
                color: #00ddb4;
                font-weight: 700;
                padding: 8px 20px;
                font-size: .88rem;
                border-radius: 6px;
                transition: all .25s;
            }
            .cyber-hero .btn-cyber-outline:hover {
                background: rgba(0,220,180,.12);
                transform: translateY(-2px);
            }
            /* ---- Right image ---- */
            .cyber-hero .cyber-banner-wrap {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .cyber-hero .cyber-banner-wrap img {
                border-radius: 10px;
                box-shadow: 0 0 30px rgba(0,220,180,.22), 0 0 60px rgba(0,100,200,.12);
                max-height: 300px;
                object-fit: cover;
                width: 100%;
            }
            /* ---- Corner brackets ---- */
            .cyber-corner {
                position: absolute;
                width: 22px; height: 22px;
                border-color: #00ddb4;
                border-style: solid;
                opacity: .7;
            }
            .cyber-corner.tl { top: -5px;    left: -5px;  border-width: 2px 0 0 2px; }
            .cyber-corner.tr { top: -5px;    right: -5px; border-width: 2px 2px 0 0; }
            .cyber-corner.bl { bottom: -5px; left: -5px;  border-width: 0 0 2px 2px; }
            .cyber-corner.br { bottom: -5px; right: -5px; border-width: 0 2px 2px 0; }
            /* ---- Stats strip — compact, always visible ---- */
            .cyber-stats {
                background: rgba(255,255,255,.05);
                border: 1px solid rgba(0,220,180,.18);
                border-radius: 8px;
                padding: 12px 20px;
                margin-top: 18px;
                backdrop-filter: blur(6px);
            }
            .cyber-stats .stat-item { text-align: center; }
            .cyber-stats .stat-num {
                font-size: 1.15rem;
                font-weight: 800;
                color: #00ddb4;
                line-height: 1.1;
            }
            .cyber-stats .stat-label {
                font-size: .67rem;
                color: #8aa8c8;
                text-transform: uppercase;
                letter-spacing: .05em;
                margin-top: 2px;
            }
            /* ---- Dividers between stats ---- */
            .cyber-stats .stat-item + .stat-item {
                border-left: 1px solid rgba(0,220,180,.15);
            }

            /* ---- Responsive: mobile ---- */
            @media (max-width: 575.98px) {
                .cyber-hero .cyber-badge    { font-size: .65rem; }
                .cyber-hero h1.cyber-title  { font-size: 21px; }
                .cyber-hero .cyber-point    { font-size: .8rem; }
                .cyber-hero .btn-cyber-primary,
                .cyber-hero .btn-cyber-outline { width: 100%; text-align: center; }
                .cyber-stats { padding: 10px 8px; margin-top: 12px; }
                .cyber-stats .stat-num  { font-size: 1rem; }
                .cyber-stats .stat-item + .stat-item { border-left: none; border-top: 1px solid rgba(0,220,180,.15); }
            }
            /* ---- Responsive: hide corners on mobile ---- */
            @media (max-width: 767.98px) {
                .cyber-corner { display: none; }
                .cyber-hero .cyber-banner-wrap img { max-height: 220px; }
            }
            /* ---- Responsive: tablet ---- */
            @media (min-width: 576px) and (max-width: 991.98px) {
                .cyber-hero h1.cyber-title  { font-size: 26px; }
                .cyber-stats .stat-num      { font-size: 1.05rem; }
            }

            .cyber-hero { background:
                linear-gradient(135deg, rgba(5,10,24,0.88) 0%, rgba(5,10,24,0.72) 100%),
                url('{{ asset('assets/images/ds-withai-course/aiss-hero-bg.jpg') }}') no-repeat center center / cover; }

            .visually-hidden {
                position: absolute;
                width: 1px;
                height: 1px;
                overflow: hidden;
                clip: rect(0,0,0,0);
            }
        </style>

        <div class="cyber-hero">
            <div class="container position-relative" style="z-index:1;">
                <div class="row align-items-center gy-2">

                    {{-- LEFT: text --}}
                    <div class="col-lg-6">
                        <div class="cyber-badge">
                            <i class="fa-solid fa-lock"></i> Next-Gen AI Security Program
                        </div>
                        <h1 class="visually-hidden">AI Security and Cybersecurity Program</h1>
                        <h2 class="cyber-title">
                            Cyber Security: 
                            <br><span class="cyber-accent">Security of AI</span>
                        </h2>

                        <div class="cyber-point">
                            <i class="fa-solid fa-shield-halved text-info"></i>
                            <span>Get <strong style="color:#00ddb4;">100% Placement Assistance</strong> in {{ $course->name }}</span>
                        </div>
                        <div class="cyber-point">
                            <i class="fa-solid fa-briefcase" style="color:#00ddb4;"></i>
                            <span>Learn from global experts and get certified by Digicrome</span>
                        </div>
                        <div class="cyber-point">
                            <i class="fa-solid fa-clock text-warning"></i>
                            <span>Suitable for Beginners, Freshers, and Working Professionals</span>
                        </div>
                        <div class="cyber-point">
                            <i class="fa-solid fa-trophy text-warning"></i>
                            <span>You're guaranteed to find something that's right for you.</span>
                        </div>

                        <div class="mt-2 d-flex flex-wrap gap-2">
                            @if ($course->browser)
                                <a class="btn btn-cyber-outline" id="downloadBrochureBtn" onclick="openModal('leadPopup')">
                                    <i class="fa fa-download me-1"></i>Download Brochure
                                </a>
                            @endif
                            <a class="btn btn-cyber-primary" id="quickResponseBtn" onclick="openModal('applyNowPopup')">
                                <i class="fa fa-paper-plane me-1"></i>Apply Now
                            </a>
                        </div>
                    </div>

                    {{-- RIGHT: course image / designer banner --}}
                    <div class="col-lg-6 cyber-banner-wrap">
                        <div class="cyber-corner tl"></div>
                        <div class="cyber-corner tr"></div>
                        <div class="cyber-corner bl"></div>
                        <div class="cyber-corner br"></div>
                        @if ($course->banner_image)
                            <img loading="lazy"
                                 src="{{ asset('storage/' . $course->banner_image) }}"
                                 alt="{{ $course->name }}"
                                 title="{{ $course->name }}"
                                 class="img-fluid" />
                        @else
                            <div style="width:100%;min-height:260px;background:rgba(0,220,180,.06);border:1px solid rgba(0,220,180,.2);border-radius:10px;display:flex;align-items:center;justify-content:center;">
                                <span style="color:rgba(0,220,180,.4);font-size:.9rem;">[Designer Banner Goes Here]</span>
                            </div>
                        @endif
                    </div>

                </div>

                {{-- Stats strip — compact, fully visible without scroll --}}
                <div class="cyber-stats">
                    <div class="row g-0">
                        <div class="col-6 col-md-3 stat-item py-1">
                            <div class="stat-num">5000+</div>
                            <div class="stat-label">Careers Transformed</div>
                        </div>
                        <div class="col-6 col-md-3 stat-item py-1">
                            <div class="stat-num">100%</div>
                            <div class="stat-label">Placement Assistance</div>
                        </div>
                        <div class="col-6 col-md-3 stat-item py-1">
                            <div class="stat-num">{{ $course->course_duration ?? '6 Months' }}</div>
                            <div class="stat-label">Live Online Classes</div>
                        </div>
                        <div class="col-6 col-md-3 stat-item py-1">
                            <div class="stat-num" style="color:#f8b700;">{{ $course->course_online_payment ?? 'Upcoming' }}</div>
                            <div class="stat-label">Next Batch Starts</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @else
        <div class="breadcumb-area two d-flex"
            @if ($course->banner_image) style="background: url('{{ asset('storage/' . $course->banner_image) }}') no-repeat center center / cover;" @endif>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                            {{-- <img loading="lazy"src="{{ asset('assets/images/card2.webp') }}" width="190" height="120"
                                alt="card1" title="card1" /> --}}
                            {{-- <img loading="lazy"src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card"
                         style="border: 2px solid #f29c12; border-radius: 5px;" /> --}}
                        </div>


                        <h1 class="fw-bold text-capitalize text-dark course-heading" style="font-size: 43px;">{{ $course->name }}</h1>

                        <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                            <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                            Get 100% Placement Assistance in {{ $course->name }}
                        </p>

                        <p class="text-dark fs-6 mb-2">
                            <i class="fa-solid fa-briefcase text-success me-2"></i>
                            Learn from global experts and get certified by Digicrome
                        </p>

                        <p class="text-dark fs-6 mb-2">
                            <i class="fa-solid fa-clock text-warning me-2"></i>
                            Suitable for Final Year Graduates and Working Professionals
                        </p>

                        <p class="text-dark fs-6 mb-0">
                            <i class="fa-solid fa-trophy text-danger me-2"></i>
                            You`re guaranteed to find something that`s right for you.
                        </p>


                        <div class="mt-4 d-flex gap-3">
                            @if ($course->browser)
                                <a class="btn btn-outline-primary" id="downloadBrochureBtn" onclick="openModal('leadPopup')"
                                    style="background-color: green;">
                                    <i class="fa fa-download me-2"></i>Download Brochure
                                </a>
                            @endif

                            <a id="quickResponseBtn" onclick="openModal('applyNowPopup')" class="btn btn-primary"
                                style="background-color: green;">
                                <i class="fa fa-paper-plane me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="row breadcumb-autor">
                            <div class="col-lg-4 col-md-4">
                                <div class="breadcumb-autor-box">
                                    {{-- <div class="breadcumb-autor">
                                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-autor.webp') }}" alt="autor">
                            </div> --}}
                                    {{-- <div class="breadcumb-autor-content">
                                <h5>John D. Alexon</h5>
                                <p>Instractor</p>
                            </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                {{-- <div class="breadcumb-category">
                            <span>Course Category</span>
                            <h6>Business</h6>
                        </div> --}}
                            </div>
                            <div class="col-lg-4 col-md-4">
                                {{-- <div class="breadcumb-ratting">
                            <div class="reviews"><span>3 Ratings</span></div>
                            <div class="breadcumb-star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
                                </ul>
                            </div>
                            <div class="breadcumb-ratting-num">
                                <span>(4.5)</span>
                            </div>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4"></div>
                </div>
                {{-- <div class="bread-dot">
            <img loading="lazy"src="{{ asset('assets/images/inner-img/bread-dot.webp') }}" alt="dot">
        </div> --}}
            </div>
        </div>
    @endif
    <!--==================================================-->
    <!-- my coustom section start -->
    <!--==================================================-->
    @if ($course->keypoints && $course->keypoints->count())
        <div class="container my-5">
            <h2 class="text-center mb-2" style="font-size: 2rem;">
                What Our <span style="color: #f29c12;">Program</span> Offers?
            </h2>
            <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                Discover the key features and benefits you'll gain from joining our program
            </p>
            <div class="bg-white rounded shadow p-4">
                @foreach ($course->keypoints->chunk(4) as $chunk)
                    <div class="row mb-4">
                        @foreach ($chunk as $keypoint)
                            <div class="col-md-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <img loading="lazy"src="{{ asset('assets/images/tik.png') }}"
                                        alt="{{ $keypoint->name }}" title="{{ $keypoint->name }}" loading="lazy"
                                        class="keyimg">
                                    <span>{{ $keypoint->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <x-logo-slider :companyLogos="$companyLogos" />

    <section class="py-5 bg-light">
        <div class="container text-center">
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
                        <img loading="lazy" src="{{ asset('assets/images/gp.webp') }}" alt="Company Image"
                            title="Company Image" class="img-fluid"
                            style="
            max-width: 90%;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
            transition: all 0.3s ease-in-out;
        "
                            onmouseover="this.style.transform='scale(1.02) perspective(1000px) rotateX(0deg) rotateY(0deg)'"
                            onmouseout="this.style.transform='perspective(1000px) rotateX(5deg) rotateY(-5deg)'">
                        {{-- <img loading="lazy"src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image" title="Company Image" class="img-fluid"> --}}
                    </div>
                </div>
            </div>
            @if ($course->aparts && $course->aparts->count())
                <div class="brand-list owl-carousel owl-theme">
                    @foreach ($course->aparts as $apart)
                        <div class="item">
                            <div class="card shadow rounded-4 mb-4 h-100">
                                <div class="card-body text-center">
                                    <img loading="lazy"src="{{ asset('storage/' . $apart->image) }}"
                                        class="mb-3 mx-auto d-block" alt="image1" title="image1"
                                        style="height: 70px; width: 70px;">
                                    <h5 class="card-title">{{ $apart->heading }}</h5>
                                    <p class="card-text small text-muted">{{ $apart->tagline }}</p>
                                    <a href="#" class="d-block fw-semibold text-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticModal" data-paragraph="{{ $apart->paragraph }}"
                                        data-heading="{{ $apart->heading }}">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
    </section>
    <!-- Single Bootstrap Modal -->
    <div class="modal fade" id="staticModal" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">More Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalParagraph">Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('staticModal');
            modal.addEventListener('show.bs.modal', function(event) {
                var trigger = event.relatedTarget;
                var paragraph = trigger.getAttribute('data-paragraph');
                var heading = trigger.getAttribute('data-heading');

                modal.querySelector('.modal-title').textContent = heading;
                modal.querySelector('#modalParagraph').innerHTML = paragraph;
            });
        });
    </script>
    <!--==================================================-->
    <!-- my coustom section end -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate-details-course-area style-inner -->
    <!--==================================================-->
    <section class="course-details-area style-inner">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                    <div class="course-details-content">
                        <div class="course-details-heading">
                            <h2 class="course-details-title">Course Overview</h2>
                        </div>
                        {!! $course->description !!}
                    </div>
                </div>

                <style>
                    .course-details-content ul,
                    .course-details-content ol {
                        list-style-type: initial !important;
                        list-style-position: outside !important;
                        margin-left: 1.5rem !important;
                        padding-left: 1.5rem !important;
                    }

                    .course-details-content ul {
                        list-style-type: disc !important;
                    }

                    .course-details-content ol {
                        list-style-type: decimal !important;
                    }

                    .course-details-content li {
                        display: list-item !important;
                        list-style-type: inherit !important;
                        margin-bottom: 6px !important;
                    }
                </style>
                <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                    <div class="event-sidebar-wrapper" style="margin-top: 0px;">
                        <div class="event-sidebar">
                            <div class="event-sidebar-thumb">
                                <img  style="border-radius: 10px;" loading="lazy"src="{{ asset('storage/' . $course->image) }}"
                                    alt="event-sidebar-thumb" title="event-sidebar-thumb">
                            </div>
                            <div class="event-info">
                                <div class="event-info-title">
                                    <h3>Course Includes :</h3>
                                </div>
                            </div>
                            <div class="event-info-list">
                                <ul>
                                    <li>
                                        <div class="label">
                                            Price
                                        </div>
                                        <span class="value-dollar"> {{ number_format($course->price, 0) }} + GST</span>
                                    </li>
                                    <li>
                                        <div class="label">
                                            US Price
                                        </div>
                                        <span class="value-dollar">${{ $course->us_price }}</span>
                                    </li>
                                    <li>
                                        <div class="label">
                                            Dubai Price
                                        </div>
                                        <span class="value-dollar">{{ $course->dubai_price }}AED</span>
                                    </li>
                                    <li>
                                        <div class="label">
                                            <i class="fa-regular fa-circle-check"></i>Certifications
                                        </div>
                                        <span class="value">Yes</span>
                                    </li>
                                    <li>
                                        <div class="label">
                                            <i class="fa-solid fa-globe"></i>Language
                                        </div>
                                        <span class="value">English (US)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="event-info-btn">
                                <a id="quickResponseBtn" onclick="openModal('applyNowPopup')"
                                    style="    background: green;
                            color: #fff;">APPLY NOW<i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            {{--     <div class="course-share-title">
                            <h5>Share Now</h5>
                        </div> --}}
                            @php
                                $currentUrl = urlencode(url()->current());
                                $rawUrl = url()->current();
                                $courseTitle = urlencode($course->name ?? 'Check this course');
                            @endphp
                            {{--
<div class="course-share-icon">
    <ul class="share-icon">

        <!-- WhatsApp -->
        <li>
            <a href="https://wa.me/?text={{ $courseTitle }}%20{{ $currentUrl }}" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </li>

        <!-- Messenger -->
        <li>
            <a href="fb-messenger://share/?link={{ $currentUrl }}" target="_blank">
                <i class="fab fa-facebook-messenger"></i>
            </a>
        </li>

        <!-- Instagram (no direct share) -->
        <li>
            <a href="https://www.instagram.com/" target="_blank" title="Open Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </li>

        <!-- Copy Link -->
        <li>
            <a href="javascript:void(0);" onclick="copyCourseLink()" title="Copy Link">
                <i class="fa fa-link"></i>
            </a>
        </li>

    </ul>
</div>
--}}
                            <!-- JavaScript for Copy Link -->
                            <script>
                                function copyCourseLink() {
                                    const link = "{{ $rawUrl }}";
                                    navigator.clipboard.writeText(link).then(function() {
                                        alert('Course link copied to clipboard!');
                                    }, function(err) {
                                        alert('Failed to copy link.');
                                    });
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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


                @if ($course->extraPartOne->count())
                    <div class="row my-5">
                        <div class="col-12 d-flex align-items-center gap-3">
                            <div
                                style="width: 35px; height: 35px; background-color: #f29c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                1
                            </div>
                            <h2 class="section-heading mb-0">Internship Program</h2>
                        </div>
                    </div>

                    <div class="feature-box container">
                        <div class="row mb-4">
                            @foreach ($course->extraPartOne->chunk(ceil($course->extraPartOne->count() / 2)) as $chunk)
                                <div class="col-md-6">
                                    @foreach ($chunk as $item)
                                        <p>
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            {{ $item->heading }}
                                        </p>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif


                @if ($course->extraPartTwo->count())
                    <div class="row my-5">
                        <div class="col-12 d-flex align-items-center gap-3">
                            <div
                                style="width: 35px; height: 35px; background-color: #f29c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                2
                            </div>
                            <h2 class="section-heading mb-0">Soft Skills Program</h2>
                        </div>
                    </div>

                    <div class="feature-box container">
                        <div class="row mt-4">
                            {{-- <div class="col-12 mb-2">
            <h5 class="text-warning fw-bold">Additional Highlights</h5>
        </div> --}}
                            @foreach ($course->extraPartTwo->chunk(ceil($course->extraPartTwo->count() / 2)) as $chunk)
                                <div class="col-md-6">
                                    @foreach ($chunk as $item)
                                        <p>
                                            <i class="bi bi-check-circle-fill text-success"></i>
                                            {{ $item->heading }}
                                        </p>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Certificates Section -->
                @if ($certificateLogos->isNotEmpty())
                    <x-certificate-logos :logos="$certificateLogos" />
                @endif

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


    <x-trusted-brands />
    <div class="brand-area style-one mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Main heading -->
                    <div class="section_title mb-4">
                        <h2 class="heading-like-h1">Moments of Honour</h2>
                    </div>

                    <!-- Description -->
                    <p class="mb-4">
                        In our EdTech journey of <b> more than a decade,</b> we have received numerous awards.<br>
                        Some of the recent notable awards we have received in analytics are:
                    </p>

                    <!-- List of awards with cup icons aligned -->
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                            <i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
                            <span><b> Bharat Gaurav Awards 2026 </b> for Best EdTech in Online and Digital Education</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
                            <span>DigiCrome as <b>Most Promising Online Education EdTech Platform 2026</b> famous for its
                                quality and innovation.</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7 mt-4">
                    <div class="brand-list owl-carousel">
                        @foreach ($awords as $logo)
                            <div class="col-lg-12">
                                <div class="single-brand-box">
                                    <div class="brand-thumb">
                                        <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" alt="brand-thumb"
                                            title="brand-thumb">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mb-2" style="font-size: 2rem;">
            Our <span style="color: #f29c12;">Placed Learners </span> In Different Big Firms
        </h2>

        <div class="owl-carousel cards-carousel text-center">
            @foreach ($placements as $placement)
                <div class="placement-box" style="padding: 5px;">
                    <div
                        style="border-radius: 6px; overflow: hidden; box-shadow: 0 0 5px rgba(0,0,0,0.1); background: #fff;">
                        <img loading="lazy"src="{{ asset('storage/' . $placement->image) }}"
                            alt="{{ $placement->name }}" title="{{ $placement->name }}"
                            style="width: 100%; height: auto;">
                        <div class="placement-overlay p-2">
                            <h6 style="margin: 0; font-size: 14px; color:#fff">{{ $placement->name }}</h6>
                            <small style="font-size: 12px;">{{ $placement->position }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section class="mt-4">
        <section class="py-5" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-md-3">
                        <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                            <h5 class="mb-2 text-muted">Happy Learners</h5>
                            <h2 class="text-primary fw-bold display-6">20,000+</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                            <h5 class="mb-2 text-muted">Average Rating</h5>
                            <h2 class="text-warning fw-bold display-6">
                                4.8
                                <span class="shiny-star">★</span>
                            </h2>

                            <style>
                                .shiny-star {
                                    color: gold;
                                    animation: shimmer 1.5s infinite;
                                    font-size: 1.2em;
                                    margin-left: 5px;
                                }

                                @keyframes shimmer {
                                    0% {
                                        text-shadow: 0 0 2px gold;
                                    }

                                    50% {
                                        text-shadow: 0 0 8px #ffdd57, 0 0 12px #ffaa00;
                                    }

                                    100% {
                                        text-shadow: 0 0 2px gold;
                                    }
                                }
                            </style>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                            <h5 class="mb-2 text-muted">Average Salary Hike</h5>
                            <h2 class="text-success fw-bold display-6">80%</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                            <h5 class="mb-2 text-muted">Average Package</h5>
                            <h2 class="text-danger fw-bold display-6" style="color:rgb(133 69 159) !important;">₹ 8 LPA
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if($course->course_free != 3)
        <x-mentor-popup :mentors="$mentors" />
        @endif
        <section class="my-5">
            <div class="container">
                <h2 class="text-center mb-2" style="font-size: 2rem;">
                    Our <span style="color: #f29c12;">Case </span> Studies
                </h2>
                <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                    Insights from Our Recent Learners
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
    </section>
    {{-- <section>
    <div class="testimonial-area style-one">
		<div class="container">
			<div class="row section-title-space align-items-center">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>TESTIMONIALS</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>What Students Say About </h1>
						<h1>Digicrome Experience</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="testi-thumb-wrapper">
						<div class="testimonial-thumb">
							<img loading="lazy"src="{{ asset('assets/images/home-one/testi-thumb.webp') }}" alt="testimonial-thumb" title="testimonial-thumb">
						</div>
						<div class="testi-dot-shape">
							<img loading="lazy"src="{{ asset('assets/images/home-one/testi-dot.webp') }}" alt="testi-dot-shape" title="testi-dot-shape">
						</div>
						<div class="testi-map-shape">
							<img loading="lazy"src="{{ asset('assets/images/home-one/testi-map.webp') }}" alt="testi-map-shape" title="testi-map-shape">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="testi-list owl-carousel">
							@foreach ($testimonials as $testimonial)
<div class="col-lg-12">
    <div class="testi-box">
        <div class="single-testi-box">
            <div class="testi-quote">
                <img loading="lazy"src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="testi-quote" title="testi-quote">
            </div>
            <div class="testi-title">
                <h3>{{ $testimonial->tagline }}</h3>
            </div>
            <div class="testi-desc">
                <p>{{ $testimonial->review }}</p>
            </div>
            <div class="testi-ratting">
                <ul>
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= floor($testimonial->rating))
                            <li><i class="fa-solid fa-star"></i></li>
                        @elseif ($i == ceil($testimonial->rating) && $testimonial->rating != floor($testimonial->rating))
                            <li><i class="fa-solid fa-star-half-stroke fa-fw"></i></li>
                        @else
                            <li><i class="fa-regular fa-star"></i></li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
        <div class="testi-autor-box">
            <div class="testi-autor">   
                <img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}" alt="testi-author" title="testi-author" style="width: 60px; height: 60px; border-radius: 50%;">
            </div>
            <div class="testi-autor-content">
                <h5 class="autor-title">{{ $testimonial->name }}</h5>
                <p class="autor-desi">{{ $testimonial->profession }}</p>
            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
                        <a id="quickResponseBtn" onclick="openModal('applyNowPopup')">GET STARTED<i
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
                                                    <li style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                @elseif ($i == ceil($testimonial->rating) && $testimonial->rating != floor($testimonial->rating))
                                                    <li style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
                                                        <i class="fa-solid fa-star-half-stroke fa-fw"></i>
                                                    </li>
                                                @else
                                                    <li style="color:gold; margin-right:2px; text-shadow: 0 0 5px gold;">
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
    <section class="my-5">





        <div class="container my-5">
            <h2 class="text-center mb-3 fw-bold" style="font-size: 2.2rem;">
                Application <span style="color: #f29c12;">Process</span> for Digicrome
            </h2>
            <p class="text-center text-muted mb-5" style="font-size: 1.1rem;">
                Our Acknowledged features offerings
            </p>
            <div class="d-flex justify-content-between align-items-start flex-wrap px-md-5 gap-4">
                <div class="text-center" style="flex: 1; min-width: 140px;">
                    <div class="circle-step mb-2">1</div>
                    <div class="fw-semibold">Career Consultation</div>
                    <div class="text-muted small">Assess eligibility</div>
                </div>
                <div class="text-center" style="flex: 1; min-width: 140px;">
                    <div class="circle-step mb-2">2</div>
                    <div class="fw-semibold">Personalized Guidance</div>
                    <div class="text-muted small">Acceptance letter</div>
                </div>
                <div class="text-center" style="flex: 1; min-width: 140px;">
                    <div class="circle-step mb-2">3</div>
                    <div class="fw-semibold">Easy Registration</div>
                    <div class="text-muted small">Pay booking amount</div>
                </div>
                <div class="text-center" style="flex: 1; min-width: 140px;">
                    <div class="circle-step mb-2">4</div>
                    <div class="fw-semibold">Start Upskilling</div>
                    <div class="text-muted small">Access curriculum</div>
                </div>
                <div class="text-center" style="flex: 1; min-width: 140px;">
                    <div class="circle-step mb-2">5</div>
                    <div class="fw-semibold">Ongoing Support</div>
                    <div class="text-muted small">Mentorship & guidance</div>
                </div>
            </div>
        </div>
        <section class="container-fluid p-20" style="border: 1px solid #ddd;">
            <img loading="lazy"src="{{ asset('assets/images/Start-Here-Course-Page-01.webp') }} " alt="Full Screen Image"
                title="Full Screen Image">
        </section>
        <div class="bg-light py-5 mt-20">
            <h2 class="text-center mb-2" style="font-size: 2rem;">
                Our <span style="color: #f29c12;">Course </span> Comes with Offerings
            </h2>
            <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                By Joining Our Program, Underlying Are The Key Features You Will Get
            </p>
        </div>
        @foreach ($course->keyFeatures as $index => $feature)
            <section class="session-section bg-light py-5 mt-2">
                <div class="container">
                    <div class="row align-items-center">
                        @if ($index % 2 == 0)
                            {{-- Image Left, Text Right --}}
                            <div class="col-md-6 text-center">
                                <img loading="lazy"src="{{ asset('storage/' . $feature->image) }}"
                                    alt="{{ $feature->heading }}" title="{{ $feature->heading }}" class="session-img">
                            </div>
                            <div class="col-md-6 session-text">
                                <h2 class="session-title">{{ $feature->heading }}</h2>
                                <p>{!! $feature->paragraph !!}</p>
                            </div>
                        @else
                            {{-- Text Left, Image Right --}}
                            <div class="col-md-6 session-text">
                                <h2 class="session-title">{{ $feature->heading }}</h2>
                                <p>{!! $feature->paragraph !!}</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img loading="lazy"src="{{ asset('storage/' . $feature->image) }}"
                                    alt="{{ $feature->heading }}" title="{{ $feature->heading }}" class="session-img">
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endforeach
        <!--==================================================-->
        <!--End educate-details-course-area -->
        <!--==================================================-->
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
                                                aria-labelledby="heading{{ $index }}"
                                                data-bs-parent="#faqAccordion">
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
        <!--==================================================-->
        <!-- Start educate-details-course-area style-inner -->
        <!--==================================================-->
        {{-- <x-suggested-courses :courses="$courses" /> --}}
        <!--==================================================-->
        <!--End educate-details-course-area -->
        <!--==================================================-->
        <!-- Bootstrap Modal -->
        <!-- Modal for Download Brochure (Lead Form) -->
        <!-- Modal for Download Brochure (Lead Form) -->
        <div id="leadPopup" class="modal-container">
            <div class="modal-dialog">
                <div class="modal-content custom-lead-modal-content">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                        onclick="closeModal('leadPopup')" style="filter: invert(1);"></button>

                    <form id="leadForm" action="{{ route('lead.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">

                        <h4 class="custom-lead-modal-title">Download Brochure</h4>

                        <input type="text" name="name" style="color: #fff" placeholder="Name"
                            class="form-control custom-lead-input" required>
                        <input type="tel" pattern="\d{10}" title="Please enter a 10-digit mobile number"
                            name="mobile" style="color: #fff" placeholder="Mobile Number"
                            class="form-control custom-lead-input" required>
                        <input type="email" name="email" style="color: #fff" placeholder="E-mail ID"
                            class="form-control custom-lead-input" required>
                        <input type="text" name="address" style="color: #fff" placeholder="City"
                            class="form-control custom-lead-input" required>

                        <!-- Hidden Fields -->
                        <input type="text" name="website" style="display:none;">
                        <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                        <input type="hidden" name="source" value="Website(broucher)">
                        <input type="hidden" name="ib" value="">
                        <input type="hidden" name="title" value="NA">
                        <input type="hidden" name="profession" value="NA">

                        <button type="submit" style="background: green;"
                            class="btn custom-lead-submit-btn w-100 mt-2">Download Brochure</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Styles -->
        <style>
            .modal-container {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 999;
            }

            .modal-dialog {
                max-width: 800px;
                width: 100%;
            }

            .custom-lead-modal-content {
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-radius: 14px;
                padding: 25px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: #fff;
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
                color: #000;
                font-weight: 600;
                border: none;
                transition: 0.3s ease;
            }

            .custom-lead-submit-btn:hover {
                background-color: #fff;
                color: #000;
            }
        </style>

        <!-- JS to Control Modals -->
        <script>
            // Returns true when visitor is on the AI Security course page
            function isAISSPage() {
                return window.location.pathname
                    .replace(/\/+$/, '')          // strip trailing slash
                    .endsWith('/courses/ai-security-online-training');
            }

            function openModal(modalId) {
                document.getElementById(modalId).style.display = 'flex';
                if (isAISSPage()) {
                    const modal = document.getElementById(modalId);
                    const sourceField = modal.querySelector('form [name="source"]');
                    if (sourceField) {
                        if (modalId === 'leadPopup') {
                            sourceField.value = 'Website AISS Course (Brochure)';
                        } else {
                            sourceField.value = 'Website AISS Course';
                        }
                    }
                }
            }
            function closeModal(modalId) {
                document.getElementById(modalId).style.display = 'none';
            }
        </script>
        <div id="applyNowPopup" class="modal-container">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content custom-reg-modal-content" style="padding: 10px;">
                    <div class="modal-header custom-reg-modal-header"
                        style="background: #fff; border-radius: 7px; padding: 10px;">
                        <h5 class="modal-title custom-reg-modal-title" style="color:#000;">Quick Response</h5>
                        <button type="button" class="custom-close-icon" onclick="closeModal('applyNowPopup')">×</button>
                    </div>

                    <form method="POST" id="leadForm" action="{{ route('lead.store') }}">
                        @csrf
                        <div class="modal-body" id="form1">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control custom-reg-input"
                                        placeholder="Name" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" pattern="\d{10}" title="Please enter a 10-digit mobile number"
                                        name="phone" class="form-control custom-reg-input" placeholder="Mobile Number"
                                        required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control custom-reg-input"
                                        placeholder="E-mail ID" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="address" class="form-control custom-reg-input"
                                        placeholder="City" required>
                                </div>

                                <input type="hidden" name="qualification" value="NA">
                                <input type="text" name="website" style="display:none;">
                                <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                                <input type="hidden" name="experience" value="NA">
                                <input type="hidden" name="aiss" value="">

                                <!-- Other hidden fields -->
                                <input type="hidden" name="page_name" value="{{ $course->name }}">
                                <input type="hidden" name="source" value="Website(Course)">
                                <input type="hidden" name="course_id" value="{{ $course->id ?? '' }}">
                            </div>
                        </div><br>

                        <div class="modal-footer border-0">
                            <button type="submit" class="btn custom-reg-submit-btn w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Styles -->
        <style>
            .modal-container {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 999;
            }

            .modal-dialog {
                max-width: 800px;
                width: 100%;
            }

            .custom-reg-modal-content {
                background: rgba(255, 255, 255, 0.05);
                -webkit-backdrop-filter: blur(12px);
                backdrop-filter: blur(12px);
                border-radius: 16px;
                color: #fff;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .custom-close-icon {
                position: absolute;
                background: none;
                border: none;
                font-size: 2rem;
                color: #000;
                cursor: pointer;
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

            .custom-reg-input {
                background: rgba(255, 255, 255, 0.07);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: #fff !important;
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
                background: linear-gradient(135deg, #EF9F1B, #ffb84d) !important;
                color: #000;
                font-weight: 600;
                border: none;
                transition: all 0.3s ease;
            }
            .custom-reg-submit-btn:hover {
                background: linear-gradient(135deg, #ffb84d, #EF9F1B) !important;
                color: #000;
            }
            #form1 {
                background: none !important;
            }
        </style>

        <!-- JS to Control Modal -->


        <script>
            document.getElementById('leadForm').addEventListener('submit', function(e) {
                e.preventDefault();

                let form = e.target;
                let formData = new FormData(form);

                // Perform the fetch request
                fetch("{{ route('store.lead') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('[name="_token"]')
                                .value, // Ensure CSRF token is being sent
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success && data.download_url) {
                            // Close the modal if it's open
                            var modalElement = document.getElementById('leadPopup');
                            var modal = bootstrap.Modal.getInstance(modalElement);
                            if (modal) {
                                modal.hide();
                            }

                            // Trigger the brochure download
                            window.open(data.download_url, '_blank'); // Open the URL in a new tab
                        } else {
                            alert("Submission failed! Please try again.");
                        }
                    })
                    .catch(err => {
                        console.error("Error:", err);
                        alert("An error occurred. Please try again later.");
                    });
            });
        </script>


        <!--==================================================-->
        <!-- Start educate Footer Area -->
        <!--==================================================-->
    @endsection
