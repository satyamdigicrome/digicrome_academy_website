<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @stack('styles')
    @stack('scripts')
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    @if (empty($hideHeader) || $hideHeader === false)
        @include('layouts.header')
    @endif
    @if (request()->is('/'))
    <div id="formModal" class="modal" id="mm">
        <div class="modal-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                <h3 style="color:#f29c12; font-size:18px; margin:0;">Get a Quick Call</h3>
                <span onclick="closeModal()" style="font-size:22px; cursor:pointer; color:#fff;">&times;</span>
            </div>
            <p style="font-size:14px; color:#fff; margin-bottom:15px;">Need help? Call us at
                <strong>01204538104</strong><br>or fill the form below.
            </p>
            <form id="professionalForm" method="post" action="https://demo.digicrome.in/post_lead.php"
                style="width:100%; margin:0;">
                @csrf
                <input type="text" name="name" placeholder="Name" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="tel" name="mobile" placeholder="Mobile Number" required pattern="\d{10}"
                    title="Please enter a 10-digit mobile number"
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="email" name="email" placeholder="E-mail ID" required
                    style="width:100%; padding:10px; margin-bottom:10px; border:1px solid #ccc; border-radius:5px; background:rgba(255,255,255,0.8);">
                <input type="hidden" name="address" value="NA">
                <input type="hidden" name="title" value="NA">
                <input type="hidden" name="profession" value="NA">
                <input type="hidden" name="ib" value="">
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
</body>

</html>
