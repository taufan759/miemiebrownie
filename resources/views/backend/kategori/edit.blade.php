@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card white box-content">
                <div class="card-body">
                    <form action="{{ route('kategori.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="col-md-4">
                            {{-- div left --}}
                            <div class="form-group">
                                <label>Foto</label>
                                {{-- view image --}}
                                @if ($edit->foto)
                                    <img src="{{ asset('storage/img-kategori/' . $edit->foto) }}" class="foto-preview"
                                        width="100%">
                                    <p></p>
                                @else
                                    <img src="{{ asset('storage/img-kategori/img-default.jpg') }}" class="foto-preview"
                                        width="100%">
                                    <p></p>
                                @endif
                                {{-- file foto --}}
                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" onchange="previewFoto()">
                                @error('foto')
                                    <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_kategori"
                                value="{{ old('nama_kategori', $edit->nama_kategori) }}"
                                class="form-control @error('nama_kategori') is-invalid @enderror"
                                placeholder="Masukkan Nama Type">
                            @error('nama_kategori')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success btn-xs waves-effect waves-light">
                                    Perbaharui
                                </button>
                                <a href="{{ route('kategori.index') }}">
                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
