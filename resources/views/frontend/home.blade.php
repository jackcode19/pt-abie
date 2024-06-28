@extends('frontend.layouts.layout')

@section('main')

<!-- Slider -->
<div class="slidearea">
  {{-- <div class="side-contact-info">
    <ul>
      <li><i class="fas fa-phone-alt"></i> +91 123 456 7890</li>
      <li><i class="fas fa-envelope"></i> info@example.com</li>
    </ul>
  </div> --}}
  <div class="silder-one">
    <div class="swiper-container main-silder-swiper">
      <div class="swiper-wrapper">
        @foreach ($slider as $slide)
        <div class="swiper-slide">
          <div class="silder-img overlay-black-light">
            <img src="{{ Storage::url('sliders/'. $slide->slider_image) }}" data-swiper-parallax="30%" alt="">
          </div>
          <div class="silder-content" data-swiper-parallax="-40%">
            <div class="inner-content">
              {{-- <h6 class="sub-title">HIGH PERFORMANCE</h6> --}}
              <h1 class="title">{{ $slide->title }}</h1>
              <h1 class="title"></h1>
              <h3 class="title-small">{{ $slide->description }}<br></h3>
              <a href="{{ route('about') }}" class="btn shadow-primary btn-primary btn-rounded btn-ov-secondary">BACA SELENGKAPNYA <i class="m-l10 fas fa-caret-right"></i></a>
            </div>
            <div class="overlay-slide" data-swiper-parallax="100%"></div>
          </div>
        </div>  
        @endforeach
      </div>
      {{-- <div class="slider-one-pagination">
        <!-- Add Navigation -->
        <div class="btn-prev swiper-button-prev1 swiper-button-white"><i class="las la-long-arrow-alt-left"></i></div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="btn-next swiper-button-next1 swiper-button-white"><i class="las la-long-arrow-alt-right"></i></div>
      </div> --}}
    </div>
  </div>
</div>

