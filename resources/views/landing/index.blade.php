@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
    @include('components.lead-form-popup')

    <style>
        .breadcumb-area {
            padding: 0px;
        }
        .date-border {
    display: flex
;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}
    </style>
    <div class="breadcumb-area two d-flex">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-4">
                        <img loading="lazy"src="{{ asset('assets/images/card11.webp') }}" width="190" height="120"
                            alt="card1" title="card1" />
                        <img loading="lazy"src="{{ asset('assets/images/Card.webp') }}" width="319" height="58"
                            alt="card" title="card" style="border: 2px solid #f29c12; border-radius: 5px;" />
                    </div>


                    <h1 class="fw-bold text-capitalize text-dark" style="font-size: 43px;">{{ $course->name }}</h1>

                    <p class="fs-5 fw-semibold text-secondary mt-3 mb-3">
                        <i class="fa-solid fa-shield-halved text-primary me-2"></i>
                        100% Job Assurance Investment Banking <br />
                        Course for Finance Graduates with 0-3 Years <br />
                        of Work Experience
                    </p>

                    <p class="text-dark fs-6 mb-2">
                        <i class="fa-solid fa-briefcase text-success me-2"></i>
                        Learn from global experts and get certified by Digicrome
                    </p>

                    <p class="text-dark fs-6 mb-2">
                        <i class="fa-solid fa-clock text-warning me-2"></i>
                        Suitable for Final Years, Graduates and Early Professionals
                    </p>

                    <p class="text-dark fs-6 mb-0">
                        <i class="fa-solid fa-trophy text-danger me-2"></i>
                        You`re guaranteed to find something that`s right for you.
                    </p>


                    <br>
                    <p><b>Note:-</b> This is an educational program only. No investment or financial product
                        is being offered.</p>
                </div>
                <div class="col-md-6 text-end">
                    <img loading="lazy"src="{{ asset('assets/images/3.webp') }}" class="img-fluid" alt="CIBOP"
                        title="CIBOP" />
                </div>
            </div>
            <div class="feature-strip position-relative mt-5">
    <div class="container">
        <div class="white-strip shadow-lg rounded-4 p-4 d-flex flex-wrap justify-content-between align-items-center gap-4">
            
            <!-- Box 1 -->
            <div class="features-box text-center flex-fill min-w-0">
                <div class="date-border">
                    <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-1.png') }}"
                         class="lazyload mb-2" alt="data science program institute" title="data science program institute">
                    <p class="icon-plus">5000</p>
                    <span>Career Transformed</span>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="features-box text-center flex-fill min-w-0">
                <div class="date-border">
                    <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-2.png') }}"
                         class="lazyload mb-2" alt="data science programs" title="data science programs">
                    <p>Internship Possibility</p>
                    <span>Based on Performance</span>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="features-box text-center flex-fill min-w-0">
                <div class="date-border">
                    <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-3.png') }}"
                         class="lazyload mb-2" alt="best online data science programs" title="best online data science programs">
                    <p>06 Months</p>
                    <span>Live Online Classes</span>
                </div>
            </div>

            <!-- Box 4 -->
            <div class="features-box text-center flex-fill min-w-0">
                <div class="date-border">
                    <img loading="lazy" src="{{ asset('assets/images/ds-withai-course/banner-icon-4.png') }}"
                         class="lazyload mb-2" alt="data science programs near me" title="data science programs near me">
                    <p style="color: #f8b700">{{ $course->course_online_payment }}</p>
                    <span>Next Batch starts on</span>
                </div>
            </div>

        </div>
    </div>
</div>

        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-auto text-center">
                    <div class="d-flex justify-content-center gap-3">
                        @if ($course->browser)
                            <button class="btn btn-sm btn-outline-success rounded-pill px-3 py-2"
                                style="background-color: green;" data-bs-toggle="modal" data-bs-target="#leadPopup">
                                <i class="fa fa-download me-2"></i>Download Brochure
                            </button>
                        @endif

                        <a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill px-3 py-2"
                            style="background-color: #1c1647;" data-bs-toggle="modal" data-bs-target="#applyNowPopup">
                            <i class="fa fa-paper-plane me-2"></i>Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
  <section class="logo-slider-section py-5" style="background-color: #fff4e5;"> <!-- light orange background -->
    <h2 class="text-center mb-4" style="font-size: 2rem;">
      Trusted by <span style="color: #f29c12;">world's best</span> Organisations
    </h2>
    <div class="container-fluid custom-width">

      <!-- Single row: slides left to right -->
      <div class="logo-marquee marquee-left">
        <div class="logo-track" style="background:#ffdca5;">
          @foreach($companyLogos as $logo)
            <div class="logo-item">
              <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand">
            </div>
          @endforeach
          @foreach($companyLogos as $logo)
            <div class="logo-item">
              <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}" alt="brand">
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>

  <style>
    .logo-slider-section {
      /* background set inline on section */
    }

    .logo-marquee {
      overflow: hidden;
      white-space: nowrap;
      position: relative;
    }

    .logo-track {
      display: flex;
      width: max-content;
    }

    .logo-item {
      flex: 0 0 auto;
      padding: 0 30px;
    }

    .logo-item img {
      height: 60px;
      object-fit: contain;
    }

    /* Scroll left to right */
    .marquee-left .logo-track {
      animation: scrollLeftToRight 120s linear infinite;
    }

    @keyframes scrollLeftToRight {
      0% {
        transform: translateX(-50%);
      }
      100% {
        transform: translateX(0);
      }
    }
  </style>
</section>

<section>
<div class="container">
    <div class="row">
        @if($course->modules->count())
    <div class="container text-center">
        <h2 class="text-center mb-2" style="font-size: 2rem;">
            Our <span style="color: #f29c12;">Course </span> Curriculum
        </h2>
        <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
            100% Trusted And Golden Opportunities With Key Features That will Help You To Transform Your Career
        </p>
    </div>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <div class="accordion my-4" id="moduleAccordion">
                @foreach($course->modules as $index => $module)
                    <div class="accordion-item border border-warning-subtle">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}" style="color: #f29c12;">
                                {{ $module->question }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}"
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                            aria-labelledby="heading{{ $index }}" data-bs-parent="#moduleAccordion">
                            <div class="accordion-body">
                                {!! nl2br(e($module->answer)) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

    </div>
</div>
</section>

<section>

    <div class="container">
        <div class="row">
<div class="container py-5" style="text-align: left;">
            <div class="row align-items-center">
                <!-- Left: About Company Text -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="mb-5 display-5 fw-bold">About the Program</h2>
                    <p>
                        {{ $course->about }}
                    </p>
                </div>
                <!-- Right: Company Image -->
                <div class="col-md-6 text-center">
                    <img loading="lazy"src="{{ asset('assets/images/About-Page.webp') }}" alt="Company Image" title="Company Image" class="img-fluid">
                </div>
            </div>
        </div>
        </div>
    </div>
</section>









@endsection
