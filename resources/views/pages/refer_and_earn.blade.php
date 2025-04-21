@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="breadcumb-area d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4>Refer And Earn</h4>
					</div>
					<ul>
						<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
						<li>Refer And Earn</li>
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

<section class="py-5">
    <div class="container text-center">
      <h2 class="mb-5">How It Works</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="step-icon mb-3">🔗</div>
          <h5>1. Share</h5>
          <p>Use your referral code or link to invite friends.</p>
        </div>
        <div class="col-md-4">
          <div class="step-icon mb-3">📝</div>
          <h5>2. They Register</h5>
          <p>Your friend joins and enrolls in any course.</p>
        </div>
        <div class="col-md-4">
          <div class="step-icon mb-3">💰</div>
          <h5>3. You Earn</h5>
          <p>You get rewards once they enroll successfully!</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Referral Code Box -->
  <section id="referral" class="py-5 bg-light">
    <div class="container">
      <div class="refer-code-box">
        <h3>Your Referral Code</h3>
        <div class="refer-code">DIGIREF123</div>
        <button class="btn btn-theme mt-2">Copy Code</button>
        <p class="mt-3">Or share: <br><a href="#">https://digicrome.com/ref/DIGIREF123</a></p>
      </div>
    </div>
  </section>
  
  <!-- Referral Form Section -->
  <section class="form-section" id="referral-form">
    <div class="container">
      <h2 class="text-center mb-4">Refer a Friend</h2>
      <p class="text-center mb-4">Fill out the form to refer someone and help them start their journey.</p>
  
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label for="friendName" class="form-label">Friend's Name</label>
              <input type="text" class="form-control" id="friendName" placeholder="Enter friend's full name">
            </div>
            <div class="mb-3">
              <label for="friendEmail" class="form-label">Friend's Email</label>
              <input type="email" class="form-control" id="friendEmail" placeholder="Enter friend's email address">
            </div>
            <div class="mb-3">
              <label for="friendPhone" class="form-label">Friend's Phone</label>
              <input type="tel" class="form-control" id="friendPhone" placeholder="Enter friend's phone number">
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-theme btn-lg">Submit Referral</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Final CTA -->
  <section class="py-5 text-center text-white" style="background-color: var(--theme-color);">
    <div class="container">
      <h2 class="mb-4">Start Earning with Every Referral!</h2>
      <a href="#referral-form" class="btn btn-light btn-lg">Refer Now</a>
    </div>
  </section>

  <style>
    :root {
      --theme-color: #f29c12;
    }

    .hero {
      background-color: var(--theme-color);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }

    .step-icon {
      font-size: 40px;
      color: var(--theme-color);
    }

    .refer-code-box {
      background: #fff7e6;
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .refer-code {
      font-size: 20px;
      font-weight: bold;
      background-color: var(--theme-color);
      color: white;
      padding: 8px 15px;
      border-radius: 8px;
      display: inline-block;
      margin: 10px 0;
    }

    .btn-theme {
      background-color: var(--theme-color);
      color: white;
    }

    .btn-theme:hover {
      background-color: #e0890c;
      color: white;
    }

    .faq-question {
      font-weight: bold;
    }

    .form-section {
      background-color: #fff3e0;
      padding: 60px 20px;
      border-top: 4px solid var(--theme-color);
    }

    .form-section h2 {
      color: var(--theme-color);
    }

    .form-control:focus {
      border-color: var(--theme-color);
      box-shadow: 0 0 0 0.2rem rgba(242, 156, 18, 0.25);
    }
  </style>
@endsection