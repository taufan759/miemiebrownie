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

    public function produk($kategori = null)
{
    // Ambil semua kategori
    $kategoriList = Kategori::all();
    
    // Jika kategori dipilih, filter produk berdasarkan kategori
    if ($kategori) {
        $kategoriId = Kategori::where('nama_kategori', $kategori)->pluck('id')->first();
        $products = Produk::where('kategori_id', $kategoriId)->get();
    } else {
        // Jika tidak ada kategori yang dipilih, ambil semua produk
        $products = Produk::all();
    }

    return view('frontend.page.produk', [
        'products' => $products,
        'kategori' => $kategoriList, // Mengirim semua kategori ke view
    ]);
}

public function produkdetail($id)
{
    // Ambil data produk berdasarkan ID
    $product = Produk::findOrFail($id);

    // Kembalikan view untuk detail produk
    return view('frontend.produkdetail.index', [
        'product' => $product
    ]);
}





public function produkByKategori($nama_kategori)
{
    // Ambil kategori berdasarkan nama
    $kategori = Kategori::where('nama_kategori', $nama_kategori)->firstOrFail();
    
    // Ambil semua produk yang termasuk dalam kategori ini
    $products = Produk::where('kategori_id', $kategori->id)->get();

    // Kirim data kategori dan produk ke view
    return view('frontend.produk', [
        'products' => $products,
        'kategori' => $kategori,  // Ini adalah instance dari model Kategori
    ]);
}

    

    // public function detai($id)
    // {
    //     $product = Produk::find($id); 
    //     return view('frontend.page.detail', ['produk' => $produk]);
    // }
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
