@extends('layouts.mainOrdinary')

@section('title','Kale Çelik Kasa Hizmetleri')
@section("meta")
  <!-- Primary Meta Tags -->
  <title>Kale Çelik Kasa Hizmetleri - Teknokale Bodrum</title>
  <meta name="title" content="Kale Çelik Kasa Hizmetleri - Teknokale Bodrum">
  <meta name="description" content="Tekno Kale @ Kale Çelik Kasa iştirakı olup Bodrum Yetkili Bayi ve Yetkili Servisidir.Kale Çelik kasaların yetkili elden Satışı Nakliyesi ve Onarım hizmetlerini Garantili olarak sunmaktadır.Kale Çelik Kasaya ait verdiğimiz hizmetler aşağıda bilginize sunulmuştur;">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Kale Çelik Kasa Hizmetleri - Teknokale Bodrum">
  <meta property="og:description" content="Tekno Kale @ Kale Çelik Kasa iştirakı olup Bodrum Yetkili Bayi ve Yetkili Servisidir.Kale Çelik kasaların yetkili elden Satışı Nakliyesi ve Onarım hizmetlerini Garantili olarak sunmaktadır.Kale Çelik Kasaya ait verdiğimiz hizmetler aşağıda bilginize sunulmuştur;">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Kale Çelik Kasa Hizmetleri - Teknokale Bodrum">
  <meta property="twitter:description" content="Tekno Kale @ Kale Çelik Kasa iştirakı olup Bodrum Yetkili Bayi ve Yetkili Servisidir.Kale Çelik kasaların yetkili elden Satışı Nakliyesi ve Onarım hizmetlerini Garantili olarak sunmaktadır.Kale Çelik Kasaya ait verdiğimiz hizmetler aşağıda bilginize sunulmuştur;">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>Kale Çelik Kasa Hizmetleri</li>
  </ol>
@endsection

@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <div class="d-flex justify-content-center d-md-none mobile-logos mt-4">
          <img class="" src="{{asset('storage/assets/img/services/teknokale.jpg')}}" alt="teknokale">
          <img class="ms-2" src="{{asset('storage/assets/img/services/kale-celik-kasa.jpg')}}" alt="kale-celik-kasa">
        </div>
        <div class="service-desc">
          <p class="text-center mb-0">
            Tekno Kale @ Kale Çelik Kasa iştirakı olup Bodrum Yetkili Bayi ve Yetkili Servisidir.
            Kale Çelik kasaların yetkili elden Satışı Nakliyesi ve Onarım hizmetlerini Garantili olarak sunmaktadır.
            Kale Çelik Kasaya ait verdiğimiz hizmetler aşağıda bilginize sunulmuştur;
          </p>
          <img class="d-none d-md-inline" style="position:absolute;right: 6px;top: 10px"
               src="{{asset('storage/assets/img/services/teknokale.jpg')}}"
               alt="kale-kilit">
          <img class="d-none d-md-inline" style="position:absolute;left: 6px;top: 10px"
               src="{{asset('storage/assets/img/services/kale-celik-kasa.jpg')}}"
               alt="kale-kilit">
        </div>
        <div class="row gy-5 px-2">
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-key"></i>
              </div>
              <p class="mb-0 ms-2">Aracısız Kasa Satışı ve Direkt Fabrikadan Ürün Temin Avantajı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <p class="mb-0 ms-2">Tüm Kale Çelik Kasa Modellerine Garantili Çilingirlik Hizmeti</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-lock"></i>
              </div>
              <p class="mb-0 ms-2">Tüm Kasa Modelleri İçin Kurulum, Duvara veya Dolaba Montaj Hizmeti</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-open"></i>
              </div>
              <p class="mb-0 ms-2">Ağır Kasalar İçin Nakliye, Eve ve Ofise Aldırma Hizmeti</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-car-battery"></i>
              </div>
              <p class="mb-0 ms-2">Kasa Boyama, Kapak Onarımı ve Kilit Sistemi Onarımı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-closed"></i>
              </div>
              <p class="mb-0 ms-2">Kasalar için Anahtar Temini ve Kopyalanması</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-lock-open"></i>
              </div>
              <p class="mb-0 ms-2">İkinci El Kasa Alım Satımı (Kale Çelik Kasalar İçin)</p>
            </div>
          </div>
        </div>
        <p class="my-4 text-center">Yarım asrı aşan tecrübesi, kurumsal yönetimi, kaliteden taviz vermeyen üretim
          anlayışı, dinamik ve
          güçlü yapısı ile Kale Çelik Eşya; her geçen gün yatırımlarına hız vererek büyümeye, ulusal,
          uluslararası ve bölgesel yatırım gücüyle ülke ekonomisine ciddi katkı sağlamaya,
          sanayi üretiminde önemli bir rol oynamaya devam ediyor. Türkiye'de çelik kasa sektörünü
          yaratarak yepyeni bir iş alanı yaratan ve bu konuda en çok bilinen ve üst düzey marka
          olarak tercih edilen Kale Çelik Kasa markasıyla hem bireysel tüketici hem de
          projelere yönelik özel çelik kasa modelleri üretiyor.
        </p>
        <h4 class="mb-4">Öne çıkan bazı ürünler : </h4>
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
        <p>Daha fazla ürün için <a href="{{route('products')}}">ürünler sayfamıza göz atın.</a></p>
        <p>Sipariş ve Servis talepleri için <a href="{{route('contact')}}">bize ulaşın.</a></p>
        <p>Yapılan çalışmalardan haberdar olmak isterseniz <a href="javascript:void(0)">Referanslar sayfamıza göz
            atabilirsiniz.</a></p>
      </div>
    </div>
  </div>
@endsection
