

  @if ($ticketinfo)

  <h3>Ticket no {{$ticketinfo->repairid}} </h3>
  @if ($customerdata)
  <label>Name: </label>{{$customerdata->customerFirstName}} {{$customerdata->customerLastName}}<br
  @else
    <label>Name: </label>Not available<br
  @endif
  />
  <label>Model: </label>{{$ticketinfo->repairModel}}<br />
  <label>Status: </label>{{$ticketinfo->repairStatus}}<br />
  <label>Date:</label> {{$ticketinfo->created_at}}<br />
  <label>Expected Price:</label>{{$ticketinfo->expectedCost}}<br />

@else
<h3 style="color:red;">Ticket doesnt exist</h3>
@endif
<button class="closestatus" style="color:red;">Close</button>
