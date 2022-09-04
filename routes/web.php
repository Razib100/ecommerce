<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('frontend.master');
});

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
