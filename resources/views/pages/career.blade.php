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
            Adjust the line height for better spacing on mobile
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
    </style>
    <div class="breadcumb-area d-flex"style="background-image: url({{ asset('assets/images/care.webp') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Career</h4>
                        </div>
                        <ul>
                            <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
                            <li>Career</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="breadcumb-shape">
                <img src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
            </div>
            <div class="breadcumb-shape2">
                <img src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
            </div>
        </div>
    </div>
    <section class="company-form contactpage-form" style="background-color: orange; padding:20px">
        <div class="container-fluid" style="color: white; padding-left:50px; padding-right:50px;">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <span style="font-family: arial; font-size: 40px;"><b>
                            Together we change <br>
                            countless lives
                        </b></span>
                    <hr>

                    <span style="text-align: justify; font-size: 18px; color: white; font-family:arial;">
                        Life at Digicrome comes with the distinct satisfaction that with us, you will be
                        <br> building careers for people across the globe.<br><br>
                        Our mission is dedicated to assisting our learners in reaching their desired
                        <br>objectives. Since our establishment in 2018, Digicrome has made a significant
                        <br>impact on the lives of over <b>50K registered</b> learners across<b> 60+ countries.</b>
                        <br> If this resonates with your aspirations, we warmly welcome you to
                        become<br> a part of our team. Together, we can strive for even greater success</span>
                    <br><br><br>
                    <a href="javascript:void(0);" onclick="openModal()" class="btn2 btn-warning"><i
                        class="bi bi-whatsapp"></i>Book Now</a>
                    <br><br><br>
                    <p style="color: white;"> <strong>Disclaimer:</strong>Digicrome in no way encourages any recruitment fee
                        from the candidates.

                        Beware of the fraud recruitment offers.</p>
                </div>
                <div id="teem" class="col-lg-6 col-md-12" style="padding-top: 70px;">
                    <img src="{{ asset('assets/images/dc/1d.webp')}}" alt="Image"
                        style="float: right; border-radius: 3%;">
                </div>
            </div>
        </div>

    </section>
    <section class="company-form contactpage-form" style="padding-top: 50px;">
        <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
            <h1 class="section__title" style="text-align: center; padding-bottom:40px;"><b>Unveiling <span
                        class="yellow-bg"> Digicrome<img
                            src="https://digicrome.com/public/www/assets/img/shape/yellow-bg-2.png"
                            alt="digicrome_png"></span> Distinct Culture</b></h1>
            <div class="row">
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/1e.webp')}}" alt="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 38%;">
                        <h4 style="padding-top:20px; ">Building Outstanding Careers</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            If you want to create an outstanding career instead of just getting a job, Digicrome is the
                            perfect place for you. We consistently help our team members embark on exciting career paths.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/1f.webp')}}" alt="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px; ">Empowering Women at Work</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            We are dedicated to creating a workplace that welcomes diversity and offers policies that
                            empower women to pursue their dreams and make a positive impact through their work.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 30px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/1g.webp')}}" alt="digicrome_Image"
                            style="width: 110px; height: 110px; border-radius: 5%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px; ">Enjoying Fun with Responsibility</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            At Digicrome, we believe in having fun and enjoyment in every moment and lightheartedness. Yet,
                            we also remain steadfast in our commitment to our global responsibilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="company-form contactpage-form" style=" padding-top:10px;">
        <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
            <!-- <h1 class="section__title"  style="text-align: center; padding-bottom:40px;"><b>Unveiling <span class="yellow-bg"> Digicrome<img src="https://digicrome.com/public/www/assets/img/shape/yellow-bg-2.png" alt=""></span> Distinct Culture</b></h1> -->

        </div>
        <div class="">
            <div class="gall-inn">
                <div class="col-sm-6 col-md-2">
                    <div class="gal-im animate animate__animated animate__slow" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2a.webp')}}" class="gal-siz-1" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2b.webp')}}" class="gal-siz-2" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2c.webp')}}" class="gal-siz-2" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2d.webp')}}" class="gal-siz-1" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2e.webp')}}" class="gal-siz-1" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2f.webp')}}" class="gal-siz-2" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2g.webp')}}" class="gal-siz-2" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2h.webp')}}" class="gal-siz-1" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2i.webp')}}" class="gal-siz-2" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('assets/images/dc/2j.webp')}}" class="gal-siz-1" alt="digicrome_images"
                            loading="lazy">
                        <div class="txt">
                            <span>Digicrome</span>
                            <h4>Fun @ Days</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
    <section class="company-form contactpage-form" style="padding-top:10px;">
		<div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
			<h2 class="text-center mb-2" style="font-size: 2rem;">
				Meet <span style="color: #f29c12;">Our Team</span>
			</h2>
		</div>
	
		<div class=" galary owl-carousel ">
			@foreach($gallery as $photo)
			<div class="item">
				<div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
					<img src="{{ asset('storage/' . $photo->image) }}" class="gal-siz-1" alt="digicrome_images" loading="lazy">
					<div class="txt">
						<span>Digicrome</span>
						<h4>{{ $photo->name }}</h4>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</section>
    <section class="company-form contactpage-form" style="padding-top: 10px;">
        <div class="container-fluid" style="color: white; padding-left: 50px; padding-right: 50px;">
            <h1 class="section__title" style="text-align: center;"><b>Why <span class="yellow-bg"> learn<img
                            src="https://digicrome.com/public/www/assets/img/shape/yellow-bg-2.png" alt=""></span>
                    through</b><b style="color:orange;"> Digicrome?</b></h1>
            <div class="row">
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 70px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/3c.webp')}}" alt="Image"
                            style="width: 110px; height: 110px; border-radius: 50%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px;  ">Develop Future-Ready Skills</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            We design courses to help learners build skills that they can apply immediately to their jobs.
                            You will derive insights from your program to prepare for the future of work and advance your
                            career.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 70px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/3a.webp')}}" alt="Image"
                            style="width: 110px; height: 110px; border-radius: 50%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px;  ">Learn from the Best</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            We work with top Data Scientist worldwide to develop programs across industries. Leveraging
                            insights from faculty who are world-leading practitioners in their fields, we develop courses
                            from the ground up to craft high-quality learning experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center" style="padding-top: 70px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/3b.webp')}}" alt="Image"
                            style="width: 110px; height: 110px; border-radius: 50%; background-color:orange; margin-left: 35%;">
                        <h4 style="padding-top:20px;  ">Gain a Global Perspective</h4>
                        <p
                            style="padding-left: 50px; padding-right:50px; font-size: 1rem; font-weight: 400;line-height: 1.8; ">
                            With our Asia top Trainer and global faculty, you will learn alongside others from around the
                            world who work in diverse industries, allowing for a cross-cultural exchange of ideas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company-form1 contactpage-form1">
        <h1 style="text-align: center; font-family: Open Sans,sans-serif; padding-bottom:20px;"><b>24X7<span
                    style="color: #f29c12;"> Learner’s</span> Support</b></h1>

        <div class="container-fluid"
            style="background-image: url(https://supplier-prod-temp-files.s3.ap-southeast-1.amazonaws.com/products-upload/cataloging/1697629324088/WhatsAppImage2023-10-18at17.06.59_a363dcc1.jpg); height: 100%; padding: 12px 115px 47px 382px; background-position: 50%; background-size: cover; background-repeat: no-repeat; display: flex;align-items: center;justify-content: flex-start; height: fit-content; ">
            <div class="row">
                <div class="col-lg-6 col-md-12 " style="padding-top: 50px;">
                    <div style="padding-top: 20%;">
                        <h3 id="have">Have any questions in mind?</h3>
                        <h2 id="talk">Talk to our team directly</h2>
                        <p style="font-weight: 400;font-size: 18px;color: #0072bc;margin: 0 0 30px;">Reach out to us and
                            your career guide will get in touch with you shortly</p>
                            <a href="javascript:void(0);" onclick="openModal()" class="btn2 btn-warning"><i
                                class="bi bi-whatsapp"></i>Book Now</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="padding-top: 40px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/3d.webp')}}" alt="digicrome_support"
                            style="width: 100%px; height:100%;">
                    </div>
                </div>
            </div>
        </div>
        <style>
            #have {
                font-family: Open Sans, sans-serif;
                color: #f99600;
                margin: 0 0 10px;
                font-size: 24px;
            }

            #talk {
                font-style: normal;
                font-weight: 600;
                font-size: 28px;
                color: #0072bc;
                line-height: 37px;
                margin: 0 0 20px;
                font-family: Open Sans, sans-serif;
            }

            .btn1 {
                text-align: center;
                font-size: 16px;
                font-weight: 400;
                fill: #fff;
                color: #0072bc;
                background-color: #fff;
                padding: 12px;
                border: 1px solid #0072bc;
                border-radius: 10px 10px 10px 10px;
                box-shadow: 0 0 5px 0 rgba(52, 56, 112, .31);
            }

            .btn2 {
                gap: 10px;
                align-items: center;
                text-align: center;
                margin-right: 20px;
                font-size: 16px;
                font-weight: 400;
                fill: #48c355;
                background-color: #48c355;
                border: 1px solid #48c355;
                border-radius: 10px 10px 10px 10px;
                box-shadow: 0 0 5px 0 #48c35550;
                padding: 12px;
            }

            @media (max-width: 767px) {
                .company-form1 {
                    display: none;
                }
            }

            .contactpage-form1 {
                padding: 0px 0;
            }
        </style>
    </section>
    <section class="company-form2 contactpage-form1">
        <h1 style="text-align: center; font-size:1.7rem; font-family: Open Sans,sans-serif; padding-bottom:20px;">
            <b>24X7<span style="color: #f29c12;"> Learner’s</span> Support</b></h1>

        <div class="container-fluid2"
            style="background-image: url(https://supplier-prod-temp-files.s3.ap-southeast-1.amazonaws.com/products-upload/cataloging/1697693715218/Untitleddesign26.png);">
            <div class="row">
                <div class="col-lg-6 col-md-12 " style="padding-top: 50px;">
                    <div style="padding-top: 20%;">
                        <h3 id="have2">Have any questions in mind?</h3>
                        <h2 id="talk2">Talk to our team directly</h2>
                        <p style="font-weight: 400;font-size: 18px;color: #0072bc;margin: 0 0 30px;">Reach out to us and
                            your career guide will get in touch with you shortly</p>
                        <a href="https://api.whatsapp.com/send/?phone=918595746168&text&type=phone_number&app_absent=0"
                            class="btn2 btn-warning"><i class="bi bi-whatsapp"></i> Enquire Now</a>
                        <button type="button" class="btn1 btn-warning"><i class="bi bi-telephone-fill"></i>
                            +91-8595746168</button>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="padding-top: 40px;">
                    <div>
                        <img src="{{ asset('assets/images/dc/3e.webp')}}" alt="digicrome_support"
                            style="width: 100%; height:100%; border-radius: 7px">
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media (min-width: 768px) {

                /* Styles for screens with a minimum width of 768px (desktop screens) */
                .company-form2 {
                    display: none;
                    /* Hide the entire section on desktop screens */
                }
            }

            @media (max-width: 767px) {
                .container-fluid2 {
                    border-radius: 8px;
                    padding: 12px;
                    /* Remove negative padding values */
                    display: block;
                    border-radius: 10px;
                    height: 716px;
                    /* Allow the height to adjust automatically based on content */
                    justify-content: space-evenly;
                    background-position: center;
                    /* Center the background image */
                    background-size: cover;
                    /* Scale the background image to cover the container */
                    background-repeat: no-repeat;
                    margin: 20px 8px;
                    /* Adjust the margin as needed */
                }
            }

            @media (max-width: 767px) {
                #have2 {
                    font-family: Open Sans, sans-serif;
                    color: #f99600;
                    margin: 0 0 10px;
                    font-size: 20px;
                }
            }

            @media (max-width: 767px) {
                #talk2 {
                    font-style: normal;
                    font-weight: 600;
                    font-size: 27px;
                    color: #0072bc;
                    line-height: 37px;
                    margin: 0 0 20px;
                    font-family: Open Sans, sans-serif;
                }
            }

            .btn1 {
                text-align: center;
                font-size: 16px;
                font-weight: 400;
                fill: #fff;
                color: #0072bc;
                background-color: #fff;
                padding: 12px;
                border: 1px solid #0072bc;
                border-radius: 10px 10px 10px 10px;
                box-shadow: 0 0 5px 0 rgba(52, 56, 112, .31);
            }

            .btn2 {
                gap: 10px;
                align-items: center;
                text-align: center;
                margin-right: 20px;
                font-size: 16px;
                font-weight: 400;
                fill: #48c355;
                background-color: #48c355;
                border: 1px solid #48c355;
                border-radius: 10px 10px 10px 10px;
                box-shadow: 0 0 5px 0 #48c35550;
                padding: 12px;
            }
        </style>
    </section>

@endsection