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
				<h1>{{ $dataProduct->product_name }}</h1>
				<!-- Breadcrumb Row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
						<li class="breadcrumb-item"><a href="{{ route('product') }}">Produk</a></li>
						{{-- <li class="breadcrumb-item">{{ $dataProduct->product_name }}</li> --}}
					</ul>
				</nav>
				<!-- Breadcrumb Row End -->
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->
		
<!-- About US -->
<section class="section-full content-inner-2 port-detail" style="background-image:url(images/background/bg2.png); background-position:right bottom; background-size:100%; background-repeat:no-repeat;">
	<div class="container">
		<div class="row mb-lg-5 mb-3 ">
			{{-- <div class="col-lg-12 col-md-12 m-b50 aos-item m-sm-b30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
				<img src="{{ Storage::url('products/'. $dataProduct->product_image) }}" alt="" width="500">
			</div> --}}
			<div class="col-lg-6 col-md-12 align-self-center aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
				<h2 class="ic-title">{{ $dataProduct->product_name }}</h2>
				<p>{{ $dataProduct->description }}</p>
				{{-- <p class="m-b30">Ut ac lobortis nisl, sit amet suscipit tortor. Aenean egestas consectetur felis quis lacinia. Donec a iaculis neque. Aliquam a mi at ex euismod lacinia. Etiam rutrum eu sem non ullamcorper. Donec pulvinar est diam, at mollis lectus sollicitudin id. Vestibulum viverra eu quam ut iaculis. In hac habitasse platea dictumst. In dignissim.</p> --}}
				{{-- <div class="icon-bx-wraper style-7 left m-b30">
					<div class="icon-bx-sm bg-primary">
						<span class="icon-cell"><i class="flaticon-ic-location"></i></span> 
					</div>
					<div class="icon-content">
						<h4 class="title m-b5">Project Location</h4>
						<p>#8901 Marmora Road Chi, Vietnam</p>
					</div>
				</div>
				<div class="icon-bx-wraper style-7 left m-b30">
					<div class="icon-bx-sm bg-primary">
						<span class="icon-cell"><i class="flaticon-ic-phone-call"></i></span> 
					</div>
					<div class="icon-content">
						<h4 class="title m-b5">Call Us</h4>
						<p>+91 123 456 7890</p>
					</div>
				</div> --}}
			</div>
			<div class="col-lg-6 col-md-12 m-b30 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<img src="{{ Storage::url('products/'. $dataProduct->product_image) }}" width="500" height="300" class="d-lg-block d-none" alt="">
			</div>
		</div>
		{{-- <div class="row">
			<div class="col-lg-6 col-md-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
				<img src="/frontend/images/work/pic3.jpg" alt="">
			</div>
			<div class="col-lg-6 col-md-6 align-self-center  aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
				<ul class="info-list">
					<li>
						<h2 class="text-primary">100%</h2>
						<h4>Work Completed</h4>
					</li>
					<li>
						<h2 class="text-primary">250</h2>
						<h4>Workers Have Done</h4>
					</li>
					<li>
						<h2 class="text-primary">480</h2>
						<h4>In Days Completed</h4>
					</li>
				</ul>
			</div>
		</div> --}}
	</div>
</section>
   
@endsection