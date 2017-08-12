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

  <div class="container1 col-sm-9" >
      <div class="row" >
          <div class="board" style="padding-left:80px;">
              <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
              <div class="board-inner" >
              <ul class="nav nav-tabs" id="myTab" style="display:inline-flex;" >

                <li  class="active" style="width: 170px;">
                <a  href="shp" data-toggle="tab">
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
                 <div class="aboutshop">
                     <h1>This is about shop</h1>

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









  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="/js/Chart.bundle.js" type="text/javascript"></script>
<script src="/js/Chart.js" type="text/javascript"></script>
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

        if(tabvalue=='shp'){
          $('.dashcontainer').empty();
          $(".aboutshop").show();
        }
        else {
            $(".aboutshop").hide();
            changeTab(tabvalue);
        }

    });
});


function changeTab(tabvalue){
  //console.log(tabvalue);

  $.ajax({
      asyns:true,
      url:'/admin/section/dash/?tab='+tabvalue,
      headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },
      //dataType:'html',
      //dataType:'json',

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
        // data=JSON.parse(data);
        //console.log(data);
         console.log("hey i got the data to change tab value");
         if(tabvalue=='sum'){
           console.log('you are in summary');
           console.log(data);
         }

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
function addproduct(tab){
  console.log('you are in add product'+tab);
  switch (tab) {
    case 1:

      break;
      case 2:

        break;
        case 3:
          $('.repairticketadder').trigger('reset');

          break;
          case 4:
          $('.productadder').trigger('reset');

            break;
            case 5:
            $('.customeradder').trigger('reset');
    default:
    break;
  }
  $('.adddatacontent').show();
}

function deleteproduct(id,tab){
  console.log("tab is:"+tab+" and id is "+id);
  switch (tab) {
    case 1:

      break;
      case 2:

        break;
        case 3:
        console.log("you are in deleteing repair ticket state");
        $.ajax({
          asyns:true,
          type:'get',
          url:'/admin/deleterepairticket/',
          data:{rid:id},
          headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },


        }).done(function(data){
          console.log('returned after deleting');
          $(".dashcontainer").empty().html(data);
        });



          break;
          case 4:
          console.log('you are in deleting product state');
            break;

            case 5:
              console.log('ypu are now in delete customer state');
              $.ajax({
                asyns:true,
                type:'get',
                url:'/admin/deletecustomer/',
                data:{cid:id},
                headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },


              }).done(function(data){
                console.log('returned after deleting');
                $(".dashcontainer").empty().html(data);
              });
              break;
    default:
    break;

  }
}

function editproduct(data,tab){

  //alert(data);
  console.log("clicked tab is:" + tab);
  data=JSON.parse(data);

switch (tab) {
  case 1:
      break;
  case 2:
      break;
      case 3:
          $('.repairticketeditor').trigger('reset');
          $('input[name="repairid"]').val(data.repairid);
          $('input[name="rstatus"]').val(data.repairStatus);
          $('input[name="rexpectedprice"]').val(data.expectedCost);
          $('input[name="rmodel"]').val(data.repairModel);
          $('input[name="rbrand"]').val(data.repairBrand);
          $('input[name="rImei"]').val(data.repairImei);
          $('input[name="rpassword"]').val(data.repairPassword);
        break;
        case 4:
          $('.producteditor').trigger('reset');
          //var $form=$('.producteditor');
          //$form.
          //console.log(data.title);
          $('input[name="productid"]').val(data.productid);
          $('input[name="pname"]').val(data.title);
          $('input[name="pprice"]').val(data.price);
          $('input[name="pdiscount"]').val(data.discount);
          $('input[name="pstock"]').val(data.stock);
          $('input[name="pbrand"]').val(data.brand);
          $('input[name="pram"]').val(data.RamSize);
          $('.osselect').val(data.osid);
          $('input[name="pinternal"]').val(data.InternalSize);
          $('input[name="pprimarycamera"]').val(data.PrimaryMP);
        break;
        case 5:
          $('.customereditor').trigger('reset');
          $('input[name="customerid"]').val(data.customerid);
          $('input[name="cfname"]').val(data.customerFirstName);
          $('input[name="cmname"]').val(data.customerMiddleName);
          $('input[name="clname"]').val(data.customerLastName);
          $('input[name="ccontact1"]').val(data.customerContact1);
          $('input[name="cemaile"]').val(data.customerEmail);
          $('input[name="caddress"]').val(data.customerAddress);

        break;

  default:
  break;

}

  $('.editdatacontent').show();






}
function hideproduct(){
  console.log("hidden successfulyy");
    $('.editdatacontent').hide();

    $('.adddatacontent').hide();

}

