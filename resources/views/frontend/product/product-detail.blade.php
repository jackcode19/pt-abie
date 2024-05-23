@extends('frontend.layouts.layout')
@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Produk</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-xl-8 col-lg-12">
        <div class="content-inner-page">

          <h2 class="column-title mrt-0">{{ $dataProduct->product_name }}</h2>

          <div id="page-slider" class="">
            <div class="item">
              <img loading="lazy" class="product-detail" src="{{ Storage::url('products/'. $dataProduct->product_image) }}" alt="product-image" />
            </div>
          </div><!-- Page slider end -->

          <div class="gap-40"></div>

          <div class="row">
            <div class="col-md-12">
              <p>{{ $dataProduct->description }}</p>
            </div><!-- col end -->
          </div><!-- 1st row end-->

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->

      <div class="col-xl-3 col-lg-4">
        <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title">Layanan Kami</h3>
            <ul class="nav service-menu">
              @foreach ($dataService as $service)
                  <li><a href="service-single.html">{{ $service->title }}</a></li>
              @endforeach
            </ul>
          </div><!-- Widget end -->

        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

   
@endsection