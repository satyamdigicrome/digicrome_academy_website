@extends('layouts.app')

@section('title', $collection->meta_title ?? 'Digicrome')
@section('meta_description', $collection->meta_description ?? 'Digicrome')
@section('meta_keywords', $collection->meta_keywords ?? 'Digicrome')
@push('styles')
    <style>
        .course-pagination-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f8fafc;
            padding: 12px 18px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .pagination-info {
            font-size: 14px;
            color: #555;
        }

        .pagination-list {
            display: flex;
            gap: 6px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .pagination-list li a,
        .pagination-list li span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 34px;
            height: 34px;
            border-radius: 6px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .pagination-list li a:hover {
            background: rgba(28, 22, 71, 0.1);
            color: #1c1647;
        }

        .pagination-list .active {
            color: #1c1647;
            border-bottom: 2px solid #1c1647;
        }

        .pagination-list .dots {
            pointer-events: none;
        }

        .next-btn {
            background: #e5e7eb;
            padding: 0 10px;
            border-radius: 6px;
        }
    </style>
    <style>
        /* Scoped Modern Hero Section Wrapper */
        .df-hero-slide-section {
            width: 100%;
            padding: 0;
            margin: 0;
            background-color: #ffffff;
            /* Clean canvas background */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .df-hero-slide-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0;
        }

        .df-hero-slide-media-box {
            width: 100%;
            display: block;
            line-height: 0;
            /* Erases layout gap at the baseline of the graphic */
        }

        /* Core Visual Strategy: Pure Responsive Asset Layout without Stretching/Cropping */
        .df-hero-slide-responsive-graphic {
            width: 100%;
            height: auto;
            /* Forces proper aspect ratios dynamically */
            max-width: 100%;
            object-fit: cover;
            /* Spans perfectly across screen edge changes with no cutoff distortion */
            display: block;
        }

        /* Optional: Specific adjustments for mobile viewports if needed */
        @media (max-width: 576px) {
            .df-hero-slide-responsive-graphic {
                height: auto !important;
            }
            .df-hero-slide-section{
                margin-top: 90px;
            }
        }
    </style>
@endpush
@section('content')
    @include('components.lead-form-popup')
    {{-- <div class="hero-slider owl-carousel">
        <section class="hero_area style-three d-flex align-items-center" style="height: 600px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- hero content -->
                        <div class="hero_content">
                            <h5 data-animation="fadeInUp" style="color:black;" data-delay="100ms">
                                <i class="bi bi-check2"></i> Assured Placement Support
                            </h5>
                            <h1 data-animation="fadeInUp" style="color:black;" data-delay="100ms">
                                Accelerate Your Career Growth
                                With <span>Digicrome</span>'s Expert-Led Courses
                            </h1>
                            <p data-animation="fadeInUp" data-delay="100ms" style="color:black;">
                                {{ $name ?? (isset($collection) ? 'Explore Top Courses in ' . $collection->name : 'Discover Industry-Focused Courses') }}
                            </p>
                            <div class="hero-button" data-animation="fadeInUp" data-delay="100ms">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </section>

    </div> --}}
    <section class="df-hero-slide-section">
        <div class="df-hero-slide-container">
            <div class="df-hero-slide-media-box">
                <picture style="width: 100%;">
                    <!-- Mobile: Viewports up to 576px width -->
                    <source srcset="{{ asset('assets/images/home-three/course-bg-mob.webp') }}" media="(max-width: 576px)">

                    <!-- Tablet: Viewports between 577px and 991px width -->
                    <source srcset="{{ asset('assets/images/home-three/course-bg.webp') }}" media="(max-width: 991px)">

                    <!-- Desktop & Large Screens: Viewports 992px and up -->
                    <img src="{{ asset('assets/images/home-three/course-bg.webp') }}" class="df-hero-slide-responsive-graphic"
                        alt="Digicrome Expert-Led Courses Banner">
                </picture>
            </div>
        </div>
    </section>
    <style>
        #sticky-header {
            margin-bottom: 0px !important;
        }
    </style>
    <!--==================================================-->
    <!-- End educate Breadcumb Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start educate-details-course-area style-inner -->
    <!--==================================================-->
    <div class="educate-details-course-area style-inner">
        <div class="container">
            <div class="row align-items-center section-title-space">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h1>{{ $name ?? (isset($collection) ? 'Courses in ' . $collection->name : 'Courses') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-details-box">
                            <div class="course-details-thumb">
                                <img loading="lazy"src="{{ asset('storage/' . $course->image) }}" alt="thumb"
                                    title="thumb">
                                <div class="course-meta-top">
                                    <span>{{ $course->tag_line }}</span>
                                </div>
                            </div>
                            <div class="course-details-content">
                                <h4><a
                                        href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                </h4>
                                <div class="course-rating">
                                    {{-- <ul>
                                        @for ($i = 0; $i < 5; $i++)
                                            <li><i class="fa-solid fa-star{{ $i < $course->rating ? '' : '-half' }}"></i></li>
                                        @endfor
                                    </ul> --}}
                                    {{-- <div class="course-rating-num">
                                        <span>({{ $course->rating }}/{{ $course->ratings_count }} Ratings)</span>
                                    </div> --}}
                                    {{-- <div class="course-price">
                                        <h3>{{ number_format($course->price, 0) }} + GST</h3>
                                    </div> --}}
                                </div>
                                {{-- <div class="course-details-list">
                                    <div class="course-lesson">
                                        <span><i class="fa-reg  ular fa-file-lines"></i> {{ $course->lessons_count }}
                                            Lessons</span>
                                    </div>
                                    <div class="course-student">
                                        <span><i class="fa-regular fa-user"></i> {{ $course->students_count }} Students</span>
                                    </div>
                                </div> --}}
                                <br>
                                <br>
                                <div style="bottom: 17px; position: absolute;">
                                    {{-- ENROL NOW Button --}}
                                    <div class="course-enroll-fixed-btn" style="margin: 10px 0;">
                                        <a href="{{ route('course_details', ['slug' => $course->slug]) }}"
                                            style="background-color: #2d3e5f; color: #fff; padding: 8px 16px; display: inline-block; border-radius: 4px; text-decoration: none; font-weight: bold;">
                                            EXPLORE NOW <i class="flaticon flaticon-right-arrow"></i>
                                        </a>
                                    </div>

                                    {{-- Horizontal line --}}
                                    <hr style="border-top: 1px solid #ccc; margin: 10px 0;">

                                    {{-- Duration --}}
                                    @if ($course->course_duration)
                                        <p style="font-size: 14px; color: #2d3e5f; margin-bottom: 0;">
                                            <i class="fa fa-clock-o"></i> Duration: {{ $course->course_duration }}
                                        </p>
                                    @endif
                                </div>
                                {{-- <div class="course-btn">
                                    <a href="{{ route('course_details', ['slug' => $course->slug]) }}" class="btn">ENROL NOW<i
                                            class="flaticon flaticon-right-arrow"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $courses->links('pagination.course-pagination') }} </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--End educate-details-course-area -->
    <!--==================================================-->

@endsection
