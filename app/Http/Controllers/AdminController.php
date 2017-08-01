<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;



use Log;
use App;


class AdminController extends Controller{


public function __construct(){
  $this->middleware('auth:admin');
}



public function index(){

  return view('admin.dashboard');
//shell_exec('echo "hello world" 1>&2');
}

public function changetab()
{
  //$productdatas=App\Product::all();

  $tab=Input::get('tab');

  switch ($tab) {
    case 'rep':
        $repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
        //$msg = "<h1>This is a simple message.</h1>";
        //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
        return view('admin.repairticketlists')->with(compact('repairtickets'))->render();

      # code...
      break;
    case 'sum':
    //$repairtickets=App\RepairTicket::all();
    //$msg = "<h1>This is a simple message.</h1>";
    //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
    return view('dummy')->with('data','summary')->render();

    break;

    case 'pro':
    $productdatas=App\Product::orderBy('productid','desc')->get();
    //$msg = "<h1>This is a simple message.</h1>";
    //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
    return view('admin.productslists')->with(compact('productdatas'))->render();
    break;

    case 'cus':
    $customerdatas=App\Customer::orderBy('customerid','desc')->get();
    //$msg = "<h1>This is a simple message.</h1>";
    //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
    return view('admin.customerslists')->with(compact('customerdatas'))->render();
    break;
    default:
      # code...
      break;
  }

  //return $msg;
  //return view('admin/repaiticketlists')->with(compact('repairtickets'))->render();
//  $productdatas=App\Product::all();
//  return view('dummy')->with(compact('productdatas'))->render();
  //return $products;



 //return $productdata;
 //return $suggestedproducts;
//  return "hellp" + $productid;
//return view("productdetail")->with(compact("productdata"))->with(compact('suggestedproducts'))->render();



}

public function updateproduct(){
  $pid=Input::get('pid');
  //$pid=1;
 $pname=Input::get('pname');
 $pprice=Input::get('pprice');
 $pdiscount=Input::get('pdiscount');
 $pstock=Input::get('pstock');
 $pbrand=Input::get('pbrand');
 $pram=Input::get('pram');
 $pandroidversion=Input::get('pandroidversion');
 $pinternal=Input::get('pinternal');
 $pprimarycamera=Input::get('pprimarycamera');

 $updateproduct=App\Product::where('productid',$pid)->update(array(
                                                          'title'=>$pname,
                                                          'price'=>$pprice,
                                                          'discount'=>$pdiscount,
                                                          'stock'=>$pstock,
                                                          'brand'=>$pbrand,
                                                          'RamSize'=>$pram,
                                                          'Osvalue'=>$pandroidversion,
                                                          'InternalSize'=>$pinternal,
                                                          'PrimaryMP'=>$pprimarycamera,

                                                        ));



$productdatas=App\Product::orderBy('productid','desc')->get();
//$msg = "<h1>This is a simple message.</h1>";
//return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
return view('admin.productslists')->with(compact('productdatas'))->render();




}

public function updaterepairticket(){
  $rid=Input::get('rid');
  $rstatus=Input::get('rstatus');
  $rexpectedprice=Input::get('rexpectedprice');
  $rmodel=Input::get('rmodel');
  $rbrand=Input::get('rbrand');
  $rImei=Input::get('rImei');
  $rpassword=Input::get('rpassword');


  $updateme=App\RepairTicket::where('repairid',$rid)->update(array(
                                                           'repairStatus'=>$rstatus,
                                                           'expectedCost'=>$rexpectedprice,
                                                           'repairModel'=>$rmodel,
                                                           'repairBrand'=>$rbrand,
                                                           'repairImei'=>$rImei,
                                                           'repairPassword'=>$rpassword,


                                                         ));

   $repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
   //$msg = "<h1>This is a simple message.</h1>";
   //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
   return view('admin.repairticketlists')->with(compact('repairtickets'))->render();



}

public function addrepairticket(){
  $cid=Input::get('cid');
  //$rstatus=Input::get('rstatus');
  $rexpectedprice=Input::get('rexpectedprice');
  $rmodel=Input::get('rmodel');
  $rissue=Input::get('rissue');
  $rImei=Input::get('rImei');
  $rpassword=Input::get('rpassword');
  $rcolor=Input::get('rcolor');

  $adddata=App\RepairTicket::insertGetId(array(

                                          'customerid'=>$cid,
                                          'expectedCost'=>$rexpectedprice,
                                          'repairModel'=>$rmodel,
                                          'repairIssue'=>$rissue,
                                          'repairImei'=>$rImei,
                                          'repairPassword'=>$rpassword,
                                          'repairColor'=>$rcolor,

  ));

  $repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.repairticketlists')->with(compact('repairtickets'))->render();

}

public function removerepairticket(){
  $rid=Input::get('rid');

  $deletedata=App\RepairTicket::where('repairid',$rid)->delete();
  $repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.repairticketlists')->with(compact('repairtickets'))->render();


}

public function removeproduct(){
  $pid=Input::get('pid');

  $deletedata=App\Product::where('productid',$pid)->delete();
  $productdatas=App\Product::orderBy('productid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.productslists')->with(compact('productdatas'))->render();


}




}
