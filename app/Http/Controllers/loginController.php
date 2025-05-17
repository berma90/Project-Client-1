<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    // loginController.php
public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/landing');
    }

    return back()->withErrors([
        'name' => 'User ID atau password salah.',
    ]);
}

}
