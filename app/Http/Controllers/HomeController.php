<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Try with different path variations
        return view('pages.index'); // Using dot notation
        // return view('pages/index'); // Using forward slash
        // return view('index'); // If directly in views folder
    }
}
