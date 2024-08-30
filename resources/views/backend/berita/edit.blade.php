@extends('backend.layouts.app')
@section('content')
<!-- template -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('berita.update', $edit->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @method('put')
                @csrf

                <div class="card-body">
                    <h4 class="card-title">{{ $sub }}</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Foto Berita</label>
                                <img src="{{ asset('storage/img-berita/thumb_md_' . $edit->img_berita) }}" class="img-berita-preview" width="100%">
                                <p></p>
                                <label>Ganti Foto</label>
                                <img class="img-berita-preview">
                                <input type="file" name="img_berita" class="form-control @error('img_berita') is-invalid @enderror" onchange="previewImgBerita()">
                                @error('img_berita')
                                <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="datetime-local" name="tanggal" value="{{ old('tanggal', $edit->tanggal) }}" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Masukkan Tanggal">
                                @error('tanggal')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

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
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" value="{{ old('judul', $edit->judul) }}" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Berita">
                                @error('judul')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail" class="form-control @error('detail') is-invalid @enderror" id="ckeditor" placeholder="Masukkan Isi Berita">{{ old('detail', $edit->detail) }}</textarea>
                                @error('detail')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <p style="font-size: small; text-align: right;">
                                dibuat:
                                {{ $edit->created_at }}<br>
                                pembaharuan:
                                {{ $edit->updated_at }}<br>
                                Autor:
                                {{ $edit->user->nama }}<br>
                            <p>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success text-white">
                                Perbaharui
                            </button>
                            <a href="{{ route('berita.index') }}">
                                <button type="button" class="btn btn-danger">
                                    Kembali
                                </button>
                            </a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- template end-->
@endsection
