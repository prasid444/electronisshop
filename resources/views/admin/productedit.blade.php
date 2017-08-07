


<form action="/admin/updateproduct" class="producteditor" name="producteditorform" method="post">
  <h2 align="center">Edit Product</h2>
  <div class="showndiv">
    <input style="display:none" name="productid" />

    <div class="input-group">
      <span class="input-group-addon">Product name:</span>
      <input required type="text" name="pname" class="form-control" placeholder="Model Name">
    </div>

    <div class="input-group">
      <span class="input-group-addon">Price:</span>
      <input required type="text" name="pprice" class="form-control" placeholder="Price(Rs)">

    </div>
    <div class="input-group">
      <span class="input-group-addon">Discount</span>
      <input required type="text" name="pdiscount" class="form-control" placeholder="Discount(%)">


    </div>
    <div class="input-group">
      <span class="input-group-addon">Stock</span>
      <input required type="text" name="pstock" class="form-control" placeholder="Number of devices">


    </div>


  </div>
  <div class="hiddendiv" id="hiddendev" style="display:none">

    <div class="input-group">
      <span class="input-group-addon">Brand</span>
      <input type="text" name="pbrand" class="form-control" placeholder="Manufacturer">


    </div>

    <div class="input-group">
      <span class="input-group-addon">Ram</span>
      <input required type="number" name="pram" class="form-control" placeholder="Ram(GB)">
    </div>
    <div class="input-group">
      <span class="input-group-addon">OS</span>
    <select class="osselect selector form-control" name="pandroidversion">

        @foreach ($osdatas as $osdata)
          <option value="{{$osdata->osid}}">{{$osdata->osname}}({{$osdata->osvalue}})</option>
        @endforeach
    </select>
  </div>
    <div class="input-group">
      <span class="input-group-addon">Internal Memory</span>
      <input type="text" name="pinternal" class="form-control" placeholder="Internal Memory(GB)">


    </div>
    <div class="input-group">
      <span class="input-group-addon">Primary Camera</span>
      <input type="text" name="pprimarycamera" class="form-control" placeholder="Primary Cam(MP)">


    </div>



  </div>
  <button  class="btn btn-link" type="button" id="showhider" onclick="togglehideshow('hiddendev')">Show more </button>
  <div style="position:absolute;right:5%;top:90%;">


  <input  type="submit" class="btn btn-primary" value="Save" />
<button type="button" class="btn btn-danger" onclick="hideproduct()" >Cancel</button>
</div>

</form>
<style>

label{
  left: 5%;
  position: absolute;
}

</style>
