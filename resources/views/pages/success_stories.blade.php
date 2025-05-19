@extends('layouts.app')

@section('title', 'Home Page')

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
      <img src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
    </div>
    <div class="breadcumb-shape2">
      <img src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
    </div>
    </div>
  </div>
  <!-- Stats/Highlights -->
  <section class="py-5 bg-light text-center">
    <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
      <h2>5000+</h2>
      <p>Students Placed</p>
      </div>
      <div class="col-md-4">
      <h2>100+</h2>
      <p>Top Companies</p>
      </div>
      <div class="col-md-4">
      <h2>100%</h2>
      <p>Career Growth Support</p>
      </div>
    </div>
    </div>
  </section>
  <!-- Student Success Stories -->
  <section class="py-5">
    <div class="container">
    <h2 class="mb-5 text-center">Meet Our Champions</h2>

    <div class="row g-4">
      <!-- Repeat this card for each student -->
      <div class="col-md-6 col-lg-4">
      <div class="card student-card p-3">
        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block mt-3"
        style="width: 120px;" alt="Student Photo">
        <div class="card-body text-center">
        <h5 class="card-title">Riya Sharma</h5>
        <span class="digicrome-tag mb-2">Digicrome Alumni</span>
        <p class="card-text">"Thanks to Digicrome, I landed my dream job at Microsoft. The mentorship and support
          were top-notch."</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Company Logo"
          class="company-logo mt-2">
        </div>
      </div>
      </div>

      <!-- Add more student cards below this -->
      <div class="col-md-6 col-lg-4">
      <div class="card student-card p-3">
        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block mt-3"
        style="width: 120px;" alt="Student Photo">
        <div class="card-body text-center">
        <h5 class="card-title">Amit Verma</h5>
        <span class="digicrome-tag mb-2">Digicrome Alumni</span>
        <p class="card-text">"With the training from Digicrome, I cracked an interview with TCS and now working as a
          software engineer."</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Tata_Consultancy_Services_Logo.svg"
          alt="Company Logo" class="company-logo mt-2">
        </div>
      </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
    </div>
  </section>
  <!-- Call to Action -->
  <section class="py-5 text-center text-white" style="background: #6a11cb;">
    <div class="container">
    <h2 class="mb-4">Ready to start your success story?</h2>
    <a href="#" class="btn btn-light btn-lg">Join Digicrome Today</a>
    </div>
  </section>
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