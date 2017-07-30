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
        $repairtickets=App\RepairTicket::all();
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
    $productdatas=App\Product::all();
    //$msg = "<h1>This is a simple message.</h1>";
    //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
    return view('admin.productslists')->with(compact('productdatas'))->render();
    break;

    case 'cus':
    $customerdatas=App\Customer::all();
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




}
