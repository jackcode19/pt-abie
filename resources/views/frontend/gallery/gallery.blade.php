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

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          @foreach ($dataGallery as $gallery)
            <div class="col-lg-4 col-md-6 shuffle-item">
            <div class="project-img-container">
              <a class="gallery-popup" href="">
                <img class="gallery-img" src="{{ Storage::url('gallery/covers/'. $gallery->cover_image) }}" alt="project-image">
                {{-- <span class="gallery-icon"><i class="fa fa-plus"></i></span> --}}
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="{{ route('galleryDetail', $gallery->gallery_id) }}">{{ $gallery->title }}</a>
                  </h3>
                  {{-- <p class="project-cat">Kategori</p> --}}
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
          @endforeach
          
        </div><!-- shuffle end -->
      </div>

      {{-- <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Projects</a>
        </div>
      </div> --}}

    </div><!-- Content row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
   
@endsection