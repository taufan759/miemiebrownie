<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    // ddd($request->all());
    $validatedData = $request->validate([
        'nama_customer' => 'required',
        'metode_pembayaran' => 'required',
        'produk_id' => 'required',
        'jumlah_pesanan' => 'required',
        'total_pesanan' => 'required',
        'alamat' => 'required',
    ]);

    // Menghasilkan nomor pesanan dengan format nama_customer-tanggal-angka_acak
    $tanggal = Carbon::now()->format('Ymd');
    $angka_acak = Str::upper (Str::random (8));
    $no_pesanan = "{$tanggal}{$angka_acak}";

    // Menambahkan nomor pesanan ke dalam data yang akan disimpan
    $validatedData['no_pesanan'] = $no_pesanan;

    // Menyimpan data ke dalam database
    $validatedData['status_pesanan'] = 1;
    $validatedData['user_id'] = auth()->user()->id;
    Pesanan::create($validatedData);

    return redirect('backend/pesanan')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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

        // dd($request->all());
        $validatedData = $request->validate($rules);
        Pesanan::where('id', $id)->update($validatedData);
        return redirect('backend/pesanan')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect('backend/pesanan');
    }

    public function getIdProduk(Request $request)
    {
        $produkId = $request->produk_id;
        $produk = Produk::find($produkId);

        if ($produk) {
            $hargaProduk = $produk->harga;
            return response()->json(['hargaProduk' => $hargaProduk]);
        }else {
            return response()->json(['hargaProduk' => null]);
        }
    }
}
