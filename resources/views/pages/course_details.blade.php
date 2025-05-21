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

    <div class="nedesign">
    <section class="courses-details ds-banner ds-banner-mobile" style="background-image: url(https://digicrome.com/public/www/images/pgp/banner.jpg);">
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-6 col-12">
      <div class="course-heading-banner col-flex">
      <h2>{{ $course->name }}<br> <small>in collaboration with</small> </h2>
      <img src='https://digicrome.com/public/www/images/pgp/mslogo.png' class='ds-logo lazyload'>
      <div class="black-box">
        <span class="yellow-text">Aligned with competency standards set by Microsoft & IBM.</span>
        <span class="green-text" style="color:#fff;">In Collaboration with Industry and approved by Government of
        India</span>
      </div>
      </div>
      </div>
      <div class="offset-lg-2 col-lg-4">
      <div class="course-heading-banner text-center">
      <h2><small>Best Data Science Course in India</small></h2>
      </div>
      <div class="ai-box flex">
      <div class="cont text-center">
        <span>In Curriculum</span>
        <h3>Chat<span>GPT</span></h3>
        <img src='https://digicrome.com/public/www/images/pgp/deep.png' class="aiimg" alt="ChatGPT">
      </div>
      <div class="img">
        <img src='https://digicrome.com/public/www/images/pgp/ai.png' class="aiimg" alt="ai">
      </div>
      </div>
      </div>
      </div>
    </div>
    </section>

    <section class="mobile-banner mobile-display">
    <div class="container-fluid">
      <div class="row">
      <div class="col-12">
      <p>Become an industry-ready Certified Data Science professional through immersive learning of Data Analysis
      and Visualization, ML models, Forecasting & Predicting Models, NLP, Deep Learning.</p>
      <div class="collab-box">
      <div class="heading-collab text-center">In Collaboration With</div>
      <div class="collab-deatil">
        <ul>
        <li><strong>Silver</strong><br> Business <br>Partner</li>
        <li><img src="https://digicrome.com/public/www/images/pgp/mslogo.png" class="lazyload" alt="nasscom">
        </li>
        </ul>
      </div>
      </div>
      <div class="course-specification">
      <div class="box">
        <p>
        26-Apr-2025 </p>
        <span>Next Batch <br> starts on</span>
      </div>
      <div class="box">
        <p>11 Months</p>
        <span>Live Online Classes</span>
      </div>
      <div class="box">
        <p>12 Months</p>
        <span>Live <br> Internship</span>
      </div>
      <div class="box">
        <p>Online</p>
        <span>Learning <br> Format</span>
      </div>
      <div class="box">
        <p>5000+</p>
        <span>Career <br> Transformed</span>
      </div>
      <div class="box">
        <p>500+</p>
        <span>Hiring <br> Partners</span>
      </div>
      <div class="fill-btn">
        <a data-bs-toggle="modal" data-bs-target="#brochure"
        href="https://digicrome.com/public/storage/1659/1739358305.pdf" download="" style="color:#fff">Download
        Brochure</a>
      </div>
      <!--<button type="button" class="fill-btn" href="#form1" data-toggle="modal" data-target="#buy-form" onclick="buNow('102')">Apply-->
      <!--   Now</button>-->
      </div>
      </div>
      </div>
    </div>
    </section>
    <section class="banner-date-2 mobile-display-none">
    <div class="container">
      <div class="banner-detail">
      <div class="date-border width">
      <h2>Courses<br> Features</h2>
      <div class="fill-btn">
      <a data-bs-toggle="modal" data-bs-target="#brochure"
        href="https://digicrome.com/public/storage/1659/1739358305.pdf" download="" style="color:#fff">Download
        Brochure</a>
      </div>
      <!--<button type="button" class="fill-btn" href="#form1">Apply Now</button>-->
      </div>
      <div class="date-border">
      <img src="https://digicrome.com/public/www/images/pgp/banner-icon-1.png" class="lazyload"
      alt="data science program institute">
      <p class="icon-plus">5000</p>
      <span>Career Transformed</span>
      </div>
      <div class="date-border">
      <img src="https://digicrome.com/public/www/images/pgp/banner-icon-2.png" class="lazyload"
      alt="data science programs">
      <p>12 Months</p>
      <span>Live Internship</span>
      </div>
      <div class="date-border">
      <img src="https://digicrome.com/public/www/images/pgp/banner-icon-3.png" class="lazyload"
      alt="best online data science programs">
      <p>11 Months</p>
      <span>Live Online Classes</span>
      </div>
      <div class="date-border">
      <img src="https://digicrome.com/public/www/images/pgp/banner-icon-4.png" class="lazyload"
      alt="data science programs near me">
      <p style="color: #f8b700">
      26-Apr-2025 </p>
      <span>Next Batch starts on</span>
      </div>
      <div class="date-border">
      <img src="https://digicrome.com/public/www/images/pgp/banner-icon-5.png" class="lazyload"
      alt="data science program online">
      <p>500+</p>
      <span>Hiring Partners</span>
      </div>
      </div>
    </div>
    </section>
    </div>
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
      <li><a href="course.html">course<span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
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
        <div class="breadcumb-autor">
        <img src="assets/images/inner-img/breadcumb-autor.webp" alt="autor">
        </div>
        <div class="breadcumb-autor-content">
        <h5>John D. Alexon</h5>
        <p>Instractor</p>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-4">
      <div class="breadcumb-category">
        <span>Course Category</span>
        <h6>Business</h6>
      </div>
      </div>
      <div class="col-lg-4 col-md-4">
      <div class="breadcumb-ratting">
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
      </div>
      </div>
      </div>
      </div>
      <div class="col-xl-6 col-lg-4"></div>
    </div>
    <div class="bread-dot">
      <img src="assets/images/inner-img/bread-dot.webp" alt="dot">
    </div>
    </div>
    </div>
  @endif
  <!--==================================================-->
  <!-- my coustom section start -->
  <!--==================================================-->
  <div class="container my-5">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
    What Our <span style="color: #f29c12;">Program</span> Offers?
    </h2>
    <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
    Discover the key features and benefits you’ll gain from joining our program.
    </p>


    <div class="bg-white rounded shadow p-4">
    @foreach($course->keypoints->chunk(4) as $chunk)
    <div class="row mb-4"> <!-- gap between rows -->
      @foreach($chunk as $keypoint)
      <div class="col-md-3 mb-3">
      <div class="d-flex align-items-center">
      <img src="{{ asset('storage/' . $keypoint->image) }}" alt="{{ $keypoint->name }}"
      style="width: 24px; height: 24px; object-fit: cover; margin-right: 10px;">
      <span>{{ $keypoint->name }}</span>
      </div>
      </div>
    @endforeach
    </div>
    @endforeach



    </div>
  </div>

  <section class="logo-slider-section py-5">
    <h2 class="text-center mb-4" style="font-size: 2rem;">
      Trusted by 100 <span style="color: #f29c12;">world's best</span> companies
    </h2>
  <div class="container-fluid custom-width">
    <div class="logo-list owl-carousel">
      <div class="row">
        @foreach($companyLogos as $logo)
          <div class="col-lg-2 col-md-3 col-4 mb-4">
            <div class="single-brand-box text-center">
              <div class="brand-thumb">
                <img src="{{ asset('storage/' . $logo->image) }}" alt="Company Logo" class="img-fluid">
              </div>
            </div>
          </div>
        @endforeach
      </div>
                             
    </div>


    <div class="Other-logo-list owl-carousel">
      @foreach($companyLogos as $logo)
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="single-brand-box text-center">
          <div class="brand-thumb">
            <img src="{{ asset('storage/'.$logo->image) }}" alt="brand" class="img-fluid">
          </div>
        </div>
      </div>
    @endforeach 				    			    
    </div>
  </div>
    
  </section>
  


  <section class="py-5 bg-light">
    <div class="container text-center">
    <div class="container py-5" style="text-align: left;">
      <div class="row align-items-center">
        
        <!-- Left: About Company Text -->
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="mb-5 display-5 fw-bold">About the Program</h2>
          <p>
            Our Certified Investment Banking Operations Professional (CIBOP™) program has been guiding finance professionals for over a decade, shaping careers and turning dreams into reality.
