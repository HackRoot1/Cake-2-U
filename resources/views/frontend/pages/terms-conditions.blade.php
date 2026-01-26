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
                        Terms & Conditions
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Terms & Conditions</li>
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

    <!-- Terms Section start -->
    <div class="terms-wrap ptb-120">
        <div class="container style-one">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="single-para">
                        <h3>Legal Disclaimer:</h3>
                        <p>
                            We may collect personal identification
                            information from Users in a variety of
                            ways, including, but not limited to,
                            when Users visit our site, subscribe to
                            the newsletter, fill out a form, and in
                            connection with other
                            <strong>activities</strong>, services,
                            features or resources we make available
                            on our Site. Users may be asked for, as
                            appropriate, name, email address,
                            mailing address, phone number,
                            <a href="{{ route('frontend.home.index') }}" class="text_primary">company name</a>. We will collect personal
                            identification information from Users
                            only if they voluntarily consent such
                            information to us. Users can always
                            refuse to supply personally
                            identification information, except that
                            it may prevent them from engaging in
                            certain Site related activities.
                        </p>
                    </div>
                    <div class="single-para">
                        <h3>Credit Reporting Terms of Service</h3>
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
                                Consectetur phasellus ultrices fusce
                                nibh justo, venenatis, amet to all
                                design.
                            </li>
                        </ol>
                    </div>
                    <div class="single-para">
                        <h3>
                            Ownership of Site Agreement to Terms of
                            Use
                        </h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem, facilis saepe ullam
                            autem magni quod sint tempore, eius
                            molestias aliquam debitis. Neque saepe
                            dignissimos repudiandae fuga.
                        </p>
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
                        <h3>Provision of Services</h3>
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
                        <h3>Limitation of Liability</h3>
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
                        <h3>Accounts, Passwords and Security</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Maxime nulla minus
                            quasi. Voluptatem, facilis saepe ullam
                            autem magni quod sint tempore, eius
                            molestias aliquam debitis. Neque saepe
                            dignissimos repudiandae fuga.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Nihil eveniet quas
                            dignissimos doloribus ea pariatur
                            corrupti ullam autem magni quod sint
                            tempore saepe ullam autem magni.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms Section end -->
@endsection
