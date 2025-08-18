@extends('layouts.app')
@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')

@section('content')
@include('components.lead-form-popup')

  <div class="breadcumb-area d-flex"  style="background-image: url('{{ asset('assets/images/rfn.webp') }}')">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
      <div class="breadcumb-content">
        <div class="breadcumb-title">
        <h4 style=" margin-bottom: 210px; color: #fff;">Refer And Earn</h4>
        </div>

      </div>
      </div>
    </div>
    {{-- <div class="breadcumb-shape">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot" title="dot">
    </div> --}}
    <div class="breadcumb-shape2">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball" title="ball">
    </div>
    </div>
  </div>                                                                                                                                                                                                                  
  <section class="py-5">
    <div class="container text-center">
    <h1 class="mb-5">How It Works</h1>
    
    </div>
  </section>
         <style>
          .text-center{
            font-size: 25px;
            font-weight: 700;
          }
          .text-center p{
             font-size: 18px;
          }

         </style>
<div class="container py-5" id="referral-form">
  <div class="row align-items-start g-5">
    
    
    <div class="col-lg-6">
      <div class="p-4 shadow rounded bg-white">
        <h2 class="mb-4" style="color: #f29c12; font-weight: 700;">Referral Form</h2>
        <form  class="referral-form" method="POST" action="{{ route('referral.submit') }}">
          @csrf
          <div class="mb-3">
            <label for="yourName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="yourName" name="yourName" required>
          </div>
          <div class="mb-3">
            <label for="yourEmail" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="yourEmail" name="yourEmail" required>
          </div>
          <div class="mb-3">
            <label for="yourPhone" class="form-label">Your Mobile</label>
            <input type="text" class="form-control" id="yourPhone" name="yourPhone" required>
          </div>
          <div class="mb-3">
            <label for="friendName" class="form-label">Friend's Name</label>
            <input type="text" class="form-control" id="friendName" name="friendName" required>
          </div>
          <div class="mb-3">
            <label for="friendEmail" class="form-label">Friend's Email</label>
            <input type="email" class="form-control" id="friendEmail" name="friendEmail" required>
          </div>
          <div class="mb-3">
            <label for="friendPhone" class="form-label">Friend's Mobile</label>
            <input type="text" class="form-control" id="friendPhone" name="friendPhone" required>
          </div>
          
          <div class="mb-3">
            <label for="message" class="form-label">Personal Message (Optional)</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
          </div>
          <button type="submit" class="btn" style="background-color: #f29c12; color: white;">Submit Referral</button>
        </form>
        
      </div>
    </div>

    <div class="col-lg-6">
      <div class="p-4 shadow rounded bg-white">
        <h2 class="mb-3" style="color: #f29c12; font-weight: 700;">Affiliate Program</h2>
        <p class="text-muted mb-3">
          Digicrome offers a powerful program for your career growth and transition. You can also earn with our affiliate program!
        </p>
        <p class="mb-3">
          We provide a stipend of <strong>₹5000</strong> for every successful referral. Just follow the steps below:
        </p>
        <ol class="mb-3 ps-3">
          <li>Access the referral form</li>
          <li>Register your name and email ID</li>
          <li>Add your friend’s name and email</li>
          <li>Optionally customize a message</li>
          <li>Your referral is recorded</li>
          <li>Once the referral leads to an admission</li>
          <li>You earn <strong>₹5000</strong> instantly</li>
          <li>No limits – Refer & Earn unlimited times!</li>
        </ol>
        <p class="fw-bold text-dark">So what are you waiting for? Start earning by referring today!</p>
      </div>
    </div>

  </div>
</div>

		</div>

<style>
  .referral-form {
    /* margin: 30px auto; */
    /* padding: 30px; */
    background: white;
    border-radius: 10px;
    /* box-shadow: 3px 3px wheat, -1em 0 0.4em blanchedalmond; */
    width: 90%;
    max-width: 500px;
  }
    .referral-form h2 {
   margin-bottom: 40px;
    font-weight: 900;
    font-size: 30px;
    color: #110101;
    text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-group textarea {
      resize: vertical;
    }

    .submit-btn {
      width: 100%;
      background-color: #FFA500;
      color: black;
      padding: 12px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #ffff;
    }

    h1 {
      margin:50px;
    font-weight: 900;
    font-size: 30px;
    color: #110101;
    text-align: center;
    }

  </style>
  <!-- Final CTA -->
  <section class="py-5 text-center text-white" style="background-color: var(--theme-color);">
    <div class="container">
    <h2 class="mb-4">Start Earning with Every Referral!</h2>
    <a href="#referral-form" class="btn ap-logo btn-lg">Refer Now</a>
    </div>
  </section>


@endsection