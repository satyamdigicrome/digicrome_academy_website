@extends('layouts.app')

@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')

@section('content')

<div class="breadcumb-area d-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h4>Privacy Policy</h4>
                    </div>
                    <ul>
                        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape">
            <img loading="lazy"src="assets/images/inner-img/breadcumb-dot.webp" alt="dot">
        </div>
        <div class="breadcumb-shape2">
            <img loading="lazy"src="assets/images/inner-img/breadcumb-ball.webp" alt="ball">
        </div>
    </div>
</div>
<section>
    <div class="container">
        @foreach($contents as $content)
            <div class="mb-4">
                {!! $content->content !!}
            </div>
        @endforeach
    </div>
</section>

@endsection