@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')

@section('content')
@include('components.lead-form-popup')



<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
    }

    .ul1 {
        --col-gap: 2rem;
        --row-gap: 2rem;
        --line-w: 0.25rem;
        display: grid;
        grid-template-columns: var(--line-w) 1fr;
        grid-auto-columns: max-content;
        column-gap: var(--col-gap);
        list-style: none;
        width: min(60rem, 90%);
        margin-inline: auto;
    }

    .ul1::before {
        content: "";
        grid-column: 1;
        grid-row: 1 / span 20;
        background: rgb(225, 225, 225);
        border-radius: calc(var(--line-w) / 2);
    }
    .ul1 li:not(:last-child) {
        margin-bottom: var(--row-gap);
    }
    .ul1 li {
        grid-column: 2;
        --inlineP: 1.5rem;
        margin-inline: var(--inlineP);
        grid-row: span 2;
        display: grid;
        grid-template-rows: min-content min-content min-content;
    }
    .ul1 li .date {
        --dateH: 3rem;
        height: var(--dateH);
        margin-inline: calc(var(--inlineP) * -1);

        text-align: center;
        background-color: var(--accent-color);

        color: white;
        font-size: 1.25rem;
        font-weight: 700;

        display: grid;
        place-content: center;
        position: relative;

        border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
    }
    .ul1 li .date::before {
        content: "";
        width: var(--inlineP);
        aspect-ratio: 1;
        background: var(--accent-color);
        background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
        position: absolute;
        top: 100%;

        clip-path: polygon(0 0, 100% 0, 0 100%);
        right: 0;
    }
    .ul1 li .date::after {
        content: "";
        position: absolute;
        width: 2rem;
        aspect-ratio: 1;
        background: var(--bgColor);
        border: 0.3rem solid var(--accent-color);
        border-radius: 50%;
        top: 50%;

        transform: translate(50%, -50%);
        right: calc(100% + var(--col-gap) + var(--line-w) / 2);
    }
    .ul1 li .title,
    .ul1 li .descr {
        background: var(--bgColor);
        position: relative;
        padding-inline: 1.5rem;
    }

    .ul1 li .title {
        overflow: hidden;
        padding-block-start: 1.5rem;
        padding-block-end: 1rem;
        font-weight: 500;
    }

    .ul1 li .descr {
        padding-block-end: 1.5rem;
        font-weight: 300;
    }
    .ul1 li .title::before,
    .ul1 li .descr::before {
        content: "";
        position: absolute;
        width: 90%;
        height: 0.5rem;
        background: rgba(0, 0, 0, 0.5);
        left: 50%;
        border-radius: 50%;
        filter: blur(4px);
        transform: translate(-50%, 50%);
    }

    .ul1 li .title::before {
        bottom: calc(100% + 0.125rem);
    }

    .ul1 li .descr::before {
        z-index: -1;
        bottom: 0.25rem;
    }

    @media (min-width: 40rem) {
        .ul1 {
            grid-template-columns: 1fr var(--line-w) 1fr;
        }

        .ul1::before {
            grid-column: 2;
        }

        .ul1 li:nth-child(odd) {
            grid-column: 1;
        }

        .ul1 li:nth-child(even) {
            grid-column: 3;
        }

        /* start second card */
        .ul1 li:nth-child(2) {
            grid-row: 2/4;
        }

        .ul1 li:nth-child(odd) .date::before {
            clip-path: polygon(0 0, 100% 0, 100% 100%);
            left: 0;
        }

        .ul1 li:nth-child(odd) .date::after {
            transform: translate(-50%, -50%);
            left: calc(100% + var(--col-gap) + var(--line-w) / 2);
        }

        .ul1 li:nth-child(odd) .date {
            border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
        }
    }


    .credits {
        margin-top: 1rem;
        text-align: right;
    }

    .credits a {
        color: var(--color);
    }
    .company-form {
        margin: 0;
        font-family: sans-serif;
        background: #fff;
    }

    * {
        box-sizing: border-box;

    }

    .map {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 1em;
        position: relative;
    }

    .map img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .title {
        text-align: center;
        color: #fff;
        margin: 2em 0;
        padding: 0 1em;
    }

    .title p {
        max-width: 500px;
        margin: 1em auto;
        line-height: 27px;
    }

    .pin {

        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        cursor: pointer;
    }

    .pin::before {
        content: '';
        background: #f29c12;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        border-radius: 50%;
        animation: pulse 1.3s ease-in-out infinite;
    }

    .pin span {
        display: inline-block;
        white-space: nowrap;
        position: absolute;
        left: 2.5em;
        top: -32%;
        transform: translateY(-50%);
        background: #fff;
        border-radius: 4%;
        padding: 0.3em 0.6em;
        font-size: 0.7em;
        color: rgba(242, 156, 18, 0.8);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

    }
    .south {
        top: 10%;
        left: 29%;
        background-image: url("{{ asset('assets/images/dc/5b.webp') }}");
    }
    .usa {
        top: 50%;
        left: 21%;
        background-image: url({{ asset('assets/images/dc/5a.webp')}});
    }

    .france {
        top: 45%;
        left: 48%;
        background-image: url({{ asset('assets/images/dc/5c.webp')}});

    }

    .sweden {
        top: 23%;
        left: 52%;
        background-image: url({{ asset('assets/images/dc/5d.webp')}});

    }

    .africa {
        top: 78%;
        left: 53%;
        background-image: url({{ asset('assets/images/dc/5e.webp')}});

    }

    .brazil {
        top: 71%;
        left: 32%;
        background-image: url({{ asset('assets/images/dc/5f.webp')}});

    }

    .chaina {
        top: 52%;
        left: 74%;
        background-image: url({{ asset('assets/images/dc/5g.webp')}});

    }

    .australia {
        top: 76%;
        left: 82%;
        background-image: url({{ asset('assets/images/dc/5h.webp')}});

    }

    @keyframes pulse {
        100% {
            opacity: 0;
            transform: translate(-50%, -59%) scale(2.5);

        }
    }

    @media screen and (max-width: 600px) {
        .map {
            font-size: 13px;
        }
    }

    @media screen and (max-width: 600px) {
        .pin {
            width: 20px;
            height: 20px;
        }

        .pin::before {
            animation: pulse 1.3s ease-in-out infinite;
        }

        .pin span {
            left: 1em;
            top: -40%;
            font-size: 0.3em;

        }
    }

    .btn1 {
        gap: 10px;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
        fill: #fff;
        color: #000000;
        background-color: #fff;
        padding: 12px;
        border: 1px solid #f29c12;
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
        fill: #f29c12;
        background-color: #f29c12;
        border: 1px solid #f29c12;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 0 0 2px 0 #f29c12;
        padding: 12px;
        color: #fff;
    }
