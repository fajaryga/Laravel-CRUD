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
Route::get('/home', 'PegawaiController@index');
Route::get('/home/tambah','PegawaiController@tambah');
Route::post('/home/store','PegawaiController@store');
Route::get('/home/edit/{id}','PegawaiController@edit');
Route::put('/home/update/{id}','PegawaiController@update');
Route::get('/home/hapus/{id}','PegawaiController@delete');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

