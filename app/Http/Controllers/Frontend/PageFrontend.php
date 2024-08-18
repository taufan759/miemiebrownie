<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

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
        return view('frontend.page.produk');
    }

    public function mitra()
    {
        return view('frontend.page.mitra');
    }
}

