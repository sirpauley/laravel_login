<?php

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

//Route::get('/', 'redirectLogin@index');
Route::get('/', array('uses' => 'HomeController@showLogin'));

// route to show the login form
Route::get('/login', array('as' => 'login','uses' => 'HomeController@showLogin'));
// route to process the form
Route::post('/login', array('uses' => 'HomeController@doLogin'));

Route::get('/welcome', ['as' => 'welcome', 'middleware' => 'isLoggedin',  function(){
  return view('welcome');
}]);

Route::get('logout', ['uses' => 'HomeController@doLogout']);
