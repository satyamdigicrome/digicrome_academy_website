@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="breadcumb-area d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h4>Corporate Services</h4>
					</div>
					<ul>
						<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
						<li>Corporate Services</li>
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
<section class="py-5" style="background-color: #fff8f0;">
    <div class="container">
      <div class="row align-items-center">
        
        <!-- Left: Image -->
        <div class="col-md-6 mb-4 mb-md-0 text-center">
          <img src="https://digicrome.com/public/storage/1579/1710927982.webp" alt="Main Image" class="img-fluid rounded" style="max-width: 100%; aspect-ratio: 1/1; object-fit: cover;">
        </div>
        
        <!-- Right: Text + Logos -->
        <div class="col-md-6">
            <div class="section_title">
          <h1 class="fw-bold mb-2" style="color: #f29c12;">Amplifying Growth, Achieving Impact</h1>
            </div>
          <h5 class="text-muted mb-4">Customer Success Stories</h5>
          
          <!-- Logo Grid -->
          <div class="row g-3">
            <!-- Repeat this block for 16 logos -->
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
  
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
  
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
  
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
            <div class="col-3 text-center">
              <img src="https://digicrome.com/public/www/seoimg/1.webp" alt="Logo" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5" style="background-color: #fff8f0;">
    <div class="container text-center">
      <!-- Heading -->
      <h2 class="fw-bold mb-4" style="color: #f29c12;">Awards & Recognition</h2>
      <p class="text-muted mb-5">Celebrating our proud moments and achievements.</p>
  
      <!-- Carousel -->
      <div id="awardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
  
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center g-3">
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 1"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 2"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 3"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 4"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 5"></div>
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center g-3">
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 6"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 7"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 8"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 9"></div>
              <div class="col-2"><img src="https://digicrome.com/public/storage/1563/1710923239.webp" class="img-fluid rounded shadow" alt="Award 10"></div>
            </div>
          </div>
  
          <!-- Add more slides as needed -->
  
        </div>
  
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#awardCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" style="filter: invert(1);"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#awardCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" style="filter: invert(1);"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  
  <div class="case-study-area style-one">
	<div class="container">
		<div class="row align-items-center section-title-space">
			<div class="col-lg-6">
				<div class="section-sub-title">
					<h6>OUR COURSES</h6>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section_title">
					<h1>Our Courses – Comprehensive</h1>
					<h1>Available all programs</h1>
				</div>
			</div>
		</div>
		<div class="row case-study-bg">
			<div class="col-lg-12 col-sm-12">
				<div class="case_study_nav">
					<div class="case_study_menu">
						<ul class="menu-filtering">
							<li data-filter=".Networking">Upcomeing Courses</li>
							<li data-filter="*" class="current_menu_item">Postgraduate And Master Programs</li>
							<li data-filter=".Wordpress">Professional Programs</li>
							<li data-filter=".Business">Language Programs</li>
							<li data-filter=".Networking">Certificate Programs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<!-- row2 -->
		<div class="row image_load">
			<div class="col-xl-3 col-lg-6 col-md-6 grid-item Wordpress Networking">
				<div class="case-study-single-box">
					<div class="case-study-thumb">
						<img src="{{ asset('assets/images/home-one/case-thumb1.webp') }}" alt="thumb">
						<div class="case-meta-top">
							<span>$30</span>
						</div>
					</div>
					<div class="case-study-content">
						<h5>Business</h5>
						<h4><a href="course.html">Business Innovation And
							Development</a></h4>
						<div class="case-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="case-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
						</div>
						<div class="case-autor-box">
							<div class="case-autor-img">
								<img src="{{ asset('assets/images/home-one/case-autor.webp') }}" alt="autor">
							</div>
							<div class="case-autor-content">
								<h3>John D. Alexon</h3>
								<p>Instractor</p>
							</div>
						</div>
						<div class="case-course-content">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 12 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 1200 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 grid-item Business Finance Wordpress">
				<div class="case-study-single-box box-2">
					<div class="case-study-thumb">
						<img src="{{ asset('assets/images/home-one/case-thumb2.webp') }}" alt="thumb">
						<div class="case-meta-top">
							<span>Free</span>
						</div>
					</div>
					<div class="case-study-content">
						<h5>Networking</h5>
						<h4><a href="course.html">Fundamentals of Network
							And Domains</a></h4>
						<div class="case-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="case-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
						</div>
						<div class="case-autor-box">
							<div class="case-autor-img">
								<img src="{{ asset('assets/images/home-one/case-autor2.webp') }}" alt="autor">
							</div>
							<div class="case-autor-content">
								<h3>David Watson</h3>
								<p>Instractor</p>
							</div>
						</div>
						<div class="case-course-content">
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
			<div class="col-xl-3 col-lg-6 col-md-6 grid-item Networking Designing Business">
				<div class="case-study-single-box box-3">
					<div class="case-study-thumb">
						<img src="{{ asset('assets/images/home-one/case-thumb3.webp') }}" alt="thumb">
						<div class="case-meta-top">
							<span>$35</span>
						</div>
					</div>
					<div class="case-study-content">
						<h5>Designing</h5>
						<h4><a href="course.html">Creative Graphic Design 
							with Adobe Suite</a></h4>
						<div class="case-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="case-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
						</div>
						<div class="case-autor-box">
							<div class="case-autor-img">
								<img src="{{ asset('assets/images/home-one/case-autor3.webp') }}" alt="autor">
							</div>
							<div class="case-autor-content">
								<h3>Nelson Mendela</h3>
								<p>Instractor</p>
							</div>
						</div>
						<div class="case-course-content">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 15 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 1600 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 grid-item Networking Designing Business">
				<div class="case-study-single-box box-3">
					<div class="case-study-thumb">
						<img src="{{ asset('assets/images/home-one/case-thumb3.webp') }}" alt="thumb">
						<div class="case-meta-top">
							<span>$35</span>
						</div>
					</div>
					<div class="case-study-content">
						<h5>Designing</h5>
						<h4><a href="course.html">Creative Graphic Design 
							with Adobe Suite</a></h4>
						<div class="case-rating">
							<ul>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-solid fa-star"></i></li>
								<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
							</ul>
							<div class="case-rating-num">
								<span>(4.5/3 Ratings)</span>
							</div>
						</div>
						<div class="case-autor-box">
							<div class="case-autor-img">
								<img src="{{ asset('assets/images/home-one/case-autor3.webp') }}" alt="autor">
							</div>
							<div class="case-autor-content">
								<h3>Nelson Mendela</h3>
								<p>Instractor</p>
							</div>
						</div>
						<div class="case-course-content">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 15 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 1600 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="case-shape1">
			<img src="{{ asset('assets/images/home-one/case-shape1.webp') }}" alt="shape">
		</div>
	</div>
