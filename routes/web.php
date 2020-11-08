<?php
use App\Http\Controllers\LanguageController;
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
// dashboard Routes

Route::get('/','FrontPageController@index');

Route::get('/dashboard','StarterKitController@index');
Route::get('/sk-layout-1-column','StarterKitController@column_1Sk');
Route::get('/sk-layout-2-columns','StarterKitController@columns_2Sk');
Route::get('/fixed-navbar','StarterKitController@fix_navbar');
Route::get('/sk-layout-fixed','StarterKitController@fix_layout');
Route::get('/sk-layout-static','StarterKitController@static_layout');

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/ecommerce', 'AccessController@home')->middleware('role:Admin');

Route::get('/choose', 'ChooseRoleController@index');

Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@index')->name('admin');
	
});

Route::group(['middleware' => ['auth','vendor'], 'prefix' => 'vendor'], function(){

    Route::get('/', 'VendorPageController@index')->name('vendor');
	
});

Route::group(['middleware' => ['auth','agency'], 'prefix' => 'agency'], function(){

    Route::get('/', 'AgencyPageController@index')->name('agency');
	
});

Route::group(['middleware' => ['auth','agent'], 'prefix' => 'agent'], function(){

    Route::get('/', 'AgentPageController@index')->name('agent');
    Route::get('/add-prop', 'AgentPageController@add_prop')->name('agent.add_prop');

	
});

Route::get('/logout', 'RoutingController@logout')->name('logout');

Auth::routes();

