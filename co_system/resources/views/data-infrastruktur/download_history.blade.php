@extends('theme')
@section('main')
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Download History Kegiatan</h4>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Input Data Infrastrutur</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Download History Kegiatan</span></li>
                      </ol>
                    </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Download History Kegiatan</h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Lokasi Kegiatan</th>
                        <th>Download</th>                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($i=1;$i<=15;$i++){ ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <th>Nama Kegiatan <?php echo $i; ?></th>
                        <th>Tanggal Kegiatan <?php echo $i; ?></th>
                        <th>Lokasi Kegiatan <?php echo $i; ?></th>
                        <th><a href="#"  class="btn btn-danger btn-sm">Download</a></th>   
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
