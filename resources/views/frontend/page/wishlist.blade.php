@extends('frontend.layouts.app')
@section('content')
<section class="wishlist spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="wishlist__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product__wishlist__item">
                                    <div class="product__wishlist__item__pic">
                                        <img src="img/wishlist/wishlist-1.jpg" alt="T-shirt Contrast Pocket">
                                    </div>
                                    <div class="product__wishlist__item__text">
                                        <h6>T-shirt Contrast Pocket</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="wishlist__price">$98.49</td>
                                <td class="wishlist__actions">
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="1">
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="product__wishlist__item">
                                    <div class="product__wishlist__item__pic">
                                        <img src="img/wishlist/wishlist-2.jpg" alt="Diagonal Textured Cap">
                                    </div>
                                    <div class="product__wishlist__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>$32.50</h5>
                                    </div>
                                </td>
                                <td class="wishlist__price">$32.50</td>
                                <td class="wishlist__actions">
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="2">
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="product__wishlist__item">
                                    <div class="product__wishlist__item__pic">
                                        <img src="img/wishlist/wishlist-3.jpg" alt="Basic Flowing Scarf">
                                    </div>
                                    <div class="product__wishlist__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$47.00</h5>
                                    </div>
                                </td>
                                <td class="wishlist__price">$47.00</td>
                                <td class="wishlist__actions">
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="3">
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Remove</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="product__wishlist__item">
                                    <div class="product__wishlist__item__pic">
                                        <img src="img/wishlist/wishlist-4.jpg" alt="Basic Flowing Scarf">
                                    </div>
                                    <div class="product__wishlist__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </td>
                                <td class="wishlist__price">$30.00</td>
                                <td class="wishlist__actions">
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="4">
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </form>
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Remove</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wishlist__total">
                    <h6>Wishlist Total</h6>
                    <ul>
                        <li>Total <span>$207.99</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection