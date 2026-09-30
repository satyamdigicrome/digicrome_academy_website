<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@1000&text=DIGCROME&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">
<div class="dcs-stage" aria-hidden="true">
    <svg class="dcs-svg" viewBox="0 0 900 150" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="dcs-lit" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#ffffff" />
                <stop offset=".6" stop-color="#e6e6e6" />
                <stop offset="1" stop-color="#b9b9c2" />
            </linearGradient>

            {{-- soft-edged beam: dark -> bright centre -> dark --}}
            <linearGradient id="dcs-beam-grad" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0" stop-color="#fff" stop-opacity="0" />
                <stop offset=".5" stop-color="#fff" stop-opacity="1" />
                <stop offset="1" stop-color="#fff" stop-opacity="0" />
            </linearGradient>

            {{-- the letters only light up inside the slanted beams --}}
            <mask id="dcs-beam-mask" maskUnits="userSpaceOnUse" x="-50" y="-60" width="1000" height="270">
                <g class="dcs-beams">
                    <g transform="skewX(-24)">
                        <rect x="-260" y="-60" width="200" height="270" fill="url(#dcs-beam-grad)" />
                        <rect x="-40" y="-60" width="46" height="270" fill="url(#dcs-beam-grad)" />
                    </g>
                </g>
            </mask>

            <filter id="dcs-glow" x="-10%" y="-40%" width="120%" height="180%">
                <feGaussianBlur stdDeviation="5" result="g" />
                <feMerge>
                    <feMergeNode in="g" />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
        </defs>

        {{-- faint base: the whole word is always softly visible --}}
        <text class="dcs-font dcs-base" x="450" y="128" text-anchor="middle" font-size="150" textLength="889"
            lengthAdjust="spacingAndGlyphs">DIGICROME</text>

        {{-- lit layer, only visible where the beams pass --}}
        <g mask="url(#dcs-beam-mask)">
            <text class="dcs-font" x="450" y="128" text-anchor="middle" font-size="150" textLength="889"
                lengthAdjust="spacingAndGlyphs" fill="url(#dcs-lit)" filter="url(#dcs-glow)">DIGICROME</text>
        </g>
    </svg>
</div>

<style>
    .dcs-stage {
        padding: 28px 16px 18px;
        user-select: none;
        pointer-events: none;
    }

    .dcs-svg {
        display: block;
        width: 100%;
        max-width: 800px; /* caps the text size on wide screens; phones still use the full width */
        height: auto;
        margin: 0 auto;
        overflow: visible;
    }

    .dcs-font {
        font-family: "Mulish", Arial, sans-serif;
        font-weight: 1000;
    }

    .dcs-base {
        fill: rgba(255, 255, 255, 0.08);
    }

    /* sweep left -> right across the word, then rest in the dark before the next pass */
    .dcs-beams {
        animation: dcs-sweep 5.5s cubic-bezier(.45, .05, .55, .95) infinite;
    }

    @keyframes dcs-sweep {
        0% {
            transform: translateX(0);
        }

        65%,
        100% {
            transform: translateX(1300px);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .dcs-beams {
            animation: none;
            transform: translateX(650px);
        }
    }
</style>
