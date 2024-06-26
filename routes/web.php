<?php

use Illuminate\Support\Facades\Route;



Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::post('/about', [App\Http\Controllers\AboutController::class, 'updateAbout'])->name('update_about');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');
Route::get('/pricing/{id}', [App\Http\Controllers\PricingController::class, 'pricing_details'])->name('pricing_details');
Route::post('/pricing/update/{id}', [App\Http\Controllers\PricingController::class, 'update'])->name('update_pricing');
Route::post('/pricing', [App\Http\Controllers\PricingController::class, 'store'])->name('create_plan');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/admin/faq', [App\Http\Controllers\AdminController::class, 'faq'])->name('faq');
Route::get('/admin/about', [App\Http\Controllers\AdminController::class, 'about'])->name('about');
Route::get('/admin/pricing', [App\Http\Controllers\AdminController::class, 'pricing'])->name('pricing');
