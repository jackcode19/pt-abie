@extends('frontend.layouts.layout')

@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
        <div class="col-lg-6">
          <h3 class="column-title">{{ $dataAbout->title }}</h3>
          <p>{!! ($dataAbout->description) !!}</p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              {{-- <div class="item" style="background-image:url('images/about/{{ $dataAbout->image }}')"> --}}
                <div class="item" style="background-image:url('{{ Storage::url('abouts/'. $dataAbout->image) }}')">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Logo</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->

        <div class="col-lg-12">
          <p>{!! ($dataAbout->description) !!}</p>

        </div><
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
@endsection