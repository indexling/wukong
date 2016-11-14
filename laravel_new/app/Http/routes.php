<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('index.home');
    return redirect('show');
});
/*Route::post('login', function (Request $request) {
	return view('login.login');
});*/
/*Route::group(['middleware' => ['web']], function() {
	Route::any('index', 'LoginController@index');
  //routes here
});
Route::any('login_act', 'LoginController@login');
Route::any('reg', 'LoginController@register');*/
Route::any('lo','UserController@lo');
Route::any('login','UserController@login');
Route::any('register', 'UserController@register');
Route::any('reg', 'UserController@reg');
Route::any('companyIndex', 'CompanyController@index');
Route::any('collect', 'CollectController@index');
Route::any('show', 'IndexController@reveal');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
