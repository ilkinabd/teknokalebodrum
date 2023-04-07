@php use App\Models\Service; @endphp
@php
  /**
  * @var Service $service
  */
@endphp
@extends('layouts.mainOrdinary')

@section('title', $service->getTranslatedAttribute('seo_title'))
@section("meta")
  <!-- Primary Meta Tags -->
  <title>{{$service->getTranslatedAttribute('seo_title')}} - Teknokale Bodrum</title>
  <meta name="title" content="{{$service->getTranslatedAttribute('seo_title')}} - Teknokale Bodrum">
  <meta name="description"
        content="{{$service['intro_text']}}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{route('services.detail',['slug' => $service['slug']])}}">
  <meta property="og:title" content="{{$service->getTranslatedAttribute('seo_title')}}  - Teknokale Bodrum">
  <meta property="og:description"
        content="{{$service['intro_text']}}">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{route('services.detail',['slug' => $service['slug']])}}">
  <meta property="twitter:title" content="{{$service->getTranslatedAttribute('seo_title')}} - Teknokale Bodrum">
  <meta property="twitter:description"
        content="{{$service['intro_text']}}">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>{{$service->getTranslatedAttribute('seo_title')}}</li>
  </ol>
@endsection

@section('content')
  <div class="container projects">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="position: relative">
        <div class="d-flex justify-content-center d-md-none mobile-logos mt-4">
          <img class=""
               src="{{asset('storage/assets/img/services/teknokale.jpg')}}" alt="teknokale">
          @if($service->id !== 6)
            <img class="ms-2" src="{{asset('storage/assets/img/services/'.$service['image'])}}" alt="kale-kilit">
          @endif
        </div>
        <div class="service-desc @if($service->id === 6)centered @endif">
          <p class="text-center mb-0">
            {!! $service->getTranslatedAttribute('intro_text') !!}
          </p>
          @if($service->id === 6)
            <img class="d-none d-md-inline" style="position:absolute;left: 50%;top: 10px;transform: translateX(-50%)"
                 src="{{asset('storage/assets/img/services/teknokale.jpg')}}"
                 alt="{{$service['slug']}}">
          @else
            <img class="d-none d-md-inline" style="position:absolute;right: 6px;top: 10px"
                 src="{{asset('storage/assets/img/services/teknokale.jpg')}}"
                 alt="{{$service['slug']}}">
            <img class="d-none d-md-inline" style="position:absolute;left: 6px;top: 10px"
                 src="{{asset('storage/assets/img/services/'.$service['image'])}}"
                 alt="kale-kilit-bodrum">
          @endif
        </div>
        <div class="row gy-5 px-2 justify-content-center">
          @foreach($service->items as $item)
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <div class="icon d-flex align-items-center justify-content-center">
                  <i class="{{$item['icon']}}"></i>
                </div>
                <p class="mb-0 ms-2">{{$item->getTranslatedAttribute('title')}}</p>
              </div>
            </div>
          @endforeach
        </div>
        @if($service->id === 2)
          <div class="row mt-3">
            <div class="col-lg-6">
              <p class="my-4 text-center text-lg-start">
                {{$service->getTranslatedAttribute('additional_text')}}
              </p>
            </div>
            <div class="col-lg-6 get-started" data-aos="fade">
              <form action="{{route('ajax.service')}}" method="post" class="php-email-form"
                    style="background-color: #f5f6f7">
                <h3>{{__('home.iletisim_formu')}}</h3>
                <div class="row gy-3">

                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="{{__('home.adiniz')}}" required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="phone" placeholder="{{__('home.telefon_numaraniz')}}"
                           required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="region" placeholder="{{__('home.il_ilce')}}"
                           required>
                  </div>

                  {{--                  <div class="col-md-12">--}}
                  {{--                    <label for="">--}}
                  {{--                      <input type="checkbox" name="phone" placeholder="{{__('home.telefon_numaraniz')}}"--}}
                  {{--                             required>--}}
                  {{--                      Kvkk okudum kabul ediyorum--}}
                  {{--                    </label>--}}
                  {{--                  </div>--}}

                  <div class="col-md-12 text-center">
                    <div class="loading">{{__('home.loading')}}</div>
                    <div class="error-message"></div>
                    <div class="sent-message">{{__('home.mesajiniz_iletildi_en_zakin_yamanda_sizi_arazacagiz')}}</div>

                    <button type="submit">{{__('home.gonder')}}</button>
                  </div>

                </div>
              </form>
            </div><!-- End Quote Form -->
          </div>
        @else
          <p class="my-4 text-center">
            {{$service->getTranslatedAttribute('additional_text')}}
          </p>
        @endif
        @if($service->id === 6)
          <h4 class="service-product-title">{{__('services.bayilikler')}} : </h4>
          <div class="franchises">
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/ahua.png')}}" alt="">
            </div>
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/bft.png')}}" alt="">
            </div>
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/hikvision.png')}}" alt="">
            </div>
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/nice.png')}}" alt="">
            </div>
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/opax.png')}}" alt="">
            </div>
            <div class="item">
              <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/perktek.png')}}" alt="">
            </div>
          </div>
        @endif

        <h4 class="service-product-title">{{__('services.bayilikler')}} : </h4>
        <div class="franchises">
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/ahua.png')}}" alt="">
          </div>
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/bft.png')}}" alt="">
          </div>
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/hikvision.png')}}" alt="">
          </div>
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/nice.png')}}" alt="">
          </div>
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/opax.png')}}" alt="">
          </div>
          <div class="item">
            <img class="img-thumbnail" src="{{asset('storage/assets/img/franchises/perktek.png')}}" alt="">
          </div>
        </div>


        @if(count($products) > 0)
          <h4 class="service-product-title mb-0">{{__('services.one_cikan_bazi_urunler')}} : </h4>
          <div class="row portfolio-container mb-4">
            @foreach($products as $product)
              @if(isset(json_decode($product['images'])[0]))
                @php($image = json_decode($product['images'])[0])
                <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling mt-3 mt-lg-0">
                  <div class="portfolio-content h-100">
                    <img src="{{$image}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$product['product_code']}} {{$product->getTranslatedAttribute('title')}}</h4>
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
        @endif
        @include('servicesFooter',['productsCount' => count($products)])
      </div>
    </div>
  </div>
@endsection

