@extends('layouts.app')
@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')
@section('content')
@include('components.lead-form-popup')



<div class="custom-hero-banner">
  <img src="{{ asset('assets/images/Media.webp') }}" alt="Media Banner" class="hero-img" loading="lazy">

  <div class="container banner-text">
    <div class="breadcumb-content">
      <div class="breadcumb-title">
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 15px;">
          Media Presence of <span style="color: #fff;">Digicrome</span>
        </h1>
        <ul style="list-style: none; padding: 0; margin-bottom: 25px; font-size: 1rem; line-height: 1.8;">
          <li>✔✔ Featured in top education and tech media outlets.</li>
          <li>✔✔ Recognized for innovation and impact in edtech.</li>
          <li>✔✔ Thought leadership articles from our experts.</li>
          <li>✔✔ Interviews, press releases, and media kits.</li>
          <li>✔✔ Growing presence in national and international news.</li>
        </ul>

        {{-- <a href="#media-coverage" style="padding: 12px 25px; background-color: #f29c12; color: white; text-decoration: none; font-weight: bold; border-radius: 4px;">
          View Media Highlights
        </a> --}}
      </div>
    </div>
  </div>
</div>

<style>
  #sticky-header {
    margin-bottom: 0px;
}
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

    .award-card {
        transition: transform 0.3s ease;
    }
    .award-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .award-image {
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
    }
    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }
    @media (max-width: 768px) {
        .award-image {
            height: 200px;
        }
    }
</style>








<section class="py-5 bg-light">
  <div class="container">
    <div class="owl-carousel mentor-carousel">
      
      <!-- Card 1 -->
      @foreach($articles as $article)
<div class="card h-100 shadow-sm rounded-4 p-2 mb-4">
    <img src="{{ asset($article->image) }}" class="card-img-top rounded-4" alt="Article Image">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $article->heading }}</h5>
        <p class="card-text text-muted small mb-2">Date: {{ \Carbon\Carbon::parse($article->date)->format('F d, Y') }}</p>
        <div class="mt-auto text-center">
            <a href="{{ $article->link }}" class="read-article-link">Read Article</a>
        </div>
    </div>
</div>
@endforeach


      <!-- Add more cards similarly -->

    </div>
  </div>
</section>
<style>
  .read-article-link {
    display: inline-block;
    font-weight: 500;
    text-decoration: underline;
    color: #007bff;
    transition: color 0.3s;
  }
  
  .read-article-link:hover {
    color: #0056b3;
    text-decoration: none;
  }
  </style>
  





<div class="container">
    <div class="text-center py-5">
      <h2 class="fw-bold" style="font-size: 2.5rem;">Our Media Presence</h2>
      <p class="text-muted" style="font-size: 1.2rem;">
        These awards highlight our commitment to excellence and innovation in education.
      </p>
         </div>

  <!-- Award 1 -->
  @foreach($data as $index => $entry)
  <div class="row align-items-center award-section {{ $index % 2 == 1 ? 'flex-md-row-reverse' : '' }}">
      <div class="col-md-6">
          <img src="{{ asset('storage/' . $entry->image) }}" alt="{{ $entry->heading }}" class="award-image img-fluid">
      </div>
      <div class="col-md-6 award-content">
          <h3>{{ $entry->heading }}</h3>
          <p>{!! $entry->description !!}</p>
      </div>
  </div>
@endforeach
</div>
<style>
  .award-section {
    margin: 40px 0;
}

.award-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.award-content h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.award-content p {
    font-size: 16px;
    line-height: 1.6;
}

  </style>



  {{-- <section class="py-5 text-center bg-light">
    <div class="container">
    <h2 class="mb-4">Featured In</h2>
    <div class="d-flex flex-wrap justify-content-center align-items-center">
      <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/6/64/Times_Network_Logo.png" class="media-logo"
      alt="Times" title="Times">
      <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/3/35/India_Today_Group_Logo.png" class="media-logo"
      alt="India Today" title="India Today">
      <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Zee_News_logo.svg" class="media-logo"
      alt="Zee News" title="Zee News">
      <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/6/69/NDTV_logo.svg" class="media-logo" alt="NDTV" title="NDTV">
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
  </style> --}}

@endsection