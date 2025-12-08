# CAKE 2 U - Complete Laravel Migrations & Models Guide

**Project:** Cake 2 U E-Commerce Platform  
**Framework:** Laravel 12  
**Database:** MySQL 8.0+  
**Date:** December 2025  

---

## TABLE OF CONTENTS

1. [Database Design Principles](#database-design-principles)
2. [Migrations](#migrations)
3. [Eloquent Models](#eloquent-models)
4. [Relationships Map](#relationships-map)
5. [Migration Execution Order](#migration-execution-order)
6. [Professional Best Practices](#professional-best-practices)

---

## DATABASE DESIGN PRINCIPLES

### Core Concepts Applied

**1. ACID Compliance**
- Atomicity: Transactions succeed or fail completely
- Consistency: Data integrity through constraints
- Isolation: Concurrent transactions don't interfere
- Durability: Committed data persists

**2. Normalization (3NF)**
- Eliminate redundant data
- Minimize update anomalies
- Maintain referential integrity
- Efficient queries

**3. Soft Deletes**
- Records marked as deleted via `deleted_at` timestamp
- Recoverable data
- Maintains audit trail
- GDPR-compliant

**4. Timestamps**
- `created_at`: When record was created
- `updated_at`: Last modification time
- `deleted_at`: Soft delete marker

**5. Polymorphic Relationships**
- Single table stores related data
- Reduces migration count
- Example: Activity logs, attachments

**6. Indexing Strategy**
- Index on foreign keys (faster joins)
- Index on frequently queried columns (created_at, status)
- Composite indexes for common query patterns

---

## MIGRATIONS

### 1. Users Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * 
     * Stores customer and admin user data
     * Soft deletes enabled for user recovery
     * Email and phone must be unique (case-insensitive in MySQL)
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Basic Information
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->unique();
            $table->string('password'); // bcrypt hashed
            $table->date('date_of_birth')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->text('bio')->nullable();

            // Verification Status
            $table->boolean('email_verified')->default(false);
            $table->boolean('phone_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();

            // Account Status
            $table->enum('status', ['active', 'inactive', 'banned', 'suspended'])->default('active');
            $table->text('status_reason')->nullable(); // Why account is inactive/banned

            // Preferences
            $table->boolean('newsletter_subscribed')->default(true);
            $table->boolean('sms_notifications')->default(true);
            $table->boolean('email_notifications')->default(true);

            // Two-Factor Authentication
            $table->boolean('two_factor_enabled')->default(false);
            $table->string('two_factor_secret')->nullable();
            $table->text('two_factor_backup_codes')->nullable(); // JSON array

            // Login Tracking
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('last_login_user_agent')->nullable();

            // Timestamps
            $table->timestamps();
            $table->softDeletes(); // For account recovery

            // Indexes for queries
            $table->index('email');
            $table->index('phone_number');
            $table->index('status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
```

### 2. Admin Users Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Staff members with role-based access control
     * Separate from customer users for security
     */
    public function up(): void
    {
        Schema::create('admin_users', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Basic Information
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->nullable();
            $table->string('password'); // bcrypt hashed

            // Role & Permissions
            $table->foreignId('role_id')->constrained('roles')->onDelete('restrict');

            // Department & Location
            $table->string('department', 50)->nullable();
            $table->foreignId('office_location_id')->nullable()->constrained('office_locations')->onDelete('set null');

            // Account Status
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
            $table->boolean('force_password_change')->default(true); // On first login
            $table->timestamp('password_changed_at')->nullable();
            $table->timestamp('password_expires_at')->nullable();

            // Two-Factor Authentication
            $table->boolean('two_factor_enabled')->default(false);
            $table->string('two_factor_secret')->nullable();

            // Login Tracking
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->integer('consecutive_failed_logins')->default(0);
            $table->timestamp('account_locked_until')->nullable();

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('email');
            $table->index('role_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
};
```

### 3. Roles Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Role-based access control
     * Supports custom roles with flexible permissions
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Role Information
            $table->string('name', 50)->unique(); // Admin, Manager, Staff, Delivery Partner
            $table->text('description')->nullable();

            // Permissions (JSON array for flexibility)
            // Example: ["product.create", "product.edit", "order.view"]
            $table->json('permissions')->default('[]');

            // Role Type
            $table->boolean('is_custom')->default(false);
            $table->boolean('is_system_role')->default(false); // Cannot be deleted

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('name');
            $table->index('is_system_role');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
```

### 4. Permissions Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Fine-grained permission control
     * Can be assigned to roles
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Permission Information
            $table->string('name', 100)->unique(); // e.g., "product.create"
            $table->text('description')->nullable();
            $table->string('category', 50); // products, orders, customers, settings, reports

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('name');
            $table->index('category');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
```

### 5. Categories Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Product categories with hierarchical structure
     * Supports nested categories (Parent -> Sub-categories)
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Hierarchical Structure
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('categories')
                ->onDelete('cascade'); // Delete sub-categories when parent deleted

            // Category Information
            $table->string('name', 100)->unique();
            $table->string('slug', 150)->unique(); // For URL-friendly names
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();

            // Display Settings
            $table->integer('display_order')->default(0); // For sorting in menu
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);

            // SEO Optimization
            $table->string('meta_title', 160)->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('canonical_url')->nullable();

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('parent_id');
            $table->index('slug');
            $table->index('is_active');
            $table->index('display_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
```

### 6. Products Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Core products table
     * Stores cake information with pricing, inventory, and SEO data
     * Ratings calculated from reviews for performance
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict');

            // Basic Information
            $table->string('name', 150)->index(); // Indexed for search
            $table->string('sku', 50)->unique(); // Stock Keeping Unit
            $table->text('short_description'); // Brief description for listings
            $table->longText('description'); // Full description with details

            // Pricing
            $table->decimal('cost_price', 10, 2); // Cost to make/buy
            $table->decimal('price', 10, 2)->index(); // Original selling price
            $table->enum('discount_type', ['percentage', 'fixed_amount'])->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable(); // Auto-calculated: price - discount

            // Inventory Management
            $table->integer('stock_quantity')->default(0);
            $table->integer('reorder_level')->default(10); // Alert when stock falls below
            $table->string('supplier', 100)->nullable();
            $table->string('barcode', 50)->nullable();

            // Product Attributes
            $table->boolean('is_veg')->default(false);
            $table->boolean('is_eggless')->default(false);
            $table->boolean('is_vegan')->default(false);
            $table->boolean('is_gluten_free')->default(false);
            $table->boolean('is_dairy_free')->default(false);
            $table->boolean('is_nut_free')->default(false);
            $table->boolean('is_sugar_free')->default(false);

            // Allergy Information (JSON for flexibility)
            $table->json('allergies')->nullable(); // ["nuts", "dairy", "eggs"]
            $table->text('shelf_life')->nullable(); // Storage instructions
            $table->string('serving_size')->nullable();

            // Delivery Information
            $table->integer('lead_time_days')->default(1); // Days needed to prepare
            $table->json('delivery_slot_options')->nullable(); // Available time slots
            $table->decimal('delivery_charge', 10, 2)->nullable();
            $table->integer('min_order_quantity')->default(1);
            $table->integer('max_order_quantity')->nullable();

            // Media
            $table->string('main_image_url')->nullable();
            $table->json('additional_images')->nullable(); // Array of image URLs

            // Ratings & Reviews (Denormalized for performance)
            $table->decimal('average_rating', 3, 2)->default(0);
            $table->integer('review_count')->default(0);
            $table->integer('wishlist_count')->default(0);
            $table->integer('view_count')->default(0);

            // Status & Visibility
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->boolean('is_on_sale')->default(false);
            $table->enum('visibility', ['all', 'registered_only', 'hidden'])->default('all');

            // SEO Optimization
            $table->string('meta_title', 160)->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('slug', 200)->unique();
            $table->string('canonical_url')->nullable();

            // Tags (JSON for many-to-many without pivot table)
            $table->json('tags')->nullable(); // ["birthday", "chocolate", "premium"]

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes for common queries
            $table->index('name');
            $table->index('sku');
            $table->index('category_id');
            $table->index('is_active');
            $table->index('price');
            $table->index('average_rating');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
```

### 7. Product Customization Options Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Customization options for products
     * Examples: Size, Flavor, Toppings
     * Each product can have multiple customization types
     */
    public function up(): void
    {
        Schema::create('product_customizations', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Customization Information
            $table->enum('type', ['size', 'flavor', 'topping', 'message'])->index();
            $table->string('label', 50); // Display name: "Size", "Flavor"
            $table->json('options'); // Array of options: ["Small", "Medium", "Large"]

            // Price Modifiers (optional, per option)
            // Example: {"Small": 0, "Medium": 50, "Large": 100}
            $table->json('price_modifiers')->nullable();

            // Required or Optional
            $table->boolean('is_required')->default(false);
            $table->integer('max_selections')->default(1); // 1 = single select, multiple = multi-select

            // Display Order
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('product_id');
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_customizations');
    }
};
```

### 8. Product Images Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Product images with alt text for accessibility
     * Supports multiple images per product with ordering
     */
    public function up(): void
    {
        Schema::create('product_images', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Image Information
            $table->string('url');
            $table->string('alt_text')->nullable(); // For accessibility (WCAG)
            $table->string('file_name')->nullable();
            $table->integer('file_size')->nullable(); // In bytes
            $table->string('mime_type')->nullable(); // image/jpeg, image/png

            // Display
            $table->integer('display_order')->default(0);
            $table->boolean('is_thumbnail')->default(false); // Main product image

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
```

### 9. Carts Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Shopping carts for users
     * One cart per user (active/main cart)
     * Cart items stored separately for flexibility
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');

            // Cart Status
            $table->enum('status', ['active', 'abandoned', 'converted_to_order'])->default('active');
            $table->timestamp('converted_to_order_at')->nullable();

            // Totals (Denormalized for performance)
            $table->integer('item_count')->default(0);
            $table->decimal('subtotal', 12, 2)->default(0);
            $table->decimal('tax', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0);
            $table->decimal('delivery_charge', 12, 2)->default(0);
            $table->decimal('total', 12, 2)->default(0);

            // Applied Coupon
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null');

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('user_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
```

### 10. Cart Items Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Individual items in shopping cart
     * Stores product reference and customization choices
     */
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Quantity
            $table->integer('quantity')->default(1);

            // Pricing
            $table->decimal('unit_price', 10, 2); // Price at time of adding to cart
            $table->decimal('item_total', 12, 2); // unit_price * quantity

            // Customization Options (JSON for flexibility)
            // Example: {"size": "Large", "flavor": "Chocolate", "message": "Happy Birthday"}
            $table->json('customizations')->nullable();

            // Special Requests
            $table->text('special_requests')->nullable();

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('cart_id');
            $table->index('product_id');
            // Composite unique constraint to prevent duplicate items
            $table->unique(['cart_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
```

### 11. Wishlists Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * User wishlists (products marked for later purchase)
     * Many-to-many relationship between users and products
     */
    public function up(): void
    {
        Schema::create('wishlists', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Timestamps
            $table->timestamps();

            // Composite unique index to prevent duplicates
            $table->unique(['user_id', 'product_id']);

            // Indexes for queries
            $table->index('user_id');
            $table->index('product_id');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
```

### 12. Addresses Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * User addresses for shipping and billing
     * Multiple addresses per user with default selection
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // Address Information
            $table->string('full_name', 100);
            $table->string('phone_number', 20);
            $table->string('pincode', 10);
            $table->text('street_address');
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('landmark', 100)->nullable();
            $table->string('apartment_number', 50)->nullable();

            // Address Type
            $table->enum('type', ['home', 'office', 'other'])->default('home');

            // Default Address
            $table->boolean('is_default')->default(false);
            $table->boolean('is_billing_address')->default(false);

            // Delivery Availability
            $table->boolean('is_serviceable')->default(true); // Can we deliver here?

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('user_id');
            $table->index('pincode');
            $table->index('is_default');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
```

### 13. Coupons Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Discount coupons and promotional codes
     * Flexible coupon configuration with multiple usage limits
     * Applicable to specific products/categories or all
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Coupon Information
            $table->string('code', 50)->unique()->index();
            $table->text('description')->nullable();

            // Discount Configuration
            $table->enum('discount_type', ['percentage', 'fixed_amount'])->default('percentage');
            $table->decimal('discount_value', 10, 2);
            $table->decimal('minimum_order_value', 10, 2)->nullable();
            $table->decimal('maximum_discount_value', 10, 2)->nullable(); // Cap for percentage discounts

            // Usage Limits
            $table->integer('total_usage_limit')->nullable(); // Total uses across all customers
            $table->integer('usage_count')->default(0);
            $table->integer('per_customer_limit')->nullable(); // Max uses per customer
            $table->boolean('one_time_use')->default(false);

            // Validity Period
            $table->timestamp('start_date');
            $table->timestamp('end_date');

            // Applicability
            $table->boolean('is_applicable_to_all')->default(true);
            $table->json('applicable_categories')->nullable(); // Array of category IDs
            $table->json('applicable_products')->nullable(); // Array of product IDs
            $table->json('excluded_products')->nullable(); // Products exempt from coupon

            // Advanced Options
            $table->boolean('is_first_purchase_only')->default(false);
            $table->boolean('is_vip_only')->default(false);
            $table->boolean('free_shipping')->default(false);
            $table->boolean('can_combine_with_others')->default(false);

            // Status
            $table->boolean('is_active')->default(true);

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('code');
            $table->index('is_active');
            $table->index('start_date');
            $table->index('end_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
```

### 14. Orders Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Core orders table
     * Main transactional record with order metadata
     * Order items stored separately (one-to-many)
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('delivery_address_id')->constrained('addresses')->onDelete('restrict');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null');

            // Order Information
            $table->string('order_number', 50)->unique()->index(); // Display number: #2024-001234
            $table->text('notes')->nullable(); // Admin notes about order
            $table->text('special_requests')->nullable(); // Customer special requests

            // Pricing Breakdown
            $table->decimal('subtotal', 12, 2); // Sum of item totals
            $table->decimal('tax', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0); // From coupon
            $table->decimal('delivery_charge', 12, 2)->default(0);
            $table->decimal('gift_wrap_charge', 12, 2)->default(0); // If gift wrapping applied
            $table->decimal('total', 12, 2); // Final total

            // Delivery Information
            $table->timestamp('requested_delivery_date');
            $table->string('delivery_time_slot', 50)->nullable(); // Morning, Afternoon, Evening, Night
            $table->text('delivery_instructions')->nullable();
            $table->boolean('is_gift_order')->default(false);
            $table->text('gift_message')->nullable();

            // Billing Address (stored as JSON for history)
            $table->json('billing_address')->nullable();

            // Order Status
            $table->enum('status', [
                'pending',
                'confirmed',
                'processing',
                'packed',
                'shipped',
                'out_for_delivery',
                'delivered',
                'cancelled',
                'returned'
            ])->default('pending')->index();

            // Payment Information
            $table->enum('payment_method', [
                'credit_card',
                'debit_card',
                'upi',
                'net_banking',
                'wallet',
                'bnpl',
                'cash_on_delivery'
            ])->nullable();

            $table->enum('payment_status', [
                'pending',
                'completed',
                'failed',
                'refunded',
                'partially_refunded'
            ])->default('pending')->index();

            $table->timestamp('payment_date')->nullable();

            // Tracking Information
            $table->string('tracking_number', 100)->nullable();
            $table->string('courier_name', 50)->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('delivered_at')->nullable();

            // Return/Exchange Information
            $table->boolean('is_returnable')->default(true);
            $table->integer('return_days')->default(7);
            $table->timestamp('return_eligible_until')->nullable();

            // Timestamps
            $table->timestamps();
            $table->softDeletes(); // Preserve order history

            // Indexes for common queries
            $table->index('order_number');
            $table->index('user_id');
            $table->index('status');
            $table->index('payment_status');
            $table->index('requested_delivery_date');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
```

### 15. Order Items Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Individual items within an order
     * Stores product details at time of order (historical record)
     * Separate from products for data integrity
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('restrict');

            // Product Details (Snapshot at order time)
            $table->string('product_name', 150);
            $table->string('product_sku', 50);
            $table->decimal('product_price', 10, 2); // Price at order time

            // Order Item Details
            $table->integer('quantity');
            $table->json('customizations')->nullable(); // Size, Flavor, Message, etc.
            $table->text('special_requests')->nullable();
            $table->decimal('item_subtotal', 12, 2); // product_price * quantity

            // Item Status
            $table->enum('status', [
                'pending',
                'processing',
                'packed',
                'shipped',
                'delivered',
                'cancelled',
                'returned'
            ])->default('pending');

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('order_id');
            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
```

### 16. Payments Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Payment transaction records
     * Each order has one payment record
     * Stores gateway-specific details for auditing
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('order_id')->unique()->constrained('orders')->onDelete('cascade');

            // Amount Information
            $table->decimal('amount', 12, 2);
            $table->string('currency', 3)->default('INR');

            // Payment Method
            $table->enum('method', [
                'credit_card',
                'debit_card',
                'upi',
                'net_banking',
                'wallet',
                'bnpl',
                'cash_on_delivery'
            ]);

            // Razorpay Integration Details
            $table->string('razorpay_payment_id', 50)->unique()->nullable();
            $table->string('razorpay_order_id', 50)->unique()->nullable();
            $table->string('razorpay_signature', 255)->nullable(); // For verification

            // Payment Card Details (if applicable - minimal storage)
            $table->string('card_last_four', 4)->nullable();
            $table->string('card_network', 20)->nullable(); // Visa, Mastercard, etc.

            // Payment Status
            $table->enum('status', [
                'initiated',
                'pending',
                'completed',
                'failed',
                'refunded',
                'partially_refunded'
            ])->default('initiated')->index();

            // Status Change Tracking
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->text('failure_reason')->nullable();

            // Error Tracking
            $table->string('error_code')->nullable();
            $table->text('error_description')->nullable();

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('order_id');
            $table->index('razorpay_payment_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
```

### 17. Refunds Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Refund transactions
     * Tracks all refund requests and their status
     * Separate from payments for proper accounting
     */
    public function up(): void
    {
        Schema::create('refunds', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('initiated_by')->constrained('admin_users')->onDelete('restrict'); // Admin user

            // Refund Amount
            $table->decimal('amount', 12, 2);
            $table->decimal('processing_fee', 10, 2)->default(0); // Deducted from refund if applicable

            // Refund Method
            $table->enum('method', [
                'original_payment',
                'store_credit',
                'bank_transfer'
            ])->default('original_payment');

            // Razorpay Refund Details
            $table->string('razorpay_refund_id', 50)->unique()->nullable();

            // Refund Reason
            $table->enum('reason', [
                'customer_request',
                'order_cancelled',
                'quality_issue',
                'item_not_received',
                'wrong_item_sent',
                'out_of_stock',
                'delivery_failed',
                'other'
            ]);

            // Refund Details
            $table->text('notes')->nullable();
            $table->text('admin_notes')->nullable();

            // Status
            $table->enum('status', [
                'initiated',
                'processing',
                'completed',
                'failed',
                'cancelled'
            ])->default('initiated')->index();

            // Timestamps
            $table->timestamp('requested_at');
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->timestamps();

            // Indexes
            $table->index('payment_id');
            $table->index('order_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
```

### 18. Reviews Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Product reviews and ratings
     * Only verified purchasers can review
     * Admin can moderate reviews
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Relationships
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');

            // Review Content
            $table->integer('rating')->min(1)->max(5); // 1-5 stars
            $table->string('title', 150);
            $table->text('comment');

            // Verification
            $table->boolean('is_verified_purchase')->default(true);

            // Moderation
            $table->enum('status', [
                'pending',
                'approved',
                'rejected'
            ])->default('pending')->index();

            $table->text('rejection_reason')->nullable();
            $table->foreignId('moderated_by')->nullable()->constrained('admin_users')->onDelete('set null');
            $table->timestamp('moderated_at')->nullable();

            // Engagement
            $table->integer('helpful_votes')->default(0);
            $table->integer('unhelpful_votes')->default(0);

            // Admin Response
            $table->text('admin_response')->nullable();
            $table->timestamp('admin_response_at')->nullable();
            $table->foreignId('admin_response_by')->nullable()->constrained('admin_users')->onDelete('set null');

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('product_id');
            $table->index('user_id');
            $table->index('rating');
            $table->index('status');
            $table->index('is_verified_purchase');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
```

### 19. Audit Logs Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Audit trail for all admin actions
     * Immutable log for compliance and debugging
     * Stores before/after values for data changes
     */
    public function up(): void
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // User Information
            $table->foreignId('admin_user_id')->nullable()->constrained('admin_users')->onDelete('set null');
            $table->string('user_email', 100)->nullable(); // Stored for deleted users

            // Action Information
            $table->enum('action', [
                'create',
                'read',
                'update',
                'delete',
                'login',
                'logout',
                'export',
                'import',
                'download'
            ])->index();

            // Entity Information
            $table->string('entity_type', 50); // Product, Order, Customer, etc.
            $table->unsignedBigInteger('entity_id')->nullable();
            $table->string('entity_name', 150)->nullable(); // Human-readable name

            // Change Details
            $table->json('old_values')->nullable(); // Previous values
            $table->json('new_values')->nullable(); // New values

            // Request Information
            $table->string('ip_address', 45); // IPv4 and IPv6 support
            $table->text('user_agent')->nullable();
            $table->string('method', 10)->nullable(); // GET, POST, PUT, DELETE
            $table->string('route', 255)->nullable();

            // Response Information
            $table->integer('response_status')->nullable(); // HTTP status code
            $table->text('response_message')->nullable(); // Error or success message

            // Additional Context
            $table->text('description')->nullable();
            $table->text('notes')->nullable();

            // Timestamp
            $table->timestamps();

            // Indexes for common queries
            $table->index('admin_user_id');
            $table->index('action');
            $table->index('entity_type');
            $table->index('entity_id');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
```

### 20. Activity Log Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * General activity log for all user actions (polymorphic)
     * Can log activities for multiple types of models
     * More flexible than audit logs
     */
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Polymorphic Relationship
            // Can be associated with users, products, orders, etc.
            $table->string('subject_type'); // User, Product, Order, etc.
            $table->unsignedBigInteger('subject_id');

            // Activity Information
            $table->string('description', 255);
            $table->enum('type', [
                'login',
                'logout',
                'view',
                'create',
                'update',
                'delete',
                'download',
                'search',
                'order_placed',
                'payment_made',
                'review_posted'
            ])->index();

            // Actor (who performed the action)
            $table->string('actor_type')->nullable(); // User, Admin
            $table->unsignedBigInteger('actor_id')->nullable();

            // Additional Data
            $table->json('properties')->nullable(); // Extra context

            // Timestamp
            $table->timestamps();

            // Indexes
            $table->index(['subject_type', 'subject_id']);
            $table->index(['actor_type', 'actor_id']);
            $table->index('type');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
```

### 21. Office Locations Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Office/warehouse locations for multi-location setup
     * For future expansion to multiple shops
     */
    public function up(): void
    {
        Schema::create('office_locations', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Location Information
            $table->string('name', 100);
            $table->text('address');
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('pincode', 10);
            $table->string('phone', 20);
            $table->string('email', 100);

            // Coordinates (for mapping)
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            // Status
            $table->boolean('is_active')->default(true);
            $table->boolean('is_warehouse')->default(false);
            $table->boolean('is_physical_store')->default(false);

            // Business Hours (JSON for flexibility)
            // Example: {"monday": {"open": "09:00", "close": "18:00"}, ...}
            $table->json('business_hours')->nullable();

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('office_locations');
    }
};
```

### 22. Banners Table Migration

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Promotional banners for homepage and pages
     * Scheduled visibility for campaigns
     */
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Banner Information
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('image_url');
            $table->string('alt_text')->nullable();

            // Action/CTA
            $table->string('cta_button_text', 50)->nullable();
            $table->string('cta_url', 255)->nullable();
            $table->enum('cta_target', ['_self', '_blank'])->default('_self');

            // Display Settings
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);

            // Scheduling
            $table->timestamp('starts_at');
            $table->timestamp('ends_at')->nullable();

            // Target Audience
            $table->enum('target_audience', [
                'all_users',
                'new_customers',
                'registered_users_only',
                'vip_customers',
                'inactive_customers'
            ])->default('all_users');

            // Analytics
            $table->integer('view_count')->default(0);
            $table->integer('click_count')->default(0);
            $table->decimal('ctr', 5, 2)->default(0); // Click-through rate

            // Timestamps
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('is_active');
            $table->index('starts_at');
            $table->index('ends_at');
            $table->index('display_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
```

### 23. Attachments Table Migration (Polymorphic)

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Polymorphic attachments table
     * Can attach files to orders, products, support tickets, etc.
     */
    public function up(): void
    {
        Schema::create('attachments', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Polymorphic Relationship
            $table->string('attachable_type'); // Order, Product, Ticket, etc.
            $table->unsignedBigInteger('attachable_id');

            // File Information
            $table->string('original_name', 255);
            $table->string('stored_name', 255);
            $table->string('mime_type', 50);
            $table->integer('file_size'); // In bytes
            $table->string('file_path', 255);

            // Access Control
            $table->enum('type', [
                'invoice',
                'receipt',
                'document',
                'proof',
                'image',
                'video',
                'other'
            ])->default('document');

            $table->boolean('is_public')->default(false);

            // Uploaded By
            $table->foreignId('uploaded_by')->nullable()->constrained('admin_users')->onDelete('set null');

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index(['attachable_type', 'attachable_id']);
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
```

### 24. Failed Jobs Table (For Queue)

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Tracks failed background jobs
     * Used for async tasks like email/SMS sending, image processing
     */
    public function up(): void
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
```

---

## ELOQUENT MODELS

Now I'll provide the complete model classes with all relationships properly defined.

### User Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'date_of_birth',
        'profile_picture_url',
        'bio',
        'email_verified',
        'phone_verified',
        'status',
        'newsletter_subscribed',
        'sms_notifications',
        'email_notifications',
        'two_factor_enabled',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'two_factor_secret',
        'two_factor_backup_codes',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'date_of_birth' => 'date',
        'last_login_at' => 'datetime',
        'two_factor_backup_codes' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    // User has many addresses
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    // User has one active cart
    public function cart()
    {
        return $this->hasOne(Cart::class)->where('status', 'active');
    }

    // User has many wishlisted products
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    // User has many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // User has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // User has many activity logs
    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'subject');
    }
}
```

### AdminUser Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'admin_users';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'role_id',
        'department',
        'office_location_id',
        'status',
        'force_password_change',
    ];

    protected $hidden = [
        'password',
        'two_factor_secret',
    ];

    protected $casts = [
        'password_changed_at' => 'datetime',
        'password_expires_at' => 'datetime',
        'last_login_at' => 'datetime',
        'account_locked_until' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */

    // Admin user belongs to a role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Admin user assigned to an office location
    public function officeLocation()
    {
        return $this->belongsTo(OfficeLocation::class);
    }

    // Admin user has many audit logs
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }

    // Admin user has created many attachments
    public function uploadedAttachments()
    {
        return $this->hasMany(Attachment::class, 'uploaded_by');
    }

    // Admin user has moderated many reviews
    public function moderatedReviews()
    {
        return $this->hasMany(Review::class, 'moderated_by');
    }

    // Admin user has responded to many reviews
    public function reviewResponses()
    {
        return $this->hasMany(Review::class, 'admin_response_by');
    }

    // Admin user has initiated many refunds
    public function initiatedRefunds()
    {
        return $this->hasMany(Refund::class, 'initiated_by');
    }
}
```

### Role Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'permissions',
        'is_custom',
        'is_system_role',
    ];

    protected $casts = [
        'permissions' => 'array',
        'is_custom' => 'boolean',
        'is_system_role' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    // Role has many admin users
    public function adminUsers()
    {
        return $this->hasMany(AdminUser::class);
    }

    /**
     * SCOPES
     */

    public function scopeSystemRoles($query)
    {
        return $query->where('is_system_role', true);
    }

    public function scopeCustomRoles($query)
    {
        return $query->where('is_custom', true);
    }

    /**
     * METHODS
     */

    public function hasPermission($permission)
    {
        return in_array($permission, $this->permissions ?? []);
    }
}
```

### Category Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'image_url',
        'display_order',
        'is_active',
        'is_featured',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    // Category has one parent category (hierarchical)
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Category has many sub-categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('display_order');
    }

    // Category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeParentCategories($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * METHODS
     */

    // Get all ancestors (parent, grandparent, etc.)
    public function getAncestors()
    {
        $ancestors = [];
        $parent = $this->parent;

        while ($parent) {
            $ancestors[] = $parent;
            $parent = $parent->parent;
        }

        return $ancestors;
    }

    // Get all descendants recursively
    public function getAllChildren()
    {
        $children = $this->children;
        foreach ($children as $child) {
            $children = $children->merge($child->getAllChildren());
        }
        return $children;
    }
}
```

### Product Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'sku',
        'short_description',
        'description',
        'cost_price',
        'price',
        'discount_type',
        'discount_value',
        'sale_price',
        'stock_quantity',
        'reorder_level',
        'supplier',
        'barcode',
        'is_veg',
        'is_eggless',
        'is_vegan',
        'is_gluten_free',
        'is_dairy_free',
        'is_nut_free',
        'is_sugar_free',
        'allergies',
        'shelf_life',
        'serving_size',
        'lead_time_days',
        'delivery_slot_options',
        'delivery_charge',
        'min_order_quantity',
        'max_order_quantity',
        'main_image_url',
        'additional_images',
        'average_rating',
        'review_count',
        'wishlist_count',
        'view_count',
        'is_active',
        'is_featured',
        'is_new_arrival',
        'is_on_sale',
        'visibility',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
        'canonical_url',
        'tags',
    ];

    protected $casts = [
        'is_veg' => 'boolean',
        'is_eggless' => 'boolean',
        'is_vegan' => 'boolean',
        'is_gluten_free' => 'boolean',
        'is_dairy_free' => 'boolean',
        'is_nut_free' => 'boolean',
        'is_sugar_free' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'is_new_arrival' => 'boolean',
        'is_on_sale' => 'boolean',
        'allergies' => 'array',
        'additional_images' => 'array',
        'tags' => 'array',
        'delivery_slot_options' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    // Product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Product has many customization options
    public function customizations()
    {
        return $this->hasMany(ProductCustomization::class);
    }

    // Product has many images
    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('display_order');
    }

    // Product has many cart items
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // Product has many wishlists
    public function wishlistedBy()
    {
        return $this->hasMany(Wishlist::class);
    }

    // Product has many order items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Product has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class)->where('status', 'approved');
    }

    // Product has many activity logs
    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'subject');
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeNewArrivals($query)
    {
        return $query->where('is_new_arrival', true);
    }

    public function scopeOnSale($query)
    {
        return $query->where('is_on_sale', true);
    }

    public function scopeInStock($query)
    {
        return $query->where('stock_quantity', '>', 0);
    }

    public function scopeLowStock($query)
    {
        return $query->whereRaw('stock_quantity <= reorder_level');
    }

    public function scopeHighestRated($query)
    {
        return $query->orderByDesc('average_rating');
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeByPriceRange($query, $minPrice, $maxPrice)
    {
        return $query->whereBetween('price', [$minPrice, $maxPrice]);
    }

    public function scopeVegetarian($query)
    {
        return $query->where('is_veg', true);
    }

    /**
     * ACCESSORS
     */

    public function getFormattedPriceAttribute()
    {
        return '₹' . number_format($this->price, 2);
    }

    public function getSalePriceAttribute($value)
    {
        return $value ?? $this->price; // Default to price if no sale price
    }

    public function getDiscountPercentageAttribute()
    {
        if ($this->discount_type === 'percentage') {
            return $this->discount_value;
        }

        if ($this->price > 0 && $this->discount_type === 'fixed_amount') {
            return round(($this->discount_value / $this->price) * 100, 2);
        }

        return 0;
    }

    public function getIsOutOfStockAttribute()
    {
        return $this->stock_quantity <= 0;
    }

    /**
     * METHODS
     */

    // Increase view count
    public function incrementViewCount()
    {
        $this->increment('view_count');
    }

    // Update rating from reviews
    public function updateRating()
    {
        $avgRating = $this->reviews()->avg('rating');
        $reviewCount = $this->reviews()->count();

        $this->update([
            'average_rating' => $avgRating ?? 0,
            'review_count' => $reviewCount,
        ]);
    }

    // Decrease stock
    public function decreaseStock($quantity)
    {
        $this->decrement('stock_quantity', $quantity);
    }

    // Increase stock
    public function increaseStock($quantity)
    {
        $this->increment('stock_quantity', $quantity);
    }
}
```

### ProductCustomization Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCustomization extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type',
        'label',
        'options',
        'price_modifiers',
        'is_required',
        'max_selections',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'options' => 'array',
        'price_modifiers' => 'array',
        'is_required' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeRequired($query)
    {
        return $query->where('is_required', true);
    }
}
```

### ProductImage Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'url',
        'alt_text',
        'file_name',
        'file_size',
        'mime_type',
        'display_order',
        'is_thumbnail',
    ];

    protected $casts = [
        'is_thumbnail' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
```

### Cart Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'item_count',
        'subtotal',
        'tax',
        'discount',
        'delivery_charge',
        'total',
        'coupon_id',
        'converted_to_order_at',
    ];

    protected $casts = [
        'converted_to_order_at' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * METHODS
     */

    // Calculate and update cart totals
    public function recalculateTotals()
    {
        $subtotal = $this->items()->sum(\DB::raw('item_total'));
        $discount = 0;
        $tax = 0;
        $delivery_charge = 0;

        // Apply coupon discount if exists
        if ($this->coupon) {
            if ($this->coupon->discount_type === 'percentage') {
                $discount = ($subtotal * $this->coupon->discount_value) / 100;
                $discount = min($discount, $this->coupon->maximum_discount_value ?? $discount);
            } else {
                $discount = $this->coupon->discount_value;
            }
        }

        // Calculate tax (assuming 18% GST for India)
        $tax = ($subtotal - $discount) * 0.18;

        $this->update([
            'subtotal' => $subtotal,
            'tax' => $tax,
            'discount' => $discount,
            'total' => $subtotal + $tax + $delivery_charge - $discount,
            'item_count' => $this->items()->sum('quantity'),
        ]);
    }

    // Clear cart
    public function clear()
    {
        $this->items()->delete();
        $this->recalculateTotals();
    }
}
```

### CartItem Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'unit_price',
        'item_total',
        'customizations',
        'special_requests',
    ];

    protected $casts = [
        'customizations' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * EVENTS
     */

    protected static function booted()
    {
        static::saved(function ($item) {
            // Recalculate cart totals when item is updated
            $item->cart->recalculateTotals();
        });

        static::deleted(function ($item) {
            // Recalculate cart totals when item is deleted
            $item->cart->recalculateTotals();
        });
    }

    /**
     * METHODS
     */

    public function updateQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->item_total = $this->unit_price * $quantity;
        $this->save();
    }
}
```

### Wishlist Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public $timestamps = true;

    /**
     * RELATIONSHIPS
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * SCOPES
     */

    public function scopeRecent($query)
    {
        return $query->latest('created_at');
    }
}
```

### Address Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'pincode',
        'street_address',
        'city',
        'state',
        'landmark',
        'apartment_number',
        'type',
        'is_default',
        'is_billing_address',
        'is_serviceable',
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'is_billing_address' => 'boolean',
        'is_serviceable' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Address has many orders
    public function orders()
    {
        return $this->hasMany(Order::class, 'delivery_address_id');
    }

    /**
     * SCOPES
     */

    public function scopeDefault($query)
    {
        return $query->where('is_default', true);
    }

    public function scopeServiceable($query)
    {
        return $query->where('is_serviceable', true);
    }

    public function scopeBillingAddress($query)
    {
        return $query->where('is_billing_address', true);
    }

    /**
     * METHODS
     */

    public function getFullAddressAttribute()
    {
        return "{$this->street_address}, {$this->apartment_number}, {$this->city}, {$this->state} {$this->pincode}";
    }
}
```

### Coupon Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'description',
        'discount_type',
        'discount_value',
        'minimum_order_value',
        'maximum_discount_value',
        'total_usage_limit',
        'usage_count',
        'per_customer_limit',
        'one_time_use',
        'start_date',
        'end_date',
        'is_applicable_to_all',
        'applicable_categories',
        'applicable_products',
        'excluded_products',
        'is_first_purchase_only',
        'is_vip_only',
        'free_shipping',
        'can_combine_with_others',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'applicable_categories' => 'array',
        'applicable_products' => 'array',
        'excluded_products' => 'array',
        'is_applicable_to_all' => 'boolean',
        'is_first_purchase_only' => 'boolean',
        'is_vip_only' => 'boolean',
        'free_shipping' => 'boolean',
        'can_combine_with_others' => 'boolean',
        'is_active' => 'boolean',
        'one_time_use' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    // Coupon has many carts
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // Coupon has many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeValid($query)
    {
        return $query
            ->where('is_active', true)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now());
    }

    public function scopeExpired($query)
    {
        return $query->where('end_date', '<', Carbon::now());
    }

    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', Carbon::now());
    }

    /**
     * METHODS
     */

    public function isValid()
    {
        // Check if coupon is active
        if (!$this->is_active) {
            return false;
        }

        // Check if within valid date range
        if (Carbon::now() < $this->start_date || Carbon::now() > $this->end_date) {
            return false;
        }

        // Check if usage limit exceeded
        if ($this->total_usage_limit && $this->usage_count >= $this->total_usage_limit) {
            return false;
        }

        return true;
    }

    public function isApplicableToUser($user)
    {
        // Check VIP only
        if ($this->is_vip_only && !$user->is_vip) {
            return false;
        }

        // Check first purchase only
        if ($this->is_first_purchase_only && $user->orders()->count() > 0) {
            return false;
        }

        return true;
    }

    public function calculateDiscount($subtotal)
    {
        // Check minimum order value
        if ($this->minimum_order_value && $subtotal < $this->minimum_order_value) {
            return 0;
        }

        $discount = 0;

        if ($this->discount_type === 'percentage') {
            $discount = ($subtotal * $this->discount_value) / 100;
            // Cap discount to maximum_discount_value if set
            if ($this->maximum_discount_value) {
                $discount = min($discount, $this->maximum_discount_value);
            }
        } else {
            $discount = $this->discount_value;
        }

        return $discount;
    }

    public function incrementUsageCount()
    {
        $this->increment('usage_count');
    }
}
```

### Order Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'delivery_address_id',
        'coupon_id',
        'order_number',
        'notes',
        'special_requests',
        'subtotal',
        'tax',
        'discount',
        'delivery_charge',
        'gift_wrap_charge',
        'total',
        'requested_delivery_date',
        'delivery_time_slot',
        'delivery_instructions',
        'is_gift_order',
        'gift_message',
        'billing_address',
        'status',
        'payment_method',
        'payment_status',
        'payment_date',
        'tracking_number',
        'courier_name',
        'shipped_at',
        'delivered_at',
        'is_returnable',
        'return_days',
        'return_eligible_until',
    ];

    protected $casts = [
        'requested_delivery_date' => 'datetime',
        'payment_date' => 'datetime',
        'shipped_at' => 'datetime',
        'delivered_at' => 'datetime',
        'return_eligible_until' => 'datetime',
        'billing_address' => 'array',
        'is_gift_order' => 'boolean',
        'is_returnable' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    // Order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order has delivery address
    public function deliveryAddress()
    {
        return $this->belongsTo(Address::class, 'delivery_address_id');
    }

    // Order has coupon
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    // Order has many items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Order has one payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    // Order has many refunds
    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }

    // Order has activity logs
    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'subject');
    }

    /**
     * SCOPES
     */

    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeByPaymentStatus($query, $status)
    {
        return $query->where('payment_status', $status);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'delivered');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeRecent($query)
    {
        return $query->latest('created_at');
    }

    /**
     * METHODS
     */

    // Generate unique order number
    public static function generateOrderNumber()
    {
        $year = date('Y');
        $count = static::whereYear('created_at', $year)->count() + 1;
        return "#{$year}-" . str_pad($count, 6, '0', STR_PAD_LEFT);
    }

    // Check if order can be cancelled
    public function canBeCancelled()
    {
        return in_array($this->status, ['pending', 'confirmed', 'processing']);
    }

    // Check if order can be returned
    public function canBeReturned()
    {
        return $this->status === 'delivered' &&
               $this->is_returnable &&
               now() <= $this->return_eligible_until;
    }

    // Update order status
    public function updateStatus($status, $notes = null)
    {
        $this->update([
            'status' => $status,
            'notes' => $notes ?? $this->notes,
        ]);
    }
}
```

### OrderItem Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_sku',
        'product_price',
        'quantity',
        'customizations',
        'special_requests',
        'item_subtotal',
        'status',
    ];

    protected $casts = [
        'customizations' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
```

### Payment Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'amount',
        'currency',
        'method',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature',
        'card_last_four',
        'card_network',
        'status',
        'completed_at',
        'failed_at',
        'failure_reason',
        'error_code',
        'error_description',
    ];

    protected $casts = [
        'completed_at' => 'datetime',
        'failed_at' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }

    /**
     * SCOPES
     */

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', 'failed');
    }

    public function scopeRefunded($query)
    {
        return $query->where('status', 'refunded');
    }

    /**
     * METHODS
     */

    public function isCompleted()
    {
        return $this->status === 'completed';
    }

    public function isFailed()
    {
        return $this->status === 'failed';
    }
}
```

### Refund Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'order_id',
        'initiated_by',
        'amount',
        'processing_fee',
        'method',
        'razorpay_refund_id',
        'reason',
        'notes',
        'admin_notes',
        'status',
        'requested_at',
        'processed_at',
        'completed_at',
        'failed_at',
    ];

    protected $casts = [
        'requested_at' => 'datetime',
        'processed_at' => 'datetime',
        'completed_at' => 'datetime',
        'failed_at' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function initiatedBy()
    {
        return $this->belongsTo(AdminUser::class, 'initiated_by');
    }

    /**
     * SCOPES
     */

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'initiated');
    }

    /**
     * METHODS
     */

    public function complete()
    {
        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
        ]);
    }

    public function fail($reason)
    {
        $this->update([
            'status' => 'failed',
            'failed_at' => now(),
            'admin_notes' => $reason,
        ]);
    }
}
```

