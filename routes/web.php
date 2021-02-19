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

Route::get('/','FrontPageController@index')->name('home');

Route::get('/single_view/{slug}','FrontPageController@single_view')->name('single_view');

Route::get('/single_view2','FrontPageController@single_view2')->name('single_view2');


Route::post('/search','ListingController@search')->name('search');

Route::get('/search','ListingController@_search')->name('search');



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

Route::get('/choose', 'ChooseRoleController@index')->name('choose');

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

    Route::get('/add-prop3/{slug}', 'ListingController@step3')->name('agent.add_prop3');

    Route::get('/add_prop2/{slug}', 'ListingController@step2')->name('agent.add_prop2');

    Route::post('/add_prop1', 'ListingController@step1')->name('agent.add_prop1');

    Route::get('/all_listings', 'ListingController@all_listings')->name('agent.all_listings');

    Route::get('/single_listing/{slug}', 'ListingController@single_listing')->name('agent.single_listing');

    Route::post('/up_pix/{slug}', 'ListingController@up_doccc')->name('up_pix');

    Route::post('/remove_pix/{slug}', 'ListingController@remove_pix')->name('remove_pix');

    Route::post('/edit_pix','ListingController@edit_pix')->name('edit_pix');

    Route::post('/add_pix','FeaturedImageController@store')->name('agent.add_pix');

    Route::post('/publish','ListingController@publish')->name('agent.publish');

    Route::post('/make_premium','ListingController@make_premium')->name('agent.make_premium');

    Route::post('/unpublish','ListingController@unpublish')->name('agent.unpublish');


    //view all subscription plans
    Route::get('/subscription_plans','SubscriptionPlanController@subscription_plans')->name('subscription_plans');

    Route::get('/checkout_plans/{plan_name}','SubscriptionPlanController@checkout_plans')->name('agent.checkout_plans');

    //user subscribe

    Route::get('/subscribe','SubscriptionController@subscribe')->name('subscribe');

 

    Route::get('/notification_read/{id}', 'ActivityLogController@notification_read')->name('agent.notification_read');

    Route::get('/my_profile', 'AgentPageController@my_profile')->name('agent.my_profile');


	
});

Route::get('/logout', 'RoutingController@logout')->name('logout');

Auth::routes();

Route::post('/add_listing', 'ListingController@store')->name('agent.add_listing');

Route::post('/add_assets/{slug}', 'ListingController@add_assets')->name('agent.add_assets');

Route::get('/add_listing2/{slug}', 'ListingController@step2')->name('agent.add_listing2');


Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');


Route::view('/upload', 'agents/upload')->name('upload');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
