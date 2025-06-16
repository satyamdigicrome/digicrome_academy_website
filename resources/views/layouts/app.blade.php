<!DOCTYPE html>
<html lang="en">
    <head>
@include('layouts.head')
@stack('styles')
    </head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.header')


        @yield('content')


    @include('layouts.footer')

</body>
</html>