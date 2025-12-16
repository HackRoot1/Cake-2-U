<?php

use Illuminate\Support\Facades\Route;






// Backend Routes

// Authentication Routes
Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');

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


    








    Route::get('/profile', function () {
        return view('backend.profile');
    })->name('profile');

    Route::get('/settings', function () {
        return view('backend.settings');
    })->name('settings');

    Route::get('/reports', function () {
        return view('backend.reports');
    })->name('reports');
});
