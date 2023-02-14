<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Teknokale Bodrum</h3>
            <p>
              Cevat Şakir mah. Hoca Ahmet<br>
              Yesevi cad. No 26/a Bodrum<br><br>
              <strong>Telefon:</strong> <a href="tel:+905524504809">+905524504809</a>, <a href="tel:+902526060615">+902526060615</a><br>
              <strong>Email:</strong> teknokalebodrum@gmail.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Faydalı linkler</h4>
          <ul>
            <li><a href="javascript:void(0)">Ana sayfa</a></li>
            <li><a href="javascript:void(0)">Biz kimiz</a></li>
            <li><a href="javascript:void(0)">Hizmetlerimiz</a></li>
            {{--            <li><a href="#">Terms of service</a></li>--}}
            {{--            <li><a href="#">Privacy policy</a></li>--}}
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hizmetlerimiz</h4>
          <ul>
            <li><a href="{{route('services.detail',['slug'=>'kale-kilit'])}}">Kale Kilit</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-celik-kasa'])}}">Kale Çelik Kasa</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-celik-kapi'])}}">Kale Çelik Kapı</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-alarm'])}}">Kale Alarm</a></li>
          </ul>
        </div><!-- End footer links column-->

        {{--        <div class="col-lg-2 col-md-3 footer-links">--}}
        {{--          <h4>Hic solutasetp</h4>--}}
        {{--          <ul>--}}
        {{--            <li><a href="#">Molestiae accusamus iure</a></li>--}}
        {{--            <li><a href="#">Excepturi dignissimos</a></li>--}}
        {{--            <li><a href="#">Suscipit distinctio</a></li>--}}
        {{--            <li><a href="#">Dilecta</a></li>--}}
        {{--            <li><a href="#">Sit quas consectetur</a></li>--}}
        {{--          </ul>--}}
        {{--        </div><!-- End footer links column-->--}}

        {{--        <div class="col-lg-2 col-md-3 footer-links">--}}
        {{--          <h4>Nobis illum</h4>--}}
        {{--          <ul>--}}
        {{--            <li><a href="#">Ipsam</a></li>--}}
        {{--            <li><a href="#">Laudantium dolorum</a></li>--}}
        {{--            <li><a href="#">Dinera</a></li>--}}
        {{--            <li><a href="#">Trodelas</a></li>--}}
        {{--            <li><a href="#">Flexo</a></li>--}}
        {{--          </ul>--}}
        {{--        </div><!-- End footer links column-->--}}

      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Teknokale bodrum</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        Designed by <a href="javascript:void(0)">Ilkin</a>
      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<div class="d-flex flex-column contact-us">
  <a href="whatsapp://send?phone=+905524504809&text=Selam teknokale bodrum sitesinden yaziyorum"
     class="d-flex align-items-center justify-content-center"><i
      class="fa-brands fa-whatsapp"></i></a>
  <a href="tel:+905524504809" class="d-flex align-items-center justify-content-center" style="font-size: 22px"><i
      class="fa-solid fa-phone-flip"></i></a>
</div>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('storage/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('storage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('storage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('storage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('storage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('storage/assets/vendor/php-email-form/validate.js')}}"></script>
<script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'tr',
            includedLanguages: 'tr,en,fr,de,ru',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        }, 'google_translate_element');
        // const langElement = document.querySelector('.goog-te-menu-value>span:nth-of-type(1)');
        // setTimeout(() => {
        //     langElement.innerHTML = 'TR';
        // }, 1000)
    }
</script>

<!-- Template Main JS File -->
<script src="{{asset('storage/assets/js/main.js')}}"></script>
@yield('scripts')
