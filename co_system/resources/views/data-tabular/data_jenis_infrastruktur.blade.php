@extends('theme')
@section('main')
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Data Jenis Infrastruktur</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">
                  <a href="#" class="btn btn-warning btn-sm"> Dashboard Semua Pemetaan</a>
                  <a href="#" class="btn btn-success btn-sm"> Input Data Umum Infrastruktur</a>
                  <a href="#" class="btn btn-primary btn-sm"> Pemetaan Data Infrastruktur</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Input Data Umum</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Data Jenis Infrastruktur</span></li>
                      </ol>
                    </nav>

                    <div class="d-flex align-items-center">
                        <div class="wrapper mr-4 d-none d-sm-block">
                        <p class="mb-0">
                            <a href="#" class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal-2"><i class="icon-plus"></i> Tambah Data</a>
                        </p>
                        </div>
                        <div class="wrapper">
                            <a href="#"  class="btn btn-primary btn-fw"><i class="icon-refresh"></i> Refresh</a>
                        </div>
                    </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tabel Data Jenis Infrastruktur</h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Jenis</th>
                        <th>Nama Jenis</th>
                        <th>Marker Peta</th>
                        <th>Klasifikasi</th>                        
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>APTK</td>
                        <td>Apotek</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>ARBT</td>
                        <td>Bandat Udara</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>BANK</td>
                        <td>Bank</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>BP</td>
                        <td>Bangunan Pemerintah</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>BUMN</td>
                        <td>Kantor BUMN</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>DRAIN</td>
                        <td>Drainase</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Air</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>ENRG</td>
                        <td>Energi</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Lainnya</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>GLGNG</td>
                        <td>Gelanggang Olahraga</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Lainnya</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>GRNG</td>
                        <td>Gorong - gorong</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Air</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>HLT</td>
                        <td>Halte</td>
                        <td><span class="icon-location-pin "></span></td>
                        <td>Bangunan</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#" onclick="itemedit('');"><span class="icon-note "></span> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="delItem('');"><span class="icon-trash"></span> Hapus</a>                                    
                                </div>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

                   <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Tambah Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form>
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kode Jenis</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Jenis Jenis</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            
                            <div class="form-group">
                                <label class="col-form-label">Klasifikasi</label><br>
                                <select class="js-example-basic-single w-100">
                                    <option value="02">Bangunan</option>
                                    <option value="03">Air</option>
                                    <option value="04">Lainnnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" onclick="itemsave();">Simpan Data</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Batalkan</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Edit Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form>
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kode Jenis</label>
                              <input type="text" class="form-control" id="recipient-name" value="APTK">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Jenis Jenis</label>
                              <input type="text" class="form-control" id="recipient-name" value="Apotek">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Klasifikasi</label><br>
                                <select class="js-example-basic-single w-100">
                                    <option value="02">Bangunan</option>
                                    <option value="03">Air</option>
                                    <option value="04">Lainnnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" onclick="saveedit();">Simpan perubahan</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Batalkan</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
</div>
@stop
@section('js')
<script>
     $(".js-example-basic-single").select2({
        width: '100%',
        dropdownParent: $('#exampleModal-2'),
     });

     function delItem(){
        swal({
  title: "Apakah anda yakin ingin menghapus data ini ?",
  text: "Data yang sudah dihapus tidak dapat dikembalikan!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Data anda berhasi; dihapus!", {
      icon: "success",
    });
  } else {
    swal("Data anda aman!");
  }
});
    }

function itemsave(){
    $("#exampleModal-2").modal("hide");
    swal("Sukses!", "Data berhasil disimpan !", "success");
}

function itemedit(){
    $("#exampleModal").modal("show");
}

function saveedit(){
    $("#exampleModal").modal("hide");
    swal("Sukses!", "Data berhasil diedit !", "success");
}
  </script>
@stop