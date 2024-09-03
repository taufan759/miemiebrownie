<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;
use Intervention\Image\Facades\Image;

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
    $validatedData = $request->validate([
        'nama_kategori' => 'required|max:255',
        'foto' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
    ], [
        'foto.image' => 'Format gambar harus berupa file dengan ekstensi jpeg, jpg, png, atau gif.',
        'foto.max' => 'Ukuran file gambar maksimal adalah 8024 KB.'
    ]);

    if ($request->file('foto')) {
        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
        $destinationPath = public_path('storage/img-kategori/');
        $image = Image::make($file);
        $image->fit(400, 400, function ($constraint) {
            $constraint->upsize();
        });
        $image->save($destinationPath . $fileName);
        $validatedData['foto'] = $fileName;
    }

    Kategori::create($validatedData);
    return redirect('backend/kategori')->with('success', 'Data berhasil tersimpan');
}

public function update(Request $request, string $id)
{
    $kategori = Kategori::findOrFail($id);
    $validatedData = $request->validate([
        'nama_kategori' => 'required|max:255',
        'foto' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
    ], [
        'foto.image' => 'Format gambar harus berupa file dengan ekstensi jpeg, jpg, png, atau gif.',
        'foto.max' => 'Ukuran file gambar maksimal adalah 8024 KB.'
    ]);

    if ($request->file('foto')) {
        if ($kategori->foto) {
            $oldImagePath = public_path('storage/img-kategori/') . $kategori->foto;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
        $destinationPath = public_path('storage/img-kategori/');
        $image = Image::make($file);
        $image->fit(400, 400, function ($constraint) {
            $constraint->upsize();
        });
        $image->save($destinationPath . $fileName);
        $validatedData['foto'] = $fileName;
    }

    $kategori->update($validatedData);
    return redirect('backend/kategori')->with('success', 'Data berhasil diperbarui');
}

public function edit(string $id)
{
    $kategori = Kategori::findOrFail($id);
    return view('backend.kategori.edit', [
        'judul' => 'Kategori',
        'sub' => 'Edit Kategori',
        'edit' => $kategori
    ]);
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
