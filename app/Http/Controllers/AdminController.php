<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Enums\Status;
use App\Http\Requests\UserUpdateRequest;
use App\Mail\UserStatusMail;
use Database\Seeders\BlogSeeder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Enum;
use App\Enums\BlogStatus;
use App\Models\Blog;


class AdminController extends Controller
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
        return view('user-by-admin.edit', ['user' => $user]);
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


    //Blog Manage
    public function manageBlog() {
        $blogs = Blog::all();
        return view('admin.blog-manage', ['blogs' => $blogs]);
    }
    public function updateBlogStatus(Request $request, Blog $blog) {
        $request->validate([
            'status_blog' => ['required', new Enum(BlogStatus::class)],
        ]);
        $blog->update([
            'status_blog' => $request->input('status_blog')
        ]);

        return redirect()->route('admin.blog.manage')->with('success', 'Blog status updated successfully.');
    }

}
