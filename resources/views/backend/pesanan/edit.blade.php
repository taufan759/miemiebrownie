@extends('backend.layouts.app')
@section('content')
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="card white box-content">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card-content">
                    <form action="{{ route('pesanan.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                                <option value=""
                                    {{ old('status_pesanan', $edit->status_pesanan) == '' ? 'selected' : '' }}> -
                                    Pilih Status -</option>
                                <option value="0"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '0' ? 'selected' : '' }}>
                                    Menunggu</option>
                                <option value="1"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '1' ? 'selected' : '' }}>
                                    Lunas</option>
                                <option value="2"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '2' ? 'selected' : '' }}>
                                    Dikemas</option>
                                <option value="3"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '3' ? 'selected' : '' }}>
                                    Dikirim</option>
                                <option value="4"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '4' ? 'selected' : '' }}>
                                    Diterima</option>
                                <option value="5"
                                    {{ old('status_pesanan', $edit->status_pesanan) == '5' ? 'selected' : '' }}>
                                    Selesai</option>
                            </select>
                            @error('status_pesanan')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Penerima</label>
                            <input type="text" name="nama_customer"
                                value="{{ old('nama_customer', $edit->nama_customer) }}"
                                class="form-control @error('nama_customer') is-invalid @enderror"
                                placeholder="Masukkan Nama Lengkap">
                            @error('nama_customer')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jumlah Pesanan</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="minus"
                                        data-field="jumlah_pesanan">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input id="demo2" type="text" name="jumlah_pesanan"
                                    value="{{ old('jumlah_pesanan', $edit->jumlah_pesanan) }}"
                                    class="form-control input-number @error('jumlah_pesanan') is-invalid @enderror"
                                    placeholder="Jumlah Pesanan">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus"
                                        data-field="jumlah_pesanan">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                            @error('jumlah_pesanan')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Masukkan Alamat Lengkap">{{ old('alamat', $edit->alamat) }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Total Pesanan</label>
                            <input type="text" name="total_pesanan"
                                value="{{ old('total_pesanan', $edit->total_pesanan) }}"
                                class="form-control @error('total_pesanan') is-invalid @enderror"
                                placeholder="Total Pesanan">
                            @error('total_pesanan')
                                <span class="invalid-feedback alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit"
                                    class="btn btn-success btn-xs waves-effect waves-light">Perbaharui</button>
                                <a href="{{ route('pesanan.index') }}">
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
