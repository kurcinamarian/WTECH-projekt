<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main'); // NIE 'main.blade.php', len 'main'
})->name('main');

Route::get('/account', function () {
    return view('account'); // resources/views/account.blade.php
})->name('account');

Route::get('/admin', function () {
    return view('admin'); // resources/views/admin.blade.php
})->name('admin');

Route::get('/kids', function () {
    return view('kids'); // resources/views/kids.blade.php
})->name('kids');

Route::get('/liked', function () {
    return view('liked'); // resources/views/liked.blade.php
})->name('liked');

Route::get('/men', function () {
    return view('men'); // resources/views/men.blade.php
})->name('men');



Route::get('/register', function () {
    return view('register'); // resources/views/register.blade.php
})->name('register');

Route::get('/shopping_cart', function () {
    return view('shopping_cart'); // resources/views/shopping_cart.blade.php
})->name('shopping_cart');

Route::get('/women', function () {
    return view('women'); // resources/views/women.blade.php
})->name('women');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/submit_registration', [\App\Http\Controllers\Auth\RegisterController::class, 'submitRegistration']);
Route::get('/main', function () {
    return view('main'); // Or replace with your actual controller/view
});

use App\Http\Controllers\UserController;

// Only accessible to authenticated users
Route::middleware('auth')->group(function () {
    Route::post('/account/update-info', [UserController::class, 'updateaccount'])->name('profile.updateaccount');
    Route::post('/account/update-settings', [UserController::class, 'update'])->name('profile.updatesettings');
});

use App\Http\Controllers\ItemController;

Route::get('/kids', [ItemController::class, 'kids'])->name('kids');
Route::get('/men', [ItemController::class, 'mene'])->name('men');
Route::get('/women', [ItemController::class, 'womene'])->name('women');

Route::get('/product/{id}', [ItemController::class, 'show'])->name('product_info');



use App\Http\Controllers\OrderController;


Route::get('/account', [OrderController::class, 'showOrders'])->name('account');


Route::get('/items', [ItemController::class, 'index'])->name('items.index');

use App\Http\Controllers\ShoppingCartController;

Route::get('/shopping_cart', [ShoppingCartController::class, 'index'])->name('shopping_cart');


Route::post('/shopping_cart/add', [ShoppingCartController::class, 'add'])->name('shopping_cart.add');

Route::post('/shopping_cart/update', [ShoppingCartController::class, 'update'])->name('shopping_cart.update');
Route::post('/shopping_cart/delete', [ShoppingCartController::class, 'delete'])->name('shopping_cart.delete');
Route::post('/shopping_cart/save', [ShoppingCartController::class, 'save'])->name('shopping_cart.save');
Route::get('/', [ItemController::class, 'main'])->name('main');

Route::get('/admin', [ItemController::class, 'show_all'])->name('admin.show_all');
Route::delete('/admin/items/{item_id}', [ItemController::class, 'destroy'])->name('admin.items.destroy');
Route::put('/admin/items/{item_id}', [ItemController::class, 'update'])->name('admin.items.update');
// Upload multiple images
Route::post('/admin/items/{item}/images', [ItemController::class, 'updateImages'])->name('admin.items.updateImages');

// Delete a single image
Route::delete('/admin/images/{image_id}', [ImageController::class, 'destroy'])->name('admin.images.destroy');