<br>
            Focused on real-world scenarios and insights from industry experts, the refined curriculum of our investment banking course addresses intricacies in securities operations, wealth and asset management, financial market, risk management, and anti-money laundering. Imarticus offers more than just a certification,  it delivers a transformative experience, propelling you toward greatness in the investment banking operations realm.
          </p>
        </div>
    
        <!-- Right: Company Image -->
        <div class="col-md-6 text-center">
          <img src="https://cdn.pegasus.imarticus.org/cibop_new/about/about_w.webp" alt="Company Image" class="img-fluid">
        </div>
    
      </div>
    </div>
    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        @foreach($course->aparts->chunk(4) as $chunkIndex => $apartChunk)
      <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
      <div class="row">
        @foreach($apartChunk as $apart)
      <div class="col-md-3">
      <div class="card shadow rounded-4 mb-4">
      <div class="card-body text-center">
      <img src="{{ asset('storage/' . $apart->image) }}" class="mb-3 mx-auto d-block"
        style="height: 50px;">
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
      </div>
      @endforeach

      </div>

      <!-- Carousel controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
      </button>
      </div>
    </div>
    
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
      <!-- Start Accordion -->

      <!-- End Accordion -->
      {{-- <div class="course-details-instructors">
        <div class="course-instructors-content">
        <div class="instructors-thumb">
          <a href="#"><img src="assets/images/inner-img/instructor-details-thumb.webp" alt="Instructor image"></a>
        </div>
        <div class="course-instructors-info">
          <div class="instructors-info">
          <span class="instructor">Instructor</span>
          <h3 class="name">Anjelina Watson</h3>
          </div>
          <div class="course-instructors-rating">
          <ul>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
            <li class="instructor-rate">(4.5)</li>
          </ul>
          </div>
          <h5 class="designation">UI/UX Designer</h5>
          <div class="instructor-dtls-social">
          <ul class="social-icon-list">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
          </div>
        </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-12">
        <div class="instructor-ratting-box">
          <div class="ins-rating-box-number">
          <h4>5.00</h4>
          </div>
          <div class="ins-rating-box-icon">
          <ul>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>
          </div>
          <p class="rating-box-desc">(Total 16 Ratings)</p>
        </div>
        </div>

        <div class="col-xl-7 col-lg-12">
        <div class="instuctor-review-progress-wrapper">
          <!-- Rating for 5 Stars -->
          <!-- prossess bar -->
          <div class="prossess-ber-plugin">
          <span class="prosses-bar"><i class="fa-solid fa-star"></i>5 Star</span>
          <p class="bd-review-number">(05)</p>
          <div id="bar1" class="barfiller">
            <div class="tipWrap">
            <span class="tip">90</span>
            </div>
            <span class="fill" data-percentage="90"></span>
          </div>
          <span class="prosses-bar"><i class="fa-solid fa-star"></i>4 Star</span>
          <p class="bd-review-number">(04)</p>
          <div id="bar2" class="barfiller">
            <div class="tipWrap">
            <span class="tip">80</span>
            </div>
            <span class="fill" data-percentage="80"></span>
          </div>
          <span class="prosses-bar"><i class="fa-solid fa-star"></i>3 Star</span>
          <p class="bd-review-number">(03)</p>
          <div id="bar3" class="barfiller">
            <div class="tipWrap">
            <span class="tip">60</span>
            </div>
            <span class="fill" data-percentage="60"></span>
          </div>
          <span class="prosses-bar"><i class="fa-solid fa-star"></i>2 Star</span>
          <p class="bd-review-number">(02)</p>
          <div id="bar4" class="barfiller">
            <div class="tipWrap">
            <span class="tip">50</span>
            </div>
            <span class="fill" data-percentage="50"></span>
          </div>
          <span class="prosses-bar"><i class="fa-solid fa-star"></i>1 Star</span>
          <p class="bd-review-number">(01)</p>
          <div id="bar5" class="barfiller">
            <div class="tipWrap">
            <span class="tip">40</span>
            </div>
            <span class="fill" data-percentage="40"></span>
          </div>
          </div>
        </div>
        </div>
        <div class="course-detalis-reviews">
        <h3 class="course-details-content-title">Student’s Reviews</h3>
        <div class="reviews-postbox-comment">
          <ul>
          <li class="post-comment-box-1">
            <div class="reviews-postbox-comment-box">
            <div class="reviews-postbox-comment-text">
              <div class="reviews-postbox-comment-info">
              <div class="reviews-postbox-comment-autor">
                <img src="assets/images/inner-img/review-autor1.webp" alt="image">
              </div>
              </div>
              <div class="reviews-postbox-comment-name">
              <a href="#">John D. Alexon</a>
              <div class="post-rating">
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a class="post-time" href="#">6 min ago</a>
              </div>
              </div>
            </div>
            <div class="reviews-desc">
              <p>Educate the ultimate destination for knowledge seekers and educators alike distinctively
              restore
              We are committed to transforming special education</p>
            </div>
            </div>
          </li>
          <li class="post-comment-box-2">
            <div class="reviews-postbox-comment-box">
            <div class="reviews-postbox-comment-text">
              <div class="reviews-postbox-comment-info">
              <div class="reviews-postbox-comment-autor">
                <img src="assets/images/inner-img/review-autor2.webp" alt="image">
              </div>
              </div>
              <div class="reviews-postbox-comment-name">
              <a href="#">Anjelina Watson</a>
              <div class="post-rating">
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a class="post-time" href="#">6 min ago</a>
              </div>
              </div>
            </div>
            <div class="reviews-desc">
              <p>Dramatically implement just in time e-commerce via timely architectures. Objectively formulate
              bleeding-edge quality vectors and cost effective growth </p>
            </div>
            </div>
          </li>
          </ul>
        </div>
        </div>
      </div> --}}
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
      <div class="event-sidebar-wrapper" style="margin-top: 0px;">
        <div class="event-sidebar">
        <div class="event-sidebar-thumb">
          <img src="{{ asset('storage/' . $course->image) }}" alt="thumb">
          <div class="course-video-icon">
          <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
            href="{{ asset('storage/' . $course->image) }}"><i class="fa-classic fa-solid fa-play fa-fw"></i></a>
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
            <i class="fa-solid fa-dollar-sign"></i>Price
            </div>
            <span class="value-dollar"> {{ $course->price }}₹</span>
          </li>
          <li>
            <div class="label">
            <i class="fa-solid fa-dollar-sign"></i>US Price
            </div>
            <span class="value-dollar">${{ $course->us_price }}</span>
          </li>
          <li>
            <div class="label">
            <i class="fa-solid fa-dollar-sign"></i>Dubai Price
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
      <div class="container text-center">
      <h2 class="text-center mb-2" style="font-size: 2rem;">
        Our <span style="color: #f29c12;">Course </span> Curriculum
      </h2>
      <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
        Discover the key features and benefits you’ll gain from joining our program.
      </p>
      </div>
      <div class="tab_container">
      <div id="tab1" class="tab_content">
        <div class="accordion" id="marketingAccordion">
        @if($course->modules->count())
        <div class="accordion my-4" id="moduleAccordion">
        @foreach($course->modules as $index => $module)
        <div class="accordion-item border border-warning-subtle">
        <h2 class="accordion-header" id="heading{{ $index }}">
        <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}"
        style="color: #f29c12;">
        {{ $module->question }}
        </button>
        </h2>
        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
        aria-labelledby="heading{{ $index }}" data-bs-parent="#moduleAccordion">
        <div class="accordion-body">
        {!! nl2br(e($module->answer)) !!}
        </div>
        </div>
        </div>
      @endforeach
        </div>
      @else
      <p class="text-muted">No FAQs available for this course.</p>
      @endif


        <!-- Add other sections similarly -->
        </div>

      </div>
      </div>
      <div class="arrow-wrapper">
      <div class="arrow-body"></div>
      <div class="arrow-head"></div>
      </div>

      <div class="feature-box container">
      <div class="row  my-5">
        <div class="col-12">
        <h2 class="section-heading">Internship Program</h2>
        </div>
      </div>

      @if($course->extraPartOne->count())
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
    @endif


      </div>
      <div class="arrow-wrapper">
      <div class="arrow-body"></div>
      <div class="arrow-head"></div>
      </div>
      <div class="feature-box container">
      <div class="row  my-5">
        <div class="col-12">
        <h2 class="section-heading">Soft Skills Program</h2>
        </div>
      </div>

      @if($course->extraPartTwo->count())
      <div class="row mt-4">
        <div class="col-12 mb-2">
        <h5 class="text-warning fw-bold">Additional Highlights</h5>
        </div>
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
    @endif


      </div>
      <div class="arrow-wrapper">
      <div class="arrow-body"></div>
      <div class="arrow-head"></div>
      </div>

      <!-- Certificates Section -->
