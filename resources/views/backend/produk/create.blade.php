@extends('backend.layouts.app')enderror
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="card white box-content">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card-content">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ old('nama_produk') }}"
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
                                <option value="" selected>--Pilih Kategori--</option>
                                @foreach ($kategori as $row)
                                    <option value="{{ $row->id }}" @if (old('kategori_id') == $row->id) selected @endif>
                                        {{ $row->nama_kategori }}</option>
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
                                class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="float" name="harga" value="{{ old('harga') }}"
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
