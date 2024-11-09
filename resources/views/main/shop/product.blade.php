<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="/assets/css/product.css">

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
        <!-- Search -->
        <section class="search">
            <div class="container">
                <ul class="search__chose-list">
                    <li class="search__chose-item search__chose-item--active">
                        <span class="search__chose-text">
                            Default
                        </span>
                        <i class="fa-solid fa-circle"></i>
                    </li>
                    <li class="search__chose-item">
                        <span class="search__chose-text">
                            Price to High
                        </span>
                        <i class="fa-solid fa-arrow-up"></i>
                    </li>
                    <li class="search__chose-item">
                        <span class="search__chose-text">
                            Price to Down
                        </span>
                        <i class="fa-solid fa-arrow-down"></i>
                    </li>
                    <li class="search__chose-item">
                        <span class="search__chose-text">
                            On sale
                        </span>
                        <i class="fa-regular fa-circle-check"></i>
                    </li>
                </ul>
                <div class="search__form-group">
                    <form class="search__form" action="">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="search__location" class="search__label">Tour location</label>
                                    <input type="text" name="" id="search__location"
                                        class="search__location form-control" placeholder="Search for name...">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="search__type" class="search__label">Tour Type</label>
                                    <select name="search__type" id="search__type" class="search__select form-control">
                                        <option class="search__option" value="">Select Tour Type</option>
                                        <option class="search__option" value="adventure">Adventure</option>
                                        <option class="search__option" value="relaxation">Relaxation</option>
                                        <option class="search__option" value="city">City Tour</option>
                                        <option class="search__option" value="nature">Nature & Wildlife</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="search__duration" class="search__label">Tour Duration</label>
                                    <select name="search__duration" id="search__duration"
                                        class="search__select form-control">
                                        <option class="search__option" value="">Select Duration</option>
                                        <option class="search__option" value="1">1 Day</option>
                                        <option class="search__option" value="2">2-3 Days</option>
                                        <option class="search__option" value="3">4-7 Days</option>
                                        <option class="search__option" value="4">1+ Week</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <button class="btn btn-2 search__btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Product -->
        <section class="product">
            <div class="container">
                <div class="product__inner">
                    <div class="row">
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        Người đẹp
                                    </p>
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination">
                                <span class="pagination__btn pagination__btn-p"><i
                                        class="fa-solid fa-arrow-left"></i></span>
                                <span class="pagination__page">1</span>
                                <span class="pagination__btn pagination__btn-n"><i
                                        class="fa-solid fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deal">
            <div class="container">
                <div class="deal__list">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="deal__title section-title">
                                Deals Of The Day
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="deal__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="deal__item-body product__item-body">
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="deal__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="deal__item-body product__item-body">
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="deal__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="deal__item-body product__item-body">
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="deal__item">
                                <figure class="product__img-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="product__img">
                                </figure>
                                <div class="deal__item-body product__item-body">
                                    <h3 class="product__item-title">
                                        Seeds of Change Organic Quinoe
                                        Naturel
                                    </h3>
                                    <div class="ratting">
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span><span> Thái Nguyễn</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price"><span class="product__price-before">$28.85</span><span
                                                class="product__price-after">$30</span></p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>
                                    </div>
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