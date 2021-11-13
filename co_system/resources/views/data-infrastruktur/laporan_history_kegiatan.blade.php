@extends('theme')
@section('main')
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Laporan History Kegiatan</h4>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Input Data Infrastrutur</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Laporan History Kegiatan</span></li>
                      </ol>
                    </nav>

                    <div class="d-flex align-items-center">
                        <div class="wrapper mr-4 d-none d-sm-block">
                        <p class="mb-0">
                            <a href="#" class="btn btn-danger btn-fw" data-toggle="modal" data-target="#exampleModal-2">Export PDF</a>
                        </p>
                        </div>
                        <div class="wrapper mr-4 d-none d-sm-block">
                            <a href="#"  class="btn btn-success btn-fw">Export Excel</a>
                        </div>
                        <div class="wrapper">
                            <a href="#"  class="btn btn-warning btn-fw" onclick="window.print();">Print</a>
                        </div>
                    </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Laporan History Kegiatan</h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Lokasi Kegiatan</th>
                        <th>Penanggung Jawab Kegiatan</th>
                        <th>Keterangan</th>                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($i=1;$i<=15;$i++){ ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <th>Nama Kegiatan <?php echo $i; ?></th>
                        <th>Tanggal Kegiatan <?php echo $i; ?></th>
                        <th>Lokasi Kegiatan <?php echo $i; ?></th>
                        <th>Penanggung Jawab Kegiatan  <?php echo $i; ?></th>
                        <th>Keterangan <?php echo $i; ?></th>   
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

</div>
@stop
