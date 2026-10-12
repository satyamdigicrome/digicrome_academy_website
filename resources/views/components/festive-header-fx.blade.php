{{--
    FESTIVE HEADER FX — twinkling points of light falling from the top of the
    header to the bottom: star-like sparkles that flicker as they drift down,
    mixed with short streaks of light. They pass behind the logo and menu, so
    nothing becomes harder to read or click.

    Include it as the first child of a header bar. Pass 'count' for fewer
    lights on a small bar. Renders nothing outside the festive dates
    (config/festive.php).
--}}
@php
    $festive = \App\Support\FestiveSeason::current();
@endphp

@if ($festive)
    @php
        $colors = $festive['key'] === 'durga-puja'
            ? ['#ffc135', '#ff6b4a', '#ffd36b', '#ff9f1c']
            : ['#ffc135', '#ff8a3d', '#ff5fa2', '#5fe3c0', '#9ec5ff'];

        // A fixed, evenly scattered pattern (no randomness), so the header
        // looks the same on every load and the lights never clump together.
        $lights = [];
        for ($i = 0, $count = $count ?? 28; $i < $count; $i++) {
            $lights[] = [
                'x' => round(fmod($i * 61.8 + 7, 100), 1),
                'drift' => (($i * 17) % 21) - 10,
                'size' => 4 + ($i * 7) % 5,
                'fall' => 3.2 + (($i * 13) % 10) / 4,
                'delay' => -(($i * 29) % 50) / 10,
                'streak' => $i % 3 === 0,
                'color' => $colors[$i % count($colors)],
            ];
        }
    @endphp

    @once
        <style>
            .fest-fx {
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                overflow: hidden;
                pointer-events: none;
                /* Behind the header's own content, in front of its background */
                z-index: -1;
                /* Lets each light fall exactly the height of its header */
                container-type: size;
            }

            /* The desktop header sits under the top bar until it turns sticky;
               reaching up through the bar makes it one continuous fall. */
            #sticky-header:not(.sticky) > .fest-fx { top: -40px; }

            .fest-fx__light {
                position: absolute;
                top: 0;
                left: var(--x);
                width: var(--s);
                height: var(--s);
                border-radius: 50%;
                background: radial-gradient(circle, #fff 0 22%, var(--c) 52%, transparent 72%);
                box-shadow: 0 0 9px 2px var(--c);
                transform: translate3d(0, -16px, 0);
                animation:
                    festFxFall var(--t) linear var(--d) infinite,
                    festFxTwinkle .9s ease-in-out var(--d) infinite alternate;
            }

            /* Four-point flare, so each light reads as a twinkling star */
            .fest-fx__light::before,
            .fest-fx__light::after {
                content: "";
                position: absolute;
                left: 50%;
                top: 50%;
                width: calc(var(--s) * 3.4);
                height: 1px;
                background: linear-gradient(90deg, transparent, var(--c), transparent);
                transform: translate(-50%, -50%);
            }

            .fest-fx__light::after { transform: translate(-50%, -50%) rotate(90deg); }

            /* A streak: a falling light trailing a fading tail */
            .fest-fx__light--streak {
                width: 2px;
                height: calc(var(--s) * 5);
                border-radius: 2px;
                background: linear-gradient(to bottom, transparent, var(--c) 70%, #fff);
                box-shadow: 0 0 6px var(--c);
            }

            .fest-fx__light--streak::before,
            .fest-fx__light--streak::after { display: none; }

            @keyframes festFxFall {
                from { transform: translate3d(0, -24px, 0); }
                to { transform: translate3d(var(--dx), calc(100cqh + 16px), 0); }
            }

            @keyframes festFxTwinkle {
                from { opacity: .25; }
                to { opacity: 1; }
            }

            /* Browsers without container units: fall a fixed header height */
            @supports not (container-type: size) {
                @keyframes festFxFall {
                    from { transform: translate3d(0, -24px, 0); }
                    to { transform: translate3d(var(--dx), 160px, 0); }
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .fest-fx { display: none; }
            }
        </style>
    @endonce

    <div class="fest-fx" aria-hidden="true">
        @foreach ($lights as $l)
            <span class="fest-fx__light{{ $l['streak'] ? ' fest-fx__light--streak' : '' }}"
                style="--x:{{ $l['x'] }}%;--dx:{{ $l['drift'] }}px;--s:{{ $l['size'] }}px;--t:{{ $l['fall'] }}s;--d:{{ $l['delay'] }}s;--c:{{ $l['color'] }}"></span>
        @endforeach
    </div>
@endif
