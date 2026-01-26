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
                        <img src="assets/img/breadcrumb/br-img-3.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">Shop</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-4.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Details Start -->
    <div class="container style-one pt-120 pb-90">
        <div class="row align-items-center mb-20">
            <div class="col-xl-6 col-lg-4 col-md-4">
                <p class="fs-xx-14 text-para mb-20">
                    Showing 1 - 12 of 60 results
                </p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <form action="#" class="search-form style-one position-relative mb-20">
                    <input type="search" placeholder="Search" class="w-100 ht-60 border-0 round-10 text-para outline-0" />
                    <button class="position-absolute top-0 start-0 h-100 bg-transparent border-0 transition">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <select class="filter-product mb-20 w-100 ht-60 round-10 text-para">
                    <option value="1">Default Sorting</option>
                    <option value="2">Price : high to low</option>
                    <option value="3">Price : low to high</option>
                    <option value="4">Recently added</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-7.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 1) }}" class="text-title link-hover-primary">Birthday Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-8.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 2) }}" class="text-title link-hover-primary">Blue Light Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$40.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-9.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 3) }}" class="text-title link-hover-primary">Sweet Bread Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-10.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 4) }}" class="text-title link-hover-primary">Spider Vanila Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-11.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 5) }}" class="text-title link-hover-primary">Meringue Soft Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$50.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-12.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 6) }}" class="text-title link-hover-primary">Black Forest Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$20.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-13.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 7) }}" class="text-title link-hover-primary">Choco Cream Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$90.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-14.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 8) }}" class="text-title link-hover-primary">Brownie Sponge Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$80.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-15.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 9) }}" class="text-title link-hover-primary">Medeline Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$30.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-16.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 10) }}" class="text-title link-hover-primary">Grilled Cheese Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$20.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-17.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 11) }}" class="text-title link-hover-primary">Buttermilk Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$90.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 mb-30 transition">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-18.png" alt="Product Image" class="d-block mx-auto" />
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
                        <a href="{{ route('frontend.pages.shop.product-details', 12) }}" class="text-title link-hover-primary">Strawberry Cake</a>
                    </h3>
                    <span class="product-price fs-xxl-18 d-block">$80.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle">
                        <i class="ri-heart-line"></i>
                    </button>
                </div>
            </div>
        </div>
        <ul class="page-nav pagination justify-content-center mb-0 mt-4">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.shop.menu') }}" aria-label="Previous">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="{{ route('frontend.pages.shop.menu') }}">1</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.shop.menu') }}">2</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.shop.menu') }}">3</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.shop.menu') }}" aria-label="Next">
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Shop Details End -->
@endsection
