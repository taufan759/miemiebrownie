@extends('frontend.layouts.app')

@section('title', 'Customer Profile')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style-customerdetail.css') }}">

<!-- Profile Detail Section Begin -->
<section class="profile-detail spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Detail Profile</h2>
                    <p>Detail Profile kamu tersedia di sini</p>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama:</th>
                        <td>{{ $customer->nama }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <th>No. HP:</th>
                        <td>{{ $customer->hp ?? 'Tidak Diketahui' }}</td>
                    </tr>
                    <tr>
                        <th>Alamat:</th>
                        <td>{{ $customer->alamat ?? 'Tidak Diketahui' }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin:</th>
                        <td>
                            @if($customer->jenis_kelamin == 'P')
                                Pria
                            @elseif($customer->jenis_kelamin == 'W')
                                Wanita
                            @else
                                Tidak Diketahui
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Akun Sosmed:</th>
                        <td>{{ $customer->sosmed ?? 'Tidak Diketahui' }}</td>
                    </tr>
                </table>
                <a href="{{ route('customerdetail.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
</section>
<!-- Profile Detail Section End -->

<!-- Recent Orders Section Begin -->
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
                            <span class="order-status completed">Completed</span>
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
                            <span class="order-status pending">Pending</span>
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