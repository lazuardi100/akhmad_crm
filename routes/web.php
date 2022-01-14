<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('dashboard.calonCus');
});

Route::prefix('dashboard/')->group(function(){
    Route::name('dashboard.')->group(function(){
        Route::get('calon', [CustomerController::class, 'showCalon'])->name('calonCus');
        Route::get('customer', [CustomerController::class, 'showCustomer'])->name('customer');
        Route::get('product', [ProductController::class, 'show'])->name('product');
    });
});

Route::prefix('submit/')->group(function(){
    Route::name('submit.')->group(function(){
        Route::post('calon_customer',  [CustomerController::class, 'storeCalon'])->name('calon.customer');
        Route::post('product',  [ProductController::class, 'store'])->name('product');
    });
});
