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
                                <th>Product</th>
                                <th>Nama Produk</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr>
                                <td class="product__cart__item" style="width: 15%;">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ asset('storage/img-produk/img_produk_depan/' . $item['img_produk_depan']) }}" width="100%" alt="{{ $item['nama_produk'] }}">
                                    </div>
                                </td>
                                <td class="product__cart__name" style="padding-left: 20px;">
                                    <!-- Menampilkan nama produk -->
                                    <h6>{{ $item['nama_produk'] }}</h6> 
                                </td>
                                <td class="quantity__item" style="width: 20%;">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="number" class="item-quantity" data-id="{{ $loop->index }}" value="{{ $item['quantity'] }}" min="0">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price" style="width: 20%;">
                                    ${{ $item['harga'] * $item['quantity'] }}
                                </td>
                                <td class="cart__close" style="width: 10%;">
                                    <button type="button" class="delete-item" data-id="{{ $loop->index }}"><i class="fa fa-close"></i></button>
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
                        <li>Subtotal <span id="cart-total">${{ $cartTotal }}</span></li>
                        <li>Total <span id="cart-total">${{ $cartTotal }}</span></li>
                    </ul>
                    <a href="/cart/keranjang/checkout" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('frontend/js/main.js') }}"></script>

@endsection
