<?php

use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Datatables;

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

Route::get('/','App\Http\Controllers\Controller@pencarian');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/lihatdata','App\Http\Controllers\Controller@lihatdata')->middleware(['auth'])->name('lihatdata');;

Route::get('/lihatpengumuman','App\Http\Controllers\Controller@pengumuman');

Route::get('/tambahdata', function () {
    return view('tambahdata');
})->middleware(['auth'])->name('tambahdata');

Route::get('/hapusdata', function () {
    return view('hapusdata');
})->middleware(['auth'])->name('hapusdata');

Route::get('/cetakdata', function () {
    return view('cetakdata');
})->middleware(['auth'])->name('cetakdata');

Route::get('/pengumuman', function () {
    return view('pengumuman');
})->middleware(['auth'])->name('pengumuman');

Route::get('/upload', 'App\Http\Controllers\FormController@upload');

Route::get('/proses_upload', 'App\Http\Controllers\Controller@proses_upload');

Route::post('/validasi_form','App\Http\Controllers\FormController@validasi_form')->name('form.validation');

Route::post('/validasi_cari','App\Http\Controllers\Controller@validasi_cari')->name('form.cari');

Route::get('/editdata/{no_reg}', 'App\Http\Controllers\FormController@editdata')->middleware(['auth'])->name('editdata');

Route::get('/detail/{no_reg}', 'App\Http\Controllers\FormController@detail')->middleware(['auth'])->name('detail');

Route::post('/validasi_update', 'App\Http\Controllers\FormController@validasi_update')->name('form.update');

Route::get('/hapus/{no_reg}', 'App\Http\Controllers\FormController@hapus');

Route::get('/cetak/{no_reg}', 'App\Http\Controllers\FormController@cetak')->middleware(['auth'])->name('cetak');

Route::get('/pencarian', 'App\Http\Controllers\Controller@validasi_cari')->name('form.cari');

require __DIR__.'/auth.php';