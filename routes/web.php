<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BannerController;
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
        Route::get('banners/{item}', 'show')->name('banner.show');
        Route::put('banners/{item}', 'update')->name('banner.update');
        Route::delete('banners/{item}', 'destroy')->name('banner.destroy');
        Route::get('banners/{item}/edit', 'edit')->name('banner.edit');
    });
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function(){
    Route::get('/vendor/dashboard' , [VendorController::class, 'index']);
});

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Route::get('/user/dashboard',[CustomerController::class, 'index']);
});
