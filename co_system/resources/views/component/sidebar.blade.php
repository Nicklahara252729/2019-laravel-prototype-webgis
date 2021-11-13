<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <img src="{{asset('public/images/ptpn.jpg')}}" alt="profile image">
            <p class="text-center font-weight-medium">PTPN 4</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="menu-icon icon-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('download')}}">
              <i class="menu-icon icon-cloud-download"></i>
              <span class="menu-title">Download</span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-layers"></i>
              <span class="menu-title">Data Produksi Sawit</span>
              <div class="badge "><i class="icon-arrow-down "></i></div>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('overview-produksi-sawit')}}">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('input-data-produksi')}}">Input Data Produksi</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{url('data-relevan-lain')}}" >
              <i class="menu-icon icon-layers"></i>
              <span class="menu-title">Data Relevan Lain</span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-rekapitulasi" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-layers"></i>
              <span class="menu-title">Rekapitulasi Data Produksi</span>
              <div class="badge "><i class="icon-arrow-down "></i></div>
            </a>
            <div class="collapse" id="page-rekapitulasi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('overview-data-produksi')}}">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('input-rekapitulasi-data')}}">Input Data Rekapitulasi </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-tabular" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-plus"></i>
              <span class="menu-title">Input Data Tabular</span>
              <div class="badge "><i class="icon-arrow-down "></i></div>
            </a>
            <div class="collapse" id="page-tabular">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-kecamatan')}}">Data Kecamatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-jabatan')}}">Data Jabatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-user')}}">Data User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-jenis-infrastruktur')}}">Data Jenis Infrastruktur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-sumber-dana')}}">Data Sumber Dana</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-umum-infrastruktur')}}">Data Umum Infrastruktur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-tingkat-akses-jalan')}}">Data Tingkat Akses Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-kondisi')}}">Data Kondisi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-kondisi-permukaan-jalan')}}">Data Kondisi Permukaan Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-wewenang-penanganan-jalan')}}">Data Wewenang Penangan Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-jenis-jembatan')}}">Data Jenis Jembatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-klasifikasi-fungsi-jalan')}}">Data Klasifikasi Fungsi Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-beban-jalan')}}">Data Beban Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-administrasi-jalan')}}">Data Administrasi Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-klasifikasi-fungsi-jembatan')}}">Data Klasifikasi Fungsi Jembatan</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-Infrastruktur" aria-expanded="false" aria-controls="page-layouts">
              <i class="menu-icon icon-plus"></i>
              <span class="menu-title">Input Data Infrastruktur</span>
              <div class="badge "><i class="icon-arrow-down "></i></div>
            </a>
            <div class="collapse" id="page-Infrastruktur">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('pemetaan-infrastruktur')}}">Pemetaan Infrastruktur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-infrastruktur-jalan')}}">Data Infrastruktur Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-infrastruktur-jembatan')}}">Data Infrastruktur Jembatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-infrastruktur-bangunan')}}">Data Infrastruktur Bangunan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('data-infrastruktur-air')}}">Data Infrastruktur Air</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-infrastruktur-jalan')}}">Laporan Infrastruktur Jalan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-infrastruktur-jembatan')}}">Laporan Infrastruktur Jembatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-infrastruktur-bangunan')}}">Laporan Infrastruktur Bangunan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-infrastruktur-air')}}">Laporan Infrastruktur Air</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-infrastruktur-perumahan-pemukiman')}}">Laporan Perumahan dan Pemukiman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('download-file-infrastruktur')}}">Download File Infrastruktur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan-history-kegiatan')}}">Laporan History Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('download-history')}}">Download History</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link"  href="{{url('monografi-kebun')}}" >
              <i class="menu-icon icon-compass"></i>
              <span class="menu-title">Monografi Kebun</span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{url('peta-vektor')}}">
              <i class="menu-icon icon-map"></i>
              <span class="menu-title">Peta Vektor</span>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-Lahan" aria-expanded="false" aria-controls="page-layouts" >
              <i class="menu-icon icon-map"></i>
              <span class="menu-title">Peta Persebaran Lahan</span>
              <div class="badge "><i class="icon-arrow-down "></i></div>
            </a>
            <div class="collapse" id="page-Lahan">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{url('overview-peta-lahan')}}">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('pemetaan-batas-blok-kebun')}}">Pemetaan Batas Blok Kebun</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('pemetaan-pokok-sawit')}}">Pemetaan Pokok Sawit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('pemetaan-infrastruktur-kebun')}}">Pemetaan Infrastruktur Kebun</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{url('peta-dasar')}}" >
              <i class="menu-icon icon-map"></i>
              <span class="menu-title">Peta Dasar</span>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="menu-icon  icon-logout  "></i>
              <span class="menu-title">{{ __('Keluar') }}</span>
          </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </nav>