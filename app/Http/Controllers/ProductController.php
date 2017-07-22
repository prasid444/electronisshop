<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App;
class ProductController extends Controller{

public function listproducts(){
$productdatas=App\Product::paginate(12);
return view("products")->with(compact("productdatas"));

}
public function viewpage(){
  $productdatas=App\Product::paginate(12);
  return view("products")->with(compact("productdatas"))->render();
}

public function detailproducts($productid){

  $productdata=App\Product::where('productid', $productid)->first();

 //return $productdata;
//  return "hellp" + $productid;
  return view("productdetail")->with(compact("productdata"));
}



}
