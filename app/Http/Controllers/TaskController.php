<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->get();
        $projectsCount = $tasks->where('product_type', 'project')->count();
        $websitesCount = $tasks->where('product_type', 'website')->count();
        $backlinksCount = $tasks->where('status', 'completed')->count();

        return view('dashboard.publisher.tasks.index', compact('user', 'projectsCount', 'websitesCount', 'backlinksCount'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string',
            'site_url' => 'required|url',
            'promoted_url' => 'required|url',
            'anchor_text' => 'required|string',
            'status' => 'required|string',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'product_type' => $request->product_type,
            'site_url' => $request->site_url,
            'promoted_url' => $request->promoted_url,
            'anchor_text' => $request->anchor_text,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }
}
