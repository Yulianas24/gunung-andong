<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});
// Booking
Route::get('/booking', [BookingController::class, 'index']);
Route::post('/booking', [BookingController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/data', [BookingController::class, 'data'])->middleware(['auth', 'verified'])->name('data');
Route::get('/data/{item:id}/masuk', [BookingController::class, 'terima'])->middleware(['auth', 'verified']);
Route::get('/data/{item:id}/keluar', [BookingController::class, 'tolak'])->middleware(['auth', 'verified']);
Route::get('/data/{item:id}/pending', [BookingController::class, 'pending'])->middleware(['auth', 'verified']);
Route::delete('/data/{id}', [BookingController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
