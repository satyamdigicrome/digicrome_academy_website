
<!-- ========= Prealoader ==============-->
{{-- <div class="loading-screen" id="loading-screen">
	<span class="bar top-bar"></span>
	<span class="bar down-bar"></span>
	<div class="animation-preloader">
		<div class="spinner"></div>
		<div class="txt-loading">
			<span data-text-preloader="E" class="letters-loading">E</span>
			<span data-text-preloader="d" class="letters-loading">d</span>
			<span data-text-preloader="u" class="letters-loading">u</span>
			<span data-text-preloader="c" class="letters-loading">c</span>
			<span data-text-preloader="a" class="letters-loading">a</span>
			<span data-text-preloader="t" class="letters-loading">t</span>
			<span data-text-preloader="e" class="letters-loading">e</span>
		</div>
	</div>
</div> --}}
<!--========= End Prealoader ============== -->




<!--==================================================-->
<!-- Start educate Header top area -->
<!--==================================================-->
<div class="header-top-area">
	<div class="container-fluid">
		<div class="row header-top">
			<div class="col-xxl-6 col-xl-8 col-lg-8">
				<div class="header-top-welcome">
					<p>Welcome to <a href="/">Digicrome Pvt. Ltd.</a>Think Big Think Digital</p>
				</div>
			</div>
			<div class="col-xxl-6 col-xl-4 col-lg-4">
				<div class="header-top-right">
					<div class="educate-header-from">
						<a class="login-btn" href="sign-in.html"><i class="bi bi-arrow-right-circle"></i>Login</a>
						<a class="sign-up-btn" href="sign-up.html"><i class="bi bi-person-plus"></i>Register</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End educate Header top area -->
<!--==================================================-->





