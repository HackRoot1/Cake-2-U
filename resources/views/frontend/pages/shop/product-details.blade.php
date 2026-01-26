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
                        <img src="assets/img/breadcrumb/br-img-9.png" alt="Image" class="d-block mx-auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">Product Details</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li><a href="{{ route('frontend.pages.shop.menu') }}">Shop</a></li>
                        <li>Product Details</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-10.png" alt="Image" class="d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Details Start -->
    <div class="container style-one pt-120">
        <div class="product-details-wrapper pb-90">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-lg-6">
                    <div
                        class="single-product-img bg-ash d-flex flex-column align-items-center justify-content-center round-20 mb-md-30">
                        <a data-fslightbox="gallery" href="assets/img/products/single-product-1.png" class="d-block">
                            <img src="assets/img/products/single-product-1.png" alt="Product" class="d-block mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6 ps-xl-5">
                    <div class="single-product-info">
                        <div class="product-price fs-xxl-18 fw-normal"><span class="fw-normal text_primary">$40.00</span>
                            <span class="text-para fw-light text-decoration-line-through ms-2">$30.00</span></div>
                        <h1 class="fw-normal text-title">Blue Light Cake</h1>
                        <ul class="rating d-flex flex-wrap list-unstyled mb-15">
                            <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                            <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                            <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                            <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                            <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        </ul>
                        <p>We aim to inspire a culture of meaningful giving by offering unique, high-quality products that
                            celebrate life’s moments big and small. As we grow, we envision a community where every gift
                            shared brings people closer together and leaves a lasting impression of care</p>
                        <ul class="shop-features list-unstyled">
                            <li class="d-flex flex-wrap align-items-center"><span
                                    class="text-title fw-medium me-1">Availability:</span> <span class="text-success">In
                                    stock</span></li>
                            <li class="text-para d-flex flex-wrap align-items-center"><span
                                    class="text-title fw-medium me-1">Category:</span> <a href="{{ route('frontend.pages.shop.menu') }}"
                                    class="text-para hover-text-primary">Combo Packs</a></li>
                            <li class="text-para d-flex flex-wrap align-items-center"><span
                                    class="text-title fw-medium me-1">Tags:</span><a href="{{ route('frontend.pages.shop.menu') }}"
                                    class="text-end text-para hover-text-primary">Cake</a>, <a href="{{ route('frontend.pages.shop.menu') }}"
                                    class="text-end text-para hover-text-primary">Sweet</a></li>
                        </ul>
                        <div class="shop-action d-flex flex-wrap align-items-center justify-content-between mb-45">
                            <span class="text_primary fw-bold me-3">Quantities:</span>
                            <div class="v-counter d-flex flex-wrap align-items-center bg-white">
                                <button class="plusBtn bg-transparent border-0">
                                </button>
                                <input type="text" size="25" value="1" class="count" />
                                <button class="minusBtn bg-transparent border-0">
                                </button>
                            </div>
                        </div>
                        <button class="btn style-two position-relative z-1 round-10 mb-25" type="submit">Add To
                            Cart</span></button>
                        <div class="post-share d-flex flex-wrap align-items-center">
                            <span class="text-para fw-semibold me-3">Share:</span>
                            <ul class="social-profile style-three list-unstyled mb-0">
                                <li><a href="https://www.facebook.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                            class="ri-facebook-fill"></i></a></li>
                                <li><a href="https://x.com/?lang=en" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                            class="ri-twitter-x-line"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                            class="ri-instagram-line"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                            class="ri-linkedin-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs list-unstyled product-tablist style-two d-inline-flex align-items-center mb-25"
            role="tablist">
            <li class="nav-item border-0">
                <button class="nav-link border-0 active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button"
                    role="tab">Description</button>
            </li>
            <li class="nav-item border-0">
                <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#tab_2" type="button"
                    role="tab">Reviews(2)</button>
            </li>
        </ul>
        <div class="tab-content product-tab-content pb-120">
            <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                <div class="product_desc">
                    <p>At our cake bakery, we believe every moment is worth celebrating with something sweet. Our cakes are
                        crafted with care, using high-quality ingredients, rich flavors, and creative designs that turn
                        every treat into a work of art. Whether you're looking for a custom cake for a special occasion or
                        just craving a slice of something delicious, we’re here to make life a little sweeter. From the
                        first bite to the last crumb, our goal is to bring joy, one cake at a time. Whether you're dreaming
                        of something classic or custom, our passionate team is here to bring your sweet ideas to life, one
                        slice at a time.</p>
                    <p>Welcome to our cake bakery—where every cake is a celebration and every bite tells a story. We pride
                        ourselves on baking cakes that are as beautiful as they are delicious, using premium ingredients and
                        time-tested recipes. From elegant wedding cakes to fun birthday designs and everyday indulgences, we
                        create treats for every taste and occasion</p>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_2" role="tabpanel">
                <form action="#" class="comment-form-wrap style-one round-20 mb-40" id="cmt-form">
                    <h4 class="fs-24 fw-normal text-title mb-6">Add A Review</h2>
                        <p class="mb-25">Your email address will not be published. Required fields are marked</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-25">
                                    <span class="fw-medium d-block text-title">Rate this item</span>
                                    <div class="add-star-rating mt-1">
                                        <input type="radio" id="star1" name="rating" value="1"><label
                                            for="star1"></label>
                                        <input type="radio" id="star2" name="rating" value="2"><label
                                            for="star2"></label>
                                        <input type="radio" id="star3" name="rating" value="3"><label
                                            for="star3"></label>
                                        <input type="radio" id="star4" name="rating" value="4"><label
                                            for="star4"></label>
                                        <input type="radio" id="star5" name="rating" value="5"><label
                                            for="star5"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative mb-25">
                                    <input type="text" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                        placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-25">
                                    <input type="email" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-25">
                                    <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Write a review"
                                        class="w-100 ht-150 bg-ash text-para border-0 outline-0 round-10 resize-0"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check checkbox style-one mb-25">
                                    <input class="form-check-input" type="checkbox" id="test_2">
                                    <label class="form-check-label" for="test_2">
                                        Save my name, email, and website in this browser for the next time I comment.
                                    </label>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <button type="submit" class="btn style-two position-relative z-1 round-10">Submit
                                        Review</button>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="comment-item-wrap">
                    <div class="comment-item d-flex flex-wrap round-20">
                        <div class="comment-author-img rounded-circle">
                            <img src="assets/img/clients/client-3.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <div class="comment-author-info">
                            <div class="comment-author-name">
                                <h5 class="fs-18 fw-normal text-title mb-0">Janet Biermann</h5>
                                <ul class="rating d-flex flex-wrap list-unstyled mb-15">
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                </ul>
                            </div>
                            <p class="comment-text">"I’ve tried many bakeries in town, but none compare to the quality and
                                care you find here. From their buttery croissants to their decadent chocolate cake, every
                                bite feels like it’s made with love.</p>
                        </div>
                    </div>
                    <div class="comment-item d-flex flex-wrap round-20">
                        <div class="comment-author-img rounded-circle">
                            <img src="assets/img/clients/client-5.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <div class="comment-author-info">
                            <div class="comment-author-name">
                                <h5 class="fs-18 fw-normal text-title mb-0">Vatris Ganso</h5>
                                <ul class="rating d-flex flex-wrap list-unstyled mb-20">
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                    <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                                </ul>
                            </div>
                            <p class="comment-text">There are many variations of passages of lorem Ipsum available but the
                                majority have suffered alteration in some form by injected humour, or randomised words which
                                don't look even slightly believable</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Details End -->

    <!-- Related product Section Start -->
    <div class="container style-one pb-90">
        <h6 class="section-subtile fs-20 fw-light text_primary text-center mb-10">Related Products</h6>
        <h2 class="section-title style-one fw-normal text-title text-center mb-45">You May Also Like</h2>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 transition mb-30">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-2.png" alt="Product Image" class="d-block mx-auto">
                    </div>
                    <ul class="rating list-unstyled mb-15">
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                    </ul>
                    <h3 class="fs-24"><a href="{{ route('frontend.pages.shop.product-details', 2) }}" class="text-title link-hover-primary">Sweet Delight
                            Cake</a></h3>
                    <span class="product-price fs-xxl-18 d-block">$70.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle"><i
                            class="ri-heart-line"></i></button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 transition mb-30">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-4.png" alt="Product Image" class="d-block mx-auto">
                    </div>
                    <ul class="rating list-unstyled mb-15">
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                    </ul>
                    <h3 class="fs-24"><a href="{{ route('frontend.pages.shop.product-details', 4) }}" class="text-title link-hover-primary">Grilled
                            Cheese Cake Cake</a></h3>
                    <span class="product-price d-block">$40.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle"><i
                            class="ri-heart-line"></i></button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 transition mb-30">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-3.png" alt="Product Image" class="d-block mx-auto">
                    </div>
                    <ul class="rating list-unstyled mb-15">
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                    </ul>
                    <h3 class="fs-24"><a href="{{ route('frontend.pages.shop.product-details', 3) }}" class="text-title link-hover-primary">Chocolate
                            Sweet Cake</a></h3>
                    <span class="product-price d-block">$30.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle"><i
                            class="ri-heart-line"></i></button>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div
                    class="product-card br-hover-one style-one text-center position-relative z-1 round-20 transition mb-30">
                    <div
                        class="product-img d-flex flex-column align-items-center justify-content-center rounded-circle mx-auto">
                        <img src="assets/img/products/cake/product-5.png" alt="Product Image" class="d-block mx-auto">
                    </div>
                    <ul class="rating list-unstyled mb-15">
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                        <li><img src="assets/img/icons/star-1.svg" alt="Icon"></li>
                    </ul>
                    <h3 class="fs-24"><a href="{{ route('frontend.pages.shop.product-details', 5) }}" class="text-title link-hover-primary">Muffin Party
                            Cake</a></h3>
                    <span class="product-price d-block">$20.00</span>
                    <a href="{{ route('frontend.pages.shop.cart') }}" class="btn style-four position-relative z-1 round-10">Add To Cart</a>
                    <button class="add-to-wishlist position-absolute border-0 transition p-0 rounded-circle"><i
                            class="ri-heart-line"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Section End -->
@endsection
