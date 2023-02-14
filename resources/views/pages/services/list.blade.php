@extends('layouts.mainOrdinary')

@section('title','Hizmetlerimiz')
@section("meta")
  <!-- Primary Meta Tags -->
  <title>Hizmetlerimiz - Teknokale Bodrum</title>
  <meta name="title" content="Hizmetlerimiz - Teknokale Bodrum">
  <meta name="description" content="Hizmetlerimiz">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="Hizmetlerimiz - Teknokale Bodrum">
  <meta property="og:description"
        content="nrası her türlü servis ve tedarik sürecinde garantili hizmetler sunmaktadır.Kale Çelik Kapıları ait hizmetler aşağıda bilginize sunulmuştur;">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="Hizmetlerimiz - Teknokale Bodrum">
  <meta property="twitter:description"
        content="Tekno Kale @ Kale Çelik Kapı iştirakı olup Bodrum yetkili satıcısı ve yetkili servisidir.Kale Çelik kapıların satış sonrası her türlü servis ve tedarik sürecinde garantili hizmetler sunmaktadır.Kale Çelik Kapıları ait hizmetler aşağıda bilginize sunulmuştur;">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>Hizmetlerimiz</li>
  </ol>
@endsection

@section('content')
  <div class="container">
    <div class="row service-container bordered g-3 justify-content-center py-5">
      @foreach($services as $service)
        <a class="col-lg-4" href="{{route("services.detail",["slug" => $service["slug"]])}}" data-aos="fade-up">
          <span class="d-flex p-2 item align-items-center" style="border-radius: 4px">
            <span class="image flex-shrink-0 d-flex align-items-center">
              <img style="width: 100px" src="{{asset('storage/assets/img/services/' . $service['image'])}}"
                   alt="{{$service['image']}}" />
            </span>
            <span class="title px-2">{{$service['title']}}</span>
          </span>
        </a>
      @endforeach
    </div>
  </div>
@endsection

