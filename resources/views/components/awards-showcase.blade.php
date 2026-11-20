@props(['awords' => collect()])

@php
    $asAwards = collect($awords)->values();
    $asPhotos = ['p3', 'p4', 'p5', 'p1', 'p2', 'p6', 'p7', 'p8'];
@endphp

<section class="as-section" id="awards" aria-labelledby="as-title">
    <div class="container">

        {{-- 1. Header --}}
        <div class="as-head as-reveal">
            <div class="as-head-text">
                <span class="as-eyebrow"><i class="bi bi-trophy-fill" aria-hidden="true"></i> Awards &amp; recognition</span>
                <h2 id="as-title" class="as-title">
                    Celebrated for <span class="as-accent">excellence</span> in education
                </h2>
                <p class="as-lead">
                    In our EdTech journey of more than a decade, Digicrome has been honoured on national stages for
                    innovative teaching, learner success and quality digital education.
                </p>
            </div>
            <div class="as-stats">
                <div class="as-stat">
                    <span class="as-stat-num"><span class="as-count" data-to="10">10</span>+</span>
                    <span class="as-stat-label">Years of excellence</span>
                </div>
                @if ($asAwards->count())
                    <div class="as-stat">
                        <span class="as-stat-num"><span class="as-count" data-to="{{ $asAwards->count() }}">{{ $asAwards->count() }}</span>+</span>
                        <span class="as-stat-label">Awards &amp; honours</span>
                    </div>
                @endif
                <div class="as-stat">
                    <span class="as-stat-num"><span class="as-count" data-to="2026">2026</span></span>
                    <span class="as-stat-label">Best EdTech winner</span>
                </div>
            </div>
        </div>

        <div class="as-grid">

            {{-- 2. Ceremony video --}}
            <div class="as-card as-video-card as-reveal" style="--as-delay: .05s">
                <div class="as-video-frame">
                    <iframe class="js-deferred-iframe as-video" loading="lazy" src="about:blank"
                        data-src="https://player.vimeo.com/video/1164337631?title=0&byline=0&portrait=0&badge=0&share=0&watchlater=0&controls=1&autopause=0&autoplay=1&loop=1&muted=1"
                        title="Digicrome award ceremony" frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <span class="as-live"><span class="as-live-dot"></span>Award moment</span>
                    <button type="button" class="as-sound" aria-pressed="false" aria-label="Turn sound on">
                        <i class="bi bi-volume-mute-fill" aria-hidden="true"></i><span>Tap for sound</span>
                    </button>
                </div>
                <div class="as-video-caption">
                    <div>
                        <h3>On stage at the Bharat Gaurav Summit 2026</h3>
                        <p>Watch the moment Digicrome was named Best EdTech in Online &amp; Digital Education.</p>
                    </div>
                    <i class="bi bi-camera-reels as-video-icon" aria-hidden="true"></i>
                </div>
            </div>

            {{-- 3. Featured award + CTA --}}
            <div class="as-card as-feature as-reveal" style="--as-delay: .15s">
                <div class="as-feature-top">
                    <span class="as-medal" aria-hidden="true"><i class="bi bi-award-fill"></i></span>
                    <span class="as-chip">Featured award · 2026</span>
                </div>
                <h3 class="as-feature-title">Best EdTech in Online &amp; Digital Education</h3>
                <p class="as-feature-sub">Bharat Gaurav Education Summit &amp; Awards</p>
                <ul class="as-list">
                    <li><i class="bi bi-trophy-fill" aria-hidden="true"></i>
                        <span><b>Bharat Gaurav Awards 2026</b> for excellence in instruction and learner success</span></li>
                    <li><i class="bi bi-trophy-fill" aria-hidden="true"></i>
                        <span><b>Most Promising Online Education EdTech Platform 2026</b>, known for quality and innovation</span></li>
                </ul>
                <div class="as-feature-cta">
                    <a href="javascript:void(0);" onclick="openModal()" class="as-btn">
                        Get started <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                    <span class="as-rating"><i class="bi bi-star-fill" aria-hidden="true"></i> 4.8 learner rating</span>
                </div>
            </div>

            {{-- 4. Ceremony photo stack --}}
            <div class="as-card as-photos as-reveal" style="--as-delay: .25s">
                <div class="as-stack" aria-live="polite">
                    @foreach ($asPhotos as $i => $photo)
                        <img class="as-stack-img" data-pos="{{ $i }}" loading="lazy" width="490" height="587"
                            src="{{ asset('assets/images/' . $photo . '.webp') }}"
                            alt="Digicrome team at the award ceremony, photo {{ $i + 1 }}">
                    @endforeach
                </div>
                <div class="as-photos-text">
                    <span class="as-chip as-chip--soft">From the stage</span>
                    <h3>Moments we'll never forget</h3>
                    <p>Our team receiving honours for transforming tech education.</p>
                    <div class="as-photos-nav">
                        <button type="button" class="as-next" aria-label="Show next photo">
                            <i class="bi bi-arrow-repeat" aria-hidden="true"></i>
                        </button>
                        <span class="as-photo-count"><b class="as-photo-cur">1</b> / {{ count($asPhotos) }}</span>
                    </div>
                </div>
                <div class="as-thumbs">
                    @foreach ($asPhotos as $i => $photo)
                        <button type="button" class="as-thumb {{ $i === 0 ? 'is-active' : '' }}" data-index="{{ $i }}"
                            aria-label="Show photo {{ $i + 1 }}">
                            <img loading="lazy" width="490" height="587" alt=""
                                src="{{ asset('assets/images/' . $photo . '.webp') }}">
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 5. Trophy shelf --}}
        @if ($asAwards->count())
            <div class="as-shelf as-reveal" style="--as-delay: .1s">
                <div class="as-shelf-head">
                    <h3><i class="bi bi-stars" aria-hidden="true"></i> Moments of honour</h3>
                    <span>Tap any award to view it</span>
                </div>
                <div class="as-shelf-row">
                    <div class="as-shelf-track" style="--as-duration: {{ max(25, $asAwards->count() * 4) }}s">
                        @foreach ([false, true] as $isClone)
                            @foreach ($asAwards as $award)
                                <button type="button" class="as-trophy"
                                    data-full="{{ asset('storage/' . $award->image) }}"
                                    @if ($isClone) aria-hidden="true" tabindex="-1" @else aria-label="View award {{ $loop->iteration }}" @endif>
                                    <img loading="lazy" src="{{ asset('storage/' . $award->image) }}" alt=""
                                        width="200" height="140" onerror="this.closest('.as-trophy').remove()">
                                </button>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>

    <dialog class="as-lightbox" aria-label="Award preview">
        <button type="button" class="as-lightbox-close" aria-label="Close"><i class="bi bi-x-lg" aria-hidden="true"></i></button>
        <img src="" alt="Award">
    </dialog>
