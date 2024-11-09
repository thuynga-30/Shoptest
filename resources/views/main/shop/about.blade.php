<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="/assets/css/about.css">

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
        <!-- About -->
        <section class="about-us">
            <div class="container">
                <div class="about-us__inner">
                    <div class="row">
                        <div class="col-6">
                            <figure class="about-us__media">
                                <img src="/assets/img/a.png" alt="" class="about-us__img">
                            </figure>
                        </div>
                        <div class="col-6">
                            <div class="about-us__content">
                                <h1 class="about-us__title section-title">
                                    Welcome to Nest
                                </h1>
                                <p class="about-us__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate id est laborum.
                                    <br>
                                    <br>
                                    Ius ferri velit sanctus cu, sed at soleat accusata. Dictas prompta et Ut placerat
                                    legendos
                                    interpre.Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante Etiam sit
                                    amet
                                    orci eget. Quis commodo odio aenean sed adipiscing. Turpis massa tincidunt dui ut
                                    ornare
                                    lectus. Auctor elit sed vulputate mi sit amet. Commodo consequat. Duis aute irure
                                    dolor in
                                    reprehenderit in voluptate id est laborum.
                                </p>
                                <figure class="about-us__thumb">
                                    <img src="/assets/img/a.png" alt="" class="about-us__thumb-img">
                                    <img src="/assets/img/a.png" alt="" class="about-us__thumb-img">
                                    <img src="/assets/img/a.png" alt="" class="about-us__thumb-img">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Provide -->
        <section class="provide">
            <div class="container">
                <div class="provide__inner">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="provide__title section-title">What We Provide?</h2>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-1.svg fill.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">Best Prices & Offers</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-2.svg fill.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">Wide Assortment</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-3.svg.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">Free Delivery`</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-4.svg fill.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">Easy Returns</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-5.svg fill.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">100% Satisfaction</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="provide__item">
                                <div class="provide__icon-wrap">
                                    <img src="/assets/icon/icon-6.svg fill.png" alt="" class="provide__icon">
                                </div>
                                <h3 class="provide__item-title section-title">Great Daily Deal</h3>
                                <p class="provide__desc">
                                    There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered
                                    alteration in some form
                                </p>
                                <a href="" class="provide__action">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Performance -->
        <section class="performance">
            <div class="container">
                <div class="performance__inner">
                    <div class="row">
                        <div class="col-6">
                            <figure class="performance__media">
                                <img src="/assets/img/a.png" alt="" class="performance__img performance__img--small">
                                <img src="/assets/img/a.png" alt="" class="performance__img">
                            </figure>
                        </div>
                        <div class="col-6">
                            <div class="performance__content">
                                <p class="performance__desc-heading"></p>
                                <h2 class="performance__title section-title">
                                    Your Partner for e-
                                    commerce grocery
                                    solution
                                </h2>
                                <p class="performance__desc about__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation

                                    <br>
                                    <br>
                                    Ius ferri velit sanctus cu, sed at soleat accusata. Dictas prompta et Ut placerat
                                    legendos
                                    interpre.Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante Etiam sit
                                    amet
                                    orci eget. Quis commodo odio aenean sed adipiscing. Turpis massa tincidunt dui ut
                                    ornare

                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="performance__box">
                                <h3 class="performance__title--small section-title">
                                    Who we are
                                </h3>
                                <p class="performance__desc">
                                    Volutpat diam ut venenatis tellus in metus. Nec dui nunc
                                    mattis enim ut tellus eros donec ac odio orci ultrices in.
                                    ellus eros donec ac odio orci ultrices in.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="performance__box">
                                <h3 class="performance__title--small section-title">
                                    Our history
                                </h3>
                                <p class="performance__desc">
                                    Volutpat diam ut venenatis tellus in metus. Nec dui nunc
                                    mattis enim ut tellus eros donec ac odio orci ultrices in.
                                    ellus eros donec ac odio orci ultrices in.
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="performance__box">
                                <h3 class="performance__title--small section-title">
                                    Our mission
                                </h3>
                                <p class="performance__desc">
                                    Volutpat diam ut venenatis tellus in metus. Nec dui nunc
                                    mattis enim ut tellus eros donec ac odio orci ultrices in.
                                    ellus eros donec ac odio orci ultrices in.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats -->
        <section class="stats">
            <div class="container">
                <div class="stats__inner">
                    <div class="row">
                        <div class="col-3">
                            <div class="stats__info">
                                <p class="stats__number">
                                    0+
                                </p>
                                <p class="stats__text">
                                    Glorious years
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="stats__info">
                                <p class="stats__number">
                                    0+
                                </p>
                                <p class="stats__text">
                                    Happy clients
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="stats__info">
                                <p class="stats__number">
                                    0+
                                </p>
                                <p class="stats__text">
                                    Team advisor
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="stats__info">
                                <p class="stats__number">
                                    0+
                                </p>
                                <p class="stats__text">
                                    Products Sale
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our -->
        <div class="our">
            <div class="container">
                <div class="out__inner">
                    <div class="row">
                        <div class="col-4">
                            <div class="our__content">
                                <h2 class="our__title section-title">
                                    Meet Our Expert Team
                                </h2>
                                <p class="about__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    <br>
                                    <br>
                                    Ius ferri velit sanctus cu, sed at soleat accusata. Dictas prompta et Ut placerat
                                    legendos
                                    interpre.Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante Etiam sit
                                    amet
                                    orci eget. Quis commodo odio aenean sed adipiscing. Turpis massa tincidunt dui ut
                                    ornare

                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="our__member">
                                <figure class="our__avt-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="our__avt">
                                </figure>
                                <div class="our__info">
                                    <h3 class="our__name">Lê Thị Thúy Nga</h3>
                                    <p class="our__job">Leader-Đẹp gái</p>
                                    <div class="our__social">
                                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.tiktok.com" target="_blank" aria-label="TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="our__member">
                                <figure class="our__avt-wrap">
                                    <img src="/assets/img/thuyNga.jpg" alt="" class="our__avt">
                                </figure>
                                <div class="our__info">
                                    <h3 class="our__name">Lê Thị Thúy Nga</h3>
                                    <p class="our__job">Leader-Đẹp gái</p>
                                    <div class="our__social">
                                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.tiktok.com" target="_blank" aria-label="TikTok">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
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
    <!-- JS -->
   @include('main.footer')
</body>

</html>