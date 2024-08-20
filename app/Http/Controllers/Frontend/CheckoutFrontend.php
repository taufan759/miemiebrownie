<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutFrontend extends Controller
{
    public function showCheckout()
    {
        // Mendapatkan data dari cart atau session
        $cartItems = session('cart', []);
        $subtotal = array_sum(array_column($cartItems, 'price'));
        $total = $subtotal; // Tambahkan biaya lain jika ada

        // Tampilkan halaman checkout
        return view('frontend.page.checkout', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'total' => $total,
        ]);
    }

    public function processCheckout(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postcode' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'create_account' => 'nullable|boolean',
            'ship_to_different' => 'nullable|boolean',
            'order_notes' => 'nullable|string',
        ]);

        // Proses checkout: simpan data, kirim email, atau buat pesanan

        // Contoh: Simpan data ke session untuk demonstrasi
        // Sebenarnya, Anda mungkin ingin menyimpan ke database atau sistem lain
        session()->flash('success', 'Pesanan Anda berhasil diproses.');
    }
}
