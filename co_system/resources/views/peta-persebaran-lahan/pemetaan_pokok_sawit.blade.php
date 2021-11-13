@extends('theme')
@section('main')
<style>
/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {
height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
height: 100%;
margin: 0;
padding: 0;
}
</style>
<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Peta Persebaran Lahan</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Pemetaan Pokok Sawit</span></li>
                      </ol>
                    </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                      <img class="img-fluid rounded" src="{{asset('public/images/digitasi.jpg')}}" alt="tab preview">
                    </div>
                    <div class="col-md-3">
                      <ul class="nav nav-tabs tab-basic" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#whoweare" role="tab" aria-controls="whoweare" aria-selected="true">catalog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ourgoal" role="tab" aria-controls="ourgoal" aria-selected="false">information</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">custom</a>
                        </li>
                      </ul>
                      <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="whoweare" role="tabpanel" aria-labelledby="home-tab">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="tab-pane fade" id="ourgoal" role="tabpanel" aria-labelledby="profile-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="contact-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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

@stop