</div>

<section class="py-5" style="background-color: #fff8f0;">
    <div class="container text-center">
      <div class="row g-4 justify-content-center">
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">5/6</h3>
          <p class="mb-0">Learners experienced<br>career advancement</p>
        </div>
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">87%</h3>
          <p class="mb-0">Achieved the<br>program objectives</p>
        </div>
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">82%</h3>
          <p class="mb-0">Gained better clarity<br>on the subject</p>
        </div>
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">1k+</h3>
          <p class="mb-0">Industry Experts<br>& Mentors</p>
        </div>
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">71%</h3>
          <p class="mb-0">Feel confident applying<br>skills on the job</p>
        </div>
  
        <div class="col-6 col-md-4 col-lg-2">
          <h3 class="fw-bold" style="color: #f29c12;">93%</h3>
          <p class="mb-0">Program<br>completion rate</p>
        </div>
  
      </div>
    </div>
  </section>
  <section class="feature-area style-one">
	<div class="container">
		<div class="row align-items-center section-title-space">
			<div class="col-lg-6">
				<div class="section-sub-title">
					<h6>core features</h6>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section_title">
					<h1>Interactive Online Learning</h1>
					<h1>Key Features & Benefits</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-feature-box box-1">
					<div class="feature-icon">
						<img src="{{ asset('assets/images/home-one/feature-icon1.webp') }}" alt="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Learning Experiences</h4>
						<p class="feature-desc">The ultimate destination for knowledge for
							We are committed to transforming</p>
					</div>
					<div class="educate-hover-box hover-bx"></div>
					<div class="educate-hover-box hover-bx2"></div>
					<div class="educate-hover-box hover-bx3"></div>
					<div class="educate-hover-box hover-bx4"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-feature-box box-2">
					<div class="feature-icon">
						<img src="{{ asset('assets/images/home-one/feature-icon2.webp') }}" alt="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Professional Instructor</h4>
						<p class="feature-desc">The ultimate destination for knowledge for
							We are committed to transforming</p>
					</div>
					<div class="educate-hover-box hover-bx"></div>
					<div class="educate-hover-box hover-bx2"></div>
					<div class="educate-hover-box hover-bx3"></div>
					<div class="educate-hover-box hover-bx4"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-feature-box box-3">
					<div class="feature-icon">
						<img src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Moneyback Gaurantee</h4>
						<p class="feature-desc">The ultimate destination for knowledge for
							We are committed to transforming</p>
					</div>
					<div class="educate-hover-box hover-bx"></div>
					<div class="educate-hover-box hover-bx2"></div>
					<div class="educate-hover-box hover-bx3"></div>
					<div class="educate-hover-box hover-bx4"></div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-feature-box box-3">
					<div class="feature-icon">
						<img src="{{ asset('assets/images/home-one/feature-icon3.webp') }}" alt="feature-icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Moneyback Gaurantee</h4>
						<p class="feature-desc">The ultimate destination for knowledge for
							We are committed to transforming</p>
					</div>
					<div class="educate-hover-box hover-bx"></div>
					<div class="educate-hover-box hover-bx2"></div>
					<div class="educate-hover-box hover-bx3"></div>
					<div class="educate-hover-box hover-bx4"></div>
				</div>
			</div>
		</div>
		<div class="feature-shape1">
			<img src="{{ asset('assets/images/home-one/feature-shape1.webp') }}" alt="shape">
		</div>
		<div class="feature-shape2 rotateme">
			<img src="{{ asset('assets/images/home-one/feature-shape2.webp') }}" alt="shape2">
		</div>
	</div>
