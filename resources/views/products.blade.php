<html>

<head>
<meta charset="utf-8" />
<title>Products</title>

{{-- <link href = "/css/bootstrap-min.css" rel = "stylesheet"> --}}

<link href="/css/bootstrap.css" rel="stylesheet" />

</head>

<body>

  <div class="filter">


   <h3>Filter by models</h3>

   <div id="ab">Models</div>

   <select id="fetchmodel" name="modelname">
     <<option value="all">All</option>
   @if ($models)
   @foreach ($models as $model)
     <option value="{{$model->brand}}">{{$model->brand}}</option>
   @endforeach
   @endif
   </select>
 </div>
<div class="container">

  <div class="row productcontent">



  @foreach ($productdatas as $productdata)



    @if ($productdata)
      <div class="col-md-2 " style="background-color:#ddd;border-radius:5px;padding:0px;margin-top:10px;margin-bottom:10px;margin-left:50px;">
    <a href="products/{{$productdata->productid}}">



  <img style="margin-left:1%; padding:10px 10px; size:cover; " src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"  alt="{{$productdata->title}}"/>




      <p style="border:2px solid #F44; text-align:center; font-size:1em;">

        {{$productdata->title}}</p>

    </a>

    </div>


    @endif

  @endforeach
  {{$productdatas->links()}}

  </div>

  </div>



  <script src="/js/jquery-3.2.1.js" type="text/javascript"></script>

  <script >

    $(document).on('click','.pagination a',function(e){
      e.preventDefault();
      console.log($(this).attr('href').split('page='));
      var page=$(this).attr('href').split('page=')[1];
      getProducts(page);
    });
    function getProducts(page){
      $.ajax({
        asyns:true,
        url:'/products/filter/?page='+page+'&model='+$('#fetchmodel').val()
      }).done(function (data){
        $('.productcontent').html(data);
        location.hash=page;
        console.log("done");
//        console.log(data);

      });

    }
    $(document).on('change','#fetchmodel',function(e){
      e.preventDefault();

      //var pm=$(this).attr('href').split('model=')[1];
      //console.log($(this).attr('href'));
      var modelvalue=$(this).val();
      console.log(modelvalue);
      filterProducts(modelvalue);
    });

    function filterProducts(modelvalue){
      $.ajax({
        asyns:true,

        url:'/products/filter/?model='+modelvalue
      }).done(function (data){
        $('.productcontent').html(data);

        //location.hash=modelvalue;

        console.log(data);
      });

    }
  </script>
  <style>
  .pagination {
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


  </style>

</body>
</html>
