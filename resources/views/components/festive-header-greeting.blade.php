{{--
    FESTIVE HEADER GREETING — a small shimmering greeting in the desktop top
    bar, linking to Refer & Earn. Wide screens only (the top bar is hidden on
    phones). Renders nothing outside the festive dates (config/festive.php).
--}}
@php
    $festive = \App\Support\FestiveSeason::current();
@endphp

@if ($festive)
    <a href="{{ route('refer_and_earn') }}" class="fest-chip">
        <svg class="fest-chip__spark" viewBox="-10 -10 20 20" aria-hidden="true" focusable="false">
            <path d="M0-9L2-2 9 0 2 2 0 9-2 2-9 0-2-2z" />
        </svg>
        <span class="fest-chip__text">{{ $festive['eyebrow'] }}<span class="fest-chip__more"> &middot; Gift a friend Data Science</span></span>
    </a>

    @once
        <style>
            .fest-chip {
                display: none;
                align-items: center;
                gap: 6px;
                margin-right: 18px;
                padding: 0 12px 0 8px;
                border: 1px solid rgba(255, 211, 107, .45);
                border-radius: 999px;
                background: rgba(255, 211, 107, .08);
                font-size: 12px;
                font-weight: 700;
                letter-spacing: .3px;
                line-height: 18px;
                vertical-align: middle;
                text-decoration: none;
                transition: background .25s ease, border-color .25s ease;
            }

            .fest-chip:hover {
                border-color: rgba(255, 211, 107, .8);
                background: rgba(255, 211, 107, .16);
            }

            .fest-chip:focus-visible {
                outline: 2px solid #ffd36b;
                outline-offset: 2px;
            }

            .fest-chip__spark {
                width: 11px;
                height: 11px;
                fill: #ffd36b;
                animation: festChipSpark 2.4s ease-in-out infinite;
            }

            /* Gold text with a band of light sweeping through it */
            .fest-chip__text {
                background: linear-gradient(100deg, #ffd36b 0%, #ffd36b 40%, #fff7dc 50%, #ffd36b 60%, #ffd36b 100%) 0 0 / 250% 100%;
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
                animation: festChipShine 4s linear infinite;
            }

            .fest-chip__more { display: none; }

            @media (min-width: 1200px) {
                .fest-chip { display: inline-flex; }
            }

            @media (min-width: 1400px) {
                .fest-chip__more { display: inline; }
            }

            @keyframes festChipShine {
                from { background-position: 100% 0; }
                to { background-position: -150% 0; }
            }

            @keyframes festChipSpark {
                0%, 100% { transform: scale(.8) rotate(0deg); opacity: .7; }
                50% { transform: scale(1.1) rotate(45deg); opacity: 1; }
            }

            @media (prefers-reduced-motion: reduce) {
                .fest-chip__spark,
                .fest-chip__text {
                    animation: none;
                }
            }
        </style>
    @endonce
@endif
