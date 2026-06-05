@extends('layouts.app')

@section('content')
    @php
        $departments = [
            [
                'title' => 'AI & Data Science',
                'image' => 'uploads/departments/ai.jpg',
                'description' =>
                    'Our AI team develops machine learning models, predictive analytics and intelligent automation systems that help businesses make smarter decisions.',
            ],
            [
                'title' => 'Cyber Security',
                'image' => 'uploads/departments/security.jpg',
                'description' =>
                    'Protecting organizations through advanced threat monitoring, security assessments and enterprise-grade cyber defense solutions.',
            ],
            [
                'title' => 'Software Engineering',
                'image' => 'uploads/departments/software.jpg',
                'description' =>
                    'Building scalable web, mobile and enterprise applications with modern architectures and high-performance frameworks.',
            ],
            [
                'title' => 'Cloud & DevOps',
                'image' => 'uploads/departments/cloud.jpg',
                'description' =>
                    'Accelerating deployment pipelines and creating secure, scalable cloud infrastructure for modern enterprises.',
            ],
        ];
    @endphp
    <style>
        :root {
            --primary: #1a1447;
            --secondary: #00bcd4;
            --dark: #0d1b2a;
            --light: #f8f9fa;
            --theme: #1a1447;
            --gold: #ff9800;
            --theme-gradient: linear-gradient(135deg, #1a1447, #00bcd4);
        }

        /* ==========================
       COMMON
    ========================== */
        h2 {
            text-transform: none;
        }

        .about-section {
            padding: 100px 0;
        }

        .section-subtitle {
            color: var(--theme);
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: 42px;
            font-weight: 700;
            display: block;
            color: #1b1b1b;
        }

        .section-desc {
            color: #6c757d;
            line-height: 1.8;
        }

        /* ==========================
       HERO
    ========================== */

        .about-hero {
            padding: 80px 0;
            background: #fff;
        }

        .about-video {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .15);
        }

        .about-video iframe {
            width: 100%;
            height: 500px;
        }

        .hero-badge {
            color: var(--theme);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .hero-title {
            font-size: 55px;
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-title span {
            color: var(--gold);
        }

        .hero-content p {
            color: #6c757d;
            line-height: 2;
            margin-top: 25px;
        }

        .hero-btn {
            margin-top: 25px;
        }

        /* ==========================
       SUCCESS COUNTER
    ========================== */

        .success-section {
            background: var(--theme-gradient);
            position: relative;
            overflow: hidden;
            color: white;
        }

        .success-card {
            text-align: center;
            padding: 30px;
            border-right: 1px solid rgba(255, 255, 255, .15);
        }

        .success-card:last-child {
            border-right: none;
        }

        .counter {
            font-size: 48px;
            font-weight: 800;
        }

        .counter-title {
            margin-top: 10px;
            font-size: 16px;
            opacity: .95;
        }

        /* ==========================
       VISION
    ========================== */

        .vision-wrapper {
            position: relative;
        }

        .vision-center {
            text-align: center;
        }

        .vision-center img {
            max-width: 450px;
            width: 100%;
        }

        .vision-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
            transition: .3s;
            height: 100%;
        }

        .vision-card:hover {
            transform: translateY(-8px);
        }

        .vision-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: rgba(13, 110, 253, .1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--theme);
            font-size: 22px;
            margin-bottom: 15px;
        }

        .vision-card h5 {
            font-weight: 700;
        }

        /* ==========================
       RESPONSIVE
    ========================== */

        @media(max-width:991px) {

            .hero-title {
                font-size: 38px;
            }

            .about-video iframe {
                height: 350px;
            }

            .success-card {
                border: none;
            }

            .section-title {
                font-size: 32px;
            }

            .about-section {
                padding: 70px 0;
            }

        }

        .team-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: .5s;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .65);
            color: #fff;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            opacity: 0;
            transition: .4s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        @media(max-width:991px) {

            .team-gallery {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:576px) {

            .team-gallery {
                grid-template-columns: 1fr;
            }

        }

        .gallery-item:nth-child(odd) img {
            height: 220px;
        }

        .gallery-item:nth-child(even) img {
            height: 320px;
        }

        .department-section {
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .department-content {
            padding: 20px 30px;
        }

        .department-content h3 {
            font-size: 32px;
            font-weight: 700;
            color: var(--theme-color);
            margin-bottom: 20px;
        }

        .department-content p {
            line-height: 2;
            color: #666;
            font-size: 16px;
        }

        .quote-icon {
            font-size: 45px;
            color: var(--theme-color);
            margin-bottom: 15px;
        }

        .department-prev,
        .department-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
        }

        .department-prev {
            left: 30px;
        }

        .department-next {
            right: 30px;
        }

        .department-prev:hover,
        .department-next:hover {
            background: var(--theme-color);
            color: #fff;
        }

        .department-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
        }

        .department-pagination .swiper-pagination-bullet-active {
            width: 30px;
            border-radius: 20px;
            background: var(--theme-color);
        }

        .corner-shape {
            position: absolute;
            border-radius: 12px;
            z-index: 1;
        }

        .shape-1 {
            width: 80px;
            height: 80px;
            background: rgba(0, 123, 255, .12);
            top: 80px;
            left: -20px;
        }

        .shape-2 {
            width: 55px;
            height: 55px;
            background: rgba(0, 123, 255, .15);
            top: 300px;
            right: -10px;
        }

        .shape-3 {
            width: 100px;
            height: 100px;
            background: rgba(0, 188, 212, .12);
            bottom: 80px;
            left: -30px;
        }

        .shape-4 {
            width: 70px;
            height: 70px;
            background: rgba(0, 188, 212, .18);
            bottom: 120px;
            right: -15px;
        }
    </style>


    <!-- ==========================
         HERO SECTION
    =========================== -->

    <section class="about-hero">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <div class="hero-content">

                        <div class="hero-badge">
                            Know More About Us
                        </div>

                        <h1 class="hero-title">
                            Building the Future with
                            <span>AI & Technology</span>
                        </h1>

                        <p>
                            Digicrome empowers businesses through
                            Artificial Intelligence, Data Science,
                            Cyber Security, Cloud Solutions and
                            Digital Transformation.

                            Explore our campus and discover the
                            innovation-driven culture behind every
                            solution we create.
                        </p>

                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg hero-btn"
                            style="background: var(--primary)">
                            Get Started
                        </a>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="about-video">

                        <iframe src="https://www.youtube.com/embed/9KSsPoegNCM?si=COFPYUi4PgHFIo2f" title="Campus Tour"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================
         SUCCESS NUMBERS
    =========================== -->

    <section class="success-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold text-white">
                    Our Success Numbers
                </h2>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="success-card">

                        <div class="counter" data-count="500">
                            0
                        </div>

                        <div class="counter-title">
                            Projects Delivered
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="success-card">

                        <div class="counter" data-count="50">
                            0
                        </div>

                        <div class="counter-title">
                            Enterprise Clients
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="success-card">

                        <div class="counter" data-count="100">
                            0
                        </div>

                        <div class="counter-title">
                            Technology Experts
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="success-card">

                        <div class="counter" data-count="10">
                            0
                        </div>

                        <div class="counter-title">
                            Years of Innovation
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- department based ui  --}}
    <section class="department-section position-relative">

        <!-- Corner Decorations -->

        <span class="corner-shape shape-1"></span>
        <span class="corner-shape shape-2"></span>
        <span class="corner-shape shape-3"></span>
        <span class="corner-shape shape-4"></span>

        <div class="container">

            <div class="section-heading mb-5">

                <span class="small-title">
                    Meet Our
                </span>

                <h2>
                    Departments
                </h2>

            </div>

            <div class="row align-items-center">

                <!-- IMAGE SLIDER -->

                <div class="col-lg-6">

                    <div class="swiper departmentImageSwiper">

                        <div class="swiper-wrapper">

                            @foreach ($departments as $department)
                                <div class="swiper-slide">

                                    <img src="{{ asset($department['image']) }}" class="img-fluid rounded-4 shadow-lg w-100">

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

                <!-- CONTENT SLIDER -->

                <div class="col-lg-6">

                    <div class="swiper departmentContentSwiper">

                        <div class="swiper-wrapper">

                            @foreach ($departments as $department)
                                <div class="swiper-slide">

                                    <div class="department-content">

                                        <div class="quote-icon">
                                            <i class="bi bi-quote"></i>
                                        </div>

                                        <h3>
                                            {{ $department['title'] }}
                                        </h3>

                                        <p>
                                            {{ $department['description'] }}
                                        </p>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                        <div class="department-pagination mt-4"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="department-prev">
            <i class="bi bi-chevron-left"></i>
        </div>

        <div class="department-next">
            <i class="bi bi-chevron-right"></i>
        </div>

    </section>

    <!-- ==========================
         OUR VISION
    =========================== -->

    <section class="about-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    Our Vision
                </span>

                <h2 class="section-title">
                    Technology That Creates Impact
                </h2>

            </div>

            <div class="vision-wrapper">

                <div class="row align-items-center">

                    <div class="col-lg-4">

                        <div class="vision-card mb-4">

                            <div class="vision-icon">
                                <i class="bi bi-cpu"></i>
                            </div>

                            <h5>Innovation First</h5>

                            <p>
                                We continuously explore emerging
                                technologies including Artificial
                                Intelligence, Machine Learning,
                                Automation and Cloud Solutions.
                            </p>

                        </div>

                        <div class="vision-card">

                            <div class="vision-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>

                            <h5>Data Driven Decisions</h5>

                            <p>
                                Transforming complex business data
                                into actionable intelligence and
                                measurable results.
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="vision-center">

                            <img src="{{ asset('assets/images/853.webp') }}" alt="AI Innovation">

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="vision-card mb-4">

                            <div class="vision-icon">
                                <i class="bi bi-lightning"></i>
                            </div>

                            <h5>Save Business Time</h5>

                            <p>
                                Automation-powered solutions
                                designed to improve productivity
                                and accelerate growth.
                            </p>

                        </div>

                        <div class="vision-card">

                            <div class="vision-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h5>Secure By Design</h5>

                            <p>
                                Every solution is built with
                                cyber security and resilience
                                at its core.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Team Member section --}}
    <section class="team-gallery-section py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">
                    Our Team
                </span>

                <h2 class="section-title">
                    Meet The People Behind Digicrome
                </h2>

            </div>

            <div class="team-gallery">

                @foreach ($teamMembers as $member)
                    <div class="gallery-item">

                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">

                        <div class="gallery-overlay">

                            <h5>
                                {{ $member->name }}
                            </h5>

                            {{-- <p>
                            {{ $member->designation }}
                        </p> --}}

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
@endsection

@push('scripts')
    <script>
        $('.counter').each(function() {

            let $this = $(this);

            let countTo = $this.attr('data-count');

            $({
                countNum: $this.text()
            }).animate({

                    countNum: countTo

                },

                {
                    duration: 2500,

                    easing: 'swing',

                    step: function() {

                        $this.text(
                            Math.floor(this.countNum) + '+'
                        );

                    },

                    complete: function() {

                        $this.text(
                            this.countNum + '+'
                        );

                    }
                });

        });
        const imageSwiper = new Swiper('.departmentImageSwiper', {

            effect: 'fade',

            loop: true,

            allowTouchMove: false
        });

        const contentSwiper = new Swiper('.departmentContentSwiper', {

            loop: true,

            speed: 1000,

            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },

            pagination: {
                el: '.department-pagination',
                clickable: true
            },

            navigation: {
                nextEl: '.department-next',
                prevEl: '.department-prev'
            }
        });

        imageSwiper.controller.control = contentSwiper;
        contentSwiper.controller.control = imageSwiper;
    </script>
@endpush
