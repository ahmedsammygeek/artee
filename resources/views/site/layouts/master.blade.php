@php
$lang = LaravelLocalization::getCurrentLocale();
if ($lang == 'ar') {
    $dir = 'rtl';
} else {
    $dir = 'ltr';
}
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> ARTEE </title>
  <link rel="shortcut icon" type="image/jpg" href="{{ asset('site_assets/'.$dir.'/images/favicon.png') }}">
@livewireStyles
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('site_assets/'.$dir.'/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('site_assets/'.$dir.'/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('site_assets/'.$dir.'/css/styles.css') }}">
  @if ($dir == 'rtl' )
        <link rel="stylesheet" href="{{ asset('site_assets/'.$dir.'/css/rtl.css') }}">
  @endif
  @yield('styles')
  
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

    @include('site.layouts.header')
  <div class="wrapper">


    <!-- Main Sidebar Container -->

    @include('site.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            
            @yield('page_content')

        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('site_assets/'.$dir.'/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('site_assets/'.$dir.'/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Scripts -->
  <script src="{{ asset('site_assets/'.$dir.'/js/PushMenu.js') }}"></script>

  <script>
    $("document").ready(function () {
      $(".users-list .color-list li").mouseenter(function () {
        var hoverImage = $(this).data("image");
        $(this).closest('.product-container').find(".image-container .card-front img").attr('src', hoverImage);
      });
      $(".users-list .color-list li").mouseleave(function () {
        var mainImage = $(this).closest('.product-container').find(".image-container").data("image");
        $(this).closest('.product-container').find(".card-front img").attr('src', mainImage);
      });
    });
  </script>
  @livewireScripts
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <x-livewire-alert::scripts />
</body>

</html>