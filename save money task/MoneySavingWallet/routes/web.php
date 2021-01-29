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


Route::get('/','UsersController@index');

Route::get('/register','UsersController@viewregister');
Route::post('/register','UsersController@store');

Route::get('/login','UsersController@returnLogin');
Route::post('/login','UsersController@checkLogin');

Route::get('/Logout','UsersController@logout');

Route::get('/trans_processes' ,'UsersController@userTransfer');


Route::get('/add-sub-cat' ,'subCategoryController@index');
Route::post('/add-sub-cat' ,'subCategoryController@store');

Route::get('/transaction' ,'transactionController@index');
Route::post('/transaction' ,'transactionController@store');

Route::get('/summary' ,'summaryController@index');

Route::get('/chart' ,'chartController@index');

Route::get('/transaction/{cat_id}','AjaxGetDataController@giveData');


Route::get('/home-admin','adminController@index');

Route::get('/login-admin','adminController@login');

Route::post('/login-admin','adminController@checklogin');

Route::get('/logout-admin','adminController@logout');

Route::get('/transaction-admin','adminController@transaction');
