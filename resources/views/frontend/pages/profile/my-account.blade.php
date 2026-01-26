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
                        <img src="assets/img/breadcrumb/br-img-3.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-md-8 mb-sm-10">
                    <h2 class="br-title fw-normal mb-12">My Account</h2>
                    <ul class="br-menu list-unstyled mb-0">
                        <li><a href="/">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-lg-3 col-md-2">
                    <div class="br-img">
                        <img src="assets/img/breadcrumb/br-img-4.png" alt="Image" class="d-block mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Account Details Start -->
    <div class="container style-one pt-120 pb-90">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-30 mb-lg-0">
                <div class="account-sidebar" style="position: sticky; top: 80px;">
                    <!-- Profile Card -->
                    <div class="profile-card comment-form-wrap style-one round-20 mb-30 p-30">
                        <div class="text-center mb-20">
                            <div class="profile-image mb-20 position-relative">
                                <img src="https://placehold.co/120x120" alt="Profile" class="w-50 h-50 rounded-circle"
                                    style="width: 120px; height: 120px; object-fit: cover; margin: 0 auto; display: block;">
                            </div>
                            <h4 class="fs-20 fw-normal text-title mb-8">{{ auth()->user()->name ?? 'User Name' }}</h4>
                            <p class="text-para fs-14 mb-15">{{ auth()->user()->email ?? 'user@example.com' }}</p>
                            <div class="profile-badge mb-15">
                                <span class="badge bg_secondary text-white px-3 py-2">Member Since 2024</span>
                            </div>
                        </div>
                        <hr class="my-20">
                        <div class="account-menu-list">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-12">
                                    <a href="#profile-info"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'profile-info')">
                                        <i class="ri-user-line me-12"></i>
                                        <span>Profile Info</span>
                                    </a>
                                </li>
                                <li class="mb-12">
                                    <a href="#addresses"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'addresses')">
                                        <i class="ri-map-pin-line me-12"></i>
                                        <span>Addresses</span>
                                    </a>
                                </li>
                                <li class="mb-12">
                                    <a href="#payment-methods"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'payment-methods')">
                                        <i class="ri-bank-card-line me-12"></i>
                                        <span>Payment Methods</span>
                                    </a>
                                </li>
                                <li class="mb-12">
                                    <a href="#preferences"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'preferences')">
                                        <i class="ri-settings-line me-12"></i>
                                        <span>Preferences</span>
                                    </a>
                                </li>
                                <li class="mb-12">
                                    <a href="#security"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'security')">
                                        <i class="ri-lock-line me-12"></i>
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#orders"
                                        class="menu-link d-flex align-items-center text-para hover-text-primary transition"
                                        onclick="changeTab(event, 'orders')">
                                        <i class="ri-shopping-bag-line me-12"></i>
                                        <span>Order History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Logout Button -->
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn style-three w-100 round-10">
                            <i class="ri-logout-box-line me-10"></i>Logout
                        </button>
                    </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Profile Info Tab -->
                <div id="profile-info" class="tab-content active">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <div class="d-flex justify-content-between align-items-center mb-25">
                            <h4 class="fs-22 fw-normal text-title mb-0">Profile Information</h4>
                            <button class="btn style-outline-secondary btn-sm" onclick="toggleEditMode('profile')">
                                <i class="ri-edit-line me-8"></i>Edit Profile
                            </button>
                        </div>

                        <form id="profile-form" method="POST" action="/profile/update" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">First Name</label>
                                    <input type="text"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        id="first_name" name="first_name" placeholder="First Name" readonly
                                        value="{{ auth()->user()->first_name ?? '' }}">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Last Name</label>
                                    <input type="text"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        id="last_name" name="last_name" placeholder="Last Name" readonly
                                        value="{{ auth()->user()->last_name ?? '' }}">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Email Address</label>
                                    <input type="email"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        name="email" placeholder="Email Address" readonly
                                        value="{{ auth()->user()->email ?? '' }}">
                                    <small class="text-muted d-block mt-8">Email cannot be changed</small>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Phone Number</label>
                                    <input type="tel"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        id="phone" name="phone" placeholder="Phone Number" readonly
                                        value="{{ auth()->user()->phone ?? '' }}">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Date of Birth</label>
                                    <input type="date"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        id="dob" name="dob" readonly value="{{ auth()->user()->dob ?? '' }}">
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Profile Picture</label>
                                    <input type="file"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        id="avatar" name="avatar" disabled accept="image/*">
                                </div>
                                <div class="col-12 mb-25">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Bio (Max 200
                                        characters)</label>
                                    <textarea class="form-control bg-ash border-0 outline-0 round-10 text-para" id="bio" name="bio"
                                        rows="3" placeholder="Tell us about yourself" readonly maxlength="200">{{ auth()->user()->bio ?? '' }}</textarea>
                                </div>
                                <div class="col-12" id="profile-actions" style="display: none;">
                                    <button type="submit" class="btn style-three round-10 me-10">Save Changes</button>
                                    <button type="button" class="btn style-outline-secondary round-10"
                                        onclick="toggleEditMode('profile')">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Addresses Tab -->
                <div id="addresses" class="tab-content" style="display: none;">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <div class="d-flex justify-content-between align-items-center mb-25">
                            <h4 class="fs-22 fw-normal text-title mb-0">Saved Addresses</h4>
                            <button class="btn style-secondary btn-sm" onclick="openAddressModal()">
                                <i class="ri-add-line me-8"></i>Add New Address
                            </button>
                        </div>

                        <div class="addresses-list">
                            <!-- Address Card 1 -->
                            <div class="address-card mb-20 p-20 border round-15 position-relative"
                                style="border: 1px solid #e8e8e8;">
                                <div class="d-flex justify-content-between align-items-start mb-15" style="padding: 20px;">
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <h5 class="fs-16 fw-normal text-title mb-0 me-15">Home</h5>
                                            <span class="badge bg_secondary text-white">Default</span>
                                        </div>
                                        <p class="text-para mb-8">123 Main Street, Apt 4B<br>New York, NY 10001, USA</p>
                                        <p class="text-para mb-0"><strong>Phone:</strong> +1 (555) 123-4567</p>
                                    </div>
                                    <div class="address-actions">
                                        <button class="btn btn-sm style-outline-secondary me-10"
                                            onclick="editAddress()">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Card 2 -->
                            <div class="address-card mb-20 p-20 border round-15 position-relative"
                                style="border: 1px solid #e8e8e8;">
                                <div class="d-flex justify-content-between align-items-start mb-15" style="padding: 20px;">
                                    <div>
                                        <h5 class="fs-16 fw-normal text-title mb-0 me-15">Office</h5>
                                        <p class="text-para mb-8">456 Business Ave, Suite 200<br>New York, NY 10002, USA
                                        </p>
                                        <p class="text-para mb-0"><strong>Phone:</strong> +1 (555) 987-6543</p>
                                    </div>
                                    <div class="address-actions">
                                        <button class="btn btn-sm style-outline-secondary me-10"
                                            onclick="editAddress()">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <p class="text-muted text-center" id="no-addresses" style="display: none;">No addresses saved
                                yet. Add one to get started!</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods Tab -->
                <div id="payment-methods" class="tab-content" style="display: none;">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <div class="d-flex justify-content-between align-items-center mb-25">
                            <h4 class="fs-22 fw-normal text-title mb-0">Payment Methods</h4>
                            <button class="btn style-secondary btn-sm" onclick="openPaymentModal()">
                                <i class="ri-add-line me-8"></i>Add New Card
                            </button>
                        </div>

                        <div class="payment-methods-list">
                            <!-- Payment Card 1 -->
                            <div class="payment-card mb-20 p-20 border round-15 position-relative"
                                style="border: 1px solid #e8e8e8; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px;">
                                <div class="d-flex justify-content-between align-items-start mb-20 text-white">
                                    <div>
                                        <p class="mb-0 fs-14">Visa Card</p>
                                        <h5 class="fs-18 fw-bold mb-0 mt-8">•••• •••• •••• 1234</h5>
                                    </div>
                                    <span class="badge bg-white text-dark">Default</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-end text-white">
                                    <div>
                                        <p class="mb-0 fs-12">Card Holder</p>
                                        <p class="mb-0 fw-bold">John Doe</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0 fs-12">Expires</p>
                                        <p class="mb-0 fw-bold">12/25</p>
                                    </div>
                                </div>
                                <div class="mt-15 d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-light">Set as Default</button>
                                    <button class="btn btn-sm btn-outline-light">Delete</button>
                                </div>
                            </div>

                            <!-- Payment Card 2 -->
                            <div class="payment-card mb-20 p-20 border round-15 position-relative"
                                style="border: 1px solid #e8e8e8; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 20px;">
                                <div class="d-flex justify-content-between align-items-start mb-20 text-white">
                                    <div>
                                        <p class="mb-0 fs-14">Mastercard</p>
                                        <h5 class="fs-18 fw-bold mb-0 mt-8">•••• •••• •••• 5678</h5>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end text-white">
                                    <div>
                                        <p class="mb-0 fs-12">Card Holder</p>
                                        <p class="mb-0 fw-bold">John Doe</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0 fs-12">Expires</p>
                                        <p class="mb-0 fw-bold">08/26</p>
                                    </div>
                                </div>
                                <div class="mt-15 d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-light">Set as Default</button>
                                    <button class="btn btn-sm btn-outline-light">Delete</button>
                                </div>
                            </div>

                            <p class="text-muted text-center" id="no-cards" style="display: none;">No payment methods
                                saved. Add one for faster checkout!</p>
                        </div>
                    </div>
                </div>

                <!-- Preferences Tab -->
                <div id="preferences" class="tab-content" style="display: none;">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <h4 class="fs-22 fw-normal text-title mb-25">Preferences</h4>

                        <!-- Newsletter Section -->
                        <div class="mb-30 pb-30" style="border-bottom: 1px solid #e8e8e8;">
                            <h5 class="fs-16 fw-normal text-title mb-20">Newsletter & Notifications</h5>
                            <div class="form-check form-switch mb-15">
                                <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                <label class="form-check-label" for="newsletter">
                                    Subscribe to our newsletter for offers and updates
                                </label>
                            </div>
                            <div class="form-check form-switch mb-15">
                                <input class="form-check-input" type="checkbox" id="sms-notif" checked>
                                <label class="form-check-label" for="sms-notif">
                                    Receive SMS notifications about orders
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="email-notif" checked>
                                <label class="form-check-label" for="email-notif">
                                    Receive email notifications
                                </label>
                            </div>
                        </div>

                        <!-- Notification Preferences -->
                        <div class="mb-30 pb-30" style="border-bottom: 1px solid #e8e8e8;">
                            <h5 class="fs-16 fw-normal text-title mb-20">What Would You Like To Be Notified About?</h5>
                            <div class="form-check mb-15">
                                <input class="form-check-input" type="checkbox" id="order-confirm" checked>
                                <label class="form-check-label" for="order-confirm">
                                    Order confirmations
                                </label>
                            </div>
                            <div class="form-check mb-15">
                                <input class="form-check-input" type="checkbox" id="shipment" checked>
                                <label class="form-check-label" for="shipment">
                                    Shipment tracking updates
                                </label>
                            </div>
                            <div class="form-check mb-15">
                                <input class="form-check-input" type="checkbox" id="promo">
                                <label class="form-check-label" for="promo">
                                    Promotional offers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="new-products" checked>
                                <label class="form-check-label" for="new-products">
                                    New product launches
                                </label>
                            </div>
                        </div>

                        <!-- Referral Program -->
                        <div>
                            <h5 class="fs-16 fw-normal text-title mb-20">Referral Program</h5>
                            <div class="referral-box p-20 bg-light round-15 mb-15" style="padding: 20px">
                                <p class="text-para mb-15">Your referral code:</p>
                                <div class="input-group mb-15">
                                    <input type="text" class="form-control ht-50 bg-ash border-0 round-10"
                                        value="CAKE2U-ABC123" readonly>
                                    <button class="btn style-secondary" type="button">Copy</button>
                                </div>
                                <p class="text-muted fs-12 mb-0">You have referred <strong>3 friends</strong> and earned
                                    <strong>₹450</strong> in rewards!</p>
                            </div>
                        </div>

                        <button class="btn style-three round-10">Save Preferences</button>
                    </div>
                </div>

                <!-- Security Tab -->
                <div id="security" class="tab-content" style="display: none;">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <h4 class="fs-22 fw-normal text-title mb-25">Account Security</h4>

                        <!-- Change Password -->
                        <div class="mb-30 pb-30" style="border-bottom: 1px solid #e8e8e8;">
                            <h5 class="fs-16 fw-normal text-title mb-20">Change Password</h5>
                            <form method="POST" action="/password/change">
                                @csrf
                                <div class="mb-20">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Current Password</label>
                                    <input type="password"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        placeholder="Enter current password" required>
                                </div>
                                <div class="mb-20">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">New Password</label>
                                    <input type="password"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        placeholder="Enter new password" required>
                                </div>
                                <div class="mb-20">
                                    <label class="form-label fs-14 fw-normal text-title mb-8">Confirm Password</label>
                                    <input type="password"
                                        class="form-control ht-50 bg-ash border-0 outline-0 round-10 text-para"
                                        placeholder="Confirm new password" required>
                                </div>
                                <button type="submit" class="btn style-three round-10">Update Password</button>
                            </form>
                        </div>

                        <!-- Two-Factor Authentication -->
                        <div class="mb-30 pb-30" style="border-bottom: 1px solid #e8e8e8;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fs-16 fw-normal text-title mb-8">Two-Factor Authentication</h5>
                                    <p class="text-para text-muted mb-0">Add an extra layer of security to your account</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="twofa">
                                    <label class="form-check-label" for="twofa"></label>
                                </div>
                            </div>
                        </div>

                        <!-- Active Sessions -->
                        <div class="mb-30 pb-30" style="border-bottom: 1px solid #e8e8e8;">
                            <h5 class="fs-16 fw-normal text-title mb-20">Active Sessions</h5>
                            <div class="session-item mb-15 p-15 border round-10" style="border: 1px solid #e8e8e8;">
                                <div class="d-flex justify-content-between align-items-start mb-10" style="padding: 20px">
                                    <div>
                                        <p class="mb-8"><strong>Chrome on Windows</strong></p>
                                        <p class="text-muted text-para fs-13 mb-8">Last login: 15 Dec 2024, 2:30 PM</p>
                                        <p class="text-muted text-para fs-13">IP: 192.168.1.1</p>
                                    </div>
                                    <span class="badge bg-success">Current</span>
                                </div>
                            </div>
                            <div class="session-item mb-15 p-15 border round-10" style="border: 1px solid #e8e8e8;">
                                <div class="d-flex justify-content-between align-items-start" style="padding: 20px">
                                    <div>
                                        <p class="mb-8"><strong>Safari on iPhone</strong></p>
                                        <p class="text-muted text-para fs-13 mb-8">Last login: 14 Dec 2024, 6:45 PM</p>
                                        <p class="text-muted text-para fs-13">IP: 192.168.1.5</p>
                                    </div>
                                    <button class="btn btn-sm btn-outline-danger">Logout</button>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger">Logout All Other Sessions</button>
                        </div>

                        <!-- Login History -->
                        <div>
                            <h5 class="fs-16 fw-normal text-title mb-20">Login History</h5>
                            <div class="login-history">
                                <div class="history-item mb-15 pb-15 d-flex justify-content-between align-items-center"
                                    style="border-bottom: 1px solid #e8e8e8;">
                                    <div>
                                        <p class="mb-5"><strong>Chrome on Windows</strong></p>
                                        <p class="text-muted text-para fs-13">15 Dec 2024, 2:30 PM - 192.168.1.1</p>
                                    </div>
                                    <span class="badge bg-success">Success</span>
                                </div>
                                <div class="history-item mb-15 pb-15 d-flex justify-content-between align-items-center"
                                    style="border-bottom: 1px solid #e8e8e8;">
                                    <div>
                                        <p class="mb-5"><strong>Safari on iPhone</strong></p>
                                        <p class="text-muted text-para fs-13">14 Dec 2024, 6:45 PM - 192.168.1.5</p>
                                    </div>
                                    <span class="badge bg-success">Success</span>
                                </div>
                                <div class="history-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-5"><strong>Chrome on Windows</strong></p>
                                        <p class="text-muted text-para fs-13">13 Dec 2024, 10:15 AM - 192.168.1.1</p>
                                    </div>
                                    <span class="badge bg-success">Success</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order History Tab -->
                <div id="orders" class="tab-content" style="display: none;">
                    <div class="comment-form-wrap style-one round-20 p-30">
                        <h4 class="fs-22 fw-normal text-title mb-25">Order History</h4>

                        <div class="orders-list">
                            <!-- Order Card 1 -->
                            <div class="order-card mb-20 p-20 border round-15" style="border: 1px solid #e8e8e8;">
                                <div class="row align-items-center" style="padding: 20px">
                                    <div class="col-md-4 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Order ID</p>
                                        <h6 class="text-title fw-bold mb-0">#ORDER-2024-12345</h6>
                                    </div>
                                    <div class="col-md-3 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Date</p>
                                        <h6 class="text-title fw-normal mb-0">15 Dec 2024</h6>
                                    </div>
                                    <div class="col-md-2 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Amount</p>
                                        <h6 class="text-title fw-bold mb-0">₹1,299</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-success mb-10 d-block">Delivered</span>
                                        <button class="btn btn-sm style-outline-secondary">View Details</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Card 2 -->
                            <div class="order-card mb-20 p-20 border round-15" style="border: 1px solid #e8e8e8;">
                                <div class="row align-items-center" style="padding: 20px">
                                    <div class="col-md-4 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Order ID</p>
                                        <h6 class="text-title fw-bold mb-0">#ORDER-2024-12344</h6>
                                    </div>
                                    <div class="col-md-3 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Date</p>
                                        <h6 class="text-title fw-normal mb-0">12 Dec 2024</h6>
                                    </div>
                                    <div class="col-md-2 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Amount</p>
                                        <h6 class="text-title fw-bold mb-0">₹2,499</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-info text-dark mb-10 d-block">In Transit</span>
                                        <button class="btn btn-sm style-outline-secondary">View Details</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Card 3 -->
                            <div class="order-card p-20 border round-15" style="border: 1px solid #e8e8e8;">
                                <div class="row align-items-center" style="padding: 20px">
                                    <div class="col-md-4 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Order ID</p>
                                        <h6 class="text-title fw-bold mb-0">#ORDER-2024-12343</h6>
                                    </div>
                                    <div class="col-md-3 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Date</p>
                                        <h6 class="text-title fw-normal mb-0">10 Dec 2024</h6>
                                    </div>
                                    <div class="col-md-2 mb-15 mb-md-0">
                                        <p class="text-muted fs-12 mb-5">Amount</p>
                                        <h6 class="text-title fw-bold mb-0">₹899</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-success mb-10 d-block">Delivered</span>
                                        <button class="btn btn-sm style-outline-secondary">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Details End -->

    <!-- Modals -->
    <!-- Add Address Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content round-20 border-0">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fs-20 fw-normal text-title">Add New Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/addresses/create">
                        @csrf
                        <div class="mb-20">
                            <label class="form-label fs-14 fw-normal text-title mb-8">Address Label</label>
                            <select class="form-select ht-50 bg-ash border-0 outline-0 round-10">
                                <option selected>Home</option>
                                <option>Office</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-20">
                            <label class="form-label fs-14 fw-normal text-title mb-8">Full Address</label>
                            <textarea class="form-control bg-ash border-0 outline-0 round-10" rows="3" placeholder="Enter full address"
                                required></textarea>
                        </div>
                        <div class="mb-20">
                            <label class="form-label fs-14 fw-normal text-title mb-8">Phone Number</label>
                            <input type="tel" class="form-control ht-50 bg-ash border-0 outline-0 round-10"
                                placeholder="Phone number" required>
                        </div>
                        <div class="form-check mb-20">
                            <input class="form-check-input" type="checkbox" id="setDefault">
                            <label class="form-check-label" for="setDefault">
                                Set as default address
                            </label>
                        </div>
                        <button type="submit" class="btn style-three w-100 round-10">Save Address</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Payment Method Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content round-20 border-0">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fs-20 fw-normal text-title">Add Payment Method</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/payments/create">
                        @csrf
                        <div class="mb-20">
                            <label class="form-label fs-14 fw-normal text-title mb-8">Cardholder Name</label>
                            <input type="text" class="form-control ht-50 bg-ash border-0 outline-0 round-10"
                                placeholder="Name on card" required>
                        </div>
                        <div class="mb-20">
                            <label class="form-label fs-14 fw-normal text-title mb-8">Card Number</label>
                            <input type="text" class="form-control ht-50 bg-ash border-0 outline-0 round-10"
                                placeholder="1234 5678 9012 3456" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <label class="form-label fs-14 fw-normal text-title mb-8">Expiry Date</label>
                                <input type="text" class="form-control ht-50 bg-ash border-0 outline-0 round-10"
                                    placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label class="form-label fs-14 fw-normal text-title mb-8">CVV</label>
                                <input type="text" class="form-control ht-50 bg-ash border-0 outline-0 round-10"
                                    placeholder="123" required>
                            </div>
                        </div>
                        <div class="form-check mb-20">
                            <input class="form-check-input" type="checkbox" id="setDefaultCard">
                            <label class="form-check-label" for="setDefaultCard">
                                Set as default payment method
                            </label>
                        </div>
                        <button type="submit" class="btn style-three w-100 round-10">Add Card</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tab-content {
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .form-control:read-only,
        .form-control[readonly] {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }

        .menu-link {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .menu-link:hover {
            background-color: #f8f9fa;
        }

        .style-outline-secondary {
            color: #666;
            border: 1px solid #666;
            background: transparent;
        }

        .style-outline-secondary:hover {
            background-color: #f8f9fa;
        }

        .btn-outline-danger {
            color: #dc3545;
            border: 1px solid #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }

        .btn-outline-light {
            color: white;
            border: 1px solid white;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: #333;
        }

        input:disabled,
        input[readonly] {
            background-color: #f8f9fa !important;
            cursor: not-allowed;
        }

        .round-15 {
            border-radius: 15px;
        }

        .round-20 {
            border-radius: 20px;
        }

            /* Responsive Design */
            @media (max-width: 1200px) {
                .comment-form-wrap {
                    padding: 25px !important;
                }
            }

            @media (max-width: 991px) {
                .col-lg-3,
                .col-lg-9 {
                    margin-bottom: 30px;
                }

                .account-sidebar {
                    position: relative !important;
                }

                .comment-form-wrap {
                    padding: 20px !important;
                }

                .profile-card {
                    padding: 25px !important;
                }

                .address-actions,
                .payment-actions {
                    width: 100%;
                    display: flex;
                    gap: 10px;
                }

                .address-actions .btn,
                .payment-actions .btn {
                    flex: 1;
                }
            }

            @media (max-width: 768px) {
                .profile-card {
                    padding: 20px !important;
                }

                .fs-20 {
                    font-size: 18px !important;
                }

                .fs-22 {
                    font-size: 20px !important;
                }

                .address-card,
                .payment-card {
                    padding: 15px !important;
                }

                .payment-card {
                    padding: 20px 15px !important;
                }

                .d-md-end {
                    text-align: left !important;
                }

                .col-md-6 {
                    margin-bottom: 15px !important;
                }

                .form-label {
                    font-size: 13px !important;
                }

                .ht-50 {
                    height: 45px !important;
                }

                .menu-link {
                    padding: 8px 10px;
                }
            }

            @media (max-width: 576px) {
                .container.style-one {
                    padding-left: 15px;
                    padding-right: 15px;
                }

                .comment-form-wrap {
                    padding: 15px !important;
                    margin-bottom: 20px !important;
                }

                .profile-card {
                    padding: 15px !important;
                }

                .profile-image img {
                    width: 100px !important;
                    height: 100px !important;
                }

                .fs-14 {
                    font-size: 13px !important;
                }

                .fs-16 {
                    font-size: 14px !important;
                }

                .address-card,
                .payment-card {
                    padding: 12px !important;
                }

                .btn-sm {
                    padding: 6px 10px !important;
                    font-size: 12px !important;
                }

                .badge {
                    font-size: 11px !important;
                }

                .d-flex.gap-2 {
                    gap: 8px !important;
                }
            }
    </style>

    <script>
        function changeTab(event, tabName) {
            event.preventDefault();

            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(tab => {
                tab.style.display = 'none';
            });

            // Show selected tab
            const selectedTab = document.getElementById(tabName);
            if (selectedTab) {
                selectedTab.style.display = 'block';
            }

            // Update active menu link
            const menuLinks = document.querySelectorAll('.menu-link');
            menuLinks.forEach(link => {
                link.style.color = '';
            });
            event.target.closest('.menu-link').style.color = '#E6A444';
        }

        function toggleEditMode(section) {
            if (section === 'profile') {
                const inputs = document.querySelectorAll('#profile-form input, #profile-form textarea');
                const isReadonly = inputs[0].hasAttribute('readonly');

                inputs.forEach(input => {
                    if (isReadonly) {
                        input.removeAttribute('readonly');
                        input.disabled = false;
                    } else {
                        input.setAttribute('readonly', 'readonly');
                        input.disabled = true;
                    }
                });

                const actionsDiv = document.getElementById('profile-actions');
                actionsDiv.style.display = isReadonly ? 'block' : 'none';
            }
        }

        function openAddressModal() {
            const modal = new bootstrap.Modal(document.getElementById('addressModal'));
            modal.show();
        }

        function openPaymentModal() {
            const modal = new bootstrap.Modal(document.getElementById('paymentModal'));
            modal.show();
        }

        function editAddress() {
            openAddressModal();
        }
    </script>
@endsection
