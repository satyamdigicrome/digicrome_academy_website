<section class="logo-slider-section py-5">
    <h2 class="text-center mb-4" style="font-size: 2rem;">
      Trusted by 100 <span style="color: #f29c12;">world's best</span> companies
    </h2>
    <div class="container-fluid custom-width">
      <div class="Other-logo-list owl-carousel">
        @foreach($companyLogos as $logo)
          <div class="col-lg-12">
            <div class="single-brand-box">
              <div class="brand-thumb">
                <img src="{{ asset('storage/' . $logo->image) }}" alt="brand">
              </div>
            </div>
          </div>
        @endforeach
      </div>
  
      <div class="logo-list owl-carousel">
        @foreach($companyLogos as $logo)
          <div class="col-lg-12">
            <div class="single-brand-box">
              <div class="brand-thumb">
                <img src="{{ asset('storage/' . $logo->image) }}" alt="brand">
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  