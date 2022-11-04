<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();

        return view('users.home', compact('users'));
    }

    public function investments()
    {
        $investments = InvestmentPlan::all();
        $user = auth()->user();

        return view('users.investments', compact('investments'));
    }
}
