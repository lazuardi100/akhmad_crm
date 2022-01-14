<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AuthController;
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
    return redirect()->route('auth.login');
});

Route::middleware('Admin')->group(function () {
    Route::prefix('dashboard/')->group(function () {
        Route::name('dashboard.')->group(function () {
            Route::get('calon', [CustomerController::class, 'showCalon'])->name('calonCus');
            Route::get('customer', [CustomerController::class, 'showCustomer'])->name('customer');
            Route::get('product', [ProductController::class, 'show'])->name('product');
        });
    });

    Route::prefix('submit/')->group(function () {
        Route::name('submit.')->group(function () {
            Route::post('calon_customer',  [CustomerController::class, 'storeCalon'])->name('calon.customer');
            Route::post('product',  [ProductController::class, 'store'])->name('product');
            Route::post('new_customer',  [CustomerController::class, 'addCustomer'])->name('new.customer');
        });
    });
});
//for manager
Route::middleware('Manager')->group(function () {
    Route::prefix('dashboard/')->group(function () {
        Route::name('dashboard.')->group(function () {
            Route::get('approval', [ApprovalController::class, 'show'])->name('approval');
        });
    });

    Route::prefix('submit/')->group(function () {
        Route::name('submit.')->group(function () {
            Route::get('approve/{id}',  [ApprovalController::class, 'approve'])->name('approve');
            Route::get('reject/{id}',  [ApprovalController::class, 'reject'])->name('reject');
        });
    });
});

Route::prefix('auth/')->group(function () {
    Route::name('auth.')->group(function () {
        Route::get('login', function () {
            return view('auth.login');
        })->name('login');
        Route::post('logging', [AuthController::class, 'loggingin'])->name('loggingin');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
