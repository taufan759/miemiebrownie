<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Produk; 
use Illuminate\Http\Request;

class KeranjangFrontend extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
    
        // Menghitung total harga
        $cartTotal = 0;
        foreach ($cartItems as $item) {
            $cartTotal += $item['harga'] * $item['quantity'];
        }
    
        return view('frontend.cart.index', compact('cartItems', 'cartTotal'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Produk::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan!');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "nama_produk" => $product->nama_produk,
                "quantity" => 1,
                "harga" => $product->harga,
                "img_produk_depan" => $product->img_produk_depan
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function updateItem(Request $request)
{
    $cart = session()->get('cart', []);
    $cartTotal = 0;

    foreach ($request->items as $item) {
        $itemId = $item['id'];
        $quantity = $item['quantity'];

        if (isset($cart[$itemId])) {
            if ($quantity == 0) {
                unset($cart[$itemId]); // Menghapus item jika kuantitasnya 0
            } else {
                $cart[$itemId]['quantity'] = $quantity;
            }
        }
    }

    session()->put('cart', $cart);

    // Menghitung total cart setelah update
    foreach ($cart as $item) {
        $cartTotal += $item['harga'] * $item['quantity'];
    }

    return response()->json(['cartTotal' => $cartTotal]);
}

public function removeItem(Request $request)
{
    $itemId = $request->id;
    $cart = session()->get('cart', []);
    
    // Menghapus item dari keranjang
    if (isset($cart[$itemId])) {
        unset($cart[$itemId]);
        session()->put('cart', $cart);
    }
    
    // Menghitung total cart setelah item dihapus
    $cartTotal = 0;
    foreach ($cart as $item) {
        $cartTotal += $item['harga'] * $item['quantity'];
    }

    return response()->json(['cartTotal' => $cartTotal]);
}
   
}
