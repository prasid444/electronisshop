<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Electronic Shop|Admin</title>

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

  <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/admin') }}">
                        Admin
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('admin.logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>

      @yield('content')
  </div>

  <div class="container1 col-sm-8" >
      <div class="row" >
          <div class="board" style="padding-left:80px;">
              <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
              <div class="board-inner" >
              <ul class="nav nav-tabs" id="myTab" style="display:inline-flex;" >

                <li  class="active" style="width: 170px;">
                <a  href="sum" data-toggle="tab">
                 <span class="btn btn-main btn-lg">
                         <i class="glyphicon"><h6>Shop</h6></i>
                 </span>
             </a></li>

               <li  style="width: 170px;">
               <a  href="sum" data-toggle="tab">
                <span class="btn btn-main btn-lg">
                        <i class="glyphicon"><h6>Summary</h6></i>
                </span>
            </a></li>

            <li style="width: 170px;">
              <a href="rep"  data-toggle="tab" >
               <span class="btn btn-main btn-lg">
                   <i class="glyphicon"><h6>Repairs</h6></i>
               </span>
     </a> </li>

     <li  style="width: 170px;">
       <a href="pro" data-toggle="tab">
        <span class="btn btn-main btn-lg">
            <i class="glyphicon"><h6>Products</h6></i>
        </span>
     </a> </li>

     <li style="width: 170px;">
       <a href="cus" data-toggle="tab" >
        <span class="btn btn-main btn-lg">
            <i class="glyphicon"><h6>Customers</h6></i>
        </span>
     </a> </li>
               </ul></div>


               <div class="tab-content col-md-12 dashboardcontent" style="text-align:center;">
                 <div class="dashcontainer">

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









  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

<script src="/js/jquery-3.2.1.js" type="text/javascript"></script>

<script type="text/javascript">



// $(document).on('click','#shp',function(e){
//   e.preventDefault();
//   console.log("shop clicked");
// });


//main function to react with tab number and also manage the page

// function getProducts(tabnumber){
//
//
//
//   $.ajax({
//     asyns:true,
//
//     url:'/admin/dash/?tab='+tabnumber
//   }).done(function (data){
//     $('.dashboardcontent').html(data);
//     //location.hash='filter';
//     //history.replaceState();
//     //;azyload
//   //  $("img.lazy").lazyload();
//     location.hash=tabnumber;
//     console.log("done");
// //        console.log(data);
//
//   });
//
// }


$(document).ready(function(){
    $('#myTab li a').on('click',function(e){
        e.preventDefault();
        var tabvalue=$(this).attr('href');
        console.log(tabvalue);


    changeTab(tabvalue);
    });
});


function changeTab(tabvalue){
  //console.log(tabvalue);

  $.ajax({
      asyns:true,
      url:'/admin/section/dash/?tab='+tabvalue,
      headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },
      //dataType:'html',

    //  data:{tab: tabvalue},

    //  url:'/products/filter/?page='+1+'&model=all'+'&minprice=0&maxprice=100000&minram=1&minbackcam=0&sort=0'


    //  data: {tab: tabvalue,_token:  '{{ csrf_token() }}' } ,
// success: function(data){
//       $(".dashcontainer").empty().html(data);
//       console.log("hey i got the data");
// }
// });

  }).done(function (data){

         $(".dashcontainer").empty().html(data);
         console.log(data);
         console.log("hey i got the data");
     });

    //  error: function(err){
    //    console.log(err);
    //  console.log("opps problem here");

 }

//  $.post('{{route('admin.change.section')}}', data:{ _token: '{{ csrf_token() }}', data: tabvalue }, function(response) {
//     console.log(response);
// });



// $(document).ready(function() {
//     $(".nav li a").click(function() {
//
//       $(".dashboardcontent").empty().append("<div id='loading'><img src='loading.gif' alt='Loading' /></div>");
//         $(".nav li").removeClass('active');
//         $(".nav li a").removeClass('current');
//         $(this).addClass('current');
//         $(this < 'a').addClass('active');
//         //console.log($(this).attr('href'));
//         var tabvalue=$(this).attr('href');
//         console.log(tabvalue);
//         $.ajax({
//           asyns:true,
//           url: 'admin/dash/?tabvalue='+tabvalue,
//
//           success: function(html) {
//             $(".dashboardcontent").html(html);
//             console.log("got it");
//             }
// 	});
// 	return false;
//     });
//
//     $(".dashboardcontent").empty().append("<div id='loading'><img src='images/loading.gif' alt='Loading' /></div>");
// 	$.ajax({ asyns:true,
//            url: '/admin/dash/?tabvalue=sum',
//            success: function(html) {
//             $(".dashboardcontent").html(html);
// 	}
//     });
// });
//


</script>




  </body>
</html>
