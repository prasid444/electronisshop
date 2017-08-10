
{{-- <div id="myrepairdata" data="{{$repairstatus}}"> --}}
<div class="panel panel-default">

  <div class="panel-body">
<div class="container">
  <div class="row">


<div class="col-md-5">

  <h2 class="text-primary">Repair Details</h2>
    <canvas id="repaircanvas" width="300px" height="300px">
      Your Browser needs update bro
    </canvas>
</div>
<div class="col-md-5">

    <h2 class="text-primary">OS Details</h2>
    <canvas id="oscanvas" width="300px" height="300px">
      Your Browser needs update bro
    </canvas>
</div>

<div class="col-md-10">
  <h2 class="text-primary">Purchase Details Weekly</h2>
  <canvas id="bookingweeklycanvas" width="300px" height="300px"></canvas>
</div>

<div class="col-md-10">
  <h2 class="text-primary">Purchase Details Monthly</h2>
  <canvas id="bookingmonthlycanvas " width="300px" height="300px"></canvas>
</div>


</div>
</div>
</div>
</div>

<style>
body {
    background-color:#cacaca;
}

</style>
{{-- </div> --}}

<script>


  var repairinfos=JSON.parse('{!! json_encode($repairstatus) !!} ');
  var osinfos=JSON.parse('{!!json_encode($osstatus)!!}');
  //console.log(data);
  console.log('done');

var repairlabel=repairinfos.map(function(a) {return a.repairStatus;});
var repairdata=repairinfos.map(function(a) {return a.total;});
//  console.log(result);
  var ctx = document.getElementById("repaircanvas").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
      labels:repairlabel,//["M", "T", "W", "T", "F", "S", "S"],
      datasets: [{
        backgroundColor: [
          "#2ecc71",
          "#3498db",
          "#95a5a6",
          "#9b59b6",
          "#f1c40f",
          "#e74c3c",
          "#34495e"
        ],
        data:repairdata,//[12, 19, 3, 17, 28, 24, 7]
      }]
    }
  });

var oslabel1=osinfos.map(function(a) {return a.osname;});
var oslabel2=osinfos.map(function(a) {return a.osname+'('+a.osvalue+')';});
var osdata=osinfos.map(function(a) {return a.total;});
  var ctx1 = document.getElementById("oscanvas").getContext('2d');
  var myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels:oslabel2,//["M", "T", "W", "T", "F", "S", "S"],
      datasets: [{
        backgroundColor: [
          "#2ecc71",
          "#3498db",
          "#95a5a6",
          "#9b59b6",
          "#f1c40f",
          "#e74c3c",
          "#34495e"
        ],
        data:osdata,//[12, 19, 3, 17, 28, 24, 7]
      }]
    }
  });

  var ctx2 = document.getElementById("bookingweeklycanvas").getContext('2d');
  var myChart2 = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: 'apples',
      data: [12, 19, 3, 17, 6, 3, 7],
      backgroundColor: "rgba(153,255,51,0.4)"
    }]
}});


</script>
