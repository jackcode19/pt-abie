<header id="header" class="{{ request()->is('home') ? 'header-two' : 'header-one' }} ">
    <div class="site-navigation">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                  
                  <div class="logo">
                      <a class="d-block" href="{{ route('home') }}">
                        <img loading="" src="/frontend/images/logo.png" alt="Constra">
                      </a>
                  </div><!-- logo end -->

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  
                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav ml-auto align-items-center">

                        {{-- <li class="nav-item"><a class="nav-link">Home</a></li> --}}
                        <li class="nav-item {{ request()->is('home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                              <li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
                              <li><a href="{{ route('value') }}">Nilai-Nilai Kami</a></li>
                              {{-- <li><a href="team.html">Aktivitas Kami</a></li>
                              <li><a href="team.html">Klien</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Layanan</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Produk</a></li> --}}

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produk & Layanan <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ route('product') }}">Produk Kami</a></li>
                              <li><a href="{{ route('service') }}">Layanan Kami</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Media <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ route('article') }}">Artikel</a></li>
                              <li><a href="{{ route('gallery') }}">Galeri</a></li>
                            </ul>
                        </li>
                
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>

                        {{-- <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="contact.html">Hubungi Kami</a>
                        </li> --}}
                      </ul>
                  </div>
                </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
      </div>
      <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>


{{-- <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PT Anak Bungsu Indonesia Energi<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ route('service') }}" class="{{ request()->is('service') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{ route('product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Produk</a></li>
          <li><a href="">Client</a></li>
          <li><a href="blog.html">Article</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header> --}}