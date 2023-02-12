<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    Route::get('dashboard', [UserController::class, 'index'])->name('users.index');
    Route::get('investments', [UserController::class, 'investments'])->name('users.investments');
    Route::get('transactions', [UserController::class, 'transactions'])->name('users.transactions');
    Route::get('deposits', [UserController::class, 'deposit'])->name('users.deposit');
    Route::post('deposits', [UserController::class, 'selectWalletType'])->name('deposit.selectWalletType');
    Route::post('deposits-add', [UserController::class, 'setAmount'])->name('deposit.setAmount');

    Route::post('deposits-success', [UserController::class, 'makePayment'])->name('deposit.makePayment');

    Route::get('withdrawal', [UserController::class, 'w=ithdrawal'])->name('users.withdrawal');



    // Admin Route
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/about', [ProfileController::class, 'about'])->name('about');
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
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
