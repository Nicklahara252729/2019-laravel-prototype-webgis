@extends('display')
@section('main')
<!-- Section: Features -->
<section id="features">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-8">
              <div class="feature-item maxwidth400 mt-30 mb-sm-30">
                <img src="{{asset('public/images/produksi.jpg')}}">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
            <div class="text-center">
                <canvas id="barischart" width="500" height="420"></canvas>
              </div>
              <div class="clear"></div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
            <script type="text/javascript">
$(document).ready(function() {
// Line Chart
var randomScalingFactors = function(){ return Math.round(Math.random()*100)};
var lineChartData = {
  labels : ["January","February","March","April","May","June","July"],
  datasets : [
    {
      label: "My First dataset",
      fillColor : "rgba(220,220,220,0.2)",
      strokeColor : "rgba(220,220,220,1)",
      pointColor : "rgba(220,220,220,1)",
      pointStrokeColor : "#fff",
      pointHighlightFill : "#fff",
      pointHighlightStroke : "rgba(220,220,220,1)",
      data : [randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors()]
    },
    {
      label: "My Second dataset",
      fillColor : "rgba(151,187,205,0.2)",
      strokeColor : "rgba(151,187,205,1)",
      pointColor : "rgba(151,187,205,1)",
      pointStrokeColor : "#fff",
      pointHighlightFill : "#fff",
      pointHighlightStroke : "rgba(151,187,205,1)",
      data : [randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors(),randomScalingFactors()]
    }
  ]
}


//window load
window.onload = function(){
  var chart_lineChart = document.getElementById("barischart").getContext("2d");
  window.myLine = new Chart(chart_lineChart).Line(lineChartData, {
    responsive: true
  });
}
});
</script>
<!-- JS | Chart-->
<script src="{{asset('public/admin/js/chart.js')}}"></script>
@stop