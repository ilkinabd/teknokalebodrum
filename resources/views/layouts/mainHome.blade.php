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
  <meta name="color-scheme" content="light only">
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
  @include('head')
</head>

<body>
@include('header')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero" style="background-image: url('{{asset('storage/assets/img/kale-og.jpg')}}');">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2 data-aos="fade-down" style="text-align: center">Bodrum yarımadasında hizmet vermekteyiz</h2>
          <div class="row service-container g-3 justify-content-center">
            @yield('services')
          </div>
          {{--          <p data-aos="fade-up">Üretim, istihdam ve ihracat rakamlarının yanı sıra dünya pazarlarındaki rekabet gücü ile--}}
          {{--            de--}}
          {{--            Türkiye ekonomisinin güçlü oyuncusu olan Kale Kilit’in temelleri, 1953 yılında Sadık Özgür tarafından--}}
          {{--            atıldı.</p>--}}
          {{--          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">İletişime Geç</a>--}}
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

