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
                background: linear-gradient(135deg, #667eea 0%, #1A1447 100%);
                min-height: 100vh;
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
                z-index: 2;
                max-width: 800px;
            }

            .corporate-hero h1 {
                font-size: clamp(2.5rem, 5vw, 4rem);
                background: linear-gradient(45deg, #fff, #f0f4ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: fadeInUp 1s ease-out;
                padding-bottom: 10px;
            }

            .corporate-hero p {
                /* font-size: 1.3rem; */
                text-align: justify;
                color: rgba(255, 255, 255, 0.9);
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
                background: transparent;
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
                background: linear-gradient(90deg, #f29c12, #ff6b35);
            }

            .service-card:hover {
                transform: translateY(-15px);
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            }

            .service-icon {
                width: 80px;
                height: 80px;
                background: linear-gradient(135deg, #f29c12, #ff8c00);
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
                padding: 5rem 0;
                background: #f8f9fa;
            }

            .logo-item {
                /* filter: grayscale(100%); */
                transition: all 0.4s ease;
                opacity: 0.7;
            }

            .logo-item:hover {
                filter: grayscale(0%);
                opacity: 1;
                transform: scale(1.05);
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
                        <h1 data-aos="fade-up" data-aos-delay="100">Transforming <span class="text-warning">Corporate</span>
                            Learning</h1>
                        <p data-aos="fade-up" data-aos-delay="200">Drive significant impact through smart learning pathways,
                            we ensure each person, from basic-level to senior-level leaders, acquires skills that directly
                            contribute to business growth. Our training mix experiential projects, live expert sessions, and
                            useful case studies, allowing teams to move beyond theory and apply skills in high-stakes
                            environments. With a focus on future-leading abilities, we help businesses build skills in top
                            domains such as machine learning, cybersecurity, cloud computing, and others. At the same time,
                            guidance modules cultivate integral thinking, ideas, and innovation-led mindsets essential for
                            handling intricate trade ecosystems.</p>
                        <div class="hero-cta" data-aos="fade-up" data-aos-delay="300">
                            <a href="#services" class="btn btn-corporate-primary">Explore Solutions <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                            <a href="#contact" class="btn btn-corporate-secondary">Request Demo <i
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
    <section class="logo-grid">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 data-aos="fade-up">Trusted by Leading Enterprises</h2>
                    <p data-aos="fade-up" data-aos-delay="200" class="lead">Join 50+ organizations who've transformed
                        their workforce with our training programs</p>
                </div>
            </div>
            <div class="row g-4" data-aos="fade-up" data-aos-delay="300">
                @foreach ($companyLogos->take(12) as $index => $logo)
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="logo-item p-4 border rounded-3 h-100 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('storage/' . $logo->image) }}" alt="{{ $logo->name ?? 'Partner' }}"
                                class="img-fluid" style="max-height: 60px;">
                        </div>
                    </div>
                @endforeach
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
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
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
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
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
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
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
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code fa-2x"></i>
                        </div>
                        <h4>Technical Bootcamps</h4>
                        <p>Intensive, hands-on bootcamps for rapid skill acquisition in emerging technologies.</p>
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
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
                        <a href="#contact" class="btn btn-outline-warning mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Metrics -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="500">0</span><span>+</span>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="10K">0</span><span>K+</span>
                        <div class="stat-label">Trained Professionals</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="95">0</span><span>%</span>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="4.8">0</span>
                        <div class="stat-label">Avg Rating</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="24">0</span>
                        <span>+</span>
                        <div class="stat-label">Programs Delivered</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="stat-item">
                        <span class="stat-number counter" data-target="50">0</span>
                        <span>+</span>
                        <div class="stat-label">Industry Partners</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Courses Section for Corporate -->
    <div class="case-study-area style-one">
        <div class="container">
            <div class="row align-items-center section-title-space">
                <div class="col-lg-6">
                    <div class="section-sub-title" style="font-size: 16px;">
                        <h2>OUR COURSES</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 class="heading-like-h1">Our Courses – Comprehensive</br>
                            Available all programs</h3>
                    </div>
                </div>
            </div>
            <div class="row case-study-bg">
                <div class="col-lg-12 col-sm-12">
                    <div class="case_study_nav">
                        <div class="case_study_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item filter-btn" data-filter=".Upcoming">Upcoming Courses</li>
                                @foreach ($collections->whereNotIn('id', [6]) as $collection)
                                    <li class="filter-btn" data-filter=".{{ Str::slug($collection->name) }}">
                                        {{ $collection->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- Custom Styles for Enhanced Courses -->
    <style>
        .filter-btn:hover,
        .filter-btn.current_menu_item {
            background: linear-gradient(45deg, #f29c12, #ff8c00) !important;
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(242, 156, 18, 0.4);
        }
    </style>

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

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 20);
            });
        }

        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.5
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(document.querySelector('.stats-section'));

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
    </script>
@endpush