</style>
<div class="who-img d-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>Who We Are</h4>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- <div class="breadcumb-shape">
            <img loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot" title="dot">
        </div> --}}
        <div class="breadcumb-shape2">
            <img loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball" title="ball">
        </div>
    </div>
</div>
<section class="company-form contactpage-form" style="background-color: white;">
    <div class="container-fluid" style="color: black; ">
        <div class="row">
            <div class="col-lg-6 col-md-12" style="padding-left: 10%;">
                <h5 style="color: #43505b; font-weight: 700; "><b>Digicrome Academy is the</b></h5>
                <span style="font-size: 43px; font-family: Inter, sans-serif; color: #f29c12;"><b>
                        <b> Global IT Upskilling<br> Edtech Platform</b>
                    </b></span>
                <hr>

                <span style="text-align: justify; font-size: 18px; color: #43505b; font-family:arial;">
                    By providing top-tier mentorship and tech-driven programs
                    in the native language of learners worldwide, we empower individuals with the
                    ability to excel in the IT Sector job market.
                </span><br><br>
                <a href="javascript:void(0);" onclick="openModal()" class="btn2 btn-warning"><i
                        class="bi bi-whatsapp"></i>Enroll Now</a>
               
            </div>
            <div id="teem" class="col-lg-6 col-md-12" style="padding-left: 10%;">
                <img loading="lazy" src="{{ asset('assets/images/dc/tools1.webp')}}" alt="digicrome_tools" title="digicrome_tools"
                    style=" border-radius: 3%; height:338px; width:345px;">
            </div>
        </div>
    </div>

