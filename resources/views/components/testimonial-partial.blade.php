{{--
    STUDENT TESTIMONIALS — horizontal marquee layout
    Matches the reference: centered pill + heading + subtitle, then a
    single row of small cards that auto-scrolls horizontally (right to
    left), slowly, pausing on hover. Pure CSS animation, no external
    library needed.

    NAMING: everything is prefixed "mtst-" (Meritshot-style TeStimonial)
    so it is guaranteed not to collide with any other testimonial /
    success-story section already on the page (which use "ssst-").
--}}

<section class="mtst-area" id="mtst-testimonials">
    <div class="container-fluid">

        {{-- centered header --}}
        <div class="mtst-header mtst-reveal" data-reveal="up">
            <div class="mtst-badge">
                <img width="22" height="18" loading="lazy" src="{{ asset('assets/images/home-two/subtitle-icon.webp') }}"
                    alt="subtitle-icon" title="subtitle-icon">
                <span>Testimonials</span>
            </div>
            <h3 class="mtst-heading">What Students Say About Digicrome</h3>
            <p class="mtst-subheading">
                Students love the hands-on learning, expert mentors, and real-world projects
                that make the Digicrome experience truly exceptional.
            </p>
            <div class="mtst-cta">
                <a href="javascript:void(0);" onclick="openModal()">
                    Get Started
                    <i class="flaticon flaticon-right-arrow"></i>
                </a>
            </div>
        </div>

        {{--
            Single row, all testimonials, duplicated enough times so the
            CSS marquee loop (translateX 0 -> -50%) is seamless and never
            runs out of cards at any viewport width or zoom level.
        --}}
        @php
            $mtstItems = $testimonials;

            $mtstCardWidth = 302; // approx card width + gap, px
            $mtstSafetyWidth = 4200; // covers ultra-wide displays + zoom-out
            $mtstHalfRepeats = 2;
            if (count($mtstItems) > 0) {
                $needed = (int) ceil($mtstSafetyWidth / (count($mtstItems) * $mtstCardWidth));
                $mtstHalfRepeats = max($mtstHalfRepeats, $needed);
            }
        @endphp

        <div class="mtst-wall mtst-reveal" data-reveal="up">
            @if (count($mtstItems))
                <div class="mtst-row mtst-row-left">
                    <div class="mtst-row-track">
                        {{-- two equal halves (for the seamless -50% loop), each half repeated
                             enough times to always overflow the viewport width --}}
                        @for ($mtstHalf = 0; $mtstHalf < 2; $mtstHalf++)
                            @for ($mtstRepeat = 0; $mtstRepeat < $mtstHalfRepeats; $mtstRepeat++)
                            @foreach ($mtstItems as $testimonial)
                                <div class="mtst-card">

                                    <div class="mtst-card-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($testimonial->rating))
                                                <i class="fa-solid fa-star"></i>
                                            @elseif ($i == ceil($testimonial->rating) && $testimonial->rating != floor($testimonial->rating))
                                                <i class="fa-solid fa-star-half-stroke fa-fw"></i>
                                            @else
                                                <i class="fa-regular fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>

                                    <p class="mtst-card-desc">&ldquo;{{ $testimonial->review }}&rdquo;</p>

                                    <div class="mtst-card-footer">
                                        <div class="mtst-author-avatar">
                                            <img loading="lazy" src="{{ asset('storage/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->name }}" title="{{ $testimonial->name }}">
                                        </div>
                                        <div class="mtst-author-content">
                                            <h5 class="mtst-author-name">{{ $testimonial->name }}</h5>
                                            <p class="mtst-author-role">{{ $testimonial->profession }}</p>
                                        </div>
                                    </div>

                                    @if (!empty($testimonial->tagline))
                                        <div class="mtst-card-tag">
                                            <i class="fa-solid fa-check"></i>
                                            <span>{{ $testimonial->tagline }}</span>
                                        </div>
                                    @endif

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
    #mtst-testimonials {
        --mtst-ink: #10203a;
        --mtst-muted: #6b7686;
        --mtst-bg: #ffffff;
        --mtst-badge-bg: rgba(30, 194, 142, .1);
        --mtst-accent: #1ec28e;
        --mtst-accent-deep: #159e73;
        --mtst-gold: #f4b400;
        --mtst-card-bg: #ffffff;
        --mtst-ring: rgba(30, 194, 142, .16);
        position: relative;
        overflow: hidden;
        padding: 80px 0 90px;
        background: var(--mtst-bg);
    }

    /* ---------- reveal-on-scroll ---------- */
    #mtst-testimonials .mtst-reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity .7s cubic-bezier(.22, .61, .36, 1), transform .7s cubic-bezier(.22, .61, .36, 1);
    }

    #mtst-testimonials .mtst-reveal.mtst-in-view {
        opacity: 1;
        transform: translateY(0);
    }

    /* ---------- header ---------- */
    #mtst-testimonials .mtst-header {
        text-align: center;
        max-width: 620px;
        margin: 0 auto 46px;
        padding: 0 20px;
    }

    #mtst-testimonials .mtst-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: .78rem;
        letter-spacing: .06em;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--mtst-accent-deep);
        background: var(--mtst-badge-bg);
        border-radius: 18px;
        padding: 6px 16px;
        margin-bottom: 18px;
    }

    #mtst-testimonials .mtst-badge img {
        height: 15px;
        width: auto;
    }

    #mtst-testimonials .mtst-heading {
        font-size: 2.2rem;
        line-height: 1.28;
        color: var(--mtst-ink);
        font-weight: 800;
        margin: 0 0 14px;
    }

    #mtst-testimonials .mtst-subheading {
        font-size: 1rem;
        color: var(--mtst-muted);
        line-height: 1.65;
        margin: 0 0 24px;
    }

    #mtst-testimonials .mtst-cta a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--mtst-accent);
        color: #fff;
        font-weight: 700;
        font-size: .85rem;
        letter-spacing: .04em;
        text-transform: uppercase;
        padding: 12px 26px;
        border-radius: 30px;
        text-decoration: none;
        transition: background .25s ease, transform .25s ease, box-shadow .25s ease;
    }

    #mtst-testimonials .mtst-cta a:hover {
        background: var(--mtst-accent-deep);
        transform: translateY(-2px);
        box-shadow: 0 12px 22px -10px var(--mtst-ring);
    }

    /* ---------- the scrolling wall ---------- */
    #mtst-testimonials .mtst-wall {
        /* fade cards out at the left & right edges */
        -webkit-mask-image: linear-gradient(to right, transparent 0%, #000 6%, #000 94%, transparent 100%);
        mask-image: linear-gradient(to right, transparent 0%, #000 6%, #000 94%, transparent 100%);
    }

    #mtst-testimonials .mtst-row {
        overflow: hidden;
        width: 100%;
    }

    #mtst-testimonials .mtst-row-track {
        display: flex;
        gap: 22px;
        width: max-content;
        will-change: transform;
    }

    /* slow, deliberate speed as requested — not fast */
    #mtst-testimonials .mtst-row-left .mtst-row-track {
        animation: mtst-scroll-left 70s linear infinite;
    }

    /* stop completely on hover */
    #mtst-testimonials .mtst-row:hover .mtst-row-track {
        animation-play-state: paused;
    }

    @keyframes mtst-scroll-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ---------- small cards ---------- */
    #mtst-testimonials .mtst-card {
        flex: 0 0 auto;
        width: 280px;
        background: var(--mtst-card-bg);
        border-radius: 14px;
        padding: 20px 20px 18px;
        box-shadow: 0 6px 16px -12px rgba(16, 32, 58, .18);
        border: 1px solid rgba(16, 32, 58, .06);
        transition: box-shadow .3s ease, border-color .3s ease, transform .3s ease;
    }

    #mtst-testimonials .mtst-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 26px -14px var(--mtst-ring);
        border-color: rgba(30, 194, 142, .3);
    }

    #mtst-testimonials .mtst-card-rating {
        color: var(--mtst-gold);
        font-size: .78rem;
        letter-spacing: 2px;
        margin-bottom: 10px;
        text-shadow: 0 0 6px rgba(244, 180, 0, .35);
    }

    #mtst-testimonials .mtst-card-desc {
        color: var(--mtst-muted);
        font-size: .86rem;
        line-height: 1.55;
        margin: 0 0 16px;
        min-height: 62px;
    }

    #mtst-testimonials .mtst-card-footer {
        display: flex;
        align-items: center;
        gap: 10px;
        padding-top: 12px;
        border-top: 1px dashed rgba(16, 32, 58, .12);
        margin-bottom: 10px;
    }

    #mtst-testimonials .mtst-author-avatar img {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 0 2px var(--mtst-accent);
    }

    #mtst-testimonials .mtst-author-name {
        margin: 0;
        font-size: .86rem;
        font-weight: 700;
        color: var(--mtst-ink);
    }

    #mtst-testimonials .mtst-author-role {
        margin: 1px 0 0;
        font-size: .74rem;
        color: var(--mtst-muted);
    }

    #mtst-testimonials .mtst-card-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(30, 194, 142, .1);
        color: var(--mtst-accent-deep);
        font-size: .72rem;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
    }

    #mtst-testimonials .mtst-card-tag i {
        font-size: .65rem;
    }

    /* ---------- responsive ---------- */
    @media (max-width: 768px) {
        #mtst-testimonials {
            padding: 56px 0 64px;
        }

        #mtst-testimonials .mtst-heading {
            font-size: 1.7rem;
        }

        #mtst-testimonials .mtst-card {
            width: 240px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #mtst-testimonials .mtst-reveal {
            transition: none !important;
        }

        #mtst-testimonials .mtst-row-track {
            animation: none !important;
        }

        #mtst-testimonials .mtst-row {
            overflow-x: auto;
        }
    }
</style>

<script>
    (function () {
        // ---- scroll reveal ----
        var revealEls = document.querySelectorAll('#mtst-testimonials .mtst-reveal');
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('mtst-in-view');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach(function (el) { io.observe(el); });
        } else {
            revealEls.forEach(function (el) { el.classList.add('mtst-in-view'); });
        }
    })();
</script>