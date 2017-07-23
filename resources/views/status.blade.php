

  @if ($ticketinfo)

  <h3>Ticket no {{$ticketinfo->repairid}} </h3>
  @if ($customerdata)
  <label>Name: {{$customerdata->customerFirstName}} {{$customerdata->customerLastName}}</label><br
  @else
    <label>Name: Not available</label><br
  @endif
  />
  <label>Model: {{$ticketinfo->repairModel}}</label><br />
  <label>Status: {{$ticketinfo->repairStatus}}</label><br />
  <label>Date: {{$ticketinfo->repairDate}}</label><br />

@else
<h3 style="color:red;">Ticket doesnt exist</h3>
@endif
<button class="closestatus" style="color:red;">Close</button>
