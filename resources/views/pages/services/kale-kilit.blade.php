@extends('layouts.mainOrdinary')

@section('title','Kale Kilit Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <p class="my-4 service-desc">
          Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir
          Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde
          icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir
          Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ;
        </p>
        <ul class="list-group mb-4">
          <li class="list-group-item">Anahtar Kopyalama</li>
          <li class="list-group-item">Master ve Bölgesel Anahtar Yapımı</li>
          <li class="list-group-item">Aracısız Fabrikadan Kilit ve Hırdavat Ürünlerinin Temini, Satışı ve Montajı</li>
          <li class="list-group-item">Bölgesel Çilingir Servisi (Kapı ve Kasa için)<br>Bodrum Gümbet Konacık Bitez</li>
          <li class="list-group-item">Otomat Elektrotetik, Şifrematik, Basgeç Yetkili Elden Satışı ve Montajı</li>
          <li class="list-group-item">Kapı Yayı, Hidrolik, Bahçe Yayı ve Otomatik Kapatıcıların Satışı ve Montajı</li>
          <li class="list-group-item">Hasarlı Kilitlerin Onarımı ve Yedek Parça Temini</li>
          <li class="list-group-item">Kilitlenmeyen ve Kapanmayan Kapıların Onarımı <br> Kapılar İçin; Menteşe Ayarı,
            Dil Ayarı, Eksen ve Kasnak Ayarları
          </li>
          <li class="list-group-item">Ekstra Güvenlikli Kilitlerin Satışı ve Montajı <br>Güvenlikli Kilitlerin Anahtar
            Yapımı
          </li>
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
        <div class="text-center d-none d-lg-inline" style="position:absolute;left: 0;top: 6px">
          <img class="flex-shrink-0" style="width: 100px" src="{{asset('storage/assets/img/services/kale-kilit.jpg')}}"
               alt="kale-kilit">
        </div>
      </div>
    </div>
  </div>
@endsection
