    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords')">
    <meta property="og:type" content="Online Training/Development" />
    <meta property="og:site_name" content="Digicrome" />
    <meta name="og:email" content="digicrome.academy@gmail.com" />
    <meta name="og:phone_number" content="01204538125" />
    <meta name="og:latitude" content="28.584688° N" />
    <meta name="og:longitude" content="77.315930° E" />
    <meta name="og:street-address" content="B-49 First Floor, Sector 59, Noida, Uttar Pradesh 201301" />
    <meta name="og:locality" content="Noida Sector 59" />
    <meta name="og:region" content="Noida" />
    <meta name="og:postal-code" content="201301" />
    <meta name="og:country-name" content="India" />
    <meta name="og:locale" content="en-IN" />
    <meta property="og:image" content="https://www.digicrome.com/assets/images/cover-image.webp" />
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Preconnect to external origins for faster font/CDN loading --}}
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://player.vimeo.com">
    <link rel="dns-prefetch" href="https://f.vimeocdn.com">

    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.webp') }}">

    {{-- Preload critical fonts to eliminate layout shifts --}}
    <link rel="preload" href="{{ asset('assets/fonts/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/css/fonts/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">

    {{-- Critical CSS: load synchronously (bootstrap + theme) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preload" href="{{ asset('assets/css/google-fonts.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/google-fonts.css') }}"></noscript>
    <link rel="preload" href="{{ asset('assets/css/fonts-bunny.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/fonts-bunny.css') }}"></noscript>
    <link rel="preload" href="{{ asset('assets/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/bootstrap-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/flaticon.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/owl.carousel.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/animate.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/animated-text.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/meanmenu.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/owl.transitions.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/responsive.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/coustom-animation.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/odometer-theme-default.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}"></noscript>

    <link rel="preload" href="{{ asset('assets/css/scroll-up.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}"></noscript>
    <script type="application/ld+json" >
      {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Digicrome",
        "url": "https://www.digicrome.com",
        "logo": "https://www.digicrome.com/assets/images/logo.webp",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "01204538125",
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
      <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "Digicrome Academy",
            "url": "https://www.digicrome.com",
            "logo": "https://www.digicrome.com/logo.png",
            "image": "https://www.digicrome.com/logo.png",
            "telephone": "+91-7011101972",
            "priceRange": "₹₹",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "B-49, B Block, Sector 59",
            "addressLocality": "Noida",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201301",
            "addressCountry": "IN"
            },
            "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.6067",
            "longitude": "77.3724"
            },
            "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens": "10:00",
            "closes": "19:00"
            }],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.7",
            "bestRating": "5",
            "ratingCount": "200"
            },
            "sameAs": [
            "https://www.facebook.com/",
            "https://www.instagram.com/",
            "https://www.linkedin.com/"
            ]
            }
        </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NLXJ6MV');
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/68f9d2f2d84f3b1958008620/1j87u01d2';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
