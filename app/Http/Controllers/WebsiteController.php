<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    /**
     * Show the form for creating a new website.
     */
    public function create()
    {
        return view('websites.create');
    }

    /**
     * Store a newly created website in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'traffic' => 'required|integer',
            'ad_space_available' => 'required|integer',
        ]);

        
        $website = new Website([
            'user_id' => Auth::id(), 
            'name' => $request->name,
            'url' => $request->url,
            'description' => $request->description,
            'category' => $request->category,
            'traffic' => $request->traffic,
            'ad_space_available' => $request->ad_space_available,
        ]);

        
        $website->save();

      
        return redirect()->route('websites.index')->with('success', 'Website created successfully!');
    }
}