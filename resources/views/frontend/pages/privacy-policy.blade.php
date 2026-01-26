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
                        Privacy Policy
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Privacy Policy</li>
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

    <!-- Privacy Policy Section start -->
    <div class="terms-wrap ptb-120">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="single-para">
                        <h3>Information Collection</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem,
                            <a href="{{ route('frontend.home.index') }}" class="text_primary">company name</a>
                            saepe ullam autem magni quod sint
                            tempore, eius molestias aliquam debitis.
                            Neque saepe dignissimos repudiandae
                            fuga.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Nihil eveniet quas
                            dignissimos
                            <strong>activities</strong> ea pariatur
                            corrupti rerum deserunt, ipsum, ipsa eos
                            veniam aspernatur fuga, optio soluta?
                            Libero neque reiciendis cupiditate
                            dolores nam. Earum eius similique
                            sapiente. Iure, sit non. At fuga ipsam
                            veniam.
                        </p>
                    </div>
                    <div class="single-para">
                        <h3>How We Use Cookies</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Nihil eveniet quas
                            dignissimos doloribus ea pariatur
                            corrupti rerum deserunt, ipsum, ipsa eos
                            veniam aspernatur fuga, optio soluta?
                            Libero neque reiciendis cupiditate
                            dolores nam. Earum eius similique
                            sapiente. Iure, sit non. At fuga ipsam
                            veniam.
                        </p>
                    </div>
                    <div class="single-para">
                        <h3>
                            The Collection, Process, and Use of
                            Personal Data
                        </h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem, facilis saepe ullam
                            autem magni quod sint tempore, eius
                            molestias aliquam debitis. Neque saepe
                            dignissimos repudiandae fuga.
                        </p>
                    </div>
                    <div class="single-para">
                        <h3>Data Protection</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem, company name saepe
                            ullam autem magni quod sint tempore,
                            eius molestias aliquam debitis. Neque
                            saepe dignissimos repudiandae fuga.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Nihil eveniet quas
                            dignissimos
                            <strong>aspernatur</strong> ea pariatur
                            corrupti rerum deserunt, ipsum, ipsa eos
                            veniam aspernatur fuga, optio soluta?
                            Libero neque reiciendis cupiditate
                            dolores nam. Earum eius similique
                            sapiente. Iure, sit non. At fuga ipsam
                            veniam.
                        </p>
                    </div>
                    <div class="single-para">
                        <h3>
                            The Collection, Process and Use of
                            Personal Data
                        </h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Harum, quod. Ratione
                            ex delectus quis tenetur odio non alias
                            numquam official ipsum dolor sit, amet
                            consectetur adipisicing elit. Accusamus,
                            laborum.
                        </p>
                        <ol>
                            <li>
                                Mauris ut in vestibulum hasellus
                                ultrices fusce nibh justo,
                                venenatis, amet. Lectus quam in
                                lobortis.
                            </li>
                            <li>
                                Consectetur phasellus
                                <strong>ultrices</strong> fusce nibh
                                justo, venenatis, amet. Lectus quam
                                in lobortis justo venenatis amet.
                            </li>
                            <li>
                                Lectus quam there are two thing is
                                very important in Consectetur
                                phasellus ultrices fusce nibh justo,
                                venenatis, amet in lobortis.
                            </li>
                            <li>
                                Web Development very creative to do
                                something , mauris ut in vestibulum.
                            </li>
                        </ol>
                    </div>
                    <div class="single-para">
                        <h3>Our Policy For Age Under 18</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem, facilis saepe ullam
                            autem magni quod sint tempore, eius
                            molestias aliquam debitis. Neque saepe
                            dignissimos repudiandae fuga.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Section end -->
@endsection
