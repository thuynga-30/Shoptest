<!DOCTYPE html>
<html lang="en">

<head>
    @include('main.header')
    <link rel="stylesheet" href="assets/css/product.css">

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
                        <img src="assets/img/logo.png" alt="" class="logo">
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
                                    <label for="search__location" class="search__label">Product Name</label>
                                    <input type="text" name="" id="search__location"
                                        class="search__location form-control" placeholder="Search for name...">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="search__type" class="search__label">Product Type</label>
                                    <select name="search__type" id="search__type" class="search__select form-control">
                                        <option class="search__option" value="">Select Product Type</option>
                                        <option class="search__option" value="adventure">Adventure</option>
                                        <option class="search__option" value="relaxation">Relaxation</option>
                                        <option class="search__option" value="city">City Tour</option>
                                        <option class="search__option" value="nature">Nature & Wildlife</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="search__duration" class="search__label">Product Origin</label>
                                    <select name="search__duration" id="search__duration"
                                        class="search__select form-control">
                                        <option class="search__option" value="">Select Origin</option>
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
                        @foreach ($products as $prod)
                            <div class="col">
                                <div class="product__item">
                                    <a href="{{ route('details',$prod->id) }}">
                                    <figure class="product__img-wrap">
                                        <img src="assets/img/{{ $prod->image }}" alt="" class="product__img">
                                    </figure>
                                    <div class="product__item-body">
                                        <p class="product__type">
                                            {{ $prod->cat->name }}
                                        </p>
                                        <h3 class="product__item-title">
                                            {{ $prod->name }}
                                        </h3>
                                    </a>
                                        <div class="ratting">
                                            {{-- @for ($i = 0; $i < 5; $i++)
                                                <i class="fa-solid fa-star product__ratting-icon {{ $i < $product->rating ? '' : 'unrated' }}"></i>
                                            @endfor
                                            <span>({{ $product->rating }})</span> --}}
                                            <i class="fa-solid fa-star product__ratting-icon"></i>
                                            <i class="fa-solid fa-star product__ratting-icon"></i>
                                            <i class="fa-solid fa-star product__ratting-icon"></i>
                                            <i class="fa-solid fa-star product__ratting-icon"></i>
                                            <i class="fa-solid fa-star product__ratting-icon"></i>
                                            <span>(100.0)</span>
                                        </div>
                                        <p class="manu">
                                            <span>By</span> <span>{{ $prod->origin }}</span>
                                        </p>
                                        <div class="product__actions">
                                            <p class="product__price">
                                                <span class="product__price-before">${{ $prod->price }}</span>
                                               {{-- <span class="product__price-after">${{ $prod->price_after }}</span> --}}
                                            </p>
                                            @if (auth()->check())
                                                <a href="{{ route('cart.add',$prod->id) }}" class="btn btn-2 product__btn-link">Add</a>                                                
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-2 product__btn-link">Add</a>                                                
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
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
                        @foreach ($products as $prod)
                        <div class="col-3">
                            <div class="deal__item">
                                <figure class="product__img-wrap">
                                    <img src="assets/img/{{ $prod->image }}" alt="" class="product__img">
                                </figure>
                                <div class="product__item-body">
                                    <p class="product__type">
                                        {{ $prod->type }}
                                    </p>
                                    <h3 class="product__item-title">
                                        {{ $prod->name }}
                                    </h3>
                                </a>
                                    <div class="ratting">
                                        {{-- @for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid fa-star product__ratting-icon {{ $i < $product->rating ? '' : 'unrated' }}"></i>
                                        @endfor
                                        <span>({{ $product->rating }})</span> --}}
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <i class="fa-solid fa-star product__ratting-icon"></i>
                                        <span>(100.0)</span>
                                    </div>
                                    <p class="manu">
                                        <span>By</span> <span>{{ $prod->origin }}</span>
                                    </p>
                                    <div class="product__actions">
                                        <p class="product__price">
                                            <span class="product__price-before">${{ $prod->price }}</span>
                                           {{-- <span class="product__price-after">${{ $prod->price_after }}</span> --}}
                                        </p>
                                        <a href="" class="btn btn-2 product__btn-link">Add</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Emd Main -->
    <!-- Footer -->
   
    <!-- End Footer -->
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS -->
    @include('main.footer')
</body>

</html>