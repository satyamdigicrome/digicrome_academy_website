@extends('layouts.app')

@section('title', 'Home Page')

@push('styles')
<link href="{{ asset('assets/css/courses.css') }}" rel="stylesheet">
@endpush

@section('content')
@if ($course->course_free == 1)
<!--==================================================-->
<!-- Start educate Breadcumb Area -->
<!--==================================================-->
<x-ds-with-ai-course :course="$course" />


<!--==================================================-->
<!-- End educate Breadcumb Area -->
<!--==================================================-->
@else
<div class="breadcumb-area two d-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>Courses Details</h4>
                    </div>
                    <ul>
                        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
                        <li><a href="course.html">course<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </li>
                        <li>{{ $course->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="row breadcumb-autor">
                    <div class="col-lg-4 col-md-4">
                        <div class="breadcumb-autor-box">
                            {{-- <div class="breadcumb-autor">
                                <img src="{{ asset('assets/images/inner-img/breadcumb-autor.webp') }}" alt="autor">
                            </div> --}}
                            {{-- <div class="breadcumb-autor-content">
                                <h5>John D. Alexon</h5>
                                <p>Instractor</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        {{-- <div class="breadcumb-category">
                            <span>Course Category</span>
                            <h6>Business</h6>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-4">
                        {{-- <div class="breadcumb-ratting">
                            <div class="reviews"><span>3 Ratings</span></div>
                            <div class="breadcumb-star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
                                </ul>
                            </div>
                            <div class="breadcumb-ratting-num">
                                <span>(4.5)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4"></div>
        </div>
        <div class="bread-dot">
            <img src="{{ asset('assets/images/inner-img/bread-dot.webp') }}" alt="dot">
        </div>
    </div>
</div>
@endif
<!--==================================================-->
<!-- my coustom section start -->
<!--==================================================-->
@if($course->keypoints && $course->keypoints->count())
<div class="container my-5">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
        What Our <span style="color: #f29c12;">Program</span> Offers?
    </h2>
    <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
        Discover the key features and benefits you'll gain from joining our program
    </p>
    <div class="bg-white rounded shadow p-4">
        @foreach($course->keypoints->chunk(4) as $chunk)
        <div class="row mb-4"> <!-- gap between rows -->
            @foreach($chunk as $keypoint)
            <div class="col-md-3 mb-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/images/tik.png') }}" alt="{{ $keypoint->name }}" loading="lazy"
                        class="keyimg">
                    <span>{{ $keypoint->name }}</span>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endif
<x-logo-slider :companyLogos="$companyLogos" />

<section class="py-5 bg-light">
    <div class="container text-center">
        <div class="container py-5" style="text-align: left;">
            <div class="row align-items-center">
                <!-- Left: About Company Text -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="mb-5 display-5 fw-bold">About the Program</h2>
                    <p>
                        {{ $course->about }}
                    </p>
                </div>
                <!-- Right: Company Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image" class="img-fluid">
                </div>
            </div>
        </div>
        @if($course->aparts && $course->aparts->count())
        <div class="brand-list owl-carousel owl-theme">
            @foreach($course->aparts as $apart)
            <div class="item">
                <div class="card shadow rounded-4 mb-4 h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/' . $apart->image) }}" class="mb-3 mx-auto d-block"
                            style="height: 70px; width: 70px;">
                        <h5 class="card-title">{{ $apart->heading }}</h5>
                        <p class="card-text small text-muted">{{ $apart->tagline }}</p>
                        <a href="#" class="d-block fw-semibold text-warning" data-bs-toggle="modal"
                            data-bs-target="#staticModal" data-paragraph="{{ $apart->paragraph }}"
                            data-heading="{{ $apart->heading }}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
</section>
<!-- Single Bootstrap Modal -->
<div class="modal fade" id="staticModal" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">More Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalParagraph">Loading...</p>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('staticModal');
        modal.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            var paragraph = trigger.getAttribute('data-paragraph');
            var heading = trigger.getAttribute('data-heading');

            modal.querySelector('.modal-title').textContent = heading;
            modal.querySelector('#modalParagraph').innerHTML = paragraph;
        });
    });
</script>
<!--==================================================-->
<!-- my coustom section end -->
<!--==================================================-->
<!--==================================================-->
<!-- Start educate-details-course-area style-inner -->
<!--==================================================-->
<section class="course-details-area style-inner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                <div class="course-details-content">
                    <div class="course-details-heading">
                        <h2 class="course-details-title">Course Overview</h2>
                    </div>
                    {!! $course->description !!}
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                <div class="event-sidebar-wrapper" style="margin-top: 0px;">
                    <div class="event-sidebar">
                        <div class="event-sidebar-thumb">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="thumb">
                            <div class="course-video-icon">
                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                    href="{{ asset('storage/' . $course->image) }}"><i
                                        class="fa-classic fa-solid fa-play fa-fw"></i></a>
                            </div>
                        </div>
                        <div class="event-info">
                            <div class="event-info-title">
                                <h3>Course Includes :</h3>
                            </div>
                        </div>
                        <div class="event-info-list">
                            <ul>
                                <li>
                                    <div class="label">
                                        Price
                                    </div>
                                    <span class="value-dollar"> {{ number_format($course->price, 0) }} + GST</span>
                                </li>
                                <li>
                                    <div class="label">
                                        US Price
                                    </div>
                                    <span class="value-dollar">${{ $course->us_price }}</span>
                                </li>
                                <li>
                                    <div class="label">
                                        Dubai Price
                                    </div>
                                    <span class="value-dollar">{{ $course->dubai_price }}AED</span>
                                </li>
                                <li>
                                    <div class="label">
                                        <i class="fa-regular fa-circle-check"></i>Certifications
                                    </div>
                                    <span class="value">Yes</span>
                                </li>
                                <li>
                                    <div class="label">
                                        <i class="fa-solid fa-globe"></i>Language
                                    </div>
                                    <span class="value">English (US)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="event-info-btn">
                            <a href="course.html">BOOK NOW<i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                        <div class="course-share-title">
                            <h5>Share Now</h5>
                        </div>
                        <div class="course-share-icon">
                            <ul class="share-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            @if($course->modules->count())
    <div class="container text-center">
        <h2 class="text-center mb-2" style="font-size: 2rem;">
            Our <span style="color: #f29c12;">Course </span> Curriculum
        </h2>
        <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
            100% Trusted And Golden Opportunities With Key Features That will Help You To Transform Your Career
        </p>
    </div>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <div class="accordion my-4" id="moduleAccordion">
                @foreach($course->modules as $index => $module)
                    <div class="accordion-item border border-warning-subtle">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}" style="color: #f29c12;">
                                {{ $module->question }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}"
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                            aria-labelledby="heading{{ $index }}" data-bs-parent="#moduleAccordion">
                            <div class="accordion-body">
                                {!! nl2br(e($module->answer)) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif


@if($course->extraPartOne->count())
<div class="row my-5">
    <div class="col-12 d-flex align-items-center gap-3">
        <div
            style="width: 35px; height: 35px; background-color: #f29c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
            1
        </div>
        <h2 class="section-heading mb-0">Internship Program</h2>
    </div>
</div>

<div class="feature-box container">
    <div class="row mb-4">
        @foreach($course->extraPartOne->chunk(ceil($course->extraPartOne->count() / 2)) as $chunk)
            <div class="col-md-6">
                @foreach($chunk as $item)
                    <p>
                        <i class="bi bi-check-circle-fill text-success"></i>
                        {{ $item->heading }}
                    </p>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endif


@if($course->extraPartTwo->count())
<div class="row my-5">
    <div class="col-12 d-flex align-items-center gap-3">
        <div
            style="width: 35px; height: 35px; background-color: #f29c12; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
            2
        </div>
        <h2 class="section-heading mb-0">Soft Skills Program</h2>
    </div>
</div>

<div class="feature-box container">
    <div class="row mt-4">
        {{-- <div class="col-12 mb-2">
            <h5 class="text-warning fw-bold">Additional Highlights</h5>
        </div> --}}
        @foreach($course->extraPartTwo->chunk(ceil($course->extraPartTwo->count() / 2)) as $chunk)
            <div class="col-md-6">
                @foreach($chunk as $item)
                    <p>
                        <i class="bi bi-check-circle-fill text-success"></i>
                        {{ $item->heading }}
                    </p>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endif

            <!-- Certificates Section -->
            {{-- <x-course-curriculum :course="$course" /> --}}
        </div>
    </div>
</section>        
@if($plainLogos->count())
<section>
    <div class="container my-5">
        <h2 class="section-heading text-center mb-4">Languages and Tools Covered</h2>
        <div class="row justify-content-center mt-4">
            <div class="container py-4" style="max-width: 1000px;">
                <div class="row">
                    @foreach($plainLogos as $logo)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 d-flex justify-content-center">
                        <div class="single-brand-box text-center">
                            <div class="brand-thumb">
                                <img src="{{ asset('storage/' . $logo->image) }}" alt="brand" class="img-fluid"
                                    style="max-height: 60px;">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if ($course->projects->count())
<section style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: #333;">Sample Projects You'll Build</h2>
            <p style="font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto;">
                Get hands-on experience with real-world inspired projects. These are some examples of what you'll build during the course.
            </p>
        </div>

        <div class="owl-carousel projects-carousel">
            @foreach ($course->projects as $project)
            <div class="item">
                <div class="project-box mx-2">
                    <div class="inner-box">
                        <h5 style="line-height: 31px;" class="project-title">{{ $project->heading }}</h5>
                        <p class="project-desc">{!! $project->paragraph !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif


<x-trusted-brands />
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
<section class="mt-4">
    <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                        <h5 class="mb-2 text-muted">Happy Learners</h5>
                        <h2 class="text-primary fw-bold display-6">20,000+</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                        <h5 class="mb-2 text-muted">Average Rating</h5>
                        <h2 class="text-warning fw-bold display-6">4.8 <span>⭐</span></h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                        <h5 class="mb-2 text-muted">Average Salary Hike</h5>
                        <h2 class="text-success fw-bold display-6">80%</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box p-4 rounded shadow-sm bg-white h-100">
                        <h5 class="mb-2 text-muted">Average Package</h5>
                        <h2 class="text-danger fw-bold display-6">₹ 8 LPA</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <h2 class="text-center mb-2" style="font-size: 2rem;">
                Our <span style="color: #f29c12;">Case </span> Studies
            </h2>
            <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                Insights Of All The Learner Recent Learners
            </p>
            <div class="row g-4 text-center">
                @foreach($course->caseStudies as $case)
                <div class="col-md-3">
                    <div class="case-box p-4 rounded shadow-sm h-100">
                        <h5 class="mb-3 fw-bold">{{ $case->heading }}</h5>
                        <p class="text-muted">{!! $case->paragraph !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
<section>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <h2 class="text-center mb-2" style="font-size: 2rem;">
            Our <span style="color: #f29c12;">Placed Learners </span> In Different Big Firms
        </h2>

        <div class="owl-carousel cards-carousel text-center">
            @foreach ($placements as $placement)
                <div class="placement-box" style="padding: 5px;">
                    <div style="border-radius: 6px; overflow: hidden; box-shadow: 0 0 5px rgba(0,0,0,0.1); background: #fff;">
                        <img src="{{ asset('storage/' . $placement->image) }}" alt="{{ $placement->name }}" style="width: 100%; height: auto;">
                        <div class="placement-overlay p-2">
                            <h6 style="margin: 0; font-size: 14px;">{{ $placement->name }}</h6>
                            <small style="font-size: 12px;">{{ $placement->position }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




<div class="container my-5">
    <h2 class="text-center mb-3 fw-bold" style="font-size: 2.2rem;">
        Application <span style="color: #f29c12;">Process</span> for Digicrome
    </h2>
    <p class="text-center text-muted mb-5" style="font-size: 1.1rem;">
        Our Acknowledged features offerings
    </p>
    <div class="d-flex justify-content-between align-items-start flex-wrap px-md-5 gap-4">
        <div class="text-center" style="flex: 1; min-width: 140px;">
            <div class="circle-step mb-2">1</div>
            <div class="fw-semibold">Career Consultation</div>
            <div class="text-muted small">Assess eligibility</div>
        </div>
        <div class="text-center" style="flex: 1; min-width: 140px;">
            <div class="circle-step mb-2">2</div>
            <div class="fw-semibold">Personalized Guidance</div>
            <div class="text-muted small">Acceptance letter</div>
        </div>
        <div class="text-center" style="flex: 1; min-width: 140px;">
            <div class="circle-step mb-2">3</div>
            <div class="fw-semibold">Easy Registration</div>
            <div class="text-muted small">Pay booking amount</div>
        </div>
        <div class="text-center" style="flex: 1; min-width: 140px;">
            <div class="circle-step mb-2">4</div>
            <div class="fw-semibold">Start Upskilling</div>
            <div class="text-muted small">Access curriculum</div>
        </div>
        <div class="text-center" style="flex: 1; min-width: 140px;">
            <div class="circle-step mb-2">5</div>
            <div class="fw-semibold">Ongoing Support</div>
            <div class="text-muted small">Mentorship & guidance</div>
        </div>
    </div>
</div>
<section class="container-fluid p-20" style="border: 1px solid #ddd;">
    <img src="{{ asset('assets/images/Start-Here-Course-Page-01.webp') }} " alt="Full Screen Image">
</section>
<div class="bg-light py-5 mt-20">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
        Our <span style="color: #f29c12;">Course </span> Comes with Offerings
    </h2>
    <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
        By Joining Our Program, Underlying Are The Key Featuers You Will Get
    </p>
</div>
@foreach ($course->keyFeatures as $index => $feature)
<section class="session-section bg-light py-5 mt-2">
    <div class="container">
        <div class="row align-items-center">
            @if ($index % 2 == 0)
            {{-- Image Left, Text Right --}}
            <div class="col-md-6 text-center">
                <img src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->heading }}" class="session-img">
            </div>
            <div class="col-md-6 session-text">
                <h2 class="session-title">{{ $feature->heading }}</h2>
                <p>{!! $feature->paragraph !!}</p>
            </div>
            @else
            {{-- Text Left, Image Right --}}
            <div class="col-md-6 session-text">
                <h2 class="session-title">{{ $feature->heading }}</h2>
                <p>{!! $feature->paragraph !!}</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->heading }}" class="session-img">
            </div>
            @endif
        </div>
    </div>
</section>
@endforeach
<!--==================================================-->
<!--End educate-details-course-area -->
<!--==================================================-->
@if($course->faqs->count())
<h2 class="text-center mb-2" style="font-size: 2rem;">
   <span style="color: #f29c12;">Our </span> FAQs
</h2>
<p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
    Imperative FAQs About Us!
</p>
@endif
<section>
    <div class="container">
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="accordion" id="marketingAccordion">
                    @if($course->faqs->count())
                    <div class="accordion my-4" id="faqAccordion">
                        @foreach($course->faqs as $index => $faq)
                        <div class="accordion-item border border-warning-subtle">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $index }}" style="color: #f29c12;">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}"
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {!! nl2br(e($faq->answer)) !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <!-- Add other sections similarly -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================-->
<!-- Start educate-details-course-area style-inner -->
<!--==================================================-->
{{-- <x-suggested-courses :courses="$courses" /> --}}
<!--==================================================-->
<!--End educate-details-course-area -->
<!--==================================================-->
<!--==================================================-->
<!-- Start educate Footer Area -->
<!--==================================================-->
@endsection