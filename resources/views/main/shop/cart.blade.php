<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="/assets/css/product.css">
    <link rel="stylesheet" href="/assets/css/cart.css">

</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header__inner">
            <!-- Header top -->
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <!-- Logo -->
                        <img src="../assets/img/logo4.png" alt="" class="logo">
                        <!-- Navbar -->
                        @include('main.shop.navbar')

                    </div>
                </div>
            </div>
        </div>
       
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="main">
        <!-- Cart -->
        <section class="cart">
            <div class="container">
                <table class="table cart__table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Handle</th>
                            <th>Choose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart__product">
                                    <figure class="cart__img-wrap">
                                        <img src="../assets/img/thuyNga.jpg" alt="" class="cart__img">
                                    </figure>
                                    
                                </div>
                            </td>
                            <td><h3 class="cart__product-title">Thúy Nga</h3></td>
                            <td>$ Vô giá</td>
                            <td>
                                <div class="cart__number-box form-group">
                                    <button class="cart__btn cart__btn--plus">
                                        -
                                    </button>
                                    <input type="text" class="form-control text-center cart__number" value="1">
                                    <button class="cart__btn cart__btn--minus">
                                        +
                                    </button>
                                </div>
                            </td>
                            <td>$1100</td>
                            <td>
                                <button class="btn-handle">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>
                            <td>
                                <input type="checkbox" class="cart__choose">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="cart__action">
                    <button class="btn btn-2">Return To Shop</button>
                    <button class="btn btn-2">Check Out</button>
                </div>
                <div class="cart__summary">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="cart__coupon input-group">
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <button class="btn btn-2">Apply Coupon</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="summary__box">
                                <h4 class="summary__box-title">Cart Total</h4>
                                <div class="summary__item">
                                    <span class="summary__item-text">Subtotal:</span>
                                    <span class="summary__item-text summary__item-text--small">$1750</span>
                                </div>
                                <div class="summary__item">
                                    <span class="summary__item-text">Shipping:</span>
                                    <span class="summary__item-text summary__item-text--small">Free</span>
                                </div>
                                <div class="summary__item summary__item--bold">
                                    <span class="summary__item-text">Total:</span>
                                    <span class="summary__item-text summary__item-text--small">$1750</span>
                                </div>
                                <div class="summary__action">
                                    <button class="btn btn-2">Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Emd Main -->
    <!-- Footer -->
   
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS -->
    @include('main.footer')
</body>

</html>