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
				<h1>Layanan Kami</h1>
				<!-- Breadcrumb Row -->
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
						<li class="breadcrumb-item">Layanan</li>
					</ul>
				</nav>
				<!-- Breadcrumb Row End -->
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->
<!-- About US -->
<section class="section-full content-inner" style="background-image:url(images/background/bg2.png); background-position:right bottom; background-size:100%; background-repeat:no-repeat;">
	<div class="container">
		<div class="row">
			@foreach ($dataService as $service)
		<div class="col-lg-4 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
				<div class="icon-bx-wraper style-3  m-b30">
					<div class="icon-xl m-b30"> 
				<img src="{{ Storage::url('services/'. $service->service_logo) }}" alt="">
						{{-- <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-infrastructure"></i></a>  --}}
					</div>
					<div class="icon-content">
					<h4 class="title m-b10"><a href="services-details.html">{{ $service->title }}</a></h4>
						<p class="m-b30">{{ $service->description }}</p>
						{{-- <a href="services-details.html" class="btn btn-primary btn-rounded btn-sm hover-icon">
							<span>Read More</span>
							<i class="fas fa-arrow-right"></i>
						</a> --}}
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section>
   
@endsection