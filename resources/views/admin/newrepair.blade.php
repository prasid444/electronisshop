<div>


<form class="repairticketadder" name="newrepairform" method="post">
  <h3 align="center">Add Repair Ticket</h3>
  <div>
    <input name="repairId" style="display:none" />
    <label>Customer id:</label>
    <input required name="customerid" type="number" placeholder="custommer id" />
  </div>
<div>
  <label>Model:</label>
  <input required name="repairmodel" placeholder="Model" />
</div>
<div>
  <label>Issue:</label>
  <input required name="repairIssue" placeholder="Issue" />
</div>
<div>
  <label>Color:</label>
  <input name="repairColor" placeholder="Color" />
</div>
<div>
  <label>IMEI:</label>
  <input name="repairImei" placeholder="IMEI" />
</div>
<div>
  <label>Password:</label>
  <input name="repairPassword" placeholder="Password" />
</div>
<div>
  <label>Expected Price:</label>
  <input name="expectedCost" type="number" placeholder="Price" />
</div>


  {{-- <input name="data"  type="date" placeholder="date" /> --}}

  <input type="submit" value="Save" />
  <button type="button" onclick="hideproduct()" >Cancel</button>


</form>
</div>
