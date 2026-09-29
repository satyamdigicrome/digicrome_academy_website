@php
    // Repeat the list so one half of the track is always wider than the screen,
    // then render that half twice so the -50% loop is seamless.
    $mentorCount = count($mentors);
    $mentorRepeat = $mentorCount > 0 ? max(1, (int) ceil(8 / $mentorCount)) : 0;
    $mentorDuration = max(30, $mentorCount * $mentorRepeat * 5);
@endphp
<section class="educators-dark">
    <div class="container">
        <div class="educators-head">
            <span class="educators-badge">Our Mentors</span>
            <h2 class="heading-like-h1 educators-title">
                Meet the Educators <span>Behind Your Success</span>
            </h2>
            <p class="educators-sub">Learn from industry experts who have built, shipped and led real-world data &amp; AI
                projects.</p>
        </div>
    </div>

    @if ($mentorCount > 0)
        <div class="educators-marquee">
            <div class="educators-track" style="--educators-duration: {{ $mentorDuration }}s">
                @for ($half = 0; $half < 2; $half++)
                    <div class="educators-group" @if ($half === 1) aria-hidden="true" @endif>
                        @for ($r = 0; $r < $mentorRepeat; $r++)
                            @foreach ($mentors as $mentor)
                                <div class="educator-card mentor-trigger" data-name="{{ $mentor->name }}"
                                    data-position="{{ $mentor->position }}"
                                    data-experience="{{ $mentor->experience }}+ Years"
                                    data-description="{{ $mentor->description }}"
                                    data-image="{{ asset('storage/' . $mentor->photo) }}">
                                    <div class="educator-img">
                                        <img src="{{ asset('storage/' . $mentor->photo) }}" alt="{{ $mentor->name }}"
                                            loading="lazy">
                                        <span class="educator-exp">{{ $mentor->experience }}+ Yrs Exp</span>
                                    </div>
                                    <div class="educator-info">
                                        <h3 class="educator-name">{{ $mentor->name }}</h3>
                                        <p class="educator-position">{{ $mentor->position }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
    @endif
</section>
<div id="mentorPopup" class="mentor-modal">
    <div class="mentor-modal-content">
        <span class="mentor-close">&times;</span>

        <div class="modal-grid">
            <div class="modal-img">
                <img loading="lazy" id="mentorImg" src="">
            </div>
            <div class="modal-info">
                <h3 id="mentorName"></h3>
                <h5 id="mentorPosition"></h5>
                <p id="mentorExp"></p>
                <p id="mentorDesc"></p>
            </div>
        </div>
    </div>
</div>
<style>
    /* =======================
   Educators – dark marquee
======================= */

    .educators-dark {
        position: relative;
        margin-top: 24px;
        padding: 70px 0 80px;
        background: #0b0b12;
        background-image:
            radial-gradient(circle at 15% 0%, rgba(124, 92, 255, 0.18), transparent 45%),
            radial-gradient(circle at 85% 100%, rgba(255, 138, 61, 0.14), transparent 45%);
        overflow: hidden;
    }

    .educators-head {
        text-align: center;
        max-width: 760px;
        margin: 0 auto 44px;
    }

    .educators-badge {
        display: inline-block;
        padding: 6px 16px;
        margin-bottom: 16px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.05);
        color: #ffb07a;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .educators-title {
        color: #fff !important;
        margin-bottom: 12px;
    }

    .educators-title span {
        background: linear-gradient(90deg, #ff8a3d, #b18cff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .educators-sub {
        color: rgba(255, 255, 255, 0.6);
        font-size: 16px;
        margin: 0;
    }

    .educators-marquee {
        overflow: hidden;
        -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
        mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
    }

    .educators-track {
        display: flex;
        width: max-content;
        animation: educators-scroll var(--educators-duration, 40s) linear infinite;
    }

    .educators-marquee:hover .educators-track {
        animation-play-state: paused;
    }

    .educators-group {
        display: flex;
        gap: 24px;
        padding-right: 24px;
    }

    @keyframes educators-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .educator-card {
        flex: 0 0 260px;
        padding: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        background: linear-gradient(180deg, #17171f 0%, #111118 100%);
        cursor: pointer;
        transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
    }

    .educator-card:hover {
        transform: translateY(-6px);
        border-color: rgba(255, 138, 61, 0.55);
        box-shadow: 0 18px 40px rgba(255, 138, 61, 0.15);
    }

    .educator-img {
        position: relative;
        height: 280px;
        border-radius: 16px;
        overflow: hidden;
        background: #1d1d27;
    }

    .educator-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        transition: transform 0.5s ease;
    }

    .educator-card:hover .educator-img img {
        transform: scale(1.05);
    }

    .educator-img::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 55%, rgba(11, 11, 18, 0.85) 100%);
        pointer-events: none;
    }

    .educator-exp {
        position: absolute;
        left: 12px;
        bottom: 12px;
        z-index: 1;
        padding: 4px 12px;
        border-radius: 50px;
        background: rgba(255, 138, 61, 0.9);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
    }

    .educator-info {
        padding: 16px 6px 6px;
    }

    .educator-name {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 4px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .educator-position {
        color: rgba(255, 255, 255, 0.55);
        font-size: 14px;
        margin: 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 42px;
    }

    @media (max-width: 768px) {
        .educators-dark {
            padding: 50px 0 60px;
        }

        .educator-card {
            flex-basis: 220px;
        }

        .educator-img {
            height: 240px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .educators-track {
            animation: none;
        }

        .educators-marquee {
            overflow-x: auto;
        }
    }

    /* =======================
MODAL DESIGN
======================= */

    .mentor-modal {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
        z-index: 9999;
        overflow-y: auto;
    }

    .mentor-modal-content {
        background: #14141c;
        color: rgba(255, 255, 255, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.1);
        width: 90%;
        max-width: 1000px;
        margin: 60px auto;
        padding: 40px;
        border-radius: 20px;
        position: relative;
    }

    .mentor-modal-content h3 {
        color: #fff;
    }

    .mentor-modal-content h5 {
        color: #ffb07a;
    }

    .mentor-close {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
    }

    .modal-grid {
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 40px;
    }

    .modal-img img {
        width: 100%;
        border-radius: 20px;
    }

    @media (max-width: 768px) {
        .modal-grid {
            grid-template-columns: 1fr;
        }

        .mentor-modal-content {
            padding: 30px 20px;
        }
    }
</style>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll(".mentor-trigger").forEach(card => {
                card.addEventListener("click", function() {
                    document.getElementById("mentorName").innerText = this.dataset.name;
                    document.getElementById("mentorPosition").innerText = this.dataset.position;
                    document.getElementById("mentorDesc").innerText = this.dataset.description;
                    document.getElementById("mentorImg").src = this.dataset.image;
                    document.getElementById("mentorExp").innerText = "Experience: " + this.dataset.experience;
                    document.getElementById("mentorPopup").style.display = "block";
                });
            });
            document.querySelector(".mentor-close").addEventListener("click", function() {
                document.getElementById("mentorPopup").style.display = "none";
            });
            window.addEventListener("click", function(e) {
                if (e.target.id === "mentorPopup") {
                    document.getElementById("mentorPopup").style.display = "none";
                }
            });
        });
    </script>
@endpush
