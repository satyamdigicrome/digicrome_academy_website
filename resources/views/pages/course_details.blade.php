@extends('layouts.app')

@section('title', $course->meta_title ?? $course->name)
@section('meta_description', $course->meta_description ?? $course->name)
@section('meta_keywords', $course->meta_keywords ?? $course->name)

@push('styles')
@include('components.lead-form-popup')

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($course->faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ $faq->question }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{!! nl2br(e($faq->answer)) !!}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "{{ $course->name }}",
  "image": "{{ asset('storage/' . $course->image) }}",
  "description": "{{ $course->about }}",
  "offers": {
    "@type": "AggregateOffer",
    "url": "{{ url()->current() }}",
    "priceCurrency": "INR",
    "lowPrice": "{{ $course->price }}"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": {{ $course->sku }},
    "ratingCount": 10302
  },
  "review": {
    "@type": "Review",
    "reviewBody": "I had a great experience with Digicrome!",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": {{ $course->sku }},
      "bestRating": 5,
      "worstRating": 1
    },
    "author": {
      "@type": "Person",
      "name": "Suhani Kahaniyan"
    }
  }
}
</script>
<link href="{{ asset('assets/css/courses.css') }}" rel="stylesheet">
@endpush

@section('content')
@if ($course->course_free == 1)

<x-ds-with-ai-course :course="$course" />

@elseif ($course->course_free == 2)
<div class="breadcumb-area two d-flex">
    <div class="container">
        <div class="row align-items-center">
          <!-- Left Column -->
          <div class="col-md-6">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                <img loading="lazy"src="{{ asset('assets/images/card1.webp') }}" width="190" height="120" alt="card1" title="card1" />
                <img loading="lazy"src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card"
                     style="border: 2px solid #f29c12; border-radius: 5px;" />
              </div>
              
    
            <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">{{ $course->name }}</h1>
            
            <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                100% Job Assurance Investment Banking <br />
                Course for Finance Graduates with 0-3 Years <br />
                of Work Experience
              </p>
              
              <p class="text-dark fs-6 mb-2">
                <i class="fa-solid fa-briefcase text-success me-2"></i>
                Learn from global experts and get certified by Digicrome
              </p>
              
              <p class="text-dark fs-6 mb-2">
                <i class="fa-solid fa-clock text-warning me-2"></i>
                Suitable for Final Years, Graduates and Early Professionals
              </p>
              
              <p class="text-dark fs-6 mb-0">
                <i class="fa-solid fa-trophy text-danger me-2"></i>
                You`re guaranteed to find something that`s right for you.
              </p>
              
    
            <div class="mt-4 d-flex gap-3">
                @if($course->browser)

                <button class="btn btn-outline-primary" style="background-color: #1c1647;" data-bs-toggle="modal" data-bs-target="#leadPopup">
                    <i class="fa fa-download me-2"></i>Download Brochure
                </button>
                @endif
                
                <a href="javascript:void(0);" 
                class="btn btn-primary" 
                style="background-color: #1c1647;" 
                data-bs-toggle="modal" 
                data-bs-target="#applyNowPopup">
                <i class="fa fa-paper-plane me-2"></i>Apply Now
             </a>
             
            </div>
          </div>
          <div class="col-md-6 text-end">
            <img loading="lazy"src="{{ asset('assets/images/3.png') }}" class="img-fluid" alt="CIBOP" title="CIBOP" />
          </div>
        </div>
        <d  iv class="feature-strip position-relative mt-5">
            <div class="container">
              <div class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">
                <div class="features-box text-center flex-fill min-w-0">
                    <div class="date-border">
                        <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}" class="lazyload"
                            alt="data science program institute" title="data science program institute">
                        <p class="icon-plus">5000</p>
                        <span>Career Transformed</span>
                    </div>
                </div>
                <div class="features-box text-center flex-fill min-w-0">
                    <div class="date-border">
                        <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}" class="lazyload"
                            alt="data science programs" title="data science programs">
                        <p>12 Months</p>
                        <span>Live Internship</span>
                    </div>
                </div>
                <div class="features-box text-center flex-fill min-w-0">
                    <div class="date-border">
                        <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}" class="lazyload"
                            alt="best online data science programs" title="best online data science programs">
                        <p>11 Months</p>
                        <span>Live Online Classes</span>
                    </div>
                </div>
                <div class="features-box text-center flex-fill min-w-0">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}" class="lazyload"
                    alt="data science programs near me" title="data science programs near me">
                <p style="color: #f8b700">
                    {{ $course->course_online_payment }} </p>
                <span>Next Batch starts on</span>
                </div>
              </div>
            </div>
          </div>
          
      </div>
