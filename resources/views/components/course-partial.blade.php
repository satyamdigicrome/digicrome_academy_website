@php
    // Category accent palette — cycles if there are more collections than colors.
    // Index 0 is reserved for "Upcoming Courses".
    $dgcHues = ['#F5A623', '#5B5FEF', '#0EA5A0', '#F0587C', '#8B5CF6', '#22B573'];
@endphp

<section class="dgc-courses">
    <div class="dgc-container">

        <div class="dgc-header">
            <span class="dgc-eyebrow">Course Catalog</span>
            <h3 class="dgc-title">Comprehensive, career-ready <span class="dgc-title-accent">programs</span></h3>
        </div>

        <div class="dgc-tabbar">
            <div class="dgc-tabbar-rail" id="dgcTabRail">
                <button type="button" class="dgc-tab is-active" data-filter=".Upcoming" style="--dot:{{ $dgcHues[0] }}">
                    <span class="dgc-tab-dot"></span>Upcoming Courses
                </button>
                @foreach ($collections as $collection)
                    <button type="button" class="dgc-tab" data-filter=".{{ Str::slug($collection->name) }}" style="--dot:{{ $dgcHues[($loop->iteration) % count($dgcHues)] }}">
                        <span class="dgc-tab-dot"></span>{{ $collection->name }}
                    </button>
                @endforeach
                <span class="dgc-tab-indicator" id="dgcTabIndicator"></span>
            </div>
        </div>

        <div class="row dgc-grid image_load">

            @foreach ($upcomingCourses as $course)
                <div class="col-xl-3 col-lg-6 col-md-6 grid-item Upcoming dgc-cell">
                    <article class="dgc-card" style="--accent: {{ $dgcHues[0] }}">
                        <div class="dgc-card-media">
                            <img loading="lazy" src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" title="{{ $course->name }}">
                            <span class="dgc-card-chip">Courses</span>
                        </div>
                        <div class="dgc-card-body">
                            <h4 class="dgc-card-title">
                                <a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                            </h4>
                            <div class="dgc-card-footer">
                                <span class="dgc-duration">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 3"></path></svg>
                                    {{ $course->course_duration }}
                                </span>
                                <a href="{{ route('course_details', ['slug' => $course->slug]) }}" class="dgc-card-cta" aria-label="Explore {{ $course->name }}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

            @foreach ($collections as $collection)
                @php $hue = $dgcHues[($loop->iteration) % count($dgcHues)]; @endphp
                @foreach ($collection->courses as $course)
                    <div class="col-xl-3 col-lg-6 col-md-6 grid-item {{ Str::slug($collection->name) }} dgc-cell">
                        <article class="dgc-card" style="--accent: {{ $hue }}">
                            <div class="dgc-card-media">
                                <img loading="lazy" src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" title="{{ $course->name }}">
                                <span class="dgc-card-chip">{{ $collection->name }}</span>
                            </div>
                            <div class="dgc-card-body">
                                <h4 class="dgc-card-title">
                                    <a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a>
                                </h4>
                                <div class="dgc-card-footer">
                                    <span class="dgc-duration">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 3"></path></svg>
                                        {{ $course->course_duration }}
                                    </span>
                                    <a href="{{ route('course_details', ['slug' => $course->slug]) }}" class="dgc-card-cta" aria-label="Explore {{ $course->name }}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endforeach

        </div>
    </div>
</section>

<style>
/* === Digicrome Courses (dgc-) — scoped, prefixed to avoid collisions === */
@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap');

.dgc-courses {
    --dgc-bg: #F5F7FB;
    --dgc-surface: #FFFFFF;
    --dgc-ink: #10162B;
    --dgc-muted: #5B6478;
    --dgc-border: #E4E9F5;
    --dgc-radius: 18px;
    background: var(--dgc-bg);
    padding: 88px 0;
}

.dgc-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
}

/* Header */
.dgc-header {
    text-align: center;
    max-width: 640px;
    margin: 0 auto 40px;
}

.dgc-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--dgc-muted);
    background: var(--dgc-surface);
    border: 1px solid var(--dgc-border);
    padding: 6px 14px;
    border-radius: 999px;
    margin-bottom: 18px;
}

.dgc-eyebrow::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #F5A623;
    box-shadow: 0 0 0 3px rgba(245, 166, 35, 0.18);
}

.dgc-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: clamp(28px, 3.4vw, 40px);
    line-height: 1.2;
    color: var(--dgc-ink);
    margin: 0;
}

.dgc-title-accent {
    color: #5B5FEF;
}

/* Tab bar — styled like a browser / IDE tab strip */
.dgc-tabbar {
    display: flex;
    justify-content: center;
    margin-bottom: 44px;
}

