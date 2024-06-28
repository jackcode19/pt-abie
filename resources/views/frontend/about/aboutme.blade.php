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
          <h1>Tentang Kami</h1>
          <!-- Breadcrumb Row -->
          <nav aria-label="breadcrumb" class="breadcrumb-row">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
              <li class="breadcrumb-item">Tentang Kami</li>
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
        <div class="col-lg-6 m-b30">
          <div class="ic-media">
            <img src="/frontend/images/about/image3.jpeg" alt="" class="img1 aos-item aos-init aos-animate" data-aos="fade-down" data-aos-duration="800" data-aos-delay="400">
          </div>
        </div>
        <div class="col-lg-6 m-b30 aos-item aos-init aos-animate" data-aos="fade-in" data-aos-duration="800" data-aos-delay="400">
          <div class="section-head style-1">
            <h6 class="sub-title text-primary">Tentang Kami</h6>
            {{-- <h2 class="title">Muda, Energik, Positif</h2> --}}
          </div>
          <p>{!! $dataAbout->aboutme !!}</p>
        </div>

        <div class="col-lg-12 m-b30 aos-item aos-init aos-animate" data-aos="fade-in" data-aos-duration="800" data-aos-delay="400">
          <div class="section-head style-1">
            <h6 class="sub-title text-primary">Nilai Kami</h6>
            {{-- <h2 class="title">Muda, Energik, Positif</h2> --}}
          </div>
          <p>{!! $dataAbout->ourvalue !!}</p>
        </div>
      </div>
    </div>
	</section>
@endsection