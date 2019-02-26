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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/', 'UsersController@getUsers')->name('credentials.log');
Route::get('profile', 'UsersController@getProfile')->name('credentials.profile');
Route::get('/reg', 'UsersController@getReg')->name('credentials.register');
/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/home', 'UsersController@ind')->name('dashboard');
Route::get('/stocking', 'StockController@getStock')->name('stock.stock');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/category', 'StockController@getCategory')->name('stock.category');
Route::get('/product', 'StockController@getProduct')->name('stock.product');

Route::get('/customer', 'StockController@getCustomer')->name('stock.customer');
Route::get('/available', 'StockController@getAvailable')->name('stock.available');
Route::get('/stock/history', 'StockController@getStockHistory')->name('stock.stockHistory');
Route::get('/stock/sold', 'StockController@getStockSold')->name('stock.stockSold');
Route::get('/paydue/{id}', 'StockController@getDue')->name('stock.payDue');
Route::get('/staffs', 'UsersController@getStaffs')->name('others.staff');
Route::post('api/submitstock', 'Api\StockController@postStock');
Route::get('/delete-sell/{id}', 'StockController@destroy');
Route::get('/delete-stock/{id}', 'StockController@getDestroy');

//edit routes

Route::get('/edit-sell/{id}', 'StockController@transEdit')->name('edits.transEdit');
Route::get('/edit-stock/{id}', 'StockController@stockEdit')->name('edits.stockEdit');

// EDIT and UPDATE Api Route For Auth User
Route::group(['prefix' => 'api', 'middleware' => 'auth' ], function () {

    Route::get('user', function(Request $request){
        return auth()->user();
    });

    Route::post('post','UsersController@postUser');
});

//Password Reset ROUTE
Route::get('password/reset/{token?}', 'Auth\ForgetPasswordController@showResetForm');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


/*//Reset password
Route::get('admin-reset', 'UsersController@adminReset')->name('admin.passwords.reset');
Route::get('admin-reset/email', 'ForgotPasswordController@showLinkRequestForm')->name('admin.passwords.email');
Route::post('admin-reset/email', 'ForgotPasswordController@sendResetLinkEmail');*/

//NEXMO NOTIFICATION
Route::get('phone', function(){
    $user=Auth::user();
    Notification::send($user, new\App\Notifications\ResetNotification());

});

//===INVOICE=======
Route::get('/printinvoice/{id}', ['as' => 'printInvoice', 'uses' => 'FeeController@printInvoice']);

//===Redirecting my register and login route
Route::get('register', function(){
    return redirect()->to(url('/'));

});

Route::get('login', ['as' => 'login', 'uses' => function(){
    return redirect()->to(url('/'))->with('danger', 'You have to login first');
}]);