.dgc-tabbar-rail {
    position: relative;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 4px;
    background: var(--dgc-surface);
    border: 1px solid var(--dgc-border);
    border-radius: 14px;
    padding: 6px;
    box-shadow: 0 1px 2px rgba(16, 22, 43, 0.04);
}

.dgc-tab {
    position: relative;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Inter', sans-serif;
    font-weight: 500;
    font-size: 14px;
    color: var(--dgc-muted);
    background: transparent;
    border: none;
    padding: 10px 18px;
    border-radius: 9px;
    cursor: pointer;
    transition: color 0.2s ease;
}

.dgc-tab-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--dot, #5B5FEF);
    flex-shrink: 0;
}

.dgc-tab.is-active {
    color: var(--dgc-ink);
}

.dgc-tab-indicator {
    position: absolute;
    top: 6px;
    left: 6px;
    height: calc(100% - 12px);
    width: 0;
    background: var(--dgc-bg);
    border: 1px solid var(--dgc-border);
    border-radius: 9px;
    z-index: 1;
    transition: transform 0.28s cubic-bezier(0.4, 0, 0.2, 1), width 0.28s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Grid */
.dgc-grid {
    margin: 0 -12px;
}

.dgc-cell {
    padding: 0 12px;
    margin-bottom: 24px;
}

/* Card */
.dgc-card {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    background: var(--dgc-surface);
    border: 1px solid var(--dgc-border);
    border-radius: var(--dgc-radius);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.dgc-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--accent, #5B5FEF);
    z-index: 2;
}

.dgc-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px -16px rgba(16, 22, 43, 0.16);
    border-color: color-mix(in srgb, var(--accent, #5B5FEF) 35%, var(--dgc-border));
}

.dgc-card-media {
    position: relative;
    aspect-ratio: 4 / 3;
    overflow: hidden;
    background: var(--dgc-bg);
}

.dgc-card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.dgc-card:hover .dgc-card-media img {
    transform: scale(1.06);
}

.dgc-card-chip {
    position: absolute;
    left: 14px;
    bottom: 14px;
    font-family: 'Inter', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.03em;
    color: #fff;
    background: rgba(16, 22, 43, 0.55);
    backdrop-filter: blur(6px);
    padding: 5px 12px;
    border-radius: 999px;
}

.dgc-card-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 20px 20px 18px;
    gap: 14px;
}

.dgc-card-title {
    margin: 0;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 17px;
    line-height: 1.35;
}

.dgc-card-title a {
    color: var(--dgc-ink);
    text-decoration: none;
}

.dgc-card-title a:hover {
    color: var(--accent, #5B5FEF);
}

.dgc-card-footer {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 14px;
    border-top: 1px dashed var(--dgc-border);
}

.dgc-duration {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    color: var(--dgc-muted);
}

.dgc-card-cta {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--dgc-bg);
    color: var(--accent, #5B5FEF);
    border: 1px solid var(--dgc-border);
    transition: transform 0.25s ease, background 0.25s ease, color 0.25s ease;
    flex-shrink: 0;
}

.dgc-card-cta:hover {
    background: var(--accent, #5B5FEF);
    color: #fff;
    transform: translateX(3px);
}

@media (max-width: 991px) {
    .dgc-courses { padding: 64px 0; }
    .dgc-header { text-align: left; margin-bottom: 28px; }
    .dgc-tabbar { justify-content: flex-start; overflow-x: auto; }
    .dgc-tabbar-rail { flex-wrap: nowrap; }
    .dgc-tab { white-space: nowrap; }
}

@media (prefers-reduced-motion: reduce) {
    .dgc-card, .dgc-card-media img, .dgc-card-cta, .dgc-tab-indicator {
        transition: none !important;
    }
}
</style>

<script>
    window.addEventListener('load', function () {
        var grid = document.querySelector('.image_load');
        var iso = new Isotope(grid, {
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });

        var rail = document.getElementById('dgcTabRail');
        var indicator = document.getElementById('dgcTabIndicator');
        var tabs = rail.querySelectorAll('.dgc-tab');

        function moveIndicator(el) {
            indicator.style.width = el.offsetWidth + 'px';
            indicator.style.transform = 'translateX(' + el.offsetLeft + 'px)';
        }

        tabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                tabs.forEach(function (t) { t.classList.remove('is-active'); });
                this.classList.add('is-active');
                moveIndicator(this);
                iso.arrange({ filter: this.getAttribute('data-filter') });
            });
        });

        // Position indicator under the default active tab once layout is ready.
        moveIndicator(rail.querySelector('.dgc-tab.is-active'));
        iso.arrange({ filter: '.Upcoming' });

        window.addEventListener('resize', function () {
            moveIndicator(rail.querySelector('.dgc-tab.is-active'));
        });
    });
</script>