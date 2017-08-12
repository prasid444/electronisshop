<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;



use Log;
use App;
use DB;
use Image;

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
    $repairstatus=App\RepairTicket::selectRaw('repairStatus,count(repairStatus) as total')->groupBy('repairStatus')->get();

    //$osstatus=App\OS::selectRaw('osvalue,osname,p.total')->join('product2','product2.osid','=','osnames.osid')->groupBy('osid')->get();
    //$osstatusp1=App\Product::selectRaw('osid,count(osid) as total')->groupBy('osid')->get();
    //$osstatusp2=App\OS::all();
    $osstatus=DB::select('SELECT o.osvalue,o.osname,p.total FROM osnames as o natural JOIN (SELECT osid, COUNT(osid) as total FROM product2 GROUP by osid ) as p');
  //  $osstatus=$osstatusp1->union($osstatusp2)->get();
    //return $da;
    return view('admin.summarystatus')->with(compact('repairstatus'))->with(compact('osstatus'))->render();

    break;

    case 'pro':
    $productdatas=App\Product::orderBy('productid','desc')->get();
    $osdatas=App\OS::orderBy('osid','asc')->get();

    //return $productdatas;
    //$msg = "<h1>This is a simple message.</h1>";
    //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
    return view('admin.productslists')->with(compact('productdatas'))->with(compact('osdatas'))->render();
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
                                                          'osid'=>$pandroidversion,
                                                          'InternalSize'=>$pinternal,
                                                          'PrimaryMP'=>$pprimarycamera,

                                                        ));



$productdatas=App\Product::orderBy('productid','desc')->get();
$osdatas=App\OS::orderBy('osid','asc')->get();
//$msg = "<h1>This is a simple message.</h1>";
//return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
return view('admin.productslists')->with(compact('productdatas'))->with(compact('osdatas'))->render();




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

public function addCustomer(Request $request){
//   $cdata=Input::all();
//return $cdata;
  $cfname=Input::get('cfname');
  $cmname=Input::get('cmname');
  $clname=Input::get('clname');
  $ccontact1=Input::get('ccontact1');
  $cemail=Input::get('cemail');
  $caddress=Input::get('caddress');

  $adddata=App\Customer::insertGetId(array(

                                          //'customerid'=>4,
                                          'customerFirstName'=>$cfname,
                                          'customerMiddleName'=>$cmname,
                                          'customerLastName'=>$clname,
                                          'customerContact1'=>$ccontact1,
                                          'customerEmail'=>$cemail,
                                          'customerAddress'=>$caddress,

  ));

  $customerdatas=App\Customer::orderBy('customerid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.customerslists')->with(compact('customerdatas'))->render();

}
public function addProduct(Request $request){

  // $this->validate($request,[
  //   'productmodel'=>'required',
  //   'productfile'=>'required|image|mimes:jpeg,png,jpg,svg|max:2048',
  //   'productbrand'=>'required',
  // ]);

    //$request->file('productfile')->move(public_path("/uploads"), 'prasid');

    $pname=Input::get('productmodel');
    $pprice=Input::get('productprice');
    $pdiscount=Input::get('productdiscount');
    $pstock=Input::get('productstock');
    $pbrand=Input::get('productbrand');
    $pram=Input::get('productram');
    $pandroidversion=Input::get('osselect');
    $pinternal=Input::get('productinternalmemory');
    $pprimarycamera=Input::get('productprimarycamera');
    $pexternal=Input::get('productexternalmemory');
    $psecondarycamera=Input::get('productsecondarycamera');
    $pweight=Input::get('productweight');
    $pscreen=Input::get('productscreen');
    $pmultitouch=Input::get('productmultitouch');
    $pcpu=Input::get('productcpu');
    $pgpu=Input::get('productgpu');

    // $adddata=App\Product::insertGetId(array(
    //
    //                                         //'customerid'=>4,
    //                                         'title'=>$pname,
    //                                         'price'=>$pprice,
    //                                         'discount'=>$pdiscount,
    //                                         'stock'=>$pstock,
    //                                         'brand'=>$pbrand,
    //                                         'RamSize'=>$pram,
    //                                         'osid'=>$pandroidversion,
    //                                         'InternalSize'=>$pinternal,
    //                                         'PrimaryMP'=>$pprimarycamera,
    //                                         'Multitouch'=>$pmultitouch,
    //                                         'Sizeinch'=>$pscreen,
    //                                         'Weight'=>$pweight,
    //                                         'SecondaryMP'=>$psecondarycamera,
    //                                         'External'=>$pexternal,
    //                                         'CPU'=>$pcpu,
    //                                         'GPU'=>$pgpu
    //
    //
    //
    // ));






  $productdatas=App\Product::orderBy('productid','desc')->get();
  $osdatas=App\OS::orderBy('osid','asc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.productslists')->with(compact('productdatas'))->with(compact('osdatas'))->render();



}

public function removerepairticket(){
  $rid=Input::get('rid');

  $deletedata=App\RepairTicket::where('repairid',$rid)->delete();
  $repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.repairticketlists')->with(compact('repairtickets'))->render();


}

public function removeCustomer(){
  $cid=Input::get('cid');
  $deletedata=App\Customer::where('customerid',$cid)->delete();
  $customerdatas=App\Customer::orderBy('customerid','desc')->get();
  //$msg = "<h1>This is a simple message.</h1>";
  //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
  return view('admin.customerslists')->with(compact('customerdatas'))->render();


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
