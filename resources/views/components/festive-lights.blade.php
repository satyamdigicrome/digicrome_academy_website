{{--
    FESTIVE LIGHTS — big drooping swags of party lights across the top of the
    homepage hero, with a few soft glows drifting behind the hero content.
    Everything sits behind the hero's text and photo, so it never covers or
    blocks anything.

    The bulbs light up in a slow travelling wave. The string is drawn wider
    than any screen and cropped to fit, so the bulbs keep their shape at every
    width. Renders nothing outside the festive dates (config/festive.php).
--}}
@php
    $festive = \App\Support\FestiveSeason::current();
@endphp

@if ($festive)
    @php
        // Durga Puja: pandal golds, reds and warm white. Diwali: every colour.
        $palette = $festive['key'] === 'durga-puja'
            ? ['#ffd36b', '#ff4d4d', '#fff1c9', '#ff8a3d']
            : ['#ffd36b', '#ff8a3d', '#ff5fa2', '#5fe3c0', '#7cb8ff'];

        // swag = distance between hooks, sag = how far the wire droops between them
        $g = ['width' => 2560, 'height' => 80, 'swag' => 400, 'sag' => 44, 'top' => 4, 'gap' => 40];

        // Each swag is a quadratic curve dipping exactly `sag` below the hooks.
        $wire = 'M0 ' . $g['top'];
        for ($x = 0; $x < $g['width']; $x += $g['swag']) {
            $wire .= ' Q' . ($x + $g['swag'] / 2) . ' ' . ($g['top'] + 2 * $g['sag']) . ' ' . ($x + $g['swag']) . ' ' . $g['top'];
        }

        // Bulbs hang at even spacing, each one sitting on the wire.
        $bulbs = [];
        for ($i = 0, $x = $g['gap'] / 2; $x < $g['width']; $i++, $x += $g['gap']) {
            $t = fmod($x, $g['swag']) / $g['swag'];
            $bulbs[] = [$x, round($g['top'] + 4 * $g['sag'] * $t * (1 - $t), 1), $palette[$i % count($palette)], $i];
        }
    @endphp

    <div class="fest-lights" aria-hidden="true">
        <svg viewBox="0 0 {{ $g['width'] }} {{ $g['height'] }}" preserveAspectRatio="xMidYMin slice" focusable="false">
            <defs>
                {{-- One bulb, drawn around the point where it hangs from the wire --}}
                <g id="fl-bulb">
                    <circle cy="13" r="15" fill="currentColor" opacity=".16" />
                    <circle cy="13" r="9" fill="currentColor" opacity=".28" />
                    <rect x="-2.6" y="-1" width="5.2" height="6" rx="1" fill="#5a4a2c" />
                    <path d="M0 4.5c-3.6 0-5.4 3.4-5.4 7 0 4.2 2.8 7.6 5.4 9.5 2.6-1.9 5.4-5.3 5.4-9.5 0-3.6-1.8-7-5.4-7z" fill="currentColor" />
                    <ellipse cx="-1.8" cy="10" rx="1.2" ry="2.4" fill="#fff" opacity=".7" />
                </g>
            </defs>
            <path class="fl-wire" d="{{ $wire }}" />
            @foreach ($bulbs as [$x, $y, $color, $i])
                <use href="#fl-bulb" x="{{ $x }}" y="{{ $y }}" class="fl-b" style="--i:{{ $i }};color:{{ $color }}" />
            @endforeach
        </svg>
    </div>

    <div class="fest-hero-glow" aria-hidden="true">
        @foreach ([['-6%', '6%', '380px'], ['30%', '-4%', '300px'], ['44%', '52%', '420px'], ['80%', '2%', '340px'], ['68%', '70%', '320px'], ['2%', '62%', '360px']] as $n => [$left, $top, $size])
            <span style="--x:{{ $left }};--y:{{ $top }};--s:{{ $size }};--d:{{ $n * -1.7 }}s;color:{{ $palette[$n % count($palette)] }}"></span>
        @endforeach
    </div>

    <style>
        .hero_area.style-one { position: relative; }

        .hero_area.style-one > .container {
            position: relative;
            z-index: 1;
        }

        .fest-lights,
        .fest-hero-glow {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .fest-lights { height: 80px; }

        .fest-lights svg {
            display: block;
            width: 100%;
            height: 100%;
        }

        .fl-wire {
            fill: none;
            stroke: rgba(47, 42, 68, .45);
            stroke-width: 1.6;
        }

        /* A slow wave of light travelling along the string */
        .fl-b {
            animation: flTwinkle 4s ease-in-out infinite;
            animation-delay: calc(var(--i) * -.2s);
        }

        @keyframes flTwinkle {
            0%, 100% { opacity: .4; }
            50% { opacity: 1; }
        }

        .fest-hero-glow { bottom: 0; }

        .fest-hero-glow span {
            position: absolute;
            left: var(--x);
            top: var(--y);
            width: var(--s);
            height: var(--s);
            border-radius: 50%;
            background: radial-gradient(circle, currentColor 0, transparent 62%);
            opacity: .13;
            animation: flFloat 9s ease-in-out infinite alternate;
            animation-delay: var(--d);
        }

        @keyframes flFloat {
            from { transform: translate3d(0, 0, 0) scale(1); }
            to { transform: translate3d(12px, -22px, 0) scale(1.12); }
        }

        @media (max-width: 991.98px) {
            .fest-lights { height: 42px; }
        }

        /* Lights scrolled out of view stop animating */
        .fest-lights.is-paused .fl-b,
        .fest-hero-glow.is-paused span {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .fl-b,
            .fest-hero-glow span {
                animation: none;
            }

            .fl-b { opacity: .9; }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (!('IntersectionObserver' in window)) return;
            var watcher = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    entry.target.classList.toggle('is-paused', !entry.isIntersecting);
                });
            });
            document.querySelectorAll('.fest-lights, .fest-hero-glow').forEach(function (el) {
                watcher.observe(el);
            });
        });
    </script>
@endif
