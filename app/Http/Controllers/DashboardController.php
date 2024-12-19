<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Atau Anda bisa menggunakan paginate() jika ingin menambahkan pagination
        return view('dashboard', compact('courses'));
    }
} 