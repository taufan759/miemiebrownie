<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\User;
use App\Models\Backend\Berita;
use Intervention\Image\Facades\Image;

class BeritaBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $berita = Berita::paginate(10); // Menampilkan 10 berita per halaman
    return view('backend.berita.index', compact('berita'));
}


public function show($slug)
{
    // Mengambil berita berdasarkan slug atau ID
    $berita = Berita::where('slug', $slug)->firstOrFail();

    // Mengirim data berita ke view
    return view('frontend.page.blog-details', compact('berita'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.berita.create', [
            'judul' => 'Berita',
            'sub' => 'Tambah Berita',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255|unique:berita',
            'tanggal' => 'required',
            'detail' => 'required',
            'img_berita' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024'
        ], [
            'img_berita.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'img_berita.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ]);

        if ($request->file('img_berita')) {
            $file = $request->file('img_berita');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            $destinationPath = public_path('/storage/img-berita/');
            $image = Image::make($file);

            $validatedData['img_berita'] = $fileName;

            // create thumbnail 1 (lg)
            $thumbnailPath1 = 'thumb_lg_' . $fileName;
            $thumbnail1 = $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail1->save($destinationPath . $thumbnailPath1);

            // create thumbnail 2 (md)
            $thumbnailPath2 = 'thumb_md_' . $fileName;
            $thumbnail2 = $image->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnail2->save($destinationPath . $thumbnailPath2);

            // create thumbnail 3 (sm)
            $thumbnailPath3 = 'thumb_sm_' . $fileName;
            $thumbnail3 = $image->fit(100, 100, function ($constraint) {
                $constraint->upsize();
            });
            $thumbnail3->save($destinationPath . $thumbnailPath3);
        }

        $validatedData['status'] = '0';
        $validatedData['user_id'] = auth()->user()->id;

        Berita::create($validatedData);
        return redirect('/backend/berita')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $berita = Berita::findOrFail($id);
    return view('backend.berita.edit', [
        'judul' => 'Berita',
        'sub' => 'Ubah Berita',
        'edit' => $berita
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);
    $rules = [
        'status' => 'required',
        'tanggal' => 'required',
        'detail' => 'required',
        'img_berita' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024'
    ];
    $messages = [
        'img_berita.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
        'img_berita.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
    ];

    if ($request->judul != $berita->judul) {
        $rules['judul'] = 'required|max:255|unique:berita';
    }

    $validatedData = $request->validate($rules, $messages);

    if ($request->file('img_berita')) {
        // Hapus gambar lama
        $oldImagePathLg = public_path('storage/img-berita/thumb_lg_') . $berita->img_berita;
        $oldImagePathMd = public_path('storage/img-berita/thumb_md_') . $berita->img_berita;
        $oldImagePathSm = public_path('storage/img-berita/thumb_sm_') . $berita->img_berita;
        if (file_exists($oldImagePathLg)) {
            unlink($oldImagePathLg);
        }
        if (file_exists($oldImagePathMd)) {
            unlink($oldImagePathMd);
        }
        if (file_exists($oldImagePathSm)) {
            unlink($oldImagePathSm);
        }

        // Proses upload gambar baru
        $file = $request->file('img_berita');
        $extension = $file->getClientOriginalExtension();
        $fileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
        $destinationPath = public_path('/storage/img-berita/');
        $image = Image::make($file);

        $validatedData['img_berita'] = $fileName;

        // create thumbnail 1 (lg)
        $thumbnailPath1 = 'thumb_lg_' . $fileName;
        $thumbnail1 = $image->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $thumbnail1->save($destinationPath . $thumbnailPath1);

        // create thumbnail 2 (md)
        $thumbnailPath2 = 'thumb_md_' . $fileName;
        $thumbnail2 = $image->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $thumbnail2->save($destinationPath . $thumbnailPath2);

        // create thumbnail 3 (sm)
        $thumbnailPath3 = 'thumb_sm_' . $fileName;
        $thumbnail3 = $image->fit(100, 100, function ($constraint) {
            $constraint->upsize();
        });
        $thumbnail3->save($destinationPath . $thumbnailPath3);
    }

    Berita::where('id', $id)->update($validatedData);
    return redirect('/backend/berita')->with('success', 'Data berhasil diperbaharui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect('/backend/berita');
    }
}
