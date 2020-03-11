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



Route::get('/','utamacontroller@index')->name('home');
Route::get('/karyawan', 'utamacontroller@create')->name('karyawan');
Route::get('/tambah', 'utamacontroller@input')->name('input');
Route::post('/karyawan', 'utamacontroller@store')->name('tambah');
Route::get('/karyawan/edit/{id}', 'UtamaController@edit');
Route::put('/karyawan/{id}', 'UtamaController@update');
Route::delete('/karyawan/{id}', 'UtamaController@destroy');