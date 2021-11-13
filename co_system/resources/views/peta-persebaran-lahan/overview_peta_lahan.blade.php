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
                        <li class="breadcrumb-item active" aria-current="page"><span>Overview</span></li>
                      </ol>
                    </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="testering map" src="https://unimed.maps.arcgis.com/apps/webappviewer/index.html?id=513bb55f4f494bd396d194dc0ac3d735"></iframe></div>
                </div>
              </div>
            </div>
          </div>
</div>
@stop
@section('js')

@stop
