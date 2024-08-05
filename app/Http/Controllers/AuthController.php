<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums;

class AuthController extends Controller
{
    // public function showAll() {
    //     $users = User::all();
    //     return view('admin.index', ['users' => $users]);
    // }

    //sign in / login
    public function signinPage() {
        return view('auth.auth-boxed-signin');
    }

    //logic sign in / login
    public function signin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $users = Auth::user();

            if ($users->role === 'admin') {
                return redirect()->route('admin.index');
            }
                // abort(404, 'Page not found.');
                return redirect()->route('home');
        }
        return back()-> withErrors([
            'email' => 'The email unavailable.',
            'password' => 'The password was wrong.'
        ]);
    }

    //register / sign up
    public function signupPage() {
        return view('auth.auth-boxed-signup');
    }
    //logic sign up
    public function signup(Request $request) {

        $request->validate([
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'email' => 'required|string|email|max:100|unique:users',
            // function ($attribute, $value, $fail) {
            //     if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            //         $fail('Email is invalid.');
            //     }
            // },
            'password' => ['required', 'string', 'min:8', 'regex:/^[a-zA-Z0-9~!@£¢#∞&*]+$/' ,'confirmed'],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0,
            'role' => 'user',

        ]);
        Auth::login($user);

        return redirect()->route('signup.post')->with('success', 'Register successfully.');
    }

}
