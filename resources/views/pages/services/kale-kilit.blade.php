@extends('layouts.mainOrdinary')

@section('title','Kale Kilit Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
      <p class="mb-0">
        Tekno Kale @ Kale Kilit iştirakı olup Bodrum bölge bayisi ve yetkili servisidir <br>
        Anahtarcılık hizmetleri kapsamında aşağıda listelenen hizmetleri garantili şekilde <br>
        icra etmekte, müşteri memnuniyyetini en üst düzeyde tutmayı kendine hedef edinmiştir <br>
        Anahtarcılık hizmetlerimiz aşağıda bilginize sunulmuştur ; <br>
      </p>
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
    </div>
    <div>
      <ul>
        <li>Anahtar Kopyalama</li>
        <li>Master ve Bölgesel Anahtar Yapımı</li>
        <li>Aracısız Fabrikadan Kilit ve Hırdavat Ürünlerinin Temini, Satışı ve Montajı</li>
        <li>Bölgesel Çilingir Servisi (Kapı ve Kasa için)<br>Bodrum Gümbet Konacık Bitez</li>
        <li>Otomat Elektrotetik, Şifrematik, Basgeç Yetkili Elden Satışı ve Montajı</li>
        <li>Kapı Yayı, Hidrolik, Bahçe Yayı ve Otomatik Kapatıcıların Satışı ve Montajı</li>
        <li>Hasarlı Kilitlerin Onarımı ve Yedek Parça Temini</li>
        <li>Kilitlenmeyen ve Kapanmayan Kapıların Onarımı <br> Kapılar İçin; Menteşe Ayarı, Dil Ayarı, Eksen ve Kasnak Ayarları</li>
        <li>Ekstra Güvenlikli Kilitlerin Satışı ve Montajı <br>Güvenlikli Kilitlerin Anahtar Yapımı</li>
        <li></li>
      </ul>
    </div>
    <h3>Öne çıkan bazı ürünler : </h3>
    <div class="d-flex mb-3">
      <div class="service-product"></div>
      <div class="service-product ms-3"></div>
      <div class="service-product ms-3"></div>
      <div class="service-product ms-3"></div>
    </div>
    <p>Daha fazla ürün için <a href="#">ürünler sayfamıza  göz atın.</a></p>
    <p>Sipariş ve Servis talepleri için <a href="">bize ulaşın.</a></p>
    <p>Yapılan çalışmalardan haberdar olmak isterseniz <a href="">Referanslar sayfamıza göz atabilirsiniz.</a></p>
  </div>
@endsection
