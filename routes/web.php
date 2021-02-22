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
    Route::get('data-pegawai', 'Penggajian\EmployeeController@index')->name('penggajians.pegawai');
    Route::get('tambah/data-pegawai', 'Penggajian\EmployeeController@create')->name('penggajians.pegawai.buat');
    Route::post('simpan/data-pegawai', 'Penggajian\EmployeeController@store')->name('penggajians.pegawai.simpan');
    Route::delete('hapus/data-pegawai{employee}', 'Penggajian\EmployeeController@destroy')->name('penggajians.pegawai.hapus');
    Route::get('lihat/data-pegawai{employee}', 'Penggajian\EmployeeController@show')->name('penggajians.pegawai.lihat');
    Route::patch('update/data-pegawai{employee}', 'Penggajian\EmployeeController@update')->name('penggajians.pegawai.update');
    Route::get('edit/data-pegawai{employee}', 'Penggajian\EmployeeController@edit')->name('penggajians.pegawai.edit');
    
    //Data Hadir
    Route::get('absensi', 'Penggajian\TypeController@index')->name('absensi');
    Route::get('tambah/absensi', 'Penggajian\TypeController@create')->name('tambah.absensi');
    Route::post('simpan/absensi', 'Penggajian\TypeController@store')->name('simpan.absensi');
    Route::delete('hapus/absensi{type}', 'Penggajian\TypeController@destroy')->name('hapus.absensi');
    Route::get('edit/absensi{type}', 'Penggajian\TypeController@edit')->name('edit.absensi');
    Route::patch('update/absensi{type}', 'Penggajian\TypeController@update')->name('update.absensi');
    
    //Price
    Route::get('price','Penggajian\PriceController@index')->name('price');
    Route::get('tambah/price','Penggajian\PriceController@create')->name('tambah.price');
    Route::post('simpan/price','Penggajian\PriceController@store')->name('simpan.price');
    Route::get('edit/price{price}','Penggajian\PriceController@edit')->name('edit.price');
    Route::delete('hapus/price{price}','Penggajian\PriceController@destroy')->name('hapus.price');
    Route::patch('update/price{price}','Penggajian\PriceController@update')->name('update.price');
    Route::get('lihat/price{price}','Penggajian\PriceController@show')->name('lihat.price');

    //Payment
    Route::get('payment','Penggajian\PaymentController@index')->name('payment');
    Route::get('tambah/payment','Penggajian\PaymentController@create')->name('tambah.payment');
    Route::post('simpan/payment','Penggajian\PaymentController@store')->name('simpan.payment');
    Route::get('edit/payment{payment}','Penggajian\PaymentController@edit')->name('edit.payment');
    Route::patch('update/payment{payment}','Penggajian\PaymentController@update')->name('update.payment');
    Route::get('lihat/payment{payment}','Penggajian\PaymentController@show')->name('lihat.payment');
    Route::delete('hapus/payment{payment}','Penggajian\PaymentController@destroy')->name('hapus.payment');
    
    // SMS
    Route::get('create/sms', 'SmsController@create')->name('create.sms');
    Route::post('send/sms', 'SmsController@send')->name('send.sms');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
