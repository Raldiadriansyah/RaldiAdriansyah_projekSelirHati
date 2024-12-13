<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanPenjualan;



Route::middleware([Authenticate::class])->group(function () {
    Route::resource('Menu', MenuController::class);
    Route::resource('Home', HomeController::class);
    Route::resource('Penjualan', PenjualanController::class);
    Route::resource('Pengeluaran', PengeluaranController::class);
    Route::resource('user', UserController::class);
    Route::resource('laporan-penjualan', LaporanPenjualan::class);
});

Route::resource('pesanan', PesananController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');