@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
@include('components.lead-form-popup')

<style>
	.contact-img {
		padding: 346px 0 135px;
	}
</style>
<!--==================================================-->
<!-- Start educate Breadcumb Area -->
<!--==================================================-->
<style>
	.contact-img {
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		width: 100%;
		height: 300px;
		/* Default height for desktop */
		display: flex;
		align-items: center;
		justify-content: center;
	}

	@media (max-width: 768px) {
		.contact-img {
			height: 180px;
			/* Smaller height for mobile */
		}
	}
</style>

<div class="contact-img d-flex" style="background-image: url('{{ asset('assets/images/cus.webp') }}')">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				{{-- <div class="breadcumb-content">
							<div class="breadcumb-title">
								<h4>Contact</h4>
							</div>
							<ul>
								<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
								<li>Contact</li>
							</ul>
						</div> --}}
			</div>
		</div>
		{{-- <div class="breadcumb-shape">
					<img loading="lazy"src="assets/images/inner-img/breadcumb-dot.webp" alt="dot">
				</div>
				<div class="breadcumb-shape2">
					<img loading="lazy"src="assets/images/inner-img/breadcumb-ball.webp" alt="ball">
				</div> --}}
	</div>
</div>
<!--==================================================-->
<!-- End educate Breadcumb Area -->
<!--==================================================-->
<div id="main">

	<h2 class="text-center mb-2" style="font-size: 2rem; margin-top: 15px;">
		Contact Digicrome <span style="color: #f29c12;">Support</span> at  01205222560
	</h2>
	<p class="text-center text-muted mb-4" style="font-size: 15px;">
		Need assistance? Whether it's admission queries, account-related concerns, or student support, our dedicated team is here to help you. Reach out to us via call or email, and we'll ensure a smooth experience for you.
	</p>
</div>
<style>
	.top_bar {
		background-color: #f29c12;
		color: white;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: center;
		border-radius: 20px 20px 0 0;
		flex-wrap: wrap;

	}

	/* Tablet (Medium Screens: 768px - 991px) */
	@media (max-width: 991px) {
		.top_bar {
			flex-direction: column;
			/* कॉलम में आइटम दिखाने के लिए */
			text-align: center;
			padding: 15px 0;
		}

		.top_bar a {
			display: block;
			padding: 8px 0;
		}
	}

	/* Mobile (Small Screens: 480px - 767px) */
	@media (max-width: 767px) {
		.top_bar {
			flex-direction: column;
			text-align: center;
			padding: 15px 10px;
		}

		.top_bar a {
			display: block;
			padding: 10px;
			font-size: 14px;
		}
	}

	/* Extra Small Screens (Less than 480px) */
	@media (max-width: 480px) {
		.top_bar {
			padding: 10px 5px;
		}

		.top_bar a {
			font-size: 12px;
			padding: 8px;
		}
	}

	.top_bar a {
		color: white;
		text-decoration: none;
		font-size: 14px;
		display: flex;
		align-items: center;
		cursor: pointer;
	}

	.top_bar a i {
		margin-right: 5px;
	}

	.content-section {
		background-color: #f5f5f5;
		padding: 20px;
		border-radius: 8px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		border-radius: 0 0 20px 20px;
	}
</style>

