@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->heaing)
@section('meta_description', $blog->meta_description ?? 'Digicrome')
@section('meta_keywords', $blog->meta_keywords ?? 'Digicrome')
@push('scripts')
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                openModal();
            }, 3000)
        });
    </script>
@endpush
@section('content')
    @include('components.lead-form-popup')


    <!--==================================================-->
    <!-- Start educate Breadcumb Area -->
    <!--==================================================-->
    <div class="test two d-flex">
        <div class="container">
            <!-- <div class="row align-items-center">
        <div class="col-lg-12">
         <div class="breadcumb-content text-center">
          <div class="breadcumb-title">
           <h4>Blog Details</h4>
          </div>
          <ul>
           <li><a href="#">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
           <li>blog</li>
           <li><a href="#">blog<span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
           <li>{{ $blog->heading }}</li>
          </ul>
         </div>
        </div>
       </div> -->
            <div class="breadcumb-shape">
                <img width="213" height="142" loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot"
                    title="dot">
            </div>
            <div class="breadcumb-shape2">
                <img width="68" height="76" loading="lazy" src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball"
                    title="ball">
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End educate Breadcumb Area -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- start educate blog details Area -->
    <!--==================================================-->
    <div class="blog-details-area pb-0 mb-0">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row blogs-pr">
                        <div class="single-blog-dtls-box">
                            <div class="blog-thumb">
                                <img loading="lazy" src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb"
                                    title="thumb">
                                <div class="meta-blog">
                                    <a href="#">{{ $blog->meta_title ?? 'Blog' }}</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-author">
                                    <li class="autor-name" style="display: flex; align-items: center; gap: 10px;">
                                        <img loading="lazy" src="{{ asset('storage/' . $blog->author_image) }}"
                                            alt="author" title="author"
                                            style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                        <span>{{ $blog->author_name }}</span>
                                    </li>
                                    <li class="detail-calender" style="display: flex; align-items: center; gap: 5px;">
                                        <i class="fa-solid fa-calendar-week"></i>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}</span>
                                    </li>


                                    {{-- <li class="details-comment"> <i class="fa-solid fa-comments"></i>(1) Comments</li> --}}
                                </ul>

                                <h1 class="blog-title">
                                    {{ $blog->heading }}
                                </h1>
                                <div class="blog-desc2">
                                    {!! $blog->blog !!}
                                </div>

                                <style>
                                    .blog-desc2 ul,
                                    .blog-desc2 ol {
                                        list-style: revert !important;
                                        margin-left: 1.5rem !important;
                                        padding-left: 1.5rem !important;
                                    }

                                    .blog-desc2 li {
                                        display: list-item !important;
                                        list-style: inherit !important;
                                        margin-bottom: 6px;
                                    }

                                    /* Restore bold/strong appearance overridden by global CSS */
                                    .blog-desc2 strong,
                                    .blog-desc2 b {
                                        width: auto !important;
                                        height: auto !important;
                                        line-height: inherit !important;
                                        background: none !important;
                                        display: inline !important;
                                        text-align: unset !important;
                                        font-size: inherit !important;
                                        color: inherit !important;
                                        border-radius: 0 !important;
                                        margin-right: 0 !important;
                                        font-weight: 700 !important;
                                    }

                                    /* Restore anchor link appearance — no !important so inline style="color:..." wins */
                                    .blog-desc2 a {
                                        display: inline;
                                        color: #0d6efd;
                                        text-decoration: underline;
                                        font-weight: inherit;
                                    }

                                    .blog-title {
                                        font-size: 30px;
                                        font-weight: 700;
                                        margin-bottom: 20px;
                                        line-height: 1.2;
                                        font-family: 'Poppins', sans-serif;
                                    }
                                </style>


                                {{-- <div class="pagination_container">
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn">
										<a href="#"><img width="60" height="12" loading="lazy" src="assets/images/inner-img/pagination_icon1.webp" alt="pagination" title="pagination">Previous
											Posts</a>
									</div>
								</div>
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn style_right">
										<a href="#">Next Posts<img width="60" height="12" loading="lazy" src="assets/images/inner-img/pagination_icon2.webp"
												alt="pagination2" title="pagination2"></a>
									</div>
								</div>
							</div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================-->
        <!-- end educate blog Area -->
        <!--==================================================-->
    @endsection
