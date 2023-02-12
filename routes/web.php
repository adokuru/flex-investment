<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Wallet;
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
    Route::get('investments/{id}', [UserController::class, 'investments_add'])->name('investments.add');
    Route::post('investments-add-review', [UserController::class, 'investment_adds'])->name('investment.setAmount');
    Route::post('investments-success', [UserController::class, 'investments_add_money'])->name('investment.investments_add_money');
    Route::get('investments-success/{id}', [UserController::class, 'investments_success'])->name('user.investments.success');
    Route::get('transactions', [UserController::class, 'transactions'])->name('user.transactions');
    Route::get('deposits', [UserController::class, 'deposit'])->name('users.deposit');
    Route::post('deposits', [UserController::class, 'selectWalletType'])->name('deposit.selectWalletType');
    Route::post('deposits-add', [UserController::class, 'setAmount'])->name('deposit.setAmount');

    Route::post('deposits-success', [UserController::class, 'makePayment'])->name('deposit.makePayment');

    Route::get('withdrawal', [UserController::class, 'withdrawal'])->name('users.withdrawal');
    Route::post('withdrawal', [UserController::class, 'selectwithdrawalWalletType'])->name('withdrawal.selectWalletType');
    Route::post('withdrawal-add', [UserController::class, 'setwithdrawalAmount'])->name('withdrawal.setAmount');
    Route::post('withdrawal-success', [UserController::class, 'withdrawalAdd'])->name('withdrawal.withdrawalAdd');

    Route::get('profile', [UserController::class, 'profile'])->name('users.profile');

    Route::get('referrals', [UserController::class, 'referrals'])->name('users.referrals');

    Route::get('settings', [UserController::class, 'settings'])->name('users.settings');


    // Admin Route
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/about', [ProfileController::class, 'about'])->name('about');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('users.index');
    Route::post('/admin/users', [AdminController::class, 'users'])->name('users.index');
    Route::get('/admin/users/{user}', [AdminController::class, 'show'])->name('users.show');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('admin/profile', [ProfileController::class, 'update'])->name('profile.update');


    // Transactions
    Route::get('/admin/transactions', [AdminController::class, 'transactions'])->name('transactions.index');
    Route::post('/admin/transactions', [AdminController::class, 'transactions'])->name('transactions.index');
    Route::get('/admin/transactions/{transaction}', [AdminController::class, 'show'])->name('transactions.show');
    Route::get('/admin/transactions/{transaction}/edit', [AdminController::class, 'edit'])->name('transactions.edit');
    Route::get('/admin/transactions/approve/{id}', [AdminController::class, 'approveTransaction'])->name('transactions.approveTransaction');
    Route::get('/admin/transactions/reject/{id}', [AdminController::class, 'edit'])->name('transactions.rejectTransaction');
    Route::put('/admin/transactions/{transaction}', [AdminController::class, 'update'])->name('transactions.update');
    Route::delete('/admin/transactions/{transaction}', [AdminController::class, 'destroy'])->name('transactions.destroy');
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

Route::get('/test2', function () {
    $wallets = Wallet::all();
    foreach ($wallets as $wallet) {
        $wallet->usd_balance = (float)($wallet->amount * $wallet->walletType->value);
        $wallet->save();
    }
    return 'done';
});
