@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->heading)
@section('meta_description', $blog->meta_description ?? 'Digicrome')
@section('meta_keywords', $blog->meta_keywords ?? 'Digicrome')

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
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot" title="dot">
            </div>
            <div class="breadcumb-shape2">
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball" title="ball">
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
								<img loading="lazy"src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb" title="thumb">
								<div class="meta-blog">
									<a href="#">{{ $blog->meta_title ?? 'Blog' }}</a>
								</div>
							</div>
							<div class="blog-content">
								<ul class="blog-author">
									<li class="autor-name" style="display: flex; align-items: center; gap: 10px;">
										<img loading="lazy"src="{{ asset('storage/' . $blog->author_image) }}" alt="author" title="author" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
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
										<iframe id="blogFrame" srcdoc='{!! $blog->blog !!}' style="width:100%; height:100%; border:none; overflow:hidden;" sandbox="allow-same-origin allow-scripts"></iframe>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const iframe = document.getElementById("blogFrame");

        iframe.onload = function () {
            try {
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                const height = iframeDoc.body.scrollHeight;
                iframe.style.height = height + 'px';
                // Optional: also hide scrollbars inside iframe content
                iframeDoc.body.style.overflow = 'hidden';
            } catch (e) {
                console.warn("Iframe content could not be accessed for resizing.", e);
            }
        };
    });
</script>

							{{-- <div class="pagination_container">
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn">
										<a href="#"><img loading="lazy"src="assets/images/inner-img/pagination_icon1.webp" alt="pagination" title="pagination">Previous
											Posts</a>
									</div>
								</div>
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn style_right">
										<a href="#">Next Posts<img loading="lazy"src="assets/images/inner-img/pagination_icon2.webp"
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