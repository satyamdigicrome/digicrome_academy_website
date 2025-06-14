<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords')">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Digicrome",
      "url": "https://www.digicrome.com",
      "logo": "https://www.digicrome.com/assets/images/logo.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "01203133869",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": "IN",
        "availableLanguage": ["en","Hindi"]
      },
      "sameAs": [
        "https://www.facebook.com/digcrome.academy/",
        "https://www.instagram.com/digicromeofficial",
        "https://x.com/hashtag/Digicrome",
        "https://www.youtube.com/@digicromeofficial",
        "https://in.linkedin.com/company/digicromeofficial",
        "https://es.pinterest.com/digicromeofficial/"
      ]
    }
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/680a1c944a25191909a03efe/1ipjnv9u4';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
