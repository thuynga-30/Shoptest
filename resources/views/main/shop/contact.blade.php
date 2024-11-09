<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="/assets/css/contact.css">

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
        <!-- Contact Form -->
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-sm-12">
                        <div class="contact-form">
                            <div class="contact__top">
                                <p class="contact__desc section-desc-heading">
                                    Would like to talk?
                                </p>
                                <h3 class="contact__title section-title">
                                    Contact Details
                                </h3>
                            </div>
                            <form action="{{ route('contact-store') }}" method="post" autocomplete="on">
                                @csrf
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" value=" {{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="content" class="form-control" id="content" placeholder="Nội dung" rows="8" maxlength="600" required></textarea>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <button type="submit" class="contact__btn btn btn-2">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                        <div class="inner-contact">
                            <div class="contact__info">
                                <div class="contact__top">
                                    <h3 class="contact__title section-title">
                                        Contact Details
                                    </h3>
                                </div>
                                <p class="contact__desc">
                                    If you have a story to share or a question that has not been answered on our website, please get in touch with us via contact details listed below or fill in the form on the right.
                                </p>
                                <ul class="contact__list">
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                    </li>
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                    </li>
                                    <li class="contact__item">
                                        <div class="contact__icon-wrap">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a class="contact__link" href="mailto:contact@tnna.vn">contact@tnna.vn</a>
                                    </li>
                                </ul>
                                <div class="contact__social">
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://www.tiktok.com/@ndt02092005?lang=vi-VN"><i class="fa-brands fa-tiktok"></i></i></a>
                                    <a href="https://www.instagram.com/entyyy_29/"><i class="fa-brands fa-instagram"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe class="contact__map" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d11144.790398555191!2d108.24555237925955!3d15.994775983622931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d15.9909237!2d108.2441499!5e0!3m2!1sen!2s!4v1730477141680!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <!-- End Main -->
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