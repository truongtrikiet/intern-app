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

    public function showUsers() {
        $users = User::where('role', 'user')->get();
        return view('admin.user-manage', ['users' => $users]);
    }

    public function userEdit($email) {
        $user = User::where('email', $email)->firstOrFail();
        return view('user.edit', ['user' => $user]);
    }
    public function userUpdate(Request $request, $email) {
        $request->validate([
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'status' => 'required|in:0,1,2,3',
        ]);

        $user = User::where('email', $email)->firstOrFail();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->status = $request->input('status');
        $user->save();

        return redirect()->route('user.manage')->with('success', 'Update successfully.');
    }
}
