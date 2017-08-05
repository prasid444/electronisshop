<div>


<form class="repairticketadder" name="newrepairform" method="post">
  <h3 align="center">Add Repair Ticket</h3>
  <div>
    <input name="repairId" style="display:none" />
    <label>Customer id:</label>
    <input class="form-control" required name="customerid" type="number" placeholder="custommer id" />
  </div>
<div >
  <label>Model:</label>
  <input class="form-control" required name="repairmodel" placeholder="Model" />
</div>
<div>
  <label>Issue:</label>
  <input class="form-control" required name="repairIssue" placeholder="Issue" />
</div>
<div>
  <label>Color:</label>
  <input class="form-control" name="repairColor" placeholder="Color" />
</div>
<div>
  <label>IMEI:</label>
  <input class="form-control" name="repairImei" placeholder="IMEI" />
</div>
<div>
  <label>Password:</label>
  <input class="form-control" name="repairPassword" placeholder="Password" />
</div>
<div>
  <label>Expected Price:</label>
  <input class="form-control" name="expectedCost" type="number" placeholder="Price" />
</div>


  {{-- <input name="data"  type="date" placeholder="date" /> --}}

  <input type="submit" value="Save" />
  <button type="button" onclick="hideproduct()" >Cancel</button>


</form>
</div>
