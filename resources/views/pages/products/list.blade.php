@php use App\Models\Category;use App\Models\Product; @endphp
@extends('layouts.mainOrdinary')
@php
  /**
   * @var $categories Category[]
   * @var $currentCategory Category
   * @var $product Product
   */
@endphp
@section('title',$currentCategory->getTranslatedAttribute('title'))

@section("meta")
  <!-- Primary Meta Tags -->
  <title>{{$currentCategory->getTranslatedAttribute('title')}} - Teknokale Bodrum</title>
  <meta name="title" content="{{$currentCategory->getTranslatedAttribute('title')}} - Teknokale Bodrum">
  <meta name="description" content="{{$currentCategory->getTranslatedAttribute('title')}}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="{{$currentCategory->getTranslatedAttribute('title')}} - Teknokale Bodrum">
  <meta property="og:description" content="{{$currentCategory->getTranslatedAttribute('title')}}">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="{{$currentCategory->getTranslatedAttribute('title')}} - Teknokale Bodrum">
  <meta property="twitter:description" content="{{$currentCategory->getTranslatedAttribute('title')}}">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">{{__('header.ana_sayfa')}}</a></li>
    <li>{{$currentCategory->getTranslatedAttribute('title')}}</li>
  </ol>
@endsection
@section('content')
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <aside class="col-lg-4">
          <div class="accordion accordion-category" id="accordion-menu">
            @foreach($categories as $category)
              @php($isActive = in_array($currentCategory['id'],$category['descendants']))
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{$category['slug']}}">
                  <button class="accordion-button @if(!$isActive)collapsed @endif" type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse-{{$category['slug']}}" aria-expanded="true"
                          aria-controls="collapse-{{$category['slug']}}">
                    {{$category->getTranslatedAttribute('title')}}
                  </button>
                </h2>
                <div id="collapse-{{$category['slug']}}" class="accordion-collapse collapse @if($isActive)show @endif"
                     aria-labelledby="heading-{{$category['slug']}}"
                     data-bs-parent="#accordion-menu">
                  <div class="accordion-body">
                    <div class="list-group list-group-flush">
                      @if(count($category['children']))
                        @include('childCategory',['childs' => $category['children'],'currentCategory'=>$currentCategory,'depth'=>0])
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </aside>
        <div class="col-lg-8">
          <form class="input-group product-search mb-3 mt-3 mt-lg-0" action="{{route('products.search')}}">
            <input type="text" class="form-control" minlength="3" maxlength="255" name="q"
                   placeholder="{{__('home.urun_ismi_ve_ya_kodu_giriniz')}}"
                   aria-label="{{__('home.urun_ismi_ve_ya_kodu_giriniz')}}"
                   aria-describedby="button-addon2">
            <button class="btn-info" type="submit" id="button-addon2">{{__('home.urun_ara')}}</button>
          </form>
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($currentCategory['products'] as $product)
              @if(isset(json_decode($product['local_images'])[0]))
                @php($image = json_decode($product['local_images'])[0])
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="{{asset('storage/'.$image)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$product['product_code']}} {{$product->getTranslatedAttribute('title')}}</h4>
                      <a href="{{asset('storage/'.$image)}}"
                         data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a
                        href="{{route('products.detail',['category'=>$currentCategory['slug'],'product'=>$product['slug']])}}"
                        title="Gözat"
                        class="details-link"><i
                          class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Our Projects Section -->
@endsection