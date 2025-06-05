@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
	<!--==================================================-->
	<!-- Start educate Hero Area Area style-one -->
	<!--==================================================-->
	<style>
		#sticky-header{
    margin-bottom: 0px !important;
}
	</style>
	<section class="hero_area style-one d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center flex-column-reverse flex-lg-row">
				<div class="col-lg-6">
					<!-- hero content -->
					<div class="hero_content">
						<h5><i class="bi bi-check2"></i>Enhance Your future skills, with just a click</h5>
						<h1>Start building your</h1>
						<h1>future with a better career transition</h1>
						<p>Master the <strong>most sought-after skills</strong> for today's and tomorrow's job market, and position yourself as the top choice for employers in your industry.</p>
						<!-- hero button -->
						<div class="hero-button">
							<div class="hero-btn">
								<a href="javascript:void(0);" onclick="openModal()">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
							  </div>
							  
							<div class="hero-course-btn">
								<a href="{{ route('course') }}">FIND COURSE<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="hero-rating-box">
						<div class="hero-rating-icon">
							{{-- <img src="{{ asset('assets/images/home-one/star-icon.webp') }}" alt="star"> --}}
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
								<span>(4.7 Ratings)</span>
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
							<img src="{{ asset('assets/images/home-one/hero-thumb1.webp') }}" alt="thumb">
						</div>
						<div class="hero-shape1 rotateme">
							<img src="{{ asset('assets/images/home-one/hero-shape1.webp') }}" alt="shape1">
						</div>
						<div class="hero-arrow-shape">
							<img src="{{ asset('assets/images/home-one/hero-arrow.webp') }}" alt="arrow">
						</div>
						<div class="hero-dot-shape">
							<img src="{{ asset('assets/images/home-one/hero-dot.webp') }}" alt="dot">
						</div>
						<div class="hero-shape3 bounce-animate-3">
							<img src="{{ asset('assets/images/home-one/hero-shape3.webp') }}" alt="shape3">
						</div>
						<div class="hero-autor-box">
							<div class="autor-thumb">
								<img src="{{ asset('assets/images/home-one/hero-autor.webp') }}" alt="autor">
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
					<div class="section-sub-title">
						<h6>core features</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h2 style="font-size: 30px; font-weight: bold;">Get Expertise & Hands On Advancement </h2 >
						<h2 style="font-size: 30px; font-weight: bold;">In Your Career With Best Industry Experts!</h2 >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
					<div class="single-feature-box box-1">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/home-one/feature-icon1.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">500+ Hiring Partners</h4>
							<p class="feature-desc">We guarantee placement assistance, so we have tied up with 500+ global partners to assist students in securing job opportunities.</p>
						</div>
						<div class="educate-hover-box hover-bx"></div>
						<div class="educate-hover-box hover-bx2"></div>
						<div class="educate-hover-box hover-bx3"></div>
						<div class="educate-hover-box hover-bx4"></div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
					<div class="single-feature-box box-2">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/home-one/feature-icon2.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">45+ Industry-Relevant Projects</h4>
							<p class="feature-desc">Work on our industry-based live projects to harness top-level industry experience and make way to a winning career.</p>
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
							<img src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">60+ Topic-Wise Case Studies</h4>
							<p class="feature-desc">Access 60+ relevant case studies and assignments to achieve a strong foundation. Get 24/7 assistance available for assignments.</p>
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
							<img src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">Job Ready Program</h4>
							<p class="feature-desc">Exclusive placement cell dedicated to students completing the course, we help secure job opportunities. So far, 5,000+ students have been employed.</p>
						</div>
						<div class="educate-hover-box hover-bx"></div>
						<div class="educate-hover-box hover-bx2"></div>
						<div class="educate-hover-box hover-bx3"></div>
						<div class="educate-hover-box hover-bx4"></div>
					</div>
				</div>
			</div>
			<div class="feature-shape1">
				<img src="{{ asset('assets/images/home-one/feature-shape1.webp') }}" alt="shape">
			</div>
			<div class="feature-shape2 rotateme">
				<img src="{{ asset('assets/images/home-one/feature-shape2.webp') }}" alt="shape2">
			</div>
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
							<img src="{{ asset('assets/images/home-one/about-thumb1.webp') }}" alt="thumb">
						</div>
						<div class="about-thumb-shape1 bounce-animate-3">
							<img src="{{ asset('assets/images/home-one/about-shape1.webp') }}" alt="shape1">
						</div>
						<div class="about-thumb-shape2 rotateme">
							<img src="{{ asset('assets/images/home-one/about-shape2.webp') }}" alt="shape2">
						</div>
						<div class="about-thumb-shape3">
							<img src="{{ asset('assets/images/home-one/about-shape3.webp') }}" alt="shape3">
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
							<h1>Who Are We – Introduction to</h1>
							<h1>Digicrome Online Platform</h1>
						</div>
						<div class="section-title-desc">
							<p>We are a globally reputed online educational academy. We skill up students and professionals with must-have IT and Business skills. Through expert-led, certification-backed training, we bridge the gap between learning and industry demands.</p>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('assets/images/home-one/about-icon.webp') }}"
											alt="icon">Globally Recognized Certifications</span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('assets/images/home-one/about-icon.webp') }}"
											alt="icon">Industry-Approved Curriculum</span>
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
				<img src="{{ asset('assets/images/home-one/about-shape4.webp') }}" alt="shape4">
			</div> --}}
			<div class="about-shape5">
				<img src="{{ asset('assets/images/home-one/about-shape5.webp') }}" alt="shape5">
			</div>
		</div>
	</section>
	<div class="brand-area style-one">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section_title">
						<h1>In Associated With:</h1>
					</div>
					<div class="section-sub-title">
						<h6 style="text-transform: capitalize; position: static; line-height: 30px; padding: 0px;">Government affiliated program , that shapes the learner’s future and approach towards industry ready !</h6 style=" line-height: 30px;">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="brand-list owl-carousel">
						@foreach($associationLogos as $logo)
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
								   <img src="{{ asset('storage/' . $logo->image) }}" alt="brand">
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="brand-arrow-shape">
				<img src="{{ asset('assets/images/home-one/brand-arrow.webp') }}" alt="arrow">
			</div>
			<div class="brand-star-shape">
				<img src="{{ asset('assets/images/home-one/brand-star.webp') }}" alt="star">
			</div>
			<div class="brand-line-shape">
				<img src="{{ asset('assets/images/home-one/brand-line.webp') }}" alt="line">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End educate About Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate Marquee Area-->
	<!--==================================================-->
	{{-- <div class="marquee-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="marquee">
						<div class="marquee-block">
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>learning innovation</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>worldwide learners</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>unique knowledge</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>dream today</h3>
						</div>
						<div class="marquee-block">
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>learning innovation</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>worldwide learners</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
										alt="icon"></span>unique knowledge</h3>
							<h3><span><img src="{{ asset('assets/images/home-one/marquee-icon.webp') }}"
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
						<h1>Our Courses - Comprehensive For</h1>
						<h1>All Available Programs</h1>
					</div>
				</div>
			</div>
			<div class="row case-study-bg">
				<div class="col-lg-12 col-sm-12">
					<div class="case_study_nav">
						<div class="case_study_menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter=".Upcoming">Upcoming Courses</li>
								@foreach($collections as $collection)
								  <li data-filter=".{{ Str::slug($collection->name) }}">{{ $collection->name }}</li>
								@endforeach
							  </ul>					  
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			document.addEventListener("DOMContentLoaded", function () {
			  var grid = document.querySelector('.image_load');
			  var iso = new Isotope(grid, {
				itemSelector: '.grid-item',
				layoutMode: 'fitRows'
			  });
		  
			  var filterButtons = document.querySelectorAll('.menu-filtering li');
		  
			  filterButtons.forEach(function (button) {
				button.addEventListener('click', function () {
				  filterButtons.forEach(btn => btn.classList.remove('current_menu_item'));
				  this.classList.add('current_menu_item');
				  var filterValue = this.getAttribute('data-filter');
				  iso.arrange({ filter: filterValue });
				});
			  });
		  
			  // Show Upcoming by default
			  iso.arrange({ filter: '.Upcoming' });
			});
		  </script>
		  
		  
		  <div class="container">
			<div class="row image_load">
				{{-- Upcoming Courses --}}
				@foreach($upcomingCourses as $course)
				<div class="col-xl-3 col-lg-6 col-md-6 grid-item Upcoming">
					<div class="case-study-single-box"> 
							{{-- Use same HTML course card template --}}
							<div class="case-study-thumb">
								<img src="{{ asset('storage/' . $course->image) }}" alt="thumb">
								{{-- <div class="case-meta-top">
									<span>{{ $course->course_free ? 'Free' : '$' . $course->price }}</span>
								</div> --}}
							</div>
							<div class="case-study-content">
								<h5>Upcoming</h5>
								<h4><a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a></h4>
								{{-- <div class="case-rating">
									<ul>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star-half-stroke"></i></li>
									</ul>
									<div class="case-rating-num">
										<span>(4.5/3 Ratings)</span>
									</div>
								</div> --}}
								{{-- <div class="case-autor-box">
									<div class="case-autor-img">
										<img src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
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
								@if($course->tag_line)
                        <p style="margin: 10px 0 5px; font-size: 14px; color: #555;">
                            {{ $course->tag_line }}
                        </p>
                    @endif
					<br>
					<div style="bottom: 17px; position: absolute;">
						{{-- ENROL NOW Button --}}
						<div class="course-enroll-fixed-btn" style="margin: 10px 0;">
							<a href="{{ route('course_details', ['slug' => $course->slug]) }}"
							   style="background-color: #15c1fa; color: #fff; padding: 8px 16px; display: inline-block; border-radius: 4px; text-decoration: none; font-weight: bold;">
								ENROL NOW <i class="flaticon flaticon-right-arrow"></i>
							</a>
						</div>
	
						{{-- Horizontal line --}}
						<hr style="border-top: 1px solid #ccc; margin: 10px 0;">
	
						{{-- Duration --}}
						@if($course->course_duration)
							<p style="font-size: 14px; color: #15c1fa; margin-bottom: 0;">
								<i class="fa fa-clock-o"></i> Duration: {{ $course->course_duration }}
							</p>
						@endif
					</div>
								{{-- <br><br>
								<div class="course-btn">
									<a href="{{ route('course_details', ['slug' => $course->slug]) }}">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
								</div> --}}
							</div>
						</div>
					</div>
				@endforeach
			
				{{-- Courses by Collection --}}
				@foreach($collections as $collection)
					@foreach($collection->courses as $course)
						<div class="col-xl-3 col-lg-6 col-md-6 grid-item {{ Str::slug($collection->name) }}">
							<div class="case-study-single-box">
								{{-- Same card HTML reused --}}
								<div class="case-study-thumb">
									<img src="{{ asset('storage/' . $course->image) }}" alt="thumb">
									{{-- <div class="case-meta-top">
										<span>{{ $course->course_free ? 'Free' : '$' . $course->price }}</span>
									</div> --}}
								</div>
								<div class="case-study-content">
									<h5>{{ $collection->name }}</h5>
									<h4><a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a></h4>
									{{-- <div class="case-rating">
										<ul>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star"></i></li>
											<li><i class="fa-solid fa-star-half-stroke"></i></li>
										</ul>
										<div class="case-rating-num">
											<span>(4.5/3 Ratings)</span>
										</div>
									</div> --}}
									{{-- <div class="case-autor-box">
										<div class="case-autor-img">
											<img src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
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
									{{-- <br><br>
									<div class="course-btn">
										<a href="{{ route('course_details', ['slug' => $course->slug]) }}">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
									</div> --}}
									@if($course->tag_line)
                        <p style="margin: 10px 0 5px; font-size: 14px; color: #555;">
                            {{ $course->tag_line }}
                        </p>
                    @endif
					<br>
					<div style="bottom: 17px; position: absolute;">
						{{-- ENROL NOW Button --}}
						<div class="course-enroll-fixed-btn" style="margin: 10px 0;">
							<a href="{{ route('course_details', ['slug' => $course->slug]) }}"
							   style="background-color: #15c1fa; color: #fff; padding: 8px 16px; display: inline-block; border-radius: 4px; text-decoration: none; font-weight: bold;">
								ENROL NOW <i class="flaticon flaticon-right-arrow"></i>
							</a>
						</div>
	
						{{-- Horizontal line --}}
						<hr style="border-top: 1px solid #ccc; margin: 10px 0;">
	
						{{-- Duration --}}
						@if($course->course_duration)
							<p style="font-size: 14px; color: #15c1fa; margin-bottom: 0;">
								<i class="fa fa-clock-o"></i> Duration: {{ $course->course_duration }}
							</p>
						@endif
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
	<div class="why-choose-area style-one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="choose-content">
						<!-- section title -->
						<div class="section-sub-title">
							<h6>why choose us?</h6>
						</div>
						<div class="section_title">
							<h1>We Bring You Closer To</h1>
							<h1>A Successful Career</h1>
						</div>
						<div class="section-title-desc">
							<p>Get that Ideal career with better pay—even without an IT degree. Whatever your background, we support you from basic to advanced. As one of the best data science institutes in India, and the top Data science institute in Metropolitan cities, we make career shifts smooth. Quickly apply and work for your success.</p>
						</div>
						<div class="choose-item-menu">
							<ul>
								<li><img src="{{ asset('assets/images/home-one/choose-icon1.webp') }}" alt="icon">Weekend Live Sessions
								</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon2.webp') }}" alt="icon">Select a convenient batch time
								</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon3.webp') }}"
										alt="icon">Get Placement Guarantee Aid
									</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon4.webp') }}" alt="icon">Get a Salary Hike
								</li>
							</ul>
						</div>
						<p class="choose-suport-des"><img src="{{ asset('assets/images/home-one/top-star.webp') }}"
								alt="star">24/7 Mentor Support Available </p>
						<div class="choose-btn">
							<a href="javascript:void(0);" onclick="openModal()">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="choose-thumb">
						<img src="{{ asset('assets/images/home-one/choose-thumb1.webp') }}" alt="thumb">
						<div class="choose-skill-box">
							<div class="choose-skill-icon">
								<img src="{{ asset('assets/images/home-one/choose-rat-icon.webp') }}" alt="rat">
							</div>
							<div class="choose-skill-content">
								<h3 class="counter">26</h3>
								<span>+</span>
								<p>Years of Experiences</p>
							</div>
						</div>
						<div class="choose-shape-dot">
							<img src="{{ asset('assets/images/home-one/choose-dot.webp') }}" alt="dot-shape">
						</div>
						<div class="choose-shape-star">
							<img src="{{ asset('assets/images/home-one/choose-star.webp') }}" alt="star-shape">
						</div>
					</div>
				</div>
			</div>
			<div class="choose-shape1">
				<img src="{{ asset('assets/images/home-one/choose-shape1.webp') }}" alt="shape">
			</div>
			<div class="choose-shape2">
				<img src="{{ asset('assets/images/home-one/choose-circle.webp') }}" alt="shape">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start educate why choose Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate course design offer Area -->
	<!--==================================================-->
	{{-- <div class="course-design-offer-area style-one">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="course-design-thumb">
						<img src="{{ asset('assets/images/home-one/offer-video.webp') }}" alt="thumb">
						<div class="course-video-icon">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
								href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i
									class="fa-classic fa-solid fa-play fa-fw"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-course-offer-box">
						<div class="course-offer-content">
							<h6>Designing</h6>
							<h4>Creative Graphic Design</h4>
							<h4>With Adobe Suite</h4>
							<div class="offer-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
								<div class="offer-rating-rate">
									<span>(4.5/3 Ratings)</span>
								</div>
								<div class="course-offer-price">
									<span>$35 <del>$60</del></span>
								</div>
							</div>
							<div class="course-offer-btn">
								<a href="javascript:void(0);" onclick="openModal()">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
							<div class="course-offer-discount">
								<h5>10%</h5>
								<span>off</span>
							</div>
						</div>
						<div class="offer-thumb">
							<img src="{{ asset('assets/images/home-one/offer-thumb.webp') }}" alt="thumb">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--==================================================-->
	<!-- end educate course design offer Area -->
	<!--==================================================-->
	<section class="video-slider">
		<div class="container">
			<h2 class="text-center mb-2 mt-2" style="font-size: 2rem;">
				<span style="color: #f29c12;">Featured </span> Testimonials
			</h2>
			<p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
				Presenting you our recent feedbacks- Have a look
			</p>
	  
		  <div id="vimeoCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<!-- Owl Carousel for Reels -->
<div class="owl-carousel reels-carousel">
	@php
$videos = [
    ['id' => '1090423210', 'title' => 'Vishal'],
    ['id' => '1090423173', 'title' => 'Richard Carter'],
    ['id' => '1090423142', 'title' => 'Vipin Chauhan'],
    ['id' => '1090423114', 'title' => 'Vikas Singh'],
    ['id' => '1090423092', 'title' => 'Varsha Upadhyaya'],
    ['id' => '1090423068', 'title' => 'Sunel Nayan'],
    ['id' => '1090423037', 'title' => 'Saloni Singh'],
    ['id' => '1090423009', 'title' => 'Rohit Chaudhary'],
    ['id' => '1090422975', 'title' => 'Radhi'],
    ['id' => '1090422937', 'title' => 'Michael Diaz'],
    ['id' => '1090422896', 'title' => 'Khusboo Gupta'],
    ['id' => '1090422866', 'title' => 'Kayla Ewell'],
    ['id' => '1090422828', 'title' => 'Kartik Mehta'],
    ['id' => '1090422806', 'title' => 'Karan'],
    ['id' => '1090422772', 'title' => 'Justin Brooks'],
    ['id' => '1090422744', 'title' => 'Jeffery George'],
    ['id' => '1090422705', 'title' => 'Eilish Algee'],
    ['id' => '1090422678', 'title' => 'Anshika'],
    ['id' => '1090422646', 'title' => 'Anis Khan'],
    ['id' => '1090422607', 'title' => 'Abhishek Ranjan'],
    ['id' => '1090422572', 'title' => 'Abhishek Prajapati'],
    ['id' => '1090422548', 'title' => 'Davis Johson'],
    ['id' => '1090422495', 'title' => 'Alejandro Cruz'],
];
@endphp
  
	@foreach ($videos as $video)
	  <div class="video-card" data-bs-toggle="modal" data-bs-target="#vimeoModal"
		data-vimeo="https://player.vimeo.com/video/{{ $video['id'] }}">
		<iframe src="https://player.vimeo.com/video/{{ $video['id'] }}?background=1"
		  frameborder="0" allowfullscreen></iframe>
		<div class="video-title">{{ $video['title'] }}</div>
	  </div>
	@endforeach
  </div>
  
			  </div>
			</div>
	  
			<button class="carousel-control-prev" type="button" data-bs-target="#vimeoCarousel" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#vimeoCarousel" data-bs-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</button>
		  </div>
		</div>
	  
		<!-- Vimeo Modal -->
		<div class="modal fade" id="vimeoModal" tabindex="-1" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content bg-dark text-white">
			  <div class="modal-body modal-video">
				<iframe id="vimeoPlayer" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
			  </div>
			</div>
		  </div>
		</div>
	  
		<!-- JS Script -->
		<script>
		  document.addEventListener("DOMContentLoaded", function () {
			const videoCards = document.querySelectorAll('.video-card');
			const vimeoPlayer = document.getElementById('vimeoPlayer');
			const modal = document.getElementById('vimeoModal');
	  
			videoCards.forEach(card => {
			  card.addEventListener('click', function () {
				const videoUrl = this.getAttribute('data-vimeo') + '?autoplay=1';
				vimeoPlayer.src = videoUrl;
			  });
			});
	  
			modal.addEventListener('hidden.bs.modal', function () {
			  vimeoPlayer.src = '';
			});
		  });
		</script>
	  </section>
	  
	  <!-- Updated Style Only -->
	  <style>
		.reels-carousel .video-card {
  position: relative;
  padding-top: 177.78%; /* 9:16 aspect ratio */
  overflow: hidden;
  border-radius: 15px;
  background: #000;
  cursor: pointer;
}

.reels-carousel .video-card iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  object-fit: cover;
}

.reels-carousel .video-title {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: rgba(242, 156, 18, 0.85);
  color: white;
  text-align: center;
  padding: 10px;
  font-weight: bold;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.reels-carousel .video-card:hover .video-title {
  opacity: 1;
}

	  
		.modal-video iframe {
		  width: 100%;
		  height: 500px;
		}
	  </style>
	  
	<!--==================================================-->
	<!-- Start educate team Area -->
	<!--==================================================-->
	{{-- <div class="team-area style-one">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>INSTRUCTOR</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>Meet the Mentors </h1>
						<h1>Behind Your Growth</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="single-team-box box-1">
						<div class="team-thumb">
							<img src="{{ asset('assets/images/home-one/team-thumb1.webp') }}" alt="thumb">
							<div class="team-social-icon">
								<div class="team-social">
									<ul>
										<li class="team-icon-1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="team-icon-2"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
										<li class="team-icon-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-content">
							<div class="team-title">
								<h3><a href="instructor-details.html">John D. Alexon</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>UI/UX Designer</h5>
							</div>
							<div class="team-ratting">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
							</div>
							<div class="team-rating-rate">
								<span>(4.5)</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="single-team-box box-2">
						<div class="team-thumb">
							<img src="{{ asset('assets/images/home-one/team-thumb2.webp') }}" alt="thumb">
							<div class="team-social-icon">
								<div class="team-social">
									<ul>
										<li class="team-icon-1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="team-icon-2"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
										<li class="team-icon-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-content">
							<div class="team-title">
								<h3><a href="instructor-details.html">Anjelina Watson</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>Finance Specialist</h5>
							</div>
							<div class="team-ratting">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
							</div>
							<div class="team-rating-rate">
								<span>(4.5)</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="single-team-box box-3">
						<div class="team-thumb">
							<img src="{{ asset('assets/images/home-one/team-thumb3.webp') }}" alt="thumb">
							<div class="team-social-icon">
								<div class="team-social">
									<ul>
										<li class="team-icon-1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="team-icon-2"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
										<li class="team-icon-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-content">
							<div class="team-title">
								<h3><a href="instructor-details.html">Jakulin Farnandez</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>Data Analist</h5>
							</div>
							<div class="team-ratting">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
							</div>
							<div class="team-rating-rate">
								<span>(4.5)</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="single-team-box box-4">
						<div class="team-thumb">
							<img src="{{ asset('assets/images/home-one/team-thumb4.webp') }}" alt="thumb">
							<div class="team-social-icon">
								<div class="team-social">
									<ul>
										<li class="team-icon-1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="team-icon-2"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
										<li class="team-icon-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="team-content">
							<div class="team-title">
								<h3><a href="instructor-details.html">David X. Watson</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>WP Developer</h5>
							</div>
							<div class="team-ratting">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
							</div>
							<div class="team-rating-rate">
								<span>(4.5)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-shape1">
				<img src="{{ asset('assets/images/home-one/team-shape1.webp') }}" alt="shape1">
			</div>
			<div class="team-shape2">
				<img src="{{ asset('assets/images/home-one/team-shape2.webp') }}" alt="shape2">
			</div>
		</div>
	</div> --}}
	<!--==================================================-->
	<!-- end educate team Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate testimonial Area -->
	<!--==================================================-->
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
							<img src="{{ asset('assets/images/home-one/testi-thumb.webp') }}" alt="thumb">
						</div>
						<div class="testi-dot-shape">
							<img src="{{ asset('assets/images/home-one/testi-dot.webp') }}" alt="dot">
						</div>
						<div class="testi-map-shape">
							<img src="{{ asset('assets/images/home-one/testi-map.webp') }}" alt="map">
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
                <img src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="quote">
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
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="author" style="width: 60px; height: 60px; border-radius: 50%;">
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
	<!--==================================================-->
	<!-- end educate testimonial Area -->
	<!--==================================================-->
	
	<!--==================================================-->
	<!-- Start educate call to action Area -->
	<!--==================================================-->
	<div class="call-to-action style-one">
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
								<img src="{{ asset('assets/images/home-one/call-icon.webp') }}" alt="icon">
							</div>
							<div class="call-to-content">
								<h6>Call Anytime</h6>
								<h4>01203133869</h4>
							</div>
						</div>
						<div class="call-to-arrow">
							<img src="{{ asset('assets/images/home-one/call-arrow.webp') }}" alt="arrow">
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="call-logo-box">
						<div class="call-to-logo">
							<img src="{{ asset('assets/images/home-one/call-logo.webp') }}" alt="logo">
						</div>
						<div class="call-rating">
							<p><span>890+</span> Trustpilot 4.9 Ratings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="testimonial-area style-inner">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-xl-4 col-lg-12">
					<div class="section-sub-title three">
						<h6><img src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon">Success Stories</h6>
					</div>
					<div class="section_title">
						<h1>All Real Experiences</h1>
						<h1>From Our Dedicated</h1>
						<h1>Learners</h1>
					</div>
					<div class="testi-review-box">
						<div class="review-image">
							<img src="{{ asset('assets/images/home-three/course-instructor.webp') }}" alt="instructor">
						</div>
						<div class="testi-review-content">
							<h3 class="counter">250</h3>
							<span>+</span>
							<p>Reviews</p>
						</div>
						<div class="testi-inner-shape">
							<img src="{{ asset('assets/images/inner-img/testi-shape-in.webp') }}" alt="arrow">
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
												<img src="{{ asset('assets/images/home-three/testi-quote.webp') }}" alt="quote">
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
													<img src="{{ asset('storage/' . $story->image) }}" alt="author" class="rounded-circle img-fluid" style="width: 70px; height: 70px; ">
												</div>
												<div class="testi-autor-content">
													<h5 class="autor-title">{{ $story->studentname }}</h5>
													<p class="autor-desi">{{ $story->position }} at {{ $story->companyname }}</p>
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
				Our <span style="color: #f29c12;">Data Science with AI  </span> Certification Course Journey
			</h2>
			{{-- <p class="mb-4 fs-5 text-muted">Knowing us before growing with us” your Success way!</p> --}}
			<img src="{{ asset('assets/images/home-one/phase.webp') }}" alt="Vision Image"
				class="img-fluid rounded shadow-lg" />
		</div>
	</section>
	<div class="why-choose-area style-one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="choose-content">
						<!-- section title -->
						<div class="section-sub-title">
							<h6>Explore Career Opportunities in the most future-oriented sector</h6>
						</div>
						<div class="section_title">
							<h1>Build Skills. Grab Opportunities.</h1>
							<h1> Start Now.</h1>
						</div>
						<div class="section-title-desc">
							<p>Become a professional at what you learn. Start from scratch and make your way to a career full of growth, opportunities, and success. Begin today and build your future right.
							</p>
						</div>
						<div class="choose-item-menu">
							<ul>
								<li><img src="{{ asset('assets/images/home-one/choose-icon1.webp') }}" alt="icon">500 +
									Global Companies</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon2.webp') }}" alt="icon">12-15 LPA
									Average CTC</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon3.webp') }}" alt="icon">25-27 LPA
									Highest CTC</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon4.webp') }}" alt="icon">120 %
									Average Hike</li>
							</ul>
						</div>
						<p class="choose-suport-des"><img src="{{ asset('assets/images/home-one/top-star.webp') }}"
								alt="star">Don't Stay Stuck, Expand Your Potential Today 
							</p>
						<div class="choose-btn">
							<a href="javascript:void(0);" onclick="openModal()">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="choose-thumb">
						<img src="{{ asset('assets/images/home-one/roles.webp') }}" alt="	thumb">
						{{-- <div class="choose-skill-box">
							<div class="choose-skill-icon">
								<img src="{{ asset('assets/images/home-one/choose-rat-icon.webp') }}" alt="rat">
							</div>
							<div class="choose-skill-content">
								<h3 class="counter">26</h3>
								<span>+</span>
								<p>Years of Experiences</p>
							</div>
						</div> --}}
						<div class="choose-shape-dot">
							{{-- <img src="{{ asset('assets/images/home-one/choose-dot.webp') }}" alt="dot-shape"> --}}
						</div>
						<div class="choose-shape-star">
							{{-- <img src="{{ asset('assets/images/home-one/choose-star.webp') }}" alt="star-shape"> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="choose-shape1">
				{{-- <img src="{{ asset('assets/images/home-one/choose-shape1.webp') }}" alt="shape"> --}}
			</div>
			<div class="choose-shape2">
				{{-- <img src="{{ asset('assets/images/home-one/choose-circle.webp') }}" alt="shape"> --}}
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- start educate blog Area -->
	<!--==================================================-->
	<div class="blog-area style-one">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>LATEST BLOGS</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>Read out our latest updates</h1>
						<h1> from digicrome</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="row">
					@foreach($blogs->take(3) as $blog)
						<div class="col-xl-4 col-lg-12 col-md-4">
							<div class="single-blog-box box-1">
								<div class="single-blog-thumb">
									<img src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb" class="img-fluid">
									<div class="blog-meta-top">
										<span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
									</div>
								</div>
								<div class="blog-content">
									<div class="blog-author">
										<h4 style="display: flex; align-items: center; gap: 10px;">
											@if($blog->author_image)
												<img src="{{ asset('storage/' . $blog->author_image) }}" alt="author" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
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
											<img src="{{ asset('assets/images/home-one/blog-icon1.webp') }}" alt="icon">
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
	<section class="company-form contactpage-form" style=" padding-top:10px;">
		<div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
			<h2 class="text-center mb-2" style="font-size: 2rem;">
				Meet <span style="color: #f29c12;">Our Team</span> 
			</h2>
			<!-- <h1 class="section__title"  style="text-align: center; padding-bottom:40px;"><b>Unveiling <span class="yellow-bg"> Digicrome<img src="https://digicrome.com/public/www/assets/img/shape/yellow-bg-2.png" alt=""></span> Distinct Culture</b></h1> -->

		</div>
		<div>
			<div class="gall-inn">
				<div class="col-sm-6 col-md-2">
					<div class="gal-im animate animate__animated animate__slow" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc1.webp') }}" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc2.webp') }}" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc3.webp') }}" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc4.webp') }}" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-2">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc5.webp') }}" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc6.webp') }}" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc7.webp') }}" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc8.webp') }}" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc9.webp') }}" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="{{ asset('assets/images/dc/dc10.webp') }}" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Our People, Our Pride</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<style>
		.wedd-gall {
			margin-bottom: 90px;
			float: left;
			width: 100%;
		}

		.wedd-gall-pg {
			margin: 100px 0 80px 0;
		}

		.wedd-gall-pg-v1 {
			width: 100%;
			float: left;
			margin: 100px 0 90px 0;
		}

		.wedd-gall-pg-v1 .img-wrapper img {
			height: 350px;
		}

		.gal-im {
			position: relative;
			overflow: hidden;
		}

		.gall-inn {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
		}

		.gal-im:hover {}

		.gal-im:before {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(45deg, #633214cc, transparent);
			transition: all 0.5s ease;
			opacity: 0;
			z-index: 1;
		}

		.gal-im img {
			width: 100%;
			transition: all 0.5s ease;
			object-fit: cover;
		}

		.gal-im img.gal-siz-1 {
			height: 300px;
		}

		.gal-im img.gal-siz-2 {
			height: 45vh;
		}

		.gal-im:hover img {
			filter: grayscale(0);
			transform: scale(1.2);
		}

		.gal-im .txt {
			padding: 30px 30px 35px;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			width: 100%;
			/* transition: all 0.5s ease; */
			z-index: 1;
		}

		.gal-im .txt:before {
			content: '';
			position: absolute;
			bottom: 22px;
			left: 0;
			right: 0;
			width: 0%;
			height: 1px;
			background: #ffffff6b;
			transition: all 0.5s ease;
		}

		.gal-im .txt span {
			text-transform: uppercase;
			font-family: var(--tit-font);
			font-size: 12px;
			letter-spacing: 2px;
			transition: all 0.5s ease;
			position: relative;
			left: -30px;
			opacity: 0;
		}

		.gal-im .txt h4 {
			font-family: var(--tit-font);
			font-size: 24px;
			transition: all 0.5s ease;
			position: relative;
			left: -30px;
			opacity: 0;
		}

		.gal-im:hover span,
		.gal-im:hover h4 {
			color: #fff;
		}

		.gal-im:hover .txt:before {
			width: 100%;
			transition-delay: 0.4s;
		}

		.gal-im:hover:before {
			opacity: 1;
		}

		.gal-im:hover .txt span {
			left: 0px;
			opacity: 1;
			transition-delay: 0.2s;
		}

		.gal-im:hover .txt h4 {
			left: 0px;
			opacity: 1;
			transition-delay: 0.3s;
		}

		.gal-im:hover {}

		/* gallry end */
		.career {
			color: black;

		}

		.content {
			background-color: orange;
			height: 500px;
		}

		.button-container {
			background-color: rgba(0, 0, 0, 0.2);
			text-align: center;
			padding: 10px;
			padding-top: 150px;
			font-family: var(--pix-heading-font), sans-serif !important;
		}

		/* Styles for the button */
		.custom-button {
			display: inline-block;
			background-color: #007BFF;
			/* Set the button background color */
			color: #FFFFFF;
			/* Set the button text color */
			border: none;
			padding: 10px 20px;
			/* Adjust the padding as needed */
			border-radius: 5px;
			/* Add rounded corners if desired */
			font-size: 16px;
			/* Set the font size */
			font-weight: bold;
			/* Set font weight to bold for a professional look */
			font-family: Arial, sans-serif;
			/* Use a professional font (change as needed) */
			text-align: center;
			line-height: 1.4;
			/* Adjust the line height as needed to control line spacing */
		}

		.big-text {
			color: white;
			font-size: 54px;
			/* Adjust the font size as needed */
			font-weight: bold;
			/* Add bold font weight for a professional look */
			margin-bottom: 10px;
			/* Add space between lines */
		}

		.ul {
			display: block;
			list-style-type: disc;
			margin-block-start: 1em;
			margin-block-end: 1em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
			padding-inline-start: 40px;
		}

		.section__title span.yellow-bg-big img {
			bottom: 15px;
			width: 120%;
			-webkit-animation: section-animation-2 3s infinite;
			animation: section-animation-2 3s infinite;
		}

		.section__title span.yellow-bg-sm img {
			bottom: 10px;
			width: 120%;
			-webkit-animation: section-animation-2 3s infinite;
			animation: section-animation-2 3s infinite;
		}

		#teem img {
			filter: grayscale(100%);
			/* Set the image to black and white by default */
			transition: filter 0.3s;
			/* Add a smooth transition effect */
		}

		#teem img:hover {
			filter: grayscale(0%);
			/* Remove the grayscale filter on hover */
		}

		.big-text {
			color: white;
			line-height: 1.5;
			Adjust the line height for better spacing on mobile
		}

		@media (max-width: 767px) {

			/* Media query for screens with a maximum width of 767px (typical mobile screens) */
			.big-text {
				font-size: 26px;
				/* Adjust the font size for mobile screens */
				line-height: 1.5;
				/* Adjust the line height for better spacing on mobile */
			}
		}
	</style>
	<!--==================================================-->
	<!-- end educate blog Area -->
	<!--==================================================-->
	<style>
		/* Modal Overlay */
		.modal {
		  display: none;
		  position: fixed;
		  z-index: 9999;
		  left: 0; top: 0;
		  width: 100%; height: 100%;
		  overflow: auto;
		  background-color: rgba(0, 0, 0, 0.6);
		  padding: 20px;
		  box-sizing: border-box;
		}
		
		/* Modal Content Box */
		.modal-content {
		  background-color: #fff;
		  border-radius: 10px;
		  max-width: 900px;
		  margin: auto;
		  padding: 0;
		  overflow: hidden;
		  animation: fadeIn 0.4s ease-in-out;
		}
		
		/* Modal Header */
		.modal-header {
		  padding: 15px 20px;
		  font-size: 20px;
		  font-weight: bold;
		  background-color: #f29c12;
		  color: #fff;
		  position: relative;
		}
		
		/* Close Button */
		.close-btn {
		  color: #fff;
		  position: absolute;
		  right: 20px;
		  top: 12px;
		  font-size: 26px;
		  cursor: pointer;
		}
		
		/* Modal Body */
		.modal-body {
		  display: flex;
		  flex-direction: row;
		  flex-wrap: wrap;
		  padding: 20px;
		  gap: 20px;
		  background: #f9f9f9;
		}
		
		/* Form Container */
		.popup-container {
		  display: flex;
		  flex-direction: row;
		  flex-wrap: wrap;
		  width: 100%;
		  justify-content: center;
		  align-items: center;
		}
		
		.popup-form {
		  display: flex;
		  flex-direction: row;
		  flex-wrap: wrap;
		  width: 100%;
		}
		
		.form-container {
		  display: flex;
		  flex-wrap: wrap;
		  width: 100%;
		  background-color: white;
		  border-radius: 10px;
		  overflow: hidden;
		  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
		}
		
		/* Image Section */
		.form-container img {
		  width: 100%;
		  max-width: 400px;
		  object-fit: cover;
		}
		
		/* Form Section */
		form.form {
		  flex: 1;
		  padding: 20px;
		  box-sizing: border-box;
		}
		
		form h2 {
		  margin-bottom: 20px;
		}
		
		.form-field {
		  margin-bottom: 15px;
		  width: 100%;
		}
		
		.form-field input,
		.form-field select {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 6px;
		  font-size: 14px;
		  box-sizing: border-box;
		}
		
		form p {
		  font-size: 14px;
		  color: #333;
		}
		
		form a {
		  color: #f29c12;
		  text-decoration: none;
		}
		
		form button {
		  background-color: #f29c12;
		  color: white;
		  border: none;
		  padding: 12px 20px;
		  font-size: 16px;
		  cursor: pointer;
		  border-radius: 6px;
		  transition: background-color 0.3s ease;
		}
		
		form button:hover {
		  background-color: #d8880e;
		}
		
		/* Responsive Design */
		@media screen and (max-width: 768px) {
		  .modal-body {
			flex-direction: column;
		  }
		
		  .form-container {
			flex-direction: column;
		  }
		
		  .form-container img {
			max-width: 100%;
			height: auto;
		  }
		
		  form.form {
			padding: 15px;
		  }
		
		  .modal-content {
			width: 100%;
		  }
		}
		
		/* Animation */
		@keyframes fadeIn {
		  from {opacity: 0; transform: scale(0.9);}
		  to {opacity: 1; transform: scale(1);}
		}
		</style>
		
	
	<!-- Modal -->
	<div id="formModal" class="modal">
	  <div class="modal-content">
		<div class="modal-header">
		  <span class="close-btn" onclick="closeModal()">&times;</span>
		  Need help? Call us now at 0120 313 3869 or request a quick call!
		</div>
		<div class="modal-body">
			<div class="popup-container">
				<div class="popup-form">
					<div class="form-container">
					<img src="{{ asset('assets/images/www.webp') }}" alt="Image Description">
					<form style="width:100%; background:transparent; margin:0px;"class="form" method="post" action="https://demo.digicrome.com/post_lead.php">       
								@csrf  
						<h2 style="    color: #f29c12;"> Register now!! And get a quick call</h2>  
						<div class="form-field">
							 <!--<label style="color:#fff;" for="name">Name:</label> -->
							<input type="text" id="name" name="name" placeholder="Name">
						</div>
						<div class="form-field">
							 <!--<label style="color:#fff;" for="mobile">Mobile Number:</label> -->
							<input type="tel" id="mobile" name="mobile" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							 <!--<label style="color:#fff;" for="gmail">Gmail ID:</label> -->
							<input type="email" id="gmail" name="email" placeholder="E-mail ID:">
						</div>
						 <div class="form-field">
							 <!--<label style="color:#fff;" for="city">City:</label> -->
							<input type="text" id="city" name="address" placeholder="City">
						</div>
						<div class="form-field">
							 <!--<label style="color:#fff;" for="Qualification">Qualification:</label> -->
							<input type="text" id="qualification" name="title" placeholder="Qualification">
						</div>
						<div class="form-field">
				<!--<label style="color:#fff;" for="qualification">Experience:</label> -->
				<select class="selecttype" id="qualification" name="profession">
					<option value="" disabled selected>Select Experience</option>
					<option value="Working Professional - Technincal Roles">Working Professional - Technincal Roles</option>
					<option value="Working Professional - Non Technincal">Working Professional - Non Technincal</option>
					<option value="College Student - Final Year">College Student - Final Year</option>
					<option value="College Student - 1st to pre-final Year">College Student - 1st to pre-final Year</option>
					<option value="Other">Other</option>
				</select>
			</div>
			
						<div class="form-field">
							<input type="hidden" id="mobile" name="source" Value="Home Page" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="country" value="india" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="comp_name" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="state" value="" placeholder="Mobile Number">
						</div>
						<!--<div class="form-field">-->
						<!--    <input type="text" id="mobile" name="profession" placeholder="Mobile Number">-->
						<!--</div>-->
						<div class="form-field">
							<input type="hidden" id="mobile" name="altr_mobile" placeholder="Mobile Number">
						</div>
						
						<p style="    line-height: 30px;">By submitting the form, you agree to our <a href="">Terms and Conditions</a>  and our <a href="https://digicrome.com/privacy-policy">Privacy Policy.</a> </p><br>
						<button type="submit">Submit</button>
					</form>
				</div>
			</div>	
		</div>
	  </div>
	</div>
	</div>
	
	<script>
		// Show modal on page load
		window.onload = function () {
		  openModal();
		};
	  
		// Function to open modal (also reusable on button click)
		function openModal() {
		  document.getElementById("formModal").style.display = "block";
		}
	  
		// Function to close modal
		function closeModal() {
		  document.getElementById("formModal").style.display = "none";
		}
	  
		// Optional: Prevent actual form submission (only if needed for testing)
		document.getElementById("professionalForm").addEventListener("submit", function (e) {
		  e.preventDefault();
		  alert("Form submitted!");
		  closeModal();
		});
	  
		// Optional: Close if clicking outside the modal content
		window.onclick = function (event) {
		  const modal = document.getElementById("formModal");
		  if (event.target === modal) {
			modal.style.display = "none";
		  }
		};
	  </script>
	  


@endsection