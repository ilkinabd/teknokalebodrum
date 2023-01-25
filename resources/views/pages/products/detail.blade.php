@extends('layouts.mainOrdinary')
@php
  /**
   * @var $categories array
   * @var $currentCategory array
   * @var $product array
   */
  $images = json_decode($product['images'],true);
  $downloads = json_decode($product['downloads'],true);
@endphp
@section('title',$product['title'])

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>
      <a href="{{route('products.list',['category' => $currentCategory['slug']])}}">{{$currentCategory['title']}}</a>
    </li>
    <li>{{$product['title']}}</li>
  </ol>
@endsection
@section('content')
  <section id="product">
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
                    {{$category['title']}}
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
        <div class="col-lg-8 product-view">
          <div class="card mt-3 mt-lg-0">
            <div class="card-header">Ürün açıklaması</div>
            <div class="card-body">
              <p class="card-text">
                {{$product['description']}}
              </p>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">Ürün resimleri</div>
            <div class="card-body">
              <div class="current-image" id="img-container" style="max-width: 300px;">
                <img src="{{$images[0]}}" alt="{{$product['title']}}" class="img-fluid">
              </div>
              <div class="thumbs d-flex align-items-center justify-between">
                @foreach($images as $index=>$image)
                  <a href="javascript:void(0)" class="thumb"
                     @if($index > 0) style="margin-left: 8px" @endif>
                    <img src="{{$image}}" class="img-fluid" alt="{{$product['title']}}">
                  </a>
                @endforeach
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">Ürün dosyaları</div>
            <div class="card-body">
              <div class="d-flex">
                @foreach($downloads as $index => $download)
                  <a href="{{$download['link']}}" class="btn-info{{$index > 0 ? ' ms-2' : ''}}">{{$download['name']}}</a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
  <script type="text/javascript">
      let imageZoomApi;
      const imageContainer = document.querySelector('#img-container')
      const currentImage = document.querySelector('#img-container > img');
      // If the width and height of the image are not known or to adjust the image to the container of it
      const options2 = {
          fillContainer: true,
          offset: {vertical: 0, horizontal: 10},
          zoomPosition: 'original'
      };
      const resetImageZoom = (event) => {
          currentImage.src = event.target.src;
          imageZoomApi.kill();
          imageZoomApi = new ImageZoom(imageContainer, options2)
      }

      imageZoomApi = new ImageZoom(imageContainer, options2);

      const thumbs = document.querySelectorAll('.thumbs .img-fluid');
      for (let i = 0; i < thumbs.length; i++) {
          thumbs[i].addEventListener('click', resetImageZoom);
      }
  </script>
@endsection