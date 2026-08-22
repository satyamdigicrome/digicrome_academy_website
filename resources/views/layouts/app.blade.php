<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @stack('styles')
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <style>
        .site-offer-marquee {
            --offer-navy: #171341;
            --offer-gold: #ffc135;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1100;
            display: flex;
            align-items: center;
            width: 100%;
            min-height: 46px;
            overflow: hidden;
            color: #fff;
            background:
                radial-gradient(circle at 8% 50%, rgba(255, 193, 53, .35), transparent 24%),
                radial-gradient(circle at 92% 50%, rgba(113, 219, 255, .25), transparent 22%),
                linear-gradient(100deg, #100c31, #2b1a68 52%, #15103d);
            box-shadow: 0 4px 14px rgba(18, 12, 54, .22);
        }

        .site-offer-marquee::before,
        .site-offer-marquee::after {
            content: "";
            position: absolute;
            z-index: 1;
            top: 0;
            width: 78px;
            height: 100%;
            pointer-events: none;
        }

        .site-offer-marquee::before { left: 0; background: linear-gradient(90deg, var(--offer-navy), transparent); }
        .site-offer-marquee::after { right: 0; background: linear-gradient(270deg, var(--offer-navy), transparent); }

        .site-offer-marquee__track {
            display: flex;
            width: max-content;
            align-items: center;
            animation: siteOfferMarquee 18s linear infinite;
            will-change: transform;
        }

        .site-offer-marquee:hover .site-offer-marquee__track { animation-play-state: paused; }

        .site-offer-marquee__item {
            display: inline-flex;
            flex: 0 0 auto;
            align-items: center;
            gap: 10px;
            border: 0;
            padding: 9px 38px;
            color: #fff;
            background: transparent;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: .15px;
            white-space: nowrap;
        }

        .site-offer-marquee__badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 4px 9px;
            border-radius: 999px;
            color: #1b124b;
            background: var(--offer-gold);
            box-shadow: 0 0 16px rgba(255, 193, 53, .45);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
        }

        .site-offer-marquee__bell { color: var(--offer-gold); font-size: 17px; }

        body { padding-top: 46px; }
        #sticky-header.sticky { top: 46px !important; }
        .mobile-menu-area.sticky { top: 46px !important; }

        @keyframes siteOfferMarquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        @media (max-width: 767.98px) {
            .site-offer-marquee { min-height: 40px; }
            .site-offer-marquee__item { padding: 8px 24px; font-size: 12px; gap: 7px; }
            .site-offer-marquee__badge { padding: 3px 7px; font-size: 9px; }
            body { padding-top: 40px; }
            #sticky-header.sticky, .mobile-menu-area.sticky { top: 40px !important; }
        }

        @media (prefers-reduced-motion: reduce) {
            .site-offer-marquee__track { animation: none; }
        }
    </style>
    <div class="site-offer-marquee" aria-label="Special price drop offer">
        <div class="site-offer-marquee__track">
            @for ($item = 0; $item < 2; $item++)
                <button class="site-offer-marquee__item" type="button" onclick="openSiteOfferModal()">
                    <span class="site-offer-marquee__bell" aria-hidden="true">🔔</span>
                    <span class="site-offer-marquee__badge">PRICE DROP ALERT</span>
                    <span>Data Science &amp; AI Course Biggest Offer is Live — now only ₹84,999, <span class="fw-bolder text-warning">Few Seats Available</span></span>
                </button>
                <button class="site-offer-marquee__item" type="button" onclick="openSiteOfferModal()">
                    <span class="site-offer-marquee__bell" aria-hidden="true">🔔</span>
                    <span class="site-offer-marquee__badge">PRICE DROP ALERT</span>
                    <span>Data Science &amp; AI Course Biggest Offer is Live — now only ₹84,999, <span class="fw-bolder text-warning">Few Seats Available</span></span>
                </button>
            @endfor
        </div>
    </div>
    <script>
        function openSiteOfferModal() {
            if (typeof openModal === 'function') {
                openModal(document.getElementById('applyNowPopup') ? 'applyNowPopup' : undefined);
                return;
            }

            const applyNowPopup = document.getElementById('applyNowPopup');
            if (applyNowPopup && window.bootstrap && window.bootstrap.Modal) {
                window.bootstrap.Modal.getOrCreateInstance(applyNowPopup).show();
            }
        }
    </script>
    @stack('before-header')
    @if (empty($hideHeader) || $hideHeader === false)
        @include('layouts.header')
    @endif
    @if (request()->is('/') || request()->is('success-stories'))
    <div id="formModal" class="modal" id="mm">
        <div class="modal-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                <h3 style="color:#f29c12; font-size:18px; margin:0;">Get a Quick Call</h3>
                <span onclick="closeModal()" style="font-size:22px; cursor:pointer; color:#fff;">&times;</span>
            </div>
            <p style="font-size:14px; color:#fff; margin-bottom:15px;">Need help? Call us at
                <strong>01204538104</strong><br>or fill the form below.
            </p>
            <form id="professionalForm" method="post" action="{{ route('website.lead') }}"
                style="width:100%; margin:0;">
                @csrf
                <input type="text" name="name" placeholder="Name" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="tel" name="mobile" placeholder="Mobile Number" required pattern="\d{10}"
                    title="Please enter a 10-digit mobile number"
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="email" name="email" placeholder="E-mail ID" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="text" name="address" placeholder="City" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <select name="title" class="form-select" required style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                    <option value="" disabled selected style="color: #999;">Select Course</option>
                    <option value="DS">Data Science & AI</option>
                    <option value="AISS">Cyber Security</option>
                    <option value="other">Other</option>
                </select>
                <input type="text" name="our_custom" style="display:none;" value="digicrome">
                <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                <input type="hidden" name="profession" value="NA">
                <input type="hidden" name="aiss" value="">
                <input type="hidden" name="source" value="Website(Home Page)">
                <input type="hidden" name="country" value="india">
                <input type="hidden" name="comp_name" value="">
                <input type="hidden" name="state" value="">
                <input type="hidden" name="altr_mobile" value="">

                <button type="submit"
                    style="width:100%; padding:10px; background:#f29c12; color:white; border:none; border-radius:5px; font-weight:bold; margin-top:10px;">Submit</button>
            </form>
        </div>
    </div>
    @endif
    @if (request()->is('/'))
        <div id="placementformModal" class="modal" id="mm">
            <div class="modal-content">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                    <h3 style="color:#f29c12; font-size:18px; margin:0;">To Download Placement Report</h3>
                    <span onclick="closePlacementModal()"
                        style="font-size:22px; cursor:pointer; color:#fff;">&times;</span>
                </div>
                <p style="font-size:14px; color:#fff; margin-bottom:15px;">Filled this form below</strong><br>Need help?
                    Call us at
                    <strong>01204538104
                </p>
                <form id="placementprofessionalForm" method="post" action="{{ route('website.lead') }}"
                    style="width:100%; margin:0;">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required
                        style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                    <input type="tel" name="mobile" placeholder="Mobile Number" required pattern="\d{10}"
                        title="Please enter a 10-digit mobile number"
                        style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                    <input type="email" name="email" placeholder="E-mail ID" required
                        style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                    <input type="text" name="address" placeholder="City" required
                        style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                    <select name="title" class="form-select" required style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                        <option value="" disabled selected style="color: #999;">Select Course</option>
                        <option value="DS">Data Science & AI</option>
                        <option value="AISS">Cyber Security</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" name="our_custom" style="display:none;" value="digicrome">
                    <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                    <input type="hidden" name="profession" value="NA">
                    <input type="hidden" name="aiss" value="">
                    <input type="hidden" name="source" value="Website(Home Page)">
                    <input type="hidden" name="country" value="india">
                    <input type="hidden" name="comp_name" value="">
                    <input type="hidden" name="state" value="">
                    <input type="hidden" name="altr_mobile" value="">

                    <button type="submit"
                        style="width:100%; padding:10px; background:#f29c12; color:white; border:none; border-radius:5px; font-weight:bold; margin-top:10px;">Submit</button>
                </form>
            </div>
        </div>
    @endif
    @yield('content')

    @if (empty($hideFooter) || $hideFooter === false)
        @include('layouts.footer')
    @endif
    @stack('scripts')
</body>

</html>
