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
    <link rel="preload" href="{{ asset('assets/fonts/Flaticon.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/css/fonts/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="font.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    {{-- Critical CSS: load synchronously (bootstrap + theme) --}}
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/theme-default.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </noscript>
    
    <link rel="preload" href="{{ asset('assets/css/google-fonts.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/google-fonts.css') }}">
    </noscript>
    <link rel="preload" href="{{ asset('assets/css/fonts-bunny.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/fonts-bunny.css') }}">
    </noscript>
    <link rel="preload" href="{{ asset('assets/css/all.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/bootstrap-icons.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/flaticon.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/owl.carousel.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/animate.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/animated-text.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/meanmenu.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/owl.transitions.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/responsive.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/coustom-animation.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/odometer-theme-default.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}">
    </noscript>

    <link rel="preload" href="{{ asset('assets/css/scroll-up.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}">
    </noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" media="print"
        onload="this.media='all'">
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
            "@type": "LocalBusiness",
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
        window.addEventListener('load', function() {
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
        });
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        .footer-logo11 {
            width: 59%;
        }

        @media (max-width: 768px) {
            .footer-logo11 {
                width: 35%;
            }
        }

        /* Hide mobile menu initially until page is fully loaded */
        .mobile-menu-area {
            visibility: hidden;
            opacity: 0;
            min-height:60px;
        }

        /* Once page is fully loaded, show the mobile menu */
        body.loaded .mobile-menu-area {
            visibility: visible;
            opacity: 1;
            transition: visibility 0s, opacity 0.5s ease-in;
        }

        @media (max-width: 767px) {
            .desktop-only {
                display: none !important;
                /* Hide desktop header */
            }

            .mobile-only {
                display: block !important;
                /* Force show mobile header */
            }
        }

        /* Ensure the desktop version is visible only on larger screens */
        @media (min-width: 768px) {
            .desktop-only {
                display: block !important;
                /* Force show desktop header */
            }

            .mobile-only {
                display: none !important;
                /* Hide mobile header */
            }
        }

        .bottom-fixed-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
            z-index: 9999;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        .bottom-fixed-bar .btn {
            margin: 0 8px;
            font-size: 13px;
            padding: 6px 12px;
            display: inline-flex;
            align-items: center;
            font-weight: 500;
            border-radius: 20px;
        }

        .btn-whatsapp {
            background-color: #25D366;
            color: white;
        }

        .btn-whatsapp:hover {
            background-color: #1ebe5d;
            color: white;
        }

        .btn-callback {
            background-color: #343a40;
            color: white;
        }

        .btn-callback:hover {
            background-color: #23272b;
            color: white;
        }

        .bottom-fixed-bar i {
            margin-right: 6px;
        }

        .sub_menu {
            position: absolute;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #ddd;
            z-index: 999;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            min-width: 650px;
            max-width: 1000px;
        }

        .sub_menu li a:hover {
            background-color: #f8f9fa;
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-2px);
            transition: all 0.2s ease-in-out;
        }

        .course-card:hover {
            background-color: #f9f9ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
        }

        .course-card h6,
        .course-card p,
        .course-card a {
            margin-bottom: 0;
        }
        .bottom-fixed-bar {
            position: fixed;
            right: 20px;
            bottom: 0px;
            z-index: 1000;
            background: white;
            padding: 10px 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .bottom-fixed-bar a {
            margin: 0 5px;
        }

        .mobile-only {
            display: none;
        }

        .desktop-only {
            display: block;
        }

        @media (max-width: 767px) {
            .desktop-only {
                display: none;
            }

            .mobile-only {
                display: block;
            }

            .mobile-contact-icons {
                position: fixed;
                left: 15px;
                bottom: 20px;
                display: flex;
                flex-direction: column;
                gap: 15px;
                z-index: 1000;
            }

            .contact-icon {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                font-size: 20px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            }

            .contact-icon.whatsapp {
                background-color: #25D366;
            }

            .contact-icon.call {
                background-color: #1a1447;
            }
        }
        /* 🔥 ONLY Courses menu */
/* 🔥 CENTER THE MEGA MENU */
.sub_menu.mega-menu {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    margin: 0 auto;
    min-width: 690px;
    width: 100%;
    max-width: 1200px;
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    z-index: 999;
}
/* Wrapper */
.mega-wrapper {
    display: flex;
    gap: 25px;
}

/* LEFT SIDE */
.mega-left {
    width: 30%;
    border-right: 1px solid #eee;
    padding-right: 15px;
}

.mega-left h6 {
    font-weight: 600;
    margin-bottom: 10px;
}

.mega-left ul {
    list-style: none;
    padding: 0;
}

.mega-left li {
    margin-bottom: 8px;
}

.mega-left a {
    display: flex;
    justify-content: space-between;
    text-decoration: none;
    color: #222;
    font-size: 14px;
}
.mega-left a:hover {
    color: #ff7a00;
}

/* RIGHT SIDE */
.mega-right {
    width: 70%;
}

.mega-right h6 {
    font-weight: 600;
    margin-bottom: 10px;
}

/* COURSE LIST */
.course-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 🔥 2 cards */
    gap: 15px;
    max-height: 420px;
    overflow-y: auto;
}

/* COURSE ITEM */
.course-item {
    display: block;
    background: #fff;
    border-radius: 10px;
    border: 1px solid #eee;
    padding: 12px;
    text-decoration: none;
    transition: 0.3s;
}

.course-item:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
/* IMAGE */
.course-item img {
    width: 100%;
    height: 140px;   /* 🔥 bigger image */
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}
/* TEXT */
.course-info h6 {
    font-size: 15px;
    font-weight: 600;
    color: #222;
    margin-bottom: 5px;
    line-height: 22px;
}

.course-info p {
    font-size: 13px;
    color: #777;
    margin: 0;
}
    </style>
    <!--End of Tawk.to Script-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
