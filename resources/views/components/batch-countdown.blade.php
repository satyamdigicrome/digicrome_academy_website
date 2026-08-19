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
                <span class="batch-cd__watch" aria-hidden="true">
                    <span class="batch-cd__watch-dial"></span>
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
                            <span class="batch-cd__num" data-cd-days>--</span>
                            <span class="batch-cd__label">Days</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-hours>--</span>
                            <span class="batch-cd__label">Hours</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-minutes>--</span>
                            <span class="batch-cd__label">Mins</span>
                        </div>
                        <span class="batch-cd__sep">:</span>
                        <div class="batch-cd__unit">
                            <span class="batch-cd__num" data-cd-seconds>--</span>
                            <span class="batch-cd__label">Secs</span>
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

            /* Stopwatch mark: ring, crown and a hand that sweeps once per minute */
            .batch-cd__watch {
                position: relative;
                flex: 0 0 auto;
                width: 46px;
                height: 46px;
                border: 3px solid #f29c12;
                border-radius: 50%;
            }

            .batch-cd__watch::before {
                content: "";
                position: absolute;
                top: -9px;
                left: 50%;
                width: 14px;
                height: 6px;
                transform: translateX(-50%);
                background: #f29c12;
                border-radius: 2px;
            }

            .batch-cd__watch-dial {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 2px;
                height: 14px;
                background: #fff;
                border-radius: 2px;
                transform-origin: bottom center;
                transform: translate(-50%, -100%);
                animation: batchCdSweep 60s steps(60, end) infinite;
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
                font-size: 26px;
                line-height: 1.1;
                font-weight: 700;
                color: #fff;
                /* Digits keep an equal width so the row does not jitter each tick */
                font-variant-numeric: tabular-nums;
                font-feature-settings: "tnum";
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

            @keyframes batchCdSweep {
                to { transform: translate(-50%, -100%) rotate(360deg); }
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
                .batch-cd__watch-dial,
                .batch-cd__sep {
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
                        seconds = el.querySelector('[data-cd-seconds]');

                    function tick() {
                        var left = deadline - Date.now();

                        if (left <= 0) {
                            days.textContent = hours.textContent = minutes.textContent =
                                seconds.textContent = '00';
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
                        days.textContent = pad(Math.floor(s / 86400));
                        hours.textContent = pad(Math.floor(s / 3600) % 24);
                        minutes.textContent = pad(Math.floor(s / 60) % 60);
                        seconds.textContent = pad(s % 60);
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
