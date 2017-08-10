
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cart Lists</div>
                @if(!$cartlists->isEmpty())
                <div class="panel-body">

                  <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Particulars</th>
                                <th>Quantity</th>
                                <th class="text-center">Rate</th>
                                <th class="text-center">Amount</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($cartlists as $key => $cartlist)
                            <tr>
                                <td class="col-md-5">
                                    <h4>Transaction id:<a href="#">{{$cartlist->id}}</a></h4>

                                    <span>Shop: </span><span><strong>Shop No 47</strong></span>
                                </td>
                                <td class="col-md-3"><h5><strong>{{$cartlist->productid}}</strong></h5></td>
                                <td class="col-md-1" style="text-align: center">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" min="0" step="1" ng-click="minus()">
                                                <i class="glyphicon glyphicon-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control input-number" ng-change="change()" ng-model="qnt" value="{{$cartlist->amount}}"required>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" ng-click="plus()">
                                                <i class="glyphicon glyphicon-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="col-md-1 text-center"><strong>$4.87</strong></td>
                                <td class="col-md-1 text-center"><strong>$14.61</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <button type="button" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                </td>
                            </tr>
                          @endforeach

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"><h5>Total</h5></td>
                                <td class="text-center"><h5><strong>$24.59</strong></h5></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Calculate
                            </button>
                            <a href="/checkout" class="btn btn-success">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </a>
                        </div>
                    </div>
                </div>

              @else
                <div class="panel-body">
                  <p style="font-size:2em" class="text text-warning">
                    No any items in cart <button class="btn btn-link"><a style="font-size:2em">Visit Store</a></button>
                  </p>
                </div>
              @endif
            </div>
        </div>
    </div>
</div>


<style>

body {
    background-color:#cacaca;
}
</style>
