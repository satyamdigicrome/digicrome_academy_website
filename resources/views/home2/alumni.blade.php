{{--
    HOME PAGE 2 — ALUMNI NETWORK / OUR MANAGERS
    Dark panel with a scrolling wall of people cards. Cards come from the
    Mentor records managed in the admin ("Instructors"), so adding a manager
    there shows them here with no code change.
--}}
@if ($mentors->isNotEmpty())
    @php
        // Two rows scrolling in opposite directions once there are enough people.
        $rows = $mentors->count() >= 8 ? $mentors->split(2) : collect([$mentors]);
    @endphp

    <section class="h2-alumni">
        <div class="container">
            <div class="h2-alumni__panel">
                <div class="h2-alumni__head">
                    <div>
                        <span class="h2-pill"><i class="fa-solid fa-crown"></i> ALUMNI EXCLUSIVE</span>
                        <h2>Weekly chats with <span>our managers</span> &amp; industry leaders</h2>
                    </div>
                    <ul class="h2-perks">
                        <li>
                            <i class="fa-solid fa-comments"></i>
                            <div>
                                <h3>Weekly talks with managers</h3>
                                <p>Learn from the people who lead teams at top companies every day.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-people-group"></i>
                            <div>
                                <h3>Workshops, hackathons &amp; referrals</h3>
                                <p>Network with Digicrome alumni and keep sharpening your skills.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="h2-alumni__rows">
                    @foreach ($rows as $row)
                        @php
                            // Repeat short rows so the loop never shows a gap on wide screens.
                            $repeat = max(2, (int) ceil(12 / max(1, $row->count())));
                            if ($repeat % 2) $repeat++;
                        @endphp
                        <div class="h2-marquee {{ $loop->even ? 'h2-marquee--reverse' : '' }}">
                            <div class="h2-marquee__track">
                                @for ($copy = 0; $copy < $repeat; $copy++)
                                    @foreach ($row as $person)
                                        <div class="h2-person" @if ($copy) aria-hidden="true" @endif>
                                            <img src="{{ asset('storage/' . $person->photo) }}"
                                                alt="{{ $person->name }}" width="210" height="250" loading="lazy"
                                                decoding="async">
                                            <div class="h2-person__meta">
                                                <strong>{{ $person->name }}</strong>
                                                <span>{{ $person->position }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
