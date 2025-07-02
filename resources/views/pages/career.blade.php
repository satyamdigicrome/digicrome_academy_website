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
          <li>✔✔ Remote-friendly & modern workspaces.</li>
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
          At Digicrome, we don’t just build careers — we shape futures. We’re a team of passionate educators, tech enthusiasts, creators, and innovators, all working together to transform the way professionals upskill and grow.<br><br>
          If you're driven by purpose, inspired by change, and looking for more than just a job — welcome Digicrome.

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
          <h4 style="padding-top:20px; ">Do Work That Matters</h4>
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
          <h4 style="padding-top:20px; ">Together, We Grow</h4>
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
<section class="py-5 bg-white" id="career">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 30px" class="fw-bold">Join Our Dynamic Team</h2>
      <p class="lead text-muted">Discover exciting career opportunities and become a part of something great.</p>
      <p class="text-secondary"><small>Your region: {{ $userCountry }}</small></p>
    </div>


    <div class="row g-4">
      @foreach($vacancies as $vacancy)
      <div class="col-lg-6 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-3">
          <div class="card-body d-flex flex-column">
            <!-- Header: Job Title and Type Badge -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="card-title mb-0 text-primary fw-bold">{{ $vacancy->title }}</h5>
              <span class="badge bg-info text-dark text-uppercase px-3 py-1 fw-semibold">{{ $vacancy->type }}</span>
            </div>

            <!-- Company, Location, Experience and Salary -->
            <p class="text-muted mb-1"><i class="bi bi-building me-2"></i>{{ $vacancy->company_name }}</p>
            <p class="text-muted mb-1"><i class="bi bi-geo-alt-fill me-2"></i>{{ $vacancy->location }}</p>
            <p class="text-muted mb-1"><i class="bi bi-briefcase-fill me-2"></i>{{ $vacancy->experience_level }}</p>
            <p class="text-success fw-semibold fs-5 mb-3">💰 {{ $vacancy->salary }}</p>

            <!-- Industry Badge -->
            <div class="mb-3">
              <span class="badge bg-secondary text-white">{{ $vacancy->industry }}</span>
            </div>

            <!-- Button to open modal -->
            <button
              class="btn btn-primary mt-auto"
              data-bs-toggle="modal"
              data-bs-target="#applyModal{{ $vacancy->id }}">
              View & Apply
            </button>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="applyModal{{ $vacancy->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content border-0 shadow-lg" style="max-height: 90vh;">
            <form action="{{ route('vacancy.apply') }}" method="POST" enctype="multipart/form-data" class="p-3">
              @csrf
              <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Apply for: {{ $vacancy->title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
              </div>

              <div class="modal-body" style="max-height: 75vh; overflow-y: hidden;">
                <div class="row g-4">
                  <!-- Left side: Job info (70% width) -->
                  <div class="col-lg-8" style="max-height: 70vh; overflow-y: auto; border-right: 1px solid #ddd; padding-right: 30px;">
                    <h4 class="fw-bold mb-3">{{ $vacancy->title }}</h4>
                    <p class="mb-1"><strong>Company:</strong> {{ $vacancy->company_name }}</p>
                    <p class="mb-1"><strong>Location:</strong> {{ $vacancy->location }}</p>
                    <p class="mb-1"><strong>Type:</strong> {{ $vacancy->type }}</p>
                    <p class="mb-1"><strong>Experience Level:</strong> {{ $vacancy->experience_level }}</p>
                    <p class="mb-4 text-success fw-semibold fs-5">💰 {{ $vacancy->salary }}</p>

                    <h5 class="fw-semibold mb-2">Job Description</h5>
                    <div class="mb-4" style="list-style: disc;">{!! $vacancy->description !!}</div>

                    <h5 class="fw-semibold mb-2">Requirements</h5>
                    <div style="list-style: disc;">{!! $vacancy->requirements !!}</div>
                  </div>

                  <!-- Right side: Application form (30% width) -->
                  <div class="col-lg-4" style="max-height: 70vh; overflow-y: auto; padding-left: 30px;">
                    @error('resume')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="vacancy_id" value="{{ $vacancy->id }}">

                    <div class="mb-3">
                      <label for="name{{ $vacancy->id }}" class="form-label fw-semibold">Name</label>
                      <input type="text" name="name" id="name{{ $vacancy->id }}" class="form-control form-control-sm" placeholder="Your full name" required>
                    </div>
                    <div class="mb-3">
                      <label for="email{{ $vacancy->id }}" class="form-label fw-semibold">Email</label>
                      <input type="email" name="email" id="email{{ $vacancy->id }}" class="form-control form-control-sm" placeholder="you@example.com" required>
                    </div>
                    <div class="mb-3">
                      <label for="phone{{ $vacancy->id }}" class="form-label fw-semibold">Phone</label>
                      <input type="tel" name="phone" id="phone{{ $vacancy->id }}" class="form-control form-control-sm" placeholder="+1234567890" required>
                    </div>
                    <div class="mb-3">
                      <label for="cover_letter{{ $vacancy->id }}" class="form-label fw-semibold">Message</label>
                      <textarea name="cover_letter" id="cover_letter{{ $vacancy->id }}" class="form-control form-control-sm" rows="3" placeholder="Write a brief cover letter" required></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="resume{{ $vacancy->id }}" class="form-label fw-semibold">Resume</label>
                      <input
                        type="file"
                        name="resume"
                        id="resume{{ $vacancy->id }}"
                        class="form-control form-control-sm"
                        required
                        accept=".pdf,.doc,.docx" />
                      <small class="text-muted">Max file size: 5MB</small>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mt-2 fw-semibold">Submit Application</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>



      @endforeach

    </div>
  </div>
</section>
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