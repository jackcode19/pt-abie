@extends('frontend.layouts.layout')
@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Produk</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Produk</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $dataProduct->product_name }}</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-xl-12 col-lg-12">
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


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
   
@endsection