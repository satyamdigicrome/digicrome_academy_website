{{--
    HOME PAGE 2 — "TRUSTED BY LEARNERS"
    A laurel on each side with the ratings in the middle. The laurel is drawn
    inline: leaves are placed along an arc, and the right one is the same SVG
    mirrored in CSS.
--}}
@php
    $ratings = [
        ['fa-solid fa-star', '4.8', true, 'Learner rating'],
        ['fa-solid fa-user-graduate', '20k+', false, 'Successful learners'],
        ['fa-solid fa-briefcase', '450+', false, 'Hiring partners'],
    ];

    // Leaves along a left-facing arc: centre (120,120), radius 96,
    // from the bottom (100deg) to the top (262deg) of the branch.
    $laurelLeaves = [];
    $steps = 9;
    for ($i = 0; $i < $steps; $i++) {
        $deg = 104 + $i * (154 / ($steps - 1));
        $rad = deg2rad($deg);
        $x = 120 + 96 * cos($rad);
        $y = 120 + 96 * sin($rad);
        $grow = $deg + 90; // direction of growth along the branch
        $size = 1 - $i * 0.045; // leaves get smaller toward the tip
        foreach ([-38, 38] as $spread) {
            $laurelLeaves[] = [round($x, 1), round($y, 1), round($grow + $spread, 1), round(15 * $size, 1), round(6 * $size, 1)];
        }
    }
@endphp

<section class="h2-trust">
    <div class="container">
        <div class="h2-trust__inner">
            @foreach (['left', 'right'] as $side)
                @if ($side === 'right')
                    <div class="h2-trust__content">
                        <h2>Trusted by learners</h2>
                        <p>20,000+ Digicrome learners trained by 130+ expert instructors, with 5,000+ placed across
                            450+ hiring partners.</p>
                        <div class="h2-ratings">
                            @foreach ($ratings as [$icon, $value, $star, $label])
                                <div class="h2-rating">
                                    <span class="h2-rating__icon"><i class="{{ $icon }}"></i></span>
                                    <div>
                                        <div class="h2-rating__value">{{ $value }}
                                            @if ($star)
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                        </div>
                                        <div class="h2-rating__label">{{ $label }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <svg class="h2-laurel h2-laurel--{{ $side }}" viewBox="0 0 120 240" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M{{ 120 + 96 * cos(deg2rad(104)) }} {{ 120 + 96 * sin(deg2rad(104)) }} A96 96 0 0 1 {{ 120 + 96 * cos(deg2rad(258)) }} {{ 120 + 96 * sin(deg2rad(258)) }}"
                        fill="none" stroke="#f29c12" stroke-width="2.5" stroke-linecap="round" opacity=".55" />
                    @foreach ($laurelLeaves as [$lx, $ly, $angle, $rx, $ry])
                        <ellipse cx="{{ $rx }}" cy="0" rx="{{ $rx }}" ry="{{ $ry }}"
                            transform="translate({{ $lx }} {{ $ly }}) rotate({{ $angle }})"
                            fill="{{ $loop->even ? '#f29c12' : '#1a1447' }}" opacity="{{ $loop->even ? '.85' : '.75' }}" />
                    @endforeach
                </svg>
            @endforeach
        </div>
    </div>
</section>
