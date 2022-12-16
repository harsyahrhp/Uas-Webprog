<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            return redirect('/');
        }

        return redirect()->back()->withErrors(['auth' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function registerPage()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'gender' => 'required',
            'date' => 'required|date|before:today|after:1900-01-01',
            'country' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->dob = $request->date;
        $user->country = $request->country;
        try {
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['auth' => 'Email already exists']);
        }

        return redirect('/login');
    }
}
