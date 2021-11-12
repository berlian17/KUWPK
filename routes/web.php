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
//     return view('public.pinjaman.formPinjaman');
// });

Auth::routes();

Route::prefix('register/')->group(function() {
    Route::get('/', [RegisterController::class, 'showRegistrationForm'])->name('register');
});

Route::prefix('public/')->group(function() {
    Route::get('beranda', [PublicController::class, 'beranda'])->name('public.beranda');
    Route::get('profile-koperasi', [PublicController::class, 'aboutus'])->name('public.aboutus');
    Route::get('struktur-organisasi', [PublicController::class, 'organisasi'])->name('public.organisasi');
    Route::get('kontak-kami', [PublicController::class, 'kontak'])->name('public.kontak');
    Route::get('pinjaman', [PublicController::class, 'pinjaman'])->name('public.pinjaman');
    Route::get('form-pinjaman', [PublicController::class, 'formPinjaman'])->name('public.formpinjaman');
    Route::get('simpanan', [PublicController::class, 'simpanan'])->name('public.simpanan');
    Route::get('profile', [PublicController::class, 'profile'])->name('public.profile');
    Route::get('portofolio', [PublicController::class, 'portofolio'])->name('public.portofolio');

    Route::get('produk-pria', [ProdukController::class, 'produkPria'])->name('public.produkpria');
    Route::get('produk-wanita', [ProdukController::class, 'produkWanita'])->name('public.produkwanita');
    Route::get('produk-anak', [ProdukController::class, 'produkAnak'])->name('public.produkanak');
    Route::get('produk-detail', [ProdukController::class, 'produkDetail'])->name('public.produkdetail');
    Route::get('keranjang', [ProdukController::class, 'keranjang'])->name('public.keranjang');
    Route::get('transaksi', [ProdukController::class, 'transaksi'])->name('public.transaksi');
    Route::get('transaksi-detail-payment', [ProdukController::class, 'transaksiDetailPayment'])->name('public.transaksidetailpayment');
    Route::get('transaksi-detail', [ProdukController::class, 'transaksiDetail'])->name('public.transaksidetail');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
