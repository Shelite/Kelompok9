<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'tasks' => Task::all(),
            'completedTasks' => Task::where('status', 'Completed')->count(),
            'pendingTasks' => Task::where('status', '!=', 'Completed')->count(),
            'grades' => Grade::with('user')->latest()->get(),
            'users' => User::all(),
        ]);
    }
} 