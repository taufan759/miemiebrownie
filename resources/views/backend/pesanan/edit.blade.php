@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="box-title">{{ $sub }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pesanan.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="status_pesanan">Status</label>
                <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                    <option value="" disabled {{ old('status_pesanan', $edit->status_pesanan) == '' ? 'selected' : '' }}>- Pilih Status -</option>
                    <option value="0" {{ old('status_pesanan', $edit->status_pesanan) == '0' ? 'selected' : '' }}>Menunggu</option>
                    <option value="1" {{ old('status_pesanan', $edit->status_pesanan) == '1' ? 'selected' : '' }}>Lunas</option>
                    <option value="2" {{ old('status_pesanan', $edit->status_pesanan) == '2' ? 'selected' : '' }}>Dikemas</option>
                    <option value="3" {{ old('status_pesanan', $edit->status_pesanan) == '3' ? 'selected' : '' }}>Dikirim</option>
                    <option value="4" {{ old('status_pesanan', $edit->status_pesanan) == '4' ? 'selected' : '' }}>Diterima</option>
                    <option value="5" {{ old('status_pesanan', $edit->status_pesanan) == '5' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status_pesanan')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_customer">Nama Penerima</label>
                <input type="text" name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" value="{{ old('nama_customer', $edit->nama_customer) }}" placeholder="Masukkan Nama Lengkap">
                @error('nama_customer')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="jumlah_pesanan">Jumlah Pesanan</label>
                <input type="number" name="jumlah_pesanan" class="form-control @error('jumlah_pesanan') is-invalid @enderror" value="{{ old('jumlah_pesanan', $edit->jumlah_pesanan) }}" placeholder="Jumlah Pesanan">
                @error('jumlah_pesanan')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat Lengkap">{{ old('alamat', $edit->alamat) }}</textarea>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="total_pesanan">Total Pesanan</label>
                <input type="number" name="total_pesanan" class="form-control @error('total_pesanan') is-invalid @enderror" value="{{ old('total_pesanan', $edit->total_pesanan) }}" placeholder="Total Pesanan">
                @error('total_pesanan')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-success btn-xs waves-effect waves-light">Perbaharui</button>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-danger btn-xs waves-effect waves-light">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
