<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/scrollcue.min.css" />
    <link rel="stylesheet" href="assets/css/remixicon.css" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/dark-theme.css" />

    <title>PinkBakery - Dessert & Gift Shop HTML Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>
    <!--  Preloader Start -->
    @include('frontend.home.components.preloader')
    <!--  Preloader End -->

    <!-- Theme Switcher Start -->
    @include('frontend.home.components.theme-switch')
    <!-- Theme Switcher End -->

    <!-- Custom Cursor -->
    @include('frontend.home.components.custom-cursor')
    <!-- Custom Cursor End -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Top Navbar Start-->
            <div class="navbar-top style-one bg-title">
                <div class="container style-one">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 text-lg-start text-center mb-lg-0 mb-2">
                            <p class="position-relative text-white d-inline-block text-lg-start text-center fs-15 mb-0">
                                <img src="assets/img/icons/clock-pink.svg" alt="Icon" />Monday To Friday : 10.00 Am
                                – 5.00 Pm
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center ps-xxl-5 mb-lg-0 mb-2">
                            <p class="position-relative text-white d-inline-block fs-15 mb-0 ms-xxl-5">
                                <img src="assets/img/icons/delivery-truck.svg" alt="Icon" />Free Delivery For Orders
                                Above ₹100!
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 mb-lg-0 mb-1">
                            <div
                                class="social-share d-flex flex-wrap align-items-center justify-content-lg-end justify-content-center">
                                <span class="fs-15 text-white">Follow Us:</span>
                                <ul class="social-profile style-six list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/?lang=en" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-instagram-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-linkedin-fill"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Navbar End-->

            <!-- Navbar Start -->
            <div class="navbar-area style-one position-relative" id="navbar">
                <div class="container style-one">
                    <div class="navbar-wrapper d-flex justify-content-between align-items-center">
                        <a href="index.html" class="navbar-brand">
                            <img src="assets/img/logo.png" alt="Logo" class="logo-light" />
                            <img src="assets/img/logo-white.png" alt="Logo" class="logo-dark" />
                        </a>
                        <div class="menu-area me-auto">
                            <div class="overlay"></div>
                            <nav class="menu">
                                <div class="menu-mobile-header">
                                    <button type="button" class="menu-mobile-arrow bg-transparent border-0">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </button>
                                    <div class="menu-mobile-title"></div>
                                    <button type="button" class="menu-mobile-close bg-transparent border-0">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                                <ul class="menu-section p-0 mb-0 lh-1">
                                    <li>
                                        <a href="{{ route('frontend.home.index') }}" class="active">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.home.index') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.home.index') }}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.home.index') }}">Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.home.index') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="other-options d-flex flex-wrap align-items-center justify-content-end">
                            <div class="option-item">
                                <ul class="option-list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <div class="mobile-options position-relative d-lg-none">
                                            <button
                                                class="dropdown-toggle text-center bg-transparent border-0 p-0 transition"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-centered mobile-option-list top-1 border-0"
                                                data-bs-popper="static">
                                                <a href="contact.html"
                                                    class="btn style-three position-relative z-1 round-10">Get In
                                                    Touch</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <button
                                            class="search-btn bg-transparent border-0 d-flex flex-wrap align-items-center dropdown-toggle text-center p-0 transition"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                            <img src="assets/img/icons/search-icon-large.svg" alt="Search Icon" />
                                        </button>
                                        <div class="search-dropdown dropdown-menu dropdown-menu-right top-1 border-0"
                                            data-bs-popper="static">
                                            <form class="search-popup position-relative" action="#">
                                                <input type="search" class="form-control text-para"
                                                    placeholder="Search Here...." />
                                                <button type="submit"
                                                    class="position-absolute top-0 end-0 h-100 border-0 bg-transparent d-flex flex-column align-items-center justify-content-center">
                                                    <i class="ri-search-2-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="my-account.html" class="user-btn">
                                            <img src="assets/img/icons/user-icon.svg" alt="User Icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="wishlist-btn position-relative">
                                            <img src="assets/img/icons/heart.svg" alt="Heart Icon" />
                                            <span
                                                class="fs-14 fw-normal position-absolute top-0 end-0 d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="cart-btn position-relative">
                                            <img src="assets/img/icons/bag-black.svg" alt="Search Icon" />
                                            <span
                                                class="fs-14 fw-normal position-absolute top-0 end-0 d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="option-item d-lg-block d-none">
                                <a href="contact.html" class="btn style-three position-relative z-1 round-10">Get In
                                    Touch</a>
                            </div>
                            <div class="option-item d-lg-none">
                                <button type="button" class="menu-mobile-trigger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar End -->

            <!-- Hero Section Start -->
            <section class="hero-area style-two bg-f position-relative z-1">
                <img src="assets/img/hero/shape-1.png" alt="Shape"
                    class="hero-shape-one position-absolute z-n1 animationFramesTwo">
                <img src="assets/img/hero/shape-2.png" alt="Shape"
                    class="hero-shape-two position-absolute z-n1 moveHorizontal">
                <img src="assets/img/hero/shape-3.png" alt="Shape"
                    class="hero-shape-three position-absolute z-n1 bounce">
                <div class="container style-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content mb-lg-30">
                                <h6 class="section-subtile fs-xxl-20 fw-light text_primary mb-6">The Store Yummy &
                                    Delicious</h6>
                                <h1>Happiness Served In Every Scoop</h1>
                                <p class="fs-xxl-18 pe-xl-5">There nothing quite like the joy of a scoop of handcrafted
                                    ice cream and at our shop we take that experience to the next level made in small
                                    batches with the finest</p>
                                <div class="btn-wrap d-flex flex-wrap align-items-center">
                                    <a href="menu.html" class="btn style-two position-relative z-1 round-10">Browse
                                        Our Menu</a>
                                    <a data-fslightbox="video1" href="https://www.youtube.com/watch?v=u31qwQUeGuM"
                                        class="play-btn style-one d-flex flex-wrap align-items-center transition">
                                        <span
                                            class="play-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                class="ri-play-large-fill"></i></span>
                                        <span class="text-title fw-bold play-text">Watch The Video</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-slider-wrap style-one d-flex flex-wrap align-items-center">
                                <div class="hero-slider-one swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="hero-slide-item">
                                                <img src="assets/img/hero/hero-slide-1.png" alt="Image"
                                                    class="d-block mx-auto">
                                                <div
                                                    class="product-card bg-white d-flex flex-wrap align-items-center round-20">
                                                    <div class="product-info">
                                                        <h3 class="fs-20 fw-light mb-1"><a href="product-details.html"
                                                                class="text-title link-hover-primary transition">Malt
                                                                Ice Cream</a></h3>
                                                        <span class="fs-xxl-18 d-block fw-medium">$14.00</span>
                                                    </div>
                                                    <button
                                                        class="add-to-cart border-0 bg_primary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                                            src="assets/img/icons/bag-pink.svg" alt="Icon"
                                                            class="transition"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hero-slide-item">
                                                <img src="assets/img/hero/hero-slide-2.png" alt="Image"
                                                    class="d-block mx-auto">
                                                <div
                                                    class="product-card style-six bg-white d-flex flex-wrap align-items-center round-20 mb-25">
                                                    <div class="product-info">
                                                        <h3 class="fs-20 fw-light mb-1"><a href="product-details.html"
                                                                class="text-title link-hover-primary transition">Fruit
                                                                Ice Cream</a></h3>
                                                        <span class="fs-xxl-18 d-block fw-medium">$18.00</span>
                                                    </div>
                                                    <button
                                                        class="add-to-cart d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                                            src="assets/img/icons/bag-pink.svg" alt="Icon"
                                                            class="transition"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hero-slide-item">
                                                <img src="assets/img/hero/hero-slide-3.png" alt="Image"
                                                    class="d-block mx-auto">
                                                <div
                                                    class="product-card style-six bg-white d-flex flex-wrap align-items-center round-20 mb-25">
                                                    <div class="product-info">
                                                        <h3 class="fs-20 fw-light mb-1"><a href="product-details.html"
                                                                class="text-title link-hover-primary transition">Baguette
                                                                Ice Cream</a></h3>
                                                        <span class="fs-xxl-18 d-block fw-medium">$12.00</span>
                                                    </div>
                                                    <button
                                                        class="add-to-cart d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                                            src="assets/img/icons/bag-pink.svg" alt="Icon"
                                                            class="transition"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper hero-thumbslider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div
                                                class="hero-thumb d-flex flex-column justify-content-center align-items-center rounded-circle bg-white">
                                                <img src="assets/img/hero/hero-slide-1.png" alt="Image"
                                                    class="d-block mx-auto">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="hero-thumb d-flex flex-column justify-content-center align-items-center rounded-circle bg-white">
                                                <img src="assets/img/hero/hero-slide-2.png" alt="Image"
                                                    class="d-block mx-auto">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="hero-thumb d-flex flex-column justify-content-center align-items-center rounded-circle bg-white">
                                                <img src="assets/img/hero/hero-slide-3.png" alt="Image"
                                                    class="d-block mx-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->

            <!-- Product Category Start -->
            <section class="category-area pt-120 pb-90">
                <div class="container style-one">
                    <h6 class="section-subtile fs-20 fw-light text_primary text-center mb-10">Shop By Category</h6>
                    <h2 class="section-title style-one fw-normal text-title text-center mb-45">Grab The Best Ice Cream
                    </h2>
                    <div
                        class="category-card-wrap style-one d-flex flex-wrap justify-content-xxl-between justify-content-center">
                        <div class="category-card style-one text-center mb-30">
                            <div class="category-img position-relative rounded-circle d-block mx-auto transition">
                                <img src="assets/img/category/gelato.jpg" alt="Image"
                                    class="rounded-circle transition">
                                <a href="shop-left-sidebar.html"
                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                            </div>
                            <h3 class="fs-24 fw-normal"><a href="shop-left-sidebar.html"
                                    class="text-title link-hover-primary">Vegan Gelato</a></h3>
                            <span>(10 Products)</span>
                        </div>
                        <div class="category-card style-one text-center mb-30">
                            <div class="category-img position-relative rounded-circle d-block mx-auto transition">
                                <img src="assets/img/category/icecream.jpg" alt="Image"
                                    class="rounded-circle transition">
                                <a href="shop-left-sidebar.html"
                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                            </div>
                            <h3 class="fs-24 fw-normal"><a href="shop-left-sidebar.html"
                                    class="text-title link-hover-primary transition">Ice Cream Bar</a></h3>
                            <span>(18 Products)</span>
                        </div>
                        <div class="category-card style-one text-center mb-30">
                            <div class="category-img position-relative rounded-circle d-block mx-auto transition">
                                <img src="assets/img/category/yogurt.jpg" alt="Image"
                                    class="rounded-circle transition">
                                <a href="shop-left-sidebar.html"
                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                            </div>
                            <h3 class="fs-24 fw-normal"><a href="shop-left-sidebar.html"
                                    class="text-title link-hover-primary transition">Frozen Yogurt</a></h3>
                            <span>(14 Products)</span>
                        </div>
                        <div class="category-card style-one text-center mb-30">
                            <div class="category-img position-relative rounded-circle d-block mx-auto transition">
                                <img src="assets/img/category/rolled-icecream.jpg" alt="Image"
                                    class="rounded-circle transition">
                                <a href="shop-left-sidebar.html"
                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                            </div>
                            <h3 class="fs-24 fw-normal"><a href="shop-left-sidebar.html"
                                    class="text-title link-hover-primary transition">Rolled Ice Cream</a></h3>
                            <span>(12 Products)</span>
                        </div>
                        <div class="category-card style-one text-center mb-30">
                            <div class="category-img position-relative rounded-circle d-block mx-auto transition">
                                <img src="assets/img/category/banana-iceream.jpg" alt="Image"
                                    class="rounded-circle transition">
                                <a href="shop-left-sidebar.html"
                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                            </div>
                            <h3 class="fs-24 fw-normal"><a href="shop-left-sidebar.html"
                                    class="text-title link-hover-primary transition">Banana Split</a></h3>
                            <span>(11 Products)</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Section End -->


            <!-- Featured Product Start -->
            <section class="featured-product-area pb-90">
                <div class="container style-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="featured-product style-one bg-1 position-relative z-1 d-flex flex-wrap align-items-center round-30 mb-30">
                                <div class="featured-product-info">
                                    <h6 class="font-primary fw-medium fs-16 text_primary mb-8">
                                        Delicious
                                    </h6>
                                    <h3 class="text-title fw-normal">
                                        Super Sale
                                    </h3>
                                    <p class="fs-xxl-18 mb-35">
                                        Smooth & creamy texture low in
                                        calories
                                    </p>
                                    <a href="product-details.html"
                                        class="btn style-three position-relative z-1 round-10">Order Now</a>
                                </div>
                                <div class="featured-product-img position-relative z-1">
                                    <img src="assets/img/products/cake/featured-product-1.png" alt="Image"
                                        class="position-relative transition" />
                                    <span
                                        class="discounted-price text-white d-flex flex-column align-items-center justify-content-center position-absolute"><b
                                            class="fw-semibold bold d-block">$8 </b>only</span>
                                </div>
                                <img src="assets/img/products/shape-1.png" alt="Shape"
                                    class="featured-shape position-absolute z-n1" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div
                                class="featured-product style-one bg-2 position-relative z-1 d-flex flex-wrap align-items-center round-30 mb-30">
                                <div class="featured-product-info">
                                    <h6 class="font-primary fw-medum fs-16 text_primary mb-1">
                                        Free Delivery
                                    </h6>
                                    <h3 class="text-title fw-normal">
                                        Order Now
                                    </h3>
                                    <p class="fs-xxl-18 mb-30">
                                        Find your favorite flavors at a cake
                                        Shop
                                    </p>
                                    <a href="product-details.html"
                                        class="btn style-three position-relative z-1 round-10">Order Now</a>
                                </div>
                                <div class="featured-product-img position-relative z-1">
                                    <img src="assets/img/products/cake/featured-product-2.png" alt="Image"
                                        class="position-relative transition" />
                                    <span
                                        class="discounted-price text-white d-flex flex-column align-items-center justify-content-center position-absolute"><b
                                            class="fw-semibold bold d-block">$5 </b>only</span>
                                </div>
                                <img src="assets/img/products/shape-2.png" alt="Shape"
                                    class="featured-shape position-absolute z-n1" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Featured Product End -->

            <!-- About Section Start -->
            <section class="about-area style-three position-relative z-1 pb-120">
                <div class="container style-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img-wrap position-relative mb-md-30">
                                <div class="about-img-one d-inline-block round-20">
                                    <img src="assets/img/about/about-img-3.jpg" alt="Image" class="round-20">
                                </div>
                                <div class="about-img-two d-inline-block position-absolute round-20">
                                    <img src="assets/img/about/about-img-4.jpg" alt="Image" class="round-20">
                                </div>
                                <div
                                    class="circle-text-wrap position-absolute bg-white d-flex flex-column align-items-center justify-content-center rounded-circle">
                                    <img src="assets/img/about/award-winning-company-2.svg" alt="Text Image"
                                        class="circle-text rotate d-block mx-auto">
                                    <img src="assets/img/about/fav-icon.png" alt="Favicon"
                                        class="fav-icon position-absolute top-50 start-50">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-xxl-4 ps-xl-4">
                            <div class="about-content">
                                <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">About PinkBakery</h6>
                                <h2 class="section-title style-one fw-normal text-title mb-15">We Are Here Different
                                    From Other Shops</h2>
                                <p>From locally made crafts and delicious treats to stylish accessories and unique
                                    treasures collection is designed to make giving feel just as good as receiving come
                                    explore and let us help</p>
                                <ul class="feature-list style-one d-flex flex-wrap list-unstyled mb-18">
                                    <li class="position-relative font-secondary fw-normal fs-xxl-18 text-title"><img
                                            src="assets/img/icons/badge-violet.svg" alt="Icon">The atmosphere is
                                        perfect</li>
                                    <li class="position-relative font-secondary fw-normal fs-xxl-18 text-title"><img
                                            src="assets/img/icons/badge-violet.svg" alt="Icon">We offer something
                                        unique</li>
                                </ul>
                                <div class="counter-card-wrap d-flex flex-wrap justify-content-between round-15 mb-45">
                                    <div class="counter-card style-one position-relative mb-25">
                                        <h4 class="fw-normal fs-36 text-title mb-10"><span
                                                class="transition">50</span>+</h4>
                                        <p class="fs-xxl-18 fw-normal d-block mb-0">Team Members</p>
                                    </div>
                                    <div class="counter-card style-one position-relative mb-25">
                                        <h4 class="fw-normal fs-36 text-title mb-10"><span
                                                class="transition">38</span>+</h4>
                                        <p class="fs-xxl-18 fw-normal d-block mb-0">World Outlet</p>
                                    </div>
                                    <div class="counter-card style-one position-relative mb-25">
                                        <h4 class="fw-normal fs-36 text-title mb-10"><span
                                                class="transition">100</span>%</h4>
                                        <p class="fs-xxl-18 fw-normal d-block mb-0">Customer Satisfaction</p>
                                    </div>
                                </div>
                                <a href="about.html" class="btn style-two position-relative z-1 round-10">More About
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

            <!-- Scrolling Text Start -->
            <div class="move-text-wrapper overflow-hidden mb-120">
                <div class="move-text style-one position-relative z-1">
                    <ul class="d-flex align-items-center list-unstyled mb-0">
                        <li class="font-secondary text-title">
                            Best Quality Food
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-10.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Natural Ingredients
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-11.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Crafted With Love
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-12.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Gourmet Treats
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-13.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Perfect Bites
                        </li>
                        <li class="font-secondary text-title">
                            Best Quality Food
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-10.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Natural Ingredients
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-11.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Crafted With Love
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-12.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Gourmet Treats
                        </li>
                        <li>
                            <img src="assets/img/products/cake/product-thumb-13.png" alt="Image" />
                        </li>
                        <li class="font-secondary text-title">
                            Perfect Bites
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Scrolling Text End -->

            <!-- Offer Section Start -->
            <div class="container style-one">
                <div class="offer-area style-two bg-f position-relative z-1 round-30">
                    <img src="assets/img/discount/discount-product-3.png" alt="Image" class="offer-img-one z-n1">
                    <div class="container text-center">
                        <h6 class="section-subtile fs-20 fw-light text_primary mb-10">Something For Everyone</h6>
                        <h2 class="section-title style-one fw-normal text-title mb-15">All The Flavors Of PinkBakery
                        </h2>
                        <p class="fs-xxl-18 text-center text-title mb-30">We make unforgettable crave worthy flavors
                            that bring people together</p>
                        <div class="countdown style-two position-relative z-1 d-flex flex-wrap justify-content-center"
                            data-countdown="2026/1/31"></div>
                        <a href="shop-left-sidebar.html" class="btn style-three position-relative z-1 round-10">Shop
                            Flavours Now</a>
                    </div>
                    <div class="offer-img-two position-absolute bottom-0 end-0 z-n1">
                        <span
                            class="discounted-price text-white d-flex flex-column align-items-center justify-content-center position-absolute"><b
                                class="fw-semibold bold d-block">$4</b>only</span>
                        <img src="assets/img/discount/discount-product-4.png" alt="Image">
                    </div>
                </div>
            </div>
            <!-- Offer Section End -->

            <!-- Filter Product Section Start -->
            <div class="container style-one pt-120 pb-90">
                <h6 class="section-subtile fs-20 fw-light text_primary text-center mb-10">
                    We Create Magic
                </h6>
                <h2 class="section-title style-one fw-normal text-title text-center mb-35">
                    Spreading Happiness Through Cake
                </h2>
                <ul class="nav nav-tabs list-unstyled product-tablist style-one d-flex align-items-center justify-content-center w-100 mb-40"
                    role="tablist">
                    <li class="nav-item border-0">
                        <button class="nav-link border-0 active" data-bs-toggle="tab" data-bs-target="#top_seller"
                            type="button" role="tab">
                            Top Seller
                        </button>
                    </li>
                    <li class="nav-item border-0">
                        <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#trending"
                            type="button" role="tab">
                            Trending
                        </button>
                    </li>
                    <li class="nav-item border-0">
                        <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#new_product"
                            type="button" role="tab">
                            New Products
                        </button>
                    </li>
                </ul>
                <div class="tab-content product-tab-content">
                    <div class="tab-pane fade show active" id="top_seller" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-7.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Birthday
                                            Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-8.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Blue
                                            Light Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$40.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-9.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Sweet
                                            Bread Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-10.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Spider
                                            Vanila Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-11.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Meringue
                                            Soft Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$50.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-12.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Black
                                            Forest Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$20.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-13.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Choco
                                            Cream Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$90.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-14.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Brownie
                                            Sponge Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$80.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="trending" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-9.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Sweet
                                            Bread Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-10.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Spider
                                            Vanila Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-11.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Meringue
                                            Soft Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$50.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-12.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Black
                                            Forest Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$20.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-13.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Choco
                                            Cream Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$90.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-14.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Brownie
                                            Sponge Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$80.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="new_product" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-11.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Meringue
                                            Soft Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$50.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-12.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Black
                                            Forest Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$20.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-13.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Choco
                                            Cream Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$90.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-14.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Brownie
                                            Sponge Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$80.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-7.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Birthday
                                            Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-8.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Blue
                                            Light Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$40.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-9.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Sweet
                                            Bread Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div
                                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                                    <div
                                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                                        <img src="assets/img/products/cake/product-10.png" alt="Product Image"
                                            class="d-block mx-auto" />
                                    </div>
                                    <ul class="rating list-unstyled mb-15">
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                        <li>
                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                        </li>
                                    </ul>
                                    <h3 class="fs-24">
                                        <a href="product-details.html" class="text-title link-hover-primary">Spider
                                            Vanila Cake</a>
                                    </h3>
                                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                                    <a href="cart.html" class="btn style-four position-relative z-1 round-10">Add To
                                        Cart</a>
                                    <button
                                        class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter Product Section End -->

            <!-- Why Choose Us Start -->
            <section class="wh-area style-one pb-120">
                <div class="container style-one">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-lg-6 pe-xxl-0 order-lg-1 order-2">
                            <div class="wh-content">
                                <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">
                                    Why Choose PinkBakery
                                </h6>
                                <h2 class="section-title style-one fw-normal text-title mb-15">
                                    Discover The Exceptional Quality And
                                    Care
                                </h2>
                                <p class="mb-40">
                                    From elegant wedding cakes and fun
                                    birthday designs to everyday treats that
                                    brighten your day occasion or simply
                                    craving something sweet our cakes are
                                    crafted to delight
                                </p>
                                <div class="row mb-20">
                                    <div class="col-md-6">
                                        <div class="feature-card style-one mb-25">
                                            <img src="assets/img/icons/hygiene.svg" alt="Icon"
                                                class="feature-icon d-block mb-25" />
                                            <h3 class="fs-24 fw-normal mb-15">
                                                Hygienic Process
                                            </h3>
                                            <p class="mb-25">
                                                Step into our bakery and let
                                                the aroma of fresh bakes and
                                                the charm bake
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-xxl-5">
                                        <div class="feature-card style-one mb-25">
                                            <img src="assets/img/icons/equipment.svg" alt="Icon"
                                                class="feature-icon d-block mb-25" />
                                            <h3 class="fs-24 fw-normal mb-15">
                                                Modern Equipment
                                            </h3>
                                            <p class="mb-25">
                                                Our skilled bakers and
                                                decorators bring your vision
                                                to life using the freshest
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="about.html" class="btn style-one position-relative z-1 round-10">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xxl-6 offset-xxl-1 col-lg-6 order-lg-2 order-1 mb-md-30">
                            <div class="wh-img-wrap position-relative z-1 overflow-hidden">
                                <span class="corner-shape-right position-absolute"></span>
                                <img src="assets/img/about/wh-img-1.jpg" alt="Image" />
                                <ul class="feature-list list-unstyled position-absolute mb-0 text-end z-1">
                                    <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                        Exceptional Services
                                    </li>
                                    <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                        Wake Up Experience
                                    </li>
                                    <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                        Fresh Food Quality
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose Us End -->

            <!-- Menu Section Start -->
            <div class="container style-one pb-90">
                <h6 class="section-subtitle fs-20 fw-light text_primary text-center mb-10">
                    Cake Menu
                </h6>
                <h2 class="section-title style-one fw-normal text-title text-center mb-45">
                    Choose And Order Now
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-1.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Confetti Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Confetti Cake is a cheerful classic
                                    bursting
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $10.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-2.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Sponge Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Sponge Cake is a classic favorite
                                    that melts in your mouth
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $18.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-3.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Chocolate truffle</a>
                                </h3>
                                <p class="mb-0">
                                    Our Chocolate Truffle Cake is a decadent
                                    delight crafted
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $12.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-4.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Honey cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Honey Cake is a timeless treat made
                                    with love and tradition
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $14.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-5.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Butterscotch Cake is a true classic
                                    that never goes out style
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $15.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/cake/product-thumb-6.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="product-details.html"
                                        class="text-title link-hover-primary transition">Blueberry Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Blueberry Cake is a refreshing twist
                                    on a classic favorite
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Section End -->

            <!-- Testimonial Section Start -->
            <div class="testimonial-area style-one position-relative z-1 ptb-120">
                <img src="assets/img/top-zigzag-shape.svg" alt="Shape"
                    class="top-shape position-absolute top-0 start-0 w-100 z-n1" />
                <img src="assets/img/bottom-zigzag-shape.svg" alt="Shape"
                    class="bottom-shape position-absolute bottom-0 start-0 w-100 z-n1" />
                <img src="assets/img/dot-shape-3.png" alt="Shape"
                    class="bg-shape position-absolute top-0 start-0 w-100 h-100 z-n1" />
                <div class="container style-one">
                    <div class="row">
                        <div class="col-xl-4 col-md-9">
                            <div class="testimonial-content mb-lg-30">
                                <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">
                                    Testimonials
                                </h6>
                                <h2 class="section-title style-one fw-normal text-title mb-15 pe-xxl-5">
                                    Genuine Feedback From Clients
                                </h2>
                                <p class="mb-40 me-xxl-4">
                                    Our cakes are made to bring joy to every
                                    occasion step into bakery and let the
                                    aroma of fresh bakes and the charm
                                    handcrafted
                                </p>
                                <a href="testimonials.html"
                                    class="btn style-three position-relative z-1 round-10 me-4 mb-lg-15">View All
                                    Testimonial</a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="testimonial-slider-one swiper position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div
                                            class="testimonial-card style-one bg-white d-flex flex-wrap align-items-center round-20">
                                            <div class="client-img round-15">
                                                <img src="assets/img/clients/client-11.jpg" alt="Image"
                                                    class="round-15" />
                                            </div>
                                            <div class="client-quote-wrap">
                                                <div
                                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center">
                                                    <ul class="rating list-unstyled lh-1">
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                    </ul>
                                                    <h5 class="fs-24 fw-normal text-title">
                                                        Sweet & Delicious!
                                                    </h5>
                                                </div>
                                                <p class="fs-xxl-18 mb-20">
                                                    "I have been a loyal
                                                    customer of this bakery
                                                    for over two years, and
                                                    I can honestly say that
                                                    they have never
                                                    disappointed me! From
                                                    simple cupcakes to
                                                    elaborate custom cakes
                                                    for special events,
                                                    every single order has
                                                    been an absolute treat
                                                    for my son’s birthday
                                                    this year.”
                                                </p>
                                                <div class="client-info-wrap">
                                                    <div class="client-info">
                                                        <h5 class="fs-22 mb-6">
                                                            Richard Frank
                                                        </h5>
                                                        <span>Businessman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="testimonial-card style-one bg-white d-flex flex-wrap align-items-center round-20">
                                            <div class="client-img round-15">
                                                <img src="assets/img/clients/client-12.jpg" alt="Image"
                                                    class="round-15" />
                                            </div>
                                            <div class="client-quote-wrap">
                                                <div
                                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center">
                                                    <ul class="rating list-unstyled lh-1">
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                    </ul>
                                                    <h5 class="fs-24 fw-normal text-title">
                                                        Awesome Taste!
                                                    </h5>
                                                </div>
                                                <p class="fs-xxl-18 mb-20">
                                                    "From the moment I
                                                    walked in I could tell
                                                    this ice cream shop was
                                                    special. The interior is
                                                    cozy and fun the staff
                                                    is welcoming and the
                                                    aroma of freshly made
                                                    waffle cones is heavenly
                                                    I had their Hot Fudge
                                                    Sundae and it was
                                                    perfection warm rich.”
                                                </p>
                                                <div class="client-info-wrap">
                                                    <div class="client-info">
                                                        <h5 class="fs-22 mb-6">
                                                            Ben Chisholm
                                                        </h5>
                                                        <span>CEO &
                                                            Co-Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="testimonial-card style-one bg-white d-flex flex-wrap align-items-center round-20">
                                            <div class="client-img round-15">
                                                <img src="assets/img/clients/client-13.jpg" alt="Image"
                                                    class="round-15" />
                                            </div>
                                            <div class="client-quote-wrap">
                                                <div
                                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center">
                                                    <ul class="rating list-unstyled lh-1">
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                        <li>
                                                            <img src="assets/img/icons/star-1.svg" alt="Icon" />
                                                        </li>
                                                    </ul>
                                                    <h5 class="fs-24 fw-normal text-title">
                                                        Sweet & Delicious!
                                                    </h5>
                                                </div>
                                                <p class="fs-xxl-18 mb-20">
                                                    "From simple cupcakes to
                                                    elaborate custom cakes
                                                    for special events,
                                                    every single order has
                                                    been an absolute treat
                                                    for my son’s birthday
                                                    this year. I have been a
                                                    loyal customer of this
                                                    bakery for over two
                                                    years, and I can
                                                    honestly say that they
                                                    have never disappointed
                                                    me! ”
                                                </p>
                                                <div class="client-info-wrap">
                                                    <div class="client-info">
                                                        <h5 class="fs-22 mb-6">
                                                            Josef Herring
                                                        </h5>
                                                        <span>Businessman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-pagination slider-pagination style-one"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Team Section Start -->
            <div class="container style-one pt-120 pb-90">
                <h6 class="section-subtitle fs-20 fw-light text_primary text-center mb-10">
                    Bakers Team
                </h6>
                <h2 class="section-title style-one fw-normal text-title text-center mb-45">
                    Meet Our Leadership Team
                </h2>
                <div class="row justify-content-center gx-xxl-18">
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div
                            class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                            <div class="team-img rounded-circle d-block mx-auto transition">
                                <img src="assets/img/team/team-1.jpg" alt="Image"
                                    class="rounded-circle transition" />
                            </div>
                            <h3 class="fs-24 fw-normal text-title">
                                Marianne Colon
                            </h3>
                            <span class="d-block">Pastry Chef</span>
                            <ul class="social-profile style-seven list-unstyled mb-0">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/?lang=en" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-twitter-x-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div
                            class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                            <div class="team-img rounded-circle d-block mx-auto transition">
                                <img src="assets/img/team/team-2.jpg" alt="Image"
                                    class="rounded-circle transition" />
                            </div>
                            <h3 class="fs-24 fw-normal text-title">
                                Charles Driscoll
                            </h3>
                            <span class="d-block">Cake Decorator</span>
                            <ul class="social-profile style-seven list-unstyled mb-0">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/?lang=en" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-twitter-x-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div
                            class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                            <div class="team-img rounded-circle d-block mx-auto transition">
                                <img src="assets/img/team/team-3.jpg" alt="Image"
                                    class="rounded-circle transition" />
                            </div>
                            <h3 class="fs-24 fw-normal text-title">
                                Philip Nicholson
                            </h3>
                            <span class="d-block">Bakery Chef</span>
                            <ul class="social-profile style-seven list-unstyled mb-0">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/?lang=en" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-twitter-x-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div
                            class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                            <div class="team-img rounded-circle d-block mx-auto transition">
                                <img src="assets/img/team/team-4.jpg" alt="Image"
                                    class="rounded-circle transition" />
                            </div>
                            <h3 class="fs-24 fw-normal text-title">
                                George Stromain
                            </h3>
                            <span class="d-block">Cake Maker</span>
                            <ul class="social-profile style-seven list-unstyled mb-0">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/?lang=en" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-twitter-x-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Section End -->

            <!-- Newsletter Section Start -->
            <div class="container style-one">
                <div class="newsletter-box style-one position-relative overflow-hidden z-1 round-30">
                    <img src="assets/img/dot-shape-3.png" alt="Shape"
                        class="dot-shape position-absolute top-0 start-0 w-100 h-100 z-n1" />
                    <img src="assets/img/newsletter-shape-1.png" alt="Image"
                        class="shape-one position-absolute z-n1" />
                    <div class="row">
                        <div
                            class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-10 offset-md-1 text-center px-xxl-5">
                            <h6 class="section-subtile fs-20 fw-light text_primary mb-10">
                                Newsletter
                            </h6>
                            <h2 class="section-title style-one fw-normal text-title mb-45">
                                Sign Up For Exclusive Deals And Updates
                            </h2>
                            <form action="#" class="newsletter-form style-one position-relative">
                                <input type="email"
                                    class="w-100 bg-white fw-light border-0 round-10 text-para outline-0"
                                    placeholder="Enter Your Email" />
                                <button class="btn style-three z-1 round-10">
                                    Subscribe Now
                                </button>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/newsletter-shape-2.png" alt="Image"
                        class="shape-two position-absolute bottom-0 end-0 z-n1" />
                </div>
            </div>
            <!-- Newsletter Section End -->

            <!-- Blog Section Start -->
            <div class="container style-one pt-120 pb-90">
                <div class="row">
                    <div class="col-xl-4 col-md-12 mb-lg-30">
                        <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">
                            Latest News
                        </h6>
                        <h2 class="section-title style-one fw-normal text-title mb-15">
                            Tips From Latest News & Blog
                        </h2>
                        <p class="mb-40">
                            Each bite offers a burst of fruity flavor and a
                            touch of elegance it an ideal choice for spring
                            celebrations brunches crave
                        </p>
                        <a href="blog-left-sidebar.html" class="btn style-two position-relative z-1 round-10">View
                            All News</a>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-1.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-1.jpg" alt="Image"
                                    class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="posts-by-date.html">01 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="blog-details-right-sidebar.html"
                                    class="text-title link-hover-secondary transition">The Art Of Custom Cakes How We
                                    Bring
                                    Sweetest Ideas To Life</a>
                            </h3>
                            <a href="blog-details-right-sidebar.html"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-2.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-2.jpg" alt="Image"
                                    class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="posts-by-date.html">17 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="blog-details-right-sidebar.html"
                                    class="text-title link-hover-secondary transition">Baking with Love The Secret
                                    Love Our
                                    Signature Flavors</a>
                            </h3>
                            <a href="blog-details-right-sidebar.html"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Footer Section Start -->
                <footer class="footer-area style-two position-relative z-1">
                    <div class="footer-top bg-f position-relative z-1 pt-120">
                        <div class="container style-one pb-90">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-5 pe-xxl-5 mb-lg-20">
                                    <h2 class="section-title style-one me-xxl-4 mb-0">Sign Up For Exclusive Deals & Latest Updates</h2>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <form action="#" class="newsletter-form style-one position-relative">
                                        <input type="email" class="w-100 bg-white border-0 round-10 text-para outline-0" placeholder="Enter Your Email">
                                        <button class="btn style-three z-1 round-10">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row pt-120">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 pe-xxl-1">
                                    <div class="footer-widget mb-30">
                                        <a href="index.html" class="logo d-block mb-40">
                                            <img src="assets/img/logo.png" alt="Logo" class="logo-light">
                                            <img src="assets/img/logo-white.png" alt="Logo" class="logo-dark">
                                        </a>
                                        <ul class="social-profile style-five list-unstyled mb-0">
                                            <li><a href="https://www.facebook.com/" target="_blank" class="d-flex flex-wrap align-items-center"><span class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-facebook-fill"></i></span><span class="social-linkname">Facebook</span></a></li>
                                            <li><a href="https://x.com/?lang=en" target="_blank" class="d-flex flex-wrap align-items-center"><span class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-twitter-x-line"></i></span><span class="social-linkname">Twitter</span></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank" class="d-flex flex-wrap align-items-center"><span class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-instagram-line"></i></span><span class="social-linkname">Instagram</span></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank" class="d-flex flex-wrap align-items-center"><span class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-linkedin-fill"></i></span><span class="social-linkname">Linkedin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-6 ps-xxl-5">
                                    <div class="footer-widget mb-30 ps-xxl-5">
                                        <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">Categories</h3>
                                        <ul class="footer-menu list-unstyled mb-0">
                                            <li><a href="shop-left-sidebar.html" class="link style-two">Gelato</a></li>
                                            <li><a href="shop-left-sidebar.html" class="link style-two">kulfi</a></li>
                                            <li><a href="shop-left-sidebar.html" class="link style-two">Sherbet</a></li>
                                            <li><a href="shop-left-sidebar.html" class="link style-two">Frozen Yogurt</a></li>
                                            <li><a href="shop-left-sidebar.html" class="link style-two">Sorbet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 ps-xxl-60">
                                    <div class="footer-widget mb-30">
                                       <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">Useful Links</h3>
                                        <ul class="footer-menu list-unstyled mb-0">
                                            <li><a href="contact.html" class="link style-two">Contact us</a></li>
                                            <li><a href="testimonials.html" class="link style-two">Customer Feedback</a></li>
                                            <li><a href="team.html" class="link style-two">Professional Team</a></li>
                                            <li><a href="menu.html" class="link style-two">Ice Cream Menu</a></li>
                                            <li><a href="blog-left-sidebar.html" class="link style-two">Latest News & Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 ps-xxl-5">
                                    <div class="footer-widget mb-30">
                                        <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">Get In Touch</h3>
                                        <ul class="contact-info list-unstyled mb-0">
                                            <li class="position-relative">
                                                <img src="assets/img/icons/pin-small.svg" alt="Icon">
                                                <h6 class="font-primary fw-bold fs-18 text-title mb-6">Location</h6>
                                                <p class="text-title mb-0">Madison Street Baltimore, NY 4508, USA</p>
                                            </li>
                                            <li class="position-relative">
                                                <img src="assets/img/icons/mail-small.svg" alt="Icon">
                                                <h6 class="font-primary fw-bold fs-18 text-title mb-6">Email</h6>
                                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#345c5158585b74445d5a5f56555f51464d1a575b59" class="link style-two fw-normal"><span class="__cf_email__" data-cfemail="dcb4b9b0b0b39cacb5b2b7bebdb7b9aea5f2bfb3b1">[email&#160;protected]</span></a>
                                            </li>
                                            <li class="position-relative">
                                                <img src="assets/img/icons/phone-small.svg" alt="Icon">
                                                <h6 class="font-primary fw-bold fs-18 text-title mb-6">Phone</h6>
                                                <a href="tel:000123456780" class="link style-two fw-normal">+00 (0) 123 456 780</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom position-relative bg-title z-1">
                        <div class="container style-one">
                            <div class="row">
                                <div class="col-md-7">
                                     <p class="copyright-text text-white text-md-start text-center mb-0"><i class="ri-copyright-line"></i><span class="text-white fw-medium">PinkBakery</span> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank" class="text-white hover-text-secondary fw-semibold">HiBootstrap</a></p>
                                </div>
                                <div class="col-md-5">
                                    <ul class="footer-bottom-menu list-unstyled text-lg-end text-center mb-0">
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer End -->
        </div>
    </div>
    <!-- Back to Top -->
    <div id="progress-wrap" class="progress-wrap style-one">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Popup Newsletter start-->
    <!-- change image in style.css on line 3680 -->
    <div id="popup-overlay"></div>
    <div id="newsletter-popup">
        <button class="close-btn"><i class="ri-close-line"></i></button>
        <div class="newsletter-body d-flex flex-wrap align-items-center">
            <div class="newsletter-bg bg-f"></div>
            <div class="newsletter-content">
                <h3 class="fs-24 mb-15">Subscribe To Our Newsletter</h3>
                <p class="mb-20">
                    Sign up for our newsletter to latest weekly updates &
                    news
                </p>
                <form action="#" class="newsletter-form">
                    <input type="email" class="w-100 bg-ash border-0 round-10 text-para ht-56 outline-0"
                        placeholder="Enter your email" />
                    <button class="btn style-two d-block w-100 position-relative z-1 round-10">
                        Subscribe
                    </button>
                    <div class="form-check checkbox style-two mt-3">
                        <input class="form-check-input" type="checkbox" id="dont-show-again" />
                        <label class="form-check-label text-para" for="dont-show-again">
                            Don’t Show This Popup Again
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/megamenu.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/fslightbox.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/scrollTrigger.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <script src="assets/js/scrollToPlugin.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/customEase.js"></script>
    <script src="assets/js/scrollcue.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
