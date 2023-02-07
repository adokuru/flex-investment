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
    Route::get('dashboard', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('investments', [\App\Http\Controllers\UserController::class, 'investments'])->name('users.investments');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


Route::any('test-crypto', function () {
    // $client = new \GuzzleHttp\Client();
    // $response = $client->request('GET', 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin%2Cethereum%2Ctether%2Cbitcoin-cash%2Csolana%Moreno&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=1h%2C24h%2C7d%2C14d%2C30d%2C200d%2C1y');
    // $data = json_decode($response->getBody()->getContents(), true);
    // dd($data);
    return Cryptocap::getAssets();
});
