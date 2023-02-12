@extends('layouts.mainOrdinary')

@section("meta")
  <!-- Primary Meta Tags -->
  <title>Katalog - Teknokale Bodrum</title>
  <meta name="title" content="Katalog - Teknokale Bodrum">
  <meta name="description" content="Katalog">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Katalog - Teknokale Bodrum">
  <meta property="og:description" content="Katalog">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Katalog - Teknokale Bodrum">
  <meta property="twitter:description" content="Katalog">
  <meta property="twitter:image" content="">
@endsection


@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>
      Katalog
    </li>
  </ol>
@endsection
@section('content')
  <section id="catalog" class="catalog">
    <div class="container">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-3 col-md-6">
          <a href="{{asset('storage/assets/catalog/kale_kilit.pdf')}}" class="d-flex align-items-center catalog-item">
            <i style="font-size: 50px" class="fa-solid fa-file-arrow-down"></i>
            <span class="ms-2">Kale Kilit </span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{asset('storage/assets/catalog/kale_celik_kapi.pdf')}}" class="d-flex align-items-center catalog-item">
            <i style="font-size: 50px" class="fa-solid fa-file-arrow-down"></i>
            <span class="ms-2">Kale Çelik Kapı</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{asset('storage/assets/catalog/kale_celik_kasa.pdf')}}" class="d-flex align-items-center catalog-item">
            <i style="font-size: 50px" class="fa-solid fa-file-arrow-down"></i>
            <span class="ms-2">Kale Çelik Kasa</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{asset('storage/assets/catalog/elektronik_kilit_grubu.pdf')}}" class="d-flex align-items-center catalog-item">
            <i style="font-size: 50px" class="fa-solid fa-file-arrow-down"></i>
            <span class="ms-2">Elektronik kilit grubu</span>
          </a>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection