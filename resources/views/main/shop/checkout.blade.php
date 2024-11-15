<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
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
        <!-- Checkout Page Start -->
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h1 class="checkout__title section-title">Billing details</h1>
                        <form action="#">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group checkout__item">
                                        <label class="checkout__label">First Name<sup>*</sup></label>
                                        <input type="text" class="form-control checkout__input">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="checkout__label">Last Name<sup>*</sup></label>
                                        <input type="text" class="form-control checkout__input">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Company Name<sup>*</sup></label>
                                <input type="text" class="form-control checkout__input">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Address <sup>*</sup></label>
                                <input type="text" class="form-control checkout__input" placeholder="House Number Street Name">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Town/City<sup>*</sup></label>
                                <input type="text" class="form-control checkout__input">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Country<sup>*</sup></label>
                                <input type="text" class="form-control checkout__input">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Postcode/Zip<sup>*</sup></label>
                                <input type="text" class="form-control checkout__input">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Mobile<sup>*</sup></label>
                                <input type="tel" class="form-control checkout__input">
                            </div>
                            <div class="form-group checkout__item">
                                <label class="checkout__label">Email Address<sup>*</sup></label>
                                <input type="email" class="form-control checkout__input">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="Account-1" name="Accounts" value="Accounts">
                                <label class="form-check-label" for="Account-1">Create an account?</label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Address-1" name="Address" value="Address">
                                <label class="form-check-label" for="Address-1">Ship to a different address?</label>
                            </div>
                            <div class="form-group checkout__item">
                                <textarea name="text" class="form-control check__mess" spellcheck="false" cols="30" rows="11" placeholder="Oreder Notes (Optional)"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-5">
                        <table class="table cart__table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
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
                                    <td>
                                        <h3 class="cart__product-title">Thúy Nga</h3>
                                    </td>
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
                                </tr>
                                <tr>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="">
                                        <p class="">Subtotal</p>
                                    </td>
                                    <td class="">
                                        <div class="">
                                            <p class="">$414.00</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="">
                                        <p class="mb-0 text-dark py-4">Shipping</p>
                                    </td>
                                    <td colspan="3" class="py-5">
                                        <div class="form-check text-start">
                                            <input type="checkbox" class="form-check-input" id="Shipping-1" name="Shipping-1" value="Shipping">
                                            <label class="form-check-label" for="Shipping-1">Free Shipping</label>
                                        </div>
                                        <div class="form-check text-start">
                                            <input type="checkbox" class="form-check-input" id="Shipping-2" name="Shipping-1" value="Shipping">
                                            <label class="form-check-label" for="Shipping-2">Flat rate: $15.00</label>
                                        </div>
                                        <div class="form-check text-start">
                                            <input type="checkbox" class="form-check-input" id="Shipping-3" name="Shipping-1" value="Shipping">
                                            <label class="form-check-label" for="Shipping-3">Local Pickup: $8.00</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class="">
                                        <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                                    </td>
                                    <td class="">
                                        <div class="">
                                            <p class="mb-0 text-dark">$135.00</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td class=""></td>
                                    <td colspan="2">
                                        <button class="btn btn-2 w-100">Buy</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout Page End -->

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