<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Electronic Shop|User</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css1/theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" media="all" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>



  <body>

    @component('headings')

    @endcomponent


  <div class="container1 col-sm-8" >
      <div class="row" >
          <div class="board" style="padding-left:80px;">
              <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
              <div class="board-inner" >
              <ul class="nav nav-tabs" id="myTab" style="display:inline-flex;" >

                <li  class="active" style="width: 400px;">
                <a  href="inf" data-toggle="tab">
                 <span class="btn btn-main btn-lg">
                         <i class="glyphicon"><h6>Information</h6></i>
                 </span>
             </a></li>

               <li  style="width: 400px">
               <a  href="car" data-toggle="tab">
                <span class="btn btn-main btn-lg">
                        <i class="glyphicon"><h6 align="center">Cart</h6></i>
                </span>
            </a></li>






               </ul></div>


               <div class="tab-content col-md-12 dashboardcontent" style="text-align:center;">
                 <div class="aboutuser">
                     <h1>This is about user</h1>

                 </div>
                 <div class="dashcontainer" style="position:relative">

                 </div>

               {{-- <div class="tab-pane fade in active" id="sum" style="margin:10px">

                  @component('admin.shopdetails')

                  @endcomponent --}}

             {{-- <div class="tab-pane fade" id="rep" style="margin:10px">

                  @component('admin.repairticketlists')

                  @endcomponent --}}




                {{-- </div>
                <div class="tab-pane fade" id="pro" style="margin:10px">

                  @component('admin.productslists')

                  @endcomponent




                </div>
                <div class="tab-pane fade" id="cus" style="margin:10px">

                  @component('admin.customerslists')

                  @endcomponent




                </div> --}}
              </div>








            </body>
          </html>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="/js/bootstrap.js" type="text/javascript"></script>

<script src="/js/jquery-3.2.1.js" type="text/javascript"></script>

<script type="text/javascript">






$(document).ready(function(){
    $('#myTab li a').on('click',function(e){
        e.preventDefault();
        var tabvalue=$(this).attr('href');
        console.log(tabvalue);

        if(tabvalue=='inf'){
          $('.dashcontainer').empty();
          $(".aboutuser").show();
        }
        else {
            $(".aboutuser").hide();
            changeTab(tabvalue);
        }
    });
});


function changeTab(tabvalue){
  //console.log(tabvalue);

  $.ajax({
      asyns:true,
      //type:'POST',
      url:'/user/section/dash/',
      data:{tab:tabvalue},
      headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') },
    //  dataType:'text',
    //dataType:'json',
  error:function(d){
    console.error(d);
  },



  }).done(function (data){

         $(".dashcontainer").empty().html(data);
        // console.log(data);
         console.log("hey i got the data to change tab value USER");
     });

    //  error: function(err){
    //    console.log(err);
    //  console.log("opps problem here");

 }


function togglehideshow(idname){
  var x = document.getElementById(idname);

   if (x.style.display === 'none') {
       x.style.display = 'block';
       $('#showhider').text('Show less');

   } else {
       x.style.display = 'none';
       $('#showhider').text('Show more');
   }

}



</script>

<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.notificationtext{
  position:fixed;z-index:1;top:17%;left:15%;width:40%;display:none;
}


.editdatacontent{
  position:fixed;
  background-color:#dfd;
  z-index:1;
  top:15%;
  left:10%;
  width:50%;
  display:none;
  overflow-y:scroll;
  overflow-x:hidden;
}
.adddatacontent{
  position:fixed;
  background-color:#dfd;
  z-index:1;
  top:15%;
  left:10%;
  width:50%;
  display:none;
  overflow-y:scroll;
  overflow-x:hidden;
}
.fixed-content {
    top: 0;
    bottom:0;
    position:fixed;
    overflow-y:scroll;
    overflow-x:hidden;
}
label { display: table-cell; }
input { display: table-cell; }
</style>
