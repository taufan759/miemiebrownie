@extends('frontend.layouts.app')

@section('content')
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groupedCartItems as $item)
                            <tr>
                                <td class="product__cart__item" data-label="Product">
                                    <div class="product__cart__item__pic">
                                        @if($item['product'])
                                            <img src="{{ asset('storage/img-produk/img_produk_depan/' . $item['product']->img_produk_depan) }}" width="100%" alt="{{ $item['product']->nama_produk }}">
                                        @else
                                            <img src="{{ asset('path/to/default-image.jpg') }}" alt="Default Image">
                                        @endif
                                    </div>
                                </td>
                                <td class="product__cart__name"  data-label="Nama Produk">
                                    <!-- Menampilkan nama produk -->
                                    <h6>{{ $item['product']->nama_produk ?? 'Produk Tidak Tersedia' }}</h6>
                                </td>
                                <td class="quantity__item" data-label="Quantity">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="number" class="item-quantity" data-id="{{ $item['product']->id }}" value="{{ $item['quantity'] }}" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price"data-label="Total">
                                    Rp {{ number_format($item['product']->harga * $item['quantity'], 0, ',', '.') }}
                                </td>
                                <td class="cart__close" data-label="Action">
                                    <button type="button" class="delete-item" data-id="{{ $item['product']->id }}">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                        
                    </table>                                        
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="/page/produk">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#" id="update-cart"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span id="cart-total">Rp {{ number_format($cartTotal, 0, ',', '.') }}</span></li>
                        <li>Total <span id="cart-total">Rp {{ number_format($cartTotal, 0, ',', '.') }}</span></li>
                    </ul>
                    <a href="/cart/keranjang/checkout" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Pastikan JavaScript di-load setelah seluruh konten halaman dimuat --}}
<script src="{{ asset('frontend/js/app-cart.js') }}" defer></script>

@endsection
