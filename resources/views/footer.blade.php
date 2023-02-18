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
          <h4>{{__('footer.faydali_linkler')}}</h4>
          <ul>
            <li><a href="javascript:void(0)">{{__('footer.ana_sayfa')}}</a></li>
            <li><a href="javascript:void(0)">{{__('footer.biz_kimiz')}}</a></li>
            <li><a href="javascript:void(0)">{{__('footer.hizmetlerimiz')}}</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{__('footer.hizmetlerimiz')}}</h4>
          <ul>
            @foreach($services as $service)
              <li><a
                  href="{{route('services.detail',['slug'=>'kale-kilit'])}}">{{$service->getTranslatedAttribute('seo_title')}}</a>
              </li>
            @endforeach
          </ul>
        </div><!-- End footer links column-->
      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Teknokale bodrum</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
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

<!-- Template Main JS File -->
<script src="{{asset('storage/assets/js/main.js')}}"></script>
@yield('scripts')
