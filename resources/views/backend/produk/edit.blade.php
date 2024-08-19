@extends('backend.layouts.app')enderror
@section('content')
<div class="card">
    <div class="card-header">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card white box-content">
                <div class="card-body">
                    <form action="{{ route('produk.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="" {{ old('status', $edit->status) == '' ? 'selected' : '' }}> -
                                    Pilih Status -</option>
                                <option value="0" {{ old('status', $edit->status) == '0' ? 'selected' : '' }}>
                                    Tidak Aktif</option>
                                <option value="1" {{ old('status', $edit->status) == '1' ? 'selected' : '' }}>
                                    Aktif</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ old('nama_produk', $edit->nama_produk) }}"
                                class="form-control @error('nama_produk') is-invalid @enderror"
                                placeholder="Masukkan Nama Produk">
                            @error('nama_produk')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Kategori</label><br>
                            <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id">
                                <option value="" selected>--Pilih Tempat--</option>
                                @foreach ($kategori as $row)
                                    <option value="{{ $row->id }}"
                                        {{ $edit->kategori_id == $row->id ? 'selected' : '' }}>
                                        {{ $row->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                            <p></p>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" id="ckeditor" style="height: 300px"
                                class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi">{{ old('deskripsi', $edit->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="float" name="harga" value="{{ old('harga', $edit->harga) }}"
                                class="form-control @error('harga') is-invalid @enderror"
                                placeholder="Masukkan Harga Barang">
                            @error('nama_produk')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Foto Depan</label>
                            {{-- view image --}}
                            <img src="{{ asset('storage/img-produk/depan/medium/thumb_md_' . $edit->img_produk_depan) }}"
                                class="img-produk-depan-preview" width="100%">
                            <p></p>
                            <label>Ganti Image Produk Depan</label>
                            <img class="img-produk-depan-preview">
                            <input type="file" name="img_produk_depan"
                                class="form-control @error('img_produk_depan') is-invalid @enderror"
                                onchange="previewImgProdukDepan()">
                            @error('img_produk_depan')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Foto Belakang</label>
                            {{-- view image --}}
                            <img src="{{ asset('storage/img-produk/belakang/thumb_belakang_' . $edit->img_produk_belakang) }}"
                                class="img-produk-belakang-preview" width="100%">
                            <p></p>
                            <label>Ganti Image Produk Belakang</label>
                            <img class="img-produk-belakang-preview">
                            <input type="file" name="img_produk_belakang"
                                class="form-control @error('img_produk_belakang') is-invalid @enderror"
                                onchange="previewImgProdukBelakang()">
                            @error('img_produk_belakang')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Foto Kanan</label>
                            {{-- view image --}}
                            <img src="{{ asset('storage/img-produk/kanan/thumb_kanan_' . $edit->img_produk_kanan) }}"
                                class="img-produk-kanan-preview" width="100%">
                            <p></p>
                            <label>Ganti Image Produk Kanan</label>
                            <img class="img-produk-kanan-preview">
                            <input type="file" name="img_produk_kanan"
                                class="form-control @error('img_produk_kanan') is-invalid @enderror"
                                onchange="previewImgProdukKanan()">
                            @error('img_produk_kanan')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Foto Kiri</label>
                            {{-- view image --}}
                            <img src="{{ asset('storage/img-produk/kiri/thumb_kiri_' . $edit->img_produk_kiri) }}"
                                class="img-produk-kiri-preview" width="100%">
                            <p></p>
                            <label>Ganti Image Produk Kiri</label>
                            <img class="img-produk-kiri-preview">
                            <input type="file" name="img_produk_kiri"
                                class="form-control @error('img_produk_kiri') is-invalid @enderror"
                                onchange="previewImgProdukKiri()">
                            @error('img_produk_kiri')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success btn-xs waves-effect waves-light"
                                    id="simpanButton">Simpan</button>
                                <a href="{{ route('produk.index') }}">
                                    <button type="button"
                                        class="btn btn-danger btn-xs waves-effect waves-light">Kembali</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
