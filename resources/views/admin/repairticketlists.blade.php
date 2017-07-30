
{{--  Lists out the repair tickets--}}
{{-- <<ul class="list-group">
@foreach ($variable as $key => $value)
  <li>

  </li>
  <input type="button" value="edit" />
@endforeach
</ul> --}}
<table>
<tr>
  <th>Ticket No.</th>
  <th>Customer  </th>
  <th>Model  </th>
  <th>Status  </th>
  <th>Price  </th>
  <th>Date</th>
  <th>  </th>
</tr>


  @foreach ($repairtickets as $repairticket)
    <tr>
    <td>{{$repairticket->repairid}}</td>
    <td>{{$repairticket->customerid}}</td>
    <td>{{$repairticket->repairModel}}</td>
    <td>{{$repairticket->repairStatus}}</td>
    <td>{{$repairticket->expectedCost}}</td>
    <td>{{$repairticket->repairDate}}</td>
    <td>
    <button >Edit</button>
    </td>
    </tr>
  @endforeach

</table>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
