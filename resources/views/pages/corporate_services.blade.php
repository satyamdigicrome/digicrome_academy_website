@extends('layouts.app')

@section('title', $meta->title ?? 'Corporate Training & Services - Digicrome')
@section('meta_description',
    $meta->description ??
    'Advanced corporate training programs, upskilling solutions, and
    custom learning experiences for enterprises.')
@section('meta_keywords',
    $meta->keywords ??
    'corporate training, employee upskilling, enterprise learning, corporate
    upskilling, training programs')

    @push('styles')
        <style>
            h2 {
                font-size: 2rem;
            }

            .heading-like-h1 {
                font-size: 36px;
                font-weight: 700;
                line-height: 1.2;
                color: #000;
                margin-bottom: 20px;
            }

            .corporate-hero {
                /* background: linear-gradient(135deg, #667eea 0%, #1A1447 100%); */
                background: white;
                /* min-height: 100vh; */
                padding: 80px 0;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .corporate-hero::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('{{ asset('assets/images/home-one/hero-arrow.webp') }}') no-repeat center/cover;
                opacity: 0.1;
                z-index: 1;
            }

            .corporate-hero-content {
                position: relative;
                z-index: 1;
                max-width: 800px;
            }

            .corporate-hero h1 {
                font-size: clamp(2.5rem, 3vw, 4rem);
                background: linear-gradient(45deg, #272251, #f19e18);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: fadeInUp 1s ease-out;
                padding-bottom: 10px;
            }

            .corporate-hero p {
                /* font-size: 1.3rem; */
                text-align: justify;
                /* color: rgba(255, 255, 255, 0.9); */
                margin: 1.5rem 0 2.5rem;
                animation: fadeInUp 1s ease-out 0.2s both;
            }

            .hero-cta {
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
                animation: fadeInUp 1s ease-out 0.4s both;
            }

            .btn-corporate-primary {
                background: linear-gradient(45deg, #f29c12, #ff8c00);
                border: none;
                padding: 1rem 2rem;
                font-weight: 600;
                border-radius: 50px;
                color: white;
                transition: all 0.3s ease;
                box-shadow: 0 10px 30px rgba(242, 156, 18, 0.4);
            }

            .btn-corporate-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 15px 40px rgba(242, 156, 18, 0.6);
            }

            .btn-corporate-secondary {
                border: 2px solid rgba(255, 255, 255, 0.3);
                background: #5f1212;
                padding: 1rem 2rem;
                font-weight: 600;
                border-radius: 50px;
                color: white;
                transition: all 0.3s ease;
            }

            .btn-corporate-secondary:hover {
                background: white;
                color: #667eea;
            }

            .services-grid {
                padding: 5rem 0;
                background: linear-gradient(180deg, #f8faff 0%, #e8f4fd 100%);
            }

            .service-card {
                background: white;
                border-radius: 20px;
                padding: 2.5rem 2rem;
                text-align: center;
                transition: all 0.4s ease;
                border: none;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
                height: 100%;
                position: relative;
                overflow: hidden;
            }

            .service-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, #1A1447, #ff6b35);
            }

            .service-card:hover {
                transform: translateY(-15px);
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            }

            .service-icon {
                width: 80px;
                height: 80px;
                background: linear-gradient(135deg, #1A1447, #ff6b35);
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1.5rem;
                font-size: 2rem;
                color: white;
                transition: all 0.3s ease;
            }

            .service-card:hover .service-icon {
                transform: scale(1.1) rotate(5deg);
            }

            .stats-section {
                padding: 5rem 0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                overflow: hidden;
            }

            .stat-item {
                text-align: center;
                position: relative;
            }

            .stat-number {
                font-size: clamp(2.5rem, 8vw, 5rem);
                font-weight: 800;
                background: linear-gradient(45deg, #fff, #f0f4ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                display: inline-block;
            }

            .stat-label {
                font-size: 1.1rem;
                opacity: 0.9;
                margin-top: 0.5rem;
            }

            .logo-grid {
                overflow: hidden;
            }

            .companyLogoSwiper {
                padding: 10px 0;
            }

            .companyLogoSwiper .swiper-slide {
                height: auto;
            }

            .logo-item {
                background: #fff;
                min-height: 120px;
                transition: all .3s ease;
            }

            .logo-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            }

            .logo-item img {
                max-height: 60px;
                width: auto;
                object-fit: contain;
            }

            .case-study-card {
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
                transition: all 0.4s ease;
                background: white;
            }

            .case-study-card:hover {
                transform: translateY(-10px);
            }

            .case-study-img {
                height: 250px;
                object-fit: cover;
            }

            .btn-outline-warning {
                border: 2px solid #f29c12;
                color: #f29c12;
                transition: all 0.3s ease;
            }

            .testimonial-card {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                border-radius: 20px;
                padding: 2.5rem;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-10px);
                }
            }

            .hero-float {
                animation: float 6s ease-in-out infinite;
            }

            @media (max-width: 768px) {
                .hero-cta {
                    flex-direction: column;
                    align-items: stretch;
                }

                .btn-corporate-primary,
                .btn-corporate-secondary {
                    width: 100%;
                    margin-bottom: 20px;
                }

                .corporate-hero {
                    margin-top: 120px;
                }

                .btn-outline-warning {
                    color: #0f172a;
                }
            }

            .digicrome-cta {
                background: #0f172a;
            }

            .cta-wrapper {
                background:
                    linear-gradient(90deg,
                        rgba(15, 23, 42, 0.98),
                        rgba(17, 24, 39, 0.96));
                border-radius: 24px;
                padding: 30px 15px;
                position: relative;
                overflow: hidden;
            }

            .cta-wrapper::before {
                content: "";
                position: absolute;
                inset: 0;
                background:
                    repeating-linear-gradient(90deg,
                        rgba(255, 255, 255, 0.02) 0px,
                        rgba(255, 255, 255, 0.02) 2px,
                        transparent 2px,
                        transparent 40px);
                pointer-events: none;
            }

            .cta-title {
                font-size: 42px;
                font-weight: 500;
                line-height: 1.15;
                color: #fff;
                margin-bottom: 0;
            }

            .stat-label {
                color: rgba(255, 255, 255, 0.7);
                font-size: 18px;
                line-height: 1.5;
                margin-bottom: 15px;
            }

            .stat-number {
                color: #fff;
                font-size: 42px;
                font-weight: 600;
                line-height: 1;
                margin: 0;
            }

            .cta-buttons .btn-light {
                border-radius: 12px;
                font-weight: 600;
                color: #0f172a;
            }

            .cta-buttons .btn-outline-light {
                border-radius: 12px;
                font-weight: 600;
                border-width: 1px;
            }

            @media (max-width: 991px) {
                .cta-wrapper {
                    padding: 50px 30px;
                }

                .cta-title {
                    font-size: 2.8rem;
                }

                .stat-number {
                    font-size: 3.5rem;
                }

                .cta-buttons .btn {
                    width: 100%;
                    margin-bottom: 15px;
                }
            }

            @media (max-width: 576px) {
                .cta-title {
                    font-size: 2.2rem;
                }

                .stat-number {
                    font-size: 3rem;
                }
            }

            .how-it-works {
                background: #f8f7f5;
            }

            .how-it-works .container {
                max-width: 1320px;
            }

            .heading-wrap {
                display: flex;
                flex-direction: column;
                gap: 16px;
            }

            .section-tag {
                display: inline-block;
                padding: 5px 17px;
                border: 1px solid #d6d6d6;
                border-radius: 50px;
                font-size: 16px;
                font-weight: 600;
                color: #19335a;
                background: #fff;
                width: fit-content;
            }

            .section-title {
                font-size: 32px;
                font-weight: 700;
                line-height: 1.4;
                color: #0f2d4e;
                text-transform: none;
            }

            .section-desc {
                font-size: 16px;
                line-height: 1.4;
                color: #555;
            }

            .steps-wrapper {
                border-top: 1px solid #e8e8e8;
            }

            .steps-wrapper>div {
                display: flex;
            }


            .step-card {
                display: flex;
                flex-direction: column;
                position: relative;
                padding: 10px 15px;
                height: 100%;
                min-height: 320px;
                border-right: 1px solid #e8e8e8;
                overflow: hidden;
                transition: all .45s ease;
                background: transparent;
            }

            /* Top accent background */
            .step-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 0;
                background: #f7ede4;
                transition: height .45s ease;
                z-index: 0;
            }

            /* Large circle */
            .step-card::after {
                content: "";
                position: absolute;
                width: 260px;
                height: 260px;
                border: 28px solid rgba(0, 0, 0, 0.03);
                border-radius: 50%;
                top: 50px;
                right: -80px;
                transition: all .5s ease;
                z-index: 0;
            }

            .step-card::after {
                border-top-color: rgba(0, 0, 0, .08);
                border-right-color: rgba(0, 0, 0, .08);
                border-bottom-color: rgba(0, 0, 0, .02);
                border-left-color: rgba(0, 0, 0, .02);
            }

            .step-card>* {
                position: relative;
                z-index: 2;
            }

            .step-icon {
                font-size: 30px;
                margin-bottom: 4rem;
                color: #2f3747;
                transition: all .35s ease;
            }

            .step-badge {
                display: inline-block;
                padding: 3px 5px;
                border-radius: 8px;
                border: 1px solid #d9d9d9;
                background: #fff;
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 20px;
                transition: all .35s ease;
                width: fit-content;
            }

            .step-card h4 {
                font-size: 20px;
                font-weight: 500;
                color: #0f2d4e;
                margin-bottom: 10px;
                min-height: 60px;
            }

            .step-card p {
                font-size: 16px;
                line-height: 1.4;
                color: #555;
            }

            @media (min-width:992px) {

                .steps-wrapper {
                    display: flex;
                }

                .steps-wrapper>div {
                    display: flex;
                }

                .step-card {
                    width: 100%;
                }
            }

            /* Hover Effect */
            .step-card:hover {
                background: #fff;
                transform: translateY(-12px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, .08);
                z-index: 5;
            }

            .step-card:hover::before {
                height: 28%;
            }

            .step-card:hover::after {
                top: -70px;
                transform: scale(1.15) rotate(25deg);
            }

            .step-card:hover .step-badge {
                background: #f7ede4;
                border-color: #e4c7a7;
                color: #b8722d;
            }

            .step-card:hover .step-icon {
                transform: translateY(-5px);
                color: #0f2d4e;
            }

            @media (max-width: 991px) {
                .section-title {
                    font-size: 38px;
                }

                .section-desc {
                    margin-top: 20px;
                    font-size: 16px;
                }

                .step-card {
                    border-right: none;
                    border-bottom: 1px solid #e5e5e5;
                }

                .step-card h4 {
                    font-size: 24px;
                }

                .step-card p {
                    font-size: 16px;
                }
            }
        </style>
    @endpush

@section('content')
    @include('components.lead-form-popup')

    <!-- Hero Section -->
    <section class="corporate-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="corporate-hero-content">
                        <span class="border p-1 rounded-pill shadow" data-aos="fade-up" data-aos-delay="50">&nbsp;Corporate
                            Services&nbsp;</span>
                        <h1 data-aos="fade-up" data-aos-delay="100" class="mt-2">Empowering Teams for <span
                                class="text-warning">AI, Data </span>
                            & Digital Transformation</h1>
                        <p data-aos="fade-up" data-aos-delay="200">Upskill your workforce with industry-relevant training in
                            AI, Data Science, Cybersecurity, and emerging digital technologies. Through expert-led sessions,
                            hands-on projects, and real-world case studies, we empower teams to build future-ready skills
                            that drive innovation, enhance productivity, and accelerate business growth.</p>
                        <div class="hero-cta" data-aos="fade-up" data-aos-delay="300">
                            {{-- <a href="#services" class="btn btn-corporate-primary">Explore Solutions <i
                                    class="fas fa-arrow-right ms-2"></i></a> --}}
                            <a href="#contact" class="btn btn-corporate-secondary">Get Started <i
                                    class="fas fa-play ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="hero-float" data-aos="fade-left" data-aos-delay="400">
                        <img src="{{ asset('assets/images/cor.webp') }}" alt="Corporate Training"
                            class="img-fluid rounded-5 shadow-lg"
                            style="max-height: 500px; width: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Logo Grid -->
    <section class="logo-grid py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 data-aos="fade-up" style="text-transform: none;">Trusted by leading organisations worldwide</h2>
                    <p data-aos="fade-up" data-aos-delay="200" class="lead">
                        Join 250+ organizations who've transformed their workforce with our training programs
                    </p>
                </div>
            </div>

            <div class="swiper companyLogoSwiper" data-aos="fade-up" data-aos-delay="300">
                <div class="swiper-wrapper">

                    @foreach ($companyLogos as $logo)
                        <div class="swiper-slide">
                            <div class="logo-item p-4 border rounded-3 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('storage/' . $logo->image) }}" alt="{{ $logo->name ?? 'Partner' }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="digicrome-cta py-3">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center g-4">

                    <!-- Left Content -->
                    <div class="col-lg-5">
                        <h2 class="cta-title">
                            Digicrome SkillUp+ <br>
                            Offerings
                        </h2>
                    </div>

                    <!-- Stats -->
                    <div class="col-lg-7">
                        <div class="row text-center text-lg-start">

                            <div class="col-md-4 mb-4 mb-md-0">
                                <p class="stat-label">
                                    Industry-Relevant Courses
                                </p>
                                <h3 class="stat-number">100+</h3>
                            </div>

                            <div class="col-md-4 mb-4 mb-md-0">
                                <p class="stat-label">
                                    Corporate Training Programs
                                </p>
                                <h3 class="stat-number">500+</h3>
                            </div>

                            <div class="col-md-4">
                                <p class="stat-label">
                                    Workforce Skills Development
                                </p>
                                <h3 class="stat-number">5000+</h3>
                            </div>

                        </div>

                        <!-- CTA Buttons -->
                        <div class="cta-buttons mt-4">
                            <a href="#contact" class="btn btn-light btn-lg px-4 py-3 me-3">
                                Get a Free Trial
                            </a>

                            <a href="{{ route('course') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                                Explore Digicrome SkillUp+
                                <span class="ms-2">→</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works p-5">
        <div class="container">

            <div class="row justify-content-between mb-5">
                <div class="col-lg-7">
                    <div class="heading-wrap">
                        <span class="section-tag">HOW IT WORKS</span>

                        <h2 class="section-title">
                            We Build Skills That Drive
                            <br>
                            Business Impact
                        </h2>
                    </div>
                </div>

                <div class="col-lg-5 d-flex align-items-end">
                    <p class="section-desc mb-0">
                        From skills gap assessment to measurable business impact,
                        a structured approach to drive outcome-driven learning for AI
                        and digital skills across your workforce.
                    </p>
                </div>
            </div>

            <div class="row g-0 steps-wrapper">

                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="bi bi-search"></i>
                        </div>

                        <span class="step-badge">STEP 1</span>

                        <h4>Assess Skills Gaps</h4>

                        <p>
                            Assess skill gaps aligned to business goals and assign
                            licenses to targeted learner groups.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card active">
                        <div class="step-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <span class="step-badge">STEP 2</span>

                        <h4>Learning Journeys by Role</h4>

                        <p>
                            Unlimited access to curated courses and structured
                            paths tailored to job roles.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="bi bi-globe"></i>
                        </div>

                        <span class="step-badge">STEP 3</span>

                        <h4>Enable Learning at Scale</h4>

                        <p>
                            Blended learning across live sessions, async content,
                            and certification prep.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card border-end-0">
                        <div class="step-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>

                        <span class="step-badge">STEP 4</span>

                        <h4>See the Impact</h4>

                        <p>
                            Track engagement, completion, and adoption through
                            dashboards and reports.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="services-grid">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 data-aos="fade-up">Corporate Training <span class="text-warning">Solutions</span></h2>
                    <p data-aos="fade-up" data-aos-delay="200" class="lead">Tailored programs designed to upskill your
                        workforce and drive business success</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4>Employee Upskilling</h4>
                        <p>Comprehensive training programs in AI, Data Science, Cloud, and Digital Transformation for your
                            entire workforce.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h4>Custom Learning Paths</h4>
                        <p>Bespoke training solutions tailored to your organization's specific needs and industry
                            requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h4>Leadership Development</h4>
                        <p>Executive training programs focusing on strategic leadership, innovation, and digital
                            transformation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <h4>Certification Programs</h4>
                        <p>Industry-recognized certifications that validate your team's skills and boost professional
                            credibility.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code fa-2x"></i>
                        </div>
                        <h4>Technical Bootcamps</h4>
                        <p>Intensive, hands-on bootcamps for rapid skill acquisition in emerging technologies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-trophy fa-2x"></i>
                        </div>
                        <h4>Performance Analytics</h4>
                        <p>Advanced learning analytics to measure ROI, track progress, and optimize training effectiveness.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="py-5 bg-warning text-dark">
        <div class="container text-center">
            <h2 data-aos="zoom-in">Ready to Transform Your Workforce?</h2>
            <p class="lead mb-4" data-aos="zoom-in" data-aos-delay="200">Schedule a free consultation with our corporate
                training experts</p>
            <div data-aos="zoom-in" data-aos-delay="400">
                <a href="#contact" class="btn btn-dark btn-lg me-3 px-5 py-3">Get Started</a>
                <a href="tel:+01204538125" class="btn btn-outline-dark btn-lg px-5 py-3">Call Now</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-form-box">
                        <h3 class="mb-4">Let's Discuss Your Training Needs</h3>
                        <form method="post" action="https://demo.digicrome.in/post_lead.php" class="row g-3">
                            @csrf
                            <input type="hidden" name="source" value="corporate_services">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name"
                                    placeholder="Company/Your Name *" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Company Email *"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="mobile" placeholder="Phone *"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" placeholder="Job Title">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="address" rows="4" placeholder="Address..."></textarea>
                            </div>
                            <input type="hidden" name="ib" value="">
                            <input type="hidden" id="mobile" name="country" value="india"
                                placeholder="Mobile Number">
                            <input type="hidden" id="mobile" name="comp_name" placeholder="Mobile Number">
                            <input type="hidden" id="mobile" name="state" value=""
                                placeholder="Mobile Number">
                            <input type="hidden" id="mobile" name="altr_mobile" placeholder="Mobile Number">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning w-100 py-3 fw-bold fs-5">Request Corporate
                                    Demo</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-center text-lg-start">
                        <h3>Connect with Us</h3>
                        <div class="mt-4">
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-phone fa-2x text-warning me-3"></i>
                                <div>
                                    <div class="fw-bold">Call Us</div>
                                    <a href="tel:+01204538125" class="text-dark text-decoration-none">+0120 4538125</a>
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-envelope fa-2x text-warning me-3"></i>
                                <div>
                                    <div class="fw-bold">Email</div>
                                    <a href="mailto:info@digicrome.com"
                                        class="text-dark text-decoration-none">info@digicrome.com</a>
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-start">
                                <i class="fas fa-map-marker-alt fa-2x text-warning me-3 mt-1"></i>
                                <div>
                                    <div class="fw-bold">Visit Us</div>
                                    <div>B-49, First Floor, Block B<br>Sector 59, Noida, UP 201301</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        window.addEventListener('load', function() {
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
        document.addEventListener('DOMContentLoaded', function() {

            new Swiper('.companyLogoSwiper', {
                loop: true,
                speed: 2500,

                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 25,
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 30,
                    }
                }
            });

        });
    </script>
@endpush