### Review Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'user_id',
        'order_id',
        'rating',
        'title',
        'comment',
        'is_verified_purchase',
        'status',
        'rejection_reason',
        'moderated_by',
        'moderated_at',
        'helpful_votes',
        'unhelpful_votes',
        'admin_response',
        'admin_response_at',
        'admin_response_by',
    ];

    protected $casts = [
        'is_verified_purchase' => 'boolean',
        'moderated_at' => 'datetime',
        'admin_response_at' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function moderatedBy()
    {
        return $this->belongsTo(AdminUser::class, 'moderated_by');
    }

    public function adminResponseBy()
    {
        return $this->belongsTo(AdminUser::class, 'admin_response_by');
    }

    /**
     * SCOPES
     */

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeHighestRated($query)
    {
        return $query->orderByDesc('rating');
    }

    public function scopeMostHelpful($query)
    {
        return $query->orderByDesc('helpful_votes');
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified_purchase', true);
    }

    /**
     * METHODS
     */

    public function approve()
    {
        $this->update(['status' => 'approved']);
        $this->product->updateRating();
    }

    public function reject($reason)
    {
        $this->update([
            'status' => 'rejected',
            'rejection_reason' => $reason,
        ]);
    }

    public function addAdminResponse($response, $adminUserId)
    {
        $this->update([
            'admin_response' => $response,
            'admin_response_at' => now(),
            'admin_response_by' => $adminUserId,
        ]);
    }
}
```

### AuditLog Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_user_id',
        'user_email',
        'action',
        'entity_type',
        'entity_id',
        'entity_name',
        'old_values',
        'new_values',
        'ip_address',
        'user_agent',
        'method',
        'route',
        'response_status',
        'response_message',
        'description',
        'notes',
    ];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];

    public $timestamps = false;

    /**
     * RELATIONSHIPS
     */

    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class);
    }

    /**
     * SCOPES
     */

    public function scopeByUser($query, $adminUserId)
    {
        return $query->where('admin_user_id', $adminUserId);
    }

    public function scopeByAction($query, $action)
    {
        return $query->where('action', $action);
    }

    public function scopeByEntity($query, $entityType)
    {
        return $query->where('entity_type', $entityType);
    }

    public function scopeRecent($query)
    {
        return $query->latest('created_at');
    }
}
```

