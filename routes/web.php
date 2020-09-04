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
use Carbon\Carbon;

Route::get('/', function () {



    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'AdminController@index')->middleware('role');
Route::get('adminpandl', 'AdminController@adminpandl')->middleware('role');



// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('clients', 'ClientsController')->middleware('role');
    Route::get('/admin/clients/search', 'ClientsController@search');
});

Route::get('transsum', 'ClientsController@transsum')->middleware('role');


// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('users', 'UsersController')->middleware('role');
});

// The middleware web route wraps around route for validation messages
Route::group(['middleware' => 'web'], function () {
    Route::resource('transactions', 'TransactionsController')->middleware('role');
    Route::get('/admin/transactions/search', 'TransactionsController@search');
});

Route::get('showclienttrans/{id}', 'TransactionsController@showclienttrans')->middleware('role');

Route::get('createdeposit', 'TransactionsController@createdeposit')->middleware('role');


Route::get('printrecur', 'TransactionsController@printrecur')->middleware('role');


Route::get('createrecur', 'ClientsController@createrecur')->middleware('role');
Route::get('storerecur', 'ClientsController@storerecur')->middleware('role');


Route::resource('expenses', 'ExpensesController')->middleware('role');
Route::resource('cashflows', 'CashflowsController')->middleware('role');



Route::get('htmlpdf58', 'PDFController@htmlPDF58')->middleware('role');
Route::get('generatePDF58', 'PDFController@generatePDF58')->middleware('role');

Route::get('htmlPDF', function () {
    return view('/htmlPDF')->middleware('role');
});


// Testing Carbon
Route::get('/carbon', function () {

    $year = 2020;
    $month = 1;
    $day = 1;
    $hour = 0;
    $minute = 0;
    $second = 0;

    $carbon = new Carbon();
    $lastofjan = new Carbon('first day of February this year', 'America/Chicago');
    $augbeg = (new Carbon('first day of January this year'))->addMonths(7);

    $janbeg = Carbon::createFromDate($year, $month, $day)->endOfMonth();
    $decend = Carbon::create($year, $month, $day, $hour, $minute, $second);
    $janbegly = Carbon::create($year, $month, $day, $hour, $minute, $second)->addYears(-1);
    $year = Carbon::now()->year;
    echo $year;
});
