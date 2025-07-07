@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@section('content')
@include('components.lead-form-popup')

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
  #sticky-header {
    margin-bottom: 0px;
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
  <img src="{{ asset('assets/images/ss.webp') }}" alt="Career Banner" class="hero-img" loading="lazy">

  <div class="container banner-text">
    <div class="breadcumb-content">
      <div class="breadcumb-title">
        <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 15px;">
          Success Stories at <span style="color: #f29c12;">Digicrome</span>
        </h1>
        <p style="font-size: 1.2rem; margin-bottom: 25px; line-height: 1.6;">
          Discover how our students transformed their careers with Digicrome's expert-led programs, real-world projects, and lifelong mentorship.
        </p>
      
        <ul style="list-style: none; padding: 0; margin-bottom: 25px; font-size: 1rem; line-height: 1.8; text-transform: capitalize;">
          <li>✔✔ Student journeys and the results they achieved.</li>
          <li>✔✔ From classroom to career success.</li>
          <li>✔✔ Stories across tech, AI, marketing & more.</li>
          <li>✔✔ Powered by practical training & mentorship.</li>
          <li>✔✔ Inspiration for your own growth journey.</li>
        </ul>
      
        <a href="#stories" style="padding: 12px 25px; background-color: #f29c12; color: white; text-decoration: none; font-weight: bold; border-radius: 4px;">
          Read Student Stories
        </a>
      </div>
      
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
<div class="testimonial-area style-five">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<!-- section title -->
				{{-- <div class="section-sub-title">
					<h6>testimonial</h6>
				</div> --}}<br>
				<div class="section_title two">
					<h1>What Our Students Think</h1>
				</div>
			</div>
		</div>
		<div class="row" id="stories">
			<div class="testi-list5 owl-carousel">
        @foreach ($studentStories as $story)
        <div class="col-lg-12" style="margin-bottom: 30px;">
            <div class="single-testi-box" 
                style="display: flex; 
                       align-items: flex-start; 
                       gap: 20px; 
                       background-color: #ffffff; 
                       padding: 25px; 
                       border-radius: 12px; 
                       box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); 
                       transition: all 0.3s ease;">
                
                <!-- Image Section -->
                <div class="testi-autor-thumb" style="flex-shrink: 0;">
                    <img 
                        src="{{ asset('storage/' . $story->image) }}" 
                        alt="author" 
                        style="width: 111px; 
                               height: 110px; 
                               object-fit: cover; 
                               border-radius: 12px; 
                               border: 2px solid #f0f0f0;">
                </div>
                
                <!-- Text and Info Section -->
                <div class="testi-autor-details" style="flex: 1;">
                    
                    <!-- Testimonial Text -->
                    <div class="testi-desc" style="margin-bottom: 15px;">
                        <p style="margin: 0; 
                                  font-size: 15px; 
                                  line-height: 1.6; 
                                  color: #333;">
                            "{{ $story->stoire }}"
                        </p>
                    </div>
    
                    <!-- Author Info & Rating -->
                    <div class="testi-autor-reviews" 
                         style="display: flex; 
                                justify-content: space-between; 
                                align-items: center; 
                                flex-wrap: wrap;">
                        
                        <!-- Name & Position -->
                        <div class="testi-autor-box">
                            <div class="testi-autor-content">
                                <h5 class="autor-title" 
                                    style="margin: 0; 
                                           font-size: 17px; 
                                           font-weight: 600; 
                                           color: #222;">
                                    {{ $story->studentname }}
                                </h5>
                                <p class="autor-desi" 
                                   style="margin: 2px 0 0; 
                                          font-size: 14px; 
                                          color: #777;">
                                    {{ $story->position }}
                                </p>
                            </div>
                        </div>
    
                        <!-- Star Rating -->
                        <div class="testi-ratting" style="margin-top: 10px;">
                            <ul style="list-style: none; 
                                       padding: 0; 
                                       margin: 0; 
                                       display: flex; 
                                       gap: 4px; 
                                       color: #f5b50a;">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            </ul>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>
    @endforeach
    

			</div>
		</div>
	</div>
</div>
<!-- Student Success Stories -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="breadcumb-title">
      <h1 class="display-5 fw-bold text-center">Meet Our Champions</h1><br>
    </div>
    <div class="row g-4">
      @foreach ($studentStories as $story)
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-4">
          <img loading="lazy" src="{{ asset('storage/' . $story->image) }}"
            alt="Student Photo" title="Student Photo"
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