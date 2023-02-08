@extends('layouts.mainOrdinary')

@section('title','Kale Çelik Kasa Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
      <p class="mb-0">

        Tekno Kale @ Kale Çelik Kasa iştirakı olup Bodrum Yetkili Bayi ve Yetkili Servisidir.<br>
        Kale Çelik kasaların yetkili elden Satışı Nakliyesi ve Onarım hizmetlerini Garantili olarak sunmaktadır. <br>
        Kale Çelik Kasaya ait verdiğimiz hizmetler aşağıda bilginize sunulmuştur; <br>
      </p>
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
    </div>
    <div>
      <ul>
        <li>Aracısız Kasa Satışı ve Direkt Fabrikadan Ürün Temin Avantajı</li>
        <li>Tüm Kale Çelik Kasa Modellerine Garantili Çilingirlik Hizmeti</li>
        <li>Tüm Kasa Modelleri İçin Kurulum, Duvara veya Dolaba Montaj Hizmeti</li>
        <li>Ağır Kasalar İçin Nakliye, Eve ve Ofise Aldırma Hizmeti</li>
        <li>Kasa Boyama, Kapak Onarımı ve Kilit Sistemi Onarımı</li>
        <li>Kasalar için Anahtar Temini ve Kopyalanması</li>
        <li>İkinci El Kasa Alım Satımı (Kale Çelik Kasalar İçin)</li>
      </ul>
      <p>Yarım asrı aşan tecrübesi, kurumsal yönetimi, kaliteden taviz vermeyen üretim anlayışı, dinamik ve
        güçlü yapısı ile Kale Çelik Eşya; her geçen gün yatırımlarına hız vererek büyümeye, ulusal,
        uluslararası ve bölgesel yatırım gücüyle ülke ekonomisine ciddi katkı sağlamaya,
        sanayi üretiminde önemli bir rol oynamaya devam ediyor. Türkiye'de çelik kasa sektörünü
        yaratarak yepyeni bir iş alanı yaratan ve bu konuda en çok bilinen ve üst düzey marka
        olarak tercih edilen Kale Çelik Kasa markasıyla hem bireysel tüketici hem de
        projelere yönelik özel çelik kasa modelleri üretiyor.
      </p>
    </div>
    <h3>Bazı Çelik Kasa Modelleri : </h3>
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
