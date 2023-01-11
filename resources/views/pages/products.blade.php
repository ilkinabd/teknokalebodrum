@extends('layouts.main')

@section('title','Ürünler')
@php
  /**
   * @var $categories array
   * @var $currentCategory array
   */
@endphp
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
        <div class="col-lg-8">
          <h1>{{$currentCategory['title']}}</h1>
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($currentCategory['products'] as $product)
              @if(isset(json_decode($product['images'])[0]))
                @php($image = json_decode($product['images'])[0])
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="{{$image}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$product['product_code']}} {{$product['title']}}</h4>
                      <a href="{{$image}}"
                         data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i
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