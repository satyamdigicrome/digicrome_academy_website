<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    @stack('styles')
    @stack('scripts')
    <style>
        #republic-butterfly {
            position: fixed;
            bottom: -80px;
            left: -80px;
            z-index: 9999;
            pointer-events: none;
        }

        #republic-butterfly img {
            height: 70px;
            animation: flyDiagonal 18s linear infinite;
        }

        @keyframes flyDiagonal {
            0% {
                transform: translate(0, 0);
                opacity: 1;
            }

            100% {
                transform: translate(110vw, -110vh);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJ6MV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    @if (empty($hideHeader) || $hideHeader === false)
        @include('layouts.header')
    @endif

    @yield('content')

    @if (empty($hideFooter) || $hideFooter === false)
        @include('layouts.footer')
    @endif
    {{-- <div id="republic-butterfly">
        <img src="{{ asset('assets/images/happy-republic-day-butterfly.gif') }}" alt="Republic Day Butterfly">
    </div> --}}
</body>

</html>
