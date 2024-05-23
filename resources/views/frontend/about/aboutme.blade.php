@extends('frontend.layouts.layout')

@section('main')
@if (isset($slider[0]))
<div id="banner-area" class="banner-area" style="background-image:url('{{  Storage::url('sliders/'. $slider[0]->slider_image)}}')">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Tentang Kami</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 
@endif

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

        <div class="col-lg-12">
          @if($dataAbout)
            <p>{!! ($dataAbout) !!}</p>

          <!-- Tambahan lainnya sesuai dengan struktur tabel -->
          @else
              <p>No information available.</p>
          @endif
          
        </div>
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
@endsection