<!--==================================================-->
<!-- start educate brand Area -->
<!--==================================================-->
{{-- <div class="brand-area style-one">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="section-sub-title">
					<h6>In Association With:</h6>
				</div>
				<div class="section_title">
					<h1>In Association With:</h1>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="brand-list owl-carousel">
					<div class="col-lg-12">
						<div class="single-brand-box">
							<div class="brand-thumb">
							   <img src="{{ asset('assets/images/home-one/brand-img1.webp') }}" alt="brand">
							</div>
						</div>
					</div>				    
					<div class="col-lg-12">
						<div class="single-brand-box">
							<div class="brand-thumb">
								<img src="{{ asset('assets/images/home-one/brand-img2.webp') }}" alt="brand">
							</div>
						</div>
					</div>				   
					<div class="col-lg-12">
						<div class="single-brand-box">
							<div class="brand-thumb">
								<img src="{{ asset('assets/images/home-one/brand-img3.webp') }}" alt="brand">
							</div>
						</div>
					</div>				    				    			    
				</div>
			</div>
		</div>
		<div class="brand-arrow-shape">
			<img src="{{ asset('assets/images/home-one/brand-arrow.webp') }}" alt="arrow">
		</div>
		<div class="brand-star-shape">
			<img src="{{ asset('assets/images/home-one/brand-star.webp') }}" alt="star">
		</div>
		<div class="brand-line-shape">
			<img src="{{ asset('assets/images/home-one/brand-line.webp') }}" alt="line">
		</div>
	</div>
</div> --}}

<!--==================================================-->
<!-- end educate brand Area -->
<!--==================================================-->

