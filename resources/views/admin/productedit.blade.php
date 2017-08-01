


<form action="/admin/updateproduct" class="producteditor" name="producteditorform" method="post">
  <h2 align="center">Edit Product</h2>
  <div class="showndiv">
    <input style="display:none" name="productid" />
    <div>
      <label> Product name:</label>
      <input required name="pname" placeholder="Name" />
    </div>
    <div>
      <label> Price: </label>
      <input required name="pprice" type="number" placeholder="Price" />
    </div>
    <div>
      <label> Discount:</label>
      <input required name="pdiscount" type="number" placeholder="Discount(%)" />
    </div>
    <div>
      <label>Stock: </label>
      <input required name="pstock" type="number" placeholder="Stock" />
    </div>

  </div>
  <div class="hiddendiv" id="hiddendev" style="display:none">
    <div>
      <label> Product brand:</label>
      <input required name="pbrand" placeholder="Brand" />
    </div>
    <div>
      <label> Ram: </label>
      <input required name="pram" type="number" placeholder="Ram" />
    </div>
    <div>
      <label> Android Version:</label>
      <input required name="pandroidversion" placeholder="Android" />
    </div>
    <div>
      <label>Internal Memory: </label>
      <input required name="pinternal" type="number" placeholder="Internal memory" />
    </div>
    <div>
      <label>Primary Camera: </label>
      <input required name="pprimarycamera" type="number" placeholder="camera in megapixel" />
    </div>


  </div>
  <button  class="btn btn-link" type="button" id="showhider" onclick="togglehideshow('hiddendev')">Show more </button>
  <div><input  type="submit" value="Save" /></div>
  <div><button type="button" onclick="hideproduct()" >Cancel</button></div>


</form>
<style>

label{
  left: 5%;
  position: absolute;
}

</style>
