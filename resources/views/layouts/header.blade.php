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
{{-- <div class="sticky-top" style="z-index:1050;">
    <div class="position-relative w-100 d-flex align-items-center justify-content-between overflow-hidden cursor-pointer new-holi-offer"
        style="background:#FFEDFA; height:55px;cursor:pointer;">
        <div class="d-none d-md-flex position-relative">
            <img src="{{ asset('assets/images/splash.webp') }}"
                class="position-relative"
                style="width:311px; height:272px; top:-95px; left:-60px;" alt="bg">
            <img src="{{ asset('assets/images/splash.webp') }}"
                class="position-relative"
                style="width:311px; height:272px; top:90px; left:-220px;" alt="bg">
        </div>
        <div class="mx-auto text-center px-3">
            <p class="fw-semibold d-none d-md-block mb-0 text-nowrap"
                style="font-size:18px;
                       background: linear-gradient(90deg,#FC4517 0%,#BA22D9 34%,#EF4080 100%);
                       -webkit-background-clip:text;
                       -webkit-text-fill-color:transparent;">
                Flat 40% Discount on all Programs. Grab Now!
            </p>
            <p class="fw-semibold d-md-none mb-0 text-nowrap"
                style="background: linear-gradient(90deg,#FC4517 0%,#BA22D9 34%,#EF4080 100%);
                       -webkit-background-clip:text;
                       -webkit-text-fill-color:transparent;">
                40% OFF on All Programs. Grab Now!
            </p>
        </div>
        <div class="d-none d-md-flex position-relative">
            <img src="{{ asset('assets/images/splash.webp') }}"
                class="position-relative"
                style="width:311px; height:272px; top:100px; right:90px; transform:rotate(-210deg) scaleX(-1);"
                alt="bg">
            <img src="{{ asset('assets/images/splash.webp') }}"
                class="position-relative"
                style="width:311px; height:272px; top:-70px; right:20px; transform:rotate(-40deg) scaleX(-1);"
                alt="bg">
        </div>
    </div>
</div> --}}
<div class="educate-header-area" id="sticky-header">
    <div class="container-fluid">
        <div class="row header-wrap align-items-center">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a class="active_logo" href="/"><img loading="lazy"
                            src="{{ asset('assets/images/logo.webp') }}" width="150" height="50"
                            alt="logo"></a>
                    <a class="logo_two" href="/"><img class="footer-logo11" loading="lazy"
                            src="{{ asset('assets/images/logonew.webp') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header-menu">
                    <ul class="nav_scroll">
                    <li class="menu-item-has-children">
                        <a href="#"
                            style="background:#1c1647; border:2px solid #fff; border-radius:8px; padding:3px 7px; color:#fff; display:flex; align-items:center; gap:5px;">
                            <i class="bi bi-journal-bookmark-fill text-light"></i>
                            Courses
                            <i class="bi bi-chevron-down text-light"></i>
                        </a>

                    <!-- 🔥 ONLY THIS submenu is mega-menu -->
                    <ul class="sub_menu mega-menu">
                        <li>
                            <div class="mega-wrapper">

                                <div class="mega-left">
                                    <h6>Popular Categories</h6>
                                    <ul>
                                        <li>
                                            <a href="{{ route('course.category', 'data-science-course') }}"
                                                class="text-dark d-flex justify-content-between align-items-center">
                                                Data Science & AI <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('course_details', 'ai-security-online-training') }}" class="text-dark d-flex justify-content-between align-items-center">
                                                Cyber Security: Security of AI
                                                <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="http://digicromeuniversity.com" class="text-dark d-flex justify-content-between align-items-center">
                                                UG/PG Courses <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>

                                        @foreach ($header_collections->whereNotIn('id', [5, 6]) as $collection)
                                            <li>
                                                <a href="{{ route('course.category', $collection->slug) }}" class="text-dark d-flex justify-content-between align-items-center">
                                                    {{ $collection->name }}
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mega-right">
                                    <h6>Top Courses</h6>

                                    <div class="course-list">
                                        @foreach ([1,3,85,55] as $id)
                                            @if (isset($header_courses[$id]))
                                                @php $course = $header_courses[$id]; @endphp

                                                <a href="{{ route('course_details', $course->slug) }}" class="course-item">

                                                    <img src="{{ asset('storage/'.$course->image) }}" alt="">

                                                    <div class="course-info">
                                                        <h6>{{ $course->name }}</h6>
                                                        <p>{{ $course->course_duration ?? 'N/A' }}</p>
                                                    </div>

                                                </a>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>

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
                <img class="footer-logo11" loading="lazy" src="{{ asset('assets/images/logonew.webp') }}"
                    alt="logo">
            </div>
            <ul class="nav_scroll">
                <li><a href="/">Home</a>

                </li>
                <li><a href="{{ route('about') }}">about</a></li>

                <li><a href="#">courses<i class="bi bi-chevron-down"></i></a>
                    <ul class="sub_menu">

                        <li>
                            <a href="{{ route('course.category', 'data-science-course') }}">
                                Data Science with Artificial Intelligence
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course_details', 'ai-security-online-training') }}">
                                Cyber Security: Security of AI
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course.category', 'investment-banking-course') }}">
                                Investment Banking
                            </a>
                        </li>
                        @foreach ($header_collections->whereNotIn('id', [5, 6]) as $collection)
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
            <input id="search1" type="search" name="search-field" placeholder="Search courses..."
                autocomplete="off">

        </div>
        <div id="search-results" class="bg-white border rounded shadow p-2 position-absolute w-100"
            style="z-index: 999; display: none;"></div>

    </form>
</div>


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
                            <a href="/"><img loading="lazy" src="{{ asset('assets/images/logonew.webp') }}"
                                    alt="logo"></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">The argument in favor of using filler text goes something like this: If
                                you use real content in the Consulting Process, anytime you reach a review point
                                you’ll end up reviewing and negotiating the content itself and not the design.</p>
                            <a href="#" class="theme-btn btn-style-two"><span>Consultation</span> <i
                                    class="fas fa-heart"></i></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><span class="icon flaticon-email"></span>B-49, First Floor, Block B, Sector 59,
                                    Noida, Uttar Pradesh 201301</li>
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
