@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!--==================================================-->
<!-- Start educate Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area two d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content text-center">
					<div class="breadcumb-title">
						<h4>All Courses</h4>
					</div>
					<ul>
						<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
						<li>All Courses</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bread-shape">
			<img src="assets/images/inner-img/book-hand.webp" alt="book">
		</div>
		<div class="bread-dot2">
			<img src="assets/images/inner-img/bread-dot.webp" alt="dot">
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End educate Breadcumb Area -->
<!--==================================================-->





<!--==================================================-->
<!-- Start educate-details-course-area style-inner -->
<!--==================================================-->
<div class="educate-details-course-area style-inner">
	<div class="container">
		<div class="row align-items-center section-title-space">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h1>Browse My all Course</h1>
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
						<h4><a href="course-details.html">Business Innovation And
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
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
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
						<h4><a href="course-details.html">Fundamentals of Network
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
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
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
						<h4><a href="course-details.html">Banking Management for
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
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb4.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Designing</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course-details.html">Creative Graphic Design 
							with Adobe Suite</a></h4>
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
								<h3>$90</h3>
							</div>
						</div>
						<div class="course-details-list">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 16 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 1000 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb5.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Coding</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course-details.html">Web & Mobile Application
							Developments</a></h4>
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
								<h3>$70 <del>$90</del></h3>
							</div>
						</div>
						<div class="course-details-list">
							<div class="course-lesson">
								<span><i class="fa-regular fa-file-lines"></i> 12 Leasons</span>
							</div>
							<div class="course-student">
								<span><i class="fa-regular fa-user"></i> 200 Students</span>
							</div>
						</div>
						<div class="course-btn">
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="course-details-box">
					<div class="course-details-thumb">
						<img src="assets/images/inner-img/course-thumb6.webp" alt="thumb">
						<div class="course-meta-top">
							<span>Business</span>
						</div>
					</div>
					<div class="course-details-content">
						<h4><a href="course-details.html">Business Innovation And
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
								<h3>$55</h3>
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
							<a href="course-details.html">ENROL NOW<i class="flaticon flaticon-right-arrow"></i></a>
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

@endsection