@extends('frontend.layouts.app')

@section('title', 'Checkout')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/style-checkout.css') }}">

<!-- Checkout Form Section -->
<div class="container py-5">
    <div class="row">
        <!-- Checkout Form -->
        <div class="col-lg-8 col-md-12">
            <div class="checkout-form shadow-sm p-4 rounded bg-white">
                <h4 class="mb-4">Detail Pembayaran</h4>
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">Nama Depan<span class="text-danger">*</span></label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Nama Belakang<span class="text-danger">*</span></label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address">Alamat<span class="text-danger">*</span></label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Alamat Jalan" required>
                            <input type="text" name="address2" class="form-control mt-2" placeholder="Apartemen, suite, unit, dll (opsional)">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city">Kota/Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" id="city" name="city" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="state">Provinsi<span class="text-danger">*</span></label>
                            <input type="text" id="state" name="state" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="postcode">Kode Pos<span class="text-danger">*</span></label>
                            <input type="text" id="postcode" name="postcode" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Telepon<span class="text-danger">*</span></label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $customer->email }}" disabled>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="order_notes">Catatan Pesanan</label>
                            <textarea id="order_notes" name="order_notes" class="form-control" rows="3" placeholder="Catatan khusus untuk pesanan Anda, misalnya instruksi pengiriman."></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="payment_method" class="form-label">Metode Pembayaran <span class="text-danger">*</span></label><br>
                            <select id="payment_method" name="payment_method" class="form-select" required>
                                <option value="" disabled>Pilih Metode Pembayaran</option>
                                <option value="bank_transfer">Transfer Bank</option>
                                <option value="credit_card">Kartu Kredit</option>
                                <option value="cod">Pembayaran Saat Pengiriman (COD)</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">BUAT PESANAN</button>
                </form>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4 col-md-12 mt-4 mt-md-0">
            <div class="order-summary shadow-sm p-4 rounded bg-white">
                <h4 class="mb-4">Ringkasan Pesanan</h4>
                <div class="order-summary__products">
                    <div class="d-flex justify-content-between mt-2">
                        <strong>Total</strong>
                        <strong>Rp {{ number_format($total, 0, ',', '.') }}</strong>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
