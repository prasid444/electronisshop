{{-- <div id="myrepairdata" data="{{$repairstatus}}"> --}}
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
  <h2 class="text-primary">Bookings Details</h2>
  <canvas id="bookingcanvas "></canvas>
</div>
</div>
</div>
</div>
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

</script>
