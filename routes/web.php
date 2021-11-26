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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/lihatdata','App\Http\Controllers\Controller@lihatdata')->middleware(['auth'])->name('lihatdata');;

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

Route::post('/validasi_form','App\Http\Controllers\FormController@validasi_form')->name('form.validation');

Route::get('/editdata/{no_reg}', 'App\Http\Controllers\FormController@editdata');

Route::post('/validasi_update', 'App\Http\Controllers\FormController@validasi_update')->name('form.update');

Route::get('/hapus/{no_reg}', 'App\Http\Controllers\FormController@hapus');

require __DIR__.'/auth.php';