
{{--  Lists out the repair tickets--}}
{{-- <<ul class="list-group">
@foreach ($variable as $key => $value)
  <li>

  </li>
  <input type="button" value="edit" />
@endforeach
</ul> --}}

<div class="editdatacontent" >
  @component('admin.customeredit')

  @endcomponent

</div>
<div class="adddatacontent" >
  @component('admin.newcustomer')

  @endcomponent

</div>
<table>
  <tr>
    <th colspan="5">

    </th>
    <th>
      <Button class="btn btn-primary" onclick="alert('datafound')">New Customer</Button>
    </th>
  </tr>
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

</style>
