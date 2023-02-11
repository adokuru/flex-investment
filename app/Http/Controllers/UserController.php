<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;
use App\Models\Transaction;
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
        $solanaWallet = $user->wallet->where('wallet_type_id', 5)->where('status', 1)->first();
        $morenolWallet = $user->wallet->where('wallet_type_id', 6)->where('status', 1)->first();

        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('users.dashboard', compact('user', 'transactions', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'solanaWallet', 'morenolWallet'));
    }

    public function investments()
    {
        $fixedInvestment = InvestmentPlan::where('investment_type_id', 1)->latest()->get();
        $flexibleInvestment = InvestmentPlan::where('investment_type_id', 2)->latest()->get();
        $trialInvestment = InvestmentPlan::where('investment_type_id', 3)->latest()->get();
        $user = auth()->user();

        return view('users.investments', compact('trialInvestment', 'flexibleInvestment', 'fixedInvestment'));
    }

    public function transactions()
    {
        $fixedInvestment = InvestmentPlan::where('investment_type_id', 1)->latest()->get();
        $flexibleInvestment = InvestmentPlan::where('investment_type_id', 2)->latest()->get();
        $trialInvestment = InvestmentPlan::where('investment_type_id', 3)->latest()->get();
        $user = auth()->user();

        return view('users.transactions', compact('trialInvestment', 'flexibleInvestment', 'fixedInvestment'));
    }
}