</section>
<section class="contact_area inner_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<!-- section title -->
				<div class="section-sub-title three">
					<h6><img src="assets/images/inner-img/sub-title2.webp" alt="icon">GET IN TOUCH</h6>
				</div>
				<div class="section_title">
					<h1>Trusted By the Genious</h1>
					<h1>People with EducateX</h1>
				</div>
				<div class="section-title-desc">
					<p>Media leadership skills before cross-media innovation main technology
						develop standardized platforms without consalt.</p>
				</div>
				<div class="contact_main_info">
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="call_info">
							<p>Call us Anytime</p>
							<h3>+123 - (4567) - 890</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-envelope-open"></i>
						</div>
						<div class="call_info">
							<p>Call us Anytime</p>
							<h3>example@gmail.com</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="call_info">
							<p>Our Locations</p>
							<span>102/B Soltek New Elephant Road <br>California, USA</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<!-- contact form box -->
				<div class="contact-form-box style_two">
					<!-- section title -->
					<div class="contact-section-title">
						<h4>CONTACT US</h4>
						<h1>Feel Free to Contact Us</h1>
					</div>
					<form action="https://formspree.io/f/myyleorq" method="POST">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="name" placeholder="Your Name *">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="name" placeholder="Phone No">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="email" name="name" placeholder="Enter E-Mail *">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-box">
									<input type="text" name="name" placeholder="Select Subjects *">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-box message">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message :"></textarea>
								</div>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="vehicle1" name="vehicle1" value="agree">
								<label for="vehicle1">Agree with Terms and Conditions</label>
							</div>
							<div class="contact-form">
								<button type="submit">Send Message</button>
							</div>
						</div>
					</form>
					<div id="status"></div>
				</div> 
			</div>
		</div>
		<div class="contact_shape2 dance2">
			<img src="assets/images/inner-img/contact-shape.webp" alt="shape">
		</div>
	</div>
</section>
  
@endsection