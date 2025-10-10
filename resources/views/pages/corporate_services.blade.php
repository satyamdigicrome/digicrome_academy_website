@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
@include('components.lead-form-popup')

<div class="corporate-img d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4>Corporate Services</h4>
					</div>
					{{-- <ul>
							<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
							<li>Corporate Services</li>
						</ul> --}}
				</div>
			</div>
		</div>
		{{-- <div class="breadcumb-shape">
			<img loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot" title="dot">
		</div> --}}
		<div class="breadcumb-shape2">
			<img loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball" title="ball">
		</div>
	</div>
</div>
<section class="py-5" style="background-color: #fff8f0;">
	<div class="container">
		<div class="row align-items-center">

			<!-- Left: Image -->
			<div class="col-md-6 mb-4 mb-md-0 text-center">
				<img loading="lazy" src="{{ asset('assets/images/cor.webp') }}" alt="Main Image" title="Main Image"
					class="img-fluid rounded" style="max-width: 100%; aspect-ratio: 1/1; object-fit: cover;">
			</div>

			<!-- Right: Text + Logos -->
			<div class="col-md-6">
				<div class="section_title">
					<p class="fw-bold mb-2 text-warning fs-2">Amplifying Growth, Achieving Impact</p>
				</div>
				<h5 class="text-muted mb-4">Customer Success Stories</h5>
				<!-- Logo Grid -->
				<div class="row g-3">
					@foreach($companyLogos->take(16) as $logo)
					<div class="col-3 text-center">
						<img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="Logo" title="Logo" class="img-fluid">
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
					<p class="display-6 fw-bold">Moments of Honour</p>
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
						<span><b> Successpreneur Award 2025 </b> for best analytics EdTech business</span>
					</li>
					<li class="d-flex align-items-start">
						<i class="bi bi-trophy-fill text-warning me-2 mt-1"></i>
						<span><b>Most Promising Digital Learning Platform 2025.</span>
					</li>
				</ul>
			</div>

			<div class="col-lg-7 mt-4">
				<div class="brand-list owl-carousel">
					@foreach($awords as $logo)
					<div class="col-lg-12">
						<div class="single-brand-box">
							<div class="brand-thumb">
								<img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand" title="brand">
							</div>
						</div>
					</div>
					@endforeach
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
					<p class="fs-2 fw-semibold mb-1">Our Courses – Comprehensive</p>
					<p class="fs-2 fw-semibold">Available all programs</p>
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
			@foreach($upcomingCourses as $course)
			<div class="col-xl-3 col-lg-6 col-md-6 grid-item Upcoming">
				<div class="case-study-single-box">
					{{-- Use same HTML course card template --}}
					<div class="case-study-thumb">
						<img loading="lazy" src="{{ asset('storage/' . $course->image) }}" alt="thumb" title="thumb">
						{{-- <div class="case-meta-top">
									<span>{{ $course->course_free ? 'Free' : '$' . $course->price }}</span>
					</div> --}}
				</div>
				<div class="case-study-content">
					<h5>Courses</h5>
					<h4><a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a></h4>
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
				<a href="{{ route('course_details', ['slug' => $course->slug]) }}">EXPLORE NOW<i class="flaticon flaticon-right-arrow"></i></a>
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
			<img loading="lazy" src="{{ asset('storage/' . $course->image) }}" alt="thumb" title="thumb">
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
	<a href="{{ route('course_details', ['slug' => $course->slug]) }}">EXPLORE NOW<i class="flaticon flaticon-right-arrow"></i></a>
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
				<div class="section_title text-right">
					<div class="fs-1 fw-bold mb-1">Climb your career ladder</div>
					<div class="fs-1 fw-bold">with world-class Professionals.</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-feature-box box-1">
					<div class="feature-icon">
						<img loading="lazy" src="{{ asset('assets/images/home-one/feature-icon1.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">500+ Hiring Partners</h4>
						<p class="feature-desc">We provide placement assistance through partnerships with 500+ global hiring partners to assist students in securing job opportunities.</p>
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
						<img loading="lazy" src="{{ asset('assets/images/home-one/feature-icon2.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">45+ Industry-Relevant Projects</h4>
						<p class="feature-desc">Work on our industry-based live projects to harness top-level industry experience and to gain real-world experience and build a successful career.</p>
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
						<img loading="lazy" src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">60+ Topic-Wise Case Studies</h4>
						<p class="feature-desc">Access 60+ relevant case studies and assignments to achieve a strong foundation, with 24/7 support available.</p>
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
						<img loading="lazy" src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Job Ready Program</h4>
						<p class="feature-desc">Exclusive placement cell dedicated to students completing the course, we help secure job opportunities. So far, we have successfully placed 5,000+ students.</p>
					</div>
					<div class="educate-hover-box hover-bx"></div>
					<div class="educate-hover-box hover-bx2"></div>
					<div class="educate-hover-box hover-bx3"></div>
					<div class="educate-hover-box hover-bx4"></div>
				</div>
			</div>
		</div>
		<div class="feature-shape1">
			<img loading="lazy" src="{{ asset('assets/images/home-one/feature-shape1.webp') }}" alt="shape" title="shape">
		</div>
		<div class="feature-shape2 rotateme">
			<img loading="lazy" src="{{ asset('assets/images/home-one/feature-shape2.webp') }}" alt="shape2" title="shape2">
		</div>
	</div>