</section>

<style>
    .as-section {
        --as-navy: #1a1447;
        --as-orange: #f29c12;
        --as-gold: #e0a526;
        --as-cream: #fffaf3;
        --as-line: #f1e5d0;
        --as-muted: #5b5873;
        position: relative;
        padding: 72px 0;
        overflow: hidden;
        background:
            radial-gradient(600px 300px at 10% 0%, rgba(242, 156, 18, .10), transparent 70%),
            radial-gradient(500px 300px at 95% 100%, rgba(26, 20, 71, .06), transparent 70%);
    }

    /* reveal on scroll (hidden state only applies once JS is running) */
    .as-js .as-reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.2, .7, .2, 1);
        transition-delay: var(--as-delay, 0s);
    }

    .as-js .as-reveal.is-in {
        opacity: 1;
        transform: none;
    }

    /* header */
    .as-head {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 32px;
        margin-bottom: 36px;
    }

    .as-head-text {
        max-width: 620px;
    }

    .as-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: #b86e00;
        background: rgba(242, 156, 18, .12);
        border-radius: 999px;
        padding: 6px 14px;
        margin-bottom: 14px;
    }

    .as-title {
        font-size: clamp(1.7rem, 3.2vw, 2.5rem);
        font-weight: 700;
        line-height: 1.2;
        color: var(--as-navy);
        text-transform: none;
        margin: 0 0 12px;
    }

    .as-accent {
        background: linear-gradient(90deg, #f29c12, #f7c45c, #f29c12);
        background-size: 200% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: asShimmerText 4s linear infinite;
    }

    .as-lead {
        margin: 0;
        color: var(--as-muted);
        font-size: 16px;
        line-height: 1.7;
    }

    .as-stats {
        display: flex;
        gap: 12px;
        flex-shrink: 0;
    }

    .as-stat {
        min-width: 128px;
        background: #fff;
        border: 1px solid var(--as-line);
        border-radius: 16px;
        padding: 14px 18px;
        box-shadow: 0 6px 18px rgba(26, 20, 71, .05);
    }

    .as-stat-num {
        display: block;
        font-size: 28px;
        font-weight: 800;
        line-height: 1.1;
        color: var(--as-navy);
    }

    .as-stat-label {
        display: block;
        margin-top: 4px;
        font-size: 13px;
        line-height: 1.3;
        color: var(--as-muted);
    }

    /* bento grid */
    .as-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.35fr) minmax(0, 1fr);
        grid-template-areas:
            "video feature"
            "photos photos";
        gap: 20px;
    }

    .as-card {
        position: relative;
        background: #fff;
        border: 1px solid var(--as-line);
        border-radius: 22px;
        box-shadow: 0 10px 30px rgba(26, 20, 71, .06);
        overflow: hidden;
    }

    /* video */
    .as-video-card {
        grid-area: video;
        display: flex;
        flex-direction: column;
        padding: 14px;
        background: var(--as-cream);
    }

    .as-video-frame {
        position: relative;
        aspect-ratio: 16 / 9;
        border-radius: 16px;
        overflow: hidden;
        background: #ece4d6;
    }

    .as-video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .as-live {
        position: absolute;
        top: 12px;
        left: 12px;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: 12px;
        font-weight: 700;
        color: var(--as-navy);
        background: rgba(255, 255, 255, .92);
        border-radius: 999px;
        padding: 5px 12px;
        pointer-events: none;
    }

    .as-live-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #e53935;
        animation: asPulse 1.6s ease-out infinite;
    }

    .as-sound {
        position: absolute;
        right: 12px;
        bottom: 56px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border: 0;
        font-size: 13px;
        font-weight: 600;
        color: #fff;
        background: rgba(26, 20, 71, .78);
        border-radius: 999px;
        padding: 7px 14px;
        cursor: pointer;
        transition: background .2s ease, transform .2s ease;
    }

    .as-sound:hover {
        background: var(--as-orange);
        transform: translateY(-2px);
    }

    .as-video-caption {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        padding: 18px 8px 6px;
        margin-top: auto;
    }

    .as-video-caption h3 {
        font-size: 19px;
        font-weight: 700;
        color: var(--as-navy);
        margin: 0 0 6px;
    }

    .as-video-caption p {
        margin: 0;
        font-size: 14px;
        color: var(--as-muted);
    }

    .as-video-icon {
        font-size: 26px;
        color: var(--as-orange);
    }

    /* featured award */
    .as-feature {
        grid-area: feature;
        display: flex;
        flex-direction: column;
        padding: 24px 24px 22px;
    }

    .as-feature .as-feature-cta {
        margin-top: auto;
    }

    .as-feature::after {
        content: "";
        position: absolute;
        top: 0;
        left: -60%;
        width: 40%;
        height: 100%;
        background: linear-gradient(105deg, transparent, rgba(255, 214, 120, .35), transparent);
        transform: skewX(-18deg);
        animation: asShine 6s ease-in-out infinite;
        pointer-events: none;
    }

    .as-feature-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
    }

    .as-medal {
        width: 52px;
        height: 52px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        font-size: 26px;
        color: #fff;
        background: linear-gradient(135deg, #f7c45c, #f29c12);
        box-shadow: 0 8px 18px rgba(242, 156, 18, .35);
        animation: asFloat 3.5s ease-in-out infinite;
    }

    .as-chip {
        font-size: 12px;
        font-weight: 700;
        color: #b86e00;
        background: rgba(242, 156, 18, .12);
        border-radius: 999px;
        padding: 5px 12px;
    }

    .as-chip--soft {
        color: var(--as-navy);
        background: rgba(26, 20, 71, .07);
    }

    .as-feature-title {
        font-size: 21px;
        font-weight: 700;
        line-height: 1.3;
        color: var(--as-navy);
        margin: 0 0 4px;
    }

    .as-feature-sub {
        font-size: 14px;
        color: var(--as-muted);
        margin: 0 0 14px;
    }

    .as-list {
        list-style: none;
        padding: 0;
        margin: 0 0 18px;
    }

    .as-list li {
        display: flex;
        gap: 10px;
        font-size: 14px;
        line-height: 1.5;
        color: #3d3a55;
        margin-bottom: 8px;
    }

    .as-list i {
        color: var(--as-gold);
        margin-top: 2px;
    }

    .as-feature-cta {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 14px;
    }

    .as-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        background: var(--as-orange);
        border-radius: 999px;
        padding: 11px 22px;
        text-decoration: none;
        box-shadow: 0 8px 20px rgba(242, 156, 18, .3);
        transition: background .25s ease, transform .25s ease;
    }

    .as-btn:hover {
        color: #fff;
        background: var(--as-navy);
        transform: translateY(-2px);
    }

    .as-btn i {
        transition: transform .25s ease;
    }

    .as-btn:hover i {
        transform: translateX(4px);
    }

    .as-rating {
        font-size: 13px;
        font-weight: 600;
        color: var(--as-muted);
    }

    .as-rating i {
        color: var(--as-gold);
    }

    /* photo stack */
    .as-photos {
        grid-area: photos;
        display: flex;
        align-items: center;
        gap: 28px;
        padding: 22px 26px;
    }

    .as-photos-text {
        flex: 0 0 240px;
    }

    .as-thumbs {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 12px;
    }

    .as-thumb {
        padding: 0;
        border: 2px solid transparent;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 4 / 3;
        background: var(--as-cream);
        cursor: pointer;
        opacity: .65;
        transition: opacity .3s ease, border-color .3s ease, transform .3s ease;
    }

    .as-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 70%;
    }

    .as-thumb:hover {
        opacity: 1;
        transform: translateY(-3px);
    }

    .as-thumb.is-active {
        opacity: 1;
        border-color: var(--as-orange);
        box-shadow: 0 6px 16px rgba(242, 156, 18, .25);
    }

    .as-stack {
        position: relative;
        flex: 0 0 150px;
        aspect-ratio: 490 / 587;
        margin: 6px 12px 6px 4px;
    }

    .as-stack-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
        border: 4px solid #fff;
        box-shadow: 0 8px 20px rgba(26, 20, 71, .18);
        opacity: 0;
        transition: transform .7s cubic-bezier(.2, .7, .2, 1), opacity .5s ease;
    }

    .as-stack-img[data-pos="0"] { opacity: 1; z-index: 3; transform: rotate(-2deg); }
    .as-stack-img[data-pos="1"] { opacity: 1; z-index: 2; transform: rotate(5deg) translateX(10px); }
    .as-stack-img[data-pos="2"] { opacity: 1; z-index: 1; transform: rotate(-8deg) translateX(-8px); }

    .as-stack-img.is-leaving {
        z-index: 4;
        opacity: 0;
        transform: translateX(-60%) rotate(-18deg);
    }

    .as-photos-text h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--as-navy);
        margin: 10px 0 6px;
    }

    .as-photos-text p {
        font-size: 14px;
        color: var(--as-muted);
        margin: 0 0 14px;
    }

    .as-photos-nav {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .as-next {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid var(--as-line);
        background: var(--as-cream);
        color: var(--as-navy);
        font-size: 18px;
        cursor: pointer;
        transition: background .2s ease, color .2s ease, transform .4s ease;
    }

    .as-next:hover {
        background: var(--as-orange);
        color: #fff;
        transform: rotate(180deg);
    }

    .as-photo-count {
        font-size: 14px;
        color: var(--as-muted);
    }

    .as-photo-count b {
        color: var(--as-navy);
    }

    /* trophy shelf */
    .as-shelf {
        margin-top: 20px;
        background: var(--as-cream);
        border: 1px solid var(--as-line);
        border-radius: 22px;
        padding: 20px 0 22px;
    }

    .as-shelf-head {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        gap: 12px;
        padding: 0 24px;
        margin-bottom: 14px;
    }

    .as-shelf-head h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--as-navy);
        margin: 0;
    }

    .as-shelf-head h3 i {
        color: var(--as-gold);
    }

    .as-shelf-head span {
        font-size: 13px;
        color: var(--as-muted);
    }

    .as-shelf-row {
        overflow: hidden;
        padding: 10px 0 14px;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
    }

    .as-shelf-track {
        display: flex;
        gap: 18px;
        padding-right: 18px;
        width: max-content;
        will-change: transform;
        animation: asScroll var(--as-duration, 40s) linear infinite;
    }

    .as-shelf-row:hover .as-shelf-track,
    .as-shelf-row:focus-within .as-shelf-track {
        animation-play-state: paused;
    }

    .as-trophy {
        flex: 0 0 auto;
        width: 200px;
        height: 140px;
        padding: 10px;
        background: #fff;
        border: 1px solid var(--as-line);
        border-radius: 16px;
        cursor: zoom-in;
        transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    }

    .as-trophy:hover,
    .as-trophy:focus-visible {
        transform: translateY(-6px);
        border-color: var(--as-gold);
        box-shadow: 0 12px 26px rgba(224, 165, 38, .28);
        outline: none;
    }

    .as-trophy img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        color: transparent;
        font-size: 0;
    }

    /* lightbox */
    .as-lightbox {
        border: 0;
        padding: 0;
        border-radius: 18px;
        max-width: min(90vw, 760px);
        max-height: 88vh;
        background: #fff;
        overflow: visible;
    }

    .as-lightbox::backdrop {
        background: rgba(26, 20, 71, .6);
        backdrop-filter: blur(3px);
    }

    .as-lightbox img {
        display: block;
        max-width: 100%;
        max-height: 84vh;
        border-radius: 18px;
        object-fit: contain;
    }

    .as-lightbox-close {
        position: absolute;
        top: -14px;
        right: -14px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 0;
        background: var(--as-orange);
        color: #fff;
        cursor: pointer;
        box-shadow: 0 6px 14px rgba(0, 0, 0, .2);
    }

    @keyframes asScroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }

    @keyframes asShine {
        0%, 70% { left: -60%; }
        100% { left: 130%; }
    }

    @keyframes asFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @keyframes asPulse {
        0% { box-shadow: 0 0 0 0 rgba(229, 57, 53, .55); }
        100% { box-shadow: 0 0 0 8px rgba(229, 57, 53, 0); }
    }

    @keyframes asShimmerText {
        to { background-position: -200% 0; }
    }

    @media (max-width: 1199.98px) {
        .as-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 991.98px) {
        .as-section {
            padding: 56px 0;
        }

        .as-grid {
            grid-template-columns: minmax(0, 1fr);
            grid-template-areas: "video" "feature" "photos";
        }

        .as-photos {
            flex-wrap: wrap;
        }

        .as-photos-text {
            flex: 1 1 200px;
        }

        .as-thumbs {
            flex: 1 1 100%;
        }
    }

    @media (max-width: 575.98px) {
        .as-stats {
            width: 100%;
            gap: 8px;
        }

        .as-stat {
            flex: 1;
            min-width: 0;
            padding: 10px 12px;
        }

        .as-stat-num {
            font-size: 22px;
        }

        .as-stat-label {
            font-size: 12px;
        }

        .as-sound span {
            display: none;
        }

        .as-sound {
            bottom: 12px;
        }

        .as-video-caption h3 {
            font-size: 17px;
        }

        .as-feature {
            padding: 20px 18px;
        }

        .as-photos {
            flex-direction: column;
            align-items: flex-start;
            padding: 22px 18px;
        }

        .as-stack {
            flex-basis: auto;
            width: 150px;
            align-self: center;
        }

        .as-photos-text,
        .as-thumbs {
            flex: none;
            width: 100%;
        }

        .as-thumbs {
            gap: 8px;
        }

        .as-shelf-head {
            flex-direction: column;
            padding: 0 18px;
        }

        .as-trophy {
            width: 150px;
            height: 108px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .as-js .as-reveal { opacity: 1; transform: none; transition: none; }
        .as-shelf-track,
        .as-feature::after,
        .as-medal,
        .as-live-dot,
        .as-accent { animation: none; }
        .as-stack-img { transition: none; }
    }
</style>

<script>
    (function () {
        var section = document.getElementById('awards');
        if (!section) return;
        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        section.classList.add('as-js');

        /* reveal + count-up when scrolled into view */
        function countUp(el) {
            var to = parseInt(el.dataset.to, 10) || 0;
            if (reduceMotion || to < 1) { el.textContent = to; return; }
            var from = to > 1000 ? to - 30 : 0, start = null, dur = 1400;
            function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                el.textContent = Math.round(from + (to - from) * (1 - Math.pow(1 - p, 3)));
                if (p < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        }

        var reveals = section.querySelectorAll('.as-reveal');
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('is-in');
                    entry.target.querySelectorAll('.as-count').forEach(countUp);
                    io.unobserve(entry.target);
                });
            }, { threshold: 0.15 });
            reveals.forEach(function (el) { io.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('is-in'); });
        }

        /* Vimeo sound toggle (uses the player's postMessage API) */
        var iframe = section.querySelector('.as-video');
        var soundBtn = section.querySelector('.as-sound');
        if (iframe && soundBtn) {
            soundBtn.addEventListener('click', function () {
                if (!iframe.dataset.activated && iframe.dataset.src) {
                    iframe.dataset.activated = '1';
                    iframe.src = iframe.dataset.src;
                }
                var on = soundBtn.getAttribute('aria-pressed') !== 'true';
                var win = iframe.contentWindow;
                if (win) {
                    win.postMessage(JSON.stringify({ method: 'setMuted', value: !on }), '*');
                    win.postMessage(JSON.stringify({ method: 'setVolume', value: on ? 1 : 0 }), '*');
                    if (on) win.postMessage(JSON.stringify({ method: 'play' }), '*');
                }
                soundBtn.setAttribute('aria-pressed', on ? 'true' : 'false');
                soundBtn.setAttribute('aria-label', on ? 'Turn sound off' : 'Turn sound on');
                soundBtn.querySelector('i').className = on ? 'bi bi-volume-up-fill' : 'bi bi-volume-mute-fill';
                soundBtn.querySelector('span').textContent = on ? 'Sound on' : 'Tap for sound';
            });
        }

        /* photo stack: top photo slides away every 4s */
        var photos = Array.prototype.slice.call(section.querySelectorAll('.as-stack-img'));
        var cur = section.querySelector('.as-photo-cur');
        var stackCard = section.querySelector('.as-photos');
        var thumbs = Array.prototype.slice.call(section.querySelectorAll('.as-thumb'));
        var index = 0, busy = false, timer = null;

        /* photo i sits on top; the rest follow in order behind it */
        function goTo(target) {
            var n = photos.length;
            target = ((target % n) + n) % n;
            if (busy || n < 2 || target === index) return;
            busy = true;
            var top = photos[index];
            top.classList.add('is-leaving');
            setTimeout(function () {
                photos.forEach(function (p, i) { p.dataset.pos = (i - target + n) % n; });
                top.classList.remove('is-leaving');
                index = target;
                if (cur) cur.textContent = index + 1;
                thumbs.forEach(function (t, i) { t.classList.toggle('is-active', i === index); });
                busy = false;
            }, reduceMotion ? 0 : 550);
        }

        function nextPhoto() {
            goTo(index + 1);
        }

        thumbs.forEach(function (t, i) {
            t.addEventListener('click', function () { stopStack(); goTo(i); startStack(); });
        });

        function startStack() {
            if (!reduceMotion && !timer) timer = setInterval(nextPhoto, 4000);
        }

        function stopStack() {
            clearInterval(timer);
            timer = null;
        }

        var nextBtn = section.querySelector('.as-next');
        if (nextBtn) nextBtn.addEventListener('click', function () { stopStack(); nextPhoto(); startStack(); });
        if (stackCard) {
            stackCard.addEventListener('mouseenter', stopStack);
            stackCard.addEventListener('mouseleave', startStack);
        }
        startStack();

        /* award lightbox */
        var dialog = section.querySelector('.as-lightbox');
        if (dialog && typeof dialog.showModal === 'function') {
            var dialogImg = dialog.querySelector('img');
            section.querySelectorAll('.as-trophy').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    dialogImg.src = btn.dataset.full;
                    dialog.showModal();
                });
            });
            dialog.querySelector('.as-lightbox-close').addEventListener('click', function () { dialog.close(); });
            dialog.addEventListener('click', function (e) { if (e.target === dialog) dialog.close(); });
        }
    })();
</script>
