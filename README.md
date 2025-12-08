# CAKE 2 U - Enhanced Project Specification & Architecture Document

**Project Name:** Cake 2 U  
**Project Type:** E-Commerce Platform for Cake Shop  
**Current Date:** December 2025  
**Version:** 2.0 (Enhanced)

---

## TABLE OF CONTENTS

1. [Executive Summary](#executive-summary)
2. [Project Overview](#project-overview)
3. [Target Audience & Market Analysis](#target-audience--market-analysis)
4. [Technology Stack](#technology-stack)
5. [Frontend Features & Workflows](#frontend-features--workflows)
6. [Backend & Admin Panel Features](#backend--admin-panel-features)
7. [Missing Features & Enhancements](#missing-features--enhancements)
8. [Database Architecture](#database-architecture)
9. [Security Implementation](#security-implementation)
10. [API Documentation](#api-documentation)
11. [Deployment & DevOps](#deployment--devops)
12. [Testing Strategy](#testing-strategy)
13. [Performance Optimization](#performance-optimization)
14. [Third-Party Integrations](#third-party-integrations)
15. [Project Timeline & Milestones](#project-timeline--milestones)
16. [Team Structure & Roles](#team-structure--roles)

---

## EXECUTIVE SUMMARY

Cake 2 U is a full-featured e-commerce platform designed specifically for online cake shop businesses. It enables customers to browse, customize, purchase, and schedule deliveries for baked goods while providing administrators with comprehensive management tools for inventory, orders, payments, and business analytics.

**Project Scope:**
- **Frontend:** Responsive customer-facing portal with authentication, shopping cart, and order management
- **Backend:** Robust admin panel with multi-role access control, reporting, and inventory management
- **Integrations:** Payment gateways, SMS notifications, file storage, and address validation
- **Deployment:** Automated CI/CD pipeline with GitHub Actions to Hostinger VPS

---

## PROJECT OVERVIEW

### Vision
To create a modern, scalable e-commerce platform that simplifies cake ordering for customers while empowering cake shop owners with data-driven business insights and operational efficiency.

### Mission
Deliver a seamless online ordering experience with advanced customization options, secure payments, and real-time order tracking.

### Key Business Objectives
- ✅ Enable online cake sales 24/7
- ✅ Reduce operational overhead through automation
- ✅ Improve customer experience with personalization
- ✅ Provide real-time analytics for business decisions
- ✅ Ensure secure, reliable payment processing
- ✅ Scale to handle seasonal demand (birthdays, weddings, festivals)

---

## TARGET AUDIENCE & MARKET ANALYSIS

### Primary Customers
1. **Individual Consumers** (45%)
   - Age: 18-55
   - Occasion: Birthdays, anniversaries, celebrations
   - Behavior: Mobile-first, price-sensitive, values customization

2. **Corporate Buyers** (30%)
   - Age: 25-65
   - Occasion: Office events, client gifts, celebrations
   - Behavior: Bulk orders, recurring purchases, account management

3. **Event Planners & Decorators** (15%)
   - Age: 20-50
   - Occasion: Weddings, parties, corporate events
   - Behavior: Wholesale pricing, quick turnaround, custom designs

4. **Subscription & Loyalty Customers** (10%)
   - Age: All ages
   - Occasion: Weekly deliveries, loyalty rewards
   - Behavior: High lifetime value, retention-focused

### Geographic Focus
- Primary: Major urban centers (Delhi, Bangalore, Mumbai, Pune)
- Secondary: Tier 2 cities
- Future: Pan-India expansion

### Market Seasonality
- **High Season:** Diwali, Valentine's Day, Birthdays (December-February, April-June)
- **Medium Season:** Regular celebrations
- **Low Season:** Between major festivals

---

## TECHNOLOGY STACK

### Frontend
- **HTML5** - Semantic markup and accessibility
- **CSS3** - Styling and animations
- **Tailwind CSS** - Utility-first CSS framework for rapid UI development
- **JavaScript (ES6+)** - Interactive features and client-side logic
- **React (Optional)** - For complex interactive features (future enhancement)
- **Axios** - HTTP client for API requests
- **Web Storage API** - Client-side caching (not localStorage for sandbox)

### Backend
- **Laravel 12** - PHP framework with built-in security features
- **Laravel Eloquent ORM** - Database abstraction and query builder
- **Laravel Sanctum** - API token authentication
- **Laravel Validation** - Input validation and sanitization
- **Laravel Mail** - Email notifications
- **Laravel Queue** - Background job processing

### Database
- **MySQL 8.0+** - Relational database
- **Redis (Optional)** - Session management and caching for high traffic

### Authentication & Security
- **JWT (JSON Web Tokens)** - API authentication
- **OAuth 2.0** - Social login (Google, Facebook)
- **CAPTCHA (reCAPTCHA v3)** - Bot prevention
- **Two-Factor Authentication (2FA)** - Enhanced security
- **SSL/TLS** - HTTPS encryption

### File Storage
- **Google Drive API** - Document storage (invoices, receipts)
- **AWS S3 (Alternative)** - Image and file storage at scale
- **Local Storage (Development)** - For testing

### Payment Gateway
- **Razorpay** - Primary payment processor
- **Razorpay Webhooks** - Real-time payment status updates
- **PhonePe (Razorpay Integration)** - Alternative UPI payment

### SMS & Notifications
- **Twilio** - SMS notifications for OTP, order updates
- **Firebase Cloud Messaging (FCM)** - Push notifications
- **Email** - Transactional and marketing emails

### APIs & Integrations
- **Google Maps API** - Address validation and delivery mapping
- **Google Geocoding API** - Location services
- **SendGrid / AWS SES** - Transactional emails at scale

### DevOps & Deployment
- **Git & GitHub** - Version control and collaboration
- **GitHub Actions** - CI/CD pipeline automation
- **Hostinger VPS** - Cloud hosting (Linux, cPanel)
- **Docker (Optional)** - Containerization for local development
- **Nginx** - Web server
- **SSL Certificate** - Let's Encrypt (free SSL via Hostinger)

### Testing
- **PHPUnit** - Unit and integration testing for Laravel
- **Laravel Dusk** - Browser testing
- **Postman** - API testing and documentation

### Additional Tools
- **Composer** - PHP dependency management
- **npm/Yarn** - JavaScript package management
- **Git Hooks** - Pre-commit validation (Husky)
- **Code Quality Tools** - Laravel Pint, ESLint

---

## FRONTEND FEATURES & WORKFLOWS

### 1. HOME PAGE (Landing Page)

#### Before Login
**Components:**
- Sticky navigation bar with logo, search, Cart icon (with badge), Wishlist icon, Login/Register buttons
- Hero section with hero image carousel (3-5 slides)
- Featured Cakes section (4-6 products with "Quick View" and "Add to Cart")
- Category showcase (Chocolate, Vanilla, Fruit, Custom Cakes, etc.)
- Promotional banners section (rotating banners with CTA)
- Testimonials/Reviews section (customer reviews with star ratings)
- Newsletter subscription form
- Footer with:
  - Quick links (Shop, About, Contact, Blog, FAQ)
  - Social media icons (Facebook, Instagram, Twitter, Pinterest)
  - Contact information (phone, email, address)
  - Payment methods accepted (Razorpay badge)
  - Copyright and legal links

**Performance Optimization:**
- Lazy load images below the fold
- Optimize hero carousel images (WebP format)
- Implement image CDN for fast delivery

#### After Login
**Additional Components:**
- Personalized greeting: "Welcome, [First Name]!"
- "Recommended For You" section based on:
  - Browse history
  - Purchase history
  - Similar products to previously purchased items
- "Recently Viewed" cakes section
- Personalized offers section (user-specific discounts)
- Updated navigation with:
  - Profile dropdown (Profile, Orders, Addresses, Wishlist, Settings, Logout)
  - Cart counter
  - Notifications bell

**Personalization Logic:**
- Store browse history in session/database
- Use collaborative filtering for recommendations
- Track user preferences (categories, price range, flavors)

---

### 2. LOGIN PAGE

**Form Elements:**
- Email/Username input field (with email validation)
- Password input field (with toggle show/hide)
- "Remember Me" checkbox (7-day persistent login)
- "Forgot Password?" link
- Login button
- Social login buttons (Google, Facebook)
- reCAPTCHA v3 integration

**Validation & Error Handling:**
- Real-time email format validation
- Server-side credential verification
- Display specific errors: "Invalid email" vs "Incorrect password"
- Account lockout after 5 failed attempts (15-minute cooldown)
- Log all login attempts (success/failure)

**Security Features:**
- CSRF token protection
- Rate limiting (max 5 login attempts per IP per 15 minutes)
- Secure session management (HTTP-only cookies)
- Log IP address and user agent

**Success Behavior:**
- Redirect to previous page or home page
- Flash success message
- Set secure session/JWT token

---

### 3. REGISTER PAGE

**Form Fields:**
- First Name (required, max 50 chars)
- Last Name (required, max 50 chars)
- Email (required, unique validation)
- Phone Number (required, 10-digit Indian format)
- Password (required, min 8 chars, must include: uppercase, lowercase, number, special char)
- Confirm Password (must match password)
- Referral Code (optional)
- Newsletter subscription (checkbox, default: checked)
- Terms & Conditions (checkbox, required)
- GDPR Compliance (checkbox, required)
- reCAPTCHA v3

**Validation Rules:**
- Email: Must be unique in database
- Phone: Must be valid Indian number (10 digits)
- Password: Strength indicator (weak/medium/strong)
- First/Last Name: Only alphabets allowed

**Post-Registration Flow:**
1. Send verification email with confirmation link (expires in 24 hours)
2. Send OTP to phone number (expires in 10 minutes)
3. Display "Verify Your Email" page with:
   - Resend email link
   - Phone OTP input field
4. After verification, send welcome email with:
   - Account confirmation
   - First purchase discount (if applicable)
   - Quick links to shop and profile
5. Redirect to login page

**Optional Features:**
- Social registration (Google/Facebook OAuth)
- Welcome incentive: 10% discount on first order (if referral code provided)
- Birthday field collection for future birthday discounts

---

### 4. FORGOT PASSWORD

**Steps:**
1. Email input with reCAPTCHA
2. Submit → System checks if email exists
3. If exists:
   - Send password reset link (expires in 1 hour)
   - Display confirmation: "Check your email for reset link"
4. User clicks link in email → Password reset form
5. Reset form:
   - New password field (with strength indicator)
   - Confirm password field
   - Submit button
6. Success → "Password updated successfully" → Redirect to login

**Security:**
- Reset tokens are single-use
- Token expires after 1 hour
- Link works only once
- User cannot use old passwords (last 3 passwords excluded)
- Email sent from no-reply address

---

### 5. SHOP PAGE (Cakes List)

**Layout Components:**
- Breadcrumb navigation: Home > Shop > [Category (if selected)]
- Left sidebar (desktop) / Collapsible filter (mobile):
  - Category filter (checkbox tree for sub-categories)
  - Price range slider (₹100 - ₹5,000+)
  - Rating filter (4+, 3+, 2+, All)
  - Dietary preferences (Veg, Eggless, Vegan, Gluten-Free, etc.)
  - Availability filter (In Stock, Low Stock, Out of Stock)
  - Delivery time filter (Same day, Next day, 3+ days)

- Main content area:
  - Search bar at top with autocomplete (searches cake names and descriptions)
  - Sort dropdown: Price (Low-High), Price (High-Low), Newest, Popularity, Ratings
  - View toggle: Grid (4 columns on desktop, 2 on tablet, 1 on mobile) / List view
  - Pagination: 12/24/48 items per page selector

**Product Card Design:**
- High-quality cake image with hover zoom effect
- Cake name (clickable to detail page)
- Price display (with strikethrough original if discount)
- Discount badge (e.g., "-20%")
- Average rating (stars + number of reviews)
- Short description (2 lines)
- Stock status ("In Stock", "Only 2 left", "Out of Stock")
- "Quick View" button (opens modal with basic details)
- "Add to Cart" button
- "Add to Wishlist" button (heart icon)
- Delivery estimate ("Delivery tomorrow" or "Delivery in 2 days")

**Lazy Loading:**
- Implement Intersection Observer API
- Load images as user scrolls
- Show skeleton loaders while loading

**Search & Autocomplete:**
- As user types, show suggestions:
  - Recent searches (stored in localStorage)
  - Popular searches
  - Matching cake names
- Search history limit: 5 recent searches

**Applied Filters Display:**
- Show active filters as chips at top
- Each chip has X button to remove
- "Clear All" button to reset all filters

**Performance:**
- Debounce search input (300ms)
- Cache search results
- Lazy load images
- Paginate results (API limit: 12-48 per page)

---

### 6. PRODUCT DETAIL PAGE

**Layout:**
- Left side: Product images (main image + thumbnails)
- Right side: Product information and purchase options

**Image Gallery:**
- Main image display with zoom on hover (zoom to 200%)
- Thumbnail strip below (5-6 thumbnails)
- Arrow buttons to navigate
- Lazy load high-res images

**Product Information:**
- Cake name (large heading)
- Rating: 4.5/5 (12 reviews) - clickable to reviews section
- Price display:
  - Original price (strikethrough)
  - Discount price (highlighted in red)
  - Discount percentage badge
- Stock availability:
  - "In Stock" (green badge)
  - "Only 2 left - Order Soon!" (orange warning)
  - "Out of Stock" (disabled state)
- Short description (1-2 lines)
- Detailed description (expandable)
- Ingredients list (allergies highlighted in bold)
- Dietary information badges (Veg, Eggless, etc.)

**Customization Options:**
- **Cake Size:**
  - Dropdown: Small (4 inch), Medium (6 inch), Large (8 inch), Extra Large (10 inch)
  - Price changes based on size
- **Flavor:**
  - Dropdown: Chocolate, Vanilla, Strawberry, Carrot, etc.
  - Price changes if premium flavors selected
- **Message on Cake:**
  - Text input (max 50 characters)
  - Preview of message as user types
  - Font style option (Regular/Bold/Italic)
- **Special Requests:**
  - Text area for additional customization requests
  - Example: "No nuts", "Extra frosting", "Sugar-free"

**Add to Cart Flow:**
1. User selects size, flavor, message
2. Quantity selector (+ / - buttons, max 10)
3. "Add to Cart" button
4. Toast notification: "Added to cart! (1/10 items)"
5. Cart counter updates in navbar

**Add to Wishlist Flow:**
1. Click heart icon
2. If not logged in → Show login modal
3. If logged in → Add to wishlist (heart turns filled/red)
4. Toast: "Added to wishlist"

**Additional Sections Below:**
- **Delivery Information:**
  - Delivery time options (Same day, Next day, Specific date)
  - Delivery fee (calculated based on location later)
  - Free delivery threshold (if applicable)
- **Reviews Section:**
  - Sort options (Helpful, Recent, Highest Rating)
  - Filter by rating (5 star, 4 star, etc.)
  - Review list with:
    - Reviewer name (or "Anonymous")
    - Rating (stars)
    - Review title
    - Review text
    - Review date
    - Helpful votes (Helpful / Not Helpful)
  - Pagination for reviews (5 per page)
  - "Write a Review" button (requires logged-in user who purchased this cake)
- **Related Products Section:**
  - "You might also like" - 4 similar cakes in carousel
  - Based on category or flavor

**Rich Product Features:**
- Image zoom on hover
- Social sharing buttons (Facebook, WhatsApp, Pinterest, Twitter)
- Compare button (Add to comparison list)
- Email this product to friend
- Product code/SKU display

---

### 7. CART PAGE

**Layout:**
- Cart header: "Shopping Cart (3 items)"
- Cart items section
- Order summary section (right side on desktop, bottom on mobile)

**Cart Items Table:**
- Product image (small thumbnail, clickable to detail page)
- Product name + customization (Size, Flavor, Message)
- Unit price (original and discounted)
- Quantity selector (- / input field / +)
- Item total (price × quantity)
- Remove button (X icon)
- Save for later button

**Row Actions:**
- Hover effects (highlight row)
- Trash icon to remove
- Save for later button
- Click product to view details in new tab

**Order Summary (Right Sidebar / Bottom):**
- Subtotal: ₹500
- Tax (if applicable): ₹50
- Discount: -₹50
- Delivery Charges: ₹0 (or ₹50, calculate based on location later)
- **Total: ₹500**

- Coupon/Promo Code input field:
  - Input field + Apply button
  - Show applied coupon (removable)
  - Display discount amount

**Action Buttons:**
- "Continue Shopping" button → Back to shop page
- "Proceed to Checkout" button → Checkout page
- "Save Cart for Later" button (allows users to save cart and come back)

**Empty Cart State:**
- "Your cart is empty" message
- "Continue Shopping" button
- Featured products carousel

**Cart Persistence:**
- Store cart in database (for logged-in users)
- Auto-save cart every 30 seconds
- Show last saved indicator

---

### 8. WISHLIST PAGE

**Layout:**
- Wishlist header: "My Wishlist (4 items)"
- Wishlist items grid (4 columns on desktop, 2 on mobile)

**Wishlist Item Card:**
- Product image (clickable)
- Product name (clickable)
- Price (original and discounted)
- Discount badge
- Rating and reviews count
- Stock status
- "Buy Now" button → Add to cart + redirect to cart
- "Move to Cart" button → Direct add to cart
- "Remove" button (X icon)
- Heart icon (filled, click to remove)

**Bulk Actions:**
- Select multiple items (checkboxes)
- Bulk action toolbar: "Add All to Cart", "Delete All"

**Empty Wishlist State:**
- "Your wishlist is empty" message
- "Start Shopping" button
- "View Recommended Items" section

**Wishlist Sharing (Optional):**
- Share wishlist link with friends
- Generate shareable URL

---

### 9. CHECKOUT PAGE

**Step Indicator (at top):**
- Shipping Address → Billing Address → Order Summary → Confirmation

**Step 1: Delivery Address**
- For logged-in users:
  - Option to use saved addresses (radio buttons)
  - "Add New Address" button (opens form)
- Address form fields:
  - Full name (required)
  - Phone number (required)
  - Pincode (required - to calculate delivery charge)
  - Street address (required)
  - City (required)
  - State (required, dropdown)
  - Landmark/Apartment number (optional)
  - Address type: Home / Office / Other
  - "Save for future use" checkbox
  - "Set as default address" checkbox

**Address Validation:**
- Integrate Google Maps API for autocomplete
- Validate pincode format (India: 6 digits)
- Show delivery availability warning for unserviceable areas

**Step 2: Delivery Options**
- **Delivery Date:**
  - Calendar picker (disable past dates and holidays)
  - Show available delivery slots
  - Option for same-day delivery (if available)
- **Delivery Time Slot:**
  - Morning (8 AM - 12 PM)
  - Afternoon (12 PM - 4 PM)
  - Evening (4 PM - 8 PM)
  - Night (8 PM - 10 PM)
- **Special Requests:**
  - Text area for additional instructions
  - Max 200 characters
- **Gift Wrap & Message:**
  - Checkbox: "Add gift wrapping" (+₹50)
  - Checkbox: "Add greeting card" (+₹20)
  - Text area: Personalized message (max 100 chars)

**Step 3: Order Summary**
- Cart items table (read-only, or collapsible)
- Price breakdown:
  - Subtotal
  - Tax
  - Delivery charge
  - Discount/Coupon
  - **Total**
- Promo code input (if not already applied)
- Payment method selection:
  - Credit/Debit Card
  - UPI (via Razorpay)
  - Net Banking
  - Wallet (PhonePe, Google Pay, etc.)
  - EMI options (if available)

**Billing Address:**
- Checkbox: "Same as delivery address"
- If unchecked, show address form

**Final Review & Confirmation:**
- Order summary review
- "Place Order" button
- Back to cart button

---

### 10. PAYMENT PAGE

**Integration with Razorpay:**
- Hosted checkout (recommended) - Razorpay handles UI
- Embedded checkout (alternative)

**Flow:**
1. User clicks "Pay Now" on checkout
2. Create order in Razorpay API
3. Display Razorpay payment modal/form
4. User enters payment details (or selects saved method)
5. Razorpay processes payment
6. Webhook notifies backend (async)
7. Redirect to success/failure page

**Payment Options Display:**
- Credit/Debit Cards
- UPI (PhonePe, Google Pay, BHIM, etc.)
- Net Banking (ICICI, HDFC, SBI, Axis, etc.)
- Wallets (PhonePe, Paytm, Google Pay)
- Buy Now Pay Later (Razorpay BNPL)

**Security Measures:**
- PCI DSS compliant (via Razorpay)
- No sensitive card data stored on server
- HTTPS encryption
- Order ID and customer details sent to Razorpay
- Verify webhook signature from Razorpay

**Payment Timeout:**
- 15-minute timeout for payment completion
- Show countdown timer
- Redirect to failure page on timeout

---

### 11. ORDER SUCCESS/FAILURE PAGE

**Success Page:**
- Large success icon (checkmark)
- "Order Placed Successfully!" heading
- Order number (clickable to view order details)
- Order details snapshot:
  - Items ordered
  - Delivery date and time
  - Delivery address
  - Total amount paid
  - Order ID / Transaction ID
- Confirmation message: "We'll send you order updates via email and SMS"
- Action buttons:
  - "View Order Details" → View order page
  - "Continue Shopping" → Shop page
  - "Download Invoice" (PDF)

**Email Notification:**
- Send order confirmation email within 1 minute
- Include order details, items, delivery info
- Include payment receipt (PDF)

**SMS Notification:**
- Send order confirmation SMS
- Include order number and delivery date
- Include order tracking link

**Failure Page:**
- Error icon
- "Payment Failed" heading
- Error reason (from Razorpay)
- Order status: "Payment Failed - Try Again"
- Action buttons:
  - "Retry Payment" → Back to payment page
  - "View Cart" → Cart page
  - "Save Order for Later" (save draft order)
  - "Contact Support" → Support form

**Timeout Page:**
- "Payment Timeout" heading
- Message: "Your payment session has expired"
- Action buttons:
  - "Try Again" → Checkout
  - "View Cart" → Cart page

---

### 12. VIEW ORDER PAGE / ORDER TRACKING

**Order Header:**
- Order number: #2024-001234
- Order date: 15 Dec 2024, 2:30 PM
- Order status: Shipped (with status badge color)
- Download invoice button

**Order Status Timeline:**
- Visual timeline showing:
  - Order Confirmed ✓ (15 Dec 2:30 PM)
  - Processing → (15 Dec 4:00 PM)
  - Packed → (15 Dec 5:30 PM)
  - Shipped → (16 Dec 9:00 AM) - Current step
  - Out for Delivery → (Not yet)
  - Delivered → (Not yet)

**Shipment Tracking:**
- Tracking number (clickable to courier website)
- Courier name (e.g., Delhivery)
- Current location map (if available)
- Real-time tracking updates
- Estimated delivery: 16 Dec by 6:00 PM

**Order Details Section:**
- Items ordered:
  - Product name
  - Customization (Size, Flavor, Message)
  - Quantity
  - Unit price
  - Item total
- Subtotal
- Tax
- Delivery charge
- Discount applied
- **Total**

**Delivery Information:**
- Delivery address
- Recipient name
- Phone number
- Delivery date and time
- Special instructions (if any)

**Billing Information:**
- Billing address
- Payment method used
- Transaction ID

**Actions Available (based on status):**
- If status is "Processing" or "Confirmed":
  - Cancel Order button
- If status is "Delivered":
  - Return/Replace button (within 48 hours)
  - Reorder button (same items)
  - Leave Review button
- Always available:
  - Download Invoice (PDF)
  - Contact Support button
  - Print Order

**Reorder Functionality:**
- "Reorder" button adds same items to cart
- User can modify quantities/customizations before checkout

---

### 13. PROFILE PAGE

**Navigation Tabs:**
- Profile Info
- Addresses
- Payment Methods
- Preferences
- Account Security

**Tab 1: Profile Info**
- Display fields (editable):
  - First Name
  - Last Name
  - Email (read-only)
  - Phone Number
  - Date of Birth (optional, for birthday discounts)
  - Profile Picture (upload and crop functionality)
  - Bio (optional, max 200 chars)
- Edit button → Enable edit mode
- Save and Cancel buttons (only in edit mode)
- Success message on save

**Tab 2: Addresses**
- List of saved addresses (cards):
  - Address label (Home, Office, etc.)
  - Full address
  - Phone number
  - "Set as Default" option
  - Edit button
  - Delete button
- "Add New Address" button → Address form modal
- Max 5 saved addresses

**Tab 3: Payment Methods**
- List of saved cards:
  - Card type icon (Visa, Mastercard)
  - Last 4 digits: XXXX XXXX XXXX 1234
  - Cardholder name
  - Expiry date
  - "Set as Default" option
  - Delete button
- Wallet info (PhonePe, Google Pay balance if available)
- "Add New Payment Method" button → Razorpay save option

**Tab 4: Preferences**
- Newsletter subscription:
  - Checkbox: Subscribe to offers and updates
  - Checkbox: Receive SMS notifications
  - Checkbox: Receive email notifications
- Notification preferences:
  - Order confirmations
  - Shipment tracking
  - Promotional offers
  - New product launches
- Referral code display:
  - Unique referral link
  - Copy to clipboard button
  - Referrals made count
  - Rewards earned display

**Tab 5: Account Security**
- Last login info: "Last login: 15 Dec 2024, 2:30 PM from Chrome (Mac)"
- Active sessions:
  - Device name
  - Login time
  - Logout option
- Two-factor authentication:
  - Status: Enabled/Disabled
  - Enable/Disable button
- Password change link → Separate page

---

### 14. ORDERS PAGE

**Order List Features:**
- Search bar: Search by order number, product name, date
- Filter tabs: All Orders, Processing, Shipped, Delivered, Cancelled
- Sort dropdown: Date (Newest), Date (Oldest), Price (High-Low), Price (Low-High)
- Pagination: 10/25/50 items per page

**Order List Cards/Table:**
- Order number (clickable)
- Order date
- Items count
- Total amount
- Status badge (color-coded)
- Estimated delivery date
- Quick action buttons:
  - View Details → View order page
  - Track → If shipped
  - Reorder → If delivered
  - Cancel → If processing/confirmed
  - Return/Exchange → If delivered (within 48 hours)

**Filter by Date Range:**
- From date picker
- To date picker
- Apply button

**Empty Orders State:**
- "No orders yet" message
- "Start Shopping" button
- Featured products carousel

**Order Summary Dashboard:**
- Total orders placed
- Total amount spent
- Average order value
- Last order date

---

### 15. CHANGE PASSWORD PAGE

**Form Fields:**
- Current Password (input, required)
- New Password (input, required, with strength indicator)
- Confirm New Password (input, required)
- Password strength indicator (Weak/Medium/Strong)

**Password Requirements Display:**
- Minimum 8 characters
- At least 1 uppercase letter
- At least 1 lowercase letter
- At least 1 number
- At least 1 special character (@, #, $, %, etc.)

**Form Validation:**
- Current password must be correct
- New password must be different from current
- New password must meet all requirements
- Confirm password must match new password
- Show real-time validation feedback

**Buttons:**
- "Update Password" button (disabled until all validations pass)
- "Cancel" button → Back to profile

**Success/Error Messages:**
- Success: "Password updated successfully"
- Error: Show specific validation error
- Confirmation: "Your password has been changed. You'll be logged out shortly."
- Auto-logout after 3 seconds
- Redirect to login page

**Additional Security Options:**
- Checkbox: "Logout from all devices after password change"
- Send email notification to registered email
- Email notification content:
  - "Your password was changed on 15 Dec 2024 at 2:30 PM"
  - "If this wasn't you, click here to reset your password immediately"

---

### 16. LOGOUT FUNCTIONALITY

**Logout Flow:**
1. User clicks "Logout" in profile dropdown
2. Confirmation modal: "Are you sure you want to logout?"
3. On confirmation:
   - Clear session/JWT token
   - Clear localStorage data (cart, preferences, etc.)
   - Redirect to home page
   - Show flash message: "You have been logged out successfully"

**Security Measures:**
- Clear all session data server-side
- Invalidate JWT tokens
- Prevent back button access to protected pages

---

### 17. ADDITIONAL PAGES (MISSING)

#### 17.1 About Us Page
- Company mission and story
- Team information
- Company achievements
- Gallery of cakes and events

#### 17.2 Contact Us Page
- Contact form (name, email, subject, message)
- Contact information (phone, email, address)
- Business hours
- Google Maps integration for location
- FAQ section

#### 17.3 FAQ Page
- Frequently asked questions grouped by category:
  - Ordering
  - Payment
  - Delivery
  - Returns & Refunds
  - Customization
  - Account
- Collapsible Q&A format
- Search functionality

#### 17.4 Blog Page
- Blog article list with pagination
- Article categories
- Search functionality
- Featured articles
- Author information
- Related articles section

#### 17.5 Privacy Policy & Terms of Service
- Legal compliance pages
- Versioning and last updated date
- Sections:
  - Privacy Policy: Data collection, usage, security, GDPR compliance
  - Terms of Service: User obligations, payment terms, delivery terms, dispute resolution

#### 17.6 Return & Refund Policy Page
- Detailed return process
- Refund timeline
- Conditions for returns
- How to request return
- FAQs about returns

#### 17.7 Delivery Policy Page
- Serviceable areas
- Delivery charges
- Delivery time estimates
- Holiday schedule
- Same-day delivery availability
- Cancellation and postponement policy

#### 17.8 404 Not Found Page
- Friendly error message
- Navigation suggestions
- "Go to Home" button
- Featured products carousel

#### 17.9 500 Error Page
- Error message: "Something went wrong"
- "Try again" button
- "Contact Support" button

#### 17.10 Comparison Page (if implementing product comparison)
- Compare 2-4 products side-by-side
- Display specifications, prices, ratings
- Add selected products to cart

---

## BACKEND & ADMIN PANEL FEATURES

### ADMIN AUTHENTICATION

#### 1. Admin Login Page
**Features:**
- Email/Username input
- Password input (show/hide toggle)
- "Remember Me" checkbox (7-day persistent)
- reCAPTCHA v3 integration
- "Forgot Password?" link
- Social login options (Google, Facebook)

**Security:**
- Rate limiting (5 attempts per 15 minutes per IP)
- Account lockout after 5 failed attempts
- Two-factor authentication (2FA) - OTP via email/SMS
- Audit log entry for all login attempts
- Session timeout after 30 minutes of inactivity

**Post-Login Behavior:**
- Redirect to admin dashboard
- Set secure HTTP-only cookie for session
- Log login event with IP, user agent, timestamp

---

### 2. ADMIN DASHBOARD

**Dashboard Sections:**

**A. Key Metrics Cards (KPIs):**
- Total Orders: 1,234 (with trend indicator: ↑ 15% from last month)
- Total Revenue: ₹5,40,000 (with trend: ↑ 12%)
- Total Customers: 856 (with trend: ↑ 8%)
- Active Products: 124
- Pending Orders: 23 (clickable)
- Low Stock Products: 5 (clickable)

**B. Sales Charts:**
- Line chart: Sales trend (Last 7 days, 30 days, 90 days, 1 year)
- Bar chart: Orders by status (Processing, Shipped, Delivered, Cancelled)
- Pie chart: Revenue by category (Chocolate, Fruit, Custom, etc.)
- Area chart: Daily sales revenue

**C. Recent Orders Table:**
- Order number (clickable)
- Customer name
- Items count
- Total amount
- Status
- Order date
- Quick actions: View, Edit, Cancel
- Pagination and sort options

**D. Recent Customers List:**
- Customer name
- Email
- Phone
- Total purchases
- Lifetime value
- Last order date
- Quick actions: View profile, Send message

**E. Best-Selling Products:**
- Product image
- Product name
- Units sold
- Revenue
- Trend chart
- Quick actions: View, Edit

**F. Stock Alerts:**
- Products with low inventory
- Out of stock products
- Overstock products
- Quick action: Reorder/Adjust quantity

**G. Quick Actions Widgets:**
- Add New Product button
- View All Orders button
- View All Customers button
- Send Newsletter button
- Generate Report button

**H. Customizable Dashboard:**
- Drag-and-drop widgets to rearrange
- Widget visibility toggle
- Save preferred layout
- Reset to default layout

**I. Real-Time Updates:**
- Auto-refresh data every 5 minutes
- Notification bell for important events:
  - New orders
  - Low stock alerts
  - Customer complaints
  - Payment issues

**J. Exportable Reports:**
- Export dashboard data as PDF/Excel
- Date range selection
- Selected metrics selection

---

### 3. ACCESS CONTROL (ROLES & PERMISSIONS)

**Role Hierarchy:**
1. **Super Admin** - Full access to all features
2. **Admin** - Full access except settings and role management
3. **Manager** - Manage orders, customers, products, reports
4. **Staff** - View-only access to orders, customers, products
5. **Delivery Partner** - View assigned orders and update delivery status
6. **Custom Role** - Configurable permissions

**Permission Groups:**
- Dashboard (View, Export)
- Products (View, Create, Edit, Delete, Bulk Actions)
- Categories (View, Create, Edit, Delete)
- Orders (View, Edit, Cancel, Delete)
- Customers (View, Create, Edit, Delete, View Orders)
- Payments (View, Refund, Generate Reports)
- Coupons (View, Create, Edit, Delete, Activate/Deactivate)
- Reports (View, Generate, Export)
- Settings (View, Edit)
- Content Management (View, Create, Edit, Delete)
- Reviews (View, Approve, Reject, Delete, Respond)
- Delivery (View, Manage, Assign, Track)
- Backup (View, Create, Restore)
- Audit Logs (View)

**Role Management Features:**
- Create custom roles
- Assign permissions to roles
- Hierarchical permission inheritance
- Duplicate existing role
- Audit log for role/permission changes
- Bulk assign roles to users

---

### 4. USER MANAGEMENT (STAFF)

**Staff List View:**
- Search bar (by name, email, phone)
- Filter tabs: All Staff, Active, Inactive
- Sort options: Name, Email, Role, Date Joined, Last Login
- Pagination: 10/25/50 items per page

**Staff List Table:**
- Staff ID
- Name
- Email (clickable to open detail view)
- Phone
- Role
- Status (Active/Inactive badge)
- Last login date/time
- Quick actions: View, Edit, Delete, Reset Password, Deactivate

**Add New Staff:**
- Form fields:
  - First Name (required)
  - Last Name (required)
  - Email (required, unique)
  - Phone Number (required)
  - Password (auto-generated and sent via email)
  - Confirm Password
  - Role dropdown (Admin, Manager, Staff, Delivery Partner, Custom)
  - Permissions assignment (if custom role)
  - Status: Active/Inactive
  - Department (optional)
  - Office Location (for multi-location setup)
  - Assign password expiry date (optional)

**Edit Staff:**
- Same fields as add form (password change optional)
- Activity log showing:
  - All actions performed by this staff member
  - Login/logout history
  - Changes made to data

**Staff Detail View:**
- Profile picture
- Contact information
- Role and permissions
- Status
- Account created date
- Last login date/time
- Activity log (recent actions)
- Orders handled (count)
- Edit button
- Deactivate/Reactivate button
- Reset password button
- Delete button

**Bulk Actions:**
- Select multiple staff members
- Bulk actions toolbar:
  - Change role
  - Activate/Deactivate
  - Reset passwords
  - Delete
  - Send message/email

**Email Notifications:**
- Send welcome email with temporary password on account creation
- Send notification on role change
- Send notification on account deactivation
- Send password reset email

---

### 5. CUSTOMER MANAGEMENT

**Customer List View:**
- Search bar (by name, email, phone, customer ID)
- Filter options:
  - Date range (registration date)
  - Customer status (Active, Inactive)
  - Lifetime value range
  - Location/City
- Sort options: Name, Email, Registration Date, Lifetime Value, Last Order
- Pagination: 10/25/50 items per page

**Customer List Table:**
- Customer ID
- Name
- Email (clickable)
- Phone
- Registration Date
- Total Orders
- Lifetime Value (₹)
- Last Order Date
- Status (Active/Inactive badge)
- Quick actions: View Profile, View Orders, Send Message, Block/Unblock

**Add New Customer (Manual):**
- Form fields:
  - First Name (required)
  - Last Name (required)
  - Email (required, unique)
  - Phone Number (required)
  - Password (auto-generated)
  - Address (optional)
  - City/State (optional)
  - Newsletter subscription
  - Account status (Active/Inactive)

**Customer Detail View/Profile:**
- Customer information:
  - Name, email, phone
  - Registration date
  - Profile picture
  - Address on file
- Order history:
  - List of all orders
  - Total orders, total spent
  - Average order value
  - Most frequent delivery address
- Saved addresses (can edit/delete)
- Saved payment methods
- Notes section (internal admin notes about customer)
- Contact history (emails/messages sent)
- Referral information (if referred by someone)
- Loyalty points/rewards balance
- Edit customer button
- Block/Unblock customer button
- Send promotional message button
- Manual add credit/discount button

**Customer Actions:**
- Send promotional email
- Send SMS notification
- Block customer (disable account)
- Delete customer (with confirmation)
- Export customer data
- Merge duplicate customer accounts

**Bulk Actions:**
- Select multiple customers
- Send bulk message/email
- Block/Unblock
- Export selected customers

---

### 6. PRODUCT MANAGEMENT

**Product List View:**
- Search bar (by name, SKU, category)
- Filter tabs: All Products, Active, Inactive
- Filter options:
  - Category (multi-select)
  - Price range
  - Stock status (In Stock, Low Stock, Out of Stock)
  - Supplier
  - Rating (4+, 3+, 2+)
  - Date added
- Sort options: Name, Price, Stock, Rating, Most Sold
- View toggle: Grid / List / Table
- Pagination: 12/24/48 items per page

**Product Card (Grid View):**
- Product image
- Product name
- SKU
- Category
- Price
- Stock level
- Rating and review count
- Status badge (Active/Inactive)
- Quick actions: View, Edit, Delete, Duplicate

**Product List Table:**
- Thumbnail image
- Product name
- SKU
- Category
- Price (original and selling)
- Stock quantity
- Rating
- Status
- Last updated
- Quick actions: View, Edit, Delete

**Add New Product:**
- **Basic Information:**
  - Product name (required)
  - SKU/Product code (required, unique)
  - Category (required, with sub-category)
  - Short description (max 150 chars)
  - Detailed description (rich text editor)
  - Tags (multi-select or create new)

- **Pricing:**
  - Cost price (for profit calculation)
  - Selling price (required)
  - Discount type (Percentage / Fixed Amount)
  - Discount value (optional)
  - Sale price (auto-calculated)
  - Price history (for tracking)

- **Images & Media:**
  - Upload main image (required)
  - Upload additional images (5-10 images)
  - Crop and optimize images
  - Reorder images (drag-drop)
  - Set main product image
  - Video URL (optional, YouTube/Vimeo)

- **Inventory:**
  - Stock quantity (required)
  - Reorder level (alert when stock falls below)
  - SKU/Barcode
  - Warehouse/Location (if multi-warehouse)
  - Track inventory by variant

- **Customization Options:**
  - Add size options (Small, Medium, Large, XL)
    - Price modifier for each size
  - Add flavor options
    - Price modifier for premium flavors
  - Add toppings (optional)
  - Custom message option (checkbox)
  - Custom request text area (checkbox)

- **Attributes:**
  - Dietary info (Veg, Eggless, Vegan, Gluten-Free, Dairy-Free, Nut-Free, Sugar-Free)
  - Allergies (contains nuts, dairy, eggs, etc.)
  - Shelf life / Expiry
  - Storage instructions
  - Serving size

- **Delivery Information:**
  - Lead time (days required for order)
  - Delivery time slot options
  - Delivery charge (if applicable)
  - Minimum order quantity
  - Maximum order quantity

- **SEO:**
  - Meta title (auto-filled from name, editable)
  - Meta description (auto-filled, editable)
  - Meta keywords (comma-separated)
  - Slug/URL (auto-generated, editable)
  - Canonical URL (optional)

- **Status:**
  - Active/Inactive toggle
  - Featured product checkbox
  - New arrival checkbox
  - On sale checkbox
  - Visibility: Visible to all / Visible to registered users only

- **Related Products:**
  - Select related/complementary products
  - Max 5 related products

- **Submit Options:**
  - Save as draft
  - Save and continue editing
  - Save and publish
  - Save and add another

**Edit Product:**
- All fields same as add product
- Version history (show changes made)
- Last edited by (staff member)
- Last edited date

**Product Detail View:**
- All product information
- View count (how many times viewed)
- Sales count
- Reviews count
- Wishlist count
- Performance metrics (sales trend, popularity)
- Edit button
- Duplicate button
- Archive/Deactivate button
- Delete button

**Bulk Actions:**
- Select multiple products
- Bulk edit options:
  - Change category
  - Change price (by percentage or fixed amount)
  - Change status (Active/Inactive)
  - Add tags
  - Adjust stock
  - Change visibility
  - Delete

**Product Images Management:**
- Upload images (drag-drop or browse)
- Image optimization (auto-resize, compression)
- Crop images
- Reorder images
- Delete images
- Alt text for each image

**Stock Management:**
- Real-time stock update
- Manual stock adjustment
- Stock history (log of all adjustments)
- Low stock alerts (threshold-based)
- Reorder reminder
- Stock transfer between locations (if multi-warehouse)

---

### 7. CATEGORY MANAGEMENT

**Category List View:**
- List of all categories (hierarchical tree view)
- Search functionality
- Sort options: Name, Product Count, Date Created

**Category Tree Display:**
- Parent categories with expandable/collapsible sub-categories
- Product count for each category
- Quick actions: Edit, Delete, View Products

**Add New Category:**
- Category name (required)
- Slug/URL (auto-generated, editable)
- Parent category (for sub-categories)
- Category description (optional)
- Category image (thumbnail)
- Meta title (for SEO)
- Meta description (for SEO)
- Meta keywords
- Status: Active/Inactive
- Display order (for menu ordering)
- Save button

**Edit Category:**
- Same fields as add
- Update button
- Delete button

**Category Detail View:**
- Category information
- Product count in category
- Sub-categories (if any)
- Products list (paginated)
- Edit button
- Delete button (with confirmation if products exist)

**Bulk Actions:**
- Select multiple categories
- Activate/Deactivate
- Delete

**Hierarchical Structure:**
- Support unlimited levels (Cakes → Chocolate → Dark Chocolate)
- Drag-drop to rearrange hierarchy
- Visual tree display
- Breadcrumb navigation

---

### 8. ORDER MANAGEMENT

**Order List View:**
- Search bar (by order number, customer name, email)
- Filter tabs: All Orders, Pending, Processing, Shipped, Delivered, Cancelled, Returned
- Filter options:
  - Date range (order date)
  - Customer
  - Amount range
  - Payment status (Pending, Completed, Failed, Refunded)
  - Delivery status
- Sort options: Order Date (Newest), Order Date (Oldest), Amount (High-Low), Amount (Low-High)
- Pagination: 10/25/50 items per page

**Order List Table:**
- Order ID/Number (clickable)
- Customer name
- Order date
- Items count
- Total amount
- Payment status badge (color-coded)
- Delivery status badge
- Delivery date (if scheduled)
- Quick actions: View, Edit, Print, Cancel, Refund

**Order Detail View:**
- Order header:
  - Order number
  - Order date and time
  - Customer information (name, email, phone)
- Order items table:
  - Product image (thumbnail)
  - Product name
  - Customization (size, flavor, message)
  - Quantity
  - Unit price
  - Item total
  - Subtotal, Tax, Discount, Delivery, Total
- Delivery information:
  - Delivery address
  - Delivery date and time slot
  - Special instructions
  - Recipient name and phone
- Billing information:
  - Billing address
  - Payment method
  - Transaction ID
- Order status timeline
- Payment status
- Actions available:
  - Edit order details (if permitted)
  - Update order status
  - Cancel order (if allowed)
  - Process refund
  - Print order/invoice
  - Send SMS/Email to customer
  - Add note/comment
  - Reassign delivery partner

**Update Order Status:**
- Dropdown to select new status
- Add note about status change
- Option to notify customer (SMS/Email)
- Update button
- Confirmation modal

**Order Status Workflow:**
- Pending → Processing → Packed → Shipped → Out for Delivery → Delivered
- Cancelled status (allowed from Pending, Processing)
- Returned status (after Delivered)
- Failed status (for payment failures)

**Order Cancellation:**
- Confirmation modal
- Reason selection (Customer request, Payment failed, Out of stock, Other)
- Additional notes
- Refund confirmation (if applicable)
- Cancel button

**Order Refund:**
- Refund amount (auto-filled, editable)
- Refund method selection (Original payment method, Credit/Store credit)
- Reason selection
- Notes
- Process refund button
- Refund tracking information

**Bulk Actions:**
- Select multiple orders
- Bulk status update
- Bulk cancel orders
- Bulk refund
- Export selected orders

**Order Notes:**
- Add internal notes (visible only to staff)
- Display existing notes with timestamp and author
- Edit/delete own notes

**Order Printing:**
- Print invoice
- Print packing slip
- Print shipping label
- Print order receipt

---

### 9. PAYMENT MANAGEMENT

**Transaction List View:**
- Search bar (by transaction ID, order ID, customer name)
- Filter options:
  - Date range
  - Payment method
  - Payment status (Pending, Completed, Failed, Refunded)
  - Amount range
- Sort options: Date (Newest), Date (Oldest), Amount (High-Low)
- Pagination: 10/25/50 items per page

**Transaction List Table:**
- Transaction ID
- Order number (clickable)
- Customer name
- Amount (₹)
- Payment method (Card, UPI, Net Banking, Wallet)
- Payment status badge (green/red/yellow)
- Transaction date
- Quick actions: View, Refund, Download Receipt

**Transaction Detail View:**
- Transaction header:
  - Transaction ID (Razorpay transaction ID)
  - Order number
  - Customer information
- Payment details:
  - Amount
  - Payment method
  - Payment gateway (Razorpay)
  - Transaction date and time
  - Payment status
  - Card/UPI details (last 4 digits)
- Order details:
  - Order number and date
  - Items list
  - Order amount breakdown
- Refund information (if applicable):
  - Refund amount
  - Refund status
  - Refund date
  - Refund reason
- Actions:
  - Download receipt/invoice
  - Process refund
  - View order
  - Send receipt to customer
  - Retry payment (if failed)

**Process Refund:**
- Refund amount (pre-filled, editable)
- Refund method:
  - Original payment method
  - Store credit
- Reason selection (Customer request, Quality issue, Cancellation, Return, Other)
- Additional notes
- Confirmation modal
- Process button
- Refund tracking (shows processing status)

**Refund Status:**
- Initiated
- Processing
- Completed
- Failed

**Payment Reports:**
- Daily payment summary
- Weekly payment summary
- Monthly payment summary
- Payment method breakdown
- Failed payment tracking
- Refund summary

**Webhook Management (Advanced):**
- Razorpay webhook configuration
- Webhook logs
- Manual webhook verification
- Webhook retry mechanism

---

### 10. COUPON/DISCOUNT MANAGEMENT

**Coupon List View:**
- Search bar (by coupon code, description)
- Filter options:
  - Status (Active, Inactive, Expired)
  - Discount type (Percentage, Fixed amount)
  - Date range (created/expiry)
- Sort options: Code, Type, Value, Expiry Date, Usage
- Pagination: 10/25/50 items per page

**Coupon List Table:**
- Coupon code (clickable)
- Description
- Discount type (% or ₹)
- Discount value
- Validity period
- Usage count / Usage limit
- Status badge (Active/Inactive/Expired)
- Quick actions: View, Edit, Deactivate, Delete

**Add New Coupon:**
- **Basic Information:**
  - Coupon code (required, unique, uppercase)
  - Description (optional)
  - Status: Active/Inactive

- **Discount Configuration:**
  - Discount type: Percentage / Fixed amount
  - Discount value (required)
  - Minimum purchase amount (optional)
  - Maximum discount value (for percentage discounts)

- **Validity:**
  - Start date (required)
  - End date (required)
  - Activation time (optional)
  - Expiry time (optional)

- **Usage Limits:**
  - Usage limit per coupon (total usage)
  - Usage limit per customer (max uses per customer)
  - One-time use checkbox

- **Applicability:**
  - Applicable to all products / Specific categories / Specific products
  - Exclude specific products (optional)
  - Minimum order value (optional)
  - Maximum order value (optional)
  - First purchase only (checkbox)
  - VIP customers only (checkbox)

- **Advanced Options:**
  - Free shipping (checkbox)
  - Stack with other coupons (checkbox)
  - User segments/groups (optional)

- **Save Options:**
  - Save and publish
  - Save as draft
  - Save and add another

**Edit Coupon:**
- All fields same as add
- Cannot change coupon code after creation
- Usage history (show which customers used it)
- Edit button
- Save button

**Coupon Detail View:**
- All coupon information
- Usage statistics:
  - Total uses
  - Total discount given
  - Revenue impact
  - List of customers who used (with dates and amounts)
- Performance chart (usage over time)
- Edit button
- Deactivate button
- Delete button
- Export button (coupon data)

**Bulk Actions:**
- Select multiple coupons
- Activate/Deactivate
- Delete
- Extend expiry date
- Adjust discount value

**Coupon Performance Report:**
- Most used coupons
- Highest revenue impact
- Coupon effectiveness (orders with vs without)
- Customer acquisition through coupons

**Coupon Validation (Frontend Integration):**
- Auto-validate coupon code on checkout
- Show discount amount before applying
- Show specific error messages:
  - "Coupon expired"
  - "Coupon not valid for this purchase"
  - "Coupon limit exceeded"
  - "Minimum purchase amount not met"

---

### 11. REPORTS & ANALYTICS

**Report Dashboard:**
- Pre-built report templates
- Custom report builder
- Scheduled reports
- Report export options

**Pre-Built Reports:**

**A. Sales Report:**
- Total sales (period)
- Sales trend chart (daily/weekly/monthly)
- Sales by category
- Sales by product
- Revenue vs orders
- Average order value trend
- Date range selector
- Export to PDF/Excel
- Schedulable (daily/weekly/monthly email)

**B. Customer Report:**
- Total customers (period)
- New customers trend
- Customer acquisition source
- Customer lifetime value distribution
- Customer retention rate
- Repeat customer percentage
- Customer demographics (city, age group)
- Export capability
- List of top customers (by purchase value)

**C. Product Report:**
- Total products
- Best-selling products (by quantity and revenue)
- Worst-selling products
- Product performance trends
- Stock value analysis
- Product ratings and reviews
- Category performance
- Export capability

**D. Order Report:**
- Total orders (period)
- Order trend chart
- Orders by status
- Order fulfillment time analysis
- Repeat order rate
- Order cancellation rate
- Return rate
- Export capability

**E. Payment Report:**
- Total transactions
- Payment method breakdown
- Failed payment rate
- Refund summary
- Payment processing time
- Revenue by payment method
- Export capability

**F. Inventory Report:**
- Stock levels overview
- Low stock products alert
- Overstock analysis
- Stock turnover ratio
- Inventory value
- Warehouse-wise inventory (if multi-warehouse)
- Expiring soon products (if applicable)

**G. Customer Feedback Report:**
- Average product ratings
- Review count and trends
- Top-rated products
- Low-rated products (potential issues)
- Review sentiment analysis
- Common complaints/feedback themes

**H. Delivery Report:**
- On-time delivery percentage
- Average delivery time
- Delivery issues/complaints
- Courier performance (if multiple couriers)
- Delivery cost analysis
- Return/refund due to delivery issues

**Custom Report Builder:**
- Drag-drop metrics selection
- Date range selection
- Filter options (by category, product, customer, etc.)
- Chart type selection
- Save custom report template
- Schedule report generation

**Report Export:**
- Export formats: PDF, Excel, CSV
- Email delivery option
- Scheduled reports (daily, weekly, monthly)
- Report retention policy (auto-delete old reports)

**Dashboard Visualizations:**
- Line charts (trends over time)
- Bar charts (comparisons)
- Pie charts (breakdowns)
- Tables (detailed data)
- Heat maps (seasonal patterns)
- Funnel charts (conversion analysis)

---

### 12. SETTINGS

**General Settings:**
- **Site Information:**
  - Site name
  - Site logo (upload)
  - Favicon (upload)
  - Site description (SEO)
  - Contact email
  - Contact phone
  - Business address
  - Business hours
  - Social media links (Facebook, Instagram, Twitter, Pinterest)

- **Site Features:**
  - Enable/disable blog
  - Enable/disable reviews
  - Enable/disable wishlist
  - Enable/disable gift wrapping
  - Enable/disable subscription
  - Enable/disable loyalty points
  - Enable/disable referral program

- **Email Settings:**
  - Email provider (SMTP)
  - SMTP server
  - SMTP port (587 for TLS, 465 for SSL)
  - SMTP username
  - SMTP password
  - From email address
  - From name
  - Test email button
  - Email templates management:
    - Order confirmation
    - Shipping notification
    - Delivery notification
    - Return confirmation
    - Newsletter
    - Password reset
    - Welcome email
    - Promotional emails

**Payment Gateway Settings:**
- **Razorpay Integration:**
  - API key (public)
  - API secret key (encrypted, display only first 4 chars)
  - Mode: Test / Live
  - Webhook URL (auto-generated)
  - Webhook secret (auto-generated)
  - Enable payment method: Card, UPI, Net Banking, Wallet
  - Enable BNPL option
  - Test credentials button
  - Webhook verification log

**Delivery Settings:**
- **Delivery Options:**
  - Enable same-day delivery
  - Delivery time slots:
    - Morning (8 AM - 12 PM)
    - Afternoon (12 PM - 4 PM)
    - Evening (4 PM - 8 PM)
    - Night (8 PM - 10 PM)
  - Holiday schedule (dates when delivery not available)
  - Maximum order value for same-day delivery
  - Minimum order value for free delivery
  - Delivery charge matrix:
    - By distance/pincode
    - By order value
    - By category
  - Lead time (days required for cake preparation)
  - Serviceable areas/pincodes (whitelist/blacklist)

**Notification Settings:**
- **SMS Notifications (Twilio):**
  - Twilio Account SID
  - Twilio Auth Token
  - Twilio Phone Number
  - Enable SMS notifications
  - SMS notification templates (order confirmation, shipment, delivery, etc.)
  - Test SMS button

- **Email Notifications:**
  - Enable email notifications
  - Email template selection
  - Notification triggers (order placed, shipped, delivered, etc.)

- **Push Notifications (Firebase):**
  - Enable push notifications (future feature)
  - Firebase Server Key
  - Firebase Sender ID

**SEO Settings:**
- **General SEO:**
  - Site description (meta description)
  - Meta keywords
  - Enable XML sitemap
  - Robots.txt content
  - Google Analytics integration
  - Google Search Console integration

- **Structured Data:**
  - Organization schema (JSON-LD)
  - Product schema
  - LocalBusiness schema

**API Settings (for developers):**
- API documentation link
- API rate limiting
- Webhook configuration
- API key management (create, regenerate, delete)

**Backup & Security Settings:**
- **Backup:**
  - Auto-backup frequency (daily, weekly, monthly)
  - Backup retention (how many backups to keep)
  - Last backup date/time
  - Manual backup button
  - Backup storage location (Google Drive, local, etc.)

- **Security:**
  - SSL certificate information
  - HTTPS status
  - Security scan status
  - Password policy (minimum length, complexity)
  - Account lockout settings (failed attempts, lockout duration)
  - Session timeout duration
  - 2FA enforcement for admins
  - IP whitelist (optional, for admin access)

**Tax Settings:**
- **GST Configuration (India-specific):**
  - GST registration number
  - GST tax rate (%)
  - Apply GST to all products
  - Exclude specific categories from GST
  - CGST/SGST ratio (if applicable)

---

### 13. CONTENT MANAGEMENT

**Banner Management:**
- **Banner List:**
  - List of all promotional banners
  - Search functionality
  - Filter by status (Active, Inactive)
  - Sort by creation date, display order

- **Add/Edit Banner:**
  - Banner image upload (required)
  - Alt text for image (required, for accessibility)
  - Banner title (optional, meta description)
  - Banner description (optional)
  - Banner link/CTA (optional)
  - CTA button text (optional)
  - Display order (priority)
  - Status: Active/Inactive
  - Display date range (start and end date)
  - Target audience (all users, new customers, VIP, etc.)
  - Preview before publishing
  - Save and publish

- **Banner Performance:**
  - Views count
  - Click count
  - CTR (click-through rate)

**Promotional Content Management:**
- **Content Sections:**
  - Manage content for different page sections:
    - Home page sections
    - Category pages
    - Seasonal promotions
    - Flash sales announcements
    - Newsletter content

- **Add/Edit Content:**
  - Title (required)
  - Description (rich text editor)
  - Images (upload multiple)
  - Links/CTAs
  - Display location (page section)
  - Status: Draft/Published
  - Publish date/time (schedule content)
  - Expiry date (auto-unpublish)
  - Target audience
  - Preview

- **Content Versioning:**
  - View previous versions
  - Rollback to previous version
  - Compare versions
  - Version history

**Newsletter Management:**
- **Newsletter Templates:**
  - Create/edit newsletter templates
  - Template variables (name, order history, etc.)
  - Newsletter builder (drag-drop components)
  - Preview newsletter
  - Test send

- **Newsletter Campaigns:**
  - Create new campaign
  - Select template
  - Set target audience
  - Schedule send time
  - Track opens and clicks
  - View campaign performance

---

### 14. REVIEWS MANAGEMENT

**Review List View:**
- Search bar (by product name, customer name)
- Filter options:
  - Status (Pending, Approved, Rejected)
  - Rating (5-star, 4-star, etc.)
  - Date range
- Sort options: Newest, Oldest, Rating (High-Low), Helpful votes
- Pagination: 10/25/50 items per page

**Review List Table:**
- Product name
- Reviewer name
- Rating (stars)
- Review title
- Review text (truncated)
- Status badge (Pending/Approved/Rejected)
- Date
- Helpful votes count
- Quick actions: View, Approve, Reject, Delete, Respond

**Review Detail View:**
- Product image and name
- Reviewer name and profile
- Review date
- Rating (stars)
- Review title
- Full review text
- Reviewer verification ("Verified Purchase" badge)
- Helpful votes count
- Current status
- Admin actions:
  - Approve button
  - Reject button (with reason)
  - Delete button (with confirmation)
  - Respond button

**Approve/Reject Review:**
- Modal confirmation
- If rejecting, reason selection:
  - Inappropriate content
  - Spam
  - Offensive language
  - Competitor review
  - Other
- Additional notes
- Notify reviewer checkbox
- Save button

**Admin Response to Review:**
- Response text editor
- Preview response
- Post response button
- Edit/Delete own responses

**Bulk Actions:**
- Select multiple reviews
- Bulk approve
- Bulk reject (with reason)
- Bulk delete
- Bulk respond (with template)

**Review Moderation Settings:**
- Auto-approve reviews from verified purchases
- Require approval before publishing
- Disable reviews for out-of-stock products
- Filter profanities (auto-flag reviews with bad words)

---

### 15. DELIVERY MANAGEMENT

**Delivery Slots Management:**
- **Manage Slots:**
  - Add delivery time slots
  - Edit existing slots
  - Delete slots
  - Activate/Deactivate slots

- **Slot Configuration:**
  - Slot date (or recurring weekly)
  - Start time
  - End time
  - Maximum deliveries per slot
  - Available slots counter
  - Status: Active/Inactive

- **Calendar View:**
  - Calendar display of all slots
  - Slot availability indicator
  - Click on slot to view/edit details
  - Drag-drop to reschedule slots (if implementing calendar features)

**Delivery Management:**
- **Assign Deliveries:**
  - List of pending deliveries
  - Drag-drop assign to delivery partner
  - Auto-assign based on zone/location
  - Bulk assign deliveries

- **Delivery Partner Management:**
  - List of delivery partners (third-party couriers or own delivery staff)
  - Delivery partner details (name, contact, assigned zone)
  - Performance metrics (on-time %, customer rating, deliveries count)
  - Workload (current deliveries assigned)

- **Delivery Tracking:**
  - Real-time tracking of deliveries
  - Map view showing all active deliveries
  - Delivery status update:
    - Out for delivery
    - Delivered (with photo proof, optional)
    - Failed (with reason)
    - Rescheduled
  - Customer notification on status update (SMS/Email)
  - Delivery duration tracking

- **Delivery Issues:**
  - Log delivery failure
  - Failure reason selection
  - Retry scheduling
  - Customer communication

**Delivery Reports:**
- On-time delivery percentage
- Average delivery time
- Delivery partner performance
- Customer issues
- Cost analysis

---

### 16. BACKUP AND RESTORE

**Backup Management:**
- **Scheduled Backups:**
  - Auto-backup frequency:
    - Daily (at specific time)
    - Weekly (specific day and time)
    - Monthly (specific date and time)
  - Backup retention (keep last N backups)
  - Storage location (Google Drive, local server, AWS S3)
  - Backup encryption (optional)
  - Backup compression

- **Backup List:**
  - List of all backups
  - Backup date and time
  - File size
  - Status (Completed, In Progress, Failed)
  - Download button
  - Restore button
  - Delete button
  - Auto-delete option

- **Manual Backup:**
  - Create backup now button
  - Backup progress indicator
  - Download backup after completion

**Restore from Backup:**
- Select backup to restore from
- Confirmation modal with warning:
  - "This action will overwrite current data"
  - Estimated restore time
- Restore button
- Backup progress
- Email notification on completion
- Restoration success/failure message

**Backup Verification:**
- Test backup integrity
- Verify backup can be restored
- Test restore in sandbox environment

**Backup Security:**
- Encrypted backup storage
- Secure backup access logs
- Backup deletion audit trail

---

### 17. AUDIT LOGS

**Audit Log List:**
- Search bar (by user, action, date)
- Filter options:
  - Date range
  - User (staff member)
  - Action type (Create, Edit, Delete, Login, Logout, etc.)
  - Entity (Product, Order, Customer, etc.)
- Sort options: Newest, Oldest
- Pagination: 10/25/50 items per page

**Audit Log Table:**
- User (staff member name/email)
- Action (Create, Edit, Delete, View, Login, Logout, etc.)
- Entity type (Product, Order, Customer, Settings, etc.)
- Entity name/ID
- Timestamp (date and time)
- IP address
- User agent/Device
- Change details (what changed - old value to new value)

**Audit Log Detail:**
- Full details of the action
- Before/after comparison (for edits)
- User who performed action
- Timestamp
- IP address
- Browser/Device information
- Related entities (if applicable)

**Audit Log Retention Policy:**
- Auto-delete logs older than X days (configurable)
- Manual delete older logs button
- Archive logs to external storage (Google Drive, S3)

**Audit Log Reports:**
- User activity report
- Data change history
- Login/logout logs
- Failed action attempts
- Security events (login failures, unauthorized access attempts)
- Export capability (PDF, Excel)

**Real-Time Logging:**
- Log all admin actions immediately
- No delay in audit trail

---

## MISSING FEATURES & ENHANCEMENTS

### 1. CUSTOMER-FACING FEATURES (Not Yet Mentioned)

**A. Live Chat & Customer Support:**
- Live chat widget on website
- Chat history for registered users
- FAQ chatbot integration
- Support ticket system
- Ticket status tracking
- Email support integration

**B. Loyalty & Rewards Program:**
- Points earning on purchases
- Points redemption
- Tier-based loyalty (Silver, Gold, Platinum)
- Member-exclusive offers
- Birthday reward
- Referral rewards

**C. Subscription Service:**
- Monthly cake subscription plans
- Customizable frequency (weekly, bi-weekly, monthly)
- Flexible pause/resume options
- Discount on subscriptions
- Gift subscriptions

**D. Personalized Recommendations:**
- Recommendation engine based on:
  - Browse history
  - Purchase history
  - Similar user behavior
  - Trending products
  - Seasonal items
- "You might also like" section
- "Frequently bought together" suggestions
- AI-powered product suggestions

**E. Advanced Search & Filters:**
- Full-text search
- Search suggestions/autocomplete
- Advanced filters (price, ratings, delivery time, dietary preferences)
- Search history
- Saved searches
- Search analytics (trending searches, no-result searches)

**F. Product Comparison:**
- Add products to comparison
- Side-by-side comparison
- Compare up to 4 products
- Highlight differences
- Add all compared products to cart

**G. Pre-Order System:**
- Allow pre-orders for upcoming seasonal cakes
- Delivery date selection
- Automatic order confirmation email
- Reminder before delivery

**H. Gift Cards & Vouchers:**
- Purchase gift cards (digital and physical)
- Redemption on checkout
- Balance tracking
- Expiry date
- Transfer gift cards

**I. Social Features:**
- Share reviews on social media
- Share products on social media
- Share wishlist with friends
- Social login integration
- User-generated content (photos of cakes)

**J. Mobile App (Future):**
- Native iOS/Android app
- App-exclusive deals
- Push notifications
- Mobile wallet integration

---

### 2. ADMIN PANEL ENHANCEMENTS

**A. Advanced Analytics & Business Intelligence:**
- Customer lifetime value (CLV) analysis
- Cohort analysis (customer groups by signup/purchase date)
- Churn analysis (customer retention trends)
- Funnel analysis (from browsing to purchase)
- Heatmaps (user behavior on website)
- A/B testing framework

**B. Inventory Management Enhancements:**
- Barcode scanning integration
- Stock forecasting (predict stock needs based on trends)
- Automated reorder system
- Multi-warehouse inventory sync
- SKU-level inventory tracking
- Batch/lot tracking (if using ingredients)

**C. Marketing & Campaign Management:**
- Email marketing campaigns
- SMS marketing campaigns
- Push notification campaigns
- Campaign performance tracking
- A/B testing for campaigns
- Customer segmentation for targeted campaigns
- Marketing automation

**D. Customer Segmentation:**
- Manual customer groups/segments
- Auto-segment based on behavior
- VIP customer management
- Risk of churn identification
- Win-back campaigns

**E. Advanced Reporting:**
- Custom dashboard creation
- Predictive analytics
- Forecasting (sales, inventory)
- Cohort analysis reports
- Retention analysis
- Real-time alerts for important metrics

**F. Expense Management:**
- Track business expenses
- Expense categories
- Receipt uploads
- Expense reports
- Profit analysis (revenue - expenses)

**G. Multi-Location Support:**
- Manage multiple shops
- Location-wise sales tracking
- Location-wise inventory
- Location-wise staff management
- Per-location settings

**H. Accounting Integration:**
- GST invoice generation
- E-invoice (e-invoice) for GST compliance
- E-way bill generation (for interstate transport)
- Ledger management
- Tax compliance reports
- Integration with Quickbooks/Tally (future)

**I. CRM Features:**
- Customer communication history
- Customer interaction timeline
- Customer notes
- Customer preference tracking
- Customer health score

**J. Workflow Automation:**
- Automated email sequences
- Trigger-based workflows (when order placed → send email)
- Conditional logic
- Task automation
- Order workflow automation

---

### 3. TECHNICAL ENHANCEMENTS

**A. Performance Optimization:**
- Image optimization (WebP, lazy loading)
- Code splitting (lazy load JavaScript)
- Caching strategy (browser cache, server cache)
- CDN integration for static assets
- Database query optimization
- API response caching

**B. Search Functionality:**
- Elasticsearch integration for full-text search
- Fuzzy search (handle typos)
- Search analytics
- Autocomplete suggestions

**C. Real-Time Features:**
- WebSocket integration for real-time notifications
- Live order updates
- Live inventory updates
- Real-time chat

**D. Mobile Responsiveness:**
- Ensure 100% mobile-first design
- Touch-friendly buttons
- Mobile-optimized checkout
- Mobile app readiness (PWA - Progressive Web App)

**E. Accessibility:**
- WCAG 2.1 AA compliance
- Screen reader support
- Keyboard navigation
- High contrast mode
- Alt text for all images
- Form labels and error messages

**F. SEO Optimization:**
- Meta tags for all pages
- Structured data (Schema.org)
- XML sitemap generation
- Robots.txt
- Canonical URLs
- Mobile-friendly testing
- Page speed optimization

**G. API Development:**
- RESTful API for integrations
- API documentation (Swagger/OpenAPI)
- API versioning
- Rate limiting
- API authentication (JWT)
- API webhooks

---

### 4. SECURITY ENHANCEMENTS

**A. Data Privacy & Compliance:**
- GDPR compliance (EU customers)
- Right to be forgotten (data deletion)
- Data privacy policy
- Consent management
- Data breach notification process

**B. Payment Security:**
- PCI DSS compliance (Razorpay handles this)
- Fraud detection system
- Suspicious activity alerts
- Secure payment flow

**C. API Security:**
- API rate limiting
- IP whitelisting
- CORS configuration
- API key rotation
- Webhook signature verification

**D. Session Security:**
- Session timeout
- Concurrent session management
- Device-based session tracking
- Session activity monitoring

**E. Infrastructure Security:**
- DDoS protection
- WAF (Web Application Firewall)
- SSL/TLS certificates (auto-renewal)
- Security headers (CSP, X-Frame-Options, etc.)
- Secrets management

---

### 5. OPERATIONAL FEATURES

**A. Customer Service Features:**
- Ticket/Issue tracking system
- FAQ management
- Knowledge base
- Community forum
- Feedback forms
- Survey integration

**B. Notification System:**
- In-app notifications
- Email notifications
- SMS notifications
- Push notifications (mobile app)
- Notification preferences management
- Notification history

**C. Quality Assurance:**
- Testing framework (unit, integration, E2E tests)
- Automated testing (CI/CD)
- Manual testing checklist
- Bug tracking system
- Performance monitoring

**D. Monitoring & Logging:**
- Application error logging
- Performance monitoring
- Server monitoring
- Database monitoring
- API monitoring
- Uptime monitoring
- Alert system for critical issues

**E. Documentation:**
- User documentation (help pages)
- API documentation
- Admin panel documentation
- Developer documentation (for future contributors)

---

## DATABASE ARCHITECTURE

### Core Tables

**Users Table:**
```
- id (PK)
- first_name
- last_name
- email (UNIQUE)
- phone_number
- password_hash
- date_of_birth (for birthday offers)
- profile_picture_url
- email_verified (boolean)
- phone_verified (boolean)
- email_verified_at
- phone_verified_at
- newsletter_subscribed (boolean)
- status (active/inactive/banned)
- two_factor_enabled (boolean)
- two_factor_secret
- last_login_at
- created_at
- updated_at
```

**Orders Table:**
```
- id (PK)
- order_number (UNIQUE)
- user_id (FK)
- subtotal (decimal)
- tax (decimal)
- discount (decimal)
- delivery_charge (decimal)
- total (decimal)
- payment_method
- payment_status (pending/completed/failed/refunded)
- delivery_status (processing/packed/shipped/out_for_delivery/delivered/cancelled/returned)
- delivery_date
- delivery_time_slot
- special_requests (text)
- order_date
- created_at
- updated_at
```

**Order_Items Table:**
```
- id (PK)
- order_id (FK)
- product_id (FK)
- product_name
- product_price
- quantity
- size (Small/Medium/Large/XL)
- flavor
- custom_message
- item_total
- created_at
```

**Products Table:**
```
- id (PK)
- name (UNIQUE)
- sku (UNIQUE)
- category_id (FK)
- description
- short_description
- price (decimal)
- cost_price (decimal)
- discount_type (percentage/fixed)
- discount_value (decimal)
- sale_price (decimal, auto-calculated)
- stock_quantity
- reorder_level
- dietary_info (veg/eggless/vegan/etc)
- allergies
- shelf_life
- lead_time_days
- image_url
- is_active (boolean)
- is_featured (boolean)
- rating (decimal, average)
- review_count
- created_at
- updated_at
```

**Categories Table:**
```
- id (PK)
- name (UNIQUE)
- slug
- parent_category_id (FK, for hierarchical categories)
- description
- image_url
- display_order
- is_active (boolean)
- meta_title (SEO)
- meta_description (SEO)
- meta_keywords (SEO)
- created_at
- updated_at
```

**Payments Table:**
```
- id (PK)
- order_id (FK, UNIQUE)
- transaction_id (Razorpay ID, UNIQUE)
- amount (decimal)
- currency
- payment_method
- payment_status (pending/completed/failed/refunded)
- razorpay_payment_id
- razorpay_order_id
- razorpay_signature
- paid_at
- created_at
- updated_at
```

**Refunds Table:**
```
- id (PK)
- payment_id (FK)
- refund_amount (decimal)
- refund_status (initiated/processing/completed/failed)
- refund_reason
- refund_notes
- razorpay_refund_id
- refunded_at
- created_at
- updated_at
```

**Coupons Table:**
```
- id (PK)
- code (UNIQUE)
- description
- discount_type (percentage/fixed)
- discount_value (decimal)
- minimum_order_value (decimal)
- maximum_discount (decimal)
- usage_limit (total)
- usage_limit_per_customer
- usage_count
- start_date
- end_date
- is_active (boolean)
- is_first_purchase_only (boolean)
- created_at
- updated_at
```

**Addresses Table:**
```
- id (PK)
- user_id (FK)
- full_name
- phone_number
- pincode
- street_address
- city
- state
- landmark
- address_type (home/office/other)
- is_default (boolean)
- created_at
- updated_at
```

**Wishlists Table:**
```
- id (PK)
- user_id (FK)
- product_id (FK)
- created_at
- UNIQUE(user_id, product_id)
```

**Reviews Table:**
```
- id (PK)
- product_id (FK)
- user_id (FK)
- rating (1-5)
- title
- review_text
- status (pending/approved/rejected)
- helpful_votes
- is_verified_purchase (boolean)
- created_at
- updated_at
```

**Admin_Users Table:**
```
- id (PK)
- first_name
- last_name
- email (UNIQUE)
- password_hash
- role_id (FK)
- status (active/inactive)
- last_login_at
- created_at
- updated_at
```

**Roles Table:**
```
- id (PK)
- name (UNIQUE) - Admin, Manager, Staff, Delivery Partner
- description
- permissions (JSON, array of permission strings)
- is_custom (boolean)
- created_at
- updated_at
```

**Audit_Logs Table:**
```
- id (PK)
- user_id (FK, nullable for system actions)
- action (create/edit/delete/login/logout)
- entity_type (Product, Order, Customer, etc)
- entity_id
- old_values (JSON)
- new_values (JSON)
- ip_address
- user_agent
- created_at
```

---

## SECURITY IMPLEMENTATION

### Authentication & Authorization
- JWT tokens with 24-hour expiry
- Refresh tokens with 7-day expiry
- Role-based access control (RBAC)
- Permission-based authorization
- Session management (HTTP-only cookies)
- Account lockout after 5 failed login attempts
- Two-factor authentication (2FA) using OTP

### Data Security
- Password hashing (bcrypt with 10 rounds)
- HTTPS/SSL encryption (Let's Encrypt)
- SQL injection prevention (Eloquent ORM)
- XSS prevention (HTML escaping)
- CSRF token protection
- Sensitive data encryption (payment details via Razorpay)

### API Security
- Rate limiting (100 requests per minute per IP)
- CORS configuration (whitelist allowed origins)
- API key authentication
- Webhook signature verification
- API versioning

### Infrastructure Security
- Firewall rules (only necessary ports open)
- Regular security updates (automated patches)
- Database backups (encrypted, stored remotely)
- Intrusion detection system
- Security logging and monitoring
- Regular security audits

---

## API DOCUMENTATION

### Base URL
```
https://cake2u.com/api/v1
```

### Authentication
- All requests require Authorization header with JWT token
- Header format: `Authorization: Bearer {token}`

### Endpoints

**Authentication:**
- `POST /auth/register` - User registration
- `POST /auth/login` - User login
- `POST /auth/logout` - User logout
- `POST /auth/forgot-password` - Request password reset
- `POST /auth/reset-password` - Reset password with token
- `POST /auth/refresh-token` - Refresh JWT token
- `POST /auth/verify-otp` - Verify phone OTP
- `POST /auth/send-otp` - Send phone OTP

**Products:**
- `GET /products` - List products (with pagination, filters, sort)
- `GET /products/{id}` - Get product details
- `GET /products/search` - Search products
- `GET /categories` - List categories
- `GET /products/{id}/reviews` - Get product reviews

**Cart:**
- `GET /cart` - Get user's cart
- `POST /cart/items` - Add item to cart
- `PATCH /cart/items/{id}` - Update cart item quantity
- `DELETE /cart/items/{id}` - Remove item from cart
- `DELETE /cart` - Clear cart
- `POST /cart/apply-coupon` - Apply coupon code

**Orders:**
- `GET /orders` - List user's orders
- `GET /orders/{id}` - Get order details
- `POST /orders` - Create order (checkout)
- `PATCH /orders/{id}/cancel` - Cancel order
- `GET /orders/{id}/track` - Get order tracking info
- `POST /orders/{id}/reviews` - Add review to order

**Wishlist:**
- `GET /wishlist` - Get user's wishlist
- `POST /wishlist/{productId}` - Add product to wishlist
- `DELETE /wishlist/{productId}` - Remove from wishlist

**User Profile:**
- `GET /profile` - Get user profile
- `PATCH /profile` - Update profile
- `GET /profile/addresses` - Get user addresses
- `POST /profile/addresses` - Add address
- `PATCH /profile/addresses/{id}` - Update address
- `DELETE /profile/addresses/{id}` - Delete address
- `PATCH /profile/password` - Change password

**Payments:**
- `POST /payments/razorpay/order` - Create Razorpay order
- `POST /payments/razorpay/verify` - Verify payment
- `POST /payments/webhook` - Razorpay webhook

**Admin Endpoints (require admin authentication):**
- `GET /admin/dashboard` - Dashboard data
- `GET /admin/orders` - List all orders
- `PATCH /admin/orders/{id}/status` - Update order status
- `GET /admin/products` - List all products
- `POST /admin/products` - Create product
- `PATCH /admin/products/{id}` - Update product
- `DELETE /admin/products/{id}` - Delete product
- `GET /admin/customers` - List customers
- `GET /admin/analytics/sales` - Sales analytics
- `GET /admin/audit-logs` - Audit logs

---

## DEPLOYMENT & DEVOPS

### GitHub Actions CI/CD Pipeline

**Workflow:** On every push to main branch
1. Run tests (PHPUnit)
2. Code quality check (Laravel Pint)
3. Security scan (SonarQube/Snyk)
4. Build Docker image (if using Docker)
5. Deploy to Hostinger VPS using SSH
6. Run database migrations
7. Clear cache
8. Restart services

### Deployment Steps

**1. VPS Setup (Hostinger):**
- Ubuntu 22.04 LTS
- Nginx web server
- PHP 8.2 with extensions (bcmath, ctype, curl, DOM, fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML)
- MySQL 8.0
- Redis (optional, for caching)
- Composer
- Node.js & npm (for frontend assets)

**2. SSL Certificate:**
- Let's Encrypt (free, auto-renewing)
- Configured in Nginx
- HTTPS redirect

**3. Domain Configuration:**
- DNS pointing to Hostinger nameservers
- A record pointing to VPS IP
- MX records for email
- SPF/DKIM/DMARC for email authentication

**4. Environment Setup:**
- `.env` file with production credentials
- Secure permission (644 for .env, 755 for directories)
- Hide .env from web access

**5. Nginx Configuration:**
```nginx
server {
    listen 443 ssl http2;
    server_name cake2u.com www.cake2u.com;
    
    ssl_certificate /path/to/cert;
    ssl_certificate_key /path/to/key;
    
    root /var/www/cake2u/public;
    index index.php;
    
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }
    
    location ~ /\.ht {
        deny all;
    }
}

server {
    listen 80;
    server_name cake2u.com www.cake2u.com;
    return 301 https://$server_name$request_uri;
}
```

**6. PHP-FPM Configuration:**
- Process pool for cake2u application
- Memory limit: 256MB
- Max execution time: 300 seconds
- Upload max file size: 50MB

**7. MySQL Backup Strategy:**
- Daily automated backups
- Backup retention: 30 days
- Stored in Google Drive
- Backup verification (test restore monthly)

**8. Monitoring & Alerts:**
- Uptime monitoring (UptimeRobot or similar)
- Error logging (Sentry or similar)
- Performance monitoring (New Relic or similar)
- Email alerts for critical issues

---

## TESTING STRATEGY

### Testing Levels

**Unit Tests:**
- Test individual methods/functions
- Mock dependencies
- Test Laravel models, services
- Use PHPUnit
- Coverage target: >80%

**Integration Tests:**
- Test interactions between components
- Test database operations
- Test API endpoints
- Use Laravel testing framework

**End-to-End (E2E) Tests:**
- Simulate real user workflows
- Test complete user journeys
- Use Laravel Dusk (browser testing)
- Test critical paths:
  - Registration → Login → Browse → Add to Cart → Checkout → Payment
  - Admin order management
  - Product management

**Performance Tests:**
- Load testing (k6 or JMeter)
- Test concurrent users
- Test response times
- Database query performance

**Security Tests:**
- OWASP Top 10 testing
- SQL injection testing
- XSS testing
- CSRF testing
- Authentication/Authorization testing

### Testing Checklist

**Frontend:**
- ✅ Form validation (client-side)
- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Cross-browser compatibility (Chrome, Firefox, Safari, Edge)
- ✅ Accessibility (WCAG 2.1 AA)
- ✅ Navigation and menu functionality
- ✅ Search and filter functionality
- ✅ Image loading and lazy loading
- ✅ Cart functionality
- ✅ Checkout flow
- ✅ Payment integration
- ✅ User authentication
- ✅ Error handling and error messages

**Backend:**
- ✅ API authentication and authorization
- ✅ Input validation and sanitization
- ✅ Database operations (CRUD)
- ✅ Business logic (discount calculation, tax, etc.)
- ✅ Payment integration
- ✅ Email sending
- ✅ SMS sending
- ✅ File uploads and storage
- ✅ Error handling
- ✅ Rate limiting
- ✅ Database performance

**Admin Panel:**
- ✅ Login functionality
- ✅ Dashboard display
- ✅ Data retrieval and display
- ✅ CRUD operations for all entities
- ✅ Report generation
- ✅ Bulk actions
- ✅ Role-based access control
- ✅ Audit logging

---

## PERFORMANCE OPTIMIZATION

### Frontend Performance

**Image Optimization:**
- Use WebP format with JPEG fallback
- Lazy load images below the fold
- Image compression (TinyPNG, ImageOptim)
- Responsive images (srcset for different screen sizes)
- Use CDN for image delivery

**Code Optimization:**
- Minify CSS and JavaScript
- CSS/JS code splitting
- Remove unused CSS (PurgeCSS)
- Defer non-critical JavaScript
- Async load analytics/tracking scripts
- Remove console.log in production

**Caching:**
- Browser caching (Cache-Control headers, 1 week for static assets)
- Service worker for offline support (PWA)
- Static asset versioning (cache busting)

**Rendering Performance:**
- Minimize critical rendering path
- Preload critical resources
- Reduce main thread work
- Optimize web fonts (limit to 2 fonts, system fonts as fallback)
- Use CSS transforms over layout changes

### Backend Performance

**Database Optimization:**
- Add indexes on frequently queried columns (user_id, product_id, created_at)
- Use eager loading (with() to prevent N+1 queries)
- Pagination for large result sets
- Use database views for complex queries
- Archive old data (orders > 1 year) to separate table

**Caching Strategy:**
- Cache product list (invalidate on product edit)
- Cache category list (rarely changes)
- Cache user data (invalidate on profile update)
- Cache API responses (10-60 minutes)
- Use Redis for cache store

**API Optimization:**
- Return only required fields
- Pagination (default 20 items per page, max 100)
- Compress responses (gzip)
- Use CDN for API responses
- Database query logging and optimization

**Code Optimization:**
- Use queue for long-running tasks (email, SMS, image processing)
- Batch processing for bulk operations
- Database connection pooling (if using Laravel Horizon)

### Server Performance

**Nginx Optimization:**
- Gzip compression (level 6)
- HTTP/2 support
- Caching headers configuration

**PHP Optimization:**
- OPcache enabled (default)
- Memory limit: 256MB
- Max execution time: 300 seconds
- Max input variables: 5000

**Database Optimization:**
- Query caching (if using MySQL)
- InnoDB buffer pool sizing
- Regular maintenance (optimize tables, analyze tables)
- Connection pooling

---

## THIRD-PARTY INTEGRATIONS

### Payment Gateway - Razorpay
- API integration for order payment
- Webhook for payment status updates
- Subscription support (for future features)
- Refund processing

### SMS Service - Twilio
- OTP sending for phone verification
- Order confirmation SMS
- Delivery notification SMS
- Custom transactional SMS

### File Storage - Google Drive
- Invoice storage
- Receipt storage
- Document backup
- File sharing with customers

### Email Service - SendGrid / AWS SES
- Transactional emails
- Newsletter campaigns
- Email templates

### Address Validation - Google Maps API
- Address autocomplete
- Address validation
- Geolocation services

### Authentication - Google & Facebook OAuth
- Social login integration
- User profile data retrieval
- Account linking

### Analytics - Google Analytics
- Website traffic tracking
- User behavior analysis
- Conversion tracking
- E-commerce tracking (purchase events)

### SEO - Google Search Console
- Website indexing
- Search performance monitoring
- Structured data validation

---

## PROJECT TIMELINE & MILESTONES

### Phase 1: Planning & Design (Week 1-2)
- [ ] Database schema design and review
- [ ] API design and documentation
- [ ] UI/UX wireframes and mockups
- [ ] Security architecture review
- [ ] Technology stack setup

**Deliverables:**
- Database ERD
- API documentation
- UI mockups
- Architecture diagram
- Setup development environment

### Phase 2: Frontend Development (Week 3-8)
- [ ] Home page with featured cakes
- [ ] Authentication (Login, Register, Forgot Password)
- [ ] Shop page with filters and search
- [ ] Product detail page
- [ ] Cart and Wishlist pages
- [ ] Checkout flow
- [ ] User profile and orders
- [ ] Responsive design (mobile, tablet, desktop)
- [ ] Performance optimization

**Deliverables:**
- Functional frontend
- Unit tests for components
- Performance metrics

### Phase 3: Backend Development (Week 5-10)
- [ ] Authentication API
- [ ] Product management API
- [ ] Order management API
- [ ] Payment processing (Razorpay integration)
- [ ] User management API
- [ ] Cart and wishlist API
- [ ] Coupon and discount API
- [ ] Email and SMS notifications
- [ ] Unit and integration tests

**Deliverables:**
- Working backend APIs
- API documentation
- Database setup
- Test coverage >80%

### Phase 4: Admin Panel Development (Week 9-14)
- [ ] Admin authentication
- [ ] Dashboard with KPIs
- [ ] User management
- [ ] Product management
- [ ] Order management
- [ ] Payment management
- [ ] Reports and analytics
- [ ] Role-based access control

**Deliverables:**
- Functional admin panel
- Admin user management
- Reports generation

### Phase 5: Integration & Testing (Week 12-16)
- [ ] Razorpay payment integration
- [ ] Twilio SMS integration
- [ ] Google Maps integration
- [ ] Google Drive integration
- [ ] Email service integration
- [ ] Third-party API testing
- [ ] E2E testing
- [ ] Performance testing
- [ ] Security testing

**Deliverables:**
- Integrated system
- Test reports
- Bug fixes

### Phase 6: Deployment Preparation (Week 15-17)
- [ ] VPS setup on Hostinger
- [ ] Domain configuration
- [ ] SSL certificate setup
- [ ] Database backup strategy
- [ ] Monitoring and alerting setup
- [ ] CI/CD pipeline setup (GitHub Actions)
- [ ] Documentation

**Deliverables:**
- Production-ready environment
- Backup strategy
- Deployment guide

### Phase 7: Staging & UAT (Week 17-19)
- [ ] Deploy to staging environment
- [ ] User acceptance testing
- [ ] Bug fixing
- [ ] Performance testing
- [ ] Security testing
- [ ] Load testing

**Deliverables:**
- Test reports
- Bug fixes
- Ready for production

### Phase 8: Production Deployment (Week 19-20)
- [ ] Final production deployment
- [ ] Monitoring and support
- [ ] Documentation
- [ ] Team training
- [ ] Go-live support

**Deliverables:**
- Live website
- Documentation
- Support plan

### Phase 9: Post-Launch (Week 21+)
- [ ] Monitor performance
- [ ] Bug fixes and improvements
- [ ] Feature enhancements
- [ ] Marketing support

**Total Project Duration:** 20-24 weeks (5-6 months)

---

## TEAM STRUCTURE & ROLES

### Required Team Members

**1. Project Manager (1)**
- Responsibilities:
  - Project planning and scheduling
  - Team coordination
  - Stakeholder communication
  - Risk management
  - Progress tracking

**2. Frontend Developers (2)**
- Responsibilities:
  - HTML/CSS/JavaScript development
  - Tailwind CSS implementation
  - Responsive design
  - Performance optimization
  - Unit testing

**3. Backend Developers (2-3)**
- Responsibilities:
  - Laravel API development
  - Database design and optimization
  - Integration with third-party services
  - Security implementation
  - Server-side testing

**4. Database Administrator (1)**
- Responsibilities:
  - Database design
  - Query optimization
  - Backup and recovery
  - Performance tuning
  - Data integrity

**5. DevOps/System Administrator (1)**
- Responsibilities:
  - VPS setup and configuration
  - CI/CD pipeline setup
  - Deployment and monitoring
  - Security infrastructure
  - Backup and disaster recovery

**6. QA Engineer (1)**
- Responsibilities:
  - Test planning
  - Manual testing
  - Automated testing
  - Bug reporting
  - Performance testing

**7. UI/UX Designer (1)**
- Responsibilities:
  - Wireframing
  - UI design
  - UX research
  - Design system creation
  - Usability testing

**8. Technical Lead (1)**
- Responsibilities:
  - Architecture design
  - Code review
  - Technical decision-making
  - Mentoring team
  - Documentation

### Optional Team Members (Future)

- **Digital Marketing Specialist** - SEO, Social media, Email marketing
- **Content Manager** - Blog, Product descriptions, Copy writing
- **Mobile Developer** - iOS/Android app development

---

## CONCLUSION

This enhanced specification provides a comprehensive roadmap for building Cake 2 U, a professional e-commerce platform for cake shops. The project covers:

✅ **Complete Frontend** with all customer-facing pages and features  
✅ **Robust Backend** with API, database, and business logic  
✅ **Full-Featured Admin Panel** for business operations  
✅ **Third-party Integrations** for payment, SMS, storage, etc.  
✅ **Security Implementation** following industry best practices  
✅ **Performance Optimization** for speed and scalability  
✅ **Testing Strategy** ensuring quality and reliability  
✅ **Deployment Strategy** for production readiness  
✅ **Project Timeline** with realistic milestones  
✅ **Missing Features** identified and documented  

**Next Steps:**
1. Review and approve this specification
2. Get stakeholder sign-off
3. Begin Phase 1: Planning & Design
4. Set up development environment
5. Create detailed task breakdown
6. Allocate team resources
7. Start development

**Key Success Factors:**
- Agile development approach (2-week sprints)
- Regular stakeholder communication
- Continuous testing and QA
- Performance monitoring
- Security-first mindset
- User feedback integration

---

**Document Version:** 2.0 (Enhanced)  
**Last Updated:** December 7, 2025  
**Status:** Ready for Development