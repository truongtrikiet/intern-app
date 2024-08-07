<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums;
use Illuminate\Validation\ValidationException;

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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->role === 'admin') {
            return redirect()->route('admin.index');
            } else {
                return redirect()->route('blog-user');
            }
        } else {
            throw ValidationException::withMessages([
                'email' => 'Email or password is incorrect',
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('signinPage');
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
