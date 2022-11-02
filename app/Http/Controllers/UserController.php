<?php

namespace App\Http\Controllers;

use App\Models\InvestmentPlan;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.home', compact('users'));
    }

    public function investments()
    {
        $investments = InvestmentPlan::all();

        return view('users.investments', compact('investments'));
    }
}
