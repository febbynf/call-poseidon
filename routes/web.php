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
    return view('dashboard');
});

// Route::resource('Gelas', 'GelasController');
Route::get("create","GelasController@create");
Route::post("store","GelasController@store");
Route::get("index","GelasController@index");
Route::get('/grafik-ziegler', function () {
    return view('grafik_ziegler');
});
Route::get('/grafik-cohen', function () {
    return view('grafik_cohen');
});
Route::get('/grafik-fuzzy', function () {
    return view('grafik_fuzzy');
});
Route::get('/data-fuzzy', function () {
    return view('tabel_fuzzy');
});
Route::get('/data-tuning', function () {
    return view('tabel_tuning');
});