</section>
<section id="contactSection" class="Contact1" style="background-color: white; padding-top:20px;">
    <h1><b>Major Milestones in Our Journey</b></h1>
    <ul class="ul1" style="padding-top: 40px;">
        <li style="--accent-color:#28a745">
            <div class="date">2024</div>
            <div class="title1"></div><br><br>
            <div class="descr">Awarded 2024 'Best Online Academy of the Year' for Data Science & AI in Delhi NCR,
                recognizing excellence in online education and commitment to student success.</div>
        </li>
        <li style="--accent-color:#4285f4">
            <div class="date">2023</div>
            <div class="title1"></div><br><br>
            <div class="descr">Excellency Award Winner for best Company of the year 2023.Touched the milestone of
                running 100+ live batches (online + classroom) per year.</div>
        </li>
        <li style="--accent-color:#ea4335">
            <div class="date">2022</div>
            <div class="title1"></div><br><br>
            <div class="descr">Digicrome expanded its global reach, introducing a groundbreaking course, "Data Science
                with AI," in over 60 countries. The exceptional quality of our education earned us the prestigious Gold
                Winner Academy Trophy in recognition of our achievements.</div>
        </li>
        <li style="--accent-color:#f49e1e">
            <div class="date">2021</div>
            <div class="title1"></div><br><br>
            <div class="descr">Touched the 5000+ learner base and introduced 5 new career programs, all while
                establishing a global presence for the institute in the same year.</div>
        </li>
        <li style="--accent-color:#28a745">
            <div class="date">2020</div>
            <div class="title1"></div><br><br>
            <div class="descr">Amid the COVID-19 pandemic, we launched online courses in the United States in 2020
                Digicrome expanded its global footprint by launching a new branch in the United States while maintaining
                its commitment to educational services in India.</div>
        </li>
        <li style="--accent-color:#4285f4">
            <div class="date">2017</div>
            <div class="title1"></div><br><br>
            <div class="descr">The concept of DigiCrome took shape, and the establishment of DigiCrome's first Branch
                was initiated in September 2017, in India.</div>
        </li>
    </ul>
</section>
<section class="company-form contactpage-form" style="padding-top: 50px;" id="map1">
    <div class="title">
        <div class="display-7 fw-bold text-center text-success">
            Stay Ahead with the Support of our Learner Community
        </div>

        <h5 style="border: 2px solid #f29c12; border-radius: 30px; display: inline-block; padding:5px;"><b> &nbsp; You
                Also Include Yourself &nbsp;</b></h5>
    </div>
    <div class="map">
        <img loading="lazy" src="{{ asset('assets/images/dc/map.webp')}}" alt="map" title="map" />
        <div class="pin south">
            <span>From 2 LPA to 2 Lacs per<br>
                month salary, Digicrome<br>
                transformed my career
            </span>
        </div>
        <div class="pin usa">
            <span>Being together like a family <br>
                from education to job hunting. <br>
                Thanks to Digicrome
            </span>
        </div>
        <div class="pin france">
            <span>Today, I've climbed the corporate ladder <br>
                from a lower position to a higher one<br>
                Digicrome made it possible
            </span>
        </div>
        <div class="pin sweden">
            <span>After completing the course,<br>
                achieved
                my dream salary of<br>16 LPA in
                just 9 months

            </span>
        </div>
        <div class="pin africa">
            <span>I got 250% salary hike in just<br>
                11 Months. All thanks to<br>
                Digicrome Team
            </span>
        </div>
        <div class="pin brazil">
            <span>Unbelievable! Today, I'm at the <br>
                position I once dreamt of, and that<br>
                too with a great package of 33 LPA
            </span>
        </div>
        <div class="pin chaina">
            <span>Data scientist even with a <br>
                non-technical background,<br>
                digicrome made it possible
            </span>
        </div>
        <div class="pin australia">
            <span>I have realized my career dreams<br>
                today by achieving high-level<br>
                positions in foreign countries.
            </span>
        </div>
    </div>
