<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController
{
    public function dashboard()
    {
        $tasks = Task::with(['submissions.user'])->get();
        $completedTasks = Task::where('status', 'Completed')->count();
        $pendingTasks = Task::where('status', '!=', 'Completed')->count();

        return view('admin.dashboard', compact('tasks', 'completedTasks', 'pendingTasks'));
    }
} 