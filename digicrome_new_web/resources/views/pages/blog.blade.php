@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


	<!--==================================================-->
	<!-- Start educate Breadcumb Area -->
	<!--==================================================-->
	<div class="breadcumb-area d-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<div class="breadcumb-title">
							<h4>Latest Blog</h4>
						</div>
						<ul>
							<li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
							<li>latest blog</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="breadcumb-shape">
				<img src="assets/images/inner-img/breadcumb-dot.webp" alt="dot">
			</div>
			<div class="breadcumb-shape2">
				<img src="assets/images/inner-img/breadcumb-ball.webp" alt="ball">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End educate Breadcumb Area -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- start educate blog Area -->
	<!--==================================================-->
	<div class="blog-area style-one blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						@foreach($blogs as $blog)
							<div class="col-xl-4 col-lg-12 col-md-4">
								<div class="single-blog-box box-1">
									<div class="single-blog-thumb">
										<img src="{{ asset('storage/' . $blog->blog_image) }}" alt="thumb" class="img-fluid">
										<div class="blog-meta-top">
											<span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</span>
										</div>
									</div>
									<div class="blog-content">
										<div class="blog-author">
											<h4 style="display: flex; align-items: center; gap: 10px;">
												@if($blog->author_image)
													<img src="{{ asset('storage/' . $blog->author_image) }}" alt="author" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
												@endif
												{{ $blog->author_name }}
											</h4>
										</div>
										
										<div class="blog-title">
											<h3>
												<a href="{{ route('blog.details', $blog->slug) }}">
													{{ $blog->heading }}
												</a>
											</h3>
										</div>
										<div class="blog-btn">
											<a href="{{ route('blog.details', $blog->slug) }}">
												Continue Reading
												<img src="{{ asset('assets/images/home-one/blog-icon1.webp') }}" alt="icon">
											</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					
				</div>
				{{-- <div class="col-lg-4">
					<div class="blog-right-sidebar">
						<div class="widget widget_search">
							<div class="search">
								<form action="https://formspree.io/f/myyleorq" method="POST">
									<input type="text" name="s" value="" placeholder="Search..." title="Search for:"
										required="">
									<button type="submit" class="icons"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="widget-categories-box">
							<!-- categories title -->
							<h4 class="sidebar-title">Categories</h4>
							<!-- widget categories menu -->
							<div class="widget-categories-menu">
								<ul>
									<li class=""><a href="blog.html">Educational</a></li>
									<li class=""><a href="blog.html">Business</a></li>
									<li class=""><a href="blog.html">Artificial Intelligence</a></li>
									<li class=""><a href="blog.html">Business and Finance</a></li>
									<li class=""><a href="blog.html">Learning</a></li>
									<li class=""><a href="blog.html">Innovations</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-categories-box">
							<h4 class="sidebar-title">Recent Posts</h4>
							<!-- widget recent post -->
							<div class="widget-recent-post d-flex">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/inner-img/rpost-thumb1.webp" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<h4><a href="#">How Gamification is
												Changing the Way...</a></h4>
										<span>20 Feb, 2025</span>
									</div>
								</div>
							</div>
							<!-- widget recent post -->
							<div class="widget-recent-post d-flex">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/inner-img/rpost-thumb2.webp" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<h4><a href="#">Learning is the Key soft
												skills and Professional</a></h4>
										<span>20 Feb, 2025</span>
									</div>
								</div>
							</div>
							<!-- widget recent post -->
							<div class="widget-recent-post d-flex">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/inner-img/rpost-thumb3.webp" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<h4><a href="#">The Importance of Critical
												Thinking in Education</a></h4>
										<span>20 Feb, 2025</span>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-categories-box">
							<!-- categories title -->
							<h4 class="sidebar-title">Tag Clouds</h4>
							<div class="sidebar-tag-item style-two">
								<ul>
									<li><a href="#!">Education</a></li>
									<li><a href="#!">Business</a></li>
									<li><a href="#!">Ai</a></li>
									<li><a href="#!">University</a></li>
									<li><a href="#!">Innovations</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate blog Area -->
	<!--==================================================-->


@endsection