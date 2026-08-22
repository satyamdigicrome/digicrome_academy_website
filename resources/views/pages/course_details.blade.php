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

        h2 {
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
                            {{-- <img loading="lazy" src="{{ asset('assets/images/card11.webp') }}" width="190" height="120" alt="card1" title="card1" /> --}}
                            <img loading="lazy" src="{{ asset('assets/images/Card.webp') }}" width="319" height="58"
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
                                    id="downloadBrochureBtn" onclick="openModal('downloadLeadPopup')">
                                    <i class="fa fa-download me-2"></i>Download Brochure
                                </button>
                            @endif

                            <a class="btn btn-primary" style="background-color: #1c1647;" id="quickResponseBtn"
                                onclick="openModal('applyNowPopup')" role="button">
                                <i class="fa fa-paper-plane me-2"></i>Apply Now
                            </a>

                        </div><br>
                        <p><b>Note:-</b> This is an educational program only. No investment or financial product
                            is being offered.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img width="555" height="792" loading="lazy" src="{{ asset('assets/images/3.webp') }}" class="img-fluid" alt="CIBOP"
                            title="CIBOP" />
                    </div>
                </div>
                <d iv class="feature-strip position-relative mt-5">
                    <div class="container">
                        <div
                            class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img width="75" height="75" loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}"
                                        class="lazyload" alt="data science program institute"
                                        title="data science program institute">
                                    <p class="icon-plus">5000</p>
                                    <span>Career Transformed</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img width="75" height="75" loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}"
                                        class="lazyload" alt="data science programs" title="data science programs">
                                    <p> Internship Possibility</p>
                                    <span> Based on Performance</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img width="75" height="75" loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}"
                                        class="lazyload" alt="best online data science programs"
                                        title="best online data science programs">
                                    <p>{{ $course->course_duration ?? '06 Months' }}</p>
                                    <span>Live Online Classes</span>
                                </div>
                            </div>
                            <div class="features-box text-center flex-fill min-w-0">
                                <div class="date-border">
                                    <img width="75" height="75" loading="lazy"
                                        src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}"
                                        class="lazyload" alt="data science programs near me"
                                        title="data science programs near me">
                                    <p style="color: #f8b700">
                                        {{ $course->batchLabel() }} </p>
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
                padding: 70px 0 18px;
                /* compact: fits everything in 1 viewport */
            }

            /* ---- Responsive padding ---- */
            @media (max-width: 991.98px) {
                .cyber-hero {
                    padding: 65px 0 16px;
                }
            }

            @media (max-width: 767.98px) {
                .cyber-hero {
                    padding: 60px 0 14px;
                }
            }

            .cyber-hero::before {
                content: '';
                position: absolute;
                inset: 0;
                z-index: 0;
                background-image:
                    linear-gradient(rgba(0, 255, 200, .04) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(0, 255, 200, .04) 1px, transparent 1px);
                background-size: 48px 48px;
                pointer-events: none;
            }

            .cyber-hero::after {
                content: '';
                position: absolute;
                top: -80px;
                left: -80px;
                z-index: 0;
                width: 420px;
                height: 420px;
                background: radial-gradient(circle, rgba(0, 220, 180, .18) 0%, transparent 70%);
                pointer-events: none;
                animation: cyber-pulse 6s ease-in-out infinite;
            }

            @@keyframes cyber-pulse {

                0%,
                100% {
                    opacity: .6;
                    transform: scale(1);
                }

                50% {
                    opacity: 1;
                    transform: scale(1.12);
                }
            }

            /* ---- Badge ---- */
            .cyber-hero .cyber-badge {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                background: rgba(0, 220, 180, .12);
                border: 1px solid rgba(0, 220, 180, .35);
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
                text-shadow: 0 0 16px rgba(0, 220, 180, .5);
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

            .cyber-hero .cyber-point i {
                margin-top: 2px;
                flex-shrink: 0;
                font-size: .8rem;
            }

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
                box-shadow: 0 0 14px rgba(0, 220, 180, .35);
            }

            .cyber-hero .btn-cyber-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 0 24px rgba(0, 220, 180, .6);
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
                background: rgba(0, 220, 180, .12);
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
                box-shadow: 0 0 30px rgba(0, 220, 180, .22), 0 0 60px rgba(0, 100, 200, .12);
                max-height: 300px;
                object-fit: cover;
                width: 100%;
            }

            /* ---- Corner brackets ---- */
            .cyber-corner {
                position: absolute;
                width: 22px;
                height: 22px;
                border-color: #00ddb4;
                border-style: solid;
                opacity: .7;
            }

            .cyber-corner.tl {
                top: -5px;
                left: -5px;
                border-width: 2px 0 0 2px;
            }

            .cyber-corner.tr {
                top: -5px;
                right: -5px;
                border-width: 2px 2px 0 0;
            }

            .cyber-corner.bl {
                bottom: -5px;
                left: -5px;
                border-width: 0 0 2px 2px;
            }

            .cyber-corner.br {
                bottom: -5px;
                right: -5px;
                border-width: 0 2px 2px 0;
            }

            /* ---- Stats strip — compact, always visible ---- */
            .cyber-stats {
                background: rgba(255, 255, 255, .05);
                border: 1px solid rgba(0, 220, 180, .18);
                border-radius: 8px;
                padding: 12px 20px;
                margin-top: 18px;
                backdrop-filter: blur(6px);
            }

            .cyber-stats .stat-item {
                text-align: center;
            }

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
            .cyber-stats .stat-item+.stat-item {
                border-left: 1px solid rgba(0, 220, 180, .15);
            }

            /* ---- Responsive: mobile ---- */
            @media (max-width: 575.98px) {
                .cyber-hero .cyber-badge {
                    font-size: .65rem;
                }

                .cyber-hero h1.cyber-title {
                    font-size: 21px;
                }

                .cyber-hero .cyber-point {
                    font-size: .8rem;
                }

                .cyber-hero .btn-cyber-primary,
                .cyber-hero .btn-cyber-outline {
                    width: 100%;
                    text-align: center;
                }

                .cyber-stats {
                    padding: 10px 8px;
                    margin-top: 12px;
                }

                .cyber-stats .stat-num {
                    font-size: 1rem;
                }

                .cyber-stats .stat-item+.stat-item {
                    border-left: none;
                    border-top: 1px solid rgba(0, 220, 180, .15);
                }
            }

            /* ---- Responsive: hide corners on mobile ---- */
            @media (max-width: 767.98px) {
                .cyber-corner {
                    display: none;
                }

                .cyber-hero .cyber-banner-wrap img {
                    max-height: 220px;
                }
            }

            /* ---- Responsive: tablet ---- */
            @media (min-width: 576px) and (max-width: 991.98px) {
                .cyber-hero h1.cyber-title {
                    font-size: 26px;
                }

                .cyber-stats .stat-num {
                    font-size: 1.05rem;
                }
            }

            .cyber-hero {
                background:
                    linear-gradient(135deg, rgba(5, 10, 24, 0.88) 0%, rgba(5, 10, 24, 0.72) 100%),
                    url('{{ asset('assets/images/ds-withai-course/aiss-hero-bg.jpg') }}') no-repeat center center / cover;
            }

            .visually-hidden {
                position: absolute;
                width: 1px;
                height: 1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
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
                        <h1 class="visually-hidden">Best AI Cybersecurity Course</h1>
                        <h2 class="cyber-title">
                            Cyber Security:
                            <br><span class="cyber-accent">Security of AI</span>
                        </h2>

                        <div class="cyber-point">
                            <i class="fa-solid fa-shield-halved text-info"></i>
                            <span>Get <strong style="color:#00ddb4;">Placement Support</strong> in
                                {{ $course->name }}</span>
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
                                <a class="btn btn-cyber-outline" id="downloadBrochureBtn"
                                    onclick="openModal('downloadLeadPopup')">
                                    <i class="fa fa-download me-1"></i>Download Brochure
                                </a>
                            @endif
                            <a class="btn btn-cyber-primary" role="button" id="quickResponseBtn" onclick="openModal('applyNowPopup')">
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
                            <img loading="lazy" src="{{ asset('storage/' . $course->banner_image) }}"
                                alt="{{ $course->name }}" title="{{ $course->name }}" class="img-fluid" />
                        @else
                            <div
                                style="width:100%;min-height:260px;background:rgba(0,220,180,.06);border:1px solid rgba(0,220,180,.2);border-radius:10px;display:flex;align-items:center;justify-content:center;">
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
                            <div class="stat-num" style="color:#f8b700;">
                                {{ $course->batchLabel() }}</div>
                            <div class="stat-label">Next Batch Starts</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @elseif($course->course_free == 4)
        <div class="breadcumb-area two d-flex"
            @if ($course->banner_image) style="background: url('{{ asset('storage/' . $course->banner_image) }}') no-repeat center center / cover;" @endif>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                            {{-- <img loading="lazy" src="{{ asset('assets/images/card2.webp') }}" width="190" height="120"
                                alt="card1" title="card1" /> --}}
                            {{-- <img loading="lazy" src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card"
                         style="border: 2px solid #f29c12; border-radius: 5px;" /> --}}
                        </div>


                        <h1 class="fw-bold text-capitalize text-dark course-heading" style="font-size: 43px;">
                            {{ $course->name }}</h1>

                        <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                            🕐 45 Days Practical AI Tools Training
                        </p>

                        <p class="text-dark fs-6 mb-2">
                            💡 Master Powerful AI Tools & Upgrade Your Skills
                        </p>

                        <p class="text-dark fs-6 mb-2">
                            🌍 Perfect for Anyone Looking to Skill Up in Any Background
                        </p>

                        <p class="text-dark fs-6 mb-0">
                            🚀 Learn Practical AI Skills for Work, Business & Everyday Life
                        </p>


                        <div class="mt-4 d-flex gap-3">
                            @if ($course->browser)
                                <a class="btn btn-outline-primary" id="downloadBrochureBtn"
                                    onclick="openModal('downloadLeadPopup')" style="background-color: green;">
                                    <i class="fa fa-download me-2"></i>Download Brochure
                                </a>
                            @endif

                            <a id="quickResponseBtn" role="button" onclick="openModal('applyNowPopup')" class="btn btn-primary"
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
                                <img width="56" height="56" loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-autor.webp') }}" alt="autor">
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
            <img width="213" height="142" loading="lazy" src="{{ asset('assets/images/inner-img/bread-dot.webp') }}" alt="dot">
        </div> --}}
            </div>
        </div>
    @else
        <div class="breadcumb-area two d-flex"
            @if ($course->banner_image) style="background: url('{{ asset('storage/' . $course->banner_image) }}') no-repeat center center / cover;" @endif>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                            {{-- <img loading="lazy" src="{{ asset('assets/images/card2.webp') }}" width="190" height="120"
                                alt="card1" title="card1" /> --}}
                            {{-- <img loading="lazy" src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card"
                         style="border: 2px solid #f29c12; border-radius: 5px;" /> --}}
                        </div>


                        <h1 class="fw-bold text-capitalize text-dark course-heading" style="font-size: 43px;">
                            {{ $course->name }}</h1>

                        <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                            <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                            Get Placement Support in {{ $course->name }}
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
                                <a class="btn btn-outline-primary" id="downloadBrochureBtn"
                                    onclick="openModal('downloadLeadPopup')" style="background-color: green;">
                                    <i class="fa fa-download me-2"></i>Download Brochure
                                </a>
                            @endif

                            <a id="quickResponseBtn" role="button" onclick="openModal('applyNowPopup')" class="btn btn-primary"
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
                                <img width="56" height="56" loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-autor.webp') }}" alt="autor">
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
            <img width="213" height="142" loading="lazy" src="{{ asset('assets/images/inner-img/bread-dot.webp') }}" alt="dot">
        </div> --}}
            </div>
        </div>
    @endif
    {{-- Sits just below the hero so every course_free variant gets it in the
        same place, without touching four different hero layouts. --}}
    <x-batch-countdown :course="$course" />

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
                                    <img width="225" height="225" loading="lazy" src="{{ asset('assets/images/tik.png') }}"
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
                        <img width="616" height="403" loading="lazy" src="{{ asset('assets/images/gp.webp') }}" alt="Company Image"
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
                        {{-- <img width="616" height="403" loading="lazy" src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image" title="Company Image" class="img-fluid"> --}}
                    </div>
                </div>
            </div>
            @if ($course->aparts && $course->aparts->count())
                <div class="brand-list owl-carousel owl-theme">
                    @foreach ($course->aparts as $apart)
                        <div class="item">
                            <div class="card shadow rounded-4 mb-4 h-100">
                                <div class="card-body text-center">
                                    <img loading="lazy" src="{{ asset('storage/' . $apart->image) }}"
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
                                <img style="border-radius: 10px;"
                                    loading="lazy" src="{{ asset('storage/' . $course->image) }}"
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
                                            UAE Price
                                        </div>
                                        <span class="value-dollar">{{ $course->dubai_price }}AED</span>
                                    </li>
                                    <li>
                                        <div class="label">
                                            Singapore Price
                                        </div>
                                        <span class="value-dollar">{{ $course->singapore_price }}SGD</span>
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
                            color: #fff;" role="button">APPLY NOW<i
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
                                            <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}"
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
                                        <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand-thumb"
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
                        <img loading="lazy" src="{{ asset('storage/' . $placement->image) }}"
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
        @if ($course->course_free != 3)
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
							<img width="495" height="640" loading="lazy" src="{{ asset('assets/images/home-one/testi-thumb.webp') }}" alt="testimonial-thumb" title="testimonial-thumb">
						</div>
						<div class="testi-dot-shape">
							<img width="73" height="73" loading="lazy" src="{{ asset('assets/images/home-one/testi-dot.webp') }}" alt="testi-dot-shape" title="testi-dot-shape">
						</div>
						<div class="testi-map-shape">
							<img width="668" height="639" loading="lazy" src="{{ asset('assets/images/home-one/testi-map.webp') }}" alt="testi-map-shape" title="testi-map-shape">
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
                <img width="44" height="32" loading="lazy" src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="testi-quote" title="testi-quote">
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
                <img loading="lazy" src="{{ asset('storage/' . $testimonial->image) }}" alt="testi-author" title="testi-author" style="width: 60px; height: 60px; border-radius: 50%;">
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
    {{-- <div class="testimonial-area style-two mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- section title -->
                    <div class="section-sub-title two">
                        <h6><img width="22" height="18" loading="lazy" src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}"
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
                                            <img loading="lazy" src="{{ asset('storage/' . $testimonial->image) }}"
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
    </div> --}}

    @include('components.testimonial-partial', ['testimonials' => $testimonials])
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
            <img width="11521" height="4500" loading="lazy" src="{{ asset('assets/images/Start-Here-Course-Page-01.webp') }} " alt="Full Screen Image"
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
                                <img loading="lazy" src="{{ asset('storage/' . $feature->image) }}"
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
                                <img loading="lazy" src="{{ asset('storage/' . $feature->image) }}"
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
        {{-- ============================================================
     Download Brochure modal — redesigned
     Drop this in place of your existing #downloadLeadPopup block.
     The <style> and <script> are inline here for convenience —
     move them into your layout's main stylesheet / script bundle
     once you're happy with the design.
     ============================================================ --}}
        @push('styles')
            <style>
                #downloadLeadPopup {
                    --lpx-ink: #060A12;
                    --lpx-panel-soft: #161F2B;
                    --lpx-line: rgba(255, 255, 255, .08);
                    --lpx-line-strong: rgba(255, 255, 255, .16);
                    --lpx-text: #F3F6FA;
                    --lpx-text-soft: #8C97A6;
                    --lpx-text-faint: #5C6675;
                    --lpx-amber: #F4B860;
                    --lpx-amber-deep: #C9853A;
                    --lpx-cyan: #54D7DD;
                }

                #downloadLeadPopup.lpx-overlay {
                    position: fixed;
                    inset: 0;
                    display: none;
                    align-items: center;
                    justify-content: center;
                    background:
                        radial-gradient(circle at 50% 15%, rgba(244, 184, 96, .10), transparent 55%),
                        rgba(3, 5, 9, .82);
                    backdrop-filter: blur(8px);
                    -webkit-backdrop-filter: blur(8px);
                    z-index: 999;
                    padding: 20px;
                    opacity: 0;
                    transition: opacity .25s ease;
                }

                #downloadLeadPopup.lpx-overlay.is-open {
                    display: flex;
                    opacity: 1;
                }

                #downloadLeadPopup .lpx-dialog {
                    perspective: 1400px;
                    width: 100%;
                    max-width: 440px;
                    max-height: 92vh;
                }

                #downloadLeadPopup .lpx-card {
                    position: relative;
                    max-height: 92vh;
                    overflow-y: auto;
                    background: linear-gradient(165deg, #152a46 0%, #080e19 100%);
                    border: 1px solid var(--lpx-line-strong);
                    border-radius: 26px;
                    padding: 0;
                    box-shadow: 0 30px 80px -20px rgba(0, 0, 0, .65), 0 0 0 1px rgba(255, 255, 255, .02) inset;
                    transform-style: preserve-3d;
                    scrollbar-width: thin;
                }

                #downloadLeadPopup .lpx-card::-webkit-scrollbar {
                    width: 6px;
                }

                #downloadLeadPopup .lpx-card::-webkit-scrollbar-thumb {
                    background: var(--lpx-line-strong);
                    border-radius: 6px;
                }

                #downloadLeadPopup .lpx-card.lpx-card-in {
                    animation: lpxCardIn .65s cubic-bezier(.16, 1, .3, 1) forwards;
                }

                @keyframes lpxCardIn {
                    0% {
                        transform: rotateY(-62deg) translateZ(-90px) scale(.86);
                        opacity: 0;
                    }

                    100% {
                        transform: rotateY(0) translateZ(0) scale(1);
                        opacity: 1;
                    }
                }

                #downloadLeadPopup .lpx-stripe {
                    height: 13px;
                    border-radius: 25px 25px 0 0;
                    background: linear-gradient(100deg, #caa05a 0%, #f4b860 22%, #fde9c8 38%, #54d7dd 52%, #f4b860 70%, #caa05a 100%);
                    background-size: 220% 100%;
                    animation: lpxHoloSheen 8s linear infinite;
                }

                @keyframes lpxHoloSheen {
                    0% {
                        background-position: 0% 0;
                    }

                    100% {
                        background-position: 220% 0;
                    }
                }

                #downloadLeadPopup .lpx-body {
                    padding: 28px 32px 30px;
                    font-family: 'IBM Plex Sans', Arial, sans-serif;
                }

                #downloadLeadPopup .lpx-head {
                    display: flex;
                    align-items: flex-start;
                    justify-content: space-between;
                    margin-bottom: 16px;
                }

                #downloadLeadPopup .lpx-logo {
                    display: flex;
                    align-items: center;
                }

                #downloadLeadPopup .lpx-logo img {
                    width: 60px;
                    height: auto;
                    display: block;
                    object-fit: contain;
                }

                #downloadLeadPopup .lpx-close {
                    width: 32px;
                    height: 32px;
                    border-radius: 50%;
                    border: 1px solid var(--lpx-line-strong);
                    background: rgba(255, 255, 255, .03);
                    color: var(--lpx-text-soft);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    font-size: 16px;
                    line-height: 1;
                    transition: transform .25s ease, border-color .25s ease, color .25s ease, box-shadow .25s ease;
                }

                #downloadLeadPopup .lpx-close:hover {
                    transform: rotate(90deg);
                    border-color: var(--lpx-cyan);
                    color: var(--lpx-cyan);
                    box-shadow: 0 0 16px rgba(84, 215, 221, .35);
                }

                #downloadLeadPopup .lpx-eyebrow {
                    font: 11px/1 'IBM Plex Mono', monospace;
                    letter-spacing: .14em;
                    text-transform: uppercase;
                    color: var(--lpx-amber);
                    margin: 0 0 10px;
                }

                #downloadLeadPopup h4.lpx-heading {
                    font: 600 25px/1.15 'Space Grotesk', Arial, sans-serif;
                    color: var(--lpx-text);
                    margin: 0 0 8px;
                }

                #downloadLeadPopup p.lpx-subtext {
                    font: 14px/1.55 'IBM Plex Sans', Arial, sans-serif;
                    color: var(--lpx-text-soft);
                    margin: 0 0 24px;
                }

                #downloadLeadPopup .lpx-field {
                    position: relative;
                    margin-bottom: 16px;
                }

                #downloadLeadPopup .lpx-field input.lpx-input {
                    width: 100%;
                    background: var(--lpx-panel-soft);
                    border: 1px solid var(--lpx-line);
                    border-radius: 13px;
                    padding: 19px 16px 9px;
                    font: 15px/1.4 'IBM Plex Sans', Arial, sans-serif;
                    color: var(--lpx-text);
                    outline: none;
                    transition: border-color .2s ease, box-shadow .2s ease;
                }

                #downloadLeadPopup .lpx-field input.lpx-input::placeholder {
                    color: transparent;
                }

                #downloadLeadPopup .lpx-field input.lpx-input:focus {
                    border-color: var(--lpx-cyan);
                    box-shadow: 0 0 0 3px rgba(84, 215, 221, .15);
                }

                #downloadLeadPopup .lpx-field label {
                    position: absolute;
                    left: 16px;
                    top: 16px;
                    font: 15px 'IBM Plex Sans', Arial, sans-serif;
                    color: var(--lpx-text-soft);
                    pointer-events: none;
                    transition: all .18s ease;
                }

                #downloadLeadPopup .lpx-field input:focus~label,
                #downloadLeadPopup .lpx-field input:not(:placeholder-shown)~label {
                    top: 8px;
                    font-size: 10.5px;
                    letter-spacing: .06em;
                    text-transform: uppercase;
                    font-family: 'IBM Plex Mono', monospace;
                    color: var(--lpx-cyan);
                }

                #downloadLeadPopup .lpx-hint {
                    display: block;
                    margin: 6px 0 0 4px;
                    font: 11px 'IBM Plex Mono', monospace;
                    color: var(--lpx-text-faint);
                }

                #downloadLeadPopup .lpx-field-select {
                    margin-bottom: 20px;
                }

                #downloadLeadPopup .lpx-select-label {
                    display: block;
                    margin: 0 0 8px 2px;
                    font: 10.5px 'IBM Plex Mono', monospace;
                    letter-spacing: .06em;
                    text-transform: uppercase;
                    color: var(--lpx-text-soft);
                }

                #downloadLeadPopup select.lpx-input {
                    width: 100%;
                    appearance: none;
                    -webkit-appearance: none;
                    background: var(--lpx-panel-soft) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'%3E%3Cpath d='M1 1L7 7L13 1' stroke='%238C97A6' stroke-width='1.6' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E") no-repeat right 16px center;
                    border: 1px solid var(--lpx-line);
                    border-radius: 13px;
                    padding: 14px 40px 14px 16px;
                    color: var(--lpx-text);
                    font: 15px 'IBM Plex Sans', Arial, sans-serif;
                    outline: none;
                    transition: border-color .2s ease, box-shadow .2s ease;
                }

                #downloadLeadPopup select.lpx-input:focus {
                    border-color: var(--lpx-cyan);
                    box-shadow: 0 0 0 3px rgba(84, 215, 221, .15);
                }

                #downloadLeadPopup select.lpx-input option {
                    background: #11161F;
                    color: #fff;
                }

                #downloadLeadPopup .lpx-divider {
                    height: 1px;
                    margin: 8px 0 22px;
                    background-image: linear-gradient(90deg, var(--lpx-line-strong) 50%, transparent 50%);
                    background-size: 9px 1px;
                }

                #downloadLeadPopup .lpx-submit {
                    position: relative;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 8px;
                    background: linear-gradient(135deg, var(--lpx-amber) 0%, var(--lpx-amber-deep) 100%) !important;
                    color: #1A1206;
                    font: 600 15px 'Space Grotesk', Arial, sans-serif;
                    border: none;
                    border-radius: 13px;
                    padding: 16px 20px;
                    cursor: pointer;
                    overflow: hidden;
                    box-shadow: 0 10px 24px -8px rgba(244, 184, 96, .45);
                    transition: transform .2s ease, box-shadow .2s ease;
                }

                #downloadLeadPopup .lpx-submit:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 16px 32px -10px rgba(244, 184, 96, .6);
                }

                #downloadLeadPopup .lpx-submit:active {
                    transform: translateY(0) scale(.98);
                }

                #downloadLeadPopup .lpx-submit:disabled {
                    cursor: default;
                    opacity: .85;
                    transform: none;
                }

                #downloadLeadPopup .lpx-submit::after {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: -60%;
                    width: 35%;
                    height: 100%;
                    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .55), transparent);
                    transform: skewX(-20deg);
                    transition: left .55s ease;
                }

                #downloadLeadPopup .lpx-submit:hover::after {
                    left: 130%;
                }

                #downloadLeadPopup .lpx-arrow {
                    transition: transform .2s ease;
                    font-style: normal;
                }

                #downloadLeadPopup .lpx-submit:hover .lpx-arrow {
                    transform: translateX(4px);
                }

                #downloadLeadPopup .lpx-footnote {
                    margin: 14px 0 0;
                    text-align: center;
                    font: 11px 'IBM Plex Mono', monospace;
                    color: var(--lpx-text-faint);
                }

                @media (prefers-reduced-motion: reduce) {
                    #downloadLeadPopup .lpx-card.lpx-card-in {
                        animation: none;
                        opacity: 1;
                    }

                    #downloadLeadPopup .lpx-stripe {
                        animation: none;
                    }

                    #downloadLeadPopup .lpx-submit::after {
                        transition: none;
                    }
                }

                @media (max-width:480px) {
                    #downloadLeadPopup .lpx-body {
                        padding: 24px 22px 26px;
                    }

                    #downloadLeadPopup h4.lpx-heading {
                        font-size: 21px;
                    }

                    #downloadLeadPopup .lpx-logo img {
                        width: 80px;
                    }
                }
            </style>
        @endpush
        <div id="downloadLeadPopup" class="lpx-overlay">
            <div class="lpx-dialog">
                <div class="lpx-card" id="leadCard">
                    <div class="lpx-stripe" aria-hidden="true"></div>
                    <div class="lpx-body">
                        <div class="lpx-head">
                            <div class="lpx-logo">
                                <img loading="lazy" width="969" height="933" src="{{ asset('assets/images/logobg.png') }}" alt="Digicrome Logo">
                            </div>
                            <button type="button" class="lpx-close" onclick="closeModal('downloadLeadPopup')"
                                aria-label="Close">&#10005;</button>
                        </div>

                        <p class="lpx-eyebrow">Digicrome &middot; course access</p>
                        <h4 class="lpx-heading">Download brochure</h4>
                        <p class="lpx-subtext">Enter your details and we&rsquo;ll send the full course breakdown to your
                            inbox.</p>

                        <form id="leadForm" action="{{ route('lead.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">

                            <div class="lpx-field">
                                <input type="text" id="lp-name" name="name" placeholder=" " class="lpx-input"
                                    required>
                                <label for="lp-name">Full name</label>
                            </div>

                            <div class="lpx-field">
                                <input type="tel" id="lp-mobile" pattern="\d{10}"
                                    title="Please enter a 10-digit mobile number" name="mobile" placeholder=" "
                                    class="lpx-input" required>
                                <label for="lp-mobile">Mobile number</label>
                                <span class="lpx-hint">10 digits, no spaces</span>
                            </div>

                            <div class="lpx-field">
                                <input type="email" id="lp-email" name="email" placeholder=" " class="lpx-input"
                                    required>
                                <label for="lp-email">Email address</label>
                            </div>

                            <div class="lpx-field">
                                <input type="text" id="lp-address" name="address" placeholder=" " class="lpx-input"
                                    required>
                                <label for="lp-address">City</label>
                            </div>

                            <div class="lpx-field lpx-field-select">
                                <select id="lp-title" name="title" class="lpx-input" required>
                                    <option value="" disabled selected>Select course</option>
                                    <option value="DS">Data Science & AI</option>
                                    <option value="AISS">Cyber Security</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Hidden Fields -->
                            <input type="text" name="our_custom" style="display:none;" value="digicrome">
                            <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                            <input type="hidden" name="source" value="Website(broucher)">
                            <input type="hidden" name="ib" value="">
                            <input type="hidden" name="profession" value="NA">

                            <div class="lpx-divider" aria-hidden="true"></div>

                            <button type="submit" style="background: none;" class="lpx-submit" id="leadSubmitBtn">
                                <span id="leadSubmitLabel">Get Brochure</span>
                                <i class="lpx-arrow">&rarr;</i>
                            </button>
                            <p class="lpx-footnote">We&rsquo;ll only use this to send your brochure &mdash; no spam.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function() {
                var popup = document.getElementById('downloadLeadPopup');
                var card = document.getElementById('leadCard');
                var dialog = card.closest('.lpx-dialog');
                var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
                var tiltReady = reduceMotion;

                var observer = new MutationObserver(function() {
                    if (popup.classList.contains('is-open')) {
                        card.classList.remove('lpx-card-in');
                        card.style.transform = '';
                        void card.offsetWidth;
                        card.classList.add('lpx-card-in');
                    }
                });
                observer.observe(popup, {
                    attributes: true,
                    attributeFilter: ['class']
                });

                card.addEventListener('animationend', function() {
                    card.classList.remove('lpx-card-in');
                    card.style.transform = '';
                    tiltReady = true;
                });

                if (finePointer && !reduceMotion) {
                    dialog.addEventListener('mousemove', function(e) {
                        if (!tiltReady) return;
                        var rect = card.getBoundingClientRect();
                        var x = (e.clientX - rect.left) / rect.width - 0.5;
                        var y = (e.clientY - rect.top) / rect.height - 0.5;
                        card.style.transform = 'rotateY(' + (x * 9).toFixed(2) + 'deg) rotateX(' + (-y * 9).toFixed(
                            2) + 'deg)';
                    });
                    dialog.addEventListener('mouseleave', function() {
                        card.style.transform = '';
                    });
                }

                popup.addEventListener('click', function(e) {
                    if (e.target === popup) {
                        closeModal('downloadLeadPopup');
                    }
                });

                // Visual "sending" feedback only — does not block the real submit.
                document.getElementById('leadForm').addEventListener('submit', function() {
                    var btn = document.getElementById('leadSubmitBtn');
                    var label = document.getElementById('leadSubmitLabel');
                    btn.disabled = true;
                    label.textContent = 'Sending...';
                });
            })();
        </script>
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
            function isAISSPage() {
                return window.location.pathname
                    .replace(/\/+$/, '') // strip trailing slash
                    .endsWith('/courses/ai-security-online-training');
            }

            function openModal(modalId) {
                if (modalId === 'downloadLeadPopup') {
                    var el = document.getElementById(modalId);
                    el.classList.add('is-open');
                    document.body.style.overflow = 'hidden';
                    var card = document.getElementById('leadCard');
                    card.classList.remove('lpx-card-in');
                    card.style.transform = '';
                    void card.offsetWidth;
                    card.classList.add('lpx-card-in');
                    const sourceField = el.querySelector('form [name="source"]');
                    const ibField = el.querySelector('form [name="ib"]');
                    if (sourceField) {
                        if (isAISSPage()) {
                            sourceField.value = 'Website AISS Course (Brochure)';
                            ibField.value = 'AISS';
                        } else {
                            sourceField.value = 'Website Course Brochure';
                            ibField.value = '';
                        }
                    }
                } else {
                    var el = document.getElementById(modalId);
                    el.classList.add('is-open');
                    document.body.style.overflow = 'hidden';
                    var card = document.getElementById('applyNowCard');
                    card.classList.remove('qr-card-in');
                    void card.offsetWidth;
                    card.classList.add('qr-card-in');
                    if (isAISSPage()) {
                        const modal = document.getElementById(modalId);
                        const sourceField = modal.querySelector('form [name="source"]');
                        const ibField = modal.querySelector('form [name="ib"]');
                        if (sourceField) {
                            if (modalId === 'downloadLeadPopup') {
                                sourceField.value = 'Website AISS Course (Brochure)';
                                ibField.value = 'AISS';
                            } else {
                                sourceField.value = 'Website AISS Course';
                                ibField.value = 'AISS';
                            }
                        }
                    }
                }
            }

            function closeModal(modalId) {
                if (modalId === 'downloadLeadPopup') {
                    var el = document.getElementById(modalId);
                    el.classList.remove('is-open');
                    document.body.style.overflow = '';
                } else {
                    var el = document.getElementById(modalId);
                    el.classList.remove('is-open');
                    document.body.style.overflow = '';
                }
            }
            document.getElementById('applyNowPopup').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal('applyNowPopup');
                }
            });

            var submitBtn = document.getElementById('applyNowSubmitBtn');
            submitBtn.addEventListener('click', function(e) {
                var rect = submitBtn.getBoundingClientRect();
                var size = Math.max(rect.width, rect.height) * 2;
                var ripple = document.createElement('span');
                ripple.className = 'qr-ripple';
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
                ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
                submitBtn.appendChild(ripple);
                setTimeout(function() {
                    ripple.remove();
                }, 650);
            });

            document.getElementById('applyNowForm').addEventListener('submit', function(e) {
                e.preventDefault();
                var label = document.getElementById('applyNowSubmitLabel');
                submitBtn.disabled = true;
                label.textContent = 'Sending...';
                setTimeout(function() {
                    label.textContent = 'Got it — we\u2019ll call you soon';
                    setTimeout(function() {
                        label.textContent = 'Request callback';
                        submitBtn.disabled = false;
                    }, 1800);
                }, 900);
            });
        </script>
        <div id="applyNowPopup" class="qr-overlay">
            <div class="qr-shell">
                <div class="qr-card" id="applyNowCard">

                    <div class="qr-aside">
                        <div class="qr-logo">
                            <img loading="lazy" width="969" height="933" src="{{ asset('assets/images/logobg.png') }}" alt="Digicrome Logo">
                        </div>
                        <div class="qr-pulse" aria-hidden="true"><span></span><span></span><span></span></div>

                        <div class="qr-badge"><span class="qr-dot"></span> Quick Response, 24×7 Support</div>

                        <h2 class="qr-aside-title">Quick Response</h2>
                        <p class="qr-aside-text">Share a few details and our counsellor will get back to you fast — no
                            waiting in line.</p>
                        <ul class="qr-list">
                            <li><svg width="14" height="14" viewBox="0 0 14 14">
                                    <path d="M2 7L5.5 10.5L12 3" stroke="#9B8CFF" stroke-width="1.6" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Personalized course guidance</li>
                            <li><svg width="14" height="14" viewBox="0 0 14 14">
                                    <path d="M2 7L5.5 10.5L12 3" stroke="#9B8CFF" stroke-width="1.6" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Free career counselling</li>
                            <li><svg width="14" height="14" viewBox="0 0 14 14">
                                    <path d="M2 7L5.5 10.5L12 3" stroke="#9B8CFF" stroke-width="1.6" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Hassle-free admission support</li>
                        </ul>
                    </div>

                    <div class="qr-main">
                        <button type="button" class="qr-close" onclick="closeModal('applyNowPopup')"
                            aria-label="Close">&#10005;</button>
                        <h3 class="qr-form-title">Your details</h3>

                        <form method="POST" id="applyNowForm" action="{{ route('lead.store') }}">
                            @csrf
                            <div class="qr-field">
                                <input type="text" id="qr-name" name="name" placeholder=" " class="qr-input"
                                    required>
                                <label for="qr-name">Full name</label>
                                <span class="qr-underline"></span>
                            </div>

                            <div class="qr-field">
                                <input type="tel" id="qr-phone" pattern="\d{10}"
                                    title="Please enter a 10-digit mobile number" name="phone" placeholder=" "
                                    class="qr-input" required>
                                <label for="qr-phone">Mobile number</label>
                                <span class="qr-underline"></span>
                            </div>

                            <div class="qr-field">
                                <input type="email" id="qr-email" name="email" placeholder=" " class="qr-input"
                                    required>
                                <label for="qr-email">Email address</label>
                                <span class="qr-underline"></span>
                            </div>

                            <div class="qr-field">
                                <input type="text" id="qr-address" name="address" placeholder=" " class="qr-input"
                                    required>
                                <label for="qr-address">City</label>
                                <span class="qr-underline"></span>
                            </div>

                            <div class="qr-field">
                                <select id="qr-title" name="title" class="qr-input" required>
                                    <option value="" disabled selected>Select course</option>
                                    <option value="DS">Data Science &amp; AI</option>
                                    <option value="AISS">Cyber Security</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="qr-title">Course</label>
                                <span class="qr-underline"></span>
                            </div>

                            <input type="hidden" name="qualification" value="NA">
                            <input type="text" name="our_custom" style="display:none;" value="digicrome">
                            <input type="hidden" name="form_time" value="0">
                            <input type="hidden" name="experience" value="NA">
                            <input type="hidden" name="ib" value="">
                            <input type="hidden" name="page_name" value="Data Science &amp; AI Bootcamp">
                            <input type="hidden" name="source" value="Website(Course)">
                            <input type="hidden" name="course_id" value="42">

                            <div class="qr-actions">
                                <button type="submit" class="qr-submit" id="applyNowSubmitBtn">
                                    <span id="applyNowSubmitLabel">Request Callback</span>
                                </button>
                                <p class="qr-note">Get quick and reliable support anytime with our dedicated team.</p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <style>
            :root {
                --qr-ink: #0B0D10;
                --qr-panel: #15191D;
                --qr-panel-soft: #1B2024;
                --qr-line: rgba(255, 255, 255, .09);
                --qr-line-strong: rgba(255, 255, 255, .18);
                --qr-text: #F5F6F7;
                --qr-text-soft: #9AA1A9;
                --qr-text-faint: #5B6268;
                --qr-coral: #FF6B4A;
                --qr-coral-deep: #E5532F;
                --qr-violet: #9B8CFF;
            }

            .qr-stage {
                text-align: center;
            }

            .qr-trigger {
                background: transparent;
                border: 1px solid var(--qr-line-strong);
                color: var(--qr-text);
                font: 500 14px 'Plus Jakarta Sans', sans-serif;
                padding: 14px 26px;
                border-radius: 12px;
                cursor: pointer;
                transition: border-color .2s, color .2s;
            }

            .qr-trigger:hover {
                border-color: var(--qr-coral);
                color: var(--qr-coral);
            }

            .qr-stage p {
                margin-top: 14px;
                font: 12px 'JetBrains Mono', monospace;
                color: var(--qr-text-faint);
            }

            /* ---------- modal ---------- */

            #applyNowPopup.qr-overlay {
                position: fixed;
                inset: 0;
                display: none;
                align-items: center;
                justify-content: center;
                background: rgba(4, 5, 7, .78);
                backdrop-filter: blur(6px);
                -webkit-backdrop-filter: blur(6px);
                z-index: 999;
                padding: 20px;
                opacity: 0;
                transition: opacity .25s ease;
            }

            #applyNowPopup.qr-overlay.is-open {
                display: flex;
                opacity: 1;
            }

            #applyNowPopup .qr-shell {
                width: 100%;
                max-width: 860px;
                max-height: 92vh;
            }

            #applyNowPopup .qr-card {
                display: flex;
                background: var(--qr-panel);
                border: 1px solid var(--qr-line-strong);
                border-radius: 22px;
                overflow: hidden;
                max-height: 92vh;
                box-shadow: 0 30px 80px -20px rgba(0, 0, 0, .6);
                transform: translateY(36px) scale(.96);
                opacity: 0;
            }

            #applyNowPopup .qr-card.qr-card-in {
                animation: qrRise .5s cubic-bezier(.22, 1, .36, 1) forwards;
            }

            @keyframes qrRise {
                to {
                    transform: translateY(0) scale(1);
                    opacity: 1;
                }
            }

            #applyNowPopup .qr-aside {
                flex: 0 0 38%;
                position: relative;
                padding: 36px 30px;
                background:
                    radial-gradient(circle at 30% 18%, rgba(255, 107, 74, .16), transparent 55%),
                    var(--qr-ink);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            #applyNowPopup .qr-logo {
                position: absolute;
                top: 24px;
                left: 24px;
                z-index: 2;
            }

            #applyNowPopup .qr-logo img {
                width: 60px;
                height: auto;
                display: block;
                object-fit: contain;
            }

            #applyNowPopup .qr-pulse {
                position: absolute;
                top: -40px;
                right: -60px;
                width: 220px;
                height: 220px;
                pointer-events: none;
            }

            #applyNowPopup .qr-pulse span {
                position: absolute;
                inset: 0;
                border: 1px solid rgba(255, 107, 74, .35);
                border-radius: 50%;
                animation: qrPing 3.2s ease-out infinite;
            }

            #applyNowPopup .qr-pulse span:nth-child(2) {
                animation-delay: 1.05s;
            }

            #applyNowPopup .qr-pulse span:nth-child(3) {
                animation-delay: 2.1s;
            }

            @keyframes qrPing {
                0% {
                    transform: scale(.3);
                    opacity: .7;
                }

                100% {
                    transform: scale(1.4);
                    opacity: 0;
                }
            }

            #applyNowPopup .qr-badge {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                font: 11px/1 'JetBrains Mono', monospace;
                letter-spacing: .04em;
                text-transform: uppercase;
                color: var(--qr-text-soft);
                background: rgba(255, 255, 255, .05);
                border: 1px solid var(--qr-line);
                border-radius: 99px;
                padding: 7px 12px;
                width: max-content;
                margin-bottom: 22px;
                position: relative;
                z-index: 1;
                margin-top: 50px;
            }

            #applyNowPopup .qr-dot {
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: var(--qr-coral);
                animation: qrBlink 1.8s ease-in-out infinite;
            }

            @keyframes qrBlink {

                0%,
                100% {
                    box-shadow: 0 0 0 0 rgba(255, 107, 74, .5);
                }

                50% {
                    box-shadow: 0 0 0 5px rgba(255, 107, 74, 0);
                }
            }

            #applyNowPopup .qr-aside-title {
                font: 700 32px/1.15 'Sora', sans-serif;
                color: var(--qr-text);
                margin: 0 0 12px;
                position: relative;
                z-index: 1;
            }

            #applyNowPopup .qr-aside-text {
                font: 14px/1.6 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text-soft);
                margin: 0 0 22px;
                position: relative;
                z-index: 1;
            }

            #applyNowPopup .qr-course-tag {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                font: 12px 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text);
                background: rgba(255, 255, 255, .06);
                border: 1px solid var(--qr-line);
                border-radius: 10px;
                padding: 8px 12px;
                margin-bottom: 22px;
                width: max-content;
                max-width: 100%;
                position: relative;
                z-index: 1;
            }

            #applyNowPopup .qr-course-tag b {
                color: var(--qr-coral);
                font-weight: 600;
            }

            #applyNowPopup .qr-list {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                gap: 10px;
                position: relative;
                z-index: 1;
            }

            #applyNowPopup .qr-list li {
                display: flex;
                gap: 10px;
                align-items: flex-start;
                font: 13px/1.5 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text-soft);
            }

            #applyNowPopup .qr-list svg {
                flex-shrink: 0;
                margin-top: 2px;
            }

            #applyNowPopup .qr-main {
                flex: 1 1 auto;
                position: relative;
                padding: 30px 34px;
                overflow-y: auto;
            }

            #applyNowPopup .qr-main::-webkit-scrollbar {
                width: 6px;
            }

            #applyNowPopup .qr-main::-webkit-scrollbar-thumb {
                background: var(--qr-line-strong);
                border-radius: 6px;
            }

            #applyNowPopup .qr-close {
                position: absolute;
                top: 20px;
                right: 20px;
                width: 34px;
                height: 34px;
                border-radius: 50%;
                border: 1px solid var(--qr-line-strong);
                background: rgba(255, 255, 255, .03);
                color: var(--qr-text-soft);
                font-size: 18px;
                line-height: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: background .2s ease, color .2s ease, transform .2s ease;
            }

            #applyNowPopup .qr-close:hover {
                background: rgba(255, 255, 255, .1);
                color: var(--qr-text);
                transform: scale(1.08);
            }

            #applyNowPopup .qr-form-title {
                font: 600 18px 'Sora', sans-serif;
                color: var(--qr-text);
                margin: 0 0 20px;
            }

            #applyNowPopup .qr-field {
                position: relative;
                margin-bottom: 22px;
                opacity: 0;
                transform: translateY(10px);
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field {
                animation: qrFieldIn .45s ease forwards;
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field:nth-of-type(1) {
                animation-delay: .12s;
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field:nth-of-type(2) {
                animation-delay: .18s;
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field:nth-of-type(3) {
                animation-delay: .24s;
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field:nth-of-type(4) {
                animation-delay: .30s;
            }

            #applyNowPopup .qr-card.qr-card-in .qr-field:nth-of-type(5) {
                animation-delay: .36s;
            }

            @keyframes qrFieldIn {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            #applyNowPopup .qr-input {
                width: 100%;
                background: transparent;
                border: none;
                border-bottom: 1px solid var(--qr-line-strong);
                padding: 10px 2px 10px;
                font: 15px 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text);
                outline: none;
            }

            #applyNowPopup .qr-input::placeholder {
                color: transparent;
            }

            #applyNowPopup .qr-field label {
                position: absolute;
                left: 2px;
                top: 10px;
                font: 15px 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text-soft);
                pointer-events: none;
                transition: all .18s ease;
            }

            #applyNowPopup .qr-input:focus~label,
            #applyNowPopup .qr-input:not(:placeholder-shown)~label {
                top: -14px;
                font-size: 11px;
                letter-spacing: .03em;
                color: var(--qr-coral);
            }

            #applyNowPopup .qr-underline {
                position: absolute;
                left: 0;
                bottom: 0;
                height: 2px;
                width: 0%;
                background: linear-gradient(90deg, var(--qr-coral), var(--qr-violet));
                transition: width .25s ease;
            }

            #applyNowPopup .qr-input:focus~.qr-underline {
                width: 100%;
            }

            #applyNowPopup select.qr-input {
                appearance: none;
                -webkit-appearance: none;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'%3E%3Cpath d='M1 1L7 7L13 1' stroke='%239AA1A9' stroke-width='1.6' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right 2px center;
                padding-right: 20px;
            }

            #applyNowPopup select.qr-input option {
                background: #1B2024;
                color: #fff;
            }

            #applyNowPopup .qr-actions {
                margin-top: 8px;
            }

            #applyNowPopup .qr-submit {
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                background: linear-gradient(135deg, var(--qr-coral), var(--qr-coral-deep));
                color: #1A0A04;
                font: 600 15px 'Sora', sans-serif;
                border: none;
                border-radius: 12px;
                padding: 15px 20px;
                cursor: pointer;
                overflow: hidden;
                transition: transform .2s ease, box-shadow .2s ease;
                box-shadow: 0 10px 24px -10px rgba(255, 107, 74, .5);
            }

            #applyNowPopup .qr-submit:hover {
                transform: translateY(-2px);
                box-shadow: 0 16px 30px -10px rgba(255, 107, 74, .65);
            }

            #applyNowPopup .qr-submit:active {
                transform: translateY(0) scale(.98);
            }

            #applyNowPopup .qr-submit:disabled {
                cursor: default;
                opacity: .85;
                transform: none;
            }

            #applyNowPopup .qr-ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, .5);
                transform: scale(0);
                animation: qrRippleAnim .6s ease-out;
                pointer-events: none;
            }

            @keyframes qrRippleAnim {
                to {
                    transform: scale(2.6);
                    opacity: 0;
                }
            }

            #applyNowPopup .qr-note {
                margin: 12px 0 0;
                text-align: center;
                font: 12px 'Plus Jakarta Sans', sans-serif;
                color: var(--qr-text-faint);
            }

            @media (prefers-reduced-motion: reduce) {
                #applyNowPopup .qr-card.qr-card-in {
                    animation: none;
                    opacity: 1;
                    transform: none;
                }

                #applyNowPopup .qr-card.qr-card-in .qr-field {
                    animation: none;
                    opacity: 1;
                    transform: none;
                }

                #applyNowPopup .qr-pulse span {
                    animation: none;
                }

                #applyNowPopup .qr-dot {
                    animation: none;
                }
            }

            @media (max-width:760px) {
                #applyNowPopup .qr-card {
                    flex-direction: column;
                }

                #applyNowPopup .qr-aside {
                    flex: none;
                    padding: 26px 24px;
                }

                #applyNowPopup .qr-logo {
                    top: 18px;
                    left: 18px;
                }

                #applyNowPopup .qr-logo img {
                    width: 70px;
                }

                #applyNowPopup .qr-badge {
                    margin-top: 40px;
                }

                #applyNowPopup .qr-pulse {
                    width: 150px;
                    height: 150px;
                    top: -30px;
                    right: -40px;
                }

                #applyNowPopup .qr-aside-title {
                    font-size: 24px;
                }

                #applyNowPopup .qr-main {
                    padding: 26px 24px 28px;
                }
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
                            var el = document.getElementById('downloadLeadPopup');
                            el.classList.remove('is-open');
                            document.body.style.overflow = '';
                            var btn = document.getElementById('leadSubmitBtn');
                            var label = document.getElementById('leadSubmitLabel');
                            btn.disabled = false;
                            label.textContent = 'Get Brochure';
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
