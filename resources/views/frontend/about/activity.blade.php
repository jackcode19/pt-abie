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
          <h1>Aktivitas Kami</h1>
          <!-- Breadcrumb Row -->
          <nav aria-label="breadcrumb" class="breadcrumb-row">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
              <li class="breadcrumb-item">Aktivitas Kami</li>
            </ul>
          </nav>
          <!-- Breadcrumb Row End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->
		
  <!-- About US -->
  <section class="content-inner">
    <div class="container">
      <div class="row align-items-center about-bx3">
        <div class="col-lg-12 m-b30 aos-item aos-init aos-animate" data-aos="fade-in" data-aos-duration="800" data-aos-delay="400">
          <div class="section-head style-1">
            <h6 class="sub-title text-primary">Activitas Kami</h6>
            {{-- <h2 class="title">Muda, Energik, Positif</h2> --}}
          </div>
          <div class="row spno">
            <div class="col-lg-12">
              <div class="video-bx content-media style-2 overlay-black-light ">
                <img src="/frontend/images/video/image3.jpeg" alt="">
                <div class="video-btn aos-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                  <a href="https://www.youtube.com/watch?v=IPUMJZvv_aM" class="popup-youtube"><i class="fas fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          <p>{!! $dataAbout !!}</p>
        </div>
      </div>
    </div>
	</section>
@endsection