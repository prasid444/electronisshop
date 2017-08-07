


<form class="repairticketadder" name="newrepairform" method="post">
  <h3 align="center">Add Repair Ticket</h3>
  <div>


  <div >


  <div>
    <input name="repairId" style="display:none" />
  </div>
  <div class="input-group">
    <span class="input-group-addon">Customer ID</span>
    <input required type="number" name="customerid" class="form-control" placeholder="Customer Id">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Model</span>
    <input required type="text" name="repairmodel" class="form-control" placeholder="Model Name">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Description</span>
    <input required type="text" name="repairIssue" class="form-control" placeholder="Issue">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Color</span>
    <input  type="text" name="repairColor" class="form-control" placeholder="Color of model">


  </div>
  <div class="input-group">
    <span class="input-group-addon">IMEI</span>
    <input  type="text" name="repairImei" class="form-control" placeholder="IMEI">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Password</span>
    <input type="text" name="repairPassword" class="form-control" placeholder="Password if any">


  </div>
  <div class="input-group">
    <span class="input-group-addon">Expected Price</span>
    <input  type="number" name="expectedCost" class="form-control" placeholder="Price expecter(RS)">


  </div>


</div>
  {{-- <input name="data"  type="date" placeholder="date" /> --}}
<div style="position:absolute;right:5%;top:90%;">

  <input class="btn btn-primary" type="submit" value="Save" />
  <button type="button" class="btn btn-danger" onclick="hideproduct()" >Cancel</button>
</div>

</div>


</form>
