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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/lottery/{id}', 'HomeController@lottery');


Route::group(['middleware' => ['admin']], function (){
    // add lotto
    Route::get('/admin/lotteries', 'AdminController@lotto');
    Route::get('/admin/lottery/delete/{id}', 'AdminController@deleteLotto');

    Route::get('/admin/lottery/add', 'AdminController@addlotto');
    Route::post('/admin/lottery/save', 'AdminController@lottosave')->name('save-lottery');
    
    Route::get('/admin/lottery/edit/{id}', 'AdminController@editlotto');
    Route::post('/admin/lottery/edit/{id}', 'AdminController@updatelotto')->name('edit-lottery');


    Route::get('/admin/dashboard', 'AdminController@index');
    Route::get('/admin/users', 'AdminController@users');
    Route::get('/admin/payments', 'AdminController@payments');
    Route::post('/admin/payment/confirm', 'AdminController@verify_payment');

    Route::get('/admin/user/add', 'AdminController@addUser');
    Route::post('/admin/user/add', 'AdminController@createUser');

    Route::get('/admin/user/edit/{id}', 'AdminController@editUser');
    Route::post('/admin/user/edit/{id}', 'AdminController@updateUser');

    Route::get('/admin/user/ban/{id}', 'AdminController@banUser');
    Route::get('/admin/user/delete/{id}', 'AdminController@deleteUser');
    
    Route::get('/impersonate/{id}', 'AdminController@impersonate');

    Route::get('/admin/settings', 'AdminController@settings')->name('settings');
    // Route::get('change-password', 'ChangePasswordController@index');
    Route::post('/admin/change-password', 'ChangePasswordController@store')->name('change.password');
});

Route::group(['middleware' => ['player']], function (){
    Route::get('/dashboard', 'PlayerController@index')->name('player');
    Route::get('/account/funds', 'PlayerController@account_funds');
    Route::get('/account/game', 'PlayerController@games');
    Route::get('/account/profile', 'PlayerController@profile');
    Route::get('/account/profile/edit/', 'PlayerController@profileedit');
    Route::post('/account/profile/edit/{id}', 'PlayerController@updateUser');
    Route::get('/checkout/{id}', 'PlayerController@checkout');
    Route::get('/payment/method/bank/{game_id}', 'PlayerController@bankcheckout');
    Route::get('/account/payment/verify', 'PlayerController@tellerupload');
    Route::get('/account/payment/bank/pay/{game_id}', 'PaymentController@Bankpay');
    Route::post('account/payment/upload', 'PaymentController@bank_transfer');

    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
    Route::get('/send/email', 'PlayerController@mail');
    // Route::get('change-password', 'ChangePasswordController@index');
    // Route::post('change-password', 'ChangePasswordController@store')->name('change.password.user');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
    return redirect('/');
});
Route::get('/clear-config', function() {
    $exitCode = Artisan::call('config:clear');
    // return what you want
    return redirect('/')->with('message', $exitCode);
    
});
Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});