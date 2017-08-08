<form class="customeradder" method="post">
  <h2 align="center">Add Customer</h2>
<div class="showndiv">

<div >


  {{-- <input style="display:none;" name="customerid"/> --}}
</div>

<div class="input-group">
  <span class="input-group-addon">First Name</span>


  <input required maxlength="15" type="text" name="cfname" class="form-control" placeholder="First Name">


</div>
<div class="input-group">
  <span class="input-group-addon">Middle Name</span>
  <input type="text" maxlength="15" name="cmname" class="form-control" placeholder="Middle Name">


</div>
<div class="input-group">
  <span class="input-group-addon">Last Name</span>
  <input type="text" maxlength="15" name="clname" class="form-control" placeholder="Last Name">


</div>
<div class="input-group">
  <span class="input-group-addon">Contact</span>
  <input required  type="number" name="ccontact1" class="form-control" placeholder="Mobile Number">

</div>
<div class="input-group">
  <span class="input-group-addon">Email</span>
  <input type="email" name="cemail" class="form-control" placeholder="Email ">


</div>
<div class="input-group">
  <span class="input-group-addon">Address</span>
  <input type="text" maxlength="20" name="caddress" class="form-control" placeholder="Address">


</div>


</div>
<div class="hiddendiv" id="hiddendev" style="display:none">




</div>

<button style="display:none;" type="button" class="btn btn-link" id="showhider" onclick="togglehideshow('hiddendev')">Show more </button>
<div style="position:absolute;right:5%;top:90%;">


<input type="submit" class="btn btn-primary" value="Save" />
<button type="button" class="btn btn-danger" onclick="hideproduct()" >Cancel</button>
</div>

</form>
<style>



</style>
