<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginPage(){
        return view('login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user has the 'admin' role
            if ($user->hasRole('admin')) {
                $request->session()->regenerate();
                return redirect()->intended('/index'); // Redirect admin
            }

            // Default redirect for other users
            $request->session()->regenerate();
            return redirect()->intended('/mailbox');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        }
}
