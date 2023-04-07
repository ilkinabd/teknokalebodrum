<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h2>Tekno Kale Bodrum</h2>
            <p>
              Kilit Sistemleri, Bilişim ve Güvenlik Teknolojileri.<br>
              <strong style="color: var(--color-primary)" class="mt-2">Adres:</strong> Cevat Şakir mah. Hoca Ahmet<br>
              Yesevi cad. No 26/a Bodrum / MUĞLA<br>
              <strong style="color: var(--color-primary)">Telefon:</strong> <a href="tel:+905524504809"
                                                                               style="color: #fff">+905524504809</a>, <a
                href="tel:+902526060615" style="color: #fff">+902526060615</a><br>
              <strong style="color: var(--color-primary)">Email:</strong> teknokalebodrum@gmail.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="https://twitter.com/teknokalebodrum" class="d-flex align-items-center justify-content-center"><i
                  class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/Teknokale.org" class="d-flex align-items-center justify-content-center"><i
                  class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/onurozkanoz/" class="d-flex align-items-center justify-content-center"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/onur-%C3%B6zkan-745939269"
                 class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->


        <div class="col-lg-3 col-md-3 footer-links">
          <h4>{{__('footer.hizmetlerimiz')}}</h4>
          <ul>
            @foreach($services as $service)
              <li><a
                  href="{{route('services.detail',['slug'=>$service->getTranslatedAttribute('slug')])}}">{{$service->getTranslatedAttribute('seo_title')}}</a>
              </li>
            @endforeach
          </ul>

        </div><!-- End footer links column-->

        <div class="col-lg-4">
          <h4>Ofis Konumu</h4>
          <div id="google-maps">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d473.40501569770464!2d27.40763421144538!3d37.041355534401404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be6de6bb9530bb%3A0xc88514ea394682a8!2sTekno%20Kale%20Kilit%20Sistemleri%2C%20Bili%C5%9Fim%20ve%20G%C3%BCvenlik%20Teknolojileri!5e0!3m2!1str!2str!4v1674059187744!5m2!1str!2str"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{--  <div class="footer-legal text-center position-relative">--}}
  {{--    <div class="container">--}}
  {{--      <div class="copyright">--}}
  {{--        &copy; Copyright <strong><span>Teknokale bodrum</span></strong>. All Rights Reserved--}}
  {{--      </div>--}}
  {{--      <div class="credits">--}}
  {{--        Designed by <a href="javascript:void(0)">Ilkin</a>--}}
  {{--      </div>--}}
  {{--    </div>--}}
  {{--  </div>--}}

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