<section>
	<div class="container-fluid" style="width:80%">
		<div class="top_bar">
			<a style="font-size: 18px;" onclick="showContent('contact')"><i class="fas fa-phone"></i> Customer Contact No.</a>
			<a style="font-size: 18px;" onclick="showContent('connect')"><i class="fas fa-globe"></i> Connect Online</a>
			<a style="font-size: 18px;" onclick="showContent('locate')"><i class="fas fa-map-marker-alt"></i> Locate Us</a>
			<a style="font-size: 18px;" onclick="showContent('whatsapp')"><i class="fab fa-whatsapp"></i> WhatsApp</a>
			<a style="font-size: 18px;" onclick="showContent('chatbot')"><i class="fas fa-comments"></i> Chatbot</a>
			<a style="font-size: 18px;" onclick="showContent('callback')"><i class="fas fa-phone-alt"></i> Get A Callback</a>


		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 content-section" id="content">

					<h2>Click an option to see details here</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function showContent(type) {
		let content = document.getElementById('content');
		if (type === 'callback') {
			content.innerHTML = `
					<div class="row">
		<div class="col-md-6 d-flex justify-content-center align-items-center">
			<img loading="lazy"src="{{ asset('assets/images/cot1.png') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
		</div>
		<div class="col-md-6">
		<br>
		<h3>Want a callback? Enter your details.</h3>
		<form id="frm123"  method="post" action="https://demo.digicrome.com/post_lead.php">       

		<div class="mb-3">
			<input class="form-control" style="border-radius: 20px;   padding: 12px;" placeholder="Enter your name" name="name" type="text">
		</div>

		<div class="mb-3">
			<input class="form-control" style="border-radius: 20px;   padding: 12px;" placeholder="Enter your email"  name="email" type="email">
		</div>

		<div class="mb-3">
			<input class="form-control" style="border-radius: 20px;   padding: 12px;" placeholder="Enter your mobile number"  name="mobile"  type="number">
		</div>

		<div class="row">
			<div class="col-md-6 mb-3">
				<input class="form-control" style="border-radius: 20px;   padding: 12px;" name="title" placeholder="Enter your qualification" type="text">
			</div>
			<div class="col-md-6 mb-3">
				<input class="form-control" style="border-radius: 20px;   padding: 12px;" name="address" placeholder="Enter your city" type="text">
			</div>
		</div>

		<div class="mb-3">
			<select style="border-radius: 20px;   padding: 7px;" class="form-control" id="qualification" name="profession">
			<option style="color:#000;" value="" disabled selected>Select Experience</option>
			<option style="color:#000;" value="Working Professional - Technincal Roles">Working Professional - Technincal Roles</option>
			<option style="color:#000;" value="Working Professional - Non Technincal">Working Professional - Non Technincal</option>
			<option style="color:#000;" value="College Student - Final Year">College Student - Final Year</option>
			<option style="color:#000;" value="College Student - 1st to pre-final Year">College Student - 1st to pre-final Year</option>
			<option style="color:#000;" value="Other">Other</option>
		</select>
		</div>
		<input type="hidden" id="mobile" name="source" Value="Website(Contact)" placeholder="Mobile Number">

					<input type="hidden" id="mobile" name="country" value="india" placeholder="Mobile Number">
<input type="hidden" name="ib" value="">
					<input type="hidden" id="mobile" name="comp_name" placeholder="Mobile Number">

					<input type="hidden" id="mobile" name="state" value="" placeholder="Mobile Number">

					<input type="hidden" id="mobile" name="altr_mobile" placeholder="Mobile Number">

		<button type="submit" class="btn btn-warning w-100">GET A CALLBACK</button>
		   </form>

		<p class="mt-3 text-muted text-center" style="font-size: 14px;">
			By continuing, you confirm that you have read and agreed to 
			<a href="#" class="text-decoration-none">Digicrome Terms</a> and 
			<a href="#" class="text-decoration-none">Privacy Policy</a>.
		</p>
	</div>

	</div>
	`;
		} else if (type === 'connect') {
			content.innerHTML = `
					<div class="row">
		<div class="col-md-6 d-flex justify-content-center align-items-center">
			<img loading="lazy"src="{{ asset('assets/images/cot2.png') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
		</div>
		<div class="col-md-6">
		<div class="app-download-box text-center p-4" style="border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); background-color: #fff;">
			<h3>Download the Digicrome App</h3>
			<p>Get started today by downloading our app from the store.</p>

			<div class="d-flex justify-content-center gap-3">
			<a href="https://play.google.com/store/apps/details?id=com.digichrome.app">
				<img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" title="Google Play" style="width: 150px;"></a>
				<a href="https://apps.apple.com/in/app/digicrome-academy/id6503241441">
				<img loading="lazy"src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store" title="App Store" style="width: 150px;"></a>
			</div>

			<div class="mt-3">
				<h5>Scan QR Code to Download</h5>
				<img loading="lazy"src="https://us.digicrome.com/public/www/seoimg/code.png" alt="QR Code" title="QR Code" style="width: 150px; border-radius: 10px;">
			</div>
		</div>
	</div>


	</div>
	`;
		} else if (type === 'locate') {
			content.innerHTML = `<div class="container mt-5">
		<div class="row align-items-center">
		  <!-- Left side: Image -->
		  <div class="col-md-6 d-flex justify-content-center align-items-center">
			<img loading="lazy"src="{{ asset('assets/images/location.svg') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
		</div>


		  <!-- Right side: Address Information -->
		  <div class="col-md-6">
			<h2>Locate Us</h2>
			<p>Find our nearest branch.</p>

			<div class="row">
			  <!-- US Address Card -->
			  <div class="col-12 mb-3">
				<div class="card">
				  <div class="card-body">
					<div class="d-flex align-items-center">
					  <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/2560px-Flag_of_the_United_States.svg.png" alt="US Flag" title="US Flag" style="width: 40px; height: 30px; margin-right: 10px;">
					  <h5 class="card-title">Office in the US</h5>
					</div>
					<br>
					<p class="card-text"> 30 N Gould St Ste R Sheridan, Wyoming 82801</p>
				  </div>
				</div>
			  </div>

			  <!-- India Address Card -->
			  <div class="col-12">
				<div class="card">
				  <div class="card-body">
					<div class="d-flex align-items-center">
					  <img loading="lazy"src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/2560px-Flag_of_India.svg.png" alt="India Flag" title="India Flag" style="width: 40px; height: 30px; margin-right: 10px;">
					  <h5 class="card-title">Office in India</h5>
					</div>
					<br>
					<p class="card-text">C-108, Second Floor, Block C, Sector 02, Noida, Uttar Pradesh 201301</p>
				  </div>
				</div>
			  </div>
			</div>

			<a href="#" class="btn btn-secondary mt-4">
			  <i class="fas fa-map-marker-alt"></i> Find Branch
			</a>
		  </div>
		</div>
	  </div>`;
		} else if (type === 'whatsapp') {
			content.innerHTML = `<div class="container mt-5">
		<div class="row align-items-center">
		  <!-- Left side: Image -->
		  <div class="col-md-6">
			<img loading="lazy"src="{{ asset('assets/images/whatsap.png') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
		</div>

		  <!-- Right side: WhatsApp Contact -->
		  <div class="col-md-6">
			<div class="border p-4 rounded">
			  <h2>Contact us on WhatsApp</h2>
			  <p>Click below to chat with us on WhatsApp.</p>
			  <a href="https://wa.me/916299611702" target="_blank" class="btn btn-success">
				<i class="fab fa-whatsapp"></i> Chat on WhatsApp
			  </a>
			</div>
		  </div>
		</div>
	  </div>`;
		} else if (type === 'chatbot') {
			content.innerHTML = `<div class="container mt-5">
		<div class="row align-items-center chat-box">
			<div class="col-md-5 text-center">
				<img loading="lazy"src="{{ asset('assets/images/chat.png') }}" alt="Chat Image" title="Chat Image">
			</div>
			<div class="col-md-7 chat-text">
				<h2>Have more queries?</h2>
				<p>Get them answered instantly.</p>
				<a href="https://embed.tawk.to/6515c050e6bed319d003dd5f/1hbefefnp" class="btn btn-light text-primary fw-bold">
					<i class="fas fa-comments"></i> SAY HELLO
				</a>
			</div>
		</div>
	</div>`;
		} else if (type === 'contact') {
			content.innerHTML = `<div class="container mt-5">
		<div class="row align-items-center contact-box">
			<div class="col-md-5 text-center">
				<img loading="lazy"src="{{ asset('assets/images/coustome.svg') }}" alt="Contact Image" title="Contact Image">
			</div>
			<div class="col-md-7">
				<h2>Customer Contact Number</h2>
				<p>Call us for assistance.</p>
				<a href="tel:+1234567890" class="btn btn-dark btn-call">
					<i class="fas fa-phone"></i> Call Now
				</a>
				<div class="row mt-4">
					<div class="col-md-4">
						<div class="info-box">
							<h5>For Admission Queries</h5>
							<p><i class="fas fa-phone"></i> 01205222560</p>
							<p><i class="fas fa-envelope"></i> info@digicrome.com</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info-box">
							<h5>For Account Department</h5>
							<p><i class="fas fa-phone"></i> 01205212622</p>
							<p><i class="fas fa-envelope"></i> accounts@digicrome.com</p>
						</div>
					</div>
					<div class="col-md-4">
		<div class="info-box">
			<h5>For Students Support</h5>
			<p><i class="fas fa-phone"></i> 7011101972 <br><small>Available: 10 AM to 9 PM</small></p>
			<p><i class="fas fa-phone"></i> 01205212245 <br><small>Available: 11 AM to 6 PM</small></p>
			<p><i class="fas fa-envelope"></i> support@digicrome.com</p>
		</div>
	</div>

				</div>
			</div>
		</div>
	</div>
	`;
		}
	}
	window.onload = function() {
		showContent('contact');
	};
