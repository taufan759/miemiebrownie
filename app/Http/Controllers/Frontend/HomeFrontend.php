<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Berita;
use App\Models\Backend\Produk;

use Illuminate\Http\Request;

class HomeFrontend extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();

        $bestSellers = Produk::orderBy('created_at', 'desc')->take(4)->get();

        return view('frontend.home.index', compact('berita', 'bestSellers'));
    }
}
