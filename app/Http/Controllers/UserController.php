<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    public function signupPage() {
        return view('auth.auth-boxed-singup');
    }
    public function signup(Request $request) {

        $validateData = $request -> validate([
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'email' => 'required|string|email|max:100|unique:users',
            function ($attribute, $value, $fail) {
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $fail('Email is invalid.');
                }
            },
            'password' => 'required|string|min:8|
            regax:/[A-Z]/
            |regax:/[a-z]/
            |regax/[0-9]/
            |regax:/[!@£#$%&*]/ ',
            'status' => 'required|integer', Rule::in([0, 1, 2, 3]),
        ]);

        $user = User::create([
            'first_name' => $validateData['first_name'],
            'last_name' => $validateData[('last_name')],
            'email' => $validateData[('email')],
            'password' => bcrypt($validateData[('password')]),
            'status' => $validateData[('status')],

        ]);
        return redirect() -> route('signin') -> with('success', 'Register successfully.');
    }
}