</script>
<!--==================================================-->
<!-- Start Consalt Contact Area Inner Page -->
<!--==================================================-->
<section class="contact_area inner_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<!-- section title -->
				<div class="section-sub-title three">
					<h6><img loading="lazy" src="assets/images/inner-img/sub-title2.webp" alt="icon" title="icon">GET IN TOUCH</h6>
				</div>
				<div class="section_title">
					<h1>Trusted By the Genious</h1>
					<div class="fs-1 fw-bold" style="color: #1a1447;">
						People with Digicrome
					</div>
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
							<h3> 01205222560</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-envelope-open"></i>
						</div>
						<div class="call_info">
							<p>Mail us Anytime</p>
							<h3>info@digicrome.com</h3>
						</div>
					</div>
					<div class="call-do-action-info">
						<div class="call-do-social_icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="call_info">
							<p>Our Location</p>
							<span>Address: C-108, Second Floor, Block C, Sector 02<br>Noida, Uttar Pradesh 201301</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<!-- contact form box -->
				<div class="contact-form-box style_two">
					<!-- section title -->
					{{-- <div class="contact-section-title">
								<h4>CONTACT US</h4>
								<h1>Feel Free to Contact Us</h1>
							</div> --}}
					<form style="width:100%; background:transparent; margin:0px;" class="form" method="post"
						action="https://demo.digicrome.com/post_lead.php">
						@csrf
						<h2 style="    color: #f29c12;"> Register now!! And get a quick call</h2>
						<div class="form-field">
							<!--<label style="color:#fff;" for="name">Name:</label> -->
							<input type="text" id="name" name="name" placeholder="Name">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="mobile">Mobile Number:</label> -->
							<input type="tel" id="mobile" name="mobile" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="gmail">Gmail ID:</label> -->
							<input type="email" id="gmail" name="email" placeholder="E-mail ID:">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="city">City:</label> -->
							<input type="text" id="city" name="address" placeholder="City">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="Qualification">Qualification:</label> -->
							<input type="text" id="qualification" name="title" placeholder="Qualification">
						</div>
						<div class="form-field">
							<!--<label style="color:#fff;" for="qualification">Experience:</label> -->
							<select class="selecttype" id="qualification" name="profession">
								<option value="" disabled selected>Select Experience</option>
								<option value="Working Professional - Technincal Roles">Working Professional -
									Technincal Roles</option>
								<option value="Working Professional - Non Technincal">Working Professional - Non
									Technincal</option>
								<option value="College Student - Final Year">College Student - Final Year</option>
								<option value="College Student - 1st to pre-final Year">College Student - 1st to
									pre-final Year</option>
								<option value="Other">Other</option>
							</select>
						</div>

						<div class="form-field">
							<input type="hidden" id="mobile" name="source" Value="Home Page"
								placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="country" value="india"
								placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="comp_name" placeholder="Mobile Number">
						</div>
						<div class="form-field">
							<input type="hidden" id="mobile" name="state" value="" placeholder="Mobile Number">
						</div>
						<!--<div class="form-field">-->
						<!--    <input type="text" id="mobile" name="profession" placeholder="Mobile Number">-->
						<!--</div>-->
						<div class="form-field">
							<input type="hidden" id="mobile" name="altr_mobile" placeholder="Mobile Number">
						</div>
						<input type="hidden" name="ib" value="">

						{{-- <p style="    line-height: 30px;">By submitting the form, you agree to our <a href="">Terms
								and Conditions</a> and our <a href="https://digicrome.com/privacy-policy">Privacy
								Policy.</a> </p><br> --}}
						<button type="submit">Submit</button>
					</form>
					<div id="status"></div>
				</div>
			</div>
		</div>
		<div class="contact_shape2 dance2">
			<img loading="lazy" src="assets/images/inner-img/contact-shape.webp" alt="shape" title="shape">
		</div>
	</div>
