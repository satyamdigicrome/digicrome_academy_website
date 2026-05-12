{{-- <style>
        /* BACKDROP */
        .christmas-offer-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 9998;
            justify-content: center;
            align-items: center;
        }

        /* IMAGE CONTAINER */
        .christmas-offer-content {
            width: 90%;
            max-width: 900px;
            aspect-ratio: 16 / 9;
            background: url('{{ asset('assets/images/website_special_offer.gif') }}') center center / contain no-repeat;
            cursor: pointer;
        }

        /* CLOSE BUTTON */
        .christmas-close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 32px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            z-index: 9999;
            line-height: 1;
        }

        .christmas-close-btn:hover {
            color: #ffcc66;
        }

        /* MOBILE */
        @media (max-width: 576px) {
            .christmas-offer-content {
                width: 95%;
                aspect-ratio: 4 / 5;
            }
        }
    </style> --}}
        {{-- <div id="christmasOfferModal" class="christmas-offer-modal" style="display: flex;">
        <div class="christmas-offer-content" onclick="openFormFromOffer()">
        </div>
        <span class="christmas-close-btn" onclick="closeChristmasModal(event)">×</span>
    </div> --}}
{{--     
        // window.onload = function() {
        //     document.getElementById('christmasOfferModal').style.display = 'flex';
        // };

        // function openFormFromOffer() {
        //     document.getElementById('christmasOfferModal').style.display = 'none';

        //     const sourceInput = document.querySelector('#formModal input[name="source"]');
        //     if (sourceInput) {
        //         sourceInput.value = 'Website-Republic-sale';
        //     }
        //     openModal();
        // }

        // function closeChristmasModal(e) {
        //     e.stopPropagation(); // prevent image click
        //     document.getElementById('christmasOfferModal').style.display = 'none';
        // }
    --}}
    {{-- <div id="christmasOfferModal" class="christmas-offer-modal" style="display: flex;">
        <div class="christmas-offer-content" onclick="openFormFromOffer()">
        </div>
        <span class="christmas-close-btn" onclick="closeChristmasModal(event)">×</span>
    </div> --}}

    {{-- <div class="row">
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Post Graduate Program In Data Science with Generative AI</p>
                                    <p><strong>Duration:</strong> 12 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$4499</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Professional Certification Course in Data Science with
                                        Machine Learning</p>
                                    <p><strong>Duration:</strong> 6 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$1999</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Advanced Certification Program in Generative AI & Deep
                                        Learning</p>
                                    <p><strong>Duration:</strong> 6 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$2999</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <img loading="lazy"src="https://digicrome.com/public/www/seoimg/paypal.webp"
                                alt="digicrome_payment" title="digicrome_payment">
                        </div>
                        <div class="col-lg-6">

                            <h2 class="text-center mt-4 mb-3">Payment Details</h2>
                            <p class="text-muted text-center">Please provide the necessary information to proceed with the
                                payment, as required by PayPal.</p>

                            <!--<form method="POST" action="#" onsubmit="getPayPalAccessToken(); return false;">-->
                            <!--    <input type="hidden" name="_token" value="xh7XFutT25bJCqcKcboOclrEmzSu6uJivY24XwwY">-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="name" class="form-label">Name</label>-->
                            <!--        <input type="text" class="form-control" id="name" name="name" required>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="mobile" class="form-label">Mobile Number</label>-->
                            <!--        <input type="tel" class="form-control" id="mobile" name="mobile" required>-->
                            <!--    </div>-->

                            <!--    <div class="row mb-3">-->
                            <!--        <div class="col-md-6">-->
                            <!--            <label for="amount" class="form-label">Amount</label>-->
                            <!--            <input type="number" class="form-control" id="amount" name="amount" required>-->
                            <!--        </div>-->
                            <!--        <div class="col-md-6">-->
                            <!--            <label for="currency" class="form-label">Currency</label>-->
                            <!--            <select class="form-select" id="currency" name="currency" required>-->
                            <!--                <option value="USD">USD</option>-->
                            <!--                <option value="EUR">EUR</option>-->
                            <!--                <option value="GBP">GBP</option>-->
                            <!--                 Add more currency options as needed -->
                            <!--            </select>-->
                            <!--        </div>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="course_name" class="form-label">Course Name</label>-->
                            <!--        <input type="text" class="form-control" id="course_name" name="course_name" required>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="advisor_name" class="form-label">Career Growth Advisor Name</label>-->
                            <!--        <input type="text" class="form-control" id="advisor_name" name="advisor_name" required>-->
                            <!--    </div>-->

                            <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
                            <!--</form>-->
                            <script
                                src="https://www.paypal.com/sdk/js?client-id=BAANE4MFZN47qiPJFe5W2GKXlJNOFMVV8stKRJTIBrLbJrEzTLxcSZJKFt6sJhmt7y8HW17w3Dxf1BSUz0&components=hosted-buttons&disable-funding=venmo&currency=USD">
                            </script>
                            <div id="paypal-container-5ZV526MJF5SMU"></div>
                            <script>
                                paypal.HostedButtons({
                                    hostedButtonId: "5ZV526MJF5SMU",
                                }).render("#paypal-container-5ZV526MJF5SMU")
                            </script>
                        </div>
                    </div>
                    <br><br> --}}
                    {{-- <div class="team-area style-two mt-4">
    <div class="container">
        <div class="row align-items-center section-title-space">
            <div class="col-lg-12">
                <div class="section_title">
                    <h2 class="heading-like-h1">Introducing the Educators and Professional Instructors</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row image_load owl-carousel mentor-carousel">
            @foreach ($mentors as $index => $mentor)
                <div class="col-xl-12 grid-item">
                    <div class="mentor-card shadow"
                        style=" margin: 11px; background: #fff; border-radius: 12px; padding: 20px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: space-between; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="mentor-img mb-3">
                            <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Mentor Image" loading="lazy"
                                style="width: 90px; height: 90px; border-radius: 12px; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        </div>
                        <div class="mentor-info-box text-center">
                            <h5 class="mentor-name">{{ $mentor->name }}</h5>
                            <hr class="mentor-divider">
                            <p class="mentor-position">{{ $mentor->position }}</p>
                            <p class="mentor-experience">{{ $mentor->experience }}+ Years Experience</p>
                        </div>
                        <div class="mentor-view-icon text-center mt-3">
                            <a href="javascript:void(0);" class="mentor-trigger" title="View Full Profile"
                                data-name="{{ $mentor->name }}" data-position="{{ $mentor->position }}"
                                data-experience="{{ $mentor->experience }}+ Years"
                                data-description="{{ $mentor->description }}"
                                data-image="{{ asset('storage/' . $mentor->photo) }}">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                        </div>
                    </div>
                    <style>
                        .mentor-card {
                            min-height: 320px;
                            max-height: 320px;
                            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
                            border: 1px solid #eaeaea;
                        }

                        .mentor-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
                        }

                        .mentor-info-box {
                            line-height: 1.5;
                        }

                        .mentor-name {
                            font-size: 17px;
                            font-weight: 600;
                            color: #222;
                            margin-bottom: 5px;
                        }

                        .mentor-divider {
                            width: 40px;
                            margin: 6px auto;
                            border-top: 2px solid #007bff;
                        }

                        .mentor-position {
                            font-size: 14px;
                            font-weight: 500;
                            color: #444;
                            margin-bottom: 4px;
                        }

                        .mentor-experience {
                            font-size: 13px;
                            color: #666;
                            margin-bottom: 0;
                        }

                        .mentor-view-icon a {
                            font-size: 20px;
                            color: #007bff;
                            transition: transform 0.2s ease, color 0.2s ease;
                        }

                        .mentor-view-icon a:hover {
                            color: #0056b3;
                            transform: scale(1.1);
                        }
                    </style>

                </div>
            @endforeach
        </div>

    </div>
</div>
<div id="mentorPopup"
    style="display: none; position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100%; background: rgba(0,0,0,0.7); overflow-y: auto;">
    <div style="position: relative; margin: 50px auto; max-width: 1140px;">
        <span class="mentor-popup-close"
            style="position: absolute;top: 2px;right: 9px;font-size: 30px;color: #000 !important;cursor: pointer;font-size: 36px;z-index: 9;">&times;</span>
        <div class="instruction-details-section">
            <div class="container">
                <div class="row instructor-details-bg">
                    <div class="col-lg-3">
                        <div class="instructor-details-thumb">
                            <img style="border-radius: 25px;" loading="lazy" id="mentorImg" src=""
                                alt="instructor">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="instructor-details-info">
                            <div class="instructor-info">
                                <h3 id="mentorName" class="instructor-name">Mentor Name</h3>
                                <div class="instructior-designation">
                                    <h5 id="mentorPosition">Position</h5>
                                </div>
                                <div class="instructor-course-info">
                                    <ul>
                                        <li><a href="#"><i class="fa-regular fa-clock"></i> <span
                                                    id="mentorExp">Experience: </span></a></li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="instruction-details-box">
                            <div class="instructor-details-content">
                                <h3 class="instructor-details-title">About Me</h3>
                                <p id="mentorDesc" class="instructor-details-desc">Description will be injected here...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".mentor-trigger").forEach(el => {
                el.addEventListener("click", function() {
                    const name = this.getAttribute("data-name");
                    const position = this.getAttribute("data-position");
                    const experience = this.getAttribute("data-experience");
                    const description = this.getAttribute("data-description");
                    const image = this.getAttribute("data-image");
                    document.getElementById("mentorName").innerText = name;
                    document.getElementById("mentorPosition").innerText = position;
                    document.getElementById("mentorDesc").innerText = description;
                    document.getElementById("mentorImg").src = image;
                    document.getElementById("mentorExp").innerText = "Experience: " + experience;
                    document.getElementById("mentorPopup").style.display = "block";
                });
            });
            document.querySelector(".mentor-popup-close").addEventListener("click", function() {
                document.getElementById("mentorPopup").style.display = "none";
            });
            window.addEventListener("click", function(e) {
                if (e.target.id === "mentorPopup") {
                    document.getElementById("mentorPopup").style.display = "none";
                }
            });
        });
    </script>
