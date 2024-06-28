@extends('frontend.layouts.layout')
@section('main')

<!-- Banner -->
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
        <h1>Kontak</h1>
        <!-- Breadcrumb Row -->
        <nav aria-label="breadcrumb" class="breadcrumb-row">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item">Kontak</li>
          </ul>
        </nav>
        <!-- Breadcrumb Row End -->
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->

<section class="content-inner-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="icon-bx-wraper style-8 bg-white" data-name="">
          <div class="icon-md m-r20">
            <span class="icon-cell text-primary"><i class="flaticon-ic-phone-call"></i></span> 
          </div>
          <div class="icon-content">
            <h4 class="tilte m-b10">Call Now</h4>
            <p class="m-b0">{{ $dataContact->phone }}<br></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="icon-bx-wraper style-8 bg-white" data-name="">
          <div class="icon-md m-r20">
            <span class="icon-cell text-primary"><i class="flaticon-ic-location"></i></span> 
          </div>
          <div class="icon-content">
            <h4 class="tilte m-b10">Location</h4>
            <p class="m-b0">{!! Str::limit($dataContact->address, 50, '') !!}<br></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
        <div class="icon-bx-wraper style-8 bg-white" data-name="">
          <div class="icon-md m-r20">
            <span class="icon-cell text-primary"><i class="flaticon-ic-mail"></i></span> 
          </div>
          <div class="icon-content">
            <h4 class="tilte m-b10">Email Now</h4>
            <p class="m-b0">{{ $dataContact->email }}<br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section class="content-inner-1 pt-0">
  <div class="map-iframe">
    <iframe src="https://www.google.com/maps/embed?pb={{ $dataContact->maps }}" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:100%;" allowfullscreen></iframe>
  </div>
</section>

   
@endsection