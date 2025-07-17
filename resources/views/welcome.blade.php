@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
    <!--==================================================-->
    <!-- Start educate Hero Area Area style-one -->
    <!--==================================================-->
    <section class="hero_area style-one d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <!-- hero content -->
                    <div class="hero_content">
                        <h5><i class="bi bi-check2"></i>Enhance Your future skills, with just a click</h5>
                        <h1>Start building your<br>
                            future with a better career transition</h1>
                        @if ($userCountry === 'India')
                            <div style="text-align: left; margin: 10px 0; width: 60%;">
                                <div style="display: inline-block; background-color: #FCFCFCBA; padding: 10px 15px; border: 1px solid #ccc; border-radius: 6px;">
                                    <small style="font-size: 14px; color: #555;">In collaboration with</small>
                                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/mslogo.png') }}"
                                        class="ds-logo lazyload" alt="Microsoft Logo" title="Microsoft logo"
                                        style="width: 100%; height: auto; margin-top: 5px;">
                                </div>
                            </div>
                        @else
                        @endif
                        <p>Master the <strong>most sought-after skills</strong> for today's and tomorrow's job market, and
                            position yourself as the top choice for employers in your industry.</p>
                        <!-- hero button -->
                        <div class="hero-button">
                            <div class="hero-btn">
                                <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            {{-- <div class="hero-course-btn">
								<a href="{{ route('course') }}">FIND COURSE<i class="flaticon flaticon-right-arrow"></i></a>
							</div> --}}
                        </div>
                    </div>
                    <div class="hero-rating-box">
                        <div class="hero-rating-icon">
                            {{-- <img loading="lazy"src="{{ asset('assets/images/home-one/star-icon.webp') }}" alt="star"> --}}
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb-wrapper">
                        <div class="hero-thumb">
                            <img width="600" height="400" rel="preload" as="image"
                                loading="lazy"src="{{ asset('assets/images/home-one/hero-thumb1.webp') }}"
                                alt="Digicrome thumb" title="Digicrome thumb">
                        </div>
                        {{-- <div class="hero-shape1 rotateme">
							<img loading="lazy"src="{{ asset('assets/images/home-one/hero-shape1.webp') }}" alt="shape1">
						</div> --}}
                        <div class="hero-arrow-shape">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/hero-arrow.webp') }}"
                                alt="digicrome arrow" title="Digicrome arrow">
                        </div>
                        <div class="hero-dot-shape">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/hero-dot.webp') }}" alt="digicrome dot"
                                title="digicrome dot">
                        </div>
                        <div class="hero-shape3 bounce-animate-3">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/hero-shape3.webp') }}"
                                alt="digicrome shape" title="digicrome shape">
                        </div>
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
    <!--==================================================-->
    <!-- End educate Hero  Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate feature Area-->
    <!--==================================================-->
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
                            <p class="feature-desc">We guarantee placement assistance, so we have tied up with 500+ global
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
            {{-- <div class="feature-shape1">
				<img loading="lazy"src="{{ asset('assets/images/home-one/feature-shape1.webp') }}" alt="shape">
			</div>
			<div class="feature-shape2 rotateme">
				<img loading="lazy"src="{{ asset('assets/images/home-one/feature-shape2.webp') }}" alt="shape2">
			</div> --}}
        </div>
    </section>
    <!--==================================================-->
    <!-- End educate feature Area-->
    <!--==================================================-->

    <div class="container">
        <x-logo-slider :companyLogos="$companyLogos" />
    </div>
    <!--==================================================-->
    <!-- Start educate About Area style-one -->
    <!--==================================================-->
    <section class="about-area style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="about-thumb-wrapper">
                        <div class="about-thumb">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/about-thumb1.webp') }}"
                                alt="digicrome thumb" title="digicrome thumb">
                        </div>
                        <div class="about-thumb-shape1 bounce-animate-3">
                            <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape1.webp') }}"
                                alt="digicrome shape" title="digicrome shape">
                        </div>
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
                        <!-- section title -->
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
            {{-- <div class="about-shape4">
				<img loading="lazy"src="{{ asset('assets/images/home-one/about-shape4.webp') }}" alt="shape4">
			</div> --}}
            <div class="about-shape5">
                <img loading="lazy"src="{{ asset('assets/images/home-one/about-shape5.webp') }}" alt="digicrome shape"
                    title="digicrome shape">
            </div>
        </div>
    </section>
    @if ($userCountry === 'India')
        <div class="brand-area style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section_title">
                            <h2 class="heading-like-h1">In Associated With:</h2>
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
                <div class="brand-star-shape">
                    <img loading="lazy"src="{{ asset('assets/images/home-one/brand-star.webp') }}" alt="digicrome star"
                        title="digicrome star">
                </div>
                {{-- <div class="brand-line-shape">
				<img loading="lazy"src="{{ asset('assets/images/home-one/brand-line.webp') }}" alt="line">
			</div> --}}
            </div>
        </div>
    @else
    @endif
    <section class="about-area style-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-thumb-wrapper">
						<div class="about-thumb zoom-sequence">
							<!-- Image container with fixed height -->
							<div class="image-container">
                                <img class="image" loading="lazy"
                                     src="{{ asset('assets/images/digi.webp') }}" alt="First image" title="First image">
                                <img class="image" loading="lazy"
                                     src="{{ asset('assets/images/cirt.webp') }}" alt="Second image" title="Second image">
                                <img class="image" loading="lazy"
                                     src="{{ asset('assets/images/award1.webp') }}" alt="Third image" title="Third image">
                            </div>
                            
					
							{{-- <div class="about-call-box">
								<div class="call-icon">
									<span><i class="fa-solid fa-phone"></i></span>
								</div>
								<div class="call-content">
									<h5>Call Us:</h5>
									<h3>01205222560</h3>
								</div>
							</div> --}}
						</div>
					</div>
					
					<style>
						.zoom-sequence {
							position: relative;
						}
					
						.image-container {
    width: 100%;
    max-width: 500px; /* increased from 400px */
    aspect-ratio: 2/3;
}

