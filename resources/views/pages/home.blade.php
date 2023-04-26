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
  <section id="search">
    <div class="container">
      <div class="search-wrapper">
        <h2 class="mb-4">Ne Aramıştınız?</h2>
        <i class="mb-4"><small>”Ürün veya Hizmet ismi giriniz; .“</small></i>
        <form action="{{route('products.search')}}">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="q">
            <button class="btn-info" type="submit" id="button-addon2">Ara</button>
          </div>
        </form>
      </div>
    </div>
  </section>
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
  <section id="slider" class="pb-0">
    <div id="kaleHomeSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#kaleHomeSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#kaleHomeSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#kaleHomeSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#kaleHomeSlider" data-bs-slide-to="3" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#kaleHomeSlider" data-bs-slide-to="4" aria-label="Slide 3"></button>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#kaleHomeSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#kaleHomeSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
@endsection