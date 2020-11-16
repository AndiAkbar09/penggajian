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

Route::group(['prefix'=>'penggajian'],function(){
    Route::get('home', 'Penggajian\HomeController@index')->name('penggajians.home');
    Route::get('data-pegawai', 'Penggajian\DataPegawaiController@index')->name('penggajians.data-pegawai');
    Route::get('data-gaji', 'Penggajian\DataGajiController@index')->name('penggajians.data-gaji');
    Route::get('data-lembur', 'Penggajian\DataLemburPegawaiController@index')->name('penggajians.data-lembur-pegawai');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
