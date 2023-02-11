@extends('layouts.mainOrdinary')

@section('title','Kale Çelik Kapı Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <p class="my-4 service-desc">
          Tekno Kale @ Kale Çelik Kapı iştirakı olup Bodrum yetkili satıcısı ve yetkili servisidir
          Kale Çelik kapıların satış sonrası her türlü servis ve tedarik sürecinde garantili hizmetler sunmaktadır
          Kale Çelik Kapıları ait hizmetler aşağıda bilginize sunulmuştur;
        </p>
        <ul class="list-group mb-4">
          <li class="list-group-item">Yüksek Güvenlik Kilit Değişimi ve Anahtar Tedariği</li>
          <li class="list-group-item">Yüksek Güvenlik Kapı Açımı Çilingir Servisi</li>
          <li class="list-group-item">Çelik Kapılara Ait Tüm Aksesuarlarının Aracısız Temini ve Montajı</li>
          <li class="list-group-item">İç ve Dış Cephe Pervaz ve Panel Değişimleri</li>
          <li class="list-group-item">Kapı Revizesi (Boyama Kumlama Montaj ve de Montaj)</li>
          <li class="list-group-item">Kapı Yükseltme, Conta, Süpürgelik ve Damlalık Montajı</li>
          <li class="list-group-item">Kale Kapıların Dil Ayarı, Menteş Ayarı ve Kasnak Ayarlamaları</li>
          <li class="list-group-item">Düzgün Kapanmayan Kapıların Onarımı ve Kilit Tamirleri</li>
        </ul>
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

