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
<div class="outer-box" 
     style="border:2px solid black; margin:21px 154px 16px 183px; border-radius:15px; padding:20px; background:#fff; font-family:Arial, sans-serif;">
  <!-- your content -->
</div>

<style>
@media (max-width: 768px) {
  .outer-box {
    margin: 15px !important; /* smaller equal margin on all sides */
  }
}
</style>

  <!-- Heading -->
  <h3 style="margin-bottom:25px; font-weight:700; color:#000; text-align:center; font-size: 33px;">
    PGP IN DATA SCIENCE AND AI  
    {{-- <span style="color:#0d47a1;">No-Cost EMI</span> --}}
  </h3>

  <!-- 3 Section Row -->
  <div style="display:flex; gap:20px; flex-wrap:wrap; justify-content:space-between;">

    <!-- First Box -->
    <div style="flex:1; min-width:250px; border-right:5px solid #0d47a1; padding:20px; display:flex; align-items:center;">
      <p style="color:#0d47a1; font-weight:700; font-size:32px; line-height:1.4; margin:0;">
      No Cost EMI Available
      </p>
    </div>

    <!-- Second Box -->
    <!-- Blue Box -->
<div style="flex:1; min-width:280px; border-right:5px solid #0d47a1; padding:15px; display:flex; align-items:center; justify-content:center;">
  <div style="background:#0d47a1; color:#fff; padding:35px; border-radius:10px; width:100%; min-height:110px; display:flex; flex-direction:column; ">
    <small style="font-size:18px; margin-bottom:5px;"> Starting at </small>
    <span style="font-size:30px; font-weight:700;">INR 9166 Per Month</span>
  </div>
</div>

<!-- Red Box -->
<div style="flex:1; min-width:280px; padding:15px; display:flex; align-items:center; justify-content:center;">
  <div class="red-offer-box" 
       style="background:#e64a19 url({{ asset('assets/images/fee-bg.webp') }}) no-repeat center/cover; 
              color:#fff; padding:20px; border-radius:10px; width:100%; min-height:120px; 
              display:flex; align-items:center; gap:6px;">

    <!-- Box 1 (Left Side) -->
    <div style="flex:0 0 auto; text-align:left;">
      <small style="font-size:20px; display:block; margin-bottom:6px;">Register Now<br> and Get upto</small>
      <button style="padding:6px 14px; background:#000; color:#fff; border:none; border-radius:4px; 
                     font-size:13px; font-weight:600; cursor:pointer;" href="javascript:void(0);" 
              data-bs-toggle="modal" data-bs-target="#applyNowPopup">
        Claim Now
      </button>
    </div>

    <!-- Box 2 (Middle Big 40%) -->
    <div style="flex:0 0 auto; text-align:center;">
      <span style="font-size:42px; font-weight:900; line-height:1;">40%</span>
      <small style="font-size:12px; display:block;">Limited Seats<br> Available*</small>
    </div>

    <!-- Box 3 (Right Side) -->
    <div style="flex:0 0 auto;">
      <div style="font-size:16px; font-weight:600; margin-bottom:40px;">OFF</div>
    </div>

  </div>
</div>

<!-- Responsive Font Sizes -->
<style>
@media (max-width: 768px) {
  .red-offer-box small { font-size: 14px !important; }
  .red-offer-box span { font-size: 28px !important; }
  .red-offer-box button { font-size: 12px !important; padding: 5px 12px !important; }
  .red-offer-box div { font-size: 14px !important; }
}
</style>


  </div>
</div>

</div>