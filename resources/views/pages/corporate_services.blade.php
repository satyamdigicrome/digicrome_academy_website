@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


	<div class="breadcumb-area d-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<div class="breadcumb-title">
							<h4>Corporate Services</h4>
						</div>
						<ul>
							<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
							<li>Corporate Services</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="breadcumb-shape">
				<img src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
			</div>
			<div class="breadcumb-shape2">
				<img src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
			</div>
		</div>
	</div>
	<section class="py-5" style="background-color: #fff8f0;">
		<div class="container">
			<div class="row align-items-center">

				<!-- Left: Image -->
				<div class="col-md-6 mb-4 mb-md-0 text-center">
					<img src="https://digicrome.com/public/storage/1579/1710927982.webp" alt="Main Image"
						class="img-fluid rounded" style="max-width: 100%; aspect-ratio: 1/1; object-fit: cover;">
				</div>

				<!-- Right: Text + Logos -->
				<div class="col-md-6">
					<div class="section_title">
						<h1 class="fw-bold mb-2" style="color: #f29c12;">Amplifying Growth, Achieving Impact</h1>
					</div>
					<h5 class="text-muted mb-4">Customer Success Stories</h5>

					<!-- Logo Grid -->
					<div class="row g-3">
						@foreach($companyLogos->take(16) as $logo)
							<div class="col-3 text-center">
								<img src="{{ asset('storage/' . $logo->image) }}" alt="Logo" class="img-fluid">
							</div>
						@endforeach
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<div class="brand-area style-one mt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<!-- Main heading -->
					<div class="section_title mb-4">
						<h1 class="display-5 fw-bold">Moments of Honour</h1>
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
							<span><b> Successpreneur Award 2023 </b> being the best analytics EdTech business</span>
						</li>
						<li class="d-flex align-items-start">
							<i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
							<span><b>Most Promising Digital Learning Platform 2023</b> for being one of the most promising
								digital
								learning platforms</span>
						</li>
					</ul>
				</div>
	
				<div class="col-lg-7 mt-4">
					<div class="brand-list owl-carousel">
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2018.webp') }}" alt="brand">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2023_V2.webp') }}" alt="brand">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2020.webp') }}" alt="brand">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2021.webp') }}" alt="brand">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2022.webp') }}" alt="brand">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset('assets/images/Awards/Award-2023.webp') }}" alt="brand">
								</div>
							</div>
						</div>
					</div>
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
						<h1>Our Courses – Comprehensive</h1>
						<h1>Available all programs</h1>
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
								<div class="case-rating">
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
								</div>
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
								<br><br>
								<div class="course-btn">
									<a href="{{ route('course_details', ['slug' => $course->slug]) }}">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
								</div>
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
									<div class="case-rating">
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
									</div>
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
									<br><br>
									<div class="course-btn">
										<a href="{{ route('course_details', ['slug' => $course->slug]) }}">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@endforeach
			</div>
			
		</div>
		
	</div>
	<section class="py-5" style="background-color: #fff8f0;">
		<div class="container text-center">
			<div class="row g-4 justify-content-center">
				@php
					$stats = [
						['icon' => 'fa-chart-line', 'value' => '5/6', 'text' => 'Learners experienced career advancement'],
						['icon' => 'fa-bullseye', 'value' => '87%', 'text' => 'Achieved the program objectives'],
						['icon' => 'fa-lightbulb', 'value' => '82%', 'text' => 'Gained better clarity on the subject'],
						['icon' => 'fa-users', 'value' => '1k+', 'text' => 'Industry Experts & Mentors'],
						['icon' => 'fa-briefcase', 'value' => '71%', 'text' => 'Feel confident applying skills on the job'],
						['icon' => 'fa-check-circle', 'value' => '93%', 'text' => 'Program completion rate'],
					];
				@endphp
	
				@foreach($stats as $stat)
					<div class="col-6 col-md-4 col-lg-2">
						<div class="p-3 bg-white rounded-3 shadow-sm h-100">
							<div class="mb-2">
								<i class="fa {{ $stat['icon'] }} fa-2x text-warning"></i>
							</div>
							<h2 class="fw-bold text-warning" style="font-size: 2rem;">{{ $stat['value'] }}</h2>
							<p class="mb-0 small">{{ $stat['text'] }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	
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
						<h1>Climb your career ladder </h1>
						<h1>with world-class Professional.</h1>
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
	<section class="contact_area inner_section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- section title -->
					<div class="section-sub-title three">
						<h6><img src="assets/images/inner-img/sub-title2.webp" alt="icon">GET IN TOUCH</h6>
					</div>
					<div class="section_title">
						<h1>Trusted By the Genious</h1>
						<h1>People with EducateX</h1>
					</div>
					<div class="section-title-desc">
						<p>Media leadership skills before cross-media innovation main technology
							develop standardized platforms without consalt.</p>
					</div>
					<div class="contact_main_info">
						<div class="call-do-action-info">
							<div class="call-do-social_icon">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="call_info">
								<p>Call us Anytime</p>
								<h3>+123 - (4567) - 890</h3>
							</div>
						</div>
						<div class="call-do-action-info">
							<div class="call-do-social_icon">
								<i class="fas fa-envelope-open"></i>
							</div>
							<div class="call_info">
								<p>Call us Anytime</p>
								<h3>example@gmail.com</h3>
							</div>
						</div>
						<div class="call-do-action-info">
							<div class="call-do-social_icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="call_info">
								<p>Our Locations</p>
								<span>102/B Soltek New Elephant Road <br>California, USA</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- contact form box -->
					<div class="contact-form-box style_two">
						<!-- section title -->
						<div class="contact-section-title">
							<h4>CONTACT US</h4>
							<h1>Feel Free to Contact Us</h1>
						</div>
						<form action="https://formspree.io/f/myyleorq" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-box">
										<input type="text" name="name" placeholder="Your Name *">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-box">
										<input type="text" name="name" placeholder="Phone No">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-box">
										<input type="email" name="name" placeholder="Enter E-Mail *">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-box">
										<input type="text" name="name" placeholder="Select Subjects *">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-box message">
										<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Write Message :"></textarea>
									</div>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="vehicle1" name="vehicle1" value="agree">
									<label for="vehicle1">Agree with Terms and Conditions</label>
								</div>
								<div class="contact-form">
									<button type="submit">Send Message</button>
								</div>
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
			</div>
			<div class="contact_shape2 dance2">
				<img src="assets/images/inner-img/contact-shape.webp" alt="shape">
			</div>
		</div>
	</section>

@endsection