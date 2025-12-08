# CAKE 2 U - Complete Migration Code Files (Ready to Use)

**Framework:** Laravel 12  
**Database:** MySQL 8.0+  
**Copy-Paste Ready:** Yes

---

## COPY-PASTE READY MIGRATION FILES

### 1. Create Users Table

**File:** `database/migrations/2025_01_01_000001_create_users_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number', 10)->unique();
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->text('bio')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->boolean('newsletter_subscribed')->default(true);
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active');
            $table->boolean('two_factor_enabled')->default(false);
            $table->string('two_factor_secret')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->tinyInteger('login_attempt_count')->default(0);
            $table->timestamp('locked_until')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('email');
            $table->index('phone_number');
            $table->index('status');
            $table->index('created_at');
            $table->index('newsletter_subscribed');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
```

### 2. Create Admin Users Table

**File:** `database/migrations/2025_01_01_000002_create_admin_users_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number', 10)->nullable();
            $table->string('password');
            $table->string('avatar_url')->nullable();
            $table->string('department')->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
            $table->boolean('is_super_admin')->default(false);
            $table->boolean('two_factor_enabled')->default(false);
            $table->string('two_factor_secret')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->tinyInteger('login_attempt_count')->default(0);
            $table->timestamp('locked_until')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->foreignId('deleted_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('email');
            $table->index('status');
            $table->index('is_super_admin');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
};
```

### 3. Create Roles Table

**File:** `database/migrations/2025_01_01_000003_create_roles_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('is_system_role')->default(false);
            $table->boolean('is_custom')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('is_system_role');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
```

### 4. Create Permissions Table

**File:** `database/migrations/2025_01_01_000004_create_permissions_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('group'); // products, orders, customers, payments, reports, settings

            $table->index('slug');
            $table->index('group');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
```

### 5. Create Role Permissions Pivot Table

**File:** `database/migrations/2025_01_01_000005_create_role_permissions_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignId('permission_id')->constrained('permissions')->cascadeOnDelete();
            $table->primary(['role_id', 'permission_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
```

### 6. Create Admin User Roles Table

**File:** `database/migrations/2025_01_01_000006_create_admin_user_roles_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_user_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->constrained('admin_users')->cascadeOnDelete();
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignId('assigned_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->timestamp('assigned_at')->useCurrent();
            $table->timestamp('assigned_until')->nullable();
            $table->timestamps();

            $table->unique(['admin_user_id', 'role_id']);
            $table->index('assigned_until');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_user_roles');
    }
};
```

### 7. Create Categories Table

