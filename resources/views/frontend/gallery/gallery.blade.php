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
				<h1>Galleri</h1>
				<!-- Breadcrumb Row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
						<li class="breadcrumb-item">Galleri</li>
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
      <h6 class="sub-title text-primary">Galleri</h6>
      <h2 class="title m-b30">Aktivitas Kami</h2>
    </div>

		<div class="row" id="masonry">
		@foreach ($dataGallery as $gallery)
		<div class="col-xl-4 col-lg-4 card-container">
				<div class="ic-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
					<div class="ic-media">
						<a href="{{ route('galleryDetail', $gallery->gallery_id) }}"><img src="{{ Storage::url('gallery/covers/'. $gallery->cover_image) }}" alt=""></a>
					</div>
					<div class="ic-info">
						<h5 class="ic-title"><a href="{{ route('galleryDetail', $gallery->gallery_id) }}">{{ $gallery->title }}</a></h5>
						<div class="ic-post-text text">
							{{-- <p>{!! Str::limit($gallery->content, 300, ' ...') !!}</p> --}}
						</div>
						{{-- <div class="read-more">
							<a href="{{ route('galleryDetail', $gallery->gallery_id) }}" class="btn btn-primary btn-rounded btn-sm hover-icon">
								<span>Baca Selengkapnya </span>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div> --}}
					</div>
				</div>
			</div>  
		@endforeach
			
		</div>
	</div>
</div>

{{-- <section
class="content-inner"
style="
  background-image: url(images/background/bg2.png);
  background-position: right bottom;
  background-size: 100%;
  background-repeat: no-repeat;
"
>
  <div class="container">
    <div class="section-head style-1 text-center">
      <h6 class="sub-title text-primary">Galleri</h6>
      <h2 class="title">Aktivitas Kami</h2>
    </div>
    <div class="row">
      <div class="col-lg-12 m-b30">
        <div class="swiper-container team-swiper-2">
          <div class="swiper-wrapper">
            @foreach ($dataGallery as $gallery)
            <div class="swiper-slide">
              <div
                class="ic-team style-3 text-center m-b30 overlay-shine aos-item"
              >
                <div class="ic-media">
                  <a href="{{ route('galleryDetail', $gallery->gallery_id) }}"
                    ><img src="{{ Storage::url('gallery/covers/'. $gallery->cover_image) }}" alt=""
                  /></a>
                </div>
                <div class="ic-content m-t20">
                  <h6 class="ic-position line text-primary">
                    
                  </h6>
                  <h5 class="ic-name">
                    <a href="{{ route('galleryDetail', $gallery->gallery_id) }}">{{ $gallery->title }}</a>
                  </h5>
                </div>
              </div>
            </div>   
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@endsection