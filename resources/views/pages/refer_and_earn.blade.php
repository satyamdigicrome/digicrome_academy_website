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
     <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="#">
          <input type="text" placeholder="Freind's Name " required />
          <input type="text" placeholder="Freind's Contact no." required />
          <input type="password" placeholder="Freind's Mail" required />
        </form>
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

.wrapper {
  position: relative;
  max-width: 470px;
  width: 100%;
  border-radius: 12px;
  padding: 20px
    30px
    120px;
  background: #4070f4;
  box-shadow: 0
    5px
    10px
    rgba(
      0,
      0,
      0,   0.1
    );
  overflow: hidden;
}
.form.login {
  position: absolute;
  left: 50%;
  bottom: -86%;
  transform: translateX(
    -50%
  );
  width: calc(
    100% +
      220px
  );
  padding: 20px
    140px;
  border-radius: 50%;
  height: 100%;
  background: #fff;
  transition: all
    0.6s
    ease;
}
.wrapper.active
  .form.login {
  bottom: -15%;
  border-radius: 35%;
  box-shadow: 0 -5px
    10px rgba(0, 0, 0, 0.1);
}
.form
  header {
  font-size: 30px;
  text-align: center;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
}
.form.login
  header {
  color: #333;
  opacity: 0.6;
}
.wrapper.active
  .form.login
  header {
  opacity: 1;
}
.wrapper.active
  .signup
  header {
  opacity: 0.6;
}
.wrapper
  form {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 40px;
}
form
  input {
  height: 60px;
  outline: none;
  border: none;
  padding: 0
    15px;
  font-size: 16px;
  font-weight: 400;
  color: #333;
  border-radius: 8px;
  background: #fff;
}
.form.login
  input {
  border: 1px
    solid
    #aaa;
}
.form.login
  input:focus {
  box-shadow: 0
    1px 0
    #ddd;
}
form
  .checkbox {
  display: flex;
  align-items: center;
  gap: 10px;
}
.checkbox
  input[type="checkbox"] {
  height: 16px;
  width: 16px;
  accent-color: #fff;
  cursor: pointer;
}
form
  .checkbox
  label {
  cursor: pointer;
  color: #fff;
}
form a {
  color: #333;
  text-decoration: none;
}
form
  a:hover {
  text-decoration: underline;
}


  </style>
@endsection