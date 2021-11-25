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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/lihatdata', function () {
    return view('lihatdata');
})->middleware(['auth'])->name('lihatdata');

Route::get('/editdata', function () {
    return view('editdata');
})->middleware(['auth'])->name('editdata');

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

require __DIR__.'/auth.php';