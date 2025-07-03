<!-- ========================= TEAM AREA ========================= -->
<div class="team-area style-two mt-4">
    <div class="container">
        <div class="row align-items-center section-title-space">
            <div class="col-lg-6">
                <div class="section-sub-title">
                    <h6>INSTRUCTOR</h6>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_title">
                    <h2 class="heading-like-h1">Introducing the Educators and<br>
                        Professional Instructor</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row image_load">
            <!-- Instructor 1 -->
            <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                <div class="single-team-box">
                    <div class="team-thumb">
                        <img style="border-radius: 25px;" src="{{ asset('assets/images/team/team1.webp') }}" alt="thumb">
                    </div>
                    <div class="team-content">
                        <div class="team-icon">
                            <div  style="border: 14px solid #fff; border-radius: 56px;" class="team-plus" data-index="0">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="team-title">
                            <h3><a href="#">Arun Paswan</a></h3>
                        </div>
                        <div class="team-sub-title">
                            <h5>Data Scientist Trainer</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructor 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                <div class="single-team-box">
                    <div class="team-thumb">
                        <img style="border-radius: 25px;" src="{{ asset('assets/images/team/team5.webp') }}" alt="thumb">
                    </div>
                    <div class="team-content">
                        <div class="team-icon">
                            <div  style="border: 14px solid #fff; border-radius: 56px;" class="team-plus" data-index="1">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="team-title">
                            <h3><a href="#">Dayanand Lal Das</a></h3>
                        </div>
                        <div class="team-sub-title">
                            <h5>Data Science & AI Trainer</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructor 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                <div class="single-team-box">
                    <div class="team-thumb">
                        <img style="border-radius: 25px;" src="{{ asset('assets/images/team/team2.webp') }}" alt="thumb">
                    </div>
                    <div class="team-content">
                        <div class="team-icon">
                            <div  style="border: 14px solid #fff; border-radius: 56px;" class="team-plus" data-index="2">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="team-title">
                            <h3><a href="#">Chhavi Manchanda</a></h3>
                        </div>
                        <div class="team-sub-title">
                            <h5>Professional Soft Skills Trainer</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructor 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                <div class="single-team-box">
                    <div class="team-thumb">
                        <img style="border-radius: 25px;" src="{{ asset('assets/images/team/team3.webp') }}" alt="thumb">
                    </div>
                    <div class="team-content">
                        <div class="team-icon">
                            <div  style="border: 14px solid #fff; border-radius: 56px;" class="team-plus" data-index="3">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="team-title">
                            <h3><a href="#">Divya Solanki</a></h3>
                        </div>
                        <div class="team-sub-title">
                            <h5>Data Science Trainer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================= POPUP ========================= -->
<div id="mentorPopup" style="display: none; position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100%; background: rgba(0,0,0,0.7); overflow-y: auto;">
    <div style="position: relative; margin: 50px auto; max-width: 1140px;">
        <span class="mentor-popup-close" 
        style="
        position: absolute;
        top: 2px;
        right: 9px;
        font-size: 30px;
        color: #000 !important;
        cursor: pointer;
        font-size: 36px;
        z-index: 9;">&times;</span>

        <div class="instruction-details-section">
            <div class="container">
                <div class="row instructor-details-bg">
                    <div class="col-lg-3">
                        <div class="instructor-details-thumb">
                            <img style="border-radius: 25px;" id="mentorImg" src="" alt="instructor">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="instructor-details-info">
                            <div class="instructor-info">
                                <h3 id="mentorName" class="instructor-name">Mentor Name</h3>
                                <div class="instructor-rating">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    </ul>
                                </div>
                                <div class="instructior-ratting-count">
                                    <span class="rating-count">(4.5)</span>
                                </div>
                                <div class="instructior-designation">
                                    <h5 id="mentorPosition">Position</h5>
                                </div>
                                <div class="instructor-course-info">
                                    <ul>
                                        <li><a href="#"><i class="fa-regular fa-clock"></i> <span id="mentorExp">Experience: </span></a></li><br>
                                        {{-- <li><a href="#"><i class="fa-regular fa-id-badge"></i> <span id="mentorPosition">Position</span></a></li> --}}
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="instruction-details-box">
                            <div class="instructor-details-content">
                                <h3 class="instructor-details-title">About Me</h3>
                                <p id="mentorDesc" class="instructor-details-desc">Description will be injected here...</p>
                            </div>
                            {{-- <div class="instructor-info-list">
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-envelope"></i> example@gmail.com</a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i> +123 (4567) 890</a></li>
                                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> 102/B main road, California-USA</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ========================= SCRIPT ========================= -->
@push('scripts')
<script>
const mentors = [
    {
        name: "Arun Paswan",
        experience: "8+ years",
        position: "Data Scientist Trainer",
        image: "{{ asset('assets/images/team/team1.webp') }}",
        description: "Arun Paswan is a Data Science professional with more than 8 years of experience. As a Trainer, he enjoys making data concepts clear and easy for students to understand and with his supportive nature and industry knowledge, Arun helps learners build confidence as well as the practical skills and believes in guiding students step-by-step toward a successful future in data science and AI."
    },
    {
        name: "Dayanand Lal Das",
        experience: "14+ years",
        position: "Data Science & AI Trainer",
        image: "{{ asset('assets/images/team/team5.webp') }}",
        description: "Dayanand Lal Das is an experienced and focused trainer in Data Science and AI. He has 14 years of experience in this field and makes complex topics easy to understand and teaching style is clear, practical, and full of live examples. His goal is to inspire students to explore, learn, and succeed in the growing world of AI and data science."
    },
    {
        name: "Chhavi Manchanda",
        experience: "3+ years",
        position: "Professional Soft Skills Trainer",
        image: "{{ asset('assets/images/team/team2.webp') }}",
        description: "Chhavi Manchanda brings energy and clarity to soft skills training with her 3+ years of experience. She supports everyone in building strong communication, teamwork, and presentation skills. Her practical approach makes learning easy and enjoyable. Chhavi focuses on helping students communicate better and feel more confident in both academic and professional places. She believes soft skills can truly shape a learner 's future."
    },
    {
        name: "Divya Solanki",
        experience: "6+ years",
        position: "Data Science Trainer",
        image: "{{ asset('assets/images/team/team3.webp') }}",
        description: "Divya Solanki has 6 years of teaching experience and 1 year of experience as Data Science Trainer. She enjoys helping students learn in a simple and clear way. Her mix of classroom and technical experience makes her teaching effective and engaging. Divya focuses on building strong foundations and guiding students to grow with confidence in both academics and the tech field."
    }
];

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".team-plus").forEach(el => {
        el.addEventListener("click", function () {
            const index = this.getAttribute("data-index");
            const mentor = mentors[index];

            document.getElementById("mentorName").innerText = mentor.name;
            document.getElementById("mentorPosition").innerText = mentor.position;
            document.getElementById("mentorDesc").innerText = mentor.description;
            document.getElementById("mentorImg").src = mentor.image;
            document.getElementById("mentorExp").innerText = "Experience: " + mentor.experience;


            document.getElementById("mentorPopup").style.display = "block";
        });
    });

    document.querySelector(".mentor-popup-close").addEventListener("click", function () {
        document.getElementById("mentorPopup").style.display = "none";
    });

    window.addEventListener("click", function (e) {
        if (e.target.id === "mentorPopup") {
            document.getElementById("mentorPopup").style.display = "none";
        }
    });
});
</script>
@endpush
