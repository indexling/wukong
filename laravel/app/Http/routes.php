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
    return view('index.home');
});
/*Route::post('login', function (Request $request) {
	return view('login.login');
});*/
Route::group(['middleware' => ['web']], function() {
	Route::any('index', 'LoginController@index');
  //routes here
});

Route::any('login_act', 'LoginController@login');
Route::any('reg', 'LoginController@register');

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


/**
 * 我的履历
 * myresume
 * ResumeController
 */
Route::any('myresume',['uses'=>'ResumeController@myresume']);


//ajax test
Route::group(['prefix' => 'ajax'], function(){
	// qi wang gong zuo 
	Route::any('expect', 'ResumeController@expect');
	// gong zuo jing li
	Route::any('profile','ResumeController@profile');
	//项目经验
	Route::any('projectexper','ResumeController@projectexper');
});
