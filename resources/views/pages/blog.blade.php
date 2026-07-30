@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    <style>
        .hero-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .paginations {
            text-align: center;
        }

        .paginations .page-numbers {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .paginations .page-numbers li {
            display: inline-block;
        }

        .paginations .page-numbers a,
        .paginations .page-numbers span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 42px;
            height: 42px;
            border-radius: 8px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .paginations .page-numbers .current {
            background: #1c1647;
            color: #fff;
        }

        .paginations .page-numbers .dots {
            border: none;
        }

        .paginations .page-numbers .disabled {
            opacity: 0.4;
            pointer-events: none;
        }

        .df-hero-section {
            width: 100%;
            padding: 0;
            margin: 0;
            background-color: #f8fafc;
            overflow: hidden;
        }

        .df-hero-container {
            width: 100%;
            max-width: 100%;
            /* Spans full width to ensure image responds to viewport flawlessly */
            margin: 0 auto;
            padding: 0;
        }

        .df-hero-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 0;
            /* Eliminates tiny ghost spacing at the bottom of the image */
        }

        /* Core Image Handling - Prevents Stretching AND Cropping */
        .df-hero-responsive-img {
            width: 100%;
            height: auto;
            /* Keeps correct proportional aspect ratio */
            max-width: 100%;
            object-fit: cover;
            /* CHANGED FROM contain TO cover TO PREVENT CROPPING */
            display: block;
        }

        /* Target specific adjustments if necessary for smaller screens */
        @media (max-width: 576px) {
            .df-hero-section {
                margin-top: 95px;
            }
            .df-hero-responsive-img {
                /* Ensures mobile-optimized image naturally expands or handles screen width cleanly */
                height: auto !important;
            }
        }
    </style>
@endpush
@push('scripts')
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                openModal();
            }, 3000)
        });
    </script>
@endpush
@section('content')
    @include('components.lead-form-popup')



    <!--==================================================-->
    <!-- Start educate Breadcumb Area -->
    <!--==================================================-->
    {{-- <div class="breadcumb-area d-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<div class="breadcumb-title">
							<h4>Latest Blog</h4>
						</div>
						<ul>
							<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
							<li>latest blog</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="breadcumb-shape">
				<img width="213" height="142" loading="lazy" src="assets/images/inner-img/breadcumb-dot.webp" alt="dot" title="dot">
			</div>
			<div class="breadcumb-shape2">
				<img width="68" height="76" loading="lazy" src="assets/images/inner-img/breadcumb-ball.webp" alt="ball" title="ball">
			</div>
		</div>
	</div> --}}
    <section class="df-hero-section">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="df-hero-wrapper col-lg-12 text-center">
                    <picture>
                        <!-- Mobile -->
                        <source srcset="{{ asset('assets/images/home-three/blog-mobile-bg.webp') }}"
                            media="(max-width: 576px)" width="1586" height="992">

                        <!-- Tablet -->
                        <source srcset="{{ asset('assets/images/home-three/blog-tablet-bg.webp') }}"
                            media="(max-width: 991px)" width="1200" height="600">

                        <!-- Desktop -->
                        <img loading="eager" fetchpriority="high" width="2109" height="745" src="{{ asset('assets/images/home-three/blog-bg3.webp') }}" class="df-hero-responsive-img"
                            alt="Hero Banner">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <style>
        #sticky-header {
            margin-bottom: 0px !important;
        }

        .blog-pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            padding-bottom: 30px;
        }

        .blog-pagination .pagination {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .blog-pagination .page-item {
            margin: 0;
        }

        .blog-pagination .page-link {
            min-width: 44px;
            height: 44px;
            padding: 0 14px;
            border-radius: 12px;
            border: 1px solid rgba(113, 128, 150, 0.25);
            color: #1f2937;
            background: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .blog-pagination .page-link:hover {
            border-color: var(--theme-color, var(--primary-color, #1c1647)) !important;
            background: rgba(30, 194, 142, 0.08) !important;
            color: var(--theme-color, var(--primary-color, #1c1647)) !important;
        }

        .blog-pagination .page-item.active .page-link,
        .blog-pagination .page-link.active,
        .blog-pagination .page-item.active span.page-link,
        .blog-pagination .page-item.active a[aria-current="page"],
        .blog-pagination .page-item.active span[aria-current="page"] {
            background: var(--theme-color, var(--primary-color, #1c1647)) !important;
            border-color: var(--theme-color, var(--primary-color, #1c1647)) !important;
            color: #ffffff !important;
            box-shadow: 0 8px 20px rgba(28, 22, 71, 0.14) !important;
        }

        .blog-pagination .page-item.disabled .page-link {
            opacity: 0.45;
            pointer-events: none;
            background: #f8fafc;
        }
    </style>
    <!--==================================================-->
    <!-- End educate Breadcumb Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- start educate blog Area -->
    <!--==================================================-->
    <div class="blog-area style-one blog" style="padding: 25px 0;">
        <div class="container">
            <div class="row">
                <h1 class="fs-2 text-center fw-bold">Latest Blog Posts</h1>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-xl-4 col-lg-12 col-md-4">
                                <div class="single-blog-box box-1">
                                    <div class="single-blog-thumb">
                                        <img loading="lazy" src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb"
                                            title="thumb" class="img-fluid">
                                        <div class="blog-meta-top">
                                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-author">
                                            <h4 style="display: flex; align-items: center; gap: 10px;">
                                                @if ($blog->author_image)
                                                    <img loading="lazy" src="{{ asset('storage/' . $blog->author_image) }}"
                                                        alt="author" title="author"
                                                        style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; background: white;">
                                                @endif
                                                {{ $blog->author_name }}
                                            </h4>
                                        </div>
                                        <div class="blog-title">
                                            <h3>
                                                <a href="{{ route('blog.details', $blog->slug) }}">
                                                    {{ $blog->heading }}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="blog-btn">
                                            <a href="{{ route('blog.details', $blog->slug) }}">
                                                Continue Reading
                                                <img width="20" height="20" loading="lazy"
                                                    src="{{ asset('assets/images/home-one/blog-icon1.webp') }}"
                                                    alt="icon" title="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-pagination">
                                {{ $blogs->links('pagination.blog-pagination') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
