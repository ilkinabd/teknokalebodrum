<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Teknokale Bodrum - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="{{asset('storage/assets/css/main.css')}}" rel="stylesheet">

  <style>
      .accordion-category .list-group .list-group {
          margin-left: 16px;
      }
      .accordion-category .list-group-item-action:focus, .list-group-item-action:hover {
          color: var(--color-primary);
          text-decoration: none;
          background-color: inherit;
      }

      .accordion-category .list-group-item.active {
          z-index: 2;
          color: var(--color-primary);
          background-color: inherit;
          border-color: inherit;
      }

      .accordion-category .list-group-item + .list-group-item.active {
          margin-top: 0;
          border-top-width: 0;
      }

      .accordion-category .list-group-flush > .list-group-item {
          border-width: 0 0 0 0;
      }

      .accordion-category .accordion-button:focus {
          border-color: inherit;
          box-shadow: inherit;
      }

      .accordion-category .accordion-button:not(.collapsed) {
          color: #fff;
          background-color: var(--color-primary);
          box-shadow: inherit;
      }

      .accordion-category .accordion-button:not(.collapsed)::after {
          background-image: url("{{asset('storage/assets/img/arrow-up.svg')}}");

      }

      .accordion-category .accordion-button::after {
          background-image: url("{{asset('storage/assets/img/arrow-up-primary.svg')}}");
      }

      .accordion-category .accordion-body {
          padding: 0;
      }

      .accordion-category .list-group-item {
          padding: 8px 20px;
      }

      .accordion-category .list-group-item.list-group-item-action .arrow {
          transition: var(--bs-accordion-btn-icon-transition);
      }

      .accordion-category .list-group-item.list-group-item-action:not(.collapsed) .arrow {
          transform: var(--bs-accordion-btn-icon-transform);
      }
  </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>Teknokale<span> bodrum</span></h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}">Ana sayfa</a></li>
        <li><a href="javascript:void(0);">Hakkımızda</a></li>
        <!--          <li><a href="services.html">Hizmetlerimiz</a></li>-->
        <li><a href="/urunler" class="active">Ürünler</a></li>
        <li><a href="javascript:void(0);">Haberler</a></li>
        <li class="dropdown"><a href="javascript:void(0)"><span>Hizmetlerimiz</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="javascript:void(0);">Hizmet 1</a></li>
            <!--              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>-->
            <!--                <ul>-->
            <!--                  <li><a href="#">Deep Dropdown 1</a></li>-->
            <!--                  <li><a href="#">Deep Dropdown 2</a></li>-->
            <!--                  <li><a href="#">Deep Dropdown 3</a></li>-->
            <!--                  <li><a href="#">Deep Dropdown 4</a></li>-->
            <!--                  <li><a href="#">Deep Dropdown 5</a></li>-->
            <!--                </ul>-->
            <!--              </li>-->
            <li><a href="javascript:void(0);">Hizmet 2</a></li>
            <!--              <li><a href="#">Dropdown 3</a></li>-->
            <!--              <li><a href="#">Dropdown 4</a></li>-->
          </ul>
        </li>
        <li><a href="javascript:void(0);">İletişim</a></li>
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
            <h3>UpConstruction</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
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

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>

