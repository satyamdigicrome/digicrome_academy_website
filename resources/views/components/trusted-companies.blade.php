@props(['companyLogos'])

@php
    $tcLogos = collect($companyLogos)->values();
    $tcRows = $tcLogos->count() > 1
        ? $tcLogos->chunk((int) ceil($tcLogos->count() / 2))
        : collect([$tcLogos]);
@endphp

<section class="tc-section" aria-labelledby="tc-title">
    <div class="tc-panel">
        <div class="tc-head">
            <div>
                <span class="tc-eyebrow"><span class="tc-dot"></span>Where our learners work</span>
                <h2 id="tc-title" class="tc-title">
                    Trusted by <span class="tc-accent">world's best</span> organisations
                </h2>
            </div>
            <p class="tc-sub">Our alumni build careers at leading companies across tech, finance, consulting and more.</p>
        </div>

        <div class="tc-rows">
            @foreach ($tcRows as $rowIndex => $row)
                <div class="tc-row {{ $rowIndex % 2 ? 'tc-row--reverse' : '' }}">
                    <div class="tc-track" style="--tc-duration: {{ max(30, $row->count() * 3) }}s">
                        @foreach ([false, true] as $isClone)
                            @foreach ($row as $logo)
                                <div class="tc-item" @if ($isClone) aria-hidden="true" @endif>
                                    <img loading="lazy" src="{{ asset('storage/' . $logo->image) }}"
                                        alt="{{ $isClone ? '' : 'Partner company logo' }}" width="140" height="56"
                                        onerror="this.closest('.tc-item').remove()">
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .tc-section {
        padding: 56px 0;
    }

    .tc-panel {
        position: relative;
        background:
            radial-gradient(circle at 0% 0%, rgba(242, 156, 18, 0.10), transparent 40%),
            radial-gradient(circle at 100% 100%, rgba(26, 20, 71, 0.06), transparent 45%),
            #fffaf3;
        border: 1px solid #f3e6d1;
        border-radius: 24px;
        padding: 44px 0 36px;
        overflow: hidden;
    }

    .tc-head {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        padding: 0 44px;
        margin-bottom: 32px;
    }

    .tc-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #b86e00;
        background: rgba(242, 156, 18, 0.12);
        border-radius: 999px;
        padding: 6px 14px;
        margin-bottom: 14px;
    }

    .tc-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #f29c12;
        box-shadow: 0 0 0 4px rgba(242, 156, 18, 0.2);
    }

    .tc-title {
        font-size: clamp(1.6rem, 3vw, 2.3rem);
        font-weight: 700;
        line-height: 1.2;
        color: #1a1447;
        text-transform: none;
        margin: 0;
    }

    .tc-accent {
        color: #f29c12;
    }

    .tc-sub {
        max-width: 340px;
        margin: 0;
        font-size: 15px;
        line-height: 1.6;
        color: #5b5873;
    }

    .tc-row {
        overflow: hidden;
        padding: 14px 0;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
    }

    .tc-track {
        display: flex;
        align-items: center;
        gap: 18px;
        width: max-content;
        padding-right: 18px; /* matches gap so the loop seam is even */
        will-change: transform;
        animation: tcScroll var(--tc-duration, 60s) linear infinite;
    }

    .tc-row--reverse .tc-track {
        animation-direction: reverse;
    }

    .tc-row:hover .tc-track {
        animation-play-state: paused;
    }

    .tc-item {
        flex: 0 0 auto;
        width: 190px;
        height: 84px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 14px 22px;
        background: #fff;
        border: 1px solid #efe8dc;
        border-radius: 16px;
        box-shadow: 0 2px 6px rgba(26, 20, 71, 0.04);
        transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    }

    .tc-item:hover {
        transform: translateY(-4px);
        border-color: #f29c12;
        box-shadow: 0 12px 24px rgba(242, 156, 18, 0.18);
    }

    .tc-item img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        /* hide alt text while a lazy logo is still loading */
        color: transparent;
        font-size: 0;
    }

    @keyframes tcScroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }

    @media (max-width: 991.98px) {
        .tc-head {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .tc-sub {
            max-width: none;
        }
    }

    @media (max-width: 575.98px) {
        .tc-section {
            padding: 36px 0;
        }

        .tc-panel {
            border-radius: 18px;
            padding: 30px 0 24px;
        }

        .tc-head {
            padding: 0 20px;
            margin-bottom: 20px;
        }

        .tc-track {
            gap: 12px;
            padding-right: 12px;
        }

        .tc-item {
            width: 140px;
            height: 66px;
            padding: 10px 16px;
            border-radius: 12px;
        }

        .tc-row {
            padding: 8px 0;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .tc-track {
            animation: none;
        }
    }
</style>
