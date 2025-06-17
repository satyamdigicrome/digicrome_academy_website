@extends('layouts.app')


@section('title', $blog->meta_title ?? $blog->heading)
@section('meta_description', $blog->meta_description ?? 'Digicrome')
@section('meta_keywords', $blog->meta_keywords ?? 'Digicrome')

@section('content')

	<!--==================================================-->
	<!-- Start educate Breadcumb Area -->
	<!--==================================================-->
	<div class="breadcumb-area two d-flex">
		<div class="container">
			<div class="row align-items-center">
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
			</div>
			<div class="breadcumb-shape">
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
            </div>
            <div class="breadcumb-shape2">
                <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
            </div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End educate Breadcumb Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- start educate blog details Area -->
	<!--==================================================-->
	<div class="blog-details-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row blogs-pr">
						<div class="single-blog-dtls-box">
							<div class="blog-thumb">
								<img loading="lazy"src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb">
								<div class="meta-blog">
									<a href="#">{{ $blog->meta_title ?? 'Blog' }}</a>
								</div>
								
							</div>
							<div class="blog-content">
								<ul class="blog-author">
									<li class="autor-name" style="display: flex; align-items: center; gap: 10px;">
										<img loading="lazy"src="{{ asset('storage/' . $blog->author_image) }}" alt="author" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
										<span>{{ $blog->author_name }}</span>
									</li>
									<li class="detail-calender" style="display: flex; align-items: center; gap: 5px;">
										<i class="fa-solid fa-calendar-week"></i>
										<span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}</span>
									</li>
									
									
									{{-- <li class="details-comment"> <i class="fa-solid fa-comments"></i>(1) Comments</li> --}}
								</ul>

								<h2 class="blog-title">
									{{ $blog->heading }}
								</h2>
								

										<p class="blog-desc2">
											{!! $blog->blog !!}
										</p>
							{{-- <div class="pagination_container">
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn">
										<a href="#"><img loading="lazy"src="assets/images/inner-img/pagination_icon1.webp" alt="">Previous
											Posts</a>
									</div>
								</div>
								<!-- pagination item -->
								<div class="pagination_item">
									<div class="pagination_btn style_right">
										<a href="#">Next Posts<img loading="lazy"src="assets/images/inner-img/pagination_icon2.webp"
												alt=""></a>
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