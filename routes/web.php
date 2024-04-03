<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\OurProfileController;
use App\Http\Controllers\Client\WhyChooseController;
use App\Http\Controllers\Client\ProductController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/our-profile',[OurProfileController::class,'index'])->name('profile');
Route::get('/our-profile/{slug}',[OurProfileController::class,'show'])->name('profileDetail');
Route::get('/why-choose-us',[WhyChooseController::class,'index'])->name('choose');
Route::get('/product-and-services/{slug}',[ProductController::class,'show'])->name('product');


Route::post('/contact',[HomeController::class,'contact'])->name('postContact');

