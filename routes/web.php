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
Route::any('user/section/dash/','HomeController@changetabuser');
Route::get('result/', 'TicketViewController@showstatus');
Route::get('products','ProductController@listproducts');
Route::get('contacts',function(){
  return view('user.contactabove');
}
);

//not used
Route::get('products/changes/','ProductController@filteredProduct');


Route::get('products/filter/','ProductController@filteredProduct');

//not used
Route::get('products/mainfilter','ProductController@showproductslist');

Route::get('products/{productid}','ProductController@detailproducts');

// Route::get('/admin/login','AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login','AdminLoginController@login')->name('admin.login.submit');
// Route::get('/admin','AdminController@index')->name('admin.dashboard');
Route::any('/users/logout','Auth\LoginController@logoutuser')->name('user.logout');

Route::prefix('admin')->group(function(){
  Route::get('/section/dash/','AdminController@changetab')->name('admin.change.section');
  Route::get('/updateproduct/','AdminController@updateproduct')->name('admin.update.product');
  Route::get('/updaterepairticket/','AdminController@updaterepairticket')->name('admin.update.repairticket');
  Route::get('/addrepairticket/','AdminController@addrepairticket')->name('admin.add.repairticket');
  Route::get('/deleterepairticket/','AdminController@removerepairticket')->name('admin.delete.repairticket');
  Route::get('/addproduct/','AdminController@addProduct');
  Route::get('/addcustomer/','AdminController@addCustomer');
  Route::get('/deletecustomer/','AdminController@removeCustomer');

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

  Route::get('/','AdminController@index')->name('admin.dashboard');

});

// Route::get('/ticket/{ticketno}','TicketViewController@viewstatus' );
// Route::post('/ticket/{no}','TicketViewController@postTicket');
//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
