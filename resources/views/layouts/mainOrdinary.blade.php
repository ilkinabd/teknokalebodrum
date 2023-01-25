<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{--  <title>Teknokale Bodrum - @yield('title')</title>--}}
  <!-- Primary Meta Tags -->
  <title>Kaliteli ve Güvenli Kilitler - Teknokale Bodrum</title>
  <meta name="title" content="Kaliteli ve Güvenli Kilitler - Teknokale Bodrum">
  <meta name="description"
        content="Teknokale Bodrum, müşteri odaklı üretim ve hizmet misyonu ile yüksek iş ahlakı ve dürüst çalışma ilkelerini birleştirerek, kalite, güven ve garanti anlayışını dünyaya taşımak üzere 1974 yılında Türkiye'nin ilk kilit ihraç eden şirketi olmuştur.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Kaliteli ve Güvenli Kilitler - Teknokale Bodrum">
  <meta property="og:description"
        content="Teknokale Bodrum, müşteri odaklı üretim ve hizmet misyonu ile yüksek iş ahlakı ve dürüst çalışma ilkelerini birleştirerek, kalite, güven ve garanti anlayışını dünyaya taşımak üzere 1974 yılında Türkiye'nin ilk kilit ihraç eden şirketi olmuştur.">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Kaliteli ve Güvenli Kilitler - Teknokale Bodrum">
  <meta property="twitter:description"
        content="Teknokale Bodrum, müşteri odaklı üretim ve hizmet misyonu ile yüksek iş ahlakı ve dürüst çalışma ilkelerini birleştirerek, kalite, güven ve garanti anlayışını dünyaya taşımak üzere 1974 yılında Türkiye'nin ilk kilit ihraç eden şirketi olmuştur.">
  <meta property="twitter:image" content="">

  <!-- Favicons -->
  <link href="{{asset('storage/assets/img/favicon.ico')}}" rel="icon">
  <link href="{{asset('storage/assets/img/favicon.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('storage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('storage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('storage/assets/css/main.css')}}?v=2" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <img src="{{asset('storage/assets/img/logo.png')}}" style="width: 32px" alt="">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <div style="line-height: 12px">
        <h1>Teknokale</h1>
        <small class="mb-0 d-none d-md-block">Kilit sistemleri Bilişim ve Güvenlik Teknolojileri</small>
      </div>
    </a>


    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}">Ana sayfa</a></li>
        <li><a href="javascript:void(0);">Hakkımızda</a></li>
        <!--          <li><a href="services.html">Hizmetlerimiz</a></li>-->
        <li><a href="/urunler" class="{{ (strpos(Route::currentRouteName(), 'products') !== false) ? 'active' : '' }}">Ürünler</a>
        </li>
        <li><a href="javascript:void(0);">Haberler</a></li>
        <li class="dropdown"><a href="javascript:void(0)"><span>Hizmetlerimiz</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          {{--          <ul>--}}
          {{--            <li><a href="javascript:void(0);">Hizmet 1</a></li>--}}
          {{--            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i--}}
          {{--                  class="bi bi-chevron-down dropdown-indicator"></i></a>-->--}}
          {{--              <ul>--}}
          {{--                <li><a href="#">Deep Dropdown 1</a></li>--}}
          {{--                <li><a href="#">Deep Dropdown 2</a></li>--}}
          {{--                <li><a href="#">Deep Dropdown 3</a></li>--}}
          {{--                <li><a href="#">Deep Dropdown 4</a></li>--}}
          {{--                <li><a href="#">Deep Dropdown 5</a></li>--}}
          {{--              </ul>--}}
          {{--            </li>--}}
          {{--            <li><a href="javascript:void(0);">Hizmet 2</a></li>--}}
          {{--            <li><a href="#">Dropdown 3</a></li>--}}
          {{--            <li><a href="#">Dropdown 4</a></li>--}}
          {{--          </ul>--}}
        </li>
        <li><a href="{{route('contact')}}"
               class="{{ (strpos(Route::currentRouteName(), 'contact') !== false) ? 'active' : '' }}">İletişim</a></li>
        <li id="google_translate_element"></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
       style="background-image: url('{{asset('storage/assets/img/kale-og.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>@yield('title')</h2>

      @yield('breadcrumbs')

    </div>
  </div><!-- End Breadcrumbs -->

  @yield('content')

</main><!-- End #main -->

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
          {{--          <ul>--}}
          {{--            <li><a href="#">Web Design</a></li>--}}
          {{--            <li><a href="#">Web Development</a></li>--}}
          {{--            <li><a href="#">Product Management</a></li>--}}
          {{--            <li><a href="#">Marketing</a></li>--}}
          {{--            <li><a href="#">Graphic Design</a></li>--}}
          {{--          </ul>--}}
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
        const langElement = document.querySelector('.goog-te-menu-value>span:nth-of-type(1)');
        console.log(langElement);
        setTimeout(() => {
            langElement.innerHTML = 'TR';
        }, 1000)
    }
</script>

<!-- Template Main JS File -->
<script src="{{asset('storage/assets/js/main.js')}}"></script>
@yield('scripts')
</body>

</html>

