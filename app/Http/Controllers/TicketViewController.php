<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App;
class TicketViewController extends Controller
{
    //
    public function showstatus(){
      $tic=Input::get('ticketno');
      $ticketinfo=App\RepairTicket::where('repairid',$tic)->first();
      //return $name;
      if($ticketinfo){
      $customerdata=App\Customer::where('customerid',$ticketinfo->customerid)->first();
    }
      //$customername=$customerdata->customerFirstName+$customerdata->customerLastName;
      return view("status")->with(compact('ticketinfo'))->with(compact('customerdata'))->render();
    }
    public function viewstatus(Request $request){


      $tic=$request->input('ticketno');
      $ticketinfo=App\RepairTicket::where('repairid',$tic)->first();
      //return $name;
      if($ticketinfo){
      $customerdata=App\Customer::where('customerid',$ticketinfo->customerid)->first();
    }
      //$customername=$customerdata->customerFirstName+$customerdata->customerLastName;
      return view("status")->with(compact('ticketinfo'))->with(compact('customerdata'));

    }
    public function postTicket(Request $request){

      $ticno=$request->input('_ticketno');
      return "done";
    }
//     public function processTicket(Request $request) {
//     //$ticno  = addslashes($request->_ticketno) ;
//     $ticno=Input::get('_ticketno') ;
//     //add more logic to validate and secure user entered data before turning it loose in a query
//     return Redirect::to('ticket/'.$ticno) ;
// }

}
