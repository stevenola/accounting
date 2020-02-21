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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TransactionsController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {

    return view('admin.index');
});

// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('clients', 'ClientsController');
});

Route::get('transsum', 'ClientsController@transsum');


// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('users', 'UsersController');
});

// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('transactions', 'TransactionsController');
});

Route::get('showclienttrans/{id}', 'TransactionsController@showclienttrans');

Route::get('createdeposit', 'TransactionsController@createdeposit');



Route::get('createrecur', 'ClientsController@createrecur');
Route::get('storerecur', 'ClientsController@storerecur');





Route::get('htmlpdf58', 'PDFController@htmlPDF58');
Route::get('generatePDF58', 'PDFController@generatePDF58');

Route::get('htmlPDF', function () {
    return view('/htmlPDF');
});
