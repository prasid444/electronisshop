<form class="repairticketeditor" method="post">
  <h2 align="center">Edit Repair Ticket</h2>
<div class="showndiv">
<div style="top:15px; ">
  <input style="display:none;" name="repairid"/>
  <label >Status:</label>
  <input name="rstatus" placeholder="Status" />
</div>

<div>
  <label>Expected Price</label>
  <input name="rexpectedprice" placeholder="price" />
</div>
</div>
<div class="hiddendiv" id="hiddendev" style="display:none">
  <div>
    <label> Model:</label>
    <input name="rmodel" placeholder="Model" />
  </div>
  <div>
    <label> Brand: </label>
    <input name="rbrand" placeholder="Brand" />
  </div>
  <div>
    <label> IMEI:</label>
    <input name="rImei" placeholder="IMEI" />
  </div>
  <div>
    <label>Password: </label>
    <input name="rpassword" placeholder="Password" />
  </div>

</div>

<a id="showhider" onclick="togglehideshow('hiddendev')">Show more </a>
<div><input type="submit" value="Save" /></div>
<div><button type="button" onclick="hideproduct()" >Cancel</button></div>


</form>
<style>

label{
  left: 5%;
  position: absolute;
}

</style>
