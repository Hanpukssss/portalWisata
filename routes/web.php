<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\TouristPlaceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PortalController;

/*
| Public
*/
Route::get('/', [PortalController::class, 'index'])->name('home');
Route::get('/kategori/{slug}', [PortalController::class, 'category'])->name('category.show');
Route::get('/wisata/{slug}', [PortalController::class, 'show'])->name('place.show');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/deals', function () {
    return view('layouts.deals');
})->name('deals');

Route::get('/reservation', function () {
    return view('layouts.reservation');
})->name('reservation');

/*
| Admin Auth
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class,'showUserLogin'])->name('login');
    Route::post('/login', [AuthController::class,'userLogin'])->name('login.post');
    Route::get('/register', [AuthController::class,'showRegister'])->name('register');
    Route::post('/register', [AuthController::class,'register'])->name('register.post');

    Route::get('/admin/login', [AuthController::class,'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class,'login'])->name('admin.login.post');
});
Route::post('/admin/logout', [AuthController::class,'logout'])->middleware('auth')->name('admin.logout');
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');

/*
| User actions
*/
Route::post('/orders', [OrderController::class, 'store'])->middleware(['auth','role:user'])->name('orders.store');

/*
| Admin Panel
*/
Route::prefix('admin')->name('admin.')->middleware(['auth','role:admin'])->group(function () {

    Route::get('/dashboard', function () {
        $categories = \App\Models\Category::count();
        $places = \App\Models\TouristPlace::count();
        $orders = \App\Models\Order::count();
        return view('admin.dashboard', compact('categories','places','orders'));
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('places', TouristPlaceController::class);
    Route::resource('orders', AdminOrderController::class)->only(['index','show']);
});
