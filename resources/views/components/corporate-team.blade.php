@php
    $teamMembers = $teamMembers ?? [
        [
            'name' => 'Amit Kumar',
            'role' => 'Lead Corporate Trainer',
            'image' => asset('assets/images/team/tl/amit.jpeg'),
            'expertise' => ['Leadership', 'L&D Strategy', 'Soft Skills'],
        ],
        [
            'name' => 'Tarun Adhikari',
            'role' => 'Technical Training Head',
            'image' => asset('assets/images/team/tl/tarun.jpeg'),
            'expertise' => ['Full Stack', 'Cloud', 'DevOps'],
        ],
        [
            'name' => 'Gungun Verma',
            'role' => 'Data & Analytics Mentor',
            'image' => asset('assets/images/team/tl/gungun.jpeg'),
            'expertise' => ['Python', 'Data Science', 'ML'],
        ],
        [
            'name' => 'Sandeep Kumar',
            'role' => 'Business Communication Coach',
            'image' => asset('assets/images/team/tl/sandeep.jpeg'),
            'expertise' => ['Communication', 'Negotiation', 'HR'],
        ],
        [
            'name' => 'Shivangi Baluni',
            'role' => 'Finance & Compliance Trainer',
            'image' => asset('assets/images/team/tl/shivangi.jpeg'),
            'expertise' => ['Fintech', 'Compliance', 'Risk'],
        ],
        [
            'name' => 'Kunal Mahajan',
            'role' => 'Product & UX Mentor',
            'image' => asset('assets/images/team/tl/mehrab.jpeg'),
            'expertise' => ['UX Design', 'Product', 'Figma'],
        ],
        [
            'name' => 'Nadeem Khan',
            'role' => 'Product & UX Mentor',
            'image' => asset('assets/images/team/tl/nadeem.jpeg'),
            'expertise' => ['UX Design', 'Product', 'Figma'],
        ],
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<section class="cttm-section" id="cttm-team">
    <div class="cttm-container">

        <div class="cttm-header">
            <span class="cttm-eyebrow">Our Team</span>
            <h2 class="cttm-heading">The people behind every training</h2>
            <p class="cttm-sub">
                Every program is led by a mentor who has actually done the work —
                not just taught it. Here's who your team will learn from.
            </p>
        </div>

        <div class="cttm-track-wrap">
            <button type="button" class="cttm-nav cttm-nav-prev" id="cttmPrev" aria-label="Scroll to previous mentors">
                <svg viewBox="0 0 24 24" width="20" height="20"><path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>

            <div class="cttm-track" id="cttmTrack">
                @foreach ($teamMembers as $i => $member)
                    <article class="cttm-card" style="transition-delay: {{ $i * 70 }}ms">
                        <div class="cttm-photo-wrap">
                            <img
                                src="{{ $member['image'] }}"
                                alt="{{ $member['name'] }}"
                                class="cttm-photo"
                                loading="lazy"
                            >
                        </div>
                        <div class="cttm-info">
                            <h3 class="cttm-name">{{ $member['name'] }}</h3>
                            <p class="cttm-role">{{ $member['role'] }}</p>
                            <div class="cttm-tags">
                                @foreach ($member['expertise'] as $tag)
                                    <span class="cttm-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <button type="button" class="cttm-nav cttm-nav-next" id="cttmNext" aria-label="Scroll to next mentors">
                <svg viewBox="0 0 24 24" width="20" height="20"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>

        <div class="cttm-dots" id="cttmDots"></div>
    </div>
</section>

<style>
    #cttm-team {
        --cttm-ink: #1b2a4a;
        --cttm-ink-soft: #4b5876;
        --cttm-gold: #c89b3c;
        --cttm-bg: #faf8f5;
        --cttm-card: #ffffff;
        --cttm-border: #e9e4da;
    }

    #cttm-team.cttm-section {
        background: var(--cttm-bg);
        padding: 96px 24px;
        overflow: hidden;
    }

    #cttm-team .cttm-container {
        max-width: 1240px;
        margin: 0 auto;
    }

    #cttm-team .cttm-header {
        max-width: 640px;
        margin: 0 0 56px;
    }

    #cttm-team .cttm-eyebrow {
        display: inline-block;
        font-family: 'Inter', sans-serif;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--cttm-gold);
        margin-bottom: 14px;
    }

    #cttm-team .cttm-heading {
        font-family: 'Fraunces', serif;
        font-optical-sizing: auto;
        font-weight: 600;
        font-size: clamp(30px, 4vw, 44px);
        line-height: 1.15;
        color: var(--cttm-ink);
        margin: 0 0 16px;
        letter-spacing: -0.01em;
    }

    #cttm-team .cttm-sub {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: var(--cttm-ink-soft);
        margin: 0;
    }

    #cttm-team .cttm-track-wrap {
        position: relative;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    #cttm-team .cttm-track {
        display: flex;
        gap: 24px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        padding: 8px 4px 24px;
        cursor: grab;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    #cttm-team .cttm-track::-webkit-scrollbar { display: none; }
    #cttm-team .cttm-track.cttm-dragging { cursor: grabbing; scroll-snap-type: none; }

    #cttm-team .cttm-card {
        flex: 0 0 auto;
        width: 260px;
        scroll-snap-align: start;
        background: var(--cttm-card);
        border: 1px solid var(--cttm-border);
        border-radius: 18px;
        overflow: hidden;
        opacity: 0;
        transform: translateY(28px);
        transition: transform .5s cubic-bezier(.2,.7,.3,1), box-shadow .35s ease, opacity .6s ease, border-color .35s ease;
    }

    #cttm-team .cttm-card.cttm-visible {
        opacity: 1;
        transform: translateY(0);
    }

    #cttm-team .cttm-card:hover {
        box-shadow: 0 20px 40px -16px rgba(27, 42, 74, 0.22);
        border-color: transparent;
        transform: translateY(-6px);
    }

    #cttm-team .cttm-photo-wrap {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        overflow: hidden;
        background: var(--cttm-ink);
    }

    #cttm-team .cttm-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        filter: grayscale(1) brightness(0.92) contrast(1.02);
        transform: scale(1.04);
        transition: filter .6s ease, transform .6s cubic-bezier(.2,.7,.3,1);
    }

    #cttm-team .cttm-card:hover .cttm-photo {
        filter: grayscale(0) brightness(1) contrast(1);
        transform: scale(1.1);
    }

    #cttm-team .cttm-info {
        padding: 20px 20px 22px;
    }

    #cttm-team .cttm-name {
        font-family: 'Fraunces', serif;
        font-weight: 600;
        font-size: 19px;
        color: var(--cttm-ink);
        margin: 0 0 4px;
        position: relative;
        display: inline-block;
    }

    #cttm-team .cttm-name::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -3px;
        height: 2px;
        width: 0%;
        background: var(--cttm-gold);
        transition: width .4s ease;
    }

    #cttm-team .cttm-card:hover .cttm-name::after {
        width: 100%;
    }

    #cttm-team .cttm-role {
        font-family: 'Inter', sans-serif;
        font-size: 13.5px;
        color: var(--cttm-ink-soft);
        margin: 0 0 14px;
    }

    #cttm-team .cttm-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
    }

    #cttm-team .cttm-tag {
        font-family: 'Inter', sans-serif;
        font-size: 11.5px;
        font-weight: 500;
        color: var(--cttm-ink);
        background: rgba(200, 155, 60, 0.12);
        border: 1px solid rgba(200, 155, 60, 0.28);
        padding: 4px 10px;
        border-radius: 999px;
        white-space: nowrap;
    }

    #cttm-team .cttm-nav {
        flex: 0 0 auto;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1px solid var(--cttm-border);
        background: var(--cttm-card);
        color: var(--cttm-ink);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background .25s ease, color .25s ease, border-color .25s ease, transform .2s ease;
        z-index: 2;
    }

    #cttm-team .cttm-nav:hover {
        background: var(--cttm-ink);
        color: #fff;
        border-color: var(--cttm-ink);
        transform: scale(1.06);
    }

    #cttm-team .cttm-nav:active { transform: scale(0.96); }

    #cttm-team .cttm-dots {
        display: none;
        justify-content: center;
        gap: 8px;
        margin-top: 8px;
    }

    #cttm-team .cttm-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--cttm-border);
        transition: background .25s ease, width .25s ease;
    }

    #cttm-team .cttm-dot.cttm-dot-active {
        background: var(--cttm-gold);
        width: 18px;
        border-radius: 3px;
    }

    @media (max-width: 768px) {
        #cttm-team.cttm-section { padding: 64px 18px; }
        #cttm-team .cttm-nav { display: none; }
        #cttm-team .cttm-dots { display: flex; }
        #cttm-team .cttm-card { width: 220px; }
    }

    @media (prefers-reduced-motion: reduce) {
        #cttm-team .cttm-card,
        #cttm-team .cttm-photo,
        #cttm-team .cttm-name::after {
            transition: none !important;
        }
        #cttm-team .cttm-card { opacity: 1; transform: none; }
    }
