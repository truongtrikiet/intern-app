<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PasswordResetToken;
use App\Mail\PasswordResetMail;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\PasswordResetTokens;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;



class PasswordController extends Controller
{
    public function recoverForm() {
        return view('auth.auth-boxed-mail');
    }
    //logic recover
    public function recoverMail(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        PasswordResetTokens::updateOrCreate(
            ['email' => $request->input('email')],
            ['token' => $token, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        );

        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        Mail::to($user->email)->send(new PasswordResetMail($user, $token));
        return redirect()->back()->with('status', 'Password reset form has been sent!');
        
    }

    public function resetPasswordForm($token) {
        $tokenData = PasswordResetTokens::where('token', $token)->firstOrFail();
        $email = $tokenData->email;

        // dd($email);

        return view('auth.auth-boxed-password-reset', compact('token', 'email'));
    }
    public function resetPasswordPost(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users, email',
            'password' => 'required|string|min:8|regex:/^[a-zA-Z0-9~!@£¢#∞&*]+$/|confirmed',
            // 'password_confirmation' => 'required'
        ]);

        $updatePassword = PasswordResetTokens::where('email', $request->email)
                        ->where('token', $request->token)->first();

        if(!$updatePassword) {
            return redirect()->route('reset.page', ['token' => $request->token])->with('error', 'Invalid.');
        }

        // if ($request->input('new_password') !== $request->input('re_new_password')) {
        //     return redirect()->back()->withErrors(['new_password' => 'The new password does not match, please try again.']);
        // }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        PasswordResetTokens::where('email', $request->email)->delete();

        return redirect()->route('/')->with('status', 'Password has been reset, please sign in again.');
    }
}
