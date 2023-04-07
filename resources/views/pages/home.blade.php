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
<style>
  #kalekilit{
      background-image: url(http://127.0.0.1:8000/storage/assets/img/kale-kilit.jpg);
      padding-top: 120px;
      padding-bottom: 200px;
      color: black;
      background-position: left;
      background-size: 118%;
      background-repeat: no-repeat;
  }
  :root {
  }
  *, *::before, *::after {
      box-sizing: border-box;
      font-family: Helvetica, sans-serif;
      font-weight: 100;
  }
  .container-search {
      align-items: center;
      background: #fff;
      display: flex;
      justify-content: center;
      padding-top: 28px;
      padding-bottom: 28px;
  }

  .container-search > i{
      color: var(--color-primary);
  }

  .search {
      --easing: cubic-bezier(0.4, 0, 0.2, 1);
      --font-size: 2rem;
      --color: var(--color-primary);
      --color-highlight: var(--color-primary);
      --transition-time-icon: 0.2s;
      --transition-time-input: 0.3s 0.25s;
      border-radius: 999px;
      border: 2px solid transparent;
      display: flex;
      transition: border-color var(--transition-time-icon) linear, padding var(--transition-time-input) var(--easing);
  }
  .search:not(:focus-within) {
      --transition-time-input: 0.2s 0s;
  }
  @media (prefers-reduced-motion: reduce) {
      .search {
          --transition-time-icon: 0s !important;
          --transition-time-input: 0s !important;
      }
  }
  .search__input {
      background: transparent;
      border: none;
      color: var(--color-highlight);
      font-size: var(--font-size);
      opacity: 0;
      outline: none;
      padding: 0;
      transition: width var(--transition-time-input) var(--easing), padding var(--transition-time-input) var(--easing), opacity var(--transition-time-input) linear;
      width: 0;
  }
  .search__input::placeholder {
      color: var(--color);
      opacity: 0.75;
  }
  .search__icon-container {
      height: calc(var(--font-size) + 2rem);
      position: relative;
      width: calc(var(--font-size) + 2rem);
  }
  .search__label, .search__submit {
      color: var(--color);
      cursor: pointer;
      display: block;
      height: 100%;
      padding: 0;
      position: absolute;
      width: 100%;
  }
  .search__label:hover, .search__submit:hover, .search__label:focus, .search__submit:focus, .search__label:active, .search__submit:active {
      color: var(--color-highlight);
  }
  .search__label {
      transition: transform var(--transition-time-icon) var(--easing), color 0.1s;
  }
  .search__submit {
      background: none;
      border-radius: 50%;
      border: none;
      box-shadow: 0 0 0 4px inset transparent;
      display: none;
      outline: none;
      transition: color 0.1s, box-shadow 0.1s;
  }
  .search__submit svg {
      transform: scale(0.5);
  }
  .search__submit:focus {
      box-shadow: 0 0 0 4px inset var(--color-highlight);
  }
  .search:focus-within {
      border-color: var(--color);
  }
  .search:focus-within .search__input {
      opacity: 1;
      padding: 0 1rem 0 2rem;
      width: calc(var(--font-size) * 12);
  }
  .search:focus-within .search__label {
      transform: scale(0.5);
  }
  .search:focus-within .search__submit {
      animation: unhide var(--transition-time-icon) steps(1, end);
      display: block;
  }
  @keyframes unhide {
      from {
          height: 0;
          opacity: 0;
      }
      to {
          height: auto;
          opacity: 1;
      }
  }

