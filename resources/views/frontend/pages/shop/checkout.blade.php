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
                        <img src="assets/img/breadcrumb/br-img-5.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">
                        Checkout
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li><a href="{{ route('frontend.pages.shop.cart') }}">Cart</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-6.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Start -->
    <div class="container style-one pt-120 pb-120">
        <div class="row">
            <div class="col-xl-8 mb-lg-30">
                <div class="promo-login bg-athens round-15 mb-20">
                    <div class="checkbox style-two">
                        <input type="radio" id="test100" name="radio-group" />
                        <label for="test100" class="text-para"><span>Returning Customer?</span> Click
                            Here To
                            <a href="{{ route('frontend.pages.auth.login') }}"
                                class="text_primary fw-medium link-hover-primary ms-1">Login</a></label>
                    </div>
                </div>
                <div class="promo-login bg-athens round-15 mb-30">
                    <div class="checkbox style-two">
                        <input type="radio" id="test1" name="radio-group" />
                        <label for="test1" class="text-para"><span>Have A Coupon?</span>
                            <a href="{{ route('frontend.pages.shop.cart') }}" class="text_primary fw-medium link-hover-primary ms-1">Click Here</a>
                            To Enter Coupon</label>
                    </div>
                </div>
                <div class="comment-form-wrap style-one round-20 mb-md-30">
                    <h3 class="fs-20 fw-normal mb-25">
                        Billing Details
                    </h3>
                    <form action="#" class="form-wrapper checkout-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="First name"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="last name"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="email" placeholder="Email"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="number" placeholder="Phone"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="Company Name"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <select class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0">
                                        <option value="0">
                                            Country
                                        </option>
                                        <option value="1">
                                            USA
                                        </option>
                                        <option value="2">
                                            USK
                                        </option>
                                        <option value="3">
                                            Canada
                                        </option>
                                        <option value="4">
                                            Japan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="Stree Address"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="Town/City"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="State"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-20">
                                    <input type="text" placeholder="Postcode/ZIP Code"
                                        class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10 resize-0" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="checkbox style-two mb-20">
                                    <input type="radio" id="test30" name="radio-group" />
                                    <label for="test30">Ship To A Different
                                        Addresss?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-25">
                                    <textarea placeholder="Order Notes(optional)"
                                        class="w-100 ht-200 bg-ash text-para border-0 outline-0 round-10 resize-0"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn style-three position-relative z-1 round-10">
                                    Save Information
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="cart-total round-20 mb-30">
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
                    <button class="btn style-two position-relative d-block w-100 z-1 round-10">
                        Proceed To Checkout
                    </button>
                </div>
                <div class="payment-method round-20">
                    <h3 class="fs-20 fw-normal text-title mb-18">
                        Payment Method
                    </h3>
                    <div class="select-payment-method">
                        <div class="checkbox style-two">
                            <input type="radio" id="test4" name="radio-group" />
                            <label for="test4" class="text-title fw-semibold mb-15">Direct Bank Transfer
                            </label>
                            <span class="d-block pe-xxl-5">Make your payment directly into our
                                bank account Please use your Order
                                ID as the payment reference. Your
                                order won’t be shipped until the
                                funds have our account.</span>
                        </div>
                        <div class="checkbox style-two">
                            <input type="radio" id="test5" name="radio-group" />
                            <label for="test5" class="text-title fw-semibold">Cash On Delivery</label>
                        </div>
                        <div class="checkbox style-two">
                            <input type="radio" id="test3" name="radio-group" />
                            <label for="test3" class="text-title fw-semibold">Paypal</label>
                        </div>
                    </div>
                    <div class="form-check checkbox style-two mt-3">
                        <input class="form-check-input" type="checkbox" id="test_2" />
                        <label class="form-check-label" for="test_2">
                            I've read and accepted the
                            <a href="{{ route('frontend.pages.shop.terms-conditions') }}" class="text-title link-hover-primary fw-semibold">Terms &amp;
                                Conditions</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection
