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
    //Home
    Route::get('home', 'Penggajian\HomeController@index')->name('penggajians.home');

    //Data Pegawai
    Route::get('data-pegawai', 'Penggajian\DataPegawaiController@index')->name('penggajians.data-pegawai');
    Route::get('tambah/data-pegawai', 'Penggajian\DataPegawaiController@create')->name('penggajians.data-pegawai.buat');
    Route::post('simpan/data-pegawai', 'Penggajian\DataPegawaiController@store')->name('penggajians.data-pegawai.simpan');
    Route::delete('hapus/data-pegawai{pegawai}', 'Penggajian\DataPegawaiController@destroy')->name('penggajians.data-pegawai.hapus');
    
    Route::get('data-gaji', 'Penggajian\DataGajiController@index')->name('penggajians.data-gaji');
    Route::get('tambah/data-gaji', 'Penggajian\DataGajiController@create')->name('penggajians.data-gaji.buat');
    
    Route::get('data-lembur', 'Penggajian\DataLemburPegawaiController@index')->name('penggajians.data-lembur-pegawai');
    Route::get('tambah/data-lembur-pegawai', 'Penggajian\DataLemburPegawaiController@create')->name('penggajians.data-lembur-pegawai.buat');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
