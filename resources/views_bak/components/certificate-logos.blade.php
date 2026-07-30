<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Left: Certificate Names -->
            <div class="col-md-4">
              <h4 class="mb-4 fw-bold" style="font-size: 2rem;">Certificates</h4>
              <div class="d-flex flex-column gap-3">
                @foreach($logos as $index => $logo)
                  <div 
                    class="certificate-box {{ $index === 0 ? 'active' : '' }}" 
                    data-image="{{ asset('storage/' . $logo->image) }}"
                    role="button"
                    tabindex="0"
                  >
                    <span><strong>{{ $logo->name }}</strong></span>
                    <i class="bi bi-arrow-right-circle-fill"></i>
                  </div>
                @endforeach
              </div>
            </div>
          
            <!-- Right: Image Preview -->
            <div class="col-md-8 d-flex align-items-center justify-content-center">
              @if($logos->isNotEmpty())
                <img 
                  loading="lazy"
                  id="certificate-preview" 
                  src="{{ asset('storage/' . $logos[0]->image) }}"
                  class="img-fluid rounded shadow-lg border border-light" 
                  style="max-height: 450px;" 
                  alt="{{ $logos[0]->name }}"
                >
              @else
                <p>No certificates found.</p>
              @endif
            </div>
          </div>
          
                  
    </div>
  </section>
  
  <script>
    const boxes = document.querySelectorAll('.certificate-box');
    const preview = document.getElementById('certificate-preview');
  
    boxes.forEach(box => {
      box.addEventListener('click', () => {
        boxes.forEach(b => b.classList.remove('active'));
        box.classList.add('active');
        preview.src = box.getAttribute('data-image');
        preview.alt = box.querySelector('strong').innerText;
      });
  
      box.addEventListener('keydown', (e) => {
        if(e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          box.click();
        }
      });
    });
  </script>

    