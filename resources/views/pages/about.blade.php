@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
@include('components.lead-form-popup')

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
<section class="about-area style-three inner">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-12">
				<div class="about-thumb-wrapper">
					<div class="about-learn-box">
						<div class="about-learn-icon">
							<img loading="lazy" src="{{ asset('assets/images/home-three/learn-icon.webp') }}" alt="icon" title="icon">
						</div>
						<div class="learn-title">
							<h5>Learn Online
								Anywhere</h5>
						</div>
					</div>
					<div class="about-thumb">
						<img loading="lazy" src="{{ asset('assets/images/home-three/about-thumb31.webp') }}" alt="thumb" title="thumb">
					</div>
					<div class="about-experience-box">
						<div class="about-experience-count">
							<h3 class="counter">10</h3>
							<span>+</span>
						</div>
						<div class="about-experience-desc">
							<p>Years of<br>
								Experience</p>
						</div>
					</div>
					<div class="about-shape32">
						<img loading="lazy" src="{{ asset('assets/images/home-three/about-shape32.webp') }}" alt="shape" title="shape">
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12">
				<div class="about_content">
			
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
						<li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}" alt="icon31" title="icon31">Course
							Catalog & Program Information</li>
						<li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}" alt="icon31" title="icon31">Online
							Application & Admission Process</li>
						<li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}"
								alt="icon31" title="icon31">Financial Aid and Scholarships</li>
					</ul>
				</div>
				<div class="about-iteam-phone">
					<p><span><img loading="lazy" src="{{ asset('assets/images/home-three/about-call.webp') }}" alt="call" title="call"></span>
						 01204538125</p>
				</div>
			

		<div class="about-shape31">
			<img loading="lazy" src="{{ asset('assets/images/home-three/about-shape31.webp') }}" alt="shape" title="shape">
		</div>

</section>
<style>
	.about-education-box {
		margin-right: 50%;
		height: 25%;
		width: 40%;
	}

	.education-content {
		margin-left: 20%;
	}
</style>
@if($userCountry === 'India')
<div class="container my-5">
	<div class="row align-items-center">
		<div class="col-md-6 mb-4 mb-md-0">
			<img loading="lazy" src="{{ asset('assets/images/home-one/msme.webp') }}" alt="Education Image" title="Education Image" class="img-fluid rounded shadow">
		</div>
		<div class="col-md-6">
			<div class="p-3">
				<h3 class="mb-3" style="font-style: italic;">Certified - Online Learning Platform </h3>
				<p class="text-muted">
					Our company is certified by MSME and MCA, and we are proud to be registered with these organizations.
				</p>
			</div>
		</div>
	</div>
</div>
@else
@endif
<section class="feature-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="single-feature-box box-1">
					<div class="feature-icon">
						<img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon21.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Flexible Learning</h4>
						<p class="feature-desc">Flexible learning is the formal education method that focuses on
							increasing flexibility in the time, location, teaching, and other aspects of the
							learning.Flexible learning is a principle of practice in formal education.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="single-feature-box box-2">
					<div class="feature-icon">
						<img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon22.webp') }}" alt="feature-icon" title="feature-icon">
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
						<img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon23.webp') }}" alt="feature-icon" title="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Cost-Effective</h4>
						<p class="feature-desc">Cost-effectiveness analysis is an evaluation tool Methods of
							cost-effectiveness analysis can assist the planner in evaluating educational programs. This
							concept should be broadened to include.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="call-to-action style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="call-to-title">
					<h3>Start learning from Anywhere!</h3>
					<h3>Anytime, get a free trial.</h3>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="call-to-btn">
					<a href="{{ route('course') }}">all programs<i class="flaticon flaticon-right-arrow"></i></a>
				</div>
			</div>
		</div>
		<div class="call-to-shape31">
			<img loading="lazy" src="{{ asset('assets/images/home-three/call-to-arrow2.webp') }}" alt="shape" title="shape">
		</div>
	</div>
</div>

<div class="testimonial-area style-inner">
	<div class="container">
		<div class="row section-title-space">
			<div class="col-xl-4 col-lg-12">
				<div class="section-sub-title three">
					<h6><img loading="lazy" src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon" title="icon">Success Stories</h6>
				</div>
				<div class="section_title text-left">
					<div class="fs-1 fw-bold mb-1">All Real Experiences</div>
					<div class="fs-1 fw-bold mb-1">From Our Dedicated</div>
					<div class="fs-1 fw-bold">Learners</div>
				</div>

				<div class="testi-review-box">
					<div class="review-image">
						<img loading="lazy" src="{{ asset('assets/images/home-three/course-instructor.webp') }}" alt="instructor" title="instructor">
					</div>
					<div class="testi-review-content">
						<h3 class="counter">130</h3>
						<span>+</span>
						<p>Reviews</p>
					</div>
					<div class="testi-inner-shape">
						<img loading="lazy" src="{{ asset('assets/images/inner-img/testi-shape-in.webp') }}" alt="arrow" title="arrow">
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
										<img loading="lazy" src="{{ asset('assets/images/home-three/testi-quote.webp') }}" alt="quote" title="quote">
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
											<img loading="lazy" src="{{ asset('storage/' . $story->image) }}" alt="author" title="author" class="rounded-circle img-fluid" style="width: 70px; height: 70px; object-fit: cover;">
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

<div class="testimonial-area style-two mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="section-sub-title two">
					<h6><img loading="lazy" src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}" alt="icon" title="icon">TESTIMONIALS</h6>
				</div>
				<div class="section_title text-left">
					<div class="fs-2 fw-bold mb-1">What Students Say About</div>
					<div class="fs-2 fw-bold">Digicrome Experience</div>
				</div>

				<div class="section-title-desc two">
					<p>Students love the hands-on learning, expert mentors, and real-world projects that make the Digicrome experience truly exceptional.</p>
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
								<div class="testi-quote" style="font-size:18px; font-weight:600; color:#f29c12; margin:10px 0;">
									{{ $testimonial->tagline }}
								</div>

								<div class="testi-desc">
									<p>“{{ $testimonial->review }}</p>
								</div>
								<div class="testi-ratting" style="display:flex; list-style:none; padding:0; margin:0;">
									@for ($i = 1; $i <= 5; $i++)
										@if ($i <=floor($testimonial->rating))
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
										<img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}" alt="author" title="author" style="width:80px; height:80px; border-radius:50%; object-fit:cover; border:2px solid #f29c12;">
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
								<img loading="lazy"src="{{ asset('assets/images/home-one/call-icon.webp') }}" alt="call-to-icon" title="call-to-icon" >
							</div>
							<div class="call-to-content">
								<h6>Call Anytime</h6>
								<h4> 01204538125</h4>
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
	</div>
	<div class="blog-area style-one">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>LATEST BLOGS & RECENT UPDATES</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>Read out our latest updates</h1>
						<h1> from digicrome</h1>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="row">
				@foreach($blogs as $blog)
				<div class="col-xl-4 col-lg-12 col-md-4">
					<div class="single-blog-box box-1">
						<div class="single-blog-thumb">
							<img loading="lazy" src="{{ asset('storage/' . $blog->blog_image) }}" alt="single-blog-thumb" title="single-blog-thumb" class="img-fluid">
							<div class="blog-meta-top">
								<span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-author">
								<h4 style="display: flex; align-items: center; gap: 10px;">
									@if($blog->author_image)
									<img loading="lazy" src="{{ asset('storage/' . $blog->author_image) }}" alt="author" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
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
									<img loading="lazy" src="{{ asset('assets/images/home-one/blog-icon1.webp') }}" alt="icon" title="icon">
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
@endsection