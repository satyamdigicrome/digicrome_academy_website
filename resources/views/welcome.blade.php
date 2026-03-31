@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    {{-- Preload the LCP hero image so the browser fetches it as early as possible --}}
    <link rel="preload" as="image" href="{{ asset('assets/images/home-one/hero-thumb1.webp') }}" fetchpriority="high">
    <link rel="preload"  as="image"  href="https://www.digicrome.com/assets/images/home-one/short.webp" type="image/webp" fetchpriority="high">
    <link rel="preload" href="{{ asset('assets/css/home.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    </noscript>
@endpush
@push('scripts')
    <script>
        let modalSource = null;
        window.addEventListener('load', function() {
            setTimeout(function() {
                openModal();
            }, 3000);
        });

        function openModal() {
            document.getElementById("formModal").style.display = "block";
        }

        function openPlacementModal() {
            const PlacementsourceInput = document.querySelector('#placementformModal input[name="source"]');
            if (PlacementsourceInput) {
                PlacementsourceInput.value = 'Placement Report Website';
            }
            document.getElementById("placementformModal").style.display = "block";
        }

        function closePlacementModal() {
            document.getElementById("placementformModal").style.display = "none";
        }

        function closeModal() {
            document.getElementById("formModal").style.display = "none";
        }
        window.onclick = function(event) {
            const modal = document.getElementById("formModal");
            const placementModal = document.getElementById("placementformModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
            if (event.target === placementModal) {
                placementModal.style.display = "none";
            }
        };
        document.addEventListener('DOMContentLoaded', function() {
            const formfilled = document.getElementById('placementprofessionalForm');
            if (formfilled) {
                formfilled.addEventListener('submit', function() {
                    window.open("{{ asset('assets/images/certificate/Digicrome Company Profile.pdf') }}",
                        "_blank");
                });
            }
            const heroImage = document.querySelector('.hero-section img');
            if (heroImage) {
                heroImage.addEventListener('click', openModal);
            }
        });
    </script>
@endpush
@section('content')
    <section class="hero_area style-one d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <div class="hero_content">
                        <h5><i class="bi bi-check2"></i>Enhance Your future skills with just a click</h5>
                        <h1>Start building your<br>
                            future with a better career transition</h1>
                        @if ($userCountry === 'India')
                            <div style="text-align: left; margin: 10px 0; width: 60%;">
                                <div
                                    style="display: inline-block; background-color: #FCFCFCBA; padding: 10px 15px; border: 1px solid #ccc; border-radius: 6px;">
                                    <small style="font-size: 14px; color: #555;">In collaboration with</small>
                                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/mslogo.png') }}"
                                        class="ds-logo lazyload" alt="Microsoft Logo" title="Microsoft logo"
                                        style="width: 100%; height: auto; margin-top: 5px;">
                                </div>
                            </div>
                        @endif
                        <p>Master the <strong>most sought-after skills</strong> for today's and tomorrow's job market, and
                            position yourself as the top choice for employers in your industry.</p>
                        <div class="hero-button d-flex">
                            <div class="hero-btn">
                                <a href="javascript:void(0);" onclick="openPlacementModal();">PLACEMENT REPORT<i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            <div class="border rounded px-3 py-2 text-secondary campus-tour-btn d-lg-none"
                                style="border-color: #000000 !important;" role="button">
                                <a href="https://vimeo.com/1166319733" target="_blank">CAMPUS TOUR<i
                                        class="fa-brands fa-youtube"
                                        style="font-size: 18px; margin-left: 9px; line-height: 0; position: relative; top: 3px;color:#FF0033;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-rating-box desktop-only2">
                        <div class="hero-rating-icon">
                            <span>10k+</span>
                        </div>
                        <div class="hero-rating-item-box">
                            <div class="hero-star-icon">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="hero-rating-num">
                                <span>(4.8 Ratings)</span>
                            </div>
                            <div class="hero-rating-des">
                                <p>Successful Learners</p>
                            </div>
                        </div>
                        <div class="hero-button">
                            <div class="border rounded px-3 py-2 text-secondary mt-4"
                                style="border-color: #000000 !important;" role="button">
                                <a href="https://vimeo.com/1166319733" target="_blank">CAMPUS TOUR<i
                                        class="fa-brands fa-youtube"
                                        style="font-size: 22px; margin-left: 9px; line-height: 0; position: relative; top: 3px;color:#FF0033;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb-wrapper">
                        <div class="hero-thumb">
                            <img width="600" height="400" fetchpriority="high" loading="eager"
                                src="{{ asset('assets/images/home-one/hero-thumb1.webp') }}" alt="Digicrome thumb"
                                title="Digicrome thumb">
                        </div>
                        <div class="hero-arrow-shape">
                            <img loading="lazy" src="{{ asset('assets/images/home-one/hero-arrow.webp') }}"
                                alt="digicrome arrow" title="Digicrome arrow">
                        </div>
                        <div class="hero-dot-shape">
                            <img fetchpriority="high" loading="eager" decoding="async"
                                style="width: 306px; height: auto;   transform: translate(70px, -209px);"
                                src="{{ asset('assets/images/home-one/short.webp') }}" alt="digicrome dot"
                                title="digicrome dot">
                        </div>
                        {{-- <div class="hero-shape3 bounce-animate-3">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/hero-shape3.webp') }}"
                                alt="digicrome shape" title="digicrome shape">
                        </div> --}}
                        <div class="hero-autor-box">
                            <div class="autor-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/home-one/hero-autor.webp') }}"
                                    alt="digicrome autor" title="digicrome author">
                            </div>
                            <div class="hero-autor-content">
                                <h3 class="counter">130</h3>
                                <span>+</span>
                                <p>Expert Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-area style-one">
        <div class="container">
            <div class="row align-items-center section-title-space">
                <div class="col-lg-6">
                    <div class="section-sub-title pt-6" style="    margin-top: 50px;">
                        <h6>core features</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h2 style="font-size: 30px; font-weight: bold;">Get Expertise & Hands On Advancement </h2>
                        <h2 style="font-size: 30px; font-weight: bold;">In Your Career With Best Industry Experts!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-feature-box box-3">
                        <div class="feature-icon">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/feature-icon1.webp') }}"
                                alt="digicrome feature-icon" title="digicrome feature-icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">500+ Hiring Partners</h4>
                            <p class="feature-desc">We placement assistance, so we have tied up with 500+ global
                                partners to assist students in securing job opportunities.</p>
                        </div>
                        <div class="educate-hover-box hover-bx"></div>
                        <div class="educate-hover-box hover-bx2"></div>
                        <div class="educate-hover-box hover-bx3"></div>
                        <div class="educate-hover-box hover-bx4"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-feature-box box-3">
                        <div class="feature-icon">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/feature-icon2.webp') }}"
                                alt="digicrome feature-icon" title="digicrome feature-icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">45+ Industry-Relevant Projects</h4>
                            <p class="feature-desc">Work on our industry-based live projects to harness top-level industry
                                experience and make way to a winning career.</p>
                        </div>
                        <div class="educate-hover-box hover-bx"></div>
                        <div class="educate-hover-box hover-bx2"></div>
                        <div class="educate-hover-box hover-bx3"></div>
                        <div class="educate-hover-box hover-bx4"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-feature-box box-3">
                        <div class="feature-icon">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/feature-icon3.webp') }}"
                                alt="digicrome feature-icon" title="digicrome feature-icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">60+ Topic-Wise Case Studies</h4>
                            <p class="feature-desc">Access 60+ relevant case studies and assignments to achieve a strong
                                foundation. Get 24/7 assistance available for assignments.</p>
                        </div>
                        <div class="educate-hover-box hover-bx"></div>
                        <div class="educate-hover-box hover-bx2"></div>
                        <div class="educate-hover-box hover-bx3 "></div>
                        <div class="educate-hover-box hover-bx4"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-feature-box box-3">
                        <div class="feature-icon">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/feature-icon3.webp') }}"
                                alt="digicrome feature-icon" title="digicrome feature-icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Job Ready Program</h4>
                            <p class="feature-desc">Exclusive placement cell dedicated to students completing the course,
                                we
                                help secure job opportunities. So far, 5,000+ students have been employed.</p>
                        </div>
                        <div class="educate-hover-box hover-bx"></div>
                        <div class="educate-hover-box hover-bx2"></div>
                        <div class="educate-hover-box hover-bx3"></div>
                        <div class="educate-hover-box hover-bx4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hero-section">
        <div class="hero-section" style="position: relative;">
            <picture>
                {{-- Mobile --}}
                <source media="(max-width: 768px)"
                    srcset="
                    {{ asset('assets/images/home-one/ai-summit-480.webp') }} 480w,
                    {{ asset('assets/images/home-one/ai-summit-768.webp') }} 768w
                "
                    sizes="100vw">
                {{-- AVIF Desktop --}}
                <source type="image/avif" srcset="{{ asset('assets/images/home-one/ai-summit.avif') }}">

                {{-- WebP Desktop Fallback --}}
                <source type="image/webp" srcset="{{ asset('assets/images/home-one/ai-summit.webp') }}">
                {{-- <source srcset="{{ asset('assets/images/home-one/ai-summit-mob2.webp') }}" media="(max-width: 768px)"> --}}
                <img src="{{ asset('assets/images/home-one/ai-summit.webp') }}" alt="Hero Banner" width="1200"
                    height="400" decoding="async" style="width:100%;height:auto;">
            </picture>
        </div>
        {{-- <div class="container">
            <div class="both-btn">
                <button type="button" class="btn button-repfirst" onclick="openModal()" style="">
                    CONNECT WITH US
                </button>
            </div>
        </div> --}}
    </div>
    {{-- <section class="ai-banner-section">

        <div class="connect-btn-wrapper">
            <a href="#" class="connect-btn">Connect With Us</a>
        </div>

        <img src="{{ asset('assets/images/home-one/ai-summit.webp') }}" alt="AI Summit Banner" class="ai-banner-img">
    </section> --}}
    <div class="container">
        <x-logo-slider :companyLogos="$companyLogos" />
    </div>
    <section class="about-area style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="about-thumb-wrapper">
                        <div class="about-thumb">
                            <picture>
                                <source 
                                    media="(max-width: 767px)" 
                                    srcset="{{ asset('assets/images/home-one/about-thumb1-mobile.webp') }}">
                                <img 
                                    loading="lazy"
                                    src="{{ asset('assets/images/home-one/about-thumb1.webp') }}"
                                    alt="digicrome thumb" 
                                    title="digicrome thumb"
                                    width="600"
                                    height="400"
                                    style="width:100%;height:auto;">
                            </picture>
                        </div>
                        {{-- <div class="about-thumb-shape1 bounce-animate-3">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape1.webp') }}"
                                alt="digicrome shape" title="digicrome shape">
                        </div> --}}
                        <div class="about-thumb-shape2 rotateme">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape2.webp') }}"
                                alt="diicrome shape" title="digicrome shapr">
                        </div>
                        <div class="about-thumb-shape3">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape3.webp') }}"
                                alt="digicrome shape" title="diicrome shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about_content">
                        <div class="section-sub-title">
                            <h6>ABOUT US</h6>
                        </div>
                        <div class="section_title">
                            <h2 class="heading-like-h1">Who Are We – Introduction to Digicrome Online Platform</h2>
                        </div>
                        <div class="section-title-desc">
                            <p>We are a globally reputed online educational academy. We skill up students and professionals
                                with must-have IT and Business skills. Through expert-led, certification-backed training, we
                                bridge the gap between learning and industry demands.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-item-list">
                                    <span><img loading="lazy"src="{{ asset('assets/images/home-one/about-icon.webp') }}"
                                            alt="digicrome icon" title="digicrome icon">Globally Recognized
                                        Certifications</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item-list">
                                    <span><img loading="lazy"src="{{ asset('assets/images/home-one/about-icon.webp') }}"
                                            alt="digicrome icon" title="digicrome icon">Industry-Approved
                                        Curriculum</span>
                                </div>
                            </div>
                        </div>
                        <div class="row about-border">
                            <div class="col-lg-6">
                                <div class="about-item-box">
                                    <div class="about-item-count">
                                        <h3 class="counter">30</h3>
                                        <span>+</span>
                                    </div>
                                    <div class="about-item-desc">
                                        <p>Expert Trainers with Industry Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item-box two">
                                    <div class="about-iteam-count">
                                        <h3 class="counter">19</h3>
                                        <span>k+</span>
                                    </div>
                                    <div class="about-item-desc last">
                                        <p>Students from Across the Globe </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="{{ route('about') }}">more about<i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="about-shape5">
                <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape5.webp') }}" alt="digicrome shape"
                    title="digicrome shape">
            </div> --}}
        </div>
    </section>
    @if ($userCountry === 'India')
        <div class="brand-area style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section_title">
                            <h2 class="heading-like-h1">In Association With:</h2>
                        </div>
                        <div class="section-sub-title">
                            <h6 style="text-transform: capitalize; position: static; line-height: 30px; padding: 0px;">
                                Government affiliated program , that shapes the learner’s future and approach towards
                                industry ready !</h6 style=" line-height: 30px;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="brand-list owl-carousel">
                            @foreach ($associationLogos as $logo)
                                <div class="col-lg-12">
                                    <div class="single-brand-box">
                                        <div class="brand-thumb">
                                            <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}"
                                                alt="digicrome brand" title="digicrome brand">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="brand-arrow-shape">
                    <img loading="lazy"src="{{ asset('assets/images/home-one/brand-arrow.webp') }}" alt="digicrome arrow"
                        title="digicrome arrow">
                </div>
                {{-- <div class="brand-star-shape">
                    <img loading="lazy"src="{{ asset('assets/images/home-one/brand-star.webp') }}" alt="digicrome star"
                        title="digicrome star">
                </div> --}}
            </div>
        </div>
    @endif
    <section class="about-area style-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-thumb-wrapper">
                        <div class="about-thumb zoom-sequence">
                            <div class="image-container">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p3.webp') }}"
                                    alt="First image" title="First image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p4.webp') }}"
                                    alt="Second image" title="Second image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p5.webp') }}"
                                    alt="Third image" title="Third image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p1.webp') }}"
                                    alt="Fouth image" title="Fourth image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p2.webp') }}"
                                    alt="Fifth image" title="Fifth image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p6.webp') }}"
                                    alt="Sixth image" title="Sixth image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p7.webp') }}"
                                    alt="Seven image" title="Seven image">
                                <img class="image" loading="lazy" src="{{ asset('assets/images/p8.webp') }}"
                                    alt="Eight image" title="Eight image">
                            </div>
                        </div>
                    </div>
                    <style>
                        .zoom-sequence {
                            position: relative;
                        }

                        .image-container {
                            width: 100%;
                            max-width: 500px;
                            aspect-ratio: 2/3;
                        }

                        .about-call-box {
                            z-index: 5;
                            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
                        }

                        .zoom-sequence .image {
                            position: absolute;
                            top: 0;
                            left: 0;
                            opacity: 0;
                            transform: scale(0.8);
                            transition: opacity 1.5s ease, transform 1.5s ease;
                        }

                        .zoom-sequence .image.show {
                            opacity: 1;
                            transform: scale(1);
                            z-index: 2;
                        }

                        .zoom-sequence .image.hide {
                            opacity: 0;
                            transform: scale(0.8);
                            z-index: 1;
                        }
                    </style>
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            const images = document.querySelectorAll('.zoom-sequence .image');
                            let current = 0;

                            function showImage(index) {
                                images.forEach((img, i) => {
                                    if (i === index) {
                                        img.classList.add('show');
                                        img.classList.remove('hide');
                                    } else {
                                        img.classList.remove('show');
                                        img.classList.add('hide');
                                    }
                                });
                            }
                            showImage(current);
                            setInterval(() => {
                                current = (current + 1) % images.length;
                                showImage(current);
                            }, 5000);

                        });
                    </script>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_content">
                        <div class="section-sub-title">
                            <h6>Our Achievement</h6>
                        </div>
                        <div class="section_title">
                            <h2 class="heading-like-h1"> Digicrome wins Best Edtech award <br>in online digital education
                                at the <br> Bharat Gaurav summit 2026</h2>

                        </div>
                        <div class="section-title-desc two">
                            <p>
                                Digicrome has been proudly honoured as <strong>Best EdTech in Online & Digital Education
                                    2026</strong> at the
                                <strong>Bharat Gaurav Education Summit & Awards</strong>, showing our excellence in
                                innovative instruction,
                                learners' success, and reformation in technical data knowledge.
                                {{-- Digicrome was honored with the prestigious <strong>Excellency Iconic Award 2025</strong> for
                                its outstanding contribution to innovative and accessible education.
                                This recognition celebrates our commitment to delivering high-quality training and
                                empowering learners across the globe. --}}
                            </p>
                            <p>
                                Combining a rich tradition with modern technology, we foster both academic and individual
                                progress. Skillfully architecting meta-duties through excellent whiteboard education
                                experiences, we strive to set new benchmarks in the educational domain.
                                {{-- Combining a rich legacy with cutting-edge technology, we foster both academic and personal
                                growth.
                                Conveniently architecting meta-services through world-class whiteboard learning experiences,
                                we continue to set new benchmarks in the education sector. --}}
                            </p>
                        </div>
                        <div class="about-btn">
                            <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="brand-area style-one mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-4">
                    <div class="brand-list owl-carousel">
                        @foreach ($certificate as $logo)
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
                <div class="col-lg-5">
                    <div class="section_title mb-4">
                        <h2 class="heading-like-h1">Our Certification Partners</h2>
                    </div>
                    <p class="mb-4">
                        Empowering learners through globally recognized certifications with industry-leading organizations.
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                            <i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
                            <span><b> Trusted Collaboration: </b> We work with top-tier certification bodies to ensure every
                                course meets international standards.</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
                            <span><b>Career-Boosting Credentials: </b> Earn certifications that enhance your professional
                                profile and open doors to global opportunities.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="case-study-area style-one">
        <div class="container">
            <div class="row align-items-center section-title-space">
                <div class="col-lg-6">
                    <div class="section-sub-title">
                        <h6>OUR COURSES</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h2 class="heading-like-h1">Our Courses – Comprehensive</br>
                            Available all programs</h2>
                    </div>
                </div>
            </div>
            <div class="row case-study-bg">
                <div class="col-lg-12 col-sm-12">
                    <div class="case_study_nav">
                        <div class="case_study_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item" data-filter=".Upcoming">Upcoming Courses</li>
                                @foreach ($collections as $collection)
                                    <li data-filter=".{{ Str::slug($collection->name) }}">{{ $collection->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('load', function () {
                var grid = document.querySelector('.image_load');
                var iso = new Isotope(grid, {
                    itemSelector: '.grid-item',
                    layoutMode: 'fitRows'
                });
                var filterButtons = document.querySelectorAll('.menu-filtering li');
                filterButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        filterButtons.forEach(btn => btn.classList.remove('current_menu_item'));
                        this.classList.add('current_menu_item');
                        var filterValue = this.getAttribute('data-filter');
                        iso.arrange({
                            filter: filterValue
                        });
                    });
                });
                iso.arrange({
                    filter: '.Upcoming'
                });
            });
        </script>
        <div class="container">
            <div class="row image_load">
                {{-- @dd($upcomingCourses) --}}
                @foreach ($upcomingCourses as $course)
                    <div class="col-xl-3 col-lg-6 col-md-6 grid-item Upcoming">
                        <div class="case-study-single-box">
                            <div class="case-study-thumb">
                                <img loading="lazy"src="{{ asset('storage/' . $course->image) }}" alt="case-study-thumb"
                                    title="case-study-thumb">
                            </div>
                            <div class="case-study-content">
                                <h5>Courses</h5>
                                <h4><a
                                        href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                </h4>
                                <div class="case-rating">

                                    <div class="case-rating-num">
                                        <span>Duration: {{ $course->course_duration }}</span>
                                    </div>
                                </div>

                                <br><br>
                                <div class="course-btn">
                                    <a href="{{ route('course_details', ['slug' => $course->slug]) }}">EXPLORE NOW<i
                                            class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($collections as $collection)
                    @foreach ($collection->courses as $course)
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item {{ Str::slug($collection->name) }}">
                            <div class="case-study-single-box">
                                <div class="case-study-thumb">
                                    <img loading="lazy" src="{{ asset('storage/' . $course->image) }}"
                                        alt="case-study-thumb" title="case-study-thumb">
                                </div>
                                <div class="case-study-content">
                                    <h5>{{ $collection->name }}</h5>
                                    <h4><a
                                            href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                    </h4>
                                    <div class="case-rating">

                                        <div class="case-rating-num">
                                            <span>Duration: {{ $course->course_duration }}</span>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="course-btn">
                                        <a href="{{ route('course_details', ['slug' => $course->slug]) }}">EXPLORE NOW<i
                                                class="flaticon flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <div class="why-choose-area style-one" style="background: rgb(240 251 255)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="choose-content">
                        <div class="section-sub-title">
                            <h6>why choose us?</h6>
                        </div>
                        <div class="section_title">
                            <h2 class="heading-like-h1">We Bring You Closer To<br>A Successful Career</h2>
                        </div>
                        <div class="section-title-desc">
                            <p>Get that Ideal career with better pay—even without an IT degree. Whatever your background, we
                                support you from basic to advanced. As one of the best Data Science institutes in India, and
                                the top Data science institute in Metropolitan cities, we make career shifts smooth. Quickly
                                apply and work for your success.</p>
                        </div>
                        <div class="choose-item-menu">
                            <ul>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon1.webp') }}"
                                        alt="choose-item-menu" title="choose-item-menu">Weekend
                                    Live Sessions
                                </li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon2.webp') }}"
                                        alt="choose-item-menu" title="choose-item-menu">Select a
                                    convenient batch time
                                </li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon3.webp') }}"
                                        alt="choose-item-menu" title="choose-item-menu">Get
                                    Placement Aid
                                </li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon4.webp') }}"
                                        alt="choose-item-menu" title="choose-item-menu">Get a
                                    Salary Hike
                                </li>
                            </ul>
                        </div>
                        <p class="choose-suport-des"><img
                                loading="lazy"src="{{ asset('assets/images/home-one/top-star.webp') }}" alt="top-star"
                                title="top-star">24/7 Mentor Support Available </p>
                        <div class="choose-btn">
                            <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="choose-thumb">
                        <img loading="lazy"src="{{ asset('assets/images/home-one/choose-thumb1.webp') }}"
                            alt="choose-thumb" title="choose-thumb">
                        <div class="choose-skill-box">
                            <div class="choose-skill-icon">
                                <img loading="lazy"src="{{ asset('assets/images/home-one/choose-rat-icon.webp') }}"
                                    alt="choose-skill-icon" title="choose-skill-icon">
                            </div>
                            <div class="choose-skill-content">
                                <h3 class="counter">10</h3>
                                <span>+</span>
                                <p>Years of Experiences</p>
                            </div>
                        </div>
                        <div class="choose-shape-dot">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/choose-dot.webp') }}"
                                alt="shape-dot" title="shape-dot">
                        </div>
                        <div class="choose-shape-star">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/choose-star.webp') }}"
                                alt="shape-star" title="shape-star">
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-shape1">
                <img loading="lazy"src="{{ asset('assets/images/home-one/choose-shape1.webp') }}" alt="shape1"
                    title="shape1">
            </div>
            {{-- <div class="choose-shape2">
                <img loading="lazy"src="{{ asset('assets/images/home-one/choose-circle.webp') }}" alt="shape2"
                    title="shape2">
            </div> --}}
        </div>
    </div>
    <div class="brand-area style-one mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_title mb-4">
                        <h2 class="heading-like-h1">Moments of Honour</h2>
                    </div>
                    <p class="mb-4">
                        In our EdTech journey of <b> more than a decade,</b> we have received numerous awards.<br>
                        Some of the recent notable awards we have received are:
                    </p>
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
    <div class="course-design-offer-area style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div style="width:100%; max-width:600px;">
                        <iframe loading="lazy"
                            src="https://player.vimeo.com/video/1164337631?title=0&byline=0&portrait=0&badge=0&share=0&watchlater=0&controls=1&autopause=0&autoplay=1&loop=1&muted=1"
                            width="100%" height="340" frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-course-offer-box">
                        <div class="course-offer-content">
                            <h6>Digicrome</h6>
                            <h4>Data Science With</h4>
                            <h4>Artificial Intelligence</h4>
                            <div class="offer-rating">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
                                </ul>
                                <div class="offer-rating-rate">
                                    <span>(4.8 Ratings)</span>
                                </div>
                                <br><br>
                            </div>
                            <div class="course-offer-btn">
                                <a href="javascript:void(0);" onclick="openModal()">EXPLORE NOW<i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="offer-thumb">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/offer-thumb.webp') }}"
                                alt="offer-thumb" title="offer-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (count($videos) > 0)
        <section class="custom-testimonial-section">
            <div class="container-fluid bg-image-section">
                <div class="container">
                    <div class="row py-5 align-items-start">
                        <div class="col-lg-3 order-1 order-lg-1 mb-4 mb-lg-0">
                            <h3 class="section-title">Our 3 Steps</h3>
                            <p class="section-sub">Recruitment Process</p>
                            <div class="steps-wrapper">
                                <div class="step-item">
                                    <div class="step-icon blue">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Profile Building</h6>
                                        <small>Strong ATS-Friendly Resume</small>
                                        <small>Optimize LinkedIn Profile</small>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <div class="step-icon orange">
                                        <i class="fa-solid fa-comments"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Mock Interviews</h6>
                                        <small>Technical Interviews</small>
                                        <small>Interview Strategy</small>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <div class="step-icon green">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="step-content">
                                        <h6>Right Opportunity</h6>
                                        <small>Job Mapping</small>
                                        <small>Interview Scheduling</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-2 order-lg-2">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">

                                    @foreach ($videos as $video)
                                        <div class="swiper-slide">
                                            <div class="gif-wrapper" data-bs-toggle="modal"
                                                data-bs-target="#youtubeModal"
                                                data-youtube="https://www.youtube.com/embed/{{ $video->video_link }}">

                                                <div class="gif-container">
                                                    <video class="gif-img" autoplay loop muted playsinline
                                                        poster="{{ asset('storage/' . $video->image) }}">
                                                        <source src="{{ asset('storage/' . $video->image) }}"
                                                            type="video/mp4">
                                                    </video>

                                                    <div class="play-btn">▶</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-3 order-lg-3 mt-5 mt-lg-0">
                            <h4 class="section-title">Beyond Courses:</h4>
                            <p class="section-sub">Additional Support We Provide</p>
                            <div class="beyond-grid">
                                <div class="beyond-box">
                                    <i class="fa-brands fa-github"></i>
                                    <span>Github Profile</span>
                                </div>
                                <div class="beyond-box">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <span>LinkedIn Profile</span>
                                </div>
                                <div class="beyond-box">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <span>Resume Writing</span>
                                </div>
                                <div class="beyond-box">
                                    <i class="fa-solid fa-user-check"></i>
                                    <span>Soft Skills</span>
                                </div>
                                <div class="beyond-box">
                                    <i class="fa-solid fa-clipboard-list"></i>
                                    <span>Interview Preparation</span>
                                </div>
                                <div class="beyond-box">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <span>Live Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered custom-youtube-dialog">
                    <div class="youtube-modal-box">
                        <button type="button" class="btn-close btn-close-white custom-close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="youtube-video-wrapper">
                            <iframe id="youtubePlayer" loading="lazy" src="" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .custom-testimonial-section .bg-image-section {
                background:
                    linear-gradient(90deg, rgba(242, 159, 26, 0.85), rgba(26, 20, 71, 0.9)),
                    image-set(url('{{ asset('assets/images/testimonial-bg.avif') }}') type("image/avif"),
                        url('{{ asset('assets/images/testimonial-bg.webp') }}') type("image/webp"));

                background-size: cover;
                background-position: center;
            }

            /* Section Titles */
            .section-title {
                color: #fff;
                font-weight: 800;
                font-size: 24px;
            }

            .section-sub {
                color: #fff;
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            /* STEP LINE DESIGN */
            .steps-wrapper {
                position: relative;
                padding-left: 35px;
            }

            .steps-wrapper::before {
                content: "";
                position: absolute;
                left: 12px;
                top: 10px;
                width: 3px;
                height: 85%;
                background: #ffffff60;
            }

            .step-item {
                position: relative;
                display: flex;
                margin-bottom: 10px;
            }

            .step-icon {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                left: -35px;
                top: 3px;
                font-size: 12px;
                color: #fff;
            }

            .step-icon.blue {
                background: #007bff;
            }

            .step-icon.orange {
                background: #f29c12;
            }

            .step-icon.green {
                background: #28a745;
            }

            .step-content {
                background: #fff;
                padding: 5px 15px;
                border-radius: 6px;
                width: 100%;
            }

            .step-content h6 {
                font-weight: 700;
                font-size: 15px;
                margin-bottom: 5px;
            }

            .step-content small {
                display: block;
                font-size: 12px;
                color: #555;
            }

            /* BEYOND GRID */
            .beyond-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .beyond-box {
                background: #fff;
                padding: 15px;
                border-radius: 8px;
                text-align: center;
                display: flex;
                flex-direction: column;
                gap: 8px;
                font-size: 13px;
                font-weight: 600;
                color: #034BA5;
                transition: 0.3s;
            }

            .beyond-box i {
                font-size: 22px;
            }

            .beyond-box:hover {
                transform: translateY(-5px);
            }

            /* MOBILE RESPONSIVE */
            @media(max-width:991px) {

                .mySwiper {
                    margin: 40px 0;
                }

            }

            @media(max-width:768px) {

                /* Slider 1 per view */
                .swiper-slide {
                    width: 220px;
                }

                .beyond-grid {
                    grid-template-columns: 1fr;
                }

                .steps-wrapper::before {
                    height: 90%;
                }

            }

            .mySwiper {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .swiper-slide {
                width: 250px;
                transition: 0.4s;
            }

            .swiper-slide-active {
                transform: scale(1.15);
                z-index: 10;
            }

            .gif-container {
                width: 250px;
                height: 420px;
                border-radius: 15px;
                overflow: hidden;
                position: relative;
            }

            .gif-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .play-btn {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #fff;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
            }

            .youtube-modal-box {
                background-color: #000;
                border-radius: 12px;
                overflow: hidden;
                width: 100%;
                max-width: 420px;
                margin: auto;
                position: relative;
            }

            .youtube-video-wrapper {
                position: relative;
                width: 100%;
                padding-top: 177.77%;
                background-color: #000;
            }

            .youtube-video-wrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
            }

            .custom-youtube-dialog {
                max-width: 100%;
                width: auto;
                margin: auto;
            }

            .custom-close-btn {
                position: absolute;
                color: black !important;
                background-color: transparent !important;
                border: none !important;
                top: 10px;
                right: 10px;
                z-index: 10;
                filter: invert(1);
                opacity: 0.8;
                transition: 0.2s;
            }

            .custom-close-btn:hover .custom-close-btn:focus {
                color: black !important;
                opacity: 1;
            }

            @media (max-width: 576px) {
                .youtube-modal-box {
                    max-width: 90%;
                }
            }

            .custom-modal-dialog {
                max-width: 400px;
                width: 100%;
            }

            @media (max-width: 576px) {
                .custom-modal-dialog {
                    margin: 0 10px;
                }
            }
        </style>
        <script>
            window.addEventListener('load', function () {
                const swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    loop: true,
                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        768: {
                            slidesPerView: 2
                        },
                        992: {
                            slidesPerView: 3
                        }
                    },
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 250,
                        modifier: 1,
                        slideShadows: false,
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    }
                });
                const cards = document.querySelectorAll('.gif-wrapper');
                const player = document.getElementById('youtubePlayer');
                const modal = document.getElementById('youtubeModal');

                cards.forEach(card => {
                    card.addEventListener('click', function() {
                        player.src = this.getAttribute('data-youtube') +
                            '?autoplay=1&modestbranding=1&rel=0';
                    });
                });

                modal.addEventListener('hidden.bs.modal', function() {
                    player.src = '';
                });

            });
        </script>
    @endif
    <div class="testimonial-area style-two mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-sub-title two">
                        <h6><img loading="lazy"src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}"
                                alt="subtitle-icon" title="subtitle-icon">TESTIMONIALS</h6>
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
                        <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
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
                                                alt="testi-autor"
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
    <x-mentor-popup :mentors="$mentors" />
    <div class="testimonial-area style-inner">
        <div class="container">
            <div class="row section-title-space">
                <div class="col-xl-4 col-lg-12">
                    <div class="section-sub-title three">
                        <h6><img loading="lazy"src="{{ asset('assets/images/inner-img/sub-title2.webp') }}"
                                alt="sub-title2" title="sub-title2">Success Stories
                        </h6>
                    </div>
                    <div class="section_title">
                        <h2 class="heading-like-h1">All Real Experiences
                            <br>From Our Dedicated</br>
                            Learners
                        </h2>
                    </div>
                    <div class="testi-review-box">
                        <div class="review-image">
                            <img loading="lazy"src="{{ asset('assets/images/home-three/course-instructor.webp') }}"
                                alt="course-instructor" title="course-instructor">
                        </div>
                        <div class="testi-review-content">
                            <h3 class="counter">250</h3>
                            <span>+</span>
                            <p>Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="row">
                        <div class="testi-list-inner owl-carousel">
                            @foreach ($studentStories as $story)
                                <div class="col-lg-12">
                                    <div class="testi-box">
                                        <div class="single-testi-box">
                                            <div class="testi-quote">
                                                <img loading="lazy"src="{{ asset('assets/images/home-three/testi-quote.webp') }}"
                                                    alt="testi-quote" title="testi-quote">
                                            </div>

                                            <div class="testi-desc">
                                                <p>{!! $story->stoire !!}</p>
                                            </div>

                                            <div class="testi-autor-box">
                                                <div class="testi-autor">
                                                    <img loading="lazy"src="{{ asset('storage/' . $story->image) }}"
                                                        alt="testi-author" title="testi-author"
                                                        class="rounded-circle img-fluid"
                                                        style="width: 70px; height: 70px; ">
                                                </div>
                                                <div class="testi-autor-content">
                                                    <h5 class="autor-title">{{ $story->studentname }}</h5>
                                                    <p class="autor-desi">{{ $story->position }} at
                                                        {{ $story->companyname }}
                                                    </p>
                                                </div>
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
    <section>
        <div class="container-fluid Learner-say-combine">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>See What Our Learners Say!</h4>
                        <div class="social-media-links">
                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="whatsapp-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/whatsappicon.png') }}"></a>
                            </div>

                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="linkedin-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/linkedinicon.png') }}"></a>

                            </div>
                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="quora-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/quoraicon.png') }}"></a>

                            </div>
                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="facebook-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/facebookicon.png') }}"></a>

                            </div>
                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="google-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/googleicon.png') }}"></a>

                            </div>
                            <div class="first-card">
                                <a href="{{ route('success_stories') }}" target="_blank" rel="noopener noreferrer"><img
                                        width="150" height="58" alt="mouthshut-icon" loading="lazy"
                                        src="{{ asset('assets/images/see_what/mouthshuticon.png') }}"></a>

                            </div>
                        </div>

                        <div class="iocn-google-review-section mt-4">
                            <!-- Google Review Section 1 -->
                            <div class="inner-div-icon">
                                <div class="cover-google"> <img alt="Google logo" loading="lazy"
                                        src="{{ asset('assets/images/see_what/google_home.svg') }}">
                                    <div class="start-icon">
                                        <div class="rating-section">
                                            <p>4.8</p> <img alt="Star icon representing rating" width="15"
                                                loading="lazy" src="{{ asset('assets/images/see_what/star_home.svg') }}">
                                        </div>
                                        <div class="text-review0-section">
                                            <p>399+ Google Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Review Section 2 -->
                            <div class="inner-div-icon">
                                <div class="cover-google"> <img alt="Course Report logo" loading="lazy"
                                        src="{{ asset('assets/images/see_what/course-report.png') }}">
                                    <div class="start-icon">
                                        <div class="rating-section">
                                            <p>4.8</p> <img alt="Star icon representing rating" width="15"
                                                loading="lazy" src="{{ asset('assets/images/see_what/star_home.svg') }}">
                                        </div>
                                        <div class="text-review0-section">
                                            <p>1568+ Course Report Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Review Section 3 -->
                            <div class="inner-div-icon">
                                <div class="cover-google"> <img alt="Sikhao logo" loading="lazy" class="lazyload10"
                                        src="{{ asset('assets/images/see_what/ambition-box.jpeg') }}">
                                    <div class="start-icon">
                                        <div class="rating-section">
                                            <p>4.3</p> <img alt="Star icon representing rating" width="15"
                                                loading="lazy" class="lazyload10"
                                                src="{{ asset('assets/images/see_what/star_home.svg') }}">
                                        </div>
                                        <div class="text-review0-section">
                                            <p>50+ Ambition Box Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Review Section 4 -->
                            <div class="inner-div-icon">
                                <div class="cover-google"> <img alt="Muth Shout logo" loading="lazy"
                                        src="{{ asset('assets/images/see_what/muthshout_home.svg') }}">
                                    <div class="start-icon">
                                        <div class="rating-section">
                                            <p>4.5</p> <img alt="Star icon representing rating" width="15"
                                                loading="lazy"
                                                src="{{ asset('assets/images/see_what/star_home.svg') }}">
                                        </div>
                                        <div class="text-review0-section">
                                            <p>230+ MouthShut Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Review Section 5 -->
                            <div class="inner-div-icon last-switchupicon-hide">
                                <div class="cover-google"> <img alt="Face icon representing a review" loading="lazy"
                                        src="{{ asset('assets/images/see_what/favicon.ico') }}">
                                    <div class="start-icon">
                                        <div class="rating-section">
                                            <p>4.0</p> <img alt="Star icon representing rating" width="15"
                                                loading="lazy"
                                                src="{{ asset('assets/images/see_what/star_home.svg') }}">
                                        </div>
                                        <div class="text-review0-section">
                                            <p>100+ Glassdoor Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container text-center">
            <h2 class="text-center mb-4" style="font-size: 2rem;">
                Our <span style="color: #f29c12;">Data Science with AI </span> Certification Course Journey
            </h2>
            <img loading="lazy"src="{{ asset('assets/images/home-one/phase.webp') }}" alt="Vision Image"
                title="Vision Image" class="img-fluid rounded shadow-lg" />
        </div>
    </section>
    <div class="why-choose-area style-one" style="background: rgb(240 251 255)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="choose-content">
                        <div class="section-sub-title">
                            <h6>Explore Career Opportunities in the most future-oriented sector</h6>
                        </div>
                        <div class="section_title">
                            <h2>Build Skills. Grab Opportunities.</br>
                                Start Now.</h2>
                        </div>
                        <div class="section-title-desc">
                            <p>Become a professional at what you learn. Start from scratch and make your way to a career
                                full of growth, opportunities, and success. Begin today and build your future right.
                            </p>
                        </div>
                        <div class="choose-item-menu">
                            <ul>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon1.webp') }}"
                                        alt="choose-icon1" title="choose-icon1">500 +
                                    Global Companies</li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon2.webp') }}"
                                        alt="choose-icon2" title="choose-icon2">12-15 LPA
                                    Average CTC</li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon3.webp') }}"
                                        alt="choose-icon3" title="choose-icon3">25-27 LPA
                                    Highest CTC</li>
                                <li><img loading="lazy"src="{{ asset('assets/images/home-one/choose-icon4.webp') }}"
                                        alt="choose-icon4" title="choose-icon4">80 %
                                    Average Hike</li>
                            </ul>
                        </div>
                        <p class="choose-suport-des"><img
                                loading="lazy"src="{{ asset('assets/images/home-one/top-star.webp') }}" alt="top-star"
                                title="top-star">Don't Stay Stuck, Expand Your Potential Today
                        </p>
                        <div class="choose-btn">
                            <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="choose-thumb">
                        <img loading="lazy"src="{{ asset('assets/images/home-one/roles.webp') }}" alt="roles"
                            title="roles">

                        <div class="choose-shape-dot">
                        </div>
                        <div class="choose-shape-star">
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-shape1">
            </div>
            <div class="choose-shape2">
            </div>
        </div>
    </div>
    <div class="blog-area style-one">
        <div class="container">
            <div class="row align-items-center section-title-space">
                <div class="col-lg-6">
                    <div class="section-sub-title">
                        <h6>LATEST BLOGS</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h2 class="heading-like-h1">Read out our latest updates</br>
                            from digicrome</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="row">
                    @foreach ($blogs->take(3) as $blog)
                        <div class="col-xl-4 col-lg-12 col-md-4">
                            <div class="single-blog-box box-1">
                                <div class="single-blog-thumb">
                                    <img loading="lazy"src="{{ asset('storage/' . $blog->blog_image) }}"
                                        alt="single-blog-thumb" title="single-blog-thumb" class="img-fluid">
                                    <div class="blog-meta-top">
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-author">
                                        <h4 style="display: flex; align-items: center; gap: 10px;">
                                            @if ($blog->author_image)
                                                <img loading="lazy"src="{{ asset('storage/' . $blog->author_image) }}"
                                                    alt="author-img" title="author-img"
                                                    style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                            @endif
                                            {{ $blog->author_name }}
                                        </h4>
                                    </div>

                                    <div class="blog-title">
                                        <h3>
                                            <a href="{{ route('blog.details', $blog->slug) }}">
                                                {{ $blog->heading }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="{{ route('blog.details', $blog->slug) }}">
                                            Continue Reading
                                            <img loading="lazy"src="{{ asset('assets/images/home-one/blog-icon1.webp') }}"
                                                alt="blog-icon1" title="blog-icon1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section class="company-form contactpage-form" style="padding-top:10px;">
        <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
            <h2 class="text-center mb-2" style="font-size: 2rem;">
                Meet <span style="color: #f29c12;">Our Team</span>
            </h2>
        </div>

        <div class=" galary owl-carousel ">
            @foreach ($gallery as $photo)
                <div class="item">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img loading="lazy"src="{{ asset('storage/' . $photo->image) }}" class="gal-siz-1"
                            alt="digicrome_image" title="digicrome_image" loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>{{ $photo->name }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
