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
                        <img src="assets/img/breadcrumb/br-img-1.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">
                        Blog Details
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.pages.home') }}">Home</a></li>
                        <li>
                            <a href="{{ route('frontend.pages.blog.view', 1) }}">Blog</a>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-2.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Start -->
    <div class="container style-one ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="blog-desc mb-55">
                    <div class="single-img round-20 mb-45">
                        <img src="assets/img/blog/single-blog-1.jpg" alt="Image" class="round-20" />
                    </div>
                    <ul class="blog-metainfo list-unstyled mb-15">
                        <li class="fs-15 position-relative">
                            <img src="assets/img/icons/calendar.svg" alt="Icon" /><a href="{{ route('frontend.pages.blog.view', 1) }}">01 Aug,
                                2025</a>
                        </li>
                        <li class="fs-15 position-relative">
                            <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                        </li>
                    </ul>
                    <div class="single-para">
                        <h1 class="fw-normal">
                            The Art of Custom Cakes How We Bring
                            Sweetest Ideas to Life
                        </h1>
                        <p>
                            At our cake bakery, every creation is
                            made with passion, precision, and a
                            sprinkle of sweetness. We specialize in
                            handcrafted cakes that not only look
                            stunning but taste unforgettable—from
                            classic favorites to custom designs for
                            birthdays, weddings, and every
                            celebration in between. Using only the
                            finest ingredients, we bake each cake
                            fresh to ensure rich flavors, soft
                            textures, and happy smiles with every
                            bite. Whether you're stopping in for a
                            slice or planning a show-stopping
                            centerpiece, our bakery is here to make
                            every occasion a little more magical.
                        </p>
                        <p>
                            Welcome to our cake bakery—where every
                            cake is a celebration and every bite
                            tells a story. We pride ourselves on
                            baking cakes that are as beautiful as
                            they are delicious, using premium
                            ingredients and time-tested recipes.
                            From elegant wedding cakes to fun
                            birthday designs and everyday
                            indulgences, we create treats for every
                            taste and occasion
                        </p>
                    </div>
                    <div class="wp-blockquote bg_secondary d-flex flex-wrap align-items-center round-20">
                        <img src="assets/img/icons/quote-white.svg" alt="Icon" />
                        <p class="font-secondary fw-normal fs-xxl-18 text-white mb-0 pe-xxl-5">
                            "This place is a hidden gem! I stumbled
                            upon the bakery while exploring the
                            neighborhood and was instantly drawn in
                            by the amazing smell I tried their lemon
                            tart.”
                        </p>
                    </div>
                    <div class="single-para">
                        <h5>How To Made At PinkBakery</h5>
                        <p>
                            Our vision is to become a trusted
                            destination where gifting is more than a
                            transaction—it's an experience filled
                            with thoughtfulness, creativity, and
                            connection. We aim to inspire a culture
                            of meaningful giving by offering unique,
                            high-quality products that celebrate
                            life’s moments big and small. As we
                            grow, we envision a community where
                            every gift shared brings people closer
                            together and leaves a lasting
                        </p>
                        <ul class="feature-list style-one list-unstyled mb-0">
                            <li class="position-relative">
                                <i class="ri-checkbox-circle-fill"></i>You can place an order in-store, by
                                phone at your number, or online
                                through our website or social media.
                            </li>
                            <li class="position-relative">
                                <i class="ri-checkbox-circle-fill"></i>Yes, we offer local delivery for
                                pre-orders within [your area].
                                Delivery charges may apply.
                            </li>
                        </ul>
                    </div>
                    <div class="featured-video style-one position-relative bg-f round-20 mb-30">
                        <a data-fslightbox="video1" href="https://www.youtube.com/watch?v=u31qwQUeGuM"
                            class="play-btn style-one position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle transition mx-auto">
                            <i class="ri-play-large-fill"></i>
                        </a>
                    </div>
                    <div class="single-para">
                        <p>
                            At the heart of our approach is a
                            commitment to thoughtful curation and
                            personalized service. We take the time
                            to handpick each item in our collection,
                            focusing on quality, uniqueness, and the
                            joy it can bring to both giver and
                            receiver. Whether it's a handmade piece
                            from a local artisan or a carefully
                            designed gift set, we ensure that every
                            product reflects our passion for
                            meaningful gifting.
                        </p>
                    </div>
                </div>
                <div class="post-pagination d-flex flex-wrap align-items-center justify-content-between mb-50">
                    <a href="{{ route('frontend.pages.blog.view', 1) }}"
                        class="prev-post fs-xxl-18 fs-xx-14 fw-medium text-title hover-text-primary transition w-50"><i
                            class="ri-arrow-left-line"></i><span class="ms-1">Prev Article</span></a>
                    <a href="{{ route('frontend.pages.blog.view', 2) }}"
                        class="next-post fs-xxl-18 fs-xx-14 fw-medium text-title hover-text-primary transition w-50 text-end"><span
                            class="me-1">Next Article</span><i class="ri-arrow-right-line"></i></a>
                </div>
                <div class="post-metaoption mb-40 round-20">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-tag d-flex fle-wrap align-items-center mb-sm-20">
                                <span
                                    class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary text-white me-3"><img
                                        src="assets/img/icons/tag.svg" alt="Icon" /></span>
                                <ul class="tag-list list-unstyled mb-0">
                                    <li>
                                        <a href="{{ route('frontend.pages.blog.view', 1) }}">Bakery</a>,
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.blog.view', 1) }}">Sweet</a>,
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.blog.view', 1) }}">Cake</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-share d-flex flex-wrap align-items-center justify-content-md-end">
                                <span class="text-para me-2">Share:</span>
                                <ul class="social-profile style-three list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                                class="ri-facebook-fill"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/?lang=en" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                                class="ri-instagram-line"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                                class="ri-linkedin-fill"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="author-box d-flex flex-wrap round-20 mb-40">
                    <div class="author-img rounded-circle">
                        <img src="assets/img/blog/author.jpg" alt="Author" class="rounded-circle" />
                    </div>
                    <div class="author-info">
                        <h3 class="fs-20 fw-medium text-title mb-10">
                            Kimberly Foust
                        </h3>
                        <p>
                            We believe that the perfect gift tells a
                            story, sparks a smile, and strengthens
                            relationships. That's why we carefully
                            select every item with heart and
                            purpose—supporting local makers,
                            sustainable practices, and timeless
                            designs. Whether you're celebrating a
                            milestone, expressing gratitude, or
                            simply spreading
                        </p>
                        <ul class="social-profile style-three list-unstyled mb-0">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"
                                    class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                        class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://x.com/?lang=en" target="_blank"
                                    class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                        class="ri-twitter-x-line"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"
                                    class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                        class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank"
                                    class="d-flex flex-column align-items-center justify-content-center bg-ash rounded-circle"><i
                                        class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h4 class="fs-24 fw-normal text-title mb-25">
                    03 Comments
                </h4>
                <div class="comment-item-wrap mb-40">
                    <div class="comment-item d-flex flex-wrap round-20">
                        <div class="comment-author-img rounded-circle">
                            <img src="assets/img/clients/client-5.jpg" alt="Image" class="rounded-circle" />
                        </div>
                        <div class="comment-author-info">
                            <div class="row align-items-center">
                                <div class="col-md-9 order-md-1 order-1">
                                    <div class="comment-author-name">
                                        <h5 class="fs-18 fw-normal text-title mb-0">
                                            Janet Biermann
                                        </h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="fs-13 d-inline-block position-relative">
                                                Aug 10, 2025
                                            </li>
                                            <li class="fs-13 d-inline-block position-relative">
                                                08:10 pm
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 order-md-1 order-3 text-md-end">
                                    <a href="#cmt-form"
                                        class="reply-btn fw-bold text_primary link-hover-primary transition">Reply</a>
                                </div>
                                <div class="col-md-12 order-md-3 order-2 pe-xxl-5">
                                    <p class="comment-text">
                                        "I’ve tried many bakeries in
                                        town, but none compare to
                                        the quality and care you
                                        find here. From their
                                        buttery croissants to their
                                        decadent chocolate cake,
                                        every bite feels like it’s
                                        made with love.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item reply d-flex flex-wrap round-20">
                        <div class="comment-author-img rounded-circle">
                            <img src="assets/img/clients/client-2.jpg" alt="Image" class="rounded-circle" />
                        </div>
                        <div class="comment-author-info">
                            <div class="row align-items-center">
                                <div class="col-md-9 order-md-1 order-1">
                                    <div class="comment-author-name">
                                        <h5 class="fs-18 fw-normal text-title mb-0">
                                            Michael Chavez
                                        </h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="fs-13 d-inline-block position-relative">
                                                Aug 14, 2025
                                            </li>
                                            <li class="fs-13 d-inline-block position-relative">
                                                10:10 pm
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 order-md-2 order-3 text-md-end">
                                    <a href="#cmt-form"
                                        class="reply-btn fw-bold text_primary link-hover-primary transition">Reply</a>
                                </div>
                                <div class="col-md-12 order-md-3 order-2 col-12 pe-xxl-5">
                                    <p class="comment-text">
                                        There are many variations of
                                        passages of lorem Ipsum
                                        available but the majority
                                        have suffered alteration in
                                        some form by injected
                                        humour, words which don't
                                        look even slightly
                                        believable
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item d-flex flex-wrap round-20">
                        <div class="comment-author-img rounded-circle">
                            <img src="assets/img/clients/client-4.jpg" alt="Image" class="rounded-circle" />
                        </div>
                        <div class="comment-author-info">
                            <div class="row align-items-center">
                                <div class="col-md-9 order-md-1 order-1">
                                    <div class="comment-author-name">
                                        <h5 class="fs-18 fw-normal text-title mb-0">
                                            Vatris Ganso
                                        </h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="fs-13 d-inline-block position-relative">
                                                Aug 15, 2025
                                            </li>
                                            <li class="fs-13 d-inline-block position-relative">
                                                12:10 pm
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 order-md-2 order-3 text-md-end">
                                    <a href="#cmt-form"
                                        class="reply-btn fw-bold text_primary link-hover-primary transition">Reply</a>
                                </div>
                                <div class="col-md-12 order-md-3 order-2 pe-xxl-5">
                                    <p class="comment-text">
                                        There are many variations of
                                        passages of lorem Ipsum
                                        available but the majority
                                        have suffered alteration in
                                        some form by injected
                                        humour, or randomised words
                                        which don't look even
                                        slightly believable
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="#" class="comment-form-wrap style-one round-20" id="cmt-form">
                    <h4 class="fs-24 fw-normal text-title mb-6">
                        Leave A Reply
                    </h4>
                    <p class="mb-25">
                        Your email address will not be published.
                        Required fields are marked
                    </p>
                    <div class="row gx-xl-3">
                        <div class="col-md-6">
                            <div class="form-group position-relative mb-25">
                                <input type="text" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                    placeholder="Name" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-25">
                                <input type="email" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                                    placeholder="Email" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-25">
                                <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Comment"
                                    class="w-100 ht-150 bg-ash text-para border-0 outline-0 round-10 resize-0"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check checkbox style-one mb-25">
                                <input class="form-check-input" type="checkbox" id="test_2" />
                                <label class="form-check-label" for="test_2">
                                    Save my name, email, and website
                                    in this browser for the next
                                    time I comment.
                                </label>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <button type="submit" class="btn style-two position-relative z-1 round-10">
                                    Post A Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4">
                <aside class="sidebar mt-lg-50">
                    <div class="sidebar-widget search-widget round-20">
                        <h3 class="sidebar-widget-title fs-20 fw-normal text-title mb-20">
                            Search Here
                        </h3>
                        <form action="#" class="position-relative">
                            <input type="search" placeholder="Search"
                                class="fw-light w-100 ht-50 bg-white border-0 round-10 text-para outline-0" />
                            <button
                                class="position-absolute bg_primary position-absolute top-0 end-0 h-100 d-flex flex-column align-items-center justify-content-center border-0">
                                <img src="assets/img/icons/search-icon.svg" alt="Icon" />
                            </button>
                        </form>
                    </div>
                    <div class="sidebar-widget round-20">
                        <h3 class="sidebar-widget-title fs-20 fw-normal text-title mb-20">
                            Popular Posts
                        </h3>
                        <div class="rp-post-wrap">
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="assets/img/blog/post-thumb-1.jpg" alt="Post Thumb" />
                                </div>
                                <div class="rp-post-info">
                                    <a href="{{ route('frontend.pages.blog.view', 1) }}"
                                        class="fs-14 fw-normal text-para hover-text-primary d-block mb-1">19 Aug, 2025</a>
                                    <h5 class="fs-16 fw-normal mb-0 pe-xxl-4">
                                        <a href="{{ route('frontend.pages.blog.view', 1) }}"
                                            class="text-black link-hover-primary transition">Our Best-Selling Gifts
                                            And Why Customers Love
                                            Them</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="assets/img/blog/post-thumb-2.jpg" alt="Post Thumb" />
                                </div>
                                <div class="rp-post-info">
                                    <a href="{{ route('frontend.pages.blog.view', 2) }}"
                                        class="fs-14 fw-normal text-para hover-text-primary d-block mb-1">16 Aug, 2025</a>
                                    <h5 class="fs-16 fw-normal mb-0 pe-xxl-4">
                                        <a href="{{ route('frontend.pages.blog.view', 2) }}"
                                            class="text-black link-hover-primary transition">Behind The Scenes How
                                            We Make Our Small Batch
                                            Ice Cream</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="assets/img/blog/post-thumb-3.jpg" alt="Post Thumb" />
                                </div>
                                <div class="rp-post-info">
                                    <a href="{{ route('frontend.pages.blog.view', 3) }}"
                                        class="fs-14 fw-normal text-para hover-text-primary d-block mb-1">22 Aug, 2025</a>
                                    <h5 class="fs-16 fw-normal mb-0 pe-xxl-4">
                                        <a href="{{ route('frontend.pages.blog.view', 3) }}"
                                            class="text-black link-hover-primary transition">From Oven To
                                            Celebration How We Bake
                                            The Perfect Custom
                                            Cake</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget category-widget round-20">
                        <h3 class="sidebar-widget-title fs-20 fw-normal text-title mb-20">
                            News Category
                        </h3>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 1) }}" class="position-relative">Birthday Cake<img
                                        src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 2) }}" class="position-relative">Donuts<img
                                        src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 3) }}" class="position-relative">Occasion Gifts
                                    <img src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 4) }}" class="position-relative">Swiss Roll<img
                                        src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 5) }}" class="position-relative">Gift Box<img
                                        src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 6) }}" class="position-relative">Module Evolution
                                    <img src="assets/img/icons/right-arrow-black.svg" alt="Icon"
                                        class="transition" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget tags-widget round-20">
                        <h3 class="sidebar-widget-title fs-20 fw-normal text-title mb-20">
                            Tags
                        </h3>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 1) }}">Birtday Gift</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 2) }}">Mug</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 3) }}">Candle</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 4) }}">Paper Box</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 5) }}">Surprise Box</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 6) }}">Sweets</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pages.blog.view', 7) }}">Donuts</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
