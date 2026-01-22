<?php

use Illuminate\Support\Facades\Route;



// Frontend Routes

Route::get('/', function () {
    return view('frontend.home.index');
})->name('frontend.home.index');





// Backend Routes

// Authentication Routes
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('frontend.index');

// Route::get('/login', function () {
//     return view('backend.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('backend.register');
// })->name('register');

// Route::get('/password/reset', function () {
//     return view('backend.reset-password');
// })->name('password.request');








// =================== Admin =================== 
Route::prefix('/admin')->group(function () {

    Route::get('/login', function () {
        return view('backend.auth.login');
    })->name('backend.login');

    Route::get('/register', function () {
        return view('backend.auth.register');
    })->name('backend.register');
    Route::get('/password/reset', function () {
        return view('backend.auth.reset-password');
    })->name('backend.password.request');


    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('backend.dashboard');



    // Roles and Permissions
    Route::get('/roles', function () {
        return view('backend.access-control.roles.index');
    })->name('roles.index');

    Route::get('/roles/create', function () {
        return view('backend.access-control.roles.create');
    })->name('roles.create');

    Route::post('/roles/store', function () {
        // Logic to store the new role would go here
    })->name('roles.store');

    Route::get('/roles/{id}/edit', function ($id) {
        // In a real application, you would fetch the role by $id
        $role = (object) ['id' => $id, 'name' => 'Example Role']; // Dummy data
        return view('backend.access-control.roles.edit', compact('role'));
    })->name('roles.edit');

    Route::put('/roles/{id}', function ($id) {
        // Logic to update the role would go here
    })->name('roles.update');


    // Permissions Routes 
    Route::get('/permissions', function () {
        return view('backend.access-control.permissions.index');
    })->name('permissions.index');

    Route::get('/permissions/create', function () {
        return view('backend.access-control.permissions.create');
    })->name('permissions.create');

    Route::post('/permissions/store', function () {
        // Logic to store the new permission would go here
    })->name('permissions.store');

    Route::get('/permissions/{id}/edit', function ($id) {
        // In a real application, you would fetch the permission by $id
        $permission = (object) ['id' => $id, 'name' => 'Example Permission']; // Dummy data
        return view('backend.access-control.permissions.edit', compact('permission'));
    })->name('permissions.edit');

    Route::put('/permissions/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('permissions.update');



    // =================== Staff Routes =================

    Route::get('/staff', function () {
        return view('backend.staffs.index');
    })->name('staffs.index');

    Route::get('/staff/create', function () {
        return view('backend.staffs.create');
    })->name('staffs.create');

    Route::post('/staff/store', function () {
        // Logic to store staff
    })->name('staffs.store');

    Route::get('/staffs/{id}/edit', function ($id) {
        return view('backend.staffs.edit');
    })->name('staffs.edit');

    Route::put('/staffs/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('staffs.update');

    Route::get('/staffs/show/{id}', function ($id) {
        return view('backend.staffs.view');
    })->name('staffs.show');

    Route::delete('/staffs/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('staffs.destroy');



    // ================== Customers =================== 


    Route::get('/customer', function () {
        return view('backend.customers.index');
    })->name('customers.index');

    Route::get('/customer/create', function () {
        return view('backend.customers.create');
    })->name('customers.create');

    Route::post('/customer/store', function () {
        // Logic to store customer
    })->name('customers.store');

    Route::get('/customers/{id}/edit', function ($id) {
        return view('backend.customers.edit');
    })->name('customers.edit');

    Route::put('/customers/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('customers.update');

    Route::get('/customers/show/{id}', function ($id) {
        return view('backend.customers.view');
    })->name('customers.show');

    Route::delete('/customers/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('customers.destroy');

    Route::post('/customers/bulk', function ($id) {
        // Logic to update the permission would go here
    })->name('customers.bulk');

    Route::get('/customers/export', function ($id) {
        // Logic to update the permission would go here
    })->name('customers.export');

    Route::post('/customers/unblock', function ($id) {
        // Logic to update the permission would go here
    })->name('customers.unblock');




    // ================== Products =================== 


    Route::get('/product', function () {
        return view('backend.products.index');
    })->name('products.index');

    Route::get('/product/create', function () {
        return view('backend.products.create');
    })->name('products.create');

    Route::post('/product/store', function () {
        // Logic to store product
    })->name('products.store');

    Route::get('/products/{id}/edit', function ($id) {
        return view('backend.products.edit');
    })->name('products.edit');

    Route::put('/products/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('products.update');

    Route::get('/products/show/{id}', function ($id) {
        return view('backend.products.view');
    })->name('products.show');

    Route::delete('/products/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('products.destroy');





    Route::post('/products/bulk', function ($id) {
        // Logic to update the permission would go here
    })->name('products.bulk');

    Route::post('/products/duplicate', function ($id) {
        // Logic to update the permission would go here
    })->name('products.duplicate');

    Route::post('/products/activate', function ($id) {
        // Logic to update the permission would go here
    })->name('products.activate');

    Route::post('/products/deactivate', function ($id) {
        // Logic to update the permission would go here
    })->name('products.deactivate');

    Route::get('/products/export', function ($id) {
        // Logic to update the permission would go here
    })->name('products.export');

    Route::post('/products/unblock', function ($id) {
        // Logic to update the permission would go here
    })->name('products.unblock');

    // ==================== Reviews (UI-only) ====================

    // Reviews Management (UI-only routes with dummy data)
    Route::get('/reviews', function () {
        // Dummy page showing list of reviews (UI only)
        return view('backend.reviews.index');
    })->name('admin.reviews.index');

    Route::get('/reviews/settings', function () {
        // Review moderation settings (UI only)
        return view('backend.reviews.settings');
    })->name('admin.reviews.settings');

    Route::get('/reviews/{id}', function ($id) {
        // Review detail (UI only) - in real app you would fetch by $id
        $reviewId = $id;
        return view('backend.reviews.show', compact('reviewId'));
    })->name('admin.reviews.show');


    // ==================== Delivery (UI-only) ====================

    // Delivery Management UI-only routes
    Route::get('/delivery/slots', function () {
        return view('backend.delivery.slots.index');
    })->name('admin.delivery.slots.index');

    Route::get('/delivery/slots/calendar', function () {
        return view('backend.delivery.slots.calendar');
    })->name('admin.delivery.slots.calendar');

    Route::get('/delivery/assignments', function () {
        return view('backend.delivery.assignments');
    })->name('admin.delivery.assignments');

    Route::get('/delivery/partners', function () {
        return view('backend.delivery.partners.index');
    })->name('admin.delivery.partners.index');

    Route::get('/delivery/tracking', function () {
        return view('backend.delivery.tracking');
    })->name('admin.delivery.tracking');

    Route::get('/delivery/issues', function () {
        return view('backend.delivery.issues');
    })->name('admin.delivery.issues');

    Route::get('/delivery/reports', function () {
        return view('backend.delivery.reports');
    })->name('admin.delivery.reports');

    // ==================== Backup & Restore (UI-only) ====================

    Route::get('/backups/scheduled', function () {
        return view('backend.backups.scheduled');
    })->name('admin.backups.scheduled');

    Route::get('/backups', function () {
        return view('backend.backups.index');
    })->name('admin.backups.index');

    Route::get('/backups/create', function () {
        return view('backend.backups.create');
    })->name('admin.backups.create');

    Route::get('/backups/restore', function () {
        return view('backend.backups.restore');
    })->name('admin.backups.restore');

    Route::get('/backups/security', function () {
        return view('backend.backups.security');
    })->name('admin.backups.security');

    Route::get('/backups/verify', function () {
        return view('backend.backups.verify');
    })->name('admin.backups.verify');

    // ==================== Category ====================


    Route::get('/category', function () {
        return view('backend.category.index');
    })->name('category.index');

    Route::get('/category/create', function () {
        return view('backend.category.create');
    })->name('category.create');

    Route::post('/category/store', function () {
        // Logic to store category
    })->name('category.store');

    Route::get('/category/{id}/edit', function ($id) {
        return view('backend.category.edit');
    })->name('category.edit');

    Route::put('/category/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('category.update');

    Route::get('/category/show/{id}', function ($id) {
        return view('backend.category.view');
    })->name('category.show');

    Route::delete('/category/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('category.destroy');

    Route::get('/category/reorder', function ($id) {
        // Logic to update the permission would go here
    })->name('category.reorder');


    
    
    // ==================== Coupons ====================


    Route::get('/coupons', function () {
        return view('backend.coupons.index');
    })->name('coupons.index');

    Route::get('/coupons/create', function () {
        return view('backend.coupons.create');
    })->name('coupons.create');

    Route::post('/coupons/store', function () {
        // Logic to store coupons
    })->name('coupons.store');

    Route::get('/coupons/{id}/edit', function ($id) {
        return view('backend.coupons.edit');
    })->name('coupons.edit');

    Route::put('/coupons/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('coupons.update');

    Route::get('/coupons/show/{id}', function ($id) {
        return view('backend.coupons.view');
    })->name('coupons.show');

    Route::delete('/coupons/{id}', function ($id) {
        // Logic to update the permission would go here
    })->name('coupons.destroy');

    Route::post('/coupons/bulk', function ($id) {
        // Logic to update the permission would go here
    })->name('coupons.bulk');

    Route::post('/coupons/deactivate', function ($id) {
        // Logic to update the permission would go here
    })->name('coupons.deactivate');

    Route::post('/coupons/export', function ($id) {
        // Logic to update the permission would go here
    })->name('coupons.export');




    Route::get('/orders', function () {
        return view('backend.orders.index');
    })->name('orders.index');

    Route::get('/orders/show/{id}', function ($id) {
        return view('backend.orders.view', ['order_id' => $id]);
    })->name('orders.show');

    Route::post('/orders/track/{id}', function ($id) {
        // Logic to initiate tracking or show tracking info
        return back()->with('status', 'Tracking info requested for order ' . $id);
    })->name('orders.track');

    Route::post('/orders/reorder/{id}', function ($id) {
        // Logic to reorder
        return back()->with('status', 'Reorder placed for order ' . $id);
    })->name('orders.reorder');

    Route::get('/orders/{id}/edit', function ($id) {
        return view('backend.orders.edit', ['order_id' => $id]);
    })->name('orders.edit');

    Route::post('/orders/print/{id}', function ($id) {
        // Placeholder for printing
        return back()->with('status', 'Print requested for order ' . $id);
    })->name('orders.print');

    Route::post('/orders/refund/{id}', function ($id) {
        // Process refund
        return back()->with('status', 'Refund processed for order ' . $id);
    })->name('orders.refund');

    Route::post('/orders/cancel/{id}', function ($id) {
        // Logic to cancel order
        return back()->with('status', 'Order ' . $id . ' cancelled.');
    })->name('orders.cancel');

    Route::post('/orders/update-status/{id}', function ($id) {
        // Update order status stub (returns JSON for AJAX updates)
        return response()->json(['message' => 'Order ' . $id . ' status updated.']);
    })->name('orders.update-status');

    Route::post('/orders/return/{id}', function ($id) {
        // Logic to process return/exchange
        return back()->with('status', 'Return/exchange requested for order ' . $id);
    })->name('orders.return');

    Route::post('/orders/bulk', function () {
        // Bulk actions stub
        return back()->with('status', 'Bulk action executed.');
    })->name('orders.bulk');

    // New order routes (UI + stubs)
    Route::get('/orders/create', function () {
        return view('backend.orders.create');
    })->name('orders.create');

    Route::post('/orders/store', function () {
        // Placeholder to create order (sample)
        return back()->with('status', 'Order created (sample).');
    })->name('orders.store');

    Route::put('/orders/{id}', function ($id) {
        // Update order (sample)
        return back()->with('status', 'Order ' . $id . ' updated.');
    })->name('orders.update');














    Route::get('/profile', function () {
        return view('backend.profile');
    })->name('profile');

    Route::get('/settings', function () {
        return view('backend.settings');
    })->name('settings');

    // ==================== Admin Settings (UI-only) ====================
    // NOTE: UI-only routes; integrate with controllers and validation in future.
    Route::get('/settings/general', function () {
        return view('backend.settings.general');
    })->name('admin.settings.general');

    Route::get('/settings/email', function () {
        return view('backend.settings.email');
    })->name('admin.settings.email');

    Route::get('/settings/payment', function () {
        return view('backend.settings.payment');
    })->name('admin.settings.payment');

    Route::get('/settings/delivery', function () {
        return view('backend.settings.delivery');
    })->name('admin.settings.delivery');

    Route::get('/settings/notifications', function () {
        return view('backend.settings.notifications');
    })->name('admin.settings.notifications');

    Route::get('/settings/seo', function () {
        return view('backend.settings.seo');
    })->name('admin.settings.seo');

    Route::get('/settings/api', function () {
        return view('backend.settings.api');
    })->name('admin.settings.api');

    Route::get('/settings/security', function () {
        return view('backend.settings.security');
    })->name('admin.settings.security');

    Route::get('/settings/tax', function () {
        return view('backend.settings.tax');
    })->name('admin.settings.tax');

    Route::get('/reports', function () {
        return view('backend.reports');
    })->name('reports');

    // =================== Payments ===================
    Route::get('/payments', function () {
        return view('backend.payments.index');
    })->name('payments.index');

    Route::get('/payments/create', function () {
        return view('backend.payments.create');
    })->name('payments.create');

    Route::post('/payments/store', function () {
        // Logic to store the payment (stub)
    })->name('payments.store');

    Route::get('/payments/{id}', function ($id) {
        return view('backend.payments.view', ['transaction_id' => $id]);
    })->name('payments.view');

    Route::get('/payments/{id}/edit', function ($id) {
        return view('backend.payments.edit', ['transaction_id' => $id]);
    })->name('payments.edit');

    Route::put('/payments/{id}', function ($id) {
        // Logic to update the payment (stub)
    })->name('payments.update');

    Route::post('/payments/{id}/refund', function ($id) {
        // Process refund (stub)
        return back()->with('status', 'Refund initiated for ' . $id);
    })->name('payments.refund');

    Route::get('/payments/{id}/receipt', function ($id) {
        // Generate/download receipt (stub)
        return back()->with('status', 'Receipt download requested for ' . $id);
    })->name('payments.receipt');

    Route::get('/payments/reports', function () {
        return view('backend.payments.reports');
    })->name('payments.reports');

    // ==================== Audit Logs (UI-only) ====================

    // NOTE: This is a UI-only implementation. In a real app, add middleware, observers and a controller.
    Route::get('/audit-logs', function () {
        // Dummy page showing list of audit logs (UI only)
        return view('backend.audit.index');
    })->name('admin.audit.index');

    Route::get('/audit-logs/{id}', function ($id) {
        // Audit log detail (UI only) - in real app you would fetch by $id
        $log = (object) [
            'id' => $id,
            'action' => 'Edit',
            'user_name' => 'Jane Doe',
            'user_email' => 'jane@example.com',
            'entity_type' => 'Product',
            'entity_name' => 'Example Product',
            'timestamp' => now()->subHours(3)->toDateTimeString(),
            'ip' => '192.168.1.10',
            'device' => 'Chrome on Windows 10',
            'before' => ['price' => '10.00', 'name' => 'Old name'],
            'after' => ['price' => '12.99', 'name' => 'Example Product'],
            'summary' => 'Price updated from 10.00 to 12.99'
        ];
        return view('backend.audit.show', compact('log'));
    })->name('admin.audit.show');

    Route::get('/audit-logs/reports', function () {
        // Reports dashboard (UI only)
        return view('backend.audit.reports');
    })->name('admin.audit.reports');

    Route::get('/audit-logs/settings', function () {
        // Retention policy settings (UI only)
        return view('backend.audit.settings');
    })->name('admin.audit.settings');

    // ==================== Reports & Analytics (UI-only) ====================

    // NOTE: UI-only routes. Replace with controllers and data access in the future.
    Route::get('/reports', function () {
        return view('backend.reports.dashboard');
    })->name('admin.reports.dashboard');

    Route::get('/reports/sales', function () {
        return view('backend.reports.sales');
    })->name('admin.reports.sales');

    Route::get('/reports/customers', function () {
        return view('backend.reports.customers');
    })->name('admin.reports.customers');

    Route::get('/reports/products', function () {
        return view('backend.reports.products');
    })->name('admin.reports.products');

    Route::get('/reports/orders', function () {
        return view('backend.reports.orders');
    })->name('admin.reports.orders');

    Route::get('/reports/payments', function () {
        return view('backend.reports.payments');
    })->name('admin.reports.payments');

    Route::get('/reports/inventory', function () {
        return view('backend.reports.inventory');
    })->name('admin.reports.inventory');

    Route::get('/reports/feedback', function () {
        return view('backend.reports.feedback');
    })->name('admin.reports.feedback');

    Route::get('/reports/delivery', function () {
        return view('backend.reports.delivery');
    })->name('admin.reports.delivery');

    Route::get('/reports/custom', function () {
        return view('backend.reports.custom');
    })->name('admin.reports.custom');

    Route::get('/payments/webhooks', function () {
        return view('backend.payments.webhooks');
    })->name('payments.webhooks');

    Route::post('/payments/webhooks/verify', function () {
        // Manual webhook verification (stub)
        return back()->with('status', 'Webhook verified (stub).');
    })->name('payments.webhooks.verify');



    Route::get('/banners', function() {
        return view('backend.banners.index');
    })->name('banner.index');

    Route::get('/banners/show', function() {
        return view('backend.banners.view');
    })->name('banner.show');
   
    Route::get('/banners/create', function() {
        return view('backend.banners.create');
    })->name('banner.create');
    
    Route::get('/banners/edit', function() {
        return view('backend.banners.edit');
    })->name('banner.edit');



    Route::get('/promotional-banners', function() {
        return view('backend.promotional-banners.index');
    })->name('promotional.banner.index');

    Route::get('/promotional/banners/show', function() {
        return view('backend.promotional-banners.view');
    })->name('promotional.banner.show');
   
    Route::get('/promotional/banners/create', function() {
        return view('backend.promotional-banners.create');
    })->name('promotional.banner.create');
    
    Route::get('/promotional/banners/edit', function() {
        return view('backend.promotional-banners.edit');
    })->name('promotional.banner.edit');

    // ==================== Newsletters ====================

    // Template CRUD (UI stubs)
    Route::get('/newsletters', function () {
        return view('backend.newsletters.index');
    })->name('newsletter.index');

    Route::get('/newsletters/create', function () {
        return view('backend.newsletters.create');
    })->name('newsletter.create');

    Route::get('/newsletters/{id}/edit', function ($id) {
        // In a real app you would fetch the template by $id
        return view('backend.newsletters.edit');
    })->name('newsletter.edit');

    Route::get('/newsletters/show/{id}', function ($id) {
        // In a real app you would fetch the campaign/template by $id
        return view('backend.newsletters.view');
    })->name('newsletter.show');

    // Campaigns (demo stubs)
    Route::get('/campaigns', function () {
        return view('backend.newsletters.index');
    })->name('campaigns.index');

    Route::get('/campaigns/{id}', function ($id) {
        return view('backend.newsletters.view');
    })->name('campaigns.show');

});
