@if($productsCount > 0 )
  <p class="mb-0"><small><i>”{{__('services.daha_fazla_urun_icin')}} <a
          href="{{route('products')}}">{{__('services.urunler_sayfamiza_goz_atin')}}.</a>“</i></small></p>
@endif
<p class="mb-0"><small><i>”{{__('services.siparis_ve_servis_talepleri_icin')}} <a
        href="{{route('contact')}}">{{__('services.bize_ulasin')}}</a>“</i></small></p>
<p><small><i>”{{__('services.diger_hizmetlerimizi_gormek_icin')}} <a
        href="{{route('services.list')}}">{{__('services.hizmetler_sayfamiza_goz_atin')}}</a>“</i></small></p>
