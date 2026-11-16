<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::redirect('/layanan', '/#layanan')->name('layanan');
    Route::post('/layanan/order', [PageController::class, 'order'])->name('order');
    Route::redirect('/galeri', '/#galeri')->name('galeri');
    Route::redirect('/artikel', '/#artikel')->name('artikel');
    Route::redirect('/kontak', '/#kontak')->name('kontak');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});