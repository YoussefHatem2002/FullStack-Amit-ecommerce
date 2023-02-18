<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
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

Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// to make admain can make changes in profile

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product/{products}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/p-update/{products}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// to know type of gender

Route::get('/category/{categories}', [ProductController::class, 'productsFromCat'])->name('category');
Route::get('/show/{products}', [ProductController::class, 'show'])->name('show');


// to make cart and its uses

Route::get('/cart', [CartController::class, 'add'])->name('addcart');
Route::get('/showCart', [CartController::class, 'show'])->name('showCart');
Route::get('/editCart/{rowId}', [CartController::class, 'edit'])->name('editCart');
Route::get('/deleteCart/{rowId}', [CartController::class, 'delete'])->name('deleteCart');

// facebook authntication

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);


require __DIR__.'/auth.php';
