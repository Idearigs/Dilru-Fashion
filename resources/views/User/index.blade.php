<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/jesco/jesco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 06:58:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Dilru fashion</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font.awesome.css') }}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


</head>

<body>

<!-- Top Bar -->


@include('partials.navbar')
<!-- Top Bar -->
<!-- Header Area Start -->

<!-- Header Area End -->
<div class="offcanvas-overlay"></div>

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/1.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Women's Elizabeth Coat</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/2.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Long sleeve knee length</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/3.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Cool Man Wearing Leather</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/1.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Women's Elizabeth Coat</a>
                        <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/2.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Long sleeve knee length</a>
                        <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="image"><img src="assets/images/product-image/3.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="#" class="title">Cool Man Wearing Leather</a>
                        <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="{{Route('Frontend-Cart')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="{{Route('Frontend-Checkoutpage')}}" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>

    <div class="inner customScroll">

        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                        <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Page</span></a>
                            <ul class="sub-menu">
                                <li class="title"><a href="#">Shop Page</a></li>
                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">product Details Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="#">Product Single</a></li>
                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                <li><a href="single-product-group.html">Product Group</a></li>
                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Single Product Page</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </li>
                                <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                </li>
                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                <li><a href="my-account.html">Account Page</a></li>
                                <li><a href="login.html">Login & Register Page</a></li>
                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="faq.html">Faq Page</a></li>
                                <li><a href="coming-soon.html">Coming Soon Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                        <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                        <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Single Page</a></li>
                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                        <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->

<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Offer 2021</span>
                                <h2 class="title-1">Sale Up To </h2>
                                <h2 class="title-2"><span>50%</span> Off</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                        class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="assets/images/slider-image/slider-1.png" alt="" />
                                </div>
                                <div class="display-wrapper">
                                    <div class="content-side">
                                        <h4 class="title">Full Dress</h4>
                                        <span class="price">$21.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                    </div>
                                    <div class="image-side">
                                        <img src="assets/images/slider-image/display-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex bg-color2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Offer 2021</span>
                                <h2 class="title-1">Sale Up To </h2>
                                <h2 class="title-2"><span>50%</span> Off</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                        class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="assets/images/slider-image/slider-2.png" alt="" />
                                </div>
                                <div class="display-wrapper">
                                    <div class="content-side">
                                        <h4 class="title">Full Dress</h4>
                                        <span class="price">$21.00</span>
                                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
                                    </div>
                                    <div class="image-side">
                                        <img src="assets/images/slider-image/display-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Banner Area Start -->

<!-- Banner Area End -->

<!-- Feature Area Srart -->
<div class="feature-area pb-100px " style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6  ">
                <!-- single item -->
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/1.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free Shipping</h4>
                        <span class="sub-title">Capped at $39 per order</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/2.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Card Payments</h4>
                        <span class="sub-title">12 Months Installments</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/3.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Returns</h4>
                        <span class="sub-title">Shop With Confidence</span>
                    </div>
                </div>
                <!-- single item -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End -->

