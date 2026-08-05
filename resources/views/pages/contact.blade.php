@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
    @include('components.lead-form-popup')

    <!--==================================================-->
    <!-- Start Hero / Banner (IMAGE ONLY) -->
    <!--==================================================-->
    <style>
        .contact-hero {
            position: relative;
            width: 100%;
            height: 568px;
            overflow: hidden;
            /* background: #0f1226; */
            background: linear-gradient(to right, #000b2a 50%, #010d4a 50%);
        }

        .contact-hero picture,
        .contact-hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        .contact-hero img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            /* background: #0f1226; */
        }

        .contact-hero {
            opacity: 0;
            transform: translateY(6px);
            animation: contactHeroIn 600ms ease-out forwards;
        }

        @keyframes contactHeroIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .contact-hero {
                height: 263px;
                margin-top: 95px;
            }
        }
    </style>

    <div class="contact-hero">
        <picture>
            {{-- width/height on the <source> so the reserved box matches the file the
             browser actually picks. Without them it sizes from the desktop <img>
             attributes and the hero jumps when the mobile image decodes. --}}
            <source srcset="{{ asset('assets/images/contactnewmob.webp') }}" media="(max-width: 768px)"
                width="1507" height="1044">
            <img width="1986" height="792" src="{{ asset('assets/images/contactnew.webp') }}" alt="Contact Digicrome" loading="eager">
        </picture>
    </div>
    <!--==================================================-->
    <!-- End Hero / Banner -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Modern Intro + Quick Actions -->
    <!--==================================================-->
    <style>
        .contact-modern-intro {
            padding: 56px 0 20px;
            background: linear-gradient(180deg, rgba(242, 156, 18, 0.10) 0%, rgba(255, 255, 255, 0) 55%);
        }

        .contact-modern-intro .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border-radius: 999px;
            background: rgba(242, 156, 18, 0.12);
            color: #1a1447;
            font-weight: 800;
            letter-spacing: 0.2px;
        }

        .contact-modern-intro h2 {
            color: #1a1447;
            font-weight: 900;
            font-size: clamp(22px, 2.4vw, 34px);
            line-height: 1.2;
        }

        .contact-modern-intro p {
            color: rgba(26, 20, 71, 0.78);
            line-height: 1.7;
            margin-bottom: 0;
        }

        .contact-feature {
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 16px 40px rgba(16, 24, 40, 0.08);
            padding: 18px;
            transition: transform 220ms ease, box-shadow 220ms ease;
            height: 100%;
        }

        .contact-feature:hover {
            transform: translateY(-4px);
            box-shadow: 0 22px 56px rgba(16, 24, 40, 0.12);
        }

        .contact-feature .icon {
            width: 44px;
            height: 44px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(242, 156, 18, 0.15);
            color: #f29c12;
            font-size: 18px;
        }

        .contact-modern-intro .btn-cta {
            border-radius: 14px;
            padding: 12px 18px;
            font-weight: 800;
            transition: transform 200ms ease, background 200ms ease;
        }

        .contact-modern-intro .btn-cta:hover {
            transform: translateY(-1px);
        }

        .contact-modern-intro .btn-primary-digi {
            background: #f29c12;
            border: 1px solid #f29c12;
            color: #fff;
        }

        .contact-modern-intro .btn-ghost-digi {
            background: transparent;
            border: 1px solid rgba(26, 20, 71, 0.18);
            color: #1a1447;
        }

        @media (max-width: 991px) {
            .contact-modern-intro {
                padding-top: 36px;
            }
        }
    </style>

    <section class="contact-modern-intro">
        <h1 class="p-3 text-center h1 text-dark fw-bolder">Contact Us</h1>
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <div class="h-100 p-2">
                        <div class="section-eyebrow">
                            <i class="fas fa-headset" style="color:#f29c12;"></i>
                            Contact Digicrome • Get fast support
                        </div>
                        <h2 class="mt-3">Talk to our team — admissions, accounts, and student help.</h2>
                        <p class="mt-3">
                            Whether you’re looking for course guidance or need quick help, our support desk is ready.
                            Choose an option below and we’ll route you instantly.
                        </p>

                        <div class="mt-4 d-flex flex-wrap gap-2">
                            <a href="javascript:void(0)" onclick="showContent('contact')"
                                class="btn btn-cta btn-primary-digi">
                                <i class="fas fa-phone"></i> Contact Options
                            </a>
                            <a href="#"
                                onclick="document.querySelector('.contact_area').scrollIntoView({behavior:'smooth'})"
                                class="btn btn-cta btn-ghost-digi">
                                <i class="fas fa-paper-plane"></i> Send a Request
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="contact-feature" style="animation: none;">
                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                <h4 class="mt-3 mb-1" style="color:#1a1447; font-weight:900; font-size:16px;">Call Us</h4>
                                <p style="font-size:13px;">01204538125</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-feature">
                                <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                <h4 class="mt-3 mb-1" style="color:#1a1447; font-weight:900; font-size:16px;">Email Support
                                </h4>
                                <p style="font-size:13px;">info@digicrome.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-feature">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <h4 class="mt-3 mb-1" style="color:#1a1447; font-weight:900; font-size:16px;">Our Location
                                </h4>
                                <p style="font-size:13px;">Noida • Uttar Pradesh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!--==================================================-->
    <!-- Start Modern Quick Routes (replaces old tab UI) -->
    <!--==================================================-->
    <style>
        .contact-route-wrap {
            padding: 34px 0 10px;
        }

        .contact-route-shell {
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(26, 20, 71, 0.04) 0%, rgba(242, 156, 18, 0.04) 100%);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 16px 50px rgba(16, 24, 40, 0.06);
            overflow: hidden;
        }

        .contact-route-header {
            padding: 18px 18px 0;
        }

        .contact-route-title {
            font-weight: 900;
            color: #1a1447;
            font-size: 22px;
            margin: 0;
        }

        .contact-route-sub {
            margin-top: 6px;
            color: rgba(26, 20, 71, 0.70);
            font-size: 14px;
            line-height: 1.6;
        }

        .contact-route-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            padding: 14px 18px 18px;
        }

        .contact-route-tab {
            flex: 1 1 190px;
            max-width: 230px;
            cursor: pointer;
            user-select: none;
            border-radius: 16px;
            border: 1px solid rgba(26, 20, 71, 0.12);
            background: rgba(255, 255, 255, 0.9);
            padding: 14px 14px;
            transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease, background 180ms ease;
            position: relative;
            overflow: hidden;
        }

        .contact-route-tab::after {
            content: '';
            position: absolute;
            inset: -1px;
            background: radial-gradient(420px 120px at 20% 0%, rgba(242, 156, 18, 0.18) 0%, rgba(242, 156, 18, 0) 60%);
            opacity: 0;
            transition: opacity 180ms ease;
            pointer-events: none;
        }

        .contact-route-tab:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 60px rgba(16, 24, 40, 0.10);
            border-color: rgba(242, 156, 18, 0.35);
        }

        .contact-route-tab.active {
            border-color: rgba(242, 156, 18, 0.75);
            background: rgba(242, 156, 18, 0.08);
        }

        .contact-route-tab.active::after {
            opacity: 1;
        }

        .contact-route-tab .row {
            margin: 0;
        }

        .contact-route-tab .r-icon {
            width: 44px;
            height: 44px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(242, 156, 18, 0.15);
            color: #f29c12;
            font-size: 18px;
        }

        .contact-route-tab .r-title {
            color: #1a1447;
            font-weight: 900;
            margin: 6px 0 0;
            font-size: 14px;
        }

        .contact-route-body {
            padding: 0 18px 18px;
        }

        #content {
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 10px 35px rgba(16, 24, 40, 0.06);
            padding: 18px;
            min-height: 180px;
            animation: contactRouteFade 220ms ease;
        }

        @keyframes contactRouteFade {
            from {
                opacity: 0;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-route-empty {
            color: rgba(26, 20, 71, 0.70);
            font-weight: 700;
            text-align: center;
            padding: 24px 0;
        }

        /* Make injected cards/images inside #content look good */
        #content .card {
            border-radius: 16px;
            border: 1px solid rgba(26, 20, 71, 0.10);
        }

        #content img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 991px) {
            .contact-route-tab {
                max-width: 100%;
                flex: 1 1 100%;
            }
        }
    </style>

    <!--==================================================-->
    <!-- Start Modern Quick Routes UI (better/advanced) -->
    <!--==================================================-->
    <style>
        .contact-route-outer {
            padding: 38px 0 10px;
        }

        .contact-route-shell {
            border-radius: 26px;
            background: linear-gradient(180deg, rgba(26, 20, 71, 0.04) 0%, rgba(242, 156, 18, 0.06) 100%);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 22px 70px rgba(16, 24, 40, 0.08);
            overflow: hidden;
        }

        .contact-route-top {
            padding: 22px 22px 0;
        }

        .contact-route-top h3 {
            font-size: 24px;
            font-weight: 950;
            color: #1a1447;
            margin: 0;
        }

        .contact-route-top p {
            margin: 8px 0 0;
            color: rgba(26, 20, 71, 0.72);
            font-weight: 600;
        }

        .contact-route-tabs {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 12px;
            padding: 18px 22px 22px;
        }

        @media (max-width: 991px) {
            .contact-route-tabs {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .contact-route-tab {
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(26, 20, 71, 0.12);
            padding: 14px 12px;
            cursor: pointer;
            transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease, background 180ms ease;
            box-shadow: 0 10px 28px rgba(16, 24, 40, 0.05);
            min-height: 96px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .contact-route-tab::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: radial-gradient(320px 120px at 15% 0%, rgba(242, 156, 18, 0.20) 0%, rgba(242, 156, 18, 0) 60%);
            opacity: 0;
            transition: opacity 200ms ease;
            pointer-events: none;
        }

        .contact-route-tab:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 55px rgba(16, 24, 40, 0.10);
            border-color: rgba(242, 156, 18, 0.40);
        }

        .contact-route-tab.active {
            border-color: rgba(242, 156, 18, 0.9);
            background: rgba(242, 156, 18, 0.08);
        }

        .contact-route-tab.active::before {
            opacity: 1;
        }

        .contact-route-tab .r-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-route-tab .r-icon {
            width: 44px;
            height: 44px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(242, 156, 18, 0.15);
            color: #f29c12;
            font-size: 18px;
        }

        .contact-route-tab .r-title {
            color: #1a1447;
            font-weight: 950;
            font-size: 13px;
            margin: 0;
            line-height: 1.2;
        }

        #content {
            margin: 0 22px 22px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.90);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 16px 55px rgba(16, 24, 40, 0.06);
            padding: 18px;
            min-height: 180px;
            animation: contentSwap 220ms ease;
        }

        @keyframes contentSwap {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-route-empty {
            color: rgba(26, 20, 71, 0.72);
            font-weight: 800;
            text-align: center;
            padding: 34px 0;
        }

        #content .card {
            border-radius: 16px;
            border: 1px solid rgba(26, 20, 71, 0.10);
        }

        #content img {
            max-width: 100%;
            height: auto;
        }
    </style>

    <section class="contact-route-outer">
        <div class="container">
            <div class="contact-route-shell">
                <div class="contact-route-top">
                    <h3>Quick Contact Routes</h3>
                    <p>Pick a route and we’ll show the right contact details in an advanced panel.</p>
                </div>

                <div class="contact-route-tabs" id="contactRouteTabs">
                    <div class="contact-route-tab active" onclick="selectRoute('contact','contact')">
                        <div class="r-row">
                            <div class="r-icon"><i class="fas fa-phone"></i></div>
                            <div class="r-title">Customer Contact No.</div>
                        </div>
                    </div>
                    <div class="contact-route-tab" onclick="selectRoute('locate','locate')">
                        <div class="r-row">
                            <div class="r-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="r-title">Locate Us</div>
                        </div>
                    </div>
                    <div class="contact-route-tab" onclick="selectRoute('whatsapp','whatsapp')">
                        <div class="r-row">
                            <div class="r-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="r-title">WhatsApp</div>
                        </div>
                    </div>
                    <div class="contact-route-tab" onclick="selectRoute('chatbot','chatbot')">
                        <div class="r-row">
                            <div class="r-icon"><i class="fas fa-comments"></i></div>
                            <div class="r-title">Chatbot</div>
                        </div>
                    </div>
                    <div class="contact-route-tab" onclick="selectRoute('callback','callback')">
                        <div class="r-row">
                            <div class="r-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="r-title">Get A Callback</div>
                        </div>
                    </div>
                </div>

                <div id="content">
                    <div class="contact-route-empty">Click an option to see details here</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function selectRoute(tabKey, type) {
            let tabs = document.querySelectorAll('#contactRouteTabs .contact-route-tab');
            tabs.forEach(t => t.classList.remove('active'));

            // activate by onclick keyword match
            const active = document.querySelector('#contactRouteTabs .contact-route-tab[onclick*="\'' + tabKey + '\'"]');
            if (active) active.classList.add('active');

            showContent(type);
        }

        function showContent(type) {
            let content = document.getElementById('content');
            if (type === 'callback') {
                content.innerHTML = `
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img width="2820" height="1844" loading="lazy" src="{{ asset('assets/images/cot1.png') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <br>
                            <h3>Want a callback? Enter your details.</h3>
                            <form id="frm123" method="post" action="{{ route('website.lead') }}">
                                <div class="mb-3">
                                    <input class="form-control" style="border-radius: 20px; padding: 12px;" placeholder="Enter your name" name="name" type="text">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" style="border-radius: 20px; padding: 12px;" placeholder="Enter your email" name="email" type="email">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" pattern="\d{10}" title="Please enter a 10-digit mobile number" style="border-radius: 20px; padding: 12px;" placeholder="Enter your mobile number" name="mobile" type="number">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" style="border-radius: 20px; padding: 12px;" name="title" placeholder="Enter your qualification" type="text">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" style="border-radius: 20px; padding: 12px;" name="address" placeholder="Enter your city" type="text">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <select style="border-radius: 20px; padding: 7px;" class="form-control" id="qualification" name="profession">
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
                                <input type="text" name="our_custom" style="display:none;" value="digicrome">
                                <input type="hidden" name="form_time" value="<?php echo time(); ?>">
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
                    </div>`;
            } else if (type === 'connect') {
                // keep existing injected content as-is
                content.innerHTML = content.innerHTML;
            } else if (type === 'locate') {
                content.innerHTML = `<div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img width="414" height="414" loading="lazy" src="{{ asset('assets/images/location.svg') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h2>Locate Us</h2>
                            <p>Find our nearest branch.</p>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <img width="1235" height="650" loading="lazy" src="{{ asset('assets/images/us_logo.svg') }}" alt="US Flag" title="US Flag" style="width: 40px; height: 30px; margin-right: 10px;">
                                                <h5 class="card-title">Office in the US</h5>
                                            </div>
                                            <br>
                                            <p class="card-text"> 30 N Gould St Ste R Sheridan, Wyoming 82801</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <img width="900" height="600" loading="lazy" src="{{ asset('assets/images/indialogo.svg') }}" alt="India Flag" title="India Flag" style="width: 40px; height: 30px; margin-right: 10px;">
                                                <h5 class="card-title">Office in India</h5>
                                            </div>
                                            <br>
                                            <p class="card-text">B-49, First Floor, Block B, Sector 59, Noida, Uttar Pradesh 201301</p>
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
                        <div class="col-md-6">
                            <img width="304" height="331" loading="lazy" src="{{ asset('assets/images/whatsap.png') }}" alt="Customer Service" title="Customer Service" class="img-fluid">
                        </div>
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
                            <img width="452" height="452" loading="lazy" src="{{ asset('assets/images/chat.png') }}" alt="Chat Image" title="Chat Image">
                        </div>
                        <div class="col-md-7 chat-text">
                            <h2>Have more queries?</h2>
                            <p>Get them answered instantly.</p>
                            <a href="https://tawk.to/chat/68f9d2f2d84f3b1958008620/1j87u01d2" class="btn btn-light text-primary fw-bold">
                                <i class="fas fa-comments"></i> SAY HELLO
                            </a>
                        </div>
                    </div>
                </div>`;
            } else if (type === 'contact') {
                content.innerHTML = `<div class="container mt-5">
                    <div class="row align-items-center contact-box">
                        <div class="col-md-5 text-center">
                            <img width="400" height="400" loading="lazy" src="{{ asset('assets/images/coustome.svg') }}" alt="Contact Image" title="Contact Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="fs-4">Customer Contact Number</h3>
                            <p>Call us for assistance.</p>
                            <a href="tel:+1234567890" class="btn btn-dark btn-call">
                                <i class="fas fa-phone"></i> Call Now
                            </a>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="info-box">
                                        <h4>For Admission Queries</h4>
                                        <p><i class="fas fa-phone"></i> 01204538125</p>
                                        <p><i class="fas fa-envelope"></i> info@digicrome.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-box">
                                        <h4>For Account Department</h4>
                                        <p><i class="fas fa-phone"></i> 01204538104</p>
                                        <p><i class="fas fa-envelope"></i> accounts@digicrome.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info-box">
                                        <h4>For Students Support</h4>
                                        <p><i class="fas fa-phone"></i> 7011101972 <br><small>Available: 10 AM to 9 PM</small></p>
                                        <p><i class="fas fa-phone"></i> 01204538125 <br><small>Available: 11 AM to 6 PM</small></p>
                                        <p><i class="fas fa-envelope"></i> support@digicrome.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
            }
        }

        window.onload = function() {
            showContent('contact');
        };
    </script>

    <!--==================================================-->
    <!-- Start Consalt Contact Area Inner Page -->
    <!--==================================================-->

    <style>
        .contact-modern-card {
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 22px 70px rgba(16, 24, 40, 0.06);
            padding: 22px;
        }

        .contact-modern-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(242, 156, 18, 0.12);
            color: #1a1447;
            font-weight: 900;
        }

        .contact-modern-pills {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .contact-modern-pill {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 14px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(26, 20, 71, 0.10);
        }

        .contact-modern-pill i {
            width: 44px;
            height: 44px;
            border-radius: 16px;
            background: rgba(242, 156, 18, 0.15);
            color: #f29c12;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 44px;
            font-size: 18px;
        }

        .contact-modern-pill b {
            color: #1a1447;
        }

        .contact-form-modern {
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(26, 20, 71, 0.10);
            box-shadow: 0 22px 70px rgba(16, 24, 40, 0.06);
            padding: 22px;
        }

        .contact-form-modern-top {
            padding-bottom: 10px;
        }

        .contact-form-modern .form-field input,
        .contact-form-modern .form-field select {
            width: 100%;
            border: 1px solid rgba(26, 20, 71, 0.16);
            border-radius: 12px;
            padding: 12px 14px;
            background: rgba(255, 255, 255, 0.92);
            outline: none;
            transition: border-color 180ms ease, box-shadow 180ms ease;
        }

        .contact-form-modern .form-field input:focus,
        .contact-form-modern .form-field select:focus {
            border-color: rgba(242, 156, 18, 0.85);
            box-shadow: 0 0 0 4px rgba(242, 156, 18, 0.18);
        }

        .btn-digi-submit {
            width: 100%;
            background: #f29c12;
            border: 1px solid #f29c12;
            color: #fff;
            border-radius: 14px;
            padding: 12px 18px;
            font-weight: 950;
        }
    </style>

    <section class="contact_area inner_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="contact-modern-card">
                        <div class="contact-modern-eyebrow">
                            <span class="d-inline-flex align-items-center gap-2"><i class="fas fa-headset"
                                    style="color:#f29c12"></i> GET IN TOUCH</span>
                        </div>
                        <h3 class="mt-3"
                            style="color:#1a1447; font-weight:950; font-size:clamp(22px,2.2vw,30px); line-height:1.2;">
                            Trusted By the Genius People with Digicrome
                        </h3>
                        <p class="mt-3" style="color:rgba(26,20,71,0.78); line-height:1.7; margin-bottom:0;">
                            Quick support for admissions, accounts, and student help—send your details and our team will
                            reach out.
                        </p>

                        <div class="contact-modern-pills mt-4">
                            <div class="contact-modern-pill"><i class="fas fa-phone-alt"></i>
                                <div><b>Call us Anytime</b>
                                    <div>01204538125</div>
                                </div>
                            </div>
                            <div class="contact-modern-pill"><i class="fas fa-envelope-open"></i>
                                <div><b>Email us Anytime</b>
                                    <div>info@digicrome.com</div>
                                </div>
                            </div>
                            <div class="contact-modern-pill"><i class="fas fa-map-marker-alt"></i>
                                <div><b>Our Location</b>
                                    <div>B-49, First Floor, Block B, Sector 59 Noida, Uttar Pradesh 201301</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- contact form box -->
                    <div class="contact-form-box style_two contact-form-modern">
                        <div class="contact-form-modern-top">
                            <h3 style="color: #f29c12;font-size: 22px; margin-bottom: 8px;font-weight:950;"> Register now!!
                            </h3>
                            <p style="margin:0; color:rgba(26,20,71,0.78); line-height:1.6;">And get a quick call from our
                                team.</p>
                        </div>

                        <form style="width:100%; background:transparent; margin:0px;" class="form" method="post"
                            action="{{ route('website.lead') }}">
                            @csrf
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="name">Name:</label> -->
                                <input type="text" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="mobile">Mobile Number:</label> -->
                                <input type="tel" pattern="\d{10}" title="Please enter a 10-digit mobile number"
                                    id="mobile" name="mobile" placeholder="Mobile Number">
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
                            <input type="text" name="our_custom" style="display:none;" value="digicrome">
                            <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                            <div class="form-field">
                                <input type="hidden" id="mobile" name="state" value=""
                                    placeholder="Mobile Number">
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
                <img width="214" height="210" loading="lazy" src="assets/images/inner-img/contact-shape.webp" alt="shape" title="shape">
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
            <h3 class="mb-2" style="font-size: 2rem; margin-top: 15px;">
                Nation Navigator: <span style="color: #141414;"> India </span>
            </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448075.6264138498!2d76.86013065725662!3d28.671967696656612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5639a2a0f31%3A0x4c3b8b61bc63b342!2sDigiCrome%20Academy!5e0!3m2!1sen!2sin!4v1643104363026!5m2!1sen!2sin"
                width="100%" height="520" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <div class="col-lg-6">
            <h3 class="mb-2" style="font-size: 2rem; margin-top: 15px;">
                Map Matrix:<span style="color: #141414;">USA</span>
            </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.167704831202!2d-106.95752532389567!3d44.79777077107091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335fabc2a655555%3A0x3265c73ab4e065e!2s30%20N%20Gould%20St%20STE%20ST%20R%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2sin!4v1698755458200!5m2!1sen!2sin"
                width="100%" height="520" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>

        </div>
    </div>


    <!-- Start Consalt Map Area -->
    <!--==================================================-->

@endsection
