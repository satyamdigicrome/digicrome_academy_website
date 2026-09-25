{{--
    Career roles & average salaries for a course (managed from CMS → Edit Course).
    Bars are scaled from the first number found in each "Average Salary" text,
    so "₹12 LPA", "$95,000" or "AED 18k" all work; a role with no number just
    shows the text without a bar.
--}}
@php
    $csRoles = collect($course->career_roles ?? [])->filter(fn ($r) => filled($r['title'] ?? null))->values();

    $csNumber = static function (?string $text): ?float {
        if (!preg_match('/\d[\d,]*(?:\.\d+)?/', (string) $text, $m)) {
            return null;
        }
        return (float) str_replace(',', '', $m[0]);
    };

    $csRoles = $csRoles->map(fn ($r) => $r + ['_value' => $csNumber($r['avg_salary'] ?? null)]);
    $csMax = (float) $csRoles->max('_value');
    $csTop = $csMax > 0 ? $csRoles->firstWhere('_value', $csMax) : null;
@endphp

@if ($csRoles->isNotEmpty())
    <section class="cs-career" id="career-outcomes" aria-labelledby="cs-career-title">
        <div class="cs-career-glow" aria-hidden="true"></div>
        <div class="container position-relative">
            <div class="cs-head cs-reveal">
                <span class="cs-eyebrow"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i> Career Outcomes</span>
                <h2 id="cs-career-title" class="cs-title">Roles You Can Land &amp; <span>What They Pay</span></h2>
                <p class="cs-sub">
                    Completing {{ $course->name }} opens the door to these in-demand job profiles.
                    Here's what professionals in each role typically earn.
                </p>
            </div>

            <div class="cs-summary cs-reveal">
                <div class="cs-summary-item">
                    <i class="bi bi-briefcase-fill" aria-hidden="true"></i>
                    <div>
                        <strong>{{ $csRoles->count() }}+</strong>
                        <span>Career Paths</span>
                    </div>
                </div>
                @if ($csTop)
                    <div class="cs-summary-item">
                        <i class="bi bi-trophy-fill" aria-hidden="true"></i>
                        <div>
                            <strong>{{ $csTop['avg_salary'] }}</strong>
                            <span>Highest Avg. Salary</span>
                        </div>
                    </div>
                    <div class="cs-summary-item">
                        <i class="bi bi-star-fill" aria-hidden="true"></i>
                        <div>
                            <strong class="cs-summary-text">{{ $csTop['title'] }}</strong>
                            <span>Top Paying Role</span>
                        </div>
                    </div>
                @endif
            </div>

            <div class="cs-grid">
                @foreach ($csRoles as $role)
                    @php
                        $isTop = $csTop && $role === $csTop;
                        $pct = ($csMax > 0 && $role['_value']) ? max(12, round($role['_value'] / $csMax * 100)) : null;
                        $skills = array_values(array_filter(array_map('trim', explode(',', $role['description'] ?? ''))));
                        $asChips = count($skills) > 1 && collect($skills)->every(fn ($s) => mb_strlen($s) <= 28);
                    @endphp
                    <article class="cs-card cs-reveal {{ $isTop ? 'is-top' : '' }}" style="--cs-delay: {{ min($loop->index, 5) * 80 }}ms">
                        @if ($isTop)
                            <span class="cs-ribbon"><i class="bi bi-trophy-fill" aria-hidden="true"></i> Top Paying</span>
                        @endif

                        <div class="cs-card-top">
                            <span class="cs-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            @if (!empty($role['tag']))
                                <span class="cs-tag"><span class="cs-dot" aria-hidden="true"></span>{{ $role['tag'] }}</span>
                            @endif
                        </div>

                        <h3 class="cs-role">{{ $role['title'] }}</h3>

                        @if (!empty($role['avg_salary']))
                            <div class="cs-salary">
                                <span class="cs-salary-label">Average Salary</span>
                                <span class="cs-salary-value">{{ $role['avg_salary'] }}</span>
                            </div>
                            @if ($pct)
                                <div class="cs-bar" role="img" aria-label="{{ $pct }}% of the highest average salary">
                                    <span style="--cs-w: {{ $pct }}%"></span>
                                </div>
                            @endif
                        @endif

                        @if (!empty($role['salary_range']) || !empty($role['experience']))
                            <div class="cs-meta">
                                @if (!empty($role['salary_range']))
                                    <span><i class="bi bi-cash-stack" aria-hidden="true"></i> {{ $role['salary_range'] }}</span>
                                @endif
                                @if (!empty($role['experience']))
                                    <span><i class="bi bi-clock-history" aria-hidden="true"></i> {{ $role['experience'] }}</span>
                                @endif
                            </div>
                        @endif

                        @if (!empty($role['description']))
                            @if ($asChips)
                                <ul class="cs-skills">
                                    @foreach ($skills as $skill)
                                        <li>{{ $skill }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="cs-desc">{{ $role['description'] }}</p>
                            @endif
                        @endif
                    </article>
                @endforeach
            </div>

            <div class="cs-foot cs-reveal">
                <p>*Salaries are indicative industry averages and vary with location, skills and experience.</p>
                <a role="button" class="cs-cta" onclick="openModal('applyNowPopup')">
                    Talk to a Career Counsellor <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    @include('components.course-career-script')
@endif
