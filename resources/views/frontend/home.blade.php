@extends('frontend.layouts.layout')

@section('main')

  <div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg1.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft">Bergerak dibidang Bahan Bakar Minyak (BBM) dan Kontruksi</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">Pt Anak Bungsu Indonesia Energi</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                      <a href="{{ route('service') }}" class="slider btn btn-primary">Layanan Kami</a>
                      <a href="{{ route('contact') }}" class="slider btn btn-primary border">Kontak</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>

    @foreach ($dataSlider as $slider)
      <div class="banner-carousel-item-custom" style="background-image:url('images/sliders/{{ $slider->slider_image }}')">
      <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  {{-- <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2> --}}
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">{{ $slider->title }}</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">{{ $slider->description }}</p>
                  <div data-animation-in="slideInLeft">
                    <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Selengkapnya</a>
                      {{-- <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Selengkapnya</a> --}}
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    @endforeach
    
  </div>

  <section class="call-to-action no-padding">
    <div class="container">
      <div class="action-style-box">
          <div class="row">
            <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Kami siap bekerja sama dengan anda</h3>
                </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="{{ route('contact') }}">Penawaran</a>
                </div>
            </div><!-- col end -->
          </div><!-- row end -->
      </div><!-- Action style box -->
    </div><!-- Container end -->
  </section><!-- Action end -->

  <section id="ts-features" class="ts-features">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
                <h2 class="into-title">Tentang Kami</h2>
                <h3 class="into-sub-title">Slogan</h3>
                <p>{{ $dataAbout->sub_description }}</p>
            </div><!-- Intro box end -->

            <div class="gap-20"></div>

            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-trophy"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">KAMI PUNYA REPUTASI UNTUK KEUNGGULAN</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-sliders-h"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">KAMI MEMBANGUN KEMITRAAN</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->

            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-thumbs-up"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Patuh terhadap komitmen</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-users"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">TIM PROFESIONAL</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">Nilai Kami</h3>
            <p>Perusahaan yang bergerak dalam bidang niaga Bahan Bakar Minyak (BBM) dan Kontruksi Pembangunan yang dapat bersaing secara profesional baik dalam bidang jasa, alat dan bahan kontruksi bangunan

            </p>

            <div class="accordion accordion-group" id="our-values-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Visi
                        </button>
                      </h2>
                  </div>
                
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                      <div class="card-body">
                        {{ $dataAbout->visi }}
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Misi
                        </button>
                      </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                      <div class="card-body">
                        {{ $dataAbout->misi }}
                      </div>
                  </div>
                </div>
                {{-- <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Integrity
                        </button>
                      </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                      </div>
                  </div>
                </div> --}}
            </div>
            <!--/ Accordion end -->

          </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->

  <section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Memberikan Layanan Terbaik</h2>
            <h3 class="section-sub-title">Layanan</h3>
          </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
          <div class="col-lg-8">

            @foreach ($dataService as $service)
              <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" class="service-img" src="images/services/{{ $service->service_logo }}" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">{{ $service->title }}</a></h3>
                  <p>{{ $service->description }}</p>
                </div>
            </div><!-- Service 2 end -->
            @endforeach
            

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="/frontend/images/services/service-center.jpg" alt="service-avater-image">
          </div><!-- Col end -->

          {{-- <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="/frontend/images/icon-image/service-icon4.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="/frontend/images/icon-image/service-icon5.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="/frontend/images/icon-image/service-icon6.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end --> --}}
      </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
  </section><!-- Service end -->


  <section id="ts-features" class="ts-features pb-2 solid-bg">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Bahan Bakar Dengan Mutu dan Standar Pemerintah</h2>
            <h3 class="section-sub-title">Produk Kami</h3>
          </div>
      </div>
      <!--/ Title row end -->
      <div class="row">

        @foreach ($dataProduct as $product)
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
                <div class="ts-service-image-wrapper">
                  <img loading="lazy" class="product-img" src="images/products/{{ $product->product_image }}" alt="service-image">
                </div>
                <div class="d-flex">
                  <div class="ts-service-info">
                      <h3 class="service-box-title"><a href="service-single.html">{{ $product->product_name }}</a></h3>
                      <p>{!! Str::limit($product->description, 170, ' ...') !!}</p>
                      <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Baca Selengkapnya</a>
                  </div>
                </div>
            </div><!-- Service1 end -->
          </div><!-- Col 1 end -->
        @endforeach
          
      </div><!-- Content row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->


  <section class="content">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            {{-- <h3 class="column-title">Testimonials</h3> --}}

            <div id="client-slide" class="">
                <div class="item">
                  <div class="quote-item">
                      <span class="">
                        Kami bangga telah menjadi transportir kepercayaan para klien kami pada hampir
                        seluruh jangkauan sektor industri. Perusahaan kami akan terus berkembang
                        sehingga mampu meningkatkan kualitas serta pelayanan dari produk kami
                      </span>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 1 end -->

            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h3 class="column-title">Klien</h3>

            <div class="row all-clients">

                @foreach ($dataClient as $client)
                  <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/{{ $client->client_logo }}" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 3 end -->

                @endforeach

                
            </div><!-- Clients row end -->

          </div><!-- Col end -->

      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Content end -->

  <section id="article" class="article">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Artikel yang Bermutu</h2>
            <h3 class="section-sub-title">Artikel</h3>
          </div>
      </div>
      <!--/ Title row end -->

      <div class="row">

        @foreach ($dataArticle as $article)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                  <a href="news-single.html" class="latest-post-img">
                      <img loading="lazy" class="post-img" src="images/articles/{{ $article->image }}" alt="img">
                  </a>
                </div>
                <div class="post-body">
                  <h4 class="post-title">
                      <a href="news-single.html" class="d-inline-block">{{ $article->title }}</a>
                  </h4>
                  <div class="latest-post-meta">
                      <span class="post-item-date">
                        <i class="fa fa-clock-o"></i> {{ $article->created_at->format('M d, Y') }}
                      </span>
                  </div>
                </div>
            </div><!-- Latest post end -->
          </div><!-- 1st post col end -->
        @endforeach
          
      </div>
      <!--/ Content row end -->

      <div class="general-btn text-center mt-4">
          <a class="btn btn-primary" href="{{ route('article') }}">Semua Artikel</a>
      </div>

    </div>
    <!--/ Container end -->
  </section>
  <!--/ News end -->
    
@endsection