<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\WalletType;
use Illuminate\Http\Request;

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

        $fixedInvestment = InvestmentPlan::where('investment_type_id', 1)->latest()->get();

        return view('users.dashboard', compact('user', 'transactions', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'solanaWallet', 'morenolWallet', 'fixedInvestment'));
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

    public function deposit()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        $solanaWallet = $user->wallet->where('wallet_type_id', 5)->where('status', 1)->first();
        $morenolWallet = $user->wallet->where('wallet_type_id', 6)->where('status', 1)->first();

        // merge all wallets

        $wallets = collect([$bitconwallet, $ethwallet, $btcashwallet, $usdtwallet, $solanaWallet, $morenolWallet]);


        return view('users.deposit', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet', 'solanaWallet', 'morenolWallet', 'wallets'));
    }

    public function selectWalletType(Request $request)
    {
        $request->validate([
            'wallet_type' => 'required',
        ]);

        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_type'])->where('status', 1)->first();

        return view('users.deposits.amount', compact('user', 'wallet'));
    }
    public function setAmount(Request $request)
    {
        $request->validate([
            'wallet_type' => 'required',
            'amount' => 'required',
        ]);

        dd($request->all());

        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_type'])->where('status', 1)->first();

        return view('users.deposits.amount', compact('user', 'wallet'));
    }
}
