<!-- ========================= TEAM AREA ========================= -->
<div class="team-area style-two mt-4">
    <div class="container">
        <div class="row align-items-center section-title-space">
            <div class="col-lg-6">
                <div class="section-sub-title">
                    {{-- <h6>INSTRUCTOR</h6> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_title">
                    <h2 class="heading-like-h1">Introducing the Educators and<br>
                        Professional Instructors</h2>
                </div>
            </div>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row image_load owl-carousel mentor-carousel">
            @foreach($mentors as $index => $mentor)
                <div class="col-xl-12 grid-item">
                    <div class="mentor-card shadow" style=" margin: 11px; background: #fff; border-radius: 12px; padding: 20px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: space-between; transition: transform 0.3s ease, box-shadow 0.3s ease;">
        
                        <!-- Image -->
                        <div class="mentor-img mb-3">
                            <img src="{{ asset('storage/' . $mentor->photo) }}" 
                                 alt="Mentor Image" 
                                 style="width: 90px; height: 90px; border-radius: 12px; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        </div>
                
                        <!-- Info -->
                        <div class="mentor-info-box text-center">
                            <h5 class="mentor-name">{{ $mentor->name }}</h5>
                            <hr class="mentor-divider">
                            <p class="mentor-position">{{ $mentor->position }}</p>
                            <p class="mentor-experience">{{ $mentor->experience }}+ Years Experience</p>
                        </div>
                        
                        <!-- Info Icon (styled) -->
                        <div class="mentor-view-icon text-center mt-3">
                            <a href="javascript:void(0);"
                               class="mentor-trigger"
                               title="View Full Profile"
                               data-index="{{ $index }}"
                               data-name="{{ $mentor->name }}"
                               data-position="{{ $mentor->position }}"
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
                            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
                            border: 1px solid #eaeaea;
                        }
                        .mentor-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
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
                                {{-- <div class="instructor-rating">
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
                                </div> --}}
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
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".team-plus").forEach(el => {
        el.addEventListener("click", function () {
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
