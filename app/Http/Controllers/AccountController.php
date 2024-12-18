<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showBalance()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.account.balance', compact('account'));
    }

    public function showReserved()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.account.reserved', compact('account'));
    }

    public function showBonus()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.account.bonus', compact('account'));
    }
}
