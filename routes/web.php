<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StationeryController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Default route → Login Page
Route::get('/', function () {
    return view('auth.login');
});

// Login page route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Registration routes
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');


Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');


Route::middleware(['auth'])->group(function () {

    // Stationery Request - User
    Route::get('/stationery/request', [StationeryController::class, 'create']);
    Route::post('/stationery/request', [StationeryController::class, 'store']);

    // HOD
    Route::get('/hod/requests', [StationeryController::class, 'hodRequests']);
    Route::post('/hod/approve/{id}', [StationeryController::class, 'hodApprove']);

    // Principal
    Route::get('/principal/requests', [StationeryController::class, 'principalRequests']);
    Route::post('/principal/approve/{id}', [StationeryController::class, 'principalApprove']);

    // Trust Head
    Route::get('/trust/requests', [StationeryController::class, 'trustRequests']);
    Route::post('/trust/approve/{id}', [StationeryController::class, 'trustApprove']);

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});


require __DIR__.'/settings.php';