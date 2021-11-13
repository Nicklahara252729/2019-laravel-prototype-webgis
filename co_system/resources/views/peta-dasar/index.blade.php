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
                        <li class="breadcrumb-item"><a href="#">Peta Vektor</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Home</span></li>
                      </ol>
                    </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div id="map"></div>


                </div>
              </div>
            </div>
          </div>
</div>
@stop
@section('js')
<script>
var customLabel = {
Province: {
label: 'P'
},
Regency: {
label: 'R'
},
National: {
label: 'N'
},
District: {
label: 'D'
}
};

function initMap() {
var map = new google.maps.Map(document.getElementById('map'), {
center: new google.maps.LatLng(3.597031, 98.678513),
zoom: 8
});
var infoWindow = new google.maps.InfoWindow;

// Change this depending on the name of your PHP or XML file
downloadUrl('', function(data) {
var xml = data.responseXML;
var markers = xml.documentElement.getElementsByTagName('project');
Array.prototype.forEach.call(markers, function(markerElem) {
var Project = markerElem.getAttribute('Project');
var Project2 = markerElem.getAttribute('Project2');
var Scope = markerElem.getAttribute('Scope');
var Area = markerElem.getAttribute('Area');
var Position = markerElem.getAttribute('Position');
var Company = markerElem.getAttribute('Company');
var Years = markerElem.getAttribute('Years');
var marker_image = markerElem.getAttribute('Photo');
var point = new google.maps.LatLng(
parseFloat(markerElem.getAttribute('lat')),
parseFloat(markerElem.getAttribute('lng')));

var infowincontent = document.createElement('div');

var x = document.createElement('IMG');
x.src = marker_image
x.setAttribute('width', '300');
x.setAttribute('width', '200');
document.body.appendChild(x);
infowincontent.appendChild(x);
infowincontent.appendChild(document.createElement('br'));


var strong = document.createElement('strong');
strong.textContent = Project
infowincontent.appendChild(strong);
infowincontent.appendChild(document.createElement('br'));

var strong = document.createElement('strong');
strong.textContent = Project2
infowincontent.appendChild(strong);
infowincontent.appendChild(document.createElement('br'));

var text = document.createElement('text');
text.textContent = Area
infowincontent.appendChild(text);
infowincontent.appendChild(document.createElement('br'));

var text = document.createElement('text');
text.textContent = Position
infowincontent.appendChild(text);
infowincontent.appendChild(document.createElement('br'));

var text = document.createElement('text');
text.textContent = Company
infowincontent.appendChild(text);
infowincontent.appendChild(document.createElement('br'));


var icon = customLabel[Scope] || {};
var marker = new google.maps.Marker({

map: map,
position: point,
label: icon.label

});
marker.addListener('click', function() {
infoWindow.setContent(infowincontent);
infoWindow.open(map, marker);
});
});
});
}



function downloadUrl(url, callback) {
var request = window.ActiveXObject ?
new ActiveXObject('Microsoft.XMLHTTP') :
new XMLHttpRequest;

request.onreadystatechange = function() {
if (request.readyState == 4) {
request.onreadystatechange = doNothing;
callback(request, request.status);
}
};

request.open('GET', url, true);
request.send(null);
}

function doNothing() {}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD88efF-pS5UR2BZhbArDkwmalBosadGvQ&callback=initMap">
</script>
@stop
