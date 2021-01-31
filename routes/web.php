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

Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('table-data', function () {
    return view('table-data');
});

Route::get('table-data2', function () {
    return view('table-data2');
});

Route::get('table-data3', function () {
    return view('table-data3');
});

Route::get('isi-data', function () {
    return view('isi-data');
});

Route::get('isi-data2', function () {
    return view('isi-data2');
});

Route::get('isi-data3', function () {
    return view('isi-data3');
});

Route::group(['middleware' => ['web']], function () {
    //routes here
});

Route::resource('angkots','cobacontroller');

Route::post('prosestambah','Crudcontroller@tambahdata');

Route::get('read', function () {
    return view('read');
});