@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
                <h4 class="box-title">{{ $sub }}</h4>
                <div class="card white box-content">
                <div class="card-body">
                    <form action="{{ route('pesanan.update', $edit->id) }}" method="POST">
                        @csrf
                        @method('PUT')                 
                        <div class="form-group">
                            <label for="status_pesanan">Status</label>
                            <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                                <option value="" disabled {{ old('status_pesanan', $edit->status_pesanan) == '' ? 'selected' : '' }}>- Pilih Status -</option>
                                <option value="pending" {{ old('status_pesanan', $edit->status_pesanan) == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="proses" {{ old('status_pesanan', $edit->status_pesanan) == 'proses' ? 'selected' : '' }}>Proses</option>
                                <option value="selesai" {{ old('status_pesanan', $edit->status_pesanan) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="batal" {{ old('status_pesanan', $edit->status_pesanan) == 'batal' ? 'selected' : '' }}>Batal</option>
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
                            <label for="total">Total Pesanan</label>
                            <input type="number" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $edit->total) }}" placeholder="Total Pesanan">
                            @error('total')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Simpan</button>
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