</style>
@section('content')
  <div class="container-search" style="flex-direction: column">
    <h2 class="mb-4">Ne Aramıştınız?</h2>
    <i class="mb-4"><small>”Ürün veya Hizmet ismi giriniz; .“</small></i>
    <form action="{{__('routes.search')}}" class="search">
      <input class="search__input" type="search" placeholder="" id="searchInput">

      <div class="search__icon-container">
        <label for="searchInput" class="search__label" aria-label="Search">
          <svg viewBox="0 0 1000 1000" title="Search"><path fill="currentColor" d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z"/></svg>
        </label>

        <button class="search__submit" aria-label="Search">
          <svg viewBox="0 0 1000 1000" title="Search"><path fill="currentColor" d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z"/></svg>
        </button>
      </div>
    </form>
  </div>
  <section id="kalekilit">
    <div class="container" style="padding: 16px">
      <h2 class="text-center" style="font-size: 40px;margin-bottom: 64px"><span style="color: red">Dünya'da</span> <b>Kale Kilit</b></h2>
      <p>Türkiye’de güvenliğin kalesi
          olan <b>Kale Kilit</b>, yurt içinde elde ettiği başarılarla, dünya pazarında da söz sahibi ve güvenilir bir marka.
          Avrupa’nın en büyük entegre kilit üretim tesisine sahip olan <b>Kale Kilit</b>, Çerkezköy’deki bu yeni fabrikasında,
          sadece Türkiye’de değil uluslararası arenada da üretim kapasitesi ve kalitesiyle adından söz ettiriyor.</p>
        <p><b>Kale Kilit</b>, birçok ülkenin ve bölgenin kullanım alışkanlıklarına ve en önemlisi güvenlik ihtiyaçlarına cevap
          verecek üretim teknolojisine ve alt yapıya sahip. Türkiye’nin lider kilit üreticisi olmakla kalmayıp, kilit
          sektöründe dünyanın en büyük global üreticilerinin hâkim olduğu pazarlarda güçlü bir rakip olarak boy
          gösteriyor. Her yıl düzenli olarak 100’den fazla ülkeye ihracat yapan <b>Kale Kilit</b>’in en yüksek ihracat yaptığı
          ülkeler ise Suudi Arabistan, Irak, Rusya, Cezayir olarak sıralanıyor.</p>
        <p>1993 yılından bu yana Rusya’da bayileri aracılığıyla faaliyet gösteren <b>Kale Kilit</b>, Rusya ve ardından çevre
          ülkelerde daha hızlı büyümek için Moskova’yı üs olarak seçti. Rusya’da Temsilcilik Ofisi’ni hizmete açan Kale
          Kilit, bu sayede pazarı yakından takip ederek bölgenin ihtiyacına uygun ürünlerle tüketicilerine ulaşıyor.</p>
        <p>Halen Rusya pazarında&nbsp;kilit/silindir ürün kategorisinin yanı sıra kapı pencere sistemleri gruplarında&nbsp;mevcut
          ve yeni bayileriyle yeni dönemde de iş birliklerini sürdürüyor.</p>
        <p>Devlet destekli markalaşma programı Turquality kapsamında yer alan <b>Kale Kilit</b>, program çerçevesinde
          desteklenen sektörün ilk ve tek markası olarak öne çıkıyor. Bu kapsamda aldığı desteklerle, pazarlama ve
          tanıtım faaliyetleri gerçekleştiriyor.</p>
    </div>
  </section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.kalekilit.com.tr/sites/kalekilit.com.tr/files/2021-03/tr_5.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.kalekilit.com.tr/sites/kalekilit.com.tr/files/2021-04/20210409_ticarikasalar_mobil-300x400-2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.kalekilit.com.tr/sites/kalekilit.com.tr/files/2021-03/celik-kasa-web-slider-tr.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.kalekilit.com.tr/sites/kalekilit.com.tr/files/2021-03/tur.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.kalekilit.com.tr/sites/kalekilit.com.tr/files/2021-03/tur_3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- ======= Get Started Section ======= -->
  <section style="display: none" id="get-started" class="get-started section-bg"
           style="background-image: url({{asset('storage/assets/img/tur.png')}});background-size: contain;background-repeat: no-repeat">
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


      </div>

    </div>
  </section><!-- End Get Started Section -->
@endsection