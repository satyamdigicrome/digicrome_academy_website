<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Digicrome') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.webp') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css') }}" media="all">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all">
    <!-- Coustom Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}" type="text/css" media="all">
    <!-- odometer CSS -->	
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" type="text/css" media="all">

    <link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}" type="text/css" media="all">	
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
