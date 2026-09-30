{{--
    TRUSTED BY LEARNERS — review platforms with ratings, framed by a golden
    laurel on each side. Replaces the old "See What Our Learners Say!" block.

    Edit the ratings below; stars fill automatically from the rating value.
    Every class is prefixed "tl-" so it can't clash with theme styles.
--}}
@php
    $tlReviews = [
        ['logo' => 'assets/images/see_what/google_home.svg', 'name' => 'Google', 'rating' => 4.8, 'count' => '399+ Google reviews'],
        ['logo' => 'assets/images/see_what/course-report.png', 'name' => 'Course Report', 'rating' => 4.8, 'count' => '1568+ Course Report reviews'],
        ['logo' => 'assets/images/see_what/ambition-box.jpeg', 'name' => 'AmbitionBox', 'rating' => 4.3, 'count' => '50+ AmbitionBox reviews'],
        // ['logo' => 'assets/images/see_what/muthshout_home.svg', 'name' => 'MouthShut', 'rating' => 4.5, 'count' => '230+ MouthShut reviews'],
        ['logo' => 'assets/images/see_what/favicon.ico', 'name' => 'Glassdoor', 'rating' => 4.0, 'count' => '100+ Glassdoor reviews'],
    ];

    // Laurel leaves placed along a left-facing arc (centre 150,150 / radius 128),
    // from the base of the branch (112deg) to its tip (250deg).
    $tlLeaves = [];
    $tlSteps = 11;
    for ($i = 0; $i < $tlSteps; $i++) {
        $deg = 112 + $i * (138 / ($tlSteps - 1));
        $rad = deg2rad($deg);
        $x = 150 + 128 * cos($rad);
        $y = 150 + 128 * sin($rad);
        $grow = $deg + 90;              // direction the branch grows at this point
        $scale = 1 - $i * 0.035;        // leaves shrink toward the tip
        foreach ([-40, 40] as $spread) {
            $tlLeaves[] = [round($x, 1), round($y, 1), round($grow + $spread, 1), round(19 * $scale, 1), round(7.5 * $scale, 1)];
        }
    }
    $tlStemStart = [round(150 + 128 * cos(deg2rad(112)), 1), round(150 + 128 * sin(deg2rad(112)), 1)];
    $tlStemEnd = [round(150 + 128 * cos(deg2rad(250)), 1), round(150 + 128 * sin(deg2rad(250)), 1)];
@endphp

<section class="tl-area" aria-labelledby="tl-heading">
    <div class="container">
        <div class="tl-inner">
            @foreach (['left', 'right'] as $side)
                @if ($side === 'right')
                    <div class="tl-content">
                        <h2 id="tl-heading">Trusted by learners</h2>
                        <p class="tl-sub">Thousands of learners have chosen Digicrome to advance their careers.</p>

                        <div class="tl-reviews">
                            @foreach ($tlReviews as $review)
                                <a class="tl-review" href="{{ route('success_stories') }}">
                                    <span class="tl-review__logo">
                                        <img src="{{ asset($review['logo']) }}" alt="{{ $review['name'] }} logo"
                                            width="34" height="34" loading="lazy" decoding="async">
                                    </span>
                                    <span class="tl-review__body">
                                        <span class="tl-review__score">
                                            {{ number_format($review['rating'], 1) }}
                                            <span class="tl-stars" role="img"
                                                aria-label="{{ $review['rating'] }} out of 5 stars">
                                                <span class="tl-stars__fill"
                                                    style="width: {{ $review['rating'] / 5 * 100 }}%">★★★★★</span>★★★★★
                                            </span>
                                        </span>
                                        <span class="tl-review__count">{{ $review['count'] }}</span>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <svg class="tl-laurel tl-laurel--{{ $side }}" viewBox="0 0 130 300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="tlGold-{{ $side }}" x1="0" y1="0" x2="1" y2="1">
                            {{-- metallic pure gold: deep gold -> bright highlight -> deep gold --}}
                            <stop offset="0" stop-color="#bf953f" />
                            <stop offset=".3" stop-color="#fcf6ba" />
                            <stop offset=".55" stop-color="#d4af37" />
                            <stop offset=".8" stop-color="#fbf5b7" />
                            <stop offset="1" stop-color="#aa771c" />
                        </linearGradient>
                    </defs>
                    <path d="M{{ $tlStemStart[0] }} {{ $tlStemStart[1] }} A128 128 0 0 1 {{ $tlStemEnd[0] }} {{ $tlStemEnd[1] }}"
                        fill="none" stroke="#d4af37" stroke-width="3" stroke-linecap="round" />
                    @foreach ($tlLeaves as [$lx, $ly, $angle, $rx, $ry])
                        <ellipse cx="{{ $rx }}" cy="0" rx="{{ $rx }}" ry="{{ $ry }}"
                            transform="translate({{ $lx }} {{ $ly }}) rotate({{ $angle }})"
                            fill="url(#tlGold-{{ $side }})" />
                    @endforeach
                </svg>
            @endforeach
        </div>
    </div>
