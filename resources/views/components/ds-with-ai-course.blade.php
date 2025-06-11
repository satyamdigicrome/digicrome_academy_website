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
                        <h2 style="color: #fff;">{{ $course->name }}<br> <small>in collaboration with</small> </h2>
                        <img src='{{ asset('assets/images/ds-withai-course/mslogo.png') }}' class='ds-logo lazyload'>
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
                            <img src='{{ asset('assets/images/ds-withai-course/deep.png') }}' class="aiimg" alt="ChatGPT">
                        </div>
                        <div class="img">
                            <img src='{{ asset('assets/images/ds-withai-course/ai.png') }}' class="aiimg" alt="ai">
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
                                <li><img src="{{ asset('assets/images/ds-withai-course/mslogo.png') }}" class="lazyload"
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
                            <a data-bs-toggle="modal" data-bs-target="#leadPopup" download=""
                               >Download
                                Brochure</a>
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
                    <div class="fill-btn" style="color: #fff;  background: #1c1647;
                    border: 2px solid;">
                        <a data-bs-toggle="modal" data-bs-target="#leadPopup"
                             download=""
                            style="color:#fff">Download
                            Brochure</a>
                    </div>
                    <!--<button type="button" class="fill-btn" href="#form1">Apply Now</button>-->
                </div>
                <div class="date-border">
                    <img src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}" class="lazyload"
                        alt="data science program institute">
                    <p class="icon-plus">5000</p>
                    <span>Career Transformed</span>
                </div>
                <div class="date-border">
                    <img src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}" class="lazyload"
                        alt="data science programs">
                    <p>12 Months</p>
                    <span>Live Internship</span>
                </div>
                <div class="date-border">
                    <img src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}" class="lazyload"
                        alt="best online data science programs">
                    <p>11 Months</p>
                    <span>Live Online Classes</span>
                </div>
                <div class="date-border">
                    <img src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}" class="lazyload"
                        alt="data science programs near me">
                    <p style="color: #f8b700">
                        {{ $course->course_online_payment }} </p>
                    <span>Next Batch starts on</span>
                </div>
                <div class="date-border">
                    <img src="{{ asset('assets/images/ds-withai-course/banner-icon-5.png') }}" class="lazyload"
                        alt="data science program online">
                    <p>500+</p>
                    <span>Hiring Partners</span>
                </div>
            </div>
        </div>
    </section>
</div>