<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::get('pet-shop/profile', [ProductController::class, 'profile'])->name('pet-shop/profile')->middleware('auth');

Route::post('pet-shop/make-order', [ProductController::class, 'makeOrder'])->name('pet-shop/make-order');

Route::get('pet-shop/checkout', [ProductController::class, 'checkout'])->name('pet-shop/checkout');

Route::get('/', [ProductController::class, 'shopMain'])->name('pet-shop/index');

Route::get('pet-shop/index', [ProductController::class, 'shopMain'])->name('pet-shop/index');

Route::get('pet-shop/product-details', [ProductController::class, 'productDetails'])->name('pet-shop/product-details');

Route::get('pet-shop/shop-page', [ProductController::class, 'shopList'])->name('pet-shop/shop-page');

Route::get('pet-shop/about-us', [ProductController::class, 'about'])->name('pet-shop/about-us');

Route::get('pet-shop/contact', [ProductController::class, 'contact'])->name('pet-shop/contact');

Route::get('pet-shop/add-cart', [ProductController::class, 'addCart'])->name('pet-shop/add-cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
