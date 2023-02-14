<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <img src="{{asset('storage/assets/img/logo.png')}}" style="width: 32px" alt="">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <div style="line-height: 12px">
        <h1>Teknokale</h1>
        <small class="mb-0 d-none d-md-block">Kilit sistemleri Bilişim ve Güvenlik Teknolojileri</small>
      </div>
    </a>


    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}">Ana sayfa</a></li>
        <li><a href="javascript:void(0);">Hakkımızda</a></li>
        <!--          <li><a href="services.html">Hizmetlerimiz</a></li>-->
        <li><a href="/urunler" class="{{ (strpos(Route::currentRouteName(), 'products') !== false) ? 'active' : '' }}">Ürünler</a>
        </li>
        <li><a href="{{route('catalog')}}"
               class="{{ (strpos(Route::currentRouteName(), 'catalog') !== false) ? 'active' : '' }}">Katalog</a></li>
        <li class="dropdown"><a href="javascript:void(0)"><span>Hizmetlerimiz</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{route('services.detail',['slug'=>'kale-kilit'])}}">Kale Kilit</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-celik-kasa'])}}">Kale Çelik Kasa</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-celik-kapi'])}}">Kale Çelik Kapı</a></li>
            <li><a href="{{route('services.detail',['slug'=>'kale-alarm'])}}">Kale Alarm</a></li>
            {{--            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i--}}
            {{--                  class="bi bi-chevron-down dropdown-indicator"></i></a>-->--}}
            {{--              <ul>--}}
            {{--                <li><a href="#">Deep Dropdown 1</a></li>--}}
            {{--                <li><a href="#">Deep Dropdown 2</a></li>--}}
            {{--                <li><a href="#">Deep Dropdown 3</a></li>--}}
            {{--                <li><a href="#">Deep Dropdown 4</a></li>--}}
            {{--                <li><a href="#">Deep Dropdown 5</a></li>--}}
            {{--              </ul>--}}
            {{--            </li>--}}
          </ul>
        </li>
        <li><a href="{{route('contact')}}"
               class="{{ (strpos(Route::currentRouteName(), 'contact') !== false) ? 'active' : '' }}">İletişim</a></li>
        <li id="google_translate_element"></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->