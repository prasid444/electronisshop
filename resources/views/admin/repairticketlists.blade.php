
{{--  Lists out the repair tickets--}}
{{-- <<ul class="list-group">
@foreach ($variable as $key => $value)
  <li>

  </li>
  <input type="button" value="edit" />
@endforeach
</ul> --}}
<div class="panel panel-default">

  <div class="panel-body">
<div class="editdatacontent" >
  @component('admin.repairticketedit')

  @endcomponent

</div>
<div class="adddatacontent" >
  @component('admin.newrepair')

  @endcomponent

</div>
<div class='notificationtext' >
  <p style="color:green;font-size:3em">
    Ticket Updated Successfully
  </p>
</div>
<table>
  <tr>
    <th colspan="6">

    </th>
    <th>
      <Button class="btn btn-primary" onclick="addproduct('3')">Add New Ticket</Button>
    </th>
  </tr>
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
    @if($repairticket->repairStatus=='done')
      <tr style="background-color:#fda">
      <td>{{$repairticket->repairid}}</td>
      <td>{{$repairticket->customerid}}</td>
      <td>{{$repairticket->repairModel}}</td>
      <td>{{$repairticket->repairStatus}}</td>
      <td>{{$repairticket->expectedCost}}</td>
      <td>{{$repairticket->created_at}}</td>
      <td>
      <button class="btn btn-info" style="background-color:lightgreen" onclick="editproduct('{{$repairticket}} ',3)">Edit</button>
      <button class="btn btn-danger" onclick="deleteproduct('{{$repairticket->repairid}}',3)">Delete</button>

      </td>
      </tr>

  @else
    <tr>
    <td>{{$repairticket->repairid}}</td>
    <td>{{$repairticket->customerid}}</td>
    <td>{{$repairticket->repairModel}}</td>
    <td>{{$repairticket->repairStatus}}</td>
    <td>{{$repairticket->expectedCost}}</td>
    <td>{{$repairticket->created_at}}</td>
    <td>
    <button class="btn btn-info" onclick="editproduct('{{$repairticket}} ',3)">Edit</button>
    <button class="btn btn-danger" onclick="deleteproduct('{{$repairticket->repairid}}',3)">Delete</button>

    </td>
    </tr>


  @endif

  @endforeach

</table>
</div>
</div>

<style>
/*label { display: table-cell; }
input { display: table-cell; }*/
body {
    background-color:#cacaca;
}
</style>
