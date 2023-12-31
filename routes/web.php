<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->middleware(['throttle:60,1']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cars', [CarController::class, 'index'])->name('cars');
    Route::get('/create-cars', [CarController::class, 'create'])->name('car.create');
    Route::post('/create-cars', [CarController::class, 'store']);
});

Route::get('/collection/search', [CarController::class, 'search'])->name('car.search');
Route::get('/collection', [CarController::class, 'show'])->name('products');
Route::view('/about', 'about')->name('about');

Route::get('/checkout/{slug}', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/{order}', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/success/{checkout:order_id}', [CheckoutController::class, 'success']);
Route::get('/cancel/{checkout:order_id}', [CheckoutController::class, 'cancel']);

require __DIR__.'/auth.php';