**File:** `database/migrations/2025_01_01_000010_create_categories_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->foreignId('parent_category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('parent_category_id');
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

### 8. Create Products Table

**File:** `database/migrations/2025_01_01_000011_create_products_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('name');
            $table->string('slug');
            $table->string('sku')->unique();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->longText('description');
            $table->text('short_description');
            $table->decimal('price', 10, 2);
            $table->decimal('cost_price', 10, 2)->nullable();
            $table->enum('discount_type', ['percentage', 'fixed'])->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->integer('reorder_level')->default(10);
            $table->json('dietary_info')->nullable(); // ['veg', 'eggless', 'vegan', etc]
            $table->json('allergies')->nullable(); // ['nuts', 'dairy', 'eggs', etc]
            $table->integer('shelf_life_days')->nullable();
            $table->integer('lead_time_days')->default(1);
            $table->string('main_image_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->boolean('is_on_sale')->default(false);
            $table->enum('visibility', ['all', 'registered_only', 'vip_only'])->default('all');
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('review_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('sales_count')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('slug');
            $table->index('sku');
            $table->index('category_id');
            $table->index('is_active');
            $table->index('is_featured');
            $table->index(['is_active', 'stock_quantity']); // Composite
            $table->index('created_at');
            $table->fullText(['name', 'description']); // Full-text search
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
```

### 9. Create Product Variants Table

**File:** `database/migrations/2025_01_01_000012_create_product_variants_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->enum('size', ['small', 'medium', 'large', 'xlarge'])->nullable();
            $table->string('flavor')->nullable();
            $table->decimal('additional_price', 10, 2)->default(0);
            $table->integer('stock_quantity')->default(0);
            $table->integer('reorder_level')->default(5);
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->unique(['product_id', 'size', 'flavor']);
            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
```

### 10. Create Product Attributes Table

**File:** `database/migrations/2025_01_01_000013_create_product_attributes_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('name'); // size, flavor, topping
            $table->string('display_name');
            $table->enum('type', ['dropdown', 'checkbox', 'radio', 'text'])->default('dropdown');
            $table->boolean('is_required')->default(false);
            $table->integer('display_order')->default(0);
            $table->timestamps();

            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_attributes');
    }
};
```

### 11. Create Attribute Options Table

**File:** `database/migrations/2025_01_01_000014_create_attribute_options_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attribute_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_attribute_id')->constrained('product_attributes')->cascadeOnDelete();
            $table->string('value');
            $table->string('display_name');
            $table->decimal('price_modifier', 10, 2)->default(0);
            $table->integer('display_order')->default(0);
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->index('product_attribute_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attribute_options');
    }
};
```

### 12. Create Product Images Table

**File:** `database/migrations/2025_01_01_000015_create_product_images_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('image_url');
            $table->string('alt_text')->nullable();
            $table->integer('display_order')->default(0);
            $table->boolean('is_main_image')->default(false);
            $table->integer('file_size')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->timestamps();

            $table->index('product_id');
            $table->index('is_main_image');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
