<style>
    /* Modal Background - Scoped */
    #formModal.df-modal-overlay {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0; top: 0;
        width: 100%; height: 100%;
        background-color: rgba(15, 23, 42, 0.6); /* Modern darker backdrop */
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        backdrop-filter: blur(8px); /* Increased blur for modern feel */
        align-items: center;
        justify-content: center;
    }

    /* Modal Container - Responsive Split Flexbox */
    .df-modal-container {
        background: #fff;
        margin: auto;
        border-radius: 16px;
        width: 720px; /* Wider for desktop split view */
        max-width: 90%;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        position: relative;
        overflow: hidden;
        display: flex; /* Flex layout for side-by-side */
        animation: dfScaleIn 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes dfScaleIn {
        from { opacity: 0; transform: scale(0.92); }
        to { opacity: 1; transform: scale(1); }
    }

    /* LEFT SIDE: Graphic Panel (Desktop Only) */
    .df-modal-graphic {
        flex: 1;
        background: linear-gradient(135deg, #aa12f3 0%, #e67e22 100%);
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
        position: relative;
    }

    /* Modern SVG Vector Graphic Illustration */
    .df-graphic-illustration {
        width: 120px;
        height: 120px;
        margin-bottom: 25px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(4px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .df-modal-graphic h3 {
        margin: 0 0 10px 0;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 0.5px;
        line-height: 1.3;
        color: #fff;
    }

    .df-modal-graphic p {
        margin: 0;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.5;
    }

    /* RIGHT SIDE: Form Panel */
    .df-modal-form-wrapper {
        flex: 1.1;
        padding: 35px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #fff;
    }

    .df-modal-header-mobile {
        display: none; /* Handled by desktop graphic side, visible on mobile only */
    }

    .df-close-x {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 24px;
        color: #94a3b8;
        cursor: pointer;
        z-index: 10;
        transition: color 0.2s;
        line-height: 1;
    }

    .df-close-x:hover { color: #334155; }

    .df-form-body {
        padding: 0;
    }

    .df-input-group {
        margin-bottom: 14px;
    }

    /* Input Styling Updates */
    .df-input-field {
        width: 100% !important;
        padding: 11px 14px !important;
        border-radius: 8px !important;
        border: 1px solid #cbd5e1 !important;
        background-color: #f8fafc !important;
        color: #1e293b !important;
        font-size: 14px !important;
        box-sizing: border-box !important;
        outline: none !important;
        transition: all 0.2s ease !important;
        display: block !important;
    }

    .df-input-field:focus {
        border-color: #f39c12 !important;
        background-color: #fff !important;
        box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.15) !important;
    }

    /* Dropdown specific */
    select.df-input-field {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat !important;
        background-position: right 14px center !important;
    }

    .df-btn-submit {
        width: 100%;
        padding: 13px;
        background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
        border: none;
        border-radius: 8px;
        color: #fff !important;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        margin-top: 10px;
        box-shadow: 0 4px 12px rgba(230, 126, 34, 0.2);
        transition: all 0.2s ease;
    }

    .df-btn-submit:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(230, 126, 34, 0.3);
    }

    .df-btn-submit:active {
        transform: translateY(0);
    }

    .df-footer-caption {
        font-size: 12px;
        color: #64748b;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 0;
    }

    /* RESPONSIVE BREAKPOINT: Mobile View Layout Transformation */
    @media (max-width: 768px) {
        #formModal.df-modal-overlay {
            display: none; /* Keeps setup dynamic style display mapping intact */
            padding: 15px;
        }

        .df-modal-container {
            flex-direction: column;
            width: 100%;
            max-width: 360px; /* Back to compact format for small viewport */
        }

        .df-modal-graphic {
            display: none; /* Completely removes graphic block on mobile devices */
        }

        .df-modal-form-wrapper {
            padding: 30px 20px 25px 20px;
        }

        .df-modal-header-mobile {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .df-modal-header-mobile h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
        }
    }
</style>

<div id="formModal" class="df-modal-overlay">
    <div class="df-modal-container">
        <!-- Close Button (Now positioned relative to container top-right) -->
        <span class="df-close-x" onclick="closeModal()">&times;</span>

        <!-- LEFT SIDE: Graphic Cover (Auto Hidden on Mobile Screens) -->
        <div class="df-modal-graphic">
            <div class="df-graphic-illustration">
                <!-- Smart Minimalist Phone/Consultation Icon Vector -->
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 1 3 1.24 3 1.99 3 11.93 11.07 20 21 20c.71 0 .99-.6.99-1.18v-2.45c0-.54-.45-.99-.98-.99z" fill="#ffffff"/>
                </svg>
            </div>
            <h3>Get a Quick Call</h3>
            <p>Fill out your basic details, and our educational experts will guide you to your perfect career path.</p>
        </div>

        <!-- RIGHT SIDE: The Core Input Fields Form Container -->
        <div class="df-modal-form-wrapper">
            <!-- Mobile Display Only Title Structure -->
            <div class="df-modal-header-mobile">
                <h2>Get a Quick Call</h2>
            </div>

            <div class="df-form-body">
                <form class="form" method="post" action="https://demo.digicrome.in/post_lead.php">
                    <input type="hidden" name="_token" value="dummy_or_blade_token_field">

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
        // Changed to 'flex' so centering properties in CSS execute perfectly
        document.getElementById("formModal").style.display = "flex"; 
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