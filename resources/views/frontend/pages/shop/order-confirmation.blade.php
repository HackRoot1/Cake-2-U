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
                        <img src="assets/img/breadcrumb/br-img-5.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">Order Confirmation</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li>Order Confirmed</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-6.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Order Confirmation Section Start -->
    <div class="container style-one pt-120 pb-90">
        <!-- Success Message -->
        <div class="row mb-50">
            <div class="col-12">
                <div class="success-message text-center comment-form-wrap style-one round-20 p-40 p-md-30"
                    style="background: linear-gradient(135deg, rgba(230, 164, 68, 0.1) 0%, rgba(230, 164, 68, 0.05) 100%);">
                    <div class="success-icon mb-20">
                        <i class="ri-check-double-line" style="font-size: 60px; color: #27ae60;"></i>
                    </div>
                    <h2 class="fs-32 fw-normal text-title mb-15">Thank You For Your Order!</h2>
                    <p class="text-para fs-16 mb-0">Your order has been successfully placed. You will receive an email
                        confirmation shortly.</p>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <!-- Main Content -->
            <div class="col-lg-8 mb-lg-30">
                <!-- Order Summary Card -->
                <div class="comment-form-wrap style-one round-20 mb-30 p-30 p-md-20">
                    <div class="order-header mb-25 pb-25" style="border-bottom: 1px solid #e8e8e8;">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-15 mb-md-0">
                                <p class="text-muted fs-14 mb-5">Order Number</p>
                                <h4 class="fs-20 fw-bold text-title mb-0">#ORDER-2024-789654</h4>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <p class="text-muted fs-14 mb-5">Order Date</p>
                                <h4 class="fs-18 fw-normal text-title mb-0">25 January 2026</h4>
                            </div>
                        </div>
                    </div>

                    <div class="order-status mb-25 pb-25" style="border-bottom: 1px solid #e8e8e8;">
                        <h5 class="fs-16 fw-normal text-title mb-20">Order Status</h5>
                        <div class="status-timeline">
                            <div class="timeline-item d-flex mb-15">
                                <div class="timeline-marker me-15 position-relative">
                                    <div class="marker-circle rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px; background: #27ae60; color: white; font-weight: bold;">
                                        <i class="ri-check-line"></i>
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fs-14 fw-bold text-title mb-2">Order Placed</h6>
                                    <p class="text-muted fs-12 mb-0">25 Jan 2026, 2:30 PM</p>
                                </div>
                            </div>

                            <div class="timeline-item d-flex mb-15">
                                <div class="timeline-marker me-15 position-relative">
                                    <div class="marker-circle rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px; background: #27ae60; color: white; font-weight: bold;">
                                        <i class="ri-check-line"></i>
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fs-14 fw-bold text-title mb-2">Payment Confirmed</h6>
                                    <p class="text-muted fs-12 mb-0">25 Jan 2026, 2:35 PM</p>
                                </div>
                            </div>

                            <div class="timeline-item d-flex mb-15">
                                <div class="timeline-marker me-15 position-relative">
                                    <div class="marker-circle rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px; background: #f39c12; color: white; font-weight: bold;">
                                        <i class="ri-time-line"></i>
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fs-14 fw-bold text-title mb-2">Processing (Current)</h6>
                                    <p class="text-muted fs-12 mb-0">Estimated: 26 Jan 2026</p>
                                </div>
                            </div>

                            <div class="timeline-item d-flex mb-15">
                                <div class="timeline-marker me-15 position-relative">
                                    <div class="marker-circle rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px; background: #bdc3c7; color: white;">
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fs-14 fw-normal text-title text-muted mb-2">Shipped</h6>
                                    <p class="text-muted fs-12 mb-0">Estimated: 27 Jan 2026</p>
                                </div>
                            </div>

                            <div class="timeline-item d-flex">
                                <div class="timeline-marker me-15 position-relative">
                                    <div class="marker-circle rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px; background: #bdc3c7; color: white;">
                                    </div>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fs-14 fw-normal text-title text-muted mb-2">Delivered</h6>
                                    <p class="text-muted fs-12 mb-0">Estimated: 28 Jan 2026</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div>
                        <h5 class="fs-16 fw-normal text-title mb-20">Order Items</h5>
                        <div class="order-items">
                            <!-- Item 1 -->
                            <div class="order-item mb-20 pb-20 d-flex gap-20" style="border-bottom: 1px solid #e8e8e8;">
                                <div class="item-image" style="min-width: 100px;">
                                    <img src="https://via.placeholder.com/100" alt="Product" class="rounded-10"
                                        style="width: 100%; height: 100px; object-fit: cover;">
                                </div>
                                <div class="item-details flex-grow-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-10 mb-md-0">
                                            <h6 class="fs-14 fw-bold text-title mb-5">Chocolate Cake</h6>
                                            <p class="text-muted fs-12 mb-0">Qty: 1</p>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <h6 class="fs-14 fw-bold text-title">₹599</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="order-item mb-20 pb-20 d-flex gap-20" style="border-bottom: 1px solid #e8e8e8;">
                                <div class="item-image" style="min-width: 100px;">
                                    <img src="https://via.placeholder.com/100" alt="Product" class="rounded-10"
                                        style="width: 100%; height: 100px; object-fit: cover;">
                                </div>
                                <div class="item-details flex-grow-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-10 mb-md-0">
                                            <h6 class="fs-14 fw-bold text-title mb-5">Vanilla Cheesecake</h6>
                                            <p class="text-muted fs-12 mb-0">Qty: 2</p>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <h6 class="fs-14 fw-bold text-title">₹1,198</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="order-item d-flex gap-20">
                                <div class="item-image" style="min-width: 100px;">
                                    <img src="https://via.placeholder.com/100" alt="Product" class="rounded-10"
                                        style="width: 100%; height: 100px; object-fit: cover;">
                                </div>
                                <div class="item-details flex-grow-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-10 mb-md-0">
                                            <h6 class="fs-14 fw-bold text-title mb-5">Strawberry Pastry</h6>
                                            <p class="text-muted fs-12 mb-0">Qty: 1</p>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <h6 class="fs-14 fw-bold text-title">₹399</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer & Delivery Info -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="comment-form-wrap style-one round-20 p-30 h-100">
                            <h5 class="fs-16 fw-normal text-title mb-20">Billing Address</h5>
                            <p class="text-para mb-8"><strong>John Doe</strong></p>
                            <p class="text-para mb-8">123 Main Street, Apt 4B</p>
                            <p class="text-para mb-8">New York, NY 10001</p>
                            <p class="text-para mb-8">USA</p>
                            <p class="text-para"><strong>Phone:</strong> +1 (555) 123-4567</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="comment-form-wrap style-one round-20 p-30 h-100">
                            <h5 class="fs-16 fw-normal text-title mb-20">Shipping Address</h5>
                            <p class="text-para mb-8"><strong>John Doe</strong></p>
                            <p class="text-para mb-8">123 Main Street, Apt 4B</p>
                            <p class="text-para mb-8">New York, NY 10001</p>
                            <p class="text-para mb-8">USA</p>
                            <p class="text-para"><strong>Phone:</strong> +1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Price Summary -->
                <div class="comment-form-wrap style-one round-20 mb-30 p-30 p-md-20">
                    <!-- Mobile Responsive Adjustment -->
                    <h5 class="fs-16 fw-normal text-title mb-25">Order Summary</h5>

                    <div class="summary-item d-flex justify-content-between mb-15 pb-15"
                        style="border-bottom: 1px solid #e8e8e8;">
                        <span class="text-para">Subtotal</span>
                        <span class="fw-bold text-title">₹2,196</span>
                    </div>

                    <div class="summary-item d-flex justify-content-between mb-15 pb-15"
                        style="border-bottom: 1px solid #e8e8e8;">
                        <span class="text-para">Shipping</span>
                        <span class="fw-bold text-title">₹99</span>
                    </div>

                    <div class="summary-item d-flex justify-content-between mb-15 pb-15"
                        style="border-bottom: 1px solid #e8e8e8;">
                        <span class="text-para">Tax (18%)</span>
                        <span class="fw-bold text-title">₹395</span>
                    </div>

                    <div class="summary-item d-flex justify-content-between mb-25 pb-25"
                        style="border-bottom: 2px solid #e8e8e8;">
                        <span class="text-para">Discount</span>
                        <span class="fw-bold text-success">-₹100</span>
                    </div>

                    <div class="summary-total d-flex justify-content-between mb-25">
                        <span class="fw-bold fs-16 text-title">Total Amount</span>
                        <span class="fw-bold fs-18 text-secondary" style="color: #e6a444;">₹2,590</span>
                    </div>

                    <div class="payment-method mb-25 pb-25" style="border-bottom: 1px solid #e8e8e8;">
                        <p class="text-muted fs-12 mb-8">Payment Method</p>
                        <p class="text-title fw-bold mb-0">Credit Card (Visa ending in 1234)</p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="actions-group d-grid gap-2">
                        <button class="btn style-three round-10 mb-10">
                            <i class="ri-download-line me-8"></i>Download Invoice
                        </button>
                        <button class="btn style-outline-secondary round-10 mb-10">
                            <i class="ri-printer-line me-8"></i>Print Order
                        </button>
                        <button class="btn style-outline-secondary round-10">
                            <i class="ri-eye-line me-8"></i>Track Order
                        </button>
                    </div>
                </div>

                <!-- Order Info Card -->
                <div class="comment-form-wrap style-one round-20 p-30 p-md-20">
                    <h5 class="fs-16 fw-normal text-title mb-20">Need Help?</h5>
                    <div class="help-items">
                        <a href="#" class="help-item d-flex align-items-center text-decoration-none mb-15 pb-15"
                            style="border-bottom: 1px solid #e8e8e8;">
                            <i class="ri-question-line me-10 fs-18 text_secondary" style="color: #e6a444;"></i>
                            <span class="text-para hover-text-primary transition">View FAQs</span>
                        </a>
                        <a href="#" class="help-item d-flex align-items-center text-decoration-none mb-15 pb-15"
                            style="border-bottom: 1px solid #e8e8e8;">
                            <i class="ri-phone-line me-10 fs-18 text_secondary" style="color: #e6a444;"></i>
                            <span class="text-para hover-text-primary transition">Contact Support</span>
                        </a>
                        <a href="#" class="help-item d-flex align-items-center text-decoration-none">
                            <i class="ri-mail-line me-10 fs-18 text_secondary" style="color: #e6a444;"></i>
                            <span class="text-para hover-text-primary transition">Send Email</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Steps Section -->
        <div class="row mt-50 mb-40">
            <div class="col-12">
                <div class="next-steps comment-form-wrap style-one round-20 p-40 p-md-30">
                    <h4 class="fs-24 fw-normal text-title text-center mb-30">What's Next?</h4>
                    <div class="row g-4">
                        <div class="col-md-4 text-center">
                            <div class="step-icon mb-15">
                                <div class="icon-circle mx-auto d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; background: linear-gradient(135deg, #e6a444 0%, #d4924e 100%); color: white; font-size: 30px;">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 fw-normal text-title mb-8">Confirmation Email</h5>
                            <p class="text-para text-muted fs-14">You'll receive a confirmation email with order details
                                within minutes.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="step-icon mb-15">
                                <div class="icon-circle mx-auto d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; background: linear-gradient(135deg, #e6a444 0%, #d4924e 100%); color: white; font-size: 30px;">
                                    <i class="ri-box-3-line"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 fw-normal text-title mb-8">Order Processing</h5>
                            <p class="text-para text-muted fs-14">Your order will be processed and packed within 24 hours.
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="step-icon mb-15">
                                <div class="icon-circle mx-auto d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; background: linear-gradient(135deg, #e6a444 0%, #d4924e 100%); color: white; font-size: 30px;">
                                    <i class="ri-truck-line"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 fw-normal text-title mb-8">Speedy Delivery</h5>
                            <p class="text-para text-muted fs-14">Get tracking updates and receive your order by 28 Jan
                                2026.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Continue Shopping Section -->
        <div class="row mt-40">
            <div class="col-12 text-center">
                <h4 class="fs-24 fw-normal text-title mb-30">Continue Shopping</h4>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="/shop" class="btn style-three round-10">
                        <i class="ri-shopping-bag-line me-8"></i>Continue Shopping
                    </a>
                    <a href="/profile/orders" class="btn style-outline-secondary round-10">
                        <i class="ri-history-line me-8"></i>View My Orders
                    </a>
                    <a href="/" class="btn style-outline-secondary round-10">
                        <i class="ri-home-line me-8"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Confirmation Section End -->
@endsection
