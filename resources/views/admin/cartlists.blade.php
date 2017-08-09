<div>
  <table>
      <tr>
        <th>Particulars</th>
        <th>User          </th>
        <th>          Quantity        </th>
        <th>          Price(Rs)        </th>
        <th>            Amount(Rs)        </th>
        <th>                  </th>
      </tr>

      @foreach ($carts as $cart)
        <tr>
          <td></td>
          <td>{{$carts->name}}</td>
          <td><input value="{{$carts->quantity}}" /></td>
          <td>{{$carts->price}}</td>
          <td>{{$carts->price*$carts->quantity}}</td>
          <td>
            <button class="btn-danger">Remove</button>
          </td>

        </tr>
      @endforeach
      <tr>
        <th colspan="5">
          Total(Rs)
        </th>
        <th>

        </th>
      </tr>

      <tr>
        <td colspan="6"
      </tr>
      <tr>
        <th colspan="4">
        </th>
        <th> <button class="btn btn-success">Checkout</button>   </th>

        <th>
          <th>
            <button class="btn btn-primary">Calculate</button>
          </th>
        </th>
      </tr>


  </table>



</div>
