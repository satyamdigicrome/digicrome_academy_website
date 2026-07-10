{{--
    ===========================================================
    CORPORATE TRAINING — STUDENT GALLERY SECTION
    ===========================================================
    Drop this @include (or paste this block) right after your
    team section on the corporate-services page.

    Deliberately NOT built like the team section. Where the team
    section is a grid of cards you browse, this is a single quiet
    cinematic frame — one full-bleed photo at a time, autoplaying,
    with a slim progress rail instead of dots or arrows fighting
    for attention. The idea: let the training photos speak, don't
    decorate around them.

    Uses Swiper.js (loaded via CDN below — remove the two <link>/
    <script> tags if you already load Swiper elsewhere on the page,
    to avoid loading it twice).

    All classes are prefixed "ctsg-" (Corporate Training Student
    Gallery) so nothing collides with the team section or the
    rest of the page.

    TO CUSTOMIZE:
    - Replace $studentGallery below with real photos + captions
      (or pass it in from your controller — same array shape).
    - Recommended images: wide/landscape, min 1600x900px.
    ===========================================================
--}}

@php
    // Replace with real data, or pass $studentGallery in from the controller.
    $studentGallery = $studentGallery ?? [
        [
            'image' => 'https://picsum.photos/seed/ctsg-batch1/1600/900',
            'title' => 'Full Stack Batch, Final Sprint',
            'description' => 'Twenty-two trainees shipping their capstone projects in the last week of the program.',
        ],
        [
            'image' => 'https://picsum.photos/seed/ctsg-cloud2/1600/900',
            'title' => 'Hands-on Cloud Workshop',
            'description' => 'A live AWS deployment session — everyone pushing their own build to production.',
        ],
        [
            'image' => 'https://picsum.photos/seed/ctsg-mock3/1600/900',
            'title' => 'Mock Interview Day',
            'description' => 'Trainees running technical interviews with each other before facing real hiring panels.',
        ],
        [
            'image' => 'https://picsum.photos/seed/ctsg-present4/1600/900',
            'title' => 'Group Project Presentations',
            'description' => 'Teams walking corporate mentors through the products they built over six weeks.',
        ],
        [
            'image' => 'https://picsum.photos/seed/ctsg-cert5/1600/900',
            'title' => 'Certification Day',
            'description' => 'The last session of every batch — where training turns into a credential.',
        ],
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

{{-- Swiper — remove these two tags if already loaded elsewhere on the page --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<section class="ctsg-section" id="ctsg-gallery">
    <div class="ctsg-container">

        <div class="ctsg-header">
            <span class="ctsg-eyebrow">Student Gallery</span>
            <h2 class="ctsg-heading">Learning, in the room</h2>
            <p class="ctsg-sub">
                A quiet look at what actually happens in a Digicrome batch —
                no staged shots, just the work.
            </p>
        </div>

        <div class="ctsg-frame">
            <div class="swiper ctsg-swiper">
                <div class="swiper-wrapper">
                    @foreach ($studentGallery as $slide)
                        <div class="swiper-slide">
                            <div class="ctsg-slide">
                                <img
                                    src="{{ $slide['image'] }}"
                                    alt="{{ $slide['title'] }}"
                                    class="ctsg-image"
                                    loading="lazy"
                                >
                                <div class="ctsg-scrim"></div>
                                <div class="ctsg-caption">
                                    <h3 class="ctsg-caption-title">{{ $slide['title'] }}</h3>
                                    <p class="ctsg-caption-desc">{{ $slide['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="ctsg-controls">
                <button type="button" class="ctsg-arrow ctsg-arrow-prev" aria-label="Previous photo">
                    <svg viewBox="0 0 24 24" width="18" height="18"><path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>

                <div class="ctsg-rail">
                    @foreach ($studentGallery as $i => $slide)
                        <span class="ctsg-rail-seg" data-index="{{ $i }}"><i></i></span>
                    @endforeach
                </div>

                <button type="button" class="ctsg-arrow ctsg-arrow-next" aria-label="Next photo">
                    <svg viewBox="0 0 24 24" width="18" height="18"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>

    </div>
</section>

<style>
    #ctsg-gallery {
        --ctsg-ink: #1b2a4a;
        --ctsg-ink-soft: #6b7280;
        --ctsg-gold: #c89b3c;
        --ctsg-bg: #faf8f5;
        --ctsg-rail-track: rgba(255,255,255,0.28);
    }

    #ctsg-gallery.ctsg-section {
        background: var(--ctsg-bg);
        padding: 96px 24px 104px;
    }

    #ctsg-gallery .ctsg-container {
        max-width: 1160px;
        margin: 0 auto;
    }

    #ctsg-gallery .ctsg-header {
        max-width: 560px;
        margin: 0 0 48px;
    }

    #ctsg-gallery .ctsg-eyebrow {
        display: inline-block;
        font-family: 'Inter', sans-serif;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--ctsg-gold);
        margin-bottom: 14px;
    }

    #ctsg-gallery .ctsg-heading {
        font-family: 'Fraunces', serif;
        font-optical-sizing: auto;
        font-weight: 600;
        font-size: clamp(28px, 3.6vw, 40px);
        line-height: 1.15;
        color: var(--ctsg-ink);
        margin: 0 0 14px;
        letter-spacing: -0.01em;
    }

    #ctsg-gallery .ctsg-sub {
        font-family: 'Inter', sans-serif;
        font-size: 15.5px;
        line-height: 1.6;
        color: var(--ctsg-ink-soft);
        margin: 0;
    }

    #ctsg-gallery .ctsg-frame {
        position: relative;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 30px 60px -24px rgba(27, 42, 74, 0.28);
    }

    #ctsg-gallery .ctsg-swiper {
        width: 100%;
        aspect-ratio: 21 / 10;
        border-radius: 22px;
        overflow: hidden;
    }

    #ctsg-gallery .ctsg-slide {
        position: relative;
        width: 100%;
        height: 100%;
    }

    #ctsg-gallery .ctsg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    #ctsg-gallery .ctsg-scrim {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(15,20,35,0) 45%, rgba(15,20,35,0.75) 100%);
        pointer-events: none;
    }

    #ctsg-gallery .ctsg-caption {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 40px 44px 34px;
        color: #fff;
    }

    #ctsg-gallery .ctsg-caption-title {
        font-family: 'Fraunces', serif;
        font-weight: 600;
        font-size: clamp(19px, 2.2vw, 25px);
        margin: 0 0 6px;
        letter-spacing: -0.01em;
    }

    #ctsg-gallery .ctsg-caption-desc {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        line-height: 1.55;
        max-width: 480px;
        margin: 0;
        color: rgba(255,255,255,0.82);
    }

    /* Quiet crossfade — no slide/parallax motion */
    #ctsg-gallery .swiper-slide {
        opacity: 0 !important;
        transition: opacity 900ms ease !important;
    }
    #ctsg-gallery .swiper-slide-active {
        opacity: 1 !important;
    }

    #ctsg-gallery .ctsg-controls {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 0 24px 18px;
        z-index: 3;
    }

    #ctsg-gallery .ctsg-arrow {
        flex: 0 0 auto;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,0.4);
        background: rgba(255,255,255,0.08);
        backdrop-filter: blur(6px);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background .25s ease, transform .2s ease;
    }

    #ctsg-gallery .ctsg-arrow:hover {
        background: rgba(255,255,255,0.2);
        transform: scale(1.05);
    }

    #ctsg-gallery .ctsg-rail {
        flex: 1;
        display: flex;
        gap: 8px;
    }

    #ctsg-gallery .ctsg-rail-seg {
        flex: 1;
        height: 2px;
        background: var(--ctsg-rail-track);
        border-radius: 2px;
        overflow: hidden;
        cursor: pointer;
    }

    #ctsg-gallery .ctsg-rail-seg i {
        display: block;
        height: 100%;
        width: 0%;
        background: var(--ctsg-gold);
        border-radius: 2px;
    }

    #ctsg-gallery .ctsg-rail-seg.ctsg-seg-done i {
        width: 100%;
        transition: none;
    }

    #ctsg-gallery .ctsg-rail-seg.ctsg-seg-active i {
        transition: width linear;
    }

    @media (max-width: 768px) {
        #ctsg-gallery.ctsg-section { padding: 64px 16px 72px; }
        #ctsg-gallery .ctsg-swiper { aspect-ratio: 4 / 5; }
        #ctsg-gallery .ctsg-caption { padding: 28px 22px 24px; }
        #ctsg-gallery .ctsg-caption-desc { max-width: 100%; }
    }

    @media (prefers-reduced-motion: reduce) {
        #ctsg-gallery .swiper-slide,
        #ctsg-gallery .ctsg-rail-seg i {
            transition: none !important;
        }
    }
