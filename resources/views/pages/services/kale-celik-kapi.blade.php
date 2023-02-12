@extends('layouts.mainOrdinary')

@section('title','Kale Çelik Kapı Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <p class="service-desc text-center">
          Tekno Kale @ Kale Çelik Kapı iştirakı olup Bodrum yetkili satıcısı ve yetkili servisidir
          Kale Çelik kapıların satış sonrası her türlü servis ve tedarik sürecinde garantili hizmetler sunmaktadır
          Kale Çelik Kapıları ait hizmetler aşağıda bilginize sunulmuştur;
        </p>
        <div class="row gy-5 px-2">
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-key"></i>
              </div>
              <p class="mb-0 ms-2">Yüksek Güvenlik Kilit Değişimi ve Anahtar Tedariği</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <p class="mb-0 ms-2">Yüksek Güvenlik Kapı Açımı Çilingir Servisi</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-lock"></i>
              </div>
              <p class="mb-0">Çelik Kapılara Ait Tüm Aksesuarlarının Aracısız Temini ve Montajı</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-open"></i>
              </div>
              <p class="mb-0">İç ve Dış Cephe Pervaz ve Panel Değişimleri</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-car-battery"></i>
              </div>
              <p class="mb-0">Kapı Revizesi (Boyama Kumlama Montaj ve de Montaj)</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-door-closed"></i>
              </div>
              <p class="mb-0">Kapı Yükseltme, Conta, Süpürgelik ve Damlalık Montajı</p>
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
        <p>Daha fazla ürün için <a href="{{route('products')}}">ürünler sayfamıza göz atın.</a></p>
        <p>Sipariş ve Servis talepleri için <a href="{{route('contact')}}">bize ulaşın.</a></p>
        <p>Yapılan çalışmalardan haberdar olmak isterseniz <a href="javascript:void(0)">Referanslar sayfamıza göz
            atabilirsiniz.</a></p>
        <div class="text-center d-none d-lg-inline" style="position:absolute;right: 0;top: 0">
          <img class="flex-shrink-0" style="width: 70px" src="{{asset('storage/assets/img/logo.png')}}"
               alt="kale-kilit">
        </div>
        <div class="text-center d-none d-lg-inline" style="position:absolute;left: -4px;top: 12px">
          <img class="flex-shrink-0" style="width: 103px" src="{{asset('storage/assets/img/services/kale-celik-kapi.jpg')}}"
               alt="kale-kilit">
        </div>
      </div>
    </div>
  </div>
@endsection
