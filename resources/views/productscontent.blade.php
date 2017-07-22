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
