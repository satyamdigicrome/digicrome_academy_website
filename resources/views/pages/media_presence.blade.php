@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

  <div class="breadcumb-area d-flex">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
      <div class="breadcumb-content">
        <div class="breadcumb-title">
        <h4>Media Presence</h4>
        </div>
        <ul>
        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
        <li>Media Presence</li>
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
  <section class="py-5 text-center bg-light">
    <div class="container">
    <h2 class="mb-4">Featured In</h2>
    <div class="d-flex flex-wrap justify-content-center align-items-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Times_Network_Logo.png" class="media-logo"
      alt="Times">
      <img src="https://upload.wikimedia.org/wikipedia/commons/3/35/India_Today_Group_Logo.png" class="media-logo"
      alt="India Today">
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Zee_News_logo.svg" class="media-logo"
      alt="Zee News">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/NDTV_logo.svg" class="media-logo" alt="NDTV">
    </div>
    </div>
  </section>
  <!-- Video Interviews / Highlights -->
  <section class="py-5 video-section">
    <div class="container">
    <h2 class="text-center mb-5">Interview & Highlights</h2>
    <div class="row g-4">
      <div class="col-md-6">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID1" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID2" allowfullscreen></iframe>
      </div>
    </div>
    </div>
  </section>
  <!-- Press Releases / Articles -->
  <section class="py-5 bg-light">
    <div class="container">
    <h2 class="text-center mb-4">Press Releases</h2>
    <div class="row g-4">
      <div class="col-md-4">
      <div class="card press-card p-3">
        <h5>Digicrome Shines in Education Tech 2024</h5>
        <p class="text-muted">Published in Times of India</p>
        <a href="#" class="btn btn-sm btn-theme mt-2">Read More</a>
      </div>
      </div>
      <div class="col-md-4">
      <div class="card press-card p-3">
        <h5>Student Success Story Goes Viral</h5>
        <p class="text-muted">Covered by Zee News</p>
        <a href="#" class="btn btn-sm btn-theme mt-2">Read More</a>
      </div>
      </div>
      <div class="col-md-4">
      <div class="card press-card p-3">
        <h5>Digicrome's Online Growth During 2024</h5>
        <p class="text-muted">Reported by India Today</p>
        <a href="#" class="btn btn-sm btn-theme mt-2">Read More</a>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Social Mentions / Testimonials -->
  <section class="py-5">
    <div class="container">
    <h2 class="text-center mb-4">What People Are Saying</h2>
    <div class="row">
      <div class="col-md-6">
      <div class="testimonial">
        <p>“I saw Digicrome’s success story in a news article and joined immediately. Best decision ever!”</p>
        <strong>- Priya S., Student</strong>
      </div>
      </div>
      <div class="col-md-6">
      <div class="testimonial">
        <p>“We covered Digicrome’s growth story in our publication. They're changing the game!”</p>
        <strong>- Rahul T., Journalist</strong>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Final CTA -->
  <section class="text-white text-center py-5" style="background-color: var(--theme-color);">
    <div class="container">
    <h2>Want to feature us in your media outlet?</h2>
    <p class="lead">We love sharing our journey. Let’s collaborate.</p>
    <a href="#contact" class="btn btn-light btn-lg">Contact Us</a>
    </div>
  </section>
  <style>
    h2{
      font-size: 20px;
      font-weight: 600;
    }
    :root {
    --theme-color: #f29c12;
    }

    .hero {
    background-color: var(--theme-color);
    color: white;
    padding: 80px 20px;
    text-align: center;
    }

    .media-logo {
    max-height: 50px;
    margin: 20px;
    filter: grayscale(100%);
    transition: 0.3s;
    }

    .media-logo:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
    }

    .video-section iframe {
    width: 100%;
    height: 250px;
    border-radius: 15px;
    }

    .press-card {
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: 0.3s;
    }

    .press-card:hover {
    transform: translateY(-5px);
    }

    .testimonial {
    background-color: #fff7e6;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    }

    .btn-theme {
    background-color: var(--theme-color);
    color: white;
    }

    .btn-theme:hover {
    background-color: #d88a0f;
    }
  </style>

@endsection