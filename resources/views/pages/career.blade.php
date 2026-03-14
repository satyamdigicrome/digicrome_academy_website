@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')

@include('components.lead-form-popup')



<style>
  .wedd-gall {
    margin-bottom: 90px;
    float: left;
    width: 100%;
  }

  .modal-body {
    display: block;
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

  .custom-hero-banner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .custom-hero-banner .hero-img {
    width: 100%;
    height: auto;
    display: block;
  }

  .banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
  }

  #sticky-header {
    margin-bottom: 0px;
  }

  @media (max-width: 768px) {
    .custom-hero-banner .hero-img {
      margin-top: 63px;
    }
  }

  .card.hover-shadow:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    transform: translateY(-3px);
  }

  .transition {
    transition: all 0.3s ease;
  }
</style>
<style>
  .custom-hero-banner {
    position: relative;
  }

  .hero-img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .banner-text {
    position: absolute;
    top: 50%;
    left: 5%;
    transform: translateY(-50%);
    color: white;
    max-width: 600px;
    text-align: left;
  }

  @media (max-width: 768px) {
    .banner-text {
      position: static;
      transform: none;
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      color: #fff;
      max-width: 100%;
      text-align: center;
    }

    .banner-text h1 {
      font-size: 2rem !important;
    }

    .banner-text p {
      font-size: 1rem !important;
    }

    .banner-text ul {
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .banner-text a {
      display: inline-block;
      margin-top: 15px;
    }
  }
</style>

<div class="custom-hero-banner">
  <img src="{{ asset('assets/images/care.webp') }}" alt="Career Banner" class="hero-img" loading="lazy">

  <div class="container banner-text">
    <div class="breadcumb-content">
      <div class="breadcumb-title">
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 15px;">
          Career at <span style="color: #f29c12;">Digicrome</span>
        </h1>
        <p style="font-size: 1.2rem; margin-bottom: 25px; line-height: 1.6;">
          Be part of something exciting. Join a team where your ideas matter and your growth is a priority.
          At Digicrome, we don't just build careers — we build futures.
        </p>

        <ul style="list-style: none; padding: 0; margin-bottom: 25px; font-size: 1rem; line-height: 1.8;">
          <li>✔✔ Join a visionary team reshaping education.</li>
          <li>✔✔ Grow your career in edtech.</li>
          <li>✔✔ Remote-friendly With modern workspaces.</li>
          <li>✔✔ Performance-driven growth.</li>
          <li>✔✔ Flexible, creative work culture.</li>
        </ul>

        <a href="#career" style="padding: 12px 25px; background-color: #f29c12; color: white; text-decoration: none; font-weight: bold; border-radius: 4px;">
          Explore Open Positions
        </a>
      </div>
    </div>
  </div>
</div>




<section class="company-form contactpage-form" style="background-color: orange; padding:20px">
  <div class="container-fluid" style="color: white; padding-left:50px; padding-right:50px;">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        {{-- <span style="font-family: arial; font-size: 40px;"><b>
                            Together we change <br>
                            countless lives
                        </b></span>
                    <hr> --}}<br><br><br>

        <span style="text-align: justify; font-size: 28px; color: white; font-family:arial; mt-6">
          We’re a team of passionate educators, tech enthusiasts, creators, and innovators, all working together to transform the way professionals upskill and grow.<br><br>
          If you're driven by purpose, inspired by change, and looking for more than just a job — Welcome to Digicrome.

        </span>
      </div>
      <div id="teem" class="col-lg-6 col-md-12" style="padding-top: 70px;">
        <img loading="lazy" src="{{ asset('assets/images/dc/1d.webp')}}" alt="Image" title="Image"
          style="float: right; border-radius: 3%;">
      </div>
    </div>
  </div>

</section>
<section class="company-form contactpage-form" style="padding-top: 50px;">
  <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
    <div class="section__title fw-bold" style="text-align: center; font-size: 36px; padding-bottom: 40px; color: #1a1447;">
      Why Work with Us?
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
        <div>
          <img loading="lazy" src="{{ asset('assets/images/dc/1e.webp')}}" alt="digicrome_Image" title="digicrome_Image"
            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 38%;">
          <h4 style="padding-top:20px; ">Make an Impact</h4>
          <p
            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
            Your role directly contributes to empowering thousands of learners and professionals across the country.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
        <div>
          <img loading="lazy" src="{{ asset('assets/images/dc/1f.webp')}}" alt="digicrome_Image" title="digicrome_Image"
            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
          <h4 style="padding-top:20px; ">Growth & Learning Culture</h4>
          <p
            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
            We believe in continuous growth — not just for our learners, but for our team too. You’ll have access to resources, mentorship, and opportunities to keep learning and evolving.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
        <div>
          <img loading="lazy" src="{{ asset('assets/images/dc/1g.webp')}}" alt="digicrome_Image" title="digicrome_Image"
            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
          <h4 style="padding-top:20px; ">Grow Together</h4>
          <p
            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
            Work with a team that values empathy, creativity, and collaboration. We celebrate wins together and support each other in every challenge.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
        <div>
          <img loading="lazy" src="{{ asset('assets/images/dc/1e.webp')}}" alt="digicrome_Image" title="digicrome_Image"
            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 38%;">
          <h4 style="padding-top:20px; ">Flexible & Inclusive</h4>
          <p
            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
            Whether you're working from our office or remotely, we foster a healthy work-life balance, respect individuality, and encourage diverse perspectives.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* ── Job Cards ── */
  .career-section {
    background: #f4f7fc;
    padding: 60px 0;
  }
  .career-section .section-heading {
    font-size: 2rem;
    font-weight: 700;
    color: #1a237e;
  }
  .job-card {
    background: #fff;
    border-radius: 10px;
    border: 1px solid #e3e8f0;
    overflow: hidden;
    transition: transform 0.25s, box-shadow 0.25s;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  .job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(26, 35, 126, 0.12);
  }
  .job-card .card-accent {
    height: 4px;
    background: linear-gradient(90deg, #1a237e, #f29c12);
  }
  .job-card .card-inner {
    padding: 22px 22px 18px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  .job-card .job-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #1a237e;
    margin-bottom: 6px;
  }
  .job-card .job-meta {
    font-size: 0.85rem;
    color: #555;
    margin-bottom: 4px;
  }
  .job-card .job-meta i {
    color: #f29c12;
    margin-right: 5px;
  }
  .job-card .positions-badge {
    display: inline-block;
    background: #eef0f8;
    color: #1a237e;
    font-size: 0.78rem;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
    margin-top: 10px;
    margin-bottom: 16px;
  }
  .job-card .salary-tag {
    font-size: 0.82rem;
    font-weight: 600;
    color: #2e7d32;
    margin-bottom: 14px;
  }
  .job-card .btn-apply {
    display: inline-block;
    margin-top: auto;
    border: 2px solid #f29c12;
    color: #f29c12;
    background: transparent;
    font-weight: 700;
    font-size: 0.88rem;
    padding: 7px 22px;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    align-self: flex-start;
  }
  .job-card .btn-apply:hover {
    background: #f29c12;
    color: #fff;
  }
  .job-card .card-footer-bar {
    height: 3px;
    background: #f29c12;
  }

  /* ── Apply Modal ── */
  /* Override Bootstrap 5's CSS variable that controls modal max-width */
  .apply-modal {
    --bs-modal-width: min(92vw, 1050px) !important;
  }
  .apply-modal .modal-dialog {
    width: min(92vw, 1050px) !important;
    max-width: min(92vw, 1050px) !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }
  .apply-modal .modal-content {
    border: none;
    border-radius: 14px;
    overflow: hidden;
    width:auto;
    margin:0 auto;
    box-shadow: 0 20px 60px rgba(0,0,0,0.22);
    height: 88vh;
    display: flex;
    flex-direction: column;
  }
  .apply-modal .modal-header-custom {
    background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
    padding: 20px 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
  }
  .apply-modal .modal-header-custom .modal-title-wrap h5 {
    color: #fff;
    font-size: 1.15rem;
    font-weight: 700;
    margin: 0 0 3px;
  }
  .apply-modal .modal-header-custom .modal-title-wrap small {
    color: rgba(255,255,255,0.75);
    font-size: 0.8rem;
  }
  .apply-modal .modal-header-custom .btn-close-custom {
    background: rgba(255,255,255,0.15);
    border: none;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    min-width: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.2s;
    flex-shrink: 0;
  }
  .apply-modal .modal-header-custom .btn-close-custom:hover {
    background: rgba(255,255,255,0.3);
  }
  .apply-modal .modal-body-split {
    display: flex;
    flex: 1;
    min-height: 0;
    overflow: hidden;
  }
  .apply-modal .job-detail-panel {
    flex: 0 0 55%;
    overflow-y: auto;
    padding: 28px 30px;
    border-right: 1px solid #e8eaf6;
    background: #fafbff;
  }
  .apply-modal .job-detail-panel::-webkit-scrollbar { width: 5px; }
  .apply-modal .job-detail-panel::-webkit-scrollbar-track { background: #f0f0f0; }
  .apply-modal .job-detail-panel::-webkit-scrollbar-thumb { background: #c5cae9; border-radius: 4px; }
  .apply-modal .job-detail-panel .meta-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 14px 0;
  }
  .apply-modal .job-detail-panel .meta-chip {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #e8eaf6;
    color: #1a237e;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 20px;
  }
  .apply-modal .job-detail-panel .salary-chip {
    background: #e8f5e9;
    color: #1b5e20;
  }
  .apply-modal .job-detail-panel h6.section-label {
    font-size: 0.85rem;
    font-weight: 700;
    color: #1a237e;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 20px 0 8px;
    padding-bottom: 6px;
    border-bottom: 2px solid #e8eaf6;
  }
  .apply-modal .job-detail-panel .desc-content {
    font-size: 0.9rem;
    color: #444;
    line-height: 1.7;
  }
  .apply-modal .form-panel {
    flex: 0 0 45%;
    overflow-y: auto;
    padding: 28px 28px 22px;
    background: #fff;
  }
  .apply-modal .form-panel::-webkit-scrollbar { width: 5px; }
  .apply-modal .form-panel::-webkit-scrollbar-track { background: #f0f0f0; }
  .apply-modal .form-panel::-webkit-scrollbar-thumb { background: #c5cae9; border-radius: 4px; }
  .apply-modal .form-panel h6 {
    font-size: 1rem;
    font-weight: 700;
    color: #1a237e;
    margin-bottom: 18px;
    padding-bottom: 10px;
    border-bottom: 2px solid #e8eaf6;
  }
  .apply-modal .form-panel .form-label {
    font-size: 0.82rem;
    font-weight: 600;
    color: #444;
    margin-bottom: 4px;
  }
  .apply-modal .form-panel .form-control {
    font-size: 0.88rem;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    padding: 9px 12px;
    transition: border-color 0.2s, box-shadow 0.2s;
  }
  .apply-modal .form-panel .form-control:focus {
    border-color: #1a237e;
    box-shadow: 0 0 0 3px rgba(26,35,126,0.1);
    outline: none;
  }
  .apply-modal .form-panel .file-upload-area {
    border: 2px dashed #c5cae9;
    border-radius: 8px;
    padding: 18px 16px;
    text-align: center;
    background: #f5f6ff;
    cursor: pointer;
    transition: border-color 0.2s;
  }
  .apply-modal .form-panel .file-upload-area:hover {
    border-color: #1a237e;
  }
  .apply-modal .form-panel .file-upload-area input[type="file"] {
    display: none;
  }
  .apply-modal .form-panel .btn-submit {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 700;
    letter-spacing: 0.3px;
    cursor: pointer;
    transition: opacity 0.2s, transform 0.15s;
    margin-top: 6px;
  }
  .apply-modal .form-panel .btn-submit:hover {
    opacity: 0.92;
    transform: translateY(-1px);
  }

  @media (max-width: 768px) {
    .apply-modal .modal-dialog {
      width: 100vw !important;
      max-width: 100vw !important;
      margin: 0 !important;
    }
    .apply-modal .modal-content {
      height: 100dvh;
      border-radius: 0;
    }
    .apply-modal .modal-body-split {
      flex-direction: column;
      overflow-y: auto;
    }
    .apply-modal .job-detail-panel {
      flex: none;
      border-right: none;
      border-bottom: 1px solid #e8eaf6;
      overflow-y: visible;
    }
    .apply-modal .form-panel {
      flex: none;
      overflow-y: visible;
    }
  }
</style>

<section class="career-section" id="career">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-heading">Join Our Dynamic Team</h2>
      <p class="text-muted mt-2">Discover exciting career opportunities and become a part of something great.</p>
      <p class="text-secondary"><small>Your region: {{ $userCountry }}</small></p>
    </div>

    <div class="row g-4">
      @foreach($vacancies as $vacancy)
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="job-card w-100">
          <div class="card-accent"></div>
          <div class="card-inner">
            <div class="job-title">{{ $vacancy->title }}</div>
            <div class="job-meta"><i class="bi bi-geo-alt-fill"></i>Job Location : {{ $vacancy->location }}</div>
            <div class="job-meta"><i class="bi bi-building"></i>{{ $vacancy->company_name }}</div>
            @if($vacancy->experience_level)
            <div class="job-meta"><i class="bi bi-briefcase-fill"></i>{{ $vacancy->experience_level }}</div>
            @endif
            <span class="positions-badge"><i class="bi bi-people-fill me-1"></i>Current Positions: {{ $vacancy->positions ?? 12 }}</span>
            @if($vacancy->salary)
            <div class="salary-tag">💰 {{ $vacancy->salary }}</div>
            @endif
            <button
              class="btn-apply"
              data-bs-toggle="modal"
              data-bs-target="#applyModal{{ $vacancy->id }}">
              Apply Now
            </button>
          </div>
          <div class="card-footer-bar"></div>
        </div>
      </div>

      <!-- Improved Apply Modal -->
      <div class="modal fade apply-modal" id="applyModal{{ $vacancy->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:92vw;max-width:1050px;margin:auto;">
          <div class="modal-content" style="height:88vh;display:flex;flex-direction:column;border:none;border-radius:14px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.22);">
            <!-- Custom Header -->
            <div class="modal-header-custom">
              <div class="modal-title-wrap">
                <h5>{{ $vacancy->title }}</h5>
                <small><i class="bi bi-geo-alt-fill me-1"></i>{{ $vacancy->location }} &nbsp;|&nbsp; <i class="bi bi-building me-1"></i>{{ $vacancy->company_name }}</small>
              </div>
              <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>

            <!-- Body: split panel -->
            <div class="modal-body-split" style="display:flex;flex:1;min-height:0;overflow:hidden;">

              <!-- Left: Job Details -->
              <div class="job-detail-panel" style="flex:0 0 55%;overflow-y:auto;padding:28px 30px;border-right:1px solid #e8eaf6;background:#fafbff;">
                <div class="meta-chips">
                  <span class="meta-chip"><i class="bi bi-tag-fill"></i>{{ $vacancy->type }}</span>
                  <span class="meta-chip"><i class="bi bi-briefcase-fill"></i>{{ $vacancy->experience_level }}</span>
                  <span class="meta-chip"><i class="bi bi-grid-fill"></i>{{ $vacancy->industry }}</span>
                  @if($vacancy->salary)
                  <span class="meta-chip salary-chip"><i class="bi bi-cash-stack"></i>{{ $vacancy->salary }}</span>
                  @endif
                </div>

                <h6 class="section-label">Job Description</h6>
                <div class="desc-content">{!! $vacancy->description !!}</div>

                <h6 class="section-label">Requirements</h6>
                <div class="desc-content">{!! $vacancy->requirements !!}</div>
              </div>

              <!-- Right: Application Form -->
              <div class="form-panel" style="flex:0 0 45%;overflow-y:auto;padding:28px 28px 22px;background:#fff;">
                <form action="{{ route('vacancy.apply') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">

                  <h6><i class="bi bi-send-fill me-2" style="color:#f29c12"></i>Quick Apply</h6>

                  @error('resume')
                  <div class="alert alert-danger py-2 mb-3" style="font-size:0.83rem">{{ $message }}</div>
                  @enderror

                  <div class="mb-3">
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Your full name" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="tel" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Cover Letter / Message <span class="text-danger">*</span></label>
                    <textarea name="cover_letter" class="form-control" rows="4" placeholder="Tell us why you're a great fit..." required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Resume <span class="text-danger">*</span></label>
                    <label class="file-upload-area d-block" for="resume{{ $vacancy->id }}">
                      <i class="bi bi-cloud-upload-fill" style="font-size:1.6rem; color:#1a237e; display:block; margin-bottom:6px;"></i>
                      <span style="font-size:0.85rem; color:#555; font-weight:600;">Click to upload your resume</span><br>
                      <small class="text-muted">PDF, DOC, DOCX &mdash; Max 5MB</small>
                      <input type="file" name="resume" id="resume{{ $vacancy->id }}" required accept=".pdf,.doc,.docx">
                    </label>
                    <p id="file-name-{{ $vacancy->id }}" style="font-size:0.78rem; color:#1a237e; margin-top:5px;"></p>
                  </div>

                  <button type="submit" class="btn-submit">
                    <i class="bi bi-send-fill me-2"></i>Submit Application
                  </button>
                </form>
              </div>

            </div><!-- /modal-body-split -->
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  // Force modal width on every open — guaranteed override of Bootstrap internals
  document.querySelectorAll('.apply-modal').forEach(function(modal) {
    modal.addEventListener('show.bs.modal', function() {
      var dialog = this.querySelector('.modal-dialog');
      if (dialog) {
        var w = Math.min(window.innerWidth * 0.92, 1050);
        dialog.style.cssText += ';width:' + w + 'px!important;max-width:' + w + 'px!important;margin:auto!important;';
      }
    });
  });

  // Show selected filename in file upload areas
  document.querySelectorAll('.file-upload-area input[type="file"]').forEach(function(input) {
    input.addEventListener('change', function() {
      var id = this.id.replace('resume', '');
      var display = document.getElementById('file-name-' + id);
      if (display) {
        display.textContent = this.files.length ? '📎 ' + this.files[0].name : '';
      }
    });
  });
</script>
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{ session('error') }}
</div>
@endif





@endsection