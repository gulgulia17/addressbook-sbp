<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('customer/import','CustomerController@showCustomerImportForm')->name('customer.import');
Route::post('customer/import','CustomerController@importCustomer');
Route::get('customer/{customer}/print','CustomerController@print')->name('customer.print');
Route::resource('customer','CustomerController')->middleware('auth');
