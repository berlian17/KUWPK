<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function beranda() {
        return view('public.beranda');
    }

    public function aboutus() {
        return view('public.aboutus');
    }

    public function organisasi() {
        return view('public.organisasi');
    }

    public function kontak() {
        return view('public.kontak');
    }

    public function pinjaman() {
        return view('public.pinjaman.pinjaman');
    }

    public function formPinjaman() {
        return view('public.pinjaman.formPinjaman');
    }

    public function simpanan() {
        return view('public.simpanan.simpanan');
    }

    public function profile() {
        return view('public.profile');
    }

    public function portofolio() {
        return view('public.portofolio');
    }
}
