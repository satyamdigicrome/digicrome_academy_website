@extends('layouts.app')

@section('title', 'Home Page')

@section('content')








<!--==================================================-->
<!-- Start educate Breadcumb Area -->
<!--==================================================-->
<style>
    .nedesign{
        margin-top: 102px;

    .courses-details {
    /* background-image: url(../images/courses/best-online-data-science-program-with-guaranteed-placement.png); */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: auto;
    position: relative;
    align-items: center;
    display: flex
;
    margin-bottom: 20px;
    padding: 130px 0px;
    width: 100%;
}
.ds-banner {
    padding: 40px 0px 108px;
    position: relative;
    background-position: center;
}
.col-flex {
    height: 100%;
    display: flex
;
    flex-direction: column;
    justify-content: center;
}
.ds-banner .course-heading-banner h1 {
    color: #000;
    font-size: 34px;
    line-height: 1.3;
}

.courses-details .course-heading-banner h2 {
    font-size: 34px;
    font-weight: 600;
    text-transform: capitalize;
    position: relative;
    color: #000;
    line-height: 1.4;
}
.courses-details .course-heading-banner .ds-logo {
    max-width: 45%;
}
.courses-details .course-heading-banner .black-box {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 7px 15px;
    width: 86%;
    margin: auto 0;
    border-radius: 4px;
    margin-top: 14px;
}
.courses-details .course-heading-banner .black-box .yellow-text {
    color: #f9d74a;
    font-size: 13px;
    font-weight: 500;
}
.courses-details .course-heading-banner .black-box span {
    display: block;
}
.text-center {
    text-align: center !important;
}
.ds-banner .ai-box {
    width: 70%;
    margin: 15px auto 0;
}
.ds-banner .ai-box .cont span {
    color: #ff0000;
    font-weight: 600;
    font-size: 15px;
}
.ds-banner .ai-box .cont h3 {
    color: #fff;
    margin-bottom: 0;
    line-height: 1.2;
    font-size: 22px;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: 1px;
}
.ds-banner .ai-box .cont h3 span {
    color: #fff;
    font-size: 27px;
    font-weight: 400;
}
.ds-banner .course-heading-banner h1 {
    color: #000;
    font-size: 34px;
    line-height: 1.3;
}

.courses-details .course-heading-banner h1 {
    font-size: 34px;
    font-weight: 600;
    text-transform: capitalize;
    position: relative;
    color: #fff;
    line-height: 1.4;
}
.mobile-display {
    display: none;
}
@media (min-width: 1601px) and (max-width: 8000px) {
    .ds-banner .ai-box .img img {
        max-width: 65%;
    }
}
@media (min-width: 992px) {
    .offset-lg-2 {
        margin-left: 16.666667%;
    }
}
@media (min-width: 1601px) and (max-width: 8000px) {
    .container-fluid {
        width: 76%;
        margin: 0 12%;
    }
}
    @media (min-width: 1601px) and (max-width: 8000px) {
    .ds-banner {
        padding: 80px 0px 153px;
    }
}
@media (max-width: 768px) {
     .aiimg {
        max-width: 40%;
        filter: invert(1);
        display: none;
    }
}
@media (max-width: 767px) {
    .ds-banner .course-heading-banner {
        padding: 0;
    }
}
@media (max-width: 767px) {
    .ds-banner-mobile {
        background-position: 5% center;
        padding: 80% 0;
    }
}

@media (max-width: 992px) {
    .container-fluid {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
    }
}
@media (max-width: 767px) {
    .ds-banner::before {
        position: absolute;
        content: "";
        height: 100%;
        top: 0;
        width: 100%;
        background-image: linear-gradient(transparent 83%, #004aad 134%);
    }
}
@media (max-width: 992px) {
    .container-fluid {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
    }
}
@media (max-width: 767px) {
    .ds-banner .course-heading-banner h1 {
        font-size: 18px;
    }
}
@media (max-width: 767px) {
    .courses-details .course-heading-banner h1 {
        font-size: 16px;
        line-height: 1.2;
    }
}
@media (max-width: 768px) {
    .courses-details .course-heading-banner .black-box {
        padding: 9px 12px;
        width: 100%;
    }
}
@media (max-width: 767px) {
    .courses-details .course-heading-banner .black-box .yellow-text {
        font-size: 12px;
        margin-bottom: 5px;
    }
}
@media (max-width: 767px) {
    .courses-details .course-heading-banner .black-box .green-text {
        font-size: 14px;
        line-height: 1.1;
    }
}
@media (max-width: 768px) {
    .ds-banner .ai-box {
        width: 48%;
    }
}
@media (max-width: 767px) {
    .mobile-banner p {
        color: #000;
        font-size: 15px;
    }
}
@media (max-width: 767px) {
    .mobile-banner .collab-box {
        width: 65%;
        margin: 30px auto;
    }
}
@media (max-width: 767px) {
    .mobile-banner .collab-box .heading-collab {
        color: #000;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 10px;
    }
}
@media (max-width: 767px) {
    .mobile-banner .collab-box .collab-deatil {
        border-top: 2px solid #000;
        border-bottom: 2px solid #000;
        padding: 15px 0;
    }
}
@media (max-width: 767px) {
    .mobile-banner .collab-box .collab-deatil ul {
        align-items: center;
        display: flex
;
        justify-content: space-between;
    }
}
@media (max-width: 767px) {
    .mobile-banner .collab-box .collab-deatil ul li {
        font-size: 15px;
        color: #000;
    }
}
@media (max-width: 767px) {
    .mobile-banner .course-specification {
        display: flex
;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 30px;
    }
}
@media (max-width: 767px) {
    .mobile-banner .course-specification .box {
        background-color: #fff;
        box-shadow: 0 0 6px 0.2rem rgb(178 178 178 / 16%);
        padding: 10px;
        width: 48%;
        margin-bottom: 4%;
        text-align: center;
    }
}
@media (max-width: 767px) {
    .mobile-banner .course-specification .box p {
        color: #cc1db9;
        margin-bottom: 2px;
        font-size: 18px;
        font-weight: 600;
    }
}
@media (max-width: 767px) {
    .mobile-banner .course-specification .box span {
        color: #000;
        font-size: 13px;
        display: block;
    }
}
@media (max-width: 767px) {
    .mobile-banner .course-specification .fill-btn {
        width: 65%;
        padding: 8px 15px;
        margin: 10px auto;
    }
}
@media (max-width: 767px) {
    .mobile-display-none {
        display: none;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail {
        justify-content: center;
        flex-wrap: wrap;
        display: flex
;
    }
}

@media (max-width: 992px) {
    .banner-date-2 .banner-detail {
        grid-gap: 6px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .width {
        width: 100%;
        margin-bottom: 30px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border {
        width: 25%;
        padding: 0 5px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border h2 {
        font-size: 18px;
        color: #f8b700;
        margin-bottom: 15px;
    }
}

@media (max-width: 768px) {
    .banner-date-2 .banner-detail .date-border h2 {
        font-size: 16px;
        margin-bottom: 36px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border .fill-btn {
        background-color: #f8b700;
        border-color: #f8b700;
        padding: 8px 15px;
        font-size: 11px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border {
        width: 25%;
        padding: 0 5px;
    }
}

@media (max-width: 768px) {
    .banner-date-2 .banner-detail .date-border {
        padding: 0;
        margin-bottom: 0;
    }
}
@media (max-width: 768px) {
    .banner-date-2 .banner-detail .date-border img {
        max-width: 58px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border p {
        font-size: 13px;
    }
}
@media (max-width: 767px) {
    .banner-date-2 .banner-detail .date-border span {
        font-size: 8px;
    }
}
@media (max-width: 992px) {
    .banner-date-2 .banner-detail .date-border span {
        font-size: 10px;
        display: block;
    }
}
@media (max-width: 767px) {
    .mobile-display {
        display: block;
    }
}
    .fill-btn {
    background-color: #f29c12;
    border: 2px solid #f29c12;
    padding: 12px 20px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    border-radius: 5px;
}
.banner-date-2 {
    border: none;
    box-shadow: none;
    backdrop-filter: blur(3px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-bottom: 2px solid #dfdfdf;
    border-radius: 15px;
    margin: 0 auto;
    margin-top: -118px;
    max-width: 95%;
    position: relative;
    padding: 25px 40px;
}
.banner-date-2 .banner-detail {
    display: flex
;
    justify-content: space-between;
    flex-direction: row;
}
.banner-date-2 .banner-detail .date-border h2 {
    font-size: 20px;
    color: #f8b700;
    margin-bottom: 48px;
}
.banner-date-2 .banner-detail .date-border .fill-btn {
    background-color: #f8b700;
    border-color: #f8b700;
}
.banner-date-2 .banner-detail .date-border {
    text-align: center;
    margin-bottom: 10px;
    padding: 0 8px;
    border-right: none;
    position: relative;
    flex-grow: 1;
}
.banner-date-2 .banner-detail .date-border img {
    max-width: 75px;
    margin-bottom: 12px;
    padding: 5px;
}
.banner-date-2 .banner-detail .date-border p {
    margin-bottom: 0px;
    font-size: 18px;
    font-weight: 600;
    color: #000;
    position: relative;
}
.banner-date-2 .banner-detail .date-border .icon-plus::after {
    position: absolute;
    content: "+";
    color: #cc1db9;
    font-size: 20px;
    top: -9px;
}
.banner-date-2 .banner-detail .date-border span {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 0px;
    color: #000;
}
@media (min-width: 1601px) and (max-width: 8000px) {
    .banner-date-2 {
        width: 76%;
        margin: 0 12%;
        margin-top: -118px;
    }
}
}
</style>
<div class="nedesign">
<section class="courses-details ds-banner ds-banner-mobile"
style="background-image: url(https://digicrome.com/public/www/images/pgp/banner.jpg);">
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-6 col-12">
         <div class="course-heading-banner col-flex">
            <h2>Post Graduate Program In Data Science with Artificial Intelligence <br> <small>in collaboration with</small> </h2>
                           <img src='https://digicrome.com/public/www/images/pgp/mslogo.png' class='ds-logo lazyload'> 
            <div class="black-box">
               <span class="yellow-text">Aligned with competency standards set by Microsoft & IBM.</span>
               <span class="green-text" style="color:#fff;">In Collaboration with Industry and approved by Government of India</span>
            </div>
                        </div>
      </div>
      <div class="offset-lg-2 col-lg-4">
         <div class="course-heading-banner text-center">
            <h2><small>Best Data Science Course in India</small></h2>
         </div>
         <div class="ai-box flex">
            <div class="cont text-center">
               <span>In Curriculum</span>
               <h3>Chat<span>GPT</span></h3>
               <img src='https://digicrome.com/public/www/images/pgp/deep.png' class="aiimg" alt="ChatGPT">
            </div>
            <div class="img">
               <img src='https://digicrome.com/public/www/images/pgp/ai.png' class="aiimg" alt="ai">
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
             <p>Become an industry-ready Certified Data Science professional through immersive learning of Data Analysis and Visualization, ML models, Forecasting & Predicting Models, NLP, Deep Learning.</p>
                         <div class="collab-box">
                <div class="heading-collab text-center">In Collaboration With</div>
                <div class="collab-deatil">
                   <ul>
                      <li><strong>Silver</strong><br> Business <br>Partner</li>
                      <li><img src="https://digicrome.com/public/www/images/pgp/mslogo.png" class="lazyload" alt="nasscom"></li>
                   </ul>
                </div>
             </div>
                         <div class="course-specification">
                <div class="box">
                   <p>
                      26-Apr-2025                  </p>
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
                                    <a data-bs-toggle="modal" data-bs-target="#brochure"
                                     href="https://digicrome.com/public/storage/1659/1739358305.pdf"
                                      download="" style="color:#fff" >Download Brochure</a>
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
         <h2>Courses<br> Features</h2>
                                         <div class="fill-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#brochure"
                                     href="https://digicrome.com/public/storage/1659/1739358305.pdf"
                                      download="" style="color:#fff"  >Download Brochure</a>
                                </div>
                                     <!--<button type="button" class="fill-btn" href="#form1">Apply Now</button>-->
      </div>
      <div class="date-border">
         <img src="https://digicrome.com/public/www/images/pgp/banner-icon-1.png" class="lazyload"
            alt="data science program institute">
         <p class="icon-plus">5000</p>
         <span>Career Transformed</span>
      </div>
      <div class="date-border">
         <img src="https://digicrome.com/public/www/images/pgp/banner-icon-2.png" class="lazyload"
            alt="data science programs">
         <p>12 Months</p>
         <span>Live Internship</span>
      </div>
      <div class="date-border">
         <img src="https://digicrome.com/public/www/images/pgp/banner-icon-3.png" class="lazyload"
            alt="best online data science programs">
         <p>11 Months</p>
         <span>Live Online Classes</span>
      </div>
      <div class="date-border">
         <img src="https://digicrome.com/public/www/images/pgp/banner-icon-4.png" class="lazyload"
            alt="data science programs near me">
         <p style="color: #f8b700">
           26-Apr-2025       </p>
         <span>Next Batch starts on</span>
      </div>
      <div class="date-border">
         <img src="https://digicrome.com/public/www/images/pgp/banner-icon-5.png" class="lazyload"
            alt="data science program online">
         <p>500+</p>
         <span>Hiring Partners</span>
      </div>
   </div>
</div>
</section>
</div>
<!--==================================================-->
<!-- End educate Breadcumb Area -->
<!--==================================================-->


{{-- <div class="breadcumb-area two d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4>Courses Details</h4>
					</div>
					<ul>
						<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
						<li><a href="course.html">course<span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
						<li>Business innovation and development</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-8">
				<div class="row breadcumb-autor">
					<div class="col-lg-4 col-md-4">
						<div class="breadcumb-autor-box">
							<div class="breadcumb-autor">
								<img src="assets/images/inner-img/breadcumb-autor.webp" alt="autor">
							</div>
							<div class="breadcumb-autor-content">
								<h5>John D. Alexon</h5>
								<p>Instractor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="breadcumb-category">
							<span>Course Category</span>
							<h6>Business</h6>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="breadcumb-ratting">
							<div class="reviews"><span>3 Ratings</span></div>
							<div class="breadcumb-star">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
								</ul>
							</div>
							<div class="breadcumb-ratting-num">
								<span>(4.5)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-4"></div>
		</div>
		<div class="bread-dot">
			<img src="assets/images/inner-img/bread-dot.webp" alt="dot">
		</div>
	</div>
</div> --}}


<!--==================================================-->
<!-- Start educate-details-course-area style-inner -->
<!--==================================================-->
<section class="course-details-area style-inner">
	<div class="container">
		<div class="row">
			<div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
				<div class="course-details-content">
					<div class="course-details-heading">
						<h2 class="course-details-title">Course Overview</h2>
					</div>
					<div class="course-details-content">
						<p class="description">Educate the ultimate destination for knowledge seekers and educators alike distinctively restore installed
							We are committed to transforming special education impact global channels base information with user
							without standards compliant systems base information with</p>
						<p class="description-2">Quickly deploy performance based architectures vis-a-vis business bandwidth. Professionally disseminate 
							best-of-breed customer service and virtual catalysts for change. Proactively visualize professional paradigms 
							for robust imperatives. Seamlessly matrix robust infrastructures for premium innovation</p>
					</div>
					<div class="course-details-content">
						<h3 class="course-details-content-title">What you’ll Learn?</h3>
						<div class="course-post-details-list">
							<ul>
								<li><img src="assets/images/inner-img/learn-icon.webp" alt="icon">Covering essential topics like entrepreneurship, marketing</li>
								<li><img src="assets/images/inner-img/learn-icon.webp" alt="icon">Regular live sessions with industry professionals for real-time learning.</li>
								<li><img src="assets/images/inner-img/learn-icon.webp" alt="icon">Interactive tests to reinforce knowledge and track progress.</li>
								<li><img src="assets/images/inner-img/learn-icon.webp" alt="icon">Learning from successful business models and failures.</li>
								<li><img src="assets/images/inner-img/learn-icon.webp" alt="icon">A recognized certificate to boost credibility.</li>
							</ul>
							<div class="course-details-list-desc">
								<p>Educate the ultimate destination for knowledge seekers and educators alike distinctively restore installed
									We are committed to transforming special education impact global</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Accordion -->
				<div class="accordion-title">
					<h2>Course Curriculum</h2>
				</div>
				<div class="tab_container">
					<div id="tab1" class="tab_content">
						<ul class="accordion">
							<li>
								<a><span> What is the Best Extension for Marketing?</span><i class="bi bi-chevron-right"></i></a>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Introduction to Business Innovation</span>
									<span class="duration">01:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Types of innovation (product, process, business model, etc.)</span>
									<span class="duration">02:30:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Case studies of successful business innovations</span>
									<span class="duration">03:40:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Brainstorming and ideation techniques</span>
									<span class="duration">04:20:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Conducting market analysis and trend</span>
									<span class="duration">05:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
							</li>
							<li>
								<a><span>Market Research & Identifying</span><i class="bi bi-chevron-right"></i></a>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Introduction to Business Innovation</span>
									<span class="duration">01:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Types of innovation (product, process, business model, etc.)</span>
									<span class="duration">02:30:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Case studies of successful business innovations</span>
									<span class="duration">03:40:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Brainstorming and ideation techniques</span>
									<span class="duration">04:20:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Conducting market analysis and trend</span>
									<span class="duration">05:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
							</li>
							<li>
								<a><span> Business Model Innovation</span><i class="bi bi-chevron-right"></i></a>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Introduction to Business Innovation</span>
									<span class="duration">01:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Types of innovation (product, process, business model, etc.)</span>
									<span class="duration">02:30:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Case studies of successful business innovations</span>
									<span class="duration">03:40:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Brainstorming and ideation techniques</span>
									<span class="duration">04:20:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Conducting market analysis and trend</span>
									<span class="duration">05:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
							</li>
							<li>
								<a><span>Digital Transformation & Emerging</span><i class="bi bi-chevron-right"></i></a>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Introduction to Business Innovation</span>
									<span class="duration">01:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Types of innovation (product, process, business model, etc.)</span>
									<span class="duration">02:30:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Case studies of successful business innovations</span>
									<span class="duration">03:40:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Brainstorming and ideation techniques</span>
									<span class="duration">04:20:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Conducting market analysis and trend</span>
									<span class="duration">05:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
							</li>
							<li>
								<a><span>Funding & Scaling Innovation</span><i class="bi bi-chevron-right"></i></a>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Introduction to Business Innovation</span>
									<span class="duration">01:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Types of innovation (product, process, business model, etc.)</span>
									<span class="duration">02:30:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Case studies of successful business innovations</span>
									<span class="duration">03:40:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Brainstorming and ideation techniques</span>
									<span class="duration">04:20:12<i class="fa-regular fa-eye"></i></span>
								</p>
								<p>
									<span class="title"><i class="fa-solid fa-circle-play"></i>Conducting market analysis and trend</span>
									<span class="duration">05:00:12<i class="fa-regular fa-eye"></i></span>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Accordion -->
				<div class="course-details-instructors">
					<div class="course-instructors-content">
						<div class="instructors-thumb">
							<a href="#"><img src="assets/images/inner-img/instructor-details-thumb.webp" alt="Instructor image"></a>
						</div>
						<div class="course-instructors-info">
							<div class="instructors-info">
								<span class="instructor">Instructor</span>
								<h3 class="name">Anjelina Watson</h3>
							</div>
							<div class="course-instructors-rating">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
									<li class="instructor-rate">(4.5)</li>
								</ul>
							</div>
							<h5 class="designation">UI/UX Designer</h5>
							<div class="instructor-dtls-social">
								<ul class="social-icon-list">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-12">
						<div class="instructor-ratting-box">
							<div class="ins-rating-box-number">
								<h4>5.00</h4>
							</div>
							<div class="ins-rating-box-icon">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
							</div>
							<p class="rating-box-desc">(Total 16 Ratings)</p>
						</div>
					</div>

					<div class="col-xl-7 col-lg-12">
						<div class="instuctor-review-progress-wrapper">
							<!-- Rating for 5 Stars -->
							<!-- prossess bar -->
							<div class="prossess-ber-plugin">
								<span class="prosses-bar"><i class="fa-solid fa-star"></i>5 Star</span>
								<p class="bd-review-number">(05)</p> 
								<div id="bar1" class="barfiller">
									<div class="tipWrap">
										<span class="tip">90</span>
									</div>
									<span class="fill" data-percentage="90"></span>
								</div> 
								<span class="prosses-bar"><i class="fa-solid fa-star"></i>4 Star</span>
								<p class="bd-review-number">(04)</p> 
								<div id="bar2" class="barfiller">
									<div class="tipWrap">
										<span class="tip">80</span>
									</div>
									<span class="fill" data-percentage="80"></span>
								</div>	
								<span class="prosses-bar"><i class="fa-solid fa-star"></i>3 Star</span>
								<p class="bd-review-number">(03)</p> 
								<div id="bar3" class="barfiller">
									<div class="tipWrap">
										<span class="tip">60</span>
									</div>
									<span class="fill" data-percentage="60"></span>
								</div>	
								<span class="prosses-bar"><i class="fa-solid fa-star"></i>2 Star</span>
								<p class="bd-review-number">(02)</p> 
								<div id="bar4" class="barfiller">
									<div class="tipWrap">
										<span class="tip">50</span>
									</div>
									<span class="fill" data-percentage="50"></span>
								</div>	
								<span class="prosses-bar"><i class="fa-solid fa-star"></i>1 Star</span>
								<p class="bd-review-number">(01)</p> 
								<div id="bar5" class="barfiller">
									<div class="tipWrap">
										<span class="tip">40</span>
									</div>
									<span class="fill" data-percentage="40"></span>
								</div>			
							</div>
						</div>
					</div>
					<div class="course-detalis-reviews">
						<h3 class="course-details-content-title">Student’s Reviews</h3>
						<div class="reviews-postbox-comment">
							<ul>
								<li class="post-comment-box-1">
									<div class="reviews-postbox-comment-box">
										<div class="reviews-postbox-comment-text">
											<div class="reviews-postbox-comment-info">
												<div class="reviews-postbox-comment-autor">
													<img src="assets/images/inner-img/review-autor1.webp" alt="image">
												</div>
											</div>
											<div class="reviews-postbox-comment-name">
												<a href="#">John D. Alexon</a>
												<div class="post-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a class="post-time" href="#">6 min ago</a>
												</div>
											</div>
										</div>
										<div class="reviews-desc">
											<p>Educate the ultimate destination for knowledge seekers and educators alike distinctively restore
												We are committed to transforming special education</p>
										</div>
									</div>
								</li>
								<li class="post-comment-box-2">
									<div class="reviews-postbox-comment-box">
										<div class="reviews-postbox-comment-text">
											<div class="reviews-postbox-comment-info">
												<div class="reviews-postbox-comment-autor">
													<img src="assets/images/inner-img/review-autor2.webp" alt="image">
												</div>
											</div>
											<div class="reviews-postbox-comment-name">
												<a href="#">Anjelina Watson</a>
												<div class="post-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a class="post-time" href="#">6 min ago</a>
												</div>
											</div>
										</div>
										<div class="reviews-desc">
											<p>Dramatically implement just in time e-commerce via timely architectures. Objectively formulate 
												bleeding-edge quality vectors and cost effective growth </p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
				<div class="event-sidebar-wrapper">
					<div class="event-sidebar">
						<div class="event-sidebar-thumb">
							<img src="assets/images/inner-img/course-thumb1.webp" alt="thumb">
							<div class="course-video-icon">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="fa-classic fa-solid fa-play fa-fw"></i></a>
							</div>
						</div>
						<div class="event-info">
							<div class="event-info-title">
								<h3>Course Includes :</h3>
							</div>
						</div>
						<div class="event-info-list">
							<ul>
								<li>
									<div class="label">
										<i class="fa-solid fa-dollar-sign"></i>Price
									</div>
									<span class="value-dollar">$60</span>
								</li>
								<li>
									<div class="label">
										<i class="fa-solid fa-user"></i>Instructor
									</div>
									<span class="value">John D. Alexon</span>
								</li>
								<li>
									<div class="label">
										<i class="fa-solid fa-book"></i> Lessons
									</div>
									<span class="value">10 Lessons</span>
								</li>
								<li>
									<div class="label">
										<i class="fa-regular fa-circle-user"></i> Enrolled
									</div>
									<span class="value">120 Students</span>
								</li>
								<li>
									<div class="label">
										<i class="fa-regular fa-circle-check"></i>Certifications
									</div>
									<span class="value">Yes</span>
								</li>
								<li>
									<div class="label">
										<i class="fa-solid fa-globe"></i>Language
									</div>
									<span class="value">English (US)</span>
								</li>
							</ul>
						</div>
						<div class="event-info-btn">
							<a href="course.html">BOOK NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
						<div class="course-share-title">
							<h5>Share Now</h5>
						</div>
						<div class="course-share-icon">
							<ul class="share-icon">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==================================================-->
	<!--End educate-details-course-area -->
<!--==================================================-->







<!--==================================================-->
<!-- Start educate-details-course-area style-inner -->
<!--==================================================-->
<div class="educate-details-course-area style-inner details">
	<div class="container">
		<div class="row align-items-center section-title-space">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h1>Course you may like</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb1.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Business</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course.html">Business Innovation And
							Development</a></h4>
						<div class="course-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="course-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
							<div class="course-price">
								<h3>$60</h3>
							</div>
						</div>
						<div class="course-details-list">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 16 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 1500 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb3.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Networking</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course.html">Fundamentals of Network
							And Domains</a></h4>
						<div class="course-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="course-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
							<div class="course-price">
								<h3>Free</h3>
							</div>
						</div>
						<div class="course-details-list">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 10 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 190 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb3.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Finance</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course.html">Banking Management for
							Economics Industry</a></h4>
						<div class="course-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="course-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
							<div class="course-price">
								<h3>$80 <del>$100</del></h3>
							</div>
						</div>
						<div class="course-details-list">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 20 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 890 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
	<!--End educate-details-course-area -->
<!--==================================================-->





<!--==================================================-->
<!-- Start educate Footer Area -->
<!--==================================================-->

@endsection