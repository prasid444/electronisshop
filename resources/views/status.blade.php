<head>

  <title>
    Repair Status
  </title>
</head>
<body>

  @if ($ticketinfo)


  <h1>Ticket no {{$ticketinfo->repairid}} </h1><br />
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
<h1>Ticket doesnt exist</h1>
@endif
</body>



{{-- @if ($users)
   @foreach($users as $user)
      {{ $user->name }}
   @endforeach
@endif --}}
