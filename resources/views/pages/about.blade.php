@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

	<!--==================================================-->
	<!-- Start educate Breadcumb Area -->
	<!--==================================================-->
	<style>
		.section-title-desc p {
			font-size: 13px;
			font-weight: 700;

		}
		section.about-area.style-three .section-title-desc p {
			margin: 0px;
		}
	</style>
	<div class="breadcumb-area d-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<div class="breadcumb-title">
							<h4>About Us</h4>
						</div>
						<ul>
							<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
							<li>About Us</li>
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
	<!--==================================================-->
	<!-- End educate Breadcumb Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate About Area style-three -->
	<!--==================================================-->
	<section class="about-area style-three inner">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12">
					<div class="about-thumb-wrapper">
						<div class="about-learn-box">
							<div class="about-learn-icon">
								<img src="{{ asset('assets/images/home-three/learn-icon.webp') }}" alt="icon">
							</div>
							<div class="learn-title">
								<h5>Learn Online
									Anywhere</h5>
							</div>
						</div>
						<div class="about-thumb">
							<img src="{{ asset('assets/images/home-three/about-thumb31.webp') }}" alt="thumb">
						</div>
						<div class="about-experience-box">
							<div class="about-experience-count">
								<h3 class="counter">16</h3>
								<span>+</span>
							</div>
							<div class="about-experience-desc">
								<p>Years of<br>
									Experiences</p>
							</div>
						</div>
						<div class="about-shape32">
							<img src="{{ asset('assets/images/home-three/about-shape32.webp') }}" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12">
					<div class="about_content">
						<!-- section title -->
						<div class="section-sub-title three">
							<h6><img src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon">ABOUT US</h6>
						</div>
						<div class="section-title-desc">
							<p>Digicrome is a leading ed-tech platform that helps students and professionals build
								successful careers with high-quality training. Our goal is to provide industry-focused
								skills through expert-designed courses.</p>
						</div>
						<div class="section-title-desc">
							<p>We offer 50+ live classes monthly across 60+ countries, impacting over 10,000 learners
								globally. Our programs include live interactive sessions, real-world projects, and a
								12-month internship to ensure hands-on learning.</p>
						</div>
						<div class="section-title-desc">
							<p>Our courses cover Data Science with AI, Data Science with Python, Business Development with
								Project Management, Full Stack Development, Cybersecurity, Big Data, Investment Banking,
								Digital Marketing, DevOps, Machine Learning, Advanced Python, Deep Learning, and NLP.</p>
						</div>
						<div class="section-title-desc">
							<p>We train students in the latest tools and software like ChatGPT, OpenAI, GeminiAI,
								DeepSeek.AI, Apache Hadoop, SAS Software, MATLAB, Jupyter, Python, TensorFlow, Scikit-learn,
								Tableau, and Power BI to keep them industry-ready.</p>
						</div>
						<div class="section-title-desc">
							<p>At Digicrome, we focus on personalized mentorship, industry-ready curriculum, and 100% job
								assistance, ensuring every student is job-ready from day one. With a strong network of 500+
								global hiring partners, our learners achieve up to 120% salary hikes and secure placements
								in top companies worldwide.</p>
						</div>
						<div class="about-iteam-list">
							<ul>
								<li><img src="{{ asset('assets/images/home-three/about-icon31.webp') }}" alt="icon">Course
									Catalog & Program Information</li>
								<li><img src="{{ asset('assets/images/home-three/about-icon31.webp') }}" alt="icon">Online
									Application & Admission Process</li>
								<li><img src="{{ asset('assets/images/home-three/about-icon31.webp') }}"
										alt="icon">Financial Aid and Scholarships</li>
							</ul>
						</div>
						<div class="about-iteam-phone">
							<p><span><img src="{{ asset('assets/images/home-three/about-call.webp') }}" alt="call"></span>+
								(680) 3290 570</p>
						</div>
						{{-- <div class="about-btn">
							<a href="about.html">more about<i class="flaticon flaticon-right-arrow"></i></a>
						</div> --}}

<div class="about-education-box">
  <div class="education-icon">
    <img src="{{ asset('assets/images/home-one/msme.webp') }}" alt="call">
  </div>
  <div class="education-content">
    <p>Trusted Online<br>
      And offline Best<br>
      Educations
    </p>
    <span>John Doe</span>
  </div>
</div>

<div class="about-shape31">
  <img src="{{ asset('assets/images/home-three/about-shape31.webp') }}" alt="shape">
