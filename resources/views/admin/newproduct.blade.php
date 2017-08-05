


<form class="productadder" name="newproductform" method="post">
  <h3 align="center" class="label-primary">Add Product</h3>

<div class="productaddercontainer" >
<div class="leftside form-group col-xs-6">
<div>

    <span class="input-group-addon">Image</span>
    <input name="productfile" type="file" accept="image/jpeg, image/png" />
  </div>


<div class="input-group">
  <span class="input-group-addon">Model</span>
  <input type="text" name="productmodel" class="form-control" placeholder="model">
</div>


  <div class="input-group">
    <span class="input-group-addon">Brand</span>
    <input type="text" name="productbrand" class="form-control" placeholder="brand">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Internal Memory</span>
    <input type="number" name="productinternalmemory" class="form-control" placeholder="in GB">

  </div>
  <div class="input-group">
    <span class="input-group-addon">RAM</span>
    <input type="number" name="productram" class="form-control" placeholder="in GB">

  </div>
  <div class="input-group">
    <span class="input-group-addon">Price</span>
    <input type="text" name="producprice" class="form-control" placeholder="Price(RS)">

  </div>

</div>

</div>
<div class="rightside form-group col-xs-6">
<div class="input-group">
  <span class="input-group-addon">Secondary Camera</span>
  <input type="text" name="productsecondarycamera" class="form-control" placeholder="Front Camera detail">


</div>
<div class="input-group">
  <span class="input-group-addon">External Memory</span>
  <input type="text" name="productexternalmemory" class="form-control" placeholder="">

</div>
<div class="input-group">
  <span class="input-group-addon">Multitouch</span>
  <input type="text" name="productmultitouch" class="form-control" placeholder="multitouchoption">

</div>


</div>








  {{-- <input name="data"  type="date" placeholder="date" /> --}}



  <input type="submit" value="Save" />
  <button type="button" onclick="hideproduct()" >Cancel</button>


</form>
