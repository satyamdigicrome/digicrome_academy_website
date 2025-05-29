<section class="mt-5">
    <h2 class="text-center mb-2" style="font-size: 2rem;">
      Trusted by <span style="color: #f29c12;">millions of learners</span> around the world
    </h2>
    <div class="container">
      <div class="row justify-content-center mt-4">
        @foreach ($logos as $logo)
        <div class="col-lg-2">
          <div class="single-brand-box">
            <div class="brand-thumb">
              <img src="{{ $logo }}" alt="brand">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  