@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    <style>
        h2 {
            text-transform: none;
        }

        .refer-banner {
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .refer-banner picture,
        .refer-banner img {
            display: block;
            width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .refer-banner {
                margin-top: 90px;
            }
        }

        .refer-how-it-works {
            background: linear-gradient(180deg,
                    #f8f8fb 0%,
                    #f1f2f7 100%);
            position: relative;
            overflow: hidden;
        }

        .how-card {
            background: #fff;
            border-radius: 32px;
            padding: 55px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.06);
            position: relative;
        }

        .how-title {
            font-size: 42px;
            font-weight: 800;
            color: #09195f;
            margin-bottom: 10px;
            line-height: 1.1;
        }

        .how-subtitle {
            font-size: 16px;
            color: #55607a;
            margin-bottom: 0;
        }

        .step-box {
            display: flex;
            align-items: center;
            position: relative;
            gap: 18px;
        }

        .step-icon-wrap {
            position: relative;
            flex-shrink: 0;
        }

        .step-icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg,
                    #f2f1ff,
                    #ecebff);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .orange-bg {
            background: linear-gradient(135deg,
                    #fff4eb,
                    #ffe7d1);
        }

        .step-icon i {
            font-size: 48px;
            color: #09195f;
        }

        .orange-bg i {
            color: #ff7a00;
        }

        .step-number {
            position: absolute;
            top: 15px;
            right: -8px;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            color: #fff;
            font-weight: 700;
            font-size: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-number.blue {
            background: #09195f;
        }

        .step-number.orange {
            background: #ff7a00;
        }

        .step-content h4 {
            color: #09195f;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .step-content p {
            color: #55607a;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        /* Dotted connectors */
        .col-lg-4:not(:last-child) .step-box::after {
            content: "";
            position: absolute;
            top: 50%;
            right: -70px;
            width: 90px;
            border-top: 3px dashed #d9d8ff;
            transform: translateY(-50%);
        }

        /* Tablet */
        @media (max-width: 1199px) {

            .how-title {
                font-size: 44px;
            }

            .step-box {
                flex-direction: column;
                text-align: center;
            }

            .col-lg-4:not(:last-child) .step-box::after {
                display: none;
            }
        }

        /* Mobile */
        @media (max-width: 767px) {

            .how-card {
                padding: 40px 20px;
                border-radius: 24px;
            }

            .how-title {
                font-size: 34px;
            }

            .how-subtitle {
                font-size: 16px;
            }

            .step-icon {
                width: 120px;
                height: 120px;
            }

            .step-icon i {
                font-size: 50px;
            }

            .step-number {
                width: 42px;
                height: 42px;
                font-size: 18px;
            }

            .step-content h4 {
                font-size: 26px;
            }

            .step-content p {
                font-size: 16px;
            }
        }

        .refer-faq-section {
            background: #f6f7fc;
        }

        .faq-heading {
            margin-bottom: 50px;
        }

        .faq-badge {
            display: inline-block;
            background: rgba(255, 122, 0, .12);
            color: #ff7a00;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .5px;
            margin-bottom: 15px;
        }

        .faq-heading h2 {
            color: #09195f;
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 10px;
            display: block;
        }

        .faq-heading p {
            color: #667085;
            font-size: 16px;
        }

        .faq-accordion {
            max-width: 950px;
            margin: auto;
        }

        .faq-accordion .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 16px !important;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(9, 25, 95, .06);
        }

        .faq-accordion .accordion-header {
            width: 100%;
        }

        .faq-accordion .accordion-collapse {
            width: 100%;
        }

        .faq-accordion .accordion-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            background: #fff;
            color: #09195f;
            padding: 0px 20px;
            font-size: 17px;
            font-weight: 600;
            border: none;
            box-shadow: none;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background: #09195f;
            color: #fff;
        }

        .faq-accordion .accordion-button:focus {
            box-shadow: none;
            border: none;
        }

        .faq-accordion .accordion-button::after {
            margin-left: auto !important;
            flex-shrink: 0;
        }

        .faq-accordion .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        .faq-accordion .accordion-body {
            padding: 20px 25px;
            color: #5f6c86;
            font-size: 15px;
            line-height: 1.8;
            background: #fff;
        }

        /* Mobile */

        @media (max-width: 767px) {

            .faq-heading h2 {
                font-size: 30px;
            }

            .faq-heading p {
                font-size: 14px;
            }

            .faq-accordion .accordion-button {
                font-size: 15px;
                padding: 18px;
            }

            .faq-accordion .accordion-body {
                padding: 18px;
                font-size: 14px;
            }
        }

        .refer-form-section {
            background: linear-gradient(180deg,
                    #f7f8fc 0%,
                    #f3f4fa 100%);
        }

        .refer-form-card,
        .refer-info-card {
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            height: 100%;
            box-shadow: 0 15px 40px rgba(9, 25, 95, .08);
        }

        .section-tag {
            display: inline-block;
            background: rgba(255, 122, 0, .12);
            color: #ff7a00;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .refer-form-card h2,
        .refer-info-card h2 {
            color: #09195f;
            font-size: 32px;
            display: block;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .form-subtitle,
        .refer-info-card p {
            color: #667085;
            font-size: 15px;
            line-height: 1.8;
        }

        .custom-input {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            min-height: 52px;
            padding: 12px 16px;
            font-size: 14px;
        }

        .custom-input:focus {
            border-color: #09195f;
            box-shadow: 0 0 0 .2rem rgba(9, 25, 95, .08);
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #09195f;
        }

        .refer-submit-btn {
            width: 100%;
            border: none;
            border-radius: 14px;
            background: #09195f;
            color: #fff;
            padding: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .refer-submit-btn:hover {
            background: #ff7a00;
        }

        .info-points {
            margin-top: 25px;
        }

        .point-item {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
            align-items: flex-start;
        }

        .point-item i {
            color: #ff7a00;
            font-size: 18px;
            margin-top: 2px;
        }

        .point-item span {
            color: #475467;
            font-size: 15px;
        }

        .how-box {
            margin-top: 30px;
            background: #f8f9ff;
            border-left: 4px solid #09195f;
            padding: 20px;
            border-radius: 12px;
        }

        .how-box h5 {
            color: #09195f;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .how-box ul {
            margin: 0;
            padding-left: 18px;
        }

        .how-box li {
            margin-bottom: 10px;
            color: #667085;
            font-size: 14px;
        }

        @media(max-width:768px) {

            .refer-form-card,
            .refer-info-card {
                padding: 25px;
            }

            .refer-form-card h2,
            .refer-info-card h2 {
                font-size: 26px;
            }
        }

        .refer-cta-section {
            padding: 80px 0;
            background: #f6f7fc;
        }

        .refer-cta-card {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg,
                    #09195f 0%,
                    #162a7a 100%);
            border-radius: 28px;
            padding: 50px;
        }

        .refer-cta-card::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .05);
            top: -80px;
            right: -80px;
        }

        .refer-cta-card::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255, 122, 0, .15);
            bottom: -60px;
            left: -60px;
        }

        .cta-badge {
            display: inline-block;
            background: rgba(255, 122, 0, .15);
            color: #ffb566;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .refer-cta-card h2 {
            color: #fff;
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .refer-cta-card p {
            color: rgba(255, 255, 255, .85);
            font-size: 16px;
            line-height: 1.8;
            max-width: 650px;
            margin-bottom: 0;
        }

        .refer-cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            background: #ff7a00;
            color: #fff;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .refer-cta-btn:hover {
            background: #fff;
            color: #09195f;
            transform: translateY(-3px);
        }

        @media(max-width:768px) {

            .refer-cta-card {
                padding: 30px;
                text-align: center;
            }

            .refer-cta-card h2 {
                font-size: 28px;
            }

            .refer-cta-card p {
                font-size: 14px;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-to-form {
            cursor: pointer;
        }
    </style>
@endpush
@section('content')
    @include('components.lead-form-popup')
    <section class="refer-banner scroll-to-form">
        <picture>
            {{-- width/height on the <source> so the reserved box matches the file the
             browser actually picks. Without them it sizes from the desktop <img>
             attributes and the hero jumps when the mobile image decodes. --}}
            <source srcset="{{ asset('assets/images/rfnmob.webp') }}" media="(max-width: 768px)"
                width="1531" height="1027">

            <img width="1942" height="810" src="{{ asset('assets/images/rfnweb.webp') }}" alt="Refer & Earn" loading="eager">
        </picture>
    </section>
    <section class="refer-how-it-works py-5">
        <h1>Refer and Earn</h1>
        <div class="container">

            <div class="how-card">

                <div class="text-center mb-5">
                    <h2 class="how-title">How It Works</h2>
                    <p class="how-subtitle">
                        Refer your friends and earn exciting rewards in 3 simple steps.
                    </p>
                </div>

                <div class="row align-items-center g-4">

                    <!-- Step 1 -->
                    <div class="col-lg-4">
                        <div class="step-box">

                            <div class="step-icon-wrap">
                                <div class="step-icon">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>

                                <span class="step-number blue">01</span>
                            </div>

                            <div class="step-content">
                                <h4>Sign Up</h4>
                                <p>
                                    Create your account
                                    in just a few clicks.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-4">
                        <div class="step-box">

                            <div class="step-icon-wrap">
                                <div class="step-icon orange-bg">
                                    <i class="bi bi-send-fill"></i>
                                </div>

                                <span class="step-number orange">02</span>
                            </div>

                            <div class="step-content">
                                <h4>Share & Refer</h4>
                                <p>
                                    Share your unique referral
                                    link with friends and network.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-4">
                        <div class="step-box">

                            <div class="step-icon-wrap">
                                <div class="step-icon">
                                    <i class="bi bi-gift-fill"></i>
                                </div>

                                <span class="step-number blue">03</span>
                            </div>

                            <div class="step-content">
                                <h4>Earn Rewards</h4>
                                <p>
                                    When they join and engage,
                                    you earn exciting rewards.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="refer-form-section py-5">
        <div class="container py-5" id="referral-form">
            <div class="row align-items-start g-5">
                <div class="col-lg-6">
                    <div class="refer-form-card">
                        <span class="section-tag">
                            Refer a Friend
                        </span>
                        <h2>Referral Form</h2>
                        <p class="form-subtitle">
                            Fill in your details and your referral's information.
                        </p>
                        <form class="referral-form" method="POST" action="{{ route('referral.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" class="form-control custom-input" id="yourName" name="yourName"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="yourEmail" class="form-label">Your Email</label>
                                <input type="email" class="form-control custom-input" id="yourEmail" name="yourEmail"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="yourPhone" class="form-label">Your Mobile</label>
                                <input type="text" pattern="\d{10}" title="Please enter a 10-digit mobile number"
                                    class="form-control custom-input" id="yourPhone" name="yourPhone" required>
                            </div>
                            <div class="mb-3">
                                <label for="friendName" class="form-label">Friend's Name</label>
                                <input type="text" class="form-control custom-input" id="friendName" name="friendName"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="friendEmail" class="form-label">Friend's Email</label>
                                <input type="email" class="form-control custom-input" id="friendEmail" name="friendEmail"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="friendPhone" class="form-label">Friend's Mobile</label>
                                <input type="text" class="form-control custom-input" id="friendPhone" name="friendPhone"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Personal Message (Optional)</label>
                                <textarea class="form-control custom-input" id="message" name="message" rows="4"></textarea>
                            </div>
                            <button type="submit" class="refer-submit-btn">Submit
                                Referral</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="refer-info-card h-100">

                        <span class="section-tag">
                            Affiliate Program
                        </span>

                        <h2>Turn Your Network Into an Earning Opportunity</h2>

                        <p class="info-intro">
                            Digicrome's Affiliate Program allows you to earn rewards by referring candidates to our
                            career-focused courses. Whether you're a student, professional, or entrepreneur, you can turn
                            your network into a source of income while helping others achieve their learning and career
                            goals. Start referring, start earning, and grow with Digicrome.
                        </p>

                        <div class="how-box">

                            <h5>Why Join the Program?</h5>

                            <div class="info-points">

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Simple & Hassle-Free Process</span>
                                </div>

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Unlimited Referral Opportunities</span>
                                </div>

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Earn Attractive Rewards</span>
                                </div>

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Ideal for Students & Working Professionals</span>
                                </div>

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Expand Your Professional Network</span>
                                </div>

                                <div class="point-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Transparent Verification Process</span>
                                </div>
                            </div>

                        </div>

                        <div class="highlight-note mt-4">
                            <strong>Grow Together with Digicrome</strong>
                            <p class="mb-0">
                                With a simple approach and exciting benefits, Digicrome’s affiliate program offers a useful
                                way to turn your network into an opportunity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .referral-form {
            /* margin: 30px auto; */
            /* padding: 30px; */
            background: white;
            border-radius: 10px;
            /* box-shadow: 3px 3px wheat, -1em 0 0.4em blanchedalmond; */
            width: 90%;
            max-width: 500px;
        }

        .referral-form h2 {
            margin-bottom: 40px;
            font-weight: 900;
            font-size: 30px;
            color: #110101;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            background-color: #FFA500;
            color: black;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #ffff;
        }

        h1 {
            margin: 50px;
            font-weight: 900;
            font-size: 30px;
            color: #110101;
            text-align: center;
        }
    </style>
    <section class="refer-faq-section py-5">
        <div class="container">

            <div class="text-center faq-heading">
                <span class="faq-badge">FAQ's</span>
                <h2>Frequently Asked Questions</h2>
                <p>
                    Everything you need to know about the Digicrome Refer & Earn Program.
                </p>
            </div>

            <div class="accordion faq-accordion" id="referFaq">

                <!-- FAQ 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            What is the Refer & Earn Program?
                        </button>
                    </h2>

                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            The Refer & Earn Program allows you to recommend Digicrome courses to your friends, classmates,
                            colleagues, or family members. When your referral successfully enrolls, you become eligible for
                            referral rewards.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            How do I refer someone?
                        </button>
                    </h2>

                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            You can refer a candidate by sharing their details with the Digicrome team. The referral must be
                            submitted before the candidate completes enrollment. Referral rewards will be applicable only
                            after successful enrollment and verification by Digicrome.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            When will I receive my referral reward?
                        </button>
                    </h2>

                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            Rewards are processed after the referred student completes the enrollment process and fulfills the program eligibility requirements.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Is there a limit to how many people I can refer?
                        </button>
                    </h2>

                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            No. You can refer multiple friends and increase your earning potential with every successful enrollment.                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Can I refer someone who has already contacted Digicrome?
                        </button>
                    </h2>

                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            No. Referral rewards are applicable only for new candidates who have not previously registered, submitted an inquiry, attended counseling sessions, or enrolled in any Digicrome program.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6">
                            Can I refer my family members?
                        </button>
                    </h2>

                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            Yes, family members, friends, colleagues, and classmates can be referred, provided they meet the program eligibility criteria.
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq8">
                            Which courses are eligible for referral rewards?
                        </button>
                    </h2>

                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            Most Digicrome programs, including Data Science, AI, Machine Learning, Business Analytics, Cybersecurity and other eligible courses, may qualify under the referral program.
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq9">
                            When is a referral considered successful?
                        </button>
                    </h2>
                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            A referral is considered successful when the referred candidate completes admission, fee payment, and all required enrollment formalities.
                        </div>
                    </div>
                </div>
                <!-- FAQ 10 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq10">
                            Do I need to be a Digicrome student to refer someone?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#referFaq">
                        <div class="accordion-body">
                            No. Anyone can refer a candidate to Digicrome and become eligible for referral rewards, subject to verification and program terms.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="refer-cta-section">
        <div class="container">
            <div class="refer-cta-card">

                <div class="row align-items-center">

                    <div class="col-lg-8">
                        <span class="cta-badge">
                            Refer & Earn Program
                        </span>

                        <h2>
                            Turn Your Network Into Rewards
                        </h2>

                        <p>
                            Refer friends, classmates, colleagues, or family members to
                            Digicrome and earn exciting rewards when they successfully enroll.
                        </p>
                    </div>

                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="#referral-form" class="refer-cta-btn">
                            Refer Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const banner = document.querySelector('.scroll-to-form');
            banner.addEventListener('click', function() {
                document.querySelector('#referral-form')
                    .scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
            });
        });
    </script>
@endpush
