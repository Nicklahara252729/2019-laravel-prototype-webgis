@extends('theme')
@section('main')
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Dashboard</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">Today 
                    <b class="mb-0"><?php echo date('d M Y') ?></b>
                  </p>
                </div>
                <div class="wrapper">
                  <a href="#" class="btn btn-link btn-sm font-weight-bold">
                    <i class="icon-share-alt"></i>Export CSV</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 card-statistics">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5>Air Terdaftar</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Jumlah </p>
                        <p class="text-muted">40</p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5>Bangunan Terdaftar</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Jumlah</p>
                        <p class="text-muted">120</p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5>Jalan Terdaftar</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Jumlah</p>
                        <p class="text-muted"> 54</p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5>Jembatan Terdaftar</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Avg. Session</p>
                        <p class="text-muted">max: 143</p>
                      </div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Total Revenue</h6>
                  <div class="w-75 mx-auto mt-4">
                    <div class="d-flex justify-content-between text-center mb-2">
                      <div class="wrapper">
                        <h4>6,256</h4>
                        <small class="text-muted">Total sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>8569</h4>
                        <small class="text-muted">Open Campaign</small>
                      </div>
                    </div>
                  </div>
                  <div id="morris-line-example"></div>
                </div>
              </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-4">
                    <h4 class="card-title mb-0">Percentage</h4>
                    <p class="mb-0">Last 6 day
                      <i class="mdi mdi-chevron-down"></i>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex">
                            <div class="inner flex-grow">
                              <p class="mb-0">New orders</p>
                              <h4 class="font-weight-bold">16543</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-primary font-weight-bold">13%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex">
                            <div class="inner flex-grow">
                              <p class="mb-0">New Users</p>
                              <h4 class="font-weight-bold">26458</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-info font-weight-bold">64%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 grid-margin-sm-down stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex">
                            <div class="inner flex-grow">
                              <p class="mb-0">Bounced</p>
                              <h4 class="font-weight-bold">2398</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-danger font-weight-bold">24%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 grid-margin-sm-down stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex">
                            <div class="inner flex-grow">
                              <p class="mb-0">Unique Visitors</p>
                              <h4 class="font-weight-bold">12790</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-success font-weight-bold">30%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title">Sales Status</h4>
                    <p class="text-muted d-none d-md-block">29-May-2018, 11.00 AM</p>
                  </div>
                  <div class="chart-container">
                    <canvas class="mt-4" id="sales-status" height="150"></canvas>
                    <div id="sales-status-legend" class="legend-con mt-4 mb-0"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Sales By Products</h4>
                  <div class="d-flex justify-content-between pb-4">
                    <p class="card-description mb-0 d-none d-sm-block">Activity from 4 Jan 2017 to 10 Jan 2017</p>
                    <div id="product-sales-legend"></div>
                  </div>
                  <canvas id="product-sales" height="150"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">Data Tabular</h4>
                  <p class="card-description">Data Tabular Selama Seminggu Terakhir</p>
                  <div class="mt-auto" id="dashboard-sales-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card support-pane-card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Aktifitas Direksi</h4>
                    <div class="btn-toolbar mb-0 d-none d-sm-block" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-success">
                          <i class="mdi mdi-plus-circle"></i> Add
                        </button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-alert-circle-outline"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-delete-empty"></i>
                        </button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-printer"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tipe</th>
                        <th>Tanggal</th>
                        <th>Username</th>
                        <th>Data</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($i=1;$i<=15;$i++){ ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <th><div class="badge badge-primary">Login</div></th>
                        <th><?php echo date('d m Y H:i:s'); ?></th>
                        <th>Demo  <?php echo $i; ?></th>
                        <th>Memasuki sistem <?php echo $i; ?></th>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
@stop