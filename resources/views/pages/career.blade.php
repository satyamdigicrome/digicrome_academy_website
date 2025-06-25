@extends('layouts.app')

@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')

@section('content')

@include('components.lead-form-popup')



    <style>
        .wedd-gall {
            margin-bottom: 90px;
            float: left;
            width: 100%;
        }

        .wedd-gall-pg {
            margin: 100px 0 80px 0;
        }

        .wedd-gall-pg-v1 {
            width: 100%;
            float: left;
            margin: 100px 0 90px 0;
        }

        .wedd-gall-pg-v1 .img-wrapper img {
            height: 350px;
        }

        .gal-im {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .gall-inn {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .gal-im:hover {}

        .gal-im:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #633214cc, transparent);
            transition: all 0.5s ease;
            opacity: 0;
            z-index: 1;
        }

        .gal-im img {
            width: 100%;
            transition: all 0.5s ease;
            object-fit: cover;
        }

        .gal-im img.gal-siz-1 {
            height: 300px;
        }

        .gal-im img.gal-siz-2 {
            height: 45vh;
        }

        .gal-im:hover img {
            filter: grayscale(0);
            transform: scale(1.2);
        }

        .gal-im .txt {
            padding: 30px 30px 35px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            /* transition: all 0.5s ease; */
            z-index: 1;
        }

        .gal-im .txt:before {
            content: '';
            position: absolute;
            bottom: 22px;
            left: 0;
            right: 0;
            width: 0%;
            height: 1px;
            background: #ffffff6b;
            transition: all 0.5s ease;
        }

        .gal-im .txt span {
            text-transform: uppercase;
            font-family: var(--tit-font);
            font-size: 12px;
            letter-spacing: 2px;
            transition: all 0.5s ease;
            position: relative;
            left: -30px;
            opacity: 0;
        }

        .gal-im .txt h4 {
            font-family: var(--tit-font);
            font-size: 24px;
            transition: all 0.5s ease;
            position: relative;
            left: -30px;
            opacity: 0;
        }

        .gal-im:hover span,
        .gal-im:hover h4 {
            color: #fff;
        }

        .gal-im:hover .txt:before {
            width: 100%;
            transition-delay: 0.4s;
        }

        .gal-im:hover:before {
            opacity: 1;
        }

        .gal-im:hover .txt span {
            left: 0px;
            opacity: 1;
            transition-delay: 0.2s;
        }

        .gal-im:hover .txt h4 {
            left: 0px;
            opacity: 1;
            transition-delay: 0.3s;
        }

        .gal-im:hover {}

        /* gallry end */
        .career {
            color: black;

        }

        .content {
            background-color: orange;
            height: 500px;
        }

        .button-container {
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px;
            padding-top: 150px;
            font-family: var(--pix-heading-font), sans-serif !important;
        }

        /* Styles for the button */
        .custom-button {
            display: inline-block;
            background-color: #007BFF;
            /* Set the button background color */
            color: #FFFFFF;
            /* Set the button text color */
            border: none;
            padding: 10px 20px;
            /* Adjust the padding as needed */
            border-radius: 5px;
            /* Add rounded corners if desired */
            font-size: 16px;
            /* Set the font size */
            font-weight: bold;
            /* Set font weight to bold for a professional look */
            font-family: Arial, sans-serif;
            /* Use a professional font (change as needed) */
            text-align: center;
            line-height: 1.4;
            /* Adjust the line height as needed to control line spacing */
        }

        .big-text {
            color: white;
            font-size: 54px;
            /* Adjust the font size as needed */
            font-weight: bold;
            /* Add bold font weight for a professional look */
            margin-bottom: 10px;
            /* Add space between lines */
        }

        .ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        }

        .section__title span.yellow-bg-big img {
            bottom: 15px;
            width: 120%;
            -webkit-animation: section-animation-2 3s infinite;
            animation: section-animation-2 3s infinite;
        }

        .section__title span.yellow-bg-sm img {
            bottom: 10px;
            width: 120%;
            -webkit-animation: section-animation-2 3s infinite;
            animation: section-animation-2 3s infinite;
        }

        #teem img {
            filter: grayscale(100%);
            /* Set the image to black and white by default */
            transition: filter 0.3s;
            /* Add a smooth transition effect */
        }

        #teem img:hover {
            filter: grayscale(0%);
            /* Remove the grayscale filter on hover */
        }

        .big-text {
            color: white;
            line-height: 1.5;
        }

        @media (max-width: 767px) {

            /* Media query for screens with a maximum width of 767px (typical mobile screens) */
            .big-text {
                font-size: 26px;
                /* Adjust the font size for mobile screens */
                line-height: 1.5;
                /* Adjust the line height for better spacing on mobile */
            }
        }
        .custom-hero-banner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.custom-hero-banner .hero-img {
    width: 100%;
    height: auto;
    display: block;
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
}
#sticky-header {
    margin-bottom: 0px;
}
@media (max-width: 768px) {
    .custom-hero-banner .hero-img {
        margin-top: 63px;
    }
}


    </style>
   <div class="custom-hero-banner">
    <img src="{{ asset('assets/images/care.webp') }}" alt="Career Banner" class="hero-img" loading="lazy">

    <div class="container banner-text">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="breadcumb-content text-center">
                    <div class="breadcumb-title">
                        <h4>Career</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <section class="company-form contactpage-form" style="background-color: orange; padding:20px">
        <div class="container-fluid" style="color: white; padding-left:50px; padding-right:50px;">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    {{-- <span style="font-family: arial; font-size: 40px;"><b>
                            Together we change <br>
                            countless lives
                        </b></span>
                    <hr> --}}<br><br><br>

                    <span style="text-align: justify; font-size: 28px; color: white; font-family:arial; mt-6">
                        At Digicrome, we don’t just build careers — we shape futures. We’re a team of passionate educators, tech enthusiasts, creators, and innovators, all working together to transform the way professionals upskill and grow.<br><br>
