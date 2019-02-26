<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('stockin', 'Api\StockController@getStocking');
Route::get('allstock', 'Api\StockController@getAllStocking');
Route::get('alltrans', 'Api\StockController@getAllTrans');
Route::get('all/users', 'Api\StockController@getUsers');
Route::get('allstocking', 'Api\StockController@getAll');
Route::get('stock/history', 'Api\StockController@stockHistory');
Route::get('get-size', 'Api\StockController@getSize');
Route::post('reg', 'Api\StockController@postReg');
Route::post('stockproduct','Api\StockController@postProduct');
Route::post('stockcategory','Api\StockController@postCategory');
Route::post('stocksold', 'Api\StockController@postStockSold');
Route::put('delete', 'Api\StockController@destroy');
Route::delete('/delete-sell/{id}', 'StockController@destroy');
Route::get('/get/transactions/','Api\StockController@getTrans');


//Route for EDIT

Route::get('/editing/trans', 'Api\StockController@getEditing');

