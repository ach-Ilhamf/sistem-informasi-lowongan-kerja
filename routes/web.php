<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;


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

Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');


Route::get('/index/admin','App\Http\Controllers\AdminController@index')->name('index');
Route::get('/index/daftar_kandidat','App\Http\Controllers\AdminController@daftar_kandidat')->name('daftar_kandidat');
Route::get('/index/data_kandidat','App\Http\Controllers\AdminController@data_kandidat')->name('data_kandidat');
Route::get('/index/hapus_kandidat/{id}','App\Http\Controllers\adminController@hapus_kandidat');

Route::get('/index/daftar_loker','App\Http\Controllers\AdminController@daftar_loker')->name('daftar_loker');
Route::get('/index/data_loker','App\Http\Controllers\AdminController@data_loker')->name('data_loker');
Route::get('/index/hapus_loker/{id}','App\Http\Controllers\adminController@hapus_loker');

Route::get('/index/daftar_perusahaan','App\Http\Controllers\AdminController@daftar_perusahaan')->name('daftar_perusahaan');
Route::get('/index/data_perusahaan','App\Http\Controllers\AdminController@data_perusahaan')->name('data_perusahaan');
Route::get('/index/hapus_perusahaan/{id}','App\Http\Controllers\AdminController@hapus_perusahaan')->name('hapus_perusahaan');


//CRUD Pelamar
Route::get('/index/pelamar','App\Http\Controllers\PelamarController@index');
Route::get('/index/profilpk','App\Http\Controllers\PelamarController@tambah');
Route::post('/index/store','App\Http\Controllers\PelamarController@store');
Route::get('/index/profiledit/{id}','App\Http\Controllers\PelamarController@edit');
Route::post('/index/update','App\Http\Controllers\PelamarController@update');
Route::get('/index/hapus/{id}','App\Http\Controllers\PelamarController@hapus');
Route::get('/index/dashboardpk','App\Http\Controllers\PelamarController@dashboardpk')->name('dashboardpk');
Route::get('/index/profilpk','App\Http\Controllers\PelamarController@profilpk')->name('profilpk');
Route::get('/index/cari_pekerjaan','App\Http\Controllers\PelamarController@cari_pekerjaan')->name('cari_pekerjaan');
Route::get('/index/pengaturanpk','App\Http\Controllers\PelamarController@pengaturanpk')->name('pengaturanpk');
Route::get('/index/melamarpk','App\Http\Controllers\PelamarController@melamarpk')->name('melamarpk');
Route::get('/index/lowongan_disimpan','App\Http\Controllers\PelamarController@lowongan_disimpan')->name('lowongan_disimpan');
Route::get('/index/editprofil','App\Http\Controllers\PelamarController@editprofil')->name('editprofil');
Route::get('/index/lihat_loker','App\Http\Controllers\PelamarController@loker');

#CRUD Perusahaan
Route::get('/index','App\Http\Controllers\PerusahaanController@index');
Route::get('/index/profil','App\Http\Controllers\PerusahaanController@masuk');
Route::post('/index/insert','App\Http\Controllers\PerusahaanController@insert');
Route::get('/index/pasang','App\Http\Controllers\PerusahaanController@plus');
Route::post('/index/input','App\Http\Controllers\PerusahaanController@input');
Route::get('/index/hapus2/{id}','App\Http\Controllers\PerusahaanController@hapus2');
Route::get('/index/editloker/{id}','App\Http\Controllers\PerusahaanController@edit');
Route::post('/index/update_loker','App\Http\Controllers\PerusahaanController@update_loker');
Route::get('/index/diterima','App\Http\Controllers\PerusahaanController@diterima')->name('diterima');
Route::get('/index/masuk','App\Http\Controllers\PerusahaanController@masuk')->name('masuk');
Route::get('/index/pasang','App\Http\Controllers\PerusahaanController@pasang')->name('pasang');
Route::get('/index/pengaturan','App\Http\Controllers\PerusahaanController@pengaturan')->name('pengaturan');
Route::get('/index/profil','App\Http\Controllers\PerusahaanController@profil')->name('profil');
Route::get('/index/cek','App\Http\Controllers\PerusahaanController@cek')->name('cek');
Route::get('/index/update_pasang','App\Http\Controllers\PerusahaanController@pasang')->name('update_pasang');
Route::get('/index/perusahaan','App\Http\Controllers\PerusahaanController@perusahaan')->name('perusahaan');
Route::get('/index/data','App\Http\Controllers\PerusahaanController@data')->name('data');
Route::get('/index/hapus3/{id}','App\Http\Controllers\PerusahaanController@hapus3');
Route::get('/index/update_profil','App\Http\Controllers\PerusahaanController@update_profil')->name('update_profil');
Route::get('/index/editprofil/{id}','App\Http\Controllers\PerusahaanController@editprofil');
Route::post('/index/profil_update','App\Http\Controllers\PerusahaanController@profil_update')->name('profil_update');
Route::get('/index/kandidat','App\Http\Controllers\PerusahaanController@kandidat')->name('kandidat');
Route::get('/index/hapus4/{id}','App\Http\Controllers\PerusahaanController@hapus4');
// Route::get('/api/data', 'ApiController@getData')->name('data');


//auth
//auth -> admin || pelamar || perusahaan
Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });

    Route::group(['middleware' => ['cek_login:pelamar']], function(){
        Route::get('pelamar','App\Http\Controllers\PelamarController@index')->name('pelamar');
    });

    Route::group(['middleware' => ['cek_login:perusahaan']], function(){
        Route::get('perusahaan','App\Http\Controllers\PerusahaanController@index')->name('perusahaan');
    });
});


Route::get('/api/data', [ApiController::class, 'getData'])->name('data');
Route::get('/api/data_perusahaan', [ApiController::class, 'getDataPerusahaan'])->name('data_perusahaan');
Route::get('/api/data_pelamar', [ApiController::class, 'getDataPelamar'])->name('data_pelamar');

Route::get('/coba', function () {
    return view('coba');
});




