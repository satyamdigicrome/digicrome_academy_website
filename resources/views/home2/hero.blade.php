{{--
    HOME PAGE 2 — HERO
    Left: headline, looping hero video and a tools marquee.
    Right: "find the right course" lead form.

    Video: public/assets/videos/home2/hero-video.mp4
    Optional poster (shown before the video starts): public/assets/videos/home2/hero-poster.webp
--}}
@php
    $heroPoster = file_exists(public_path('assets/videos/home2/hero-poster.webp'))
        ? asset('assets/videos/home2/hero-poster.webp')
        : null;

    $heroTools = [
        ['fa-brands fa-python', 'Python'],
        ['fa-solid fa-database', 'SQL'],
        ['fa-solid fa-chart-column', 'Power BI'],
        ['fa-solid fa-chart-pie', 'Tableau'],
        ['fa-solid fa-brain', 'TensorFlow'],
        ['fa-solid fa-fire', 'PyTorch'],
        ['fa-solid fa-robot', 'ChatGPT'],
        ['fa-solid fa-link', 'LangChain'],
        ['fa-solid fa-table', 'Excel'],
        ['fa-solid fa-shield-halved', 'Cyber Security'],
    ];
@endphp

<section class="h2-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 h2-hero__left">
                <span class="h2-pill"><i class="fa-solid fa-bolt"></i> Ready to 10X your career with Digicrome!</span>

                <h1 class="h2-hero__title">Give your career an <span>AI-powered</span> advantage</h1>

                <div class="h2-visual" aria-hidden="true">
                    {{-- preload="none" + src attached by script after page load, so the
                         MP4 never competes with the first paint. --}}
                    <video class="h2-visual__video js-h2-hero-video" muted loop playsinline preload="none"
                        disablepictureinpicture width="1024" height="648"
                        @if ($heroPoster) poster="{{ $heroPoster }}" @endif
                        data-src="{{ asset('assets/videos/home2/hero-video.mp4') }}"></video>
                </div>

                <div class="h2-tools">
                    <p class="h2-tools__label">The right AI tools integrated into your Digicrome curriculum</p>
                    <div class="h2-marquee">
                        <div class="h2-marquee__track">
                            @for ($copy = 0; $copy < 2; $copy++)
                                @foreach ($heroTools as [$icon, $label])
                                    <span class="h2-tool" @if ($copy) aria-hidden="true" @endif>
                                        <i class="{{ $icon }}"></i>{{ $label }}
                                    </span>
                                @endforeach
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <form class="h2-form" method="post" action="{{ route('website.lead') }}">
                    @csrf
                    <h2>Let's find the right course for you</h2>

                    @if ($errors->has('lead'))
                        <p class="h2-form__error">{{ $errors->first('lead') }}</p>
                    @endif

                    <span class="h2-form__label">Experience</span>
                    @foreach ([
                        'Working Professional - Technincal Roles' => 'Working Professional - Technical Roles',
                        'Working Professional - Non Technincal' => 'Working Professional - Non Technical',
                        'College Student - Final Year' => 'College Student - Final Year',
                        'College Student - 1st to pre-final Year' => 'College Student - 1st to Pre-final Year',
                        'Other' => 'Others',
                    ] as $value => $label)
                        <label class="h2-radio">
                            <input type="radio" name="profession" value="{{ $value }}"
                                @checked(old('profession') === $value) required>
                            {{ $label }}
                        </label>
                    @endforeach

                    <label class="h2-form__label" for="h2-course">Select topic of interest</label>
                    <select class="h2-input" id="h2-course" name="title" required>
                        <option value="" disabled @selected(!old('title'))>Select your options/choices</option>
                        <option value="DS" @selected(old('title') === 'DS')>Data Science &amp; AI</option>
                        <option value="AISS" @selected(old('title') === 'AISS')>Cyber Security</option>
                        <option value="other" @selected(old('title') === 'other')>Other</option>
                    </select>

                    <label class="h2-form__label" for="h2-name">Name</label>
                    <input class="h2-input" id="h2-name" type="text" name="name" placeholder="Enter name"
                        value="{{ old('name') }}" required>

                    <label class="h2-form__label" for="h2-mobile">Phone Number</label>
                    <input class="h2-input" id="h2-mobile" type="tel" name="mobile"
                        placeholder="Enter phone number" pattern="\d{10}"
                        title="Please enter a 10-digit mobile number" value="{{ old('mobile') }}" required>

                    <label class="h2-form__label" for="h2-email">Email</label>
                    <input class="h2-input" id="h2-email" type="email" name="email" placeholder="Enter email"
                        value="{{ old('email') }}" required>

                    <input type="text" name="our_custom" style="display:none;" value="digicrome">
                    <input type="hidden" name="form_time" value="{{ time() }}">
                    <input type="hidden" name="source" value="Website(Home Page 2)">
                    <input type="hidden" name="country" value="india">

                    <button type="submit" class="h2-form__submit">Find your course</button>

                    <p class="h2-form__note">
                        I authorise Digicrome to contact me with course updates &amp; offers via
                        Email/SMS/WhatsApp/Call. I have read and agree to the
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a> &amp;
                        <a href="{{ route('terms-and-conditions') }}">Terms of use</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        // Start the hero video only after the page has loaded and the browser is
        // idle, so it adds nothing to the initial load. Skipped for data-saver,
        // 2G and reduced-motion users.
        (function() {
            var video = document.querySelector('.js-h2-hero-video');
            if (!video) return;

            var conn = navigator.connection || {};
            var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (conn.saveData || /2g$/.test(conn.effectiveType || '') || reduceMotion) return;

            function play() {
                var p = video.play();
                if (p) p.catch(function() {});
            }

            function start() {
                if (video.dataset.loaded) return;
                video.dataset.loaded = '1';
                video.src = video.dataset.src;
                play();
            }

            function whenIdle() {
                if ('requestIdleCallback' in window) {
                    requestIdleCallback(start, { timeout: 2500 });
                } else {
                    setTimeout(start, 300);
                }
            }

            if (document.readyState === 'complete') {
                whenIdle();
            } else {
                window.addEventListener('load', whenIdle, { once: true });
            }

            // Pause while scrolled out of view to save CPU and battery.
            if ('IntersectionObserver' in window) {
                new IntersectionObserver(function(entries) {
                    if (!video.dataset.loaded) return;
                    entries[0].isIntersecting ? play() : video.pause();
                }).observe(video);
            }
        })();
    </script>
@endpush
