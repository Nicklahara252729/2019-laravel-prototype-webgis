<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Page Title -->
<title>Sistem Informasi Geografis Perkebunan Kelapa Sawit PTPN 4</title>

<!-- Favicon and Touch Icons -->
<link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" />

<!-- Stylesheet -->
<link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/admin/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/admin/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/admin/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="{{asset('public/admin/css/menuzord-megamenu.css')}}" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="{{asset('public/admin/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('public/admin/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('public/admin/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('public/admin/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('public/admin/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('public/admin/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('public/admin/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('public/admin/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('public/admin/css/colors/theme-skin-color-set2.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('public/admin/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('public/admin/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('public/admin/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('public/admin/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/admin/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
@if($uri=="maps")
<div id="wrapper" class="clearfix">
<div class="main-content">
@include('component.frontend_header')
@yield('main')
</div>
</div>
@else
<div id="wrapper" class="clearfix">
<!-- preloader -->
<div id="preloader">
    <div id="spinner">
      <img alt="" src="{{asset('public/images/logo.png')}}">
    </div>
    
</div>

<!-- Start main-content -->
<div class="main-content">
@include('component.frontend_header')
@include('component.frontend_home')
@if($uri=="tentang" || $uri=="kontak")
@yield('main')
@else
@include('component.frontend_feature')
@yield('main')
@include('component.frontend_service')
@include('component.frontend_funfact')
@include('component.frontend_galery')
@include('component.frontend_say')
@include('component.frontend_blog')
@include('component.frontend_location')
@endif
@include('component.frontend_footer')
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
@endif
<!-- JS | Chart-->
<script src="{{asset('public/admin/js/chart.js')}}"></script>
<!-- JS | Custom script for all pages -->
<script src="{{asset('public/admin/js/custom.js')}}"></script>

<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>
</html>