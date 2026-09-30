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
                {{-- Lead form styled after the Coding Ninjas hero form; sends to the CRM via website.lead.
                     On Corporate Services it asks for the company instead of experience/qualification. --}}
                @php($isCorporateFooter = request()->routeIs('corporate_services'))
                <div class="contact-form-box style_six cnf">
                    <form id="professionalForm" method="post" action="{{ route('website.lead') }}">
                        @csrf
                        @error('lead')
                            <p class="cnf-error">{{ $message }}</p>
                        @enderror
                        @if ($isCorporateFooter)
                            <input type="hidden" name="profession" value="Corporate">
                        @else
                        <div class="cnf-field" role="radiogroup" aria-labelledby="cnf-exp-label">
                            <span class="cnf-label" id="cnf-exp-label">Experience</span>
                            <div class="cnf-radios">
                                @foreach ([
                                    'Working Professional - Technincal Roles' => 'Working Professional - Technical Roles',
                                    'Working Professional - Non Technincal' => 'Working Professional - Non Technical',
                                    'College Student - Final Year' => 'College Student - Final Year',
                                    'College Student - 1st to pre-final Year' => 'College Student - 1st to Pre-final Year',
                                    'Other' => 'Other',
                                ] as $value => $label)
                                    <label class="cnf-radio">
                                        <input type="radio" name="profession" value="{{ $value }}" required>
                                        <span class="cnf-radio__circle"></span>
                                        <span>{{ $label }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="cnf-grid">
                            <div class="cnf-field">
                                <label class="cnf-label" for="cnf-name">Name</label>
                                <input class="cnf-input" id="cnf-name" type="text" name="name"
                                    placeholder="Enter name" required>
                            </div>
                            <div class="cnf-field">
                                <label class="cnf-label" for="cnf-mobile">Phone Number</label>
                                <input class="cnf-input" id="cnf-mobile" type="tel" name="mobile"
                                    placeholder="Enter phone number" required>
                            </div>
                            <div class="cnf-field">
                                <label class="cnf-label" for="cnf-email">Email</label>
                                <input class="cnf-input" id="cnf-email" type="email" name="email"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="cnf-field">
                                <label class="cnf-label" for="cnf-city">City</label>
                                <input class="cnf-input" id="cnf-city" type="text" name="address"
                                    placeholder="Enter city">
                            </div>
                            @if ($isCorporateFooter)
                                <div class="cnf-field cnf-field--full">
                                    <label class="cnf-label" for="cnf-company">Company Name</label>
                                    <input class="cnf-input" id="cnf-company" type="text" name="comp_name"
                                        placeholder="Enter company name" required>
                                </div>
                            @else
                                <div class="cnf-field cnf-field--full">
                                    <label class="cnf-label" for="cnf-title">Qualification</label>
                                    <input class="cnf-input" id="cnf-title" type="text" name="title"
                                        placeholder="Enter qualification">
                                </div>
                            @endif
                        </div>

                        <input type="hidden" name="ib" value="">
                        <input type="hidden" name="source"
                            value="{{ $isCorporateFooter ? 'Corporate Services (Footer)' : 'Website' }}">
                        <input type="hidden" name="country" value="india">
                        @unless ($isCorporateFooter)
                            <input type="hidden" name="comp_name" value="">
                        @endunless
                        <input type="hidden" name="state" value="">
                        <input type="hidden" name="altr_mobile" value="">

                        <button type="submit" class="cnf-submit">Submit</button>

                        <p class="cnf-terms">
                            By submitting the form, you agree to our
                            <a href="#">Terms</a> and
                            <a href="https://digicrome.com/privacy-policy">Privacy Policy</a>.
                        </p>
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
                            <p><img loading="lazy"src="{{ asset('assets/images/home-one/footer-call.webp') }}"
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
                        <h4>Explore More</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('about') }}">About Us</a></li>
                            <li><img loading="lazy"src="{{ asset('assets/images/home-one/footer-icon.webp') }}"
                                    alt="icon"><a href="{{ route('course') }}">All
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
            <div class="col-xl-4 col-lg-2 col-md-6">
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
            {{-- <div class="col-xl-3 col-lg-4 col-md-6">
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
            </div> --}}
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <style>
        /* ===== Footer lead form — Coding Ninjas hero-form look ===== */
        .cnf,
        .cnf * {
            font-family: "Mulish", Arial, sans-serif;
        }

        .cnf form {
            width: 100%;
            margin: 0;
        }

        .cnf .cnf-field {
            display: flex;
            flex-direction: column;
            gap: 8px;
            min-width: 0;
            margin: 0 0 20px;
            padding: 0;
            border: 0;
        }

        .cnf .cnf-error {
            margin: 0 0 16px;
            padding: 10px 14px;
            border: 1px solid rgba(255, 99, 71, .5);
            border-radius: 8px;
            background: rgba(255, 99, 71, .1);
            color: #ff8a73;
            font-size: 13px;
        }

        .cnf .cnf-label {
            display: block;
            float: none;
            width: auto;
            margin: 0;
            padding: 0;
            color: #fafafa;
            font-size: 13px;
            font-weight: 700;
            line-height: 18px;
        }

        .cnf .cnf-radios {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 8px;
        }

        .cnf .cnf-radio {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            cursor: pointer;
        }

        .cnf .cnf-radio input {
            position: absolute;
            opacity: 0;
            width: 1px;
            height: 1px;
            pointer-events: none;
        }

        .cnf .cnf-radio__circle {
            position: relative;
            flex: 0 0 20px;
            width: 20px;
            height: 20px;
            border: 2px solid #838485;
            border-radius: 50%;
            transition: border-color .15s ease;
        }

        .cnf .cnf-radio__circle::after {
            content: "";
            position: absolute;
            inset: 3px;
            border-radius: 50%;
            background: #fff;
            transform: scale(0);
            transition: transform .15s ease;
        }

        .cnf .cnf-radio input:checked+.cnf-radio__circle {
            border-color: #fff;
        }

        .cnf .cnf-radio input:checked+.cnf-radio__circle::after {
            transform: scale(1);
        }

        .cnf .cnf-radio input:focus-visible+.cnf-radio__circle {
            box-shadow: 0 0 0 4px rgba(255, 255, 255, .15);
        }

        .cnf .cnf-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 16px;
        }

        .cnf .cnf-field--full {
            grid-column: 1 / -1;
        }

        .cnf .cnf-input {
            width: 100%;
            height: 40px;
            margin: 0;
            padding: 0 16px;
            border: 1px solid #838485;
            border-radius: 8px;
            background: #1f1f1f;
            color: #fafafa;
            font-size: 14px;
            box-shadow: none;
            outline: none;
            transition: border-color .15s ease;
        }

        .cnf .cnf-input::placeholder {
            color: #838485;
            opacity: 1;
        }

        .cnf .cnf-input:hover {
            border-color: #bdbdbd;
        }

        .cnf .cnf-input:focus {
            border-color: #fafafa;
        }

        .cnf .cnf-submit {
            display: block;
            width: 100%;
            height: 48px;
            margin: 4px 0 0;
            padding: 12px 24px;
            border: 0;
            border-radius: 8px;
            background: #f66c3b;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color .15s ease;
        }

        .cnf .cnf-submit:hover {
            background: #e85a28;
        }

        .cnf .cnf-terms {
            margin: 12px 0 0;
            color: #969696;
            font-size: 12px;
            line-height: 18px;
        }

        .cnf .cnf-terms a {
            color: #fafafa;
            text-decoration: underline;
        }

        @media (max-width: 575.98px) {
            .cnf .cnf-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Plain black footer */
        .footer-area {
            background: #000 !important;
        }

        .footer-course-links {
            margin-bottom: 12px !important;
        }

        .footer-course-links h5 {
            font-size: 15px !important;
            line-height: 1.4 !important;
            margin-bottom: 6px;
        }

        .footer-course-links p,
        .footer-course-links p a {
            font-size: 12.5px !important;
            line-height: 1.7;
        }

        .footer-course-links p a {
            text-decoration: underline !important;
            text-underline-offset: 3px;
            text-decoration-color: rgba(255, 255, 255, .45);
        }

        .footer-course-links p a:hover {
            text-decoration-color: #fff;
        }

        .footer-course-links p {
            margin-bottom: 10px;
        }

        .footer-course-links hr {
            margin: 0;
        }

        .footer-widget-menu ul li {
            display: flex;
            align-items: center;
        }

        .footer-widget-menu ul li img {
            display: inline-block !important;
            flex-shrink: 0;
            width: 14px;
            height: 14px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 footer-course-links">
                <h5 style="color: #ccc">Data Science And AI</h5>
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
            <div class="col-12 mb-4 footer-course-links">
                <h5 style="color: #ccc">Artificial Intelligence Training Course</h5>
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

    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 footer-course-links">
                <h5 style="color: #ccc">Machine Learning Training Course</h5>
                <p>
                    <a href="{{ url('/') }}/courses/machine-learning-course-in-noida" style="color: #fff">Machine Learning Training Course in Noida</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-training-course-in-delhi" style="color: #fff">Machine Learning Training Course in Delhi</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-training-in-pune" style="color: #fff">Machine Learning Training Course in Pune</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-certification-course-in-hyderabad" style="color: #fff">Machine Learning Training Course in Hyderabad</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-course-in-bangalore" style="color: #fff">Machine Learning Training Course in Bangalore</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-course-in-gurgaon" style="color: #fff">Machine Learning Training Course in Gurgaon</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-certification-course-in-mumbai" style="color: #fff">Machine Learning Training Course in Mumbai</a> |
                    <a href="{{ url('/') }}/courses/ml-training-course-in-kolkata" style="color: #fff">Machine Learning Training Course in Kolkata</a> |
                    <a href="{{ url('/') }}/courses/machine-learning-training-in-jaipur" style="color: #fff">Machine Learning Training Course in Jaipur</a> |
                    <a href="{{ url('/') }}/courses/ml-training-course-in-chennai" style="color: #fff">Machine Learning Training Course in Chennai</a>
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
    {{-- Pages can add content under the copyright bar (Home Page 2 adds its wordmark);
         every other page gets the shining DIGICROME wordmark. --}}
    @if (trim($__env->yieldPushContent('footer_bottom')) !== '')
        @stack('footer_bottom')
    @else
        <x-footer-shine />
    @endif
</div>

<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}" defer></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
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
<script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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
        $(document).click(function(e) {
            if (!$(e.target).closest('.form-group').length) {
                $('#search-results').hide().empty();
            }
        });
    });
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });
    } else {
        document.body.classList.add('loaded');
    }
</script>
