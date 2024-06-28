 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from industry.indiankoder.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 06:12:11 GMT -->
<head>
	
	<!-- Title -->
	<title>PT Anak Bungsu Indonesia Energi</title>
	
	<!-- Meta -->
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="IndianCoder">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="chemical, company, construction, corporate business, energy industry, engineering, factory, industrial, industry, manufacturing, mechanical, mining, oil gas petroleum plant, pharmaceutical, refinery">
	<meta name="description" content="The Industry - Factory & Industrial Bootstrap HTML Template provides an easy and visually appealing platform to showcase your work to clients, Ideal for construction, corporate business and industrial.">
	<meta property="og:title" content="Industry - Factory & Industrial Bootstrap HTML Template">
	<meta property="og:description" content="The Industry - Factory & Industrial Bootstrap HTML Template provides an easy and visually appealing platform to showcase your work to clients, Ideal for construction, corporate business and industrial.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/frontend/images/icon-abie2.png">
    
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="/frontend/vendor/twentytwenty-master/css/twentytwenty.css">
    <link href="/frontend/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
	<link href="/frontend/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="/frontend/vendor/aos/aos.css" rel="stylesheet">
	<link href="/frontend/vendor/switcher/switcher.css" rel="stylesheet">
	<link href="/frontend/vendor/rangeslider/rangeslider.css" rel="stylesheet">
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="/frontend/css/style.css">
	<link class="skin" rel="stylesheet" href="/frontend/css/skin/skin-1.css">

</head>
<body id="bg">
{{-- <div id="loading-area" class="loading-page-1">
	<div class="loading-area">
		<p>Loading</p>
		<span></span>
	</div>
</div> --}}
<div class="page-wraper">

	<!-- Header -->
	@include('frontend.partial.navbar')
	<!-- Header End -->
	
	<div class="contact-sidebar">
		<div class="contact-box">
			<div class="logo-contact logo-dark">
				<a href="index-2.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="m-b50 contact-text">
				<div class="ic-title">
					<h4>Tentang Kami</h4>
					<div class="ic-separator style-1 text-primary mb-0"></div>	
				</div>
				@if ($about)
					<p>{!! Str::limit($about->about_us_summary, 200, ' ...') !!}</p>
				@else
					<p>Tidak ada data yang ditampilkan!</p>
				@endif
				
				<a href="{{ route('about') }}" class="btn btn-primary btn-sm btn-rounded">Baca Selengkapnya</a>
			</div>
			<div class="ic-title">
				<h4>Informasi Kontak</h4>
				<div class="ic-separator style-1 text-primary mb-0"></div>	
			</div>
			<div class="icon-bx-wraper left">
				<div class="icon-md m-r20">
					<span class="icon-cell"><i class="las la-phone-volume"></i></span> 
				</div>
				<div class="icon-content">
					<h5 class="tilte">No Telepon</h5>
					<p class="m-b0">{{ $contact[0]->phone }}<br></p>
				</div>
			</div>
			<div class="icon-bx-wraper left">
				<div class="icon-md m-r20">
					<span class="icon-cell"><i class="las la-map-marker"></i></span> 
				</div>
				<div class="icon-content">
					<h5 class="tilte">Lokasi</h5>
					<p class="m-b0">{{ $contact[0]->address }}</p>
				</div>
			</div>
			<div class="icon-bx-wraper left">
				<div class="icon-md m-r20">
					<span class="icon-cell"><i class="las la-envelope-open"></i></span> 
				</div>
				<div class="icon-content">
					<h5 class="tilte">Email</h5>
					<p class="m-b0">{{ $contact[0]->email }}</p>
				</div>
			</div>
		</div>	
	</div>
	<div class="menu-close"></div>
	
	<div class="page-content bg-white">
		
    @yield('main')
	
	</div>
	<!-- Footer -->
    @include('frontend.partial.footer')
    <!-- Footer End -->
	<button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
</div>

  <!-- JAVASCRIPT FILES ========================================= -->
  <script src="/frontend/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
  <script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
  <script src="/frontend/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
  <script src="/frontend/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
  <script src="/frontend/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
  <script src="/frontend/vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
  <script src="/frontend/vendor/twentytwenty-master/js/jquery.event.move.js"></script>
  <script src="/frontend/vendor/twentytwenty-master/js/jquery.twentytwenty.js"></script>
  <script src="/frontend/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
  <script src="/frontend/vendor/aos/aos.js"></script><!-- AOS -->
  <script src="/frontend/js/ic.carousel.min.js"></script><!-- OWL-CAROUSEL -->
  <script src="/frontend/js/ic.ajax.js"></script><!-- AJAX -->
  <script src="/frontend/js/custom.min.js"></script><!-- CUSTOM JS -->
  {{-- <script src="/frontend/vendor/switcher/switcher.js"></script><!-- SWITCHER --> --}}
  <script src="/frontend/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
  @stack('script')
</body>

</html>