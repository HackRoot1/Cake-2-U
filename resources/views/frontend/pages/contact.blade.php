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
                        Contact Us
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Contact Us</li>
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

    <!-- Contact Section Start -->
    <div class="container style-one ptb-120">
        <div class="contact-card-wrap style-one d-flex flex-wrap align-items-center justify-content-center round-20">
            <div class="contact-card style-one d-flex flex-wrap align-items-center mb-30">
                <div
                    class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary">
                    <img src="assets/img/icons/phone-white-large.svg" alt="Icon" />
                </div>
                <div class="contact-info">
                    <h3 class="fs-22 fw-normal">
                        Free Consultation
                    </h3>
                    <a href="tel:000123456789" class="text-para link-hover-primary transition d-block">+000 123 456 789</a>
                    <a href="tel:000154458659" class="text-para link-hover-primary transition d-block">+000 - 154 -
                        458659</a>
                </div>
            </div>
            <div class="contact-card style-one d-flex flex-wrap align-items-center mb-30">
                <div
                    class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary">
                    <img src="assets/img/icons/mail-large-white.svg" alt="Icon" />
                </div>
                <div class="contact-info">
                    <h3 class="fs-22 fw-normal">Email Address</h3>
                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#fc95929a93bc8c9592979e9d97998e85d29f9391"
                        class="text-para link-hover-primary transition d-block"><span class="__cf_email__"
                            data-cfemail="f59c9b939ab5859c9b9e97949e90878cdb969a98">[email&#160;protected]</span></a>
                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5b333e3737341b2b323530393a303e292275383436"
                        class="text-para link-hover-primary transition d-block"><span class="__cf_email__"
                            data-cfemail="264e434a4a4966564f484d44474d43545f0845494b">[email&#160;protected]</span></a>
                </div>
            </div>
            <div class="contact-card style-one d-flex flex-wrap align-items-center mb-30">
                <div
                    class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary">
                    <img src="assets/img/icons/pin-large-white.svg" alt="Icon" />
                </div>
                <div class="contact-info">
                    <h3 class="fs-22 fw-normal">Our Location</h3>
                    <p class="mb-0">
                        5609 E Sprague Ave, Spokane Valley, WA
                        99212, USA
                    </p>
                </div>
            </div>
        </div>
        <div class="pt-120 pb-90">
            <h6 class="section-subtitle fs-20 fw-light text_primary text-center mb-8">
                Get In Touch
            </h6>
            <h2 class="section-title style-one fw-normal text-title text-center mb-45">
                Don't Hesitate To Contact Us
            </h2>
            <div class="row">
                <div class="col-lg-6 mb-30">
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
                                    <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Comment"
                                        class="w-100 ht-206 bg-ash text-para border-0 outline-0 round-10 resize-0"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check checkbox style-one mb-20">
                                    <input class="form-check-input" type="checkbox" id="test_2" />
                                    <label class="form-check-label" for="test_2">
                                        I agree with the
                                        <a href="{{ route('frontend.pages.terms-conditions') }}" class="text_secondary link-hover-primary">Terms &
                                            Conditions</a>
                                        &
                                        <a href="{{ route('frontend.pages.privacy-policy') }}" class="text_secondary link-hover-primary">Privacy
                                            Policy</a>
                                    </label>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <button type="submit" class="btn style-two position-relative z-1 round-10">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="promo-video style-two bg-f position-relative z-1 round-30">
                        <a data-fslightbox="video1" href="https://www.youtube.com/watch?v=u31qwQUeGuM"
                            class="play-btn style-one d-flex flex-column align-items-center justify-content-center">
                            <i class="ri-play-large-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="comp-map style-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
            </iframe>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection
