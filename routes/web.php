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

Route::get('/', 'Auth\AuthController@index');
Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/postlogin', 'Auth\AuthController@login');

Route::get('/admin', 'Main\MainController@index');

Route::group(['prefix' => 'admin'], function (){

   Route::get('/lelang', 'Transaction\LelangController@index');
   Route::get('/lelang/add', 'Transaction\LelangController@addForm');
   Route::get('/lelang/edit/{id}', 'Transaction\LelangController@editForm');
   Route::post('/lelang/store', 'Transaction\LelangController@store');
   Route::post('/lelang/update', 'Transaction\LelangController@updateLelang');

    Route::get('/jadwal', 'Transaction\JadwalController@index');
    Route::get('/jadwal/add', 'Transaction\JadwalController@addForm');
    Route::get('/jadwal/edit/{id}', 'Transaction\JadwalController@editForm');
    Route::post('/jadwal/store', 'Transaction\JadwalController@store');
    Route::post('/jadwal/update', 'Transaction\JadwalController@updateJadwal');

    Route::get('/tahapan', 'Transaction\TahapanController@index');
    Route::get('/tahapan/add', 'Transaction\TahapanController@addForm');
    Route::get('/tahapan/edit/{id}', 'Transaction\TahapanController@editForm');
    Route::post('/tahapan/store', 'Transaction\TahapanController@store');
    Route::post('/tahapan/update', 'Transaction\TahapanController@updateTahapan');

    Route::get('/laporan', 'LaporanController@index');

});

//Route::get('/tambahlelang', function () {
//    return view('lelang/tambahlelang');
//});
//
//Route::get('/datajadwal', function () {
//    return view('jadwal/datajadwal');
//});
//
Route::get('/tambahjadwal', function () {
    return view('jadwal/tambahjadwal');
});
//
//Route::get('/datatahapan', function () {
//    return view('tahapan/datatahapan');
//});
//
//Route::get('/laporanlelang', function () {
//    return view('laporan/laporanlelang');
//});
//
//Route::get('/tambahtahapan', function () {
//    return view('tahapan/tambahtahapan');
//});
//
//Route::get('/login', function () {
//    return view('login/login');
//}
//);
Route::get('/cetakdatalelang', 'LaporanController@cetakDataLelang')->name('cetakDataLelang');
Route::get('/cetakdatajadwal', 'LaporanController@cetakDataJadwal')->name('cetakDataJadwal');
Route::get('/cetakdatatahapan', 'LaporanController@cetakDataTahapan')->name('cetakDataTahapan');