$(document).on('submit','.producteditor',function(e){
  e.preventDefault();
  var pid=$('input[name="productid"]').val();
  var pname=$('input[name="pname"]').val();
  var pprice=$('input[name="pprice"]').val();
  var pdiscount=$('input[name="pdiscount"]').val();
  var pstock=$('input[name="pstock"]').val();
  var pbrand=$('input[name="pbrand"]').val();
  var pram=$('input[name="pram"]').val();
  var pandroidversion=$('.osselect').val();
  var pinternal=$('input[name="pinternal"]').val();
  var pprimarycamera=$('input[name="pprimarycamera"]').val();
  console.log(pandroidversion);

  $.ajax({
    asyns:true,
    type:'POST',
    url:'/admin/updateproduct/',
    data:{pid:pid,pname:pname,pprice:pprice,pdiscount:pdiscount,pstock:pstock,pbrand:pbrand,pram:pram,pandroidversion:pandroidversion,pinternal:pinternal,pprimarycamera:pprimarycamera},

    headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },


  }).done(function(data){
    console.log('i am done in updating the products ');

     //$(".dashcontainer").empty().html(data);
     $(".dashcontainer").empty().html(data);
     $('.notificationtext').fadeIn(1000);
     $('.notificationtext').fadeOut(2000);



  }) ;

  //console.log("got: " + pname + ' and ' + pprice + ' and '+pdiscount );
  //$(this).trigger('reset');

});

$(document).on('submit','.repairticketeditor',function(e){
  e.preventDefault();
  var rid=$('input[name="repairid"]').val();
  var rstatus=$('input[name="rstatus"]').val();
  var rexpectedprice=$('input[name="rexpectedprice"]').val();
  var rmodel=$('input[name="rmodel"]').val();
  var rbrand=$('input[name="rbrand"]').val();
  var rImei=$('input[name="rImei"]').val();
  var rpassword=$('input[name="rpassword"]').val();



  $.ajax({
    asyns:true,
    type:'get',
    url:'/admin/updaterepairticket/',
    data:{rid:rid,rstatus:rstatus,rexpectedprice:rexpectedprice,rmodel:rmodel,rbrand:rbrand,rImei:rImei,rpassword:rpassword},

    headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },

    // success:function(data){
    //   console.log('got it');
    // },
    // error:function(da){
    //   console.error('opppss');
    //   console.log(da);
    // }
  }).done(function(data){
    console.log('i am done in updating the repairtickts ');

   //$('.editdatacontent').fadeOut(2000);

    console.log('notification shows');
     $(".dashcontainer").empty().html(data);
     $('.notificationtext').fadeIn(1000);
     $('.notificationtext').fadeOut(2000);


  });
//console.log('i am here');

});

