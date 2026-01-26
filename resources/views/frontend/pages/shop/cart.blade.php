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
                    <h2 class="br-title fw-normal mb-12">Cart</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Cart</li>
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

    <!-- Cart Section Start -->
    <div class="container style-one ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="cart-table table-responsive mb-15">
                    <table class="table text-nowrap align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">
                                    Product
                                </th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
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
                                                <a href="{{ route('frontend.pages.shop.product-details', 7) }}"
                                                    class="text-title hover-text-primary transition">Birthday
                                                    Cake</a>
                                            </h3>
                                            <span class="product-availability text-success">In Stock</span>
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
                                    <div class="v-counter d-flex flex-wrap align-items-center justify-content-between">
                                        <input type="text" size="25" value="1" class="count" />
                                        <button class="plusBtn bg-transparent border-0"></button>
                                        <button class="minusBtn bg-transparent border-0"></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$70.00</span>
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
                                                <a href="{{ route('frontend.pages.shop.product-details', 8) }}"
                                                    class="text-title hover-text-primary transition">Blue Light
                                                    Cake</a>
                                            </h3>
                                            <span class="product-availability text-success">In Stock</span>
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
                                    <div class="v-counter d-flex flex-wrap align-items-center justify-content-between">
                                        <input type="text" size="25" value="1" class="count" />
                                        <button class="plusBtn bg-transparent border-0"></button>
                                        <button class="minusBtn bg-transparent border-0"></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$40.00</span>
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
                                                <a href="{{ route('frontend.pages.shop.product-details', 9) }}"
                                                    class="text-title hover-text-primary transition">Bark Boost Bark
                                                    Collar</a>
                                            </h3>
                                            <span class="product-availability text-danger">Out Of Stock</span>
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
                                    <div class="v-counter d-flex flex-wrap align-items-center justify-content-between">
                                        <input type="text" size="25" value="1" class="count" />
                                        <button class="plusBtn bg-transparent border-0"></button>
                                        <button class="minusBtn bg-transparent border-0"></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$30.00</span>
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
                                                <a href="{{ route('frontend.pages.shop.product-details', 10) }}"
                                                    class="text-title hover-text-primary transition">Fetch Master
                                                    Frisbee</a>
                                            </h3>
                                            <span class="product-availability text-success">In Stock</span>
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
                                    <div class="v-counter d-flex flex-wrap align-items-center justify-content-between">
                                        <input type="text" size="25" value="1" class="count" />
                                        <button class="plusBtn bg-transparent border-0"></button>
                                        <button class="minusBtn bg-transparent border-0"></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$60.00</span>
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
                                                <a href="{{ route('frontend.pages.shop.product-details', 11) }}"
                                                    class="text-title hover-text-primary transition">Meringue soft
                                                    Cake</a>
                                            </h3>
                                            <span class="product-availability text-danger">Out Of Stock</span>
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
                                    <div class="v-counter d-flex flex-wrap align-items-center justify-content-between">
                                        <input type="text" size="25" value="1" class="count" />
                                        <button class="plusBtn bg-transparent border-0"></button>
                                        <button class="minusBtn bg-transparent border-0"></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-para">$50.00</span>
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
                <div class="row mb-lg-30">
                    <div class="col-md-6 mt-3">
                        <button class="btn style-two position-relative z-1 round-10">
                            Continue Shopping
                        </button>
                    </div>
                    <div class="col-md-6 text-md-end mt-3">
                        <button class="btn style-three position-relative z-1 round-10">
                            Update Cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="cart-total round-20">
                    <h3 class="fs-20 fw-normal text-title mb-10">
                        Checkout Summary
                    </h3>
                    <div class="cart-total-wrap mb-20">
                        <div class="cart-total-item d-flex align-items-center justify-content-between">
                            <span>Subtotal</span>
                            <span>$250.00</span>
                        </div>
                        <div class="cart-total-item d-flex align-items-center justify-content-between">
                            <span>Shipping</span>
                            <span>$20.00</span>
                        </div>
                        <div class="cart-total-item d-flex align-items-center justify-content-between">
                            <span>Discount</span>
                            <span>$10.00</span>
                        </div>
                        <div class="cart-total-item d-flex align-items-center justify-content-between">
                            <span class="text-title fw-semibold">Payable Total</span>
                            <span class="text-title fw-semibold">$260.00</span>
                        </div>
                    </div>
                    <a href="{{ route('frontend.pages.shop.checkout') }}" class="btn style-two position-relative d-block w-100 z-1 round-10">Proceed To
                        Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Section End -->
@endsection
