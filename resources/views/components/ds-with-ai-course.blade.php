	<style>
		#sticky-header{
    margin-bottom: 0px !important;
}
.nedesign {
    margin-top: 0px;
}
	</style>
<div class="nedesign">
    <section class="courses-details ds-banner ds-banner-mobile"
        style="background-image: url({{ asset('assets/images/ds-withai-course/Banner-Image.png') }}); background-color:#565656; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="course-heading-banner col-flex">
                        <h1 style="color: #fff;">{{ $course->name }}<br> </h1> <small style=" font-size: 20px; color: #fff;">in collaboration with</small>
                        <img loading="lazy"src='{{ asset('assets/images/ds-withai-course/mslogo.png') }}' class='ds-logo lazyload'>
                        <div class="black-box">
                            <span class="yellow-text">Aligned with competency standards set by Microsoft & IBM.</span>
                            <span class="green-text" style="color:#fff;">In Collaboration with Industry and approved by
                                Government of
                                India</span>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4">
                    <div class="course-heading-banner text-center">
                        <h2><small style=" color: #fff;">Best Data Science Course in India</small></h2>
                    </div>
                    <div class="ai-box flex">
                        <div class="cont text-center">
                            <span>In Curriculum</span>
                            <h3>Chat<span>GPT</span></h3>
                            <img loading="lazy"src='{{ asset('assets/images/ds-withai-course/deep.png') }}' class="aiimg" alt="ChatGPT">
                        </div>
                        <div class="img">
                            <img loading="lazy"src='{{ asset('assets/images/ds-withai-course/ai.png') }}' class="aiimg" alt="ai">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mobile-banner mobile-display">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p>Become an industry-ready Certified Data Science professional through immersive learning of Data
                        Analysis
                        and Visualization, ML models, Forecasting & Predicting Models, NLP, Deep Learning.</p>
                    <div class="collab-box">
                        <div class="heading-collab text-center">In Collaboration With</div>
                        <div class="collab-deatil">
                            <ul>
                                <li><strong>Silver</strong><br> Business <br>Partner</li>
                                <li><img loading="lazy"src="{{ asset('assets/images/ds-withai-course/mslogo.png') }}" class="lazyload"
                                        alt="nasscom">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-specification">
                        <div class="box">
                            <p>
                                {{ $course->course_online_payment }}  </p>
                            <span>Next Batch <br> starts on</span>
                        </div>
                        <div class="box">
                            <p>11 Months</p>
                            <span>Live Online Classes</span>
                        </div>
                        <div class="box">
                            <p>12 Months</p>
                            <span>Live <br> Internship</span>
                        </div>
                        <div class="box">
                            <p>Online</p>
                            <span>Learning <br> Format</span>
                        </div>
                        <div class="box">
                            <p>5000+</p>
                            <span>Career <br> Transformed</span>
                        </div>
                        <div class="box">
                            <p>500+</p>
                            <span>Hiring <br> Partners</span>
                        </div>
                        <div class="fill-btn">
                            <a data-bs-toggle="modal" style="color: green" data-bs-target="#leadPopup" download=""
                               >Download Brochure</a>
                        </div>
                        <!--<button type="button" class="fill-btn" href="#form1" data-toggle="modal" data-target="#buy-form" onclick="buNow('102')">Apply-->
                        <!--   Now</button>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-date-2 mobile-display-none">
        <div class="container">
            <div class="banner-detail">
                <div class="date-border width">
                    <h2 style="color:#fff;">Courses Features</h2>
                    <div class="fill-btn" style="color: #fff;  background: green;
                    border: 2px solid;">
                        <a data-bs-toggle="modal" data-bs-target="#leadPopup"
                             download=""
                            style="color:#fff">Download
                            Brochure</a>
                    </div>
                    <!--<button type="button" class="fill-btn" href="#form1">Apply Now</button>-->
                </div>
                <div class="date-border">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}" class="lazyload"
                        alt="data science program institute">
                    <p class="icon-plus">5000</p>
                    <span>Career Transformed</span>
                </div>
                <div class="date-border">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}" class="lazyload"
                        alt="data science programs">
                    <p>12 Months</p>
                    <span>Live Internship</span>
                </div>
                <div class="date-border">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}" class="lazyload"
                        alt="best online data science programs">
                    <p>11 Months</p>
                    <span>Live Online Classes</span>
                </div>
                <div class="date-border">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}" class="lazyload"
                        alt="data science programs near me">
                    <p style="color: #f8b700">
                        {{ $course->course_online_payment }} </p>
                    <span>Next Batch starts on</span>
                </div>
                <div class="date-border">
                    <img loading="lazy"src="{{ asset('assets/images/ds-withai-course/banner-icon-5.png') }}" class="lazyload"
                        alt="data science program online">
                    <p>500+</p>
                    <span>Hiring Partners</span>
                </div>
            </div>
        </div>
    </section>
    <div class="outer-box">
  <!-- Heading -->
  <h3 class="main-heading">
    PGP IN DATA SCIENCE AND AI
  </h3>

  <!-- 3 Section Row -->
  <div class="info-row">

    <!-- First Box -->
    <div class="info-box">
      <p>No Cost EMI Available</p>
    </div>

    <!-- Blue Box -->
    <div class="blue-box">
      <small>Grab this exclusive offer -</small>
      <span>Call 01204538104 now!</span>
    </div>

    <!-- Red Box -->
    <div class="red-box">
      <div class="red-left">
        <small>Register Now<br> and Get Up to</small>
        <button data-bs-toggle="modal" data-bs-target="#applyNowPopup">
          Claim Now
        </button>
      </div>
      <div class="red-middle">
  <span class="discount-text">
    40%<sup class="off-label">OFF</sup>
  </span>
  <small>Limited Seats<br> Available*</small>