</div>
@else 
<div class="breadcumb-area two d-flex"
     @if ($course->banner_image)
         style="background: url('{{ asset('storage/' . $course->banner_image) }}') no-repeat center center / cover;"
     @endif>

   <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                    <img loading="lazy"src="{{ asset('assets/images/card1.webp') }}" width="190" height="120" alt="card1" title="card1" />
                    {{-- <img loading="lazy"src="{{ asset('assets/images/Card.webp') }}" width="319" height="58" alt="card" title="card"
                         style="border: 2px solid #f29c12; border-radius: 5px;" /> --}}
                  </div>
                  
        
                <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">{{ $course->name }}</h1>
                
                <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                    <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                    100% Job Assurance in {{ $course->name }}
                  </p>
                  
                  <p class="text-dark fs-6 mb-2">
                    <i class="fa-solid fa-briefcase text-success me-2"></i>
                    Learn from global experts and get certified by Digicrome
                  </p>
                  
                  <p class="text-dark fs-6 mb-2">
                    <i class="fa-solid fa-clock text-warning me-2"></i>
                    Suitable for Final Years, Graduates and Early Professionals
                  </p>
                  
                  <p class="text-dark fs-6 mb-0">
                    <i class="fa-solid fa-trophy text-danger me-2"></i>
                    You`re guaranteed to find something that`s right for you.
                  </p>
                  
        
                <div class="mt-4 d-flex gap-3">
                    @if($course->browser)

                  <a href="your-brochure-link.pdf" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#leadPopup" style="background-color: #1c1647;">
                    <i class="fa fa-download me-2"></i>Download Brochure
                  </a>
                  @endif

                  <a data-bs-toggle="modal" 
                  data-bs-target="#applyNowPopup" class="btn btn-primary" style="background-color: #1c1647;">
                    <i class="fa fa-paper-plane me-2"></i>Apply Now
                  </a>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="row breadcumb-autor">
                    <div class="col-lg-4 col-md-4">
                        <div class="breadcumb-autor-box">
                            {{-- <div class="breadcumb-autor">
                                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-autor.webp') }}" alt="autor">
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
        {{-- <div class="bread-dot">
            <img loading="lazy"src="{{ asset('assets/images/inner-img/bread-dot.webp') }}" alt="dot">
        </div> --}}
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
                    <img loading="lazy"src="{{ asset('assets/images/tik.png') }}" alt="{{ $keypoint->name }}" title="{{ $keypoint->name }}" loading="lazy"
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
                    <img loading="lazy"src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image" title="Company Image" class="img-fluid">
                </div>
            </div>
        </div>
        @if($course->aparts && $course->aparts->count())
        <div class="brand-list owl-carousel owl-theme">
            @foreach($course->aparts as $apart)
            <div class="item">
                <div class="card shadow rounded-4 mb-4 h-100">
                    <div class="card-body text-center">
                        <img loading="lazy"src="{{ asset('storage/' . $apart->image) }}" class="mb-3 mx-auto d-block" alt="image1" title="image1"
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
                            <img loading="lazy"src="{{ asset('storage/' . $course->image) }}" alt="event-sidebar-thumb" title="event-sidebar-thumb">
                            <div class="course-video-icon">
                                <a 
                                    href="{{ asset('storage/' . $course->image) }}">
                                    {{-- <i class="fa-classic fa-solid fa-play fa-fw"></i> --}}
                                    </a>
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
                            <a data-bs-toggle="modal" 
                            data-bs-target="#applyNowPopup">APPLY NOW<i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                        <div class="course-share-title">
                            <h5>Share Now</h5>
                        </div>
                        @php
    $currentUrl = urlencode(url()->current());
    $rawUrl = url()->current();
    $courseTitle = urlencode($course->name ?? 'Check this course');
@endphp

<div class="course-share-icon">
    <ul class="share-icon">

        <!-- WhatsApp -->
        <li>
            <a href="https://wa.me/?text={{ $courseTitle }}%20{{ $currentUrl }}" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </li>

        <!-- Messenger -->
        <li>
            <a href="fb-messenger://share/?link={{ $currentUrl }}" target="_blank">
                <i class="fab fa-facebook-messenger"></i>
            </a>
        </li>

        <!-- Instagram (no direct share) -->
        <li>
            <a href="https://www.instagram.com/" target="_blank" title="Open Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </li>

        <!-- Copy Link -->
        <li>
            <a href="javascript:void(0);" onclick="copyCourseLink()" title="Copy Link">
                <i class="fa fa-link"></i>
            </a>
        </li>

    </ul>
</div>

<!-- JavaScript for Copy Link -->
<script>
    function copyCourseLink() {
        const link = "{{ $rawUrl }}";
        navigator.clipboard.writeText(link).then(function () {
            alert('Course link copied to clipboard!');
        }, function (err) {
            alert('Failed to copy link.');
        });
    }
</script>

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
                                <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" alt="brand-thumb" title="event-sidebar-thumb" class="img-fluid"
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
                    @foreach($awords as $logo)
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" alt="brand-thumb" title="brand-thumb">
								</div>
							</div>
						</div>
						@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
        Our <span style="color: #f29c12;">Placed Learners </span> In Different Big Firms
    </h2>

    <div class="owl-carousel cards-carousel text-center">
        @foreach ($placements as $placement)
            <div class="placement-box" style="padding: 5px;">
                <div style="border-radius: 6px; overflow: hidden; box-shadow: 0 0 5px rgba(0,0,0,0.1); background: #fff;">
                    <img loading="lazy"src="{{ asset('storage/' . $placement->image) }}" alt="{{ $placement->name }}"  title="{{ $placement->name }}" style="width: 100%; height: auto;">
                    <div class="placement-overlay p-2">
                        <h6 style="margin: 0; font-size: 14px;">{{ $placement->name }}</h6>
                        <small style="font-size: 12px;">{{ $placement->position }}</small>
                    </div>
                </div>
            </div>
        @endforeach
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
                        <h2 class="text-warning fw-bold display-6">
                            4.8 
                            <span class="shiny-star">★</span>
                        </h2>
                        
                        <style>
                            .shiny-star {
                                color: gold;
                                animation: shimmer 1.5s infinite;
                                font-size: 1.2em;
                                margin-left: 5px;
                            }
                        
                            @keyframes shimmer {
                                0% { text-shadow: 0 0 2px gold; }
                                50% { text-shadow: 0 0 8px #ffdd57, 0 0 12px #ffaa00; }
                                100% { text-shadow: 0 0 2px gold; }
                            }
                        </style>
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
{{-- <section>
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
                <img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}" alt="testi-author" title="testi-author" style="width: 60px; height: 60px; border-radius: 50%;">
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
</section> --}}
<div class="testimonial-area style-two mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<!-- section title -->
				<div class="section-sub-title two">
					<h6><img loading="lazy"src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}" alt="icon" title="icon">TESTIMONIALS</h6>
				</div>
				<div class="section_title two">
					<h2 class="heading-like-h1">What Students Say About</br>
					Digicrome Experience</h2>
				</div>
				<div class="section-title-desc two">
					<p>Students love the hands-on learning, expert mentors, and real-world projects that make the Digicrome experience truly exceptional.</p>
				</div>
				<div class="testi-mentor-btn">
					<a data-bs-toggle="modal" 
                    data-bs-target="#applyNowPopup">GET STARTED<i
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
									<img loading="lazy"src="{{ asset('storage/' . $testimonial->image) }}" alt="testi-author" title="testi-author" style="width:80px; height:80px; border-radius:50%; object-fit:cover; border:2px solid #f29c12;">
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
<section class="my-5">
    




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
    <img loading="lazy"src="{{ asset('assets/images/Start-Here-Course-Page-01.webp') }} " alt="Full Screen Image" title="Full Screen Image">
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
                <img loading="lazy"src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->heading }}" title="{{ $feature->heading }}" class="session-img">
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
                <img loading="lazy"src="{{ asset('storage/' . $feature->image) }}" alt="{{ $feature->heading }}" title="{{ $feature->heading }}" class="session-img">
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
<!-- Bootstrap Modal -->
<div class="modal fade" id="leadPopup" tabindex="-1" aria-labelledby="leadPopupLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-3">
        <form id="leadForm">
          @csrf
          <input type="hidden" name="course_id" value="{{ $course->id }}">
          <h4 class="text-warning mb-3">Register now!! And get a quick call</h4>
  
          <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
          <input type="tel" name="mobile" placeholder="Mobile Number" class="form-control mb-2" required>
          <input type="email" name="email" placeholder="E-mail ID" class="form-control mb-2" required>
          <input type="text" name="address" placeholder="City" class="form-control mb-2">
          <input type="text" name="title" placeholder="Qualification" class="form-control mb-2">
          
          <select name="profession" class="form-select mb-3">
            <option value="" disabled selected>Select Experience</option>
            <option value="Working Professional - Technincal Roles">Working Professional - Technical Roles</option>
            <option value="Working Professional - Non Technincal">Working Professional - Non Technical</option>
            <option value="College Student - Final Year">College Student - Final Year</option>
            <option value="College Student - 1st to pre-final Year">College Student - 1st to pre-final Year</option>
            <option value="Other">Other</option>
          </select>
  
          <p>By submitting the form, you agree to our <a href="#">Terms and Conditions</a> and <a href="https://digicrome.com/privacy-policy">Privacy Policy</a>.</p>
  
          <button type="submit" class="btn btn-primary w-100">Download Brochure</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Apply Now Modal -->