### ActivityLog Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_type',
        'subject_id',
        'description',
        'type',
        'actor_type',
        'actor_id',
        'properties',
    ];

    protected $casts = [
        'properties' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    // Polymorphic relationship to subject (what was acted upon)
    public function subject()
    {
        return $this->morphTo();
    }

    // Polymorphic relationship to actor (who did the action)
    public function actor()
    {
        return $this->morphTo();
    }

    /**
     * SCOPES
     */

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeRecent($query)
    {
        return $query->latest('created_at');
    }
}
```

### Attachment Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'attachable_type',
        'attachable_id',
        'original_name',
        'stored_name',
        'mime_type',
        'file_size',
        'file_path',
        'type',
        'is_public',
        'uploaded_by',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    /**
     * RELATIONSHIPS
     */

    // Polymorphic relationship
    public function attachable()
    {
        return $this->morphTo();
    }

    public function uploadedBy()
    {
        return $this->belongsTo(AdminUser::class, 'uploaded_by');
    }

    /**
     * SCOPES
     */

    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    public function scopePrivate($query)
    {
        return $query->where('is_public', false);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
```

### OfficeLocation Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'pincode',
        'phone',
        'email',
        'latitude',
        'longitude',
        'is_active',
        'is_warehouse',
        'is_physical_store',
        'business_hours',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_warehouse' => 'boolean',
        'is_physical_store' => 'boolean',
        'business_hours' => 'array',
    ];

    /**
     * RELATIONSHIPS
     */

    public function adminUsers()
    {
        return $this->hasMany(AdminUser::class);
    }

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWarehouses($query)
    {
        return $query->where('is_warehouse', true);
    }

    public function scopePhysicalStores($query)
    {
        return $query->where('is_physical_store', true);
    }
}
```

### Banner Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'alt_text',
        'cta_button_text',
        'cta_url',
        'cta_target',
        'display_order',
        'is_active',
        'starts_at',
        'ends_at',
        'target_audience',
        'view_count',
        'click_count',
        'ctr',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    /**
     * SCOPES
     */

    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->where('starts_at', '<=', now())
            ->where(function ($q) {
                $q->whereNull('ends_at')->orWhere('ends_at', '>=', now());
            });
    }

    public function scopeByAudience($query, $audience)
    {
        return $query->where('target_audience', $audience);
    }

    /**
     * METHODS
     */

    public function incrementViews()
    {
        $this->increment('view_count');
    }

    public function incrementClicks()
    {
        $this->increment('click_count');
        $this->updateCTR();
    }

    public function updateCTR()
    {
        if ($this->view_count > 0) {
            $ctr = ($this->click_count / $this->view_count) * 100;
            $this->update(['ctr' => $ctr]);
        }
    }
}
```

