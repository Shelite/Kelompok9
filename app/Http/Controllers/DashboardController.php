<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = [
            [
                'title' => 'Web Development',
                'image' => 'web-development.png',
                'icon' => 'fas fa-code',
                'description' => 'Belajar HTML, CSS, dan JavaScript dari dasar hingga mahir'
            ],
            [
                'title' => 'Mobile Development',
                'image' => 'mobile-development.jpeg',
                'icon' => 'fas fa-mobile-alt',
                'description' => 'Buat aplikasi mobile dengan Flutter dan React Native'
            ],
            [
                'title' => 'Data Science',
                'image' => 'data-science.jpg',
                'icon' => 'fas fa-chart-bar',
                'description' => 'Pelajari Data Science dan Machine Learning dengan Python'
            ],
            [
                'title' => 'Cyber Security',
                'image' => 'cyber-security.jpg',
                'icon' => 'fas fa-shield-alt',
                'description' => 'Pelajari keamanan siber, ethical hacking, dan pertahanan jaringan'
            ],
            [
                'title' => 'UI/UX Design',
                'image' => 'ui-ux-design.jpg',
                'icon' => 'fas fa-pencil-ruler',
                'description' => 'Kuasai desain antarmuka dan pengalaman pengguna modern'
            ],
            [
                'title' => 'Cloud Computing',
                'image' => 'cloud-computing.jpg',
                'icon' => 'fas fa-cloud',
                'description' => 'Pelajari AWS, Azure, dan Google Cloud Platform'
            ],
            [
                'title' => 'Python Programming',
                'image' => 'python-programming.jpg',
                'icon' => 'fab fa-python',
                'description' => 'Pelajari bahasa pemrograman Python dari dasar hingga mahir'
            ],
            [
                'title' => 'Operating System',
                'image' => 'operating-system.jpg',
                'icon' => 'fas fa-desktop',
                'description' => 'Pelajari konsep dan implementasi sistem operasi modern'
            ],
            [
                'title' => 'Artificial Intelligence',
                'image' => 'artificial-intelligence.jpg',
                'icon' => 'fas fa-robot',
                'description' => 'Pelajari AI, Neural Networks, dan Deep Learning'
            ]
        ];

        $search = request('search');
        if ($search) {
            $courses = array_filter($courses, function($course) use ($search) {
                return stripos($course['title'], $search) !== false;
            });
        }

        return view('dashboard', compact('courses'));
    }
} 