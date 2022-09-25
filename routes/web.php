<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\frontend\IndexController::class,'home'])->name('home');
Route::get('/product-category/{slug}/', [App\Http\Controllers\frontend\IndexController::class,'ProductCategory'])->name('product.category');

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function(){
    Route::get('/admin/dashboard' , [AdminController::class, 'index'])->name('admin');
    // Banner creation
    Route::controller(BannerController::class)->group(function(){
        Route::get('banners', 'index')->name('banner.index');
        Route::post('banners', 'store')->name('banner.store');
        Route::get('banners/create', 'create')->name('banner.create');
        Route::get('banners/{id}', 'show')->name('banner.show');
        Route::put('banners/{id}', 'update')->name('banner.update');
        Route::delete('banners/{id}', 'destroy')->name('banner.destroy');
        Route::get('banners/{id}/edit', 'edit')->name('banner.edit');
        Route::post('banner/status', 'bannerStatus')->name('banner.status');
    });
//    Category creation
    Route::controller(CategoryController::class)->group(function(){
        Route::get('categories', 'index')->name('category.index');
        Route::post('categories', 'store')->name('category.store');
        Route::get('categories/create', 'create')->name('category.create');
        Route::get('categories/{id}', 'show')->name('category.show');
        Route::put('categories/{id}', 'update')->name('category.update');
        Route::delete('categories/{id}', 'destroy')->name('category.destroy');
        Route::get('categories/{id}/edit', 'edit')->name('category.edit');
        Route::post('categories/status', 'categoryStatus')->name('category.status');
        Route::post('category/{id}/child', 'getChildByParentID')->name('category.update-by-id');
    });
    //    Brand creation
    Route::controller(BrandController::class)->group(function(){
        Route::get('brands', 'index')->name('brand.index');
        Route::post('brands', 'store')->name('brand.store');
        Route::get('brands/create', 'create')->name('brand.create');
        Route::get('brands/{id}', 'show')->name('brand.show');
        Route::put('brands/{id}', 'update')->name('brand.update');
        Route::delete('brands/{id}', 'destroy')->name('brand.destroy');
        Route::get('brands/{id}/edit', 'edit')->name('brand.edit');
        Route::post('brands/status', 'brandStatus')->name('brand.status');
    });
    //    Product creation
    Route::controller(ProductController::class)->group(function(){
        Route::get('products', 'index')->name('product.index');
        Route::post('products', 'store')->name('product.store');
        Route::get('products/create', 'create')->name('product.create');
        Route::get('products/{id}', 'show')->name('product.show');
        Route::put('products/{id}', 'update')->name('product.update');
        Route::delete('products/{id}', 'destroy')->name('product.destroy');
        Route::get('products/{id}/edit', 'edit')->name('product.edit');
        Route::post('products/status', 'productStatus')->name('product.status');
    });
    //    User creation
    Route::resource('user',\App\Http\Controllers\UserController::class);
    Route::controller(UserController::class)->group(function(){
        Route::post('users/status', 'userStatus')->name('user.status');
    });
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function(){
    Route::get('/vendor/dashboard' , [VendorController::class, 'index']);
});

//For User ogit r Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Route::get('/user/dashboard',[CustomerController::class, 'index']);
});
