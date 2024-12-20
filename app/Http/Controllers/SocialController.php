<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    // Display a listing of the socials
    public function index()
    {
        $socials = Social::all();
        return view('socials.index', compact('socials'));
    }

    // Show the form for creating a new social
    public function create()
    {
        return view('socials.create');
    }

    // Store a newly created social in storage
    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'account_handle' => 'required|string|max:255',y
        ]);

        Social::create($request->all());
        return redirect()->route('socials.index')->with('success', 'Social account created successfully.');
    }

    // Display the specified social
    public function show(Social $social)
    {
        return view('socials.show', compact('social'));
    }

    // Show the form for editing the specified social
    public function edit(Social $social)
    {
        return view('socials.edit', compact('social'));
    }

    // Update the specified social in storage
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'account_handle' => 'required|string|max:255',
        ]);

        $social->update($request->all());
        return redirect()->route('socials.index')->with('success', 'Social account updated successfully.');
    }

    // Remove the specified social from storage
    public function destroy(Social $social)
    {
        $social->delete();
        return redirect()->route('socials.index')->with('success', 'Social account deleted successfully.');
    }
}