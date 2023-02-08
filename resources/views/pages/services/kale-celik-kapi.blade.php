@extends('layouts.mainOrdinary')

@section('title','Kale Çelik Kapı Bodrum Yetkili Servisi ve Yetkili Satıcısı')



@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
      <p class="mb-0">
        Tekno Kale @ Kale Çelik Kapı iştirakı olup Bodrum yetkili satıcısı ve yetkili servisidir
        Kale Çelik kapıların satış sonrası her türlü servis ve tedarik sürecinde garantili hizmetler sunmaktadır
        Kale Çelik Kapıları ait hizmetler aşağıda bilginize sunulmuştur; <br>
      </p>
      <img class="flex-shrink-0" style="width: 60px" src="{{asset('storage/assets/img/logo.png')}}" alt="kale-kilit">
    </div>
    <div>
      <ul>
        <li>Yüksek Güvenlik Kilit Değişimi ve Anahtar Tedariği</li>
        <li>Yüksek Güvenlik Kapı Açımı Çilingir Servisi</li>
        <li>Çelik Kapılara Ait Tüm Aksesuarlarının Aracısız Temini ve Montajı</li>
        <li>İç ve Dış Cephe Pervaz ve Panel Değişimleri</li>
        <li>Kapı Revizesi (Boyama Kumlama Montaj ve de Montaj)</li>
        <li>Kapı Yükseltme, Conta, Süpürgelik ve Damlalık Montajı</li>
        <li>Kale Kapıların Dil Ayarı, Menteş Ayarı ve Kasnak Ayarlamaları</li>
        <li>Düzgün Kapanmayan Kapıların Onarımı ve Kilit Tamirleri</li>
      </ul>
    </div>
    <h3>Bazı çelik kapı modelleri : </h3>
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
