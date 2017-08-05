<form class="repairticketeditor" method="post">
  <h2 align="center">Edit Repair Ticket</h2>
<div class="showndiv">
<div style="top:15px; ">
  <input style="display:none;" name="repairid"/>
  <label >Status:</label>
  <input class="form-control" name="rstatus" placeholder="Status" />
</div>

<div>
  <label>Expected Price</label>
  <input class="form-control" name="rexpectedprice" placeholder="price" />
</div>
</div>
<div class="hiddendiv" id="hiddendev" style="display:none">
  <div>
    <label> Model:</label>
    <input class="form-control" name="rmodel" placeholder="Model" />
  </div>
  <div>
    <label> Brand: </label>
    <input class="form-control" name="rbrand" placeholder="Brand" />
  </div>
  <div>
    <label> IMEI:</label>
    <input class="form-control" name="rImei" placeholder="IMEI" />
  </div>
  <div>
    <label>Password: </label>
    <input class="form-control" name="rpassword" placeholder="Password" />
  </div>

</div>

<button type="button" class="btn btn-link" id="showhider" onclick="togglehideshow('hiddendev')">Show more </button>
<div><input type="submit" value="Save" /></div>
<div><button type="button" onclick="hideproduct()" >Cancel</button></div>


</form>
<style>



</style>
