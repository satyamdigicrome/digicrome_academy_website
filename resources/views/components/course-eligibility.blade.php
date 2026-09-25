{{-- "Who can join" criteria for a course (managed from CMS → Edit Course). --}}
@php
    $elItems = collect($course->eligibility ?? [])->filter(fn ($r) => filled($r['title'] ?? null))->values();
@endphp

@if ($elItems->isNotEmpty())
    <section class="cs-elig" id="eligibility" aria-labelledby="cs-elig-title">
        <div class="container">
            <div class="cs-elig-layout">
                <div class="cs-elig-intro cs-reveal">
                    <span class="cs-eyebrow cs-eyebrow-dark"><i class="bi bi-person-check-fill" aria-hidden="true"></i> Eligibility</span>
                    <h2 id="cs-elig-title" class="cs-title">Who Can <span>Join</span> This Course?</h2>
                    <p class="cs-sub">
                        {{ $course->name }} is built for learners from different backgrounds.
                        If you fit any of these profiles, you're ready to start.
                    </p>

                    <div class="cs-elig-count">
                        <strong>{{ $elItems->count() }}</strong>
                        <span>learner {{ \Illuminate\Support\Str::plural('profile', $elItems->count()) }}<br>welcome to enrol</span>
                    </div>

                    <a role="button" class="cs-cta cs-cta-solid" onclick="openModal('applyNowPopup')">
                        Check My Eligibility <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="cs-elig-grid">
                    @foreach ($elItems as $item)
                        <article class="cs-elig-card cs-reveal" style="--cs-delay: {{ min($loop->index, 5) * 70 }}ms">
                            <span class="cs-elig-icon">
                                <i class="bi {{ array_key_exists($item['icon'] ?? '', \App\Models\Course::ELIGIBILITY_ICONS) ? $item['icon'] : 'bi-patch-check-fill' }}" aria-hidden="true"></i>
                            </span>
                            <div class="cs-elig-body">
                                <h3>{{ $item['title'] }}</h3>
                                @if (!empty($item['description']))
                                    <p>{{ $item['description'] }}</p>
                                @endif
                            </div>
                            <i class="bi bi-check-circle-fill cs-elig-check" aria-hidden="true"></i>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('components.course-career-script')
@endif
