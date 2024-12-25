<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'score' => 'required|integer|min:0|max:100',
        ]);

        Grade::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Grade added successfully');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Grade deleted successfully');
    }
} 