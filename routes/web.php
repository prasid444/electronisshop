<?php
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('result',function(){
//   return "hello";
// });
Route::get('result/', 'TicketViewController@showstatus');
Route::get('products','ProductController@listproducts');
Route::get('products/changes/','ProductController@filteredProduct');
Route::get('products/filter/','ProductController@filteredProduct');

Route::get('products/{productid}','ProductController@detailproducts');



// Route::get('/ticket/{ticketno}','TicketViewController@viewstatus' );
// Route::post('/ticket/{no}','TicketViewController@postTicket');
//
