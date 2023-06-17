<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }

    public function users()
    {

        $users = User::where('role_id', 2)->paginate(10);

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    public function transactions()
    {
        $transactions = Transaction::latest()->paginate(10);

        return view('transactions.index', compact('transactions'));
    }

    public function editTransaction(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function approveTransaction($id)
    {
        DB::transaction(function () use ($id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->update(['status' => 1]);

            if ($transaction->transactions_type_id == 2) {
                $wallet = Wallet::where('id', $transaction->wallet_id)->first();
                $user = User::findOrFail($transaction->user_id);
                $user->earnings = $user->earnings - ($transaction->amount * $wallet->walletType->value);
                $user->save();

                $wallet->usd_balance = $wallet->usd_balance - $transaction->amount;

                $wallet->amount = $wallet->amount - ($transaction->amount / $wallet->walletType->value);
            }

            if ($transaction->transactions_type_id == 1) {
                $wallet = Wallet::where('id', $transaction->wallet_id)->first();
                $wallet->update(['amount' => $wallet->amount + $transaction->amount]);
                // Update Wallet Amount
                $walletType = $wallet->walletType;
                $wallet->usd_balance = $wallet->amount * $walletType->value;
                $wallet->update();
                // Update User Earnings
                $user = User::findOrFail($transaction->user_id);
                $user->earnings = floatval($user->earnings) + floatval($transaction->amount * $walletType->value);
                $user->save();
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

    public function updateTransaction(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully');
    }

    public function showTransaction(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function about()
    {
        return view('about');
    }
}
