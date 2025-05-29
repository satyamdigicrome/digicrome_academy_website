<div class="educate-details-course-area style-inner details">
    <div class="container">
      <div class="row align-items-center section-title-space">
        <div class="col-lg-12">
          <div class="section_title text-center">
            <h1>Course you may like</h1>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($courses->take(3) as $course)
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="course-details-box">
              <div class="course-details-thumb">
                <img src="{{ asset('storage/'.$course->image) }}" alt="thumb">
                <div class="course-meta-top">
                  <span>{{ $course->tag_line }}</span>
                </div>
              </div>
              <div class="course-details-content">
                <h4><a href="{{ route('course_details', ['slug' => $course->slug]) }}">{{ $course->name }}</a></h4>
                <div class="course-rating">
                  <ul>
                    @for($i = 0; $i < 5; $i++)
                      <li><i class="fa-solid fa-star{{ $i < $course->rating ? '' : '-half' }}"></i></li>
                    @endfor
                  </ul>
                  <div class="course-rating-num">
                    <span>({{ $course->rating }}/{{ $course->ratings_count }} Ratings)</span>
                  </div>
                  <div class="course-price">
                    <h3>${{ $course->price }}</h3>
                  </div>
                </div>
                <div class="course-details-list">
                  <div class="course-lesson">
                    <span><i class="fa-regular fa-file-lines"></i> {{ $course->lessons_count }} Lessons</span>
                  </div>
                  <div class="course-student">
                    <span><i class="fa-regular fa-user"></i> {{ $course->students_count }} Students</span>
                  </div>
                </div>
                <div class="course-btn">
                  <a href="{{ route('course_details', ['slug' => $course->slug]) }}" class="btn">
                    ENROL NOW <i class="flaticon flaticon-right-arrow"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  