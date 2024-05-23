@extends('frontend.layouts.layout')
@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Produk Kami</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      @foreach ($dataProduct as $product)
        <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="product-img" src="{{ Storage::url('products/'. $product->product_image) }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">{{ $product->product_name }}</a></h3>
                  <p>{!! Str::limit($product->description, 100, ' ...')  !!}</p>
                  <a class="learn-more d-inline-block" href="{{ route('productDetail', $product->id) }}" aria-label="service-details"><i class="fa fa-caret-right"></i> Selengkapnya</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
      @endforeach
      

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
   
@endsection