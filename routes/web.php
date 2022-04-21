<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::view('/', 'layouts.app')->name('index');

    Route::middleware(['can:view_system_tables'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('vats', VatController::class);
    });

    Route::resource('customers', CustomerController::class)->middleware(['can:customers']);
    Route::resource('products', ProductController::class)->middleware(['can:products']);
});
