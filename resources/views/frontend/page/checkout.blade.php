@extends('frontend.layouts.app')
@section('title', 'Checkout')
@section('content')
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
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="create_account" name="create_account" class="form-check-input">
                                <label for="create_account" class="form-check-label">Buat akun?</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="ship_to_different" name="ship_to_different" class="form-check-input">
                                <label for="ship_to_different" class="form-check-label">Kirim ke alamat berbeda?</label>
                            </div>
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
                    <div class="d-flex justify-content-between mb-2">
                        <span>Produk</span>
                        <span>Total</span>
                    </div>
                    <ul class="list-unstyled">
                        @foreach($cartItems as $item)
                            <li class="d-flex justify-content-between mb-2">
                                <span>{{ $item->name }}</span>
                                <span>Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="d-flex justify-content-between mt-3">
                        <strong>Subtotal</strong>
                        <strong>Rp {{ number_format($subtotal, 0, ',', '.') }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <strong>Total</strong>
                        <strong>Rp {{ number_format($total, 0, ',', '.') }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS Kustom -->
<style>
    .checkout-form, .order-summary {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .checkout-form h4, .order-summary h4 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }
    .form-control {
        border-radius: 5px;
        border-color: #ced4da;
    }
    .form-check-label {
        font-size: 0.875rem;
    }
    .form-select {
    border-radius: 0.25rem;
    padding: 0.5rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    }
    .btn-primary {
        background-color: #FF4DA3;
        border-color: #FF4DA3;
    }
    .btn-primary:hover {
        background-color: #FF3A85;
        border-color: #FF4DA3;
    }
    .order-summary__products li {
        border-bottom: 1px solid #dee2e6;
        padding: 0.5rem 0;
    }
</style>
@endsection