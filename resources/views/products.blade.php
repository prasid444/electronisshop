<head>

<title>Products</title>

{{-- <link href = "/css/bootstrap-min.css" rel = "stylesheet"> --}}
<link href = "/css/bootstrap.css" rel = "stylesheet">
<script src="/js/jquery-3.2.1.js" type="text/javascript"></script>

<script src="/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>



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


</body>
<script>

  $(document).on('click','.pagination a',function(e){

    e.preventDefault();
    console.log($(this).attr('href').split('page='));
    var page=$(this).attr('href').split('page=')[1];
    getProducts(page);
  });
  function getProducts(page){
    $.ajax({
      asyns:true,
      url:'/products/change/?page='+page
    }).done(function (data){
      $('.productcontent').html(data);
      location.hash=page;
    });

  }

</script>
<style>
.pagination {
    display: flex;
}

.pagination a {
    color: black;
    border: 1px solid #ddd; /* Gray */
    /*float: left;*/
    padding: 8px 16px;
    text-decoration: none;
}
.pagination a.active {
  color: black;
  border: 1px solid #ddd; /* Gray */
  /*float: left;*/
  padding: 8px 16px;
  text-decoration: none;
    /*color: red;*/
}

/*.pagination a:hover:not(.active) {background-color: #ddd;}*/


</style>
