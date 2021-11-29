<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicController;
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

// Route::get('/', function () {
//     return view('public.unit.simpin');
// });

Auth::routes();

Route::prefix('public/')->group(function() {
    Route::get('beranda', [PublicController::class, 'beranda'])->name('public.beranda');
    Route::get('profile-koperasi', [PublicController::class, 'aboutus'])->name('public.aboutus');
    Route::get('struktur-organisasi', [PublicController::class, 'organisasi'])->name('public.organisasi');
    Route::get('kontak-kami', [PublicController::class, 'kontak'])->name('public.kontak');
    Route::get('profile', [PublicController::class, 'profile'])->name('public.profile');
    Route::get('portofolio', [PublicController::class, 'portofolio'])->name('public.portofolio');
    Route::get('keranjang', [ProdukController::class, 'keranjang'])->name('public.keranjang');

    Route::prefix('unit/')->group(function() {
        Route::get('simpin', [PublicController::class, 'unit_simpin'])->name('public.unitsimpin');
    });

    Route::prefix('produk/')->group(function() {
        Route::get('pria', [ProdukController::class, 'produkPria'])->name('public.produkpria');
        Route::get('wanita', [ProdukController::class, 'produkWanita'])->name('public.produkwanita');
        Route::get('anak', [ProdukController::class, 'produkAnak'])->name('public.produkanak');
        Route::get('detail', [ProdukController::class, 'produkDetail'])->name('public.produkdetail');
    });

    Route::prefix('transaksi/')->group(function() {
        Route::get('/', [ProdukController::class, 'transaksi'])->name('public.transaksi');
        Route::get('detail-payment', [ProdukController::class, 'transaksiDetailPayment'])->name('public.transaksidetailpayment');
        Route::get('detail', [ProdukController::class, 'transaksiDetail'])->name('public.transaksidetail');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
