<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }   

    public function application()
    {
        return view('dashboard.apllication');
    }

    public function pembayaran()
    {
        return view('pendaftaran.pembayaran');
    }

    public function pembayaran2()
    {
        return view('pendaftaran.status_pembayaran');
    }

    public function pembayaran3()
    {
        return view('pendaftaran.bukti_pembayaran');
    }

    public function test()
    {
        return view('ujian.index');
    }

    public function daftar_ulang()
    {
        return view('daftar_ulang.index');
    }
    
    public function reguler()
    {
        return view('daftar_ulang.jalur_daftar');
    }

    public function final ()
    {
        return view('daftar_ulang.final-step');
    }

    public function detailTagihan()
    {
        return view('daftar_ulang.lihat_tagihan');
    }
}