<!--==================================================-->
<!-- Start educate Header Area-->
<!--==================================================-->
<div class="educate-header-area" id="sticky-header" >
	<div class="container-fluid">
		<div class="row header-wrap align-items-center">
			<div class="col-lg-2">
				<div class="header-logo">
					<a class="active_logo" href="/"><img src="{{ asset('assets/images/logo.webp') }}" alt="logo"></a>
					<a class="logo_two" href="/"><img src="{{ asset('assets/images/footer-logo.webp') }}" alt="logo"></a>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="header-menu">
					<ul class="nav_scroll">
						<li>
							<a href="#"  style=" background-color: #1c1647; border: 2px solid #fff; border-radius: 8px; padding: 3px 7px; color: #fff; display: flex; align-items: center; gap: 5px;">
								<i style="color: #fff" class="bi bi-journal-bookmark-fill"></i> <!-- Icon before text -->
								Courses
								<i style="color: #fff" class="bi bi-chevron-down"></i>
							</a>
							<ul class="sub_menu">
								{{-- Custom Static Categories --}}
								<li>
									<a href="{{ route('course', ['ids' => '1,3,55', 'name' => 'Data Science and AI']) }}">
										Data Science with Artificial Intelligence
									</a>
								</li>
								<li>
									<a href="{{ route('course', ['ids' => '61', 'name' => 'Investment Banking']) }}">
										Investment Banking
									</a>
								</li>						
								{{-- Dynamic Categories from Collection --}}
								@foreach($header_collections as $collection)
									<li>
										<a href="{{ route('course.category', $collection->slug) }}">
											{{ $collection->name }}
										</a>
									</li>
								@endforeach
							</ul>
						</li>
						
						<li><a href="/">Home</a>
						</li>
						<li><a href="{{ route('about') }}">About</a></li>
						{{-- <li><a href="#">pages<i class="bi bi-chevron-down"></i></a>
							<ul class="sub_menu">
								<li><a href="{{ route('about') }}">About Us</a></li>
								<li><a href="{{ route('course') }}">Courses</a></li>
								<li><a href="{{ route('course_details') }}">Courses Details</a></li>
								<li><a href="instructor.html">Instructor</a></li>						
								<li><a href="instructor-details.html">Instructor Details</a></li>
								<li><a href="event.html">Event</a></li>	
								<li><a href="event-details.html">Event Details</a></li>	
								<li><a href="pricing.html">Pricing</a></li>	
								<li><a href="faq.html">Faq</a></li>	
								<li><a href="choose.html">Why Choose</a></li>
								<li><a href="testimonial.html">testimonial</a></li>	
								<li><a href="404.html">Error Page</a></li>							
								<li><a href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</li> --}}
						
						
						{{-- <li><a href="#">Shop<i class="bi bi-chevron-down"></i></a>
							<ul class="sub_menu">
								<li><a href="shop.html">shop</a></li>
								<li><a href="shop-details.html">Shop Details</a></li>
								<li><a href="cart.html">Shoping Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
						</li> --}}
						<li><a href="{{ route('corporate_services') }}">Corporate Services </a>
						<li><a href="{{ route('blog') }}">Blog </a>
						<li><a href="{{ route('payments') }}">Payments </a>
							{{-- <ul class="sub_menu">
								<li><a href="{{ route('blog') }}">Blog</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul> --}}
						</li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<li><a href="#">More<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">
						<li><a href="{{ route('who_we_are') }}">Who we are</a></li>
						<li><a href="{{ route('success_stories') }}">Success stories</a></li>
						<li><a href="{{ route('refer_and_earn') }}">Refer & Earn</a></li>
						<li><a href="{{ route('career') }}">Career</a></li>
						{{-- <li><a href="{{ route('media_presence') }}">Media Presence</a></li> --}}

					</ul>
				</li>
				{{-- <li>
					<div class="header-src-btn">
					<div class="search-box-btn search-box-outer"><i class="fa-solid fa-magnifying-glass"></i></div>
				</div>&nbsp;&nbsp;
			</li> --}}
					</ul>				
				</div>
			</div>
			<div class="col-lg-2">
				<div class="header-right-wrapper">
					<div class="header-sidebar">
						{{-- <div class="header-src-btn">
							<div class="search-box-btn search-box-outer"><i class="fa-solid fa-magnifying-glass"></i></div>
						</div>&nbsp;&nbsp; --}}
						{{-- <button class="cart_btn headers-button" type="button">
							<i class="fa-solid fa-cart-shopping"></i>
							<small class="cart_counter">0</small>
						</button> --}}
						<div class="header-btn search-box-btn search-box-outer" >
							<a style="border: 2px solid #fff; color: #fff; background-color: #1c1647;" href="#">Search<i class="fa-solid fa-magnifying-glass" style="color: #fff"></i></a>
						</div>
						{{-- <div class="header-sidbar-button navSidebar-button">
							<a href="#"><i class="bi bi-justify-left"></i></a>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End educate Header Area -->
<!--==================================================-->

<!--========= Start Mobile Memu========== -->

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
	<div class="mobile-menu">
		<nav class="header-menu">
			<div class="mobile-logo">
				<a class="logo_img" href="/" title="educate">
				    <img src="{{ asset('assets/images/footer-logo.webp') }}" alt="logo">
				</a>
			  </div>
			  <ul class="nav_scroll">
				<li><a href="/">Home</a>
					{{-- <ul class="sub_menu">
						<li><a href="/">Home Version 01</a></li>
						<li><a href="index-2.html">Home Version 02</a></li>
						<li><a href="index-3.html">Home Version 03</a></li>
						<li><a href="index-4.html">Home Version 04</a></li>
						<li><a href="index-5.html">Home Version 05</a></li>
						<li><a href="index-6.html">Home Version 06</a></li>
					</ul> --}}
				</li>
				<li><a href="{{ route('about') }}">about</a></li>
				{{-- <li><a href="#">pages<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">
						<li><a href="{{ route('about') }}">About Us</a></li>
						<li><a href="{{ route('course') }}">Courses</a></li>
						<li><a href="{{ route('course_details') }}">Courses Details</a></li>
						<li><a href="instructor.html">Instructor</a></li>						
						<li><a href="instructor-details.html">Instructor Details</a></li>
						<li><a href="event.html">Event</a></li>	
						<li><a href="event-details.html">Event Details</a></li>	
						<li><a href="pricing.html">Pricing</a></li>	
						<li><a href="faq.html">Faq</a></li>	
						<li><a href="choose.html">Why Choose</a></li>
						<li><a href="testimonial.html">testimonial</a></li>	
						<li><a href="404.html">Error Page</a></li>							
						<li><a href="{{ route('contact') }}">Contact</a></li>
					</ul>
				</li> --}}
				<li><a href="#">courses<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">

						{{-- Custom Static Categories --}}
						<li>
							<a href="{{ route('course', ['ids' => '1,3,55', 'name' => 'Data Science and AI']) }}">
								Data Science with Artificial Intelligence
							</a>
						</li>
						<li>
							<a href="{{ route('course', ['ids' => '61', 'name' => 'Investment Banking']) }}">
								Investment Banking
							</a>
						</li>	
				
						{{-- Dynamic Categories from Collection --}}
						@foreach($header_collections as $collection)
							<li>
								<a href="{{ route('course.category', $collection->slug) }}">
									{{ $collection->name }}
								</a>
							</li>
						@endforeach
					</ul>
				</li>
				{{-- <li><a href="#">Shop<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">
						<li><a href="shop.html">shop</a></li>
						<li><a href="shop-details.html">Shop Details</a></li>
						<li><a href="cart.html">Shoping Cart</a></li>
						<li><a href="checkout.html">Checkout</a></li>
					</ul>
				</li> --}}
				<li><a href="{{ route('corporate_services') }}">Corporate Services </a>
				<li><a href="{{ route('blog') }}">Blog</a>
				<li><a href="{{ route('payments') }}">Payments </a>
					{{-- <ul class="sub_menu">
						<li><a href="{{ route('blog') }}">Blog</a></li>
						<li><a href="blog-details.html">Blog Details</a></li>
					</ul> --}}
				</li>
				<li><a href="{{ route('contact') }}">Contact</a></li>
				<li><a href="#">More<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">
						<li><a href="{{ route('who_we_are') }}">Who we are</a></li>
						<li><a href="{{ route('success_stories') }}">Success stories</a></li>
						<li><a href="{{ route('refer_and_earn') }}">Refer & Earn</a></li>
						<li><a href="{{ route('career') }}">Career</a></li>
					</ul>
				</li>
				
			</ul>	
		</nav>
	</div>
</div>
<!--========= End Mobile Memu========== -->



<!--==================================================-->
<!-- Start Search Popup -->
<!--==================================================-->
<div class="search-popup">
    <button class="close-search style-two"><i class="fas fa-times"></i></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="GET" action="#">
        <div class="form-group position-relative">
            <input id="search1" type="search" name="search-field" placeholder="Search courses..." autocomplete="off">
            <button type="submit"><i class="fas fa-search"></i></button>

            <!-- Result dropdown -->
        </div>
		<div id="search-results" class="bg-white border rounded shadow p-2 position-absolute w-100" style="z-index: 999; display: none;"></div>

    </form>
</div>

<script>
$(document).ready(function() {
    $('#search1').on('input', function() {
        let query = $(this).val();
        if (query.length > 1) {
            $.ajax({
                url: "{{ route('search.courses') }}",
                type: "GET",
                data: { query: query },
                success: function(data) {
                    let results = $('#search-results');
                    results.empty().show();

                    if (data.length > 0) {
                        data.forEach(course => {
                            results.append(`
                                <a href="/upcoming-courses/${course.slug}" class="d-flex align-items-center mb-2 text-dark text-decoration-none">
                                    <img src="/storage/${course.image}" class="me-2" width="50" height="50" style="object-fit: cover; border-radius: 6px;">
                                    <div>
                                        <div><strong>${course.name}</strong></div>
                                        <small class="text-muted">${course.tag_line}</small>
                                    </div>
                                </a>
                            `);
                        });
                    } else {
                        results.append('<p class="text-muted">No courses found.</p>');
                    }
                }
            });
        } else {
            $('#search-results').hide().empty();
        }
    });

    // Hide when clicked outside
    $(document).click(function(e) {
        if (!$(e.target).closest('.form-group').length) {
            $('#search-results').hide().empty();
        }
    });
});
</script>

<!--==================================================-->
<!-- End Search Popup -->
<!--==================================================-->





<!--==================================================-->
<!-- Start Cart Side Bar -->
<!--==================================================-->
<div class="sidebar-menu-wrapper">
	<div class="cart_sidebar">
		<button type="button" class="close_btn"><i class="fas fa-times"></i></button>
		<h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

		<div class="cart_items_list">
			<div class="cart_item">
				<div class="item_image">
					<img src="{{ asset('assets/images/inner-img/rpost-thumb1.webp') }}" alt="image_not_found">
				</div>
				<div class="item_content">
					<h4 class="item_title">	
					How Gamification is Changing the Way...
					</h4>
					<span class="item_price">$21.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="{{ asset('assets/images/inner-img/rpost-thumb2.webp') }}" alt="image_not_found">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Learning is the Key soft skills and Professional
					</h4>
					<span class="item_price">$23.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="{{ asset('assets/images/inner-img/rpost-thumb3.webp') }}" alt="image_not_found">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						The Importance of Critical Thinking in Education
					</h4>
					<span class="item_price">$25.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="{{ asset('assets/images/inner-img/rpost-thumb2.webp') }}" alt="image_not_found">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Learning is the Key soft skills and Professional
					</h4>
					<span class="item_price">$19.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>
		</div>
		<div class="total_price text-uppercase">
			<span>Sub Total:</span>
			<span>$88.00</span>
		</div>
		<ul class="btns_group ul_li">
			<li><a href="cart.html" class="btn btn_primary text-uppercase">View Cart</a></li>
			<li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
		</ul>
	</div>
	<div class="cart_sidebar_overlay"></div>
</div>
<!--==================================================-->
<!-- End Cart Side Bar -->
<!--==================================================-->

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
	<div class="xs-overlay xs-bg-black"></div>
	<div class="xs-sidebar-widget">
		<div class="sidebar-widget-container">
			<div class="widget-heading">
				<a href="#" class="close-side-widget">
					<i class="far fa-times-circle"></i>
				</a>
			</div>
			<div class="sidebar-textwidget">
				<!-- Sidebar Info Content -->
				<div class="sidebar-info-contents">
					<div class="content-inner">
						<div class="nav-logo">
							<a href="/"><img src="{{ asset('assets/images/home-one/footer-logo.webp') }}" alt="logo"></a>
						</div>
						<div class="content-box">
							<h2>About Us</h2>
							<p class="text">The argument in favor of using filler text goes something like this: If
								you use real content in the Consulting Process, anytime you reach a review point
								you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<a href="index-7.html" class="theme-btn btn-style-two"><span>Consultation</span> <i class="fas fa-heart"></i></a>
						</div>
						<div class="contact-info">
							<h2>Contact Info</h2>
							<ul class="list-style-one">
								<li><span class="icon flaticon-email"></span>C-108, Second Floor, Block C, Sector 02, Noida, Uttar Pradesh 201301</li>
								<li><span> <i class="bi bi-telephone-inbound"></i> </span>01203133869</li>
								<li><span><i class="bi bi-geo-alt"></i></span>info@digicrome.com</li>
								<li><span><i class="bi bi-clock"></i></span>Week Days: 10.30 to 19.00 Sunday: Closed
								</li>
							</ul>
						</div>
						<!-- Social Box -->
						<ul class="social-box">
							<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
							<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
							<li class="linkedin"><a href="#" class="fa-brands fa-x-twitter"></a></li>
							<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
							<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
    .bottom-fixed-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f8f9fa;
        padding: 10px 0;
        z-index: 9999;
        box-shadow: 0 -1px 5px rgba(0,0,0,0.1);
        font-size: 14px;
    }
    .bottom-fixed-bar .btn {
        margin: 0 8px;
        font-size: 13px;
        padding: 6px 12px;
        display: inline-flex;
        align-items: center;
        font-weight: 500;
        border-radius: 20px;
    }
    .btn-whatsapp {
        background-color: #25D366;
        color: white;
    }
    .btn-whatsapp:hover {
        background-color: #1ebe5d;
        color: white;
    }
    .btn-callback {
        background-color: #343a40;
        color: white;
    }
    .btn-callback:hover {
        background-color: #23272b;
        color: white;
    }
    .bottom-fixed-bar i {
        margin-right: 6px;
    }
</style>

<div class="bottom-fixed-bar text-center">
    <span class="me-2">Need help? Reach us instantly:</span>
    <a href="https://wa.me/916299611702" target="_blank" class="btn btn-whatsapp">
        <i class="fab fa-whatsapp"></i> Say Hi on WhatsApp
    </a>
    <a href="tel:01203133869" class="btn btn-callback">
		<i class="fas fa-phone-alt"></i> Request a Callback
	</a>	
</div>


<!--End Sidebar Cart Item -->