---

## RELATIONSHIPS MAP

### Visual Relationship Overview

**One-to-Many Relationships:**
```
Users (1) ──── (Many) Addresses
Users (1) ──── (Many) Orders
Users (1) ──── (Many) Reviews
Users (1) ──── (Many) Wishlists
Users (1) ──── (Many) Carts

Products (1) ──── (Many) OrderItems
Products (1) ──── (Many) CartItems
Products (1) ──── (Many) Reviews
Products (1) ──── (Many) ProductImages
Products (1) ──── (Many) ProductCustomizations

Categories (1) ──── (Many) Products
Categories (1) ──── (Many) SubCategories

Orders (1) ──── (Many) OrderItems
Orders (1) ──── (Many) Refunds

Payments (1) ──── (Many) Refunds

AdminUsers (1) ──── (Many) AuditLogs
AdminUsers (1) ──── (Many) Refunds (initiated)
AdminUsers (1) ──── (Many) Reviews (moderated)

Roles (1) ──── (Many) AdminUsers
```

**Many-to-Many Relationships:**
```
Users ←──→ Products (Through Wishlists)
```

**Polymorphic Relationships:**
```
ActivityLog can belong to: User, Product, Order, etc.
Attachment can belong to: Order, Product, Support Ticket, etc.
```

