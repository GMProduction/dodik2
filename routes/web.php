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

Route::get('/', function () {
    return view('lelang/datalelang');
});

Route::get('/tambahlelang', function () {
    return view('lelang/tambahlelang');
});

Route::get('/datajadwal', function () {
    return view('jadwal/datajadwal');
});

Route::get('/tambahjadwal', function () {
    return view('jadwal/tambahjadwal');
});

Route::get('/datatahapan', function () {
    return view('tahapan/datatahapan');
});

Route::get('/laporanlelang', function () {
    return view('laporan/laporanlelang');
});

Route::get('/tambahtahapan', function () {
    return view('tahapan/tambahtahapan');
});

Route::get('/login', function () {
    return view('login/login');
});

Route::get('/cetakdatalelang', 'LaporanController@cetakDataLelang')->name('cetakDataLelang');
Route::get('/cetakdatajadwal', 'LaporanController@cetakDataJadwal')->name('cetakDataJadwal');
Route::get('/cetakdatatahapan', 'LaporanController@cetakDataTahapan')->name('cetakDataTahapan');
