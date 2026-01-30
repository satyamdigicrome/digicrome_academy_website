<div class="footer-area" style="margin-bottom: 45px;">
    <div class="container">
        <div class="row subscribe align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="footer-logo">
                    <a href="#"><img loading="lazy"src="{{ asset('assets/images/home-one/footer-logo.webp') }}"
                            alt="logo"></a>
                </div>
                <br>
                <div class="section_title six">
                    <h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;">
                        Let’s Connect and</h2>
                    <h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;">
                        Grow Your Future Together!</h2>
                </div>
                <div class="section-title-desc">
                    <p style="color: #ddd">Have questions, ideas, or need guidance? Our team is here to support your
                        journey — reach out and let’s build something impactful together.</p>
                </div>

            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-box style_six">
                    <form id="professionalForm" method="post" action="https://demo.digicrome.com/post_lead.php"
                        style="width:100%; margin:0;">
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
                        </div>

                        <input type="hidden" name="ib" value="">
                        <input type="hidden" name="source" value="Website">
                        <input type="hidden" name="country" value="india">
                        <input type="hidden" name="comp_name" value="">
                        <input type="hidden" name="state" value="">
                        <input type="hidden" name="altr_mobile" value="">

                        <p style="font-size:12px; line-height:18px; color:#fff;">
                            By submitting the form, you agree to our
                            <a href="#" style="color:#f29c12;">Terms</a> and
                            <a href="https://digicrome.com/privacy-policy" style="color:#f29c12;">Privacy Policy</a>.
                        </p>

                        <button type="submit"
                            style="width:100%; padding:10px; background:#f29c12; color:white; border:none; border-radius:5px; font-weight:bold; margin-top:10px;">
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
                        <p>Master yourself as per the ever-increasing demand of professional in Data science and AI
                            firms. Start your journey towards 80% salary hike, TODAY!</p>
                    </div>
                    <div class="footer-contact-info">
                        <div class="footer-contact-phone">
                            <p><img loading="lazy"src="{{ asset('assets/images/home-one/footer-call.webp') }}"
                                    alt="call">01204538104</p>
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
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('about') }}">About Us</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a
                                    href="{{ url('/') }}/our-courses/postgraduate-and-master-programs">All
                                    Courses</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('corporate_services') }}">Corporate Services</a>
                            </li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('blog') }}">Blog</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('payments') }}">Payments</a></li>
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
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('who_we_are') }}">Who we are</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('success_stories') }}">Success stories</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('terms-and-conditions') }}">Terms And
                                    Conditions</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('privacy-policy') }}">Privacy-Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget-title">
                    <h4>Our Application</h4>
                </div>

                <div class="footer-widget-blog">
                    <div class="footer-widget-blog-thumb">
                        <a href="https://apps.apple.com/in/app/digicrome-academy/id6503241441">
                            <img loading="lazy"src="{{ asset('assets/images/apple.png') }}" alt="recent-img"
                                class="ap-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h5 style="color: #ccc"><u>Data Science And AI</u></h5>
                <p>
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-noida" style="color: #fff">
                        Data Science Training Course in Noida</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-gurgaon"
                        style="color: #fff">
                        Data Science Training Course in Gurgaon</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-mumbai" style="color: #fff">
                        Data Science Training Course in Mumbai</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-kolkata"
                        style="color: #fff">
                        Data Science Training Course in Kolkata</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-pune" style="color: #fff">
                        Data Science Training Course in Pune</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-jaipur" style="color: #fff">
                        Data Science Training Course in Jaipur</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-delhi" style="color: #fff">
                        Data Science Training Course in Delhi</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-chennai"
                        style="color: #fff">
                        Data Science Training Course in Chennai</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-hyderabad"
                        style="color: #fff">
                        Data Science Training Course in Hyderabad</a> |
                    <a href="{{ url('/') }}/courses/data-science-training-course-in-bangalore"
                        style="color: #fff">
                        Data Science Training Course in Bangalore</a>
                </p>

                <hr>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h5 style="color: #ccc"><u>Artificial Intelligence Training Course</u></h5>
                <p>
                    <a href="{{ url('/') }}/courses/ai-training-course-in-noida" style="color: #fff">Artificial
                        Intelligence Training Course in Noida</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-delhi" style="color: #fff">Artificial
                        Intelligence Training Course in Delhi</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-pune" style="color: #fff">Artificial
                        Intelligence Training Course in Pune</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-hyderabad"
                        style="color: #fff">Artificial Intelligence Training Course in Hyderabad</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-bangalore"
                        style="color: #fff">Artificial Intelligence Training Course in Bangalore</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-gurgaon"
                        style="color: #fff">Artificial Intelligence Training Course in Gurgaon</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-mumbai" style="color: #fff">Artificial
                        Intelligence Training Course in Mumbai</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-kolkata"
                        style="color: #fff">Artificial Intelligence Training Course in Kolkata</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-jaipur" style="color: #fff">Artificial
                        Intelligence Training Course in Jaipur</a> |
                    <a href="{{ url('/') }}/courses/ai-training-course-in-chennai"
                        style="color: #fff">Artificial Intelligence Training Course in Chennai</a>
                </p>
                <hr>
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
                            <li><a href="https://www.facebook.com/digcrome.academy/"><i
                                        class="fab fa-facebook-f"></i></a></li>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" media="print"
    onload="this.media='all'">
<script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
