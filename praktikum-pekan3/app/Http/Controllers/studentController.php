<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $students = [ 
        [
            'Name' => 'Haikal Syawal Al Bukhari',
            'Major' => 'Smart City Information System',
            'age' => 19,
            'course' => ['Web Programming', 'Database', 'Cloud computing'],
        ],
        [
            'Name' => 'Hayfa Azalia Rayana',
            'Major' => 'administration bisnis',
            'age' => 19,
            'course' => ['analysis bisnis', 'Database', 'Cloud computing'],
        ],
    ];
        return view('students.index', compact('students'));    
    }
}
