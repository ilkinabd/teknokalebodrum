@extends('layouts.mainOrdinary')

@section('title','Kale Kilit Hizmetleri')

@section("meta")
  <!-- Primary Meta Tags -->
  <title>Kale Kilit Hizmetleri - Teknokale Bodrum</title>
  <meta name="title" content="Kale Kilit Hizmetleri - Teknokale Bodrum">
  <meta name="description" content="Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir. Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir. Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ;">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Kale Kilit Hizmetleri - Teknokale Bodrum">
  <meta property="og:description" content="Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir. Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir. Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ;">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Kale Kilit Hizmetleri - Teknokale Bodrum">
  <meta property="twitter:description" content="Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir. Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir. Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ;">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>Kale Kilit Hizmetleri</li>
  </ol>
@endsection

@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <div class="d-flex justify-content-center d-md-none mobile-logos mt-4">
          <img class="" src="{{asset('storage/assets/img/services/teknokale.jpg')}}" alt="teknokale">
          <img class="ms-2" src="{{asset('storage/assets/img/services/kale-kilit.jpg')}}" alt="kale-kilit">
        </div>
        <div class="service-desc">
          <p class="text-center mb-0">
            Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir
            Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde
            icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir
            Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ;
          </p>
          <img class="d-none d-md-inline" style="position:absolute;right: 6px;top: 10px" src="{{asset('storage/assets/img/services/teknokale.jpg')}}"
               alt="teknokale">
          <img class="d-none d-md-inline" style="position:absolute;left: 6px;top: 10px" src="{{asset('storage/assets/img/services/kale-kilit.jpg')}}"
               alt="kale-kilit">
        </div>
        <div class="row gy-5 px-2">
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-key"></i>
              </div>
              <p class="mb-0 ms-2">Anahtar Kopyalama</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <p class="mb-0 ms-2">Master ve Bölgesel Anahtar Yapımı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-lock"></i>
              </div>
              <p class="mb-0">Aracısız Fabrikadan Kilit ve Hırdavat Ürünlerinin Temini, Satışı ve Montajı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-open"></i>
              </div>
              <p class="mb-0">Bölgesel Çilingir Servisi (Kapı ve Kasa için) Bodrum Gümbet Konacık Bitez</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-car-battery"></i>
              </div>
              <p class="mb-0">Otomat Elektrotetik, Şifrematik, Basgeç Yetkili Elden Satışı ve Montajı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-closed"></i>
              </div>
              <p class="mb-0">Kapı Yayı, Hidrolik, Bahçe Yayı ve Otomatik Kapatıcıların Satışı ve Montajı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-lock-open"></i>
              </div>
              <p class="mb-0">Hasarlı Kilitlerin Onarımı ve Yedek Parça Temini</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-gear"></i>
              </div>
              <p class="mb-0">Kilitlenmeyen ve Kapanmayan Kapıların Onarımı Kapılar İçin; Menteşe Ayarı,
                Dil Ayarı, Eksen ve Kasnak Ayarları</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-thumbtack"></i>
              </div>
              <p class="mb-0">Ekstra Güvenlikli Kilitlerin Satışı ve Montajı <br>Güvenlikli Kilitlerin Anahtar
                Yapımı</p>
            </div>
          </div>
        </div>
        <h4 class="service-product-title">Öne çıkan bazı ürünler : </h4>
        <div class="row portfolio-container mb-4">
          @foreach($products as $product)
            @if(isset(json_decode($product['images'])[0]))
              @php($image = json_decode($product['images'])[0])
              <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling mt-3 mt-lg-0">
                <div class="portfolio-content h-100">
                  <img src="{{$image}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{$product['product_code']}} {{$product['title']}}</h4>
                    <a href="{{$image}}"
                       data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a
                      href="{{route('products.detail',['category'=>$product["category"]["slug"],'product'=>$product["slug"]])}}"
                      title="More Details"
                      class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
            @endif
          @endforeach
        </div>
        @include('servicesFooter')
      </div>
    </div>
  </div>
@endsection
