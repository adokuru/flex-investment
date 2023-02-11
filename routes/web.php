<?php

use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

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

Route::get('/markets', function () {
    return view('market');
});



require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    // User Routes
    Route::get('dashboard', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('investments', [\App\Http\Controllers\UserController::class, 'investments'])->name('users.investments');
    Route::get('transactions', [\App\Http\Controllers\UserController::class, 'transactions'])->name('users.transactions');
    Route::get('deposit', [\App\Http\Controllers\UserController::class, 'deposit'])->name('users.deposit');
    Route::get('withdrawal', [\App\Http\Controllers\UserController::class, 'withdrawal'])->name('users.withdrawal');



    // Admin Route
    Route::get('/admin/dashboard', [\App\Http\Controllers\ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/about', [\App\Http\Controllers\ProfileController::class, 'about'])->name('about');
    Route::get('/admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/admin/profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('admin/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


Route::any('test-crypto', function () {
    return Cryptocap::getAssets();
});
