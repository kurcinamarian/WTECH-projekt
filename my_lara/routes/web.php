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

Route::get('/product_info', function () {
    return view('product_info'); // resources/views/product_info.blade.php
})->name('product_info');

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

use App\Http\Controllers\RegistrationController;

Route::post('/submit_registration', [RegistrationController::class, 'submitRegistration']);
Route::get('/main', function () {
    return view('main'); // Or replace with your actual controller/view
});
