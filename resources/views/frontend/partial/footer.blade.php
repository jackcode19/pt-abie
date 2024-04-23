<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Tentang Kami</h3>
            {{-- <img loading="lazy" width="200px" class="footer-logo" src="/frontend/images/footer-bg.png" alt="Constra"> --}}
              <p>
                Menjadi salah satu Perusahaan Agen Pertamina yang kompeten dalam menjual dan mendisri busikan Bahan Bakar MInyak (BBM) Industri, terdepan akan kualitas dan kuantitas dalam setiap produk dan pelayanannya.
              </p>
            <div class="footer-social">
              <ul>
                <li><a href="" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Informasi</h3>
            <p>
                Samolo Blok 4 No.3 Ciherang<br>
                Kecamatan Karangtengah <br>
                Kabupaten Cianjur - Jawa Barat 43281<br><br>
                <strong>Phone:</strong> 081254267654<br>
                <strong>Email:</strong> ptabienergi@gmail.com<br>
              </p>
          </div><!-- Col end -->

          {{-- <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div><!-- Col end --> --}}

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Layanan</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Perdagangan BBM</a></li>
              <li><a href="service-single.html">Perdagangan Material Bangunan</a></li>
              <li><a href="service-single.html">Perdagangan Logam Material</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, PT Anak Bungsu Indonesia Energi</span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="{{ route('about') }}">Tentang</a></li>
                <li><a href="{{ route('service') }}">Layanan</a></li>
                <li><a href="{{ route('product') }}">Produk</a></li>
                <li><a href="{{ route('article') }}">Artikel</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer>
