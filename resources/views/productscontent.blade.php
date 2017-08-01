@foreach ($productdatas as $productdata)



  @if ($productdata)


<div class="col-md-3 col-sm-6 col-xs-12" style="padding-bottom:10px">
<div class="col-item cbx-single-all">
<div class="photo">
  <img  class="lazy" style="margin-left:1%; padding:10px 10px; " src="/images/products/samsung-galaxy-pocket.jpg" data-original="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/samsung-galaxy-pocket.jpg'"  alt="{{$productdata->title}}"/>
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


{{-- @foreach ($productdatas as $productdata)



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
{{$productdatas->links()}} --}}
