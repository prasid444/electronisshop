
{{--  Lists out the repair tickets--}}
{{-- <<ul class="list-group">
@foreach ($variable as $key => $value)
  <li>

  </li>
  <input type="button" value="edit" />
@endforeach
</ul> --}}
<div class="editdatacontent" style=>
  <div  >
    @component('admin.productedit',['osdatas'=>$osdatas])

    @endcomponent
  </div>



</div>


<div  class=" adddatacontent " style="width:80%;" >
  @component('admin.newproduct',['osdatas'=>$osdatas])

  @endcomponent

</div>


<div class='notificationtext' >
  <p style="color:green;font-size:3em;">
    Product Updated Successfully
  </p>
</div>
<table>
  <tr>
    <th colspan="7">

    </th>
    <th>
      <Button class="btn btn-primary" onclick="addproduct('4')">Add New Product</Button>
    </th>
  </tr>
<tr>
  <th>Product no.</th>
  <th>Name  </th>
  <th>Brand  </th>
  <th>Image  </th>
  <th>Price  </th>
  <th>Discount(%)  </th>
  <th>Stock</th>
  <th>  </th>
</tr>


  @foreach ($productdatas as $productdata)
    @if ($productdata->stock<3)
      <tr style="background-color:#fda">
      <td>{{$productdata->productid}}</td>
      <td>{{$productdata->title}}</td>
      <td>{{$productdata->brand}}</td>
      <td>
        <img style="width:25%;" src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"/>
        </td>
      <td>{{$productdata->price}}</td>
      <td>{{$productdata->discount}}    </td>
      <td>{{$productdata->stock}}</td>
      <td>
      <button class="producteditbutton" onclick="editproduct('{{$productdata}} ',4)">Edit</button>
      </td>
      </tr>
    @else
      <tr>
      <td>{{$productdata->productid}}</td>
      <td>{{$productdata->title}}</td>
      <td>{{$productdata->brand}}</td>
      <td>
        <img style="width:25%;" src="/images/products/{{$productdata->imagename}}" onerror="this.src='/images/products/default.jpg'"/>
        </td>
      <td>{{$productdata->price}}</td>
      <td>{{$productdata->discount}}    </td>
      <td>{{$productdata->stock}}</td>
      <td>
      <button class="producteditbutton"  onclick="editproduct('{{$productdata}} ',4)">Edit</button>
      </td>
      </tr>
    @endif

  @endforeach



</table>