</section>
<!--==================================================-->
<!-- End Consalt Contact Area  Inner Page -->
<!--==================================================-->
<!--==================================================-->
<!-- Start Consalt Map Area -->
<!--==================================================-->
<div class="row p-4">
	<div class="col-lg-6">
		<h2 class="mb-2" style="font-size: 2rem; margin-top: 15px;">
			Nation Navigator: <span style="color: #141414;"> India </span>
		</h2>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448075.6264138498!2d76.86013065725662!3d28.671967696656612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5639a2a0f31%3A0x4c3b8b61bc63b342!2sDigiCrome%20Academy!5e0!3m2!1sen!2sin!4v1643104363026!5m2!1sen!2sin"
			width="100%" height="520" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="col-lg-6">
		<h2 class="mb-2" style="font-size: 2rem; margin-top: 15px;">
			Map Matrix:<span style="color: #141414;">USA</span>
		</h2>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.167704831202!2d-106.95752532389567!3d44.79777077107091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335fabc2a655555%3A0x3265c73ab4e065e!2s30%20N%20Gould%20St%20STE%20ST%20R%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2sin!4v1698755458200!5m2!1sen!2sin"
			width="100%" height="520" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

	</div>
</div>


<!-- Start Consalt Map Area -->
<!--==================================================-->

@endsection