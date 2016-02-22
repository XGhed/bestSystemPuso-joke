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
    return view('adminParent');
});

/*NOTE: PINAPALITAN KO LANG UNG LAMAN NG view('laman') PARA MAKITA KO. HAHA. TAENA*/


Route::post('/insertSupplier', 'SupplierController@insertSupplier');

Route::post('/updateSupplier', 'SupplierController@updateSupplier');



Route::post('/addMember', 'PageController@addMember');

Route::get('/insertMember', 'PageController@insertMember');

Route::get('/home', 'PageController@homepage');

Route::get('/items', 'PageController@manageItems');

Route::get('/supplier', 'SupplierController@manageSuppliers');

Route::get('/accounts', 'PageController@manageAccounts');
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
