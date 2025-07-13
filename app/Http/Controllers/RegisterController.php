<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    Public function register(): View
    {
        return view('auth.register');
    }


    public function store(Request $request): RedirectResponse
    {

    // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        return redirect()->route('home')->with('success', 'Registration successful You can now log in!');



        print_r($validatedData);
        die();
    }
}
