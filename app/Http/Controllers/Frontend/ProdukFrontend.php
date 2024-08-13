<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Produk;
use Illuminate\Http\Request;

class ProdukFrontend extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Produk::all();
        return view('frontend.produk.index', compact('produk'));
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Produk::findOrFail($id);
        return view('frontend.produk.show', compact('produk'));
    }
}