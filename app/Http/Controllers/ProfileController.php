<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletType;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }

    public function approveTransaction($id)
    {
        DB::transaction(function () use ($id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->update(['status' => 1]);

            if ($transaction->transaction_type == 2) {
                $walletType = WalletType::where('symbol', $transaction->currency)->first();
                $transaction->withdraw->update(['status' => 1]);
                $user = User::findOrFail($transaction->user_id);
                $user->earnings = $user->earnings - ($transaction->amount * $walletType->value);
                $user->save();
            }

            if ($transaction->transaction_type == 1) {
                $transaction->deposit->update(['status' => 1]);
                $wallet = Wallet::where('id', $transaction->wallet_id)->first();
                $wallet->update(['amount' => $wallet->amount + $transaction->amount]);
                // Update Wallet Amount
                $walletType = $wallet->walletType;
                $wallet->usd_balance = $wallet->amount * $walletType->value;
                $wallet->update();
            }
        });
        return redirect()->back()->with('success', 'Transaction approved.');
    }

    public function rejectTransaction($id)
    {
        DB::transaction(function () use ($id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->update(['status' => 2]);
        });


        return redirect()->back()->with('success', 'Transaction rejected.');
    }
}
