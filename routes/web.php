<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengguna',  PenggunaController::class);
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/user', function () {
    return view('user.index');
})->name('user.index');
Route::resource('pengguna', \App\Http\Controllers\PenggunaController::class);
