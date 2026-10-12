{{--
    FESTIVE GREETING — homepage card for the live festive phase: greeting,
    rotating data-science festive quotes, and two calls to action (refer a
    friend / enquire). Renders nothing outside the festive dates; the copy and
    quotes live in config/festive.php. Every class is prefixed "fest-greet".
--}}
@php
    $festive = \App\Support\FestiveSeason::current();
    $isDurga = $festive && $festive['key'] === 'durga-puja';
@endphp

@if ($festive)
    <section class="fest-greet {{ $isDurga ? 'fest-greet--durga' : 'fest-greet--diwali' }}"
        aria-label="{{ $festive['eyebrow'] }} greetings from Digicrome">
        <div class="container">
            <div class="fest-greet__card">
                <div class="fest-greet__content">
                    <span class="fest-greet__eyebrow">
                        {{ $festive['eyebrow'] }}<span class="fest-greet__eyebrow-extra"> &middot; Festive Season {{ now()->year }}</span>
                    </span>
                    <h2 class="fest-greet__title">{{ $festive['title'] }}</h2>
                    <p class="fest-greet__text">{{ $festive['text'] }}</p>

                    <figure class="fest-greet__quotes" data-fest-quotes>
                        <svg class="fest-greet__mark" viewBox="0 0 32 24" aria-hidden="true">
                            <path d="M0 24V13C0 5.6 4.4 1.2 12 0l1.4 3.4C9 4.8 7 7.6 6.8 11H13v13H0zm19 0V13c0-7.4 4.4-11.8 12-13l1 3.4C27.6 4.8 25.6 7.6 25.4 11H32v13H19z" />
                        </svg>
                        <div class="fest-greet__quote-stack">
                            @foreach ($festive['quotes'] as $i => $quote)
                                <blockquote class="fest-greet__quote {{ $i === 0 ? 'is-active' : '' }}"
                                    @if ($i !== 0) aria-hidden="true" @endif>
                                    {{ $quote }}
                                </blockquote>
                            @endforeach
                        </div>
                        @if (count($festive['quotes']) > 1)
                            <div class="fest-greet__dots" role="group" aria-label="Choose a festive quote">
                                @foreach ($festive['quotes'] as $i => $quote)
                                    <button type="button" class="fest-greet__dot"
                                        aria-label="Show quote {{ $i + 1 }} of {{ count($festive['quotes']) }}"
                                        @if ($i === 0) aria-current="true" @endif></button>
                                @endforeach
                            </div>
                        @endif
                    </figure>

                    <div class="fest-greet__actions">
                        <a href="{{ route('refer_and_earn') }}" class="fest-greet__btn fest-greet__btn--primary">
                            Gift a Friend Data Science
                        </a>
                        <button type="button" class="fest-greet__btn fest-greet__btn--ghost"
                            data-fest-enquire="{{ $festive['lead_source'] }}">
                            Start Learning This Festive Season
                        </button>
                    </div>
                </div>

                <div class="fest-greet__art" aria-hidden="true">
                    @if ($isDurga)
                        {{-- Golden chalchitra halo behind a lotus, with shiuli flowers drifting --}}
                        <svg viewBox="0 0 320 260">
                            <defs>
                                <radialGradient id="festHalo" cx="50%" cy="50%" r="50%">
                                    <stop offset="0" stop-color="#ffe9a8" stop-opacity=".55" />
                                    <stop offset="1" stop-color="#ffe9a8" stop-opacity="0" />
                                </radialGradient>
                                <linearGradient id="festPetal" x1="0" y1="1" x2="0" y2="0">
                                    <stop offset="0" stop-color="#fff8f2" />
                                    <stop offset="1" stop-color="#ff8fab" />
                                </linearGradient>
                                <linearGradient id="festPetalBack" x1="0" y1="1" x2="0" y2="0">
                                    <stop offset="0" stop-color="#ffd6df" />
                                    <stop offset="1" stop-color="#e94e77" />
                                </linearGradient>
                                <g id="festShiuli">
                                    @foreach ([0, 72, 144, 216, 288] as $angle)
                                        <ellipse cy="-4.6" rx="2.8" ry="4.4" fill="#fff" transform="rotate({{ $angle }})" />
                                    @endforeach
                                    <circle r="2.1" fill="#ff6d00" />
                                </g>
                            </defs>

                            <circle cx="160" cy="150" r="120" fill="url(#festHalo)" />
                            <g class="fest-greet__halo" stroke="#f6c453" fill="none">
                                <circle cx="160" cy="150" r="108" stroke-width="2" stroke-dasharray="2 6" />
                                <circle cx="160" cy="150" r="96" stroke-width="3" />
                                <circle cx="160" cy="150" r="62" stroke-width="1.5" opacity=".7" />
                                @for ($a = 0; $a < 360; $a += 15)
                                    <line x1="160" y1="80" x2="160" y2="58" stroke-width="2.5" stroke-linecap="round"
                                        transform="rotate({{ $a }} 160 150)" opacity=".75" />
                                @endfor
                            </g>

                            <path d="M160 214C120 202 78 206 46 226c42 6 84 2 114-12z" fill="#2e7d32" />
                            <path d="M160 214c40-12 82-8 114 12-42 6-84 2-114-12z" fill="#388e3c" />

                            <g transform="translate(160 208)">
                                @foreach ([-75, 75, -50, 50] as $angle)
                                    <path d="M0 0C-22-22-18-62 0-82C18-62 22-22 0 0z" fill="url(#festPetalBack)"
                                        transform="rotate({{ $angle }}) scale(.92)" />
                                @endforeach
                                @foreach ([-25, 25, 0] as $angle)
                                    <path d="M0 0C-22-22-18-62 0-82C18-62 22-22 0 0z" fill="url(#festPetal)"
                                        stroke="#ffc2d1" stroke-width="1" transform="rotate({{ $angle }})" />
                                @endforeach
                            </g>

                            <use href="#festShiuli" class="fest-greet__float" x="40" y="60" />
                            <use href="#festShiuli" class="fest-greet__float fest-greet__float--late" x="282" y="80" />
                            <use href="#festShiuli" class="fest-greet__float" x="268" y="196" />
                            <use href="#festShiuli" class="fest-greet__float fest-greet__float--late" x="58" y="168" />
                        </svg>
                    @else
                        {{-- A diya under a string of festive lights --}}
                        <svg viewBox="0 0 320 260">
                            <defs>
                                <radialGradient id="festFlameGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0" stop-color="#ffc135" stop-opacity=".6" />
                                    <stop offset="1" stop-color="#ffc135" stop-opacity="0" />
                                </radialGradient>
                                <linearGradient id="festFlame" x1="0" y1="1" x2="0" y2="0">
                                    <stop offset="0" stop-color="#ff6d00" />
                                    <stop offset=".55" stop-color="#ffb300" />
                                    <stop offset="1" stop-color="#ffe082" />
                                </linearGradient>
                                <linearGradient id="festClay" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0" stop-color="#e8711a" />
                                    <stop offset="1" stop-color="#8d2c00" />
                                </linearGradient>
                            </defs>

                            <path d="M0 30Q160 90 320 30" stroke="#d4a017" stroke-width="1.5" fill="none" />
                            @foreach ([[32, 40.8], [64, 49.2], [96, 55.2], [128, 58.8], [160, 60], [192, 58.8], [224, 55.2], [256, 49.2], [288, 40.8]] as $i => [$x, $y])
                                <g class="fest-greet__bulb" style="animation-delay: {{ ($i % 3) * 0.6 }}s">
                                    <circle cx="{{ $x }}" cy="{{ $y + 7 }}" r="9" fill="{{ ['#ffc135', '#ff7a59', '#ff9ecb'][$i % 3] }}" opacity=".3" />
                                    <ellipse cx="{{ $x }}" cy="{{ $y + 7 }}" rx="3.4" ry="4.4" fill="{{ ['#ffe082', '#ffab91', '#ffc1e3'][$i % 3] }}" />
                                </g>
                            @endforeach

                            <circle class="fest-greet__glow" cx="160" cy="132" r="78" fill="url(#festFlameGlow)" />

                            <path d="M160 156v-12" stroke="#4e342e" stroke-width="3" stroke-linecap="round" />
                            <g class="fest-greet__flame">
                                <path d="M160 82C139 112 139 136 160 146C181 136 181 112 160 82z" fill="url(#festFlame)" />
                                <path d="M160 108C151 124 153 137 160 141C167 137 169 124 160 108z" fill="#fffde7" />
                            </g>

                            <path d="M58 160C68 222 252 222 262 160z" fill="url(#festClay)" />
                            <ellipse cx="160" cy="160" rx="102" ry="16" fill="#f59a3d" />
                            <ellipse cx="160" cy="160" rx="88" ry="10" fill="#6d2a00" />
                            <path d="M84 186q76 26 152 0" stroke="#ffc135" stroke-width="2.5" fill="none" stroke-dasharray="1 9" stroke-linecap="round" />
                            <path d="M96 200q64 18 128 0" stroke="#ffc135" stroke-width="1.5" fill="none" opacity=".7" />

                            <path class="fest-greet__spark" d="M52 112l2.5 7.5 7.5 2.5-7.5 2.5-2.5 7.5-2.5-7.5-7.5-2.5 7.5-2.5z" fill="#ffc135" />
                            <path class="fest-greet__spark fest-greet__spark--late" d="M272 120l2 6 6 2-6 2-2 6-2-6-6-2 6-2z" fill="#ffe082" />
                            <path class="fest-greet__spark" d="M250 236l1.5 4.5 4.5 1.5-4.5 1.5-1.5 4.5-1.5-4.5-4.5-1.5 4.5-1.5z" fill="#ffc135" />
                        </svg>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <style>
        .fest-greet {
            --fg-accent: #ffc135;
            --fg-ink: #fff9ee;
            --fg-muted: rgba(255, 249, 238, .82);
            padding: 36px 0 8px;
        }

        .fest-greet--durga {
            --fg-accent: #f6c453;
            --fg-bg:
                radial-gradient(circle at 85% 30%, rgba(255, 214, 120, .22), transparent 42%),
                radial-gradient(rgba(255, 255, 255, .07) 1.2px, transparent 1.6px) 0 0 / 18px 18px,
                linear-gradient(135deg, #7f0d18 0%, #b3121f 55%, #d84315 100%);
            /* The red border of a white "laal paar" saree, flipped onto red */
            --fg-border: linear-gradient(#f6c453 0 2px, #fff 2px 7px, #f6c453 7px 9px, transparent 9px);
        }

        .fest-greet--diwali {
            --fg-bg:
                radial-gradient(circle at 80% 35%, rgba(255, 193, 53, .3), transparent 45%),
                radial-gradient(rgba(255, 225, 150, .16) 1px, transparent 1.6px) 0 0 / 22px 22px,
                linear-gradient(135deg, #100c31 0%, #1a1447 50%, #2b1a68 100%);
            --fg-border: linear-gradient(#ffc135 0 2px, transparent 2px 5px, rgba(255, 193, 53, .55) 5px 6px, transparent 6px);
        }

        .fest-greet__card {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(0, .65fr);
            align-items: center;
            gap: 24px;
            padding: 44px 48px;
            border-radius: 24px;
            overflow: hidden;
            color: var(--fg-ink);
            background: var(--fg-bg);
            box-shadow: 0 22px 50px -24px rgba(26, 20, 71, .55);
        }

        .fest-greet__card::before,
        .fest-greet__card::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            height: 9px;
            background: var(--fg-border);
        }

        .fest-greet__card::before { top: 12px; }
        .fest-greet__card::after { bottom: 12px; transform: scaleY(-1); }

        .fest-greet__content { position: relative; z-index: 1; }

        .fest-greet__eyebrow {
            display: inline-block;
            margin-bottom: 14px;
            padding: 6px 14px;
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 999px;
            background: rgba(255, 255, 255, .1);
            color: var(--fg-accent);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .6px;
            text-transform: uppercase;
        }

        .fest-greet__title {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(24px, 3vw, 36px);
            line-height: 1.2;
            font-weight: 800;
            text-transform: none;
            text-wrap: balance;
        }

        .fest-greet__text {
            max-width: 60ch;
            margin: 0 0 20px;
            color: var(--fg-muted);
            font-size: 16px;
            line-height: 1.6;
        }

        .fest-greet__quotes {
            position: relative;
            margin: 0 0 24px;
            padding: 18px 20px 14px 58px;
            border-left: 3px solid var(--fg-accent);
            border-radius: 0 14px 14px 0;
            background: rgba(255, 255, 255, .08);
        }

        .fest-greet__mark {
            position: absolute;
            left: 18px;
            top: 20px;
            width: 26px;
            fill: var(--fg-accent);
            opacity: .9;
        }

        /* Every quote shares one grid cell, so the box is always as tall as
           the longest quote and nothing below it moves as they rotate. */
        .fest-greet__quote-stack { display: grid; }

        .fest-greet__quote {
            grid-area: 1 / 1;
            margin: 0;
            padding: 0;
            border: 0;
            color: #fff;
            font-size: 18px;
            font-style: italic;
            line-height: 1.55;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity .5s ease, transform .5s ease, visibility 0s linear .5s;
        }

        .fest-greet__quote.is-active {
            opacity: 1;
            visibility: visible;
            transform: none;
            transition: opacity .5s ease, transform .5s ease;
        }

        .fest-greet__dots {
            display: flex;
            gap: 4px;
            margin-top: 8px;
        }

        /* 24px hit area, 8px visible dot */
        .fest-greet__dot {
            position: relative;
            width: 24px;
            height: 24px;
            padding: 0;
            border: 0;
            background: transparent;
            cursor: pointer;
        }

        .fest-greet__dot::before {
            content: "";
            position: absolute;
            left: 8px;
            top: 8px;
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .45);
            transition: width .3s ease, background .3s ease;
        }

        .fest-greet__dot[aria-current="true"]::before {
            width: 16px;
            left: 4px;
            background: var(--fg-accent);
        }

        .fest-greet__dot:focus-visible {
            outline: 2px solid var(--fg-accent);
            outline-offset: 0;
            border-radius: 6px;
        }

        .fest-greet__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .fest-greet__btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 24px;
            border-radius: 999px;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.2;
            text-align: center;
            cursor: pointer;
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
        }

        .fest-greet__btn--primary {
            border: 2px solid var(--fg-accent);
            background: var(--fg-accent);
            color: #1a1447;
            box-shadow: 0 8px 22px -8px rgba(255, 193, 53, .8);
        }

        .fest-greet__btn--primary:hover {
            color: #1a1447;
            transform: translateY(-2px);
            box-shadow: 0 12px 26px -8px rgba(255, 193, 53, .95);
        }

        .fest-greet__btn--ghost {
            border: 2px solid rgba(255, 255, 255, .7);
            background: transparent;
            color: #fff;
        }

        .fest-greet__btn--ghost:hover {
            background: rgba(255, 255, 255, .12);
            transform: translateY(-2px);
        }

        .fest-greet__btn:focus-visible {
            outline: 3px solid #fff;
            outline-offset: 3px;
        }

        .fest-greet__art svg {
            display: block;
            width: 100%;
            max-width: 400px;
            height: auto;
            margin: 0 auto;
            overflow: visible;
        }

        /* ---------- Art motion ---------- */
        .fest-greet__halo {
            transform-origin: 160px 150px;
            animation: festGreetSpin 60s linear infinite;
        }

        .fest-greet__float { animation: festGreetFloat 5s ease-in-out infinite; }
        .fest-greet__float--late { animation-delay: -2.5s; }

        .fest-greet__flame {
            transform-origin: 160px 146px;
            animation: festGreetFlicker 1.6s ease-in-out infinite alternate;
        }

        .fest-greet__glow {
            transform-origin: 160px 132px;
            animation: festGreetPulse 2.2s ease-in-out infinite alternate;
        }

        .fest-greet__bulb { animation: festGreetTwinkle 1.8s ease-in-out infinite alternate; }

        .fest-greet__spark {
            transform-box: fill-box;
            transform-origin: center;
            animation: festGreetSpark 2.4s ease-in-out infinite;
        }

        .fest-greet__spark--late { animation-delay: -1.2s; }

        @keyframes festGreetSpin { to { transform: rotate(360deg); } }

        @keyframes festGreetFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        @keyframes festGreetFlicker {
            0% { transform: scale(1, 1) skewX(0deg); }
            40% { transform: scale(.96, 1.05) skewX(-2deg); }
            100% { transform: scale(1.03, .95) skewX(2deg); }
        }

        @keyframes festGreetPulse {
            from { opacity: .7; transform: scale(.94); }
            to { opacity: 1; transform: scale(1.06); }
        }

        @keyframes festGreetTwinkle {
            from { opacity: .45; }
            to { opacity: 1; }
        }

        @keyframes festGreetSpark {
            0%, 100% { opacity: .2; transform: scale(.6); }
            50% { opacity: 1; transform: scale(1.1); }
        }

        @media (max-width: 991.98px) {
            .fest-greet__card {
                grid-template-columns: 1fr;
                padding: 36px 24px 32px;
                text-align: left;
            }

            .fest-greet__art {
                order: -1;
            }

            .fest-greet__art svg {
                max-width: 220px;
            }

            /* The homepage section after the hero keeps ~190px of top space
               to sit clear of the hero's spill; the card does that job now,
               and the section's own title already brings ~75px of spacing. */
            .fest-greet ~ .feature-area.style-one {
                margin-top: 0;
                padding-top: 0;
            }
        }

        @media (max-width: 575.98px) {
            .fest-greet {
                padding: 24px 0 4px;
            }

            .fest-greet__card {
                gap: 8px;
                padding: 32px 18px 28px;
                border-radius: 18px;
            }

            .fest-greet__art svg {
                max-width: 180px;
            }

            .fest-greet__eyebrow-extra {
                display: none;
            }

            .fest-greet__quotes {
                padding: 16px 14px 10px 46px;
            }

            .fest-greet__mark {
                left: 14px;
                width: 22px;
            }

            .fest-greet__quote {
                font-size: 16px;
            }

            .fest-greet__btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .fest-greet__halo,
            .fest-greet__float,
            .fest-greet__flame,
            .fest-greet__glow,
            .fest-greet__bulb,
            .fest-greet__spark {
                animation: none;
            }

            .fest-greet__quote,
            .fest-greet__quote.is-active {
                transition: none;
            }
        }
    </style>

    <script>
        (function () {
            var root = document.querySelector('[data-fest-quotes]');
            if (root) {
                var quotes = root.querySelectorAll('.fest-greet__quote');
                var dots = root.querySelectorAll('.fest-greet__dot');
                var current = 0;
                var timer = null;
                var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

                function show(index) {
                    quotes[current].classList.remove('is-active');
                    quotes[current].setAttribute('aria-hidden', 'true');
                    dots[current].removeAttribute('aria-current');
                    current = (index + quotes.length) % quotes.length;
                    quotes[current].classList.add('is-active');
                    quotes[current].removeAttribute('aria-hidden');
                    dots[current].setAttribute('aria-current', 'true');
                }

                function start() {
                    if (reduceMotion || timer || quotes.length < 2) return;
                    timer = setInterval(function () { show(current + 1); }, 5500);
                }

                function stop() {
                    clearInterval(timer);
                    timer = null;
                }

                dots.forEach(function (dot, i) {
                    dot.addEventListener('click', function () {
                        // Picking a quote by hand stops the auto-rotation for good.
                        reduceMotion = true;
                        stop();
                        root.setAttribute('aria-live', 'polite');
                        show(i);
                    });
                });

                root.addEventListener('mouseenter', stop);
                root.addEventListener('mouseleave', start);
                root.addEventListener('focusin', stop);
                root.addEventListener('focusout', start);
                start();
            }

            // On phones and tablets the theme gives the homepage hero a fixed
            // height that its content outgrows, so the hero buttons spill past
            // its bottom edge. Start the card below the spill, not under it.
            var section = document.querySelector('.fest-greet');
            var above = section && section.previousElementSibling;
            if (above) {
                var narrow = window.matchMedia('(max-width: 991.98px)');
                var clearSpill = function () {
                    var spill = narrow.matches ? above.scrollHeight - above.clientHeight : 0;
                    section.style.marginTop = spill > 0 ? spill + 'px' : '';
                };
                var queued = false;
                var queueClear = function () {
                    if (queued) return;
                    queued = true;
                    requestAnimationFrame(function () { queued = false; clearSpill(); });
                };

                clearSpill();
                // The spill changes as the hero's images and fonts arrive, so
                // follow its content rather than waiting for the load event.
                if ('ResizeObserver' in window) {
                    var watcher = new ResizeObserver(queueClear);
                    Array.prototype.forEach.call(above.children, function (child) { watcher.observe(child); });
                } else {
                    window.addEventListener('load', clearSpill);
                }
                window.addEventListener('resize', queueClear);
            }

            var enquire = document.querySelector('[data-fest-enquire]');
            if (enquire) {
                enquire.addEventListener('click', function () {
                    if (typeof openModal === 'function') {
                        openModal(enquire.getAttribute('data-fest-enquire'));
                    }
                });
            }
        })();
    </script>
@endif