</div>

	</section>
	<style>
	 .about-education-box{
        margin-right: 50%;
		height: 25%;
        width: 40%;
		}
		.education-content
		 {
    margin-left: 20%;
     }
	</style>
	<!--==================================================-->
	<!-- End educate About Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate feature Area style-two -->
	<!--==================================================-->
	<section class="feature-area style-two">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-feature-box box-1">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/home-three/feature-icon21.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">Flexible learning</h4>
							<p class="feature-desc">Flexible learning is the formal education method that focuses on
								increasing flexibility in the time, location, teaching, and other aspects of the
								learning.Flexible learning is a principle of practice in formal education.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-feature-box box-2">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/home-three/feature-icon22.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">Regular Assessments</h4>
							<p class="feature-desc">The regular assessment of students serves critical educational and
								life-learning functions. It focuses the efforts of educators and students on mastering
								important material.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-feature-box box-3">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/home-three/feature-icon23.webp') }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">Cost-effective</h4>
							<p class="feature-desc">Cost-effectiveness analysis is an evaluation tool Methods of
								cost-effectiveness analysis can assist the planner in evaluating educational programs. This
								concept should be broadened to include.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-shape21">
				<img src="{{ asset('assets/images/home-three/feature-shape21.webp') }}" alt="shape">
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate feature Area-->
	<!--==================================================-->
	<section class="py-5" style="background-color: #fef8f1;">
		<div class="container text-center">
			<!-- Headings -->
			<h2 class="fw-bold mb-2" style="color: #f29c12;">Our Journey</h2>
			<h5 class="text-muted mb-3">From 2019 to Infinity</h5>
			<p class="mb-5">We've been growing steadily year by year. Here's a glance at our progress through the years —
				and where we're headed.</p>

			<!-- Horizontal Timeline -->
			<div class="position-relative d-flex justify-content-between align-items-start flex-wrap border-top pt-4"
				style="border-color: #f29c12;">
				<!-- Timeline Item -->
				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<div class="rounded-circle mx-auto mb-2" style="width: 30px; height: 30px; background-color: #f29c12;">
					</div>
					<h6 class="fw-bold" style="color: #f29c12;">2019</h6>
					<p class="small text-muted">Small team, big dreams.</p>
				</div>

				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<div class="rounded-circle mx-auto mb-2" style="width: 30px; height: 30px; background-color: #f29c12;">
					</div>
					<h6 class="fw-bold" style="color: #f29c12;">2020</h6>
					<p class="small text-muted">First major project.</p>
				</div>

				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<div class="rounded-circle mx-auto mb-2" style="width: 30px; height: 30px; background-color: #f29c12;">
					</div>
					<h6 class="fw-bold" style="color: #f29c12;">2021</h6>
					<p class="small text-muted">Team expansion.</p>
				</div>

				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<div class="rounded-circle mx-auto mb-2" style="width: 30px; height: 30px; background-color: #f29c12;">
					</div>
					<h6 class="fw-bold" style="color: #f29c12;">2022</h6>
					<p class="small text-muted">Nationwide reach.</p>
				</div>

				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<div class="rounded-circle mx-auto mb-2" style="width: 30px; height: 30px; background-color: #f29c12;">
					</div>
					<h6 class="fw-bold" style="color: #f29c12;">2023</h6>
					<p class="small text-muted">International growth.</p>
				</div>

				<!-- Rocket End -->
				<div class="text-center flex-fill mx-2" style="min-width: 120px;">
					<img src="https://cdn-icons-png.flaticon.com/512/3210/3210034.png" alt="Rocket" width="40" class="mb-2">
					<h6 class="fw-bold" style="color: #f29c12;">2024 & Beyond</h6>
					<p class="small text-muted">To the stars!</p>
				</div>
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- Start educate course design offer Area -->
	<!--==================================================-->
	<div class="course-design-offer-area style-one inner">
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
	<!--==================================================-->
	<!-- Start educate call to action Area style-two -->
	<!--==================================================-->
	<div class="call-to-action style-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="call-to-title">
						<h3>Your Learning Journey Begins Here</h3>
						<h3>Explore – all programs Today</h3>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="call-to-btn">
						<a href="{{ route('course') }}">all programs<i class="flaticon flaticon-right-arrow"></i></a>
					</div>
				</div>
			</div>
			<div class="call-to-shape31">
				<img src="{{ asset('assets/images/home-three/call-to-arrow2.webp') }}" alt="shape">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate call to action Area style-two -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate team Area -->
	<!--==================================================-->
	{{-- <div class="team-area style-one inner">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-12 text-center">
					<div class="section-sub-title three">
						<h6><img src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon">INSTRUCTOR</h6>
					</div>
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
		</div>
	</div> --}}
	<!--==================================================-->
	<!-- end educate team Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start educate testimonial Area -->
	<!--==================================================-->
	<div class="testimonial-area style-inner">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-xl-4 col-lg-12">
					<div class="section-sub-title three">
						<h6><img src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon">Success Story</h6>
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
							<h3 class="counter">130</h3>
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
											<div class="testi-title">
												<h3>Success Story</h3>
											</div>
											<div class="testi-desc">
												<p>{{ $story->stoire }}</p>
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
											<div class="testi-autor-box">
												<div class="testi-autor">
													<img src="{{ asset('storage/' . $story->image) }}" alt="author" class="rounded-circle img-fluid" style="width: 70px; height: 70px; object-fit: cover;">
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
						<h1>Updates Digicrome Blog</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="row">
					@foreach($blogs as $blog)
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
	<!--==================================================-->
	<!-- end educate testimonial Area -->
	<!--==================================================-->
@endsection