</style>

<script>
(function () {
    if (typeof Swiper === 'undefined') return;

    var AUTOPLAY_DELAY = 4200;
    var segs = Array.from(document.querySelectorAll('#ctsg-gallery .ctsg-rail-seg'));

    function setActiveSeg(index) {
        segs.forEach(function (seg, i) {
            var bar = seg.querySelector('i');
            seg.classList.remove('ctsg-seg-active', 'ctsg-seg-done');
            bar.style.transition = 'none';
            bar.style.width = '0%';
            if (i < index) {
                seg.classList.add('ctsg-seg-done');
            }
        });
        var current = segs[index];
        if (!current) return;
        var bar = current.querySelector('i');
        current.classList.add('ctsg-seg-active');
        // Force reflow so the transition restarts cleanly on repeat slides
        requestAnimationFrame(function () {
            bar.style.transition = 'width ' + AUTOPLAY_DELAY + 'ms linear';
            bar.style.width = '100%';
        });
    }

    var swiper = new Swiper('#ctsg-gallery .ctsg-swiper', {
        loop: true,
        speed: 900,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: {
            delay: AUTOPLAY_DELAY,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: '#ctsg-gallery .ctsg-arrow-next',
            prevEl: '#ctsg-gallery .ctsg-arrow-prev',
        },
        keyboard: { enabled: true },
        a11y: { enabled: true },
        on: {
            slideChangeTransitionStart: function (sw) {
                setActiveSeg(sw.realIndex);
            },
            init: function (sw) {
                setActiveSeg(sw.realIndex);
            },
        },
    });

    segs.forEach(function (seg, i) {
        seg.addEventListener('click', function () {
            swiper.slideToLoop(i);
        });
    });
})();
</script>