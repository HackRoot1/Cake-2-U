<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/scrollcue.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />

    <title>PinkBakery - Dessert & Gift Shop HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
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
                                <img src="{{ asset('assets/img/icons/clock-pink.svg') }}" alt="Icon" />Monday To Friday : 10.00 Am
                                - 5.00 Pm
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center ps-xxl-5 mb-lg-0 mb-2">
                            <p class="position-relative text-white d-inline-block fs-15 mb-0 ms-xxl-5">
                                <img src="{{ asset('assets/img/icons/delivery-truck.svg') }}" alt="Icon" />Free Delivery For Orders
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
                        <a href="{{ route('frontend.home.index') }}" class="navbar-brand">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-light" />
                            <img src="{{ asset('assets/img/logo-white.png') }}" alt="Logo" class="logo-dark" />
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
                                        <a href="{{ route('frontend.pages.about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.shop.shop') }}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.shop.menu') }}">Menu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.team') }}">Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.contact') }}">Contact</a>
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
                                                <a href="{{ route('frontend.pages.contact') }}"
                                                    class="btn style-three position-relative z-1 round-10">Get In
                                                    Touch</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <button
                                            class="search-btn bg-transparent border-0 d-flex flex-wrap align-items-center dropdown-toggle text-center p-0 transition"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                            <img src="{{ asset('assets/img/icons/search-icon-large.svg') }}" alt="Search Icon" />
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
                                        <a href="{{ route('frontend.pages.profile.my-account') }}" class="user-btn">
                                            <img src="{{ asset('assets/img/icons/user-icon.svg') }}" alt="User Icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.shop.wishlist') }}" class="wishlist-btn position-relative">
                                            <img src="{{ asset('assets/img/icons/heart.svg') }}" alt="Heart Icon" />
                                            <span
                                                class="fs-14 fw-normal position-absolute top-0 end-0 d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.pages.shop.cart') }}" class="cart-btn position-relative">
                                            <img src="{{ asset('assets/img/icons/bag-black.svg') }}" alt="Search Icon" />
                                            <span
                                                class="fs-14 fw-normal position-absolute top-0 end-0 d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="option-item d-lg-block d-none">
                                <a href="{{ route('frontend.pages.contact') }}" class="btn style-three position-relative z-1 round-10">Get In
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

            @yield('content')


            <!-- Footer Section Start -->
            <footer class="footer-area style-two position-relative z-1">
                <div class="footer-top bg-f position-relative z-1 pt-120">
                    <div class="container style-one pb-90">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-5 pe-xxl-5 mb-lg-20">
                                <h2 class="section-title style-one me-xxl-4 mb-0">Sign Up For Exclusive Deals & Latest
                                    Updates</h2>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <form action="#" class="newsletter-form style-one position-relative">
                                    <input type="email" class="w-100 bg-white border-0 round-10 text-para outline-0"
                                        placeholder="Enter Your Email">
                                    <button class="btn style-three z-1 round-10">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="row pt-120">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 pe-xxl-1">
                                <div class="footer-widget mb-30">
                                    <a href="{{ route('frontend.home.index') }}" class="logo d-block mb-40">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-light">
                                        <img src="{{ asset('assets/img/logo-white.png') }}" alt="Logo" class="logo-dark">
                                    </a>
                                    <ul class="social-profile style-five list-unstyled mb-0">
                                        <li><a href="https://www.facebook.com/" target="_blank"
                                                class="d-flex flex-wrap align-items-center"><span
                                                    class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-facebook-fill"></i></span><span
                                                    class="social-linkname">Facebook</span></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank"
                                                class="d-flex flex-wrap align-items-center"><span
                                                    class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-twitter-x-line"></i></span><span
                                                    class="social-linkname">Twitter</span></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"
                                                class="d-flex flex-wrap align-items-center"><span
                                                    class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-instagram-line"></i></span><span
                                                    class="social-linkname">Instagram</span></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"
                                                class="d-flex flex-wrap align-items-center"><span
                                                    class="social-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-linkedin-fill"></i></span><span
                                                    class="social-linkname">Linkedin</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-6 ps-xxl-5">
                                <div class="footer-widget mb-30 ps-xxl-5">
                                    <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">
                                        Categories</h3>
                                    <ul class="footer-menu list-unstyled mb-0">
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">Gelato</a></li>
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">kulfi</a></li>
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">Sherbet</a></li>
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">Frozen
                                                Yogurt</a></li>
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">Sorbet</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 ps-xxl-60">
                                <div class="footer-widget mb-30">
                                    <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">
                                        Useful Links</h3>
                                    <ul class="footer-menu list-unstyled mb-0">
                                        <li><a href="{{ route('frontend.pages.contact') }}" class="link style-two">Contact us</a></li>
                                        <li><a href="{{ route('frontend.pages.team') }}" class="link style-two">Professional Team</a></li>
                                        <li><a href="{{ route('frontend.pages.shop.shop') }}" class="link style-two">Ice Cream Menu</a></li>
                                        <li><a href="{{ route('frontend.pages.blog') }}" class="link style-two">Latest News &
                                                Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 ps-xxl-5">
                                <div class="footer-widget mb-30">
                                    <h3 class="footer-widget-title fs-24 fw-normal text-title position-relative">Get
                                        In Touch</h3>
                                    <ul class="contact-info list-unstyled mb-0">
                                        <li class="position-relative">
                                            <img src="{{ asset('assets/img/icons/pin-small.svg') }}" alt="Icon">
                                            <h6 class="font-primary fw-bold fs-18 text-title mb-6">Location</h6>
                                            <p class="text-title mb-0">Madison Street Baltimore, NY 4508, USA</p>
                                        </li>
                                        <li class="position-relative">
                                            <img src="{{ asset('assets/img/icons/mail-small.svg') }}" alt="Icon">
                                            <h6 class="font-primary fw-bold fs-18 text-title mb-6">Email</h6>
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#345c5158585b74445d5a5f56555f51464d1a575b59"
                                                class="link style-two fw-normal"><span class="__cf_email__"
                                                    data-cfemail="dcb4b9b0b0b39cacb5b2b7bebdb7b9aea5f2bfb3b1">[email&#160;protected]</span></a>
                                        </li>
                                        <li class="position-relative">
                                            <img src="{{ asset('assets/img/icons/phone-small.svg') }}" alt="Icon">
                                            <h6 class="font-primary fw-bold fs-18 text-title mb-6">Phone</h6>
                                            <a href="tel:000123456780" class="link style-two fw-normal">+00 (0) 123
                                                456 780</a>
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
                                <p class="copyright-text text-white text-md-start text-center mb-0"><i
                                        class="ri-copyright-line"></i><span
                                        class="text-white fw-medium">PinkBakery</span> is Proudly Owned by <a
                                        href="https://hibootstrap.com/" target="_blank"
                                        class="text-white hover-text-secondary fw-semibold">HiBootstrap</a></p>
                            </div>
                            <div class="col-md-5">
                                <ul class="footer-bottom-menu list-unstyled text-lg-end text-center mb-0">
                                    <li><a href="{{ route('frontend.pages.privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('frontend.pages.terms-and-conditions') }}">Terms & Conditions</a></li>
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
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/megamenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollToPlugin.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/customEase.js') }}"></script>
    <script src="{{ asset('assets/js/scrollcue.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
