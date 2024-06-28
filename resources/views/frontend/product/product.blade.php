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
				<h1>Produk</h1>
				<!-- Breadcrumb Row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
						<li class="breadcrumb-item">Produk</li>
					</ul>
				</nav>
				<!-- Breadcrumb Row End -->
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Portfolio -->
<section class="content-inner line-img overflow-hidden">
	<div class="container">
		<div class="site-filters style-1 clearfix center">
			<ul class="filters" data-toggle="buttons">
				<li class="btn active">
					<input type="radio">
					<a href="javascript:void(0);">Semua</a> 
				</li>
				{{-- <li data-filter=".industry" class="btn">
					<input type="radio">
					<a href="javascript:void(0);">Kontruksi</a> 
				</li> --}}
				<li data-filter=".manufacturing" class="btn">
					<input type="radio">
					<a href="javascript:void(0);">BBM</a> 
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<ul id="masonry"  class="row lightgallery">
		@foreach ($dataProduct as $product)
		<li class="card-container col-xl-4 col-md-6 col-sm-6 manufacturing m-b30">
				<div class="ic-box overlay style-1">
					<div class="ic-media-product">
						<img src="{{ Storage::url('products/'. $product->product_image) }}" alt="">
					</div>
					<div class="ic-info">
						<span data-exthumbimage="{{ Storage::url('products/'. $product->product_image) }}" data-src="{{ Storage::url('products/'. $product->product_image) }}" class="view-btn lightimg" title="{{ $product->product_name }}"></span>
						{{-- <h6 class="sub-title">Kategori</h6> --}}
						<h4 class="title m-b15"><a href="{{ route('productDetail', $product->id) }}">{{ $product->product_name }}</a></h4>
					</div>
				</div>
			</li>  
		@endforeach
			
		</ul>
	</div>
</section>

@endsection
@push('script')
<script src="/frontend/vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="/frontend/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="/frontend/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
@endpush