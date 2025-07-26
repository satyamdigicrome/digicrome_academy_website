<!-- Professional Fixed Landing Header with Inline Styles -->
<header style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffff;
    z-index: 9999;
    padding: 10px 0;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    border-bottom: 1px solid #eee;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">
        
        <!-- Logo -->
        <div style="flex: 1;">
            <img src="{{ asset('assets/images/logo.webp') }}" alt="Logo" style="height: 45px; width: auto;">
        </div>

        <!-- Phone Number (centered on desktop, hidden on small screens) -->
        <div style="flex: 1; text-align: center; display: none;" class="phone-number-desktop">
            <span style="font-weight: 600; color: #1c1647; font-size: 16px;">
                📞 +91-9999-999-999
            </span>
        </div>

        <!-- Enroll Now Button -->
        <div style="flex: 1; text-align: right;">
            <a href="javascript:void(0);" onclick="openModal()" style="
                background: linear-gradient(145deg, #1d1749, #1a143f);
                box-shadow: 3px 3px 8px rgba(0,0,0,0.2);
                color: #ffffff;
                padding: 10px 22px;
                font-size: 14px;
                font-weight: 600;
                border-radius: 6px;
                text-decoration: none;
                display: inline-block;
                transition: all 0.3s ease;
                ">
                ENROLL NOW
            </a>
        </div>
    </div>
</header>
    <style>
    @media (max-width: 768px) {
        .phone-number-desktop {
            display: none !important;
        }
    }
    @media (min-width: 769px) {
        .phone-number-desktop {
            display: block !important;
        }
    }
</style>
