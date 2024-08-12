@extends('backend.v_layouts.app')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="card white box-content">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card-content">
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                            @error('nama')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                            @error('email')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>HP</label>
                            <input type="text" onkeypress="return hanyaAngka(event)" name="hp"
                                value="{{ old('hp') }}" class="form-control @error('hp') is-invalid @enderror"
                                placeholder="Masukkan Nomor HP">
                            @error('hp')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success btn-xs waves-effect waves-light"
                                    id="simpanButton">Simpan</button>
                                <a href="{{ route('customer.index') }}">
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
