
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
  <th>Customer No.</th>
  <th>Name  </th>
  <th>Contact  </th>
  <th>Email  </th>
  <th>Address  </th>

  <th>  </th>
</tr>


  @foreach ($customerdatas as $customerdata)
    <tr>
    <td>{{$customerdata->customerid}}</td>
    <td>{{$customerdata->customerFirstName}} {{$customerdata->customerMiddleName}} {{$customerdata->customerLastName}}</td>
    <td>{{$customerdata->customerContact1}}</td>
    <td>{{$customerdata->customerEmail}}</td>
    <td>{{$customerdata->customerAddress}}</td>
    
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
