<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App;
class ProductController extends Controller{

public function listproducts(){
$productdatas=App\Product::paginate(24);
$models=App\Product::selectRaw('brand ,count(brand) as total')->groupBy('brand')->get();
// return $models;
return view("products")->with(compact("productdatas"))->with(compact('models'));

}
public function pagedProduct(){
  $productdatas=App\Product::paginate(24);
  return view("productscontent")->with(compact("productdatas"))->render();
}
public function filteredProduct(){
  //$pid=$request->input('minpid');
  //return $modelvalue;
  $modelval=Input::get('model');
  $sortvalue=Input::get('sort');
  //console.log("received"+$sortvalue);
  $minprice=Input::get('minprice');
  $maxprice=Input::get('maxprice');
  $minram=Input::get('minram');
  $minbackcam=Input::get('minbackcam');




  // if($modelval=='all'){
  //   $productdatas=App\Product::paginate(24);
  //
  // }
  // else {
  //   $productdatas=App\Product::where('brand',$modelval)->paginate(24);
  //
  // }
  // if($modelval=='all'){
  //   $productdatas=App\Product::where([
  //                                      ['price','>',$minprice],
  //                                      ['price','<',$maxprice],
  //                                      ['RamSize','>',$minram],
  //                                      ['PrimaryMP','>',$minbackcam]
  //
  //                                    ])->paginate(24);
  // }
  // else {
  //   $productdatas=App\Product::where([
  //                                    ['brand',$modelval],
  //                                    ['price','>',$minprice],
  //                                    ['price','<',$maxprice],
  //                                    ['RamSize','>',$minram],
  //                                    ['PrimaryMP','>',$minbackcam]
  //                                    ])->paginate(24);
  //
  // }
  switch ($sortvalue) {
    case 0: //usual sorting
    if($modelval=='all'){
      $productdatas=App\Product::where([
                                         ['price','>',$minprice],
                                         ['price','<',$maxprice],
                                         ['RamSize','>',$minram],
                                         ['PrimaryMP','>',$minbackcam]

                                       ])->paginate(24);
    }
    else {
      $productdatas=App\Product::where([
                                       ['brand',$modelval],
                                       ['price','>',$minprice],
                                       ['price','<',$maxprice],
                                       ['RamSize','>',$minram],
                                       ['PrimaryMP','>',$minbackcam]
                                       ])->paginate(24);

    }


      break;
    case 1: //sorting  by price ascending
    if($modelval=='all'){
      $productdatas=App\Product::where([
                                         ['price','>=',$minprice],
                                         ['price','<=',$maxprice],
                                         ['RamSize','>=',$minram],
                                         ['PrimaryMP','>=',$minbackcam]

                                       ])->orderBy('price','asc')->paginate(24);
    }
    else {
      $productdatas=App\Product::where([
                                       ['brand',$modelval],
                                       ['price','>=',$minprice],
                                       ['price','<=',$maxprice],
                                       ['RamSize','>=',$minram],
                                       ['PrimaryMP','>=',$minbackcam]
                                       ])->orderBy('price','asc')->paginate(24);

    }

    break;

    case 2: //sorting  by price descending
    if($modelval=='all'){
      $productdatas=App\Product::where([
                                         ['price','>=',$minprice],
                                         ['price','<=',$maxprice],
                                         ['RamSize','>=',$minram],
                                         ['PrimaryMP','>=',$minbackcam]

                                       ])->orderBy('price','desc')->paginate(24);
    }
    else {
      $productdatas=App\Product::where([
                                       ['brand',$modelval],
                                       ['price','>=',$minprice],
                                       ['price','<=',$maxprice],
                                       ['RamSize','>=',$minram],
                                       ['PrimaryMP','>=',$minbackcam]
                                       ])->orderBy('price','desc')->paginate(24);

    }

    break;

    case 3: //sorting  by popularity high to low
    if($modelval=='all'){
      $productdatas=App\Product::where([
                                         ['price','>=',$minprice],
                                         ['price','<=',$maxprice],
                                         ['RamSize','>=',$minram],
                                         ['PrimaryMP','>=',$minbackcam]

                                       ])->orderBy('popularity','desc')->paginate(24);
    }
    else {
      $productdatas=App\Product::where([
                                       ['brand',$modelval],
                                       ['price','>=',$minprice],
                                       ['price','<=',$maxprice],
                                       ['RamSize','>=',$minram],
                                       ['PrimaryMP','>=',$minbackcam]
                                       ])->orderBy('popularity','desc')->paginate(24);

    }

    break;
    default:
    if($modelval=='all'){
      $productdatas=App\Product::where([
                                         ['price','>=',$minprice],
                                         ['price','<=',$maxprice],
                                         ['RamSize','>=',$minram],
                                         ['PrimaryMP','>=',$minbackcam]

                                       ])->paginate(24);
    }
    else {
      $productdatas=App\Product::where([
                                       ['brand',$modelval],
                                       ['price','>=',$minprice],
                                       ['price','<=',$maxprice],
                                       ['RamSize','>=',$minram],
                                       ['PrimaryMP','>=',$minbackcam]
                                       ])->paginate(24);

    }
      # code...
      break;
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

public function showproductslist(Response $response){
  //$minprice=$response->minprice;
  $minprice=Input::get('minprice');
  console.log("you are herer");
  $maxprice=$response->maxprice;
  $minram=$response->minram;
  $minbackcam=$response->minbackcam;

  $modelval=Input::get('model');
  if($modelval=='all'){
    $productdatas=App\Product::where([
                                       ['price','>',$minprice]
                                     ])->paginate(24);
  }
  else {
    $productdatas=App\Product::where([
                                     ['brand',$modelval],
                                     ['price','>',$minprice]
                                     ])->paginate(24);

  }

return $productdatas;
//  return view("productscontent")->with(compact("productdatas"))->render();
//return $minprice + $maxprice + $minram + $minbackcam ;


}



}
