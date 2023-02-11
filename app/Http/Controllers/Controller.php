<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function createWallets($user)
    {
        $wallets = [
            [
                'user_id' => $user->id,
                'wallet_type_id' => 1,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
            [
                'user_id' => $user->id,
                'wallet_type_id' => 2,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
            [
                'user_id' => $user->id,
                'wallet_type_id' => 3,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
            [
                'user_id' => $user->id,
                'wallet_type_id' => 4,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
            [
                'user_id' => $user->id,
                'wallet_type_id' => 5,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
            [
                'user_id' => $user->id,
                'wallet_type_id' => 6,
                'amount' => 0,
                'usd_balance' => 0,
                'address' => null,
                'status' => 1,
            ],
        ];
        $user->wallet()->createMany($wallets);
    }
}