{{-- 
<section class="contact_area style-six">
	<div class="container">
		<div class="row contact-bg align-items-center">
			
			<div class="col-lg-6">
				<!-- contact form box -->
					
					<div id="status"></div>
				</div> 
			</div>
		</div>
	</div>
</section> --}}
<!--==================================================-->
<!-- Start educate Footer Area -->
<!--==================================================-->
<div class="footer-area" style="margin-bottom: 45px;">
	<div class="container">
		<div class="row subscribe align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="footer-logo">
					<a href="#"><img src="{{ asset('assets/images/home-one/footer-logo.webp') }}" alt="logo"></a>
				</div>
				<br>
				<div class="section_title six" >
					<h1 style="color: #fff">Let’s Connect and</h1>
					<h1 style="color: #fff">Grow Your Future Together!</h1>
				  </div>
				  <div class="section-title-desc">
					<p style="color: #ddd">Have questions, ideas, or need guidance? Our team is here to support your journey — reach out and let’s build something impactful together.</p>
				  </div>
				  
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="contact-form-box style_six">
					<form id="professionalForm" method="post" action="https://demo.digicrome.com/post_lead.php" style="width:100%; margin:0;">
						@csrf
						<div class="row">
							<!-- Left Column -->
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Name" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<input type="email" name="email" placeholder="E-mail ID" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<input type="text" name="address" placeholder="City" 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
							</div>
					
							<!-- Right Column -->
							<div class="col-md-6">
								<input type="tel" name="mobile" placeholder="Mobile Number" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<input type="text" name="title" placeholder="Qualification" 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<select name="profession" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
									<option value="" disabled selected hidden>Select Experience</option>
									<option value="Working Professional - Technincal Roles">Working Professional - Technincal Roles</option>
									<option value="Working Professional - Non Technincal">Working Professional - Non Technincal</option>
									<option value="College Student - Final Year">College Student - Final Year</option>
									<option value="College Student - 1st to pre-final Year">College Student - 1st to pre-final Year</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					
						<!-- Hidden Fields -->
						<input type="hidden" name="source" value="Home Page">
						<input type="hidden" name="country" value="india">
						<input type="hidden" name="comp_name" value="">
						<input type="hidden" name="state" value="">
						<input type="hidden" name="altr_mobile" value="">
					
						<!-- Terms & Submit -->
						<p style="font-size:12px; line-height:18px; color:#fff;">
							By submitting the form, you agree to our 
							<a href="#" style="color:#f29c12;">Terms</a> and 
							<a href="https://digicrome.com/privacy-policy" style="color:#f29c12;">Privacy Policy</a>.
						</p>
					
						<button type="submit" style="width:100%; padding:10px; background:#f29c12; color:white; border:none; border-radius:5px; font-weight:bold; margin-top:10px;">
							Submit
						</button>
					</form>
					
				</div>
			</div>
		</div>
		<div class="row add-footer-class">
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Get in Touch</h4>
					</div>
					<div class="footer-desc">
						<p>Master yourself as per the ever-increasing demand of professional in Data science and AI firms. Start your journey towards 80% salay hike, TODAY!</p>
					</div>
					<div class="footer-contact-info">
						<div class="footer-contact-phone">
							<p><img src="{{ asset('assets/images/home-one/footer-call.webp') }}" alt="call">01203133869</p>
						</div>
						<div class="footer-contact-address">
							<span><i class="fa-classic fa-regular fa-envelope fa-fw"></i>info@digicrome.com</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Online Platform</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('about') }}">About Us</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('course') }}">Upcoming Courses</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('corporate_services') }}">Corporate Services</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('blog') }}">Blog</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('payments') }}">Payments</a></li>
						</ul>
					</div>
				</div>
			</div>			
			<div class="col-xl-3 col-lg-2 col-md-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Quick Links</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('who_we_are') }}">Who we are</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('success_stories') }}">Success stories</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('terms-and-conditions') }}">Terms And Conditions</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
							<li><img src="{{ asset('assets/images/home-one/footer-icon.webp') }}" alt="icon"><a href="{{ route('privacy-policy') }}">Privacy-Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="footer-widget-title">
					<h4>Our Application</h4>
				</div>
				<div class="footer-widget-blog first">
					<div class="footer-widget-blog-thumb">
						<a href="https://play.google.com/store/apps/details?id=com.digichrome.app">
						<img src="{{ asset('assets/images/playimg.png') }}" alt="recent-img" class="ap-logo"></a>
					</div>
				</div>
				<div class="footer-widget-blog">
					<div class="footer-widget-blog-thumb">
						<a href="https://apps.apple.com/in/app/digicrome-academy/id6503241441">
						<img src="{{ asset('assets/images/apple.png') }}" alt="recent-img" class="ap-logo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- <div class="container">
        <!-- Postgraduate & Master Programs -->
        <div class="row">
            <div class="col-12">
                <h5>Postgraduate & Master Programs</h5>
                <p>
                    Post Graduate Program In Data Science with Artificial Intelligence | Advance Certification Program Business Analytics & Project Management |
                    Advanced Certification Program In Artificial Intelligence & Machine Learning | Post Graduate Program In Cyber Security |
                    Post Graduate Program In Full Stack Development | Post Graduate Program In UI and UX Design |
                    Masters in Data Science and Analytics | Masters in Cloud Computing | Masters in Mobile App Development |
                    Masters in Cyber Security | Master's Program in Big Data Engineering & Cloud Computing |
                    Real Estate Business Management Program | Advanced Certification Online Data Analytics and Machine Learning Course |
                    Post Graduate Program in Data Science with Generative AI
                </p>
            </div>
        </div>    
        <!-- Professional Programs -->
        <div class="row">
            <div class="col-12">
                <h5>Professional Programs</h5>
                <p>
                    AI&ML (Artificial Intelligence and Machine Learning Professional) | Certified Information Systems Security Professional (CISSP) |
                    AWS Certified Solutions Architect - Professional | Cybersecurity Job Oriented Certificate Program |
                    Scrum Product Owner Professional by SCRUMVersity | Machine Learning | Advanced Scrum Product Owner Professional (ASPOP) |
                    Scrum Fundamental Professional By SCRUMVersity | UI/UX Design Professional | Full Stack Development Professional |
                    Power BI | Tableau | Python | MY SQL | Professional Certification Course in Data Science with Machine Learning
                </p>
            </div>
        </div>
        <!-- Language Programs -->
        <div class="row">
            <div class="col-12">
                <h5>Language Programs</h5>
                <p>
                    French Language Training(B1&B2) | German Language Training (C1& C2) | Korean Language Training (C1& C2) |
                    French Language Training(C1&C2) | English Language Training(A1&A2) | English Language Training(B1&B2) |
                    Spanish language Training C2 (Master- Level) | Japanese Language N3 (TRI0 & Shinkansen)
                </p>
            </div>
        </div>
        <!-- Certificate Programs -->
        <div class="row">
            <div class="col-12">
                <h5>Certificate Programs</h5>
                <p>
                    PMPA® Certification Training | Certified Information Systems Security Professional (CISSP) | CISA Certification Training |
                    CISM Certification Training | AWS Certified Solutions Architect - Associate | AWS Certified Developer - Associate |
                    AWS Certified SysOps Administrator - Associate | CBAP Certification Training |
                    Program Management Professional Certification Training | Advanced Certification Program in Generative AI & Deep Learning
                </p>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="d-flex justify-content-between">
                <img src="images/footer_logo.webp" alt="">
                <p>© 2025 DigiCrome. All rights reserved.</p>
            </div>
        </div>
    </div> --}}
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row footer-bottom">
				<div class="col-lg-6">
					<div class="footer-bottom-desc">
						<p>Copyright 2020-2025 Digicrome Pvt Ltd. All Rights Reserved</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer-bottom-social-icon">
						<ul>
							<li><a href="https://www.facebook.com/digcrome.academy/"><i class="fab fa-facebook-f"></i></a></li>
							<li>
								<a href="https://www.instagram.com/digicromeofficial/" target="_blank">
								  <i class="fab fa-instagram"></i>
								</a>
							  </li>
							  <li>
								<a href="https://www.youtube.com/channel/UCZ5NWpMdbsHHlebwerAfJiw" target="_blank">
								  <i class="fab fa-youtube"></i>
								</a>
							  </li>
							  <li>
								<a href="https://www.linkedin.com/company/digicrome-official/" target="_blank">
								  <i class="fab fa-linkedin-in"></i>
								</a>
							  </li>
							  
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End educate Footer Area-->
<!--==================================================-->






<!--==================================================-->
<!-- Start educate Scroll Up-->
<!--==================================================-->
<div class="prgoress_indicator active-progress">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;"></path>
	</svg>
 </div>
<!--==================================================-->
<!-- End educate Scroll Up-->
<!--==================================================-->






 	<!-- modernizr js -->
	<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<!-- jquery js -->
	<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- carousel js -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- counterup js -->
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- waypoints js -->
	<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<!-- wow js -->
	<script src="{{ asset('assets/js/wow.js') }}"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!--  animated-text js -->
	<script src="{{ asset('assets/js/animated-text.js') }}"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- jquery meanmenu js -->
	<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
	<!-- jquery scrollup js -->
	<script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
	<!-- barfiller -->
	<script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
	<!-- theme js -->
	<script src="{{ asset('assets/js/theme.js') }}"></script>
	