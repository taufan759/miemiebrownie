<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;
use App\Models\Backend\Subkategori;

class SubkategoriBackend extends Controller
{
    public function index()
    {
        $subkategori = Subkategori::with('kategori')->orderBy('id', 'desc')->get(); // Pastikan untuk memuat relasi kategori
        return view('backend.subkategori.index', [
            'judul' => 'SubKategori',
            'sub' => 'Data SubKategori',
            'subkategori' => $subkategori
        ]);
    }

    public function create()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        return view('backend.subkategori.create', [
            'judul' => 'Produk',
            'sub' => 'Tambah Produk',
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_subkategori' => 'required',
            'kategori_id' => 'required|exists:kategori,id', // Menambahkan validasi kategori_id
        ]);
        Subkategori::create($validatedData);
        return redirect('backend/subkategori')->with('success', 'Data berhasil tersimpan');
    }

    public function edit(string $id)
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $subkategori = Subkategori::findOrFail($id);
        return view('backend.subkategori.edit', [
            'judul' => 'SubKategori',
            'sub' => 'Ubah SubKategori',
            'kategori' => $kategori,
            'edit' => $subkategori
        ]);
    }

    public function update(Request $request, string $id)
    {
        $subkategori = Subkategori::findOrFail($id);
        $rules = [
            'nama_subkategori' => 'required|max:255',
            'kategori_id' => 'required|exists:kategori,id', // Menambahkan validasi kategori_id
        ];

        $validatedData = $request->validate($rules);
        $subkategori->update($validatedData);
        return redirect('backend/subkategori')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        $subkategori = Subkategori::findOrFail($id);
        $subkategori->delete();
        return redirect('backend/subkategori');
    }
}
