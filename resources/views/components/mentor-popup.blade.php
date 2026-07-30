<div class="team-area style-two mt-4">
    <div class="container">
        <div class="row align-items-center section-title-space">
            <div class="col-lg-12">
                <div class="section_title">
                    <h2 class="heading-like-h1">
                        Meet the Educators Behind Your Success
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row owl-carousel mentor-carousel">

            @foreach ($mentors as $mentor)
                <div class="item">
                    <div class="col-xl-12 grid-item">
                        <div class="mentor-card mentor-trigger" data-name="{{ $mentor->name }}"
                            data-position="{{ $mentor->position }}" data-experience="{{ $mentor->experience }}+ Years"
                            data-description="{{ $mentor->description }}"
                            data-image="{{ asset('storage/' . $mentor->photo) }}">

                            <div class="mentor-card-inner">

                                <div class="mentor-content-top text-start">
                                    <h3 class="mentor-name">{{ $mentor->name }}</h3>
                                    <p class="mentor-position">{{ $mentor->position }}</p>
                                    <p class="mentor-experience">{{ $mentor->experience }}+ Years Experience</p>
                                </div>

                                <div class="mentor-img">
                                    <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Mentor Image"
                                        loading="lazy">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
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
MENTOR CARD DESIGN
======================= */

    /* =========================
   Mentor Card New UI
========================= */

    .mentor-card {
        position: relative;
        border-radius: 30px;
        background: #fff;
        overflow: hidden;
        cursor: pointer;
        min-height: 420px;
        transition: 0.4s ease;
    }

    /* Bottom Curve Background */
    .mentor-card::before {
        content: "";
        position: absolute;
        bottom: -260px;
        left: 50%;
        transform: translateX(-50%);
        width: 420px;
        height: 450px;
        background: #1A1447;
        border-radius: 260px 260px 0 0;
        transition: 0.5s ease;
        z-index: 1;
    }

    /* On Hover → Full Background */
    .mentor-card:hover::before {
        bottom: 0;
        left: 0;
        transform: none;
        width: 100%;
        height: 100%;
        border-radius: 30px;
    }

    /* Inner Content */
    .mentor-card-inner {
        position: relative;
        z-index: 2;
        padding: 25px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Text */
    .mentor-name {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
        transition: 0.3s;
    }

    .mentor-position {
        font-size: 14px;
        color: #666;
        margin-bottom: 4px;
        transition: 0.3s;
    }

    .mentor-experience {
        font-size: 13px;
        color: #777;
        transition: 0.3s;
    }

    /* Text White on Hover */
    .mentor-card:hover .mentor-name,
    .mentor-card:hover .mentor-position,
    .mentor-card:hover .mentor-experience {
        color: #fff;
    }

    /* Image */
    .mentor-img {
        height: 260px;
        overflow: hidden;
        border-radius: 20px;
        display: flex;
        align-items: flex-end;
    }

    .mentor-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.4s;
    }

    .mentor-card:hover .mentor-img img {
        transform: scale(1.05) translateY(-5px);
    }

    /* Owl spacing fix */
    .mentor-carousel .owl-stage {
        display: flex;
    }

    .mentor-carousel .owl-item {
        padding: 10px;
    }

    /* =======================
MODAL DESIGN
======================= */

    .mentor-modal {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .mentor-modal-content {
        background: #fff;
        width: 90%;
        max-width: 1000px;
        margin: 60px auto;
        padding: 40px;
        border-radius: 20px;
        position: relative;
    }

    .mentor-close {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 30px;
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

    /* =======================
RESPONSIVE
======================= */

    @media (max-width: 768px) {
        .modal-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@push('scripts')
    <script>
        {{-- jQuery is deferred, so wait for DOMContentLoaded rather than calling $ mid-parse. --}}
        document.addEventListener('DOMContentLoaded', function() {

            $(".mentor-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

        });
    </script>
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
