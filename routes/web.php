<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubscriberController;
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
    return view('admin.index');
});

Route::get('/products', [ProductsController::class,'index'])->name('product.view');
Route::get('/products/add', [ProductsController::class,'add'])->name('product.add');
Route::post('/products/add/submit', [ProductsController::class,'create'])->name('product.add.submit');

Route::post('/products/variations/submit', [ProductsController::class,'productvariations'])->name('product.variations.submit');
Route::post('/products/categories/submit', [ProductsController::class,'productcategories'])->name('product.categories.submit');

Route::view('/index', 'admin.index')->name('admin_index');
// Route::view('/form', 'admin.products.form')->name('product.add');
Route::view('/form/edit', 'admin.products.index')->name('product.edit');
// Route::view('/form/edit', 'form')->name('product.edit');
Route::view('/admin/edit', 'admin.usersetting')->name('usersetting.edit');
Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

Route::view('/categories/index', 'admin.categories.index')->name('categories.index');
Route::get('/banners/index', [BannerController::class,'fetchBanner'])->name('banners.index');
Route::post('/banners/submit', [BannerController::class,'homePageBanner'])->name('bannerimages');
Route::post('/banners/update', [BannerController::class,'updateBanner'])->name('updatebanner');
Route::get('/click_delete/{id}', [BannerController::class,'dlteBanner'])->name('banners.dlte');
// Route::view('/subscriber', 'admin.subscriber')->name('subscriber');
Route::get('/subscriber', [SubscriberController::class,'subscriber'])->name('subscriber');

