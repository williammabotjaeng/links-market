<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    // Display a listing of the tickets
    public function index()
    {
        $tickets = Ticket::with('user')->get(); 
        return view('tickets.index', compact('tickets'));
    }

    // Show the form for creating a new ticket
    public function create()
    {
        return view('tickets.create');
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

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }
}