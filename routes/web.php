<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('dashboard', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('investments', [\App\Http\Controllers\UserController::class, 'investments'])->name('users.investments');
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
