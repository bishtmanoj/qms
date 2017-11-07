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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'guest'],function (){
	Route::get('login','SessionsController@index')->name('login');
	Route::post('login','SessionsController@store')->name('login');
});


Route::group(['middleware' => ['auth','admin'],'prefix' => 'admin', 'namespace' => 'Admin'], function () {

	Route::get('managers','ManagersController@index')->name('manager_list');
	Route::get('managers/add','ManagersController@create')->name('manager_add');
	Route::post('managers/add','ManagersController@store');
});

Route::group(['middleware' => ['guest'],'prefix' => 'admin', 'namespace' => 'Admin'], function () {

	Route::get('login','SessionsController@index')->name('admin_login');
	Route::post('login','ManagersController@store');

});

Route::group(['middleware'=>'auth'],function(){
	Route::get('logout','SessionsController@distroy')->name('logout');
});

//Auth::routes();

