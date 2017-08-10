<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';


/**
    *To show login form for the admin
*/
    public function showLoginForm(){

        return view('admin.login');
    }


    public function login(Request $request)
    {
      //validate data
      $this->validate($request,[
        'email'=> 'required|email',
        'password' => 'required|min:6'
      ]);
      //attempt login

      if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
      {
        //if success
          return redirect()->intended(route('admin.dashboard'));
      }
      //else return withh form data
      return redirect()->back()->withInput($request->only('email','remember'));
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        // $request->session()->flush();
        //
        // $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }




    public function changetab()
    {
      $msg = "<h1>This is a simple message.</h1>";

      return $msg;
    //  $productdatas=App\Product::all();
    //  return view('dummy')->with(compact('productdatas'))->render();
      //return $products;



     //return $productdata;
     //return $suggestedproducts;
    //  return "hellp" + $productid;
    //return view("productdetail")->with(compact("productdata"))->with(compact('suggestedproducts'))->render();



    }

}
