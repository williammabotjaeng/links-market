<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    // Display a listing of the tickets
    public function index()
    {
        $tickets = Ticket::with('user')->get(); 
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.support.tickets.index', compact('tickets', 'account'));
    }

    // Show the form for creating a new ticket
    public function create()
    {
        $account = Account::where('user_id', Auth::id())->first();
        return view('dashboard.support.tickets.create', compact('account'));
    }

    // Store a newly created ticket in storage
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|string|in:low,medium,high',
        ]);

        Ticket::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'description' => $request->description,
            'priority' => $request->priority,
        ]);

        return redirect()->route('dashboard.support.tickets.index')->with('success', 'Ticket created successfully.');
    }
}