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

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function(){
    Route::get('/admin/dashboard' , [AdminController::class, 'index'])->name('admin');
    // Banner creation
    Route::get('admin/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::get('admin/add/banner', [BannerController::class, 'create'])->name('banner.create');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function(){
    Route::get('/vendor/dashboard' , [VendorController::class, 'index']);
});

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Route::get('/user/dashboard',[CustomerController::class, 'index']);
});
