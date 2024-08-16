<?php

namespace App\Http\Controllers;

use App\Mail\UserStatusMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\PasswordResetToken;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;

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
    public function signin(SignInRequest $request) {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
            return redirect()->route('admin.index');
            } else {
                $user = Auth::user();
                return redirect()->route('blog.index', compact('user'));
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
    public function signup(SignUpRequest $request) {

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => '(Optional)',
            'status' => 0,
            'role' => 'user',
        ]);
        
        Mail::to($user->email)->send(new WelcomeMail($user));
        return redirect()->route('signinPage')->with('success', 'Register successfully.');
    }
}
