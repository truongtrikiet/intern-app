<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Mail\UserStatusMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Enums\Status;


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
    public function userUpdate(UserUpdateRequest $request, $email) {
        $user = User::where('email', $email)->firstOrFail();

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->address = $request->input('address');
        $user->status = $request->input('status');
        $user->save();

        //sent mailhog
        if ($user->status == Status::approved->value) {
            Mail::to($user->email)->send(new UserStatusMail($user));
        }
        return redirect()->route('user.manage')->with('success', 'User update successfully and email sent if approved.');
    }


    //User update profile
    public function profilePage($email) {
        $user = User::where('email', $email)->firstOrFail();
        return view('user.user-profile', ['user' => $user]);
    }
    public function profileUpdate(ProfileUpdateRequest $request, $email) {
        
        $user = User::where('email', $email)->firstOrFail();

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->save();

        return redirect()->route('profile.page')->with('success', 'Updated successfully.');
    }
}
