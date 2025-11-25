<style>
	.footer-logo11 {
    width: 59%;          
}

@media (max-width: 768px) {
    .footer-logo11 {
		width: 35%;          
    }
}

	</style>

<div class="header-top-area">
	<div class="container-fluid">
		<div class="row header-top">
			<div class="col-xxl-6 col-xl-8 col-lg-8">
				<div class="header-top-welcome" style="font-size: 12px;">
					@include('components.breadcrumb')

				</div>
			</div>
			<div class="col-xxl-6 col-xl-4 col-lg-4">
				<div class="header-top-right">
					<div class="text-white text-right">
						Welcome to Digicrome - 01204538125
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="educate-header-area" id="sticky-header">
	<div class="container-fluid">
		<div class="row header-wrap align-items-center">
			<div class="col-lg-2">
				<div class="header-logo">
					<a class="active_logo" href="/"><img loading="lazy" src="{{ asset('assets/images/logo.webp') }}" alt="logo"></a>
					<a class="logo_two" href="/"><img class="footer-logo11" loading="lazy" src="{{ asset('assets/images/footer-logo.webp') }}" alt="logo"></a>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="header-menu">
					<ul class="nav_scroll">
						<li>
							<a href="#" style=" background-color: #1c1647; border: 2px solid #fff; border-radius: 8px; padding: 3px 7px; color: #fff; display: flex; align-items: center; gap: 5px;">
								<i style="color: #fff" class="bi bi-journal-bookmark-fill"></i> <!-- Icon before text -->
								Courses
								<i style="color: #fff" class="bi bi-chevron-down"></i>
							</a>
							<ul class="sub_menu" style="list-style: none; padding: 0; margin: 0;">
								<li style="padding: 0;">
									<div class="container-fluid px-3 py-3" style="min-width: 600px; max-width: 1000px;">
										<div class="row g-4">
											<div class="col-md-4 border-end">
												<h6 class="fw-bold mb-3 text-primary">Popular Categories</h6>
												<ul class="list-unstyled mb-0">
													<li class="mb-2">
														<a href="javascript:void(0);" class="text-dark d-flex justify-content-between align-items-center category-link" data-ids="1,3,55">
															Data Science & AI
															<i class="bi bi-chevron-right"></i>
														</a>
													</li>
													<li class="mb-2">
														<a href="http://digicromeuniversity.com" class="text-dark d-flex justify-content-between align-items-center category-link" data-ids="61">
															UG/PG Courses
															<i class="bi bi-chevron-right"></i>
														</a>
													</li>
													<li class="mb-2">
														<a href="https://www.digicrome.com/courses/investment-banking-certification-course" class="text-dark d-flex justify-content-between align-items-center category-link" data-ids="61">
															Investment Banking
															<i class="bi bi-chevron-right"></i>
														</a>
													</li>

													@foreach($header_collections as $collection)
													<li class="mb-2">
														<a href="{{ route('course.category', $collection->slug) }}" class="text-dark d-flex justify-content-between align-items-center">
															{{ $collection->name }}
															<i class="bi bi-chevron-right"></i>
														</a>
													</li>
													@endforeach
												</ul>
											</div>

											<div class="col-md-8">
												<h6 class="fw-bold mb-3 text-primary">Top Courses</h6>
												<div id="course-container" class="d-flex flex-column gap-2" style="max-height: 460px; overflow-y: auto;">
													@foreach([1, 3, 55] as $id)
													@if(isset($header_courses[$id]))
													@php $course = $header_courses[$id]; @endphp
													<div class="card border-0 shadow-sm rounded-3 p-2">
														<div class="d-flex align-items-center">
															<a href="{{ route('course_details', ['slug' => $course->slug]) }}">
																<img loading="lazy" src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" class="rounded" style="width: 80px; height: 60px; object-fit: cover;">
																<div class="ms-3 flex-grow-1">
																	<h6 class="fw-semibold" style="line-height: 24px;">{{ $course->name }}</h6>
																	<p class="text-muted small">Duration: {{ $course->course_duration ?? 'N/A' }}</p>
															</a>

														</div>
													</div>
												</div>
												@endif
												@endforeach
											</div>
										</div>
									</div>
									<script>
										$(document).ready(function() {
											let allheader_courses = @json($header_courses);

											$('.category-link').on('click', function() {
												let ids = $(this).data('ids').toString().split(',');
												let container = $('#course-container');
												container.empty();

												ids.forEach(function(id) {
													let course = allheader_courses[id];
													if (course) {
														container.append(`
																<div class="card border-0 shadow-sm rounded-3 p-2 mb-2">
																	<div class="d-flex align-items-center">
																	<a href="/courses/${course.slug}">
																		<img loading="lazy"src="/storage/${course.image}" alt="${course.name}" class="rounded" style="width: 80px; height: 60px; object-fit: cover;">
																		<div class="ms-3 flex-grow-1">
																			<h6 class="fw-semibold" style="line-height: 24px;">${course.name}</h6></a>
																			<p class="text-muted small">Duration: ${course.course_duration ?? 'N/A'}</p></a>
																			
																		</div>
																	</div>
																</div>
															`);
													}
												});
											});
										});
									</script>



				</div>
				</li>
				</ul>

				</li>

				<li><a href="/">Home</a>
				</li>
				<li><a href="{{ route('about') }}">About</a></li>
				
						<li><a href="{{ route('success_stories') }}">Success stories</a></li>
				<li><a href="{{ route('blog') }}">Blog </a>
				<li><a href="{{ route('payments') }}">Payments </a>
					
				</li>
				<li><a href="{{ route('contact') }}">Contact</a></li>
				<li><a href="#">More<i class="bi bi-chevron-down"></i></a>
					<ul class="sub_menu">
						<li><a href="{{ route('who_we_are') }}">Who we are</a></li>
				<li><a href="{{ route('corporate_services') }}">Corporate Services </a>
							<li><a href="{{ route('refer_and_earn') }}">Refer & Earn</a></li>
						<li><a href="{{ route('career') }}">Career</a></li>
						<li><a href="{{ route('media_presence') }}">Media Presence</a>
				</li>

				</ul>
				</li>
				<li>
					<div class="header-src-btn">
						<div class="search-box-btn search-box-outer"><i class="fa-solid fa-magnifying-glass"></i></div>
					</div>&nbsp;&nbsp;
				</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="header-right-wrapper">
				<div class="header-sidebar">
					<div class="header-btn">
						<a href="javascript:void(0);" 
   onclick="{{ Route::is('course_details') ? 'openModal(\'applyNowPopup\')' : 'openModal()' }}" 
   style="display: inline-block; 
          border: 2px solid #fff; 
          color: #fff; 
          background-color: #1c1647; 
          padding: 8px 20px; 
          font-size: 14px; 
          white-space: nowrap; 
          min-width: 120px; 
          text-align: center;">
    ENROLL NOW
