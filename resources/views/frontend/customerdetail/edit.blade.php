@extends('frontend.layouts.app')

@section('title', 'Edit Profile')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style-customerdetail.css') }}">

<!-- Edit Profile Section Begin -->
<section class="edit-profile spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="edit-profile__text">
                    <h3 class="user-name">Edit Profile</h3>
                    <form action="{{ route('customer.updateProfile') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $customer->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $customer->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="hp">No. HP</label>
                            <input type="text" id="hp" name="hp" class="form-control" value="{{ old('hp', $customer->hp) }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', $customer->alamat) }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="Laki-laki" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sosmed">Akun Sosmed</label>
                            <input type="text" id="sosmed" name="sosmed" class="form-control" value="{{ old('sosmed', $customer->sosmed) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Edit Profile Section End -->
@endsection
