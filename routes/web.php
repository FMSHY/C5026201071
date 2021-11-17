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


