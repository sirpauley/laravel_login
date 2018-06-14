<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

  public function showLogin()
  {
      // show the form
      return View('login');
  }

  public function doLogin(Request $request)
  {
    print_r($request->all());
    $this->validate($request,[
       'email'      =>'required|email'
    ]);

    $this->validate($request,[
       'password'      =>'required|alphaNum|min:3'
    ]);

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    if(Auth::attempt($userdata)){
      //echo 'SUCCESS!';
      return redirect()->route('welcome');
    }else{
      return redirect()->route('login');
    }//else Auth


  }//do login

  public function doLogout(){
    Auth::logout(); //logout
    return redirect()->route('login');
  }//dologout

}
