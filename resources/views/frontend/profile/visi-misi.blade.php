@extends('frontend.layouts.layout')

@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">{{ $dataVisiMisi[0]->title }}</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <p>{!! ($dataVisiMisi[0]->content) !!}</p>

        </div><!-- Col end -->

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
@endsection