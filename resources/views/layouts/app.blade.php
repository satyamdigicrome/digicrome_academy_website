<!DOCTYPE html>
<html lang="en">
    <head>
@include('layouts.head')
@stack('styles')
@stack('scripts')
    </head>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    @include('layouts.header')


        @yield('content')


    @include('layouts.footer')

</body>
</html>