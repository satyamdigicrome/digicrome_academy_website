@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
    @include('components.lead-form-popup')

    <!--==================================================-->
    <!-- Start educate Breadcumb Area -->
    <!--==================================================-->
    {{-- <div class="breadcumb-area two d-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content text-center">
                        <div class="breadcumb-title">
                            <h4>{{ $name ?? (isset($collection) ? 'Courses in ' . $collection->name : 'Courses') }}</h4>

                        </div>
                        <ul>
                            <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
                            <li>{{ $name ?? (isset($collection) ? 'Courses in ' . $collection->name : 'Courses') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="breadcumb-shape">
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot" title="dot">
            </div>
            <div class="breadcumb-shape2">
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball" title="ball">
            </div>
        </div>
    </div> --}}
    <div class="hero-slider owl-carousel">
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
                            </h1>
                            <h1 data-animation="fadeInUp" style="color:black;" data-delay="100ms">
                                With <span>Digicrome</span>'s Expert-Led Courses
                            </h1>
                            <p data-animation="fadeInUp" data-delay="100ms" style="color:black;">
                                {{ $name ?? (isset($collection) ? 'Explore Top Courses in ' . $collection->name : 'Discover Industry-Focused Courses') }}
                            </p>
                            <!-- hero button -->
                            <div class="hero-button" data-animation="fadeInUp" data-delay="100ms">
                                {{-- <div class="hero-btn">
                                    <a href="contact.html">GET STARTED<i class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                                <div class="hero-course-btn">
                                    <a href="course.html">FIND COURSE<i class="flaticon flaticon-right-arrow"></i></a>
                                </div> --}}
                            </div>
                            {{-- <div class="hero-shape31">
                                <img loading="lazy"src="assets/images/home-three/hero-shape31.webp" alt="hero-shape" title="hero-shape">
                            </div>
                            <div class="hero-shape32">
                                <img loading="lazy"src="assets/images/home-three/hero-shape32.webp" alt="hero-shape" title="hero-shape">
                            </div>
                            <div class="hero-shape33">
                                <img loading="lazy"src="assets/images/home-three/hero-shape33.webp" alt="hero-shape" title="hero-shape">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </section>

    </div>
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
                        <h2>{{ $name ?? (isset($collection) ? 'Courses in ' . $collection->name : 'Courses') }}</h2>
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
        </div>
    </div>
    <!--==================================================-->
    <!--End educate-details-course-area -->
    <!--==================================================-->

@endsection
