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
        $user = Auth::user();
        return view('dashboard.accounts.balance', compact('account', 'user'));
    }

    public function showReserved()
    {
        $account = Account::where('user_id', Auth::id())->first();
        $user = Auth::user();
        return view('dashboard.accounts.reserved', compact('account', 'user'));
    }

    public function showBonus()
    {
        $account = Account::where('user_id', Auth::id())->first();
        $user = Auth::user();
        return view('dashboard.accounts.bonus', compact('account', 'user'));
    }
}
