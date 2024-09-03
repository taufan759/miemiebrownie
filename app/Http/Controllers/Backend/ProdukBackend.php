<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;
use App\Models\Backend\Produk;
use Intervention\Image\Facades\Image;

class ProdukBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')->get();
        return view('backend.produk.index', [
            'judul' => 'Produk',
            'sub' => 'Data Produk',
            'produk' => $produk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        return view('backend.produk.create', [
            'judul' => 'Produk',
            'sub' => 'Tambah Produk',
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'img_produk_depan' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:8024',
            'img_produk_belakang' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:8024',
            'img_produk_kanan' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:8024',
            'img_produk_kiri' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:8024',
        ]);

        $imageFields = ['img_produk_depan', 'img_produk_belakang', 'img_produk_kanan', 'img_produk_kiri'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
                $destinationPath = public_path("/storage/img-produk/{$field}/");
                $image = Image::make($file);
                $image->save($destinationPath . $fileName);
                $validatedData[$field] = $fileName;
            } else {
                $validatedData[$field] = null;
            }
        }

        $validatedData['status'] = 0;
        $validatedData['user_id'] = auth()->user()->id;
        Produk::create($validatedData);

        return redirect('backend/produk')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        $produk = Produk::findOrFail($id);
        return view('backend.produk.edit', [
            'judul' => 'Produk',
            'sub' => 'Ubah Produk',
            'kategori' => $kategori,
            'edit' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $rules = [
            'status' => 'required',
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'img_produk_depan' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
            'img_produk_belakang' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
            'img_produk_kanan' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
            'img_produk_kiri' => 'image|mimes:jpeg,jpg,png,gif|file|max:8024',
        ];

        $validatedData = $request->validate($rules);

        $imageFields = ['img_produk_depan', 'img_produk_belakang', 'img_produk_kanan', 'img_produk_kiri'];
        foreach ($imageFields as $field) {
            if ($request->file($field)) {
                $oldImagePath = public_path("storage/img-produk/{$field}/") . $produk->$field;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
                $destinationPath = public_path("/storage/img-produk/{$field}/");
                $image = Image::make($file);
                $image->save($destinationPath . $fileName);
                $validatedData[$field] = $fileName;
            }
        }

        Produk::where('id', $id)->update($validatedData);
        return redirect('backend/produk')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/backend/produk')->with('success', 'Produk berhasil dihapus');
    }
}
