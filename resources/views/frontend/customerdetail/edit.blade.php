@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style-customerdetail.css') }}">
<div class="container">
    <h2>Ubah Detail Profil</h2>

    <form action="{{ route('customerdetail.update') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $customer->nama) }}" required>
        </div>

        <div class="form-group">
            <label for="hp">No HP:</label>
            <input type="text" class="form-control" id="hp" name="hp" value="{{ old('hp', $customer->hp) }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $customer->alamat) }}">
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sosmed">Sosial Media:</label>
            <input type="text" class="form-control" id="sosmed" name="sosmed" value="{{ old('sosmed', $customer->sosmed) }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
</div>
@endsection
