<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //User update profile
    public function profilePage($email) {
        $user = User::where('email', $email)->firstOrFail();
        return view('user-by-admin.user-profile', ['user' => $user]);
    }
    public function profileUpdate(ProfileUpdateRequest $request, $email) {
        $user = User::where('email', $email)->firstOrFail();

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->address = $request->input('address');
        $user->save();

        return redirect()->route('profile.page', ['email' => $email])->with('success', 'Updated successfully.');
    }

}
