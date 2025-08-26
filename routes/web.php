<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('{cate_slug?}/{slug?}', [HomeController::class, 'page'])->name('page');
Route::post('form-register', [HomeController::class, 'formRegister'])->name('form-register');

