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
                    <h2 class="br-title fw-normal mb-12">FAQ</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>FAQ</li>
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

    <!-- FAQ Section Start -->
    <div class="faq-area style-one ptb-120">
        <div class="container style-one">
            <div class="row align-items-center">
                <div class="col-xl-10 offset-xl-1">
                    <div class="accordion style-one" id="accordionExample_one">
                        <div class="accordion-item round-10" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                            aria-expanded="true" aria-controls="collapseFour" role="button">
                            <div class="accordion-header" id="headingFour">
                                <div class="accordion-button">
                                    Do You Offer Custom Cakes Or
                                    Special Orders?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p>
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                            role="button">
                            <div class="accordion-header" id="headingFive">
                                <div class="accordion-button">
                                    Do You Have Gluten-free, Vegan,
                                    Or Allergy-friendly Options?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" role="button">
                            <div class="accordion-header" id="headingSix">
                                <div class="accordion-button">
                                    Can I Place An Order Online Or
                                    By Phone?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button">
                                    How Far In Advance Should I
                                    Place A Large Or Custom Order?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10"
                            role="button">
                            <div class="accordion-header" id="heading_10">
                                <div class="accordion-button">
                                    Do You Have A Menu Or List Of
                                    Available Items?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapse_10" class="accordion-collapse collapse" aria-labelledby="heading_10"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapse_11" aria-expanded="false" aria-controls="collapse_11"
                            role="button">
                            <div class="accordion-header" id="heading_11">
                                <div class="accordion-button">
                                    Do You Cater For Events Or Offer
                                    Bulk Orders?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapse_11" class="accordion-collapse collapse" aria-labelledby="heading_11"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-10" data-bs-toggle="collapse"
                            data-bs-target="#collapse_14" aria-expanded="false" aria-controls="collapse_14"
                            role="button">
                            <div class="accordion-header" id="heading_14">
                                <div class="accordion-button">
                                    Do You Offer Catering Or Bulk
                                    Orders For Events?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapse_14" class="accordion-collapse collapse" aria-labelledby="heading_14"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapsed round-15" data-bs-toggle="collapse"
                            data-bs-target="#collapse_15" aria-expanded="false" aria-controls="collapse_15"
                            role="button">
                            <div class="accordion-header" id="heading_15">
                                <div class="accordion-button">
                                    Can I Reserve Baked Goods Ahead
                                    Of Time?
                                    <span class="accord-arrow">
                                        <i class="ri-add-line plus"></i>
                                        <i class="ri-subtract-line minus"></i>
                                    </span>
                                </div>
                            </div>
                            <div id="collapse_15" class="accordion-collapse collapse" aria-labelledby="heading_15"
                                data-bs-parent="#accordionExample_one">
                                <div class="accordion-body me-xxl-5 pe-xxl-5">
                                    <p class="fs-xx-14 me-xxl-2">
                                        We believe that the perfect
                                        gift tells a story sparks a
                                        smile and strengthens
                                        relationships. That's why we
                                        carefully select every item
                                        with heart and purpose
                                        supporting local makers,
                                        sustainable practices, and
                                        timeless designs. Whether
                                        you're celebrating a
                                        milestone, expressing
                                        gratitude, or simply
                                        spreading kindness, we're
                                        here to help you give
                                        beautifully and
                                        meaningfully. We envision a
                                        community where every gift
                                        shared brings people closer
                                        together and leaves a
                                        lasting impression
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

    <!-- Contact Section Start -->
    <div class="container style-one pb-120">
        <h6 class="section-subtitle fs-20 fw-light text_primary text-center mb-10">
            Ask Questions
        </h6>
        <h2 class="section-title style-one fw-normal text-title text-center mb-45">
            Do You have Any Questions?
        </h2>
        <form action="#" class="comment-form-wrap style-one round-20" id="cmt-form">
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
                <div class="col-md-6">
                    <div class="form-group position-relative mb-25">
                        <input type="number" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                            placeholder="Phone" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group position-relative mb-25">
                        <input type="text" class="w-100 ht-60 bg-ash text-para border-0 outline-0 round-10"
                            placeholder="Subject" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-25">
                        <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Write A Message"
                            class="w-100 ht-206 bg-ash text-para border-0 outline-0 round-10 resize-0"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="form-check checkbox style-one mb-20">
                        <input class="form-check-input" type="checkbox" id="test_2" />
                        <label class="form-check-label" for="test_2">
                            I agree with the
                            <a href="{{ route('frontend.pages.terms-conditions') }}" class="text_primary link-hover-primary">Terms & Conditions</a>
                            &
                            <a href="{{ route('frontend.pages.privacy-policy') }}" class="text_primary link-hover-primary">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn style-two position-relative z-1 round-10">
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Contact Section Start -->
@endsection
