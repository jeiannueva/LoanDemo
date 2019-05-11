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

Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::post('/dashboard', 'DashboardController@process_add_balance')->name('process_add_balance');
Route::post('/dashboard/updateLoanReq', 'DashboardController@updateLoanRequests')->name('updateLoanRequests');
Route::post('/dashboard/payLoan', 'DashboardController@payLoan')->name('payLoan');

//Loans
Route::get('/loans/toggleLending', 'LoanController@index')->name('lendMoney');
Route::post('/loans/toggleLending', 'LoanController@togglelending')->name('process_lending');

Route::get('/loans/add', 'LoanController@add')->name('add_loan'); //Display of Form
Route::post('loans/add', 'LoanController@processadd')->name('process_new_loan'); // Form acceptance to Database
Route::get('/loans/edit/{loanid}', ['as' => 'loanid', 'uses' =>'LoanController@edit'])->name('edit_loan'); //Display of Edit Form
Route::post('/loans/edit', 'LoanController@processedit'); // Form acceptance to Database
Route::get('/loan/check', 'LoanController@check')->name('view_loan'); //Show content of Database
Route::post('/loan/delete', 'LoanController@delete')->name('delete_loan');
//Route::post('/loan/harddelete', 'LoanController@harddelete'); //Delete Loan in Database HARD
