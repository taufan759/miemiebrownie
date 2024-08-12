<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;
use App\Models\Backend\Subkategori;

class KategoriBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subkategori = Subkategori::orderBy('id', 'desc')->get();
        return view('backend.subkategori.index', [
            'judul' => 'Subkategori',
            'sub' => 'Data Kategori',
            'subkategori' => $subkategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.subkategori.create', [
            'judul' => 'Kategori',
            'sub' => 'Tambah Kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'nama_subkategori' => 'required',
        ]);
        Kategori::create($validatedData);
        return redirect('backend/subkategori')->with('success', 'Data berhasil tersimpan');
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
        $subkategori = Subkategori::findOrFail($id);
        return view('backend.subkategori.edit', [
            'judul' => 'Subkategori',
            'sub' => 'Ubah Subkategori',
            'edit' => $subkategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subkategori = Subkategori::findOrFail($id);
        $rules = [
            'nama_subkategori' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);
        Subkategori::where('id', $id)->update($validatedData);
        return redirect('backend/subkategori')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subkategori = Subkategori::findOrFail($id);
        $subkategori->delete();
        return redirect('backend/subkategori');
    }
}
