@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
	<!--==================================================-->
	<!-- Start educate Hero Area Area style-one -->
	<!--==================================================-->
	<section class="hero_area style-one d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- hero content -->
					<div class="hero_content">
						<h5><i class="bi bi-check2"></i>100% Satisfaction Gaurantee</h5>
						<h1>Growup Your Learning</h1>
						<h1>Skills with Educate</h1>
						<p><strong>Educate</strong> the ultimate destination for knowledge seekers and educators alike.
							We are committed to transforming education</p>
						<!-- hero button -->
						<div class="hero-button">
							<div class="hero-btn">
								<a href="contact.html">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
							<div class="hero-course-btn">
								<a href="course.html">FIND COURSE<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="hero-rating-box">
						<div class="hero-rating-icon">
							<img src="{{ asset('assets/images/home-one/star-icon.webp') }}" alt="star">
							<span>1k+</span>
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
								<p>Students learn daily with
									educate platform</p>
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
						<h1>Interactive Online Learning</h1>
						<h1>Key Features & Benefits</h1>
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
							<h4 class="feature-title">Learning Experiences</h4>
							<p class="feature-desc">The ultimate destination for knowledge for
								We are committed to transforming</p>
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
							<h4 class="feature-title">Professional Instructor</h4>
							<p class="feature-desc">The ultimate destination for knowledge for
								We are committed to transforming</p>
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
							<h4 class="feature-title">Moneyback Gaurantee</h4>
							<p class="feature-desc">The ultimate destination for knowledge for
								We are committed to transforming</p>
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
							<h4 class="feature-title">Moneyback Gaurantee</h4>
							<p class="feature-desc">The ultimate destination for knowledge for
								We are committed to transforming</p>
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
							<h1>Who We Are – Introduction to</h1>
							<h1>Educate Online Platform</h1>
						</div>
						<div class="section-title-desc">
							<p>Educate the ultimate destination for knowledge seekers and educators alike.
								We are committed to transforming special education impact global channels
								without standards compliant systems</p>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('assets/images/home-one/about-icon.webp') }}"
											alt="icon">Innovative Learning System</span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('assets/images/home-one/about-icon.webp') }}"
											alt="icon">Worldwide Intelligent Learner</span>
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
										<p>Expert and Professional
											all Instructor</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-item-box two">
									<div class="about-iteam-count">
										<h3 class="counter">6</h3>
										<span>k+</span>
									</div>
									<div class="about-item-desc last">
										<p>Enrolled Students all<br>
											Over the World</p>
									</div>
								</div>
							</div>
						</div>
						<div class="about-btn">
							<a href="about.html">more about<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="about-shape4">
				<img src="{{ asset('assets/images/home-one/about-shape4.webp') }}" alt="shape4">
			</div>
			<div class="about-shape5">
				<img src="{{ asset('assets/images/home-one/about-shape5.webp') }}" alt="shape5">
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate About Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate Marquee Area-->
	<!--==================================================-->
	<div class="marquee-section">
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
	</div>
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
								<li data-filter=".Networking">Upcomeing Courses</li>
								<li data-filter="*" class="current_menu_item">Postgraduate And Master Programs</li>
								<li data-filter=".Wordpress">Professional Programs</li>
								<li data-filter=".Business">Language Programs</li>
								<li data-filter=".Networking">Certificate Programs</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- row2 -->
			<div class="row image_load">
				<div class="col-xl-3 col-lg-6 col-md-6 grid-item Wordpress Networking">
					<div class="case-study-single-box">
						<div class="case-study-thumb">
							<img src="{{ asset('assets/images/home-one/case-thumb1.webp') }}" alt="thumb">
							<div class="case-meta-top">
								<span>$30</span>
							</div>
						</div>
						<div class="case-study-content">
							<h5>Business</h5>
							<h4><a href="course.html">Business Innovation And
									Development</a></h4>
							<div class="case-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
								<div class="case-rating-num">
									<span>(4.5/3 Ratings)</span>
								</div>
							</div>
							<div class="case-autor-box">
								<div class="case-autor-img">
									<img src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
								</div>
								<div class="case-autor-content">
									<h3>John D. Alexon</h3>
									<p>Instractor</p>
								</div>
							</div>
							<div class="case-course-content">
								<div class="course-lesson">
									<span><i class="fa-regular fa-file-lines"></i> 12 Leasons</span>
								</div>
								<div class="course-student">
									<span><i class="fa-regular fa-user"></i> 1200 Students</span>
								</div>
							</div>
							<div class="course-btn">
								<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 grid-item Business Finance Wordpress">
					<div class="case-study-single-box box-2">
						<div class="case-study-thumb">
							<img src="{{ asset('assets/images/home-one/case-thumb2.webp') }}" alt="thumb">
							<div class="case-meta-top">
								<span>Free</span>
							</div>
						</div>
						<div class="case-study-content">
							<h5>Networking</h5>
							<h4><a href="course.html">Fundamentals of Network
									And Domains</a></h4>
							<div class="case-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
								<div class="case-rating-num">
									<span>(4.5/3 Ratings)</span>
								</div>
							</div>
							<div class="case-autor-box">
								<div class="case-autor-img">
									<img src="{{ asset('assets/images/home-one/case-autor2.webp') }}" alt="autor">
								</div>
								<div class="case-autor-content">
									<h3>David Watson</h3>
									<p>Instractor</p>
								</div>
							</div>
							<div class="case-course-content">
								<div class="course-lesson">
									<span><i class="fa-regular fa-file-lines"></i> 16 Leasons</span>
								</div>
								<div class="course-student">
									<span><i class="fa-regular fa-user"></i> 1500 Students</span>
								</div>
							</div>
							<div class="course-btn">
								<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 grid-item Networking Designing Business">
					<div class="case-study-single-box box-3">
						<div class="case-study-thumb">
							<img src="{{ asset('assets/images/home-one/case-thumb3.webp') }}" alt="thumb">
							<div class="case-meta-top">
								<span>$35</span>
							</div>
						</div>
						<div class="case-study-content">
							<h5>Designing</h5>
							<h4><a href="course.html">Creative Graphic Design
									with Adobe Suite</a></h4>
							<div class="case-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
								<div class="case-rating-num">
									<span>(4.5/3 Ratings)</span>
								</div>
							</div>
							<div class="case-autor-box">
								<div class="case-autor-img">
									<img src="{{ asset('assets/images/home-one/case-autor3.webp') }}" alt="autor">
								</div>
								<div class="case-autor-content">
									<h3>Nelson Mendela</h3>
									<p>Instractor</p>
								</div>
							</div>
							<div class="case-course-content">
								<div class="course-lesson">
									<span><i class="fa-regular fa-file-lines"></i> 15 Leasons</span>
								</div>
								<div class="course-student">
									<span><i class="fa-regular fa-user"></i> 1600 Students</span>
								</div>
							</div>
							<div class="course-btn">
								<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 grid-item Networking Designing Business">
					<div class="case-study-single-box box-3">
						<div class="case-study-thumb">
							<img src="{{ asset('assets/images/home-one/case-thumb3.webp') }}" alt="thumb">
							<div class="case-meta-top">
								<span>$35</span>
							</div>
						</div>
						<div class="case-study-content">
							<h5>Designing</h5>
							<h4><a href="course.html">Creative Graphic Design
									with Adobe Suite</a></h4>
							<div class="case-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
								<div class="case-rating-num">
									<span>(4.5/3 Ratings)</span>
								</div>
							</div>
							<div class="case-autor-box">
								<div class="case-autor-img">
									<img src="{{ asset('assets/images/home-one/case-autor3.webp') }}" alt="autor">
								</div>
								<div class="case-autor-content">
									<h3>Nelson Mendela</h3>
									<p>Instractor</p>
								</div>
							</div>
							<div class="case-course-content">
								<div class="course-lesson">
									<span><i class="fa-regular fa-file-lines"></i> 15 Leasons</span>
								</div>
								<div class="course-student">
									<span><i class="fa-regular fa-user"></i> 1600 Students</span>
								</div>
							</div>
							<div class="course-btn">
								<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="case-shape1">
				<img src="{{ asset('assets/images/home-one/case-shape1.webp') }}" alt="shape">
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
							<h1>Innovative and effective</h1>
							<h1>learning approaches</h1>
						</div>
						<div class="section-title-desc">
							<p>Educate the ultimate destination for knowledge seekers and educators alike.
								We are committed to transforming special education impact global channels
								without standards compliant systems</p>
						</div>
						<div class="choose-item-menu">
							<ul>
								<li><img src="{{ asset('assets/images/home-one/choose-icon1.webp') }}" alt="icon">Course
									Management</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon2.webp') }}" alt="icon">Students
									Progress Tracking</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon3.webp') }}"
										alt="icon">Interactive Live Class</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon4.webp') }}" alt="icon">Quiz and
									Assignments</li>
							</ul>
						</div>
						<p class="choose-suport-des"><img src="{{ asset('assets/images/home-one/top-star.webp') }}"
								alt="star">24/7 Hrs Ready to our support team</p>
						<div class="choose-btn">
							<a href="choose.html">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
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
	<div class="course-design-offer-area style-one">
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
								<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
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
	</div>
	<!--==================================================-->
	<!-- end educate course design offer Area -->
	<!--==================================================-->
	<section class="video-slider">
		<div class="container">
			<h2 class="text-center mb-5" style="color: #f29c12;">Our Featured Videos</h2>
			<div id="vimeoCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">

					<div class="carousel-item active">
						<div class="row justify-content-center">
							<div class="col-md-6 col-lg-4 mb-4">
								<div class="video-card">
									<iframe src="https://player.vimeo.com/video/76979871" frameborder="0"
										allowfullscreen></iframe>
									<div class="video-title">Exploring the Mountains</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 mb-4">
								<div class="video-card">
									<iframe src="https://player.vimeo.com/video/22439234" frameborder="0"
										allowfullscreen></iframe>
									<div class="video-title">Creative Animation</div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="row justify-content-center">
							<div class="col-md-6 col-lg-4 mb-4">
								<div class="video-card">
									<iframe src="https://player.vimeo.com/video/146022717" frameborder="0"
										allowfullscreen></iframe>
									<div class="video-title">Nature Walk</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 mb-4">
								<div class="video-card">
									<iframe src="https://player.vimeo.com/video/1084537" frameborder="0"
										allowfullscreen></iframe>
									<div class="video-title">Art in Motion</div>
								</div>
							</div>
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
	</section>
	<style>
		.video-slider {
			background-color: #fef8f1;
			padding: 40px 0;
		}

		.video-card {
			position: relative;
			overflow: hidden;
			border-radius: 15px;
			transition: transform 0.3s ease;
			max-width: 100%;
			aspect-ratio: 16 / 9;
		}

		.video-card iframe {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.video-title {
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

		.video-card:hover .video-title {
			opacity: 1;
		}

		.carousel-control-prev-icon,
		.carousel-control-next-icon {
			background-color: #f29c12;
			border-radius: 50%;
		}
	</style>
	<!--==================================================-->
	<!-- Start educate team Area -->
	<!--==================================================-->
	<div class="team-area style-one">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>INSTRUCTOR</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>Introducing the Educators and</h1>
						<h1>Professional Instructor</h1>
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
	</div>
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
						<h1>Real Experiences From Our</h1>
						<h1>Dedicated Learners</h1>
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
							<div class="col-lg-12">
								<div class="testi-box">
									<div class="single-testi-box">
										<div class="testi-quote">
											<img src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="quote">
										</div>
										<div class="testi-title">
											<h3>Impresive Learning!</h3>
										</div>
										<div class="testi-desc">
											<p>Educate the ultimate destination for knowledge seekers and
												educators we are committed to transforming special education
												impact global channels without standards compliant systems
												attractive learning opinions.</p>
										</div>
										<div class="testi-ratting">
											<ul>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
											</ul>
										</div>
									</div>
									<div class="testi-autor-box">
										<div class="testi-autor">
											<img src="{{ asset('assets/images/home-one/testi-autor1.webp') }}" alt="autor">
										</div>
										<div class="testi-autor-content">
											<h5 class="autor-title">Sonia Sara</h5>
											<p class="autor-desi">Students</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="testi-box">
									<div class="single-testi-box">
										<div class="testi-quote">
											<img src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="quote">
										</div>
										<div class="testi-title">
											<h3>Impresive Learning!</h3>
										</div>
										<div class="testi-desc">
											<p>Educate the ultimate destination for knowledge seekers and
												educators we are committed to transforming special education
												impact global channels without standards compliant systems
												attractive learning opinions.</p>
										</div>
										<div class="testi-ratting">
											<ul>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
											</ul>
										</div>
									</div>
									<div class="testi-autor-box">
										<div class="testi-autor">
											<img src="{{ asset('assets/images/home-one/testi-autor3.webp') }}" alt="autor">
										</div>
										<div class="testi-autor-content">
											<h5 class="autor-title">Nur Islam</h5>
											<p class="autor-desi">Students</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="testi-box">
									<div class="single-testi-box">
										<div class="testi-quote">
											<img src="{{ asset('assets/images/home-one/testi-quote.webp') }}" alt="quote">
										</div>
										<div class="testi-title">
											<h3>Impresive Learning!</h3>
										</div>
										<div class="testi-desc">
											<p>Educate the ultimate destination for knowledge seekers and
												educators we are committed to transforming special education
												impact global channels without standards compliant systems
												attractive learning opinions.</p>
										</div>
										<div class="testi-ratting">
											<ul>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
											</ul>
										</div>
									</div>
									<div class="testi-autor-box">
										<div class="testi-autor">
											<img src="{{ asset('assets/images/home-one/testi-autor4.webp') }}" alt="autor">
										</div>
										<div class="testi-autor-content">
											<h5 class="autor-title">Saifur Rahman</h5>
											<p class="autor-desi">Students</p>
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
						<h3>Learn Anytime, Anywhere</h3>
						<h3>Start Your Free Trial!</h3>
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
								<h4>+123 (4567) 890</h4>
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
	<!--==================================================-->
	<!-- end educate call to action Area -->
	<!--==================================================-->
	<section class="py-5">
		<div class="container text-center">
			<h1 class="fw-bold" style="color: #f29c12;">Data Science with AI Certification Course Journey</h1>
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
							<h6>Explore Exciting Career Opportunities in Data Science and AI</h6>
						</div>
						<div class="section_title">
							<h1>Understand different roles</h1>
							<h1>And learn effortlessly.</h1>
						</div>
						<div class="section-title-desc">
							<p>Discover the limitless opportunities in the dynamic field of data science and artificial
								intelligence. Dive into a world of endless possibilities as you prepare for a highly
								demanded career.</p>
						</div>
						<div class="choose-item-menu">
							<ul>
								<li><img src="{{ asset('assets/images/home-one/choose-icon1.webp') }}" alt="icon">400 +
									Global Companies</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon2.webp') }}" alt="icon">8 LPA
									Average CTC</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon3.webp') }}" alt="icon">32.7 LPA
									Highest CTC</li>
								<li><img src="{{ asset('assets/images/home-one/choose-icon4.webp') }}" alt="icon">84 %
									Average Hike</li>
							</ul>
						</div>
						<p class="choose-suport-des"><img src="{{ asset('assets/images/home-one/top-star.webp') }}"
								alt="star">Embark on a journey of innovation in data science and AI.</p>
						<div class="choose-btn">
							<a href="choose.html">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
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
						<h6>LATEST BLOG</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>Read the Latest Insights and</h1>
						<h1>Updates Educate Blog</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-blog-box box-1">
						<div class="single-blog-thumb">
							<img src="{{ asset('assets/images/home-one/blog-thumb1.webp') }}" alt="thumb">
							<div class="blog-meta-top">
								<span>28 JAN</span>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-author">
								<h4><img src="{{ asset('assets/images/home-one/blog-autor1.webp') }}" alt="autor">John D.
									Alexon</h4>
							</div>
							<div class="blog-title">
								<h3><a href="blog-details.html">10 Proven Strategies to excel
										Online Learning</a></h3>
							</div>
							<div class="blog-btn">
								<a href="blog-details.html">Continue Reading <img
										src="{{ asset('assets/images/home-one/blog-icon1.webp') }}" alt="icon"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-blog-box box-2">
						<div class="single-blog-thumb">
							<img src="{{ asset('assets/images/home-one/blog-thumb2.webp') }}" alt="thumb">
							<div class="blog-meta-top">
								<span>29 JAN</span>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-author">
								<h4><img src="{{ asset('assets/images/home-one/blog-autor2.webp') }}" alt="autor">Anjelina
									Watson</h4>
							</div>
							<div class="blog-title">
								<h3><a href="blog-details.html">Trends that are shaping the
										Learning experience</a></h3>
							</div>
							<div class="blog-btn">
								<a href="blog-details.html">Continue Reading <img
										src="{{ asset('assets/images/home-one/blog-icon2.webp') }}" alt="icon"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-blog-box box-3">
						<div class="single-blog-thumb">
							<img src="{{ asset('assets/images/home-one/blog-thumb3.webp') }}" alt="thumb">
							<div class="blog-meta-top">
								<span>30 JAN</span>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-author">
								<h4><img src="{{ asset('assets/images/home-one/blog-autor3.webp') }}" alt="autor">David X.
									Barmer</h4>
							</div>
							<div class="blog-title">
								<h3><a href="blog-details.html">Learning is the Key soft skills
										and Professional</a></h3>
							</div>
							<div class="blog-btn">
								<a href="blog-details.html">Continue Reading <img
										src="{{ asset('assets/images/home-one/blog-icon3.webp') }}" alt="icon"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="company-form contactpage-form" style=" padding-top:10px;">
		<div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
			<!-- <h1 class="section__title"  style="text-align: center; padding-bottom:40px;"><b>Unveiling <span class="yellow-bg"> Digicrome<img src="https://digicrome.com/public/www/assets/img/shape/yellow-bg-2.png" alt=""></span> Distinct Culture</b></h1> -->

		</div>
		<div>
			<div class="gall-inn">
				<div class="col-sm-6 col-md-2">
					<div class="gal-im animate animate__animated animate__slow" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2a.webp" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2b.webp" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2c.webp" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2d.webp" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-2">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2e.webp" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2f.webp" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2g.webp" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2h.webp" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2i.webp" class="gal-siz-2" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
						</div>
					</div>
					<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
						<img src="https://digicrome.com/public/www/seoimg/2j.webp" class="gal-siz-1" alt="digicrome_images"
							loading="lazy">
						<div class="txt">
							<span>Digicrome</span>
							<h4>Fun @ Days</h4>
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
			margin-bottom: 30px;
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



@endsection