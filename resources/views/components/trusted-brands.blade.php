  <section class="mt-5">
      <h2 class="text-center mb-2" id="color" style="font-size: 2rem; ">
        Trusted by <span >millions of learners</span> around the Globe
      </h2>
      <div class="container">
        <div class="row justify-content-center mt-4">
          @foreach ($logos as $logo)
          <div class="col-lg-2">
            <div class="single-brand-box">
              <div class="brand-thumb">
                <img style="border: 4px solid #000;" loading="lazy"src="{{ $logo }}" alt="brand">
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    