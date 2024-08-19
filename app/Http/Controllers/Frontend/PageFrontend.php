<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Kategori; // Pastikan ini sesuai dengan namespace model

class PageFrontend extends Controller
{
    public function keranjang()
    {
        return view('frontend.page.keranjang');
    }

    public function tentang()
    {
        return view('frontend.page.tentang');
    }

    public function produk()
    {
        $kategori = Kategori::orderBy('id', 'desc')->get(); 
        return view('frontend.page.produk', ['kategori' => $kategori]); 
    }

    public function mitra()
    {
        return view('frontend.page.mitra');
    }
}