---

## MIGRATION EXECUTION ORDER

Run migrations in this order to respect foreign key constraints:

```bash
# Core tables (no dependencies)
php artisan migrate --path=database/migrations/2024_01_01_000001_create_roles_table.php
php artisan migrate --path=database/migrations/2024_01_01_000002_create_permissions_table.php
php artisan migrate --path=database/migrations/2024_01_01_000003_create_office_locations_table.php

# User-related tables
php artisan migrate --path=database/migrations/2024_01_01_000004_create_users_table.php
php artisan migrate --path=database/migrations/2024_01_01_000005_create_admin_users_table.php
php artisan migrate --path=database/migrations/2024_01_01_000006_create_addresses_table.php

# Product-related tables
php artisan migrate --path=database/migrations/2024_01_01_000007_create_categories_table.php
php artisan migrate --path=database/migrations/2024_01_01_000008_create_products_table.php
php artisan migrate --path=database/migrations/2024_01_01_000009_create_product_customizations_table.php
php artisan migrate --path=database/migrations/2024_01_01_000010_create_product_images_table.php

# Shopping-related tables
php artisan migrate --path=database/migrations/2024_01_01_000011_create_coupons_table.php
php artisan migrate --path=database/migrations/2024_01_01_000012_create_carts_table.php
php artisan migrate --path=database/migrations/2024_01_01_000013_create_cart_items_table.php
php artisan migrate --path=database/migrations/2024_01_01_000014_create_wishlists_table.php

# Order and payment-related tables
php artisan migrate --path=database/migrations/2024_01_01_000015_create_orders_table.php
php artisan migrate --path=database/migrations/2024_01_01_000016_create_order_items_table.php
php artisan migrate --path=database/migrations/2024_01_01_000017_create_payments_table.php
php artisan migrate --path=database/migrations/2024_01_01_000018_create_refunds_table.php

# Review and feedback tables
php artisan migrate --path=database/migrations/2024_01_01_000019_create_reviews_table.php

# Logging and audit tables
php artisan migrate --path=database/migrations/2024_01_01_000020_create_audit_logs_table.php
php artisan migrate --path=database/migrations/2024_01_01_000021_create_activity_logs_table.php

# Content and utility tables
php artisan migrate --path=database/migrations/2024_01_01_000022_create_banners_table.php
php artisan migrate --path=database/migrations/2024_01_01_000023_create_attachments_table.php
php artisan migrate --path=database/migrations/2024_01_01_000024_create_failed_jobs_table.php

# Run all at once
php artisan migrate
```

