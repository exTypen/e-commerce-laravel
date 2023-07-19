<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'frontIndex'])->name('front.home');

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('register', [AuthController::class,'register'])->name('auth.register');
    Route::post('store', [AuthController::class,'store'])->name('auth.store');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('products/{slug}' , [ProductController::class, 'show'])->name('products.show');

Route::prefix('admin')->middleware(IsAdmin::class)->group( function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::resource('products' , ProductController::class)->except('show');
    Route::resource('categories' , CategoryController::class);
    Route::resource('brands' , BrandController::class);
    Route::resource('banners' , BannerController::class);
});
