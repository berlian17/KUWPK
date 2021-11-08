<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produkPria() {
        return view('public.produk.pria');
    }

    public function produkWanita() {
        return view('public.produk.wanita');
    }

    public function produkAnak() {
        return view('public.produk.anak');
    }

    public function produkDetail() {
        return view('public.produk.detail');
    }

    public function keranjang() {
        return view('public.produk.keranjang');
    }

    public function transaksi() {
        return view('public.transaksi.transaksi');
    }

    public function transaksiDetailPayment() {
        return view('public.transaksi.detail(payment)');
    }

    public function transaksiDetail() {
        return view('public.transaksi.detail(done)');
    }
}
