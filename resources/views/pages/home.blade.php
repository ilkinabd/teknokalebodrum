@extends('layouts.mainHome')

@section('title','Ana Sayfa')


@section('services')
  @foreach($services as $service)
    <a class="col-lg-4" href="{{route("services.detail",["slug" => $service["slug"]])}}" data-aos="fade-up">
      <span class="d-flex p-2 item align-items-center" style="border-radius: 4px">
        <span class="image flex-shrink-0 d-flex align-items-center">
          <img style="width: 100px" src="{{asset('storage/assets/img/services/' . $service['image'])}}" alt="{{$service['image']}}" />
        </span>
        <span class="title px-2">{{$service['title']}}</span>
      </span>
    </a>
  @endforeach
@endsection
@section('content')
  <!-- ======= Get Started Section ======= -->
  <section id="get-started" class="get-started section-bg">
    <div class="container">
      <div class="row justify-content-between gy-4">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
          <div class="content">
            <h3>Sitemiz yapım aşamasındadır</h3>
            <p>Ürünlerle ilgli <a href="{{route('products')}}">ürünler sayfasından</a> bilgi ala bilirsiniz</p>
            <form class="input-group product-search" action="{{route('products.search')}}">
              <input type="text" class="form-control" minlength="3" maxlength="255" name="q"
                     placeholder="Ürün ismi ve ya kodu giriniz" aria-label="Recipient's username"
                     aria-describedby="button-addon2">
              <button class="btn-info" type="submit" id="button-addon2">Ürün Ara</button>
            </form>
          </div>
        </div>

        <div class="col-lg-5" data-aos="fade">
          <form action="{{route('ajax.contact')}}" method="post" class="php-email-form">
            <h3>İletişim Formu</h3>
            <div class="row gy-3">

              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-md-12">
                <input type="text" name="name" class="form-control" placeholder="Adınız" required>
              </div>

              <div class="col-md-12 ">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="phone" placeholder="Telefon numaranız" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Mesaj"></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesajınıy iletildi. En zakın yamanda sizi arazacağız!</div>

                <button type="submit">Gönder</button>
              </div>

            </div>
          </form>
        </div><!-- End Quote Form -->

      </div>

    </div>
  </section><!-- End Get Started Section -->

@endsection