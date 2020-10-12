<?php

use App\Http\Controllers\SKPDController;
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

Route::get('/', 'PagesController@home');

// metode
Route::get('/metode', 'MetodeController@index');
Route::get('/metode/add', 'MetodeController@create');
Route::post('/metode', 'MetodeController@store');

// skpd
Route::get('/skpd', 'SKPDController@index');
Route::get('/skpd/add', 'SKPDController@create');
Route::post('/skpd', 'SKPDController@store');

// pptk
Route::get('/pptk', 'PPTKController@index');
Route::get('/pptk/add', 'PPTKController@create');
Route::post('/pptk', 'PPTKController@store');

// pimpinan skpd
Route::get('/pimpinan-skpd', 'PimpinanController@index');
Route::get('/pimpinan-skpd/add', 'PimpinanController@create');
Route::post('/pimpinan-skpd', 'PimpinanController@store');

// data realisasi
Route::get('/data-realisasi', 'DataRealisasiController@index');
Route::get('/data-realisasi/add', 'DataRealisasiController@create');
Route::post('/data-realisasi', 'DataRealisasiController@store');

// tahun anggaran
Route::get('/tahun-anggaran','TahunAnggaranController@index');
Route::get('/tahun-anggaran/add','TahunAnggaranController@create');
Route::post('/tahun-anggaran','TahunAnggaranController@store');