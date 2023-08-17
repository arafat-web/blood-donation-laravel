<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\CityLocationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get("/", [HomeController::class, 'index'])->name('index');
Route::get("/contact", [HomeController::class, 'contact'])->name('contact');
Route::get("/donate-now", [HomeController::class, 'donateNow'])->name('donate.now');
Route::get("/donor-register", [HomeController::class, 'donorRegister'])->name('donor.register');
Route::post("/search-donor", [HomeController::class, 'searchDonor'])->name('search.donor');
Route::get("/donor-profile/{id}", [HomeController::class, 'donorProfile'])->name('donor.profile');


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Admin routes //
Route::prefix('admin')->group(function () {
    Route::get("/dashboard", [AdminController::class, 'index'])->name('dashboard');
    Route::get("/add-donor", [AdminController::class, 'addDonor'])->name('add.donor');
    Route::get("/donor-request", [AdminController::class, 'donorRequest'])->name('donor.request');
    Route::get("/donor-list", [AdminController::class, 'donorList'])->name('donor.list');
    Route::get("/location-settings", [AdminController::class, 'locationSettings'])->name('location.settings');
    Route::get("/donation-settings", [AdminController::class, 'donationSettings'])->name('donation.settings');

    Route::prefix('group')->group(function () {
        Route::post("/add", [BloodController::class, 'add'])->name('blood.add');
        // Route::post("/add-donor", [DonorController::class, 'addDonor'])->name('add.donor');
        // Route::get("/donor-request", [AdminController::class, 'donorRequest'])->name('donor.request');
        // Route::get("/donor-list", [AdminController::class, 'donorList'])->name('donor.list');
    });

    Route::prefix('donor')->group(function () {
        Route::post("/add", [DonorController::class, 'addDonor'])->name('add.new.donor');
        Route::get("/accpet/{id}", [DonorController::class, 'acceptDonor'])->name('accept.donor');
        Route::get("/request/delete/{id}", [DonorController::class, 'deleteRequest'])->name('delete.request');
    });

    Route::prefix('city')->group(function () {
        Route::post("/add", [CityLocationController::class, 'addCity'])->name('city.add');
    });

    Route::prefix('location')->group(function () {
        Route::post("/add", [CityLocationController::class, 'addLocation'])->name('location.add');
    });

});
