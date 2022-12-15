<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validateCredentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if ($request->remember) {
            Cookie::queue('email_cookie', $request->email, 120);
            Cookie::queue('password_cookie', $request->password, 120);
        }
        if (Auth::attempt($validateCredentials, true)) {
            return redirect('/login');
        }

        return redirect()->back()->withErrors(['auth' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
