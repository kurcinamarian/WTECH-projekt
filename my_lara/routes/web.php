<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main'); // NIE 'main.blade.php', len 'main'
})->name('main');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
