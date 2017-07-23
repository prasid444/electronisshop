<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App;
class ProductController extends Controller{

public function listproducts(){
$productdatas=App\Product::paginate(12);
$models=App\Product::select('brand')->groupBy('brand')->get();
 //return $models;
return view("products")->with(compact("productdatas"))->with(compact('models'));

}
public function pagedProduct(){
  $productdatas=App\Product::paginate(12);
  return view("productscontent")->with(compact("productdatas"))->render();
}
public function filteredProduct(){
  //$pid=$request->input('minpid');
  //return $modelvalue;
  $modelval=Input::get('model');
  if($modelval=='all'){
    $productdatas=App\Product::paginate(12);

  }
  else {
    $productdatas=App\Product::where('brand',$modelval)->paginate(12);

  }

  return view("productscontent")->with(compact("productdatas"))->render();

}

public function detailproducts($productid){

  $productdata=App\Product::where('productid', $productid)->first();
  if($productdata->popularity <10000){
    $productda=App\Product::where('productid',$productid)->update(['popularity'=>$productdata->popularity+1]);

  }
  if($productdata->price >=0){
    $suggestedproducts=App\Product::where([
                                          ['productid','<>',$productid],
                                          ['price','<',$productdata->price * 1.5],
                                          ['price','>',$productdata->price * 0.6],
                                          ['popularity','>',$productdata->popularity*0.5],
                                          ['popularity','<',$productdata->popularity*1.5],


                                          ]  )->orderBy('popularity','desc')->limit(5)->get();
  }

 //return $productdata;
 //return $suggestedproducts;
//  return "hellp" + $productid;
return view("productdetail")->with(compact("productdata"))->with(compact('suggestedproducts'));
}



}
