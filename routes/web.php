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
Route::get('/produk','ProdukController@index');
Route::get('/produk/tambah','ProdukController@tambah');
Route::post('/produk/store','ProdukController@store');
Route::get('/produk/edit/{id}','ProdukController@edit');
Route::post('/produk/update','ProdukController@update');
Route::get('/produk/hapus/{id}','ProdukController@hapus');