</section>
<section class="contact_area inner_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<!-- section title -->
				<div class="section-sub-title three">
					<h6><img loading="lazy" src="assets/images/inner-img/sub-title2.webp" alt="icon" title="icon">GET IN TOUCH</h6>
				</div>
				<div class="section_title text-left">
					<div class="fs-1 fw-bold mb-1">Trusted By the Genius</div>
					<div class="fs-1 fw-bold">People with EducateX</div>
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
							<h3> 01204538125</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-envelope-open"></i>
						</div>
						<div class="call_info">
							<p>Email us Anytime</p>
							<h3>info@digicrome.com</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="call_info">
							<p>Our Locations</p>
							<span>B-49, First Floor, Block B, Sector 59, <br>Noida, Uttar Pradesh 201301</span>
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
					<form style="width:100%; background:transparent; margin:0px;" class="form" method="post"
						action="https://demo.digicrome.com/post_lead.php">
						@csrf
						<h2 style="    color: #f29c12;"> Register now!! And get a quick call</h2>
						<div class="form-field">
							<!--<label style="color:#fff;" for="name">Name:</label> -->
							<input type="text" id="name" name="name" placeholder="Name">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="mobile">Mobile Number:</label> -->
							<input type="tel" pattern="\d{10}" title="Please enter a 10-digit mobile number"  id="mobile" name="mobile" placeholder="Mobile Number">
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
								<option value="Working Professional - Technincal Roles">Working Professional -
									Technincal Roles</option>
								<option value="Working Professional - Non Technincal">Working Professional - Non
									Technincal</option>
								<option value="College Student - Final Year">College Student - Final Year</option>
								<option value="College Student - 1st to pre-final Year">College Student - 1st to
									pre-final Year</option>
								<option value="Other">Other</option>
							</select>
						</div>

						<div class="form-field">
							<input type="hidden" id="mobile" name="source" Value="Home Page"
								placeholder="Mobile Number">
						</div>
						<input type="hidden" name="ib" value="">
						<div class="form-field">
							<input type="hidden" id="mobile" name="country" value="india"
								placeholder="Mobile Number">
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

						<p style="    line-height: 30px;">By submitting the form, you agree to our <a href="">Terms
								and Conditions</a> and our <a href="https://digicrome.com/privacy-policy">Privacy
								Policy.</a> </p><br>
						<button type="submit">Submit</button>
					</form>
					<div id="status"></div>
				</div>
			</div>
		</div>
		<div class="contact_shape2 dance2">
			<img loading="lazy" src="assets/images/inner-img/contact-shape.webp" alt="shape" title="shape">
		</div>
	</div>
</section>

@endsection