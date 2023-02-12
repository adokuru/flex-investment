<?php

use App\Models\WalletType;
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
    Route::get('deposits', [\App\Http\Controllers\UserController::class, 'deposit'])->name('users.deposit');
    Route::post('deposits', [\App\Http\Controllers\UserController::class, 'selectWalletType'])->name('deposit.selectWalletType');
    Route::post('deposits-add', [\App\Http\Controllers\UserController::class, 'setAmount'])->name('deposit.setAmount');

    Route::post('deposits-success', [\App\Http\Controllers\UserController::class, 'makePayment'])->name('deposit.makePayment');

    Route::get('withdrawal', [\App\Http\Controllers\UserController::class, 'w=ithdrawal'])->name('users.withdrawal');



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

Route::get('/test', function () {
    $walletTypes = WalletType::all();
    foreach ($walletTypes as $walletType) {
        $walletType->updatePrice();
    }
    return 'done';
});