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
                        About Us
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>About Us</li>
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

    <!-- About Section Start -->
    <section class="about-area style-one ptb-120">
        <div class="container style-one">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-xxl-2">
                    <div class="about-img-wrap position-relative z-1 overflow-hidden mb-md-30">
                        <span class="corner-shape-left position-absolute"></span>
                        <img src="assets/img/about/about-1.jpg" alt="Image" class="about-img" />
                        <ul class="feature-list list-unstyled position-absolute mb-0 z-1">
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Best Online Support
                            </li>
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Crafted With Passion
                            </li>
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Free Worldwide Shipping
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ps-xxl-50 pe-xxl-1">
                    <div class="about-content ps-xxl-5">
                        <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">
                            About PinkBakery
                        </h6>
                        <h2 class="section-title style-one fw-normal text-title mb-15">
                            One Off The Best Cake Shop In Your Town
                        </h2>
                        <p class="mb-25">
                            We specialize in crafting beautiful
                            delicious cakes that turn ordinary
                            moments into unforgettable memories
                            dreaming of a classic chocolate layer
                            cake a whimsical birthday design
                        </p>
                        <div class="counter-card-wrap d-flex flex-wrap justify-content-between mb-15">
                            <div class="counter-card style-one mb-25">
                                <h4 class="fw-normal fs-36 text-title mb-10">
                                    <span class="transition">2094</span>+
                                </h4>
                                <p class="fs-xxl-18 fw-normal d-block mb-0">
                                    Total Customers
                                </p>
                            </div>
                            <div class="counter-card style-one mb-25 ps-xxl-4">
                                <h4 class="fw-normal fs-36 text-title mb-10">
                                    <span class="transition">38</span>+
                                </h4>
                                <p class="fs-xxl-18 fw-normal d-block mb-0">
                                    World Outlet
                                </p>
                            </div>
                            <div class="counter-card style-one mb-25 ps-xxl-4">
                                <h4 class="fw-normal fs-36 text-title mb-10">
                                    <span class="transition">100</span>%
                                </h4>
                                <p class="fs-xxl-18 fw-normal d-block mb-0">
                                    Customer Satisfaction
                                </p>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-xl-6 col-lg-12 col-md-6 mb-20">
                                <ul class="feature-list style-one list-unstyled">
                                    <li class="position-relative font-secondary fw-normal fs-xxl-18 text-title">
                                        <img src="assets/img/icons/badge-violet.svg" alt="Icon" />The atmosphere is
                                        perfect
                                    </li>
                                    <li class="position-relative font-secondary fw-normal fs-xxl-18 text-title">
                                        <img src="assets/img/icons/badge-violet.svg" alt="Icon" />We offer something
                                        unique
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6 mb-20 ps-xxl-3">
                                <div class="ceo-info-wrap d-flex flex-wrap align-items-center">
                                    <div class="ceo-img rounded-circle">
                                        <img src="assets/img/about/ceo.jpg" alt="Image" class="rounded-circle" />
                                    </div>
                                    <div class="ceo-info">
                                        <h5 class="fs-18 fw-normal">
                                            Melanie Crites
                                        </h5>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('frontend.pages.about') }}" class="btn style-one position-relative z-1 round-10">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Mission Section Start -->
    <div class="container style-one pb-90">
        <div class="row align-items-center mb-45">
            <div class="col-xl-6 col-lg-7 mb-md-10">
                <h6 class="section-subtitle fs-20 fw-light text_primary mb-10">
                    Our Mission
                </h6>
                <h2 class="section-title style-one fw-normal text-title mb-0">
                    Our Mission Is To Create Fantastic Moments
                </h2>
            </div>
            <div class="col-xxl-4 offset-xxl-2 col-xl-5 offset-xl-1 col-lg-5">
                <p class="mb-0">
                    Our carefully curated selection offers something
                    for everyone charming keepsakes and handcrafted
                    items to playful novelties and seasonal each
                    piece is chosen with care to bring joy and
                    inspiration
                </p>
            </div>
        </div>
        <div class="row justify-content-center gx-xxl-18">
            <div class="col-xl-4 col-md-6">
                <div class="mission-card style-one br-hover-one position-relative z-1 round-20 mb-30">
                    <div class="br-hover position-absolute"></div>
                    <div class="mission-title d-flex flex-wrap align-items-center">
                        <div class="mission-icon d-flex flex-column align-items-center justify-content-center round-10">
                            <img src="assets/img/icons/target.svg" alt="Icon" />
                        </div>
                        <h3 class="fs-24 fw-normal">Our Mission</h3>
                    </div>
                    <p class="mb-0">
                        At our gift shop our mission is to bring joy
                        connection and meaning to every occasion
                        through thoughtfully curated gifts we
                        believe that the perfect gift tells a story
                        sparks a smile and strengthens
                        relationships.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="mission-card style-one br-hover-one position-relative z-1 round-20 mb-30">
                    <div class="br-hover position-absolute"></div>
                    <div class="mission-title d-flex flex-wrap align-items-center">
                        <div
                            class="mission-icon d-flex flex-column align-items-center justify-content-center round-10 transition">
                            <img src="assets/img/icons/vision.svg" alt="Icon" />
                        </div>
                        <h3 class="fs-24 fw-normal">Our Vision</h3>
                    </div>
                    <p class="mb-0">
                        Our vision is to become a trusted
                        destination where gifting is more than a
                        transaction an experience filled with
                        creativity and connection we aim to inspire
                        a culture of meaningful giving unique high
                        quality products
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="mission-card style-one br-hover-one position-relative z-1 round-20 mb-30">
                    <div class="mission-title d-flex flex-wrap align-items-center">
                        <div
                            class="mission-icon d-flex flex-column align-items-center justify-content-center round-10 transition">
                            <img src="assets/img/icons/approach.svg" alt="Icon" />
                        </div>
                        <h3 class="fs-24 fw-normal">
                            Our Approach
                        </h3>
                    </div>
                    <p class="mb-0">
                        At the heart of our approach is a commitment
                        to thoughtful curation and personalized
                        service take the time to handpick each item
                        in our collection focusing on quality
                        uniqueness and the joy it can bring to both
                        giver and receiver
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Section End -->

    <!-- Funfact Area Start -->
    <div class="funfact-area style-one position-relative z-1 pt-120 pb-90">
        <img src="assets/img/top-zigzag-shape.svg" alt="shape"
            class="top-shape position-absolute top-0 start-0 w-100 z-n1" />
        <img src="assets/img/bottom-zigzag-shape.svg" alt="shape"
            class="bottom-shape position-absolute bottom-0 start-0 w-100 z-n1" />
        <img src="assets/img/dot-shape-2.png" alt="shape"
            class="dot-shape position-absolute top-0 start-0 w-100 h-100 z-n1" />
        <div class="container style-one">
            <div class="counter-card-wrap style-two d-flex flex-wrap align-items-center justify-content-md-between">
                <div class="counter-card style-two mb-25">
                    <h4 class="fw-normal text-title mb-10">
                        <span class="transition">10</span>+
                    </h4>
                    <p class="fs-xxl-18 fw-normal d-block mb-0">
                        Awards Wins
                    </p>
                </div>
                <div class="counter-card style-two mb-25">
                    <h4 class="fw-normal text-title mb-10">
                        <span class="transition">25</span>+
                    </h4>
                    <p class="fs-xxl-18 fw-normal d-block mb-0">
                        Years Experience
                    </p>
                </div>
                <div class="counter-card style-two mb-25">
                    <h4 class="fw-normal text-title mb-10">
                        <span class="transition">43</span>+
                    </h4>
                    <p class="fs-xxl-18 fw-normal d-block mb-0">
                        Professional Experts
                    </p>
                </div>
                <div class="counter-card style-two mb-25">
                    <h4 class="fw-normal text-title mb-10">
                        <span class="transition">68</span>+
                    </h4>
                    <p class="fs-xxl-18 fw-normal d-block mb-0">
                        Trusted Partners
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Area End -->

    <!-- Why Choose Us Start -->
    <section class="wh-area style-one pt-120 pb-120">
        <div class="container style-one">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-lg-6 pe-xxl-0 order-lg-1 order-2">
                    <div class="wh-content">
                        <h6 class="section-subtitle fs-20 fw-light text_primary mb-8">
                            Why Choose PinkBakery
                        </h6>
                        <h2 class="section-title style-one fw-normal text-title mb-15">
                            Discover The Exceptional Quality And
                            Care
                        </h2>
                        <p class="mb-40">
                            From elegant wedding cakes and fun
                            birthday designs to everyday treats that
                            brighten your day occasion or simply
                            craving something sweet our cakes are
                            crafted to delight
                        </p>
                        <div class="row mb-20">
                            <div class="col-md-6">
                                <div class="feature-card style-one mb-25">
                                    <img src="assets/img/icons/hygiene.svg" alt="Icon"
                                        class="feature-icon d-block mb-25" />
                                    <h3 class="fs-24 fw-normal mb-15">
                                        Hygienic Process
                                    </h3>
                                    <p class="mb-25">
                                        Step into our bakery and let
                                        the aroma of fresh bakes and
                                        the charm bake
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 ps-xxl-5">
                                <div class="feature-card style-one mb-25">
                                    <img src="assets/img/icons/equipment.svg" alt="Icon"
                                        class="feature-icon d-block mb-25" />
                                    <h3 class="fs-24 fw-normal mb-15">
                                        Modern Equipment
                                    </h3>
                                    <p class="mb-25">
                                        Our skilled bakers and
                                        decorators bring your vision
                                        to life using the freshest
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('frontend.pages.about') }}" class="btn style-one position-relative z-1 round-10">Discover More</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-lg-6 order-lg-2 order-1 mb-md-30">
                    <div class="wh-img-wrap position-relative z-1 overflow-hidden">
                        <span class="corner-shape-right position-absolute"></span>
                        <img src="assets/img/about/wh-img-1.jpg" alt="Image" />
                        <ul class="feature-list list-unstyled position-absolute mb-0 text-end z-1">
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Exceptional Services
                            </li>
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Wake Up Experience
                            </li>
                            <li class="d-inline-block bg-ash fw-normal text-title round-oval">
                                Fresh Food Quality
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Scrolling Text Start -->
    <div class="move-text-wrapper overflow-hidden mb-120">
        <div class="move-text style-one position-relative z-1">
            <ul class="d-flex align-items-center list-unstyled mb-0">
                <li class="font-secondary text-title">
                    Best Quality Food
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-10.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Natural Ingredients
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-11.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Crafted With Love
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-12.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Gourmet Treats
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-13.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Perfect Bites
                </li>
                <li class="font-secondary text-title">
                    Best Quality Food
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-10.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Natural Ingredients
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-11.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Crafted With Love
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-12.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Gourmet Treats
                </li>
                <li>
                    <img src="assets/img/products/cake/product-thumb-13.png" alt="Image" />
                </li>
                <li class="font-secondary text-title">
                    Perfect Bites
                </li>
            </ul>
        </div>
    </div>
    <!-- Scrolling Text End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-area style-three position-relative z-1 pt-120 pb-120">
        <img src="assets/img/top-zigzag-shape.svg" alt="shape"
            class="top-shape position-absolute top-0 start-0 w-100 z-n1" />
        <img src="assets/img/bottom-zigzag-shape.svg" alt="shape"
            class="bottom-shape position-absolute bottom-0 start-0 w-100 z-n1" />
        <img src="assets/img/dot-shape-3.png" alt="shape"
            class="dot-shape position-absolute top-0 start-0 w-100 h-100 z-n1" />
        <div class="container style-one">
            <h6 class="section-subtile fs-20 fw-light text_primary text-center mb-10">
                Testimonial
            </h6>
            <h2 class="section-title style-one fw-normal text-title text-center mb-40">
                Customer Love Real Reviews
            </h2>
            <div class="testimonial-slider-four swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card style-two bg-white d-flex flex-wrap round-20">
                            <div class="client-img round-15">
                                <img src="assets/img/clients/client-1.jpg" alt="Image" class="round-15" />
                            </div>
                            <div class="client-quote-wrap">
                                <div
                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <h5 class="fs-24 fw-normal text-title mb-0">
                                        Unmatched Taste!
                                    </h5>
                                    <ul class="rating list-unstyled mb-0 lh-1">
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
                                </div>
                                <p class="fs-xxl-18">
                                    "I recently discovered this ice
                                    cream shop and was blown away by
                                    the flavors and quality. I
                                    ordered a banana split sundae
                                    and it was hands down the best
                                    I’ve ever had. Everything was
                                    fresh from the ripe bananas to
                                    the rich hot fudge.”
                                </p>
                                <div
                                    class="client-info-wrap d-flex flex-wrap align-items-center justify-content-between pe-xxl-5 me-xxl-2">
                                    <div class="client-info">
                                        <h5 class="fs-22 mb-2">
                                            Josef Starling
                                        </h5>
                                        <span>Businessman</span>
                                    </div>
                                    <img src="assets/img/icons/quote-line.svg" alt="Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card style-two bg-white d-flex flex-wrap round-20">
                            <div class="client-img round-15">
                                <img src="assets/img/clients/client-2.jpg" alt="Image" class="round-15" />
                            </div>
                            <div class="client-quote-wrap">
                                <div
                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <h5 class="fw-normal text-title mb-0">
                                        100% Authentic shop!
                                    </h5>
                                    <ul class="rating list-unstyled mb-0 lh-1">
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
                                </div>
                                <p class="fs-xxl-18">
                                    "From the moment I walked in I
                                    could tell this ice cream shop
                                    was special. The interior is
                                    cozy and fun the staff is
                                    welcoming and the aroma of
                                    freshly made waffle cones is
                                    heavenly I had their Hot Fudge
                                    Sundae and it was perfection
                                    warm rich.”
                                </p>
                                <div
                                    class="client-info-wrap d-flex flex-wrap align-items-center justify-content-between pe-xxl-5 me-xxl-2">
                                    <div class="client-info">
                                        <h5 class="fs-22 mb-2">
                                            Ben Chisholm
                                        </h5>
                                        <span>CEO & Founder</span>
                                    </div>
                                    <img src="assets/img/icons/quote-line.svg" alt="Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card style-two bg-white d-flex flex-wrap round-20">
                            <div class="client-img round-15">
                                <img src="assets/img/clients/client-3.jpg" alt="Image" class="round-15" />
                            </div>
                            <div class="client-quote-wrap">
                                <div
                                    class="testimonial-title position-relative d-flex flex-wrap align-items-center justify-content-between">
                                    <h5 class="fs-24 fw-normal text-title mb-0">
                                        Awesome Taste!
                                    </h5>
                                    <ul class="rating list-unstyled mb-0 lh-1">
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
                                </div>
                                <p class="fs-xxl-18">
                                    "I ordered a banana split sundae
                                    and it was hands down the best
                                    I’ve ever had. Everything was
                                    fresh from the ripe bananas to
                                    the rich hot fudge. I recently
                                    discovered this ice cream shop
                                    and was blown away by the
                                    flavors and quality.”
                                </p>
                                <div
                                    class="client-info-wrap d-flex flex-wrap align-items-center justify-content-between pe-xxl-5 me-xxl-2">
                                    <div class="client-info">
                                        <h5 class="fs-22 mb-2">
                                            Linda Herring
                                        </h5>
                                        <span>Bisinessman</span>
                                    </div>
                                    <img src="assets/img/icons/quote-line.svg" alt="Icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-pagination slider-pagination style-one"></div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Team Section Start -->
    <div class="container style-one pt-120 pb-90">
        <div class="row align-items-center mb-45">
            <div class="col-xl-6 col-lg-7 mb-md-10">
                <h6 class="section-subtitle fs-20 fw-light text_primary mb-10">
                    Our Team
                </h6>
                <h2 class="section-title style-one fw-normal text-title mb-0">
                    Meet Our Professional & Dedicated Team
                </h2>
            </div>
            <div class="col-xxl-4 offset-xxl-2 col-xl-5 offset-xl-1 col-lg-5">
                <p class="mb-0">
                    We aim to inspire a culture of meaningful giving
                    by offering uniquehigh quality products that
                    celebrate life moments big and small as grow
                    envision a community where every gift shared
                    brings
                </p>
            </div>
        </div>
        <div class="row justify-content-center gx-xxl-18">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                    <div class="team-img rounded-circle d-block mx-auto transition">
                        <img src="assets/img/team/team-1.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Marianne Colon
                    </h3>
                    <span class="d-block">Pastry Chef</span>
                    <ul class="social-profile style-seven list-unstyled mb-0">
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
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                    <div class="team-img rounded-circle d-block mx-auto transition">
                        <img src="assets/img/team/team-2.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Charles Driscoll
                    </h3>
                    <span class="d-block">Cake Decorator</span>
                    <ul class="social-profile style-seven list-unstyled mb-0">
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
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                    <div class="team-img rounded-circle d-block mx-auto transition">
                        <img src="assets/img/team/team-3.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Philip Nicholson
                    </h3>
                    <span class="d-block">Bakery Chef</span>
                    <ul class="social-profile style-seven list-unstyled mb-0">
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
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                    <div class="team-img rounded-circle d-block mx-auto transition">
                        <img src="assets/img/team/team-4.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        George Stromain
                    </h3>
                    <span class="d-block">Cake Maker</span>
                    <ul class="social-profile style-seven list-unstyled mb-0">
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
    <!-- Team Section End -->

    <!-- Featured Product Start -->
    <section class="featured-product-area pb-90">
        <div class="container style-one">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div
                        class="featured-product style-three position-relative overflow-hidden z-1 d-flex flex-wrap align-items-center round-20">
                        <div
                            class="feature-product-bg bg-1 position-absolute top-0 start-0 w-100 h-100 z-n1 round-20 transition">
                        </div>
                        <div class="featured-product-info">
                            <h6 class="font-primary fw-medium fs-16 text_primary mb-8">
                                Fastest Delivery
                            </h6>
                            <h3 class="text-title fw-light pe-lg-5 me-xxl-2">
                                Special Gift Box To Surprice Your
                                Love
                            </h3>
                            <a href="tel:18001235500" class="btn style-two position-relative z-1 round-10">call: +1 (800)
                                1235500</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div
                        class="featured-product style-three position-relative overflow-hidden z-1 d-flex flex-wrap align-items-center round-20">
                        <div
                            class="feature-product-bg bg-2 position-absolute top-0 start-0 w-100 h-100 z-n1 round-20 transition">
                        </div>
                        <div class="featured-product-info">
                            <h6 class="font-primary fw-medium fs-16 text_primary mb-8">
                                The #1 Best Selling
                            </h6>
                            <h3 class="text-title fw-light">
                                Combo Sets Gift Box For Christmas
                                Special Offer
                            </h3>
                            <a href="{{ route('frontend.pages.shop.menu') }}" class="btn style-three position-relative z-1 round-10">Shop
                                Combo Now</a>
                        </div>
                        <span
                            class="discounted-price text-white d-flex flex-column align-items-center justify-content-center position-absolute"><b
                                class="fw-semibold bold d-block">$8 </b>only</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Product End -->
@endsection
