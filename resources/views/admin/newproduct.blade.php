{{-- <div class="mymodal"> --}}
  {{-- <div class="mymodal-content"> --}}
    {{-- <span class="myclose">&times;</span> --}}


<form enctype="multipart/form-data" class="productadder"   name="newproductform"  method="post">
  {{ csrf_field() }}

  {{-- <h3 align="center" class="label-primary">Add Product</h3> --}}

<div class="productaddercontainer"  style="margin-top:10px">
<div class="leftside form-group col-xs-6">
<div>

    <span class="input-group-addon">Image</span>
    <input name="productfile" id="productfile" type="file" accept="image/jpeg, image/png" />
  </div>


<div class="input-group">
  <span class="input-group-addon">Model</span>
  <input  type="text" name="productmodel" class="form-control" placeholder="model">
</div>


  <div class="input-group">
    <span class="input-group-addon">Brand</span>
    <input  type="text" name="productbrand" class="form-control" placeholder="brand">


  </div>
  <div class="input-group">
    <span class="input-group-addon">OS</span>
  <select  class="osselect selector form-control" name="osselect">

      @foreach ($osdatas as $osdata)
        <option value="{{$osdata->osid}}">{{$osdata->osname}}({{$osdata->osvalue}})</option>
      @endforeach
  </select>
</div>
  <div class="input-group">
    <span class="input-group-addon">Internal Memory</span>
    <input  type="number" name="productinternalmemory" class="form-control" placeholder="in GB">

  </div>
  <div class="input-group">
    <span class="input-group-addon">RAM</span>
    <input  type="number" name="productram" class="form-control" placeholder="in GB">

  </div>
  <div class="input-group">
    <span class="input-group-addon">Price</span>
    <input  type="number" name="productprice" class="form-control" placeholder="Price(RS)">

  </div>
  <div class="input-group">
    <span class="input-group-addon">Discount</span>
    <input type="number" name="productdiscount" min="0" max="100"class="form-control" placeholder="Price(RS)">

  </div>
  <div class="input-group">
    <span class="input-group-addon">Primary Camera</span>
    <input  type="number" name="productprimarycamera" class="form-control" placeholder="Back Camera detail">
  </div>
  <div class="input-group">
    <span class="input-group-addon">Weight</span>
    <input  type="number" name="productweight" class="form-control" placeholder="Weight(in gm)">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Screen Size</span>
    <input  type="float" name="productscreen" class="form-control" placeholder="In inches">


  </div>
</div>


<div class="rightside form-group col-xs-6">
<div class="input-group">
  <span class="input-group-addon">Secondary Camera</span>
  <input  type="text" name="productsecondarycamera" class="form-control" placeholder="Front Camera detail">


</div>
<div class="input-group">
  <span class="input-group-addon">External Memory</span>
  <input type="text" name="productexternalmemory" class="form-control" placeholder="">

</div>
<div class="input-group">
  <span class="input-group-addon">Multitouch</span>
  <input type="text" name="productmultitouch" class="form-control" placeholder="multitouchoption">

</div>
<div class="input-group">
  <span class="input-group-addon">CPU</span>
  <input  type="text" name="productcpu" class="form-control" placeholder="CPU detail">


</div>
<div class="input-group">
  <span class="input-group-addon">GPU</span>
  <input  type="text" name="productgpu" class="form-control" placeholder="GPU detail">


</div>


</div>








  {{-- <input name="data"  type="date" placeholder="date" /> --}}

</div>
<div style="position:absolute;right:5%;top:90%;">

  <input type="submit" class="btn btn-primary" value="Save" />

  <button type="button" class="btn btn-danger" onclick="hideproduct()" >Cancel</button>
</div>

</form>

<style>


</style>