<!-- About US -->
<section class="section-full content-inner about-bx2" style="background-image:url(/frontend/images/background/bg2.png); background-position:right bottom; background-size:100%; background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="ic-media">
          <div class="img1 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"><img src="/frontend/images/about/image1.jpeg" alt=""></div>
          <div class="img2 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"><img src="/frontend/images/about/image2.jpeg" alt=""></div>
          <div class="img3 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600"><img src="/frontend/images/about/image3.jpeg" alt=""></div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="year-exp">
          <img src="{{ Storage::url('abouts/'. $dataAbout->image) }}" alt="" class="m-r20" width="200">
          {{-- <h2 class="year aos-item counter" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">35</h2> --}}
          <h4 class="text aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">Tentang Kami</h4>
        </div>
        @if ($homeContent)
          <p class="m-b30 aos-item " data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">{!! ($homeContent->about_us_summary)  !!}</p>
        @else
          <p class="m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Tidak ada data yang tampilkan!</p>
        @endif
        
        <div class="accordion ic-accordion about-faq" id="aboutFaq">
          <div class="accordion-item">
            <h4 class="accordion-header" >
              <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#aboutOne" aria-expanded="true" aria-controls="aboutOne">
                <i class="flaticon-infrastructure"></i>
                Visi
                <span class="toggle-close"></span>
              </a>
            </h4>
            <div id="aboutOne" class="accordion-collapse collapse show" aria-labelledby="aboutOne" data-bs-parent="#aboutFaq">
              <div class="accordion-body">
                @if ($homeContent)
                  <p class="m-b0">{!! $homeContent->about_us_vision !!}</p>
                @else
                  <p class="m-b0">Tidak ada data yang tampilkan!</p>
                @endif
                
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" >
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#aboutTwo" aria-expanded="false" aria-controls="aboutTwo">
                <i class="flaticon-maintenance"></i>
                Misi
                <span class="toggle-close"></span>
              </a>
            </h4>
            <div id="aboutTwo" class="accordion-collapse collapse" aria-labelledby="aboutTwo" data-bs-parent="#aboutFaq">
              <div class="accordion-body">
                @if ($homeContent)
                  <p class="m-b0">{!! $homeContent->about_us_mision !!}</p>
                @else
                  <p class="m-b0">Tidak ada data yang tampilkan!</p>
                @endif
                
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" >
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#aboutThree" aria-expanded="false" aria-controls="aboutTwo">
                <i class="flaticon-factory"></i>
                Nilai Kami
                <span class="toggle-close"></span>
              </a>
            </h4>
            <div id="aboutThree" class="accordion-collapse collapse" aria-labelledby="aboutThree" data-bs-parent="#aboutFaq">
              <div class="accordion-body">
                @if ($homeContent)
                  <p class="m-b0">{!! $homeContent->about_us_value !!}</p>
                @else
                  <p class="m-b0">Tidak ada data yang tampilkan!</p>
                @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Counter And  Video -->
<section class="ic-content-bx style-3">
  <div class="ic-content-inner">
    {{-- <div class="row">
      <div class="col-xl-10 col-lg-12 counter-info aos-item" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
        
        <div class="row">
          <div class="col-lg-3 col-sm-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
            <div class="counter-bx">
              <h2 class="counter text-primary">784</h2>
              <h3 class="m-b0">Project <br>Completed</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
            <div class="counter-bx">
              <h2 class="counter text-primary">987</h2>
              <h3 class="m-b0">Client <br>Satisfaction</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
            <div class="counter-bx">
              <h2 class="counter text-primary">874</h2>
              <h3 class="m-b0">Workers <br>Hand</h3>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
            <div class="counter-bx">
              <h2 class="counter text-primary">698</h2>
              <h3 class="m-b0">Awards <br>International</h3>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="row spno">
      <div class="col-lg-12">
        <div class="video-bx content-media style-2 overlay-black-light ">
          <img src="/frontend/images/video/image1.jpeg" alt="">
          <div class="video-btn aos-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <a href="https://www.youtube.com/watch?v=IPUMJZvv_aM" class="popup-youtube"><i class="fas fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="content-inner-2 bg-white"  style="background-image:url(/frontend/images/background/b.png); background-position:left top; background-size:100%; background-repeat:no-repeat;">
  <div class="container">
    <div class="section-head style-1 text-center">
      <h6 class="sub-title text-primary">Layanan</h6>
      <h2 class="title">Layanan Tersedia</h2>
    </div>
    <div class="row">
      @foreach ($dataService->slice(0, 3) as $service)
      <div class="col-lg-4 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="icon-bx-wraper style-3  m-b30">
          <div class="icon-xl m-b30"> 
            {{-- <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-infrastructure"></i></a>  --}}
            <a href="{{ route('service') }}" class="icon-cell">
              <img src="{{ Storage::url('services/'. $service->service_logo) }}" alt="">
            </a>
          </div>
          <div class="icon-content">
          <h4 class="title m-b10"><a href="services-details.html">{{ $service->title }}</a></h4>
            <p class="m-b30">{{ $service->description }}</p>
            <a href="{{ route('service') }}" class="btn btn-primary btn-rounded btn-sm hover-icon">
              <span>Baca Selengkapnya</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="content-inner-1 portfolio-2 bg-secondary" style="background-image: url(images/background/bg2-1.png); background-position: center;">
  <div class="resizemargin">
    <div class="row spno">
      <div class="col-xl-3 col-lg-4 align-self-center px-3 mb-lg-0 mb-4">
        <div class="section-head style-1 text-white">
          <h6 class="sub-title text-primary">Produk Kami</h6>
          <h2 class="title  text-white">Produk Unggulan Kami</h2>
          <p class="m-b30">Bahan Bakar Dengan Mutu dan Standar Pemerintah</p>
        </div>
        <a href="{{ route('product') }}" class="btn btn-primary btn-rounded">Semua Produk</a>
      </div>
      <div class="col-xl-9 col-lg-8">
        <div class="swiper-container swiper-portfolio-2 lightgallery">
          <div class="swiper-wrapper">
            @foreach ($dataProduct->slice(0, 4) as $product)
            <div class="swiper-slide">
              <div class="ic-box overlay style-2">
                <div class="ic-media">
                  <img src="{{ Storage::url('products/'. $product->product_image) }}" alt="">
                </div>
                <div class="ic-info">
                  <h6 class="sub-title"></h6>
                  <h4 class="title m-b15"><a href="{{ route('productDetail', $product->id) }}">{{ $product->product_name }}</a></h4>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div>
            <div class="swiper-pagination"></div>
          </div>
        </div>	
      </div>
    </div>
  </div>
  {{-- <div class="content-inner bg-secondary subscribe-area" style="background-image: url(images/background/bg2-1.png); background-position: center;">
    <div class="container">
      <div class="row subscribe-content">
        <div class="col-lg-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="section-head style-1 mb-0">
            <h6 class="sub-title text-primary">NEWSLETTER</h6>
            <h2 class="title text-white">Stay Updated With Us !</h2>
          </div>
        </div>
        <div class="col-lg-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
          <form class="icSubscribe ic-subscription mt-3" action="https://industry.indiankoder.com/xhtml/script/mailchamp.php" method="post">
            <div class="icSubscribeMsg Msg ic-subscription-msg"></div>
            <div class="input-group">
              <input name="icEmail" required="required" class="form-control" placeholder="Enter Your Email Address..." type="email">
              <button name="submit" value="Submit" type="submit" class="btn btn-primary btn-rounded">
                <span>Subscribe Now</span>
                <i class="m-l10 fas fa-plus scale08"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
</section>

{{-- <section class="content-inner-2">
  <div class="container">
    <div class="row section-head-bx align-items-center">
      <div class="col-md-8">
        <div class="section-head style-1">
          <h6 class="sub-title text-primary">OUR PORTFOLIOS</h6>
          <h2 class="title">Our Latest Projects</h2>
        </div>
      </div>
      <div class="col-md-4 text-start text-md-end mb-4 mb-md-0">
        <a href="portfolio.html" class="btn-link">See All Projects <i class="fas fa-plus scale08"></i></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="swiper-container swiper-portfolio lightgallery aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="400">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="ic-box overlay style-1 mt-5">
            <div class="ic-media">
              <img src="/frontend/images/work/work-1/pic-1.jpg" alt="">
            </div>
            <div class="ic-info">
              <span data-exthumbimage="/frontend/images/work/work-1/pic-1.jpg" data-src="/frontend/images/work/work-1/pic-1.jpg" class="view-btn lightimg" title="INDUSTRY"></span>
              <h6 class="sub-title">INDUSTRY</h6>
              <h4 class="title m-b15"><a href="portfolio-details.html">Florida Chemical Factory</a></h4>
            </div>
          </div>
        </div>	
        <div class="swiper-slide">
          <div class="ic-box overlay style-1">
            <div class="ic-media">
              <img src="/frontend/images/work/work-1/pic-2.jpg" alt="">
            </div>
            <div class="ic-info">
              <span data-exthumbimage="/frontend/images/work/work-1/pic-2.jpg" data-src="/frontend/images/work/work-1/pic-2.jpg" class="view-btn lightimg" title="OIL INDUSTRY"></span>
              <h6 class="sub-title">OIL INDUSTRY</h6>
              <h4 class="title m-b15"><a href="portfolio-details.html">Oil & Gas Industry</a></h4>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="ic-box overlay style-1 mt-5">
            <div class="ic-media">
              <img src="images/work/work-1/pic-3.jpg" alt="">
            </div>
            <div class="ic-info">
              <span data-exthumbimage="images/work/work-1/pic-3.jpg" data-src="images/work/work-1/pic-3.jpg" class="view-btn lightimg" title="RULES OF BUSINESS"></span>
              <h6 class="sub-title">RULES OF BUSINESS</h6>
              <h4 class="title m-b15"><a href="portfolio-details.html">Maintenance Service</a></h4>
            </div>
          </div>
        </div>	
        <div class="swiper-slide">
          <div class="ic-box overlay style-1">
            <div class="ic-media">
              <img src="/frontend/images/work/work-1/pic-4.jpg" alt="">
            </div>
            <div class="ic-info">
              <span data-exthumbimage="/frontend/images/work/work-1/pic-4.jpg" data-src="/frontend/images/work/work-1/pic-4.jpg" class="view-btn lightimg" title="INDUSTRY"></span>
              <h6 class="sub-title">INDUSTRY</h6>
              <h4 class="title m-b15"><a href="portfolio-details.html">Material Engineering</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>	
  </div>	
  <div class="content-inner bg-secondary subscribe-area" style="background-image: url(images/background/bg2-1.png); background-position: center;">
    <div class="container">
      <div class="row subscribe-content">
        <div class="col-lg-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="section-head style-1 mb-0">
            <h6 class="sub-title text-primary">NEWSLETTER</h6>
            <h2 class="title text-white">Stay Updated With Us !</h2>
          </div>
        </div>
        <div class="col-lg-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
          <form class="icSubscribe ic-subscription mt-3" action="https://industry.indiankoder.com/xhtml/script/mailchamp.php" method="post">
            <div class="icSubscribeMsg Msg ic-subscription-msg"></div>
            <div class="input-group">
              <input name="icEmail" required="required" class="form-control" placeholder="Enter Your Email Address..." type="email">
              <button name="submit" value="Submit" type="submit" class="btn btn-primary btn-rounded">
                <span>Subscribe Now</span>
                <i class="m-l10 fas fa-plus scale08"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- Client Logo -->
<section class="content-inner">
  <div class="container-fluid">
		<div class="clients-wrapper">
			<div class="container">
				<div class="swiper-container clients-swiper">
					<div class="swiper-wrapper">
          @foreach ($dataClient as $client)
          <div class="swiper-slide">
            <div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
              <img class="logo-main" src="{{ Storage::url('clients/'. $client->client_logo) }}" alt="">
            </div>
          </div>
          @endforeach
					</div>
				</div>
			</div>
		</div>
  </div>
</section>
		<!-- Client Logo -->

{{-- <!-- Faq -->
<section class="section-full content-inner overflow-hidden" style="background-image:url(frontend/images/background/bg1.png); background-position:left top; background-size:100%; background-repeat:no-repeat;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 m-b30 aos-item" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
        <div class="twentytwenty-img-area">
          <div class="twentytwenty-container">
            <img src="/frontend/images/image1.jpeg" alt="">
            <img src="/frontend/images/image2.jpeg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 aos-item" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
        <div class="section-head style-1">
          <h6 class="sub-title text-primary">FAQ</h6>
          <h2 class="title">Get Every Answer From Here</h2>
        </div>
        <div class="accordion ic-accordion accordion-sm" id="accordionFaq">
          <div class="accordion-item">
            <h2 class="accordion-header" >
              <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Sed vehicula ullamcorper odio ac pellentesque ?
                <span class="toggle-close"></span>
              </a>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"  data-bs-parent="#accordionFaq">
              <div class="accordion-body">
                <p class="m-b0">Quisque ac quam nibh. Nullam nunc tortor, malesuada sed est eu, ultricies egestas risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque pulvinar enim urna.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" >
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Nam massa velit, efficitur at tristique quis, varius non?
                <span class="toggle-close"></span>
              </a>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"  data-bs-parent="#accordionFaq">
              <div class="accordion-body">
                <p class="m-b0">Quisque ac quam nibh. Nullam nunc tortor, malesuada sed est eu, ultricies egestas risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque pulvinar enim urna.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" >
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Fusce tellus augue, viverra nec arcu vitae, ultricies ?
                <span class="toggle-close"></span>
              </a>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse"  data-bs-parent="#accordionFaq">
              <div class="accordion-body">
                <p class="m-b0">Quisque ac quam nibh. Nullam nunc tortor, malesuada sed est eu, ultricies egestas risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque pulvinar enim urna.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Praesent nulla nisl, varius quis metus quis ?
                <span class="toggle-close"></span>
              </a>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
              <div class="accordion-body">
                <p class="m-b0">Quisque ac quam nibh. Nullam nunc tortor, malesuada sed est eu, ultricies egestas risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque pulvinar enim urna.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Strategy -->
<section class="section-full ic-content-bx style-2 text-white" >
  <div class="ic-content-inner bg-secondary" style="background-image: url(images/background/bg2-1.png); background-position: center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 content-inner-1 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="section-head style-1">
            <h6 class="sub-title text-primary">OUR STRATEGY</h6>
            <h2 class="title text-white m-b20">Providing Full Range of High Services Solution</h2>
            <p>Fusce accumsan felis sed purus sollicitudin posuere. Vivamus id pharetra augue. Phasellus molestie ornare lacus mattis iaculis. Nulla dui dui, convallis et venenatis id, condimentum ut justo.</p>
          </div>
          <div class="progress-bx style-2 m-b40">
            <div class="progress-info">
              <h4 class="title text-white">Quality Products</h4>
              <h4 class="progress-value text-white">90%</h4>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width: 90%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-bx style-2 m-b40">
            <div class="progress-info">
              <h4 class="title text-white">Affordable Cost</h4>
              <h4 class="progress-value text-white">80%</h4>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width: 80%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="progress-bx style-2">
            <div class="progress-info">
              <h4 class="title text-white">Business Analytics</h4>
              <h4 class="progress-value text-white">95%</h4>
            </div>
            <div class="progress">
              <div class="progress-bar" style="width: 95%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
          <div class="content-media right">
            <img src="images/video/pic2-1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- Blog -->
<section class="content-inner bg-gray line-img" style="background-image:url(images/background/bg2.png); background-position:right bottom; background-size:100%; background-repeat:no-repeat;">
  <div class="container">
    <div class="section-head style-1 text-center">
      <h6 class="sub-title text-primary">Blog Kami</h6>
      <h2 class="title">Berita Terbaru</h2>
    </div> 
    <div class="blog-area">
      <div class="row">
        @foreach ($dataArticle->slice(0, 6) as $article)
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
</section>    

@endsection