$(document).on('submit','.productadder',function(e){
  e.preventDefault();
  console.log("submitted");

  // var formParams={};
  // $(this).serializeArray().forEach(function(item){
  //   if (formParams[item.name]) {
  //       formParams[item.name] = [formParams[item.name]];
  //       formParams[item.name].push(item.value)
  //     } else {
  //       formParams[item.name] = item.value
  //     }
  // });
  var formParams=$(this).serialize();
  $.ajax({
    asyns:true,
    url:'/admin/addproduct/?'+formParams+'&productfile='+$('#productfile').val(),
    headers: { 'X-CSRF-Token' : $('meta[name=casf-token]').attr('content') },

    error:function(err){
      console.log(err);
    },
  }).done(function(data){
    console.log(data);
    $(".dashcontainer").empty().html(data);
    $('.notificationtext').fadeIn(1000);
    $('.notificationtext').fadeOut(2000);
    });
  console.log(formParams);




  //console.log(.productmodel);
});
$(document).on('submit','.repairticketadder',function(e){
    e.preventDefault();
    //var rid=$('input[name="repairid"]').val();
    //var rstatus=$('input[name="rstatus"]').val();
    var cid=$('.repairticketadder input[name="customerid"]').val();
    var rexpectedprice=$('.repairticketadder input[name="expectedCost"]').val();
    var rmodel=$('.repairticketadder input[name="repairmodel"]').val();
    var rissue=$('.repairticketadder input[name="repairIssue"]').val();
    var rcolor=$('.repairticketadder input[name="repairColor"]').val();
    var rImei=$('.repairticketadder input[name="repairImei"]').val();
    var rpassword=$('.repairticketadder input[name="repairPassword"]').val();




    $.ajax({
      asyns:true,
      type:'get',
      url:'/admin/addrepairticket/',
      data:{cid:cid,rcolor:rcolor,rexpectedprice:rexpectedprice,rmodel:rmodel,rissue:rissue,rImei:rImei,rpassword:rpassword},

      headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },

      // success:function(data){
      //   console.log('got it');
      // },
      // error:function(da){
      //   console.error('opppss');
      //   console.log(da);
      // }
    }).done(function(data){
      console.log('i am done in adding the repairtickts ');
      $(".dashcontainer").empty().html(data);
      $('.notificationtext').fadeIn(1000);
      $('.notificationtext').fadeOut(2000);



    });
});


$(document).on('submit','.customeradder',function(e){
    e.preventDefault();
    //var rid=$('input[name="repairid"]').val();
    //var rstatus=$('input[name="rstatus"]').val();
    //var cid=$('.customeradder input[name="customerid"]').val();
    var cfname=$('.customeradder input[name="cfname"]').val();
    var cmname=$('.customeradder input[name="cmname"]').val();
    var clname=$('.customeradder input[name="clname"]').val();
    var ccontact1=$('.customeradder input[name="ccontact1"]').val();
    var cemail=$('.customeradder input[name="cemail"]').val();
    var caddress=$('.customeradder input[name="caddress"]').val();




    $.ajax({
      asyns:true,
      type:'get',
      url:'/admin/addcustomer/',
      data:{cfname:cfname,cmname:cmname,clname:clname,ccontact1:ccontact1,cemail:cemail,caddress:caddress},

      headers: { 'X-CSRF-Token' : $('meta[name=carf-token]').attr('content') },
      //dataType:'JSON',
      // success:function(data){
      //   console.log('got it');
      // },
      // error:function(da){
      //   console.error('opppss');
      //   console.log(da);
      // }
    }).done(function(data){
      console.log('i am done in adding the customers ');
      //console.log(data);
      $(".dashcontainer").empty().html(data);
      $('.notificationtext').fadeIn(1000);
      $('.notificationtext').fadeOut(2000);
;


    });
});

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

.adddatacontentdiv{

  width: 80%;
}
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
  top:9%;
  left:10%;
  width:50%;
  height: 90%;
  display:none;
  overflow-y: auto;
  overflow-x:hidden;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0
}
.adddatacontent{
  position:fixed;
  background-color:#dfd;
  z-index:1;
  top:9%;
  left:10%;
  width:50%;
  height: 90%;
  display:none;
  overflow-y:auto;
  overflow-x:hidden;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0
}
.fixed-content {
    top: 0;
    bottom:0;
    position:fixed;
    overflow-y:scroll;
    overflow-x:hidden;
}
.input-group{
  margin-top: 10px;
}
</style>


  </body>
</html>
