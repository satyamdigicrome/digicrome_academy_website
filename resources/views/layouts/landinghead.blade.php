    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords')">
    <meta property="og:type" content="Online Training/Development" />
    <meta property="og:site_name" content="Digicrome" />
    <meta name="og:email" content="digicrome.academy@gmail.com" />
    <meta name="og:phone_number" content="01205222560" />
    <meta name="og:latitude" content="28.584688° N" />
    <meta name="og:longitude" content="77.315930° E" />
    <meta name="og:street-address" content="C-108 Second Floor, Sector 2, Noida, Uttar Pradesh 201301" />
    <meta name="og:locality" content="Noida Sector 02" />
    <meta name="og:region" content="Noida" />
    <meta name="og:postal-code" content="201301" />
    <meta name="og:country-name" content="India" />
    <meta name="og:locale" content="en-IN" />
    <meta property="og:image" content="https://www.digicrome.com/assets/images/cover-image.webp" />
    <!-- Fonts -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="preconnect" as="font" type="font/woff2" href="https://fonts.bunny.net" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.webp') }}">
    <!-- bootstrap CSS -->
    <link  rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css"  media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- venobox CSS -->
    {{-- <link rel="stylesheet" href="venobox/venobox.css" type="text/css') }}" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload"> --}}
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- Coustom Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">
    <!-- odometer CSS -->	
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">

    <link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}" type="text/css" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" async></script>
<script type="application/ld+json" >
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Digicrome",
      "url": "https://www.digicrome.com",
      "logo": "https://www.digicrome.com/assets/images/logo.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "01205222560",
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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NLXJ6MV');</script>
  <!-- End Google Tag Manager -->

<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6889c1dc4ae83b191c0cb755/1j1d1qhhd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
