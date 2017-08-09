<html>

<head>

  <!-- Bootstrap Core CSS -->
  {{-- <link href="css1/bootstrap.css" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="css1/bootstrap-r  esponsive.css"> --}}

  <!-- Custom Css -->


  {{-- <link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/animate.css')}}" media="all"  /> --}}
  {{-- <link href="{{ asset('css1/main.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('css1/style.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
  {{-- <link href="{{ asset('css1/theme.css')}}" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css2/main.css')}}"> --}}
  {{-- <link href="{{ asset('css2/custom.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('css1/styled.css')}}" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}"> --}}
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" media="all" />
        {{-- <link rel="stylesheet" href="{{ asset('css2/bootstrap.css')}}" media="all" /> --}}
      {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" media="all" /> --}}
        {{-- <link href="{{ asset('css/theme2.css')}}" rel="stylesheet"> --}}
         {{-- <link href="{{ asset('css2/style.css')}}" rel="stylesheet"> --}}
      {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" media="all" />  ' --}}

        {{-- <link rel="stylesheet" href="{{ asset('css/social.css')}}"> --}}
       {{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
         {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}
         {{-- <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script> --}}


{{-- <script src="js/jquery-unveil.min.js" type="text/javascript"></script> --}}

  <!-- Custom Fonts -->
  {{-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> --}}
         <link rel="stylesheet" href="{{ asset('css/style.css')}}" media="all" />
         <link rel="stylesheet" href="{{ asset('css1/theme.css')}}" media="all" />
         <link rel="stylesheet" href="{{ asset('css1/main.css')}}" media="all" />

      <link rel="stylesheet" id="lz-switcher-style" href="{{ asset('css/switcher-default.css')}}" media="all" />


      {{-- <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script> --}}
      {{-- <script type="text/javascript" src="https://raw.githubusercontent.com/ressio/lazy-load-xt/master/dist/jqlight.lazyloadxt.min.js"></script> --}}

<style type="text/css">


  #tree-container label.hover{
      color: red;
  }


</style>
<script>

</script>
<meta charset="utf-8" />
<title>Products</title>

{{-- <link href = "/css/bootstrap-min.css" rel = "stylesheet"> --}}

<link href="/css/bootstrap.css" rel="stylesheet" />





<link href="css1/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css1/bootstrap-responsive.css">

<!-- Custom Css -->


<link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.css')}}" media="all"  />
<link href="{{ asset('css1/main.css')}}" rel="stylesheet">
<link href="{{ asset('css1/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css1/theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css2/main.css')}}">
<link href="{{ asset('css2/custom.css')}}" rel="stylesheet">
<link href="{{ asset('css1/styled.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css1/custom-styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" media="all" />
      <link rel="stylesheet" href="{{ asset('css2/bootstrap.css')}}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" media="all" />
      <link href="{{ asset('css/theme2.css')}}" rel="stylesheet">
       <link href="{{ asset('css2/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" media="all" />  '

      <link rel="stylesheet" href="{{ asset('css/social.css')}}">
     {{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
       {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}


<!-- Custom Fonts -->
{{-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> --}}
       <link rel="stylesheet" href="{{ asset('css/style.css')}}" media="all" />

    <link rel="stylesheet" id="lz-switcher-style" href="{{ asset('css/switcher-default.css')}}" media="all" />


    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>

</head>

<body>
  <div class="cblzbody-wrapper">
  <header>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="padding-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
<div class="container">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="#">Mobile Repair</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
 <ul class="nav navbar-nav navbar-right">
   <li class=""><a href="../">HOME</a> </li>
   <li class=""><a href="/products">STORE</a> </li>
   <li class=""><a href="#">CONTACT US</a> </li>
   <li class=""><a href="#">CART<span class="badge">1</span></a></li>
   <!-- Right Side Of Navbar -->
   <ul class="nav navbar-nav navbar-right">
       <!-- Authentication Links -->
       @if (Auth::guest())
           <li><a href="{{ route('login') }}">Login</a></li>
           <li><a href="{{ route('register') }}">Register</a></li>
       @else
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <ul class="dropdown-menu" role="menu">
                   <li>
                       <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                           Logout
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                       </form>
                   </li>
               </ul>
           </li>
       @endif
   </ul>

 </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


<!-- Intro Header -->

  </header>


  <div class="filter">

<div class="modelfilter">

   <h3>Filter by models</h3>

   <div id="ab">Models</div>

   <select id="fetchmodel" name="modelname">
     <<option value="all">All</option>
   @if ($models)
   @foreach ($models as $model)
     <option value="{{$model->brand}} ">{{$model->brand}}({{$model->total}})</option>
   @endforeach
   @endif
   </select>

 </div>
<div style="display:flex;">
<form action="/products/mainfilter/s" class="filterform" style="display:flex" role="form">

  <input name="minprice" type='number'  />minprice
  <input name="maxprice" type='number' />maxprice

<input name="minram" type="number" />minram


<input name="minbackcam" type="number" />minbackcam

<input type="submit" value="filter" />

<select id="sortproducts">
<<option value="0">Usual</option>
<<option value="1">Price Low to High</option>
<<option value="2">Price High to Low</option>
<<option value="3">Popular First</option>
<<option value="4">New First</option>
</select>

 </form>
</div>
 </div>
<div class="container">

  <div class="row productcontent">



  @foreach ($productdatas as $productdata)



    @if ($productdata)


 <div class="col-md-3 col-sm-6 col-xs-12" style="padding-bottom:10px">
 <div class="col-item cbx-single-all">
 <div class="photo">
 <img  class="lazy" style="margin-left:1%; padding:10px 10px;" src="/images/products/samsung-galaxy-pocket.jpg" data-original="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/samsung-galaxy-pocket.jpg'"  alt="{{$productdata->title}}"/>
 </div>
 <div class="info">
 <div class="row">
   <div class="price col-md-12 xs-text-center">
       <h5 class="product-title-color"><strong><a href="products/{{$productdata->productid}}" >{{$productdata->title}}</a> </strong></h5>
       <h5 class="price-text-color">{{$productdata->price}}</h5>
   </div>
 </div>
 <div class="separator clear-left">
   <p class="btn-add">
       <i class="fa fa-shopping-cart"></i>
       <a href="#" class="hidden-sm">Add to cart</a>
   </p>
   <p class="btn-details">
       <i class="fa fa-list"></i>
       <a href="products/{{$productdata->productid}}"  class="hidden-sm">Details</a>
   </p>
 </div>
 <div class="clearfix"></div>
 </div>
 </div>
 </div>
  <!--//Item-->


      {{-- <div class="col-md-2 " style="background-color:#ddd;border-radius:5px;padding:0px;margin-top:10px;margin-bottom:10px;margin-left:50px;">
    <a href="products/{{$productdata->productid}}">
  <img style="margin-left:1%; padding:10px 10px; size:cover; " src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"  alt="{{$productdata->title}}"/>
      <p style="border:2px solid #F44; text-align:center; font-size:1em;">
        {{$productdata->title}}</p>
    </a>

    </div> --}}


    @endif

  @endforeach
  {{$productdatas->links()}}

  </div>

  </div>



  <script src="/js/jquery-3.2.1.js" type="text/javascript"></script>
  <script src="/js/jquery.lazyload.js" type="text/javascript"></script>

  <script >


//forr filtering from form
  $('.filterform').submit(function(event){
    event.preventDefault();



        getProducts(1);
    });

//not used now
    function getFilteredResult(minprice,maxprice,minram,minbackcam,model){

        $.ajax({
          asyns:true,
          type:'get',
          url:'/products/mainfilter/?model='+model+'&minprice='+minprice
        }).done(function (data){
          $('.productcontent').html(data);
          console.log(data);
        });
    }
    $(function () {
               $(function () {
                   $("img.lazy").lazyload({
                       event: "sporty"
                   });
               });
               $(window).bind("load", function () {
                   var timeout = setTimeout(function () { $("img.lazy").trigger("sporty") }, 500);
               });
           });
//
//   $(function() {
//   $("img.lazy").lazyload({
//     event:"sporty"
//     //event:"click" //show when clicked
//     //thresold:200  //load 200px before appear in viewport
//   });
// });

//while clicking next page
    $(document).on('click','.pagination a',function(e){
     e.preventDefault();
      $(document).ready(function(){
   $(window).scrollTop(0);
});
      console.log($(this).attr('href').split('page='));
      // var he="hellp";
      // console.log("hello".substring(0,he.length-4));
      var page=$(this).attr('href').split('page=')[1];

      getProducts(page);
    });

    //main function to filter the products and also manage the page
    function getProducts(page){

      var minprice=$('.filterform').find('input[name="minprice"]').val();
      if(minprice.trim().length==0){
        minprice=0;
        console.log("minprice is emptys");
      }
      var maxprice=$('.filterform').find('input[name="maxprice"]').val();
      if(maxprice.trim().length==0){
        maxprice=1000000;
        console.log("maxprice is emptys");
      }
      var minram=$('.filterform').find('input[name="minram"]').val();
      if(minram.trim().length==0){
        minram=0;
        console.log("minram is emptys");
      }
      var minbackcam=$('.filterform').find('input[name="minbackcam"]').val();
      if(minbackcam.trim().length==0){
        minbackcam=0;
        console.log("minbackcam is emptys");
      }
      $.ajax({
        asyns:true,

        url:'/products/filter/?page='+page+'&model='+$('#fetchmodel').val()+'&minprice='+minprice+'&maxprice='+maxprice+'&minram='+minram+'&minbackcam='+minbackcam+'&sort='+$('#sortproducts').val()
      }).done(function (data){
        $('.productcontent').html(data);
        //location.hash='filter';
        //history.replaceState();
        //;azyload
        $("img.lazy").lazyload();
        console.log("done");
//        console.log(data);

      });

    }

    //while changing model
    $(document).on('change','#fetchmodel',function(e){
      e.preventDefault();

      //var pm=$(this).attr('href').split('model=')[1];
      //console.log($(this).attr('href'));
      var modelvalue=$(this).val();
      console.log(modelvalue);
      getProducts(1);
    //  filterProducts(modelvalue);
    });

    //while changing sorting method
    $(document).on('change','#sortproducts',function(e){
      e.preventDefault();

      //var pm=$(this).attr('href').split('model=')[1];
      //console.log($(this).attr('href'));
      var sortvalue=$(this).val();
      console.log("sorting method"+sortvalue);
      getProducts(1);
    //  filterProducts(modelvalue);
    });

//not used now
    function filterProducts(modelvalue){
      $.ajax({
        asyns:true,

        url:'/products/filter/?model='+modelvalue
      }).done(function (data){
        $('.productcontent').html(data);
        //laxyload
        $("img.lazy").lazyload();

        //location.hash=modelvalue;

        console.log(data);
      });

    }


  </script>
  <style>
  /*.pagination {
      display: flex;
  }

  .pagination a {
      color: black;
      border: 1px solid #ddd;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
  }
  .pagination .active {
    background-color: lightgreen;
    border: 1px solid #ddd;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
      color: red;
  }

  .pagination a:hover:not(.active) {background-color: #ddd;}
*/

  </style>

</body>
</html>
