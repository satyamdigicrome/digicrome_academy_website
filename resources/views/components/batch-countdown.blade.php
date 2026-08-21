@props(['course'])

@php
    $startsAt = $course->batchStartsAt();
    $endsAt = $course->batchCountdownEndsAt();
    $isUpcoming = $endsAt && $endsAt->isFuture();
    $startsToday = $startsAt && $startsAt->isToday();
    $daysAway = $isUpcoming ? (int) floor(now()->diffInSeconds($endsAt) / 86400) : 0;
@endphp

<section class="batch-cd {{ $isUpcoming ? '' : 'batch-cd--open' }}" aria-label="Next batch">
    <div class="container">
        <div class="batch-cd__panel">

            <div class="batch-cd__lead">
                <span class="batch-cd__hourglass" aria-hidden="true">
                    <span class="batch-cd__hourglass-glass">
                        <span class="batch-cd__sand batch-cd__sand--top"></span>
                        <span class="batch-cd__sand-stream"></span>
                        <span class="batch-cd__sand batch-cd__sand--bottom"></span>
                    </span>
                </span>
                <div class="batch-cd__headings">
                    @if ($isUpcoming)
                        <span class="batch-cd__eyebrow">{{ $startsToday ? 'Next Batch' : 'Next Batch Starts On' }}</span>
                        <strong class="batch-cd__date">
                            {{ $startsToday ? 'Starting Today' : $startsAt->format('d M Y') }}</strong>
                        <span class="batch-cd__sub">
                            {{ $startsToday ? 'Enrolment closes tonight' : $startsAt->format('l') . ' · Limited seats' }}</span>
                    @else
                        <span class="batch-cd__eyebrow">Next Batch</span>
                        <strong class="batch-cd__date">{{ $course->batchLabel() }}</strong>
                        <span class="batch-cd__sub">Talk to us for the upcoming batch date</span>
                    @endif
                </div>
            </div>

            @if ($isUpcoming)
                {{-- Deadline goes out as an ISO string with the app's offset so the
                     browser resolves it against the visitor's own clock. --}}
                <div class="batch-cd__timer" role="timer" data-batch-countdown
                    data-deadline="{{ $endsAt->toIso8601String() }}">
                    {{-- Screen readers get this instead of digits ticking every second. --}}
                    <span class="batch-cd__sr">
                        @if ($startsToday)
                            Next batch starts today. Enrolment closes at the end of the day.
                        @else
                            Next batch starts on {{ $startsAt->format('d F Y') }},
                            in {{ $daysAway }} {{ Str::plural('day', $daysAway) }}.
                        @endif
                    </span>
                    <div class="batch-cd__units" aria-hidden="true">
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-days><span class="batch-cd__num-current">--</span></span>
                            <span class="batch-cd__label">Days left</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-hours><span class="batch-cd__num-current">--</span></span>
                            <span class="batch-cd__label">Hours left</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-minutes><span class="batch-cd__num-current">--</span></span>
                            <span class="batch-cd__label">Minutes left</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-seconds><span class="batch-cd__num-current">--</span></span>
                            <span class="batch-cd__label">Seconds left</span>
                        </div>
                    </div>
                </div>
            @endif

            <div class="batch-cd__action">
                <a href="javascript:void(0);" onclick="openModal('applyNowPopup')" class="batch-cd__btn">
                    {{ 'Apply Now' }}
                </a>
            </div>

        </div>
    </div>
</section>

@once
    @push('styles')
        <style>
            .batch-cd {
                padding: 26px 0;
                background: linear-gradient(120deg, #14103a 0%, #1a1447 55%, #241c63 100%);
            }

            .batch-cd__panel {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                gap: 22px;
                padding: 20px 26px;
                border-radius: 16px;
                border: 1px solid rgba(255, 255, 255, .14);
                background: rgba(255, 255, 255, .05);
            }

            .batch-cd__lead {
                display: flex;
                align-items: center;
                gap: 16px;
                min-width: 0;
            }

            /* Animated hourglass: sand falls continuously, then the glass turns. */
            .batch-cd__hourglass {
                position: relative;
                flex: 0 0 auto;
                width: 42px;
                height: 52px;
                display: grid;
                place-items: center;
            }

            .batch-cd__hourglass::before,
            .batch-cd__hourglass::after {
                content: '';
                position: absolute;
                left: 3px;
                width: 36px;
                height: 5px;
                background: #f29c12;
                border-radius: 999px;
                box-shadow: 0 1px 0 rgba(255, 255, 255, .35) inset;
            }

            .batch-cd__hourglass::before { top: 1px; }
            .batch-cd__hourglass::after { bottom: 1px; }

            .batch-cd__hourglass-glass {
                position: absolute;
                inset: 6px 7px;
                overflow: hidden;
                border: 2px solid rgba(255, 255, 255, .88);
                clip-path: polygon(0 0, 100% 0, 62% 50%, 100% 100%, 0 100%, 38% 50%);
                filter: drop-shadow(0 0 4px rgba(242, 156, 18, .35));
                animation: batchCdTurn 7s cubic-bezier(.65, 0, .35, 1) infinite;
            }

            .batch-cd__sand {
                position: absolute;
                left: 3px;
                width: calc(100% - 6px);
                background: linear-gradient(90deg, #f7ba42, #ffe29a 52%, #ed9412);
            }

            .batch-cd__sand--top {
                top: 3px;
                height: 16px;
                clip-path: polygon(0 0, 100% 0, 62% 100%, 38% 100%);
                transform-origin: top center;
                animation: batchCdTopSand 7s linear infinite;
            }

            .batch-cd__sand--bottom {
                bottom: 3px;
                height: 16px;
                clip-path: polygon(38% 0, 62% 0, 100% 100%, 0 100%);
                transform-origin: bottom center;
                animation: batchCdBottomSand 7s linear infinite;
            }

            .batch-cd__sand-stream {
                position: absolute;
                z-index: 1;
                top: 16px;
                left: calc(50% - 1px);
                width: 2px;
                height: 18px;
                border-radius: 999px;
                background: #ffce5a;
                transform-origin: top;
                animation: batchCdSandFall 7s linear infinite;
            }

            .batch-cd__headings {
                display: flex;
                flex-direction: column;
                min-width: 0;
            }

            .batch-cd__eyebrow {
                font-size: 12px;
                font-weight: 700;
                letter-spacing: .12em;
                text-transform: uppercase;
                color: #f29c12;
            }

            .batch-cd__date {
                font-size: 22px;
                line-height: 1.25;
                font-weight: 700;
                color: #fff;
            }

            .batch-cd__sub {
                font-size: 13px;
                color: rgba(255, 255, 255, .68);
            }

            .batch-cd__units {
                display: flex;
                align-items: flex-start;
                gap: 6px;
            }

            .batch-cd__unit {
                display: flex;
                flex-direction: column;
                align-items: center;
                min-width: 62px;
                padding: 8px 6px 6px;
                border-radius: 12px;
                background: rgba(255, 255, 255, .1);
                border: 1px solid rgba(255, 255, 255, .16);
            }

            .batch-cd__num {
                position: relative;
                display: block;
                min-width: 2.35ch;
                height: 1.15em;
                overflow: hidden;
                font-size: 26px;
                line-height: 1.1;
                font-weight: 700;
                color: #fff;
                /* Digits keep an equal width so the row does not jitter each tick */
                font-variant-numeric: tabular-nums;
                font-feature-settings: "tnum";
            }

            .batch-cd__num-current,
            .batch-cd__num-next {
                display: block;
                width: 100%;
                will-change: transform, opacity;
            }

            .batch-cd__num-current--leaving {
                position: absolute;
                inset: 0;
                animation: batchCdFlipOut .38s ease-in forwards;
            }

            .batch-cd__num-next {
                animation: batchCdFlipIn .38s cubic-bezier(.2, .8, .2, 1) forwards;
                transform-origin: center top;
            }

            .batch-cd__label {
                margin-top: 2px;
                font-size: 11px;
                letter-spacing: .08em;
                text-transform: uppercase;
                color: rgba(255, 255, 255, .62);
            }

            .batch-cd__sep {
                align-self: center;
                margin-top: -14px;
                font-size: 22px;
                font-weight: 700;
                color: rgba(242, 156, 18, .85);
                animation: batchCdBlink 1s steps(2, end) infinite;
            }

            .batch-cd__btn {
                display: inline-block;
                padding: 12px 26px;
                border-radius: 999px;
                background: #f29c12;
                color: #1a1447;
                font-weight: 700;
                white-space: nowrap;
                text-decoration: none;
                transition: transform .25s ease, box-shadow .25s ease, background-color .25s ease;
            }

            .batch-cd__btn:hover,
            .batch-cd__btn:focus {
                background: #ffb13d;
                color: #1a1447;
                transform: translateY(-2px);
                box-shadow: 0 10px 24px rgba(242, 156, 18, .35);
            }

            .batch-cd__sr {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
            }

            /* No live date to count down to — calmer, no timer tiles */
            .batch-cd--open .batch-cd__panel {
                justify-content: flex-start;
            }

            .batch-cd--open .batch-cd__action {
                margin-left: auto;
            }

            @keyframes batchCdFlipIn {
                from { opacity: 0; transform: translateY(-110%) rotateX(-70deg); }
                to { opacity: 1; transform: translateY(0) rotateX(0); }
            }

            @keyframes batchCdFlipOut {
                to { opacity: 0; transform: translateY(38%) rotateX(55deg); }
            }

            @keyframes batchCdTopSand {
                0%, 72% { transform: scaleY(1); }
                88%, 100% { transform: scaleY(.04); }
            }

            @keyframes batchCdBottomSand {
                0%, 72% { transform: scaleY(.08); }
                88%, 100% { transform: scaleY(1); }
            }

            @keyframes batchCdSandFall {
                0%, 8%, 88%, 100% { opacity: 0; transform: scaleY(.1); }
                14%, 76% { opacity: 1; transform: scaleY(1); }
            }

            @keyframes batchCdTurn {
                0%, 82% { transform: rotate(0deg); }
                96%, 100% { transform: rotate(180deg); }
            }

            @keyframes batchCdBlink {
                50% { opacity: .25; }
            }

            @media (max-width: 767.98px) {
                .batch-cd {
                    padding: 20px 0;
                }

                .batch-cd__panel {
                    justify-content: center;
                    text-align: center;
                    padding: 18px;
                }

                .batch-cd__lead {
                    width: 100%;
                    justify-content: center;
                }

                .batch-cd__headings {
                    align-items: flex-start;
                    text-align: left;
                }

                .batch-cd__timer,
                .batch-cd__action {
                    width: 100%;
                }

                .batch-cd__units {
                    justify-content: center;
                }

                .batch-cd__unit {
                    min-width: 0;
                    flex: 1 1 0;
                }

                .batch-cd__num {
                    font-size: 22px;
                }

                .batch-cd__btn {
                    display: block;
                    text-align: center;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .batch-cd__hourglass-glass,
                .batch-cd__sand,
                .batch-cd__sand-stream,
                .batch-cd__sep,
                .batch-cd__num-current--leaving,
                .batch-cd__num-next {
                    animation: none;
                }

                .batch-cd__btn {
                    transition: none;
                }
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            (function() {
                function pad(n) {
                    return n < 10 ? '0' + n : String(n);
                }

                function setValue(node, value, animate) {
                    var current = node.querySelector('.batch-cd__num-current');

                    if (!current) {
                        node.innerHTML = '<span class="batch-cd__num-current"></span>';
                        current = node.firstElementChild;
                    }

                    if (current.textContent === value) return;

                    // Populate the first reading without movement. Each later
                    // change brings its new value down from above like a calendar page.
                    if (!animate) {
                        current.textContent = value;
                        return;
                    }

                    var next = document.createElement('span');
                    next.className = 'batch-cd__num-next';
                    next.textContent = value;
                    node.appendChild(next);
                    current.classList.add('batch-cd__num-current--leaving');

                    window.setTimeout(function() {
                        if (current.parentNode === node) current.remove();
                        next.className = 'batch-cd__num-current';
                    }, 390);
                }

                function start(el) {
                    // Guard against a second interval being attached to the same
                    // element; two would race and fight over the digits.
                    if (el.dataset.cdRunning) return;
                    el.dataset.cdRunning = '1';

                    var deadline = new Date(el.dataset.deadline).getTime();
                    if (isNaN(deadline)) return;

                    var days = el.querySelector('[data-cd-days]'),
                        hours = el.querySelector('[data-cd-hours]'),
                        minutes = el.querySelector('[data-cd-minutes]'),
                        seconds = el.querySelector('[data-cd-seconds]'),
                        hasTicked = false;

                    function tick() {
                        var left = deadline - Date.now();

                        if (left <= 0) {
                            setValue(days, '00', hasTicked);
                            setValue(hours, '00', hasTicked);
                            setValue(minutes, '00', hasTicked);
                            setValue(seconds, '00', hasTicked);
                            // Zero here means the batch date has run out, since
                            // the deadline is the end of that day.
                            var section = el.closest('.batch-cd');
                            var date = section.querySelector('.batch-cd__date');
                            var sub = section.querySelector('.batch-cd__sub');
                            if (date) date.textContent = 'Enrolment Closed';
                            if (sub) sub.textContent = 'Ask us about the next batch';
                            clearInterval(timer);
                            return;
                        }

                        var s = Math.floor(left / 1000);
                        setValue(days, pad(Math.floor(s / 86400)), hasTicked);
                        setValue(hours, pad(Math.floor(s / 3600) % 24), hasTicked);
                        setValue(minutes, pad(Math.floor(s / 60) % 60), hasTicked);
                        setValue(seconds, pad(s % 60), hasTicked);
                        hasTicked = true;
                    }

                    var timer = setInterval(tick, 1000);
                    tick();
                }

                function init() {
                    document.querySelectorAll('[data-batch-countdown]').forEach(start);
                }

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', init);
                } else {
                    init();
                }
            })();
        </script>
    @endpush
@endonce
