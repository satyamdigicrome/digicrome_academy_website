{{--
    FESTIVE SEASON — site-wide festive dressing, shown only while a phase in
    config/festive.php is live (see App\Support\FestiveSeason).

    - A one-time shower (shiuli & marigold petals for Durga Puja, golden
      sparkles for Diwali) plays once per visit, after the page has loaded.

    Every class is prefixed "fest-" so nothing clashes with the theme styles.
    The header and hero lights live in components/festive-lights, the
    homepage greeting card in components/festive-greeting.
--}}
@php
    $festive = \App\Support\FestiveSeason::current();

    if ($festive) {
        $isDurga = $festive['key'] === 'durga-puja';

        $svgUrl = fn (string $body, string $viewBox) => 'data:image/svg+xml,' . rawurlencode(
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="' . $viewBox . '">' . $body . '</svg>'
        );

        $petal = 'M0-8C5-3 4 5 0 8C-4 5-5-3 0-8z';
        $shiuliPetals = '';
        foreach ([0, 72, 144, 216, 288] as $angle) {
            $shiuliPetals .= '<ellipse cy="-4.6" rx="2.8" ry="4.4" transform="rotate(' . $angle . ')"/>';
        }

        $bits = [
            'shiuli' => $svgUrl('<g fill="#fff" stroke="#f1d3bb" stroke-width=".6">' . $shiuliPetals . '</g><circle r="2.1" fill="#ff6d00"/>', '-10 -10 20 20'),
            'marigold' => $svgUrl('<path d="' . $petal . '" fill="#ff9800"/>', '-10 -10 20 20'),
            'hibiscus' => $svgUrl('<path d="M0-8C6-6 6 4 0 8C-6 4-6-6 0-8z" fill="#d32f2f"/>', '-10 -10 20 20'),
            'star' => $svgUrl('<path d="M0-9L2-2 9 0 2 2 0 9-2 2-9 0-2-2z" fill="#ffc135"/>', '-10 -10 20 20'),
        ];

        $showerTypes = $isDurga ? ['shiuli', 'shiuli', 'marigold', 'hibiscus'] : ['star', 'star', 'ember'];
    }
@endphp

@if ($festive)
    <style>
        /* ---------- One-time petal / sparkle shower ---------- */
        .fest-shower {
            position: fixed;
            inset: 0;
            z-index: 1000; /* over the sticky header, under Bootstrap modals */
            overflow: hidden;
            pointer-events: none;
        }

        .fest-shower__bit {
            position: absolute;
            top: -24px;
            width: var(--size);
            height: var(--size);
            background: center / contain no-repeat;
            animation: festFall linear both;
            will-change: transform, opacity;
        }

        @foreach ($bits as $name => $url)
            .fest-shower__bit--{{ $name }} { background-image: url("{{ $url }}"); }
        @endforeach

        .fest-shower__bit--shiuli { filter: drop-shadow(0 1px 1px rgba(0, 0, 0, .2)); }

        .fest-shower__bit--star {
            filter: drop-shadow(0 0 4px rgba(255, 170, 0, .85));
            animation-name: festFallTwinkle;
        }

        .fest-shower__bit--ember {
            border-radius: 50%;
            background: radial-gradient(circle, #fff6c8 0 25%, #ffb300 45%, rgba(255, 152, 0, 0) 70%);
            animation-name: festFallTwinkle;
        }

        @keyframes festFall {
            0% { transform: translate3d(0, 0, 0) rotate(0deg); opacity: 0; }
            8% { opacity: 1; }
            85% { opacity: 1; }
            100% { transform: translate3d(var(--drift), 105vh, 0) rotate(var(--spin)); opacity: 0; }
        }

        @keyframes festFallTwinkle {
            0% { transform: translate3d(0, 0, 0) scale(.6); opacity: 0; }
            10% { opacity: 1; }
            25% { opacity: .35; }
            40% { opacity: 1; transform: translate3d(calc(var(--drift) * .4), 40vh, 0) scale(1); }
            60% { opacity: .45; }
            80% { opacity: 1; }
            100% { transform: translate3d(var(--drift), 105vh, 0) scale(.5); opacity: 0; }
        }
    </style>

    <script>
        (function () {
            var types = @json($showerTypes);
            var seenKey = 'fest-shower-{{ $festive['key'] }}';

            function shower() {
                if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
                try {
                    if (sessionStorage.getItem(seenKey)) return;
                    sessionStorage.setItem(seenKey, '1');
                } catch (e) {}

                var box = document.createElement('div');
                box.className = 'fest-shower';
                box.setAttribute('aria-hidden', 'true');

                var count = window.innerWidth < 768 ? 12 : 22;
                var longest = 0;

                for (var i = 0; i < count; i++) {
                    var bit = document.createElement('span');
                    var duration = 5 + Math.random() * 4;
                    var delay = Math.random() * 2.5;
                    longest = Math.max(longest, duration + delay);

                    bit.className = 'fest-shower__bit fest-shower__bit--' + types[i % types.length];
                    bit.style.left = (Math.random() * 100) + '%';
                    bit.style.setProperty('--size', (14 + Math.random() * 12) + 'px');
                    bit.style.setProperty('--drift', ((Math.random() - .5) * 180) + 'px');
                    bit.style.setProperty('--spin', (Math.random() * 720 - 360) + 'deg');
                    bit.style.animationDuration = duration + 's';
                    bit.style.animationDelay = delay + 's';
                    box.appendChild(bit);
                }

                document.body.appendChild(box);
                setTimeout(function () { box.remove(); }, longest * 1000 + 500);
            }

            // Wait for the page itself to finish loading so the shower never
            // competes with the content people came for, but don't let a slow
            // third-party script (chat widget, analytics) hold it back for long.
            var started = false;
            function begin() {
                if (started) return;
                started = true;
                setTimeout(shower, 400);
            }

            if (document.readyState === 'complete') {
                begin();
            } else {
                window.addEventListener('load', begin);
                setTimeout(begin, 6000);
            }
        })();
    </script>
@endif
