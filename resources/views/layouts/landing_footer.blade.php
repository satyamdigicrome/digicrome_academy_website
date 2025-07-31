
<div class="footer-area" style="margin-bottom: 45px;">
	<div class="container">
		<div class="row subscribe align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="footer-logo">
					<a href="#"><img loading="lazy"src="{{ asset('assets/images/home-one/footer-logo.webp') }}" alt="logo"></a>
				</div>
				<br>
				<div class="section_title six" >
					<h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;">Let’s Connect and</h2>
					<h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;">Grow Your Future Together!</h2>
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
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Name" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<input type="email" name="email" placeholder="E-mail ID" required 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
								
								<input type="text" name="address" placeholder="City" 
									style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
							</div>
					
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
					
						<input type="hidden" name="ib" value="ib">
						<input type="hidden" name="source" value="Landing(IB)">
						<input type="hidden" name="country" value="india">
						<input type="hidden" name="comp_name" value="">
						<input type="hidden" name="state" value="">
						<input type="hidden" name="altr_mobile" value="">
					
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

	</div>
    
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

	<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/waypoints.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/wow.js') }}" defer></script>
	<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/animated-text.js') }}" defer></script>
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.meanmenu.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.scrollUp.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.barfiller.js') }}" defer></script>
	<script src="{{ asset('assets/js/theme.js') }}" defer></script>
	