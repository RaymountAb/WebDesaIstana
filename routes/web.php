<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\LoginController;

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
    return view('content.home');
});
Route::get('beranda', [PageController::class, 'index']);
Route::get('lapakdesa', [PageController::class, 'lapak']);
Route::get('peta', [PageController::class, 'peta']);
Route::get('struktur', [PageController::class, 'struktur']);
Route::get('visimisi', [PageController::class, 'visimisi']);
Route::get('profil', [PageController::class, 'profil']);
Route::get('sejarah', [PageController::class, 'sejarah']);
Route::get('status-idm', [PageController::class, 'status']);
Route::get('produk-hukum', [PageController::class, 'prodhuk']);
Route::get('informasi-publik', [PageController::class, 'inpub']);
Route::get('organisasi/karangtaruna', [PageController::class, 'taruna']);
Route::get('organisasi/pkk', [PageController::class, 'pkk']);
Route::get('organisasi/posyandu', [PageController::class, 'posyandu']);
Route::get('organisasi/bpddesa', [PageController::class, 'bpddesa']);
Route::get('organisasi/bumdes', [PageController::class, 'bumdes']);
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class,'dashboard']);
    Route::resource('admin/konten', KontenController::class);
    Route::resource('admin/statpenduduk',PendudukController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('login-admin',[LoginController::class,'login'])->name('login-admin');
    Route::post('login',[LoginController::class,'authenticate']);
});