.about-call-box {
    z-index: 5;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}
	
						/* Slower zoom + fade effect */
.zoom-sequence .image {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transform: scale(0.8);
    transition: opacity 1.5s ease, transform 1.5s ease;  /* was 0.8s, now 1.5s */
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
					
							// Slower switching between images
setInterval(() => {
    current = (current + 1) % images.length;
    showImage(current);
}, 5000); // was 3000ms, now 5000ms (5 seconds)

						});
					</script>
					
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_content">
                        <!-- section title -->
                        <div class="section-sub-title">
                            <h6>Our Achievement</h6>
                        </div>
                        <div class="section_title">
                            <h2 class="heading-like-h1">Honoring Digicrome's Excellence <br>at the Excellency Iconic Awards
                                2025</h2>

                        </div>
                        <div class="section-title-desc two">
                            <p>
                                Digicrome was honored with the prestigious <strong>Excellency Iconic Award 2025</strong> for
                                its outstanding contribution to innovative and accessible education.
                                This recognition celebrates our commitment to delivering high-quality training and
                                empowering learners across the globe.
                            </p>
                            <p>
                                Combining a rich legacy with cutting-edge technology, we foster both academic and personal
                                growth.
                                Conveniently architecting meta-services through world-class whiteboard learning experiences,
                                we continue to set new benchmarks in the education sector.
                            </p>
                        </div>
                        {{-- 					
					<div class="about-item-list">
						<ul>
							<li><i class="bi bi-check-lg"></i>Expert Teacher</li>
							<li><i class="bi bi-check-lg"></i>Educational Psychology</li>
							<li><i class="bi bi-check-lg"></i>Lifelong Learning</li>
						</ul>
					</div> --}}
                        <div class="about-btn">
                            <a href="javascript:void(0);" onclick="openModal()">GET STARTED<i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="about-shape51">
			<img loading="lazy"src="assets/images/home-five/about-shape51.webp" alt="shape51">
		</div>
		<div class="about-shape53">
			<img loading="lazy"src="assets/images/home-five/about-shape53.webp" alt="shape53">
		</div> --}}
        </div>
    </section>
    <!--==================================================-->
    <!-- End educate About Area -->
    <!--==================================================-->
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
                    <!-- Main heading -->
                    <div class="section_title mb-4">
                        <h2 class="heading-like-h1">Our Certification Partners</h2>
                    </div>

                    <!-- Description -->
                    <p class="mb-4">
                        Empowering learners through globally recognized certifications with industry-leading organizations.
                    </p>

                    <!-- List of awards with cup icons aligned -->
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
    <!--==================================================-->
    <!-- Start educate Marquee Area-->
    <!--==================================================-->
    {{-- <div class="marquee-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="marquee">
						<div class="marquee-block">
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>learning innovation</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>worldwide learners</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>unique knowledge</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>dream today</h3>
						</div>
						<div class="marquee-block">
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>learning innovation</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>worldwide learners</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>unique knowledge</h3>
							<h3><span><img loading="lazy"src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>dream today</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
    <!--==================================================-->
    <!-- End educate Marquee Area-->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate case study Area style-one -->
    <!--==================================================-->
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
            document.addEventListener("DOMContentLoaded", function() {
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

                // Show Upcoming by default
                iso.arrange({
                    filter: '.Upcoming'
                });
            });
        </script>


        <div class="container">
            <div class="row image_load">
                {{-- Upcoming Courses --}}
                @foreach ($upcomingCourses as $course)
                    <div class="col-xl-3 col-lg-6 col-md-6 grid-item Upcoming">
                        <div class="case-study-single-box">
                            {{-- Use same HTML course card template --}}
                            <div class="case-study-thumb">
                                <img loading="lazy"src="{{ asset('storage/' . $course->image) }}" alt="case-study-thumb"
                                    title="case-study-thumb">
                                {{-- <div class="case-meta-top">
									<span>{{ $course->course_free ? 'Free' : '$' . $course->price }}</span>
								</div> --}}
                            </div>
                            <div class="case-study-content">
                                <h5>Courses</h5>
                                <h4><a
                                        href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                </h4>
                                <div class="case-rating">
                                    {{-- <ul>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star-half-stroke"></i></li>
									</ul> --}}
                                    <div class="case-rating-num">
                                        <span>Duration: {{ $course->course_duration }}</span>
                                    </div>
                                </div>
                                {{-- <div class="case-autor-box">
									<div class="case-autor-img">
										<img loading="lazy"src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
									</div>
									<div class="case-autor-content">
										<h3>Instructor</h3>
										<p>Instructor</p>
									</div>
								</div> --}}
                                {{-- <div class="case-course-content">
									<div class="course-lesson">
										<span><i class="fa-regular fa-file-lines"></i> 12 Lessons</span>
									</div>
									<div class="course-student">
										<span><i class="fa-regular fa-user"></i> 1200 Students</span>
									</div>
								</div> --}}
                                <br><br>
                                <div class="course-btn">
                                    <a href="{{ route('course_details', ['slug' => $course->slug]) }}">EXPLORE NOW<i
                                            class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Courses by Collection --}}
                @foreach ($collections as $collection)
                    @foreach ($collection->courses as $course)
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item {{ Str::slug($collection->name) }}">
                            <div class="case-study-single-box">
                                {{-- Same card HTML reused --}}
                                <div class="case-study-thumb">
                                    <img loading="lazy" src="{{ asset('storage/' . $course->image) }}"
                                        alt="case-study-thumb" title="case-study-thumb">
                                    {{-- <div class="case-meta-top">
										<span>{{ $course->course_free ? 'Free' : '$' . $course->price }}</span>
									</div> --}}
                                </div>
                                <div class="case-study-content">
                                    <h5>{{ $collection->name }}</h5>
                                    <h4><a
                                            href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                    </h4>
                                    <div class="case-rating">
                                        {{-- <ul>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star-half-stroke"></i></li>
										</ul> --}}
                                        <div class="case-rating-num">
                                            <span>Duration: {{ $course->course_duration }}</span>
                                        </div>
                                    </div>
                                    {{-- <div class="case-autor-box">
										<div class="case-autor-img">
											<img loading="lazy"src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
										</div>
										<div class="case-autor-content">
											<h3>Instructor</h3>
											<p>Instructor</p>
										</div>
									</div>
									<div class="case-course-content">
										<div class="course-lesson">
											<span><i class="fa-regular fa-file-lines"></i> 12 Lessons</span>
										</div>
										<div class="course-student">
											<span><i class="fa-regular fa-user"></i> 1200 Students</span>
										</div>
									</div> --}}
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
    <!--==================================================-->
    <!--End educate case study Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate why choose Area -->
    <!--==================================================-->
    <div class="why-choose-area style-one" style="background: rgb(240 251 255)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="choose-content">
                        <!-- section title -->
                        <div class="section-sub-title">
                            <h6>why choose us?</h6>
                        </div>
                        <div class="section_title">
                            <h2 class="heading-like-h1">We Bring You Closer To<br>A Successful Career</h2>
                        </div>
                        <div class="section-title-desc">
                            <p>Get that Ideal career with better pay—even without an IT degree. Whatever your background, we
                                support you from basic to advanced. As one of the best data science institutes in India, and
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
                                    Placement Guarantee Aid
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
            <div class="choose-shape2">
                <img loading="lazy"src="{{ asset('assets/images/home-one/choose-circle.webp') }}" alt="shape2"
                    title="shape2">
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start educate why choose Area -->
    <!--==================================================-->
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
                            <span><b> Successpreneur Award 2025 </b> being the best analytics EdTech business</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
                            <span><b>Most Promising Digital Learning Platform 2025</b> for being one of the most promising
                                digital
                                learning platforms</span>
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
    <!--==================================================-->
    <!-- Start educate course design offer Area -->
    <!--==================================================-->
    <div class="course-design-offer-area style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="course-design-thumb">
                        <img loading="lazy"src="{{ asset('assets/images/usss.jpg') }}" alt="course-design-thumb"
                            title="course-design-thumb">
                        <div class="course-video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://youtu.be/HLiQiTTbX8g"><i class="fa-classic fa-solid fa-play fa-fw"></i></a>
                        </div>
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
                            {{-- <div class="course-offer-discount">
								<h5>10%</h5>
								<span>off</span>
							</div> --}}
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
    <!--==================================================-->
    <!-- end educate course design offer Area -->
    <!--==================================================-->
    @if(count($videos) > 0)
    <section class="video-slider py-5">
        <div class="container">
            <h2 class="text-center mb-3" style="font-size: 2rem;">
                <span style="color: #f29c12;">Featured </span> Testimonials
            </h2>
            <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                Presenting our recent feedbacks — Have a look!
            </p>
    
            <div class="owl-carousel gif-carousel">
    
    @foreach ($videos as $video)
    <div class="text-center">
        <div class="gif-wrapper"
             data-bs-toggle="modal"
             data-bs-target="#youtubeModal"
             data-youtube="https://www.youtube.com/embed/{{ $video->video_link }}">
            <div class="gif-container">
                <img src="{{ asset('storage/' . $video->image) }}"
                     alt="{{ $video->name }}"
                     class="gif-img rounded shadow-sm">
            </div>
        </div>
        <div class="video-title mt-2 fw-semibold">{{ $video->name }}</div>
    </div>
