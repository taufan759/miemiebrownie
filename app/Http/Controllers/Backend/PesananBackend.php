<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Backend\Pesanan;
use App\Models\Backend\Produk;

class PesananBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::orderBy('id', 'desc')->get();
        return view('backend.pesanan.index', [
            'judul' => 'Pesanan',
            'sub' => 'Data Pesanan',
            'pesanan' => $pesanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::orderBy('nama_produk', 'asc')->get();
        return view('backend.pesanan.create', [
            'judul' => 'Pesanan',
            'sub' => 'Tambah Pesanan',
            'produk' => $produk,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nama_customer' => 'required|string|max:255',
        'produk_id' => 'required|exists:produk,id', // Assuming produk_id is used to validate the product existence
        'jumlah_pesanan' => 'required|integer',
        'alamat' => 'required|string',
        'total_pesanan' => 'required|numeric',
        'metode_pembayaran' => 'required|in:0,1,2,3', // Adjust to match your payment method values
        'status_pesanan' => 'nullable|in:pending,proses,selesai,batal', // Optional, defaults to 'pending'
    ]);

    // Menghasilkan nomor pesanan dengan format nama_customer-tanggal-angka_acak
    $tanggal = Carbon::now()->format('Ymd');
    $angka_acak = Str::upper(Str::random(8));
    $no_pesanan = "{$tanggal}{$angka_acak}";

    // Menyimpan data pesanan
    $validatedData['no_pesanan'] = $no_pesanan;
    $validatedData['status_pesanan'] = $validatedData['status_pesanan'] ?? 'pending'; // Set status sebagai 'pending' jika tidak ada status yang diberikan
    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['tanggal'] = Carbon::now();

    // Create the order
    $pesanan = Pesanan::create($validatedData);

    // Ambil data cart dari session atau database
    $cartItems = auth('customer')->user()->cartItems;

    foreach ($cartItems as $item) {
        if ($item->product && $item->product->harga !== null) {
            // Save each item with `produk_id` from the cart
            $pesanan->items()->create([
                'produk_id' => $item->product_id, // Ensure this is correctly set
                'jumlah_pesanan' => $item->quantity,
                'harga' => $item->product->harga,
                'total' => $item->product->harga * $item->quantity,
            ]);
        } else {
            Log::error('Produk tidak valid atau harga produk adalah null', ['product_id' => $item->product_id]);
        }
    }

    // Optionally clear the cart after processing
    auth('customer')->user()->cartItems()->delete();

    return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dibuat.');
}

public function edit(string $id)
    {
        $produk = Produk::orderBy('id', 'asc')->get();
        $pesanan = Pesanan::findOrFail($id);
        return view('backend.pesanan.edit', [
            'judul' => 'Pesanan',
            'sub' => 'Ubah Pesanan',
            'produk' => $produk,
            'edit' => $pesanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $rules = [
            'status_pesanan' => 'required',
            'nama_customer' => 'required',
            'jumlah_pesanan' => 'required',
            'total_pesanan' => 'required',
            'alamat' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $pesanan->update($validatedData);

        return redirect('backend/pesanan')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect('backend/pesanan')->with('success', 'Pesanan berhasil dihapus');
    }

    /**
     * Get harga produk berdasarkan produk ID
     */
    public function getIdProduk(Request $request)
    {
        $produk = Produk::find($request->produk_id);

        if ($produk) {
            return response()->json(['hargaProduk' => $produk->harga]);
        } else {
            return response()->json(['hargaProduk' => null]);
        }
    }
}
