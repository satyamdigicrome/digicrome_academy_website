<div class="footer-area" style="margin-bottom: 45px;">
    <div class="container">
        <div class="row subscribe align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="footer-logo">
                    <a href="#"><img loading="lazy" width="150" height="79"
                            src="{{ asset('assets/images/logonew.webp') }}" alt="logo"
                            class="footer-logo11" style="width:150px;height:auto;max-width:100%;"></a>
                </div>
                <br>
                <div class="section_title six">
                    <h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;">
                        Let’s Connect and 
                    {{-- </h2>
                    <h2 style="color: #fff; font-size: 36px; font-weight: bold; line-height: 1.2; margin-bottom: 20px;"> --}}
                        Grow Your Future Together!</h2>
                </div>
                <div class="section-title-desc">
                    <p style="color: #ddd">Have questions, ideas, or need guidance? Our team is here to support your
                        journey — reach out and let’s build something impactful together.</p>
                </div>

            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-box style_six">
                    <form id="professionalForm" method="post" action="https://demo.digicrome.in/post_lead.php"
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
            <div class="col-xl-4 col-lg-3 col-md-6">
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
                            <p><img width="24" height="20" loading="lazy" src="{{ asset('assets/images/home-one/footer-call.webp') }}"
                                    alt="call">01204538104</p>
                        </div>
                        <div class="footer-contact-address">
                            <span><i class="fa-classic fa-regular fa-envelope fa-fw"></i>info@digicrome.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6">
                <div class="footer-widget-content">
                    <div class="footer-widget-title">
                        <h4>Online Platform</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('about') }}">About Us</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('course') }}">All
                                    Courses</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('corporate_services') }}">Corporate Services</a>
                            </li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('blog') }}">Blog</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('payments') }}">Payments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-2 col-md-6">
                <div class="footer-widget-content">
                    <div class="footer-widget-title">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('who_we_are') }}">Who we are</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('success_stories') }}">Success stories</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('terms-and-conditions') }}">Terms And
                                    Conditions</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                            <li><img width="14" height="14" loading="lazy" src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('privacy-policy') }}">Privacy-Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget-title">
                    <h4>Our Application</h4>
                </div>

                <div class="footer-widget-blog">
                    <div class="footer-widget-blog-thumb">
                        <a href="https://apps.apple.com/in/app/digicrome-academy/id6503241441">
                            <img width="360" height="110" loading="lazy" src="{{ asset('assets/images/apple.png') }}" alt="recent-img"
                                class="ap-logo"></a>
                    </div>
                </div>
            </div> --}}
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
                        <p>Copyright 2020-2026 Digicrome Pvt Ltd. All Rights Reserved</p>
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
@php
    /*
     * The theme's script chain, in dependency order — jQuery first, then the
     * plugins that extend it, then theme.js which initialises them all.
     *
     * Every one of these is deferred. Deferred scripts still execute in document
     * order and always before DOMContentLoaded, so the chain holds and the inline
     * blocks further down (which wait for that event) find `$` and its plugins
     * already present.
     *
     * AssetBundle concatenates them into one hashed file, turning fifteen round
     * trips into one. If it cannot write the bundle — read-only deploy, missing
     * source — it returns null and we emit the individual tags, so a failure
     * costs request count, never correctness.
     */
    $themeScripts = [
        'assets/js/vendor/jquery-3.6.2.min.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/jquery.counterup.min.js',
        'assets/js/waypoints.min.js',
        'assets/js/wow.js',
        'assets/js/imagesloaded.pkgd.min.js',
        'assets/js/animated-text.js',
        'assets/js/isotope.pkgd.min.js',
        'assets/js/jquery.meanmenu.js',
        'assets/js/jquery.scrollUp.js',
        'assets/js/jquery.barfiller.js',
        'assets/js/theme.js',
        'assets/js/deferred-media.js',
    ];

    $themeBundle = \App\Support\AssetBundle::js($themeScripts);
@endphp
@foreach ($themeBundle ? [$themeBundle] : $themeScripts as $script)
    <script src="{{ asset($script) }}" defer></script>
@endforeach
<script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
                                        <img loading="lazy" src="/storage/${course.image}" alt="${course.name}" class="rounded" style="width: 80px; height: 60px; object-fit: cover;">
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
                                    <img loading="lazy" src="/storage/${course.image}" class="me-2" width="50" height="50" style="object-fit: cover; border-radius: 6px;">
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
        $(document).click(function(e) {
            if (!$(e.target).closest('.form-group').length) {
                $('#search-results').hide().empty();
            }
        });
    });
    // window.addEventListener('load', function() {
    //     document.body.classList.add('loaded');
    // });
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });
    } else {
        document.body.classList.add('loaded');
    }
</script>
