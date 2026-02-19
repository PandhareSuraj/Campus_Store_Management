<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StationeryController;


// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

//Route for stationery requests

Route::middleware(['auth'])->group(function () {

    // User
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

});

//Route for dashboards

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

//Route for registration
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');


require __DIR__.'/settings.php';
