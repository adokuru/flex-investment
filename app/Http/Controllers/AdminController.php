<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

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
        $transactions = Transaction::paginate(10);

        return view('transactions.index', compact('transactions'));
    }

    public function editTransaction(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
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
