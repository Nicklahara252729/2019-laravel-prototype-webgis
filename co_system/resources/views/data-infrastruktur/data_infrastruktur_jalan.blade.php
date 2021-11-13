@extends('theme')
@section('main')
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Input Data Infrastruktur Jalan</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Data Data Infrastruktur Jalan</span></li>
                      </ol>
                    </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 ">
                      <h5 class="mb-4 pb-3">Form Manajemen Infrastruktur Jalan</h5>
                      <ul class="nav nav-tabs tab-basic" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#whoweare" role="tab" aria-controls="whoweare" aria-selected="true">Kondisi Fisik Jalan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ourgoal" role="tab" aria-controls="ourgoal" aria-selected="false">Klasifikasi Jalan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Permukaan Jalan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Kondisi Jalan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Upload Gambar</a>
                        </li>
                      </ul>
                      <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="whoweare" role="tabpanel" aria-labelledby="home-tab">
                            <form class="forms-sample">
                                <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Jalan</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option value="AL">Jl. Perkebunan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nomor Ruas</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Panjang Ruas</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input type="number" min="0" class="form-control">
                                        <div class="input-group-append bg-primary border-primary">
                                            <span class="input-group-text bg-transparent text-white">
                                                Meter
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Lebar Ruas</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input type="number" min="0" class="form-control">
                                        <div class="input-group-append bg-primary border-primary">
                                            <span class="input-group-text bg-transparent text-white">
                                                Meter
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Median Ruas<br>
                                    <span class="text-danger">Biarkan kosong atau ketik 0 apabila tidak ada</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input type="number" min="0" class="form-control">
                                        <div class="input-group-append bg-primary border-primary">
                                            <span class="input-group-text bg-transparent text-white">
                                                Meter
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Klasifikasi berdasarkan alur jalan</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option value="AL">Jalan Searah</option>
                                            <option value="AL">Jalan Dua arah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Lalu lintas harian rata - rata</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jumlah jalur / ruas jalan</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jumlah Tiang Listrik Sebelah Kanan
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input type="number" min="0" class="form-control">
                                        <div class="input-group-append bg-primary border-primary">
                                            <span class="input-group-text bg-transparent text-white">
                                                Meter
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Jumlah Tiang Listrik Sebelah Kiri
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input type="number" min="0" class="form-control">
                                        <div class="input-group-append bg-primary border-primary">
                                            <span class="input-group-text bg-transparent text-white">
                                                Meter
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <button type="submit" class="btn btn-success mr-2">Simpan Data</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="ourgoal" role="tabpanel" aria-labelledby="profile-tab">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet, sapiente corrupti, vitae excepturi nulla soluta
                          esse in ex, dignissimos velit rerum maiores asperiores!
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="contact-tab">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam assumenda fugit velit quis hic nulla necessitatibus?
                          Nulla, possimus rerum quia sapiente necessitatibus!
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="four-tab">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam assumenda fugit velit quis hic nulla necessitatibus?
                          Nulla, possimus rerum quia sapiente necessitatibus!
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="five-tab">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam assumenda fugit velit quis hic nulla necessitatibus?
                          Nulla, possimus rerum quia sapiente necessitatibus!
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
</div>
@stop
@section('js')
<script>
$(".js-example-basic-single").select2({});
</script>
@stop