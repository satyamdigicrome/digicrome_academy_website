@extends('layouts.app')
@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')
@push('styles')
    <link rel="preload" href="{{ asset('assets/css/success-story.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
@endpush
@section('content')
    <section>
        <div class="container-fluid banner-section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 banner-left-section">
                        <h4>MEET OUR TOP ACHIEVERS</h4>
                        <h2 class="for-box-design">Student Success Stories</h2>
                        <h3>That Drive You!</h3>
                        <p> <span>Career Progress isn’t about luck or shortcuts.</span><br>It’s about smart work, sacrifice,
                            and patience that pays off.<br> Create the career you actually love! </p>
                        <h6>Digicrome alumni build rewarding careers at top firms.</h6>
                        <div class="work-alimini-section">
                            <div class="marquee-content">
                                <!-- Original Set of Images -->
                                <div class="first-box"><img src="{{ asset('assets/images/company/deloite.webp') }}"
                                        alt="deloite" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/flipkart.webp') }}"
                                        alt="flipkart" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/microsoft.webp') }}"
                                        alt="microsoft" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/accenture.webp') }}"
                                        alt="accenture" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/tcs.webp') }}"
                                        alt="tcs" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/ibm.webp') }}"
                                        alt="ibm" loading="eager"></div>
                                <!-- Duplicate Set of Images (to create seamless effect) -->
                                <div class="first-box"><img src="{{ asset('assets/images/company/deloite.webp') }}"
                                        alt="deloite" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/flipkart.webp') }}"
                                        alt="flipkart" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/microsoft.webp') }}"
                                        alt="microsoft" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/accenture.webp') }}"
                                        alt="accenture" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/tcs.webp') }}"
                                        alt="tcs" loading="eager"></div>
                                <div class="first-box"><img src="{{ asset('assets/images/company/ibm.webp') }}"
                                        alt="ibm" loading="eager"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 college-column-section">
                        <img src="{{ asset('assets/images/team/success_banner.webp') }}" alt="sucess-story-short-image"
                            loading="eager" width="90%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid placement-activites-opportunities">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 first-explore-section">
                        <h1>Discover </h1>
                        <h6>Placement and Career Activities</h6>
                        <p>Click here to find our placement events and career support.<br> Take charge of your future today!
                        </p>
                        <div class="four-btn-sect">
                            <a href="" class="button-repfirst first-btn-selected">
                                Placement Events
                            </a>
                            <a href="" class="button-repfirst">
                                Recruitment Drives
                            </a>
                            <a href="#" class="button-repfirst">
                                Drive Highlights
                            </a>
                            <a href="#" class="button-repfirst">
                                Recent Recruitments
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 second-placement-video d-flex justify-content-center">
                        <div class="image-video-cover-section">
                            <div class="marquee-container-reel-image-video">
                                <div class="first-running-marquee">
                                    <div class="marquee-wrapper">
                                        @foreach ($placements->take(10) as $p)
                                            <div class="box1"> <img src="{{ asset('storage/' . $p->image) }}"
                                                    alt="{{ $p->name }}" style="width: 163px;"> </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="marquee-container-video">
                                <div class="second-video-running sumantest">
                                    @foreach ($videos as $t)
                                        <div class="box">
                                            <video class="gif-img" autoplay loop muted playsinline loading="eager"
                                                style="width: 163px;" poster="{{ asset('storage/' . $t->image) }}">
                                                <source src="{{ asset('storage/' . $t->image) }}" type="video/mp4">
                                            </video>
                                            <a href="javascript:void(0);" rel="noopener noreferrer"
                                                data-bs-toggle="modal" data-bs-target="#youtubeModal" class="youtubeopen"
                                                data-youtube="https://www.youtube.com/embed/{{ $t->video_link }}">
                                                <div class="video-patti">
                                                    <div class="sadas">
                                                        <div class="video-btn"> <i class="fa-solid fa-play"></i>
                                                            <div class="ripple orangebg"></div>
                                                            <div class="ripple orangebg"></div>
                                                            <div class="ripple orangebg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                    <div class="real-section d-flex">
                        <h2>Real</h2> <img src="{{ asset('assets/images/start.webp') }}" alt="star" loading="eager"
                            height="73px">
                    </div>
                    <div class="story-text-section d-flex">
                        <p>Stories</p>
                        <p>success</p>
                        <p>inspiration</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="career-update">
                        @foreach ($studentStories->take(4) as $story)
                            <div class="first-card"> <img src="{{ asset('storage/' . $story->image) }}" alt="person"
                                    loading="eager" class="person-image" width="121px">
                                <h3>{{ $story->studentname }}</h3>
                                <div class="for-inner-logo">{{ $story->companyname }}</div>
                                <p>career upgrade</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light text-center">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h2 class="fw-bold display-5 text-primary">5000+</h2>
                    <p class="mb-0 fs-5">Students Placed</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold display-5 text-primary">100+</h2>
                    <p class="mb-0 fs-5">Top Companies</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold display-5 text-primary">100%</h2>
                    <p class="mb-0 fs-5">Career Growth Support</p>
                </div>
            </div>
        </div>
    </section>
    @if ($studentStories->count() > 3)
        <section class="placement-section">
            <div class="container">
                <div class="section-header">
                    <div class="sec-badge"><i class="fa-solid fa-briefcase"></i> Placement Highlights</div>
                    <h2>Recently <span>Placed Students</span></h2>
                    <p>A glimpse into where our students are now — roles across top organizations in India and beyond.</p>
                    <div class="section-divider"></div>
                </div>
                <div class="row g-4" id="placement-grid">
                    @foreach ($placements as $index => $story)
                        <div class="col-6 col-md-3 placement-img-item{{ $index >= 8 ? ' placement-hidden' : '' }}">
                            <div class="placement-img-card">
                                <img src="{{ asset('storage/' . $story->image) }}" alt="{{ $story->name }}"
                                    loading="lazy"
                                    onerror="this.src='{{ asset('assets/images/home-one/about-thumb1.webp') }}'">
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($placements->count() > 8)
                    <div class="text-center mt-4">
                        <button class="btn-placement-toggle" id="placement-toggle-btn" onclick="togglePlacements()">
                            Show More <i class="fa-solid fa-chevron-down ms-1"></i>
                        </button>
                    </div>
                @endif
            </div>
        </section>
    @endif
    <section>
        <div class="container-fluid file-offer-letter-main-section">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 d-flex gap-3 offer-letter-col">
                        <div class="file-offer-letter"> <img src="{{ asset('assets/images/cta-new.webp') }}"
                                alt="file-offer-letter" loading="eager"> </div>
                        <div class="offer-letter-text">
                            <p>From Students to Success</p>
                            <h2>See the Offer Letters That<br> Made It Happen</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 view-all-offer-btn-for-mob">
                        <a href="javascript:void(0);" onclick="openModal()"
                            class="view-all-offer-btn button-repfirst buttontitle  audi-review-btn first-btn-selected"
                            style="background-color: white; color: rgb(3, 75, 165);">
                            View All Offer Letter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== MEET ALL CHAMPIONS GRID ===== --}}
    @if ($studentStories->count() > 0)
        <section class="meet-champions-section">
            <div class="container">
                <div class="section-header">
                    <div class="sec-badge"><i class="fa-solid fa-users"></i> Completed Stories</div>
                    <h2>Meet All Our <span>Champions</span></h2>
                    <p>Every one of them started with a goal. Digicrome helped them achieve it.</p>
                    <div class="section-divider"></div>
                </div>
                <div class="row g-4">
                    @foreach ($studentStories as $index => $story)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="champ-grid-card">
                                <img src="{{ asset('storage/' . $story->image) }}" alt="{{ $story->studentname }}"
                                    class="champ-grid-avatar" loading="lazy"
                                    onerror="this.src='{{ asset('assets/images/home-one/about-thumb1.webp') }}'">
                                <div class="champ-grid-name">{{ $story->studentname }}</div>
                                <div class="champ-grid-role">{{ $story->position }}</div>
                                <div class="champ-grid-company">
                                    <i class="fa-solid fa-briefcase"
                                        style="color:#f29c12; margin-right:4px;"></i>{{ $story->companyname }}
                                </div>
                                <div class="champ-grid-text" id="champ-text-{{ $index }}">{{ strip_tags($story->stoire) }}</div>
                                @if (strlen(strip_tags($story->stoire)) > 120)
                                    <button class="champ-read-more-btn" onclick="toggleChampText({{ $index }}, this)">
                                        Read More <i class="fa-solid fa-chevron-down ms-1"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- ===== CTA SECTION ===== --}}
    <section class="cta-section">
        <div class="container" style="position:relative;">
            <h2>Ready to Write Your Own <br>Success Story?</h2>
            <p>Join 5000+ students who have already transformed their careers with Digicrome's industry-leading programs.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('course') }}" class="btn-cta-white">
                    <i class="fa-solid fa-rocket"></i> Explore Courses
                </a>
                <a href="javascript:void(0);" onclick="openModal()" class="btn-cta-outline">
                    <i class="fa-solid fa-phone"></i> Free Counselling
                </a>
            </div>
            <div class="cta-stats-row">
                <div class="cta-stat-item">
                    <span class="num">5000+</span>
                    <div class="lbl">Students Placed</div>
                </div>
                <div class="cta-stat-item">
                    <span class="num">100+</span>
                    <div class="lbl">Companies</div>
                </div>
                <div class="cta-stat-item">
                    <span class="num">60+</span>
                    <div class="lbl">Countries Reached</div>
                </div>
                <div class="cta-stat-item">
                    <span class="num">10+</span>
                    <div class="lbl">Years Experience</div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-youtube-dialog">
            <div class="youtube-modal-box">
                <button type="button" class="btn-close btn-close-white custom-close-btn" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="youtube-video-wrapper">
                    <iframe id="youtubePlayer" loading="lazy" src="" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.youtubeopen');
            const player = document.getElementById('youtubePlayer');
            const modal = document.getElementById('youtubeModal');

            cards.forEach(card => {
                card.addEventListener('click', function() {
                    player.src = this.getAttribute('data-youtube') +
                        '?autoplay=1&modestbranding=1&rel=0';
                });
            });

            modal.addEventListener('hidden.bs.modal', function() {
                player.src = '';
            });
            const revealEls = document.querySelectorAll(
                '.champion-card, .champ-grid-card, .stat-card, .placement-highlight-card, .review-banner-card');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            revealEls.forEach((el, i) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition =
                    `opacity 0.5s ease ${i * 0.06}s, transform 0.5s ease ${i * 0.06}s, box-shadow 0.3s, border-color 0.3s`;
                revealObserver.observe(el);
            });
        });
        function openModal() {
            document.getElementById("formModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("formModal").style.display = "none";
        }

        function togglePlacements() {
            const hidden = document.querySelectorAll('.placement-hidden');
            const btn = document.getElementById('placement-toggle-btn');
            if (hidden.length > 0) {
                hidden.forEach(el => el.classList.remove('placement-hidden'));
                btn.innerHTML = 'Show Less <i class="fa-solid fa-chevron-up ms-1"></i>';
            } else {
                const items = document.querySelectorAll('.placement-img-item');
                items.forEach((el, i) => {
                    if (i >= 8) el.classList.add('placement-hidden');
                });
                btn.innerHTML = 'Show More <i class="fa-solid fa-chevron-down ms-1"></i>';
                document.querySelector('.placement-section').scrollIntoView({ behavior: 'smooth' });
            }
        }

        function toggleChampText(index, btn) {
            const textEl = document.getElementById('champ-text-' + index);
            const isExpanded = textEl.classList.contains('champ-text-expanded');
            if (isExpanded) {
                textEl.classList.remove('champ-text-expanded');
                btn.innerHTML = 'Read More <i class="fa-solid fa-chevron-down ms-1"></i>';
            } else {
                textEl.classList.add('champ-text-expanded');
                btn.innerHTML = 'Read Less <i class="fa-solid fa-chevron-up ms-1"></i>';
            }
        }
    </script>
@endpush
