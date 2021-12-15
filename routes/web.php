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

Route::get('ets', function () {
    return view('formvalidationets');
});

Route::get('praktek1', function () {
    return view('praktikum1');
});

Route::get('tugass4', function () {
    return view('tugasbagian4');
});

Route::get('praktek2','ViewController@showPraktikum2');

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD Pendapatan
Route::get('/pendapatan','PendapatanController@index');

Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');

Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD minuman
Route::get('/minuman','minumanController@index');

Route::get('/minuman/add','minumanController@add');
Route::post('/minuman/store','minumanController@store');

Route::get('/minuman/edit/{id}','minumanController@edit');
Route::post('/minuman/update','minumanController@update');

Route::get('/minuman/hapus/{id}','minumanController@hapus');



//route Bahagua
Route::get('bahagia', function () {
    return view('layout.bahagia');
});


