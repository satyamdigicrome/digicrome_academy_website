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
    @if(empty($hideHeader) || $hideHeader === false)
    @include('layouts.header')
@endif

        @yield('content')

    @if(empty($hideFooter) || $hideFooter === false)
    @include('layouts.footer')
    @endif

</body>
</html>