<html>

<head>








<meta charset="utf-8" />
<title>Products</title>


</head>

<body>
@component('headings')

@endcomponent

<div class="container" style="width:95%">
<div class="row">
  <div class="col-md-2">

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
    <form action="/products/mainfilter/s" class="filterform" style="" role="form">

      <div class="input-group">
        <span class="input-group-addon">Min Price</span>
        <input type="number" name="minprice" class="form-control" placeholder="">

      </div>
      {{-- <input name="minprice" type='number'  />minprice --}}
      <div class="input-group">
        <span class="input-group-addon">Max Price</span>
        <input name="maxprice" type='number' class="form-control" placeholder="">

      </div>
      {{-- <input name="maxprice" type='number' />maxprice --}}
      <div class="input-group">
        <span class="input-group-addon">Min RAM</span>
        <input name="minram" type="number" class="form-control" placeholder="">

      </div>
    {{-- <input name="minram" type="number" />minram --}}

    <div class="input-group">
      <span class="input-group-addon">Camera</span>
      <input type="number" name="minbackcam" class="form-control" placeholder="in MP">

    </div>

    {{-- <input name="minbackcam" type="number" />minbackcam --}}
    <div class="input-group">

      <input type="submit" class="form-control" value="Filter">

    </div>
    {{-- <input type="submit" value="filter" /> --}}

    {{-- <select id="sortproducts">
    <<option value="0">Usual</option>
    <<option value="1">Price Low to High</option>
    <<option value="2">Price High to Low</option>
    <<option value="3">Popular First</option>
    <<option value="4">New First</option>
    </select> --}}

     </form>
    </div>
     </div>
  </div>
  <div class="col-md-10">
    <div>

      <select id="sortproducts">
      <<option value="0">Usual</option>
      <<option value="1">Price Low to High</option>
      <<option value="2">Price High to Low</option>
      <<option value="3">Popular First</option>
      <<option value="4">New First</option>
    </select> <span>Sorting</span>
    </div>
    <div class="container">

      <div class="row productcontent">

<section class="new-deal">
        		 <div class="container">
        <div class="2 deal deal-block">
      @foreach ($productdatas as $productdata)



        @if ($productdata)


     <div class="col-md-3 col-sm-6 col-xs-12" style="padding-bottom:10px">
     {{-- <div class="col-item cbx-single-all">
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
     </div> --}}
     <div class="item-slide">
           <div class="box-img ">
             <img  class="lazy" style="margin-left:1%; padding:10px 10px;" src="/images/products/samsung-galaxy-pocket.jpg" data-original="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/samsung-galaxy-pocket.jpg'"  alt="{{$productdata->title}}"/>
             <div class="text-wrap">

               <div class="desc">

                 <h3>$1000</h3>
               </div>
               <div class="book-now-c">
               <a href="#">Book Now</a>
               </div>
             </div>
           </div>
           <div class="slide-hover">
           <div class="text-wrap">
           <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight tickets at the best price.</p>
           <h4>Paris europe  <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun, Jan 29 - Tue, Jan 31</span></h4>
               <div class="desc">
                 <span>Starting from</span>
                 <h3>$1000</h3>
               </div>
               <div class="book-now-c">
                 <a href="#">Book Now</a>
               </div>
             </div>
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
    </div>
  </div>
      {{$productdatas->links()}}
</section>
      </div>

      </div>


  </div>
</div>

</div>

</body>
</html>



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
  <link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" href="css/productview.css" media="all" />
  {{-- <link rel="stylesheet" href="css/style.css" media="all" /> --}}
