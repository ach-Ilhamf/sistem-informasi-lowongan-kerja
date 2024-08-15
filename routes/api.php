<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/data', 'ApiController@getData')->name('data');
Route::get('/api/data_perusahaan', 'ApiController@getDataPerusahaan')->name('data_perusahaan');
Route::get('/api/data_pelamar', 'ApiController@getDataPelamar')->name('data_pelamar');

