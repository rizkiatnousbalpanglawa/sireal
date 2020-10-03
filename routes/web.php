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
