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
                        Wishlist
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Wishlist</li>
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

    <!-- Cart Section Start -->
    <div class="container style-one ptb-120">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
                <div class="cart-table table-responsive mb-15">
                    <table class="table text-nowrap align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">
                                    Product
                                </th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Stock Status</th>
                                <th scope="col">Action</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-item d-flex flex-wrap align-items-center">
                                        <div class="product-img bg-ash round-10">
                                            <img src="assets/img/products/cake/product-7.png" alt="Image" />
                                        </div>
                                        <div class="product-info">
                                            <h3 class="fs-18 fw-normal">
                                                <a href="{{ route('frontend.pages.shop.product-details', 1) }}"
                                                    class="text-title hover-text-primary transition">Birthday
                                                    Cake</a>
                                            </h3>
                                            <ul class="rating d-flex flex-wrap list-unstyled mb-0">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-half-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$70.00</span>
                                </td>
                                <td class="text-center">
                                    <span class="product-availability text-success">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn style-two position-relative z-1 round-10">
                                        Add To Cart
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="cart-action bg-transparent border-0 p-0" type="button">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item d-flex flex-wrap align-items-center">
                                        <div class="product-img bg-ash round-10">
                                            <img src="assets/img/products/cake/product-8.png" alt="Image" />
                                        </div>
                                        <div class="product-info">
                                            <h3 class="fs-18 fw-normal">
                                                <a href="{{ route('frontend.pages.shop.product-details', 2) }}"
                                                    class="text-title hover-text-primary transition">Blue Light
                                                    Cake</a>
                                            </h3>
                                            <ul class="rating d-flex flex-wrap list-unstyled mb-0">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-half-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$40.00</span>
                                </td>
                                <td class="text-center">
                                    <span class="product-availability text-success">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn style-two position-relative z-1 round-10">
                                        Add To Cart
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="cart-action bg-transparent border-0 p-0" type="button">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item d-flex flex-wrap align-items-center">
                                        <div class="product-img bg-ash round-10">
                                            <img src="assets/img/products/cake/product-9.png" alt="Image" />
                                        </div>
                                        <div class="product-info">
                                            <h3 class="fs-18 fw-normal">
                                                <a href="{{ route('frontend.pages.shop.product-details', 3) }}"
                                                    class="text-title hover-text-primary transition">Bark Boost Bark
                                                    Collar</a>
                                            </h3>
                                            <ul class="rating d-flex flex-wrap list-unstyled mb-0">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-half-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$30.00</span>
                                </td>
                                <td class="text-center">
                                    <span class="product-availability text-danger">Out Of Stock</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn style-two position-relative z-1 round-10">
                                        Add To Cart
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="cart-action bg-transparent border-0 p-0" type="button">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item d-flex flex-wrap align-items-center">
                                        <div class="product-img bg-ash round-10">
                                            <img src="assets/img/products/cake/product-10.png" alt="Image" />
                                        </div>
                                        <div class="product-info">
                                            <h3 class="fs-18 fw-normal">
                                                <a href="{{ route('frontend.pages.shop.product-details', 4) }}"
                                                    class="text-title hover-text-primary transition">Fetch Master
                                                    Frisbee</a>
                                            </h3>
                                            <ul class="rating d-flex flex-wrap list-unstyled mb-0">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-half-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$60.00</span>
                                </td>
                                <td class="text-center">
                                    <span class="product-availability text-success">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn style-two position-relative z-1 round-10">
                                        Add To Cart
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="cart-action bg-transparent border-0 p-0" type="button">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item d-flex flex-wrap align-items-center">
                                        <div class="product-img bg-ash round-10">
                                            <img src="assets/img/products/cake/product-11.png" alt="Image" />
                                        </div>
                                        <div class="product-info">
                                            <h3 class="fs-18 fw-normal">
                                                <a href="{{ route('frontend.pages.shop.product-details', 5) }}"
                                                    class="text-title hover-text-primary transition">Meringue soft
                                                    Cake</a>
                                            </h3>
                                            <ul class="rating d-flex flex-wrap list-unstyled mb-0">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-half-fill"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$50.00</span>
                                </td>
                                <td class="text-center">
                                    <span class="product-availability text-success">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn style-two position-relative z-1 round-10">
                                        Add To Cart
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="cart-action bg-transparent border-0 p-0" type="button">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-6 text-md-end mt-3">
                        <a href="{{ route('frontend.pages.shop.menu') }}" class="btn style-two position-relative z-1 round-10">Continue
                            Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Section End -->
@endsection