---

## PROFESSIONAL BEST PRACTICES

### 1. **Indexing Strategy**
- Foreign keys always indexed for JOIN performance
- Frequently filtered columns indexed (status, is_active)
- Commonly sorted columns indexed (created_at)
- Composite indexes for common query patterns
- Not over-indexing (reduces write performance)

### 2. **Soft Deletes**
- Used for audit trails and recovery
- Not used for passwords or sensitive data
- Applied to: Users, Products, Categories, Orders, Reviews, Banners, Addresses, Coupons

### 3. **Timestamps**
- All tables have `created_at` and `updated_at`
- Automatically managed by Laravel
- Used for sorting and filtering

### 4. **Data Integrity**
- Foreign keys with appropriate cascade/restrict actions
- Restrict: Critical relationships (user's orders)
- Cascade: Child deletions (product images when product deleted)
- Set Null: Optional relationships

### 5. **Denormalization (Strategic)**
- Store frequently accessed calculations: `average_rating`, `review_count`, `item_count`
- Improves read performance
- Updated via events/observers

### 6. **JSON Columns**
- Used for: Customizations, allergies, permissions, images array
- Flexible schema for diverse data
- Queryable in modern MySQL

### 7. **Audit Trail**
- `audit_logs` table for admin actions
- `activity_logs` for user actions
- Immutable records for compliance

### 8. **Security**
- Passwords hashed with bcrypt (handled by Laravel)
- Sensitive data never logged
- Two-factor secret encrypted
- SQL injection prevented via ORM

### 9. **Scalability**
- Polymorphic relationships reduce table count
- Proper indexing for query performance
- Separate tables for different concerns
- Queue table for async operations

### 10. **Naming Conventions**
- Table names: plural, snake_case
- Column names: snake_case
- Foreign keys: `model_id` format
- Boolean columns: `is_` prefix
- Timestamps: `_at` suffix
- Boolean for status flags, enum for categories

---

**Document Complete**  
**All tables, migrations, and models documented with professional-level design patterns.**
