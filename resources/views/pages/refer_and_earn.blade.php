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
      <h5>1.Share</h5>
      <p>Use your referral code or link to invite friends.</p>
      </div>
      <div class="col-md-4">
      <div class="step-icon mb-3">📝</div>
      <h5>2.They Register</h5>
      <p>Your friend joins and enrolls in any course.</p>
      </div>
      <div class="col-md-4">
      <div class="step-icon mb-3">💰</div>
      <h5>3.You Earn</h5>
      <p>You get rewards once they enroll successfully!</p>
      </div>
    </div>
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
<div class="row p-4">
	<div class="col-lg-6">
	<form class="referral-form">
    <h2>Referral Form</h2>
    <div class="form-group">
      <label for="yourName">Your Name</label>
      <input type="text" id="yourName" name="yourName" required />
    </div>

    <div class="form-group">
      <label for="yourEmail">Your Email</label>
      <input type="email" id="yourEmail" name="yourEmail" required />
    </div>

    <div class="form-group">
      <label for="friendName">Friend's Name</label>
      <input type="text" id="friendName" name="friendName" required />
    </div>

    <div class="form-group">
      <label for="friendEmail">Friend's Email</label>
      <input type="email" id="friendEmail" name="friendEmail" required />
    </div>

    <div class="form-group">
      <label for="message">Personal Message (Optional)</label>
      <textarea id="message" name="message" rows="4"></textarea>
    </div>
    <button type="submit" class="submit-btn">Submit Referral</button>
  </form>
      </div>

			<div class="col-lg-6">
		  <h1>Heading</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quibusdam, possimus voluptates veritatis blanditiis, fuga dicta temporibus aspernatur debitis dolores reiciendis incidunt eum doloribus ad, accusamus consectetur laboriosam nemo reprehenderit.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quibusdam, possimus voluptates veritatis blanditiis, fuga dicta temporibus aspernatur debitis dolores reiciendis incidunt eum doloribus ad, accusamus consectetur laboriosam nemo reprehenderit.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quibusdam, possimus voluptates veritatis blanditiis, fuga dicta temporibus aspernatur debitis dolores reiciendis incidunt eum doloribus ad, accusamus consectetur laboriosam nemo reprehenderit.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quibusdam, possimus voluptates veritatis blanditiis, fuga dicta temporibus aspernatur debitis dolores reiciendis incidunt eum doloribus ad, accusamus consectetur laboriosam nemo reprehenderit.</p>

    </div>
		</div>

<style>
  .referral-form {
    margin: 30px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 3px 3px wheat, -1em 0 0.4em blanchedalmond;
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