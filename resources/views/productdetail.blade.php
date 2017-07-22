<head>

<title>{{$productdata->title}}</title>
<link href = "css/bootstrap.css" rel = "stylesheet">
</head>

<body>


<img src="/images/products/{{$productdata->imagename}}" />


{{-- <div class="container">

  <div class="row">
  @foreach ($productdatas as $productdata)



    @if ($productdata)
      <div class="col-md-2" style="background-color:#ddd;border-radius:5px;padding:0px;margin-top:10px;margin-bottom:10px;margin-left:50px;">
    <a href="products/{{$productdata->productid}}">
    <img style="margin-left:1%; padding:10px 10px; height:40%;" src="/images/products/{{$productdata->imagename}}"  />
      <br /><p style="border:2px solid #F44; text-align:center; font-size:12px;">
        {{$productdata->title}}</p>
    </a>
    </div>




    @endif

  @endforeach
  </div>
  </div> --}}
</body>
