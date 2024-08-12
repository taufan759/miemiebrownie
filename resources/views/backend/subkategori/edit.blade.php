@extends('backend.v_layouts.app')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="card white box-content">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card-content">
                    <form action="{{ route('kategori.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
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
