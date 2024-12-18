<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    /**
     * Show the form for step one of creating a new website.
     */
    public function createStepOne()
    {
        $user = Auth::user();
        return view('dashboard.websites.create_step_one', compact('user'));
    }

    public function index()
    {
        $user = Auth::user();
        $websites = Website::where('user_id', Auth::id())->get();
        return view('dashboard.websites.index', compact('user', 'websites'));
    }

    /**
     * Handle the first step form submission.
     */
    public function stepOne(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'required|string',
        ]);

        $user = Auth::user();

        $websiteData = $request->only(['name', 'url', 'description']);
        return view('dashboard.websites.create_step_two', compact('websiteData', 'user'));
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

    public function destroy($id)
    {
        $website = Website::findOrFail($id);

        if ($website->user_id !== Auth::id()) {
            return redirect()->route('websites.index')->with('error', 'Unauthorized action.');
        }

        $website->delete();

        return redirect()->route('websites.index')->with('success', 'Website deleted successfully!');
    }
}