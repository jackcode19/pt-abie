@extends('frontend.layouts.layout')
@section('main')
<div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Artikel</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Semua Artikel</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="article">
  <div class="container">
      <!--/ Title row end -->

      <div class="row">

        @foreach ($dataArticle as $article)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                  <a href="{{ route('articleDetail', $article->id) }}" class="latest-post-img">
                      <img loading="lazy" class="post-img" src="{{ Storage::url('articles/'. $article->image) }}" alt="img">
                  </a>
                </div>
                <div class="post-body">
                  <h4 class="post-title">
                      <a href="{{ route('articleDetail', $article->id) }}" class="d-inline-block">{{ $article->title }}</a>
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

    </div>
    <!--/ Container end -->
  </section>

@endsection