<div class="modal fade" id="applyNowPopup" tabindex="-1" aria-labelledby="applyNowPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content" style="padding: 20px; border-radius: 10px;">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="applyNowPopupLabel">Register Now! And Get a Quick Call</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('lead.store') }}">
          @csrf
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="col-md-6">
                <input type="tel" name="phone" class="form-control" placeholder="Mobile Number" required>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="E-mail ID" required>
              </div>
              <div class="col-md-6">
                <input type="text" name="address" class="form-control" placeholder="City">
              </div>
              <div class="col-md-6">
                <input type="text" name="qualification" class="form-control" placeholder="Qualification">
              </div>
              <div class="col-md-6">
                <select name="experience" class="form-select">
                  <option value="" disabled selected>Select Experience</option>
                  <option value="Working Professional - Technical Roles">Working Professional - Technical Roles</option>
                  <option value="Working Professional - Non-Technical">Working Professional - Non-Technical</option>
                  <option value="College Student - Final Year">College Student - Final Year</option>
                  <option value="College Student - 1st to Pre-Final Year">College Student - 1st to Pre-Final Year</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <input type="hidden" name="page_name" value="{{ $course->name }}">
              <input type="hidden" name="source" value="Website(Course)>
              <input type="hidden" name="course_id" value="{{ $course->id ?? '' }}">
            </div>
            <p class="mt-3">By submitting the form, you agree to our <a href="#">Terms and Conditions</a> and our <a href="/privacy-policy">Privacy Policy</a>.</p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script>
    document.getElementById('leadForm').addEventListener('submit', function(e) {
        e.preventDefault();
        let form = e.target;
        let formData = new FormData(form);
    
        fetch("{{ route('store.lead') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': form.querySelector('[name=_token]').value
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success && data.download_url) {
                // Close modal
                var modal = bootstrap.Modal.getInstance(document.getElementById('leadPopup'));
                modal.hide();
    
                // Trigger brochure download
                window.open(data.download_url, '_blank');
            } else {
                alert("Submission failed!");
            }
        })
        .catch(err => {
            console.error("Error:", err);
        });
    });
    </script>
      
<!--==================================================-->
<!-- Start educate Footer Area -->
<!--==================================================-->
@endsection