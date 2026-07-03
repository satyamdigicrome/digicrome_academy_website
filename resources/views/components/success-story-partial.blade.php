{{--
    SUCCESS STORIES SECTION — single-row marquee layout
    Centered heading, then ONE row of cards that auto-scrolls continuously
    from left to right, fading out at the left/right edges. Pauses on
    hover. Pure CSS animation, no external library needed.

    NAMING: every class/id is prefixed "ssst-" (Success STory) so it can't
    collide with other sections' generic class names on the same page.
--}}

<section class="ssst-area" id="ssst-success-stories">
    <div class="container">

        {{-- centered header --}}
        <div class="ssst-header ssst-reveal" data-reveal="up">
            <div class="ssst-eyebrow">
                <img loading="lazy" src="{{ asset('assets/images/inner-img/sub-title2.webp') }}"
                    alt="sub-title2" title="sub-title2">
                <span>Success Stories</span>
            </div>
            <h3 class="ssst-heading">All Real Experiences From Our Dedicated Learners</h3>
            <p class="ssst-subheading">Trusted. Proven. Loved by our learners.</p>

            <div class="ssst-review-box">
                <div class="ssst-review-image">
                    <img loading="lazy" src="{{ asset('assets/images/home-three/course-instructor.webp') }}"
                        alt="course-instructor" title="course-instructor">
                </div>
                <div class="ssst-review-content">
                    <h4 class="ssst-counter" data-count-target="250">0</h4>
                    <span class="ssst-counter-plus">+</span>
                    <p>Reviews</p>
                </div>
            </div>
        </div>

        {{--
            Single row, all stories, duplicated enough times so the CSS
            marquee loop (translateX -50% -> 0, i.e. left to right) is
            seamless and never runs out of cards at any viewport width
            or zoom level.
        --}}
        @php
            $ssstItems = $studentStories;

            $ssstCardWidth = 356; // approx card width + gap, px
            $ssstSafetyWidth = 4200; // covers ultra-wide displays + zoom-out
            $ssstHalfRepeats = 2;
            if (count($ssstItems) > 0) {
                $needed = (int) ceil($ssstSafetyWidth / (count($ssstItems) * $ssstCardWidth));
                $ssstHalfRepeats = max($ssstHalfRepeats, $needed);
            }

            /*
             * Duration is calculated from the actual scrolled distance
             * (one "half" of the track) at a fixed, slow px/second speed —
             * rather than a flat duration — so the row always crawls at
             * the same gentle pace no matter how many stories exist or
             * how many times they had to repeat to fill wide screens.
             */
            $ssstPxPerSecond = 26; // lower = slower
            $ssstHalfWidthPx = count($ssstItems) * $ssstHalfRepeats * $ssstCardWidth;
            $ssstDuration = $ssstHalfWidthPx > 0 ? max(50, (int) round($ssstHalfWidthPx / $ssstPxPerSecond)) : 90;
        @endphp

        <div class="ssst-wall ssst-reveal" data-reveal="up">
            @if (count($ssstItems))
                <div class="ssst-row">
                    <div class="ssst-row-track" style="animation-duration: {{ $ssstDuration }}s;">
                        {{-- two equal halves (for the seamless -50% loop), each half repeated
                             enough times to always overflow the viewport width --}}
                        @for ($ssstHalf = 0; $ssstHalf < 2; $ssstHalf++)
                            @for ($ssstRepeat = 0; $ssstRepeat < $ssstHalfRepeats; $ssstRepeat++)
                            @foreach ($ssstItems as $story)
                                <div class="ssst-card">
                                    <p class="ssst-card-desc">{!! $story->stoire !!}</p>
                                    <div class="ssst-card-author">
                                        <div class="ssst-author-avatar">
                                            <img loading="lazy" src="{{ asset('storage/' . $story->image) }}"
                                                alt="{{ $story->studentname }}"
                                                title="{{ $story->studentname }}"
                                                class="rounded-circle img-fluid">
                                        </div>
                                        <div class="ssst-author-content">
                                            <h5 class="ssst-author-name">{{ $story->studentname }}</h5>
                                            <p class="ssst-author-role">
                                                {{ $story->position }} at {{ $story->companyname }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endfor
                        @endfor
                    </div>
                </div>
            @endif
        </div>

    </div>
</section>

<style>
    #ssst-success-stories {
        --ssst-ink: #0f1b2d;
        --ssst-muted: #5b6b7a;
        --ssst-bg: #f6f8fa;
        --ssst-teal: #14a888;
        --ssst-teal-deep: #0d8a70;
        --ssst-amber: #f2994a;
        --ssst-card-bg: #ffffff;
        --ssst-ring: rgba(20, 168, 136, .18);
        position: relative;
        overflow: hidden;
        padding: 90px 0 100px;
        background: var(--ssst-bg);
    }

    #ssst-success-stories .container {
        position: relative;
        z-index: 1;
    }

    /* ---------- reveal-on-scroll ---------- */
    #ssst-success-stories .ssst-reveal {
        opacity: 0;
        transform: translateY(26px);
        transition: opacity .7s cubic-bezier(.22, .61, .36, 1), transform .7s cubic-bezier(.22, .61, .36, 1);
    }

    #ssst-success-stories .ssst-reveal.ssst-in-view {
        opacity: 1;
        transform: translateY(0);
    }

    /* ---------- header ---------- */
    #ssst-success-stories .ssst-header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 56px;
    }

    #ssst-success-stories .ssst-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: .82rem;
        letter-spacing: .12em;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--ssst-amber);
        margin-bottom: 14px;
    }

    #ssst-success-stories .ssst-eyebrow img {
        height: 18px;
        width: auto;
    }

    #ssst-success-stories .ssst-heading {
        font-size: 2.3rem;
        line-height: 1.25;
        color: var(--ssst-ink);
        font-weight: 800;
        margin: 0 0 14px;
    }

    #ssst-success-stories .ssst-subheading {
        font-size: 1.05rem;
        color: var(--ssst-muted);
        margin: 0 0 22px;
    }

    #ssst-success-stories .ssst-review-box {
        display: inline-flex;
        align-items: center;
        gap: 12px;
    }

    #ssst-success-stories .ssst-review-image img {
        height: 36px;
        width: auto;
    }

    #ssst-success-stories .ssst-review-content {
        display: flex;
        align-items: baseline;
        gap: 4px;
        color: var(--ssst-ink);
    }

    #ssst-success-stories .ssst-counter {
        font-size: 1.4rem;
        font-weight: 800;
        margin: 0;
        color: var(--ssst-ink);
        font-variant-numeric: tabular-nums;
    }

    #ssst-success-stories .ssst-counter-plus {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--ssst-teal-deep);
    }

    #ssst-success-stories .ssst-review-content p {
        margin: 0 0 0 6px;
        color: var(--ssst-muted);
        font-size: .9rem;
    }

    /* ---------- the scrolling row ---------- */
    #ssst-success-stories .ssst-wall {
        /* fade cards out at the left & right edges */
        -webkit-mask-image: linear-gradient(to right, transparent 0%, #000 6%, #000 94%, transparent 100%);
        mask-image: linear-gradient(to right, transparent 0%, #000 6%, #000 94%, transparent 100%);
    }

    #ssst-success-stories .ssst-row {
        overflow: hidden;
        width: 100%;
    }

    #ssst-success-stories .ssst-row-track {
        display: flex;
        gap: 24px;
        width: max-content;
        will-change: transform;
        /* slow, deliberate speed — left to right; duration set inline per content length */
        animation-name: ssst-scroll-right;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    #ssst-success-stories .ssst-row:hover .ssst-row-track {
        animation-play-state: paused;
    }

    @keyframes ssst-scroll-right {
        from {
            transform: translateX(-50%);
        }

        to {
            transform: translateX(0);
        }
    }

    /* ---------- cards ---------- */
    #ssst-success-stories .ssst-card {
        flex: 0 0 auto;
        width: 332px;
        background: var(--ssst-card-bg);
        border-radius: 16px;
        padding: 26px 24px 22px;
        box-shadow: 0 6px 18px -12px rgba(15, 27, 45, .16);
        border: 1px solid rgba(15, 27, 45, .06);
        transition: box-shadow .3s ease, border-color .3s ease, transform .3s ease;
    }

    #ssst-success-stories .ssst-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 30px -16px var(--ssst-ring);
        border-color: rgba(20, 168, 136, .28);
    }

    #ssst-success-stories .ssst-card-desc {
        color: var(--ssst-muted);
        font-size: .95rem;
        line-height: 1.7;
        margin: 0 0 20px;
        position: relative;
    }

    #ssst-success-stories .ssst-card-desc::before {
        content: '\201C';
        color: var(--ssst-teal);
        opacity: .5;
    }

    #ssst-success-stories .ssst-card-desc::after {
        content: '\201D';
        color: var(--ssst-teal);
        opacity: .5;
    }

    #ssst-success-stories .ssst-card-author {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    #ssst-success-stories .ssst-author-avatar img {
        width: 42px;
        height: 42px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 0 2px var(--ssst-teal);
    }

    #ssst-success-stories .ssst-author-name {
        margin: 0;
        font-size: .92rem;
        font-weight: 700;
        color: var(--ssst-ink);
    }

    #ssst-success-stories .ssst-author-role {
        margin: 2px 0 0;
        font-size: .8rem;
        color: var(--ssst-muted);
    }

    /* ---------- responsive ---------- */
    @media (max-width: 991px) {
        #ssst-success-stories {
            padding: 60px 0 70px;
        }

        #ssst-success-stories .ssst-heading {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 576px) {
        #ssst-success-stories .ssst-card {
            width: 268px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #ssst-success-stories .ssst-reveal {
            transition: none !important;
        }

        #ssst-success-stories .ssst-row-track {
            animation: none !important;
        }

        #ssst-success-stories .ssst-row {
            overflow-x: auto;
        }
    }
