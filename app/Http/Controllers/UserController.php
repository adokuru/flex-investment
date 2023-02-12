<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\InvestmentPlan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserInvestment;
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

        $transactions = Transaction::where('user_id', $user->id)->where('status', 1)->latest()->limit(6)->get();

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

    public function investment_adds(Request $request)
    {
        $request->validate([
            'investment_plan_id' => 'required',
            'amount' => 'required',
            'wallet_id' => 'required',
        ]);

        $amount = $request['amount'];

        if ($request['amount'] < 500) {
            return redirect()->back()->withErrors(['msg' => 'Minimum amount is $500']);
        }

        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_id'])->where('status', 1)->first();

        if ($wallet->usd_balance < $request['amount']) {
            return redirect()->back()->withErrors(['msg' => 'Insufficient balance']);
        }

        $investment = InvestmentPlan::where('id', $request['investment_plan_id'])->first();

        if ($request['amount'] < $investment->minimum_price) {
            return redirect()->back()->withErrors(['msg' => 'Minimum amount is $' . $investment->minimum_price]);
        }

        if ($request['amount'] > $investment->maximum_price) {
            return redirect()->back()->withErrors(['msg' => 'Maximum amount is $' . $investment->maximum_price]);
        }


        return view('users.investments.review', compact('user', 'investment', 'wallet', 'amount'));
    }

    public function investments_add_money(Request $request)
    {
        $request->validate([
            'investment_plan_id' => 'required',
            'amount' => 'required',
            'wallet_id' => 'required',
            'crypto_amount' => 'required',
        ]);

        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_id'])->where('status', 1)->first();

        $investment = InvestmentPlan::where('id', $request['investment_plan_id'])->first();

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'wallet_id' => $request['wallet_id'],
            'amount' => $request['crypto_amount'],
            'value' => $request['amount'],
            'status' => 1,
            'transactions_type_id' => 2,
            'currency' => $wallet->walletType->symbol,
            'transaction_reference' => 'Investment',
        ]);

        UserInvestment::create([
            'user_id' => $user->id,
            'investment_plan_id' => $request['investment_plan_id'],
            'investment_type_id' => $investment->investment_type_id,
            'transaction_id' => $transaction->id,
            'amount' => $request['amount'],
            'status' => 1,
        ]);

        return view('users.investments.success', compact('user', 'transaction', 'investment'));
    }

    public function investments_success($id)
    {
        $user = auth()->user();
        $transaction = Transaction::where('id', $id)->first();
        return view('users.investments.success', compact('user', 'transaction'));
    }

    public function investments_add($id)
    {
        $user = auth()->user();

        $investment = InvestmentPlan::where('id', $id)->first();

        $wallets = $user->wallet->where('status', 1);

        return view('users.investments.add', compact('user', 'investment', 'wallets'));
    }

    public function transactions()
    {
        $user = auth()->user();
        $transactions = Transaction::where('user_id', $user->id)->latest()->paginate(10);

        return view('users.transactions', compact('transactions'));
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


        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_type'])->where('status', 1)->first();

        $amount = $request['amount'];

        return view('users.deposits.review', compact('user', 'wallet', 'amount'));
    }

    public function makePayment(Request $request)
    {
        $request->validate([
            'wallet_type' => 'required',
            'amount' => 'required',
            'crypto_amount' => 'required'
        ]);


        $user = auth()->user();

        $wallet = $user->wallet->where('id', $request['wallet_type'])->where('status', 1)->first();
        $amount = $request['amount'];

        // create Transaction and deposit
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'wallet_id' => $wallet->id,
            'amount' => $request['crypto_amount'],
            'value' => $amount,
            'status' => 0,
            'transactions_type_id' => 1,
            'currency' => $wallet->walletType->symbol,
            'transaction_reference' => 'Deposit',
        ]);

        Deposit::create([
            'user_id' => $user->id,
            'wallet_id' => $wallet->id,
            'status' => 0,
            'transaction_id' => $transaction->id,
            'value' => $request['crypto_amount'],
        ]);

        return view('users.deposits.success');
    }
}
