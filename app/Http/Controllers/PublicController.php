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
}
