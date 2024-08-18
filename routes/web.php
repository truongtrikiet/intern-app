<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasswordController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Kernel;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserStatusMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


Route::get('/index', function (){
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});

//test Accessor - Attribute
Route::get('/home', [UserController::class, 'index']);


//sign in and sign up Logout //AUTH CONTROLLER
Route::get('/', [AuthController::class, 'signinPage'])->name('signinPage');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin.post');
Route::get('/signup', [AuthController::class, 'signupPage'])->name('signupPage');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//reset password CONTROLLER
Route::get('/recover-form', [PasswordController::class, 'recoverForm'])->name('recover.page');
Route::post('/recover', [PasswordController::class, 'recoverMail'])->name('recover.post');
Route::get('/reset-form/{token} ', [PasswordController::class, 'resetPasswordForm'])->name('reset.page');
Route::post('/reset-password', [PasswordController::class, 'resetPasswordPost'])->name('reset.password.post');


Route::middleware(['auth', 'user.status'])->group(function(){
    Route::get('/blog-app.grid', [BlogController::class, 'index'])->name('blog.index');
});

//admin page //ADMIN CONTROLLER
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', function(){
        if (Auth::user()->role === 'admin'){
            return redirect('/admin');
        }
        return view('blog-app.list');
    })->name('blog');

    Route::middleware('admin')->group(function(){
        Route::get('/admin', function(){
            return view('admin.index');
        })->name('admin.index');
    });

    //edit user
    Route::get('/user-manage', [AdminController::class, 'showUsers'])->name('user.manage');
    Route::get('/user-manage/{email}/edit', [AdminController::class, 'userEdit'])->name('user.edit');
    Route::post('/user-manage/{email}', [AdminController::class, 'userUpdate'])->name('user.update');

    //blog manage
    Route::get('/blog-manage', [AdminController::class, 'manageBlog'])->name('admin.blog.manage');
    Route::post('/blog-manage/{$id}', [AdminController::class, 'updateBlogStatus'])->name('admin.blog.update');
});


//profile //UserController
Route::middleware(['auth'])->group(function(){
    Route::get('/profile/{email}', [UserController::class, 'profilePage'])->name('profile.page');
    Route::post('/profile/{email}/update', [UserController::class, 'profileUpdate'])->name('profile.update');
});

//manage-page
//BLOG PAGE
Route::middleware('auth')->group(function () {
    Route::resource('blogs', BlogController::class);

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/list', [BlogController::class, 'list'])->name('blog.list');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
});


