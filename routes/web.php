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

Route::get('dokter' , 'DokterController@index');
Route::get('dokter/add','DokterController@add');
Route::post('dokter/save','DokterController@store');
Route::get('dokter/edit/{id}','DokterController@edit');
Route::post('dokter/update','DokterController@update');
Route::get('dokter/delete/{id}','DokterController@delete');

Route::get('obat' , 'ObatController@index');
Route::get('obat/add','ObatController@add');
Route::post('obat/save','ObatController@store');
Route::get('obat/edit/{id}','ObatController@edit');
Route::post('obat/update','ObatController@update');
Route::get('obat/delete/{id}','ObatController@delete');

Route::get('pasien' , 'PasienController@index');
Route::get('pasien/add','PasienController@add');
Route::post('pasien/save','PasienController@store');
Route::get('pasien/edit/{id}','PasienController@edit');
Route::post('pasien/update','PasienController@update');
Route::get('pasien/delete/{id}','PasienController@delete');

Route::get('kamar' ,'KamarController@index');
Route::get('kamar/add','KamarController@add');
Route::post('kamar/save','KamarController@store');
Route::get('kamar/edit/{id}','KamarController@edit');
Route::post('kamar/update','KamarController@update');
Route::get('kamar/delete/{id}','KamarController@delete');

Route::get('fasilitas' , 'FasilitasController@index');
Route::get('fasilitas/add','FasilitasController@add');
Route::post('fasilitas/save','FasilitasController@store');
Route::get('fasilitas/edit/{id}','FasilitasController@edit');
Route::post('fasilitas/update','FasilitasController@update');
Route::get('fasilitas/delete/{id}','FasilitasController@delete');

Route::get('resep' , 'ResepController@index');
Route::get('resep/add','ResepController@add');
Route::post('resep/save','ResepController@store');
Route::get('resep/edit/{id}','ResepController@edit');
Route::post('resep/update','ResepController@update');
Route::get('resep/delete/{id}','ResepController@delete');

Route::get('list_obat' , 'ListController@index');
Route::get('list_obat/add','ListController@add');
Route::post('list_obat/save','ListController@store');
Route::get('list_obat/edit/{id}','ListController@edit');
Route::post('list_obat/update','ListController@update');
Route::get('list_obat/delete/{id}','ListController@delete');

Route::get('jenis_obat' , 'JenisController@index');
Route::get('jenis_obat/add','JenisController@create');
Route::post('jenis_obat/save','JenisController@store');
Route::get('jenis_obat/edit/{id}','JenisController@edit');
Route::post('jenis_obat/update','JenisController@update');
Route::get('jenis_obat/delete/{id}','JenisController@delete');