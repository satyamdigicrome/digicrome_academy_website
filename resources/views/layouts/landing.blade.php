<!DOCTYPE html>
<html lang="en">
    <head>
@include('layouts.landinghead')
@stack('styles')
@stack('scripts')
    </head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.landing_header')


        @yield('content')


    @include('layouts.landing_footer')

</body>
</html>