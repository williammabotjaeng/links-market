<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showBalance()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.accounts.balance', compact('account'));
    }

    public function showReserved()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.accounts.reserved', compact('account'));
    }

    public function showBonus()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.accounts.bonus', compact('account'));
    }
}
