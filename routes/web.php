<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Client\HomeController;

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
    Route::get('/get-attribute-values/{attributeId}',[ProductController::class, 'getAttributeValues'])->name('getAttributeValues');
    Route::get('/get-sub-categories/{categoryId}',[ProductController::class, 'getSubCategories'])->name('getSubCategories');
    Route::PUT('/update-status-product/{productId}',[ProductController::class, 'updateStatus'])->name('updateStatusProduct');
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoriesController::class);
    Route::get('/login', [AuthenController::class, 'login'])->name('admin.login');
    Route::post('/login', [AuthenController::class, 'postLogin'])->name('admin.postLogin');
    Route::resource('brands', BrandController::class);
    Route::resource('attributes', AttributeController::class);
    Route::get('/delete-attribute-value/{id}', [AttributeController::class, 'deleteAttributeValue'])->name('deleteAttributeValue');


    route::get('/create-product-basic', [ProductController::class, 'createProductbasic'])->name('createProductbasic');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [HomeController::class, 'findProductByCategory'])->name('findProductByCategory');

