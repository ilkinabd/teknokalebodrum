<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{--  <title>Teknokale Bodrum - @yield('title')</title>--}}
  <!-- Primary Meta Tags -->
  <title>Kale Kilit Bodrum Yetkili Bayi ve Yetkili Servisi - Teknokale Bodrum</title>
  <meta name="title" content="Kale Kilit Bodrum Yetkili Bayi ve Yetkili Servisi - Teknokale Bodrum">
  <meta name="description"
        content="Tekno Kale, Bodrum şehrinde anahtar, kilit, çilingir ve güvenlik sistemleriyle ilgili hizmetler sunan bir firmadır. Evler, iş yerleri, oteller ve diğer yerlerde güvenlik ekipmanlarının kurulumu, tamiri ve değişimi gibi işlemleri gerçekleştirmektedir. Tekno Kalenin, Bodrum'da müşterilerine hizmet verirken, yüksek kaliteli ürünler ve profesyonel hizmetler sunarak güvenilir bir iş ortağı olmaya çalışır.">
  <meta name="color-scheme" content="light only">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Kale Kilit Bodrum Yetkili Bayi ve Yetkili Servisi - Teknokale Bodrum">
  <meta property="og:description"
        content="Tekno Kale, Bodrum şehrinde anahtar, kilit, çilingir ve güvenlik sistemleriyle ilgili hizmetler sunan bir firmadır. Evler, iş yerleri, oteller ve diğer yerlerde güvenlik ekipmanlarının kurulumu, tamiri ve değişimi gibi işlemleri gerçekleştirmektedir. Tekno Kalenin, Bodrum'da müşterilerine hizmet verirken, yüksek kaliteli ürünler ve profesyonel hizmetler sunarak güvenilir bir iş ortağı olmaya çalışır.">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Kale Kilit Bodrum Yetkili Bayi ve Yetkili Servisi - Teknokale Bodrum">
  <meta property="twitter:description"
        content="Tekno Kale, Bodrum şehrinde anahtar, kilit, çilingir ve güvenlik sistemleriyle ilgili hizmetler sunan bir firmadır. Evler, iş yerleri, oteller ve diğer yerlerde güvenlik ekipmanlarının kurulumu, tamiri ve değişimi gibi işlemleri gerçekleştirmektedir. Tekno Kalenin, Bodrum'da müşterilerine hizmet verirken, yüksek kaliteli ürünler ve profesyonel hizmetler sunarak güvenilir bir iş ortağı olmaya çalışır.">
  <meta property="twitter:image" content="">
  @include('head')
</head>

<body>
@include('header')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2 data-aos="fade-down" style="text-align: center">{{__('home.bodrum_yarimadasinda_hizmet_vermekteyiz')}}</h2>
          <div class="row service-container g-3 justify-content-center">
            <p class="text-center" style="color: white;z-index: 99"><i><small>”Detaylar için; aradığınız hizmetin üzerine tıklayınız.“</small></i></p>
            @yield('services')
          </div>
        </div>
      </div>
    </div>
  </div>

  {{--  @yield('carousel')--}}

</section><!-- End Hero Section -->

<main id="main">

  @yield('content')

</main><!-- End #main -->
@include('footer')
</body>

</html>

