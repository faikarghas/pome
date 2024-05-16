<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthPageController;
use App\Http\Controllers\Admin\DashboardController;


use App\Http\Middleware\RedirectIfNotAuthenticated;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/register',[AuthPageController::class,'register'])->name('register');
Route::get('/login/{token}',[AuthPageController::class,'login'])->name('login');
Route::post('/logout',[AuthPageController::class,'logout'])->name('logout');

Route::post('/auth/email/register',[AuthPageController::class,'actionRegister'])->name('storeRegister');
Route::post('/auth/email/login',[AuthPageController::class,'actionLogin'])->name('storeLogin');

// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('product', ProductController::class);
//     Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//     Route::get('/generateToken',[AuthPageController::class,'createToken'])->name('token');
// });

Route::middleware([RedirectIfNotAuthenticated::class])->group(function () {
    Route::resource('product', ProductController::class);
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/generateToken',[AuthPageController::class,'createToken'])->name('token');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});