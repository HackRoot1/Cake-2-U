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
                        Gallery
                    </h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        <li>Gallery</li>
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

    <!-- Gallery Section Start -->
    <div class="container style-one pt-120 pb-90">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-1.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-2.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-2.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <a data-fslightbox="gallery" href="assets/img/gallery/gallery-3.jpg"
                    class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                    <img src="assets/img/gallery/gallery-3.jpg" alt="Gallery" class="round-20" />
                    <span
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                            class="ri-add-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-4.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-4.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-5.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-5.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <a data-fslightbox="gallery" href="assets/img/gallery/gallery-6.jpg"
                    class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                    <img src="assets/img/gallery/gallery-6.jpg" alt="Gallery" class="round-20" />
                    <span
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                            class="ri-add-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a data-fslightbox="gallery" href="assets/img/gallery/gallery-7.jpg"
                    class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                    <img src="assets/img/gallery/gallery-7.jpg" alt="Gallery" class="round-20" />
                    <span
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                            class="ri-add-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a data-fslightbox="gallery" href="assets/img/gallery/gallery-8.jpg"
                    class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                    <img src="assets/img/gallery/gallery-8.jpg" alt="Gallery" class="round-20" />
                    <span
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                            class="ri-add-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-9.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-9.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-10.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-10.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <a data-fslightbox="gallery" href="assets/img/gallery/gallery-11.jpg"
                    class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                    <img src="assets/img/gallery/gallery-11.jpg" alt="Gallery" class="round-20" />
                    <span
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                            class="ri-add-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-12.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-12.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a data-fslightbox="gallery" href="assets/img/gallery/gallery-13.jpg"
                            class="gallery-card style-one overflow-hidden d-block position-relative z-1 round-20 mb-30">
                            <img src="assets/img/gallery/gallery-13.jpg" alt="Gallery" class="round-20" />
                            <span
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary position-absolute transition"><i
                                    class="ri-add-fill"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->
@endsection
