@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    <style>
        #sticky-header {
            margin-bottom: 0px;
        }

        .custom-hero-banner {
            position: relative;
            width: 100%;
        }

        .hero-slider,
        .hero-slider .hero-slide {
            height: 70vh;
        }

        .hero-slider .hero-slide {
            position: relative;
            height: 70vh;
        }

        .hero-slider .hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-slider .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        .hero-slider .owl-nav button {
            background: rgba(0, 0, 0, 0.5) !important;
            color: white !important;
            border: none !important;
            border-radius: 50% !important;
            width: 50px !important;
            height: 50px !important;
            font-size: 20px !important;
        }

        .hero-slider .owl-dots {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .hero-slider .owl-dot {
            display: inline-block;
            margin: 0 5px;
        }

        .hero-slider .owl-dot span {
            width: 12px !important;
            height: 12px !important;
            background: rgba(255, 255, 255, 0.5) !important;
            border-radius: 50% !important;
        }

        .hero-slider .owl-dot.active span {
            background: white !important;
        }

        .hero-overlay {
            position: absolute;
            bottom: 10%;
            left: 10%;
            transform: translateX(-60%);
            z-index: 10;
            text-align: center;
        }

        .see-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 25px;
            background: linear-gradient(135deg, #f29c12, #e68a00);
            color: white !important;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(242, 156, 18, 0.4);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .see-more-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(242, 156, 18, 0.6);
            color: white !important;
            text-decoration: none;
        }

        .see-more-btn i {
            font-size: 1.3rem;
        }

        @media (max-width: 768px) {
            .see-more-btn {
                padding: 3px 8px;
                font-size: 10px;
            }

            .see-more-btn i {
                font-size: 10px;
            }
        }

        .award-card {
            transition: transform 0.3s ease;
        }

        .award-card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .award-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        @media (max-width: 768px) {
            .award-image {
                height: 200px;
            }
        }

        @media (max-width: 767px) {

            .hero-slider,
            .hero-slider .hero-slide {
                height: auto !important;
            }

            .hero-slider .hero-img {
                height: auto !important;
                object-fit: contain;
            }

            .hero-overlay {
                bottom: 5%;
                left: 15%;
                transform: translateX(-50%);
                width: 100%;
            }

            .custom-hero-banner {
                margin-top: 5rem;
            }
        }

        .hero-slider .owl-stage-dom {
            display: flex;
        }

        .read-article-link {
            display: inline-block;
            font-weight: 500;
            text-decoration: underline;
            color: #007bff;
            transition: color 0.3s;
        }

        .read-article-link:hover {
            color: #0056b3;
            text-decoration: none;
        }

        .award-section {
            margin: 40px 0;
        }

        .award-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .award-content h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .award-content p {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Logo Grid Styles */
        .logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 20px;
            align-items: center;
            justify-items: center;
        }

        .logo-item {
            background: #fff;
            border: 1px solid #eee;
            padding: 15px;
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .logo-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .logo-item img {
            max-height: 100%;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s;
        }

        .logo-item:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* About Section Styles */
        .section-title-alt {
            font-weight: 700;
            font-size: 2rem;
            color: #2c3e50;
        }

        .about-title {
            font-weight: 800;
            color: #333;
            font-size: 2.2rem;
        }

        .about-text p {
            line-height: 1.8;
            font-size: 1.05rem;
            color: #444;
        }

        .btn-learn-more {
            display: inline-block;
            padding: 12px 30px;
            background: #f39c12;
            /* Matches your theme */
            color: #fff !important;
            text-decoration: none !important;
            font-weight: 700;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-learn-more:hover {
            background: #e67e22;
        }

        /* Responsive Fixes */
        @media (max-width: 991px) {
            .about-title {
                font-size: 1.8rem;
            }

            .logo-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 576px) {
            .logo-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .about-text p {
                font-size: 0.95rem;
            }
            .about-image-wrapper {
                margin-top: 20px;
            }
        }
        .video-section {
            background-color: #0a1931;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        .video-section::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('assets/images/media-bg-texture.png') }}');
            opacity: 0.1;
            pointer-events: none;
        }
        .video-section-title {
            font-weight: 700;
            font-size: 1.8rem;
            color: #ffffff;
        }
        .see-all-link {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.3s;
        }
        .see-all-link:hover {
            color: #f39c12;
        }
        .main-video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        .main-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .thumb-video {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 5px;
            overflow: hidden;
            background: #000;
            border: 2px solid transparent;
            transition: border-color 0.3s;
        }
        .thumb-video:hover {
            border-color: #f39c12;
        }
        .thumb-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .video-description-box p {
            line-height: 1.6;
            font-size: 1rem;
            opacity: 0.9;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .video-section-title {
                font-size: 1.4rem;
            }
            .video-description-box {
                text-align: center;
            }
            .video-description-box img {
                margin: 0 auto 10px auto !important;
            }
        }
    </style>
@endpush
@section('content')
    @include('components.lead-form-popup')

    <div class="custom-hero-banner">
        <div class="owl-carousel hero-slider">
            @php
                $slides = [
                    ['db' => 'media1.webp', 'mb' => 'media1mob.webp'],
                    ['db' => 'media2.webp', 'mb' => 'media2mob.webp'],
                    ['db' => 'media3.webp', 'mb' => 'media3mob.webp'],
                    ['db' => 'media4.webp', 'mb' => 'media4mob.webp'],
                ];
            @endphp
            @foreach ($slides as $slide)
                <div class="hero-slide">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/' . $slide['mb']) }}">
                        <img src="{{ asset('assets/images/' . $slide['db']) }}" alt="Digicrome Banner" class="hero-img">
                    </picture>
                </div>
            @endforeach
        </div>

        <div class="hero-overlay">
            <a href="javascript:void(0);" onclick="openModal();" class="see-more-btn">
                <i class="fa fa-arrow-down"></i> See More
            </a>
        </div>
    </div>

    <section class="press-room py-5">
        <div class="container text-center">
            <h2 class="section-title-alt mb-5">Digicrome Press Room</h2>
            <div class="logo-grid">
                @foreach ($images as $logo)
                    <div class="logo-item">
                        <img src="{{ asset('storage/' . $logo->image) }}" alt="Media Logo" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section class="about-digicrome py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="about-title mb-3">About Digicrome</h2>
                    <div class="about-text">
                        <p>Digicrome was founded to bridge the knowledge gap between academia and industry. We boast
                            world-class teaching faculty and a state-of-the-art learning platform for professional
                            education.</p>
                        <p class="text-muted small">Our ecosystem comprises thousands of students and alumni, campus
                            ambassadors, and dedicated teaching assistants. Digicrome teaches courses in Programming
                            fundamentals as well as advanced courses such as Data Science, AI, and more.</p>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn-learn-more">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('assets/images/certificate.webp') }}" alt="About Digicrome Team"
                            class="img-fluid rounded-3 shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="video-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="video-section-title">Digicrome in the news</h2>
                <a href="https://www.youtube.com/@digicromeofficial" target="_blank" class="see-all-link">
                    See All <i class="fa fa-chevron-right ms-1"></i>
                </a>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="main-video-container">
                        <iframe src="https://www.youtube.com/embed/9KSsPoegNCM?si=x8iJVa_MRTx3_Z_t" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <div class="video-description-box p-3">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/images/footer-logo.webp') }}" alt="Logo" width="150"
                                class="me-3">
                            <h4 class="mb-0 text-white fs-3 fw-3">Excellence in EdTech | Digicrome</h4>
                        </div>
                        <p class="text-light">
                            Nowadays, without coding, we cannot imagine any digital elements. Coding has become a crucial part of tasks like developing websites, mobile applications, and other software. Coding skills are crucial and in demand now. The opportunities in every tech field are increasing day by day.
                            <br><br> Digicrome is the solution here. We consist of a number of courses like Data Science with AI, AI Security, Machine Learning, and Cybersecurity programs. These in-demand courses ensure your career in the growing job market in the 21st century.
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row g-3">
                        <div class="col-6 col-md-3">
                            <div class="thumb-video">
                                <iframe src="https://www.youtube.com/embed/Kyv3WSiPUIw?si=-s0IJBTBg3r2ieiN" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="thumb-video">
                                <iframe src="https://www.youtube.com/embed/HLiQiTTbX8g?si=SFl0FuGB4xKekMCz" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="thumb-video">
                                <iframe src="https://www.youtube.com/embed/6p4t8NhGpd0?si=9tgj-KXHWcLt0YJF" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="thumb-video">
                                <iframe src="https://www.youtube.com/embed/OputV3LYxhI?si=fVftu38qcyrdwzN4" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="owl-carousel mentor-carousel">
                @foreach ($articles as $article)
                    <div class="card h-100 shadow-sm rounded-4 p-2 mb-4">
                        <img src="{{ asset('uploads/articles/' . $article->image) }}" class="card-img-top rounded-4"
                            alt="Article Image">
                        <div class="card-body d-flex flex-column">
                            <h5 style="line-height: 29px;" class="card-title">{{ $article->heading }}</h5>
                            <p class="card-text text-muted small mb-2">Date:
                                {{ \Carbon\Carbon::parse($article->date)->format('F d, Y') }}</p>
                            <div class="mt-auto text-center">
                                <a href="{{ $article->link }}" class="read-article-link" target="_blank" rel="nofollow">Read
                                    Article</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container">
        <div class="text-center py-5">
            <h2 class="fw-bold" style="font-size: 2.5rem;">Our Media Presence</h2>
            <p class="text-muted" style="font-size: 1.2rem;">
                These awards highlight our commitment to excellence and innovation in education.
            </p>
        </div>

        @foreach ($data as $index => $entry)
            <div class="row align-items-center award-section {{ $index % 2 == 1 ? 'flex-md-row-reverse' : '' }}">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $entry->image) }}" alt="{{ $entry->heading }}"
                        class="award-image img-fluid">
                </div>
                <div class="col-md-6 award-content">
                    <h3>{{ $entry->heading }}</h3>
                    <p>{!! $entry->description !!}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection

<script>
    $(document).ready(function() {
        $(".mentor-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        $(".hero-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                }
            }
        });
    });
</script>
