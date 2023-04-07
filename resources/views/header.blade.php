@php
  use App\Models\Service;
  use Illuminate\Support\Facades\App;
/**
* @var Service[] $services
*/
$key = array_search(App::getLocale(),array_column($languages,'code'));
$currentLang = $languages[$key];
@endphp
  <!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('home')}}" class="logo d-flex align-items-center">
      <img src="{{asset('storage/assets/img/logo.jpg')}}" alt="">
        <small
          class="mb-0 text-center" style="font-size: 12px"><b>{{__('header.kilit_sistemleri_bilisim_ve_guvenlik_teknolojileri')}}</b>
          <br>Bodrum</small>
    </a>


    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{route('home')}}">{{__('header.ana_sayfa')}}</a></li>
        <li><a href="{{route('about')}}">{{__('header.hakkimizda')}}</a></li>

        <!--          <li><a href="services.html">Hizmetlerimiz</a></li>-->
        <li><a href="{{route('products.list',['category'=>'silindirler'])}}"
               class="{{ (strpos(Route::currentRouteName(), 'products') !== false) ? 'active' : '' }}">{{__('header.urunler')}}</a>
        </li>
        <li><a href="{{route('catalog')}}"
               class="{{ (strpos(Route::currentRouteName(), 'catalog') !== false) ? 'active' : '' }}">{{__('header.katalog')}}</a>
        </li>
        <li class="dropdown"><a href="javascript:void(0)"><span>{{__('header.hizmetlerimiz')}}</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            @foreach($services as $service)
              <li><a class="text-uppercase"
                  href="{{route('services.detail',['slug'=>$service->slug])}}">{{$service->getTranslatedAttribute('menu_title')}}</a>
              </li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route('contact')}}"
               class="{{ (strpos(Route::currentRouteName(), 'contact') !== false) ? 'active' : '' }}">{{__('header.iletisim')}}</a>
        </li>
        <li class="dropdown"><a class="d-flex justify-content-start" href="javascript:void(0)"><img
              style="width: 20px"
              src="{{asset('storage/assets/img/flags/'.$currentLang['flag'])}}"
              alt="{{$currentLang['title']}}}"><span class="ms-2">{{$currentLang['title']}}</span>
            <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            @foreach($languages as $lang)
              @if($lang['code'] !== App::getLocale())
                <li><a href="{{ LaravelLocalization::getLocalizedURL($lang['code'], null, [], true) }}"
                       class="d-flex justify-content-start"><img
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