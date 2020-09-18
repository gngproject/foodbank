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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index')->name('home');

// tentang kami route
Route::get('/tim-kami', 'TentangKamiController@timkami')->name('tim-kami');
Route::get('/yang-kami-layani', 'TentangKamiController@yangkamilayani')->name('yang-kami-layani');

//lokasi route
Route::get('/lokasi-foodbank', 'LokasiController@viewLokasi')->name('lokasi');

//donasi route
Route::get('/donasi-dana', 'DonasiController@donasidana')->name('donasi-dana');

//kegiatan-kami route
Route::get('/ketahanan-pangan', 'KegiatanKamiController@tahanpangan')->name('tahan-pangan');
Route::get('/model-foodbank', 'KegiatanKamiController@model')->name('model');