If you're driven by purpose, inspired by change, and looking for more than just a job — welcome Digicrome.

                    </span>
                </div>
                <div id="teem" class="col-lg-6 col-md-12" style="padding-top: 70px;">
                    <img loading="lazy"src="{{ asset('assets/images/dc/1d.webp')}}" alt="Image" title="Image" 
                        style="float: right; border-radius: 3%;">
                </div>
            </div>
        </div>

    </section>
    <section class="company-form contactpage-form" style="padding-top: 50px;">
        <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
            <h1 class="section__title" style="text-align: center; font-size: 36px; padding-bottom:40px;"><b>Why Work with Us ?</h1>
            <div class="row">
                <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img loading="lazy"src="{{ asset('assets/images/dc/1e.webp')}}" alt="digicrome_Image" title="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 38%;">
                        <h4 style="padding-top:20px; ">Do Work That Matters</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            Your role directly contributes to empowering thousands of learners and professionals across the country.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img loading="lazy"src="{{ asset('assets/images/dc/1f.webp')}}" alt="digicrome_Image" title="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px; ">Growth & Learning Culture</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            We believe in continuous growth — not just for our learners, but for our team too. You’ll have access to resources, mentorship, and opportunities to keep learning and evolving.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img loading="lazy"src="{{ asset('assets/images/dc/1g.webp')}}" alt="digicrome_Image" title="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px; ">Together, We Grow</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            Work with a team that values empathy, creativity, and collaboration. We celebrate wins together and support each other in every challenge.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img loading="lazy"src="{{ asset('assets/images/dc/1e.webp')}}" alt="digicrome_Image" title="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 38%;">
                        <h4 style="padding-top:20px; ">Flexible & Inclusive</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            Whether you're working from our office or remotely, we foster a healthy work-life balance, respect individuality, and encourage diverse perspectives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection