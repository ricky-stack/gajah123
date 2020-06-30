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
Route::get('/', function() {
    return view('welcome');
});
Route::get('peminjaman','PinjamController@index');
Route::get('peminjaman/tambah','PinjamController@tambah');
Route::post('peminjaman/proses_tambah','PinjamController@proses_tambah');
Route::get('peminjaman/hapus/{id}','PinjamController@hapus');
Route::get('peminjaman/edit/{id}','PinjamController@edit');
Route::post('Peminjaman/proses_edit/{id}','PinjamController@proses_edit')->name('buku.edit');


Route::get('anggota','PinjamController@anggota');
Route::get('anggota/tambahag','PinjamController@tambahag');
Route::post('anggota/proses_tambah2','PinjamController@proses_tambah2');
Route::get('anggota/hapus2/{id}','PinjamController@hapus2');
Route::get('anggota/editag/{id}','PinjamController@editag');
Route::post('anggota/proses_edit2/{id}','PinjamController@proses_edit2')->name('anggota.edit');


Route::get('pinjam','PinjamController@pinjam');
Route::get('pinjam/tambahpj','PinjamController@tambahpj');
Route::post('pinjam/proses_tambah3','PinjamController@proses_tambah3');


Route::get('welcome','PinjamController@welcome');