</section>
<section class="company-form contactpage-form" style="background-color: #232d60;">
    <div class="container-fluid" style="color: #fff; ">
        <div class="title">
            <h3 style="color: #fff;">Digicrome's Impact on Graduate Salaries</h3>

        </div>
        <div class="row">

            <div class="col-lg-6 col-md-12" style="padding-left: 10%;">
                <span style="font-family: arial; font-size: 20px;"><b>
                        Digicrome vs. The Industry
                    </b></span>
                <hr>

                <span style="text-align: justify; font-size: 18px; color: #fff; font-family:arial;">
                    Our graduates secure positions with salaries that, on average, exceed the industry standard by an
                    impressive 60%.
                    Digicrome alumni stand out as some of the country's most well-placed professionals, with
                    salaries reaching as high as ₹33 LPA.<br><br>
                </span>

            </div>
            <div id="teem" class="col-lg-6 col-md-12" style="padding-left: 10%; padding-top:20px;">
                <img loading="lazy" src="{{ asset('assets/images/dc/img121.webp')}}" alt="digicrome_Image" title="digicrome_Image"
                    style="box-shadow: 5px 5px 10px rgba(21, 0, 0, 83.2); border-radius: 3%; height:318px; width:325px;">
            </div>
        </div>
    </div>

</section>
<section class="company-form contactpage-form" style="background-color: white;">
    <div class="container-fluid" style="color: black; ">
        <div class="title">
            <h3>Targeted Career Opportunities by Industry</h3>

        </div>
        <div class="row">
            <div id="teem" class="col-lg-6 col-md-12" style="padding-left: 10%; padding-bottom:20px;">
                <img loading="lazy" src="{{ asset('assets/images/dc/report.webp')}}" alt="digicrome_report" title="digicrome_report"
                    style="border-radius: 3%; box-shadow: 5px 5px 10px rgba(21, 0, 0, 7.2); height: 338px; width: 345px;">
            </div>

            <div class="col-lg-6 col-md-12">
                <span style="font-family: arial; font-size: 20px;color:#f29c12"><b>
                        Sector Wise Distribution
                    </b></span>
                <hr>

                <span style="text-align: justify; font-size: 18px; color: black; font-family:arial;">
                    Digicrome works to find the best job and company fit for each student, giving them a great start
                    to their career, Through personalized guidance and industry connections, Digicrome helps students
                    secure the ideal job, setting the stage for a successful career journey.<br><br>

                </span>

            </div>

        </div>
    </div>

</section>
<style>
    .headerimg {
        min-height: 2.8rem;
        min-width: 5.8rem;
    }

    @media only screen and (max-width: 600px) {
        .headerimg {
            max-width: 45%;
        }
    }

    .wed-hom-footer {

        padding: 80px 0px 65px 0px;
        background: #000;
    }

    .wed-hom-footer h4 {
        font-size: 14px;
        color: #d6d6d6;
        padding-bottom: 25px;
        text-transform: uppercase;
    }

    .wed-hom-footer p {
        font-size: 13px;
        color: #838384;
    }

    .wed-hom-footer p a {
        font-size: 13px;
        color: #838384;
    }

    .wed-foot-link {
        border-top: 1px groove #fff;
        border-bottom: 1px groove #fff;
        padding: 35px 0px;
             */
    }

    .wed-foot-link ul {}

    .wed-foot-link ul li {
        width: 50%;
        float: left;
    }

    .wed-foot-link ul li a {
        color: #838384;
        font-size: 13px;
    }

    .wed-foot-link div {
        border-right: 1px groove #fff;
    }

    .wed-foot-link div:last-child {
        border-right: 0px solid #dadada;
        ;
    }

    .wed-video2 {
        padding: 50px 0px;
        background: #f1f1f1;
    }

    .wed-foot-link-1 {
        padding-top: 25px;
    }

    .wed-foot-link-1 ul {
        position: relative;
        overflow: hidden;
    }

    .wed-foot-link-1 ul li {
        float: left;
        padding-right: 8px;
    }

    .wed-foot-link-1 ul li a {}

    .wed-foot-link-1 ul li a i {
        width: 32px;
        height: 32px;
        text-align: center;
        border: 1px solid #6f6f6f;
        border-radius: 20px;
        padding: 8px;
        color: #c5c5c5;
    }

    .wed-foot-link-1 ul li a img {
        width: 140px;
    }

    .foot-align div {
        display: inline-block;
        font-size: 18px;
        color: #fff;
        vertical-align: middle;
        margin-bottom: 0px;
        padding: 0px 35px;
    }

    .foot-align {
        margin: 0 auto;
        display: table;
    }

    .footer .footer-content-box {
        padding: 0px;
    }

    .footer {
        padding: 0px;
    }
</style>


@endsection