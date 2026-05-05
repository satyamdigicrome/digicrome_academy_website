@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@section('content')
    @include('components.lead-form-popup')

    <div class="custom-hero-banner">
        <div class="owl-carousel hero-slider">
            <div class="hero-slide">
                <img src="{{ asset('assets/images/media1.webp') }}" alt="Media Banner 1" class="hero-img" fetchpriority="high">
            </div>
            <div class="hero-slide">
                <img src="{{ asset('assets/images/media2.webp') }}" alt="Media Banner 2" class="hero-img" fetchpriority="high">
            </div>
            <div class="hero-slide">
                <img src="{{ asset('assets/images/media3.webp') }}" alt="Media Banner 3" class="hero-img" fetchpriority="high">
            </div>
            <div class="hero-slide">
                <img src="{{ asset('assets/images/media4.webp') }}" alt="Media Banner 4" class="hero-img" fetchpriority="high">
            </div>
        </div>

        <div class="hero-overlay">
            <a href="#media-coverage" class="see-more-btn">
                <i class="fa fa-arrow-down"></i> See More
            </a>
        </div>
    </div>

    <style>
        #sticky-header {
            margin-bottom: 0px;
        }

        .custom-hero-banner {
            position: relative;
        }

        .hero-slider {
            height: 70vh;
            /* Adjust as needed to match original height */
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
                padding: 12px 25px;
                font-size: 1rem;
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
    </style>

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
    <style>
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
    </style>

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
    <style>
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
    </style>

    {{-- Commented sections remain the same --}}
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