<section class="py-5">
  <div class="container">
    <div class="row">

      <!-- Left: Certificate Names -->
      <div class="col-md-4">
        <h4 class="mb-4 fw-bold" style="font-size: 2rem;">Certificates</h4>
        <div class="d-flex flex-column gap-3">
          <div class="certificate-box active" data-image="https://digicrome.com/public/www/images/cirt1111.png">
            <span><strong>Our Certificate</strong></span>
            <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
          <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
            <span><strong>Internship Certificate</strong></span>
            <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
          <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
            <span><strong>Microsoft Certificate</strong></span>
            <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
          <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
            <span><strong>IBM Certificate</strong></span>
            <i class="bi bi-arrow-right-circle-fill"></i>
          </div>
        </div>
      </div>

      <!-- Right: Image Preview -->
      <div class="col-md-8 d-flex align-items-center justify-content-center">
        <img id="certificate-preview" src="https://digicrome.com/public/www/images/cirt1111.png"
             class="img-fluid rounded shadow-lg border border-light" style="max-height: 450px;" alt="Certificate">
      </div>

    </div>
  </div>
</section>

<script>
  const boxes = document.querySelectorAll('.certificate-box');
  const preview = document.getElementById('certificate-preview');

  boxes.forEach(box => {
    box.addEventListener('click', () => {
      boxes.forEach(b => b.classList.remove('active'));
      box.classList.add('active');
      preview.src = box.getAttribute('data-image');
    });
  });
