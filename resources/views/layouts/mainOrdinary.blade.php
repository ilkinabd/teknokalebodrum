<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{--  <title>Teknokale Bodrum - @yield('title')</title>--}}
  @yield("meta")
  @include('head')

</head>

<body>
@include('header')
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
       style="background-image: url('{{asset('storage/assets/img/kale-og.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2 class="text-center">@yield('title')</h2>

      @yield('breadcrumbs')

    </div>
  </div><!-- End Breadcrumbs -->

  @yield('content')

</main><!-- End #main -->
@include('footer')
</body>

</html>

