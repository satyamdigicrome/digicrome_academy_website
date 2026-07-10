<section id="cthc-hero" class="cthc-hero">
    <div class="swiper cthc-swiper">
        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide">
                <div class="cthc-slide"
                     style="background-image: linear-gradient(100deg, rgba(11,26,53,0.92) 0%, rgba(11,26,53,0.75) 40%, rgba(11,26,53,0.25) 75%), url('{{ asset('assets/images/carousal1.webp') }}');">
                    <div class="cthc-content">
                        <span class="cthc-eyebrow">Corporate Training</span>
                        <h2 class="cthc-heading">Empower Through Learning</h2>
                        <p class="cthc-text">
                            Empower your workforce with online training that builds practical skills and drives long-term growth.
                        </p>
                        <a href="javascript:void(0);" onclick="openModal();" class="cthc-btn">
                            Get a Quote
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="cthc-slide"
                     style="background-image: linear-gradient(100deg, rgba(11,26,53,0.92) 0%, rgba(11,26,53,0.75) 40%, rgba(11,26,53,0.25) 75%), url('{{ asset('assets/images/carousal2.webp') }}');">
                    <div class="cthc-content">
                        <span class="cthc-eyebrow">Certified Trainers</span>
                        <h2 class="cthc-heading">Transform Your Workforce</h2>
                        <p class="cthc-text">
                            Equip your team with future-ready skills with the experts through online training that boosts performance.
                        </p>
                        <a href="javascript:void(0);" onclick="openModal();" class="cthc-btn">
                            Meet Our Trainers
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide">
                <div class="cthc-slide"
                     style="background-image: linear-gradient(100deg, rgba(11,26,53,0.92) 0%, rgba(11,26,53,0.75) 40%, rgba(11,26,53,0.25) 75%), url('{{ asset('assets/images/carousal3.webp') }}');">
                    <div class="cthc-content">
                        <span class="cthc-eyebrow">Partnerships</span>
                        <h2 class="cthc-heading">Corporate Learning Solutions</h2>
                        <p class="cthc-text">
                            Customized corporate training through online sessions to build the skills that your business needs.
                        </p>
                        <a href="javascript:void(0);" onclick="openModal();" class="cthc-btn">
                            Explore Programs
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Navigation arrows --}}
        <div class="cthc-nav cthc-nav-prev" aria-label="Previous slide">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="cthc-nav cthc-nav-next" aria-label="Next slide">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>

        {{-- Pagination dots --}}
        <div class="swiper-pagination cthc-pagination"></div>
    </div>
</section>

@push('styles')
<style>
    /* ===== Corporate Training Hero Carousel (cthc-) ===== */
    .cthc-hero {
        --cthc-navy: #0b1a35;
        --cthc-navy-light: #16294f;
        --cthc-gold: #d4a017;
        --cthc-gold-light: #f0c14b;
        --cthc-white: #ffffff;
        width: 100%;
        padding: 24px 16px;
        box-sizing: border-box;
    }

    .cthc-swiper {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 32px rgba(11, 26, 53, 0.18);
    }

    .cthc-slide {
        width: 100%;
        min-height: 340px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        box-sizing: border-box;
    }

    .cthc-content {
        max-width: 560px;
        padding: 40px 32px;
        color: var(--cthc-white);
    }

    .cthc-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--cthc-gold-light);
        margin-bottom: 12px;
    }

    .cthc-heading {
        font-size: 34px;
        font-weight: 800;
        line-height: 1.2;
        margin: 0 0 14px 0;
        color: var(--cthc-white);
    }

    .cthc-text {
        font-size: 16px;
        line-height: 1.6;
        margin: 0 0 24px 0;
        color: rgba(255, 255, 255, 0.88);
    }

    .cthc-btn {
        display: inline-block;
        background: var(--cthc-gold);
        color: var(--cthc-navy);
        font-weight: 700;
        font-size: 15px;
        padding: 13px 30px;
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.2s ease, transform 0.2s ease;
        cursor: pointer;
        border: none;
    }

    .cthc-btn:hover,
    .cthc-btn:focus {
        background: var(--cthc-gold-light);
        transform: translateY(-2px);
        color: var(--cthc-navy);
        text-decoration: none;
    }

    /* Navigation arrows */
    .cthc-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        border: 1.5px solid rgba(255, 255, 255, 0.5);
        color: var(--cthc-white);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: background 0.2s ease;
        backdrop-filter: blur(2px);
    }

    .cthc-nav:hover {
        background: var(--cthc-gold);
        border-color: var(--cthc-gold);
        color: var(--cthc-navy);
    }

    .cthc-nav-prev { left: 18px; }
    .cthc-nav-next { right: 18px; }

    /* Pagination dots */
    .cthc-pagination {
        position: absolute;
        bottom: 18px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 8px;
        z-index: 10;
    }

    .cthc-pagination .swiper-pagination-bullet {
        width: 9px;
        height: 9px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
        border-radius: 50%;
        transition: background 0.2s ease, width 0.2s ease;
    }

    .cthc-pagination .swiper-pagination-bullet-active {
        background: var(--cthc-gold);
        width: 22px;
        border-radius: 5px;
    }

    /* ===== Responsive ===== */
    @media (max-width: 991px) {
        .cthc-slide { min-height: 300px; }
        .cthc-heading { font-size: 28px; }
        .cthc-content { padding: 32px 24px; max-width: 100%; }
    }

    @media (max-width: 767px) {
        .cthc-hero { padding: 16px 10px; }
        .cthc-swiper { border-radius: 12px; }
        .cthc-slide {
            min-height: 420px;
            align-items: flex-end;
            background-position: right center;
        }
        .cthc-content {
            padding: 24px 20px 56px 20px;
        }
        .cthc-heading { font-size: 24px; }
        .cthc-text { font-size: 14px; margin-bottom: 18px; }
        .cthc-btn { padding: 11px 24px; font-size: 14px; }
        .cthc-nav { width: 36px; height: 36px; }
        .cthc-nav-prev { left: 10px; }
        .cthc-nav-next { right: 10px; }
    }

    @media (max-width: 480px) {
        .cthc-slide {
            background-image: linear-gradient(180deg, rgba(11,26,53,0.55) 0%, rgba(11,26,53,0.95) 75%),
                               var(--cthc-bg-image, none);
        }
        .cthc-content { max-width: 100%; text-align: left; }
        .cthc-heading { font-size: 21px; }
    }
</style>
@endpush

@push('scripts')
{{-- Swiper.js (only load once per page — remove if already included globally) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('#cthc-hero .cthc-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 600,
            pagination: {
                el: '.cthc-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.cthc-nav-next',
                prevEl: '.cthc-nav-prev',
            },
            a11y: { enabled: true },
        });
    });
</script>
@endpush