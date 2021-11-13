<!-- Header -->
<header id="header" class="header header-floating header-transparent-dark dark-light">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> 123-456-789</a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> contact@ptpn4.com</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2 ">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="header-nav navbar-sticky navbar-sticky-animated">
      <div class="header-nav-wrapper">
        <div class="container p-0">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand switchable-logo pull-left flip mb-15 mt-20" href="{{url('/')}}">
              <img class="logo-default" src="{{asset('public/images/logo.png')}}" alt="">
              <img class="logo-scrolled-to-fixed" src="{{asset('public/images/logo.png')}}" alt="" style="height:50px;">
            </a>
            <ul class="menuzord-menu">
              <li <?php if($uri=='home'){ ?>class="active" <?php } ?>><a href="{{url('/')}}">Beranda</a></li>
              <li <?php if($uri=='maps'){ ?>class="active" <?php } ?>><a href="#">WebGIS </a>
                <ul class="dropdown">
                  <li><a href="{{url('maps')}}">WebGIS</a></li>
                  <li><a href="#">Download</a></li>
                  <li><a href="#">Upload</a></li>
                </ul>
              </li>
              <li ><a href="{{url('login')}}">Login / Register</a></li>
              <li <?php if($uri=='tentang'){ ?>class="active" <?php } ?>><a href="{{url('tentang')}}">Tentang</a></li>
              <li <?php if($uri=='kontak'){ ?>class="active" <?php } ?>><a href="{{url('kontak')}}">Kontak</a></li>
              <li class="hidden-sm">
                <ul class="header-search pull-right">
                  <li class="search-menu">
                    <i class="pe-7s-search search"></i>
                  </li>
                </ul>
                <!--Search Form-->
                <div class="search">
                  <div class="search-form">
                    <form id="searchform">
                      <input type="text" name="search" placeholder="Search here...">
                      <button type="submit">
                      <span><i class="fa fa-paper-plane-o"></i></span>
                      </button>
                    </form>
                  </div>
                </div>
                <script type="text/javascript">
                  $( document ).ready(function() {
                      $('.header-search').on('click', function() {
                        $('.search').toggleClass('open');
                        return false;
                    });
                  });
                </script>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>