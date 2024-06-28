<header class="site-header mo-left header style-1">
	<!-- Main Header -->
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar clearfix">
			<div class="container-fluid clearfix">
				
				<!-- Website Logo -->
				<div class="logo-header mostion logo-dark">
					<a href="{{ route('home') }}"><img src="/frontend/images/logo.png" alt=""></a>
				</div>
				
				<!-- Nav Toggle Button -->
				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				
				<!-- Extra Nav -->
				<div class="extra-nav">
					<div class="extra-cell">
						<!-- Quik Search -->
						<div class="search-inhead">
							{{-- <div class="ic-quik-search">
								<form action="#">
									<input name="search" value="" type="text" class="form-control" placeholder="Search">
									<span  id="quik-search-remove"><i class="ti-close"></i></span>
								</form>
							</div>
							<a class="search-link" id="quik-search-btn" href="javascript:void(0);">
								<i class="ti ti-search"></i>
							</a> --}}
						</div>
						<div class="menu-btn navicon">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
				<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
					<div class="logo-header logo-dark">
						<a href="index-2.html"><img src="/frontend/images/logo.png" alt=""></a>
					</div>
					<ul class="nav navbar-nav navbar navbar-left">	
						<li><a href="{{ route('home') }}">Beranda</a></li>
						<li class="sub-menu-down">
							<a href="javascript:void(0);">Profil</a>
							<ul class="sub-menu">
								<li><a href="{{ route('about') }}">Tentang Kami</a></li>
								<li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
								<li><a href="{{ route('activity') }}">Aktivitas Kami</a></li>
							</ul>
						</li>
						<li class="sub-menu-down"><a href="javascript:void(0);">Media</a>
							<ul class="sub-menu">
								<li><a href="{{ route('article') }}">Blog</a></li>
								<li><a href="{{ route('gallery') }}">Galeri</a></li>
							</ul>
						</li>
						<li class="sub-menu-down"><a href="javascript:void(0);">Produk & Layanan</a>
							<ul class="sub-menu">
								<li><a href="{{ route('product') }}">Produk</a></li>
								<li><a href="{{ route('service') }}">Layanan</a></li>
							</ul>
						</li>
						<li><a href="{{ route('contact') }}">Kontak</a></li>
					</ul>
					<div class="ic-social-icon">
						<ul>
							<li><a href="https://www.facebook.com/profile.php?id=61560719464729" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/abi_energi/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://x.com/abi_energi" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCvFbhAwTurU7BCo_pCEfZAw" target="_blank"><i class="fab fa-youtube"></i></a></li>
							 <li><a href="https://www.tiktok.com/@abi_energi" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                  	<li><a href="https://www.linkedin.com/in/pt-anak-bungsu-indonesia-40b09b308/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- Main Header End -->
</header>