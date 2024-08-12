<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;

class KategoriBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::orderBy('id', 'desc')->get();
        return view('backend.kategori.index', [
            'judul' => 'Kategori',
            'sub' => 'Data Kategori',
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kategori.create', [
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
            'nama_kategori' => 'required',
        ]);
        Kategori::create($validatedData);
        return redirect('backend/kategori')->with('success', 'Data berhasil tersimpan');
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
        $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.edit', [
            'judul' => 'Kategori',
            'sub' => 'Ubah Kategori',
            'edit' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $rules = [
            'nama_kategori' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);
        Kategori::where('id', $id)->update($validatedData);
        return redirect('backend/kategori')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('backend/kategori');
    }
}
