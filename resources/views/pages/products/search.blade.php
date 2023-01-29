@extends('layouts.mainOrdinary')
@php
  /**
   * @var $categories array
   * @var $products App\Models\Product
   */
@endphp
@section('title','Ürün ara')

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>Ürün ara</li>
  </ol>
@endsection
@section('content')
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <aside class="col-lg-4">
          <div class="accordion accordion-category" id="accordion-menu">
            @foreach($categories as $category)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{$category['slug']}}">
                  <button class="accordion-button collapsed" type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse-{{$category['slug']}}" aria-expanded="true"
                          aria-controls="collapse-{{$category['slug']}}">
                    {{$category['title']}}
                  </button>
                </h2>
                <div id="collapse-{{$category['slug']}}" class="accordion-collapse collapse"
                     aria-labelledby="heading-{{$category['slug']}}"
                     data-bs-parent="#accordion-menu">
                  <div class="accordion-body">
                    <div class="list-group list-group-flush">
                      @if(count($category['children']))
                        @include('childCategorySearch',['childs' => $category['children']])
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </aside>
        <div class="col-lg-8">
          <form class="input-group product-search mb-3 mt-3 mt-lg-0" action="{{route('products.search')}}" method="get">
            <input type="text" class="form-control" name="q" placeholder="Ürün ismi ve ya kodu giriniz" value="{{$value}}"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn-info" type="submit" id="button-addon2">Ürün Ara</button>
          </form>
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($products as $product)
              @if(isset(json_decode($product->images)[0]))
                @php($image = json_decode($product->images)[0])
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="{{$image}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$product->product_code}} {{$product->title}}</h4>
                      <a href="{{$image}}"
                         data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a
                        href="{{route('products.detail',['category'=>$product->category->slug,'product'=>$product->slug])}}"
                        title="More Details"
                        class="details-link"><i
                          class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
              @endif
            @endforeach
          </div>
          {{$products->links('pagination')}}
        </div>
      </div>
    </div>
  </section><!-- End Our Projects Section -->
@endsection