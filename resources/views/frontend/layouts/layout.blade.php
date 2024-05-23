<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>PT Anak Bungsu Indonesia Energi</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="/frontend/image/png" href="/frontend/images/logo2.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/frontend/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="/frontend/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="/frontend/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="/frontend/plugins/slick/slick.css">
  <link rel="stylesheet" href="/frontend/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="/frontend/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="/frontend/css/style.css">

</head>
<body>
  <div class="body-inner">

    {{-- <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end --> --}}

  <!-- Header start -->
  @include('frontend.partial.navbar')
  <!--/ Header end -->

  @yield('main')


  @include('frontend.partial.footer')
  <!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="/frontend/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="/frontend/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="/frontend/plugins/slick/slick.min.js"></script>
  <script src="/frontend/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="/frontend/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="/frontend/plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="/frontend/plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="/frontend/js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT - Abie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/frontend/assets/img/favicon.png" rel="icon">
  <link href="/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/frontend/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.partial.navbar')
  <!-- End Header -->

@if (request()->is('home'))
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>PT Anak Bungsu Indonesia</span></h2>
            <p data-aos="fade-up">senatiasa memberikan pelayanan yang terbaik untuk memajukan pembangunan dengan terus melakukan kerjasama antar sektor untuk mewujudkan infrastruktur yang berguna dan bermanfaat untuk bangsa dan negara Indonesia tercinta.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(/frontend/assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/frontend/assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/frontend/assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/frontend/assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/frontend/assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->
@endif

  <main id="main">

    @yield('main')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.partial.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/assets/vendor/aos/aos.js"></script>
  <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend/assets/js/main.js"></script>

</body>

</html> --}}