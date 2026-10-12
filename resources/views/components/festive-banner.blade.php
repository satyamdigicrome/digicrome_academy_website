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
            var banner = document.querySelector('[data-fest-banner]');
            if (!banner) return;
            banner.addEventListener('click', function () {
                if (typeof openModal === 'function') {
                    openModal(banner.getAttribute('data-fest-banner'));
                }
            });
        })();
    </script>
@endif