</a>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
<style>
/* Hide mobile menu initially until page is fully loaded */
.mobile-menu-area {
    visibility: hidden;
    opacity: 0;
}

/* Once page is fully loaded, show the mobile menu */
body.loaded .mobile-menu-area {
    visibility: visible;
    opacity: 1;
    transition: visibility 0s, opacity 0.5s ease-in;
}

@media (max-width: 767px) {
    .desktop-only {
        display: none !important; /* Hide desktop header */
    }

    .mobile-only {
        display: block !important; /* Force show mobile header */
    }
}

/* Ensure the desktop version is visible only on larger screens */
@media (min-width: 768px) {
    .desktop-only {
        display: block !important; /* Force show desktop header */
    }

    .mobile-only {
        display: none !important; /* Hide mobile header */
    }
}
</style>
<script>
	// Add the 'loaded' class once the page is fully loaded
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
});
</script>

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
  <div class="container-fluid">
    <div class="row align-items-center py-1">

      <!-- Left side: Contact Number -->
      <div class="col-6 text-start">
        <span class="text-white fw-bold small">01204538104</span>
      </div>

      <!-- Right side: "Get Started" Button -->
      <div class="col-6 text-end">
        <a href="javascript:void(0);" 
   onclick="{{ Route::is('course_details') ? 'openModal(\'applyNowPopup\')' : 'openModal()' }}" 
   class="btn btn-sm fw-bold text-white" 
   style="background-color: #ff8c00; font-size: 12px; padding: 4px 10px; border-radius: 4px;">
   Enroll Now