</section>

<style>
    .tl-area {
        padding: 70px 0;
        background:
            radial-gradient(ellipse 55% 70% at 50% 0%, rgba(245, 197, 66, .12), transparent 70%),
            #1a1447;
        color: #fff;
    }

    .tl-inner {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: clamp(8px, 2.5vw, 36px);
    }

    .tl-laurel {
        flex: 0 0 auto;
        width: clamp(56px, 8vw, 110px);
        height: auto;
        filter: drop-shadow(0 0 12px rgba(212, 175, 55, .35));
    }

    .tl-laurel--right {
        transform: scaleX(-1);
    }

    .tl-content {
        flex: 1 1 auto;
        max-width: 1000px;
        text-align: center;
    }

    .tl-content h2 {
        margin: 0;
        color: #fff;
        font-size: clamp(28px, 3.2vw, 40px);
        font-weight: 800;
    }

    .tl-sub {
        margin: 10px auto 0;
        max-width: 640px;
        color: rgba(255, 255, 255, .72);
        font-size: 16px;
    }

    .tl-reviews {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 22px 34px;
        margin-top: 32px;
    }

    .tl-review {
        display: flex;
        align-items: center;
        gap: 12px;
        text-align: left;
        color: inherit;
        text-decoration: none;
        transition: transform .2s ease;
    }

    .tl-review:hover {
        transform: translateY(-3px);
        color: inherit;
    }

    .tl-review__logo {
        display: grid;
        flex: 0 0 auto;
        place-items: center;
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 6px 16px rgba(0, 0, 0, .25);
    }

    .tl-review__logo img {
        width: 34px;
        height: 34px;
        object-fit: contain;
    }

    .tl-review__body {
        display: flex;
        flex-direction: column;
    }

    .tl-review__score {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #fff;
        font-size: 22px;
        font-weight: 800;
        line-height: 1.1;
    }

    /* small golden stars: grey base with a gold layer clipped to the rating */
    .tl-stars {
        position: relative;
        display: inline-block;
        color: rgba(255, 255, 255, .25);
        font-size: 13px;
        letter-spacing: 1px;
        line-height: 1;
        white-space: nowrap;
    }

    .tl-stars__fill {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        color: #f5c542;
    }

    .tl-review__count {
        margin-top: 3px;
        color: rgba(255, 255, 255, .65);
        font-size: 13px;
        font-weight: 600;
    }

    @media (max-width: 767.98px) {
        .tl-area {
            padding: 48px 0;
        }

        .tl-inner {
            align-items: flex-start;
        }

        .tl-laurel {
            width: 40px;
            margin-top: 4px;
        }

        .tl-reviews {
            display: grid;
            grid-template-columns: 1fr;
            justify-items: start;
            gap: 16px;
            max-width: 240px;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>
