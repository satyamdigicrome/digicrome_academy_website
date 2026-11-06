{{--
    FESTIVE BANNER — the homepage banner above the hero. The whole banner is
    one button: clicking or tapping it opens the enquiry form, tagged with the
    phase's lead source. The artwork comes from config/festive.php, so it can
    be swapped for a designer's banner without touching this file. Renders
    nothing outside the festive dates.
--}}
@php
    $festive = \App\Support\FestiveSeason::current();
    $banner = $festive['banner'] ?? null;
    $countdown = $festive['countdown'] ?? null;
    // Fixed end (epoch ms) when configured; otherwise the script counts down
    // to the end of the current day in India time.
    $countdownEnds = !empty($countdown['ends'])
        ? \Illuminate\Support\Carbon::parse($countdown['ends'], 'Asia/Kolkata')->getTimestampMs()
        : null;
@endphp

@if ($banner)
    {{-- The banner is the first thing painted, so it is the page's LCP image:
         preload only the variant this screen will actually use. --}}
    @prepend('styles')
        <link rel="preload" as="image" href="{{ asset($banner['mobile']['src']) }}"
            media="(max-width: 767.98px)" fetchpriority="high">
        <link rel="preload" as="image" href="{{ asset($banner['desktop']['src']) }}"
            media="(min-width: 768px)" fetchpriority="high">
    @endprepend

    <section class="fest-banner" aria-label="{{ $festive['eyebrow'] }} banner">
        <div class="container">
            <button type="button" class="fest-banner__frame" data-fest-banner="{{ $festive['lead_source'] }}">
                <picture class="fest-banner__picture">
                    <source media="(min-width: 768px)" srcset="{{ asset($banner['desktop']['src']) }}"
                        width="{{ $banner['desktop']['width'] }}" height="{{ $banner['desktop']['height'] }}">
                    <img class="fest-banner__img" src="{{ asset($banner['mobile']['src']) }}"
                        width="{{ $banner['mobile']['width'] }}" height="{{ $banner['mobile']['height'] }}"
                        alt="{{ $banner['alt'] }}" fetchpriority="high" loading="eager" decoding="async">
                </picture>
            </button>

            @if ($countdown)
                <div class="fest-countdown" data-fest-countdown @if ($countdownEnds) data-ends="{{ $countdownEnds }}" @endif
                    role="timer" aria-live="off">
                    <div class="fest-countdown__inner">
                        <div class="fest-countdown__head">
                            <span class="fest-countdown__live"><span class="fest-countdown__dot"></span>Live</span>
                            <span class="fest-countdown__label">{{ $countdown['label'] ?? 'Offer ends in' }}</span>
                        </div>
                        <div class="fest-countdown__clock">
                            @foreach (['d' => 'Days', 'h' => 'Hours', 'm' => 'Mins', 's' => 'Secs'] as $unit => $name)
                                <div class="fest-countdown__unit" data-unit-wrap="{{ $unit }}">
                                    <span class="fest-countdown__num" data-unit="{{ $unit }}">00</span>
                                    <span class="fest-countdown__name">{{ $name }}</span>
                                </div>
                                @if (!$loop->last)
                                    <span class="fest-countdown__sep" data-sep="{{ $unit }}">:</span>
                                @endif
                            @endforeach
                        </div>
                        <button type="button" class="fest-countdown__cta" data-fest-banner="{{ $festive['lead_source'] }}">
                            {{ $countdown['cta'] ?? 'Claim Offer' }}
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <style>
        .fest-banner {
            position: relative;
            padding: 18px 0 6px;
            /* Slide only, no fade: the banner is the LCP image and must paint at once */
            animation: festBannerIn .7s cubic-bezier(.22, .9, .3, 1) both;
        }

        /* Animated festive edge around the artwork */
        .fest-banner__frame {
            display: block;
            width: 100%;
            padding: 3px;
            border: 0;
            border-radius: 20px;
            background: linear-gradient(120deg, #ffc135, #ff7a1a, #e3263b, #ff5fa2, #ffc135);
            background-size: 300% 300%;
            box-shadow: 0 14px 34px -14px rgba(26, 20, 71, .5);
            cursor: pointer;
            transition: transform .35s ease, box-shadow .35s ease;
            animation: festBannerEdge 8s ease infinite;
        }

        .fest-banner__frame:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 42px -14px rgba(26, 20, 71, .6);
        }

        .fest-banner__frame:focus-visible {
            outline: 3px solid #1a1447;
            outline-offset: 4px;
        }

        .fest-banner__picture {
            position: relative;
            display: block;
            overflow: hidden;
            border-radius: 17px;
        }

        /* A band of light sweeping across the artwork every few seconds */
        .fest-banner__picture::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg, transparent 40%, rgba(255, 255, 255, .35) 50%, transparent 60%);
            transform: translateX(-120%);
            animation: festBannerShine 5s ease-in-out 1.2s infinite;
            pointer-events: none;
        }

        /* Keep the artwork's natural proportions at every screen size. The
           width follows the container; the height comes from the image's
           intrinsic dimensions (including the active <picture> source). */
        .fest-banner__img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* Phones and tablets: the header floats over the top of the page */
        @media (max-width: 991.98px) {
            .fest-banner {
                margin-top: 96px;
                padding-top: 12px;
            }

            /* Without a banner the hero starts under the floating header, so
               the theme fixes its height and pushes the photo ~40vh down to
               clear it. Below the banner that push is just an empty gap, and
               the hero's overflowing box would sit over the banner and swallow
               taps on it. Let the hero size to its own content instead, with
               room at the top for its light canopy. */
            .fest-banner ~ .hero_area.style-one {
                height: auto;
                padding-top: 44px;
            }

            /* The theme sets the 40vh push with !important on phones */
            .fest-banner ~ .hero_area.style-one .hero-thumb-wrapper {
                margin-top: 0 !important;
            }
        }

        /* Tablets still lay out the 40px desktop top bar, hidden under the
           floating header, so the banner only needs the rest of the gap */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .fest-banner { margin-top: 56px; }
        }

        @keyframes festBannerEdge {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes festBannerIn {
            from { transform: translateY(16px); }
            to { transform: none; }
        }

        @keyframes festBannerShine {
            0% { transform: translateX(-120%); }
            35%, 100% { transform: translateX(120%); }
        }

        /* ---------- Countdown under the banner ---------- */
        .fest-countdown {
            margin-top: 14px;
            padding: 2px;
            border-radius: 18px;
            background: linear-gradient(120deg, #ffc135, #ff7a1a, #e3263b, #ff5fa2, #ffc135);
            background-size: 300% 300%;
            animation: festBannerEdge 8s ease infinite;
            box-shadow: 0 0 22px -4px rgba(255, 150, 40, .55), 0 14px 30px -16px rgba(26, 20, 71, .6);
        }

        .fest-countdown__inner {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding: 14px 22px;
            border-radius: 16px;
            background:
                radial-gradient(circle at 12% 0%, rgba(255, 193, 53, .22), transparent 45%),
                radial-gradient(circle at 90% 100%, rgba(255, 95, 162, .2), transparent 45%),
                linear-gradient(135deg, #1a1447 0%, #2a1a5e 55%, #3b1550 100%);
            color: #fff;
        }

        /* Same light sweep as the banner, so the two read as one piece */
        .fest-countdown__inner::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg, transparent 40%, rgba(255, 255, 255, .16) 50%, transparent 60%);
            transform: translateX(-120%);
            animation: festBannerShine 5s ease-in-out 1.2s infinite;
            pointer-events: none;
        }

        .fest-countdown__head {
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-width: 0;
        }

        .fest-countdown__live {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            align-self: flex-start;
            padding: 3px 10px;
            border-radius: 999px;
            background: rgba(227, 38, 59, .18);
            border: 1px solid rgba(255, 95, 110, .5);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #ffb3bb;
        }

        .fest-countdown__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #ff3b52;
            box-shadow: 0 0 0 0 rgba(255, 59, 82, .7);
            animation: festCountPulse 1.6s ease-out infinite;
        }

        .fest-countdown__label {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.2;
            background: linear-gradient(90deg, #ffe08a, #ffb347, #ff8a5c);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .fest-countdown__clock {
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .fest-countdown__unit {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .fest-countdown__num {
            min-width: 58px;
            padding: 8px 6px;
            border-radius: 12px;
            background: linear-gradient(180deg, rgba(255, 255, 255, .14), rgba(255, 255, 255, .04));
            border: 1px solid rgba(255, 193, 53, .45);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .18), 0 0 16px -4px rgba(255, 193, 53, .55);
            font-size: 28px;
            font-weight: 800;
            line-height: 1;
            text-align: center;
            font-variant-numeric: tabular-nums;
            color: #fff;
            text-shadow: 0 0 12px rgba(255, 193, 53, .65);
        }

        .fest-countdown__num.is-tick {
            animation: festCountTick .45s ease;
        }

        .fest-countdown__name {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .7);
        }

        .fest-countdown__sep {
            padding-top: 8px;
            font-size: 26px;
            font-weight: 800;
            color: #ffc135;
            animation: festCountBlink 1s steps(1) infinite;
        }

        .fest-countdown__cta {
            flex-shrink: 0;
            padding: 12px 22px;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(90deg, #ffc135, #ff7a1a);
            color: #1a1447;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
            box-shadow: 0 0 0 0 rgba(255, 160, 40, .7);
            animation: festCountPulse 2.2s ease-out infinite;
            transition: transform .2s ease;
        }

        .fest-countdown__cta:hover { transform: translateY(-2px); }

        .fest-countdown__cta:focus-visible {
            outline: 3px solid #fff;
            outline-offset: 3px;
        }

        /* Days tile is hidden while there is less than a day left */
        .fest-countdown.no-days [data-unit-wrap="d"],
        .fest-countdown.no-days [data-sep="d"] { display: none; }

        @media (max-width: 767.98px) {
            .fest-countdown { margin-top: 10px; }

            .fest-countdown__inner {
                flex-direction: column;
                gap: 12px;
                padding: 14px 12px;
                text-align: center;
            }

            .fest-countdown__head { align-items: center; }
            .fest-countdown__live { align-self: center; }
            .fest-countdown__label { font-size: 16px; }
            .fest-countdown__clock { gap: 5px; }

            .fest-countdown__num {
                min-width: 50px;
                font-size: 24px;
            }

            .fest-countdown__sep { font-size: 22px; padding-top: 7px; }
            .fest-countdown__cta { width: 100%; }
        }

        @keyframes festCountPulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 160, 40, .7); }
            70% { box-shadow: 0 0 0 12px rgba(255, 160, 40, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 160, 40, 0); }
        }

        @keyframes festCountTick {
            0% { transform: translateY(-4px) scale(1.08); text-shadow: 0 0 20px rgba(255, 220, 120, 1); }
            100% { transform: none; }
        }

        @keyframes festCountBlink {
            50% { opacity: .35; }
        }

        @media (prefers-reduced-motion: reduce) {
            .fest-countdown,
            .fest-countdown__inner::after,
            .fest-countdown__dot,
            .fest-countdown__sep,
            .fest-countdown__cta,
            .fest-countdown__num.is-tick {
                animation: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .fest-banner,
            .fest-banner__frame,
            .fest-banner__picture::after {
                animation: none;
            }

            .fest-banner__frame { transition: none; }
            .fest-banner__picture::after { display: none; }
        }
    </style>

    <script>
        (function () {
            document.querySelectorAll('[data-fest-banner]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    if (typeof openModal === 'function') {
                        openModal(btn.getAttribute('data-fest-banner'));
                    }
                });
            });

            var box = document.querySelector('[data-fest-countdown]');
            if (!box) return;

            var fixedEnd = parseInt(box.getAttribute('data-ends'), 10) || null;
            var IST = 5.5 * 3600 * 1000, DAY = 86400 * 1000;

            // End of the current day in India time, as an epoch timestamp
            function endOfTodayIST() {
                return Math.floor((Date.now() + IST) / DAY) * DAY + DAY - IST;
            }

            var target = fixedEnd || endOfTodayIST();
            var els = {};
            ['d', 'h', 'm', 's'].forEach(function (u) {
                els[u] = box.querySelector('[data-unit="' + u + '"]');
            });

            function pad(n) { return n < 10 ? '0' + n : String(n); }

            function set(u, v) {
                var el = els[u], txt = pad(v);
                if (el.textContent === txt) return;
                el.textContent = txt;
                el.classList.remove('is-tick');
                void el.offsetWidth; // restart the tick animation
                el.classList.add('is-tick');
            }

            var timer;
            function tick() {
                var left = target - Date.now();
                if (left <= 0) {
                    if (fixedEnd) {
                        box.style.display = 'none';
                        clearInterval(timer);
                        return;
                    }
                    target = endOfTodayIST(); // daily offer rolls over at midnight
                    left = target - Date.now();
                }
                var s = Math.floor(left / 1000);
                var d = Math.floor(s / 86400);
                box.classList.toggle('no-days', d === 0);
                set('d', d);
                set('h', Math.floor(s % 86400 / 3600));
                set('m', Math.floor(s % 3600 / 60));
                set('s', s % 60);
            }

            tick();
            timer = setInterval(tick, 1000);
        })();
    </script>
@endif
