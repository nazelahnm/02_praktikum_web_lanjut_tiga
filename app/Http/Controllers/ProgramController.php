<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function  karir()
    {
        return 'selamat datang di halaman karir';
    }
    public function magang()
    {
        return 'selamat datang di halaman magang';
    }
    public function kunjunganindustri()
    {
        return 'selamat datang di halaman kunjungan industri';
    }
}
