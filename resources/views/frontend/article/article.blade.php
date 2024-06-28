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
						<li class="breadcrumb-item">Blog Kami</li>
						<li class="breadcrumb-item">Berita {{ $categoryName }}</li>
					</ul>
				</nav>
				<!-- Breadcrumb Row End -->
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Blog Large -->
<div class="content-inner">


	<div class="container">
    <div class="section-head style-1 text-center">
      <h6 class="sub-title text-primary">Blog Kami</h6>
      <h2 class="title">Berita {{ $categoryName }}</h2>
    </div> 
    <div class="blog-area">
      <div class="row">
        @foreach ($dataArticle as $article)
        <div class="col-lg-4 col-md-12 m-b30">
          <div class="ic-card blog-grid style-1 aos-item h-100 overlay-post" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
            <div class="ic-media">
              <a href="{{ route('articleDetail', $article->id) }}"><img src="{{ Storage::url('articles/'. $article->image) }}" alt=""></a>
            </div>
            <div class="ic-info">
              <div class="ic-meta">
                <ul>
                  <li class="post-date"><strong>{{ $article->created_at->format('d') }}</strong><span>{{ $article->created_at->format('M') }}</span></li>
                  {{-- <li class="post-category"><a href="javascript:void(0);">{{ $article->category->name }}</a></li> --}}
                  {{-- <li class="post-user">By <a href="javascript:void(0);"></a></li> --}}
                </ul>
              </div>
              <h5 class="ic-title"><a href="{{ route('articleDetail', $article->id) }}">{!! Str::limit($article->title, 50, ' ...') !!}</a></h5>
              <div class="read-more">
                <a href="{{ route('articleDetail', $article->id) }}" class="btn btn-primary btn-rounded btn-sm hover-icon">
                  <span>Baca Selengkapnya</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection