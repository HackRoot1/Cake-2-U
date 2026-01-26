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
                    <h2 class="br-title fw-normal mb-12">Blog</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Blog</li>
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

    <!-- Blog Section Start -->
    <div class="container style-one ptb-120">
        <div class="row">
            <div class="col-xl-8 order-xl-2 order-1">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-1.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-1.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 1) }}">01 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 1) }}"
                                    class="text-title link-hover-secondary transition">The Art Of Custom Cakes How We
                                    Bring Sweetest Ideas To Life</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 1) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-2.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-2.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 2) }}">17 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 2) }}"
                                    class="text-title link-hover-secondary transition">Baking with Love The Secret
                                    Love Our Signature Flavors</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 2) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-6.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-6.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 3) }}">16 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 3) }}"
                                    class="text-title link-hover-secondary transition">Our Customers Favorite Flavors
                                    Based On Real Orders</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 3) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-7.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-7.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 4) }}">20 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                    class="text-title link-hover-secondary transition">Ice Cream Around The World
                                    Unique Flavors from Every
                                    Culture</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-8.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-8.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 4) }}">01 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                    class="text-title link-hover-secondary transition">Ice Cream Pairings What To Eat
                                    Or Drink With Your Favorite
                                    Scoop</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one img-hover-zoom round-20 mb-30">
                            <div class="br-hover-one position-absolute"></div>
                            <div class="blog-img position-relative img-zoom overflow-hidden">
                                <img src="assets/img/blog/blog-9.jpg" alt="Image"
                                    class="position-absolute top-0 start-0 w-100 h-100 round-20 transition" />
                                <img src="assets/img/blog/blog-9.jpg" alt="Image" class="round-20 transition" />
                            </div>
                            <ul class="blog-metainfo list-unstyled mb-12">
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/calendar.svg" alt="Icon" /><a
                                        href="{{ route('frontend.pages.blog.view', 4) }}">27 Aug, 2025</a>
                                </li>
                                <li class="fs-15 position-relative">
                                    <img src="assets/img/icons/comment.svg" alt="Icon" />No Comment
                                </li>
                            </ul>
                            <h3 class="fs-24">
                                <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                    class="text-title link-hover-secondary transition">Customer Favorites Most Loved
                                    Gifts from Our Shop</a>
                            </h3>
                            <a href="{{ route('frontend.pages.blog.view', 4) }}"
                                class="btn style-one position-relative z-1 round-10">Read More</a>
                        </div>
                    </div>
                </div>
                <ul class="page-nav pagination justify-content-center mb-0 mt-4">
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="{{ route('frontend.pages.blog.view', 3) }}" aria-label="Previous">
                            <i class="ri-arrow-left-s-line"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                            href="{{ route('frontend.pages.blog.view', 1) }}">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="{{ route('frontend.pages.blog.view', 2) }}">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="{{ route('frontend.pages.blog.view', 3) }}">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="{{ route('frontend.pages.blog.view', 4) }}" aria-label="Next">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 order-xl-1 order-2">
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
                                <a href="{{ route('frontend.pages.blog.view', 2) }}">Donuts</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection
