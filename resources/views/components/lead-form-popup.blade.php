<style>
    /* Modal Background - Scoped */
    #formModal.df-modal-overlay {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0; top: 0;
        width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        backdrop-filter: blur(4px);
    }

    /* Modal Content - Scoped */
    .df-modal-container {
        background: #fff;
        margin: 4% auto;
        border-radius: 12px;
        width: 340px; /* Compact width */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
        animation: dfScaleIn 0.3s ease-out;
    }

    @keyframes dfScaleIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    .df-modal-header {
        background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
        padding: 15px;
        text-align: center;
        color: #fff;
    }

    .df-modal-header h2 {
        margin: 0;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #fff !important; /* Force color to prevent override */
    }

    .df-close-x {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        color: rgba(255, 255, 255, 0.8);
        cursor: pointer;
        z-index: 10;
    }

    .df-close-x:hover { color: #fff; }

    .df-form-body {
        padding: 20px;
    }

    .df-input-group {
        margin-bottom: 12px;
    }

    /* SPECIFIC CLASS NAMES to avoid tag-based styling */
    .df-input-field {
        width: 100% !important;
        padding: 10px 12px !important;
        border-radius: 6px !important;
        border: 1px solid #ddd !important;
        background-color: #fcfcfc !important;
        color: #333 !important;
        font-size: 14px !important;
        box-sizing: border-box !important;
        outline: none !important;
        transition: border 0.2s !important;
        display: block !important;
    }

    .df-input-field:focus {
        border-color: #f39c12 !important;
        background-color: #fff !important;
    }

    /* Dropdown specific */
    select.df-input-field {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23666' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat !important;
        background-position: right 12px center !important;
    }

    .df-btn-submit {
        width: 100%;
        padding: 12px;
        background: #f39c12;
        border: none;
        border-radius: 6px;
        color: #fff !important;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        margin-top: 8px;
        transition: background 0.2s;
    }

    .df-btn-submit:hover {
        background: #e67e22;
    }

    .df-footer-caption {
        font-size: 11px;
        color: #999;
        text-align: center;
        margin-top: 15px;
    }
</style>

<div id="formModal" class="df-modal-overlay">
    <div class="df-modal-container">
        <span class="df-close-x" onclick="closeModal()">&times;</span>

        <div class="df-modal-header">
            <h2 id="modalTitle">Get a Quick Call</h2>
        </div>

        <div class="df-form-body">
            <form class="form" method="post" action="https://demo.digicrome.in/post_lead.php">
                @csrf

                <div class="df-input-group">
                    <input type="text" id="name" name="name" class="df-input-field" placeholder="Name" required autocomplete="name" />
                </div>

                <div class="df-input-group">
                    <input type="tel" id="mobile" name="mobile" class="df-input-field" placeholder="Mobile Number" required autocomplete="tel" />
                </div>

                <div class="df-input-group">
                    <input type="email" id="gmail" name="email" class="df-input-field" placeholder="E-mail ID" required autocomplete="email" />
                </div>

                <div class="df-input-group">
                    <input type="text" id="address" name="address" class="df-input-field" placeholder="City" required autocomplete="address" />
                </div>

                <div class="df-input-group">
                    <select name="title" class="df-input-field" required>
                        <option value="" disabled selected>Select Course</option>
                        <option value="DS">Data Science & AI</option>
                        <option value="AISS">Cyber Security</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <input type="text" name="our_custom" style="display:none;" value="digicrome">
                <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                <input type="hidden" name="profession" value="NA" />
                <input type="hidden" name="source" value="Home Page" id="sourceInput" />
                <input type="hidden" name="country" value="india" />
                <input type="hidden" name="comp_name" value="" />
                <input type="hidden" name="state" value="" />
                <input type="hidden" name="aiss" value="">
                <input type="hidden" name="altr_mobile" value="" />
                
                <button type="submit" class="df-btn-submit">Submit</button>
                <p class="df-footer-caption">Expert assistance is just a click away.</p>
            </form>
        </div>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const currentUrl = window.location.href.toLowerCase();
        const sourceField = document.getElementById('sourceInput');

        if (sourceField) {
            if (currentUrl.includes('course')) {
                sourceField.value = 'Website (Course)';
            } else if (currentUrl.includes('blog')) {
                sourceField.value = 'Website (Blog)';
            }
        }
    });

    function openModal() {
        document.getElementById("formModal").style.display = "block";
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