<!-- Product Area Start -->
<div class="product-area">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg col-md col-12">
                <div class="section-title mb-0">
                    <h2 class="title">#products</h2>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Tab Start -->
            <div class="col-lg-auto col-md-auto col-12">
                <ul class="product-tab-nav nav">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab-product-all">All</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-new">New</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#tab-product-bestsellers">Bestsellers</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#tab-product-itemssale">Items
                            Sale</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <div class="row">
            <div class="col">
                <div class="tab-content top-borber">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                     data-aos-delay="200">
                                    <!-- Single Product -->
                                    <div class="product">
                                        <div class="thumb">
                                            @foreach ($product->images as $index => $image)
                                            @if ($index === 0)
                                            <a href="{{ route('Frontend-ProductDetail', ['id' => $product->id]) }}" class="image">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" 
                                                     alt="{{ $product->name }}" />
                                            </a>
                                            @endif
                                            @endforeach
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">
                                                <a href="{{ route('Frontend-ProductDetail', ['id' => $product->id]) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">${{ number_format($product->price, 2) }}</span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="tab-product-new">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Elizabeth Coat
                                            </a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Ardene Microfiber
                                                Tights</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Long Sleeve
                                                Shirts</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 70%"></span>
                                                </span>
                                                <span class="rating-num">( 3.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Parrera Sunglasses -
                                                Lomashop</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/2.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Cool Man Wearing
                                                Leather</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/4.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Portrait Of A Young
                                                Stylish</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/6.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Men's Fashion Leather
                                                Bag</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/8.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 60%"></span>
                                                </span>
                                                <span class="rating-num">( 3 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Long sleeve knee
                                                length</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-bestsellers">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Elizabeth Coat
                                            </a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Ardene Microfiber
                                                Tights</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Long Sleeve
                                                Shirts</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 70%"></span>
                                                </span>
                                                <span class="rating-num">( 3.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Parrera Sunglasses -
                                                Lomashop</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/2.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Cool Man Wearing
                                                Leather</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/4.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Portrait Of A Young
                                                Stylish</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/6.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Men's Fashion Leather
                                                Bag</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/8.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 60%"></span>
                                                </span>
                                                <span class="rating-num">( 3 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Long sleeve knee
                                                length</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <div class="tab-pane fade" id="tab-product-itemssale">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/2.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Elizabeth Coat
                                            </a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/4.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Ardene Microfiber
                                                Tights</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$48.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Women's Long Sleeve
                                                Shirts</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                                <span class="old">$38.00</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/8.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 70%"></span>
                                                </span>
                                                <span class="rating-num">( 3.5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Parrera Sunglasses -
                                                Lomashop</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/2.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/10.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-5%</span>
                                                <span class="new">New</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Cool Man Wearing
                                                Leather</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                                <span class="old">$40.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                 data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/4.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/12.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Portrait Of A Young
                                                Stylish</a>
                                        </h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                 data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/6.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/14.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                                </span>
                                                <span class="rating-num">( 4 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Men's Fashion Leather
                                                Bag</a></h5>
                                        <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                 data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="assets/images/product-image/8.jpg" alt="Product" />
                                            <img class="hover-image" src="assets/images/product-image/16.jpg"
                                                 alt="Product" />
                                        </a>
                                        <span class="badges">
                                                <span class="new">Sale</span>
                                            </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 60%"></span>
                                                </span>
                                                <span class="rating-num">( 3 Review )</span>
                                            </span>
                                        <h5 class="title"><a href="#">Long sleeve knee
                                                length</a></h5>
                                        <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 4th tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Deal Area Start -->

<!-- Deal Area End -->

<!-- Testimonial Area Start -->
<div class="testimonial-area pb-40px" style="margin-top:80px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-0">
                    <h2 class="title line-height-1">#testimonials</h2>
                </div>
            </div>
        </div>
        <!-- Slider Start -->
        <div class="testimonial-wrapper swiper-container">
            <div class="swiper-wrapper">
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="assets/images/testimonial-image/1.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Daisy Morgan</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="assets/images/testimonial-image/2.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Leah Chatman</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="assets/images/testimonial-image/3.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Reyna Chung</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="assets/images/testimonial-image/1.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Daisy Morgan</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
                <div class="swiper-slide">
                    <div class="testi-inner">
                        <div class="reating-wrap">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                            </p>
                        </div>
                        <div class="testi-author">
                            <div class="author-img">
                                <img src="assets/images/testimonial-image/2.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4 class="name">Reyna Chung</h4>
                                <span class="title">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item -->
            </div>
        </div>
        <!-- Slider Start -->
    </div>
</div>
<!-- Testimonial Area End -->

<!-- Brand area start -->

<!-- Brand area end -->

<!-- Footer Area Start -->
<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo/logo-white.png" alt=""></a>
                            </div>
                            <p class="about-text">Lorem ipsum dolor sit amet consectet adipisicing elit, sed do
                                eiusmod templ incididunt ut labore et dolore magnaol aliqua Ut enim ad minim.
                            </p>
                            <ul class="link-follow">
                                <li>
                                    <a class="m-0" title="Twitter" href="#"><i class="fa fa-twitter"
                                                                               aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a title="Tumblr" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Quick Links</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="#">Support
                                            </a></li>
                                        <li class="li"><a class="single-link" href="#">Helpline</a></li>
                                        <li class="li"><a class="single-link" href="#">Courses</a></li>
                                        <li class="li"><a class="single-link" href="about.html">About</a></li>
                                        <li class="li"><a class="single-link" href="#">Event</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Other Page</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="about.html"> About </a>
                                        </li>
                                        <li class="li"><a class="single-link" href="blog-grid.html">Blog</a></li>
                                        <li class="li"><a class="single-link" href="#">Speakers</a></li>
                                        <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                        <li class="li"><a class="single-link" href="#">Tricket</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Company</h4>
                            <div class="footer-links">
                                <div class="footer-row">
                                    <ul class="align-items-center">
                                        <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                        </li>
                                        <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                        <li class="li"><a class="single-link" href="contact.html">Contact us</a></li>
                                        <li class="li"><a class="single-link" href="login.html">Log in</a></li>
                                        <li class="li"><a class="single-link" href="#">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-4 col-lg-3 col-sm-6">
                        <div class="single-wedge">

                            <h4 class="footer-herading">Store Information.</h4>
                            <div class="footer-links">
                                <!-- News letter area -->
                                <p class="address">2005 Your Address Goes Here. <br>
                                    896, Address 10010, HGJ</p>
                                <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p>
                                <p class="mail">Email:<a href="mailto:demo@example.com">demo@example.com</a></p>
                                <img src="assets/images/icons/payment.png" alt="" class="payment-img img-fulid">

                                <!-- News letter area  End -->
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copy-text"> © 2023 <strong>Jesco</strong> Made With <i class="fa fa-heart"
                                                                                         aria-hidden="true"></i> By <a class="company-name" href="../../../hasthemes.com/index.html">
                                <strong> HasThemes</strong></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->

<!-- Search Modal Start -->
<div class="modal popup-search-style" id="searchActive">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Search Your Product</h2>
                    <form class="navbar-form position-relative" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                        <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- Login Modal Start -->
<div class="modal popup-login-style" id="loginActive">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-content">
                        <h2>Log in</h2>
                        <h3>Log in your account</h3>
                        <form action="#">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <div class="remember-forget-wrap">
                                <div class="remember-wrap">
                                    <input type="checkbox">
                                    <p>Remember</p>
                                    <span class="checkmark"></span>
                                </div>
                                <div class="forget-wrap">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <button type="button">Log in</button>
                            <div class="member-register">
                                <p> Not a member? <a href="login.html"> Register now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal End -->

<!-- Modal -->
<div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container zoom-thumbs mt-3 mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>Ardene Microfiber Tights</h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">$18.90</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 5 Customer Review
                                            )</a></span>
                            </div>
                            <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                eiusmod tempor incidi ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                laboris nisi
                                ut aliquip ex ea commodo </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart" href="#"> Add To
                                        Cart</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-compare">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>SKU: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Fashion.</a>
                                    </li>
                                    <li>
                                        <a href="#">eCommerce</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-social-info pro-details-same-style d-flex">
                                <span>Share: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->


<!-- Vendor JS -->
<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


<!-- Mirrored from htmldemo.net/jesco/jesco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 06:58:34 GMT -->
</html>
