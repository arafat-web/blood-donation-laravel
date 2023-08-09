<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/", [HomeController::class, 'index'])->name('index');
Route::get("/contact", [HomeController::class, 'contact'])->name('contact');
Route::get("/donate-now", [HomeController::class, 'donateNow'])->name('donate.now');
Route::get("/donor-register", [HomeController::class, 'donorRegister'])->name('donor.register');
Route::get("/search-donor", [HomeController::class, 'searchDonor'])->name('search.donor');
Route::get("/donor-profile", [HomeController::class, 'donorProfile'])->name('donor.profile');

// Admin routes //
Route::prefix('admin')->group(function () {
    Route::get("/dashboard", [AdminController::class, 'index'])->name('dashboard');
    Route::get("/add-donor", [AdminController::class, 'addDonor'])->name('add.donor');
    Route::get("/donor-request", [AdminController::class, 'donorRequest'])->name('donor.request');
    Route::get("/donor-list", [AdminController::class, 'donorList'])->name('donor.list');
    Route::get("/location-settings", [AdminController::class, 'locationSettings'])->name('location.settings');
    Route::get("/donation-settings", [AdminController::class, 'donationSettings'])->name('donation.settings');
});
