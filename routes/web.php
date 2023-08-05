<?php

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