</script>

<style>
 

</style>
      
          



    </div>
    </div>
  </section>
  <section>
    <div class="container my-5">
    <h2 class="section-heading text-center mb-4">Languages and Tools Covered</h2>
    <div class="row justify-content-center mt-4">
      @foreach($plainLogos as $logo)
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
          <div class="single-brand-box text-center">  
            <div class="brand-thumb">
              <img src="{{ asset('storage/'.$logo->image) }}" alt="brand" class="img-fluid">
            </div>
          </div>
        </div>
      @endforeach
    </div>
    

  </section>
  <section>
    <div class="container my-5">
    @if ($course->projects->count())
    <div class="row g-4">
      @foreach ($course->projects as $project)
      <div class="col-md-3">
      <div class="skill-box">
      <h5>{{ $project->heading }}</h5>
      <p>{!! $project->paragraph !!}</p>
      <hr>
      </div>
      </div>
    @endforeach
    </div>
    @endif

    </div>
  </section>
  
  <section class="mt-5">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
      Trusted by   <span style="color: #f29c12;">millions of learners</span> around the world
      </h2>
      <div class="container">
        <div class="row justify-content-center mt-4">
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
               <img src="https://webcdn.imarticus.org/adhoc/Frame13.svg" alt="brand">
            </div>
          </div>
        </div>				    
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
              <img src="https://webcdn.imarticus.org/adhoc/Frame14.svg" alt="brand">
            </div>
          </div>
        </div>				   
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
              <img src="https://webcdn.imarticus.org/adhoc/Frame15.svg" alt="brand">
            </div>
          </div>
        </div>	
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
              <img src="https://webcdn.imarticus.org/iso-fix/Web.webp" alt="brand">
            </div>
          </div>
        </div>	
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
              <img src="https://webcdn.imarticus.org/adhoc/Frame17.webp" alt="brand">
            </div>
          </div>
        </div>	
      </div>			    				    			    
      </div>
  
      
  </section>
  
  <section>
    <section class="my-5">
    <div class="container">
      <div class="row text-center g-4">
      <div class="col-md-3">
        <div class="stat-box p-4 rounded shadow-sm">
        <h5 class="mb-2">Happy Students</h5>
        <h2 class="text-primary fw-bold">20,000+</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box p-4 rounded shadow-sm">
        <h5 class="mb-2">Average Rating</h5>
        <h2 class="text-warning fw-bold">4.8 ⭐</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box p-4 rounded shadow-sm">
        <h5 class="mb-2">Average Salary Hike</h5>
        <h2 class="text-success fw-bold">80%</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box p-4 rounded shadow-sm">
        <h5 class="mb-2">Average Package</h5>
        <h2 class="text-danger fw-bold">₹-- LPA</h2> <!-- Add value if available -->
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
      Discover the key features and benefits you’ll gain from joining our program.
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
  <section class="my-5">
    <div class="container">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
      Our <span style="color: #f29c12;">Collaborations </span> Studies
    </h2>
    <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
      Discover the key features and benefits you’ll gain from joining our program.
    </p>
    <div class="row justify-content-center text-center g-3">
      @foreach ($placements as $placement)
      <div class="col-6 col-sm-4 col-md-2">
      <div class="placement-box">
      <img src="{{ asset('storage/' . $placement->image) }}" alt="{{ $placement->name }}">
      <div class="placement-overlay">
      <h6>{{ $placement->name }}</h6>
      <small>{{ $placement->position }}</small>
      </div>
      </div>
      </div>
    @endforeach
    </div>

    </div>
  </section>
  <div class="container my-5">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
    Application <span style="color: #f29c12;">Process </span> for Digicrome
    </h2>
    <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
    Discover the key features and benefits you’ll gain from joining our program.
    </p>
    <div class="d-flex justify-content-center flex-wrap">
    <div class="step-box">
      <div class="step-title">Career Consultation</div>
      <p>Assess eligibility with our Career Counsellor.</p>
    </div>
    <div class="step-box">
      <div class="step-title">Personalized Guidance</div>
      <p>Receive an acceptance letter if eligible.</p>
    </div>
    <div class="step-box">
      <div class="step-title">Easy Registration</div>
      <p>Pay the booking amount to confirm your seat.</p>
    </div>
    <div class="step-box">
      <div class="step-title">Start Upskilling</div>
      <p>Access the curriculum and begin your journey.</p>
    </div>
    <div class="step-box">
      <div class="step-title">Ongoing Support</div>
      <p>Receive continuous mentorship and career assistance.</p>
    </div>
    </div>
  </div>
  @foreach ($course->keyFeatures as $index => $feature)
    <section class="session-section">
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
        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}"
        style="color: #f29c12;">
        {{ $faq->question }}
        </button>
        </h2>
        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
        aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
        {!! nl2br(e($faq->answer)) !!}
        </div>
        </div>
      </div>
      @endforeach
        </div>
      @else
      <p class="text-muted">No FAQs available for this course.</p>
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
  <div class="educate-details-course-area style-inner details">
    <div class="container">
    <div class="row align-items-center section-title-space">
      <div class="col-lg-12">
      <div class="section_title text-center">
        <h1>Course you may like</h1>
      </div>
      </div>
    </div>
    <div class="row">
      @foreach($courses->take(3) as $course)
      <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="course-details-box">
      <div class="course-details-thumb">
      <img src="{{ asset($course->image) }}" alt="thumb">
      <div class="course-meta-top">
        <span>{{ $course->tag_line }}</span>
      </div>
      </div>
      <div class="course-details-content">
      <h4><a href="#">{{ $course->name }}</a></h4>
      <div class="course-rating">
        <ul>
        @for($i = 0; $i < 5; $i++)
      <li><i class="fa-solid fa-star{{ $i < $course->rating ? '' : '-half' }}"></i></li>
      @endfor
        </ul>
        <div class="course-rating-num">
        <span>({{ $course->rating }}/{{ $course->ratings_count }} Ratings)</span>
        </div>
        <div class="course-price">
        <h3>${{ $course->price }}</h3>
        </div>
      </div>
      <div class="course-details-list">
        <div class="course-lesson">
        <span><i class="fa-regular fa-file-lines"></i> {{ $course->lessons_count }} Lessons</span>
        </div>
        <div class="course-student">
        <span><i class="fa-regular fa-user"></i> {{ $course->students_count }} Students</span>
        </div>
      </div>
      <div class="course-btn">
        <a href="{{ route('course_details', ['slug' => $course->slug]) }}" class="btn">
        ENROL NOW <i class="flaticon flaticon-right-arrow"></i>
        </a>
      </div>
      </div>
      </div>
      </div>
    @endforeach
    </div>



    </div>
  </div>
  <!--==================================================-->
  <!--End educate-details-course-area -->
  <!--==================================================-->
  <!--==================================================-->
  <!-- Start educate Footer Area -->
  <!--==================================================-->

@endsection