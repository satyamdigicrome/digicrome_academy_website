<section class="py-5">
    <div class="container">
      <div class="row">

      <!-- Left: Certificate Names -->
      <div class="col-md-4">
        <h4 class="mb-4 fw-bold" style="font-size: 2rem;">Certificates</h4>
        <div class="d-flex flex-column gap-3">
        <div class="certificate-box active" data-image="https://digicrome.com/public/www/images/cirt1111.png">
          <span><strong>Our Certificate</strong></span>
          <i class="bi bi-arrow-right-circle-fill"></i>
        </div>
        <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
          <span><strong>Internship Certificate</strong></span>
          <i class="bi bi-arrow-right-circle-fill"></i>
        </div>
        <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
          <span><strong>Microsoft Certificate</strong></span>
          <i class="bi bi-arrow-right-circle-fill"></i>
        </div>
        <div class="certificate-box" data-image="https://digicrome.com/public/www/images/cirt1111.png">
          <span><strong>IBM Certificate</strong></span>
          <i class="bi bi-arrow-right-circle-fill"></i>
        </div>
        </div>
      </div>

      <!-- Right: Image Preview -->
      <div class="col-md-8 d-flex align-items-center justify-content-center">
        <img id="certificate-preview" src="https://digicrome.com/public/www/images/cirt1111.png"
        class="img-fluid rounded shadow-lg border border-light" style="max-height: 450px;" alt="Certificate">
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
      });
    });
    </script>