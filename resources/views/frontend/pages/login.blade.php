@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-area position-relative z-1">
        <img src="assets/img/breadcrumb/br-dot-shape.png" alt="Shape"
            class="br-bg-shape position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="assets/img/top-zigzag-shape.svg" alt="Shape"
            class="br-top-shape position-absolute top-0 start-0 w-100 z-n1">
        <img src="assets/img/bottom-zigzag-shape.svg" alt="Shape"
            class="br-bottom-shape position-absolute bottom-0 start-0 w-100 z-n1">
        <div class="container style-one text-center">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img mb-sm-10">
                        <img src="assets/img/breadcrumb/br-img-3.png" alt="Image" class="d-block mx-auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">My Account</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-4.png" alt="Image" class="d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Account Details Start -->
    <div class="container style-one pt-120 pb-90">
        <div class="row">
            <div class="col-lg-6">
                <form action="#" class="comment-form-wrap style-one round-20 mb-30">
                    <h4 class="fs-24 fw-normal text-title text-center mb-20">Log In To Your Account</h2>
                        <div class="form-group mb-25">
                            <input type="email" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Email" required>
                        </div>
                        <div class="form-group mb-25">
                            <input type="password" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Password" required>
                        </div>
                        <div class="row align-items-center mb-20">
                            <div class="col-6">
                                <div class="form-check checkbox style-one">
                                    <input class="form-check-input" type="checkbox" id="test_2">
                                    <label class="form-check-label fs-xx-14" for="test_2">
                                        Keep Me Logged In
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('frontend.pages.forgot-password') }}" class="text-para hover-text-primary fs-xx-14">Forgot Password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn style-three d-block w-100 position-relative z-1 round-10">Log
                            In</button>
                        <div class="or-text text-center position-relative"><span>Or</span></div>
                        <button type="submit" class="btn style-six d-block w-100 position-relative z-1 round-10 mb-20"><img
                                src="assets/img/icons/fb.svg" alt="Icon"> Login With Facebook</button>
                        <button type="submit"
                            class="btn style-seven d-block w-100 position-relative z-1 round-10 mb-20"><img
                                src="assets/img/icons/google.svg" alt="Icon"> Login With Google</button>
                        <p class="text-center mb-0">Don't have an account? <a href="{{ route('frontend.pages.register') }}"
                                class="text-title fw-semibold link-hover-primary">Create</a></p>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="#" class="comment-form-wrap style-one round-20 mb-30">
                    <h4 class="fs-24 fw-normal text-title text-center mb-20">Create An Account</h2>
                        <div class="form-group mb-25">
                            <input type="text" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Name" required>
                        </div>
                        <div class="form-group mb-25">
                            <input type="email" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Email" required>
                        </div>
                        <div class="form-group mb-25">
                            <input type="password" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group mb-25">
                            <input type="password" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                placeholder="Confirm Password" required>
                        </div>
                        <button type="submit"
                            class="btn style-three d-block w-100 position-relative z-1 round-10 mb-20">Register Now</button>
                        <p class="text-center mb-0">Already Have An Account? <a href="{{ route('frontend.pages.login') }}"
                                class="text-title fw-semibold link-hover-primary">Login</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- Account Details End -->
@endsection
