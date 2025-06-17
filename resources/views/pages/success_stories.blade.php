@extends('layouts.app')
@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')
@section('content')

  <div class="breadcumb-area d-flex">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
      <div class="breadcumb-content">
        <div class="breadcumb-title">
        <h4>Success Stories</h4>
        </div>
        <ul>
        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
        <li>Success Stories</li>
        </ul>
      </div>
      </div>
    </div>
    <div class="breadcumb-shape">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
    </div>
    <div class="breadcumb-shape2">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
    </div>
    </div>
  </div>
<!-- Stats Section -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <h2 class="fw-bold display-5 text-primary">5000+</h2>
        <p class="mb-0 fs-5">Students Placed</p>
      </div>
      <div class="col-md-4">
        <h2 class="fw-bold display-5 text-primary">100+</h2>
        <p class="mb-0 fs-5">Top Companies</p>
      </div>
      <div class="col-md-4">
        <h2 class="fw-bold display-5 text-primary">100%</h2>
        <p class="mb-0 fs-5">Career Growth Support</p>
      </div>
    </div>
  </div>
</section>

<!-- Student Success Stories -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="mb-5 text-center fw-bold">Meet Our Champions</h2>
    <div class="row g-4">
      @foreach ($studentStories as $story)
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-4">
          <img loading="lazy"src="{{ asset('storage/' . $story->image) }}"
            alt="Student Photo"
            class="rounded-circle mx-auto mb-3"
            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #f29c12;">
          
          <div class="card-body">
            <h5 class="fw-bold mb-1">{{ $story->studentname }}</h5>
            <span class="badge bg-warning text-dark mb-2">{{ $story->position }}</span>
            <p class="text-muted small">{{ $story->stoire }}</p>
            <h6 class="text-primary fw-semibold mt-3">{{ $story->companyname }}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<style>
  .card.student-card {
  transition: transform 0.3s ease;
}

.card.student-card:hover {
  transform: translateY(-5px);
}

.badge {
  font-size: 0.9rem;
  padding: 0.5em 1em;
  border-radius: 20px;
}

.card-title {
  font-size: 1.1rem;
}

.text-primary {
  color: #f29c12 !important;
}

  </style>

  <style>
    .hero {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    padding: 80px 20px;
    text-align: center;
    }

    .student-card {
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    }

    .student-card:hover {
    transform: translateY(-10px);
    }

    .company-logo {
    max-height: 40px;
    }

    .digicrome-tag {
    background-color: #2575fc;
    color: white;
    padding: 5px 10px;
    font-weight: bold;
    display: inline-block;
    border-radius: 5px;
    font-size: 0.9rem;
    }
  </style>
@endsection