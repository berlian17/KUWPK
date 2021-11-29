<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    // public function otpLogin() 
    // {
    //     return view('auth.smsOTP');
    // }
    
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

    public function unit_simpin() {
        return view('public.unit.simpin');
    }

    public function profile() {
        $data1 = Auth::user();
        return view('public.profile', compact('data1'));
    }

    public function portofolio() {
        return view('public.portofolio');
    }
}
