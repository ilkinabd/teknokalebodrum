@extends('layouts.mainHome')

@section('title','Ana Sayfa')


@section('services')
  @foreach($services as $service)
    <a class="col-lg-4" href="{{route("services.detail",["slug" => $service["slug"]])}}" data-aos="fade-up">
      <span class="d-flex p-2 item align-items-center" style="border-radius: 4px">
        <span class="image flex-shrink-0 d-flex align-items-center">
          <img style="width: 100px" src="{{asset('storage/assets/img/services/' . $service['image'])}}"
               alt="{{$service['image']}}" />
        </span>
        <span class="title px-2">{{$service->getTranslatedAttribute('title')}}</span>
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
            <h3>{{__('home.sitemiz_yapim_asamasindadir')}}</h3>
            <p>{{__('home.urunlerle_ilgli')}} <a
                href="{{route('products')}}">{{__('home.urunler_sayfasindan')}}</a> {{__('home.bilgi_ala_bilirsiniz')}}
            </p>
            <form class="input-group product-search" action="{{route('products.search')}}">
              <input type="text" class="form-control" minlength="3" maxlength="255" name="q"
                     placeholder="{{__('home.urun_ismi_ve_ya_kodu_giriniz')}}"
                     aria-label="{{__('home.urun_ismi_ve_ya_kodu_giriniz')}}"
                     aria-describedby="button-addon2">
              <button class="btn-info" type="submit" id="button-addon2">{{__('home.urun_ara')}}</button>
            </form>
          </div>
        </div>

        <div class="col-lg-5" data-aos="fade">
          <form action="{{route('ajax.contact')}}" method="post" class="php-email-form">
            <h3>{{__('home.iletisim_formu')}}</h3>
            <div class="row gy-3">

              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-md-12">
                <input type="text" name="name" class="form-control" placeholder="{{__('home.adiniz')}}" required>
              </div>

              <div class="col-md-12 ">
                <input type="email" class="form-control" name="email" placeholder="{{__('home.email')}}" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="phone" placeholder="{{__('home.telefon_numaraniz')}}"
                       required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="{{__('home.mesaj')}}"></textarea>
              </div>

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

    </div>
  </section><!-- End Get Started Section -->

@endsection