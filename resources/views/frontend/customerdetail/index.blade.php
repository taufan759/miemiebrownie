@extends('frontend.layouts.app')
@section('title', 'User Detail')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style-customerdetail.css') }}">

<!-- User Detail Section Begin -->
<section class="user-detail spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 d-flex align-items-center justify-content-center">
                <div class="user-detail__pic" style="width: 200px; height: 200px; overflow: hidden;">
                    <img src="{{ asset('frontend/img/about/team-2.jpg') }}" alt="User Avatar" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="user-detail__text">
                    <h3 class="user-name">{{ $customer->nama ?? 'Nama belum diisi' }}</h3>
                    <form class="space-y-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" value="{{ $customer->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="hp">No. HP</label>
                            <input type="text" id="hp" class="form-control" value="{{ $customer->hp ?? 'No. HP belum diisi' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" class="form-control" value="{{ $customer->alamat ?? 'Alamat belum diisi' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" id="jenis_kelamin" class="form-control" value="{{ $customer->jenis_kelamin ?? 'Jenis kelamin belum diisi' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="sosmed">Akun Sosmed</label>
                            <input type="text" id="sosmed" class="form-control" value="{{ $customer->sosmed ?? 'Akun sosmed belum diisi' }}" disabled>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('customer.editProfile') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Detail Section End -->

<section class="user-orders spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Riwayat Transaksi</h2>
                    <p>Aktivitas pesanan kamu ada di sini</p>
                </div>
                <div class="order-list">
                    <!-- Order Item -->
                    <div class="order-item">
                        <div class="order-item__header">
                            <h4>Order #12345</h4>
                            <span class="order-status">Completed</span>
                        </div>
                        <div class="order-item__details">
                            <p><span class="detail-label">Date:</span> 05 Aug 2024</p>
                            <p><span class="detail-label">Total:</span> Rp 150,000</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <!-- Order Item -->
                    <div class="order-item">
                        <div class="order-item__header">
                            <h4>Order #12346</h4>
                            <span class="order-status">Pending</span>
                        </div>
                        <div class="order-item__details">
                            <p><span class="detail-label">Date:</span> 15 Aug 2024</p>
                            <p><span class="detail-label">Total:</span> Rp 200,000</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Orders Section End -->
@endsection
