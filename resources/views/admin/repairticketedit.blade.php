<form class="repairticketeditor" method="post">
  <h2 align="center">Edit Repair Ticket</h2>
<div class="showndiv">

<div >


  <input style="display:none;" name="repairid"/>
</div>

<div class="input-group">
  <span class="input-group-addon">Status</span>


  <input required type="text" name="rstatus" class="form-control" placeholder="Status">


</div>
<div class="input-group">
  <span class="input-group-addon">Expected Price</span>
  <input required type="number" name="rexpectedprice" class="form-control" placeholder="Price expected(RS)">


</div>


</div>
<div class="hiddendiv" id="hiddendev" style="display:none">


  <div class="input-group">
    <span class="input-group-addon">Model</span>
    <input required type="text" name="rmodel" class="form-control" placeholder="Model">

  </div>
  <div class="input-group">
    <span class="input-group-addon">Brand</span>
    <input required type="text" name="rbrand" class="form-control" placeholder="Brand">


  </div>
  <div class="input-group">
    <span class="input-group-addon">IMEI</span>
    <input  type="text" name="rImei" class="form-control" placeholder="IMEI">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Password</span>
    <input  type="text" name="rpassword" class="form-control" placeholder="Password">


  </div>


</div>

<button type="button" class="btn btn-link" id="showhider" onclick="togglehideshow('hiddendev')">Show more </button>
<div style="position:absolute;right:5%;top:90%;">


<input type="submit" class="btn btn-primary" value="Save" />
<button type="button" class="btn btn-danger" onclick="hideproduct()" >Cancel</button>
</div>

</form>
<style>



</style>
