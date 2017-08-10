<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dashboard');
    }



    public function changetabuser()
    {
      //$productdatas=App\Product::all();

      $tab=Input::get('tab');
      $uid=Auth::user()->id;

      switch ($tab) {
        case 'car':

        $cartlists=App\Cart::where('userid',$uid)->get();
        //return $cartlists;
        return view('user.cartedit')->with(compact('cartlists'))->render();
      //  dd('hey inf is here, send the data');
          //detail of user
          //$repairtickets=App\RepairTicket::orderBy('repairid','desc')->get();
        //  return $repairtickets;
          //$msg = "<h1>This is a simple message.</h1>";
          //return View::make('admin/repaiticketlists')->with(compact('repairtickets'));
          //return view('admin.repairticketlists')->with(compact('repairtickets'))->render();

          break;



        default:
          //return view('user.userdetail')->render();
          //  $productdata=DB::select('SELECT p.*,o.* FROM product2 AS p,osnames as o WHERE p.osid=o.osid and p.productid=1');//where('productid', $productid)->first();

          return view('user.userdetail')->with('tabname', $tab)->render();
          # code...
          break;
      }


    }
}
