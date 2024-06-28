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
				<h1>Galeri</h1>
				<!-- Breadcrumb Row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
						<li class="breadcrumb-item"><a href="{{ route('gallery') }}">Galeri</a></li>
					</ul>
				</nav>
				<!-- Breadcrumb Row End -->
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->


<section class="content-inner pb-2">
  <div class="container">

    <div class="section-head style-1 text-center">
      <h6 class="sub-title text-primary">Galeri</h6>
      <h2 class="title m-b50">{{ $galleryName->title }}</h2>
    </div>
      <!-- Gallery -->
      <div class="row">
        @foreach ($galleryDetail as $galleryImage)
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div class="">  
            <img
              src="{{ asset('/storage/gallery/gallery_image/'. $galleryImage->image ) }}"
              class="gallery-img shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>
        </div>
        @endforeach
      </div>
      <!-- Gallery -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
   
@endsection