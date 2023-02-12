@extends('layouts.mainOrdinary')

@section("meta")
  <!-- Primary Meta Tags -->
  <title>İletişim - Teknokale Bodrum</title>
  <meta name="title" content="İletişim - Teknokale Bodrum">
  <meta name="description" content="İletişim">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://teknokalebodrum.com/">
  <meta property="og:title" content="İletişim - Teknokale Bodrum">
  <meta property="og:description" content="İletişim">
  <meta property="og:image" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://teknokalebodrum.com/">
  <meta property="twitter:title" content="İletişim - Teknokale Bodrum">
  <meta property="twitter:description" content="İletişim">
  <meta property="twitter:image" content="">
@endsection

@section('breadcrumbs')
  <ol>
    <li><a href="/">Ana sayfa</a></li>
    <li>
      İletişim
    </li>
  </ol>
@endsection
@section('content')
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Adresimiz</h3>
            <p>Cevat Şakir mah. Hoca Ahmet Yesevi cad. No 26/a Bodrum</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p>teknokalebodrum@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Telefon</h3>
            <p><a href="tel:+905524504809">+905524504809</a> <a href="tel:+902526060615">+902526060615</a></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-6">
          <div id="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d473.40501569770464!2d27.40763421144538!3d37.041355534401404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be6de6bb9530bb%3A0xc88514ea394682a8!2sTekno%20Kale%20Kilit%20Sistemleri%2C%20Bili%C5%9Fim%20ve%20G%C3%BCvenlik%20Teknolojileri!5e0!3m2!1str!2str!4v1674059187744!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div><!-- End Google Maps -->

        <div class="col-lg-6">
          <form action="{{route('ajax.contact')}}" method="post" role="form" class="php-email-form">
            <p>Herhangi bir konuda bilgi almak için mesaj bırakabilirsiniz (Onur Özkan)</p>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row gy-4">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefon" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Mesajınız"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Yükleniyor</div>
              <div class="error-message"></div>
              <div class="sent-message">Mesajınız iletilmiştir. En yakın zamanda sizi arayacağız!</div>
            </div>
            <div class="text-center"><button type="submit">Gönder</button></div>
          </form>
        </div>
        <!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection