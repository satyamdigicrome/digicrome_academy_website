<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
@stack('styles')

<body>

    @include('layouts.header')


        @yield('content')


    @include('layouts.footer')

</body>
</html>