@endpush --}}
    {{-- @if (count(value: $videos) > 0)
        <section class="video-slider py-5">
            <div class="container">
                <h2 class="text-center mb-3" style="font-size: 2rem;">
                    <span style="color: #f29c12;">Featured </span> Testimonials
                </h2>
                <p class="text-center text-muted mb-4" style="font-size: 1.1rem;">
                    Presenting our recent feedbacks — Have a look!
                </p>
                <div class="owl-carousel gif-carousel">
                    @foreach ($videos as $video)
                        <div class="text-center">
                            <div class="gif-wrapper" data-bs-toggle="modal" data-bs-target="#youtubeModal"
                                data-youtube="https://www.youtube.com/embed/{{ $video->video_link }}">
                                <div class="gif-container">
                                    <video class="gif-img rounded shadow-sm" autoplay loop muted playsinline
                                        preload="metadata" poster="{{ asset('storage/' . $video->image) }}">
                                        <source src="{{ asset('storage/' . $video->image) }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="video-title mt-2 fw-semibold">{{ $video->name }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
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
            <style>
                .responsive-video-wrapper {
                    position: relative;
                    width: 100%;
                    padding-top: 177.77%;
                    background-color: #000;
                }

                .responsive-video-wrapper iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .youtube-modal-box {
                    background-color: #000;
                    border-radius: 12px;
                    overflow: hidden;
                    width: 100%;
                    max-width: 420px;
                    margin: auto;
                    position: relative;
                }

                .youtube-video-wrapper {
                    position: relative;
                    width: 100%;
                    padding-top: 177.77%;
                    background-color: #000;
                }

                .youtube-video-wrapper iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .custom-youtube-dialog {
                    max-width: 100%;
                    width: auto;
                    margin: auto;
                }

                .custom-close-btn {
                    position: absolute;
                    color: black !important;
                    background-color: transparent !important;
                    border: none !important;
                    top: 10px;
                    right: 10px;
                    z-index: 10;
                    filter: invert(1);
                    opacity: 0.8;
                    transition: 0.2s;
                }

                .custom-close-btn:hover .custom-close-btn:focus {
                    color: black !important;
                    opacity: 1;
                }

                @media (max-width: 576px) {
                    .youtube-modal-box {
                        max-width: 90%;
                    }
                }

                .custom-modal-dialog {
                    max-width: 400px;
                    width: 100%;
                }

                @media (max-width: 576px) {
                    .custom-modal-dialog {
                        margin: 0 10px;
                    }
                }

                .gif-container {
                    width: 240px;
                    height: 426px;
                    margin: auto;
                    overflow: hidden;
                    border-radius: 12px;
                    background-color: #000;
                }

                .gif-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.3s ease;
                    cursor: pointer;
                }

                .gif-img:hover {
                    transform: scale(1.03);
                }

                .video-title {
                    font-size: 1rem;
                    color: #333;
                }
            </style>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    $('.gif-carousel').owlCarousel({
                        loop: true,
                        margin: 20,
                        nav: false,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            576: {
                                items: 2
                            },
                            768: {
                                items: 3
                            },
                            992: {
                                items: 4
                            },
                            1200: {
                                items: 5
                            }
                        }
                    });
                    const cards = document.querySelectorAll('.gif-wrapper');
                    const player = document.getElementById('youtubePlayer');
                    const modal = document.getElementById('youtubeModal');
                    cards.forEach(card => {
                        card.addEventListener('click', function() {
                            const videoUrl = this.getAttribute('data-youtube') +
                                '?autoplay=1&modestbranding=1&rel=0';
                            player.src = videoUrl;
                        });
                    });
                    modal.addEventListener('hidden.bs.modal', function() {
                        player.src = '';
                    });
                });
            </script>
        </section>
    @endif --}}
 {{-- <div class="hero-section">
        <div class="hero-section" style="position: relative;">
            <picture>
                <source media="(max-width: 768px)"
                    srcset="
                    {{ asset('assets/images/home-one/ai-summit-480.webp') }} 480w,
                    {{ asset('assets/images/home-one/ai-summit-768.webp') }} 768w
                "
                    sizes="100vw">
                <source type="image/avif" srcset="{{ asset('assets/images/home-one/ai-summit.avif') }}">
                <source type="image/webp" srcset="{{ asset('assets/images/home-one/ai-summit.webp') }}">
                <img src="{{ asset('assets/images/home-one/ai-summit.webp') }}" alt="Hero Banner" width="1200"
                    height="400" decoding="async" style="width:100%;height:auto;">
            </picture>
        </div>
    </div> --}}