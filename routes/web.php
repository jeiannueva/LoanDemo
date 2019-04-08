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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Loans
Route::get('/loans', 'LoanController@index')->name('loan');
Route::get('/loans/add', 'LoanController@add')->name('add_loan'); //Display of Form
Route::post('loans/add', 'LoanController@processadd'); // Form acceptance to Database
Route::get('/loans/edit', 'LoanController@edit')->name('edit_loan'); //Display of Edit Form
Route::post('/loans/edit', 'LoanController@processedit'); // Form acceptance to Database
Route::get('/loan/check', 'LoanController@check')->name('view_loan'); //Show content of Database
Route::post('/loan/delete', 'LoanController@delete')->name('delete_loan');
//Route::post('/loan/harddelete', 'LoanController@harddelete'); //Delete Loan in Database HARD
