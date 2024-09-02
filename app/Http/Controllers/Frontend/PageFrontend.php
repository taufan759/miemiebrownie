<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Kategori;
use App\Models\Backend\Produk;
use App\Models\Backend\Berita;

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
        $products = Produk::orderBy('id', 'desc')->get();
        return view('frontend.page.produk', [
            'kategori' => $kategori,
            'products' => $products
        ]);
    }
    

    // public function detai($id)
    // {
    //     $product = Produk::find($id); 
    //     return view('frontend.page.detail', ['produk' => $produk]);
    // }

    public function detail()
    {
        return view('frontend.page.detail');
    }

    public function mitra()
    {
        return view('frontend.page.mitra');
    }


    public function blog()
    {
        $berita = Berita::orderBy('created_at', 'desc')->get();
        return view('frontend.page.blog', compact('berita'));
    }

    public function blogdetails($id)
    {
        $berita = Berita::find($id);
        return view('frontend.page.blog-details', compact('berita'));
    }

}
