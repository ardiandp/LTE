<?php

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/')->name('product.dashboard')->uses('ProductController@index');


Route::get('/rekening','RekeningController@index');
Route::post('rekening/store','RekeningController@store');

Route::get('/bank/bca_cv','BankController@bca_cv');
Route::get('/bank/bca_ardian','BankController@bca_ardian');
Route::get('/bank/bca_akhdan','BankController@bca_akhdan');

Route::get('bank/data','BankController@data');
Route::get('bank/json','BankController@json');

Route::get('user','UserController@index');
Route::get('user/json','UserController@json');