</style>

<script>
(function () {
    var track = document.getElementById('cttmTrack');
    var prevBtn = document.getElementById('cttmPrev');
    var nextBtn = document.getElementById('cttmNext');
    var dotsWrap = document.getElementById('cttmDots');
    var cards = track ? Array.from(track.querySelectorAll('.cttm-card')) : [];

    if (!track || !cards.length) return;

    // Scroll-in reveal, staggered per card (delay already set inline per card)
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('cttm-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    cards.forEach(function (card) { observer.observe(card); });

    // Arrow navigation — scroll by one card width
    function cardStep() {
        var card = cards[0];
        var style = getComputedStyle(track);
        var gap = parseFloat(style.columnGap || style.gap || 24);
        return card.getBoundingClientRect().width + gap;
    }

    if (prevBtn) prevBtn.addEventListener('click', function () {
        track.scrollBy({ left: -cardStep(), behavior: 'smooth' });
    });
    if (nextBtn) nextBtn.addEventListener('click', function () {
        track.scrollBy({ left: cardStep(), behavior: 'smooth' });
    });

    // Drag-to-scroll with mouse (desktop convenience)
    var isDown = false, startX, scrollLeft;
    track.addEventListener('mousedown', function (e) {
        isDown = true;
        track.classList.add('cttm-dragging');
        startX = e.pageX - track.offsetLeft;
        scrollLeft = track.scrollLeft;
    });
    ['mouseleave', 'mouseup'].forEach(function (evt) {
        track.addEventListener(evt, function () {
            isDown = false;
            track.classList.remove('cttm-dragging');
        });
    });
    track.addEventListener('mousemove', function (e) {
        if (!isDown) return;
        e.preventDefault();
        var x = e.pageX - track.offsetLeft;
        track.scrollLeft = scrollLeft - (x - startX);
    });

    // Dots (mobile) — one per card, syncs with scroll position
    cards.forEach(function (_, i) {
        var dot = document.createElement('span');
        dot.className = 'cttm-dot' + (i === 0 ? ' cttm-dot-active' : '');
        dot.addEventListener('click', function () {
            track.scrollTo({ left: cards[i].offsetLeft - 4, behavior: 'smooth' });
        });
        dotsWrap.appendChild(dot);
    });
    var dots = Array.from(dotsWrap.children);

    var scrollTimeout;
    track.addEventListener('scroll', function () {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function () {
            var closestIdx = 0, closestDist = Infinity;
            cards.forEach(function (card, i) {
                var dist = Math.abs(card.offsetLeft - track.scrollLeft);
                if (dist < closestDist) { closestDist = dist; closestIdx = i; }
            });
            dots.forEach(function (d, i) {
                d.classList.toggle('cttm-dot-active', i === closestIdx);
            });
        }, 80);
    });
})();
</script>