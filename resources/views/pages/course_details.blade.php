@extends('layouts.app')

@section('title', 'Home Page')

@section('content')







  @if ($course->course_free == 1)
    <!--==================================================-->
    <!-- Start educate Breadcumb Area -->
    <!--==================================================-->
    <style>
    .nedesign {
    margin-top: 102px;

    .courses-details {
      /* background-image: url(../images/courses/best-online-data-science-program-with-guaranteed-placement.png); */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      height: auto;
      position: relative;
      align-items: center;
      display: flex;
      margin-bottom: 20px;
      padding: 130px 0px;
      width: 100%;
    }

    .ds-banner {
      padding: 40px 0px 108px;
      position: relative;
      background-position: center;
    }

    .col-flex {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .ds-banner .course-heading-banner h1 {
      color: #000;
      font-size: 34px;
      line-height: 1.3;
    }

    .courses-details .course-heading-banner h2 {
      font-size: 34px;
      font-weight: 600;
      text-transform: capitalize;
      position: relative;
      color: #000;
      line-height: 1.4;
    }

    .courses-details .course-heading-banner .ds-logo {
      max-width: 45%;
    }

    .courses-details .course-heading-banner .black-box {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 7px 15px;
      width: 86%;
      margin: auto 0;
      border-radius: 4px;
      margin-top: 14px;
    }

    .courses-details .course-heading-banner .black-box .yellow-text {
      color: #f9d74a;
      font-size: 13px;
      font-weight: 500;
    }

    .courses-details .course-heading-banner .black-box span {
      display: block;
    }

    .text-center {
      text-align: center !important;
    }

    .ds-banner .ai-box {
      width: 70%;
      margin: 15px auto 0;
    }

    .ds-banner .ai-box .cont span {
      color: #ff0000;
      font-weight: 600;
      font-size: 15px;
    }

    .ds-banner .ai-box .cont h3 {
      color: #fff;
      margin-bottom: 0;
      line-height: 1.2;
      font-size: 22px;
      text-transform: uppercase;
      font-weight: 400;
      letter-spacing: 1px;
    }

    .ds-banner .ai-box .cont h3 span {
      color: #fff;
      font-size: 27px;
      font-weight: 400;
    }

    .ds-banner .course-heading-banner h1 {
      color: #000;
      font-size: 34px;
      line-height: 1.3;
    }

    .courses-details .course-heading-banner h1 {
      font-size: 34px;
      font-weight: 600;
      text-transform: capitalize;
      position: relative;
      color: #fff;
      line-height: 1.4;
    }

    .mobile-display {
      display: none;
    }

    @media (min-width: 1601px) and (max-width: 8000px) {
      .ds-banner .ai-box .img img {
      max-width: 65%;
      }
    }

    @media (min-width: 992px) {
      .offset-lg-2 {
      margin-left: 16.666667%;
      }
    }

    @media (min-width: 1601px) and (max-width: 8000px) {
      .container-fluid {
      width: 76%;
      margin: 0 12%;
      }
    }

    @media (min-width: 1601px) and (max-width: 8000px) {
      .ds-banner {
      padding: 80px 0px 153px;
      }
    }

    @media (max-width: 768px) {
      .aiimg {
      max-width: 40%;
      filter: invert(1);
      display: none;
      }
    }

    @media (max-width: 767px) {
      .ds-banner .course-heading-banner {
      padding: 0;
      }
    }

    @media (max-width: 767px) {
      .ds-banner-mobile {
      background-position: 5% center;
      padding: 0px;
      }
    }

    @media (max-width: 992px) {
      .container-fluid {
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      }
    }

    @media (max-width: 767px) {
      .ds-banner::before {
      position: absolute;
      content: "";
      height: 100%;
      top: 0;
      width: 100%;
      background-image: linear-gradient(transparent 83%, #004aad 134%);
      }
    }

    @media (max-width: 992px) {
      .container-fluid {
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      }
    }

    @media (max-width: 767px) {
      .ds-banner .course-heading-banner h1 {
      font-size: 18px;
      }
    }

    @media (max-width: 767px) {
      .courses-details .course-heading-banner h1 {
      font-size: 16px;
      line-height: 1.2;
      }
    }

    @media (max-width: 768px) {
      .courses-details .course-heading-banner .black-box {
      padding: 9px 12px;
      width: 100%;
      }
    }

    @media (max-width: 767px) {
      .courses-details .course-heading-banner .black-box .yellow-text {
      font-size: 12px;
      margin-bottom: 5px;
      }
    }

    @media (max-width: 767px) {
      .courses-details .course-heading-banner .black-box .green-text {
      font-size: 14px;
      line-height: 1.1;
      }
    }

    @media (max-width: 768px) {
      .ds-banner .ai-box {
      width: 48%;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner p {
      color: #000;
      font-size: 15px;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .collab-box {
      width: 65%;
      margin: 30px auto;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .collab-box .heading-collab {
      color: #000;
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 10px;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .collab-box .collab-deatil {
      border-top: 2px solid #000;
      border-bottom: 2px solid #000;
      padding: 15px 0;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .collab-box .collab-deatil ul {
      align-items: center;
      display: flex;
      justify-content: space-between;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .collab-box .collab-deatil ul li {
      font-size: 15px;
      color: #000;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .course-specification {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-top: 30px;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .course-specification .box {
      background-color: #fff;
      box-shadow: 0 0 6px 0.2rem rgb(178 178 178 / 16%);
      padding: 10px;
      width: 48%;
      margin-bottom: 4%;
      text-align: center;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .course-specification .box p {
      color: #cc1db9;
      margin-bottom: 2px;
      font-size: 18px;
      font-weight: 600;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .course-specification .box span {
      color: #000;
      font-size: 13px;
      display: block;
      }
    }

    @media (max-width: 767px) {
      .mobile-banner .course-specification .fill-btn {
      width: 65%;
      padding: 8px 15px;
      margin: 10px auto;
      }
    }

    @media (max-width: 767px) {
      .mobile-display-none {
      display: none;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail {
      justify-content: center;
      flex-wrap: wrap;
      display: flex;
      }
    }

    @media (max-width: 992px) {
      .banner-date-2 .banner-detail {
      grid-gap: 6px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .width {
      width: 100%;
      margin-bottom: 30px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border {
      width: 25%;
      padding: 0 5px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border h2 {
      font-size: 18px;
      color: #f8b700;
      margin-bottom: 15px;
      }
    }

    @media (max-width: 768px) {
      .banner-date-2 .banner-detail .date-border h2 {
      font-size: 16px;
      margin-bottom: 36px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border .fill-btn {
      background-color: #f8b700;
      border-color: #f8b700;
      padding: 8px 15px;
      font-size: 11px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border {
      width: 25%;
      padding: 0 5px;
      }
    }

    @media (max-width: 768px) {
      .banner-date-2 .banner-detail .date-border {
      padding: 0;
      margin-bottom: 0;
      }
    }

    @media (max-width: 768px) {
      .banner-date-2 .banner-detail .date-border img {
      max-width: 58px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border p {
      font-size: 13px;
      }
    }

    @media (max-width: 767px) {
      .banner-date-2 .banner-detail .date-border span {
      font-size: 8px;
      }
    }

    @media (max-width: 992px) {
      .banner-date-2 .banner-detail .date-border span {
      font-size: 10px;
      display: block;
      }
    }

    @media (max-width: 767px) {
      .mobile-display {
      display: block;
      }
    }

    .fill-btn {
      background-color: #f29c12;
      border: 2px solid #f29c12;
      padding: 12px 20px;
      text-align: center;
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      border-radius: 5px;
    }

    .banner-date-2 {
      border: none;
      box-shadow: none;
      backdrop-filter: blur(3px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-bottom: 2px solid #dfdfdf;
      border-radius: 15px;
      margin: 0 auto;
      margin-top: -118px;
      max-width: 95%;
      position: relative;
      padding: 25px 40px;
    }

    .banner-date-2 .banner-detail {
      display: flex;
      justify-content: space-between;
      flex-direction: row;
    }

    .banner-date-2 .banner-detail .date-border h2 {
      font-size: 20px;
      color: #f8b700;
      margin-bottom: 48px;
    }

    .banner-date-2 .banner-detail .date-border .fill-btn {
      background-color: #f8b700;
      border-color: #f8b700;
    }

    .banner-date-2 .banner-detail .date-border {
      text-align: center;
      margin-bottom: 10px;
      padding: 0 8px;
      border-right: none;
      position: relative;
      flex-grow: 1;
    }

    .banner-date-2 .banner-detail .date-border img {
      max-width: 75px;
      margin-bottom: 12px;
      padding: 5px;
    }

    .banner-date-2 .banner-detail .date-border p {
      margin-bottom: 0px;
      font-size: 18px;
      font-weight: 600;
      color: #000;
      position: relative;
    }

    .banner-date-2 .banner-detail .date-border .icon-plus::after {
      position: absolute;
      content: "+";
      color: #cc1db9;
      font-size: 20px;
      top: -9px;
    }

    .banner-date-2 .banner-detail .date-border span {
      display: block;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 0px;
      color: #000;
    }

    @media (min-width: 1601px) and (max-width: 8000px) {
      .banner-date-2 {
      width: 76%;
      margin: 0 12%;
      margin-top: -118px;
      }
    }
    }

    .skill-box {
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s;
    }

    .skill-box:hover {
    transform: translateY(-5px);
    }
    </style>
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
                    <img src="{{ asset('storage/' . $keypoint->image) }}" 
                         alt="{{ $keypoint->name }}" 
                         style="width: 24px; height: 24px; object-fit: cover; margin-right: 10px;">
                    <span>{{ $keypoint->name }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endforeach

    
      
    </div>
  </div>
  <section class="py-5 bg-light">
    <div class="container text-center">
    <h2 class="mb-5 display-5 fw-bold" style="color: #f29c12;">What Sets Digicrome Apart?</h2>

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
                    <img src="{{ asset('storage/' . $apart->image) }}" class="mb-3 mx-auto d-block" style="height: 50px;">
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
      <h2>Course Curriculum</h2>
      </div>
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

      <style>
      .arrow-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 40px 0;
      }

      .arrow-body {
        width: 6px;
        height: 60px;
        background-color: #f29c12;
      }

      .arrow-head {
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 30px solid #f29c12;
      }

      .feature-box {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 40px;
      }

      .feature-box p {
        font-size: 16px;
        margin-bottom: 15px;
      }

      .section-heading {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        border-bottom: 3px solid #007bff;
        display: inline-block;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }

      .usces-img {
        width: 100%;
        max-width: 120px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }

      .tool-logo {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 5px;
        background-color: #fff;
      }

      .section-heading {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        border-bottom: 3px solid #007bff;
        display: inline-block;
        padding-bottom: 10px;
      }

      .stat-box {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
      }

      .stat-box:hover {
        transform: translateY(-5px);
      }

      .case-box {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
        transition: transform 0.3s ease;
      }

      .case-box:hover {
        transform: translateY(-6px);
      }

      .step-box {
        background-color: #f8f9fa;
        border: 2px solid #0d6efd;
        border-radius: 15px;
        padding: 20px;
        min-width: 200px;
        max-width: 220px;
        text-align: center;
        margin: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
      }

      .step-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
      }

      .step-title {
        font-weight: 600;
        margin-bottom: 10px;
        color: #0d6efd;
      }
      </style>
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


      <div class="row justify-content-center my-4">
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-3">
        <img src="https://digicrome.com/public/www/images/usces.png" class="usces-img" alt="Logo 1">
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-3">
        <img src="https://digicrome.com/public/www/images/usces.png" class="usces-img" alt="Logo 2">
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center mb-3">
        <img src="https://digicrome.com/public/www/images/usces.png" class="usces-img" alt="Logo 3">
      </div>
      </div>




    </div>
    </div>
  </section>
  <section>
    <div class="container my-5">
    <h2 class="section-heading text-center mb-4">Languages and Tools Covered</h2>


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
      <h2 class="text-center mb-4">Case Studies</h2>
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
    <h2 class="text-center mb-4">Our Collaborations</h2>
    <div class="row justify-content-center text-center g-3">
      <div class="col-6 col-sm-4 col-md-2">
      <img src="https://us.ingrade.io/wp-content/uploads/2025/01/10.png" class="img-fluid rounded shadow-sm"
        alt="Image 1">
      </div>
      <div class="col-6 col-sm-4 col-md-2">
      <img src="https://us.ingrade.io/wp-content/uploads/2025/01/10.png" class="img-fluid rounded shadow-sm"
        alt="Image 2">
      </div>
      <div class="col-6 col-sm-4 col-md-2">
      <img src="https://us.ingrade.io/wp-content/uploads/2025/01/10.png" class="img-fluid rounded shadow-sm"
        alt="Image 3">
      </div>
      <div class="col-6 col-sm-4 col-md-2">
      <img src="https://us.ingrade.io/wp-content/uploads/2025/01/10.png" class="img-fluid rounded shadow-sm"
        alt="Image 4">
      </div>
      <div class="col-6 col-sm-4 col-md-2">
      <img src="https://us.ingrade.io/wp-content/uploads/2025/01/10.png" class="img-fluid rounded shadow-sm"
        alt="Image 5">
      </div>
    </div>
    </div>
  </section>
  <div class="container my-5">
    <h2 class="text-center mb-4">Application Process for Digicrome</h2>
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
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
    </div>
    </div>
  </section>
  <section class="session-section">
    <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 session-text">
      <h2 class="session-title">Live Interactive Sessions</h2>
      <p>
        Join instructor-led live sessions where you can ask questions, join discussions, and engage with peers.
        The live sessions will help deepen your understanding while keeping you connected throughout the program.
      </p>
      </div>
      <div class="col-md-6 text-center">
      <img src="https://us.ingrade.io/wp-content/uploads/2024/12/Point___1_-removebg-preview-300x300.png"
        alt="Live Session Image" class="session-img">
      </div>
    </div>
    </div>
  </section>
  <!--==================================================-->
  <!--End educate-details-course-area -->
  <!--==================================================-->
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
      <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="course-details-box">
        <div class="course-details-thumb">
        <img src="assets/images/inner-img/course-thumb1.webp" alt="thumb">
        <div class="course-meta-top">
          <span>Business</span>
        </div>
        </div>
        <div class="course-details-content">
        <h4><a href="course.html">Business Innovation And
          Development</a></h4>
        <div class="course-rating">
          <ul>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
          </ul>
          <div class="course-rating-num">
          <span>(4.5/3 Ratings)</span>
          </div>
          <div class="course-price">
          <h3>$60</h3>
          </div>
        </div>
        <div class="course-details-list">
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
      <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="course-details-box">
        <div class="course-details-thumb">
        <img src="assets/images/inner-img/course-thumb3.webp" alt="thumb">
        <div class="course-meta-top">
          <span>Networking</span>
        </div>
        </div>
        <div class="course-details-content">
        <h4><a href="course.html">Fundamentals of Network
          And Domains</a></h4>
        <div class="course-rating">
          <ul>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
          </ul>
          <div class="course-rating-num">
          <span>(4.5/3 Ratings)</span>
          </div>
          <div class="course-price">
          <h3>Free</h3>
          </div>
        </div>
        <div class="course-details-list">
          <div class="course-lesson">
          <span><i class="fa-regular fa-file-lines"></i> 10 Leasons</span>
          </div>
          <div class="course-student">
          <span><i class="fa-regular fa-user"></i> 190 Students</span>
          </div>
        </div>
        <div class="course-btn">
          <a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
        </div>
        </div>
      </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="course-details-box">
        <div class="course-details-thumb">
        <img src="assets/images/inner-img/course-thumb3.webp" alt="thumb">
        <div class="course-meta-top">
          <span>Finance</span>
        </div>
        </div>
        <div class="course-details-content">
        <h4><a href="course.html">Banking Management for
          Economics Industry</a></h4>
        <div class="course-rating">
          <ul>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-solid fa-star"></i></li>
          <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
          </ul>
          <div class="course-rating-num">
          <span>(4.5/3 Ratings)</span>
          </div>
          <div class="course-price">
          <h3>$80 <del>$100</del></h3>
          </div>
        </div>
        <div class="course-details-list">
          <div class="course-lesson">
          <span><i class="fa-regular fa-file-lines"></i> 20 Leasons</span>
          </div>
          <div class="course-student">
          <span><i class="fa-regular fa-user"></i> 890 Students</span>
          </div>
        </div>
        <div class="course-btn">
          <a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
        </div>
        </div>
      </div>
      </div>
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