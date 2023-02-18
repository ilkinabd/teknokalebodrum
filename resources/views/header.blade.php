@php
  use App\Models\Service;
  use Illuminate\Support\Facades\App;
/**
* @var Service[] $services
*/

@endphp
  <!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <img src="{{asset('storage/assets/img/logo.png')}}" style="width: 32px" alt="">
      <div style="line-height: 12px">
        <h1>Teknokale</h1>
        <small
          class="mb-0 d-none d-md-block">{{__('header.kilit_sistemleri_bilisim_ve_guvenlik_teknolojileri')}}</small>
      </div>
    </a>


    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}">{{__('header.ana_sayfa')}}</a></li>
        <li class="dropdown">
          <a href="javascript:void(0);"><span>{{__('header.hakkimizda')}}</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{route('about')}}">{{__('header.biz_kimiz')}}</a></li>
            <li><a href="{{route('mission')}}">{{__('header.misyon_vizyon')}}</a></li>
          </ul>
        </li>
        <!--          <li><a href="services.html">Hizmetlerimiz</a></li>-->
        <li><a href="/urunler"
               class="{{ (strpos(Route::currentRouteName(), 'products') !== false) ? 'active' : '' }}">{{__('header.urunler')}}</a>
        </li>
        <li><a href="{{route('catalog')}}"
               class="{{ (strpos(Route::currentRouteName(), 'catalog') !== false) ? 'active' : '' }}">{{__('header.katalog')}}</a>
        </li>
        <li class="dropdown"><a href="javascript:void(0)"><span>{{__('header.hizmetlerimiz')}}</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            @foreach($services as $service)
              <li><a
                  href="{{route('services.detail',['slug'=>$service->slug])}}">{{$service->getTranslatedAttribute('seo_title')}}</a>
              </li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route('contact')}}"
               class="{{ (strpos(Route::currentRouteName(), 'contact') !== false) ? 'active' : '' }}">{{__('header.iletisim')}}</a>
        </li>
        <li class="dropdown"><a href="javascript:void(0)"><span>{{mb_strtoupper(App::getLocale())}}</span>
            <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            @foreach($languages as $lang)
              @if($lang['code'] !== App::getLocale())
                <li><a href="{{route('language.change',['lang'=>$lang['code']])}}" class="d-flex justify-content-start"><img
                      style="width: 20px"
                      src="{{asset('storage/assets/img/flags/'.$lang['flag'])}}"
                      alt="{{$lang['title']}}}"><span
                      class="ms-2">{{$lang['title']}}</span></a></li>
              @endif
            @endforeach
          </ul>
        </li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->