</div>

     
    </div>

  </div>
</div>


<style>
    @keyframes zoomPulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.03); /* Zoom in slightly */
  }
  100% {
    transform: scale(1);
  }
}

.outer-box {
  animation: zoomPulse 3s ease-in-out infinite;
}

    .discount-text {
  font-size: 40px;
  font-weight: 900;
  line-height: 1;
  display: inline-block;
  position: relative;
  color: #fff;
}

.off-label {
  font-size: 12px;
  font-weight: 700;
  vertical-align: top;
  margin-left: 2px;
  color: #fff;
}

/* Outer Container */
.outer-box {
  border: 2px solid black;
  border-radius: 15px;
  padding: 20px;
  background: #fff;
  font-family: Arial, sans-serif;
  margin: 20px auto;
  max-width: 1200px;
}

/* Heading */
.main-heading {
  margin-bottom: 25px;
  font-weight: 700;
  color: #000;
  text-align: center;
  font-size: 33px;
}

/* Row */
.info-row {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: stretch; /* equal height */
}

/* Common box style */
.info-box,
.blue-box,
.red-box {
  flex: 1;
  min-width: 280px;
  border-radius: 10px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* First Box */
.info-box {
  border-right: 5px solid #0d47a1;
}
.info-box p {
  color: #0d47a1;
  font-weight: 700;
  font-size: 28px;
  text-align: center;
  margin: 0;
}

/* Blue Box */
.blue-box {
  background: #0d47a1;
  color: #fff;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}
.blue-box small {
  font-size: 18px;
  margin-bottom: 6px;
}
.blue-box span {
  font-size: 30px;
  font-weight: 700;
}

/* Red Box */
.red-box {
  background: url("{{ asset('assets/images/fee-bg.webp') }}") no-repeat center/cover;
  color: #fff;
  display: flex;
  /* justify-content: space-between; */
  align-items: center;
  gap: 12px;
}

.red-left small {
  font-size: 18px;
  display: block;
  margin-bottom: 6px;
}
.red-left button {
  padding: 6px 14px;
  background: #000;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
}

.red-middle span {
  font-size: 40px;
  font-weight: 900;
  line-height: 1;
  display: block;
}
.red-middle small {
  font-size: 12px;
  display: block;
}
.red-right div {
  font-size: 18px;
  font-weight: 700;
}

/* Responsive */
@media (max-width: 992px) {
  .main-heading {
    font-size: 28px;
  }
  .info-box p {
    font-size: 24px;
  }
  .blue-box small { font-size: 16px; }
  .blue-box span { font-size: 24px; }
  .red-middle span { font-size: 32px; }
}

@media (max-width: 768px) {
  .outer-box {
    margin: 15px !important;
  }
  .info-row {
    flex-direction: column;
  }
  .info-box, .blue-box, .red-box {
    min-height: auto; /* natural height for small screens */
  }
  .red-left small { font-size: 14px; }
  .red-left button { font-size: 12px; padding: 5px 10px; }
}
</style>

</div>