<footer class="site-footer style-1" id="footer">
		
  <div class="container">
    <div class="row">
      <div class="col-lg-5 aos-item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" style="">
        <div class="footer-bg" style="background-image: url(/frontend/images/image1.jpeg);"></div> 
        @isset($banner)
         <div class="footer-bg" style=" background-image: url('{{ Storage::url('banners/'. $banner->image) }}');"></div> 
        @endisset
      </div>
      <div class="col-lg-7">
        <div class="footer-top">
          <div class="row">
            <div class="col-md-12 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <div class="footer-logo logo-light">
                <a href="{{ route('home') }}"><img src="/frontend/images/logo-white.png" alt="Footer Logo"></a>
              </div>
            </div>	
            <div class="col-md-5 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
              <div class="widget widget_services">
                <h4 class="footer-title">Menu</h4>
                <ul>
                  <li><a href="{{ route('home') }}">Beranda</a></li>
                  <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                  <li><a href="{{ route('service') }}">Layanan</a></li>
                  <li><a href="{{ route('product') }}">Produk</a></li>
                  <li><a href="{{ route('article') }}">Blog</a></li>
                  <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                  {{-- <li><a href="team.html">Team</a></li> --}}
                </ul>
              </div>
            </div>
            <div class="col-md-7 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
              <div class="widget widget_about">
                <h4 class="footer-title">Tentang Kami</h4>
                @if ($about)
                  <p>{!! Str::limit($about->about_us_summary, 200, ' ...') !!}</p>
                @else
                  <p>Tidak ada data yang ditampilkan!</p>
                @endif
                
                <ul class="social-list style-1">
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
    </div>
  </div>
  <!-- footer bottom part -->
  <div class="footer-bottom">
      <div class="container">
          <div class="row align-items-center">
    <div class="col-md-6 text-center text-md-start"> 
      <span class="copyright-text">© 2024 <a href="javascript:void0;" class="text-primary">Abie</a> All rights reserved.</span>
    </div>
    <div class="col-md-6 text-center text-md-end"> 
      {{-- <ul class="footer-link d-inline-block">
        <li><a href="javascript:void(0);">Privacy Policy</a></li>
        <li><a href="javascript:void(0);">Team & Condition</a></li>
      </ul> --}}
    </div>
          </div>
      </div>
  </div>
</footer>