</a>

      </div>

    </div>
  </div>

	<div class="mobile-menu">
		<nav class="header-menu">
			<div class="mobile-logo" style="z-index: -9;">
					<img class="footer-logo11" loading="lazy" src="{{ asset('assets/images/footer-logo.webp') }}" alt="logo">
			</div>
			<ul class="nav_scroll">
				<li><a href="/">Home</a>
					
				</li>
				<li><a href="{{ route('about') }}">about</a></li>
				
			<li><a href="#">courses<i class="bi bi-chevron-down"></i></a>
				<ul class="sub_menu">

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

					@foreach($header_collections as $collection)
					<li>
						<a href="{{ route('course.category', $collection->slug) }}">
							{{ $collection->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</li>
			
			<li><a href="{{ route('corporate_services') }}">Corporate Services </a>
			<li><a href="{{ route('blog') }}">Blog</a>
			<li><a href="{{ route('payments') }}">Payments </a>
			
			</li>
			<li><a href="{{ route('contact') }}">Contact</a></li>
			<li><a href="#">More<i class="bi bi-chevron-down"></i></a>
				<ul class="sub_menu">
					<li><a href="{{ route('who_we_are') }}">Who we are</a></li>
					<li><a href="{{ route('success_stories') }}">Success stories</a></li>
					<li><a href="{{ route('refer_and_earn') }}">Refer & Earn</a></li>
					<li><a href="{{ route('career') }}">Career</a></li>
					<li><a href="{{ route('media_presence') }}">Media Presence</a>
					</li>
	
				</ul>
			</li>

			</ul>
		</nav>
	</div>
</div>
<div class="search-popup">
	<button class="close-search style-two"><i style="color: #fff" class="fas fa-times"></i></button>
	<form method="GET" action="#">
		<div class="form-group position-relative">
			<input id="search1" type="search" name="search-field" placeholder="Search courses..." autocomplete="off">

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
					data: {
						query: query
					},
					success: function(data) {
						let results = $('#search-results');
						results.empty().show();

						if (data.length > 0) {
							data.forEach(course => {
								results.append(`
                                <a href="/courses/${course.slug}" class="d-flex align-items-center mb-2 text-dark text-decoration-none">
                                    <img loading="lazy"src="/storage/${course.image}" class="me-2" width="50" height="50" style="object-fit: cover; border-radius: 6px;">
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
				<div class="sidebar-info-contents">
					<div class="content-inner">
						<div class="nav-logo">
							<a href="/"><img loading="lazy" src="{{ asset('assets/images/home-one/footer-logo.webp') }}" alt="logo"></a>
						</div>
						<div class="content-box">
							<h2>About Us</h2>
							<p class="text">The argument in favor of using filler text goes something like this: If
								you use real content in the Consulting Process, anytime you reach a review point
								you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<a href="#" class="theme-btn btn-style-two"><span>Consultation</span> <i class="fas fa-heart"></i></a>
						</div>
						<div class="contact-info">
							<h2>Contact Info</h2>
							<ul class="list-style-one">
								<li><span class="icon flaticon-email"></span>B-49, First Floor, Block B, Sector 59, Noida, Uttar Pradesh 201301</li>
								<li><span> <i class="bi bi-telephone-inbound"></i> </span> 01204538125</li>
								<li><span><i class="bi bi-geo-alt"></i></span>info@digicrome.com</li>
								<li><span><i class="bi bi-clock"></i></span>Week Days: 10.30 to 19.00 Sunday: Closed
								</li>
							</ul>
						</div>
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
		box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
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

	.sub_menu {
		position: absolute;
		background: #fff;
		border-radius: 10px;
		border: 1px solid #ddd;
		z-index: 999;
		box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
		min-width: 650px;
		max-width: 1000px;
	}

	.sub_menu li a:hover {
		background-color: #f8f9fa;
		text-decoration: none;
	}

	.card:hover {
		transform: translateY(-2px);
		transition: all 0.2s ease-in-out;
	}

	.course-card:hover {
		background-color: #f9f9ff;
		transform: translateY(-2px);
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
	}

	.course-card h6,
	.course-card p,
	.course-card a {
		margin-bottom: 0;
	}
</style>

<div class="bottom-fixed-bar desktop-only text-center">
    <span class="me-2">Need help? Reach us instantly:</span>
    <a href="https://wa.me/916299611702" target="_blank" class="btn btn-whatsapp">
        <i class="fab fa-whatsapp"></i> Say Hi on WhatsApp
    </a>
    <a href="tel:+01204538104" class="btn btn-callback">
  <i class="fas fa-phone-alt"></i> Call to Response
</a>

</div>

<div class="mobile-contact-icons mobile-only">
    <a href="https://wa.me/916299611702" target="_blank" class="contact-icon whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="tel:01204538125" class="contact-icon call">
        <i class="fas fa-phone-alt"></i>
    </a>
</div>

<style>
    .bottom-fixed-bar {
        position: fixed;
        right: 20px;
        bottom: 0px;
        z-index: 1000;
        background: white;
        padding: 10px 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    .bottom-fixed-bar a {
        margin: 0 5px;
    }

    .mobile-only {
        display: none;
    }

    .desktop-only {
        display: block;
    }

    @media (max-width: 767px) {
        .desktop-only {
            display: none;
        }

        .mobile-only {
            display: block;
        }

        .mobile-contact-icons {
            position: fixed;
            left: 15px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .contact-icon.whatsapp {
            background-color: #25D366;
        }

        .contact-icon.call {
            background-color: #1a1447;
        }
    }
</style>
