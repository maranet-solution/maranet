<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');
Route::get('/pricing', [App\Http\Controllers\PricingController::class, 'pricing'])->name('pricing');
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
