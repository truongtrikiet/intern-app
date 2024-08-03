<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showAll() {
        $users = User::all();
        return view('admin.index', ['users' => $users]);
    }

    //sign in
    public function signinPage() {
        return view('auth.auth-boxed-signin');
    }

    //logic admin sign in
    public function signin(Request $request) {
        $credentials = $request -> only('email', 'password');

        if (Auth::attempt($credentials)) {
            $users = Auth::user();
            if ($users -> isAdmin()) {
                return redirect() -> route('/admin');
            }
                abort(404, 'Page not found.');
        }
        return back() -> withErrors([
            'email' => 'The email unavailable.'
        ]);
    }

}
