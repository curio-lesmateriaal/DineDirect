<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function authenticate(Request $request) {
        if( Auth::attempt($request->only('email', 'password')) ) {
            return redirect()->route('dashboard');
        } else {
            dd('Invalid credentials');
        }
    }
}
