@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-area position-relative z-1">
        <img src="assets/img/breadcrumb/br-dot-shape.png" alt="Shape"
            class="br-bg-shape position-absolute top-0 start-0 w-100 h-100 z-n1" />
        <img src="assets/img/top-zigzag-shape.svg" alt="Shape"
            class="br-top-shape position-absolute top-0 start-0 w-100 z-n1" />
        <img src="assets/img/bottom-zigzag-shape.svg" alt="Shape"
            class="br-bottom-shape position-absolute bottom-0 start-0 w-100 z-n1" />
        <div class="container style-one text-center">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img mb-sm-10">
                        <img src="assets/img/breadcrumb/br-img-7.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">
                        Our Menu
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Our Menu</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-8.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Menu Section Start -->
    <div class="container style-one pt-120 pb-90">
        <ul class="nav nav-tabs list-unstyled product-tablist style-one d-flex align-items-center justify-content-center w-100 mb-40"
            role="tablist">
            <li class="nav-item border-0">
                <button class="nav-link border-0 active" data-bs-toggle="tab" data-bs-target="#all" type="button"
                    role="tab">
                    All
                </button>
            </li>
            <li class="nav-item border-0">
                <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#cake" type="button" role="tab">
                    Cake
                </button>
            </li>
            <li class="nav-item border-0">
                <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#icecream" type="button"
                    role="tab">
                    Ice Cream
                </button>
            </li>
            <li class="nav-item border-0">
                <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#desserts" type="button"
                    role="tab">
                    Desserts
                </button>
            </li>
        </ul>
        <div class="tab-content product-tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 1) }}" class="text-title link-hover-primary transition">Confetti
                                        Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Confetti Cake is a cheerful
                                    classic bursting
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 2) }}" class="text-title link-hover-primary transition">Sponge
                                        Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Sponge Cake is a classic
                                    favorite that melts in your
                                    mouth
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Chocolate truffle</a>
                                </h3>
                                <p class="mb-0">
                                    Our Chocolate Truffle Cake is a
                                    decadent delight crafted
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}" class="text-title link-hover-primary transition">Honey
                                        cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Honey Cake is a timeless
                                    treat made with love and
                                    tradition
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Butterscotch Cake is a true
                                    classic that never goes out
                                    style
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 6) }}"
                                        class="text-title link-hover-primary transition">Blueberry Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Blueberry Cake is a
                                    refreshing twist on a classic
                                    favorite
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/icecream/product-3.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Cookies Cream</a>
                                </h3>
                                <p class="mb-0">
                                    Cookies’ Cream is the ultimate
                                    classic
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
                                <img src="assets/img/products/icecream/product-4.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                        class="text-title link-hover-primary transition">Pinapple Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Pineapple Sundae is a tropical
                                    escape in every bite
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
                                <img src="assets/img/products/icecream/product-1.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 2) }}"
                                        class="text-title link-hover-primary transition">Chocolate Ripple</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Ripple is a dream come
                                    true
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
                                <img src="assets/img/products/icecream/product-7.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Chocolate Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Sundae is the ultimate
                                    comfort dessert
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
                                <img src="assets/img/products/icecream/product-5.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Banana Split is a celebration in
                                    every scoop
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
                                <img src="assets/img/products/icecream/product-6.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 6) }}"
                                        class="text-title link-hover-primary transition">Regular Milkshake</a>
                                </h3>
                                <p class="mb-0">
                                    There’s nothing quite like the
                                    timeless charm
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cake" role="tabpanel">
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Confetti Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Confetti Cake is a cheerful
                                    classic bursting
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 2) }}" class="text-title link-hover-primary transition">Sponge
                                        Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Sponge Cake is a classic
                                    favorite that melts in your
                                    mouth
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Chocolate truffle</a>
                                </h3>
                                <p class="mb-0">
                                    Our Chocolate Truffle Cake is a
                                    decadent delight crafted
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}" class="text-title link-hover-primary transition">Honey
                                        cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Honey Cake is a timeless
                                    treat made with love and
                                    tradition
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Butterscotch Cake is a true
                                    classic that never goes out
                                    style
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 6) }}"
                                        class="text-title link-hover-primary transition">Blueberry Cake</a>
                                </h3>
                                <p class="mb-0">
                                    Our Blueberry Cake is a
                                    refreshing twist on a classic
                                    favorite
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="icecream" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div
                            class="menu-card style-one br-hover-one d-flex flex-wrap position-relative z-1 round-20 transition mb-30">
                            <div
                                class="menu-card-img bg-ash d-flex flex-column align-items-center justify-content-center rounded-circle">
                                <img src="assets/img/products/icecream/product-3.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 2) }}"
                                        class="text-title link-hover-primary transition">Cookies Cream</a>
                                </h3>
                                <p class="mb-0">
                                    Cookies’ Cream is the ultimate
                                    classic
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
                                <img src="assets/img/products/icecream/product-4.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                        class="text-title link-hover-primary transition">Pinapple Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Pineapple Sundae is a tropical
                                    escape in every bite
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
                                <img src="assets/img/products/icecream/product-1.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 1) }}"
                                        class="text-title link-hover-primary transition">Chocolate Ripple</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Ripple is a dream come
                                    true
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
                                <img src="assets/img/products/icecream/product-7.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 7) }}"
                                        class="text-title link-hover-primary transition">Chocolate Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Sundae is the ultimate
                                    comfort dessert
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
                                <img src="assets/img/products/icecream/product-5.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Banana Split is a celebration in
                                    every scoop
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
                                <img src="assets/img/products/icecream/product-6.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 6) }}"
                                        class="text-title link-hover-primary transition">Regular Milkshake</a>
                                </h3>
                                <p class="mb-0">
                                    There’s nothing quite like the
                                    timeless charm
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="desserts" role="tabpanel">
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Cookies Cream</a>
                                </h3>
                                <p class="mb-0">
                                    Cookies’ Cream is the ultimate
                                    classic
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                        class="text-title link-hover-primary transition">Pinapple Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Pineapple Sundae is a tropical
                                    escape in every bite
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 2) }}"
                                        class="text-title link-hover-primary transition">Chocolate Ripple</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Ripple is a dream come
                                    true
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                        class="text-title link-hover-primary transition">Chocolate Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Sundae is the ultimate
                                    comfort dessert
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
                                    <a href="{{ route('frontend.pages.shop.product-details', 1) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Banana Split is a celebration in
                                    every scoop
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
                                <img src="assets/img/products/icecream/product-3.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                        class="text-title link-hover-primary transition">Cookies Cream</a>
                                </h3>
                                <p class="mb-0">
                                    Cookies’ Cream is the ultimate
                                    classic
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
                                <img src="assets/img/products/icecream/product-4.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                        class="text-title link-hover-primary transition">Pinapple Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Pineapple Sundae is a tropical
                                    escape in every bite
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
                                <img src="assets/img/products/icecream/product-7.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 7) }}"
                                        class="text-title link-hover-primary transition">Chocolate Sundey</a>
                                </h3>
                                <p class="mb-0">
                                    Chocolate Sundae is the ultimate
                                    comfort dessert
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
                                <img src="assets/img/products/icecream/product-5.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                        class="text-title link-hover-primary transition">Butterscotch cake</a>
                                </h3>
                                <p class="mb-0">
                                    Banana Split is a celebration in
                                    every scoop
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
                                <img src="assets/img/products/icecream/product-6.png" alt="Image"
                                    class="d-block mx-auto" />
                            </div>
                            <div class="menu-card-info">
                                <h3 class="fs-24">
                                    <a href="{{ route('frontend.pages.shop.product-details', 6) }}"
                                        class="text-title link-hover-primary transition">Regular Milkshake</a>
                                </h3>
                                <p class="mb-0">
                                    There’s nothing quite like the
                                    timeless charm
                                </p>
                            </div>
                            <h6 class="menu-card-price fs-24 fw-light ms-md-auto mb-0">
                                $13.00
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Section End -->
@endsection
