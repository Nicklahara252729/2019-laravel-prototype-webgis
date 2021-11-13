<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi Geografis Perkebunan Kelapa Sawit PTPN</title>  
  <link rel="stylesheet" href="{{asset('public/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/css/vendor.bundle.addons.css')}}">

  <link rel="stylesheet" href="{{asset('public/vendors/icheck/skins/all.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/sweetalert/sweetalert.css')}}">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" />
</head>
<body>
<div class="container-scroller">
@if($uri=='register' || $uri =='complete' || $uri=="password" || $uri=="finished" || $uri=="login")
@yield('main')
@else
@include('component.navbar')
    <div class="container-fluid page-body-wrapper">
            @include('component.theme_setting')
            @include('component.sidebar')
        <div class="main-panel">
            @yield('main')
            @include('component.footer')
        </div>
    </div>
@endif
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="{{asset('public/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('public/vendors/js/vendor.bundle.addons.js')}}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="{{asset('public/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/js/misc.js')}}"></script>
  <script src="{{asset('public/js/settings.js')}}"></script>
  <script src="{{asset('public/js/todolist.js')}}"></script>

  <script src="{{asset('public/js/dashboard.js')}}"></script>
  
  <script src="{{asset('public/js/data-table.js')}}"></script>
  
  @yield('js')
  
</body>
</html>