@endforeach
            </div>
        </div>
    
        <!-- YouTube Modal -->
        <!-- YouTube Modal -->
<!-- YouTube Modal -->
<div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-youtube-dialog">
        <div class="youtube-modal-box">

            <!-- ✅ Close Button -->
            <button type="button"
                    class="btn-close btn-close-white custom-close-btn"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>

            <div class="youtube-video-wrapper">
                <iframe id="youtubePlayer" src="" frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Modal CSS -->
<style>
    /* Maintain 9:16 aspect ratio (YouTube Shorts look) */
    .responsive-video-wrapper {
        position: relative;
        width: 100%;
        padding-top: 177.77%; /* 9:16 aspect ratio (16/9 = 56.25%; so 9/16 = 177.77%) */
        background-color: #000;
    }

    .responsive-video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
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

/* Video wrapper for 9:16 shorts */
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

.custom-close-btn:hover
.custom-close-btn:focus  {
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

            .gif-container {
                width: 240px;
                height: 426px;
                margin: auto;
                overflow: hidden;
                border-radius: 12px;
                background-color: #000;
            }
    
            .gif-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
                cursor: pointer;
            }
    
            .gif-img:hover {
                transform: scale(1.03);
            }
    
            .video-title {
                font-size: 1rem;
                color: #333;
            }
        </style>
    
        <!-- JS Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                $('.gif-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    autoplay: true,
    autoplayTimeout: 3000, 
                    dots: false,
                    responsive: {
            0: { items: 1 },
            576: { items: 2 },
            768: { items: 3 },
            992: { items: 4 },
            1200: { items: 5 }
        }
                });
    
                const cards = document.querySelectorAll('.gif-wrapper');
                const player = document.getElementById('youtubePlayer');
                const modal = document.getElementById('youtubeModal');
    
                cards.forEach(card => {
                    card.addEventListener('click', function () {
                        const videoUrl = this.getAttribute('data-youtube') + '?autoplay=1&modestbranding=1&rel=0';
                        player.src = videoUrl;
                    });
                });
    
                modal.addEventListener('hidden.bs.modal', function () {
    player.src = '';
});

            });
        </script>
    </section>
    @endif
    
    
    

    <!-- Updated Style Only -->



    <!--==================================================-->
    <!-- Start educate testimonial Area -->
    <!--==================================================-->
    {{-- <div class="testimonial-area style-one">
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
												<img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}" alt="testi-autor" title="testi-autor" 
													style="width: 60px; height: 60px; border-radius: 50%;">
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
	</div> --}}
    <div class="testimonial-area style-two mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- section title -->
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
    <!--==================================================-->
    <!-- end educate testimonial Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate team Area -->
    <!--==================================================-->




    <x-mentor-popup :mentors="$mentors" />





    <!--==================================================-->
    <!-- end educate team Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate call to action Area -->
    <!--==================================================-->
    {{-- <div class="call-to-action style-one">
		<div class="container">
			<div class="row align-items-center call-to-bg">
				<div class="col-xl-5 col-lg-4">
					<div class="call-to-title">
						<h3>Start learning from Anywhere!</h3>
						<h3>Anytime, get a free trial.</h3>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="call-to-wrapper">
						<div class="call-to-box">
							<div class="call-to-icon">
								<img loading="lazy"src="{{ asset('assets/images/home-one/call-icon.webp') }}" alt="call-to-icon" title="call-to-icon">
							</div>
							<div class="call-to-content">
								<h6>Call Anytime</h6>
								<h4>01205222560</h4>
							</div>
						</div>
						<div class="call-to-arrow">
							<img loading="lazy"src="{{ asset('assets/images/home-one/call-arrow.webp') }}" alt="call-to-arrow" title="call-to-arrow">
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="call-logo-box">
						<div class="call-to-logo">
							<img loading="lazy"src="{{ asset('assets/images/home-one/call-logo.webp') }}" alt="call-to-logo" title="call-to-logo">
						</div>
						<div class="call-rating">
							<p><span>890+</span> Trustpilot 4.9 Ratings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
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
                        {{-- <div class="testi-inner-shape">
							<img loading="lazy"src="{{ asset('assets/images/inner-img/testi-shape-in.webp') }}" alt="testi-inner-shape" title="testi-inner-shape">
						</div> --}}
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
                                            {{-- <div class="testi-title">
												<h3>Success Story</h3>
											</div> --}}
                                            <div class="testi-desc">
                                                <p>{{ $story->stoire }}</p>
                                            </div>
                                            {{-- <div class="testi-ratting">
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
												</ul>
											</div> --}}
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
    <!--==================================================-->
    <!-- end educate call to action Area -->
    <!--==================================================-->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="text-center mb-4" style="font-size: 2rem;">
                Our <span style="color: #f29c12;">Data Science with AI </span> Certification Course Journey
            </h2>
            {{-- <p class="mb-4 fs-5 text-muted">Knowing us before growing with us” your Success way!</p> --}}
            <img loading="lazy"src="{{ asset('assets/images/home-one/phase.webp') }}" alt="Vision Image"
                title="Vision Image" class="img-fluid rounded shadow-lg" />
        </div>
    </section>
    <div class="why-choose-area style-one" style="background: rgb(240 251 255)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="choose-content">
                        <!-- section title -->
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
                                        alt="choose-icon4" title="choose-icon4">120 %
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
                        {{-- <div class="choose-skill-box">
							<div class="choose-skill-icon">
								<img loading="lazy"src="{{ asset('assets/images/home-one/choose-rat-icon.webp') }}" alt="rat">
							</div>
							<div class="choose-skill-content">
								<h3 class="counter">26</h3>
								<span>+</span>
								<p>Years of Experiences</p>
							</div>
						</div> --}}
                        <div class="choose-shape-dot">
                            {{-- <img loading="lazy"src="{{ asset('assets/images/home-one/choose-dot.webp') }}" alt="dot-shape"> --}}
                        </div>
                        <div class="choose-shape-star">
                            {{-- <img loading="lazy"src="{{ asset('assets/images/home-one/choose-star.webp') }}" alt="star-shape"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-shape1">
                {{-- <img loading="lazy"src="{{ asset('assets/images/home-one/choose-shape1.webp') }}" alt="shape"> --}}
            </div>
            <div class="choose-shape2">
                {{-- <img loading="lazy"src="{{ asset('assets/images/home-one/choose-circle.webp') }}" alt="shape"> --}}
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- start educate blog Area -->
    <!--==================================================-->
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
    {{-- @if ($userCountry === 'India') --}}
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

    {{-- @else --}}
    {{-- @endif --}}

    <!--==================================================-->
    <!-- end educate blog Area -->
    <!--==================================================-->

    <!-- Modal -->
    <div id="formModal" class="modal" id="mm">
        <div class="modal-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                <h3 style="color:#f29c12; font-size:18px; margin:0;">Get a Quick Call</h3>
                <span onclick="closeModal()" style="font-size:22px; cursor:pointer; color:#fff;">&times;</span>
            </div>
            <p style="font-size:14px; color:#fff; margin-bottom:15px;">Need help? Call us at
                <strong>01205222560</strong><br>or fill the form below.</p>
            <form id="professionalForm" method="post" action="https://demo.digicrome.com/post_lead.php"
                style="width:100%; margin:0;">
                @csrf
                <input type="text" name="name" placeholder="Name" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="tel" name="mobile" placeholder="Mobile Number" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="email" name="email" placeholder="E-mail ID" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="hidden" name="address" value="NA">
                <input type="hidden" name="title" value="NA">
                <input type="hidden" name="profession" value="NA">
                <!-- Hidden Fields -->
                <input type="hidden" name="source" value="Website(Home Page)">
                <input type="hidden" name="country" value="india">
                <input type="hidden" name="comp_name" value="">
                <input type="hidden" name="state" value="">
                <input type="hidden" name="altr_mobile" value="">

                <button type="submit" style="width:100%; padding:10px; background:#f29c12; color:white; border:none; border-radius:5px; font-weight:bold; margin-top:10px;">Submit</button>
            </form>
        </div>
    </div>
    <script>
        window.onload = function() {
            openModal();
        };

        function openModal() {
            document.getElementById("formModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("formModal").style.display = "none";
        }
        window.onclick = function(event) {
            const modal = document.getElementById("formModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>
@endsection
