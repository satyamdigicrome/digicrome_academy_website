@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@section('content')
    @include('components.lead-form-popup')

    <style>
        .section-title-desc p {
            font-size: 13px;
            font-weight: 500;
        }

        section.about-area.style-three .section-title-desc p {
            margin: 0px;
            text-align: justify;
        }
    </style>
    <style>
        .about-banner-wrapper {
            width: 100%;
            overflow: hidden;
        }

        .about-banner-image {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        @media (max-width: 767px) {
            .about-banner-wrapper {
                margin-top: 70px;
            }
        }

        .about-iteam-list ul li {
            display: flex;
            align-items: center;
            gap: 2px;
            margin-bottom: 10px;
        }

        .about-thumb-single {
            height: 100%;
        }

        .about-thumb-single img {
            width: 100%;
            height: 650px;
            object-fit: cover;
            border-radius: 20px;
        }

        section.about-area.style-three {
            padding: 50px 0;
        }

        .achievement-banner-section {
            background: #fff;
        }

        .achievement-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #222;
        }

        .achievement-subtitle {
            max-width: 850px;
            margin: 0 auto;
            font-size: 17px;
            line-height: 1.8;
            color: #666;
        }

        .achievement-banner {
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .achievement-banner img {
            width: 100%;
            height: auto;
            display: block;
        }
        .testimonial-area.style-inner {
            padding: 30px 0 0px;
        }
        .testimonial-area.style-two {
            padding: 50px 0px;
        }
    </style>
    <section class="about-banner-wrapper">
        <picture>
            <source media="(max-width: 767px)" srcset="{{ asset('assets/images/about-banner-mobile.webp') }}">
            <img src="{{ asset('assets/images/about-banner-desktop.webp') }}" alt="About Us Banner" class="about-banner-image">
        </picture>
    </section>
    <section class="about-area style-three inner">
        <div class="container">
            <h1 class="title fw-bold fs-1 text-center mb-3">About Digicrome</h1>
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="about-thumb-single">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{ asset('assets/images/founders/bothmb.webp') }}">

                            <img loading="lazy" src="{{ asset('assets/images/founders/both.webp') }}" alt="About Digicrome"
                                class="img-fluid w-100">
                        </picture>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about_content">
                        <div class="section-title-desc mb-2">
                            <p>Digicrome is a leading Digital EdTech platform founded by Mr. Parichit Bhamri and Mr. Ranvir
                                Rawal, with a vision to provide access to online education for students and working
                                professionals. We have a dedicated team of experts who
                                empower and motivate students and working professionals by delivering them high-quality,
                                industry-based knowledge with the best certification courses. We are equipped with the
                                latest technologies, which provide learners with positive learning experiences. Our
                                environment is where knowledge is experienced, appropriate, and future-ready. </p>
                        </div>
                        <div class="section-title-desc mb-2">
                            <p>Our programs have equipped 20,000+ learners with in-demand skills across domains such as Data
                                Science, Artificial Intelligence, and Cybersecurity. We ensure they stay passionate in a
                                fast-changing workplace around the world. At the center of Digicrome’s principles is
                                experiential subject learning. Through live doubt sessions, 30+ real-world projects, and a
                                full-time internship facility, our learners gain industry-level knowledge. </p>
                        </div>
                        <div class="section-title-desc">
                            <p>Our courses help them prepare for real-world challenges. This approach not only enhances
                                their knowledge but also builds their logical, critical thinking, and professional skills.
                                We trust that education should lead to profitable results. With an increasing global
                                community and expanding 500+ industry partnerships, Digicrome continues to lead in the
                                digital or online education sector. This makes us more approachable, realistic, and aligned
                                with today’s every industry's needs. </p>
                        </div>
                        <div class="about-iteam-list mt-3">
                            <ul>
                                <li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}"
                                        alt="icon31" title="icon31">Course
                                    Catalog & Program Information</li>
                                <li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}"
                                        alt="icon31" title="icon31">Online
                                    Application & Admission Process</li>
                                <li><img loading="lazy" src="{{ asset('assets/images/home-three/about-icon31.webp') }}"
                                        alt="icon31" title="icon31">Financial Aid and Scholarships</li>
                            </ul>
                        </div>
                        <div class="about-iteam-phone">
                            <p><span><img loading="lazy" src="{{ asset('assets/images/home-three/about-call.webp') }}"
                                        alt="call" title="call"></span>
                                01204538125</p>
                        </div>


                        <div class="about-shape31">
                            <img loading="lazy" src="{{ asset('assets/images/home-three/about-shape31.webp') }}"
                                alt="shape" title="shape">
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
    @if ($userCountry === 'India')
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img loading="lazy" src="{{ asset('assets/images/home-one/msme.webp') }}" alt="Education Image"
                        title="Education Image" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <div class="p-3">
                        <h2 class="mb-3" style="font-style: italic;">Certified - Online Learning Platform </h2>
                        <p class="text-muted">
                            We are proud to be MSME and MCA certified, ensuring credibility and trust.
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
                            <img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon21.webp') }}"
                                alt="feature-icon" title="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title fs-4">Flexible Learning</h3>
                            <p class="feature-desc">Flexible learning increases flexibility in time, location, teaching
                                methods, and other aspects of education. Flexible learning is a principle of practice in
                                formal education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-feature-box box-2">
                        <div class="feature-icon">
                            <img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon22.webp') }}"
                                alt="feature-icon" title="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title fs-4">Regular Assessments</h3>
                            <p class="feature-desc">The regular assessment of students serves critical educational and
                                life-learning functions. It focuses the efforts of educators and students on mastering
                                important material.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-feature-box box-3">
                        <div class="feature-icon">
                            <img loading="lazy" src="{{ asset('assets/images/home-three/feature-icon23.webp') }}"
                                alt="feature-icon" title="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title fs-4">Cost-Effective</h3>
                            <p class="feature-desc">Cost-effectiveness analysis is a valuable tool for evaluating
                                educational programs, helping planners optimize learning outcomes while reducing costs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="call-to-action style-two">
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
    </div> --}}

    <section class="achievement-banner-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="achievement-title">
                    Celebrating Excellence & Achievements
                </h2>

                <p class="achievement-subtitle">
                    Over the years, Digicrome has earned recognition for innovation,
                    educational excellence, and commitment to student success across
                    the globe.
                </p>
            </div>
            <div class="achievement-banner">
                <img src="{{ asset('assets/images/aboutmilestone.webp') }}" alt="Digicrome Achievements"
                    title="Digicrome Achievements" class="img-fluid">
            </div>

        </div>
    </section>
    <div class="testimonial-area style-inner">
        <div class="container">
            <div class="row section-title-space">
                <div class="col-xl-4 col-lg-12">
                    <div class="section-sub-title three">
                        <h2 style="color:var(--primary-color);"><img loading="lazy"
                                src="{{ asset('assets/images/inner-img/sub-title2.webp') }}" alt="icon"
                                title="icon">Success Stories</h2>
                    </div>
                    <div class="section_title text-left">
                        <div class="fs-1 fw-bold mb-1">All Real Experiences</div>
                        <div class="fs-1 fw-bold mb-1">From Our Dedicated</div>
                        <div class="fs-1 fw-bold">Learners</div>
                    </div>

                    <div class="testi-review-box">
                        <div class="review-image">
                            <img loading="lazy" src="{{ asset('assets/images/home-three/course-instructor.webp') }}"
                                alt="instructor" title="instructor">
                        </div>
                        <div class="testi-review-content">
                            <span class="counter">130</span>
                            <span>+</span>
                            <p>Reviews</p>
                        </div>
                        <div class="testi-inner-shape">
                            <img loading="lazy" src="{{ asset('assets/images/inner-img/testi-shape-in.webp') }}"
                                alt="arrow" title="arrow">
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
                                                <img loading="lazy"
                                                    src="{{ asset('assets/images/home-three/testi-quote.webp') }}"
                                                    alt="quote" title="quote">
                                            </div>
                                            <div class="testi-title">
                                                <h3>Success Story</h3>
                                            </div>
                                            <div class="testi-desc">
                                                <p>{!! $story->stoire !!}</p>
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
                                                    <img loading="lazy" src="{{ asset('storage/' . $story->image) }}"
                                                        alt="author" title="author" class="rounded-circle img-fluid"
                                                        style="width: 70px; height: 70px; object-fit: cover;">
                                                </div>
                                                <div class="testi-autor-content">
                                                    <h5 class="autor-title">{{ $story->studentname }}</h5>
                                                    <p class="autor-desi">{{ $story->position }} at
                                                        {{ $story->companyname }}</p>
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
                        <h2 style="color:var(--primary-color);"><img loading="lazy"
                                src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}" alt="icon"
                                title="icon">TESTIMONIALS</h2>
                    </div>
                    <div class="section_title text-left">
                        <h3 class="fs-2 fw-bold mb-1">What Students Say About Digicrome</h3>
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
                                                alt="author" title="author"
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
    {{-- <div class="call-to-action style-one">
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
	</div> --}}
    <div class="blog-area style-one">
        <div class="container">
            <div class="row section-title-space">
                <div class="col-lg-6">
                    <div class="section-sub-title">
                        <h2>LATEST BLOGS & RECENT UPDATES</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_title text-capitalize">
                        <h3 style="font-size: 42px; line-height: 52px; color: var(--title-color); font-weight: 600;">Read
                            our latest updates <br> from Digicrome</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-12 col-md-4">
                        <div class="single-blog-box box-1">
                            <div class="single-blog-thumb">
                                <img loading="lazy" src="{{ asset('storage/' . $blog->blog_image) }}"
                                    alt="single-blog-thumb" title="single-blog-thumb" class="img-fluid">
                                <div class="blog-meta-top">
                                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-author">
                                    <h4 style="display: flex; align-items: center; gap: 10px;">
                                        @if ($blog->author_image)
                                            <img loading="lazy" src="{{ asset('storage/' . $blog->author_image) }}"
                                                alt="author"
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
                                        <img loading="lazy" src="{{ asset('assets/images/home-one/blog-icon1.webp') }}"
                                            alt="icon" title="icon">
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
