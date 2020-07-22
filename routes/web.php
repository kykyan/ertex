<?php

use Illuminate\Support\Facades\Route;

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

// User Route
Route::get('/', "PagesController@home")->name('login');
Route::get('/info', "PagesController@informasi");
Route::get('/pengumuman', "AnnounceController@pengumuman");
Route::get('/pengumuman/{announces}', "AnnounceController@show");

Route::get('/loginservice', "ServicesController@index");
Route::post('/loginservice', "ServicesController@login");
Route::get('/keluar', "ServicesController@logout");

Route::group(['middleware' => 'pelayanan'], function(){
    Route::get('/pelayanan', "ServicesController@pelayanan");
    Route::post('/pelayanan', "ServicesController@store");
});

// Admin Route
Route::get('/login', "AuthController@login");
Route::post('/login', "AuthController@postlogin");
Route::get('/logout', "AuthController@logout");

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', "PagesController@dashboard");
    // Citizens
    Route::get('/warga', "CitizensController@index");
    Route::get('/warga-asli', "CitizensController@index1");
    Route::get('/warga-luar', "CitizensController@index2");
    Route::get('/warga-pendatang', "CitizensController@index3");
    Route::get('/warga/create', "CitizensController@create");
    Route::get('/warga/cari', "CitizensController@cari");
    Route::get('/warga/{citizen}', "CitizensController@show");
    Route::post('/warga', "CitizensController@store");
    Route::delete('/warga/{citizen}', "CitizensController@destroy");
    Route::get('/warga/{citizen}/edit', "CitizensController@edit");
    Route::patch('/warga/{citizen}', "CitizensController@update");
    // Pelayanan
    Route::get('/permintaan', "ServicesController@permintaan");
    Route::get('/permintaan/arsip', "ServicesController@arsip");
    Route::get('/permintaan/{services}', "ServicesController@show");
    Route::delete('/permintaan/{services}', "ServicesController@destroy");
    Route::get('/permintaan/{services}/edit', "ServicesController@edit");
    Route::patch('/permintaan/{services}', "ServicesController@update");
    Route::get('/permintaan/{services}/cetak', "ServicesController@cetak_pdf");
    Route::get('/permintaan/{services}/selesai', "ServicesController@suratselesai");
    // Pengumuman
    Route::get('/announcement', "AnnounceController@index");
    Route::get('/announcement/tambah', "AnnounceController@create");
    Route::post('/announcement', "AnnounceController@store");
    Route::get('/announcement/{announces}/publish', "AnnounceController@publish");
    Route::get('/announcement/{announces}/hide', "AnnounceController@hide");
    Route::delete('/announcement/{announces}', "AnnounceController@destroy");
    Route::get('/announcement/{announces}/edit', "AnnounceController@edit");
    Route::patch('/announcement/{announces}', "AnnounceController@update");
});