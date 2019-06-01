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
Route::get('/target', 'TargetController@index');
Route::get('/supplier','SupplierController@index');
Route::get('/order','OrderController@index');

Route::post('/target/nyimpen', 'TargetController@simpan');
Route::get('/target/edit/{id}', 'TargetController@edit');
Route::post('/target/update','TargetController@update');
Route::get('/target/hapus/{id}', 'TargetController@hapus');

Route::post('/supplier/simpan', 'SupplierController@simpan');
Route::get('/supplier/edit/{id}', 'SupplierController@edit');
Route::post('/supplier/update', 'SupplierController@update');
Route::get('/supplier/hapus/{id}', 'SupplierController@hapus');


Route::post('/order/simpan', 'OrderController@simpan');
Route::get('/order/hapus/{id}', 'OrderController@hapus');
Route::post('/order/update', 'OrderController@update');
Route::get('/order/edit/{id}', 'OrderController@edit');