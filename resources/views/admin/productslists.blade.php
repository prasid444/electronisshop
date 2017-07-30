
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
  <th>Product no.</th>
  <th>Name  </th>
  <th>Brand  </th>
  <th>Image  </th>
  <th>Price  </th>
  <th>Stock</th>
  <th>  </th>
</tr>


  @foreach ($productdatas as $productdata)
    <tr>
    <td>{{$productdata->productid}}</td>
    <td>{{$productdata->title}}</td>
    <td>{{$productdata->brand}}</td>
    <td>
      <img style="width:20%;" src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"/>
      </td>
    <td>{{$productdata->price}}</td>
    <td>{{$productdata->stock}}</td>
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
