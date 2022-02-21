<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function  berita($id)
    {
        return 'selamat datang di halaman berita ' . $id;
    }
}
