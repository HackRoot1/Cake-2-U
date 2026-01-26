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
                        Our Team
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Our Team</li>
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

    <!-- Team Section Start -->
    <div class="container style-one ptb-120">
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
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="team-card style-one br-hover-one text-center position-relative z-1 round-20 mb-30">
                    <div class="team-img rounded-circle d-block mx-auto transition">
                        <img src="assets/img/team/team-5.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Marcus Henderson
                    </h3>
                    <span class="d-block">Pie Maker</span>
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
                        <img src="assets/img/team/team-6.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Esteban Svendsen
                    </h3>
                    <span class="d-block">Pastry Cook</span>
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
                        <img src="assets/img/team/team-7.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Richard Stemple
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
                        <img src="assets/img/team/team-8.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Victoria Phillips
                    </h3>
                    <span class="d-block">Fondant Cake Specialist</span>
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
                        <img src="assets/img/team/team-9.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Malinda Blake
                    </h3>
                    <span class="d-block">Candy Maker</span>
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
                        <img src="assets/img/team/team-10.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Edger Howard
                    </h3>
                    <span class="d-block">Staff Worker</span>
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
                        <img src="assets/img/team/team-11.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Celeste Hernande
                    </h3>
                    <span class="d-block">Staff Worker</span>
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
                        <img src="assets/img/team/team-12.jpg" alt="Image" class="rounded-circle transition" />
                    </div>
                    <h3 class="fs-24 fw-normal text-title">
                        Nats Stromain
                    </h3>
                    <span class="d-block">Bakery Worker</span>
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
        <ul class="page-nav pagination justify-content-center mb-0 mt-4">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.team') }}" aria-label="Previous">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="{{ route('frontend.pages.team') }}">1</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.team') }}">2</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.team') }}">3</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{ route('frontend.pages.team') }}" aria-label="Next">
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Team Section End -->
@endsection
