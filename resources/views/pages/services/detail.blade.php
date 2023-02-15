@extends('layouts.mainOrdinary')

@section('title', $service['seo_title'])
@section("meta")
  <!-- Primary Meta Tags -->
  <title>{{$service['seo_title']}} - Teknokale Bodrum</title>
  <meta name="title" content="{{$service['seo_title']}} - Teknokale Bodrum">
  <meta name="description"
        content="{{$service['intro_text']}}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{route('services.detail',['slug' => $service['slug']])}}">
  <meta property="og:title" content="{{$service['seo_title']}}  - Teknokale Bodrum">
  <meta property="og:description"
        content="{{$service['intro_text']}}">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{route('services.detail',['slug' => $service['slug']])}}">
  <meta property="twitter:title" content="{{$service['seo_title']}} - Teknokale Bodrum">
  <meta property="twitter:description"
        content="{{$service['intro_text']}}">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>{{$service['seo_title']}}</li>
  </ol>
@endsection

@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <div class="d-flex justify-content-center d-md-none mobile-logos mt-4">
          <img class="" src="{{asset('storage/assets/img/services/teknokale.jpg')}}" alt="teknokale">
          <img class="ms-2" src="{{asset('storage/assets/img/services/'.$service['image'])}}" alt="kale-kilit">
        </div>
        <div class="service-desc">
          <p class="text-center mb-0">
            {{$service['intro_text']}}
          </p>
          <img class="d-none d-md-inline" style="position:absolute;right: 6px;top: 10px"
               src="{{asset('storage/assets/img/services/teknokale.jpg')}}"
               alt="{{$service['slug']}}">
          <img class="d-none d-md-inline" style="position:absolute;left: 6px;top: 10px"
               src="{{asset('storage/assets/img/services/'.$service['image'])}}"
               alt="kale-kilit-bodrum">
        </div>
        <div class="row gy-5 px-2">
          @php($serviceList = json_decode($service['list'],true))
          @foreach($serviceList as $item)
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <div class="icon d-flex align-items-center justify-content-center">
                  <i class="{{$item['icon']}}"></i>
                </div>
                <p class="mb-0 ms-2">{{$item['title']}}</p>
              </div>
            </div>
          @endforeach
        </div>
        <p class="my-4 text-center">
          {{$service['additional_text']}}
        </p>
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

