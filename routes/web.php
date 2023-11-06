<?php

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
route::prefix('admin')->group(function () {
    Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
    Route::post('store', [\App\Http\Controllers\BrandController::class, 'store'])->name('brands.store');
    Route::delete('/brands/{id}', [\App\Http\Controllers\BrandController::class, 'destroy'])->name('brands.destroy');

  
});