```

### 13. Create Addresses Table

**File:** `database/migrations/2025_01_01_000020_create_addresses_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('address_type', ['home', 'office', 'other'])->default('home');
            $table->string('full_name');
            $table->string('phone_number', 10);
            $table->string('pincode', 6);
            $table->text('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('landmark')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('is_default_delivery')->default(false);
            $table->boolean('is_default_billing')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id');
            $table->index('pincode');
            $table->index('is_default_delivery');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
```

### 14. Create Payment Methods Table

**File:** `database/migrations/2025_01_01_000021_create_payment_methods_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('payment_method_type', ['card', 'upi', 'wallet', 'bank_transfer']);
            $table->string('provider'); // razorpay, paypal, etc
            $table->text('reference_token')->nullable(); // Encrypted Razorpay token
            $table->string('masked_value'); // XXXX XXXX XXXX 1234
            $table->string('card_holder_name')->nullable();
            $table->tinyInteger('expiry_month')->nullable();
            $table->year('expiry_year')->nullable();
            $table->string('upi_id')->nullable();
            $table->boolean('is_default')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id');
            $table->index('is_default');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
```

### 15. Create Carts Table

**File:** `database/migrations/2025_01_01_000030_create_carts_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('guest_session_id')->nullable();
            $table->decimal('subtotal', 10, 2)->default(0);
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('delivery_charge', 10, 2)->default(0);
            $table->decimal('total', 10, 2)->default(0);
            $table->string('coupon_code')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id');
            $table->index('guest_session_id');
            $table->index('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
```

### 16. Create Cart Items Table

**File:** `database/migrations/2025_01_01_000031_create_cart_items_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('variant_id')->nullable()->constrained('product_variants')->nullOnDelete();
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->enum('size', ['small', 'medium', 'large', 'xlarge'])->nullable();
            $table->string('flavor')->nullable();
            $table->string('custom_message', 50)->nullable();
            $table->text('special_requests')->nullable();
            $table->timestamps();

            $table->index('cart_id');
            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
```

### 17. Create Wishlists Table

**File:** `database/migrations/2025_01_01_000032_create_wishlists_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('variant_id')->nullable()->constrained('product_variants')->nullOnDelete();
            $table->timestamp('created_at')->useCurrent();

            $table->unique(['user_id', 'product_id']);
            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
```

### 18. Create Coupons Table

**File:** `database/migrations/2025_01_01_000040_create_coupons_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->text('description')->nullable();
            $table->enum('discount_type', ['percentage', 'fixed']);
            $table->decimal('discount_value', 10, 2);
            $table->decimal('maximum_discount', 10, 2)->nullable();
            $table->decimal('minimum_purchase_amount', 10, 2)->nullable();
            $table->decimal('maximum_purchase_amount', 10, 2)->nullable();
            $table->integer('usage_limit_total')->nullable();
            $table->integer('usage_limit_per_customer')->nullable();
            $table->integer('usage_count')->default(0);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_first_purchase_only')->default(false);
            $table->boolean('is_vip_only')->default(false);
            $table->boolean('free_shipping')->default(false);
            $table->boolean('stackable')->default(false);
            $table->enum('applicable_to', ['all', 'categories', 'products'])->default('all');
            $table->json('excluded_categories')->nullable();
            $table->json('excluded_products')->nullable();
            $table->integer('max_uses_concurrent')->nullable();
            $table->foreignId('created_by')->constrained('admin_users')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();

            $table->index('code');
            $table->index('is_active');
            $table->index('end_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
```

### 19. Create Coupon Usage Table

**File:** `database/migrations/2025_01_01_000041_create_coupon_usage_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupon_usage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coupon_id')->constrained('coupons')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->decimal('discount_amount', 10, 2);
            $table->timestamp('used_at')->useCurrent();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();

            $table->index('coupon_id');
            $table->index('user_id');
            $table->index('order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupon_usage');
    }
};
```

### 20. Create Orders Table

**File:** `database/migrations/2025_01_01_000050_create_orders_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('guest_email')->nullable();
            $table->string('guest_phone', 10)->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->decimal('delivery_charge', 10, 2)->default(0);
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_method', ['card', 'upi', 'net_banking', 'wallet']);
            $table->enum('payment_status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->enum('delivery_status', ['pending', 'processing', 'packed', 'shipped', 'out_for_delivery', 'delivered', 'cancelled', 'returned'])->default('pending');
            $table->foreignId('delivery_address_id')->constrained('addresses');
            $table->foreignId('billing_address_id')->constrained('addresses');
            $table->date('delivery_date');
            $table->enum('delivery_time_slot', ['morning', 'afternoon', 'evening', 'night']);
            $table->text('special_requests')->nullable();
            $table->decimal('gift_wrap_price', 10, 2)->default(0);
            $table->text('gift_message')->nullable();
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->nullOnDelete();
            $table->text('notes')->nullable();
            $table->string('cancelled_reason')->nullable();
            $table->enum('cancelled_by', ['user', 'admin'])->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->dateTime('shipped_date')->nullable();
            $table->dateTime('delivered_date')->nullable();
            $table->dateTime('returned_date')->nullable();
            $table->string('return_reason')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('courier_name')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('order_number');
            $table->index('user_id');
            $table->index('payment_status');
            $table->index('delivery_status');
            $table->index('created_at');
            $table->index('delivery_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
```

### 21. Create Order Items Table

**File:** `database/migrations/2025_01_01_000051_create_order_items_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('product_name');
            $table->string('product_sku');
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->foreignId('variant_id')->nullable()->constrained('product_variants')->nullOnDelete();
            $table->enum('size', ['small', 'medium', 'large', 'xlarge'])->nullable();
            $table->string('flavor')->nullable();
            $table->string('custom_message', 50)->nullable();
            $table->text('special_requests')->nullable();
            $table->decimal('item_total', 10, 2);
            $table->timestamps();

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

### 22. Create Order Item Customizations Table

**File:** `database/migrations/2025_01_01_000052_create_order_item_customizations_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_item_customizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_item_id')->constrained('order_items')->cascadeOnDelete();
            $table->enum('customization_type', ['size', 'flavor', 'topping', 'message']);
            $table->string('customization_value');
            $table->decimal('price_modifier', 10, 2)->default(0);
            $table->timestamps();

            $table->index('order_item_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_item_customizations');
    }
};
```

### 23. Create Order Status Histories Table

**File:** `database/migrations/2025_01_01_000053_create_order_status_histories_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_status_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->string('previous_status');
            $table->string('new_status');
            $table->foreignId('changed_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->string('reason')->nullable();
            $table->boolean('notification_sent')->default(false);
            $table->timestamps();

            $table->index('order_id');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_status_histories');
    }
};
```

### 24. Create Payments Table

**File:** `database/migrations/2025_01_01_000060_create_payments_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->unique()->constrained('orders')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('transaction_id')->unique();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('INR');
            $table->string('payment_method');
            $table->string('payment_gateway');
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_signature')->nullable();
            $table->enum('payment_status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->string('card_last_4')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('upi_id')->nullable();
            $table->string('wallet_provider')->nullable();
            $table->string('error_code')->nullable();
            $table->text('error_message')->nullable();
            $table->boolean('webhook_received')->default(false);
            $table->timestamp('webhook_received_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('transaction_id');
            $table->index('order_id');
            $table->index('user_id');
            $table->index('payment_status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
```

### 25. Create Refunds Table

**File:** `database/migrations/2025_01_01_000061_create_refunds_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained('payments')->cascadeOnDelete();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->decimal('refund_amount', 10, 2);
            $table->enum('refund_method', ['original_payment', 'store_credit']);
            $table->enum('refund_reason', ['customer_request', 'quality_issue', 'cancellation', 'return', 'other']);
            $table->text('refund_notes')->nullable();
            $table->string('razorpay_refund_id')->nullable();
            $table->enum('refund_status', ['initiated', 'processing', 'completed', 'failed'])->default('initiated');
            $table->foreignId('initiated_by')->constrained('admin_users')->cascadeOnDelete();
            $table->timestamp('initiated_at')->useCurrent();
            $table->timestamp('completed_at')->nullable();
            $table->string('failed_reason')->nullable();
            $table->timestamps();

            $table->index('payment_id');
            $table->index('order_id');
            $table->index('refund_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
```

### 26. Create Reviews Table

**File:** `database/migrations/2025_01_01_000070_create_reviews_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->tinyInteger('rating'); // 1-5
            $table->string('title');
            $table->longText('review_text');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('rejection_reason')->nullable();
            $table->integer('helpful_votes')->default(0);
            $table->integer('unhelpful_votes')->default(0);
            $table->boolean('is_verified_purchase')->default(false);
            $table->longText('admin_response')->nullable();
            $table->timestamp('admin_responded_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('product_id');
            $table->index('user_id');
            $table->index('status');
            $table->index('rating');
            $table->index('is_verified_purchase');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
```

### 27. Create Deliveries Table

**File:** `database/migrations/2025_01_01_000080_create_deliveries_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->unique()->constrained('orders')->cascadeOnDelete();
            $table->foreignId('delivery_partner_id')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->timestamp('assigned_at')->nullable();
            $table->foreignId('assigned_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->date('scheduled_date');
            $table->enum('scheduled_time_slot', ['morning', 'afternoon', 'evening', 'night'])->nullable();
            $table->dateTime('actual_pickup_time')->nullable();
            $table->dateTime('actual_delivery_time')->nullable();
            $table->enum('delivery_status', ['pending', 'assigned', 'out_for_delivery', 'delivered', 'failed', 'rescheduled'])->default('pending');
            $table->text('delivery_notes')->nullable();
            $table->string('customer_signature_url')->nullable();
            $table->string('failed_reason')->nullable();
            $table->integer('retry_count')->default(0);
            $table->dateTime('last_retry_at')->nullable();
            $table->timestamps();

            $table->index('order_id');
            $table->index('delivery_partner_id');
            $table->index('scheduled_date');
            $table->index('delivery_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
```

### 28. Create Delivery Slots Table

**File:** `database/migrations/2025_01_01_000081_create_delivery_slots_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('delivery_slots', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('time_slot', ['morning', 'afternoon', 'evening', 'night']);
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('max_deliveries');
            $table->integer('booked_count')->default(0);
            $table->boolean('is_available')->default(true);
            $table->boolean('holiday_flag')->default(false);
            $table->foreignId('created_by')->constrained('admin_users')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['date', 'time_slot']);
            $table->index('date');
            $table->index('is_available');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_slots');
    }
};
```

### 29. Create Notifications Table (Polymorphic)

**File:** `database/migrations/2025_01_01_000090_create_notifications_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('type');
            $table->morphs('notifiable'); // notifiable_type, notifiable_id
            $table->string('title');
            $table->longText('message');
            $table->json('data')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->boolean('read_by_email')->default(false);
            $table->boolean('read_by_sms')->default(false);
            $table->boolean('read_by_push')->default(false);
            $table->timestamps();

            $table->index('user_id');
            $table->index('read_at');
            $table->index(['notifiable_type', 'notifiable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
```

### 30. Create Activity Logs Table

**File:** `database/migrations/2025_01_01_000091_create_activity_logs_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('activity_type'); // viewed_product, added_to_cart, etc
            $table->morphs('subject'); // subject_type, subject_id
            $table->text('description')->nullable();
            $table->json('metadata')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('activity_type');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
```

### 31. Create Audit Logs Table

**File:** `database/migrations/2025_01_01_000092_create_audit_logs_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_user_id')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->string('action'); // create, edit, delete, view, login, logout, export
            $table->string('subject_type');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->text('description')->nullable();
            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->json('changes')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->index('admin_user_id');
            $table->index('action');
            $table->index('subject_type');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
```

### 32. Create Settings Table

**File:** `database/migrations/2025_01_01_000100_create_settings_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->enum('value_type', ['string', 'integer', 'boolean', 'json', 'array'])->default('string');
            $table->string('category'); // general, payment, email, delivery, security, tax
            $table->text('description')->nullable();
            $table->boolean('is_encrypted')->default(false);
            $table->timestamps();

            $table->index('key');
            $table->index('category');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
```

### 33. Create Banners Table

**File:** `database/migrations/2025_01_01_000101_create_banners_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_url');
            $table->string('link_url')->nullable();
            $table->string('cta_text')->nullable();
            $table->integer('display_order')->default(0);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->enum('target_audience', ['all', 'new_customers', 'vip', 'specific_segment'])->default('all');
            $table->integer('views_count')->default(0);
            $table->integer('clicks_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->foreignId('created_by')->constrained('admin_users')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();

            $table->index('is_active');
            $table->index('display_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
```

### 34. Create Content Pages Table

**File:** `database/migrations/2025_01_01_000102_create_content_pages_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->longText('content');
            $table->integer('content_version')->default(1);
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->foreignId('published_by')->nullable()->constrained('admin_users')->nullOnDelete();
            $table->boolean('display_in_footer')->default(false);
            $table->boolean('display_in_main_menu')->default(false);
            $table->foreignId('created_by')->constrained('admin_users')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();

            $table->index('slug');
            $table->index('is_published');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_pages');
    }
};
```

---

## HOW TO USE

1. **Create a new Laravel project:**
```bash
laravel new cake2u
cd cake2u
```

2. **Update .env file with database credentials:**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cake2u
DB_USERNAME=root
DB_PASSWORD=
```

3. **Copy all migration files to `database/migrations/` folder**

4. **Run migrations:**
```bash
php artisan migrate
```

5. **Create models (or use scaffold):**
```bash
php artisan make:model User
php artisan make:model AdminUser
# ... and so on for each model
```

6. **Run seeders (optional - for test data):**
```bash
php artisan db:seed
```

---

**Document Version:** 1.0  
**Created:** December 2025  
**Status:** Production Ready