</style>

<script>
    (function () {
        // ---- scroll reveal ----
        var revealEls = document.querySelectorAll('#ssst-success-stories .ssst-reveal');
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('ssst-in-view');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach(function (el) { io.observe(el); });
        } else {
            revealEls.forEach(function (el) { el.classList.add('ssst-in-view'); });
        }

        // ---- animated counter (250+) ----
        var counterEl = document.querySelector('#ssst-success-stories .ssst-counter[data-count-target]');
        if (counterEl && 'IntersectionObserver' in window) {
            var counted = false;
            var counterIo = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting && !counted) {
                        counted = true;
                        var target = parseInt(counterEl.getAttribute('data-count-target'), 10) || 0;
                        var duration = 1200;
                        var startTime = null;

                        function step(ts) {
                            if (!startTime) startTime = ts;
                            var progress = Math.min((ts - startTime) / duration, 1);
                            var eased = 1 - Math.pow(1 - progress, 3);
                            counterEl.textContent = Math.floor(target * eased);
                            if (progress < 1) {
                                requestAnimationFrame(step);
                            } else {
                                counterEl.textContent = target;
                            }
                        }
                        requestAnimationFrame(step);
                        counterIo.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            counterIo.observe(counterEl);
        } else if (counterEl) {
            counterEl.textContent = counterEl.getAttribute('data-count-target');
        }
    })();
</script>