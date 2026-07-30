{{-- ==========================================================
    DIGICROME CERTIFICATION PARTNERS SECTION
    - Shows 4 logos at a time on desktop
    - Infinite autoplay carousel
    - Blue + Orange theme
    - Unique CSS classes (dc-cert-*)
    - No unnecessary blank space
========================================================== --}}

<style>
    /* ==========================================================
   SECTION
========================================================== */
    .dc-cert-section {
        position: relative;
        padding: 60px 0;
        background: linear-gradient(135deg, #f8fbff 0%, #ffffff 60%, #fff8f1 100%);
        overflow: hidden;
    }

    .dc-cert-wrapper {
        position: relative;
        z-index: 2;
    }

    /* ==========================================================
   CONTENT AREA
========================================================== */
    .dc-cert-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 7px 16px;
        border-radius: 999px;
        background: rgba(13, 110, 253, 0.08);
        color: #1A1447;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 16px;
    }

    .dc-cert-heading {
        font-size: 42px;
        line-height: 1.15;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 16px;
        text-transform: uppercase;
    }

    .dc-cert-heading-highlight {
        background: linear-gradient(90deg, #1A1447, #F29C12);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .dc-cert-description {
        font-size: 16px;
        line-height: 1.9;
        color: #64748b;
        margin-bottom: 24px;
    }

    /* ==========================================================
   FEATURE LIST
========================================================== */
    .dc-cert-feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dc-cert-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 20px;
    }

    .dc-cert-feature-icon {
        width: 46px;
        height: 46px;
        border-radius: 14px;
        background: linear-gradient(135deg, #1A1447, #F29C12);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 18px;
        flex-shrink: 0;
        box-shadow: 0 10px 20px rgba(13, 110, 253, 0.15);
    }

    .dc-cert-feature-title {
        display: block;
        font-size: 16px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 4px;
    }

    .dc-cert-feature-text {
        display: block;
        font-size: 14px;
        line-height: 1.8;
        color: #64748b;
    }

    /* ==========================================================
   CAROUSEL
========================================================== */
    .dc-cert-carousel .owl-stage {
        display: flex;
        align-items: stretch;
    }

    .dc-cert-carousel .owl-item {
        display: flex;
    }

    .dc-cert-logo-card {
        width: 100%;
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid rgba(226, 232, 240, 0.95);
        padding: 28px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        box-shadow:
            0 10px 25px rgba(15, 23, 42, 0.05),
            0 4px 10px rgba(13, 110, 253, 0.03);
        transition: all 0.4s ease;
    }

    .dc-cert-logo-card::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 1.5px;
        border-radius: 24px;
        background: linear-gradient(135deg, #1A1447, #F29C12);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

    .dc-cert-logo-card:hover {
        transform: translateY(-6px);
        box-shadow:
            0 20px 40px rgba(15, 23, 42, 0.08),
            0 8px 18px rgba(13, 110, 253, 0.08);
    }

    .dc-cert-logo-img {
        max-width: 100%;
        max-height: 120px;
        /* Increased image size */
        width: auto;
        height: auto;
        object-fit: contain;
        position: relative;
        z-index: 2;
        transition: transform 0.4s ease;
    }

    .dc-cert-logo-card:hover .dc-cert-logo-img {
        transform: scale(1.08);
    }

    /* ==========================================================
   OWL DOTS
========================================================== */
    .dc-cert-carousel .owl-dots {
        margin-top: 20px;
        text-align: center;
    }

    .dc-cert-carousel .owl-dot span {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        display: block;
        border-radius: 50%;
        background: #cbd5e1;
        transition: all 0.3s ease;
    }

    .dc-cert-carousel .owl-dot.active span {
        width: 28px;
        border-radius: 999px;
        background: linear-gradient(90deg, #1A1447, #F29C12);
    }

    /* =========================================
   GRID SLIDER
========================================= */

    .dc-cert-grid-wrap {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    /* =========================================
   LOGO CARD
========================================= */

    .dc-cert-logo-card {
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid rgba(226, 232, 240, 0.95);
        padding: 28px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        transition: all .4s ease;

        box-shadow:
            0 10px 25px rgba(15, 23, 42, 0.05),
            0 4px 10px rgba(13, 110, 253, 0.03);
    }

    .dc-cert-logo-card::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 1.5px;
        border-radius: 24px;
        background: linear-gradient(135deg, #0d6efd, #ff8c00);

        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);

        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

    .dc-cert-logo-card:hover {
        transform: translateY(-6px);
        box-shadow:
            0 20px 40px rgba(15, 23, 42, 0.08),
            0 8px 18px rgba(13, 110, 253, 0.08);
    }

    .dc-cert-logo-img {
        max-width: 100%;
        max-height: 110px;
        object-fit: contain;
        position: relative;
        z-index: 2;
        transition: transform .4s ease;
    }

    .dc-cert-logo-card:hover .dc-cert-logo-img {
        transform: scale(1.08);
    }

    /* =========================================
   RESPONSIVE
========================================= */

    @media(max-width:767px) {

        .dc-cert-grid-wrap {
            grid-template-columns: 1fr;
        }

        .dc-cert-logo-img {
            max-height: 80px;
        }

    }

    @media (max-width: 991px) {
        .dc-cert-section {
            padding: 50px 0;
        }

        .dc-cert-content {
            margin-top: 30px;
        }

        .dc-cert-heading {
            font-size: 34px;
        }
    }

    @media (max-width: 767px) {
        .dc-cert-section {
            padding: 40px 0;
        }

        .dc-cert-heading {
            font-size: 28px;
        }

        .dc-cert-description {
            font-size: 15px;
            line-height: 1.8;
        }

        .dc-cert-logo-card {
            padding: 20px 15px;
            border-radius: 20px;
        }

        .dc-cert-logo-img {
            max-height: 90px;
        }

        .dc-cert-feature-icon {
            width: 40px;
            height: 40px;
            font-size: 16px;
            border-radius: 12px;
        }
    }
</style>

<section class="dc-cert-section mt-4">
    <div class="container dc-cert-wrapper">
        {{-- 
            Desktop Layout:
            Left  = Logos
            Right = Content

            Mobile Layout:
            First  = Content
            Second = Logos
        --}}
        <div class="row align-items-center g-5">

            {{-- =========================
                CONTENT SECTION
                Desktop Order: 2
                Mobile Order: 1
            ========================== --}}
            <div class="col-lg-5 order-1 order-lg-2 dc-cert-content">
                <div class="dc-cert-badge">
                    <i class="bi bi-stars"></i>
                    Global Certification Network
                </div>

                <h2 class="dc-cert-heading">
                    Our
                    <span class="dc-cert-heading-highlight">
                        Certification Partners
                    </span>
                </h2>

                <p class="dc-cert-description">
                    Empowering learners through globally recognized certifications
                    with industry-leading organizations that validate skills and
                    accelerate careers in Data Science, AI, and emerging technologies.
                </p>

                <ul class="dc-cert-feature-list">
                    <li class="dc-cert-feature-item">
                        <div class="dc-cert-feature-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div>
                            <span class="dc-cert-feature-title">
                                Trusted Collaboration
                            </span>
                            <span class="dc-cert-feature-text">
                                We partner with globally recognized certification
                                bodies to ensure every program meets international
                                quality standards.
                            </span>
                        </div>
                    </li>

                    <li class="dc-cert-feature-item">
                        <div class="dc-cert-feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div>
                            <span class="dc-cert-feature-title">
                                Career-Boosting Credentials
                            </span>
                            <span class="dc-cert-feature-text">
                                Earn certifications that strengthen your professional
                                profile and open doors to high-growth opportunities
                                worldwide.
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- =========================
                LOGO SLIDER SECTION
                Desktop Order: 1
                Mobile Order: 2
            ========================== --}}
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="dc-cert-grid-slider owl-carousel">

                    @foreach ($certificate->chunk(4) as $chunk)
                        <div class="item">
                            <div class="dc-cert-grid-wrap">

                                @foreach ($chunk as $logo)
                                    <div class="dc-cert-logo-card">
                                        <img
                                            loading="lazy"
                                            src="{{ asset('storage/' . $logo->image) }}"
                                            alt="Certification Partner"
                                            class="dc-cert-logo-img">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof $ !== 'undefined' && $('.dc-cert-grid-slider').length) {

            // Destroy existing instance if already initialized
            if ($('.dc-cert-grid-slider').hasClass('owl-loaded')) {
                $('.dc-cert-grid-slider').trigger('destroy.owl.carousel');
                $('.dc-cert-grid-slider').removeClass('owl-loaded');
                $('.dc-cert-grid-slider').find('.owl-stage-outer').children().unwrap();
            }

            // Initialize Owl Carousel
            $('.dc-cert-grid-slider').owlCarousel({
                items: 1,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true,
                smartSpeed: 700,
                dots: true,
                nav: false

                // responsive: {
                //     0: {
                //         items: 1
                //     },
                //     576: {
                //         items: 2
                //     },
                //     768: {
                //         items: 3
                //     },
                //     992: {
                //         items: 4 // Show 4 logos at a time on desktop
                //     }
                // }
            });
        }
    });
</script>
