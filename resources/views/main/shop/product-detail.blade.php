<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="/assets/css/product-detail.css  ">
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
                        <img src="/assets/img/logo.png" alt="" class="logo">
                        <!-- Navbar -->
                        <nav class="navbar">
                            <ul class="navbar__list">
                                <li class="navbar__item">
                                    <a href="{{ route('home') }}" class="navbar__link">Home</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="{{ route('about') }}" class="navbar__link">About</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="{{ route('product') }}" class="navbar__link">Product</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="{{ route('cart') }}" class="navbar__link">
                                        <i class="fa-solid fa-cart-shopping navbar__link-icon"></i>
                                        <span class="navbar__link-text">
                                            Cart
                                        </span>
                                    </a>
                                </li>
                                <li class="navbar__item">
                                    <a href="{{ route('contact') }}" class="navbar__link navbar__link--special btn">Contact</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="navbar__item dropdown">
                                    <a href="#" class="navbar__link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }} <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('logout') }}" class="navbar__link">Log out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="main">
        <div class="product-detail">
            <div class="container">
                <div class="product-detail__inner">
                    <div class="row">
                        <div class="col-9">
                            <div class="product-detail__content">
                                <div class="row">
                                    <div class="col-6">
                                        <figure class="product-detail__media">
                                            <img src="/assets/img/about-bg.png" alt="" class="product-detail__img">
                                        </figure>
                                        <figure class="product-detail__img-thumb">
                                            <img src="/assets/img/about-bg.png" alt="" class="product-detail__thumb">
                                            <img src="/assets/img/about-bg.png" alt="" class="product-detail__thumb">
                                            <img src="/assets/img/about-bg.png" alt="" class="product-detail__thumb">
                                            <img src="/assets/img/about-bg.png" alt="" class="product-detail__thumb">
                                        </figure>
                                    </div>
                                    <div class="col-6">
                                        <div class="product-detail__sale">
                                            <h2 class="product-detail__title">
                                                Seeds of Change
                                                Organic Quinoa, Brown
                                            </h2>
                                            <div class="ratting">
                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                <span>(100.0)</span>
                                            </div>
                                            <p class="product-detail__price">
                                                <span class="product-detail__price--bold">
                                                    $38
                                                </span>
                                                <span class="product-detail__price--small">
                                                    $52
                                                </span>
                                            </p>
                                            <p class="product-detail__desc">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi,
                                                odio minus dolore impedit fuga eum eligendi.
                                            </p>
                                            <div class="product-detail__list-size">
                                                <span>
                                                    Size / Weight:
                                                </span>
                                                <span class="product-detail__size product-detail__size--active">
                                                    50g
                                                </span>
                                                <span class="product-detail__size">
                                                    100g
                                                </span>
                                                <span class="product-detail__size">
                                                    1000g
                                                </span>
                                                <span class="product-detail__size">
                                                    100000g
                                                </span>
                                            </div>
                                            <div class="product-detail__action">
                                                <div class="product-detail__number-box form-group">
                                                    <button class="product-detail__btn product-detail__btn--plus">
                                                        -
                                                    </button>
                                                    <input type="text"
                                                        class="form-control text-center product-detail__number"
                                                        value="1">
                                                    <button class="product-detail__btn product-detail__btn--minus">
                                                        +
                                                    </button>
                                                </div>
                                                <button class="product-detail__btn-action btn btn-2"><i
                                                        class="fa-solid fa-cart-shopping"></i> <span>Add</span></button>
                                                <div class="product-detail__icon-wrap">
                                                    <i class="fa-regular fa-heart product-detail__icon"></i>
                                                </div>
                                            </div>
                                            <div class="product-detail__desc-list">
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                                <p class="product-detail__desc-item">
                                                    <span class="product-detail__desc-item-title">Type</span>
                                                    <span>Organic</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="product-detail__info">
                                            <div class="product-detail__info-actions">
                                                <a href=""
                                                    class="product-detail__info-action product-detail__info-action--active">Description</a>
                                                <a href="" class="product-detail__info-action">Additional info</a>
                                                <a href="" class="product-detail__info-action">Vendor</a>
                                            </div>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Uninhibited carnally hired played in whimpered dear gorilla koala
                                                depending
                                                and much yikes off far quetzal goodness and from for grimaced
                                                goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                tightly neurotic hungrily some and dear furiously this apart.
                                                Spluttered narrowly yikes left moth in yikes bowed this that grizzly
                                                much
                                                hello on spoon-fed that alas rethought much decently richly and
                                                wow against the frequent fluidly at formidable acceptably flapped
                                                besides
                                                and much circa far over the bucolically hey precarious goldfinch
                                                mastodon goodness gnashed a jellyfish and one however because.
                                            </p>
                                            <ul class="product-detail__info-list">
                                                <li class="product-detail__info-item-desc">
                                                    <span>Type Of Packing</span>
                                                    <span>Bottle</span>
                                                </li>
                                                <li class="product-detail__info-item-desc">
                                                    <span>Type Of Packing</span>
                                                    <span>Bottle</span>
                                                </li>
                                                <li class="product-detail__info-item-desc">
                                                    <span>Type Of Packing</span>
                                                    <span>Bottle</span>
                                                </li>
                                                <li class="product-detail__info-item-desc">
                                                    <span>Type Of Packing</span>
                                                    <span>Bottle</span>
                                                </li>
                                                <li class="product-detail__info-item-desc">
                                                    <span>Type Of Packing</span>
                                                    <span>Bottle</span>
                                                </li>
                                            </ul>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Laconic overheard dear woodchuck wow this outrageously taut beaver hey
                                                hello
                                                far meadowlark imitatively egregiously hugged that yikes
                                                minimally unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the
                                                raucously that magic upheld far so the this where crud then below after
                                                jeez
                                                enchanting drunkenly more much wow callously irrespective
                                                limpet.
                                            </p>
                                            <h3 class="product-detail__info-title">
                                                Packaging & Delivery
                                            </h3>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Laconic overheard dear woodchuck wow this outrageously taut beaver hey
                                                hello
                                                far meadowlark imitatively egregiously hugged that yikes
                                                minimally unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the
                                                raucously that magic upheld far so the this where crud then below after
                                                jeez
                                                enchanting drunkenly more much wow callously irrespective
                                                limpet.
                                            </p>
                                            <h3 class="product-detail__info-title">
                                                Suggested Use
                                            </h3>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Refrigeration not necessary.
                                            </p>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Stir before serving
                                            </p>
                                            <h3 class="product-detail__info-title">
                                                Other Ingredients
                                            </h3>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Organic raw pecans, organic raw cashews.
                                            </p>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                This butter was produced using a LTG (Low Temperature Grinding) process
                                            </p>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Made in machinery that processes tree nuts but does not process peanuts,
                                                gluten, dairy or soy
                                            </p>
                                            <h3 class="product-detail__info-title">
                                                Warnings
                                            </h3>
                                            <p class="product-detail__info-desc product-detail__desc">
                                                Oil separation occurs naturally. May contain pieces of shell.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="product-detail__related">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="product-detail__related-item">
                                                        <figure class="product-detail__related-img-wrap">
                                                            <img src="/assets/img/about-img.png" alt=""
                                                                class="product-detail__related-img">
                                                        </figure>
                                                        <div class="product-detail__related-item-body">
                                                            <h4 class="product-detail__related-item-title">
                                                                Ulstra Bass Headphone
                                                            </h4>
                                                            <div class="ratting">
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <span>(100.0)</span>
                                                            </div>
                                                            <p class="product-detail__price">
                                                                <span class="product-detail__price--bold">
                                                                    $38
                                                                </span>
                                                                <span class="product-detail__price--small">
                                                                    $52
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product-detail__related-item">
                                                        <figure class="product-detail__related-img-wrap">
                                                            <img src="/assets/img/about-img.png" alt=""
                                                                class="product-detail__related-img">
                                                        </figure>
                                                        <div class="product-detail__related-item-body">
                                                            <h4 class="product-detail__related-item-title">
                                                                Ulstra Bass Headphone
                                                            </h4>
                                                            <div class="ratting">
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <span>(100.0)</span>
                                                            </div>
                                                            <p class="product-detail__price">
                                                                <span class="product-detail__price--bold">
                                                                    $38
                                                                </span>
                                                                <span class="product-detail__price--small">
                                                                    $52
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product-detail__related-item">
                                                        <figure class="product-detail__related-img-wrap">
                                                            <img src="/assets/img/about-img.png" alt=""
                                                                class="product-detail__related-img">
                                                        </figure>
                                                        <div class="product-detail__related-item-body">
                                                            <h4 class="product-detail__related-item-title">
                                                                Ulstra Bass Headphone
                                                            </h4>
                                                            <div class="ratting">
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <span>(100.0)</span>
                                                            </div>
                                                            <p class="product-detail__price">
                                                                <span class="product-detail__price--bold">
                                                                    $38
                                                                </span>
                                                                <span class="product-detail__price--small">
                                                                    $52
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="product-detail__related-item">
                                                        <figure class="product-detail__related-img-wrap">
                                                            <img src="/assets/img/about-img.png" alt=""
                                                                class="product-detail__related-img">
                                                        </figure>
                                                        <div class="product-detail__related-item-body">
                                                            <h4 class="product-detail__related-item-title">
                                                                Ulstra Bass Headphone
                                                            </h4>
                                                            <div class="ratting">
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <i class="fa-solid fa-star product__ratting-icon"></i>
                                                                <span>(100.0)</span>
                                                            </div>
                                                            <p class="product-detail__price">
                                                                <span class="product-detail__price--bold">
                                                                    $38
                                                                </span>
                                                                <span class="product-detail__price--small">
                                                                    $52
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="product-detail__other">
                                <h3 class="product-detail__other-title">
                                    New title
                                </h3>
                                <div class="product-detail__other-list">
                                    <div class="product-detail__other-item">
                                        <figure class="product-detail__other-img-wrap">
                                            <img src="/assets/img/about-img.png" alt="" class="product-detail__other-img">
                                        </figure>
                                        <div class="product-detail__other-item-content">
                                            <h4 class="product-detail__other-item-title">
                                                Chen Cardigan
                                            </h4>
                                            <p class="product-detail__other-item-price">
                                                $ 99
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-detail__other-item">
                                        <figure class="product-detail__other-img-wrap">
                                            <img src="/assets/img/about-img.png" alt="" class="product-detail__other-img">
                                        </figure>
                                        <div class="product-detail__other-item-content">
                                            <h4 class="product-detail__other-item-title">
                                                Chen Cardigan
                                            </h4>
                                            <p class="product-detail__other-item-price">
                                                $ 99
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-detail__other-item">
                                        <figure class="product-detail__other-img-wrap">
                                            <img src="/assets/img/about-img.png" alt="" class="product-detail__other-img">
                                        </figure>
                                        <div class="product-detail__other-item-content">
                                            <h4 class="product-detail__other-item-title">
                                                Chen Cardigan
                                            </h4>
                                            <p class="product-detail__other-item-price">
                                                $ 99
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-detail__other-item">
                                        <figure class="product-detail__other-img-wrap">
                                            <img src="/assets/img/about-img.png" alt="" class="product-detail__other-img">
                                        </figure>
                                        <div class="product-detail__other-item-content">
                                            <h4 class="product-detail__other-item-title">
                                                Chen Cardigan
                                            </h4>
                                            <p class="product-detail__other-item-price">
                                                $ 99
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Emd Main -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="row">
                    <div class="col-3">
                        <div class="footer__site-map">
                            <h3 class="footer__title section-title">
                                Site Map
                            </h3>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="" class="footer__link">Home</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">About</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Product</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Food</a>
                                </li>
                                <li class="footer__item">
                                    <a href="" class="footer__link">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-5">
                        <figure class="footer__logo-wrap">
                            <img src="/assets/img/footer-logo.png" alt="" class="footer__logo">
                        </figure>
                    </div>
                    <div class="col-4">
                        <div class="footer__form">
                            <h3 class="footer__title section-title">
                                Contact us here
                            </h3>
                            <form action="" class="footer__form-inner">
                                <div class="footer__form-group form-group">
                                    <input type="email" id="email" class="form-control footer__form-input"
                                        placeholder="Enter your email" required>
                                </div>
                                <button type="submit" class="btn btn-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS -->
    @include('main.footer')
</body>

</html>