<?php

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

Route::get('/1', function () {
    return view('example.animate');
});

Route::get('/', function () {
    return view('public.aboutus');
});

Auth::routes();

Route::prefix('public/')->group(function() {
    Route::get('beranda', [PublicController::class, 'beranda'])->name('public.beranda');
    Route::get('profileKoperasi', [PublicController::class, 'aboutus'])->name('public.aboutus');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
