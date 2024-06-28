@extends('frontend.layouts.layout')
@section('main')
<!-- Banner  -->
<div class="slidearea bannerside">
{{-- <div class="side-contact-info">
	<ul>
		<li><i class="fas fa-envelope"></i> info@example.com</li>
	</ul>
</div> --}}
	<div class="ic-bnr-inr ic-bnr-inr-sm style-1 overlay-black-light overlay-left" style="background-image: url(/frontend/images/banner/image1.png);">
	@isset($banner)
	<div class="ic-bnr-inr ic-bnr-inr-sm style-1 overlay-black-light overlay-left"  style="background-image: url('{{ Storage::url('banners/'. $banner->image) }}');">
	@endisset
	<div class="container-fluid">
		<div class="ic-bnr-inr-entry">
			<h1>Blog</h1>
			<!-- Breadcrumb Row -->
			<nav aria-label="breadcrumb" class="breadcrumb-row">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
					<li class="breadcrumb-item"><a href="{{ route('article') }}">Blog</a></li>
					{{-- <li class="breadcrumb-item">{{ $articleDetail->title }}</li> --}}
				</ul>
			</nav>
			<!-- Breadcrumb Row End -->
		</div>
	</div>
</div>
</div>
<!-- Banner End -->
<!-- Blog Large -->
<div class="content-inner bg-img-fix">
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-lg-8">
			<div class="ic-card blog-single style-1">
				<div class="ic-media">
					<img src="{{ Storage::url('articles/'. $articleDetail->image) }}" alt="">
				</div>
				<div class="ic-info">
					<div class="ic-meta">
						<ul>
							<li>April 26, 2021</li>
							{{-- <li class="post-user">By <a href="javascript:void(0);">John Doe</a></li> --}}
						</ul>
					</div>
					<h2 class="ic-title">{{ $articleDetail->title }}</h2>
					<div class="ic-post-text">
						<p>{!! $articleDetail->content !!}</p>
					</div>
					
					<div class="post-footer">
						<div class="ic-meta">
							<ul>
								<li class="post-user">Sumber <a href="{{ $articleDetail->source }}" target="_blank">{{ $articleDetail->source }}</a></li>
							</ul>
						</div>
						{{-- <div class="post-tags">
							<strong>Tags:</strong> 
							<a href="javascript:void(0);" rel="tag">Industry</a>										
							<a href="javascript:void(0);" rel="tag">Factory</a>										
						</div> --}}
						
						{{-- <div class="ic-share-post">
							<h5 class="title">Share :</h5>
							<ul class="ic-social-icon">
								<li><a href="javascript:void(0);" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="javascript:void(0);" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>						 --}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 m-b30 ic-order-1">
			<aside class="side-bar sticky-top left">
				{{-- <div class="widget widget_tag_cloud">
								<div class="widget-title">
						<h4 class="title">Search</h4>
						<div class="ic-separator style-1 text-primary mb-0"></div>
					</div>
						<div class="search-bx">
							<form role="search" method="post">
									<div class="input-group">
										<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
										<span class="input-group-btn">
							<button type="submit" class="btn btn-primary sharp radius-no"><i class="la la-search scale3"></i></button>
							</span> 
					</div>
							</form>
						</div>
					</div> --}}
					<div class="widget recent-posts-entry">
					<div class="widget-title">
						<h4 class="title">Postingan Terbaru</h4>
						<div class="ic-separator style-1 text-primary mb-0"></div>
					</div>
					<div class="widget-post-bx">
						@foreach ($dataArticle->slice(0, 6)  as $article)
						<div class="widget-post clearfix">
							<div class="ic-media"> 
								<a href="{{ route('articleDetail', $article->id) }}"><img src="{{ Storage::url('articles/'. $article->image) }}" alt=""></a>
							</div>
							<div class="ic-info">
								<h4 class="title"><a href="{{ route('articleDetail', $article->id) }}">{!! Str::limit($article->title, 50, ' ...') !!}</a></h4>
								<div class="ic-meta">
									<ul>
										<li class="post-date"> {{ $article->created_at->format('d, M, y') }}</li>
									</ul>
								</div>
							</div>  
						</div>
						@endforeach
					</div>
				</div>
					<div class="widget widget_categories">
						<div class="widget-title">
							<h4 class="title">Kategori</h4>
						<div class="ic-separator style-1 text-primary mb-0"></div>
					</div>
					<ul>
						@foreach ($categories as $category)
								<li class="cat-item {{ $category->id }}"><a href="{{ route('article', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
						@endforeach	
					</ul>
				</div>
				{{-- <div class="widget widget widget_categories">
					<div class="widget-title">
						<h4 class="title">Archives</h4>
						<div class="ic-separator style-1 text-primary mb-0"></div>
					</div>
							<ul>
								<li><a href="javascript:void(0);">January</a>(3)</li>
								<li><a href="javascript:void(0);">Fabruary</a>(4)</li>
								<li><a href="javascript:void(0);">March</a>(4)</li>
								<li><a href="javascript:void(0);">April</a>(3)</li>
								<li><a href="javascript:void(0);">May</a>(4)</li>
								<li><a href="javascript:void(0);">Jun</a>(1)</li>
								<li><a href="javascript:void(0);">July</a>(4)</li>
							</ul>
				</div> --}}
				
			</aside>
		</div>
	</div>
</div>
</div>
@endsection