<style>
    /* Modal Background */
    #formModal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0; top: 0;
      width: 100%; height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      backdrop-filter: blur(5px);
    }
  
    /* Modal Content */
    .modal-content {
      background: #fff;
      margin: 6% auto;
      border-radius: 15px;
      width: 420px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      color: #111;
      position: relative;
      opacity: 0;
      transform: translateY(-30px);
      animation: slideDownFadeIn 0.4s forwards ease-in-out;
    }
  
    @keyframes slideDownFadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  
    /* Header */
    .modal-header {
      font-weight: 700;
      font-size: 22px;
      margin-bottom: 12px;
      color: #222;
      text-align: center;
      border-bottom: 2px solid #ddd;
      padding-bottom: 12px;
    }
    .modal-header .phone {
      font-weight: 600;
      font-size: 16px;
      color: #555;
      margin-top: 4px;
    }
  
    /* Close button */
    .close-btn {
      position: absolute;
      top: 18px;
      right: 22px;
      font-size: 28px;
      font-weight: 700;
      color: #888;
      cursor: pointer;
      user-select: none;
      transition: color 0.2s ease;
    }
    .close-btn:hover {
      color: #000;
    }
  
    /* Form */
    form.form {
      width: 100%;
      margin-top: 20px;
    }
  
    form h2 {
      color: #333;
      margin-bottom: 20px;
      font-weight: 600;
      text-align: center;
    }
  
    /* Input fields */
    .form-field {
      margin-bottom: 18px;
    }
    input[type="text"],
    input[type="tel"],
    input[type="email"] {
      width: 100%;
      padding: 14px 16px;
      border-radius: 8px;
      border: 1.8px solid #ddd;
      /* background: #fafafa; */
      color: #222;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      outline: none;
      box-shadow: inset 2px 2px 5px #eee, inset -2px -2px 5px #fff;
    }
    input[type="text"]::placeholder,
    input[type="tel"]::placeholder,
    input[type="email"]::placeholder {
      color: #bbb;
    }
    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="email"]:focus {
      border-color: #222;
      box-shadow: 0 0 8px #ddd;
      /* background: #fff; */
    }
  
    /* Submit Button */
    button[type="submit"] {
      width: 100%;
      padding: 14px;
      background: #222;
      border: none;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }
    button[type="submit"]:hover {
      background: #444;
      box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }
  
  </style>
  
  <div id="formModal" class="modal" aria-modal="true" role="dialog" aria-labelledby="modalTitle">
      <div class="modal-content">
          <div class="modal-body" style="padding: 0px;">
            <span class="close-btn" onclick="closeModal()" aria-label="Close modal">&times;</span>

              <form class="form" method="post" action="https://demo.digicrome.in/post_lead.php" novalidate>
                  @csrf
                  <h2 id="modalTitle" style="color: #000">Welcome to Digicrome</h2>
                  <div class="form-field">
                      <input type="text" id="name" name="name" placeholder="Name" required autocomplete="name" />
                  </div>
                  <div class="form-field">
                      <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required autocomplete="tel" />
                  </div>
                  <div class="form-field">
                      <input type="email" id="gmail" name="email" placeholder="E-mail ID" required autocomplete="email" />
                  </div>
                  <input type="hidden" name="address" value="NA" />
                  <input type="hidden" name="title" value="NA" />
                  <input type="hidden" name="profession" value="NA" />
                  <input type="hidden" name="source" value="Home Page" />
                  <input type="hidden" name="country" value="india" />
                  <input type="hidden" name="comp_name" value="" />
                  <input type="hidden" name="state" value="" />
                  <input type="hidden" name="ib" value="">
                  <input type="hidden" name="altr_mobile" value="" />
                  <button type="submit" aria-label="Submit form" style="background-color: green" >Submit</button>
              </form>
          </div>
      </div>
  </div>
  
  <script>
    function openModal() {
      const modal = document.getElementById("formModal");
      modal.style.display = "block";
      // Trigger reflow to restart animation if needed
      void modal.offsetWidth;
      // Add animation class (already handled by CSS animation)
    }
    function closeModal() {
      document.getElementById("formModal").style.display = "none";
    }
    window.onclick = function(event) {
      const modal = document.getElementById("formModal");
      if (event.target === modal) {
        closeModal();
      }
    };
  </script>
  