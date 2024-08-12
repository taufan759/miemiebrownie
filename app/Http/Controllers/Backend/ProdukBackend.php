<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Kategori;
use App\Models\Backend\Produk;
use Intervention\Image\Facades\Image;
// use Illuminate\Support\Facades\Money;

class ProdukBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')->get();
        // $harga = $produk->harga->format('Rp #,##0'); // Format harga dengan format rupiah
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
        // dd($request);
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'img_produk_depan' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_belakang' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_kanan' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_kiri' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
        ], [
            'img_produk_depan.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_depan.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ], [
            'img_produk_belakang.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_belakang.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ], [
            'img_produk_kanan.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_kanan.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ], [
            'img_produk_kiri.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_kiri.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ]);

        //Deklarasi Image Depan
        if ($request->file('img_produk')) {
            $file = $request->file('img_produk');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            // $destinationPath = public_path('/storage/img-produk/depan/');
            $image = Image::make($file);
            //simpan gambar asli
            //$image->save($destinationPath . $fileName);
            $validatedData['img_produk'] = $fileName;
            // create thumbnail 1 (large)
            $destinationPath = public_path('/storage/img-produk/depan/large/');
            $thumbnailPath1 = 'thumb_lg_' . $fileName;
            $thumbnail1 = $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail1->save($destinationPath . $thumbnailPath1);

            // create thumbnail 2 (medium)
            $destinationPath = public_path('/storage/img-produk/depan/medium/');
            $thumbnailPath2 = 'thumb_md_' . $fileName;
            $thumbnail2 = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail2->save($destinationPath . $thumbnailPath2);

            // create thumbnail 3 (small)
            $destinationPath = public_path('/storage/img-produk/depan/small/');
            $thumbnailPath3 = 'thumb_sm_' . $fileName;
            $thumbnail3 = $image->fit(100, 100, function ($constraint) {
                $constraint->upsize();
            });
            $thumbnail3->save($destinationPath . $thumbnailPath3);
        }
        
        $validatedData['status'] = 0;
        $validatedData['user_id'] = auth()->user()->id;
        Produk::create($validatedData);
        return redirect('backend/produk')->with('success', 'Data berhasil tersimpan');
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
            'img_produk_depan' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_belakang' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_kanan' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'img_produk_kiri' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
        ];
        $messages = [
            'img_produk_depan.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_depan.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.',

            'img_produk_belakang.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_belakang.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.',

            'img_produk_kanan.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_kanan.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.',

            'img_produk_kiri.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_produk_kiri.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ];

        $validatedData = $request->validate($rules, $messages);
        if ($request->file('img_produk_depan')) {
            $oldImagePathLg = public_path('storage/img-produk/depan/large/thumb_lg_') . $produk->img_produk_depan;
            $oldImagePathMd = public_path('storage/img-produk/depan/medium/thumb_md_') . $produk->img_produk_depan;
            $oldImagePathSm = public_path('storage/img-produk/depan/small/thumb_sm_') . $produk->img_produk_depan;
            if (file_exists($oldImagePathLg)) {
                unlink($oldImagePathLg);
            }
            if (file_exists($oldImagePathMd)) {
                unlink($oldImagePathMd);
            }
            if (file_exists($oldImagePathSm)) {
                unlink($oldImagePathSm);
            }
            $file = $request->file('img_produk_depan');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            // $destinationPath = public_path('/storage/img-produk/depan/');
            $image = Image::make($file);
            //simpan gambar asli
            //$image->save($destinationPath . $fileName);
            $validatedData['img_produk_depan'] = $fileName;

            // create thumbnail 1 (lg)
            $destinationPath = public_path('/storage/img-produk/depan/large/');
            $thumbnailPath1 = 'thumb_lg_' . $fileName;
            $thumbnail1 = $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail1->save($destinationPath . $thumbnailPath1);

            // create thumbnail 2 (md)
            $destinationPath = public_path('/storage/img-produk/depan/medium/');
            $thumbnailPath2 = 'thumb_md_' . $fileName;
            $thumbnail2 = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail2->save($destinationPath . $thumbnailPath2);

            // create thumbnail 3 (sm)
            $destinationPath = public_path('/storage/img-produk/depan/small/');
            $thumbnailPath3 = 'thumb_sm_' . $fileName;
            $thumbnail3 = $image->fit(100, 100, function ($constraint) {
                $constraint->upsize();
            });
            $thumbnail3->save($destinationPath . $thumbnailPath3);
        }

        //Deklarasi Image Belakang
        if ($request->file('img_produk_belakang')) {
            $oldImagePathBelakang = public_path('storage/img-produk/belakang/thumb_belakang_') . $produk->img_produk_belakang;
            if (file_exists($oldImagePathBelakang)) {
                unlink($oldImagePathBelakang);
            }
            $file = $request->file('img_produk_belakang');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            // $destinationPath = public_path('/storage/img-produk/belakang/');
            $image = Image::make($file);
            //simpan gambar asli
            //$image->save($destinationPath . $fileName);
            $validatedData['img_produk_belakang'] = $fileName;

            // create thumbnail image belakang
            $destinationPath = public_path('/storage/img-produk/belakang/');
            $thumbnailPathprodukBelakang = 'thumb_belakang_' . $fileName;
            $thumbnailprodukBelakang = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnailprodukBelakang->save($destinationPath . $thumbnailPathprodukBelakang);
        }

        //Deklarasi Image Kanan
        if ($request->file('img_produk_kanan')) {
            $oldImagePathKanan = public_path('storage/img-produk/kanan/thumb_kanan_') . $produk->img_produk_kanan;
            if (file_exists($oldImagePathKanan)) {
                unlink($oldImagePathKanan);
            }
            $file = $request->file('img_produk_kanan');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            // $destinationPath = public_path('/storage/img-produk/kanan/');
            $image = Image::make($file);
            //simpan gambar asli
            //$image->save($destinationPath . $fileName);
            $validatedData['img_produk_kanan'] = $fileName;

            // create thumbnail image kanan
            $destinationPath = public_path('/storage/img-produk/kanan/');
            $thumbnailPathprodukKanan = 'thumb_kanan_' . $fileName;
            $thumbnailprodukKanan = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnailprodukKanan->save($destinationPath . $thumbnailPathprodukKanan);
        }

        //Deklarasi Image Kiri
        if ($request->file('img_produk_kiri')) {
            $oldImagePathKiri = public_path('storage/img-produk/kiri/thumb_kiri_') . $produk->img_produk_kiri;
            if (file_exists($oldImagePathKiri)) {
                unlink($oldImagePathKiri);
            }
            $file = $request->file('img_produk_kiri');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            // $destinationPath = public_path('/storage/img-produk/kiri/');
            $image = Image::make($file);
            //simpan gambar asli
            //$image->save($destinationPath . $fileName);
            $validatedData['img_produk_kiri'] = $fileName;

            // create thumbnail image kiri
            $destinationPath = public_path('/storage/img-produk/kiri/');
            $thumbnailPathprodukKiri = 'thumb_kiri_' . $fileName;
            $thumbnailprodukKiri = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnailprodukKiri->save($destinationPath . $thumbnailPathprodukKiri);
        }

        // $validatedData['user_kd'] = auth()->user()->id;
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
        return redirect('/backend/produk');
    }
}