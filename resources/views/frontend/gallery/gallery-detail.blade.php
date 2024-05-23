@extends('frontend.layouts.layout')
@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Galeri</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
      <!-- Gallery -->
      <div class="row">
        @foreach ($galleryDetail as $galleryImage)
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div class="">  
            <img
              src="{{ asset('/storage/gallery/gallery_image/'. $galleryImage->image ) }}"
              class="gallery-img shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>
        </div>
        @endforeach
      </div>
      <!-- Gallery -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
   
@endsection